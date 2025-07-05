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
 * 设备付费模式信息
 *
 * @method string getDeviceId() 获取设备ID
 * @method void setDeviceId(string $DeviceId) 设置设备ID
 * @method integer getPayMode() 获取付费模式。
1：预付费流量包
0：按流量后付费
 * @method void setPayMode(integer $PayMode) 设置付费模式。
1：预付费流量包
0：按流量后付费
 * @method string getPayModeDesc() 获取付费模式描述
 * @method void setPayModeDesc(string $PayModeDesc) 设置付费模式描述
 * @method string getResourceId() 获取流量包ID，仅当付费模式为流量包类型时才有。
 * @method void setResourceId(string $ResourceId) 设置流量包ID，仅当付费模式为流量包类型时才有。
 */
class DevicePayModeInfo extends AbstractModel
{
    /**
     * @var string 设备ID
     */
    public $DeviceId;

    /**
     * @var integer 付费模式。
1：预付费流量包
0：按流量后付费
     */
    public $PayMode;

    /**
     * @var string 付费模式描述
     */
    public $PayModeDesc;

    /**
     * @var string 流量包ID，仅当付费模式为流量包类型时才有。
     */
    public $ResourceId;

    /**
     * @param string $DeviceId 设备ID
     * @param integer $PayMode 付费模式。
1：预付费流量包
0：按流量后付费
     * @param string $PayModeDesc 付费模式描述
     * @param string $ResourceId 流量包ID，仅当付费模式为流量包类型时才有。
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

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PayModeDesc",$param) and $param["PayModeDesc"] !== null) {
            $this->PayModeDesc = $param["PayModeDesc"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
