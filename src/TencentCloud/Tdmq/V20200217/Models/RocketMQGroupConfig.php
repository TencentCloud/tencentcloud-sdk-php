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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RocketMQ消费组配置信息
 *
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getGroupName() 获取消费组名称
 * @method void setGroupName(string $GroupName) 设置消费组名称
 * @method boolean getConsumeBroadcastEnable() 获取是否开启广播消费
 * @method void setConsumeBroadcastEnable(boolean $ConsumeBroadcastEnable) 设置是否开启广播消费
 * @method boolean getConsumeEnable() 获取是否开启消费
 * @method void setConsumeEnable(boolean $ConsumeEnable) 设置是否开启消费
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 * @method string getConsumerGroupType() 获取协议类型，支持以下枚举值
TCP;
HTTP;
 * @method void setConsumerGroupType(string $ConsumerGroupType) 设置协议类型，支持以下枚举值
TCP;
HTTP;
 */
class RocketMQGroupConfig extends AbstractModel
{
    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 消费组名称
     */
    public $GroupName;

    /**
     * @var boolean 是否开启广播消费
     */
    public $ConsumeBroadcastEnable;

    /**
     * @var boolean 是否开启消费
     */
    public $ConsumeEnable;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @var string 协议类型，支持以下枚举值
TCP;
HTTP;
     */
    public $ConsumerGroupType;

    /**
     * @param string $Namespace 命名空间
     * @param string $GroupName 消费组名称
     * @param boolean $ConsumeBroadcastEnable 是否开启广播消费
     * @param boolean $ConsumeEnable 是否开启消费
     * @param string $Remark 备注信息
     * @param string $ConsumerGroupType 协议类型，支持以下枚举值
TCP;
HTTP;
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ConsumeBroadcastEnable",$param) and $param["ConsumeBroadcastEnable"] !== null) {
            $this->ConsumeBroadcastEnable = $param["ConsumeBroadcastEnable"];
        }

        if (array_key_exists("ConsumeEnable",$param) and $param["ConsumeEnable"] !== null) {
            $this->ConsumeEnable = $param["ConsumeEnable"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ConsumerGroupType",$param) and $param["ConsumerGroupType"] !== null) {
            $this->ConsumerGroupType = $param["ConsumerGroupType"];
        }
    }
}
