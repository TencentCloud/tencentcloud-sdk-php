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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全执行动作为重定向时的附加参数。

该参数用于指定在命中安全规则并执行重定向动作时，系统所采取的附加处置动作。
不同处置动作由不同且固定的参数组合进行配置，系统将根据所配置的参数组合判定实际生效的处置动作类型。
在同一次重定向执行过程中，仅允许配置并生效一种处置动作，多个处置动作对应的参数组合不可同时出现，否则视为非法配置。
RedirectActionParameters 支持以下附加处置动作：<li>重定向：将客户端请求重定向至指的目标 URL 。对应参数 URL。</li>
 *
 * @method string getURL() 获取重定向的URL。
 * @method void setURL(string $URL) 设置重定向的URL。
 */
class RedirectActionParameters extends AbstractModel
{
    /**
     * @var string 重定向的URL。
     */
    public $URL;

    /**
     * @param string $URL 重定向的URL。
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
        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }
    }
}
