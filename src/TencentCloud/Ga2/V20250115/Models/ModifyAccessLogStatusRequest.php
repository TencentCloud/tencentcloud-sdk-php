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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAccessLogStatus请求参数结构体
 *
 * @method string getLogPushTaskId() 获取<p>日志唯一Id</p>
 * @method void setLogPushTaskId(string $LogPushTaskId) 设置<p>日志唯一Id</p>
 * @method string getStatus() 获取<p>状态（启动START， 停止STOP）</p><p>枚举值：</p><ul><li>START： 启动</li><li>STOP： 停止</li></ul>
 * @method void setStatus(string $Status) 设置<p>状态（启动START， 停止STOP）</p><p>枚举值：</p><ul><li>START： 启动</li><li>STOP： 停止</li></ul>
 * @method string getGlobalAcceleratorId() 获取<p>GA实例唯一Id</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) 设置<p>GA实例唯一Id</p>
 */
class ModifyAccessLogStatusRequest extends AbstractModel
{
    /**
     * @var string <p>日志唯一Id</p>
     */
    public $LogPushTaskId;

    /**
     * @var string <p>状态（启动START， 停止STOP）</p><p>枚举值：</p><ul><li>START： 启动</li><li>STOP： 停止</li></ul>
     */
    public $Status;

    /**
     * @var string <p>GA实例唯一Id</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @param string $LogPushTaskId <p>日志唯一Id</p>
     * @param string $Status <p>状态（启动START， 停止STOP）</p><p>枚举值：</p><ul><li>START： 启动</li><li>STOP： 停止</li></ul>
     * @param string $GlobalAcceleratorId <p>GA实例唯一Id</p>
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
        if (array_key_exists("LogPushTaskId",$param) and $param["LogPushTaskId"] !== null) {
            $this->LogPushTaskId = $param["LogPushTaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }
    }
}
