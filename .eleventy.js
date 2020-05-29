const fs = require('fs')

module.exports = function(eleventyConfig) {
  eleventyConfig.setTemplateFormats([
    'njk',
    'md',
  ])

  eleventyConfig.addPassthroughCopy('assets')
  eleventyConfig.addPassthroughCopy('manifest.json')
  eleventyConfig.addPassthroughCopy('service-worker.js')
  eleventyConfig.addPassthroughCopy('robots.txt')
  eleventyConfig.addPassthroughCopy('googleeb7b01ca72467036.html')

  const replaceAll = (str, find, replace) => str.replace(new RegExp(find, 'g'), replace)

  eleventyConfig.addShortcode('postsList', function() {
    const posts = []
    fs.readdirSync('./posts/').forEach(file => {
      if (file.endsWith('.md') && file !== 'index.md') {
        posts.push(file.substr(0, file.length - 3))
      }
    })
    return `<ul>${posts.map(post => `<li><a href="/posts/${post}">${replaceAll(post, '-', ' ')}</a></li>`).join('')}<ul>`
  })

  return {
    markdownTemplateEngine: false
  }
}
