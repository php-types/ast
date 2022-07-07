<?php

/*
 * Generated from C:/Users/rgott/Projects/php-types-ast\PhpTypes.g4 by ANTLR 4.10.1
 */

namespace PhpTypes\Ast\Generated {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class PhpTypesParser extends Parser
	{
		public const IDENTIFIER = 1, IDENTIFIER_START = 2, IDENTIFIER_PART = 3, 
               STRING_LITERAL = 4, CURLY_ARRAY = 5, OPEN_CALLABLE = 6, CLOSE_CALLABLE = 7, 
               LOWERCASE_LETTER = 8, UPPERCASE_LETTER = 9, LETTER = 10, 
               INTEGER = 11, NON_ZERO_DIGIT = 12, DIGIT = 13, LT = 14, GT = 15, 
               UNDERSCORE = 16, COMMA = 17, DASH = 18, CURLY_CLOSE = 19, 
               ZERO = 20, SQUOTE = 21, DQUOTE = 22, PIPE = 23, AMPERSAND = 24, 
               LPAREN = 25, RPAREN = 26, COLON = 27, EQUAL = 28, QUESTION = 29;

		public const RULE_typeExpr = 0, RULE_paramList = 1, RULE_param = 2, RULE_memberList = 3, 
               RULE_member = 4;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'typeExpr', 'paramList', 'param', 'memberList', 'member'
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
			[4, 1, 29, 94, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 1, 0, 1, 0, 1, 0, 3, 0, 14, 8, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 
		    0, 1, 0, 1, 0, 5, 0, 23, 8, 0, 10, 0, 12, 0, 26, 9, 0, 1, 0, 1, 0, 
		    3, 0, 30, 8, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 
		    0, 3, 0, 41, 8, 0, 4, 0, 43, 8, 0, 11, 0, 12, 0, 44, 1, 0, 1, 0, 3, 
		    0, 49, 8, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 5, 0, 57, 8, 0, 10, 
		    0, 12, 0, 60, 9, 0, 1, 1, 1, 1, 1, 1, 5, 1, 65, 8, 1, 10, 1, 12, 1, 
		    68, 9, 1, 1, 2, 1, 2, 3, 2, 72, 8, 2, 1, 3, 3, 3, 75, 8, 3, 1, 3, 
		    1, 3, 5, 3, 79, 8, 3, 10, 3, 12, 3, 82, 9, 3, 1, 3, 3, 3, 85, 8, 3, 
		    1, 4, 1, 4, 3, 4, 89, 8, 4, 1, 4, 1, 4, 1, 4, 1, 4, 0, 1, 0, 5, 0, 
		    2, 4, 6, 8, 0, 0, 106, 0, 48, 1, 0, 0, 0, 2, 61, 1, 0, 0, 0, 4, 69, 
		    1, 0, 0, 0, 6, 74, 1, 0, 0, 0, 8, 86, 1, 0, 0, 0, 10, 11, 6, 0, -1, 
		    0, 11, 13, 5, 6, 0, 0, 12, 14, 3, 2, 1, 0, 13, 12, 1, 0, 0, 0, 13, 
		    14, 1, 0, 0, 0, 14, 15, 1, 0, 0, 0, 15, 16, 5, 7, 0, 0, 16, 49, 3, 
		    0, 0, 8, 17, 29, 5, 1, 0, 0, 18, 19, 5, 14, 0, 0, 19, 24, 3, 0, 0, 
		    0, 20, 21, 5, 17, 0, 0, 21, 23, 3, 0, 0, 0, 22, 20, 1, 0, 0, 0, 23, 
		    26, 1, 0, 0, 0, 24, 22, 1, 0, 0, 0, 24, 25, 1, 0, 0, 0, 25, 27, 1, 
		    0, 0, 0, 26, 24, 1, 0, 0, 0, 27, 28, 5, 15, 0, 0, 28, 30, 1, 0, 0, 
		    0, 29, 18, 1, 0, 0, 0, 29, 30, 1, 0, 0, 0, 30, 49, 1, 0, 0, 0, 31, 
		    49, 5, 11, 0, 0, 32, 49, 5, 4, 0, 0, 33, 34, 5, 5, 0, 0, 34, 35, 3, 
		    6, 3, 0, 35, 36, 5, 19, 0, 0, 36, 49, 1, 0, 0, 0, 37, 42, 5, 5, 0, 
		    0, 38, 40, 3, 0, 0, 0, 39, 41, 5, 17, 0, 0, 40, 39, 1, 0, 0, 0, 40, 
		    41, 1, 0, 0, 0, 41, 43, 1, 0, 0, 0, 42, 38, 1, 0, 0, 0, 43, 44, 1, 
		    0, 0, 0, 44, 42, 1, 0, 0, 0, 44, 45, 1, 0, 0, 0, 45, 46, 1, 0, 0, 
		    0, 46, 47, 5, 19, 0, 0, 47, 49, 1, 0, 0, 0, 48, 10, 1, 0, 0, 0, 48, 
		    17, 1, 0, 0, 0, 48, 31, 1, 0, 0, 0, 48, 32, 1, 0, 0, 0, 48, 33, 1, 
		    0, 0, 0, 48, 37, 1, 0, 0, 0, 49, 58, 1, 0, 0, 0, 50, 51, 10, 6, 0, 
		    0, 51, 52, 5, 24, 0, 0, 52, 57, 3, 0, 0, 7, 53, 54, 10, 1, 0, 0, 54, 
		    55, 5, 23, 0, 0, 55, 57, 3, 0, 0, 2, 56, 50, 1, 0, 0, 0, 56, 53, 1, 
		    0, 0, 0, 57, 60, 1, 0, 0, 0, 58, 56, 1, 0, 0, 0, 58, 59, 1, 0, 0, 
		    0, 59, 1, 1, 0, 0, 0, 60, 58, 1, 0, 0, 0, 61, 66, 3, 4, 2, 0, 62, 
		    63, 5, 17, 0, 0, 63, 65, 3, 4, 2, 0, 64, 62, 1, 0, 0, 0, 65, 68, 1, 
		    0, 0, 0, 66, 64, 1, 0, 0, 0, 66, 67, 1, 0, 0, 0, 67, 3, 1, 0, 0, 0, 
		    68, 66, 1, 0, 0, 0, 69, 71, 3, 0, 0, 0, 70, 72, 5, 28, 0, 0, 71, 70, 
		    1, 0, 0, 0, 71, 72, 1, 0, 0, 0, 72, 5, 1, 0, 0, 0, 73, 75, 3, 8, 4, 
		    0, 74, 73, 1, 0, 0, 0, 74, 75, 1, 0, 0, 0, 75, 80, 1, 0, 0, 0, 76, 
		    77, 5, 17, 0, 0, 77, 79, 3, 8, 4, 0, 78, 76, 1, 0, 0, 0, 79, 82, 1, 
		    0, 0, 0, 80, 78, 1, 0, 0, 0, 80, 81, 1, 0, 0, 0, 81, 84, 1, 0, 0, 
		    0, 82, 80, 1, 0, 0, 0, 83, 85, 5, 17, 0, 0, 84, 83, 1, 0, 0, 0, 84, 
		    85, 1, 0, 0, 0, 85, 7, 1, 0, 0, 0, 86, 88, 5, 1, 0, 0, 87, 89, 5, 
		    29, 0, 0, 88, 87, 1, 0, 0, 0, 88, 89, 1, 0, 0, 0, 89, 90, 1, 0, 0, 
		    0, 90, 91, 5, 27, 0, 0, 91, 92, 3, 0, 0, 0, 92, 9, 1, 0, 0, 0, 14, 
		    13, 24, 29, 40, 44, 48, 56, 58, 66, 71, 74, 80, 84, 88];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
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

