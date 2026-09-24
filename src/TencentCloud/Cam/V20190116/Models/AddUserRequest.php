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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddUser请求参数结构体
 *
 * @method string getName() 获取<p>子用户用户名</p>
 * @method void setName(string $Name) 设置<p>子用户用户名</p>
 * @method string getRemark() 获取<p>子用户备注</p>
 * @method void setRemark(string $Remark) 设置<p>子用户备注</p>
 * @method integer getConsoleLogin() 获取<p>子用户是否可以登录控制台。传0子用户无法登录控制台，传1子用户可以登录控制台。</p>
 * @method void setConsoleLogin(integer $ConsoleLogin) 设置<p>子用户是否可以登录控制台。传0子用户无法登录控制台，传1子用户可以登录控制台。</p>
 * @method integer getUseApi() 获取<p>是否生成子用户密钥。传0不生成子用户密钥，传1生成子用户密钥。</p>
 * @method void setUseApi(integer $UseApi) 设置<p>是否生成子用户密钥。传0不生成子用户密钥，传1生成子用户密钥。</p>
 * @method string getPassword() 获取<p>子用户控制台登录密码，若未进行密码规则设置则默认密码规则为8位以上同时包含大小写字母、数字和特殊字符。只有可以登录控制台时才有效，如果传空并且上面指定允许登录控制台，则自动生成随机密码，随机密码规则为32位包含大小写字母、数字和特殊字符。</p>
 * @method void setPassword(string $Password) 设置<p>子用户控制台登录密码，若未进行密码规则设置则默认密码规则为8位以上同时包含大小写字母、数字和特殊字符。只有可以登录控制台时才有效，如果传空并且上面指定允许登录控制台，则自动生成随机密码，随机密码规则为32位包含大小写字母、数字和特殊字符。</p>
 * @method integer getNeedResetPassword() 获取<p>子用户是否要在下次登录时重置密码。传0子用户下次登录控制台不需重置密码，传1子用户下次登录控制台需要重置密码。</p>
 * @method void setNeedResetPassword(integer $NeedResetPassword) 设置<p>子用户是否要在下次登录时重置密码。传0子用户下次登录控制台不需重置密码，传1子用户下次登录控制台需要重置密码。</p>
 * @method string getPhoneNum() 获取<p>手机号</p>
 * @method void setPhoneNum(string $PhoneNum) 设置<p>手机号</p>
 * @method string getCountryCode() 获取<p>区号</p>
 * @method void setCountryCode(string $CountryCode) 设置<p>区号</p>
 * @method string getEmail() 获取<p>邮箱</p>
 * @method void setEmail(string $Email) 设置<p>邮箱</p>
 */
class AddUserRequest extends AbstractModel
{
    /**
     * @var string <p>子用户用户名</p>
     */
    public $Name;

    /**
     * @var string <p>子用户备注</p>
     */
    public $Remark;

    /**
     * @var integer <p>子用户是否可以登录控制台。传0子用户无法登录控制台，传1子用户可以登录控制台。</p>
     */
    public $ConsoleLogin;

    /**
     * @var integer <p>是否生成子用户密钥。传0不生成子用户密钥，传1生成子用户密钥。</p>
     */
    public $UseApi;

    /**
     * @var string <p>子用户控制台登录密码，若未进行密码规则设置则默认密码规则为8位以上同时包含大小写字母、数字和特殊字符。只有可以登录控制台时才有效，如果传空并且上面指定允许登录控制台，则自动生成随机密码，随机密码规则为32位包含大小写字母、数字和特殊字符。</p>
     */
    public $Password;

    /**
     * @var integer <p>子用户是否要在下次登录时重置密码。传0子用户下次登录控制台不需重置密码，传1子用户下次登录控制台需要重置密码。</p>
     */
    public $NeedResetPassword;

    /**
     * @var string <p>手机号</p>
     */
    public $PhoneNum;

    /**
     * @var string <p>区号</p>
     */
    public $CountryCode;

    /**
     * @var string <p>邮箱</p>
     */
    public $Email;

    /**
     * @param string $Name <p>子用户用户名</p>
     * @param string $Remark <p>子用户备注</p>
     * @param integer $ConsoleLogin <p>子用户是否可以登录控制台。传0子用户无法登录控制台，传1子用户可以登录控制台。</p>
     * @param integer $UseApi <p>是否生成子用户密钥。传0不生成子用户密钥，传1生成子用户密钥。</p>
     * @param string $Password <p>子用户控制台登录密码，若未进行密码规则设置则默认密码规则为8位以上同时包含大小写字母、数字和特殊字符。只有可以登录控制台时才有效，如果传空并且上面指定允许登录控制台，则自动生成随机密码，随机密码规则为32位包含大小写字母、数字和特殊字符。</p>
     * @param integer $NeedResetPassword <p>子用户是否要在下次登录时重置密码。传0子用户下次登录控制台不需重置密码，传1子用户下次登录控制台需要重置密码。</p>
     * @param string $PhoneNum <p>手机号</p>
     * @param string $CountryCode <p>区号</p>
     * @param string $Email <p>邮箱</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ConsoleLogin",$param) and $param["ConsoleLogin"] !== null) {
            $this->ConsoleLogin = $param["ConsoleLogin"];
        }

        if (array_key_exists("UseApi",$param) and $param["UseApi"] !== null) {
            $this->UseApi = $param["UseApi"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("NeedResetPassword",$param) and $param["NeedResetPassword"] !== null) {
            $this->NeedResetPassword = $param["NeedResetPassword"];
        }

        if (array_key_exists("PhoneNum",$param) and $param["PhoneNum"] !== null) {
            $this->PhoneNum = $param["PhoneNum"];
        }

        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }
    }
}
