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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例密码登录配置信息。
 *
 * @method string getAutoGeneratePassword() 获取<li>"YES"代表选择自动生成密码，这时不指定Password字段。</li>
<li>"NO"代表选择自定义密码，这时要指定Password字段。</li>
 * @method void setAutoGeneratePassword(string $AutoGeneratePassword) 设置<li>"YES"代表选择自动生成密码，这时不指定Password字段。</li>
<li>"NO"代表选择自定义密码，这时要指定Password字段。</li>
 * @method string getPassword() 获取实例登录密码。具体按照操作系统的复杂度要求。
WINDOWS 实例密码必须 12-30 位，不能以“/”开头且不包括用户名，至少包含以下字符中的三种不同字符
<li>小写字母：[a-z]</li>
<li>大写字母：[A-Z]</li>
<li>数字： 0-9</li>
<li>特殊字符：()`~!@#$%^&*-+=_|{}[]:;' <>,.?/</li>
 * @method void setPassword(string $Password) 设置实例登录密码。具体按照操作系统的复杂度要求。
WINDOWS 实例密码必须 12-30 位，不能以“/”开头且不包括用户名，至少包含以下字符中的三种不同字符
<li>小写字母：[a-z]</li>
<li>大写字母：[A-Z]</li>
<li>数字： 0-9</li>
<li>特殊字符：()`~!@#$%^&*-+=_|{}[]:;' <>,.?/</li>
 */
class LoginConfiguration extends AbstractModel
{
    /**
     * @var string <li>"YES"代表选择自动生成密码，这时不指定Password字段。</li>
<li>"NO"代表选择自定义密码，这时要指定Password字段。</li>
     */
    public $AutoGeneratePassword;

    /**
     * @var string 实例登录密码。具体按照操作系统的复杂度要求。
WINDOWS 实例密码必须 12-30 位，不能以“/”开头且不包括用户名，至少包含以下字符中的三种不同字符
<li>小写字母：[a-z]</li>
<li>大写字母：[A-Z]</li>
<li>数字： 0-9</li>
<li>特殊字符：()`~!@#$%^&*-+=_|{}[]:;' <>,.?/</li>
     */
    public $Password;

    /**
     * @param string $AutoGeneratePassword <li>"YES"代表选择自动生成密码，这时不指定Password字段。</li>
<li>"NO"代表选择自定义密码，这时要指定Password字段。</li>
     * @param string $Password 实例登录密码。具体按照操作系统的复杂度要求。
WINDOWS 实例密码必须 12-30 位，不能以“/”开头且不包括用户名，至少包含以下字符中的三种不同字符
<li>小写字母：[a-z]</li>
<li>大写字母：[A-Z]</li>
<li>数字： 0-9</li>
<li>特殊字符：()`~!@#$%^&*-+=_|{}[]:;' <>,.?/</li>
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
        if (array_key_exists("AutoGeneratePassword",$param) and $param["AutoGeneratePassword"] !== null) {
            $this->AutoGeneratePassword = $param["AutoGeneratePassword"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
