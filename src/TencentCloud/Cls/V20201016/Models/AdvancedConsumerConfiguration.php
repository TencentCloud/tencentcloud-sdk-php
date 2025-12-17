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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 投递Ckafka 高级配置
 *
 * @method boolean getPartitionHashStatus() 获取Ckafka分区hash状态。 默认 false

- true：开启根据字段 Hash 值结果相等的信息投递到统一 ckafka 分区
- false：关闭根据字段 Hash 值结果相等的信息投递到统一 ckafka 分区
 * @method void setPartitionHashStatus(boolean $PartitionHashStatus) 设置Ckafka分区hash状态。 默认 false

- true：开启根据字段 Hash 值结果相等的信息投递到统一 ckafka 分区
- false：关闭根据字段 Hash 值结果相等的信息投递到统一 ckafka 分区
 * @method array getPartitionFields() 获取需要计算 hash 的字段列表。最大支持5个字段。
 * @method void setPartitionFields(array $PartitionFields) 设置需要计算 hash 的字段列表。最大支持5个字段。
 */
class AdvancedConsumerConfiguration extends AbstractModel
{
    /**
     * @var boolean Ckafka分区hash状态。 默认 false

- true：开启根据字段 Hash 值结果相等的信息投递到统一 ckafka 分区
- false：关闭根据字段 Hash 值结果相等的信息投递到统一 ckafka 分区
     */
    public $PartitionHashStatus;

    /**
     * @var array 需要计算 hash 的字段列表。最大支持5个字段。
     */
    public $PartitionFields;

    /**
     * @param boolean $PartitionHashStatus Ckafka分区hash状态。 默认 false

- true：开启根据字段 Hash 值结果相等的信息投递到统一 ckafka 分区
- false：关闭根据字段 Hash 值结果相等的信息投递到统一 ckafka 分区
     * @param array $PartitionFields 需要计算 hash 的字段列表。最大支持5个字段。
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
        if (array_key_exists("PartitionHashStatus",$param) and $param["PartitionHashStatus"] !== null) {
            $this->PartitionHashStatus = $param["PartitionHashStatus"];
        }

        if (array_key_exists("PartitionFields",$param) and $param["PartitionFields"] !== null) {
            $this->PartitionFields = $param["PartitionFields"];
        }
    }
}
