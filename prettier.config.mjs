const config = {
	useTabs: true,
	tabWidth: 2,
	braceStyle: '1tbs',
	semi: false,
	endOfLine: 'lf',
	singleQuote: true,
	trailingComma: 'none',
	trailingCommaPHP: false,
	xmlQuoteAttributes: 'single',
	xmlWhitespaceSensitivity: 'ignore',

	plugins: ['@prettier/plugin-php', '@prettier/plugin-xml']
}

export default config
