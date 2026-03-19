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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GenerateLiveAvatarScriptBroadcast请求参数结构体
 *
 * @method string getRoomId() 获取数字人直播间 ID。
 * @method void setRoomId(string $RoomId) 设置数字人直播间 ID。
 * @method string getScriptId() 获取话术 ID。
 * @method void setScriptId(string $ScriptId) 设置话术 ID。
 * @method string getTimbreKey() 获取音色 Key。如果不填，则默认使用数字人直播已经保存的音色。
 * @method void setTimbreKey(string $TimbreKey) 设置音色 Key。如果不填，则默认使用数字人直播已经保存的音色。
 * @method float getSpeechSpeed() 获取语速（1.0为正常语速，范围[0.6-2.5]，值为0.6时播报语速最慢，值为2.5时播报语速最快。不传默认使用数字人直播间已设置的语速。
 * @method void setSpeechSpeed(float $SpeechSpeed) 设置语速（1.0为正常语速，范围[0.6-2.5]，值为0.6时播报语速最慢，值为2.5时播报语速最快。不传默认使用数字人直播间已设置的语速。
 * @method integer getSpeechVolume() 获取音量大小，范围[0，10]，对应音量大小。默认为5，代表正常音量，值越大音量越高。不传使用数字人直播已设置的音量。
 * @method void setSpeechVolume(integer $SpeechVolume) 设置音量大小，范围[0，10]，对应音量大小。默认为5，代表正常音量，值越大音量越高。不传使用数字人直播已设置的音量。
 */
class GenerateLiveAvatarScriptBroadcastRequest extends AbstractModel
{
    /**
     * @var string 数字人直播间 ID。
     */
    public $RoomId;

    /**
     * @var string 话术 ID。
     */
    public $ScriptId;

    /**
     * @var string 音色 Key。如果不填，则默认使用数字人直播已经保存的音色。
     */
    public $TimbreKey;

    /**
     * @var float 语速（1.0为正常语速，范围[0.6-2.5]，值为0.6时播报语速最慢，值为2.5时播报语速最快。不传默认使用数字人直播间已设置的语速。
     */
    public $SpeechSpeed;

    /**
     * @var integer 音量大小，范围[0，10]，对应音量大小。默认为5，代表正常音量，值越大音量越高。不传使用数字人直播已设置的音量。
     */
    public $SpeechVolume;

    /**
     * @param string $RoomId 数字人直播间 ID。
     * @param string $ScriptId 话术 ID。
     * @param string $TimbreKey 音色 Key。如果不填，则默认使用数字人直播已经保存的音色。
     * @param float $SpeechSpeed 语速（1.0为正常语速，范围[0.6-2.5]，值为0.6时播报语速最慢，值为2.5时播报语速最快。不传默认使用数字人直播间已设置的语速。
     * @param integer $SpeechVolume 音量大小，范围[0，10]，对应音量大小。默认为5，代表正常音量，值越大音量越高。不传使用数字人直播已设置的音量。
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
        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("ScriptId",$param) and $param["ScriptId"] !== null) {
            $this->ScriptId = $param["ScriptId"];
        }

        if (array_key_exists("TimbreKey",$param) and $param["TimbreKey"] !== null) {
            $this->TimbreKey = $param["TimbreKey"];
        }

        if (array_key_exists("SpeechSpeed",$param) and $param["SpeechSpeed"] !== null) {
            $this->SpeechSpeed = $param["SpeechSpeed"];
        }

        if (array_key_exists("SpeechVolume",$param) and $param["SpeechVolume"] !== null) {
            $this->SpeechVolume = $param["SpeechVolume"];
        }
    }
}
