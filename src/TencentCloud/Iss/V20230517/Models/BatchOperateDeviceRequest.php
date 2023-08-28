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
 * BatchOperateDevice请求参数结构体
 *
 * @method array getDeviceIds() 获取设备 ID 数组（从获取设备列表接口ListDevices中获取）
 * @method void setDeviceIds(array $DeviceIds) 设置设备 ID 数组（从获取设备列表接口ListDevices中获取）
 * @method string getCmd() 获取操作命令（enable：启用；disable：禁用；delete：删除）
 * @method void setCmd(string $Cmd) 设置操作命令（enable：启用；disable：禁用；delete：删除）
 */
class BatchOperateDeviceRequest extends AbstractModel
{
    /**
     * @var array 设备 ID 数组（从获取设备列表接口ListDevices中获取）
     */
    public $DeviceIds;

    /**
     * @var string 操作命令（enable：启用；disable：禁用；delete：删除）
     */
    public $Cmd;

    /**
     * @param array $DeviceIds 设备 ID 数组（从获取设备列表接口ListDevices中获取）
     * @param string $Cmd 操作命令（enable：启用；disable：禁用；delete：删除）
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
        if (array_key_exists("DeviceIds",$param) and $param["DeviceIds"] !== null) {
            $this->DeviceIds = $param["DeviceIds"];
        }

        if (array_key_exists("Cmd",$param) and $param["Cmd"] !== null) {
            $this->Cmd = $param["Cmd"];
        }
    }
}
