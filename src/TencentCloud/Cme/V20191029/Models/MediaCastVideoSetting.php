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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 点播转直播视频配置
 *
 * @method integer getWidth() 获取视频宽度，单位：px，默认值为1280。
 * @method void setWidth(integer $Width) 设置视频宽度，单位：px，默认值为1280。
 * @method integer getHeight() 获取视频高度，单位：px，默认值为720。支持的视频分辨率最大为1920*1080。
 * @method void setHeight(integer $Height) 设置视频高度，单位：px，默认值为720。支持的视频分辨率最大为1920*1080。
 * @method integer getBitrate() 获取视频码率，单位：kbps，默认值为2500。最大值为10000 kbps。
 * @method void setBitrate(integer $Bitrate) 设置视频码率，单位：kbps，默认值为2500。最大值为10000 kbps。
 * @method float getFrameRate() 获取视频帧率，单位：Hz，默认值为25。最大值为60。
 * @method void setFrameRate(float $FrameRate) 设置视频帧率，单位：Hz，默认值为25。最大值为60。
 */
class MediaCastVideoSetting extends AbstractModel
{
    /**
     * @var integer 视频宽度，单位：px，默认值为1280。
     */
    public $Width;

    /**
     * @var integer 视频高度，单位：px，默认值为720。支持的视频分辨率最大为1920*1080。
     */
    public $Height;

    /**
     * @var integer 视频码率，单位：kbps，默认值为2500。最大值为10000 kbps。
     */
    public $Bitrate;

    /**
     * @var float 视频帧率，单位：Hz，默认值为25。最大值为60。
     */
    public $FrameRate;

    /**
     * @param integer $Width 视频宽度，单位：px，默认值为1280。
     * @param integer $Height 视频高度，单位：px，默认值为720。支持的视频分辨率最大为1920*1080。
     * @param integer $Bitrate 视频码率，单位：kbps，默认值为2500。最大值为10000 kbps。
     * @param float $FrameRate 视频帧率，单位：Hz，默认值为25。最大值为60。
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
        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("FrameRate",$param) and $param["FrameRate"] !== null) {
            $this->FrameRate = $param["FrameRate"];
        }
    }
}
