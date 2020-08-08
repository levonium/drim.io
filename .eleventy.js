const filters = require('./utils/filters.js')
const transforms = require('./utils/transforms.js')
const collections = require('./utils/collections.js')
const homepageLink = require('./utils/shortcodes/homepage-link.js')
const sectionHeader = require('./utils/shortcodes/section-header.js')

module.exports = function (eleventyConfig) {
  // Folders to copy to build dir (See. 1.1)
  eleventyConfig.addPassthroughCopy("src/static");

  // Filters
  Object.keys(filters).forEach((filterName) => {
    eleventyConfig.addFilter(filterName, filters[filterName])
  })

  // Transforms
  Object.keys(transforms).forEach((transformName) => {
    eleventyConfig.addTransform(transformName, transforms[transformName])
  })

  // Collections
  Object.keys(collections).forEach((collectionName) => {
    eleventyConfig.addCollection(collectionName, collections[collectionName])
  })

  // This allows Eleventy to watch for file changes during local development.
  eleventyConfig.setUseGitIgnore(false);

  // Shortcodes
  eleventyConfig.addShortcode("homepageLink", function (heading, subheading, color, section, margin = 'mb-4') {
    return homepageLink.fn(heading, subheading, color, section, margin)
  });
  eleventyConfig.addShortcode("sectionHeader", function (heading) {
    return sectionHeader.fn(heading)
  });
  eleventyConfig.addShortcode("pageTransition", function (page, section) {
    return `
      x-show="${section} === '${page}'"
      x-transition:enter="transition ease-out duration-300"
      x-transition:enter-start="opacity-0 transform scale-90"
      x-transition:enter-end="opacity-100 transform scale-100"
      x-transition:leave="transition ease-in duration-300"
      x-transition:leave-start="opacity-100 transform scale-100"
      x-transition:leave-end="opacity-0 transform scale-90"
    `
  });

  return {
    dir: {
      input: "src/",
      output: "dist",
      includes: "_includes",
      layouts: "_layouts"
    },
    templateFormats: ["html", "md", "njk"],
    htmlTemplateEngine: "njk",

    // 1.1 Enable eleventy to pass dirs specified above
    passthroughFileCopy: true
  };
};
