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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteClientSubscription请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getClientId() 获取客户端id
 * @method void setClientId(string $ClientId) 设置客户端id
 * @method string getTopicFilter() 获取订阅
 * @method void setTopicFilter(string $TopicFilter) 设置订阅
 */
class DeleteClientSubscriptionRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 客户端id
     */
    public $ClientId;

    /**
     * @var string 订阅
     */
    public $TopicFilter;

    /**
     * @param string $InstanceId 实例ID
     * @param string $ClientId 客户端id
     * @param string $TopicFilter 订阅
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("TopicFilter",$param) and $param["TopicFilter"] !== null) {
            $this->TopicFilter = $param["TopicFilter"];
        }
    }
}
