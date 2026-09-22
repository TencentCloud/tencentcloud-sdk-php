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
 * ResetPGAccountPassword请求参数结构体
 *
 * @method string getEnvId() 获取<p>环境ID</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境ID</p>
 * @method string getPassword() 获取<p>要设置的密码</p><p>入参限制：长度8 ~ 32位，不能以&quot; / &quot;开头; 必须包含以下四项，字符种类:  小写字母： [a ~ z] 大写字母：[A ～ Z] 数字：0 - 9 特殊字符：()~!@#$%^&amp;*-+=_|{}[]:&lt;&gt;,.?/` 示例值：A8b!C2d#E4f&amp;</p>
 * @method void setPassword(string $Password) 设置<p>要设置的密码</p><p>入参限制：长度8 ~ 32位，不能以&quot; / &quot;开头; 必须包含以下四项，字符种类:  小写字母： [a ~ z] 大写字母：[A ～ Z] 数字：0 - 9 特殊字符：()~!@#$%^&amp;*-+=_|{}[]:&lt;&gt;,.?/` 示例值：A8b!C2d#E4f&amp;</p>
 */
class ResetPGAccountPasswordRequest extends AbstractModel
{
    /**
     * @var string <p>环境ID</p>
     */
    public $EnvId;

    /**
     * @var string <p>要设置的密码</p><p>入参限制：长度8 ~ 32位，不能以&quot; / &quot;开头; 必须包含以下四项，字符种类:  小写字母： [a ~ z] 大写字母：[A ～ Z] 数字：0 - 9 特殊字符：()~!@#$%^&amp;*-+=_|{}[]:&lt;&gt;,.?/` 示例值：A8b!C2d#E4f&amp;</p>
     */
    public $Password;

    /**
     * @param string $EnvId <p>环境ID</p>
     * @param string $Password <p>要设置的密码</p><p>入参限制：长度8 ~ 32位，不能以&quot; / &quot;开头; 必须包含以下四项，字符种类:  小写字母： [a ~ z] 大写字母：[A ～ Z] 数字：0 - 9 特殊字符：()~!@#$%^&amp;*-+=_|{}[]:&lt;&gt;,.?/` 示例值：A8b!C2d#E4f&amp;</p>
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
