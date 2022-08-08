FROM node:10.0
USER node

# RUN mkdir -p /home/node/app/node_modules && chown -R node:node /home/node/app
RUN mkdir -p /home/node/app && chown -R node:node /home/node/app
RUN chmod -R 777 /home/node/app

WORKDIR /home/node/app


# COPY package*.json ./


COPY --chown=node:node / ./
RUN npm install
