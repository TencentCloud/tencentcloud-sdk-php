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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulList请求参数结构体
 *
 * @method integer getLimit() 获取返回数量，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，最大值为100。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method array getFilters() 获取过滤条件。
<li>Status - String - 是否必填：否 - 处理状态  0 -- 待处理 1 -- 已加白 2 -- 已删除 3 - 已忽略</li>
<li>ModifyTime - String - 是否必填：否 - 最近发生时间</li>
<li>Uuid- String - 是否必填：否 - 主机uuid查询</li>
<li>VulName- string -</li>
<li>VulCategory- string - 是否必填：否 - 漏洞类别 1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞</li>
<li>IsSupportDefense - int- 是否必填：否 - 是否支持防御 0:不支持 1:支持</li>
<li>Labels- string- 是否必填：否 - 标签搜索</li>
<li>IsSupportAutoFix- string- 是否必填：否 - 是否支持自动修复 0:不支持 1:支持</li>
<li>CvssScore- string- 是否必填：否 - CvssScore大于多少</li>
<li>AttackLevel- string- 是否必填：否 - 攻击热度大于多少</li>


 * @method void setFilters(array $Filters) 设置过滤条件。
<li>Status - String - 是否必填：否 - 处理状态  0 -- 待处理 1 -- 已加白 2 -- 已删除 3 - 已忽略</li>
<li>ModifyTime - String - 是否必填：否 - 最近发生时间</li>
<li>Uuid- String - 是否必填：否 - 主机uuid查询</li>
<li>VulName- string -</li>
<li>VulCategory- string - 是否必填：否 - 漏洞类别 1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞</li>
<li>IsSupportDefense - int- 是否必填：否 - 是否支持防御 0:不支持 1:支持</li>
<li>Labels- string- 是否必填：否 - 标签搜索</li>
<li>IsSupportAutoFix- string- 是否必填：否 - 是否支持自动修复 0:不支持 1:支持</li>
<li>CvssScore- string- 是否必填：否 - CvssScore大于多少</li>
<li>AttackLevel- string- 是否必填：否 - 攻击热度大于多少</li>


 * @method string getBy() 获取可选排序字段 Level，LastTime，HostCount
 * @method void setBy(string $By) 设置可选排序字段 Level，LastTime，HostCount
 * @method string getOrder() 获取排序顺序：desc  默认asc
 * @method void setOrder(string $Order) 设置排序顺序：desc  默认asc
 */
class DescribeVulListRequest extends AbstractModel
{
    /**
     * @var integer 返回数量，最大值为100。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var array 过滤条件。
<li>Status - String - 是否必填：否 - 处理状态  0 -- 待处理 1 -- 已加白 2 -- 已删除 3 - 已忽略</li>
<li>ModifyTime - String - 是否必填：否 - 最近发生时间</li>
<li>Uuid- String - 是否必填：否 - 主机uuid查询</li>
<li>VulName- string -</li>
<li>VulCategory- string - 是否必填：否 - 漏洞类别 1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞</li>
<li>IsSupportDefense - int- 是否必填：否 - 是否支持防御 0:不支持 1:支持</li>
<li>Labels- string- 是否必填：否 - 标签搜索</li>
<li>IsSupportAutoFix- string- 是否必填：否 - 是否支持自动修复 0:不支持 1:支持</li>
<li>CvssScore- string- 是否必填：否 - CvssScore大于多少</li>
<li>AttackLevel- string- 是否必填：否 - 攻击热度大于多少</li>


     */
    public $Filters;

    /**
     * @var string 可选排序字段 Level，LastTime，HostCount
     */
    public $By;

    /**
     * @var string 排序顺序：desc  默认asc
     */
    public $Order;

    /**
     * @param integer $Limit 返回数量，最大值为100。
     * @param integer $Offset 偏移量，默认为0。
     * @param array $Filters 过滤条件。
<li>Status - String - 是否必填：否 - 处理状态  0 -- 待处理 1 -- 已加白 2 -- 已删除 3 - 已忽略</li>
<li>ModifyTime - String - 是否必填：否 - 最近发生时间</li>
<li>Uuid- String - 是否必填：否 - 主机uuid查询</li>
<li>VulName- string -</li>
<li>VulCategory- string - 是否必填：否 - 漏洞类别 1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞</li>
<li>IsSupportDefense - int- 是否必填：否 - 是否支持防御 0:不支持 1:支持</li>
<li>Labels- string- 是否必填：否 - 标签搜索</li>
<li>IsSupportAutoFix- string- 是否必填：否 - 是否支持自动修复 0:不支持 1:支持</li>
<li>CvssScore- string- 是否必填：否 - CvssScore大于多少</li>
<li>AttackLevel- string- 是否必填：否 - 攻击热度大于多少</li>


     * @param string $By 可选排序字段 Level，LastTime，HostCount
     * @param string $Order 排序顺序：desc  默认asc
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
