FROM node:14.0
USER node

# RUN mkdir -p /home/node/app/node_modules && chown -R node:node /home/node/app
RUN mkdir -p /home/node/app && chown -R node:node /home/node/app
RUN mkdir -p /home/node/app/data/db
RUN chmod -R 777 /home/node/app

WORKDIR /home/node/app


# COPY package*.json ./


COPY --chown=node:node /variable/ ./
RUN npm install

WORKDIR /home/node/app/client
RUN npm install 
WORKDIR /home/node/app

# COPY --chown=node:node . .
# EXPOSE 3000
