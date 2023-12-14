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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * - [ ] 过滤条件<br>

<li>Name - String - 是否必填：否 - 操作符: ilike  - 排序支持：否- 根据分组名称进行查询。</li>
分页参数<br>
<li>PageNum 从1开始，小于等于0时使用默认参数。</li>
<li>PageSize 最大值5000，最好不超过100。</li>
 *
 * @method array getFilters() 获取Filters 条件过滤
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilters(array $Filters) 设置Filters 条件过滤
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFilterGroups() 获取FilterGroups 条件过滤组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilterGroups(array $FilterGroups) 设置FilterGroups 条件过滤组
注意：此字段可能返回 null，表示取不到有效值。
 * @method Sort getSort() 获取Sort 排序字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSort(Sort $Sort) 设置Sort 排序字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageSize() 获取PageSize 每页获取数(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageSize(integer $PageSize) 设置PageSize 每页获取数(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageNum() 获取PageNum 获取第几页(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageNum(integer $PageNum) 设置PageNum 获取第几页(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 */
class Condition extends AbstractModel
{
    /**
     * @var array Filters 条件过滤
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Filters;

    /**
     * @var array FilterGroups 条件过滤组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilterGroups;

    /**
     * @var Sort Sort 排序字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sort;

    /**
     * @var integer PageSize 每页获取数(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageSize;

    /**
     * @var integer PageNum 获取第几页(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageNum;

    /**
     * @param array $Filters Filters 条件过滤
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FilterGroups FilterGroups 条件过滤组
注意：此字段可能返回 null，表示取不到有效值。
     * @param Sort $Sort Sort 排序字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageSize PageSize 每页获取数(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageNum PageNum 获取第几页(只支持32位)
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("FilterGroups",$param) and $param["FilterGroups"] !== null) {
            $this->FilterGroups = [];
            foreach ($param["FilterGroups"] as $key => $value){
                $obj = new FilterGroup();
                $obj->deserialize($value);
                array_push($this->FilterGroups, $obj);
            }
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new Sort();
            $this->Sort->deserialize($param["Sort"]);
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }
    }
}
