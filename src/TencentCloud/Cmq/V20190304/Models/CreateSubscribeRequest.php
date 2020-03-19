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
namespace TencentCloud\Cmq\V20190304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getTopicName() 获取TopicName
 * @method void setTopicName(string $TopicName) 设置TopicName
 * @method string getSubscriptionName() 获取SubscriptionName
 * @method void setSubscriptionName(string $SubscriptionName) 设置SubscriptionName
 * @method string getProtocol() 获取Protocol
 * @method void setProtocol(string $Protocol) 设置Protocol
 * @method string getEndpoint() 获取Endpoint
 * @method void setEndpoint(string $Endpoint) 设置Endpoint
 * @method string getNotifyStrategy() 获取NotifyStrategy
 * @method void setNotifyStrategy(string $NotifyStrategy) 设置NotifyStrategy
 * @method array getFilterTag() 获取FilterTag
 * @method void setFilterTag(array $FilterTag) 设置FilterTag
 * @method array getBindingKey() 获取BindingKey
 * @method void setBindingKey(array $BindingKey) 设置BindingKey
 * @method string getNotifyContentFormat() 获取NotifyContentFormat
 * @method void setNotifyContentFormat(string $NotifyContentFormat) 设置NotifyContentFormat
 */

/**
 *CreateSubscribe请求参数结构体
 */
class CreateSubscribeRequest extends AbstractModel
{
    /**
     * @var string TopicName
     */
    public $TopicName;

    /**
     * @var string SubscriptionName
     */
    public $SubscriptionName;

    /**
     * @var string Protocol
     */
    public $Protocol;

    /**
     * @var string Endpoint
     */
    public $Endpoint;

    /**
     * @var string NotifyStrategy
     */
    public $NotifyStrategy;

    /**
     * @var array FilterTag
     */
    public $FilterTag;

    /**
     * @var array BindingKey
     */
    public $BindingKey;

    /**
     * @var string NotifyContentFormat
     */
    public $NotifyContentFormat;
    /**
     * @param string $TopicName TopicName
     * @param string $SubscriptionName SubscriptionName
     * @param string $Protocol Protocol
     * @param string $Endpoint Endpoint
     * @param string $NotifyStrategy NotifyStrategy
     * @param array $FilterTag FilterTag
     * @param array $BindingKey BindingKey
     * @param string $NotifyContentFormat NotifyContentFormat
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("SubscriptionName",$param) and $param["SubscriptionName"] !== null) {
            $this->SubscriptionName = $param["SubscriptionName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("NotifyStrategy",$param) and $param["NotifyStrategy"] !== null) {
            $this->NotifyStrategy = $param["NotifyStrategy"];
        }

        if (array_key_exists("FilterTag",$param) and $param["FilterTag"] !== null) {
            $this->FilterTag = $param["FilterTag"];
        }

        if (array_key_exists("BindingKey",$param) and $param["BindingKey"] !== null) {
            $this->BindingKey = $param["BindingKey"];
        }

        if (array_key_exists("NotifyContentFormat",$param) and $param["NotifyContentFormat"] !== null) {
            $this->NotifyContentFormat = $param["NotifyContentFormat"];
        }
    }
}
