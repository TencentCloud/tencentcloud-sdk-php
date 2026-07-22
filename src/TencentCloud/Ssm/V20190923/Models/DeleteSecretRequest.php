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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteSecret请求参数结构体
 *
 * @method string getSecretName() 获取<p>指定需要删除的凭据名称。</p>
 * @method void setSecretName(string $SecretName) 设置<p>指定需要删除的凭据名称。</p>
 * @method integer getRecoveryWindowInDays() 获取<p>指定计划删除日期，单位（天），0（默认）表示立即删除， 1-30 表示预留的天数，超出该日期之后彻底删除。<br>当凭据类型为SSH密钥对凭据时，此字段只能取值只能为0。</p>
 * @method void setRecoveryWindowInDays(integer $RecoveryWindowInDays) 设置<p>指定计划删除日期，单位（天），0（默认）表示立即删除， 1-30 表示预留的天数，超出该日期之后彻底删除。<br>当凭据类型为SSH密钥对凭据时，此字段只能取值只能为0。</p>
 * @method boolean getCleanSSHKey() 获取<p>当凭据类型为SSH密钥对凭据时，此字段有效，取值：<br>True -- 表示不仅仅清理此凭据中存储的SSH密钥信息，还会将SSH密钥对从CVM侧进行清理。注意，如果SSH密钥此时绑定了CVM实例，那么会清理失败。<br>False --  表示仅仅清理此凭据中存储的SSH密钥信息，不在CVM进侧进行清理。</p>
 * @method void setCleanSSHKey(boolean $CleanSSHKey) 设置<p>当凭据类型为SSH密钥对凭据时，此字段有效，取值：<br>True -- 表示不仅仅清理此凭据中存储的SSH密钥信息，还会将SSH密钥对从CVM侧进行清理。注意，如果SSH密钥此时绑定了CVM实例，那么会清理失败。<br>False --  表示仅仅清理此凭据中存储的SSH密钥信息，不在CVM进侧进行清理。</p>
 * @method integer getDeleteMode() 获取<p>删除模式</p><p>枚举值：</p><ul><li>0： 仅删除凭据</li><li>1： 删除凭据和账号</li></ul>
 * @method void setDeleteMode(integer $DeleteMode) 设置<p>删除模式</p><p>枚举值：</p><ul><li>0： 仅删除凭据</li><li>1： 删除凭据和账号</li></ul>
 */
class DeleteSecretRequest extends AbstractModel
{
    /**
     * @var string <p>指定需要删除的凭据名称。</p>
     */
    public $SecretName;

    /**
     * @var integer <p>指定计划删除日期，单位（天），0（默认）表示立即删除， 1-30 表示预留的天数，超出该日期之后彻底删除。<br>当凭据类型为SSH密钥对凭据时，此字段只能取值只能为0。</p>
     */
    public $RecoveryWindowInDays;

    /**
     * @var boolean <p>当凭据类型为SSH密钥对凭据时，此字段有效，取值：<br>True -- 表示不仅仅清理此凭据中存储的SSH密钥信息，还会将SSH密钥对从CVM侧进行清理。注意，如果SSH密钥此时绑定了CVM实例，那么会清理失败。<br>False --  表示仅仅清理此凭据中存储的SSH密钥信息，不在CVM进侧进行清理。</p>
     */
    public $CleanSSHKey;

    /**
     * @var integer <p>删除模式</p><p>枚举值：</p><ul><li>0： 仅删除凭据</li><li>1： 删除凭据和账号</li></ul>
     */
    public $DeleteMode;

    /**
     * @param string $SecretName <p>指定需要删除的凭据名称。</p>
     * @param integer $RecoveryWindowInDays <p>指定计划删除日期，单位（天），0（默认）表示立即删除， 1-30 表示预留的天数，超出该日期之后彻底删除。<br>当凭据类型为SSH密钥对凭据时，此字段只能取值只能为0。</p>
     * @param boolean $CleanSSHKey <p>当凭据类型为SSH密钥对凭据时，此字段有效，取值：<br>True -- 表示不仅仅清理此凭据中存储的SSH密钥信息，还会将SSH密钥对从CVM侧进行清理。注意，如果SSH密钥此时绑定了CVM实例，那么会清理失败。<br>False --  表示仅仅清理此凭据中存储的SSH密钥信息，不在CVM进侧进行清理。</p>
     * @param integer $DeleteMode <p>删除模式</p><p>枚举值：</p><ul><li>0： 仅删除凭据</li><li>1： 删除凭据和账号</li></ul>
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
        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("RecoveryWindowInDays",$param) and $param["RecoveryWindowInDays"] !== null) {
            $this->RecoveryWindowInDays = $param["RecoveryWindowInDays"];
        }

        if (array_key_exists("CleanSSHKey",$param) and $param["CleanSSHKey"] !== null) {
            $this->CleanSSHKey = $param["CleanSSHKey"];
        }

        if (array_key_exists("DeleteMode",$param) and $param["DeleteMode"] !== null) {
            $this->DeleteMode = $param["DeleteMode"];
        }
    }
}
