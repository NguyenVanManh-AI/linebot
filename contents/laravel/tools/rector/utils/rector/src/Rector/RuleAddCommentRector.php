<?php

declare(strict_types=1);

namespace Utils\Rector\Rector;

use PhpParser\Node;
use Rector\Rector\AbstractRector;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

/**
 * @see \Utils\Rector\Tests\Rector\RuleAddCommentRector\RuleAddCommentRectorTest
 */
final class RuleAddCommentRector extends AbstractRector
{
    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition(
            'Comment before each function in each class.',
            [
                new CodeSample(
                    <<<'CODE_SAMPLE'
// @todo fill code before
CODE_SAMPLE
                    ,
                    <<<'CODE_SAMPLE'
// @todo fill code after
CODE_SAMPLE
                ),
            ]
        );
    }

    /**
     * @return array<class-string<Node>>
     */
    public function getNodeTypes(): array
    {
        // @todo select node type
        return [\PhpParser\Node\Stmt\Class_::class];
    }

    /**
     * @param \PhpParser\Node\Stmt\Class_ $node
     */
    public function refactor(Node $node): ?Node
    {
        // @todo change the node
        if ($node instanceof \PhpParser\Node\Stmt\Class_) {
            foreach ($node->getMethods() as $method) {
                $comments = $method->getComments();
                if (empty($comments)) {
                    $method->setAttribute('comments', [new \PhpParser\Comment('// @todo add comment before this function')]);
                }
            }
        }
        return $node;
    }
}