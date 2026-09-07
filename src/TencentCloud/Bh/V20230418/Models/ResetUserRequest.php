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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetUser请求参数结构体
 *
 * @method array getIdSet() 获取<p>用户ID集合</p>
 * @method void setIdSet(array $IdSet) 设置<p>用户ID集合</p>
 * @method integer getResetType() 获取<p>重置类型</p><p>枚举值：</p><ul><li>0： 同时重置本地认证密码、OTP验证码</li><li>1： 仅重置本地认证密码</li><li>2： 仅重置OTP验证码</li></ul><p>默认值：0</p>
 * @method void setResetType(integer $ResetType) 设置<p>重置类型</p><p>枚举值：</p><ul><li>0： 同时重置本地认证密码、OTP验证码</li><li>1： 仅重置本地认证密码</li><li>2： 仅重置OTP验证码</li></ul><p>默认值：0</p>
 */
class ResetUserRequest extends AbstractModel
{
    /**
     * @var array <p>用户ID集合</p>
     */
    public $IdSet;

    /**
     * @var integer <p>重置类型</p><p>枚举值：</p><ul><li>0： 同时重置本地认证密码、OTP验证码</li><li>1： 仅重置本地认证密码</li><li>2： 仅重置OTP验证码</li></ul><p>默认值：0</p>
     */
    public $ResetType;

    /**
     * @param array $IdSet <p>用户ID集合</p>
     * @param integer $ResetType <p>重置类型</p><p>枚举值：</p><ul><li>0： 同时重置本地认证密码、OTP验证码</li><li>1： 仅重置本地认证密码</li><li>2： 仅重置OTP验证码</li></ul><p>默认值：0</p>
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
        if (array_key_exists("IdSet",$param) and $param["IdSet"] !== null) {
            $this->IdSet = $param["IdSet"];
        }

        if (array_key_exists("ResetType",$param) and $param["ResetType"] !== null) {
            $this->ResetType = $param["ResetType"];
        }
    }
}
