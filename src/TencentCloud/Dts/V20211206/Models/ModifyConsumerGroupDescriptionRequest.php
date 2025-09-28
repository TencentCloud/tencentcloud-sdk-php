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
 * ModifyConsumerGroupDescription请求参数结构体
 *
 * @method string getSubscribeId() 获取数据订阅实例的 ID，可通过[DescribeSubscribeJobs](https://cloud.tencent.com/document/product/571/102943)接口获取。
 * @method void setSubscribeId(string $SubscribeId) 设置数据订阅实例的 ID，可通过[DescribeSubscribeJobs](https://cloud.tencent.com/document/product/571/102943)接口获取。
 * @method string getConsumerGroupName() 获取消费组名称。实际的消费组全称形如：consumer-grp-#{SubscribeId}-#{ConsumerGroupName}。
请务必保证消费组名称正确。可通过[DescribeConsumerGroups](https://cloud.tencent.com/document/product/571/102947)接口获取。
 * @method void setConsumerGroupName(string $ConsumerGroupName) 设置消费组名称。实际的消费组全称形如：consumer-grp-#{SubscribeId}-#{ConsumerGroupName}。
请务必保证消费组名称正确。可通过[DescribeConsumerGroups](https://cloud.tencent.com/document/product/571/102947)接口获取。
 * @method string getAccountName() 获取账户名称。实际的账户全称形如：account-#{SubscribeId}-#{AccountName}。
请务必保证账户名称正确。可通过[DescribeConsumerGroups](https://cloud.tencent.com/document/product/571/102947)接口获取。
 * @method void setAccountName(string $AccountName) 设置账户名称。实际的账户全称形如：account-#{SubscribeId}-#{AccountName}。
请务必保证账户名称正确。可通过[DescribeConsumerGroups](https://cloud.tencent.com/document/product/571/102947)接口获取。
 * @method string getDescription() 获取修改之后的消费组描述
 * @method void setDescription(string $Description) 设置修改之后的消费组描述
 */
class ModifyConsumerGroupDescriptionRequest extends AbstractModel
{
    /**
     * @var string 数据订阅实例的 ID，可通过[DescribeSubscribeJobs](https://cloud.tencent.com/document/product/571/102943)接口获取。
     */
    public $SubscribeId;

    /**
     * @var string 消费组名称。实际的消费组全称形如：consumer-grp-#{SubscribeId}-#{ConsumerGroupName}。
请务必保证消费组名称正确。可通过[DescribeConsumerGroups](https://cloud.tencent.com/document/product/571/102947)接口获取。
     */
    public $ConsumerGroupName;

    /**
     * @var string 账户名称。实际的账户全称形如：account-#{SubscribeId}-#{AccountName}。
请务必保证账户名称正确。可通过[DescribeConsumerGroups](https://cloud.tencent.com/document/product/571/102947)接口获取。
     */
    public $AccountName;

    /**
     * @var string 修改之后的消费组描述
     */
    public $Description;

    /**
     * @param string $SubscribeId 数据订阅实例的 ID，可通过[DescribeSubscribeJobs](https://cloud.tencent.com/document/product/571/102943)接口获取。
     * @param string $ConsumerGroupName 消费组名称。实际的消费组全称形如：consumer-grp-#{SubscribeId}-#{ConsumerGroupName}。
请务必保证消费组名称正确。可通过[DescribeConsumerGroups](https://cloud.tencent.com/document/product/571/102947)接口获取。
     * @param string $AccountName 账户名称。实际的账户全称形如：account-#{SubscribeId}-#{AccountName}。
请务必保证账户名称正确。可通过[DescribeConsumerGroups](https://cloud.tencent.com/document/product/571/102947)接口获取。
     * @param string $Description 修改之后的消费组描述
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
