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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * WebSocket配置
WebSocket 为ECDN产品功能，如需使用请通过ECDN域名配置.
 *
 * @method string getSwitch() 获取WebSocket 超时配置开关，取值有：
on：开启，可以调整超时时间
off：关闭，平台仍支持WebSocket连接，此时超时时间默认为15秒

 * @method void setSwitch(string $Switch) 设置WebSocket 超时配置开关，取值有：
on：开启，可以调整超时时间
off：关闭，平台仍支持WebSocket连接，此时超时时间默认为15秒

 * @method integer getTimeout() 获取设置超时时间，单位为秒，最大超时时间300秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeout(integer $Timeout) 设置设置超时时间，单位为秒，最大超时时间300秒。
注意：此字段可能返回 null，表示取不到有效值。
 */
class WebSocket extends AbstractModel
{
    /**
     * @var string WebSocket 超时配置开关，取值有：
on：开启，可以调整超时时间
off：关闭，平台仍支持WebSocket连接，此时超时时间默认为15秒

     */
    public $Switch;

    /**
     * @var integer 设置超时时间，单位为秒，最大超时时间300秒。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timeout;

    /**
     * @param string $Switch WebSocket 超时配置开关，取值有：
on：开启，可以调整超时时间
off：关闭，平台仍支持WebSocket连接，此时超时时间默认为15秒

     * @param integer $Timeout 设置超时时间，单位为秒，最大超时时间300秒。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }
    }
}
