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
 * 拉流转推任务流数据信息。
 *
 * @method integer getVideoFps() 获取视频帧率，单位fps。
 * @method void setVideoFps(integer $VideoFps) 设置视频帧率，单位fps。
 * @method integer getAudioFps() 获取音频帧率，单位fps。
 * @method void setAudioFps(integer $AudioFps) 设置音频帧率，单位fps。
 * @method integer getVideoRate() 获取视频码率，单位bps。
 * @method void setVideoRate(integer $VideoRate) 设置视频码率，单位bps。
 * @method integer getAudioRate() 获取音频码率，单位bps。
 * @method void setAudioRate(integer $AudioRate) 设置音频码率，单位bps。
 * @method string getStreamFlag() 获取流标识。
 * @method void setStreamFlag(string $StreamFlag) 设置流标识。
 * @method string getTime() 获取时间，utc格式：yyyy-mm-ddTHH:MM:SSZ，参考https://cloud.tencent.com/document/product/266/11732#I。
 * @method void setTime(string $Time) 设置时间，utc格式：yyyy-mm-ddTHH:MM:SSZ，参考https://cloud.tencent.com/document/product/266/11732#I。
 */
class TurnPushInfo extends AbstractModel
{
    /**
     * @var integer 视频帧率，单位fps。
     */
    public $VideoFps;

    /**
     * @var integer 音频帧率，单位fps。
     */
    public $AudioFps;

    /**
     * @var integer 视频码率，单位bps。
     */
    public $VideoRate;

    /**
     * @var integer 音频码率，单位bps。
     */
    public $AudioRate;

    /**
     * @var string 流标识。
     */
    public $StreamFlag;

    /**
     * @var string 时间，utc格式：yyyy-mm-ddTHH:MM:SSZ，参考https://cloud.tencent.com/document/product/266/11732#I。
     */
    public $Time;

    /**
     * @param integer $VideoFps 视频帧率，单位fps。
     * @param integer $AudioFps 音频帧率，单位fps。
     * @param integer $VideoRate 视频码率，单位bps。
     * @param integer $AudioRate 音频码率，单位bps。
     * @param string $StreamFlag 流标识。
     * @param string $Time 时间，utc格式：yyyy-mm-ddTHH:MM:SSZ，参考https://cloud.tencent.com/document/product/266/11732#I。
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
        if (array_key_exists("VideoFps",$param) and $param["VideoFps"] !== null) {
            $this->VideoFps = $param["VideoFps"];
        }

        if (array_key_exists("AudioFps",$param) and $param["AudioFps"] !== null) {
            $this->AudioFps = $param["AudioFps"];
        }

        if (array_key_exists("VideoRate",$param) and $param["VideoRate"] !== null) {
            $this->VideoRate = $param["VideoRate"];
        }

        if (array_key_exists("AudioRate",$param) and $param["AudioRate"] !== null) {
            $this->AudioRate = $param["AudioRate"];
        }

        if (array_key_exists("StreamFlag",$param) and $param["StreamFlag"] !== null) {
            $this->StreamFlag = $param["StreamFlag"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }
    }
}
