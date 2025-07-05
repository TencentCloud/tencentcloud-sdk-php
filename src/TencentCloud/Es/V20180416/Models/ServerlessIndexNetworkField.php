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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Serverless实例，网络、索引、kibana等连接信息
 *
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcUid() 获取vpc唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcUid(string $VpcUid) 设置vpc唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetUid() 获取子网唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetUid(string $SubnetUid) 设置子网唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsername() 获取用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsername(string $Username) 设置用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassword() 获取密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassword(string $Password) 设置密码
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServerlessIndexNetworkField extends AbstractModel
{
    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 区域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var string vpc唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcUid;

    /**
     * @var string 子网唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetUid;

    /**
     * @var string 用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Username;

    /**
     * @var string 密码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Password;

    /**
     * @param string $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 区域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcUid vpc唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetUid 子网唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Username 用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Password 密码
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpcUid",$param) and $param["VpcUid"] !== null) {
            $this->VpcUid = $param["VpcUid"];
        }

        if (array_key_exists("SubnetUid",$param) and $param["SubnetUid"] !== null) {
            $this->SubnetUid = $param["SubnetUid"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
