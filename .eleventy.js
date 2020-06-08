const fs = require('fs')
const path = require('path')

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
    const dir = './posts/'
    fs.readdirSync(dir).forEach(fileName => {
      if (fileName.endsWith('.md') && fileName !== 'index.md') {
        const name = fileName.substr(0, fileName.length - 3)
        const stats = fs.statSync(path.join(dir, fileName))
        posts.push({ name, stats })
      }
    })

    // stats.mtime => modified date, stats.birthdate => created date
    posts.sort((a,b) => b.stats.mtime.getTime() - a.stats.mtime.getTime())

    return `<ul>${posts.map(post => `<li><a href="/posts/${post.name}">${replaceAll(post.name, '-', ' ')}</a></li>`).join('')}<ul>`
  })

  return {
    markdownTemplateEngine: false
  }
}
