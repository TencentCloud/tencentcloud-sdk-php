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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备上架信息
 *
 * @method string getDeviceSn() 获取设备sn
 * @method void setDeviceSn(string $DeviceSn) 设置设备sn
 * @method string getDstRackName() 获取目标机架
 * @method void setDstRackName(string $DstRackName) 设置目标机架
 * @method string getDstPositionCode() 获取目标机位,服务器必传,网络设备不用传
 * @method void setDstPositionCode(string $DstPositionCode) 设置目标机位,服务器必传,网络设备不用传
 * @method string getDstIp() 获取设备ip
 * @method void setDstIp(string $DstIp) 设置设备ip
 */
class DeviceRackOn extends AbstractModel
{
    /**
     * @var string 设备sn
     */
    public $DeviceSn;

    /**
     * @var string 目标机架
     */
    public $DstRackName;

    /**
     * @var string 目标机位,服务器必传,网络设备不用传
     */
    public $DstPositionCode;

    /**
     * @var string 设备ip
     */
    public $DstIp;

    /**
     * @param string $DeviceSn 设备sn
     * @param string $DstRackName 目标机架
     * @param string $DstPositionCode 目标机位,服务器必传,网络设备不用传
     * @param string $DstIp 设备ip
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
        if (array_key_exists("DeviceSn",$param) and $param["DeviceSn"] !== null) {
            $this->DeviceSn = $param["DeviceSn"];
        }

        if (array_key_exists("DstRackName",$param) and $param["DstRackName"] !== null) {
            $this->DstRackName = $param["DstRackName"];
        }

        if (array_key_exists("DstPositionCode",$param) and $param["DstPositionCode"] !== null) {
            $this->DstPositionCode = $param["DstPositionCode"];
        }

        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->DstIp = $param["DstIp"];
        }
    }
}
