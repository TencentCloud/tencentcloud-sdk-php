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
 * 录制视频转码参数。
 *
 * @method integer getWidth() 获取视频的宽度值，单位为像素，默认值360。不能超过1920，与height的乘积不能超过1920*1080。
 * @method void setWidth(integer $Width) 设置视频的宽度值，单位为像素，默认值360。不能超过1920，与height的乘积不能超过1920*1080。
 * @method integer getHeight() 获取视频的高度值，单位为像素，默认值640。不能超过1920，与width的乘积不能超过1920*1080。
 * @method void setHeight(integer $Height) 设置视频的高度值，单位为像素，默认值640。不能超过1920，与width的乘积不能超过1920*1080。
 * @method integer getFps() 获取视频的帧率，范围[1, 60]，默认15。
 * @method void setFps(integer $Fps) 设置视频的帧率，范围[1, 60]，默认15。
 * @method integer getBitRate() 获取视频的码率,单位是bps，范围[64000, 8192000]，默认550000bps。
 * @method void setBitRate(integer $BitRate) 设置视频的码率,单位是bps，范围[64000, 8192000]，默认550000bps。
 * @method integer getGop() 获取视频关键帧时间间隔，单位秒，默认值10秒。
 * @method void setGop(integer $Gop) 设置视频关键帧时间间隔，单位秒，默认值10秒。
 */
class VideoParams extends AbstractModel
{
    /**
     * @var integer 视频的宽度值，单位为像素，默认值360。不能超过1920，与height的乘积不能超过1920*1080。
     */
    public $Width;

    /**
     * @var integer 视频的高度值，单位为像素，默认值640。不能超过1920，与width的乘积不能超过1920*1080。
     */
    public $Height;

    /**
     * @var integer 视频的帧率，范围[1, 60]，默认15。
     */
    public $Fps;

    /**
     * @var integer 视频的码率,单位是bps，范围[64000, 8192000]，默认550000bps。
     */
    public $BitRate;

    /**
     * @var integer 视频关键帧时间间隔，单位秒，默认值10秒。
     */
    public $Gop;

    /**
     * @param integer $Width 视频的宽度值，单位为像素，默认值360。不能超过1920，与height的乘积不能超过1920*1080。
     * @param integer $Height 视频的高度值，单位为像素，默认值640。不能超过1920，与width的乘积不能超过1920*1080。
     * @param integer $Fps 视频的帧率，范围[1, 60]，默认15。
     * @param integer $BitRate 视频的码率,单位是bps，范围[64000, 8192000]，默认550000bps。
     * @param integer $Gop 视频关键帧时间间隔，单位秒，默认值10秒。
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
