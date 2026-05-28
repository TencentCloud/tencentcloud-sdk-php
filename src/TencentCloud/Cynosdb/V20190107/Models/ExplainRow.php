<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 执行计划列表
 *
 * @method integer getId() 获取<p>查询的序列号</p>
 * @method void setId(integer $Id) 设置<p>查询的序列号</p>
 * @method string getSelectType() 获取<p>查询的类型，常见值：SIMPLE（简单查询，不含子查询或 UNION）、PRIMARY（最外层查询）、SUBQUERY（子查询中的第一个 SELECT）、DERIVED（派生表/FROM 子句中的子查询）、UNION（UNION 中第二个及之后的 SELECT）、UNION RESULT（UNION 的结果集）。</p>
 * @method void setSelectType(string $SelectType) 设置<p>查询的类型，常见值：SIMPLE（简单查询，不含子查询或 UNION）、PRIMARY（最外层查询）、SUBQUERY（子查询中的第一个 SELECT）、DERIVED（派生表/FROM 子句中的子查询）、UNION（UNION 中第二个及之后的 SELECT）、UNION RESULT（UNION 的结果集）。</p>
 * @method string getTable() 获取<p>数据表名</p>
 * @method void setTable(string $Table) 设置<p>数据表名</p>
 * @method string getPartitions() 获取<p>查询匹配的分区</p>
 * @method void setPartitions(string $Partitions) 设置<p>查询匹配的分区</p>
 * @method string getType() 获取<p>访问类型（非常重要，衡量查询效率的关键指标），从优到差排列：system &gt; const &gt; eq_ref &gt; ref &gt; fulltext &gt; ref_or_null &gt; index_merge &gt; unique_subquery &gt; index_subquery &gt; range &gt; index &gt; ALL。常见值说明： • system：表只有一行记录（系统表） • const：通过主键或唯一索引匹配一行，常见于 WHERE pk = 1 • eq_ref：连接时使用主键或唯一索引，每个索引值只匹配一行 • ref：使用非唯一索引查找，可能匹配多行 • range：索引范围扫描，如 BETWEEN、&gt;、&lt;、IN • index：全索引扫描（遍历整棵索引树） • ALL：全表扫描（最差，需优化）</p>
 * @method void setType(string $Type) 设置<p>访问类型（非常重要，衡量查询效率的关键指标），从优到差排列：system &gt; const &gt; eq_ref &gt; ref &gt; fulltext &gt; ref_or_null &gt; index_merge &gt; unique_subquery &gt; index_subquery &gt; range &gt; index &gt; ALL。常见值说明： • system：表只有一行记录（系统表） • const：通过主键或唯一索引匹配一行，常见于 WHERE pk = 1 • eq_ref：连接时使用主键或唯一索引，每个索引值只匹配一行 • ref：使用非唯一索引查找，可能匹配多行 • range：索引范围扫描，如 BETWEEN、&gt;、&lt;、IN • index：全索引扫描（遍历整棵索引树） • ALL：全表扫描（最差，需优化）</p>
 * @method string getPossibleKeys() 获取<p>查询中可能使用到的索引。为 NULL 表示没有可用索引。</p>
 * @method void setPossibleKeys(string $PossibleKeys) 设置<p>查询中可能使用到的索引。为 NULL 表示没有可用索引。</p>
 * @method string getKey() 获取<p>实际使用的索引。为 NULL 表示未使用任何索引。</p>
 * @method void setKey(string $Key) 设置<p>实际使用的索引。为 NULL 表示未使用任何索引。</p>
 * @method string getKeyLen() 获取<p>实际使用的索引长度（字节数）。可用来判断联合索引中实际使用了哪几个列。值越短说明使用的索引列越少。</p>
 * @method void setKeyLen(string $KeyLen) 设置<p>实际使用的索引长度（字节数）。可用来判断联合索引中实际使用了哪几个列。值越短说明使用的索引列越少。</p>
 * @method string getRef() 获取<p>显示哪些列或常量与 key 列中的索引进行比较。常见值：const（常量）、某个列名、func（函数结果）。</p>
 * @method void setRef(string $Ref) 设置<p>显示哪些列或常量与 key 列中的索引进行比较。常见值：const（常量）、某个列名、func（函数结果）。</p>
 * @method integer getRows() 获取<p>预估要扫描的行数</p>
 * @method void setRows(integer $Rows) 设置<p>预估要扫描的行数</p>
 * @method float getFiltered() 获取<p>表示经过表条件过滤后，剩余行数占 rows 的百分比估算。100% 表示没有额外过滤，值越高越好。</p>
 * @method void setFiltered(float $Filtered) 设置<p>表示经过表条件过滤后，剩余行数占 rows 的百分比估算。100% 表示没有额外过滤，值越高越好。</p>
 * @method string getExtra() 获取<p>附加信息（非常重要），常见值： • Using index：覆盖索引，无需回表（好） • Using where：在存储引擎返回行后再用 WHERE 过滤 • Using temporary：使用了临时表（常见于 GROUP BY/ORDER BY，需优化） • Using filesort：使用了文件排序而非索引排序（需优化） • Using index condition：使用了索引下推（ICP）</p>
 * @method void setExtra(string $Extra) 设置<p>附加信息（非常重要），常见值： • Using index：覆盖索引，无需回表（好） • Using where：在存储引擎返回行后再用 WHERE 过滤 • Using temporary：使用了临时表（常见于 GROUP BY/ORDER BY，需优化） • Using filesort：使用了文件排序而非索引排序（需优化） • Using index condition：使用了索引下推（ICP）</p>
 */
