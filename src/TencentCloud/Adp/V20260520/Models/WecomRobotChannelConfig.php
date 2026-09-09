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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企微机器人渠道配置
 *
 * @method WecomRobotCallbackAccess getCallback() 获取<p>回调接入配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCallback(WecomRobotCallbackAccess $Callback) 设置<p>回调接入配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method WecomRobotWebsocketAccess getWebsocket() 获取<p>WebSocket长连接配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebsocket(WecomRobotWebsocketAccess $Websocket) 设置<p>WebSocket长连接配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class WecomRobotChannelConfig extends AbstractModel
{
    /**
     * @var WecomRobotCallbackAccess <p>回调接入配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Callback;

    /**
     * @var WecomRobotWebsocketAccess <p>WebSocket长连接配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Websocket;

    /**
     * @param WecomRobotCallbackAccess $Callback <p>回调接入配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param WecomRobotWebsocketAccess $Websocket <p>WebSocket长连接配置</p>
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
        if (array_key_exists("Callback",$param) and $param["Callback"] !== null) {
            $this->Callback = new WecomRobotCallbackAccess();
            $this->Callback->deserialize($param["Callback"]);
        }

        if (array_key_exists("Websocket",$param) and $param["Websocket"] !== null) {
            $this->Websocket = new WecomRobotWebsocketAccess();
            $this->Websocket->deserialize($param["Websocket"]);
        }
    }
}
