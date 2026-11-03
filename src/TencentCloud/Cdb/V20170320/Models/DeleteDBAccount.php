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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 删除账号信息
 *
 * @method string getUser() 获取<p>用户名</p>
 * @method void setUser(string $User) 设置<p>用户名</p>
 * @method string getHost() 获取<p>主机名</p>
 * @method void setHost(string $Host) 设置<p>主机名</p>
 * @method string getSecretName() 获取<p>凭据名称</p>
 * @method void setSecretName(string $SecretName) 设置<p>凭据名称</p>
 * @method integer getRecoveryWindowInDays() 获取<p>保留时间，0表示立即删除(最大30天)</p>
 * @method void setRecoveryWindowInDays(integer $RecoveryWindowInDays) 设置<p>保留时间，0表示立即删除(最大30天)</p>
 * @method integer getDeleteMode() 获取<p>删除模式</p><p>枚举值：</p><ul><li>0： 仅删除凭据</li><li>1： 删除凭据+账号</li></ul>
 * @method void setDeleteMode(integer $DeleteMode) 设置<p>删除模式</p><p>枚举值：</p><ul><li>0： 仅删除凭据</li><li>1： 删除凭据+账号</li></ul>
 */
class DeleteDBAccount extends AbstractModel
{
    /**
     * @var string <p>用户名</p>
     */
    public $User;

    /**
     * @var string <p>主机名</p>
     */
    public $Host;

    /**
     * @var string <p>凭据名称</p>
     */
    public $SecretName;

    /**
     * @var integer <p>保留时间，0表示立即删除(最大30天)</p>
     */
    public $RecoveryWindowInDays;

    /**
     * @var integer <p>删除模式</p><p>枚举值：</p><ul><li>0： 仅删除凭据</li><li>1： 删除凭据+账号</li></ul>
     */
    public $DeleteMode;

    /**
     * @param string $User <p>用户名</p>
     * @param string $Host <p>主机名</p>
     * @param string $SecretName <p>凭据名称</p>
     * @param integer $RecoveryWindowInDays <p>保留时间，0表示立即删除(最大30天)</p>
     * @param integer $DeleteMode <p>删除模式</p><p>枚举值：</p><ul><li>0： 仅删除凭据</li><li>1： 删除凭据+账号</li></ul>
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
        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("RecoveryWindowInDays",$param) and $param["RecoveryWindowInDays"] !== null) {
            $this->RecoveryWindowInDays = $param["RecoveryWindowInDays"];
        }

        if (array_key_exists("DeleteMode",$param) and $param["DeleteMode"] !== null) {
            $this->DeleteMode = $param["DeleteMode"];
        }
    }
}
