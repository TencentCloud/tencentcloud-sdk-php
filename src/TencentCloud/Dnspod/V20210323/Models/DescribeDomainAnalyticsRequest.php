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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDomainAnalytics请求参数结构体
 *
 * @method string getDomain() 获取<p>要查询解析量的域名</p>
 * @method void setDomain(string $Domain) 设置<p>要查询解析量的域名</p>
 * @method string getStartDate() 获取<p>查询的开始时间，格式：YYYY-MM-DD</p>
 * @method void setStartDate(string $StartDate) 设置<p>查询的开始时间，格式：YYYY-MM-DD</p>
 * @method string getEndDate() 获取<p>查询的结束时间，格式：YYYY-MM-DD</p>
 * @method void setEndDate(string $EndDate) 设置<p>查询的结束时间，格式：YYYY-MM-DD</p>
 * @method string getDnsFormat() 获取<p>DATE:按天维度统计 HOUR:按小时维度统计</p>
 * @method void setDnsFormat(string $DnsFormat) 设置<p>DATE:按天维度统计 HOUR:按小时维度统计</p>
 * @method integer getDomainId() 获取<p>域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。</p>
 * @method void setDomainId(integer $DomainId) 设置<p>域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。</p>
 * @method string getDNSFormat() 获取<p>解析量数据格式</p><p>枚举值：</p><ul><li>DATE： 按天维度统计</li><li>HOUR： 按小时维度统计</li></ul><p>新增规范参数，同时传递DNSFormat和DnsFormat参数时，后端优先使用DNSFormat参数</p>
 * @method void setDNSFormat(string $DNSFormat) 设置<p>解析量数据格式</p><p>枚举值：</p><ul><li>DATE： 按天维度统计</li><li>HOUR： 按小时维度统计</li></ul><p>新增规范参数，同时传递DNSFormat和DnsFormat参数时，后端优先使用DNSFormat参数</p>
 */
class DescribeDomainAnalyticsRequest extends AbstractModel
{
    /**
     * @var string <p>要查询解析量的域名</p>
     */
    public $Domain;

    /**
     * @var string <p>查询的开始时间，格式：YYYY-MM-DD</p>
     */
    public $StartDate;

    /**
     * @var string <p>查询的结束时间，格式：YYYY-MM-DD</p>
     */
    public $EndDate;

    /**
     * @var string <p>DATE:按天维度统计 HOUR:按小时维度统计</p>
     * @deprecated
     */
    public $DnsFormat;

    /**
     * @var integer <p>域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。</p>
     */
    public $DomainId;

    /**
     * @var string <p>解析量数据格式</p><p>枚举值：</p><ul><li>DATE： 按天维度统计</li><li>HOUR： 按小时维度统计</li></ul><p>新增规范参数，同时传递DNSFormat和DnsFormat参数时，后端优先使用DNSFormat参数</p>
     */
    public $DNSFormat;

    /**
     * @param string $Domain <p>要查询解析量的域名</p>
     * @param string $StartDate <p>查询的开始时间，格式：YYYY-MM-DD</p>
     * @param string $EndDate <p>查询的结束时间，格式：YYYY-MM-DD</p>
     * @param string $DnsFormat <p>DATE:按天维度统计 HOUR:按小时维度统计</p>
     * @param integer $DomainId <p>域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。</p>
     * @param string $DNSFormat <p>解析量数据格式</p><p>枚举值：</p><ul><li>DATE： 按天维度统计</li><li>HOUR： 按小时维度统计</li></ul><p>新增规范参数，同时传递DNSFormat和DnsFormat参数时，后端优先使用DNSFormat参数</p>
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

        if (array_key_exists("DnsFormat",$param) and $param["DnsFormat"] !== null) {
            $this->DnsFormat = $param["DnsFormat"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("DNSFormat",$param) and $param["DNSFormat"] !== null) {
            $this->DNSFormat = $param["DNSFormat"];
        }
    }
}
