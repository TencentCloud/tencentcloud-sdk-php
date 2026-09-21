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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchOperateDevice请求参数结构体
 *
 * @method array getDeviceIds() 获取<p>设备 ID 数组（从获取设备列表接口ListDevices中获取）</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1344/95871">ListDevices</a></p>
 * @method void setDeviceIds(array $DeviceIds) 设置<p>设备 ID 数组（从获取设备列表接口ListDevices中获取）</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1344/95871">ListDevices</a></p>
 * @method string getCmd() 获取<p>操作命令</p><p>枚举值：</p><ul><li>enable： 启用</li><li>disable： 禁用</li><li>delete： 删除</li><li>sync： 同步设备通道</li></ul>
 * @method void setCmd(string $Cmd) 设置<p>操作命令</p><p>枚举值：</p><ul><li>enable： 启用</li><li>disable： 禁用</li><li>delete： 删除</li><li>sync： 同步设备通道</li></ul>
 */
class BatchOperateDeviceRequest extends AbstractModel
{
    /**
     * @var array <p>设备 ID 数组（从获取设备列表接口ListDevices中获取）</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1344/95871">ListDevices</a></p>
     */
    public $DeviceIds;

    /**
     * @var string <p>操作命令</p><p>枚举值：</p><ul><li>enable： 启用</li><li>disable： 禁用</li><li>delete： 删除</li><li>sync： 同步设备通道</li></ul>
     */
    public $Cmd;

    /**
     * @param array $DeviceIds <p>设备 ID 数组（从获取设备列表接口ListDevices中获取）</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1344/95871">ListDevices</a></p>
     * @param string $Cmd <p>操作命令</p><p>枚举值：</p><ul><li>enable： 启用</li><li>disable： 禁用</li><li>delete： 删除</li><li>sync： 同步设备通道</li></ul>
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
