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
 * 查询告警规则列表
 *
 * @method integer getPageNumber() 获取分页的页数，当前页数
 * @method void setPageNumber(integer $PageNumber) 设置分页的页数，当前页数
 * @method integer getPageSize() 获取每页显示的条数
 * @method void setPageSize(integer $PageSize) 设置每页显示的条数
 * @method integer getTotalPageNumber() 获取分页总页数
 * @method void setTotalPageNumber(integer $TotalPageNumber) 设置分页总页数
 * @method integer getTotalCount() 获取所有的告警规则个数
 * @method void setTotalCount(integer $TotalCount) 设置所有的告警规则个数
 * @method array getItems() 获取告警规则信息列表
 * @method void setItems(array $Items) 设置告警规则信息列表
 */
class ListAlarmRulesResult extends AbstractModel
{
    /**
     * @var integer 分页的页数，当前页数
     */
    public $PageNumber;

    /**
     * @var integer 每页显示的条数
     */
    public $PageSize;

    /**
     * @var integer 分页总页数
     */
    public $TotalPageNumber;

    /**
     * @var integer 所有的告警规则个数
     */
    public $TotalCount;

    /**
     * @var array 告警规则信息列表
     */
    public $Items;

    /**
     * @param integer $PageNumber 分页的页数，当前页数
     * @param integer $PageSize 每页显示的条数
     * @param integer $TotalPageNumber 分页总页数
     * @param integer $TotalCount 所有的告警规则个数
     * @param array $Items 告警规则信息列表
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

        if (array_key_exists("TotalPageNumber",$param) and $param["TotalPageNumber"] !== null) {
            $this->TotalPageNumber = $param["TotalPageNumber"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new AlarmRuleData();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
