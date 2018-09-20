<?php
/**
 * Copyright (C) 2015 Derek J. Lambert
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

namespace CrEOF\Spatial\DBAL\Platform;

use CrEOF\Spatial\DBAL\Types\AbstractSpatialType;
use CrEOF\Spatial\PHP\Types\Geography\GeographyInterface;

/**
 * MsSql spatial platform
 *
 * @author  Derek J. Lambert <dlambert@dereklambert.com>
 * @license http://dlambert.mit-license.org MIT
 */
class MsSql extends AbstractPlatform
{
    /**
     * Get an array of database types that map to this Doctrine type.
     *
     * @param AbstractSpatialType $type
     *
     * @return string[]
     */
    public function getMappedDatabaseTypes(AbstractSpatialType $type)
    {
        return [];
    }

    public function convertToDatabaseValueSQL(AbstractSpatialType $type, $sqlExpr)
    {
        throw new \Exception('Not implemented for MsSql platform!');
    }

    public function convertToPHPValueSQL(AbstractSpatialType $type, $sqlExpr)
    {
        throw new \Exception('Not implemented for MsSql platform!');
    }

    public function getSQLDeclaration(array $fieldDeclaration)
    {
        throw new \Exception('Not implemented for MsSql platform!');
    }
}
