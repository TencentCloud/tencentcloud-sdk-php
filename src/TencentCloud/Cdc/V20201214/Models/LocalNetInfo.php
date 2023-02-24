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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 本地网络信息
 *
 * @method string getProtocol() 获取协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取网络id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置网络id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBGPRoute() 获取路由信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBGPRoute(string $BGPRoute) 设置路由信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLocalIp() 获取本地IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalIp(string $LocalIp) 设置本地IP
注意：此字段可能返回 null，表示取不到有效值。
 */
class LocalNetInfo extends AbstractModel
{
    /**
     * @var string 协议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var string 网络id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 路由信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BGPRoute;

    /**
     * @var string 本地IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalIp;

    /**
     * @param string $Protocol 协议
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 网络id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BGPRoute 路由信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LocalIp 本地IP
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("BGPRoute",$param) and $param["BGPRoute"] !== null) {
            $this->BGPRoute = $param["BGPRoute"];
        }

        if (array_key_exists("LocalIp",$param) and $param["LocalIp"] !== null) {
            $this->LocalIp = $param["LocalIp"];
        }
    }
}
