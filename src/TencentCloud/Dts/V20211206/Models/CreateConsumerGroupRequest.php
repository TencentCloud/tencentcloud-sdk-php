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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateConsumerGroup请求参数结构体
 *
 * @method string getSubscribeId() 获取订阅实例id，可通过[DescribeSubscribeJobs](https://cloud.tencent.com/document/product/571/102943)接口获取。

 * @method void setSubscribeId(string $SubscribeId) 设置订阅实例id，可通过[DescribeSubscribeJobs](https://cloud.tencent.com/document/product/571/102943)接口获取。

 * @method string getConsumerGroupName() 获取消费组名称，以数字、字母(大小写)或者_ - .开头，以数字、字母(大小写)结尾。实际生成的消费组全称形如：consumer-grp-#{SubscribeId}-#{ConsumerGroupName}
 * @method void setConsumerGroupName(string $ConsumerGroupName) 设置消费组名称，以数字、字母(大小写)或者_ - .开头，以数字、字母(大小写)结尾。实际生成的消费组全称形如：consumer-grp-#{SubscribeId}-#{ConsumerGroupName}
 * @method string getAccountName() 获取账号名称。以数字、字母(大小写)或者_ - .开头，以数字、字母(大小写)结尾。实际生成的账户全称形如：account-#{SubscribeId}-#{AccountName}
 * @method void setAccountName(string $AccountName) 设置账号名称。以数字、字母(大小写)或者_ - .开头，以数字、字母(大小写)结尾。实际生成的账户全称形如：account-#{SubscribeId}-#{AccountName}
 * @method string getPassword() 获取消费组密码，长度必须大于3
 * @method void setPassword(string $Password) 设置消费组密码，长度必须大于3
 * @method string getDescription() 获取消费组备注
 * @method void setDescription(string $Description) 设置消费组备注
 */
class CreateConsumerGroupRequest extends AbstractModel
{
    /**
     * @var string 订阅实例id，可通过[DescribeSubscribeJobs](https://cloud.tencent.com/document/product/571/102943)接口获取。

     */
    public $SubscribeId;

    /**
     * @var string 消费组名称，以数字、字母(大小写)或者_ - .开头，以数字、字母(大小写)结尾。实际生成的消费组全称形如：consumer-grp-#{SubscribeId}-#{ConsumerGroupName}
     */
    public $ConsumerGroupName;

    /**
     * @var string 账号名称。以数字、字母(大小写)或者_ - .开头，以数字、字母(大小写)结尾。实际生成的账户全称形如：account-#{SubscribeId}-#{AccountName}
     */
    public $AccountName;

    /**
     * @var string 消费组密码，长度必须大于3
     */
    public $Password;

    /**
     * @var string 消费组备注
     */
    public $Description;

    /**
     * @param string $SubscribeId 订阅实例id，可通过[DescribeSubscribeJobs](https://cloud.tencent.com/document/product/571/102943)接口获取。

     * @param string $ConsumerGroupName 消费组名称，以数字、字母(大小写)或者_ - .开头，以数字、字母(大小写)结尾。实际生成的消费组全称形如：consumer-grp-#{SubscribeId}-#{ConsumerGroupName}
     * @param string $AccountName 账号名称。以数字、字母(大小写)或者_ - .开头，以数字、字母(大小写)结尾。实际生成的账户全称形如：account-#{SubscribeId}-#{AccountName}
     * @param string $Password 消费组密码，长度必须大于3
     * @param string $Description 消费组备注
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

        if (array_key_exists("ConsumerGroupName",$param) and $param["ConsumerGroupName"] !== null) {
            $this->ConsumerGroupName = $param["ConsumerGroupName"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
