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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatasetDetailStructured返回参数结构体
 *
 * @method integer getTotalCount() 获取数据总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置数据总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getColumnNames() 获取表格头信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnNames(array $ColumnNames) 设置表格头信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRowItems() 获取表格内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRowItems(array $RowItems) 设置表格内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRowTexts() 获取文本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRowTexts(array $RowTexts) 设置文本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDatasetDetailStructuredResponse extends AbstractModel
{
    /**
     * @var integer 数据总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var array 表格头信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnNames;

    /**
     * @var array 表格内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RowItems;

    /**
     * @var array 文本内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RowTexts;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 数据总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ColumnNames 表格头信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RowItems 表格内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RowTexts 文本内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ColumnNames",$param) and $param["ColumnNames"] !== null) {
            $this->ColumnNames = $param["ColumnNames"];
        }

        if (array_key_exists("RowItems",$param) and $param["RowItems"] !== null) {
            $this->RowItems = [];
            foreach ($param["RowItems"] as $key => $value){
                $obj = new RowItem();
                $obj->deserialize($value);
                array_push($this->RowItems, $obj);
            }
        }

        if (array_key_exists("RowTexts",$param) and $param["RowTexts"] !== null) {
            $this->RowTexts = $param["RowTexts"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
