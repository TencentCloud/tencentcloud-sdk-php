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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了实例登录相关配置与信息。
 *
 * @method string getPassword() 获取实例登录密码。不同操作系统类型密码复杂度限制不一样，具体如下：Linux 实例密码必须 8-30 位，推荐使用 12 位以上密码，不能以"/"开头，至少包含以下字符中的三种不同字符，字符种类：小写字母 a-z、大写字母 A-Z、数字 0-9、特殊字符 ()`~!@#$%^&*-+=_|{}[]:;'<>,.?/。Windows 实例密码必须 12-30 位，不能以"/"开头且不包括用户名，至少包含以下字符中的三种不同字符，字符种类：小写字母 a-z、大写字母 A-Z、数字 0-9、特殊字符 ()`~!@#$%^&*-+=_|{}[]:;' <>,.?/。若不指定该参数，则由系统随机生成密码，并通过站内信方式通知到用户。
 * @method void setPassword(string $Password) 设置实例登录密码。不同操作系统类型密码复杂度限制不一样，具体如下：Linux 实例密码必须 8-30 位，推荐使用 12 位以上密码，不能以"/"开头，至少包含以下字符中的三种不同字符，字符种类：小写字母 a-z、大写字母 A-Z、数字 0-9、特殊字符 ()`~!@#$%^&*-+=_|{}[]:;'<>,.?/。Windows 实例密码必须 12-30 位，不能以"/"开头且不包括用户名，至少包含以下字符中的三种不同字符，字符种类：小写字母 a-z、大写字母 A-Z、数字 0-9、特殊字符 ()`~!@#$%^&*-+=_|{}[]:;' <>,.?/。若不指定该参数，则由系统随机生成密码，并通过站内信方式通知到用户。
 * @method array getKeyIds() 获取密钥ID列表。关联密钥后，就可以通过对应的私钥来访问实例；KeyId可通过接口 [DescribeKeyPairs](https://cloud.tencent.com/document/api/213/15699) 获取，密钥与密码不能同时指定，同时Windows操作系统不支持指定密钥。当前仅支持购买的时候指定一个密钥。
 * @method void setKeyIds(array $KeyIds) 设置密钥ID列表。关联密钥后，就可以通过对应的私钥来访问实例；KeyId可通过接口 [DescribeKeyPairs](https://cloud.tencent.com/document/api/213/15699) 获取，密钥与密码不能同时指定，同时Windows操作系统不支持指定密钥。当前仅支持购买的时候指定一个密钥。
 * @method string getKeepImageLogin() 获取保持镜像的原始设置。该参数与 Password 或 KeyIds.N 不能同时指定。只有使用自定义镜像、共享镜像或外部导入镜像创建实例时才能指定该参数为 TRUE。取值范围：TRUE（表示保持镜像的登录设置）/FALSE（表示不保持镜像的登录设置）。默认取值：FALSE。
 * @method void setKeepImageLogin(string $KeepImageLogin) 设置保持镜像的原始设置。该参数与 Password 或 KeyIds.N 不能同时指定。只有使用自定义镜像、共享镜像或外部导入镜像创建实例时才能指定该参数为 TRUE。取值范围：TRUE（表示保持镜像的登录设置）/FALSE（表示不保持镜像的登录设置）。默认取值：FALSE。
 */
class LoginSettings extends AbstractModel
{
    /**
     * @var string 实例登录密码。不同操作系统类型密码复杂度限制不一样，具体如下：Linux 实例密码必须 8-30 位，推荐使用 12 位以上密码，不能以"/"开头，至少包含以下字符中的三种不同字符，字符种类：小写字母 a-z、大写字母 A-Z、数字 0-9、特殊字符 ()`~!@#$%^&*-+=_|{}[]:;'<>,.?/。Windows 实例密码必须 12-30 位，不能以"/"开头且不包括用户名，至少包含以下字符中的三种不同字符，字符种类：小写字母 a-z、大写字母 A-Z、数字 0-9、特殊字符 ()`~!@#$%^&*-+=_|{}[]:;' <>,.?/。若不指定该参数，则由系统随机生成密码，并通过站内信方式通知到用户。
     */
    public $Password;

    /**
     * @var array 密钥ID列表。关联密钥后，就可以通过对应的私钥来访问实例；KeyId可通过接口 [DescribeKeyPairs](https://cloud.tencent.com/document/api/213/15699) 获取，密钥与密码不能同时指定，同时Windows操作系统不支持指定密钥。当前仅支持购买的时候指定一个密钥。
     */
    public $KeyIds;

    /**
     * @var string 保持镜像的原始设置。该参数与 Password 或 KeyIds.N 不能同时指定。只有使用自定义镜像、共享镜像或外部导入镜像创建实例时才能指定该参数为 TRUE。取值范围：TRUE（表示保持镜像的登录设置）/FALSE（表示不保持镜像的登录设置）。默认取值：FALSE。
     */
    public $KeepImageLogin;

    /**
     * @param string $Password 实例登录密码。不同操作系统类型密码复杂度限制不一样，具体如下：Linux 实例密码必须 8-30 位，推荐使用 12 位以上密码，不能以"/"开头，至少包含以下字符中的三种不同字符，字符种类：小写字母 a-z、大写字母 A-Z、数字 0-9、特殊字符 ()`~!@#$%^&*-+=_|{}[]:;'<>,.?/。Windows 实例密码必须 12-30 位，不能以"/"开头且不包括用户名，至少包含以下字符中的三种不同字符，字符种类：小写字母 a-z、大写字母 A-Z、数字 0-9、特殊字符 ()`~!@#$%^&*-+=_|{}[]:;' <>,.?/。若不指定该参数，则由系统随机生成密码，并通过站内信方式通知到用户。
     * @param array $KeyIds 密钥ID列表。关联密钥后，就可以通过对应的私钥来访问实例；KeyId可通过接口 [DescribeKeyPairs](https://cloud.tencent.com/document/api/213/15699) 获取，密钥与密码不能同时指定，同时Windows操作系统不支持指定密钥。当前仅支持购买的时候指定一个密钥。
     * @param string $KeepImageLogin 保持镜像的原始设置。该参数与 Password 或 KeyIds.N 不能同时指定。只有使用自定义镜像、共享镜像或外部导入镜像创建实例时才能指定该参数为 TRUE。取值范围：TRUE（表示保持镜像的登录设置）/FALSE（表示不保持镜像的登录设置）。默认取值：FALSE。
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
        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("KeyIds",$param) and $param["KeyIds"] !== null) {
            $this->KeyIds = $param["KeyIds"];
        }

        if (array_key_exists("KeepImageLogin",$param) and $param["KeepImageLogin"] !== null) {
            $this->KeepImageLogin = $param["KeepImageLogin"];
        }
    }
}
