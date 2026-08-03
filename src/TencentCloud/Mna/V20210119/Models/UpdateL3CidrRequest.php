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
 * UpdateL3Cidr请求参数结构体
 *
 * @method string getL3ConnId() 获取<p>互通规则ID</p>
 * @method void setL3ConnId(string $L3ConnId) 设置<p>互通规则ID</p>
 * @method string getCidr1() 获取<p>互通规则CIDR</p>
 * @method void setCidr1(string $Cidr1) 设置<p>互通规则CIDR</p>
 * @method string getDeviceId1() 获取<p>互通设备ID</p>
 * @method void setDeviceId1(string $DeviceId1) 设置<p>互通设备ID</p>
 * @method string getDeviceId2() 获取<p>互通设备ID</p>
 * @method void setDeviceId2(string $DeviceId2) 设置<p>互通设备ID</p>
 * @method string getCidr2() 获取<p>互通规则CIDR</p>
 * @method void setCidr2(string $Cidr2) 设置<p>互通规则CIDR</p>
 */
class UpdateL3CidrRequest extends AbstractModel
{
    /**
     * @var string <p>互通规则ID</p>
     */
    public $L3ConnId;

    /**
     * @var string <p>互通规则CIDR</p>
     */
    public $Cidr1;

    /**
     * @var string <p>互通设备ID</p>
     */
    public $DeviceId1;

    /**
     * @var string <p>互通设备ID</p>
     */
    public $DeviceId2;

    /**
     * @var string <p>互通规则CIDR</p>
     */
    public $Cidr2;

    /**
     * @param string $L3ConnId <p>互通规则ID</p>
     * @param string $Cidr1 <p>互通规则CIDR</p>
     * @param string $DeviceId1 <p>互通设备ID</p>
     * @param string $DeviceId2 <p>互通设备ID</p>
     * @param string $Cidr2 <p>互通规则CIDR</p>
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

        if (array_key_exists("Cidr1",$param) and $param["Cidr1"] !== null) {
            $this->Cidr1 = $param["Cidr1"];
        }

        if (array_key_exists("DeviceId1",$param) and $param["DeviceId1"] !== null) {
            $this->DeviceId1 = $param["DeviceId1"];
        }

        if (array_key_exists("DeviceId2",$param) and $param["DeviceId2"] !== null) {
            $this->DeviceId2 = $param["DeviceId2"];
        }

        if (array_key_exists("Cidr2",$param) and $param["Cidr2"] !== null) {
            $this->Cidr2 = $param["Cidr2"];
        }
    }
}
