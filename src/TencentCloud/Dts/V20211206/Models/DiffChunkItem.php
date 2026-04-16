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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据块内不一致数据的详情信息
 *
 * @method string getDBName() 获取数据库名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDBName(string $DBName) 设置数据库名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchemaName() 获取schema名
 * @method void setSchemaName(string $SchemaName) 设置schema名
 * @method string getTableName() 获取数据表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置数据表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getChunkId() 获取分块号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChunkId(integer $ChunkId) 设置分块号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdentifier() 获取数据标识符，比如主键信息等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdentifier(string $Identifier) 设置数据标识符，比如主键信息等
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiffType() 获取不一致类型，可能的取值为：data - 两边数据不一致；srcLack - 源缺失；dstLack - 目标缺失
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiffType(string $DiffType) 设置不一致类型，可能的取值为：data - 两边数据不一致；srcLack - 源缺失；dstLack - 目标缺失
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSchemaInfo() 获取表结构信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaInfo(array $SchemaInfo) 设置表结构信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSrcItem() 获取源端数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcItem(array $SrcItem) 设置源端数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDstItem() 获取目标端数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstItem(array $DstItem) 设置目标端数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFinishedAt() 获取完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinishedAt(string $FinishedAt) 设置完成时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class DiffChunkItem extends AbstractModel
{
    /**
     * @var string 数据库名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DBName;

    /**
     * @var string schema名
     */
    public $SchemaName;

    /**
     * @var string 数据表名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var integer 分块号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChunkId;

    /**
     * @var string 数据标识符，比如主键信息等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Identifier;

    /**
     * @var string 不一致类型，可能的取值为：data - 两边数据不一致；srcLack - 源缺失；dstLack - 目标缺失
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiffType;

    /**
     * @var array 表结构信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaInfo;

    /**
     * @var array 源端数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcItem;

    /**
     * @var array 目标端数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DstItem;

    /**
     * @var string 完成时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinishedAt;

    /**
     * @param string $DBName 数据库名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchemaName schema名
     * @param string $TableName 数据表名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ChunkId 分块号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Identifier 数据标识符，比如主键信息等
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiffType 不一致类型，可能的取值为：data - 两边数据不一致；srcLack - 源缺失；dstLack - 目标缺失
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SchemaInfo 表结构信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SrcItem 源端数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DstItem 目标端数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FinishedAt 完成时间
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
        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("ChunkId",$param) and $param["ChunkId"] !== null) {
            $this->ChunkId = $param["ChunkId"];
        }

        if (array_key_exists("Identifier",$param) and $param["Identifier"] !== null) {
            $this->Identifier = $param["Identifier"];
        }

        if (array_key_exists("DiffType",$param) and $param["DiffType"] !== null) {
            $this->DiffType = $param["DiffType"];
        }

        if (array_key_exists("SchemaInfo",$param) and $param["SchemaInfo"] !== null) {
            $this->SchemaInfo = $param["SchemaInfo"];
        }

        if (array_key_exists("SrcItem",$param) and $param["SrcItem"] !== null) {
            $this->SrcItem = $param["SrcItem"];
        }

        if (array_key_exists("DstItem",$param) and $param["DstItem"] !== null) {
            $this->DstItem = $param["DstItem"];
        }

        if (array_key_exists("FinishedAt",$param) and $param["FinishedAt"] !== null) {
            $this->FinishedAt = $param["FinishedAt"];
        }
    }
}
