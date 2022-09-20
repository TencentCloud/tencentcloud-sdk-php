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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAlarmDefaultThreshold请求参数结构体
 *
 * @method string getServiceType() 获取告警服务类型，取值有：
<li>ddos：ddos告警服务。</li>
 * @method void setServiceType(string $ServiceType) 设置告警服务类型，取值有：
<li>ddos：ddos告警服务。</li>
 * @method string getZoneId() 获取站点ID。
 * @method void setZoneId(string $ZoneId) 设置站点ID。
 * @method integer getThreshold() 获取新的阈值，单位为Mbps，最小阈值为10。
 * @method void setThreshold(integer $Threshold) 设置新的阈值，单位为Mbps，最小阈值为10。
 * @method string getEntity() 获取防护实体，如果是四层防护，防护实体为通道ID。如果是七层防护，防护实体为站点名称。
 * @method void setEntity(string $Entity) 设置防护实体，如果是四层防护，防护实体为通道ID。如果是七层防护，防护实体为站点名称。
 */
class ModifyAlarmDefaultThresholdRequest extends AbstractModel
{
    /**
     * @var string 告警服务类型，取值有：
<li>ddos：ddos告警服务。</li>
     */
    public $ServiceType;

    /**
     * @var string 站点ID。
     */
    public $ZoneId;

    /**
     * @var integer 新的阈值，单位为Mbps，最小阈值为10。
     */
    public $Threshold;

    /**
     * @var string 防护实体，如果是四层防护，防护实体为通道ID。如果是七层防护，防护实体为站点名称。
     */
    public $Entity;

    /**
     * @param string $ServiceType 告警服务类型，取值有：
<li>ddos：ddos告警服务。</li>
     * @param string $ZoneId 站点ID。
     * @param integer $Threshold 新的阈值，单位为Mbps，最小阈值为10。
     * @param string $Entity 防护实体，如果是四层防护，防护实体为通道ID。如果是七层防护，防护实体为站点名称。
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
        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }
    }
}
