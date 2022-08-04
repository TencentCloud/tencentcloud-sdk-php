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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务端口映射条目
 *
 * @method integer getPort() 获取应用访问端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置应用访问端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTargetPort() 获取应用监听端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetPort(integer $TargetPort) 设置应用监听端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取协议类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置协议类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServicePortMappingItem extends AbstractModel
{
    /**
     * @var integer 应用访问端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var integer 应用监听端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetPort;

    /**
     * @var string 协议类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @param integer $Port 应用访问端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TargetPort 应用监听端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 协议类型
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
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("TargetPort",$param) and $param["TargetPort"] !== null) {
            $this->TargetPort = $param["TargetPort"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }
    }
}
