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
 * HTTP 头部设置规则。
 *
 * @method string getAction() 获取HTTP 头部设置方式。取值有：
<li>set：设置。变更指定头部参数的取值为设置后的值；</li>
<li>del：删除。删除指定的头部参数；</li>
<li>add：增加。增加指定的头部参数。</li>
 * @method void setAction(string $Action) 设置HTTP 头部设置方式。取值有：
<li>set：设置。变更指定头部参数的取值为设置后的值；</li>
<li>del：删除。删除指定的头部参数；</li>
<li>add：增加。增加指定的头部参数。</li>
 * @method string getName() 获取HTTP 头部名称。
 * @method void setName(string $Name) 设置HTTP 头部名称。
 * @method string getValue() 获取HTTP 头部值。当 Action 取值为 set 或者 add 时，该参数必填；当 Action 取值为 del 时，该参数无需填写。
 * @method void setValue(string $Value) 设置HTTP 头部值。当 Action 取值为 set 或者 add 时，该参数必填；当 Action 取值为 del 时，该参数无需填写。
 */
class HeaderAction extends AbstractModel
{
    /**
     * @var string HTTP 头部设置方式。取值有：
<li>set：设置。变更指定头部参数的取值为设置后的值；</li>
<li>del：删除。删除指定的头部参数；</li>
<li>add：增加。增加指定的头部参数。</li>
     */
    public $Action;

    /**
     * @var string HTTP 头部名称。
     */
    public $Name;

    /**
     * @var string HTTP 头部值。当 Action 取值为 set 或者 add 时，该参数必填；当 Action 取值为 del 时，该参数无需填写。
     */
    public $Value;

    /**
     * @param string $Action HTTP 头部设置方式。取值有：
<li>set：设置。变更指定头部参数的取值为设置后的值；</li>
<li>del：删除。删除指定的头部参数；</li>
<li>add：增加。增加指定的头部参数。</li>
     * @param string $Name HTTP 头部名称。
     * @param string $Value HTTP 头部值。当 Action 取值为 set 或者 add 时，该参数必填；当 Action 取值为 del 时，该参数无需填写。
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
