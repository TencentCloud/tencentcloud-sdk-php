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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data Transfer Service参数
 *
 * @method string getConsumerGroupName() 获取Consumer Group Name
 * @method void setConsumerGroupName(string $ConsumerGroupName) 设置Consumer Group Name
 * @method string getAccount() 获取账户名
 * @method void setAccount(string $Account) 设置账户名
 * @method string getPassword() 获取密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassword(string $Password) 设置密码
注意：此字段可能返回 null，表示取不到有效值。
 */
class DTSParams extends AbstractModel
{
    /**
     * @var string Consumer Group Name
     */
    public $ConsumerGroupName;

    /**
     * @var string 账户名
     */
    public $Account;

    /**
     * @var string 密码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Password;

    /**
     * @param string $ConsumerGroupName Consumer Group Name
     * @param string $Account 账户名
     * @param string $Password 密码
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
        if (array_key_exists("ConsumerGroupName",$param) and $param["ConsumerGroupName"] !== null) {
            $this->ConsumerGroupName = $param["ConsumerGroupName"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
