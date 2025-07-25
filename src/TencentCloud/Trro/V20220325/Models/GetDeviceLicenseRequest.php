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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetDeviceLicense请求参数结构体
 *
 * @method string getProjectId() 获取目标设备所属项目ID
 * @method void setProjectId(string $ProjectId) 设置目标设备所属项目ID
 * @method string getDeviceId() 获取目标设备ID
 * @method void setDeviceId(string $DeviceId) 设置目标设备ID
 */
class GetDeviceLicenseRequest extends AbstractModel
{
    /**
     * @var string 目标设备所属项目ID
     */
    public $ProjectId;

    /**
     * @var string 目标设备ID
     */
    public $DeviceId;

    /**
     * @param string $ProjectId 目标设备所属项目ID
     * @param string $DeviceId 目标设备ID
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
    }
}
