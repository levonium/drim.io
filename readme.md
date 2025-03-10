# drim.io

My personal website

No framework, just simple PHP files for local development.

```sh
# development: just css, no build process for JavaScript
npm run css-watch
```

Once done and ready to deploy, run:

```sh
# css
npm run css-build

# bundle for deployment
npm run build
```

This will run a PHP script that will generate a static `index.html` file in the `dist` directory.

It will also copy all necessary files to `dist`.

Then you just drag and drop the dist directory in Netlify dashboard :-)
