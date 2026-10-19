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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频场景配置
 *
 * @method integer getInterval() 获取<p>分析周期（秒）：每隔多少秒从云端录像中截取一个视频片段进行分析。例如 Interval=3600、Duration=600，表示每隔1小时 取一个 10 分钟的视频片段进行分析。需满足 Duration ≤ Interval，否则相邻片段将重叠。取值范围［5,86400］。</p>
 * @method void setInterval(integer $Interval) 设置<p>分析周期（秒）：每隔多少秒从云端录像中截取一个视频片段进行分析。例如 Interval=3600、Duration=600，表示每隔1小时 取一个 10 分钟的视频片段进行分析。需满足 Duration ≤ Interval，否则相邻片段将重叠。取值范围［5,86400］。</p>
 * @method integer getDuration() 获取<p>分析片段时长（秒）：每次分析截取的视频片段长度，即单次分析覆盖的视频时长。取值范围［5,12800］。</p>
 * @method void setDuration(integer $Duration) 设置<p>分析片段时长（秒）：每次分析截取的视频片段长度，即单次分析覆盖的视频时长。取值范围［5,12800］。</p>
 * @method float getFps() 获取<p>抽帧率（FPS）：在片段内每隔1/Fps 秒截取一帧进行分析。取值越大，分析越精细，单次分析的帧数越多。默认值1，取值范围［0.1,1</p>
 * @method void setFps(float $Fps) 设置<p>抽帧率（FPS）：在片段内每隔1/Fps 秒截取一帧进行分析。取值越大，分析越精细，单次分析的帧数越多。默认值1，取值范围［0.1,1</p>
 */
class VideoSceneInfo extends AbstractModel
{
    /**
     * @var integer <p>分析周期（秒）：每隔多少秒从云端录像中截取一个视频片段进行分析。例如 Interval=3600、Duration=600，表示每隔1小时 取一个 10 分钟的视频片段进行分析。需满足 Duration ≤ Interval，否则相邻片段将重叠。取值范围［5,86400］。</p>
     */
    public $Interval;

    /**
     * @var integer <p>分析片段时长（秒）：每次分析截取的视频片段长度，即单次分析覆盖的视频时长。取值范围［5,12800］。</p>
     */
    public $Duration;

    /**
     * @var float <p>抽帧率（FPS）：在片段内每隔1/Fps 秒截取一帧进行分析。取值越大，分析越精细，单次分析的帧数越多。默认值1，取值范围［0.1,1</p>
     */
    public $Fps;

    /**
     * @param integer $Interval <p>分析周期（秒）：每隔多少秒从云端录像中截取一个视频片段进行分析。例如 Interval=3600、Duration=600，表示每隔1小时 取一个 10 分钟的视频片段进行分析。需满足 Duration ≤ Interval，否则相邻片段将重叠。取值范围［5,86400］。</p>
     * @param integer $Duration <p>分析片段时长（秒）：每次分析截取的视频片段长度，即单次分析覆盖的视频时长。取值范围［5,12800］。</p>
     * @param float $Fps <p>抽帧率（FPS）：在片段内每隔1/Fps 秒截取一帧进行分析。取值越大，分析越精细，单次分析的帧数越多。默认值1，取值范围［0.1,1</p>
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
        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }
    }
}
