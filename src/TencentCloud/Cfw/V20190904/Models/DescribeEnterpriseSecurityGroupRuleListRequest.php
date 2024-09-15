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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEnterpriseSecurityGroupRuleList请求参数结构体
 *
 * @method integer getLimit() 获取分页每页数量
 * @method void setLimit(integer $Limit) 设置分页每页数量
 * @method integer getOffset() 获取分页当前页
 * @method void setOffset(integer $Offset) 设置分页当前页
 * @method string getStatus() 获取启用状态 1启用 0 未启用
 * @method void setStatus(string $Status) 设置启用状态 1启用 0 未启用
 * @method string getArea() 获取地域
 * @method void setArea(string $Area) 设置地域
 * @method integer getFilter() 获取规则下发方式筛选  1 新规则和延迟下发  2  仅看新规则  
 * @method void setFilter(integer $Filter) 设置规则下发方式筛选  1 新规则和延迟下发  2  仅看新规则  
 * @method string getSearchValue() 获取查询条件
 * @method void setSearchValue(string $SearchValue) 设置查询条件
 * @method array getSearchFilters() 获取查询条件新
 * @method void setSearchFilters(array $SearchFilters) 设置查询条件新
 */
class DescribeEnterpriseSecurityGroupRuleListRequest extends AbstractModel
{
    /**
     * @var integer 分页每页数量
     */
    public $Limit;

    /**
     * @var integer 分页当前页
     */
    public $Offset;

    /**
     * @var string 启用状态 1启用 0 未启用
     */
    public $Status;

    /**
     * @var string 地域
     */
    public $Area;

    /**
     * @var integer 规则下发方式筛选  1 新规则和延迟下发  2  仅看新规则  
     */
    public $Filter;

    /**
     * @var string 查询条件
     */
    public $SearchValue;

    /**
     * @var array 查询条件新
     */
    public $SearchFilters;

    /**
     * @param integer $Limit 分页每页数量
     * @param integer $Offset 分页当前页
     * @param string $Status 启用状态 1启用 0 未启用
     * @param string $Area 地域
     * @param integer $Filter 规则下发方式筛选  1 新规则和延迟下发  2  仅看新规则  
     * @param string $SearchValue 查询条件
     * @param array $SearchFilters 查询条件新
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }

        if (array_key_exists("SearchValue",$param) and $param["SearchValue"] !== null) {
            $this->SearchValue = $param["SearchValue"];
        }

        if (array_key_exists("SearchFilters",$param) and $param["SearchFilters"] !== null) {
            $this->SearchFilters = [];
            foreach ($param["SearchFilters"] as $key => $value){
                $obj = new CommonFilter();
                $obj->deserialize($value);
                array_push($this->SearchFilters, $obj);
            }
        }
    }
}
