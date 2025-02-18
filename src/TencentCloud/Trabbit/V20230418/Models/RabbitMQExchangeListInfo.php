<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RabbitMQ exchange列表成员信息
 *
 * @method string getExchangeName() 获取exchange 名
 * @method void setExchangeName(string $ExchangeName) 设置exchange 名
 * @method string getRemark() 获取备注说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExchangeType() 获取exchange 类型, 支持 "fanout","direct","topic","headers"
 * @method void setExchangeType(string $ExchangeType) 设置exchange 类型, 支持 "fanout","direct","topic","headers"
 * @method string getVirtualHost() 获取VHost参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualHost(string $VirtualHost) 设置VHost参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExchangeCreator() 获取exchange 创建者, "system":"系统创建", "user":"用户创建"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExchangeCreator(string $ExchangeCreator) 设置exchange 创建者, "system":"系统创建", "user":"用户创建"
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTimeStamp() 获取exchange 创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTimeStamp(string $CreateTimeStamp) 设置exchange 创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModTimeStamp() 获取exchange 修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModTimeStamp(string $ModTimeStamp) 设置exchange 修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMessageRateIn() 获取输入消息速率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessageRateIn(float $MessageRateIn) 设置输入消息速率
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMessageRateOut() 获取输出消息速率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessageRateOut(float $MessageRateOut) 设置输出消息速率
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDurable() 获取是否为持久化交换机，true 为持久化，false 为非持久化
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDurable(boolean $Durable) 设置是否为持久化交换机，true 为持久化，false 为非持久化
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAutoDelete() 获取是否为自动删除交换机，true 为自动删除，false 为非自动删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoDelete(boolean $AutoDelete) 设置是否为自动删除交换机，true 为自动删除，false 为非自动删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getInternal() 获取是否为内部交换机，true 为内部交换机
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternal(boolean $Internal) 设置是否为内部交换机，true 为内部交换机
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取交换机所属实例 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置交换机所属实例 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPolicy() 获取生效的策略名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicy(string $Policy) 设置生效的策略名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getArguments() 获取扩展参数 key-value 对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArguments(string $Arguments) 设置扩展参数 key-value 对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMessagesDelayed() 获取未调度的延时消息数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessagesDelayed(integer $MessagesDelayed) 设置未调度的延时消息数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class RabbitMQExchangeListInfo extends AbstractModel
{
    /**
     * @var string exchange 名
     */
    public $ExchangeName;

    /**
     * @var string 备注说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string exchange 类型, 支持 "fanout","direct","topic","headers"
     */
    public $ExchangeType;

    /**
     * @var string VHost参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualHost;

    /**
     * @var string exchange 创建者, "system":"系统创建", "user":"用户创建"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExchangeCreator;

    /**
     * @var string exchange 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTimeStamp;

    /**
     * @var string exchange 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModTimeStamp;

    /**
     * @var float 输入消息速率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MessageRateIn;

    /**
     * @var float 输出消息速率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MessageRateOut;

    /**
     * @var boolean 是否为持久化交换机，true 为持久化，false 为非持久化
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Durable;

    /**
     * @var boolean 是否为自动删除交换机，true 为自动删除，false 为非自动删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoDelete;

    /**
     * @var boolean 是否为内部交换机，true 为内部交换机
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Internal;

    /**
     * @var string 交换机所属实例 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 生效的策略名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Policy;

    /**
     * @var string 扩展参数 key-value 对象
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Arguments;

    /**
     * @var integer 未调度的延时消息数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MessagesDelayed;

    /**
     * @param string $ExchangeName exchange 名
     * @param string $Remark 备注说明
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExchangeType exchange 类型, 支持 "fanout","direct","topic","headers"
     * @param string $VirtualHost VHost参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExchangeCreator exchange 创建者, "system":"系统创建", "user":"用户创建"
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTimeStamp exchange 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModTimeStamp exchange 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $MessageRateIn 输入消息速率
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $MessageRateOut 输出消息速率
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Durable 是否为持久化交换机，true 为持久化，false 为非持久化
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AutoDelete 是否为自动删除交换机，true 为自动删除，false 为非自动删除
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Internal 是否为内部交换机，true 为内部交换机
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 交换机所属实例 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Policy 生效的策略名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Arguments 扩展参数 key-value 对象
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MessagesDelayed 未调度的延时消息数量
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ExchangeName",$param) and $param["ExchangeName"] !== null) {
            $this->ExchangeName = $param["ExchangeName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ExchangeType",$param) and $param["ExchangeType"] !== null) {
            $this->ExchangeType = $param["ExchangeType"];
        }

        if (array_key_exists("VirtualHost",$param) and $param["VirtualHost"] !== null) {
            $this->VirtualHost = $param["VirtualHost"];
        }

        if (array_key_exists("ExchangeCreator",$param) and $param["ExchangeCreator"] !== null) {
            $this->ExchangeCreator = $param["ExchangeCreator"];
        }

        if (array_key_exists("CreateTimeStamp",$param) and $param["CreateTimeStamp"] !== null) {
            $this->CreateTimeStamp = $param["CreateTimeStamp"];
        }

        if (array_key_exists("ModTimeStamp",$param) and $param["ModTimeStamp"] !== null) {
            $this->ModTimeStamp = $param["ModTimeStamp"];
        }

        if (array_key_exists("MessageRateIn",$param) and $param["MessageRateIn"] !== null) {
            $this->MessageRateIn = $param["MessageRateIn"];
        }

        if (array_key_exists("MessageRateOut",$param) and $param["MessageRateOut"] !== null) {
            $this->MessageRateOut = $param["MessageRateOut"];
        }

        if (array_key_exists("Durable",$param) and $param["Durable"] !== null) {
            $this->Durable = $param["Durable"];
        }

        if (array_key_exists("AutoDelete",$param) and $param["AutoDelete"] !== null) {
            $this->AutoDelete = $param["AutoDelete"];
        }

        if (array_key_exists("Internal",$param) and $param["Internal"] !== null) {
            $this->Internal = $param["Internal"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("Arguments",$param) and $param["Arguments"] !== null) {
            $this->Arguments = $param["Arguments"];
        }

        if (array_key_exists("MessagesDelayed",$param) and $param["MessagesDelayed"] !== null) {
            $this->MessagesDelayed = $param["MessagesDelayed"];
        }
    }
}
