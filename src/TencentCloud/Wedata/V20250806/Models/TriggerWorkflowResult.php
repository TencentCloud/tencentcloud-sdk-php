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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作流列表查询
 *
 * @method integer getTotalCount() 获取总记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置总记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalPageNumber() 获取页数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalPageNumber(integer $TotalPageNumber) 设置页数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageNumber() 获取页码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageNumber(integer $PageNumber) 设置页码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageSize() 获取页大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageSize(integer $PageSize) 设置页大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getItems() 获取工作流信息集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItems(array $Items) 设置工作流信息集合
注意：此字段可能返回 null，表示取不到有效值。
 */
class TriggerWorkflowResult extends AbstractModel
{
    /**
     * @var integer 总记录数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var integer 页数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalPageNumber;

    /**
     * @var integer 页码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageNumber;

    /**
     * @var integer 页大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageSize;

    /**
     * @var array 工作流信息集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Items;

    /**
     * @param integer $TotalCount 总记录数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalPageNumber 页数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageNumber 页码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageSize 页大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Items 工作流信息集合
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalPageNumber",$param) and $param["TotalPageNumber"] !== null) {
            $this->TotalPageNumber = $param["TotalPageNumber"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new TriggerWorkflowBrief();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
