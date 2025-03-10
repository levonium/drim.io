# drim.io

My personal website

We don't use any framework for this website, just simple PHP files for local development. Once we're dne and ready to deploy, we run an `npm` script to build the static HTML webpage. The script also copies all necessary files into `dist` directory which can be deployed anywhere.

```sh
# development: just css, JavaScript is in `assets/app.js` (no build tools)
npm run css-watch

# build for deployment
npm run build
```
