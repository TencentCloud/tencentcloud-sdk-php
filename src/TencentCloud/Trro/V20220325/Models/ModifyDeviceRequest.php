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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDevice请求参数结构体
 *
 * @method string getProjectId() 获取要修改设备归属项目的项目ID
 * @method void setProjectId(string $ProjectId) 设置要修改设备归属项目的项目ID
 * @method string getDeviceId() 获取要修改设备的设备ID
 * @method void setDeviceId(string $DeviceId) 设置要修改设备的设备ID
 * @method string getDeviceName() 获取修改后的设备名称，不填则不修改
 * @method void setDeviceName(string $DeviceName) 设置修改后的设备名称，不填则不修改
 * @method string getDeviceToken() 获取修改后的设备认证口令，不填则不修改
 * @method void setDeviceToken(string $DeviceToken) 设置修改后的设备认证口令，不填则不修改
 */
class ModifyDeviceRequest extends AbstractModel
{
    /**
     * @var string 要修改设备归属项目的项目ID
     */
    public $ProjectId;

    /**
     * @var string 要修改设备的设备ID
     */
    public $DeviceId;

    /**
     * @var string 修改后的设备名称，不填则不修改
     */
    public $DeviceName;

    /**
     * @var string 修改后的设备认证口令，不填则不修改
     */
    public $DeviceToken;

    /**
     * @param string $ProjectId 要修改设备归属项目的项目ID
     * @param string $DeviceId 要修改设备的设备ID
     * @param string $DeviceName 修改后的设备名称，不填则不修改
     * @param string $DeviceToken 修改后的设备认证口令，不填则不修改
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("DeviceToken",$param) and $param["DeviceToken"] !== null) {
            $this->DeviceToken = $param["DeviceToken"];
        }
    }
}
