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
 * CreateSubDomainsAnalyticsFile请求参数结构体
 *
 * @method array getDomains() 获取需要查询解析量的域名数组。
 * @method void setDomains(array $Domains) 设置需要查询解析量的域名数组。
 * @method string getStartDate() 获取查询解析量的时间区间起点。如：2023-01-01。
 * @method void setStartDate(string $StartDate) 设置查询解析量的时间区间起点。如：2023-01-01。
 * @method integer getSubDomainType() 获取查询解析量子域名类型。
1：子域名
2：无解析量子域名
 * @method void setSubDomainType(integer $SubDomainType) 设置查询解析量子域名类型。
1：子域名
2：无解析量子域名
 * @method string getDNSFormat() 获取查询解析量的统计维度。默认为 DATE。
DATE：按天统计
HOUR：按小时统计
 * @method void setDNSFormat(string $DNSFormat) 设置查询解析量的统计维度。默认为 DATE。
DATE：按天统计
HOUR：按小时统计
 * @method string getEndDate() 获取查询解析量的时间区间终点。如：2023-01-01。默认为当天。
 * @method void setEndDate(string $EndDate) 设置查询解析量的时间区间终点。如：2023-01-01。默认为当天。
 */
class CreateSubDomainsAnalyticsFileRequest extends AbstractModel
{
    /**
     * @var array 需要查询解析量的域名数组。
     */
    public $Domains;

    /**
     * @var string 查询解析量的时间区间起点。如：2023-01-01。
     */
    public $StartDate;

    /**
     * @var integer 查询解析量子域名类型。
1：子域名
2：无解析量子域名
     */
    public $SubDomainType;

    /**
     * @var string 查询解析量的统计维度。默认为 DATE。
DATE：按天统计
HOUR：按小时统计
     */
    public $DNSFormat;

    /**
     * @var string 查询解析量的时间区间终点。如：2023-01-01。默认为当天。
     */
    public $EndDate;

    /**
     * @param array $Domains 需要查询解析量的域名数组。
     * @param string $StartDate 查询解析量的时间区间起点。如：2023-01-01。
     * @param integer $SubDomainType 查询解析量子域名类型。
1：子域名
2：无解析量子域名
     * @param string $DNSFormat 查询解析量的统计维度。默认为 DATE。
DATE：按天统计
HOUR：按小时统计
     * @param string $EndDate 查询解析量的时间区间终点。如：2023-01-01。默认为当天。
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
        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = [];
            foreach ($param["Domains"] as $key => $value){
                $obj = new SubDomainsAnalyticsParamsItem();
                $obj->deserialize($value);
                array_push($this->Domains, $obj);
            }
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("SubDomainType",$param) and $param["SubDomainType"] !== null) {
            $this->SubDomainType = $param["SubDomainType"];
        }

        if (array_key_exists("DNSFormat",$param) and $param["DNSFormat"] !== null) {
            $this->DNSFormat = $param["DNSFormat"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }
    }
}
