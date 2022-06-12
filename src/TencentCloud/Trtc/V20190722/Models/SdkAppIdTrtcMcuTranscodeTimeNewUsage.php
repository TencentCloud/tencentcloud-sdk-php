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
 * 查询旁路转码计费时长。
查询时间小于等于1天时，返回每5分钟粒度的数据；查询时间大于1天时，返回按天汇总的数据。
 *
 * @method string getTimeKey() 获取本组数据对应的时间点，格式如：2020-09-07或2020-09-07 00:05:05。
 * @method void setTimeKey(string $TimeKey) 设置本组数据对应的时间点，格式如：2020-09-07或2020-09-07 00:05:05。
 * @method integer getAudioTime() 获取语音时长，单位：秒。
 * @method void setAudioTime(integer $AudioTime) 设置语音时长，单位：秒。
 * @method integer getVideoTimeH264SD() 获取视频时长-标清SD，单位：秒。
 * @method void setVideoTimeH264SD(integer $VideoTimeH264SD) 设置视频时长-标清SD，单位：秒。
 * @method integer getVideoTimeH264HD() 获取视频时长-高清HD，单位：秒。
 * @method void setVideoTimeH264HD(integer $VideoTimeH264HD) 设置视频时长-高清HD，单位：秒。
 * @method integer getVideoTimeH264FHD() 获取视频时长-全高清FHD，单位：秒。
 * @method void setVideoTimeH264FHD(integer $VideoTimeH264FHD) 设置视频时长-全高清FHD，单位：秒。
 * @method float getFlux() 获取视频时长-带宽，单位：mbps。
 * @method void setFlux(float $Flux) 设置视频时长-带宽，单位：mbps。
 * @method integer getVideoTimeH2642K() 获取视频时长-标清2K，单位：秒。
 * @method void setVideoTimeH2642K(integer $VideoTimeH2642K) 设置视频时长-标清2K，单位：秒。
 * @method integer getVideoTimeH2644K() 获取视频时长-标清4K，单位：秒。
 * @method void setVideoTimeH2644K(integer $VideoTimeH2644K) 设置视频时长-标清4K，单位：秒。
 * @method integer getVideoTimeH265SD() 获取视频时长-标清265SD，单位：秒。
 * @method void setVideoTimeH265SD(integer $VideoTimeH265SD) 设置视频时长-标清265SD，单位：秒。
 * @method integer getVideoTimeH265HD() 获取视频时长-高清265HD，单位：秒。
 * @method void setVideoTimeH265HD(integer $VideoTimeH265HD) 设置视频时长-高清265HD，单位：秒。
 * @method integer getVideoTimeH265FHD() 获取视频时长-全高清265FHD，单位：秒。
 * @method void setVideoTimeH265FHD(integer $VideoTimeH265FHD) 设置视频时长-全高清265FHD，单位：秒。
 * @method integer getVideoTimeH2652K() 获取视频时长-标清2652K，单位：秒。
 * @method void setVideoTimeH2652K(integer $VideoTimeH2652K) 设置视频时长-标清2652K，单位：秒。
 * @method integer getVideoTimeH2654K() 获取视频时长-标清265 4K，单位：秒。
 * @method void setVideoTimeH2654K(integer $VideoTimeH2654K) 设置视频时长-标清265 4K，单位：秒。
 */
class SdkAppIdTrtcMcuTranscodeTimeNewUsage extends AbstractModel
{
    /**
     * @var string 本组数据对应的时间点，格式如：2020-09-07或2020-09-07 00:05:05。
     */
    public $TimeKey;

    /**
     * @var integer 语音时长，单位：秒。
     */
    public $AudioTime;

    /**
     * @var integer 视频时长-标清SD，单位：秒。
     */
    public $VideoTimeH264SD;

    /**
     * @var integer 视频时长-高清HD，单位：秒。
     */
    public $VideoTimeH264HD;

    /**
     * @var integer 视频时长-全高清FHD，单位：秒。
     */
    public $VideoTimeH264FHD;

    /**
     * @var float 视频时长-带宽，单位：mbps。
     */
    public $Flux;

    /**
     * @var integer 视频时长-标清2K，单位：秒。
     */
    public $VideoTimeH2642K;

