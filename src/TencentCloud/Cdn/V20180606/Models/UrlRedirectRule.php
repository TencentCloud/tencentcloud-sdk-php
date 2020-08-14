<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Url重定向规则配置
 *
 * @method integer getRedirectStatusCode() 获取重定向状态码，301 | 302
 * @method void setRedirectStatusCode(integer $RedirectStatusCode) 设置重定向状态码，301 | 302
 * @method string getPattern() 获取待匹配的Url模式，支持完全路径匹配和正则匹配，最大长度1024字符。
 * @method void setPattern(string $Pattern) 设置待匹配的Url模式，支持完全路径匹配和正则匹配，最大长度1024字符。
 * @method string getRedirectUrl() 获取目标URL，必须以“/”开头，最大长度1024字符。
 * @method void setRedirectUrl(string $RedirectUrl) 设置目标URL，必须以“/”开头，最大长度1024字符。
 */
class UrlRedirectRule extends AbstractModel
{
    /**
     * @var integer 重定向状态码，301 | 302
     */
    public $RedirectStatusCode;

    /**
     * @var string 待匹配的Url模式，支持完全路径匹配和正则匹配，最大长度1024字符。
     */
    public $Pattern;

    /**
     * @var string 目标URL，必须以“/”开头，最大长度1024字符。
     */
    public $RedirectUrl;

    /**
     * @param integer $RedirectStatusCode 重定向状态码，301 | 302
     * @param string $Pattern 待匹配的Url模式，支持完全路径匹配和正则匹配，最大长度1024字符。
     * @param string $RedirectUrl 目标URL，必须以“/”开头，最大长度1024字符。
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
        if (array_key_exists("RedirectStatusCode",$param) and $param["RedirectStatusCode"] !== null) {
            $this->RedirectStatusCode = $param["RedirectStatusCode"];
        }

        if (array_key_exists("Pattern",$param) and $param["Pattern"] !== null) {
            $this->Pattern = $param["Pattern"];
        }

        if (array_key_exists("RedirectUrl",$param) and $param["RedirectUrl"] !== null) {
            $this->RedirectUrl = $param["RedirectUrl"];
        }
    }
}
