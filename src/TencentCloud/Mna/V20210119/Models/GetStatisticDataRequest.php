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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetStatisticData请求参数结构体
 *
 * @method string getDeviceId() 获取设备ID。若不指定设备，可传"-1"
 * @method void setDeviceId(string $DeviceId) 设置设备ID。若不指定设备，可传"-1"
 * @method integer getBeginTime() 获取统计开始时间，单位：s
 * @method void setBeginTime(integer $BeginTime) 设置统计开始时间，单位：s
 * @method integer getEndTime() 获取统计结束时间，单位：s
 * @method void setEndTime(integer $EndTime) 设置统计结束时间，单位：s
 * @method integer getTimeGranularity() 获取聚合粒度：
1:按小时统计
2:按天统计
 * @method void setTimeGranularity(integer $TimeGranularity) 设置聚合粒度：
1:按小时统计
2:按天统计
 * @method string getAccessRegion() 获取接入区域。取值范围：['MC','AP','EU','AM'] MC=中国大陆 AP=亚太 EU=欧洲 AM=美洲。不填默认中国大陆
 * @method void setAccessRegion(string $AccessRegion) 设置接入区域。取值范围：['MC','AP','EU','AM'] MC=中国大陆 AP=亚太 EU=欧洲 AM=美洲。不填默认中国大陆
 * @method integer getGatewayType() 获取网关类型。0：公有云网关；1：自有网关。不传默认为0。
 * @method void setGatewayType(integer $GatewayType) 设置网关类型。0：公有云网关；1：自有网关。不传默认为0。
 */
class GetStatisticDataRequest extends AbstractModel
{
    /**
     * @var string 设备ID。若不指定设备，可传"-1"
     */
    public $DeviceId;

    /**
     * @var integer 统计开始时间，单位：s
     */
    public $BeginTime;

    /**
     * @var integer 统计结束时间，单位：s
     */
    public $EndTime;

    /**
     * @var integer 聚合粒度：
1:按小时统计
2:按天统计
     */
    public $TimeGranularity;

    /**
     * @var string 接入区域。取值范围：['MC','AP','EU','AM'] MC=中国大陆 AP=亚太 EU=欧洲 AM=美洲。不填默认中国大陆
     */
    public $AccessRegion;

    /**
     * @var integer 网关类型。0：公有云网关；1：自有网关。不传默认为0。
     */
    public $GatewayType;

    /**
     * @param string $DeviceId 设备ID。若不指定设备，可传"-1"
     * @param integer $BeginTime 统计开始时间，单位：s
     * @param integer $EndTime 统计结束时间，单位：s
     * @param integer $TimeGranularity 聚合粒度：
1:按小时统计
2:按天统计
     * @param string $AccessRegion 接入区域。取值范围：['MC','AP','EU','AM'] MC=中国大陆 AP=亚太 EU=欧洲 AM=美洲。不填默认中国大陆
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
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
