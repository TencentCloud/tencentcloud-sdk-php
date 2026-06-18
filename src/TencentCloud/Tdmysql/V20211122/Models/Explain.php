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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 执行计划
 *
 * @method string getID() 获取<p>标识符</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(string $ID) 设置<p>标识符</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSelectType() 获取<p>查询类型</p><p>枚举值：</p><ul><li>SIMPLE： 没有子查询和 UNION 的普通查询，单表或普通 JOIN 都是 SIMPLE。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelectType(string $SelectType) 设置<p>查询类型</p><p>枚举值：</p><ul><li>SIMPLE： 没有子查询和 UNION 的普通查询，单表或普通 JOIN 都是 SIMPLE。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTable() 获取<p>表名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTable(string $Table) 设置<p>表名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPartitions() 获取<p>分区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitions(string $Partitions) 设置<p>分区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取<p>访问类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>访问类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPossibleKeys() 获取<p>可能使用的索引</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPossibleKeys(string $PossibleKeys) 设置<p>可能使用的索引</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKey() 获取<p>实际使用的索引</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置<p>实际使用的索引</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKeyLen() 获取<p>使用的索引长度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyLen(string $KeyLen) 设置<p>使用的索引长度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRef() 获取<p>与索引比较的列或常量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRef(string $Ref) 设置<p>与索引比较的列或常量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRows() 获取<p>估算扫描行数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRows(string $Rows) 设置<p>估算扫描行数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFiltered() 获取<p>条件过滤后剩余行的估算百分比</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFiltered(string $Filtered) 设置<p>条件过滤后剩余行的估算百分比</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtra() 获取<p>附加信息，如 Using index、Using filesort 等</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtra(string $Extra) 设置<p>附加信息，如 Using index、Using filesort 等</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class Explain extends AbstractModel
{
    /**
     * @var string <p>标识符</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @var string <p>查询类型</p><p>枚举值：</p><ul><li>SIMPLE： 没有子查询和 UNION 的普通查询，单表或普通 JOIN 都是 SIMPLE。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelectType;

    /**
     * @var string <p>表名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Table;

    /**
     * @var string <p>分区</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Partitions;

    /**
     * @var string <p>访问类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string <p>可能使用的索引</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PossibleKeys;

    /**
     * @var string <p>实际使用的索引</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string <p>使用的索引长度</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyLen;

    /**
     * @var string <p>与索引比较的列或常量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ref;

    /**
     * @var string <p>估算扫描行数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rows;

    /**
     * @var string <p>条件过滤后剩余行的估算百分比</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Filtered;

    /**
     * @var string <p>附加信息，如 Using index、Using filesort 等</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Extra;

    /**
     * @param string $ID <p>标识符</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SelectType <p>查询类型</p><p>枚举值：</p><ul><li>SIMPLE： 没有子查询和 UNION 的普通查询，单表或普通 JOIN 都是 SIMPLE。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Table <p>表名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Partitions <p>分区</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type <p>访问类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PossibleKeys <p>可能使用的索引</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Key <p>实际使用的索引</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KeyLen <p>使用的索引长度</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ref <p>与索引比较的列或常量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Rows <p>估算扫描行数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Filtered <p>条件过滤后剩余行的估算百分比</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Extra <p>附加信息，如 Using index、Using filesort 等</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
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
