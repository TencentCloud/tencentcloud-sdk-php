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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateDeviceStatus请求参数结构体
 *
 * @method string getDeviceId() 获取设备 ID（从获取设备列表接口ListDevices中获取）
 * @method void setDeviceId(string $DeviceId) 设置设备 ID（从获取设备列表接口ListDevices中获取）
 * @method integer getStatus() 获取禁用启用状态码（2：启用，3:禁用）
 * @method void setStatus(integer $Status) 设置禁用启用状态码（2：启用，3:禁用）
 */
class UpdateDeviceStatusRequest extends AbstractModel
{
    /**
     * @var string 设备 ID（从获取设备列表接口ListDevices中获取）
     */
    public $DeviceId;

    /**
     * @var integer 禁用启用状态码（2：启用，3:禁用）
     */
    public $Status;

    /**
     * @param string $DeviceId 设备 ID（从获取设备列表接口ListDevices中获取）
     * @param integer $Status 禁用启用状态码（2：启用，3:禁用）
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
