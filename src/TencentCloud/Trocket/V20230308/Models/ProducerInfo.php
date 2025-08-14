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
 * 生产者信息
 *
 * @method string getClientId() 获取客户端ID	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientId(string $ClientId) 设置客户端ID	
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClientIp() 获取客户端IP	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientIp(string $ClientIp) 设置客户端IP	
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLanguage() 获取客户端语言 
- JAVA((byte) 0)
- CPP((byte) 1) 
- DOTNET((byte) 2) 
- PYTHON((byte) 3)
- DELPHI((byte) 4)
- ERLANG((byte) 5)
- RUBY((byte) 6)
- OTHER((byte) 7)
- HTTP((byte) 8)
- GO((byte) 9)
- PHP((byte) 10)
- OMS((byte) 11)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLanguage(string $Language) 设置客户端语言 
- JAVA((byte) 0)
- CPP((byte) 1) 
- DOTNET((byte) 2) 
- PYTHON((byte) 3)
- DELPHI((byte) 4)
- ERLANG((byte) 5)
- RUBY((byte) 6)
- OTHER((byte) 7)
- HTTP((byte) 8)
- GO((byte) 9)
- PHP((byte) 10)
- OMS((byte) 11)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取客户端版本	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置客户端版本	
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastUpdateTimestamp() 获取最后生产时间，**Unix时间戳（秒）**
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdateTimestamp(integer $LastUpdateTimestamp) 设置最后生产时间，**Unix时间戳（秒）**
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelProtocol() 获取生产者客户端协议类型，枚举如下：

- grpc：GRpc协议
- remoting：Remoting协议
- http：HTTP协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelProtocol(string $ChannelProtocol) 设置生产者客户端协议类型，枚举如下：

- grpc：GRpc协议
- remoting：Remoting协议
- http：HTTP协议
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProducerInfo extends AbstractModel
{
    /**
     * @var string 客户端ID	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientId;

    /**
     * @var string 客户端IP	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientIp;

    /**
     * @var string 客户端语言 
- JAVA((byte) 0)
- CPP((byte) 1) 
- DOTNET((byte) 2) 
- PYTHON((byte) 3)
- DELPHI((byte) 4)
- ERLANG((byte) 5)
- RUBY((byte) 6)
- OTHER((byte) 7)
- HTTP((byte) 8)
- GO((byte) 9)
- PHP((byte) 10)
- OMS((byte) 11)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Language;

    /**
     * @var string 客户端版本	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var integer 最后生产时间，**Unix时间戳（秒）**
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastUpdateTimestamp;

    /**
     * @var string 生产者客户端协议类型，枚举如下：

- grpc：GRpc协议
- remoting：Remoting协议
- http：HTTP协议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelProtocol;

    /**
     * @param string $ClientId 客户端ID	
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClientIp 客户端IP	
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Language 客户端语言 
- JAVA((byte) 0)
- CPP((byte) 1) 
- DOTNET((byte) 2) 
- PYTHON((byte) 3)
- DELPHI((byte) 4)
- ERLANG((byte) 5)
- RUBY((byte) 6)
- OTHER((byte) 7)
- HTTP((byte) 8)
- GO((byte) 9)
- PHP((byte) 10)
- OMS((byte) 11)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 客户端版本	
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastUpdateTimestamp 最后生产时间，**Unix时间戳（秒）**
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelProtocol 生产者客户端协议类型，枚举如下：

- grpc：GRpc协议
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

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("LastUpdateTimestamp",$param) and $param["LastUpdateTimestamp"] !== null) {
            $this->LastUpdateTimestamp = $param["LastUpdateTimestamp"];
        }

        if (array_key_exists("ChannelProtocol",$param) and $param["ChannelProtocol"] !== null) {
            $this->ChannelProtocol = $param["ChannelProtocol"];
        }
    }
}
