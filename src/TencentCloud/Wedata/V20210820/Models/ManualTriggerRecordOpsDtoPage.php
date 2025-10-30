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
 * 手动工作流触发运行记录分页查询
 *
 * @method integer getPageNumber() 获取页号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageNumber(integer $PageNumber) 设置页号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageSize() 获取页大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageSize(integer $PageSize) 设置页大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getItems() 获取手动工作流触发运行记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItems(array $Items) 设置手动工作流触发运行记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalPage() 获取总页数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalPage(integer $TotalPage) 设置总页数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageCount() 获取页数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageCount(integer $PageCount) 设置页数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取总条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置总条数
注意：此字段可能返回 null，表示取不到有效值。
 */
class ManualTriggerRecordOpsDtoPage extends AbstractModel
{
    /**
     * @var integer 页号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageNumber;

    /**
     * @var integer 页大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageSize;

    /**
     * @var array 手动工作流触发运行记录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Items;

    /**
     * @var integer 总页数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalPage;

    /**
     * @var integer 页数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageCount;

    /**
     * @var integer 总条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @param integer $PageNumber 页号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageSize 页大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Items 手动工作流触发运行记录
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalPage 总页数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageCount 页数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 总条数
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new ManualTriggerRecordOpsDto();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("TotalPage",$param) and $param["TotalPage"] !== null) {
            $this->TotalPage = $param["TotalPage"];
        }

        if (array_key_exists("PageCount",$param) and $param["PageCount"] !== null) {
            $this->PageCount = $param["PageCount"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
