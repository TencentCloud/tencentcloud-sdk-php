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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Aigc 转绘、替换等任务参数
 *
 * @method string getStyle() 获取<p>转绘视频风格，如动漫、赛博朋克、水墨等</p>
 * @method void setStyle(string $Style) 设置<p>转绘视频风格，如动漫、赛博朋克、水墨等</p>
 */
class VideoRedrawTaskInfo extends AbstractModel
{
    /**
     * @var string <p>转绘视频风格，如动漫、赛博朋克、水墨等</p>
     */
    public $Style;

    /**
     * @param string $Style <p>转绘视频风格，如动漫、赛博朋克、水墨等</p>
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
        if (array_key_exists("Style",$param) and $param["Style"] !== null) {
            $this->Style = $param["Style"];
        }
    }
}