    /**
     * @var integer 视频时长-标清4K，单位：秒。
     */
    public $VideoTimeH2644K;

    /**
     * @var integer 视频时长-标清265SD，单位：秒。
     */
    public $VideoTimeH265SD;

    /**
     * @var integer 视频时长-高清265HD，单位：秒。
     */
    public $VideoTimeH265HD;

    /**
     * @var integer 视频时长-全高清265FHD，单位：秒。
     */
    public $VideoTimeH265FHD;

    /**
     * @var integer 视频时长-标清2652K，单位：秒。
     */
    public $VideoTimeH2652K;

    /**
     * @var integer 视频时长-标清265 4K，单位：秒。
     */
    public $VideoTimeH2654K;

    /**
     * @param string $TimeKey 本组数据对应的时间点，格式如：2020-09-07或2020-09-07 00:05:05。
     * @param integer $AudioTime 语音时长，单位：秒。
     * @param integer $VideoTimeH264SD 视频时长-标清SD，单位：秒。
     * @param integer $VideoTimeH264HD 视频时长-高清HD，单位：秒。
     * @param integer $VideoTimeH264FHD 视频时长-全高清FHD，单位：秒。
     * @param float $Flux 视频时长-带宽，单位：mbps。
     * @param integer $VideoTimeH2642K 视频时长-标清2K，单位：秒。
     * @param integer $VideoTimeH2644K 视频时长-标清4K，单位：秒。
     * @param integer $VideoTimeH265SD 视频时长-标清265SD，单位：秒。
     * @param integer $VideoTimeH265HD 视频时长-高清265HD，单位：秒。
     * @param integer $VideoTimeH265FHD 视频时长-全高清265FHD，单位：秒。
     * @param integer $VideoTimeH2652K 视频时长-标清2652K，单位：秒。
     * @param integer $VideoTimeH2654K 视频时长-标清265 4K，单位：秒。
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

        if (array_key_exists("AudioTime",$param) and $param["AudioTime"] !== null) {
            $this->AudioTime = $param["AudioTime"];
        }

        if (array_key_exists("VideoTimeH264SD",$param) and $param["VideoTimeH264SD"] !== null) {
            $this->VideoTimeH264SD = $param["VideoTimeH264SD"];
        }

        if (array_key_exists("VideoTimeH264HD",$param) and $param["VideoTimeH264HD"] !== null) {
            $this->VideoTimeH264HD = $param["VideoTimeH264HD"];
        }

        if (array_key_exists("VideoTimeH264FHD",$param) and $param["VideoTimeH264FHD"] !== null) {
            $this->VideoTimeH264FHD = $param["VideoTimeH264FHD"];
        }

        if (array_key_exists("Flux",$param) and $param["Flux"] !== null) {
            $this->Flux = $param["Flux"];
        }

        if (array_key_exists("VideoTimeH2642K",$param) and $param["VideoTimeH2642K"] !== null) {
            $this->VideoTimeH2642K = $param["VideoTimeH2642K"];
        }

        if (array_key_exists("VideoTimeH2644K",$param) and $param["VideoTimeH2644K"] !== null) {
            $this->VideoTimeH2644K = $param["VideoTimeH2644K"];
        }

        if (array_key_exists("VideoTimeH265SD",$param) and $param["VideoTimeH265SD"] !== null) {
            $this->VideoTimeH265SD = $param["VideoTimeH265SD"];
        }

        if (array_key_exists("VideoTimeH265HD",$param) and $param["VideoTimeH265HD"] !== null) {
            $this->VideoTimeH265HD = $param["VideoTimeH265HD"];
        }

        if (array_key_exists("VideoTimeH265FHD",$param) and $param["VideoTimeH265FHD"] !== null) {
            $this->VideoTimeH265FHD = $param["VideoTimeH265FHD"];
        }

        if (array_key_exists("VideoTimeH2652K",$param) and $param["VideoTimeH2652K"] !== null) {
            $this->VideoTimeH2652K = $param["VideoTimeH2652K"];
        }

        if (array_key_exists("VideoTimeH2654K",$param) and $param["VideoTimeH2654K"] !== null) {
            $this->VideoTimeH2654K = $param["VideoTimeH2654K"];
        }
    }
}
