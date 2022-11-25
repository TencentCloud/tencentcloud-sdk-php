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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSubdomainAnalytics请求参数结构体
 *
 * @method string getDomain() 获取要查询解析量的域名
 * @method void setDomain(string $Domain) 设置要查询解析量的域名
 * @method string getStartDate() 获取查询的开始时间，格式：YYYY-MM-DD
 * @method void setStartDate(string $StartDate) 设置查询的开始时间，格式：YYYY-MM-DD
 * @method string getEndDate() 获取查询的结束时间，格式：YYYY-MM-DD
 * @method void setEndDate(string $EndDate) 设置查询的结束时间，格式：YYYY-MM-DD
 * @method string getSubdomain() 获取要查询解析量的子域名
 * @method void setSubdomain(string $Subdomain) 设置要查询解析量的子域名
 * @method string getDnsFormat() 获取DATE:按天维度统计 HOUR:按小时维度统计
 * @method void setDnsFormat(string $DnsFormat) 设置DATE:按天维度统计 HOUR:按小时维度统计
 * @method integer getDomainId() 获取域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。可以通过接口DescribeDomainList查到所有的Domain以及DomainId
 * @method void setDomainId(integer $DomainId) 设置域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。可以通过接口DescribeDomainList查到所有的Domain以及DomainId
 */
class DescribeSubdomainAnalyticsRequest extends AbstractModel
{
    /**
     * @var string 要查询解析量的域名
     */
    public $Domain;

    /**
     * @var string 查询的开始时间，格式：YYYY-MM-DD
     */
    public $StartDate;

    /**
     * @var string 查询的结束时间，格式：YYYY-MM-DD
     */
    public $EndDate;

    /**
     * @var string 要查询解析量的子域名
     */
    public $Subdomain;

    /**
     * @var string DATE:按天维度统计 HOUR:按小时维度统计
     */
    public $DnsFormat;

    /**
     * @var integer 域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。可以通过接口DescribeDomainList查到所有的Domain以及DomainId
     */
    public $DomainId;

    /**
     * @param string $Domain 要查询解析量的域名
     * @param string $StartDate 查询的开始时间，格式：YYYY-MM-DD
     * @param string $EndDate 查询的结束时间，格式：YYYY-MM-DD
     * @param string $Subdomain 要查询解析量的子域名
     * @param string $DnsFormat DATE:按天维度统计 HOUR:按小时维度统计
     * @param integer $DomainId 域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。可以通过接口DescribeDomainList查到所有的Domain以及DomainId
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("Subdomain",$param) and $param["Subdomain"] !== null) {
            $this->Subdomain = $param["Subdomain"];
        }

        if (array_key_exists("DnsFormat",$param) and $param["DnsFormat"] !== null) {
            $this->DnsFormat = $param["DnsFormat"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }
    }
}
