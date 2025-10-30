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
 * DescribeSharedSubscriptionLag请求参数结构体
 *
 * @method string getInstanceId() 获取集群id	
 * @method void setInstanceId(string $InstanceId) 设置集群id	
 * @method string getSharedSubscription() 获取共享订阅表达式
 * @method void setSharedSubscription(string $SharedSubscription) 设置共享订阅表达式
 */
class DescribeSharedSubscriptionLagRequest extends AbstractModel
{
    /**
     * @var string 集群id	
     */
    public $InstanceId;

    /**
     * @var string 共享订阅表达式
     */
    public $SharedSubscription;

    /**
     * @param string $InstanceId 集群id	
     * @param string $SharedSubscription 共享订阅表达式
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

        if (array_key_exists("SharedSubscription",$param) and $param["SharedSubscription"] !== null) {
            $this->SharedSubscription = $param["SharedSubscription"];
        }
    }
}
