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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消费者客户端
 *
 * @method string getClientId() 获取客户端ID
 * @method void setClientId(string $ClientId) 设置客户端ID
 * @method string getClientAddr() 获取客户端地址
 * @method void setClientAddr(string $ClientAddr) 设置客户端地址
 * @method string getLanguage() 获取客户端SDK语言
 * @method void setLanguage(string $Language) 设置客户端SDK语言
 * @method string getVersion() 获取客户端SDK版本
 * @method void setVersion(string $Version) 设置客户端SDK版本
 * @method integer getConsumerLag() 获取客户端消费堆积
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerLag(integer $ConsumerLag) 设置客户端消费堆积
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelProtocol() 获取消费者客户端类型，枚举值如下：

- grpc：GRPC协议
- remoting：Remoting协议
- http：HTTP协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelProtocol(string $ChannelProtocol) 设置消费者客户端类型，枚举值如下：

- grpc：GRPC协议
- remoting：Remoting协议
- http：HTTP协议
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConsumerClient extends AbstractModel
{
    /**
     * @var string 客户端ID
     */
    public $ClientId;

    /**
     * @var string 客户端地址
     */
    public $ClientAddr;

    /**
     * @var string 客户端SDK语言
     */
    public $Language;

    /**
     * @var string 客户端SDK版本
     */
    public $Version;

    /**
     * @var integer 客户端消费堆积
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerLag;

    /**
     * @var string 消费者客户端类型，枚举值如下：

- grpc：GRPC协议
- remoting：Remoting协议
- http：HTTP协议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelProtocol;

    /**
     * @param string $ClientId 客户端ID
     * @param string $ClientAddr 客户端地址
     * @param string $Language 客户端SDK语言
     * @param string $Version 客户端SDK版本
     * @param integer $ConsumerLag 客户端消费堆积
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelProtocol 消费者客户端类型，枚举值如下：

- grpc：GRPC协议
- remoting：Remoting协议
- http：HTTP协议
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
        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("ClientAddr",$param) and $param["ClientAddr"] !== null) {
            $this->ClientAddr = $param["ClientAddr"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ConsumerLag",$param) and $param["ConsumerLag"] !== null) {
            $this->ConsumerLag = $param["ConsumerLag"];
        }

        if (array_key_exists("ChannelProtocol",$param) and $param["ChannelProtocol"] !== null) {
            $this->ChannelProtocol = $param["ChannelProtocol"];
        }
    }
}
