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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了实例登录相关配置与信息。
 *
 * @method string getPassword() 获取实例登录密码。不同操作系统类型密码复杂度限制不一样，具体如下：
- Linux实例密码必须8到30位，至少包括四项（小写字母、大写字母、数字和特殊符号）中的两项。
- Windows实例密码必须12到30位，至少包括包括四项（小写字母、大写字母、数字和特殊符号）中的三项。
- 若不指定该参数，则由系统随机生成密码，并通过站内信方式通知到用户。
特殊符号的取值范围： [( ) ` ~ ! @ # $ % ^ & * - + = | { } [ ] : ; ' , . ? / ]
 * @method void setPassword(string $Password) 设置实例登录密码。不同操作系统类型密码复杂度限制不一样，具体如下：
- Linux实例密码必须8到30位，至少包括四项（小写字母、大写字母、数字和特殊符号）中的两项。
- Windows实例密码必须12到30位，至少包括包括四项（小写字母、大写字母、数字和特殊符号）中的三项。
- 若不指定该参数，则由系统随机生成密码，并通过站内信方式通知到用户。
特殊符号的取值范围： [( ) ` ~ ! @ # $ % ^ & * - + = | { } [ ] : ; ' , . ? / ]
 * @method array getKeyIds() 获取密钥ID列表。关联密钥后，就可以通过对应的私钥来访问实例；KeyId可通过接口[DescribeKeyPairs](https://cloud.tencent.com/document/api/213/15699)获取，密钥与密码不能同时指定，同时Windows操作系统不支持指定密钥。当前仅支持购买的时候指定一个密钥。
 * @method void setKeyIds(array $KeyIds) 设置密钥ID列表。关联密钥后，就可以通过对应的私钥来访问实例；KeyId可通过接口[DescribeKeyPairs](https://cloud.tencent.com/document/api/213/15699)获取，密钥与密码不能同时指定，同时Windows操作系统不支持指定密钥。当前仅支持购买的时候指定一个密钥。
 * @method boolean getKeepImageLogin() 获取保持镜像的原始设置。该参数与Password或KeyIds.N不能同时指定。只有使用自定义镜像、共享镜像或外部导入镜像创建实例时才能指定该参数为TRUE。取值范围：
<li>TRUE：表示保持镜像的登录设置</li>
<li>FALSE：表示不保持镜像的登录设置</li>默认取值：FALSE。
 * @method void setKeepImageLogin(boolean $KeepImageLogin) 设置保持镜像的原始设置。该参数与Password或KeyIds.N不能同时指定。只有使用自定义镜像、共享镜像或外部导入镜像创建实例时才能指定该参数为TRUE。取值范围：
<li>TRUE：表示保持镜像的登录设置</li>
<li>FALSE：表示不保持镜像的登录设置</li>默认取值：FALSE。
 */
class LoginSettings extends AbstractModel
{
    /**
     * @var string 实例登录密码。不同操作系统类型密码复杂度限制不一样，具体如下：
- Linux实例密码必须8到30位，至少包括四项（小写字母、大写字母、数字和特殊符号）中的两项。
- Windows实例密码必须12到30位，至少包括包括四项（小写字母、大写字母、数字和特殊符号）中的三项。
- 若不指定该参数，则由系统随机生成密码，并通过站内信方式通知到用户。
特殊符号的取值范围： [( ) ` ~ ! @ # $ % ^ & * - + = | { } [ ] : ; ' , . ? / ]
     */
    public $Password;

    /**
     * @var array 密钥ID列表。关联密钥后，就可以通过对应的私钥来访问实例；KeyId可通过接口[DescribeKeyPairs](https://cloud.tencent.com/document/api/213/15699)获取，密钥与密码不能同时指定，同时Windows操作系统不支持指定密钥。当前仅支持购买的时候指定一个密钥。
     */
    public $KeyIds;

    /**
     * @var boolean 保持镜像的原始设置。该参数与Password或KeyIds.N不能同时指定。只有使用自定义镜像、共享镜像或外部导入镜像创建实例时才能指定该参数为TRUE。取值范围：
<li>TRUE：表示保持镜像的登录设置</li>
<li>FALSE：表示不保持镜像的登录设置</li>默认取值：FALSE。
     */
    public $KeepImageLogin;

    /**
     * @param string $Password 实例登录密码。不同操作系统类型密码复杂度限制不一样，具体如下：
- Linux实例密码必须8到30位，至少包括四项（小写字母、大写字母、数字和特殊符号）中的两项。
- Windows实例密码必须12到30位，至少包括包括四项（小写字母、大写字母、数字和特殊符号）中的三项。
- 若不指定该参数，则由系统随机生成密码，并通过站内信方式通知到用户。
特殊符号的取值范围： [( ) ` ~ ! @ # $ % ^ & * - + = | { } [ ] : ; ' , . ? / ]
     * @param array $KeyIds 密钥ID列表。关联密钥后，就可以通过对应的私钥来访问实例；KeyId可通过接口[DescribeKeyPairs](https://cloud.tencent.com/document/api/213/15699)获取，密钥与密码不能同时指定，同时Windows操作系统不支持指定密钥。当前仅支持购买的时候指定一个密钥。
     * @param boolean $KeepImageLogin 保持镜像的原始设置。该参数与Password或KeyIds.N不能同时指定。只有使用自定义镜像、共享镜像或外部导入镜像创建实例时才能指定该参数为TRUE。取值范围：
<li>TRUE：表示保持镜像的登录设置</li>
<li>FALSE：表示不保持镜像的登录设置</li>默认取值：FALSE。
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
