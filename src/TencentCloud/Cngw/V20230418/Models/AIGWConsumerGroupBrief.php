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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI 网关中消费者组简要信息
 *
 * @method string getName() 获取<p>消费者组名称</p>
 * @method void setName(string $Name) 设置<p>消费者组名称</p>
 * @method string getConsumerGroupId() 获取<p>消费者组Id</p>
 * @method void setConsumerGroupId(string $ConsumerGroupId) 设置<p>消费者组Id</p>
 */
class AIGWConsumerGroupBrief extends AbstractModel
{
    /**
     * @var string <p>消费者组名称</p>
     */
    public $Name;

    /**
     * @var string <p>消费者组Id</p>
     */
    public $ConsumerGroupId;

    /**
     * @param string $Name <p>消费者组名称</p>
     * @param string $ConsumerGroupId <p>消费者组Id</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ConsumerGroupId",$param) and $param["ConsumerGroupId"] !== null) {
            $this->ConsumerGroupId = $param["ConsumerGroupId"];
        }
    }
}
