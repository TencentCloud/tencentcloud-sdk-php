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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ControlChannelLocalRecord请求参数结构体
 *
 * @method string getDeviceId() 获取设备唯一标识
 * @method void setDeviceId(string $DeviceId) 设置设备唯一标识
 * @method string getChannelId() 获取通道唯一标识
 * @method void setChannelId(string $ChannelId) 设置通道唯一标识
 * @method string getStreamId() 获取流Id，流的唯一标识
 * @method void setStreamId(string $StreamId) 设置流Id，流的唯一标识
 * @method string getCommand() 获取控制参数，转义的json字符串

目前支持的command：
"Command": "{"Action":"PAUSE"}" 暂停
"Command": "{"Action":"PLAY"}" 暂停恢复
"Command": "{"Action":"PLAY","Offset":"15"}" 基于文件起始时间点的位置偏移，单位秒
 * @method void setCommand(string $Command) 设置控制参数，转义的json字符串

目前支持的command：
"Command": "{"Action":"PAUSE"}" 暂停
"Command": "{"Action":"PLAY"}" 暂停恢复
"Command": "{"Action":"PLAY","Offset":"15"}" 基于文件起始时间点的位置偏移，单位秒
 */
class ControlChannelLocalRecordRequest extends AbstractModel
{
    /**
     * @var string 设备唯一标识
     */
    public $DeviceId;

    /**
     * @var string 通道唯一标识
     */
    public $ChannelId;

    /**
     * @var string 流Id，流的唯一标识
     */
    public $StreamId;

    /**
     * @var string 控制参数，转义的json字符串

目前支持的command：
"Command": "{"Action":"PAUSE"}" 暂停
"Command": "{"Action":"PLAY"}" 暂停恢复
"Command": "{"Action":"PLAY","Offset":"15"}" 基于文件起始时间点的位置偏移，单位秒
     */
    public $Command;

    /**
     * @param string $DeviceId 设备唯一标识
     * @param string $ChannelId 通道唯一标识
     * @param string $StreamId 流Id，流的唯一标识
     * @param string $Command 控制参数，转义的json字符串

目前支持的command：
"Command": "{"Action":"PAUSE"}" 暂停
"Command": "{"Action":"PLAY"}" 暂停恢复
"Command": "{"Action":"PLAY","Offset":"15"}" 基于文件起始时间点的位置偏移，单位秒
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

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("StreamId",$param) and $param["StreamId"] !== null) {
            $this->StreamId = $param["StreamId"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }
    }
}
