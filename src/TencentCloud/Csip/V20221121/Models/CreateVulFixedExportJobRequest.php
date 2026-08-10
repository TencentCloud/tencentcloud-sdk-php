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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVulFixedExportJob请求参数结构体
 *
 * @method array getFilters() 获取<p>过滤条件（与 DescribeVulFixedList 一致）<br>支持的Filter.Name：<br>Keyword - 模糊匹配，按关键字搜索（漏洞名称/CVE编号/主机名称/实例ID）<br>VulName - 模糊匹配，按漏洞名称搜索<br>Level - 精确匹配，按漏洞等级筛选：LOW-低危 MEDIUM-中危 HIGH-高危 CRITICAL-严重<br>VprLevel - 精确匹配，按VPR评级筛选：1-Low 2-Medium 3-High 4-Critical<br>VulCategory - 精确匹配，按漏洞类型筛选：LINUX-Linux软件漏洞 WINDOWS-Windows系统补丁漏洞 WEB_CMS-Web-CMS漏洞 APPLICATION-应用漏洞 EMERGENCY-应急漏洞<br>MachineName - 模糊匹配，按主机名称搜索<br>InstanceId - 模糊匹配，按实例ID搜索<br>FixTime - 范围匹配，修复时间范围，传入两个值表示起止时间</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件（与 DescribeVulFixedList 一致）<br>支持的Filter.Name：<br>Keyword - 模糊匹配，按关键字搜索（漏洞名称/CVE编号/主机名称/实例ID）<br>VulName - 模糊匹配，按漏洞名称搜索<br>Level - 精确匹配，按漏洞等级筛选：LOW-低危 MEDIUM-中危 HIGH-高危 CRITICAL-严重<br>VprLevel - 精确匹配，按VPR评级筛选：1-Low 2-Medium 3-High 4-Critical<br>VulCategory - 精确匹配，按漏洞类型筛选：LINUX-Linux软件漏洞 WINDOWS-Windows系统补丁漏洞 WEB_CMS-Web-CMS漏洞 APPLICATION-应用漏洞 EMERGENCY-应急漏洞<br>MachineName - 模糊匹配，按主机名称搜索<br>InstanceId - 模糊匹配，按实例ID搜索<br>FixTime - 范围匹配，修复时间范围，传入两个值表示起止时间</p>
 * @method string getOrder() 获取<p>排序字段<br>枚举值：<br>FixTime：按修复时间排序<br>VulName：按漏洞名称排序</p>
 * @method void setOrder(string $Order) 设置<p>排序字段<br>枚举值：<br>FixTime：按修复时间排序<br>VulName：按漏洞名称排序</p>
 * @method string getBy() 获取<p>排序方式<br>枚举值：<br>asc：升序<br>desc：降序<br>默认值：desc</p>
 * @method void setBy(string $By) 设置<p>排序方式<br>枚举值：<br>asc：升序<br>desc：降序<br>默认值：desc</p>
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 */
class CreateVulFixedExportJobRequest extends AbstractModel
{
    /**
     * @var array <p>过滤条件（与 DescribeVulFixedList 一致）<br>支持的Filter.Name：<br>Keyword - 模糊匹配，按关键字搜索（漏洞名称/CVE编号/主机名称/实例ID）<br>VulName - 模糊匹配，按漏洞名称搜索<br>Level - 精确匹配，按漏洞等级筛选：LOW-低危 MEDIUM-中危 HIGH-高危 CRITICAL-严重<br>VprLevel - 精确匹配，按VPR评级筛选：1-Low 2-Medium 3-High 4-Critical<br>VulCategory - 精确匹配，按漏洞类型筛选：LINUX-Linux软件漏洞 WINDOWS-Windows系统补丁漏洞 WEB_CMS-Web-CMS漏洞 APPLICATION-应用漏洞 EMERGENCY-应急漏洞<br>MachineName - 模糊匹配，按主机名称搜索<br>InstanceId - 模糊匹配，按实例ID搜索<br>FixTime - 范围匹配，修复时间范围，传入两个值表示起止时间</p>
     */
    public $Filters;

    /**
     * @var string <p>排序字段<br>枚举值：<br>FixTime：按修复时间排序<br>VulName：按漏洞名称排序</p>
     */
    public $Order;

    /**
     * @var string <p>排序方式<br>枚举值：<br>asc：升序<br>desc：降序<br>默认值：desc</p>
     */
    public $By;

    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @param array $Filters <p>过滤条件（与 DescribeVulFixedList 一致）<br>支持的Filter.Name：<br>Keyword - 模糊匹配，按关键字搜索（漏洞名称/CVE编号/主机名称/实例ID）<br>VulName - 模糊匹配，按漏洞名称搜索<br>Level - 精确匹配，按漏洞等级筛选：LOW-低危 MEDIUM-中危 HIGH-高危 CRITICAL-严重<br>VprLevel - 精确匹配，按VPR评级筛选：1-Low 2-Medium 3-High 4-Critical<br>VulCategory - 精确匹配，按漏洞类型筛选：LINUX-Linux软件漏洞 WINDOWS-Windows系统补丁漏洞 WEB_CMS-Web-CMS漏洞 APPLICATION-应用漏洞 EMERGENCY-应急漏洞<br>MachineName - 模糊匹配，按主机名称搜索<br>InstanceId - 模糊匹配，按实例ID搜索<br>FixTime - 范围匹配，修复时间范围，传入两个值表示起止时间</p>
     * @param string $Order <p>排序字段<br>枚举值：<br>FixTime：按修复时间排序<br>VulName：按漏洞名称排序</p>
     * @param string $By <p>排序方式<br>枚举值：<br>asc：升序<br>desc：降序<br>默认值：desc</p>
     * @param array $MemberId 集团账号的成员id
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
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
