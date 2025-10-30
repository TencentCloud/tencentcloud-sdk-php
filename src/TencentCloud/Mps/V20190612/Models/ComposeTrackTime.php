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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频编辑/合成任务 对应元素在目标视频轨道上的时间信息。
 *
 * @method string getStart() 获取元素在轨道上的起始时间，时间点支持：
<li>以 s 结尾，表示时间点单位为秒，如 3.5s 表示时间点为第3.5秒；</li>
注意：不填则默认为前一个元素的结束时间，此时可以通过 ComposeEmptyItem 元素来进行占位，实现轨道起始时间设置。
 * @method void setStart(string $Start) 设置元素在轨道上的起始时间，时间点支持：
<li>以 s 结尾，表示时间点单位为秒，如 3.5s 表示时间点为第3.5秒；</li>
注意：不填则默认为前一个元素的结束时间，此时可以通过 ComposeEmptyItem 元素来进行占位，实现轨道起始时间设置。
 * @method string getDuration() 获取元素时长，时间支持：
<li>以 s 结尾，表示时间点单位为秒，如 3.5s 表示时间点为第3.5秒；</li>
默认：取对应 ComposeSourceMedia 媒体的有效时长（即 EndTime-StartTime），没有 ComposeSourceMedia 则默认为 1 秒。
 * @method void setDuration(string $Duration) 设置元素时长，时间支持：
<li>以 s 结尾，表示时间点单位为秒，如 3.5s 表示时间点为第3.5秒；</li>
默认：取对应 ComposeSourceMedia 媒体的有效时长（即 EndTime-StartTime），没有 ComposeSourceMedia 则默认为 1 秒。
 */
class ComposeTrackTime extends AbstractModel
{
    /**
     * @var string 元素在轨道上的起始时间，时间点支持：
<li>以 s 结尾，表示时间点单位为秒，如 3.5s 表示时间点为第3.5秒；</li>
注意：不填则默认为前一个元素的结束时间，此时可以通过 ComposeEmptyItem 元素来进行占位，实现轨道起始时间设置。
     */
    public $Start;

    /**
     * @var string 元素时长，时间支持：
<li>以 s 结尾，表示时间点单位为秒，如 3.5s 表示时间点为第3.5秒；</li>
默认：取对应 ComposeSourceMedia 媒体的有效时长（即 EndTime-StartTime），没有 ComposeSourceMedia 则默认为 1 秒。
     */
    public $Duration;

    /**
     * @param string $Start 元素在轨道上的起始时间，时间点支持：
<li>以 s 结尾，表示时间点单位为秒，如 3.5s 表示时间点为第3.5秒；</li>
注意：不填则默认为前一个元素的结束时间，此时可以通过 ComposeEmptyItem 元素来进行占位，实现轨道起始时间设置。
     * @param string $Duration 元素时长，时间支持：
<li>以 s 结尾，表示时间点单位为秒，如 3.5s 表示时间点为第3.5秒；</li>
默认：取对应 ComposeSourceMedia 媒体的有效时长（即 EndTime-StartTime），没有 ComposeSourceMedia 则默认为 1 秒。
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
        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
