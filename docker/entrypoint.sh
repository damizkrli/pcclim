#!/usr/bin/env bash
set -e

# Warm-up du cache en prod
APP_ENV=${APP_ENV:-prod}
if [ "$APP_ENV" = "prod" ]; then
  php bin/console cache:warmup --no-debug --env=prod
fi

exec "$@"
