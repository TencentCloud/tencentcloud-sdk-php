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
 * 共享订阅组下客户端
 *
 * @method string getClientId() 获取客户端ID
 * @method void setClientId(string $ClientId) 设置客户端ID
 * @method string getSharedName() 获取共享订阅组名
 * @method void setSharedName(string $SharedName) 设置共享订阅组名
 * @method string getTopicFilter() 获取共享组下的订阅表达式列表
 * @method void setTopicFilter(string $TopicFilter) 设置共享组下的订阅表达式列表
 * @method boolean getOnline() 获取在线状态
 * @method void setOnline(boolean $Online) 设置在线状态
 */
class SharedSubscriptionClient extends AbstractModel
{
    /**
     * @var string 客户端ID
     */
    public $ClientId;

    /**
     * @var string 共享订阅组名
     */
    public $SharedName;

    /**
     * @var string 共享组下的订阅表达式列表
     */
    public $TopicFilter;

    /**
     * @var boolean 在线状态
     */
    public $Online;

    /**
     * @param string $ClientId 客户端ID
     * @param string $SharedName 共享订阅组名
     * @param string $TopicFilter 共享组下的订阅表达式列表
     * @param boolean $Online 在线状态
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
        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("SharedName",$param) and $param["SharedName"] !== null) {
            $this->SharedName = $param["SharedName"];
        }

        if (array_key_exists("TopicFilter",$param) and $param["TopicFilter"] !== null) {
            $this->TopicFilter = $param["TopicFilter"];
        }

        if (array_key_exists("Online",$param) and $param["Online"] !== null) {
            $this->Online = $param["Online"];
        }
    }
}
