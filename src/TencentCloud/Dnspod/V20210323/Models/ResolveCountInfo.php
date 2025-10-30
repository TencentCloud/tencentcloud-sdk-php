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
 * @method integer getDnsTotal() 获取当前统计周期解析量总计
 * @method void setDnsTotal(integer $DnsTotal) 设置当前统计周期解析量总计
 * @method string getDomain() 获取当前查询的域名
 * @method void setDomain(string $Domain) 设置当前查询的域名
 * @method string getStartDate() 获取当前统计周期开始时间
 * @method void setStartDate(string $StartDate) 设置当前统计周期开始时间
 * @method string getEndDate() 获取当前统计周期结束时间
 * @method void setEndDate(string $EndDate) 设置当前统计周期结束时间
 * @method string getSubDomain() 获取当前统计的子域名
 * @method void setSubDomain(string $SubDomain) 设置当前统计的子域名
 * @method string getDnsFormat() 获取数据统计格式，取值为minute、hour、day，分别表示按十分钟、小时、天统计数据
 * @method void setDnsFormat(string $DnsFormat) 设置数据统计格式，取值为minute、hour、day，分别表示按十分钟、小时、天统计数据
 */
class ResolveCountInfo extends AbstractModel
{
    /**
     * @var integer 当前统计周期解析量总计
     */
    public $DnsTotal;

    /**
     * @var string 当前查询的域名
     */
    public $Domain;

    /**
     * @var string 当前统计周期开始时间
     */
    public $StartDate;

    /**
     * @var string 当前统计周期结束时间
     */
    public $EndDate;

    /**
     * @var string 当前统计的子域名
     */
    public $SubDomain;

    /**
     * @var string 数据统计格式，取值为minute、hour、day，分别表示按十分钟、小时、天统计数据
     */
    public $DnsFormat;

    /**
     * @param integer $DnsTotal 当前统计周期解析量总计
     * @param string $Domain 当前查询的域名
     * @param string $StartDate 当前统计周期开始时间
     * @param string $EndDate 当前统计周期结束时间
     * @param string $SubDomain 当前统计的子域名
     * @param string $DnsFormat 数据统计格式，取值为minute、hour、day，分别表示按十分钟、小时、天统计数据
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
    }
}
