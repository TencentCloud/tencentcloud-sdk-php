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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多语言文字，在 Locale 中 展示的 Message
 *
 * @method string getMessage() 获取字符串
 * @method void setMessage(string $Message) 设置字符串
 * @method string getLocale() 获取在该语言中
 * @method void setLocale(string $Locale) 设置在该语言中
 */
class MessageLocalized extends AbstractModel
{
    /**
     * @var string 字符串
     */
    public $Message;

    /**
     * @var string 在该语言中
     */
    public $Locale;

    /**
     * @param string $Message 字符串
     * @param string $Locale 在该语言中
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
        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Locale",$param) and $param["Locale"] !== null) {
            $this->Locale = $param["Locale"];
        }
    }
}
