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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AIGC 视频转绘人物参数信息。
 *
 * @method string getStyle() 获取<p>用于描述转绘风格。限制50字符。</p>
 * @method void setStyle(string $Style) 设置<p>用于描述转绘风格。限制50字符。</p>
 */
class AigcVideoRedrawTaskInfo extends AbstractModel
{
    /**
     * @var string <p>用于描述转绘风格。限制50字符。</p>
     */
    public $Style;

    /**
     * @param string $Style <p>用于描述转绘风格。限制50字符。</p>
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
