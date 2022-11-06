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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实时流状态查询的通用状态信息。
 *
 * @method string getState() 获取当前连接状态，Connected|Waiting|Idle。
 * @method void setState(string $State) 设置当前连接状态，Connected|Waiting|Idle。
 * @method string getMode() 获取连接模式，Listener|Caller。
 * @method void setMode(string $Mode) 设置连接模式，Listener|Caller。
 * @method integer getConnectedTime() 获取已连接时长，单位为ms。
 * @method void setConnectedTime(integer $ConnectedTime) 设置已连接时长，单位为ms。
 * @method integer getBitrate() 获取实时码率，单位为bps。
 * @method void setBitrate(integer $Bitrate) 设置实时码率，单位为bps。
 * @method integer getReconnections() 获取重试次数。
 * @method void setReconnections(integer $Reconnections) 设置重试次数。
 */
class FlowRealtimeStatusCommon extends AbstractModel
{
    /**
     * @var string 当前连接状态，Connected|Waiting|Idle。
     */
    public $State;

    /**
     * @var string 连接模式，Listener|Caller。
     */
    public $Mode;

    /**
     * @var integer 已连接时长，单位为ms。
     */
    public $ConnectedTime;

    /**
     * @var integer 实时码率，单位为bps。
     */
    public $Bitrate;

    /**
     * @var integer 重试次数。
     */
    public $Reconnections;

    /**
     * @param string $State 当前连接状态，Connected|Waiting|Idle。
     * @param string $Mode 连接模式，Listener|Caller。
     * @param integer $ConnectedTime 已连接时长，单位为ms。
     * @param integer $Bitrate 实时码率，单位为bps。
     * @param integer $Reconnections 重试次数。
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
        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("ConnectedTime",$param) and $param["ConnectedTime"] !== null) {
            $this->ConnectedTime = $param["ConnectedTime"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("Reconnections",$param) and $param["Reconnections"] !== null) {
            $this->Reconnections = $param["Reconnections"];
        }
    }
}
