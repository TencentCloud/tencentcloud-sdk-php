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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetMultiFlowStatistic请求参数结构体
 *
 * @method array getDeviceIds() 获取设备id列表，单次最多请求10个设备
 * @method void setDeviceIds(array $DeviceIds) 设置设备id列表，单次最多请求10个设备
 * @method integer getBeginTime() 获取1659514436
 * @method void setBeginTime(integer $BeginTime) 设置1659514436
 * @method integer getEndTime() 获取1659515000
 * @method void setEndTime(integer $EndTime) 设置1659515000
 * @method integer getType() 获取统计流量类型（1：上行流量，2：下行流量， 3: 上下行总和）
 * @method void setType(integer $Type) 设置统计流量类型（1：上行流量，2：下行流量， 3: 上下行总和）
 * @method integer getTimeGranularity() 获取统计时间粒度（1：按小时统计，2：按天统计）
 * @method void setTimeGranularity(integer $TimeGranularity) 设置统计时间粒度（1：按小时统计，2：按天统计）
 * @method string getAccessRegion() 获取接入区域。取值范围：['MC','AP','EU','AM'] MC=中国大陆 AP=亚太 EU=欧洲 AM=美洲。不填代表全量区域。
 * @method void setAccessRegion(string $AccessRegion) 设置接入区域。取值范围：['MC','AP','EU','AM'] MC=中国大陆 AP=亚太 EU=欧洲 AM=美洲。不填代表全量区域。
 * @method integer getGatewayType() 获取网关类型。0：公有云网关；1：自有网关。不传默认为0。
 * @method void setGatewayType(integer $GatewayType) 设置网关类型。0：公有云网关；1：自有网关。不传默认为0。
 */
class GetMultiFlowStatisticRequest extends AbstractModel
{
    /**
     * @var array 设备id列表，单次最多请求10个设备
     */
    public $DeviceIds;

    /**
     * @var integer 1659514436
     */
    public $BeginTime;

    /**
     * @var integer 1659515000
     */
    public $EndTime;

    /**
     * @var integer 统计流量类型（1：上行流量，2：下行流量， 3: 上下行总和）
     */
    public $Type;

    /**
     * @var integer 统计时间粒度（1：按小时统计，2：按天统计）
     */
    public $TimeGranularity;

    /**
     * @var string 接入区域。取值范围：['MC','AP','EU','AM'] MC=中国大陆 AP=亚太 EU=欧洲 AM=美洲。不填代表全量区域。
     */
    public $AccessRegion;

    /**
     * @var integer 网关类型。0：公有云网关；1：自有网关。不传默认为0。
     */
    public $GatewayType;

    /**
     * @param array $DeviceIds 设备id列表，单次最多请求10个设备
     * @param integer $BeginTime 1659514436
     * @param integer $EndTime 1659515000
     * @param integer $Type 统计流量类型（1：上行流量，2：下行流量， 3: 上下行总和）
     * @param integer $TimeGranularity 统计时间粒度（1：按小时统计，2：按天统计）
     * @param string $AccessRegion 接入区域。取值范围：['MC','AP','EU','AM'] MC=中国大陆 AP=亚太 EU=欧洲 AM=美洲。不填代表全量区域。
     * @param integer $GatewayType 网关类型。0：公有云网关；1：自有网关。不传默认为0。
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
        if (array_key_exists("DeviceIds",$param) and $param["DeviceIds"] !== null) {
            $this->DeviceIds = $param["DeviceIds"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TimeGranularity",$param) and $param["TimeGranularity"] !== null) {
            $this->TimeGranularity = $param["TimeGranularity"];
        }

        if (array_key_exists("AccessRegion",$param) and $param["AccessRegion"] !== null) {
            $this->AccessRegion = $param["AccessRegion"];
        }

        if (array_key_exists("GatewayType",$param) and $param["GatewayType"] !== null) {
            $this->GatewayType = $param["GatewayType"];
        }
    }
}
