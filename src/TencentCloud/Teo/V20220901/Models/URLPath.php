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
 * 访问 URL 重定向路径配置参数。
 *
 * @method string getAction() 获取执行动作，取值有：
<li>follow：跟随请求；</li>
<li>custom：自定义；</li>
<li>regex：正则匹配。</li>
 * @method void setAction(string $Action) 设置执行动作，取值有：
<li>follow：跟随请求；</li>
<li>custom：自定义；</li>
<li>regex：正则匹配。</li>
 * @method string getRegex() 获取正则匹配的表达式，长度范围为 1～1024。<br>注意：当 Action 为 regex 时，此字段必填；当 Action 为 follow 或 custom 时，无需填写此字段，若填写则不生效。
 * @method void setRegex(string $Regex) 设置正则匹配的表达式，长度范围为 1～1024。<br>注意：当 Action 为 regex 时，此字段必填；当 Action 为 follow 或 custom 时，无需填写此字段，若填写则不生效。
 * @method string getValue() 获取重定向的目标URL，长度范围为 1～1024。<br>注意：当 Action 为 regex 或 custom 时，此字段必填；当 Action 为 follow 时，无需填写此字段，若填写则不生效。
 * @method void setValue(string $Value) 设置重定向的目标URL，长度范围为 1～1024。<br>注意：当 Action 为 regex 或 custom 时，此字段必填；当 Action 为 follow 时，无需填写此字段，若填写则不生效。
 */
class URLPath extends AbstractModel
{
    /**
     * @var string 执行动作，取值有：
<li>follow：跟随请求；</li>
<li>custom：自定义；</li>
<li>regex：正则匹配。</li>
     */
    public $Action;

    /**
     * @var string 正则匹配的表达式，长度范围为 1～1024。<br>注意：当 Action 为 regex 时，此字段必填；当 Action 为 follow 或 custom 时，无需填写此字段，若填写则不生效。
     */
    public $Regex;

    /**
     * @var string 重定向的目标URL，长度范围为 1～1024。<br>注意：当 Action 为 regex 或 custom 时，此字段必填；当 Action 为 follow 时，无需填写此字段，若填写则不生效。
     */
    public $Value;

    /**
     * @param string $Action 执行动作，取值有：
<li>follow：跟随请求；</li>
<li>custom：自定义；</li>
<li>regex：正则匹配。</li>
     * @param string $Regex 正则匹配的表达式，长度范围为 1～1024。<br>注意：当 Action 为 regex 时，此字段必填；当 Action 为 follow 或 custom 时，无需填写此字段，若填写则不生效。
     * @param string $Value 重定向的目标URL，长度范围为 1～1024。<br>注意：当 Action 为 regex 或 custom 时，此字段必填；当 Action 为 follow 时，无需填写此字段，若填写则不生效。
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Regex",$param) and $param["Regex"] !== null) {
            $this->Regex = $param["Regex"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
