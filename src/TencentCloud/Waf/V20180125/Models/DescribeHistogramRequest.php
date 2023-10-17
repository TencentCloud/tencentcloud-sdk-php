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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHistogram请求参数结构体
 *
 * @method string getFromTime() 获取起始时间
 * @method void setFromTime(string $FromTime) 设置起始时间
 * @method string getToTime() 获取结束时间
 * @method void setToTime(string $ToTime) 设置结束时间
 * @method string getQueryField() 获取聚类字段，ip为ip聚合，art为响应耗时聚合，url为url聚合，local为ip转化的城市聚合
 * @method void setQueryField(string $QueryField) 设置聚类字段，ip为ip聚合，art为响应耗时聚合，url为url聚合，local为ip转化的城市聚合
 * @method string getSource() 获取条件，access为访问日志，attack为攻击日志
 * @method void setSource(string $Source) 设置条件，access为访问日志，attack为攻击日志
 * @method string getHost() 获取兼容Host，逐步淘汰Host字段
 * @method void setHost(string $Host) 设置兼容Host，逐步淘汰Host字段
 * @method string getEdition() 获取只有两个值有效，sparta-waf，clb-waf，不传则不过滤
 * @method void setEdition(string $Edition) 设置只有两个值有效，sparta-waf，clb-waf，不传则不过滤
 * @method string getInstanceID() 获取WAF实例ID，不传则不过滤
 * @method void setInstanceID(string $InstanceID) 设置WAF实例ID，不传则不过滤
 * @method string getDomain() 获取域名过滤，不传则不过滤，用于替代Host字段，逐步淘汰Host
 * @method void setDomain(string $Domain) 设置域名过滤，不传则不过滤，用于替代Host字段，逐步淘汰Host
 */
class DescribeHistogramRequest extends AbstractModel
{
    /**
     * @var string 起始时间
     */
    public $FromTime;

    /**
     * @var string 结束时间
     */
    public $ToTime;

    /**
     * @var string 聚类字段，ip为ip聚合，art为响应耗时聚合，url为url聚合，local为ip转化的城市聚合
     */
    public $QueryField;

    /**
     * @var string 条件，access为访问日志，attack为攻击日志
     */
    public $Source;

    /**
     * @var string 兼容Host，逐步淘汰Host字段
     */
    public $Host;

    /**
     * @var string 只有两个值有效，sparta-waf，clb-waf，不传则不过滤
     */
    public $Edition;

    /**
     * @var string WAF实例ID，不传则不过滤
     */
    public $InstanceID;

    /**
     * @var string 域名过滤，不传则不过滤，用于替代Host字段，逐步淘汰Host
     */
    public $Domain;

    /**
     * @param string $FromTime 起始时间
     * @param string $ToTime 结束时间
     * @param string $QueryField 聚类字段，ip为ip聚合，art为响应耗时聚合，url为url聚合，local为ip转化的城市聚合
     * @param string $Source 条件，access为访问日志，attack为攻击日志
     * @param string $Host 兼容Host，逐步淘汰Host字段
     * @param string $Edition 只有两个值有效，sparta-waf，clb-waf，不传则不过滤
     * @param string $InstanceID WAF实例ID，不传则不过滤
     * @param string $Domain 域名过滤，不传则不过滤，用于替代Host字段，逐步淘汰Host
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
        if (array_key_exists("FromTime",$param) and $param["FromTime"] !== null) {
            $this->FromTime = $param["FromTime"];
        }

        if (array_key_exists("ToTime",$param) and $param["ToTime"] !== null) {
            $this->ToTime = $param["ToTime"];
        }

        if (array_key_exists("QueryField",$param) and $param["QueryField"] !== null) {
            $this->QueryField = $param["QueryField"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
