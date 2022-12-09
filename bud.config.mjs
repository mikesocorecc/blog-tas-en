// @ts-check

/**
 * Build configuration
 *
 * @see {@link https://bud.js.org/guides/configure}
 * @param {import('@roots/bud').Bud} app
 */
export default async (app) => {
  app
    /**
     * Application entrypoints
     */
    .entry({
      app: ["@scripts/app", "@styles/app"],
      editor: ["@scripts/editor", "@styles/editor"],
    })

    /**
     * Directory contents to be included in the compilation
     */
    .assets(["images"])

    /**
     * Matched files trigger a page reload when modified
     */
    .watch(["resources/views/**/*", "app/**/*", "resources/views/components/**/*"])

    /**
     * Proxy origin (`WP_HOME`)
     */
    .proxy("http://blog-es.test")

    /**
     * Development origin
     */
    .serve("http://localhost:3000")

    /**
     * URI of the `public` directory
     */
    // .setPublicPath("/blog-es/wp-content/themes/blog-tas/public/")
    .setPublicPath("/wp-content/themes/blog-tas-en/public/")

    /**
     * Generate WordPress `theme.json`
     *
     * @note This overwrites `theme.json` on every build.
     */
    .wpjson
      .settings({
        color: {
          custom: false,
          customGradient: false,
          defaultPalette: false,
          defaultGradients: false,
        },
        custom: {
          spacing: {},
          typography: {
            'font-size': {},
            'line-height': {},
          },
        },
        spacing: {
          padding: true,
          units: ['px', '%', 'em', 'rem', 'vw', 'vh'],
        },
        typography: {
          customFontSize: false,
        },
      })
      .useTailwindColors()
      .useTailwindFontFamily()
      .useTailwindFontSize()
      .enable()
};
