<?php

/*
 * Generated from C:/Users/rgott/Projects/php-types-ast\PhpTypes.g4 by ANTLR 4.10.1
 */

namespace PhpTypes\Ast\Generated;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\ErrorNode;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;

/**
 * This class provides an empty implementation of {@see PhpTypesListener},
 * which can be extended to create a listener which only needs to handle a subset
 * of the available methods.
 */
class PhpTypesBaseListener implements PhpTypesListener
{
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterIntersection(Context\IntersectionContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitIntersection(Context\IntersectionContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterIdentifier(Context\IdentifierContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitIdentifier(Context\IdentifierContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterStringLiteral(Context\StringLiteralContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitStringLiteral(Context\StringLiteralContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterIntLiteral(Context\IntLiteralContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitIntLiteral(Context\IntLiteralContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterCallable(Context\CallableContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitCallable(Context\CallableContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterTuple(Context\TupleContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitTuple(Context\TupleContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterUnion(Context\UnionContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitUnion(Context\UnionContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterStruct(Context\StructContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitStruct(Context\StructContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterParamList(Context\ParamListContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitParamList(Context\ParamListContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterParam(Context\ParamContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitParam(Context\ParamContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterMemberList(Context\MemberListContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitMemberList(Context\MemberListContext $context): void {}
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterMember(Context\MemberContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitMember(Context\MemberContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function enterEveryRule(ParserRuleContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function exitEveryRule(ParserRuleContext $context): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function visitTerminal(TerminalNode $node): void {}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation does nothing.
	 */
	public function visitErrorNode(ErrorNode $node): void {}
}