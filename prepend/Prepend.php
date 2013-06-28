class PrependHooks {
	static public function prependContent(&$parser, &$text, &$strip_state) {
		$text = "(Prepended text here)\n\n" . $text;
		return true;
	}
}
$wgHooks['ParserBeforeStrip'][] = 'PrependHooks::prependContent';
