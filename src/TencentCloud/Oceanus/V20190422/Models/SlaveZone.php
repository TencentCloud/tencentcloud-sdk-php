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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多可用区支持备区域
 *
 * @method string getVpcId() 获取vpc
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置vpc
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取子网
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置区
注意：此字段可能返回 null，表示取不到有效值。
 */
class SlaveZone extends AbstractModel
{
    /**
     * @var string vpc
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 子网
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string 区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @param string $VpcId vpc
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 子网
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 区
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
