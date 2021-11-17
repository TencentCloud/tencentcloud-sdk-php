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
 * 视频编码配置的视频设置更新信息
 *
 * @method integer getShortEdge() 获取视频短边尺寸，取值范围： [128, 4096]，单位：px。
视频最后的分辨率，根据短边尺寸和宽高比进行计算。
例：如果项目的宽高比是 16：9 ：
<li>短边尺寸为 1080，则导出视频的分辨率为 1920 * 1080。</li>
<li>短边尺寸为 720，则导出视频的分辨率为 1280 * 720。</li>
如果项目的宽高比是 9：16 ：
<li>短边尺寸为 1080，则导出视频的分辨率为 1080 * 1920。</li>
<li>短边尺寸为 720，则导出视频的分辨率为 720 * 1280。</li>
不填则不修改。
 * @method void setShortEdge(integer $ShortEdge) 设置视频短边尺寸，取值范围： [128, 4096]，单位：px。
视频最后的分辨率，根据短边尺寸和宽高比进行计算。
例：如果项目的宽高比是 16：9 ：
<li>短边尺寸为 1080，则导出视频的分辨率为 1920 * 1080。</li>
<li>短边尺寸为 720，则导出视频的分辨率为 1280 * 720。</li>
如果项目的宽高比是 9：16 ：
<li>短边尺寸为 1080，则导出视频的分辨率为 1080 * 1920。</li>
<li>短边尺寸为 720，则导出视频的分辨率为 720 * 1280。</li>
不填则不修改。
 * @method integer getBitrate() 获取指定码率，单位 bps。当该参数为'0' 时则不强制限定码率。
不填则不修改。
 * @method void setBitrate(integer $Bitrate) 设置指定码率，单位 bps。当该参数为'0' 时则不强制限定码率。
不填则不修改。
 * @method float getFrameRate() 获取指定帧率。单位 Hz。
不填则不修改。
 * @method void setFrameRate(float $FrameRate) 设置指定帧率。单位 Hz。
不填则不修改。
 */
class VideoEncodingPresetVideoSettingForUpdate extends AbstractModel
{
    /**
     * @var integer 视频短边尺寸，取值范围： [128, 4096]，单位：px。
视频最后的分辨率，根据短边尺寸和宽高比进行计算。
例：如果项目的宽高比是 16：9 ：
<li>短边尺寸为 1080，则导出视频的分辨率为 1920 * 1080。</li>
<li>短边尺寸为 720，则导出视频的分辨率为 1280 * 720。</li>
如果项目的宽高比是 9：16 ：
<li>短边尺寸为 1080，则导出视频的分辨率为 1080 * 1920。</li>
<li>短边尺寸为 720，则导出视频的分辨率为 720 * 1280。</li>
不填则不修改。
     */
    public $ShortEdge;

    /**
     * @var integer 指定码率，单位 bps。当该参数为'0' 时则不强制限定码率。
不填则不修改。
     */
    public $Bitrate;

    /**
     * @var float 指定帧率。单位 Hz。
不填则不修改。
     */
    public $FrameRate;

    /**
     * @param integer $ShortEdge 视频短边尺寸，取值范围： [128, 4096]，单位：px。
视频最后的分辨率，根据短边尺寸和宽高比进行计算。
例：如果项目的宽高比是 16：9 ：
<li>短边尺寸为 1080，则导出视频的分辨率为 1920 * 1080。</li>
<li>短边尺寸为 720，则导出视频的分辨率为 1280 * 720。</li>
如果项目的宽高比是 9：16 ：
<li>短边尺寸为 1080，则导出视频的分辨率为 1080 * 1920。</li>
<li>短边尺寸为 720，则导出视频的分辨率为 720 * 1280。</li>
不填则不修改。
     * @param integer $Bitrate 指定码率，单位 bps。当该参数为'0' 时则不强制限定码率。
不填则不修改。
     * @param float $FrameRate 指定帧率。单位 Hz。
不填则不修改。
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
        if (array_key_exists("ShortEdge",$param) and $param["ShortEdge"] !== null) {
            $this->ShortEdge = $param["ShortEdge"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("FrameRate",$param) and $param["FrameRate"] !== null) {
            $this->FrameRate = $param["FrameRate"];
        }
    }
}
