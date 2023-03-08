<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 元数据表详细信息
 *
 * @method string getTableId() 获取表Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableId(string $TableId) 设置表Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginDatabaseName() 获取表databaseName
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginDatabaseName(string $OriginDatabaseName) 设置表databaseName
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginSchemaName() 获取表schemaName
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginSchemaName(string $OriginSchemaName) 设置表schemaName
注意：此字段可能返回 null，表示取不到有效值。
 */
class TableInfo extends AbstractModel
{
    /**
     * @var string 表Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableId;

    /**
     * @var string 表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var string 表databaseName
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginDatabaseName;

    /**
     * @var string 表schemaName
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginSchemaName;

    /**
     * @param string $TableId 表Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginDatabaseName 表databaseName
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginSchemaName 表schemaName
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
        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("OriginDatabaseName",$param) and $param["OriginDatabaseName"] !== null) {
            $this->OriginDatabaseName = $param["OriginDatabaseName"];
        }

        if (array_key_exists("OriginSchemaName",$param) and $param["OriginSchemaName"] !== null) {
            $this->OriginSchemaName = $param["OriginSchemaName"];
        }
    }
}
