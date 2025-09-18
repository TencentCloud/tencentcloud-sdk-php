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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetPassword请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
 * @method string getPassword() 获取重置的密码。若切换为免密实例时，可不配置该参数。
- 长度8-32位, 推荐使用12位以上的密码。
- 不能以"/"开头。
- 至少包含小写字母a- z、大写字母A - Z、数字0 - 9、特殊字符 ()~!@#$%^&*-+=_|{}[]:;<>,.?/中的两项。
 * @method void setPassword(string $Password) 设置重置的密码。若切换为免密实例时，可不配置该参数。
- 长度8-32位, 推荐使用12位以上的密码。
- 不能以"/"开头。
- 至少包含小写字母a- z、大写字母A - Z、数字0 - 9、特殊字符 ()~!@#$%^&*-+=_|{}[]:;<>,.?/中的两项。
 * @method boolean getNoAuth() 获取是否切换免密实例。
- false：切换为非免密码实例。默认 false。
- true：切换为免密码实例。
 * @method void setNoAuth(boolean $NoAuth) 设置是否切换免密实例。
- false：切换为非免密码实例。默认 false。
- true：切换为免密码实例。
 * @method boolean getEncryptPassword() 获取是否加密密码。
- false：非加密密码。默认 false。
- true：加密密码。
 * @method void setEncryptPassword(boolean $EncryptPassword) 设置是否加密密码。
- false：非加密密码。默认 false。
- true：加密密码。
 */
class ResetPasswordRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 重置的密码。若切换为免密实例时，可不配置该参数。
- 长度8-32位, 推荐使用12位以上的密码。
- 不能以"/"开头。
- 至少包含小写字母a- z、大写字母A - Z、数字0 - 9、特殊字符 ()~!@#$%^&*-+=_|{}[]:;<>,.?/中的两项。
     */
    public $Password;

    /**
     * @var boolean 是否切换免密实例。
- false：切换为非免密码实例。默认 false。
- true：切换为免密码实例。
     */
    public $NoAuth;

    /**
     * @var boolean 是否加密密码。
- false：非加密密码。默认 false。
- true：加密密码。
     */
    public $EncryptPassword;

    /**
     * @param string $InstanceId 实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
     * @param string $Password 重置的密码。若切换为免密实例时，可不配置该参数。
- 长度8-32位, 推荐使用12位以上的密码。
- 不能以"/"开头。
- 至少包含小写字母a- z、大写字母A - Z、数字0 - 9、特殊字符 ()~!@#$%^&*-+=_|{}[]:;<>,.?/中的两项。
     * @param boolean $NoAuth 是否切换免密实例。
- false：切换为非免密码实例。默认 false。
- true：切换为免密码实例。
     * @param boolean $EncryptPassword 是否加密密码。
- false：非加密密码。默认 false。
- true：加密密码。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("NoAuth",$param) and $param["NoAuth"] !== null) {
            $this->NoAuth = $param["NoAuth"];
        }

        if (array_key_exists("EncryptPassword",$param) and $param["EncryptPassword"] !== null) {
            $this->EncryptPassword = $param["EncryptPassword"];
        }
    }
}
