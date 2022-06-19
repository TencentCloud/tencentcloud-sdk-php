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
 * 子域名解析量统计查询信息
 *
 * @method string getDnsFormat() 获取DATE:按天维度统计 HOUR:按小时维度统计
 * @method void setDnsFormat(string $DnsFormat) 设置DATE:按天维度统计 HOUR:按小时维度统计
 * @method integer getDnsTotal() 获取当前统计周期解析量总计
 * @method void setDnsTotal(integer $DnsTotal) 设置当前统计周期解析量总计
 * @method string getDomain() 获取当前查询的域名
 * @method void setDomain(string $Domain) 设置当前查询的域名
 * @method string getStartDate() 获取当前统计周期开始时间
 * @method void setStartDate(string $StartDate) 设置当前统计周期开始时间
 * @method string getEndDate() 获取当前统计周期结束时间
 * @method void setEndDate(string $EndDate) 设置当前统计周期结束时间
 * @method string getSubdomain() 获取当前统计的子域名
 * @method void setSubdomain(string $Subdomain) 设置当前统计的子域名
 */
class SubdomainAnalyticsInfo extends AbstractModel
{
    /**
     * @var string DATE:按天维度统计 HOUR:按小时维度统计
     */
    public $DnsFormat;

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
    public $Subdomain;

    /**
     * @param string $DnsFormat DATE:按天维度统计 HOUR:按小时维度统计
     * @param integer $DnsTotal 当前统计周期解析量总计
     * @param string $Domain 当前查询的域名
     * @param string $StartDate 当前统计周期开始时间
     * @param string $EndDate 当前统计周期结束时间
     * @param string $Subdomain 当前统计的子域名
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
        if (array_key_exists("DnsFormat",$param) and $param["DnsFormat"] !== null) {
            $this->DnsFormat = $param["DnsFormat"];
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

        if (array_key_exists("Subdomain",$param) and $param["Subdomain"] !== null) {
            $this->Subdomain = $param["Subdomain"];
        }
    }
}
