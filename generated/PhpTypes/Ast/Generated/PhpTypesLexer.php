<?php

/*
 * Generated from C:/Users/rgott/Projects/php-types-ast\PhpTypes.g4 by ANTLR 4.10.1
 */

namespace PhpTypes\Ast\Generated {
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\LexerATNSimulator;
	use Antlr\Antlr4\Runtime\Lexer;
	use Antlr\Antlr4\Runtime\CharStream;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\VocabularyImpl;

	final class PhpTypesLexer extends Lexer
	{
		public const IDENTIFIER = 1, IDENTIFIER_START = 2, IDENTIFIER_PART = 3, 
               STRING_LITERAL = 4, CURLY_ARRAY = 5, OPEN_CALLABLE = 6, CLOSE_CALLABLE = 7, 
               LOWERCASE_LETTER = 8, UPPERCASE_LETTER = 9, LETTER = 10, 
               INTEGER = 11, NON_ZERO_DIGIT = 12, DIGIT = 13, LT = 14, GT = 15, 
               UNDERSCORE = 16, COMMA = 17, DASH = 18, CURLY_CLOSE = 19, 
               ZERO = 20, SQUOTE = 21, DQUOTE = 22, PIPE = 23, AMPERSAND = 24, 
               LPAREN = 25, RPAREN = 26, COLON = 27, EQUAL = 28, QUESTION = 29;

		/**
		 * @var array<string>
		 */
		public const CHANNEL_NAMES = [
			'DEFAULT_TOKEN_CHANNEL', 'HIDDEN'
		];

		/**
		 * @var array<string>
		 */
		public const MODE_NAMES = [
			'DEFAULT_MODE'
		];

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'IDENTIFIER', 'IDENTIFIER_START', 'IDENTIFIER_PART', 'STRING_LITERAL', 
			'CURLY_ARRAY', 'OPEN_CALLABLE', 'CLOSE_CALLABLE', 'LOWERCASE_LETTER', 
			'UPPERCASE_LETTER', 'LETTER', 'INTEGER', 'NON_ZERO_DIGIT', 'DIGIT', 'LT', 
			'GT', 'UNDERSCORE', 'COMMA', 'DASH', 'CURLY_CLOSE', 'ZERO', 'SQUOTE', 
			'DQUOTE', 'PIPE', 'AMPERSAND', 'LPAREN', 'RPAREN', 'COLON', 'EQUAL', 
			'QUESTION'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, null, null, null, null, "'array{'", "'callable('", "'):'", null, 
		    null, null, null, null, null, "'<'", "'>'", "'_'", "','", "'-'", "'}'", 
		    "'0'", "'''", "'\"'", "'|'", "'&'", "'('", "')'", "':'", "'='", "'?'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, "IDENTIFIER", "IDENTIFIER_START", "IDENTIFIER_PART", "STRING_LITERAL", 
		    "CURLY_ARRAY", "OPEN_CALLABLE", "CLOSE_CALLABLE", "LOWERCASE_LETTER", 
		    "UPPERCASE_LETTER", "LETTER", "INTEGER", "NON_ZERO_DIGIT", "DIGIT", 
		    "LT", "GT", "UNDERSCORE", "COMMA", "DASH", "CURLY_CLOSE", "ZERO", 
		    "SQUOTE", "DQUOTE", "PIPE", "AMPERSAND", "LPAREN", "RPAREN", "COLON", 
		    "EQUAL", "QUESTION"
		];

