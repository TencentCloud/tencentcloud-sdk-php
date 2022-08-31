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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实时音视频用量的某一时间段的统计信息.  
 *
 * @method string getTimeKey() 获取时间点。
 * @method void setTimeKey(string $TimeKey) 设置时间点。
 * @method integer getVoiceUserNum() 获取通话人数。仅供参考。在线人数以仪表盘查询结果为准。
 * @method void setVoiceUserNum(integer $VoiceUserNum) 设置通话人数。仅供参考。在线人数以仪表盘查询结果为准。
 * @method integer getVideoTime() 获取音视频通话收费时长。单位：秒。
 * @method void setVideoTime(integer $VideoTime) 设置音视频通话收费时长。单位：秒。
 * @method integer getClass1VideoTime() 获取标清视频通话收费时长。单位：秒。
 * @method void setClass1VideoTime(integer $Class1VideoTime) 设置标清视频通话收费时长。单位：秒。
 * @method integer getClass2VideoTime() 获取高清视频通话收费时长。单位：秒。
 * @method void setClass2VideoTime(integer $Class2VideoTime) 设置高清视频通话收费时长。单位：秒。
 * @method integer getClass3VideoTime() 获取超高清视频通话收费时长。单位：秒。
 * @method void setClass3VideoTime(integer $Class3VideoTime) 设置超高清视频通话收费时长。单位：秒。
 * @method integer getAudioTime() 获取音频通话收费时长。单位：秒。
 * @method void setAudioTime(integer $AudioTime) 设置音频通话收费时长。单位：秒。
 * @method float getBandwidth() 获取带宽。单位：Mbps。
 * @method void setBandwidth(float $Bandwidth) 设置带宽。单位：Mbps。
 * @method integer getVideo2KTime() 获取2k视频通话收费时长。单位：秒。
 * @method void setVideo2KTime(integer $Video2KTime) 设置2k视频通话收费时长。单位：秒。
 * @method integer getVideo4KTime() 获取4k视频通话收费时长。单位：秒。
 * @method void setVideo4KTime(integer $Video4KTime) 设置4k视频通话收费时长。单位：秒。
 */
class TrtcTimeNewUsage extends AbstractModel
{
    /**
     * @var string 时间点。
     */
    public $TimeKey;

    /**
     * @var integer 通话人数。仅供参考。在线人数以仪表盘查询结果为准。
     */
    public $VoiceUserNum;

    /**
     * @var integer 音视频通话收费时长。单位：秒。
     */
    public $VideoTime;

    /**
     * @var integer 标清视频通话收费时长。单位：秒。
     */
    public $Class1VideoTime;

    /**
     * @var integer 高清视频通话收费时长。单位：秒。
     */
    public $Class2VideoTime;

    /**
     * @var integer 超高清视频通话收费时长。单位：秒。
     */
    public $Class3VideoTime;

    /**
     * @var integer 音频通话收费时长。单位：秒。
     */
    public $AudioTime;

    /**
     * @var float 带宽。单位：Mbps。
     */
    public $Bandwidth;

    /**
     * @var integer 2k视频通话收费时长。单位：秒。
     */
    public $Video2KTime;

    /**
     * @var integer 4k视频通话收费时长。单位：秒。
     */
    public $Video4KTime;

    /**
     * @param string $TimeKey 时间点。
     * @param integer $VoiceUserNum 通话人数。仅供参考。在线人数以仪表盘查询结果为准。
     * @param integer $VideoTime 音视频通话收费时长。单位：秒。
     * @param integer $Class1VideoTime 标清视频通话收费时长。单位：秒。
     * @param integer $Class2VideoTime 高清视频通话收费时长。单位：秒。
     * @param integer $Class3VideoTime 超高清视频通话收费时长。单位：秒。
     * @param integer $AudioTime 音频通话收费时长。单位：秒。
     * @param float $Bandwidth 带宽。单位：Mbps。
     * @param integer $Video2KTime 2k视频通话收费时长。单位：秒。
     * @param integer $Video4KTime 4k视频通话收费时长。单位：秒。
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
        if (array_key_exists("TimeKey",$param) and $param["TimeKey"] !== null) {
            $this->TimeKey = $param["TimeKey"];
        }

        if (array_key_exists("VoiceUserNum",$param) and $param["VoiceUserNum"] !== null) {
            $this->VoiceUserNum = $param["VoiceUserNum"];
        }

        if (array_key_exists("VideoTime",$param) and $param["VideoTime"] !== null) {
            $this->VideoTime = $param["VideoTime"];
        }

        if (array_key_exists("Class1VideoTime",$param) and $param["Class1VideoTime"] !== null) {
            $this->Class1VideoTime = $param["Class1VideoTime"];
        }

        if (array_key_exists("Class2VideoTime",$param) and $param["Class2VideoTime"] !== null) {
            $this->Class2VideoTime = $param["Class2VideoTime"];
        }

        if (array_key_exists("Class3VideoTime",$param) and $param["Class3VideoTime"] !== null) {
            $this->Class3VideoTime = $param["Class3VideoTime"];
        }

        if (array_key_exists("AudioTime",$param) and $param["AudioTime"] !== null) {
            $this->AudioTime = $param["AudioTime"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Video2KTime",$param) and $param["Video2KTime"] !== null) {
            $this->Video2KTime = $param["Video2KTime"];
        }

        if (array_key_exists("Video4KTime",$param) and $param["Video4KTime"] !== null) {
            $this->Video4KTime = $param["Video4KTime"];
        }
    }
}
