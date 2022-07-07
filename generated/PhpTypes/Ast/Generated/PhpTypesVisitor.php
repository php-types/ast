<?php

/*
 * Generated from C:/Users/rgott/Projects/php-types-ast\PhpTypes.g4 by ANTLR 4.10.1
 */

namespace PhpTypes\Ast\Generated;

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see PhpTypesParser}.
 */
interface PhpTypesVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by the `Intersection` labeled alternative
	 * in {@see PhpTypesParser::typeExpr()}.
	 *
	 * @param Context\IntersectionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIntersection(Context\IntersectionContext $context);

	/**
	 * Visit a parse tree produced by the `Identifier` labeled alternative
	 * in {@see PhpTypesParser::typeExpr()}.
	 *
	 * @param Context\IdentifierContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIdentifier(Context\IdentifierContext $context);

	/**
	 * Visit a parse tree produced by the `StringLiteral` labeled alternative
	 * in {@see PhpTypesParser::typeExpr()}.
	 *
	 * @param Context\StringLiteralContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStringLiteral(Context\StringLiteralContext $context);

	/**
	 * Visit a parse tree produced by the `IntLiteral` labeled alternative
	 * in {@see PhpTypesParser::typeExpr()}.
	 *
	 * @param Context\IntLiteralContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIntLiteral(Context\IntLiteralContext $context);

	/**
	 * Visit a parse tree produced by the `Callable` labeled alternative
	 * in {@see PhpTypesParser::typeExpr()}.
	 *
	 * @param Context\CallableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCallable(Context\CallableContext $context);

	/**
	 * Visit a parse tree produced by the `Tuple` labeled alternative
	 * in {@see PhpTypesParser::typeExpr()}.
	 *
	 * @param Context\TupleContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTuple(Context\TupleContext $context);

	/**
	 * Visit a parse tree produced by the `Union` labeled alternative
	 * in {@see PhpTypesParser::typeExpr()}.
	 *
	 * @param Context\UnionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUnion(Context\UnionContext $context);

	/**
	 * Visit a parse tree produced by the `Struct` labeled alternative
	 * in {@see PhpTypesParser::typeExpr()}.
	 *
	 * @param Context\StructContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStruct(Context\StructContext $context);

	/**
	 * Visit a parse tree produced by {@see PhpTypesParser::paramList()}.
	 *
	 * @param Context\ParamListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParamList(Context\ParamListContext $context);

	/**
	 * Visit a parse tree produced by {@see PhpTypesParser::param()}.
	 *
	 * @param Context\ParamContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParam(Context\ParamContext $context);

	/**
	 * Visit a parse tree produced by {@see PhpTypesParser::memberList()}.
	 *
	 * @param Context\MemberListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMemberList(Context\MemberListContext $context);

	/**
	 * Visit a parse tree produced by {@see PhpTypesParser::member()}.
	 *
	 * @param Context\MemberContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMember(Context\MemberContext $context);
}