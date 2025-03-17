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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 副可用区详情
 *
 * @method string getSecondaryZone() 获取副可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecondaryZone(string $SecondaryZone) 设置副可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecondarySubnet() 获取可用区可用的子网id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecondarySubnet(string $SecondarySubnet) 设置可用区可用的子网id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserIpNum() 获取可用区可用的子网可用ip的数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserIpNum(string $UserIpNum) 设置可用区可用的子网可用ip的数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSecondaryUserSubnetIPNum() 获取可用区可用的子网可用ip的数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecondaryUserSubnetIPNum(integer $SecondaryUserSubnetIPNum) 设置可用区可用的子网可用ip的数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class SecondaryZoneInfo extends AbstractModel
{
    /**
     * @var string 副可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecondaryZone;

    /**
     * @var string 可用区可用的子网id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecondarySubnet;

    /**
     * @var string 可用区可用的子网可用ip的数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserIpNum;

    /**
     * @var integer 可用区可用的子网可用ip的数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecondaryUserSubnetIPNum;

    /**
     * @param string $SecondaryZone 副可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecondarySubnet 可用区可用的子网id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserIpNum 可用区可用的子网可用ip的数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SecondaryUserSubnetIPNum 可用区可用的子网可用ip的数量
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
        if (array_key_exists("SecondaryZone",$param) and $param["SecondaryZone"] !== null) {
            $this->SecondaryZone = $param["SecondaryZone"];
        }

        if (array_key_exists("SecondarySubnet",$param) and $param["SecondarySubnet"] !== null) {
            $this->SecondarySubnet = $param["SecondarySubnet"];
        }

        if (array_key_exists("UserIpNum",$param) and $param["UserIpNum"] !== null) {
            $this->UserIpNum = $param["UserIpNum"];
        }

        if (array_key_exists("SecondaryUserSubnetIPNum",$param) and $param["SecondaryUserSubnetIPNum"] !== null) {
            $this->SecondaryUserSubnetIPNum = $param["SecondaryUserSubnetIPNum"];
        }
    }
}
