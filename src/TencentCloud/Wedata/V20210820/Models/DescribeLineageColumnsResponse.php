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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLineageColumns返回参数结构体
 *
 * @method array getMetastoreType() 获取元数据类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetastoreType(array $MetastoreType) 设置元数据类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetastoreTypeName() 获取元数据类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetastoreTypeName(string $MetastoreTypeName) 设置元数据类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getColumnSet() 获取字段列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnSet(array $ColumnSet) 设置字段列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLineageColumnsResponse extends AbstractModel
{
    /**
     * @var array 元数据类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetastoreType;

    /**
     * @var string 元数据类型名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetastoreTypeName;

    /**
     * @var string 表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var array 字段列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnSet;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $MetastoreType 元数据类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetastoreTypeName 元数据类型名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ColumnSet 字段列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("MetastoreType",$param) and $param["MetastoreType"] !== null) {
            $this->MetastoreType = $param["MetastoreType"];
        }

        if (array_key_exists("MetastoreTypeName",$param) and $param["MetastoreTypeName"] !== null) {
            $this->MetastoreTypeName = $param["MetastoreTypeName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("ColumnSet",$param) and $param["ColumnSet"] !== null) {
            $this->ColumnSet = [];
            foreach ($param["ColumnSet"] as $key => $value){
                $obj = new ColumnLineageInfo();
                $obj->deserialize($value);
                array_push($this->ColumnSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
