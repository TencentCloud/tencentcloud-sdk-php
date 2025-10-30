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
 * 回源 URL 重写 配置参数。
 *
 * @method string getType() 获取回源 URL 重写类型。仅支持填写 Path。
 * @method void setType(string $Type) 设置回源 URL 重写类型。仅支持填写 Path。
 * @method string getAction() 获取回源 URL 重写动作。取值有：
<li><b>replace</b>：指替换完整路径。用于将完整的请求 URL Path 替换为指定路径。
</li>
<li><b>addPrefix</b>：指增加路径前缀。用于增加指定路径前缀至请求 URL Path。
</li>
<li><b>rmvPrefix</b>：指移除路径前缀。用于移除请求 URL Path 的指定路径前缀。
</li>
<li><b>regexReplace</b>：指正则替换完整路径。用于通过 Google RE2 正则表达式匹配和替换完整路径。
</li>
 * @method void setAction(string $Action) 设置回源 URL 重写动作。取值有：
<li><b>replace</b>：指替换完整路径。用于将完整的请求 URL Path 替换为指定路径。
</li>
<li><b>addPrefix</b>：指增加路径前缀。用于增加指定路径前缀至请求 URL Path。
</li>
<li><b>rmvPrefix</b>：指移除路径前缀。用于移除请求 URL Path 的指定路径前缀。
</li>
<li><b>regexReplace</b>：指正则替换完整路径。用于通过 Google RE2 正则表达式匹配和替换完整路径。
</li>
 * @method string getValue() 获取回源 URL 重写值。需要满足 URL Path 规范，且保证重写后的 Path 以 / 开头，以防止回源 URL 的 Host 被修改，长度范围为 1～1024。当 Action 为 addPrefix 时，不能以 / 结尾；当 Action 为 rmvPrefix 时，不能存在 *；当 Action 为 regexReplace 时，支持用 $NUM 引用正则捕获组，其中 NUM 代表组编号，如 $1，最多支持 $9。
 * @method void setValue(string $Value) 设置回源 URL 重写值。需要满足 URL Path 规范，且保证重写后的 Path 以 / 开头，以防止回源 URL 的 Host 被修改，长度范围为 1～1024。当 Action 为 addPrefix 时，不能以 / 结尾；当 Action 为 rmvPrefix 时，不能存在 *；当 Action 为 regexReplace 时，支持用 $NUM 引用正则捕获组，其中 NUM 代表组编号，如 $1，最多支持 $9。
 * @method string getRegex() 获取回源 URL 重写用于正则替换匹配完整路径的正则表达式。需要满足 Google RE2 规范，长度范围为 1～1024。当 Action 为 regexReplace 时，此字段必填，否则无需填写此字段。
 * @method void setRegex(string $Regex) 设置回源 URL 重写用于正则替换匹配完整路径的正则表达式。需要满足 Google RE2 规范，长度范围为 1～1024。当 Action 为 regexReplace 时，此字段必填，否则无需填写此字段。
 */
class UpstreamURLRewriteParameters extends AbstractModel
{
    /**
     * @var string 回源 URL 重写类型。仅支持填写 Path。
     */
    public $Type;

    /**
     * @var string 回源 URL 重写动作。取值有：
<li><b>replace</b>：指替换完整路径。用于将完整的请求 URL Path 替换为指定路径。
</li>
<li><b>addPrefix</b>：指增加路径前缀。用于增加指定路径前缀至请求 URL Path。
</li>
<li><b>rmvPrefix</b>：指移除路径前缀。用于移除请求 URL Path 的指定路径前缀。
</li>
<li><b>regexReplace</b>：指正则替换完整路径。用于通过 Google RE2 正则表达式匹配和替换完整路径。
</li>
     */
    public $Action;

    /**
     * @var string 回源 URL 重写值。需要满足 URL Path 规范，且保证重写后的 Path 以 / 开头，以防止回源 URL 的 Host 被修改，长度范围为 1～1024。当 Action 为 addPrefix 时，不能以 / 结尾；当 Action 为 rmvPrefix 时，不能存在 *；当 Action 为 regexReplace 时，支持用 $NUM 引用正则捕获组，其中 NUM 代表组编号，如 $1，最多支持 $9。
     */
    public $Value;

    /**
     * @var string 回源 URL 重写用于正则替换匹配完整路径的正则表达式。需要满足 Google RE2 规范，长度范围为 1～1024。当 Action 为 regexReplace 时，此字段必填，否则无需填写此字段。
     */
    public $Regex;

    /**
     * @param string $Type 回源 URL 重写类型。仅支持填写 Path。
     * @param string $Action 回源 URL 重写动作。取值有：
<li><b>replace</b>：指替换完整路径。用于将完整的请求 URL Path 替换为指定路径。
</li>
<li><b>addPrefix</b>：指增加路径前缀。用于增加指定路径前缀至请求 URL Path。
</li>
<li><b>rmvPrefix</b>：指移除路径前缀。用于移除请求 URL Path 的指定路径前缀。
</li>
<li><b>regexReplace</b>：指正则替换完整路径。用于通过 Google RE2 正则表达式匹配和替换完整路径。
</li>
     * @param string $Value 回源 URL 重写值。需要满足 URL Path 规范，且保证重写后的 Path 以 / 开头，以防止回源 URL 的 Host 被修改，长度范围为 1～1024。当 Action 为 addPrefix 时，不能以 / 结尾；当 Action 为 rmvPrefix 时，不能存在 *；当 Action 为 regexReplace 时，支持用 $NUM 引用正则捕获组，其中 NUM 代表组编号，如 $1，最多支持 $9。
     * @param string $Regex 回源 URL 重写用于正则替换匹配完整路径的正则表达式。需要满足 Google RE2 规范，长度范围为 1～1024。当 Action 为 regexReplace 时，此字段必填，否则无需填写此字段。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Regex",$param) and $param["Regex"] !== null) {
            $this->Regex = $param["Regex"];
        }
    }
}
