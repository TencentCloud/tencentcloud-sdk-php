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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDDoSCount请求参数结构体
 *
 * @method string getBusiness() 获取大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
 * @method string getId() 获取资源ID
 * @method void setId(string $Id) 设置资源ID
 * @method string getIp() 获取资源的IP
 * @method void setIp(string $Ip) 设置资源的IP
 * @method string getStartTime() 获取统计开始时间
 * @method void setStartTime(string $StartTime) 设置统计开始时间
 * @method string getEndTime() 获取统计结束时间
 * @method void setEndTime(string $EndTime) 设置统计结束时间
 * @method string getMetricName() 获取指标，取值[traffic（攻击协议流量, 单位KB）, pkg（攻击协议报文数）, classnum（攻击事件次数）]
 * @method void setMetricName(string $MetricName) 设置指标，取值[traffic（攻击协议流量, 单位KB）, pkg（攻击协议报文数）, classnum（攻击事件次数）]
 */
class DescribeDDoSCountRequest extends AbstractModel
{
    /**
     * @var string 大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
     */
    public $Business;

    /**
     * @var string 资源ID
     */
    public $Id;

    /**
     * @var string 资源的IP
     */
    public $Ip;

    /**
     * @var string 统计开始时间
     */
    public $StartTime;

    /**
     * @var string 统计结束时间
     */
    public $EndTime;

    /**
     * @var string 指标，取值[traffic（攻击协议流量, 单位KB）, pkg（攻击协议报文数）, classnum（攻击事件次数）]
     */
    public $MetricName;

    /**
     * @param string $Business 大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
     * @param string $Id 资源ID
     * @param string $Ip 资源的IP
     * @param string $StartTime 统计开始时间
     * @param string $EndTime 统计结束时间
     * @param string $MetricName 指标，取值[traffic（攻击协议流量, 单位KB）, pkg（攻击协议报文数）, classnum（攻击事件次数）]
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
        if (array_key_exists('Business',$param) and $param['Business'] !== null) {
            $this->Business = $param['Business'];
        }

        if (array_key_exists('Id',$param) and $param['Id'] !== null) {
            $this->Id = $param['Id'];
        }

        if (array_key_exists('Ip',$param) and $param['Ip'] !== null) {
            $this->Ip = $param['Ip'];
        }

        if (array_key_exists('StartTime',$param) and $param['StartTime'] !== null) {
            $this->StartTime = $param['StartTime'];
        }

        if (array_key_exists('EndTime',$param) and $param['EndTime'] !== null) {
            $this->EndTime = $param['EndTime'];
        }

        if (array_key_exists('MetricName',$param) and $param['MetricName'] !== null) {
            $this->MetricName = $param['MetricName'];
        }
    }
}
