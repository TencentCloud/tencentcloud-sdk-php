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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 意愿核身（点头确认模式）使用的文案，若未使用意愿核身（点头确认模式），则该字段无需传入。当前仅支持一个提示文本。
 *
 * @method string getText() 获取点头确认模式下，系统语音播报使用的问题文本，问题最大长度为150个字符。
 * @method void setText(string $Text) 设置点头确认模式下，系统语音播报使用的问题文本，问题最大长度为150个字符。
 */
class IntentionAction extends AbstractModel
{
    /**
     * @var string 点头确认模式下，系统语音播报使用的问题文本，问题最大长度为150个字符。
     */
    public $Text;

    /**
     * @param string $Text 点头确认模式下，系统语音播报使用的问题文本，问题最大长度为150个字符。
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }
    }
}
