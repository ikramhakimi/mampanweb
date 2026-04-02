#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
cd "$ROOT_DIR"

FILE_LIST="$(mktemp)"
find . -type f \( -name '*.php' -o -name '*.js' \) ! -path './.git/*' | sort > "$FILE_LIST"

if [[ ! -s "$FILE_LIST" ]]; then
  echo "No PHP/JS files found."
  rm -f "$FILE_LIST"
  exit 0
fi

has_issues=0

echo "Checking tabs and 2-space indentation..."
while IFS= read -r file; do
  if ! awk '
    index($0, "\t") {
      printf "%s:%d: tab character found\n", FILENAME, NR;
      bad = 1;
    }
    $0 ~ /^ +[^ ]/ && $0 !~ /^ \*/ {
      match($0, /^ +/);
      if (RLENGTH % 2 != 0) {
        printf "%s:%d: odd indentation (%d spaces)\n", FILENAME, NR, RLENGTH;
        bad = 1;
      }
    }
    END { exit bad ? 1 : 0 }
  ' "$file"; then
    has_issues=1
  fi
done < "$FILE_LIST"

echo "Checking PHP syntax..."
while IFS= read -r php_file; do
  case "$php_file" in
    *.php)
      if ! php -l "$php_file" >/dev/null; then
        has_issues=1
      fi
      ;;
  esac
done < "$FILE_LIST"

rm -f "$FILE_LIST"

if [[ $has_issues -ne 0 ]]; then
  echo ""
  echo "Style check failed."
  exit 1
fi

echo ""
echo "Style check passed."
