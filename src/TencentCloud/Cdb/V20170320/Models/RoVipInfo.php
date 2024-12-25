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
 * 只读vip信息
 *
 * @method integer getRoVipStatus() 获取只读vip状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoVipStatus(integer $RoVipStatus) 设置只读vip状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRoSubnetId() 获取只读vip的子网
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoSubnetId(integer $RoSubnetId) 设置只读vip的子网
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRoVpcId() 获取只读vip的私有网络
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoVpcId(integer $RoVpcId) 设置只读vip的私有网络
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRoVport() 获取只读vip的端口号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoVport(integer $RoVport) 设置只读vip的端口号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRoVip() 获取只读vip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoVip(string $RoVip) 设置只读vip
注意：此字段可能返回 null，表示取不到有效值。
 */
class RoVipInfo extends AbstractModel
{
    /**
     * @var integer 只读vip状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoVipStatus;

    /**
     * @var integer 只读vip的子网
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoSubnetId;

    /**
     * @var integer 只读vip的私有网络
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoVpcId;

    /**
     * @var integer 只读vip的端口号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoVport;

    /**
     * @var string 只读vip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoVip;

    /**
     * @param integer $RoVipStatus 只读vip状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RoSubnetId 只读vip的子网
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RoVpcId 只读vip的私有网络
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RoVport 只读vip的端口号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RoVip 只读vip
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
        if (array_key_exists("RoVipStatus",$param) and $param["RoVipStatus"] !== null) {
            $this->RoVipStatus = $param["RoVipStatus"];
        }

        if (array_key_exists("RoSubnetId",$param) and $param["RoSubnetId"] !== null) {
            $this->RoSubnetId = $param["RoSubnetId"];
        }

        if (array_key_exists("RoVpcId",$param) and $param["RoVpcId"] !== null) {
            $this->RoVpcId = $param["RoVpcId"];
        }

        if (array_key_exists("RoVport",$param) and $param["RoVport"] !== null) {
            $this->RoVport = $param["RoVport"];
        }

        if (array_key_exists("RoVip",$param) and $param["RoVip"] !== null) {
            $this->RoVip = $param["RoVip"];
        }
    }
}
