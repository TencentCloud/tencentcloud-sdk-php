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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyConsumerGroupPassword请求参数结构体
 *
 * @method string getSubscribeId() 获取数据订阅实例的 ID
 * @method void setSubscribeId(string $SubscribeId) 设置数据订阅实例的 ID
 * @method string getAccountName() 获取账号名称。实际的账户全称形如：account-#{SubscribeId}-#{AccountName}
 * @method void setAccountName(string $AccountName) 设置账号名称。实际的账户全称形如：account-#{SubscribeId}-#{AccountName}
 * @method string getConsumerGroupName() 获取消费组名称。实际的消费组全称形如：consumer-grp-#{SubscribeId}-#{ConsumerGroupName}
 * @method void setConsumerGroupName(string $ConsumerGroupName) 设置消费组名称。实际的消费组全称形如：consumer-grp-#{SubscribeId}-#{ConsumerGroupName}
 * @method string getOldPassword() 获取旧密码
 * @method void setOldPassword(string $OldPassword) 设置旧密码
 * @method string getNewPassword() 获取新密码。字符长度不小于3，不大于32
 * @method void setNewPassword(string $NewPassword) 设置新密码。字符长度不小于3，不大于32
 */
class ModifyConsumerGroupPasswordRequest extends AbstractModel
{
    /**
     * @var string 数据订阅实例的 ID
     */
    public $SubscribeId;

    /**
     * @var string 账号名称。实际的账户全称形如：account-#{SubscribeId}-#{AccountName}
     */
    public $AccountName;

    /**
     * @var string 消费组名称。实际的消费组全称形如：consumer-grp-#{SubscribeId}-#{ConsumerGroupName}
     */
    public $ConsumerGroupName;

    /**
     * @var string 旧密码
     */
    public $OldPassword;

    /**
     * @var string 新密码。字符长度不小于3，不大于32
     */
    public $NewPassword;

    /**
     * @param string $SubscribeId 数据订阅实例的 ID
     * @param string $AccountName 账号名称。实际的账户全称形如：account-#{SubscribeId}-#{AccountName}
     * @param string $ConsumerGroupName 消费组名称。实际的消费组全称形如：consumer-grp-#{SubscribeId}-#{ConsumerGroupName}
     * @param string $OldPassword 旧密码
     * @param string $NewPassword 新密码。字符长度不小于3，不大于32
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
        if (array_key_exists("SubscribeId",$param) and $param["SubscribeId"] !== null) {
            $this->SubscribeId = $param["SubscribeId"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("ConsumerGroupName",$param) and $param["ConsumerGroupName"] !== null) {
            $this->ConsumerGroupName = $param["ConsumerGroupName"];
        }

        if (array_key_exists("OldPassword",$param) and $param["OldPassword"] !== null) {
            $this->OldPassword = $param["OldPassword"];
        }

        if (array_key_exists("NewPassword",$param) and $param["NewPassword"] !== null) {
            $this->NewPassword = $param["NewPassword"];
        }
    }
}
