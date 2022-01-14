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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地址
 *
 * @method string getVip() 获取地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVip(string $Vip) 设置地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVPort() 获取端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVPort(integer $VPort) 设置端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUniqVpcId() 获取私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUniqVpcId(string $UniqVpcId) 设置私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUniqSubnet() 获取私有网络子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUniqSubnet(string $UniqSubnet) 设置私有网络子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDesc() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesc(string $Desc) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class Address extends AbstractModel
{
    /**
     * @var string 地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vip;

    /**
     * @var integer 端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VPort;

    /**
     * @var string 私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UniqVpcId;

    /**
     * @var string 私有网络子网ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UniqSubnet;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Desc;

    /**
     * @param string $Vip 地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VPort 端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UniqVpcId 私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UniqSubnet 私有网络子网ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Desc 描述
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
        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VPort",$param) and $param["VPort"] !== null) {
            $this->VPort = $param["VPort"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnet",$param) and $param["UniqSubnet"] !== null) {
            $this->UniqSubnet = $param["UniqSubnet"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
