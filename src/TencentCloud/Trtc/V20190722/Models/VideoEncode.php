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
 * 视频编码参数。
 *
 * @method integer getWidth() 获取输出流宽，音视频输出时必填。取值范围[0,1920]，单位为像素值。
 * @method void setWidth(integer $Width) 设置输出流宽，音视频输出时必填。取值范围[0,1920]，单位为像素值。
 * @method integer getHeight() 获取输出流高，音视频输出时必填。取值范围[0,1080]，单位为像素值。
 * @method void setHeight(integer $Height) 设置输出流高，音视频输出时必填。取值范围[0,1080]，单位为像素值。
 * @method integer getFps() 获取输出流帧率，音视频输出时必填。取值范围[1,60]，表示混流的输出帧率可选范围为1到60fps。
 * @method void setFps(integer $Fps) 设置输出流帧率，音视频输出时必填。取值范围[1,60]，表示混流的输出帧率可选范围为1到60fps。
 * @method integer getBitRate() 获取输出流码率，音视频输出时必填。取值范围[1,10000]，单位为kbps。
 * @method void setBitRate(integer $BitRate) 设置输出流码率，音视频输出时必填。取值范围[1,10000]，单位为kbps。
 * @method integer getGop() 获取输出流gop，音视频输出时必填。取值范围[1,5]，单位为秒。
 * @method void setGop(integer $Gop) 设置输出流gop，音视频输出时必填。取值范围[1,5]，单位为秒。
 */
class VideoEncode extends AbstractModel
{
    /**
     * @var integer 输出流宽，音视频输出时必填。取值范围[0,1920]，单位为像素值。
     */
    public $Width;

    /**
     * @var integer 输出流高，音视频输出时必填。取值范围[0,1080]，单位为像素值。
     */
    public $Height;

    /**
     * @var integer 输出流帧率，音视频输出时必填。取值范围[1,60]，表示混流的输出帧率可选范围为1到60fps。
     */
    public $Fps;

    /**
     * @var integer 输出流码率，音视频输出时必填。取值范围[1,10000]，单位为kbps。
     */
    public $BitRate;

    /**
     * @var integer 输出流gop，音视频输出时必填。取值范围[1,5]，单位为秒。
     */
    public $Gop;

    /**
     * @param integer $Width 输出流宽，音视频输出时必填。取值范围[0,1920]，单位为像素值。
     * @param integer $Height 输出流高，音视频输出时必填。取值范围[0,1080]，单位为像素值。
     * @param integer $Fps 输出流帧率，音视频输出时必填。取值范围[1,60]，表示混流的输出帧率可选范围为1到60fps。
     * @param integer $BitRate 输出流码率，音视频输出时必填。取值范围[1,10000]，单位为kbps。
     * @param integer $Gop 输出流gop，音视频输出时必填。取值范围[1,5]，单位为秒。
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

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("BitRate",$param) and $param["BitRate"] !== null) {
            $this->BitRate = $param["BitRate"];
        }

        if (array_key_exists("Gop",$param) and $param["Gop"] !== null) {
            $this->Gop = $param["Gop"];
        }
    }
}
