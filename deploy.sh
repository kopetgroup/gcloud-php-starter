#!/bin/bash
echo "nama project: [ENTER]:"
read name
gcloud app deploy app.yaml --project $name