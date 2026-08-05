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
 * ModifyThrottleRule请求参数结构体
 *
 * @method integer getThrottleRuleId() 获取规则标识
 * @method void setThrottleRuleId(integer $ThrottleRuleId) 设置规则标识
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method integer getConsumeThrottle() 获取消费限流值单位MB/s
 * @method void setConsumeThrottle(integer $ConsumeThrottle) 设置消费限流值单位MB/s
 */
class ModifyThrottleRuleRequest extends AbstractModel
{
    /**
     * @var integer 规则标识
     */
    public $ThrottleRuleId;

    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var integer 消费限流值单位MB/s
     */
    public $ConsumeThrottle;

    /**
     * @param integer $ThrottleRuleId 规则标识
     * @param string $InstanceId 实例Id
     * @param integer $ConsumeThrottle 消费限流值单位MB/s
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

        if (array_key_exists("ConsumeThrottle",$param) and $param["ConsumeThrottle"] !== null) {
            $this->ConsumeThrottle = $param["ConsumeThrottle"];
        }
    }
}
