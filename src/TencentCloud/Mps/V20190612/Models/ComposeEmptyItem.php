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
 * 视频编辑/合成任务 空白占位元素信息。
 *
 * @method string getDuration() 获取元素时长，时间支持：
<li>以 s 结尾，表示时间点单位为秒，如 3.5s 表示时间点为第3.5秒。</li>
 * @method void setDuration(string $Duration) 设置元素时长，时间支持：
<li>以 s 结尾，表示时间点单位为秒，如 3.5s 表示时间点为第3.5秒。</li>
 */
class ComposeEmptyItem extends AbstractModel
{
    /**
     * @var string 元素时长，时间支持：
<li>以 s 结尾，表示时间点单位为秒，如 3.5s 表示时间点为第3.5秒。</li>
     */
    public $Duration;

    /**
     * @param string $Duration 元素时长，时间支持：
<li>以 s 结尾，表示时间点单位为秒，如 3.5s 表示时间点为第3.5秒。</li>
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
    }
}
