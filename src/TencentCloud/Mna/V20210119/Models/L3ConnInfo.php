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
 * 三层互通规则信息
 *
 * @method string getL3ConnId() 获取互通规则ID
 * @method void setL3ConnId(string $L3ConnId) 设置互通规则ID
 * @method string getDeviceId1() 获取互通设备ID
 * @method void setDeviceId1(string $DeviceId1) 设置互通设备ID
 * @method string getCidr1() 获取互通规则CIDR
 * @method void setCidr1(string $Cidr1) 设置互通规则CIDR
 * @method string getDeviceId2() 获取互通设备ID
 * @method void setDeviceId2(string $DeviceId2) 设置互通设备ID
 * @method string getCidr2() 获取互通规则CIDR
 * @method void setCidr2(string $Cidr2) 设置互通规则CIDR
 * @method boolean getEnable() 获取互通规则启用状态
 * @method void setEnable(boolean $Enable) 设置互通规则启用状态
 * @method string getDescription() 获取互通规则描述
 * @method void setDescription(string $Description) 设置互通规则描述
 */
class L3ConnInfo extends AbstractModel
{
    /**
     * @var string 互通规则ID
     */
    public $L3ConnId;

    /**
     * @var string 互通设备ID
     */
    public $DeviceId1;

    /**
     * @var string 互通规则CIDR
     */
    public $Cidr1;

    /**
     * @var string 互通设备ID
     */
    public $DeviceId2;

    /**
     * @var string 互通规则CIDR
     */
    public $Cidr2;

    /**
     * @var boolean 互通规则启用状态
     */
    public $Enable;

    /**
     * @var string 互通规则描述
     */
    public $Description;

    /**
     * @param string $L3ConnId 互通规则ID
     * @param string $DeviceId1 互通设备ID
     * @param string $Cidr1 互通规则CIDR
     * @param string $DeviceId2 互通设备ID
     * @param string $Cidr2 互通规则CIDR
     * @param boolean $Enable 互通规则启用状态
     * @param string $Description 互通规则描述
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
        if (array_key_exists("L3ConnId",$param) and $param["L3ConnId"] !== null) {
            $this->L3ConnId = $param["L3ConnId"];
        }

        if (array_key_exists("DeviceId1",$param) and $param["DeviceId1"] !== null) {
            $this->DeviceId1 = $param["DeviceId1"];
        }

        if (array_key_exists("Cidr1",$param) and $param["Cidr1"] !== null) {
            $this->Cidr1 = $param["Cidr1"];
        }

        if (array_key_exists("DeviceId2",$param) and $param["DeviceId2"] !== null) {
            $this->DeviceId2 = $param["DeviceId2"];
        }

        if (array_key_exists("Cidr2",$param) and $param["Cidr2"] !== null) {
            $this->Cidr2 = $param["Cidr2"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