		public function getGrammarFileName(): string
		{
			return "PhpTypes.g4";
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function typeExpr(): Context\TypeExprContext
		{
			return $this->recursiveTypeExpr(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveTypeExpr(int $precedence): Context\TypeExprContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\TypeExprContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 0;
			$this->enterRecursionRule($localContext, 0, self::RULE_typeExpr, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(48);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 5, $this->ctx)) {
					case 1:
					    $localContext = new Context\CallableContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;

					    $this->setState(11);
					    $this->match(self::OPEN_CALLABLE);
					    $this->setState(13);
					    $this->errorHandler->sync($this);
					    $_la = $this->input->LA(1);

					    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::IDENTIFIER) | (1 << self::STRING_LITERAL) | (1 << self::CURLY_ARRAY) | (1 << self::OPEN_CALLABLE) | (1 << self::INTEGER))) !== 0)) {
					    	$this->setState(12);
					    	$this->paramList();
					    }
					    $this->setState(15);
					    $this->match(self::CLOSE_CALLABLE);
					    $this->setState(16);
					    $localContext->return = $this->recursiveTypeExpr(8);
					break;

					case 2:
					    $localContext = new Context\IdentifierContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;

					    $this->setState(17);
					    $localContext->name = $this->match(self::IDENTIFIER);
					    $this->setState(29);
					    $this->errorHandler->sync($this);

					    switch ($this->getInterpreter()->adaptivePredict($this->input, 2, $this->ctx)) {
					        case 1:
					    	    $this->setState(18);
					    	    $this->match(self::LT);
					    	    $this->setState(19);
					    	    $localContext->typeExpr = $this->recursiveTypeExpr(0);
					    	    $localContext->params[] = $localContext->typeExpr;
					    	    $this->setState(24);
					    	    $this->errorHandler->sync($this);

					    	    $_la = $this->input->LA(1);
					    	    while ($_la === self::COMMA) {
					    	    	$this->setState(20);
					    	    	$this->match(self::COMMA);
					    	    	$this->setState(21);
					    	    	$localContext->typeExpr = $this->recursiveTypeExpr(0);
					    	    	$localContext->params[] = $localContext->typeExpr;
					    	    	$this->setState(26);
					    	    	$this->errorHandler->sync($this);
					    	    	$_la = $this->input->LA(1);
					    	    }
					    	    $this->setState(27);
					    	    $this->match(self::GT);
					    	break;
					    }
					break;

					case 3:
					    $localContext = new Context\IntLiteralContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(31);
					    $this->match(self::INTEGER);
					break;

					case 4:
					    $localContext = new Context\StringLiteralContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(32);
					    $this->match(self::STRING_LITERAL);
					break;

					case 5:
					    $localContext = new Context\StructContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(33);
					    $this->match(self::CURLY_ARRAY);
					    $this->setState(34);
					    $this->memberList();
					    $this->setState(35);
					    $this->match(self::CURLY_CLOSE);
					break;

					case 6:
					    $localContext = new Context\TupleContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(37);
					    $this->match(self::CURLY_ARRAY);
					    $this->setState(42); 
					    $this->errorHandler->sync($this);

					    $_la = $this->input->LA(1);
					    do {
					    	$this->setState(38);
					    	$localContext->typeExpr = $this->recursiveTypeExpr(0);
					    	$localContext->elements[] = $localContext->typeExpr;
					    	$this->setState(40);
					    	$this->errorHandler->sync($this);
					    	$_la = $this->input->LA(1);

					    	if ($_la === self::COMMA) {
					    		$this->setState(39);
					    		$this->match(self::COMMA);
					    	}
					    	$this->setState(44); 
					    	$this->errorHandler->sync($this);
					    	$_la = $this->input->LA(1);
					    } while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::IDENTIFIER) | (1 << self::STRING_LITERAL) | (1 << self::CURLY_ARRAY) | (1 << self::OPEN_CALLABLE) | (1 << self::INTEGER))) !== 0));
					    $this->setState(46);
					    $this->match(self::CURLY_CLOSE);
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(58);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 7, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(56);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 6, $this->ctx)) {
							case 1:
							    $localContext = new Context\IntersectionContext(new Context\TypeExprContext($parentContext, $parentState));
							    $localContext->left = $previousContext;

							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_typeExpr);
							    $this->setState(50);

							    if (!($this->precpred($this->ctx, 6))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 6)");
							    }
							    $this->setState(51);
							    $this->match(self::AMPERSAND);
							    $this->setState(52);
							    $localContext->right = $this->recursiveTypeExpr(7);
							break;

							case 2:
							    $localContext = new Context\UnionContext(new Context\TypeExprContext($parentContext, $parentState));
							    $localContext->left = $previousContext;

							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_typeExpr);
							    $this->setState(53);

							    if (!($this->precpred($this->ctx, 1))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 1)");
							    }
							    $this->setState(54);
							    $this->match(self::PIPE);
							    $this->setState(55);
							    $localContext->right = $this->recursiveTypeExpr(2);
							break;
						} 
					}

					$this->setState(60);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 7, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function paramList(): Context\ParamListContext
		{
		    $localContext = new Context\ParamListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_paramList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(61);
		        $localContext->param = $this->param();
		        $localContext->params[] = $localContext->param;
		        $this->setState(66);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(62);
		        	$this->match(self::COMMA);
		        	$this->setState(63);
		        	$localContext->param = $this->param();
		        	$localContext->params[] = $localContext->param;
		        	$this->setState(68);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function param(): Context\ParamContext
		{
		    $localContext = new Context\ParamContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_param);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(69);
		        $localContext->type = $this->recursiveTypeExpr(0);
		        $this->setState(71);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::EQUAL) {
		        	$this->setState(70);
		        	$localContext->optional = $this->match(self::EQUAL);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function memberList(): Context\MemberListContext
		{
		    $localContext = new Context\MemberListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_memberList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(74);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::IDENTIFIER) {
		        	$this->setState(73);
		        	$localContext->member = $this->member();
		        	$localContext->members[] = $localContext->member;
		        }
		        $this->setState(80);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 11, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(76);
		        		$this->match(self::COMMA);
		        		$this->setState(77);
		        		$localContext->member = $this->member();
		        		$localContext->members[] = $localContext->member; 
		        	}

		        	$this->setState(82);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 11, $this->ctx);
		        }
		        $this->setState(84);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::COMMA) {
		        	$this->setState(83);
		        	$this->match(self::COMMA);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function member(): Context\MemberContext
		{
		    $localContext = new Context\MemberContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_member);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(86);
		        $localContext->key = $this->match(self::IDENTIFIER);
		        $this->setState(88);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::QUESTION) {
		        	$this->setState(87);
		        	$localContext->optional = $this->match(self::QUESTION);
		        }
		        $this->setState(90);
		        $this->match(self::COLON);
		        $this->setState(91);
		        $localContext->value = $this->recursiveTypeExpr(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex): bool
		{
			switch ($ruleIndex) {
					case 0:
						return $this->sempredTypeExpr($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredTypeExpr(?Context\TypeExprContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 6);

			    case 1:
			        return $this->precpred($this->ctx, 1);
			}

			return true;
		}
	}
}

