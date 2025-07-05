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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetInstancesPassword请求参数结构体
 *
 * @method array getInstanceIds() 获取实例ID列表
 * @method void setInstanceIds(array $InstanceIds) 设置实例ID列表
 * @method string getPassword() 获取实例密码必须8-30位，推荐使用12位以上密码，不能以“/”开头，至少包含以下字符中的三种不同字符，字符种类：<br><li>小写字母：[a-z]</li><br><li>大写字母：[A-Z]</li><br><li>数字：0-9</li><br><li>特殊字符： ()\`\~!@#$%^&\*-+=\_|{}[]:;'<>,.?/</li>
 * @method void setPassword(string $Password) 设置实例密码必须8-30位，推荐使用12位以上密码，不能以“/”开头，至少包含以下字符中的三种不同字符，字符种类：<br><li>小写字母：[a-z]</li><br><li>大写字母：[A-Z]</li><br><li>数字：0-9</li><br><li>特殊字符： ()\`\~!@#$%^&\*-+=\_|{}[]:;'<>,.?/</li>
 * @method boolean getDryRun() 获取默认为False，True代表只验证接口连通性
 * @method void setDryRun(boolean $DryRun) 设置默认为False，True代表只验证接口连通性
 */
class ResetInstancesPasswordRequest extends AbstractModel
{
    /**
     * @var array 实例ID列表
     */
    public $InstanceIds;

    /**
     * @var string 实例密码必须8-30位，推荐使用12位以上密码，不能以“/”开头，至少包含以下字符中的三种不同字符，字符种类：<br><li>小写字母：[a-z]</li><br><li>大写字母：[A-Z]</li><br><li>数字：0-9</li><br><li>特殊字符： ()\`\~!@#$%^&\*-+=\_|{}[]:;'<>,.?/</li>
     */
    public $Password;

    /**
     * @var boolean 默认为False，True代表只验证接口连通性
     */
    public $DryRun;

    /**
     * @param array $InstanceIds 实例ID列表
     * @param string $Password 实例密码必须8-30位，推荐使用12位以上密码，不能以“/”开头，至少包含以下字符中的三种不同字符，字符种类：<br><li>小写字母：[a-z]</li><br><li>大写字母：[A-Z]</li><br><li>数字：0-9</li><br><li>特殊字符： ()\`\~!@#$%^&\*-+=\_|{}[]:;'<>,.?/</li>
     * @param boolean $DryRun 默认为False，True代表只验证接口连通性
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
