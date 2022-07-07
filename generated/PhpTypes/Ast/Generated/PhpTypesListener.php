<?php

/*
 * Generated from C:/Users/rgott/Projects/php-types-ast\PhpTypes.g4 by ANTLR 4.10.1
 */

namespace PhpTypes\Ast\Generated;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see PhpTypesParser}.
 */
interface PhpTypesListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by the `Intersection`
	 * labeled alternative in {@see PhpTypesParser::typeExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterIntersection(Context\IntersectionContext $context): void;
	/**
	 * Exit a parse tree produced by the `Intersection` labeled alternative
	 * in {@see PhpTypesParser::typeExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitIntersection(Context\IntersectionContext $context): void;
	/**
	 * Enter a parse tree produced by the `Identifier`
	 * labeled alternative in {@see PhpTypesParser::typeExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterIdentifier(Context\IdentifierContext $context): void;
	/**
	 * Exit a parse tree produced by the `Identifier` labeled alternative
	 * in {@see PhpTypesParser::typeExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitIdentifier(Context\IdentifierContext $context): void;
	/**
	 * Enter a parse tree produced by the `StringLiteral`
	 * labeled alternative in {@see PhpTypesParser::typeExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterStringLiteral(Context\StringLiteralContext $context): void;
	/**
	 * Exit a parse tree produced by the `StringLiteral` labeled alternative
	 * in {@see PhpTypesParser::typeExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitStringLiteral(Context\StringLiteralContext $context): void;
	/**
	 * Enter a parse tree produced by the `IntLiteral`
	 * labeled alternative in {@see PhpTypesParser::typeExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterIntLiteral(Context\IntLiteralContext $context): void;
	/**
	 * Exit a parse tree produced by the `IntLiteral` labeled alternative
	 * in {@see PhpTypesParser::typeExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitIntLiteral(Context\IntLiteralContext $context): void;
	/**
	 * Enter a parse tree produced by the `Callable`
	 * labeled alternative in {@see PhpTypesParser::typeExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterCallable(Context\CallableContext $context): void;
	/**
	 * Exit a parse tree produced by the `Callable` labeled alternative
	 * in {@see PhpTypesParser::typeExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitCallable(Context\CallableContext $context): void;
	/**
	 * Enter a parse tree produced by the `Tuple`
	 * labeled alternative in {@see PhpTypesParser::typeExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterTuple(Context\TupleContext $context): void;
	/**
	 * Exit a parse tree produced by the `Tuple` labeled alternative
	 * in {@see PhpTypesParser::typeExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitTuple(Context\TupleContext $context): void;
	/**
	 * Enter a parse tree produced by the `Union`
	 * labeled alternative in {@see PhpTypesParser::typeExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterUnion(Context\UnionContext $context): void;
	/**
	 * Exit a parse tree produced by the `Union` labeled alternative
	 * in {@see PhpTypesParser::typeExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitUnion(Context\UnionContext $context): void;
	/**
	 * Enter a parse tree produced by the `Struct`
	 * labeled alternative in {@see PhpTypesParser::typeExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterStruct(Context\StructContext $context): void;
	/**
	 * Exit a parse tree produced by the `Struct` labeled alternative
	 * in {@see PhpTypesParser::typeExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitStruct(Context\StructContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PhpTypesParser::paramList()}.
	 * @param $context The parse tree.
	 */
	public function enterParamList(Context\ParamListContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PhpTypesParser::paramList()}.
	 * @param $context The parse tree.
	 */
	public function exitParamList(Context\ParamListContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PhpTypesParser::param()}.
	 * @param $context The parse tree.
	 */
	public function enterParam(Context\ParamContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PhpTypesParser::param()}.
	 * @param $context The parse tree.
	 */
	public function exitParam(Context\ParamContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PhpTypesParser::memberList()}.
	 * @param $context The parse tree.
	 */
	public function enterMemberList(Context\MemberListContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PhpTypesParser::memberList()}.
	 * @param $context The parse tree.
	 */
	public function exitMemberList(Context\MemberListContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PhpTypesParser::member()}.
	 * @param $context The parse tree.
	 */
	public function enterMember(Context\MemberContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PhpTypesParser::member()}.
	 * @param $context The parse tree.
	 */
	public function exitMember(Context\MemberContext $context): void;
}