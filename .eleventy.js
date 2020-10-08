module.exports = function(eleventyConfig) {
  eleventyConfig.setTemplateFormats(['njk'])

  eleventyConfig.addNunjucksShortcode('sectionHeading', function (contentEn, contentEs, anchor) {
    return `
      <h3 class="flex items-center text-4xl sm:text-6xl font-bold mb-8">
        <span lang="en">${contentEn}</span>
        <span lang="es">${contentEs}</span>
        <a href="#" class="anchor opacity-1 pl-2" @click.prevent="scroll(${anchor})">#</a>
      </h3>
    `
  })

  eleventyConfig.addNunjucksShortcode('menuItem', function (textEn, textEs, anchor) {
    return `
      <li class="hidden lg:block px-4">
        <a href="#" id="${anchor}-button" class="uppercase font-bold"
          @click.prevent="scroll('${anchor}')">
          <span lang="en">${textEn}</span>
          <span lang="es">${textEs}</span>
        </a>
      </li>
    `
  })

  eleventyConfig.addPassthroughCopy('assets')
  eleventyConfig.addPassthroughCopy('robots.txt')
  eleventyConfig.addPassthroughCopy('googleeb7b01ca72467036.html')
}