class ExplainRow extends AbstractModel
{
    /**
     * @var integer <p>查询的序列号</p>
     */
    public $Id;

    /**
     * @var string <p>查询的类型，常见值：SIMPLE（简单查询，不含子查询或 UNION）、PRIMARY（最外层查询）、SUBQUERY（子查询中的第一个 SELECT）、DERIVED（派生表/FROM 子句中的子查询）、UNION（UNION 中第二个及之后的 SELECT）、UNION RESULT（UNION 的结果集）。</p>
     */
    public $SelectType;

    /**
     * @var string <p>数据表名</p>
     */
    public $Table;

    /**
     * @var string <p>查询匹配的分区</p>
     */
    public $Partitions;

    /**
     * @var string <p>访问类型（非常重要，衡量查询效率的关键指标），从优到差排列：system &gt; const &gt; eq_ref &gt; ref &gt; fulltext &gt; ref_or_null &gt; index_merge &gt; unique_subquery &gt; index_subquery &gt; range &gt; index &gt; ALL。常见值说明： • system：表只有一行记录（系统表） • const：通过主键或唯一索引匹配一行，常见于 WHERE pk = 1 • eq_ref：连接时使用主键或唯一索引，每个索引值只匹配一行 • ref：使用非唯一索引查找，可能匹配多行 • range：索引范围扫描，如 BETWEEN、&gt;、&lt;、IN • index：全索引扫描（遍历整棵索引树） • ALL：全表扫描（最差，需优化）</p>
     */
    public $Type;

    /**
     * @var string <p>查询中可能使用到的索引。为 NULL 表示没有可用索引。</p>
     */
    public $PossibleKeys;

    /**
     * @var string <p>实际使用的索引。为 NULL 表示未使用任何索引。</p>
     */
    public $Key;

    /**
     * @var string <p>实际使用的索引长度（字节数）。可用来判断联合索引中实际使用了哪几个列。值越短说明使用的索引列越少。</p>
     */
    public $KeyLen;

    /**
     * @var string <p>显示哪些列或常量与 key 列中的索引进行比较。常见值：const（常量）、某个列名、func（函数结果）。</p>
     */
    public $Ref;

    /**
     * @var integer <p>预估要扫描的行数</p>
     */
    public $Rows;

