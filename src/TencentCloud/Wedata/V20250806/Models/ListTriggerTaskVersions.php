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
 * 查询任务版本分页列表
 *
 * @method array getItems() 获取记录列表	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItems(array $Items) 设置记录列表	
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取满足查询条件的数据总条数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置满足查询条件的数据总条数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalPageNumber() 获取满足查询条件的数据总页数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalPageNumber(integer $TotalPageNumber) 设置满足查询条件的数据总页数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageCount() 获取当前页记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageCount(integer $PageCount) 设置当前页记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageSize() 获取当前请求的数据页条数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageSize(integer $PageSize) 设置当前请求的数据页条数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageNumber() 获取当前请求的数据页数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageNumber(integer $PageNumber) 设置当前请求的数据页数。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ListTriggerTaskVersions extends AbstractModel
{
    /**
     * @var array 记录列表	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Items;

    /**
     * @var integer 满足查询条件的数据总条数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var integer 满足查询条件的数据总页数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalPageNumber;

    /**
     * @var integer 当前页记录数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageCount;

    /**
     * @var integer 当前请求的数据页条数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageSize;

    /**
     * @var integer 当前请求的数据页数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageNumber;

    /**
     * @param array $Items 记录列表	
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 满足查询条件的数据总条数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalPageNumber 满足查询条件的数据总页数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageCount 当前页记录数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageSize 当前请求的数据页条数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageNumber 当前请求的数据页数。
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
        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new TriggerTaskVersion();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalPageNumber",$param) and $param["TotalPageNumber"] !== null) {
            $this->TotalPageNumber = $param["TotalPageNumber"];
        }

        if (array_key_exists("PageCount",$param) and $param["PageCount"] !== null) {
            $this->PageCount = $param["PageCount"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }
    }
}