namespace PhpTypes\Ast\Generated\Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use PhpTypes\Ast\Generated\PhpTypesParser;
	use PhpTypes\Ast\Generated\PhpTypesVisitor;
	use PhpTypes\Ast\Generated\PhpTypesListener;

	class TypeExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return PhpTypesParser::RULE_typeExpr;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class IntersectionContext extends TypeExprContext
	{
		/**
		 * @var TypeExprContext|null $left
		 */
		public $left;

		/**
		 * @var TypeExprContext|null $right
		 */
		public $right;

		public function __construct(TypeExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function AMPERSAND(): ?TerminalNode
	    {
	        return $this->getToken(PhpTypesParser::AMPERSAND, 0);
	    }

	    /**
	     * @return array<TypeExprContext>|TypeExprContext|null
	     */
	    public function typeExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(TypeExprContext::class);
	    	}

	        return $this->getTypedRuleContext(TypeExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof PhpTypesListener) {
			    $listener->enterIntersection($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof PhpTypesListener) {
			    $listener->exitIntersection($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof PhpTypesVisitor) {
			    return $visitor->visitIntersection($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class IdentifierContext extends TypeExprContext
	{
		/**
		 * @var Token|null $name
		 */
		public $name;

		/**
		 * @var TypeExprContext|null $typeExpr
		 */
		public $typeExpr;

		/**
		 * @var array<TypeExprContext>|null $params
		 */
		public $params;

		public function __construct(TypeExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function IDENTIFIER(): ?TerminalNode
	    {
	        return $this->getToken(PhpTypesParser::IDENTIFIER, 0);
	    }

	    public function LT(): ?TerminalNode
	    {
	        return $this->getToken(PhpTypesParser::LT, 0);
	    }

	    public function GT(): ?TerminalNode
	    {
	        return $this->getToken(PhpTypesParser::GT, 0);
	    }

	    /**
	     * @return array<TypeExprContext>|TypeExprContext|null
	     */
	    public function typeExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(TypeExprContext::class);
	    	}

	        return $this->getTypedRuleContext(TypeExprContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(PhpTypesParser::COMMA);
	    	}

	        return $this->getToken(PhpTypesParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof PhpTypesListener) {
			    $listener->enterIdentifier($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof PhpTypesListener) {
			    $listener->exitIdentifier($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof PhpTypesVisitor) {
			    return $visitor->visitIdentifier($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class StringLiteralContext extends TypeExprContext
	{
		public function __construct(TypeExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function STRING_LITERAL(): ?TerminalNode
	    {
	        return $this->getToken(PhpTypesParser::STRING_LITERAL, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof PhpTypesListener) {
			    $listener->enterStringLiteral($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof PhpTypesListener) {
			    $listener->exitStringLiteral($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof PhpTypesVisitor) {
			    return $visitor->visitStringLiteral($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class IntLiteralContext extends TypeExprContext
	{
		public function __construct(TypeExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function INTEGER(): ?TerminalNode
	    {
	        return $this->getToken(PhpTypesParser::INTEGER, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof PhpTypesListener) {
			    $listener->enterIntLiteral($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof PhpTypesListener) {
			    $listener->exitIntLiteral($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof PhpTypesVisitor) {
			    return $visitor->visitIntLiteral($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class CallableContext extends TypeExprContext
	{
		/**
		 * @var TypeExprContext|null $return
		 */
		public $return;

		public function __construct(TypeExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function OPEN_CALLABLE(): ?TerminalNode
	    {
	        return $this->getToken(PhpTypesParser::OPEN_CALLABLE, 0);
	    }

	    public function CLOSE_CALLABLE(): ?TerminalNode
	    {
	        return $this->getToken(PhpTypesParser::CLOSE_CALLABLE, 0);
	    }

	    public function typeExpr(): ?TypeExprContext
	    {
	    	return $this->getTypedRuleContext(TypeExprContext::class, 0);
	    }

	    public function paramList(): ?ParamListContext
	    {
	    	return $this->getTypedRuleContext(ParamListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof PhpTypesListener) {
			    $listener->enterCallable($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof PhpTypesListener) {
			    $listener->exitCallable($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof PhpTypesVisitor) {
			    return $visitor->visitCallable($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class TupleContext extends TypeExprContext
	{
		/**
		 * @var TypeExprContext|null $typeExpr
		 */
		public $typeExpr;

		/**
		 * @var array<TypeExprContext>|null $elements
		 */
		public $elements;

		public function __construct(TypeExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function CURLY_ARRAY(): ?TerminalNode
	    {
	        return $this->getToken(PhpTypesParser::CURLY_ARRAY, 0);
	    }

	    public function CURLY_CLOSE(): ?TerminalNode
	    {
	        return $this->getToken(PhpTypesParser::CURLY_CLOSE, 0);
	    }

	    /**
	     * @return array<TypeExprContext>|TypeExprContext|null
	     */
	    public function typeExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(TypeExprContext::class);
	    	}

	        return $this->getTypedRuleContext(TypeExprContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(PhpTypesParser::COMMA);
	    	}

	        return $this->getToken(PhpTypesParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof PhpTypesListener) {
			    $listener->enterTuple($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof PhpTypesListener) {
			    $listener->exitTuple($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof PhpTypesVisitor) {
			    return $visitor->visitTuple($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class UnionContext extends TypeExprContext
	{
		/**
		 * @var TypeExprContext|null $left
		 */
		public $left;

		/**
		 * @var TypeExprContext|null $right
		 */
		public $right;

		public function __construct(TypeExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function PIPE(): ?TerminalNode
	    {
	        return $this->getToken(PhpTypesParser::PIPE, 0);
	    }

	    /**
	     * @return array<TypeExprContext>|TypeExprContext|null
	     */
	    public function typeExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(TypeExprContext::class);
	    	}

	        return $this->getTypedRuleContext(TypeExprContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof PhpTypesListener) {
			    $listener->enterUnion($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof PhpTypesListener) {
			    $listener->exitUnion($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof PhpTypesVisitor) {
			    return $visitor->visitUnion($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class StructContext extends TypeExprContext
	{
		public function __construct(TypeExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function CURLY_ARRAY(): ?TerminalNode
	    {
	        return $this->getToken(PhpTypesParser::CURLY_ARRAY, 0);
	    }

	    public function memberList(): ?MemberListContext
	    {
	    	return $this->getTypedRuleContext(MemberListContext::class, 0);
	    }

	    public function CURLY_CLOSE(): ?TerminalNode
	    {
	        return $this->getToken(PhpTypesParser::CURLY_CLOSE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof PhpTypesListener) {
			    $listener->enterStruct($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof PhpTypesListener) {
			    $listener->exitStruct($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof PhpTypesVisitor) {
			    return $visitor->visitStruct($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParamListContext extends ParserRuleContext
	{
		/**
		 * @var ParamContext|null $param
		 */
		public $param;

		/**
		 * @var array<ParamContext>|null $params
		 */
		public $params;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return PhpTypesParser::RULE_paramList;
	    }

	    /**
	     * @return array<ParamContext>|ParamContext|null
	     */
	    public function param(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ParamContext::class);
	    	}

	        return $this->getTypedRuleContext(ParamContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(PhpTypesParser::COMMA);
	    	}

	        return $this->getToken(PhpTypesParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof PhpTypesListener) {
			    $listener->enterParamList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof PhpTypesListener) {
			    $listener->exitParamList($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof PhpTypesVisitor) {
			    return $visitor->visitParamList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParamContext extends ParserRuleContext
	{
		/**
		 * @var Token|null $optional
		 */
		public $optional;

		/**
		 * @var TypeExprContext|null $type
		 */
		public $type;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return PhpTypesParser::RULE_param;
	    }

	    public function typeExpr(): ?TypeExprContext
	    {
	    	return $this->getTypedRuleContext(TypeExprContext::class, 0);
	    }

	    public function EQUAL(): ?TerminalNode
	    {
	        return $this->getToken(PhpTypesParser::EQUAL, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof PhpTypesListener) {
			    $listener->enterParam($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof PhpTypesListener) {
			    $listener->exitParam($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof PhpTypesVisitor) {
			    return $visitor->visitParam($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class MemberListContext extends ParserRuleContext
	{
		/**
		 * @var MemberContext|null $member
		 */
		public $member;

		/**
		 * @var array<MemberContext>|null $members
		 */
		public $members;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return PhpTypesParser::RULE_memberList;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(PhpTypesParser::COMMA);
	    	}

	        return $this->getToken(PhpTypesParser::COMMA, $index);
	    }

	    /**
	     * @return array<MemberContext>|MemberContext|null
	     */
	    public function member(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(MemberContext::class);
	    	}

	        return $this->getTypedRuleContext(MemberContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof PhpTypesListener) {
			    $listener->enterMemberList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof PhpTypesListener) {
			    $listener->exitMemberList($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof PhpTypesVisitor) {
			    return $visitor->visitMemberList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class MemberContext extends ParserRuleContext
	{
		/**
		 * @var Token|null $key
		 */
		public $key;

		/**
		 * @var Token|null $optional
		 */
		public $optional;

		/**
		 * @var TypeExprContext|null $value
		 */
		public $value;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return PhpTypesParser::RULE_member;
	    }

	    public function COLON(): ?TerminalNode
	    {
	        return $this->getToken(PhpTypesParser::COLON, 0);
	    }

	    public function IDENTIFIER(): ?TerminalNode
	    {
	        return $this->getToken(PhpTypesParser::IDENTIFIER, 0);
	    }

	    public function typeExpr(): ?TypeExprContext
	    {
	    	return $this->getTypedRuleContext(TypeExprContext::class, 0);
	    }

	    public function QUESTION(): ?TerminalNode
	    {
	        return $this->getToken(PhpTypesParser::QUESTION, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof PhpTypesListener) {
			    $listener->enterMember($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof PhpTypesListener) {
			    $listener->exitMember($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof PhpTypesVisitor) {
			    return $visitor->visitMember($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}