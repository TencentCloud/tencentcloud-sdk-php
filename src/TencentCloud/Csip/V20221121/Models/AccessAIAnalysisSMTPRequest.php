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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AccessAIAnalysisSMTP请求参数结构体
 *
 * @method string getAccountName() 获取<p>邮箱账号</p>
 * @method void setAccountName(string $AccountName) 设置<p>邮箱账号</p>
 * @method integer getType() 获取<p>邮箱类型</p><p>枚举值：</p><ul><li>1： QQ邮箱</li><li>2： GMail</li><li>3： OutLook</li></ul>
 * @method void setType(integer $Type) 设置<p>邮箱类型</p><p>枚举值：</p><ul><li>1： QQ邮箱</li><li>2： GMail</li><li>3： OutLook</li></ul>
 * @method string getPassword() 获取<p>邮箱授权密码</p>
 * @method void setPassword(string $Password) 设置<p>邮箱授权密码</p>
 */
class AccessAIAnalysisSMTPRequest extends AbstractModel
{
    /**
     * @var string <p>邮箱账号</p>
     */
    public $AccountName;

    /**
     * @var integer <p>邮箱类型</p><p>枚举值：</p><ul><li>1： QQ邮箱</li><li>2： GMail</li><li>3： OutLook</li></ul>
     */
    public $Type;

    /**
     * @var string <p>邮箱授权密码</p>
     */
    public $Password;

    /**
     * @param string $AccountName <p>邮箱账号</p>
     * @param integer $Type <p>邮箱类型</p><p>枚举值：</p><ul><li>1： QQ邮箱</li><li>2： GMail</li><li>3： OutLook</li></ul>
     * @param string $Password <p>邮箱授权密码</p>
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