    /**
     * @var float <p>表示经过表条件过滤后，剩余行数占 rows 的百分比估算。100% 表示没有额外过滤，值越高越好。</p>
     */
    public $Filtered;

    /**
     * @var string <p>附加信息（非常重要），常见值： • Using index：覆盖索引，无需回表（好） • Using where：在存储引擎返回行后再用 WHERE 过滤 • Using temporary：使用了临时表（常见于 GROUP BY/ORDER BY，需优化） • Using filesort：使用了文件排序而非索引排序（需优化） • Using index condition：使用了索引下推（ICP）</p>
     */
    public $Extra;

    /**
     * @param integer $Id <p>查询的序列号</p>
     * @param string $SelectType <p>查询的类型，常见值：SIMPLE（简单查询，不含子查询或 UNION）、PRIMARY（最外层查询）、SUBQUERY（子查询中的第一个 SELECT）、DERIVED（派生表/FROM 子句中的子查询）、UNION（UNION 中第二个及之后的 SELECT）、UNION RESULT（UNION 的结果集）。</p>
     * @param string $Table <p>数据表名</p>
     * @param string $Partitions <p>查询匹配的分区</p>
     * @param string $Type <p>访问类型（非常重要，衡量查询效率的关键指标），从优到差排列：system &gt; const &gt; eq_ref &gt; ref &gt; fulltext &gt; ref_or_null &gt; index_merge &gt; unique_subquery &gt; index_subquery &gt; range &gt; index &gt; ALL。常见值说明： • system：表只有一行记录（系统表） • const：通过主键或唯一索引匹配一行，常见于 WHERE pk = 1 • eq_ref：连接时使用主键或唯一索引，每个索引值只匹配一行 • ref：使用非唯一索引查找，可能匹配多行 • range：索引范围扫描，如 BETWEEN、&gt;、&lt;、IN • index：全索引扫描（遍历整棵索引树） • ALL：全表扫描（最差，需优化）</p>
     * @param string $PossibleKeys <p>查询中可能使用到的索引。为 NULL 表示没有可用索引。</p>
     * @param string $Key <p>实际使用的索引。为 NULL 表示未使用任何索引。</p>
     * @param string $KeyLen <p>实际使用的索引长度（字节数）。可用来判断联合索引中实际使用了哪几个列。值越短说明使用的索引列越少。</p>
     * @param string $Ref <p>显示哪些列或常量与 key 列中的索引进行比较。常见值：const（常量）、某个列名、func（函数结果）。</p>
     * @param integer $Rows <p>预估要扫描的行数</p>
     * @param float $Filtered <p>表示经过表条件过滤后，剩余行数占 rows 的百分比估算。100% 表示没有额外过滤，值越高越好。</p>
     * @param string $Extra <p>附加信息（非常重要），常见值： • Using index：覆盖索引，无需回表（好） • Using where：在存储引擎返回行后再用 WHERE 过滤 • Using temporary：使用了临时表（常见于 GROUP BY/ORDER BY，需优化） • Using filesort：使用了文件排序而非索引排序（需优化） • Using index condition：使用了索引下推（ICP）</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("SelectType",$param) and $param["SelectType"] !== null) {
            $this->SelectType = $param["SelectType"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = $param["Partitions"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PossibleKeys",$param) and $param["PossibleKeys"] !== null) {
            $this->PossibleKeys = $param["PossibleKeys"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("KeyLen",$param) and $param["KeyLen"] !== null) {
            $this->KeyLen = $param["KeyLen"];
        }

        if (array_key_exists("Ref",$param) and $param["Ref"] !== null) {
            $this->Ref = $param["Ref"];
        }

        if (array_key_exists("Rows",$param) and $param["Rows"] !== null) {
            $this->Rows = $param["Rows"];
        }

        if (array_key_exists("Filtered",$param) and $param["Filtered"] !== null) {
            $this->Filtered = $param["Filtered"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }
    }
}
