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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteThrottleRule请求参数结构体
 *
 * @method string getThrottleRuleId() 获取限流规则Id
 * @method void setThrottleRuleId(string $ThrottleRuleId) 设置限流规则Id
 * @method string getInstanceId() 获取实例标识
 * @method void setInstanceId(string $InstanceId) 设置实例标识
 */
class DeleteThrottleRuleRequest extends AbstractModel
{
    /**
     * @var string 限流规则Id
     */
    public $ThrottleRuleId;

    /**
     * @var string 实例标识
     */
    public $InstanceId;

    /**
     * @param string $ThrottleRuleId 限流规则Id
     * @param string $InstanceId 实例标识
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
        if (array_key_exists("ThrottleRuleId",$param) and $param["ThrottleRuleId"] !== null) {
            $this->ThrottleRuleId = $param["ThrottleRuleId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
