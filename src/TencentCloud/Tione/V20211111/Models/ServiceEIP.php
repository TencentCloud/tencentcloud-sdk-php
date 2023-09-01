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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务共享弹性网卡设置
 *
 * @method boolean getEnableEIP() 获取是否开启TIONE内网到外部的访问
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableEIP(boolean $EnableEIP) 设置是否开启TIONE内网到外部的访问
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取用户VpcId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置用户VpcId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取用户subnetId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置用户subnetId
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServiceEIP extends AbstractModel
{
    /**
     * @var boolean 是否开启TIONE内网到外部的访问
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableEIP;

    /**
     * @var string 用户VpcId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 用户subnetId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @param boolean $EnableEIP 是否开启TIONE内网到外部的访问
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 用户VpcId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 用户subnetId
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
        if (array_key_exists("EnableEIP",$param) and $param["EnableEIP"] !== null) {
            $this->EnableEIP = $param["EnableEIP"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }
    }
}
