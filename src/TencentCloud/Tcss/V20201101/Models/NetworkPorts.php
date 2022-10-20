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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络集群策略自定义规则端口
 *
 * @method string getProtocol() 获取网络策略协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置网络策略协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPort() 获取网络策略策略端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(string $Port) 设置网络策略策略端口
注意：此字段可能返回 null，表示取不到有效值。
 */
class NetworkPorts extends AbstractModel
{
    /**
     * @var string 网络策略协议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var string 网络策略策略端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @param string $Protocol 网络策略协议
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Port 网络策略策略端口
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
