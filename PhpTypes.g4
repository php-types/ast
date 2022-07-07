grammar PhpTypes;

typeExpr
    : OPEN_CALLABLE paramList? CLOSE_CALLABLE return=typeExpr                                      #Callable
    | (name=IDENTIFIER) (LT params+=typeExpr (COMMA params+=typeExpr)* GT)?                        #Identifier
    | left=typeExpr AMPERSAND right=typeExpr                                                       #Intersection
    | INTEGER                                                                                      #IntLiteral
    | STRING_LITERAL                                                                               #StringLiteral
    | CURLY_ARRAY memberList CURLY_CLOSE                                                           #Struct
    | CURLY_ARRAY (elements+=typeExpr COMMA?)+ CURLY_CLOSE                                         #Tuple
    | left=typeExpr PIPE right=typeExpr                                                            #Union
    ;

paramList
    : (params+=param (COMMA params+=param)*)
    ;

param
    : type=typeExpr optional=EQUAL?
    ;

memberList
    : (members+=member)? (COMMA members+=member)* COMMA?
    ;

member
    : key=IDENTIFIER optional=QUESTION? COLON value=typeExpr
    ;

IDENTIFIER
    : IDENTIFIER_START IDENTIFIER_PART*
    ;

IDENTIFIER_START
    : LETTER
    | UNDERSCORE
    ;

IDENTIFIER_PART
    : LETTER
    | DIGIT
    | UNDERSCORE
    | DASH
    ;

STRING_LITERAL
    : SQUOTE ~('\'')* SQUOTE
    | DQUOTE ~('"')* DQUOTE
    ;

CURLY_ARRAY
    : 'array{'
    ;

OPEN_CALLABLE
    : 'callable('
    ;

CLOSE_CALLABLE
    : '):'
    ;

LOWERCASE_LETTER
    : [a-z]
    ;

UPPERCASE_LETTER
    : [A-Z]
    ;

LETTER
    : LOWERCASE_LETTER
    | UPPERCASE_LETTER
    ;

INTEGER
    : DASH? NON_ZERO_DIGIT DIGIT*
    | ZERO
    ;

NON_ZERO_DIGIT
    : [1-9]
    ;

DIGIT
    : ZERO
    | NON_ZERO_DIGIT
    ;

LT
    : '<'
    ;

GT
    : '>'
    ;

UNDERSCORE
    : '_'
    ;

COMMA
    : ','
    ;

DASH
    : '-'
    ;

CURLY_CLOSE
    : '}'
    ;

ZERO
    : '0'
    ;

SQUOTE
    : '\''
    ;

DQUOTE
    : '"'
    ;

PIPE
    : '|'
    ;

AMPERSAND
    : '&'
    ;

LPAREN
    : '('
    ;

RPAREN
    : ')'
    ;

COLON
    : ':'
    ;

EQUAL
    : '='
    ;

QUESTION
    : '?'
    ;
