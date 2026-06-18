FROM node:lts-alpine
WORKDIR /app
COPY package*.json ./

RUN npm install
RUN npm install vue-router@latest
RUN npm install axios
RUN npm install js-cookie
RUN npm install bootstrap @popperjs/core
COPY . .
CMD ["sudo", "chmod", "777", "package.json"]
CMD ["npm", "run", "dev", "--", "--host"]