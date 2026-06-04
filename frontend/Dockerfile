FROM node:lts-alpine
WORKDIR /app
COPY package*.json ./

RUN npm install
RUN npm install vue-router@latest
RUN npm install bootstrap @popperjs/core
COPY . .
CMD ["npm", "run", "dev", "--", "--host"]