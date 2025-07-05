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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则支持触发类型
 *
 * @method string getMessageType() 获取触发类型
 * @method void setMessageType(string $MessageType) 设置触发类型
 * @method string getMaximumExecutionFrequency() 获取触发时间周期
 * @method void setMaximumExecutionFrequency(string $MaximumExecutionFrequency) 设置触发时间周期
 */
class TriggerType extends AbstractModel
{
    /**
     * @var string 触发类型
     */
    public $MessageType;

    /**
     * @var string 触发时间周期
     */
    public $MaximumExecutionFrequency;

    /**
     * @param string $MessageType 触发类型
     * @param string $MaximumExecutionFrequency 触发时间周期
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
        if (array_key_exists("MessageType",$param) and $param["MessageType"] !== null) {
            $this->MessageType = $param["MessageType"];
        }

        if (array_key_exists("MaximumExecutionFrequency",$param) and $param["MaximumExecutionFrequency"] !== null) {
            $this->MaximumExecutionFrequency = $param["MaximumExecutionFrequency"];
        }
    }
}
