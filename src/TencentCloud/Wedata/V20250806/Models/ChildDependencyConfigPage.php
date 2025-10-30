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
 * 任务下游依赖详情分页
 *
 * @method integer getTotalCount() 获取结果总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置结果总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalPageNumber() 获取总页数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalPageNumber(integer $TotalPageNumber) 设置总页数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageNumber() 获取页码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageNumber(integer $PageNumber) 设置页码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageSize() 获取分页大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageSize(integer $PageSize) 设置分页大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getItems() 获取分页数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItems(array $Items) 设置分页数据
注意：此字段可能返回 null，表示取不到有效值。
 */
class ChildDependencyConfigPage extends AbstractModel
{
    /**
     * @var integer 结果总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var integer 总页数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalPageNumber;

    /**
     * @var integer 页码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageNumber;

    /**
     * @var integer 分页大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageSize;

    /**
     * @var array 分页数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Items;

    /**
     * @param integer $TotalCount 结果总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalPageNumber 总页数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageNumber 页码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageSize 分页大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Items 分页数据
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
                $obj = new OpsTaskDepend();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
