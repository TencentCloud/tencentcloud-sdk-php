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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频转码参数
 *
 * @method integer getWidth() 获取宽。取值范围[0,1920]，单位为像素值。
 * @method void setWidth(integer $Width) 设置宽。取值范围[0,1920]，单位为像素值。
 * @method integer getHeight() 获取高。取值范围[0,1080]，单位为像素值。
 * @method void setHeight(integer $Height) 设置高。取值范围[0,1080]，单位为像素值。
 * @method integer getFps() 获取帧率。取值范围[1,60]，表示帧率可选范围为1到60fps。
 * @method void setFps(integer $Fps) 设置帧率。取值范围[1,60]，表示帧率可选范围为1到60fps。
 * @method integer getBitRate() 获取码率。取值范围[1,10000]，单位为kbps。
 * @method void setBitRate(integer $BitRate) 设置码率。取值范围[1,10000]，单位为kbps。
 * @method integer getGop() 获取gop。取值范围[1,2]，单位为秒。
 * @method void setGop(integer $Gop) 设置gop。取值范围[1,2]，单位为秒。
 */
class VideoEncodeParams extends AbstractModel
{
    /**
     * @var integer 宽。取值范围[0,1920]，单位为像素值。
     */
    public $Width;

    /**
     * @var integer 高。取值范围[0,1080]，单位为像素值。
     */
    public $Height;

    /**
     * @var integer 帧率。取值范围[1,60]，表示帧率可选范围为1到60fps。
     */
    public $Fps;

    /**
     * @var integer 码率。取值范围[1,10000]，单位为kbps。
     */
    public $BitRate;

    /**
     * @var integer gop。取值范围[1,2]，单位为秒。
     */
    public $Gop;

    /**
     * @param integer $Width 宽。取值范围[0,1920]，单位为像素值。
     * @param integer $Height 高。取值范围[0,1080]，单位为像素值。
     * @param integer $Fps 帧率。取值范围[1,60]，表示帧率可选范围为1到60fps。
     * @param integer $BitRate 码率。取值范围[1,10000]，单位为kbps。
     * @param integer $Gop gop。取值范围[1,2]，单位为秒。
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
