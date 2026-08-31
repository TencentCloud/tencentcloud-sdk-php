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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetQueueAutoScaling请求参数结构体
 *
 * @method string getClusterId() 获取集群 ID。
 * @method void setClusterId(string $ClusterId) 设置集群 ID。
 * @method string getQueueName() 获取队列名称。
 * @method void setQueueName(string $QueueName) 设置队列名称。
 * @method ScalingPolicy getScalingPolicy() 获取<p>伸缩容量策略，用于设置目标容量及容量单位。单独传入时仅更新容量相关配置，未传字段保持原值。</p>
 * @method void setScalingPolicy(ScalingPolicy $ScalingPolicy) 设置<p>伸缩容量策略，用于设置目标容量及容量单位。单独传入时仅更新容量相关配置，未传字段保持原值。</p>
 * @method ExpansionPolicy getExpansionPolicy() 获取<p>扩容策略，用于配置启动模板、机型族、GPU 卡数、规格优先级和多可用区等扩容方式。单独传入时仅更新扩容相关配置，未传字段保持原值。</p>
 * @method void setExpansionPolicy(ExpansionPolicy $ExpansionPolicy) 设置<p>扩容策略，用于配置启动模板、机型族、GPU 卡数、规格优先级和多可用区等扩容方式。单独传入时仅更新扩容相关配置，未传字段保持原值。</p>
 */
class SetQueueAutoScalingRequest extends AbstractModel
{
    /**
     * @var string 集群 ID。
     */
    public $ClusterId;

    /**
     * @var string 队列名称。
     */
    public $QueueName;

    /**
     * @var ScalingPolicy <p>伸缩容量策略，用于设置目标容量及容量单位。单独传入时仅更新容量相关配置，未传字段保持原值。</p>
     */
    public $ScalingPolicy;

    /**
     * @var ExpansionPolicy <p>扩容策略，用于配置启动模板、机型族、GPU 卡数、规格优先级和多可用区等扩容方式。单独传入时仅更新扩容相关配置，未传字段保持原值。</p>
     */
    public $ExpansionPolicy;

    /**
     * @param string $ClusterId 集群 ID。
     * @param string $QueueName 队列名称。
     * @param ScalingPolicy $ScalingPolicy <p>伸缩容量策略，用于设置目标容量及容量单位。单独传入时仅更新容量相关配置，未传字段保持原值。</p>
     * @param ExpansionPolicy $ExpansionPolicy <p>扩容策略，用于配置启动模板、机型族、GPU 卡数、规格优先级和多可用区等扩容方式。单独传入时仅更新扩容相关配置，未传字段保持原值。</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("ScalingPolicy",$param) and $param["ScalingPolicy"] !== null) {
            $this->ScalingPolicy = new ScalingPolicy();
            $this->ScalingPolicy->deserialize($param["ScalingPolicy"]);
        }

        if (array_key_exists("ExpansionPolicy",$param) and $param["ExpansionPolicy"] !== null) {
            $this->ExpansionPolicy = new ExpansionPolicy();
            $this->ExpansionPolicy->deserialize($param["ExpansionPolicy"]);
        }
    }
}
