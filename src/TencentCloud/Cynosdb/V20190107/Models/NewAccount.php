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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 新建账号
 *
 * @method string getAccountName() 获取<p>账户名，包含字母数字_,以字母开头，字母或数字结尾，长度1-30</p>
 * @method void setAccountName(string $AccountName) 设置<p>账户名，包含字母数字_,以字母开头，字母或数字结尾，长度1-30</p>
 * @method string getHost() 获取<p>主机(%或ipv4地址)</p>
 * @method void setHost(string $Host) 设置<p>主机(%或ipv4地址)</p>
 * @method string getAccountPassword() 获取<p>密码，密码长度范围为8到64个字符</p>
 * @method void setAccountPassword(string $AccountPassword) 设置<p>密码，密码长度范围为8到64个字符</p>
 * @method integer getPasswordRotation() 获取<p>是否开启密码轮转(0:关闭;1:开启)</p>
 * @method void setPasswordRotation(integer $PasswordRotation) 设置<p>是否开启密码轮转(0:关闭;1:开启)</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method integer getMaxUserConnections() 获取<p>用户最大连接数，不能大于10240</p>
 * @method void setMaxUserConnections(integer $MaxUserConnections) 设置<p>用户最大连接数，不能大于10240</p>
 */
class NewAccount extends AbstractModel
{
    /**
     * @var string <p>账户名，包含字母数字_,以字母开头，字母或数字结尾，长度1-30</p>
     */
    public $AccountName;

    /**
     * @var string <p>主机(%或ipv4地址)</p>
     */
    public $Host;

    /**
     * @var string <p>密码，密码长度范围为8到64个字符</p>
     */
    public $AccountPassword;

    /**
     * @var integer <p>是否开启密码轮转(0:关闭;1:开启)</p>
     */
    public $PasswordRotation;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var integer <p>用户最大连接数，不能大于10240</p>
     */
    public $MaxUserConnections;

    /**
     * @param string $AccountName <p>账户名，包含字母数字_,以字母开头，字母或数字结尾，长度1-30</p>
     * @param string $Host <p>主机(%或ipv4地址)</p>
     * @param string $AccountPassword <p>密码，密码长度范围为8到64个字符</p>
     * @param integer $PasswordRotation <p>是否开启密码轮转(0:关闭;1:开启)</p>
     * @param string $Description <p>描述</p>
     * @param integer $MaxUserConnections <p>用户最大连接数，不能大于10240</p>
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
        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("AccountPassword",$param) and $param["AccountPassword"] !== null) {
            $this->AccountPassword = $param["AccountPassword"];
        }

        if (array_key_exists("PasswordRotation",$param) and $param["PasswordRotation"] !== null) {
            $this->PasswordRotation = $param["PasswordRotation"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("MaxUserConnections",$param) and $param["MaxUserConnections"] !== null) {
            $this->MaxUserConnections = $param["MaxUserConnections"];
        }
    }
}
