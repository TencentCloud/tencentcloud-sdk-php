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
 * 补录计划实例集合
 *
 * @method integer getTotalCount() 获取记录总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置记录总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalPage() 获取记录总页数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalPage(integer $TotalPage) 设置记录总页数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageCount() 获取当前页记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageCount(integer $PageCount) 设置当前页记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageNumber() 获取页码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageNumber(integer $PageNumber) 设置页码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageSize() 获取页大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageSize(integer $PageSize) 设置页大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getItems() 获取记录列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItems(array $Items) 设置记录列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class MakePlanInstanceOpsDtoCollection extends AbstractModel
{
    /**
     * @var integer 记录总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var integer 记录总页数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalPage;

    /**
     * @var integer 当前页记录数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageCount;

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
     * @var array 记录列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Items;

    /**
     * @param integer $TotalCount 记录总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalPage 记录总页数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageCount 当前页记录数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageNumber 页码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageSize 页大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Items 记录列表
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

        if (array_key_exists("TotalPage",$param) and $param["TotalPage"] !== null) {
            $this->TotalPage = $param["TotalPage"];
        }

        if (array_key_exists("PageCount",$param) and $param["PageCount"] !== null) {
            $this->PageCount = $param["PageCount"];
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
                $obj = new InstanceOpsDto();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
