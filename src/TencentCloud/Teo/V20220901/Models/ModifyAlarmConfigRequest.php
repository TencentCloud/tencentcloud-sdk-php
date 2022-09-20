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
 * ModifyAlarmConfig请求参数结构体
 *
 * @method string getServiceType() 获取告警服务类型，取值有：
<li>ddos：ddos告警服务。</li>
 * @method void setServiceType(string $ServiceType) 设置告警服务类型，取值有：
<li>ddos：ddos告警服务。</li>
 * @method string getZoneId() 获取站点ID。
 * @method void setZoneId(string $ZoneId) 设置站点ID。
 * @method array getEntityList() 获取告警维度值列表。
 * @method void setEntityList(array $EntityList) 设置告警维度值列表。
 * @method integer getThreshold() 获取告警阈值，不传或者传0表示不修改阈值。
 * @method void setThreshold(integer $Threshold) 设置告警阈值，不传或者传0表示不修改阈值。
 * @method boolean getIsDefault() 获取是否使用默认值，只有在不传Threshold或者Threshold=0时该参数有效。
 * @method void setIsDefault(boolean $IsDefault) 设置是否使用默认值，只有在不传Threshold或者Threshold=0时该参数有效。
 */
class ModifyAlarmConfigRequest extends AbstractModel
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
     * @var array 告警维度值列表。
     */
    public $EntityList;

    /**
     * @var integer 告警阈值，不传或者传0表示不修改阈值。
     */
    public $Threshold;

    /**
     * @var boolean 是否使用默认值，只有在不传Threshold或者Threshold=0时该参数有效。
     */
    public $IsDefault;

    /**
     * @param string $ServiceType 告警服务类型，取值有：
<li>ddos：ddos告警服务。</li>
     * @param string $ZoneId 站点ID。
     * @param array $EntityList 告警维度值列表。
     * @param integer $Threshold 告警阈值，不传或者传0表示不修改阈值。
     * @param boolean $IsDefault 是否使用默认值，只有在不传Threshold或者Threshold=0时该参数有效。
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

        if (array_key_exists("EntityList",$param) and $param["EntityList"] !== null) {
            $this->EntityList = $param["EntityList"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }
    }
}
