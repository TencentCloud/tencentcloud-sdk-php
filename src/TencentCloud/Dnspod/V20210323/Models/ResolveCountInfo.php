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
 * 域名解析量统计信息
 *
 * @method integer getDnsTotal() 获取<p>当前统计周期解析量总计</p>
 * @method void setDnsTotal(integer $DnsTotal) 设置<p>当前统计周期解析量总计</p>
 * @method string getDomain() 获取<p>当前查询的域名</p>
 * @method void setDomain(string $Domain) 设置<p>当前查询的域名</p>
 * @method string getStartDate() 获取<p>当前统计周期开始时间</p>
 * @method void setStartDate(string $StartDate) 设置<p>当前统计周期开始时间</p>
 * @method string getEndDate() 获取<p>当前统计周期结束时间</p>
 * @method void setEndDate(string $EndDate) 设置<p>当前统计周期结束时间</p>
 * @method string getSubDomain() 获取<p>当前统计的子域名</p>
 * @method void setSubDomain(string $SubDomain) 设置<p>当前统计的子域名</p>
 * @method string getDnsFormat() 获取<p>数据统计格式，取值为minute、hour、day，分别表示按十分钟、小时、天统计数据</p>
 * @method void setDnsFormat(string $DnsFormat) 设置<p>数据统计格式，取值为minute、hour、day，分别表示按十分钟、小时、天统计数据</p>
 * @method integer getDNSTotal() 获取<p>当前统计周期解析量总计</p>
 * @method void setDNSTotal(integer $DNSTotal) 设置<p>当前统计周期解析量总计</p>
 * @method string getDNSFormat() 获取<p>数据统计格式，取值为minute、hour、day，分别表示按十分钟、小时、天统计数据</p>
 * @method void setDNSFormat(string $DNSFormat) 设置<p>数据统计格式，取值为minute、hour、day，分别表示按十分钟、小时、天统计数据</p>
 */
class ResolveCountInfo extends AbstractModel
{
    /**
     * @var integer <p>当前统计周期解析量总计</p>
     * @deprecated
     */
    public $DnsTotal;

    /**
     * @var string <p>当前查询的域名</p>
     */
    public $Domain;

    /**
     * @var string <p>当前统计周期开始时间</p>
     */
    public $StartDate;

    /**
     * @var string <p>当前统计周期结束时间</p>
     */
    public $EndDate;

    /**
     * @var string <p>当前统计的子域名</p>
     */
    public $SubDomain;

    /**
     * @var string <p>数据统计格式，取值为minute、hour、day，分别表示按十分钟、小时、天统计数据</p>
     * @deprecated
     */
    public $DnsFormat;

    /**
     * @var integer <p>当前统计周期解析量总计</p>
     */
    public $DNSTotal;

    /**
     * @var string <p>数据统计格式，取值为minute、hour、day，分别表示按十分钟、小时、天统计数据</p>
     */
    public $DNSFormat;

    /**
     * @param integer $DnsTotal <p>当前统计周期解析量总计</p>
     * @param string $Domain <p>当前查询的域名</p>
     * @param string $StartDate <p>当前统计周期开始时间</p>
     * @param string $EndDate <p>当前统计周期结束时间</p>
     * @param string $SubDomain <p>当前统计的子域名</p>
     * @param string $DnsFormat <p>数据统计格式，取值为minute、hour、day，分别表示按十分钟、小时、天统计数据</p>
     * @param integer $DNSTotal <p>当前统计周期解析量总计</p>
     * @param string $DNSFormat <p>数据统计格式，取值为minute、hour、day，分别表示按十分钟、小时、天统计数据</p>
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
        if (array_key_exists("DnsTotal",$param) and $param["DnsTotal"] !== null) {
            $this->DnsTotal = $param["DnsTotal"];
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

        if (array_key_exists("SubDomain",$param) and $param["SubDomain"] !== null) {
            $this->SubDomain = $param["SubDomain"];
        }

        if (array_key_exists("DnsFormat",$param) and $param["DnsFormat"] !== null) {
            $this->DnsFormat = $param["DnsFormat"];
        }

        if (array_key_exists("DNSTotal",$param) and $param["DNSTotal"] !== null) {
            $this->DNSTotal = $param["DNSTotal"];
        }

        if (array_key_exists("DNSFormat",$param) and $param["DNSFormat"] !== null) {
            $this->DNSFormat = $param["DNSFormat"];
        }
    }
}
