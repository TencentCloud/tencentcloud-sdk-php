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
 * 视频编辑/合成任务 转场元素信息。
 *
 * @method string getDuration() 获取元素时长，时间支持：<li>以 s 结尾，表示时间点单位为秒，如 3s 表示时间点为第3秒。</li>
默认：1s
注意：
<li>必须是整数s，否则向下取整。</li>
<li>转场 前后必须紧挨着两个不为 Empty 的元素。</li>
<li>转场 Duration 必须小于前一个元素的 Duration，同时必须小于后一个元素的 Duration。</li>
<li>进行转场处理的两个元素，第二个元素在轨道上的起始时间会自动调整为前一个元素的结束时间减去转场的 Duration。</li>
 * @method void setDuration(string $Duration) 设置元素时长，时间支持：<li>以 s 结尾，表示时间点单位为秒，如 3s 表示时间点为第3秒。</li>
默认：1s
注意：
<li>必须是整数s，否则向下取整。</li>
<li>转场 前后必须紧挨着两个不为 Empty 的元素。</li>
<li>转场 Duration 必须小于前一个元素的 Duration，同时必须小于后一个元素的 Duration。</li>
<li>进行转场处理的两个元素，第二个元素在轨道上的起始时间会自动调整为前一个元素的结束时间减去转场的 Duration。</li>
 * @method array getTransitions() 获取转场操作列表。
默认：淡入淡出。
注意：图像转场操作和音频转场操作各自最多支持一个。
 * @method void setTransitions(array $Transitions) 设置转场操作列表。
默认：淡入淡出。
注意：图像转场操作和音频转场操作各自最多支持一个。
 */
class ComposeTransitionItem extends AbstractModel
{
    /**
     * @var string 元素时长，时间支持：<li>以 s 结尾，表示时间点单位为秒，如 3s 表示时间点为第3秒。</li>
默认：1s
注意：
<li>必须是整数s，否则向下取整。</li>
<li>转场 前后必须紧挨着两个不为 Empty 的元素。</li>
<li>转场 Duration 必须小于前一个元素的 Duration，同时必须小于后一个元素的 Duration。</li>
<li>进行转场处理的两个元素，第二个元素在轨道上的起始时间会自动调整为前一个元素的结束时间减去转场的 Duration。</li>
     */
    public $Duration;

    /**
     * @var array 转场操作列表。
默认：淡入淡出。
注意：图像转场操作和音频转场操作各自最多支持一个。
     */
    public $Transitions;

    /**
     * @param string $Duration 元素时长，时间支持：<li>以 s 结尾，表示时间点单位为秒，如 3s 表示时间点为第3秒。</li>
默认：1s
注意：
<li>必须是整数s，否则向下取整。</li>
<li>转场 前后必须紧挨着两个不为 Empty 的元素。</li>
<li>转场 Duration 必须小于前一个元素的 Duration，同时必须小于后一个元素的 Duration。</li>
<li>进行转场处理的两个元素，第二个元素在轨道上的起始时间会自动调整为前一个元素的结束时间减去转场的 Duration。</li>
     * @param array $Transitions 转场操作列表。
默认：淡入淡出。
注意：图像转场操作和音频转场操作各自最多支持一个。
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
        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Transitions",$param) and $param["Transitions"] !== null) {
            $this->Transitions = [];
            foreach ($param["Transitions"] as $key => $value){
                $obj = new ComposeTransitionOperation();
                $obj->deserialize($value);
                array_push($this->Transitions, $obj);
            }
        }
    }
}
