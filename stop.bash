#!/bin/bash

# Colors and styles for the styled message
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No color

# Check if the -v parameter is provided
if [[ "$@" == *"-v"* ]]; then
    # Stop Docker Compose services with -v parameter
    if docker compose down -v; then
        echo -e "${GREEN}Docker Compose services stopped successfully with volumes removed.${NC}"
    else
        echo -e "${RED}Error stopping Docker Compose services.${NC}"
        exit 1
    fi
else
    # Stop Docker Compose services without -v parameter
    if docker compose down; then
        echo -e "${GREEN}Docker Compose services stopped successfully.${NC}"
    else
        echo -e "${RED}Error stopping Docker Compose services.${NC}"
        exit 1
    fi
fi

# Display a styled end message
echo -e "${YELLOW}-------------------------------------------------${NC}"
echo -e "${YELLOW} Your application is now closed! ${NC}"
echo -e "${YELLOW} See you again ! °u° ${NC}"
echo -e "${YELLOW}-------------------------------------------------${NC}"
