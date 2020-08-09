const transforms = require('./utils/transforms.js')
const menuItem = require('./utils/shortcodes/menu-item.js')
const homepageLink = require('./utils/shortcodes/homepage-link.js')
const sectionHeading = require('./utils/shortcodes/section-heading.js')
const pageTransition = require('./utils/shortcodes/page-transition.js')

module.exports = function (eleventyConfig) {

  eleventyConfig.addPassthroughCopy("src/static")
  eleventyConfig.setUseGitIgnore(false)

  Object.keys(transforms).forEach((transformName) => {
    eleventyConfig.addTransform(transformName, transforms[transformName])
  })

  eleventyConfig.addShortcode("menuItem", function (anchor, section) {
    return menuItem.fn(anchor, section)
  })
  eleventyConfig.addShortcode("homepageLink", function (heading, subheading, color, section, margin = 'mb-4') {
    return homepageLink.fn(heading, subheading, color, section, margin)
  })
  eleventyConfig.addShortcode("sectionHeading", function (heading, section) {
    return sectionHeading.fn(heading, section)
  })
  eleventyConfig.addShortcode("pageTransition", function (page, section) {
    return pageTransition.fn(page, section)
  })

  return {
    dir: {
      input: "src/",
      output: "dist",
      includes: "_includes",
      layouts: "_layouts"
    },
    templateFormats: ["html", "md", "njk"],
    htmlTemplateEngine: "njk",
    passthroughFileCopy: true
  }
}
