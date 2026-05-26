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
 * 子账号密码规则
 *
 * @method integer getMinimumLength() 获取最小长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinimumLength(integer $MinimumLength) 设置最小长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMustContain() 获取必须包含的字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMustContain(string $MustContain) 设置必须包含的字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getForcePasswordChange() 获取强制修改周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setForcePasswordChange(integer $ForcePasswordChange) 设置强制修改周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReusePasswordLimit() 获取重复使用次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReusePasswordLimit(integer $ReusePasswordLimit) 设置重复使用次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetryPasswordLimit() 获取密码重试次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryPasswordLimit(integer $RetryPasswordLimit) 设置密码重试次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPasswordExpirationInvalidation() 获取密码过期失效 1：是，2：否（是：密码过期后，子用户无法登录，需要管理员重置密码。否：密码过期后，子用户可登录，登录后强制根据旧密码修改密码）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPasswordExpirationInvalidation(integer $PasswordExpirationInvalidation) 设置密码过期失效 1：是，2：否（是：密码过期后，子用户无法登录，需要管理员重置密码。否：密码过期后，子用户可登录，登录后强制根据旧密码修改密码）
注意：此字段可能返回 null，表示取不到有效值。
 */
class PassWordRule extends AbstractModel
{
    /**
     * @var integer 最小长度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinimumLength;

    /**
     * @var string 必须包含的字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MustContain;

    /**
     * @var integer 强制修改周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ForcePasswordChange;

    /**
     * @var integer 重复使用次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReusePasswordLimit;

    /**
     * @var integer 密码重试次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetryPasswordLimit;

    /**
     * @var integer 密码过期失效 1：是，2：否（是：密码过期后，子用户无法登录，需要管理员重置密码。否：密码过期后，子用户可登录，登录后强制根据旧密码修改密码）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PasswordExpirationInvalidation;

    /**
     * @param integer $MinimumLength 最小长度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MustContain 必须包含的字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ForcePasswordChange 强制修改周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReusePasswordLimit 重复使用次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetryPasswordLimit 密码重试次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PasswordExpirationInvalidation 密码过期失效 1：是，2：否（是：密码过期后，子用户无法登录，需要管理员重置密码。否：密码过期后，子用户可登录，登录后强制根据旧密码修改密码）
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("MinimumLength",$param) and $param["MinimumLength"] !== null) {
            $this->MinimumLength = $param["MinimumLength"];
        }

        if (array_key_exists("MustContain",$param) and $param["MustContain"] !== null) {
            $this->MustContain = $param["MustContain"];
        }

        if (array_key_exists("ForcePasswordChange",$param) and $param["ForcePasswordChange"] !== null) {
            $this->ForcePasswordChange = $param["ForcePasswordChange"];
        }

        if (array_key_exists("ReusePasswordLimit",$param) and $param["ReusePasswordLimit"] !== null) {
            $this->ReusePasswordLimit = $param["ReusePasswordLimit"];
        }

        if (array_key_exists("RetryPasswordLimit",$param) and $param["RetryPasswordLimit"] !== null) {
            $this->RetryPasswordLimit = $param["RetryPasswordLimit"];
        }

        if (array_key_exists("PasswordExpirationInvalidation",$param) and $param["PasswordExpirationInvalidation"] !== null) {
            $this->PasswordExpirationInvalidation = $param["PasswordExpirationInvalidation"];
        }
    }
}
