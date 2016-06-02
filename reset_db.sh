#!/bin/bash

ENV=${1:-development}

echo "$ENV"

if [ "$ENV" = "production" ]; then
    echo "DANGEROUS!!!!!!!!!!!!!!!!"
    exit
fi

abspathdir=$(cd $(dirname $0) && pwd)
pushd ${abspathdir}

echo "===========================================";
echo " Migration (down)";
echo "-------------------------------------------";
FUEL_ENV=$ENV php oil refine migrate:down -v=0 --all

echo "===========================================";
echo "Migration (up)";
echo "-------------------------------------------";
FUEL_ENV=$ENV php oil refine migrate

echo "===========================================";
echo "Initial Data Inport";
echo "-------------------------------------------";
FUEL_ENV=$ENV php oil refine seed:all

popd
