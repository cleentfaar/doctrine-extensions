<?php

namespace Oro\ORM\Query\AST\Platform\Functions\Mysql;

use Doctrine\ORM\Query\AST\Node;
use Doctrine\ORM\Query\SqlWalker;
use Oro\ORM\Query\AST\Functions\SimpleFunction;
use Oro\ORM\Query\AST\Platform\Functions\PlatformFunctionNode;

class DayOfWeek extends PlatformFunctionNode
{
    /**
     * @param SqlWalker $sqlWalker
     *
     * @return string
     */
    public function getSql(SqlWalker $sqlWalker)
    {
        /** @var Node $expression */
        $expression = $this->parameters[SimpleFunction::PARAMETER_KEY];
        return 'DAYOFWEEK(' . $expression->dispatch($sqlWalker) . ')';
    }
}
