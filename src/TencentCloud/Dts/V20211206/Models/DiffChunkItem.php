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
 * @method string getDBName() 获取<p>数据库名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDBName(string $DBName) 设置<p>数据库名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchemaName() 获取<p>schema名</p>
 * @method void setSchemaName(string $SchemaName) 设置<p>schema名</p>
 * @method string getTableName() 获取<p>数据表名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置<p>数据表名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getChunkId() 获取<p>分块号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChunkId(integer $ChunkId) 设置<p>分块号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdentifier() 获取<p>数据标识符，比如主键信息等</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdentifier(string $Identifier) 设置<p>数据标识符，比如主键信息等</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiffType() 获取<p>不一致类型，可能的取值为：data - 两边数据不一致；srcLack - 源缺失；dstLack - 目标缺失</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiffType(string $DiffType) 设置<p>不一致类型，可能的取值为：data - 两边数据不一致；srcLack - 源缺失；dstLack - 目标缺失</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSchemaInfo() 获取<p>表结构信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaInfo(array $SchemaInfo) 设置<p>表结构信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSrcItem() 获取<p>源端数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcItem(array $SrcItem) 设置<p>源端数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDstItem() 获取<p>目标端数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstItem(array $DstItem) 设置<p>目标端数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFinishedAt() 获取<p>完成时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinishedAt(string $FinishedAt) 设置<p>完成时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DiffChunkItem extends AbstractModel
{
    /**
     * @var string <p>数据库名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DBName;

    /**
     * @var string <p>schema名</p>
     */
    public $SchemaName;

    /**
     * @var string <p>数据表名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var integer <p>分块号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChunkId;

    /**
     * @var string <p>数据标识符，比如主键信息等</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Identifier;

    /**
     * @var string <p>不一致类型，可能的取值为：data - 两边数据不一致；srcLack - 源缺失；dstLack - 目标缺失</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiffType;

    /**
     * @var array <p>表结构信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaInfo;

    /**
     * @var array <p>源端数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcItem;

    /**
     * @var array <p>目标端数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DstItem;

    /**
     * @var string <p>完成时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinishedAt;

    /**
     * @param string $DBName <p>数据库名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchemaName <p>schema名</p>
     * @param string $TableName <p>数据表名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ChunkId <p>分块号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Identifier <p>数据标识符，比如主键信息等</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiffType <p>不一致类型，可能的取值为：data - 两边数据不一致；srcLack - 源缺失；dstLack - 目标缺失</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SchemaInfo <p>表结构信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SrcItem <p>源端数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DstItem <p>目标端数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FinishedAt <p>完成时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
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
