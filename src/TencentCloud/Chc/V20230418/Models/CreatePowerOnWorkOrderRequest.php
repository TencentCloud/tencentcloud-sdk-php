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
 * CreatePowerOnWorkOrder请求参数结构体
 *
 * @method integer getIdcId() 获取机房id
 * @method void setIdcId(integer $IdcId) 设置机房id
 * @method string getDeviceType() 获取设备类型，server, netDevice
 * @method void setDeviceType(string $DeviceType) 设置设备类型，server, netDevice
 * @method array getDeviceSnList() 获取设备sn列表
 * @method void setDeviceSnList(array $DeviceSnList) 设置设备sn列表
 */
class CreatePowerOnWorkOrderRequest extends AbstractModel
{
    /**
     * @var integer 机房id
     */
    public $IdcId;

    /**
     * @var string 设备类型，server, netDevice
     */
    public $DeviceType;

    /**
     * @var array 设备sn列表
     */
    public $DeviceSnList;

    /**
     * @param integer $IdcId 机房id
     * @param string $DeviceType 设备类型，server, netDevice
     * @param array $DeviceSnList 设备sn列表
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
        if (array_key_exists("IdcId",$param) and $param["IdcId"] !== null) {
            $this->IdcId = $param["IdcId"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("DeviceSnList",$param) and $param["DeviceSnList"] !== null) {
            $this->DeviceSnList = $param["DeviceSnList"];
        }
    }
}