		private const SERIALIZED_ATN =
			[4, 0, 29, 175, 6, -1, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 
		    2, 4, 7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 
		    7, 9, 2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 
		    7, 14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 
		    19, 7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 
		    2, 24, 7, 24, 2, 25, 7, 25, 2, 26, 7, 26, 2, 27, 7, 27, 2, 28, 7, 
		    28, 1, 0, 1, 0, 5, 0, 62, 8, 0, 10, 0, 12, 0, 65, 9, 0, 1, 1, 1, 1, 
		    3, 1, 69, 8, 1, 1, 2, 1, 2, 1, 2, 1, 2, 3, 2, 75, 8, 2, 1, 3, 1, 3, 
		    5, 3, 79, 8, 3, 10, 3, 12, 3, 82, 9, 3, 1, 3, 1, 3, 1, 3, 1, 3, 5, 
		    3, 88, 8, 3, 10, 3, 12, 3, 91, 9, 3, 1, 3, 1, 3, 3, 3, 95, 8, 3, 1, 
		    4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 5, 1, 5, 1, 5, 1, 5, 1, 
		    5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 6, 1, 6, 1, 6, 1, 7, 1, 7, 1, 
		    8, 1, 8, 1, 9, 1, 9, 3, 9, 123, 8, 9, 1, 10, 3, 10, 126, 8, 10, 1, 
		    10, 1, 10, 5, 10, 130, 8, 10, 10, 10, 12, 10, 133, 9, 10, 1, 10, 3, 
		    10, 136, 8, 10, 1, 11, 1, 11, 1, 12, 1, 12, 3, 12, 142, 8, 12, 1, 
		    13, 1, 13, 1, 14, 1, 14, 1, 15, 1, 15, 1, 16, 1, 16, 1, 17, 1, 17, 
		    1, 18, 1, 18, 1, 19, 1, 19, 1, 20, 1, 20, 1, 21, 1, 21, 1, 22, 1, 
		    22, 1, 23, 1, 23, 1, 24, 1, 24, 1, 25, 1, 25, 1, 26, 1, 26, 1, 27, 
		    1, 27, 1, 28, 1, 28, 0, 0, 29, 1, 1, 3, 2, 5, 3, 7, 4, 9, 5, 11, 6, 
		    13, 7, 15, 8, 17, 9, 19, 10, 21, 11, 23, 12, 25, 13, 27, 14, 29, 15, 
		    31, 16, 33, 17, 35, 18, 37, 19, 39, 20, 41, 21, 43, 22, 45, 23, 47, 
		    24, 49, 25, 51, 26, 53, 27, 55, 28, 57, 29, 1, 0, 5, 1, 0, 39, 39, 
		    1, 0, 34, 34, 1, 0, 97, 122, 1, 0, 65, 90, 1, 0, 49, 57, 187, 0, 1, 
		    1, 0, 0, 0, 0, 3, 1, 0, 0, 0, 0, 5, 1, 0, 0, 0, 0, 7, 1, 0, 0, 0, 
		    0, 9, 1, 0, 0, 0, 0, 11, 1, 0, 0, 0, 0, 13, 1, 0, 0, 0, 0, 15, 1, 
		    0, 0, 0, 0, 17, 1, 0, 0, 0, 0, 19, 1, 0, 0, 0, 0, 21, 1, 0, 0, 0, 
		    0, 23, 1, 0, 0, 0, 0, 25, 1, 0, 0, 0, 0, 27, 1, 0, 0, 0, 0, 29, 1, 
		    0, 0, 0, 0, 31, 1, 0, 0, 0, 0, 33, 1, 0, 0, 0, 0, 35, 1, 0, 0, 0, 
		    0, 37, 1, 0, 0, 0, 0, 39, 1, 0, 0, 0, 0, 41, 1, 0, 0, 0, 0, 43, 1, 
		    0, 0, 0, 0, 45, 1, 0, 0, 0, 0, 47, 1, 0, 0, 0, 0, 49, 1, 0, 0, 0, 
		    0, 51, 1, 0, 0, 0, 0, 53, 1, 0, 0, 0, 0, 55, 1, 0, 0, 0, 0, 57, 1, 
		    0, 0, 0, 1, 59, 1, 0, 0, 0, 3, 68, 1, 0, 0, 0, 5, 74, 1, 0, 0, 0, 
		    7, 94, 1, 0, 0, 0, 9, 96, 1, 0, 0, 0, 11, 103, 1, 0, 0, 0, 13, 113, 
		    1, 0, 0, 0, 15, 116, 1, 0, 0, 0, 17, 118, 1, 0, 0, 0, 19, 122, 1, 
		    0, 0, 0, 21, 135, 1, 0, 0, 0, 23, 137, 1, 0, 0, 0, 25, 141, 1, 0, 
		    0, 0, 27, 143, 1, 0, 0, 0, 29, 145, 1, 0, 0, 0, 31, 147, 1, 0, 0, 
		    0, 33, 149, 1, 0, 0, 0, 35, 151, 1, 0, 0, 0, 37, 153, 1, 0, 0, 0, 
		    39, 155, 1, 0, 0, 0, 41, 157, 1, 0, 0, 0, 43, 159, 1, 0, 0, 0, 45, 
		    161, 1, 0, 0, 0, 47, 163, 1, 0, 0, 0, 49, 165, 1, 0, 0, 0, 51, 167, 
		    1, 0, 0, 0, 53, 169, 1, 0, 0, 0, 55, 171, 1, 0, 0, 0, 57, 173, 1, 
		    0, 0, 0, 59, 63, 3, 3, 1, 0, 60, 62, 3, 5, 2, 0, 61, 60, 1, 0, 0, 
		    0, 62, 65, 1, 0, 0, 0, 63, 61, 1, 0, 0, 0, 63, 64, 1, 0, 0, 0, 64, 
		    2, 1, 0, 0, 0, 65, 63, 1, 0, 0, 0, 66, 69, 3, 19, 9, 0, 67, 69, 3, 
		    31, 15, 0, 68, 66, 1, 0, 0, 0, 68, 67, 1, 0, 0, 0, 69, 4, 1, 0, 0, 
		    0, 70, 75, 3, 19, 9, 0, 71, 75, 3, 25, 12, 0, 72, 75, 3, 31, 15, 0, 
		    73, 75, 3, 35, 17, 0, 74, 70, 1, 0, 0, 0, 74, 71, 1, 0, 0, 0, 74, 
		    72, 1, 0, 0, 0, 74, 73, 1, 0, 0, 0, 75, 6, 1, 0, 0, 0, 76, 80, 3, 
		    41, 20, 0, 77, 79, 8, 0, 0, 0, 78, 77, 1, 0, 0, 0, 79, 82, 1, 0, 0, 
		    0, 80, 78, 1, 0, 0, 0, 80, 81, 1, 0, 0, 0, 81, 83, 1, 0, 0, 0, 82, 
		    80, 1, 0, 0, 0, 83, 84, 3, 41, 20, 0, 84, 95, 1, 0, 0, 0, 85, 89, 
		    3, 43, 21, 0, 86, 88, 8, 1, 0, 0, 87, 86, 1, 0, 0, 0, 88, 91, 1, 0, 
		    0, 0, 89, 87, 1, 0, 0, 0, 89, 90, 1, 0, 0, 0, 90, 92, 1, 0, 0, 0, 
		    91, 89, 1, 0, 0, 0, 92, 93, 3, 43, 21, 0, 93, 95, 1, 0, 0, 0, 94, 
		    76, 1, 0, 0, 0, 94, 85, 1, 0, 0, 0, 95, 8, 1, 0, 0, 0, 96, 97, 5, 
		    97, 0, 0, 97, 98, 5, 114, 0, 0, 98, 99, 5, 114, 0, 0, 99, 100, 5, 
		    97, 0, 0, 100, 101, 5, 121, 0, 0, 101, 102, 5, 123, 0, 0, 102, 10, 
		    1, 0, 0, 0, 103, 104, 5, 99, 0, 0, 104, 105, 5, 97, 0, 0, 105, 106, 
		    5, 108, 0, 0, 106, 107, 5, 108, 0, 0, 107, 108, 5, 97, 0, 0, 108, 
		    109, 5, 98, 0, 0, 109, 110, 5, 108, 0, 0, 110, 111, 5, 101, 0, 0, 
		    111, 112, 5, 40, 0, 0, 112, 12, 1, 0, 0, 0, 113, 114, 5, 41, 0, 0, 
		    114, 115, 5, 58, 0, 0, 115, 14, 1, 0, 0, 0, 116, 117, 7, 2, 0, 0, 
		    117, 16, 1, 0, 0, 0, 118, 119, 7, 3, 0, 0, 119, 18, 1, 0, 0, 0, 120, 
		    123, 3, 15, 7, 0, 121, 123, 3, 17, 8, 0, 122, 120, 1, 0, 0, 0, 122, 
		    121, 1, 0, 0, 0, 123, 20, 1, 0, 0, 0, 124, 126, 3, 35, 17, 0, 125, 
		    124, 1, 0, 0, 0, 125, 126, 1, 0, 0, 0, 126, 127, 1, 0, 0, 0, 127, 
		    131, 3, 23, 11, 0, 128, 130, 3, 25, 12, 0, 129, 128, 1, 0, 0, 0, 130, 
		    133, 1, 0, 0, 0, 131, 129, 1, 0, 0, 0, 131, 132, 1, 0, 0, 0, 132, 
		    136, 1, 0, 0, 0, 133, 131, 1, 0, 0, 0, 134, 136, 3, 39, 19, 0, 135, 
		    125, 1, 0, 0, 0, 135, 134, 1, 0, 0, 0, 136, 22, 1, 0, 0, 0, 137, 138, 
		    7, 4, 0, 0, 138, 24, 1, 0, 0, 0, 139, 142, 3, 39, 19, 0, 140, 142, 
		    3, 23, 11, 0, 141, 139, 1, 0, 0, 0, 141, 140, 1, 0, 0, 0, 142, 26, 
		    1, 0, 0, 0, 143, 144, 5, 60, 0, 0, 144, 28, 1, 0, 0, 0, 145, 146, 
		    5, 62, 0, 0, 146, 30, 1, 0, 0, 0, 147, 148, 5, 95, 0, 0, 148, 32, 
		    1, 0, 0, 0, 149, 150, 5, 44, 0, 0, 150, 34, 1, 0, 0, 0, 151, 152, 
		    5, 45, 0, 0, 152, 36, 1, 0, 0, 0, 153, 154, 5, 125, 0, 0, 154, 38, 
		    1, 0, 0, 0, 155, 156, 5, 48, 0, 0, 156, 40, 1, 0, 0, 0, 157, 158, 
		    5, 39, 0, 0, 158, 42, 1, 0, 0, 0, 159, 160, 5, 34, 0, 0, 160, 44, 
		    1, 0, 0, 0, 161, 162, 5, 124, 0, 0, 162, 46, 1, 0, 0, 0, 163, 164, 
		    5, 38, 0, 0, 164, 48, 1, 0, 0, 0, 165, 166, 5, 40, 0, 0, 166, 50, 
		    1, 0, 0, 0, 167, 168, 5, 41, 0, 0, 168, 52, 1, 0, 0, 0, 169, 170, 
		    5, 58, 0, 0, 170, 54, 1, 0, 0, 0, 171, 172, 5, 61, 0, 0, 172, 56, 
		    1, 0, 0, 0, 173, 174, 5, 63, 0, 0, 174, 58, 1, 0, 0, 0, 12, 0, 63, 
		    68, 74, 80, 89, 94, 122, 125, 131, 135, 141, 0];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;
		public function __construct(CharStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new LexerATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize(): void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.10.1', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public static function vocabulary(): Vocabulary
		{
			static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
		}

		public function getGrammarFileName(): string
		{
			return 'PhpTypes.g4';
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		/**
		 * @return array<string>
		 */
		public function getChannelNames(): array
		{
			return self::CHANNEL_NAMES;
		}

		/**
		 * @return array<string>
		 */
		public function getModeNames(): array
		{
			return self::MODE_NAMES;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
		{
			return self::vocabulary();
		}
	}
}