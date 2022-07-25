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
		public const INTEGER = 1, NON_ZERO_DIGIT = 2, DIGIT = 3, IDENTIFIER = 4, 
               IDENTIFIER_START = 5, IDENTIFIER_PART = 6, STRING_LITERAL = 7, 
               CURLY_ARRAY = 8, OPEN_CALLABLE = 9, CLOSE_CALLABLE = 10, 
               LOWERCASE_LETTER = 11, UPPERCASE_LETTER = 12, LETTER = 13, 
               LT = 14, GT = 15, UNDERSCORE = 16, COMMA = 17, DASH = 18, 
               CURLY_CLOSE = 19, ZERO = 20, SQUOTE = 21, DQUOTE = 22, PIPE = 23, 
               AMPERSAND = 24, LPAREN = 25, RPAREN = 26, COLON = 27, EQUAL = 28, 
               QUESTION = 29;

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
			'INTEGER', 'NON_ZERO_DIGIT', 'DIGIT', 'IDENTIFIER', 'IDENTIFIER_START', 
			'IDENTIFIER_PART', 'STRING_LITERAL', 'CURLY_ARRAY', 'OPEN_CALLABLE', 
			'CLOSE_CALLABLE', 'LOWERCASE_LETTER', 'UPPERCASE_LETTER', 'LETTER', 'LT', 
			'GT', 'UNDERSCORE', 'COMMA', 'DASH', 'CURLY_CLOSE', 'ZERO', 'SQUOTE', 
			'DQUOTE', 'PIPE', 'AMPERSAND', 'LPAREN', 'RPAREN', 'COLON', 'EQUAL', 
			'QUESTION'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, null, null, null, null, null, null, null, "'array{'", "'callable('", 
		    "'):'", null, null, null, "'<'", "'>'", "'_'", "','", "'-'", "'}'", 
		    "'0'", "'''", "'\"'", "'|'", "'&'", "'('", "')'", "':'", "'='", "'?'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, "INTEGER", "NON_ZERO_DIGIT", "DIGIT", "IDENTIFIER", "IDENTIFIER_START", 
		    "IDENTIFIER_PART", "STRING_LITERAL", "CURLY_ARRAY", "OPEN_CALLABLE", 
		    "CLOSE_CALLABLE", "LOWERCASE_LETTER", "UPPERCASE_LETTER", "LETTER", 
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
		    28, 1, 0, 3, 0, 61, 8, 0, 1, 0, 1, 0, 5, 0, 65, 8, 0, 10, 0, 12, 0, 
		    68, 9, 0, 1, 0, 3, 0, 71, 8, 0, 1, 1, 1, 1, 1, 2, 1, 2, 3, 2, 77, 
		    8, 2, 1, 3, 1, 3, 5, 3, 81, 8, 3, 10, 3, 12, 3, 84, 9, 3, 1, 4, 1, 
		    4, 3, 4, 88, 8, 4, 1, 5, 1, 5, 1, 5, 1, 5, 3, 5, 94, 8, 5, 1, 6, 1, 
		    6, 5, 6, 98, 8, 6, 10, 6, 12, 6, 101, 9, 6, 1, 6, 1, 6, 1, 6, 1, 6, 
		    5, 6, 107, 8, 6, 10, 6, 12, 6, 110, 9, 6, 1, 6, 1, 6, 3, 6, 114, 8, 
		    6, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 8, 1, 8, 1, 8, 1, 
		    8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 9, 1, 9, 1, 9, 1, 10, 1, 
		    10, 1, 11, 1, 11, 1, 12, 1, 12, 3, 12, 142, 8, 12, 1, 13, 1, 13, 1, 
		    14, 1, 14, 1, 15, 1, 15, 1, 16, 1, 16, 1, 17, 1, 17, 1, 18, 1, 18, 
		    1, 19, 1, 19, 1, 20, 1, 20, 1, 21, 1, 21, 1, 22, 1, 22, 1, 23, 1, 
		    23, 1, 24, 1, 24, 1, 25, 1, 25, 1, 26, 1, 26, 1, 27, 1, 27, 1, 28, 
		    1, 28, 0, 0, 29, 1, 1, 3, 2, 5, 3, 7, 4, 9, 5, 11, 6, 13, 7, 15, 8, 
		    17, 9, 19, 10, 21, 11, 23, 12, 25, 13, 27, 14, 29, 15, 31, 16, 33, 
		    17, 35, 18, 37, 19, 39, 20, 41, 21, 43, 22, 45, 23, 47, 24, 49, 25, 
		    51, 26, 53, 27, 55, 28, 57, 29, 1, 0, 5, 1, 0, 49, 57, 1, 0, 39, 39, 
		    1, 0, 34, 34, 1, 0, 97, 122, 1, 0, 65, 90, 187, 0, 1, 1, 0, 0, 0, 
		    0, 3, 1, 0, 0, 0, 0, 5, 1, 0, 0, 0, 0, 7, 1, 0, 0, 0, 0, 9, 1, 0, 
		    0, 0, 0, 11, 1, 0, 0, 0, 0, 13, 1, 0, 0, 0, 0, 15, 1, 0, 0, 0, 0, 
		    17, 1, 0, 0, 0, 0, 19, 1, 0, 0, 0, 0, 21, 1, 0, 0, 0, 0, 23, 1, 0, 
		    0, 0, 0, 25, 1, 0, 0, 0, 0, 27, 1, 0, 0, 0, 0, 29, 1, 0, 0, 0, 0, 
		    31, 1, 0, 0, 0, 0, 33, 1, 0, 0, 0, 0, 35, 1, 0, 0, 0, 0, 37, 1, 0, 
		    0, 0, 0, 39, 1, 0, 0, 0, 0, 41, 1, 0, 0, 0, 0, 43, 1, 0, 0, 0, 0, 
		    45, 1, 0, 0, 0, 0, 47, 1, 0, 0, 0, 0, 49, 1, 0, 0, 0, 0, 51, 1, 0, 
		    0, 0, 0, 53, 1, 0, 0, 0, 0, 55, 1, 0, 0, 0, 0, 57, 1, 0, 0, 0, 1, 
		    70, 1, 0, 0, 0, 3, 72, 1, 0, 0, 0, 5, 76, 1, 0, 0, 0, 7, 78, 1, 0, 
		    0, 0, 9, 87, 1, 0, 0, 0, 11, 93, 1, 0, 0, 0, 13, 113, 1, 0, 0, 0, 
		    15, 115, 1, 0, 0, 0, 17, 122, 1, 0, 0, 0, 19, 132, 1, 0, 0, 0, 21, 
		    135, 1, 0, 0, 0, 23, 137, 1, 0, 0, 0, 25, 141, 1, 0, 0, 0, 27, 143, 
		    1, 0, 0, 0, 29, 145, 1, 0, 0, 0, 31, 147, 1, 0, 0, 0, 33, 149, 1, 
		    0, 0, 0, 35, 151, 1, 0, 0, 0, 37, 153, 1, 0, 0, 0, 39, 155, 1, 0, 
		    0, 0, 41, 157, 1, 0, 0, 0, 43, 159, 1, 0, 0, 0, 45, 161, 1, 0, 0, 
		    0, 47, 163, 1, 0, 0, 0, 49, 165, 1, 0, 0, 0, 51, 167, 1, 0, 0, 0, 
		    53, 169, 1, 0, 0, 0, 55, 171, 1, 0, 0, 0, 57, 173, 1, 0, 0, 0, 59, 
		    61, 3, 35, 17, 0, 60, 59, 1, 0, 0, 0, 60, 61, 1, 0, 0, 0, 61, 62, 
		    1, 0, 0, 0, 62, 66, 3, 3, 1, 0, 63, 65, 3, 5, 2, 0, 64, 63, 1, 0, 
		    0, 0, 65, 68, 1, 0, 0, 0, 66, 64, 1, 0, 0, 0, 66, 67, 1, 0, 0, 0, 
		    67, 71, 1, 0, 0, 0, 68, 66, 1, 0, 0, 0, 69, 71, 3, 39, 19, 0, 70, 
		    60, 1, 0, 0, 0, 70, 69, 1, 0, 0, 0, 71, 2, 1, 0, 0, 0, 72, 73, 7, 
		    0, 0, 0, 73, 4, 1, 0, 0, 0, 74, 77, 3, 39, 19, 0, 75, 77, 3, 3, 1, 
		    0, 76, 74, 1, 0, 0, 0, 76, 75, 1, 0, 0, 0, 77, 6, 1, 0, 0, 0, 78, 
		    82, 3, 9, 4, 0, 79, 81, 3, 11, 5, 0, 80, 79, 1, 0, 0, 0, 81, 84, 1, 
		    0, 0, 0, 82, 80, 1, 0, 0, 0, 82, 83, 1, 0, 0, 0, 83, 8, 1, 0, 0, 0, 
		    84, 82, 1, 0, 0, 0, 85, 88, 3, 25, 12, 0, 86, 88, 3, 31, 15, 0, 87, 
		    85, 1, 0, 0, 0, 87, 86, 1, 0, 0, 0, 88, 10, 1, 0, 0, 0, 89, 94, 3, 
		    25, 12, 0, 90, 94, 3, 5, 2, 0, 91, 94, 3, 31, 15, 0, 92, 94, 3, 35, 
		    17, 0, 93, 89, 1, 0, 0, 0, 93, 90, 1, 0, 0, 0, 93, 91, 1, 0, 0, 0, 
		    93, 92, 1, 0, 0, 0, 94, 12, 1, 0, 0, 0, 95, 99, 3, 41, 20, 0, 96, 
		    98, 8, 1, 0, 0, 97, 96, 1, 0, 0, 0, 98, 101, 1, 0, 0, 0, 99, 97, 1, 
		    0, 0, 0, 99, 100, 1, 0, 0, 0, 100, 102, 1, 0, 0, 0, 101, 99, 1, 0, 
		    0, 0, 102, 103, 3, 41, 20, 0, 103, 114, 1, 0, 0, 0, 104, 108, 3, 43, 
		    21, 0, 105, 107, 8, 2, 0, 0, 106, 105, 1, 0, 0, 0, 107, 110, 1, 0, 
		    0, 0, 108, 106, 1, 0, 0, 0, 108, 109, 1, 0, 0, 0, 109, 111, 1, 0, 
		    0, 0, 110, 108, 1, 0, 0, 0, 111, 112, 3, 43, 21, 0, 112, 114, 1, 0, 
		    0, 0, 113, 95, 1, 0, 0, 0, 113, 104, 1, 0, 0, 0, 114, 14, 1, 0, 0, 
		    0, 115, 116, 5, 97, 0, 0, 116, 117, 5, 114, 0, 0, 117, 118, 5, 114, 
		    0, 0, 118, 119, 5, 97, 0, 0, 119, 120, 5, 121, 0, 0, 120, 121, 5, 
		    123, 0, 0, 121, 16, 1, 0, 0, 0, 122, 123, 5, 99, 0, 0, 123, 124, 5, 
		    97, 0, 0, 124, 125, 5, 108, 0, 0, 125, 126, 5, 108, 0, 0, 126, 127, 
		    5, 97, 0, 0, 127, 128, 5, 98, 0, 0, 128, 129, 5, 108, 0, 0, 129, 130, 
		    5, 101, 0, 0, 130, 131, 5, 40, 0, 0, 131, 18, 1, 0, 0, 0, 132, 133, 
		    5, 41, 0, 0, 133, 134, 5, 58, 0, 0, 134, 20, 1, 0, 0, 0, 135, 136, 
		    7, 3, 0, 0, 136, 22, 1, 0, 0, 0, 137, 138, 7, 4, 0, 0, 138, 24, 1, 
		    0, 0, 0, 139, 142, 3, 21, 10, 0, 140, 142, 3, 23, 11, 0, 141, 139, 
		    1, 0, 0, 0, 141, 140, 1, 0, 0, 0, 142, 26, 1, 0, 0, 0, 143, 144, 5, 
		    60, 0, 0, 144, 28, 1, 0, 0, 0, 145, 146, 5, 62, 0, 0, 146, 30, 1, 
		    0, 0, 0, 147, 148, 5, 95, 0, 0, 148, 32, 1, 0, 0, 0, 149, 150, 5, 
		    44, 0, 0, 150, 34, 1, 0, 0, 0, 151, 152, 5, 45, 0, 0, 152, 36, 1, 
		    0, 0, 0, 153, 154, 5, 125, 0, 0, 154, 38, 1, 0, 0, 0, 155, 156, 5, 
		    48, 0, 0, 156, 40, 1, 0, 0, 0, 157, 158, 5, 39, 0, 0, 158, 42, 1, 
		    0, 0, 0, 159, 160, 5, 34, 0, 0, 160, 44, 1, 0, 0, 0, 161, 162, 5, 
		    124, 0, 0, 162, 46, 1, 0, 0, 0, 163, 164, 5, 38, 0, 0, 164, 48, 1, 
		    0, 0, 0, 165, 166, 5, 40, 0, 0, 166, 50, 1, 0, 0, 0, 167, 168, 5, 
		    41, 0, 0, 168, 52, 1, 0, 0, 0, 169, 170, 5, 58, 0, 0, 170, 54, 1, 
		    0, 0, 0, 171, 172, 5, 61, 0, 0, 172, 56, 1, 0, 0, 0, 173, 174, 5, 
		    63, 0, 0, 174, 58, 1, 0, 0, 0, 12, 0, 60, 66, 70, 76, 82, 87, 93, 
		    99, 108, 113, 141, 0];
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