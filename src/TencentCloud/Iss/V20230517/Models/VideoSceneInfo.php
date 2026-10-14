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
 * 视频场景配置（预留）
 *
 * @method integer getInterval() 获取<p>分析间隔（秒）：每隔多少秒触发一次分析（滑动步长）</p>
 * @method void setInterval(integer $Interval) 设置<p>分析间隔（秒）：每隔多少秒触发一次分析（滑动步长）</p>
 * @method integer getDuration() 获取<p>分析片段时长（秒）：单次送入模型的视频窗口长度，范围 [5, 12800]</p>
 * @method void setDuration(integer $Duration) 设置<p>分析片段时长（秒）：单次送入模型的视频窗口长度，范围 [5, 12800]</p>
 * @method float getFps() 获取<p>抽帧率，默认 1，范围 [0.1, 1]，每隔 1/Fps 秒抽 1 帧送模型</p>
 * @method void setFps(float $Fps) 设置<p>抽帧率，默认 1，范围 [0.1, 1]，每隔 1/Fps 秒抽 1 帧送模型</p>
 */
class VideoSceneInfo extends AbstractModel
{
    /**
     * @var integer <p>分析间隔（秒）：每隔多少秒触发一次分析（滑动步长）</p>
     */
    public $Interval;

    /**
     * @var integer <p>分析片段时长（秒）：单次送入模型的视频窗口长度，范围 [5, 12800]</p>
     */
    public $Duration;

    /**
     * @var float <p>抽帧率，默认 1，范围 [0.1, 1]，每隔 1/Fps 秒抽 1 帧送模型</p>
     */
    public $Fps;

    /**
     * @param integer $Interval <p>分析间隔（秒）：每隔多少秒触发一次分析（滑动步长）</p>
     * @param integer $Duration <p>分析片段时长（秒）：单次送入模型的视频窗口长度，范围 [5, 12800]</p>
     * @param float $Fps <p>抽帧率，默认 1，范围 [0.1, 1]，每隔 1/Fps 秒抽 1 帧送模型</p>
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
