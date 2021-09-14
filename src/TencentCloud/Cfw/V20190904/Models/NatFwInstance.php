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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Nat实例类型
 *
 * @method string getNatinsId() 获取nat实例id
 * @method void setNatinsId(string $NatinsId) 设置nat实例id
 * @method string getNatinsName() 获取nat实例名称
 * @method void setNatinsName(string $NatinsName) 设置nat实例名称
 * @method string getRegion() 获取实例所在地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置实例所在地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFwMode() 获取0:新增模式，1:接入模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFwMode(integer $FwMode) 设置0:新增模式，1:接入模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取0:正常状态， 1: 正在创建
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置0:正常状态， 1: 正在创建
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNatIp() 获取nat公网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNatIp(string $NatIp) 设置nat公网ip
注意：此字段可能返回 null，表示取不到有效值。
 */
class NatFwInstance extends AbstractModel
{
    /**
     * @var string nat实例id
     */
    public $NatinsId;

    /**
     * @var string nat实例名称
     */
    public $NatinsName;

    /**
     * @var string 实例所在地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var integer 0:新增模式，1:接入模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FwMode;

    /**
     * @var integer 0:正常状态， 1: 正在创建
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string nat公网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NatIp;

    /**
     * @param string $NatinsId nat实例id
     * @param string $NatinsName nat实例名称
     * @param string $Region 实例所在地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FwMode 0:新增模式，1:接入模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 0:正常状态， 1: 正在创建
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NatIp nat公网ip
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
        if (array_key_exists("NatinsId",$param) and $param["NatinsId"] !== null) {
            $this->NatinsId = $param["NatinsId"];
        }

        if (array_key_exists("NatinsName",$param) and $param["NatinsName"] !== null) {
            $this->NatinsName = $param["NatinsName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("FwMode",$param) and $param["FwMode"] !== null) {
            $this->FwMode = $param["FwMode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NatIp",$param) and $param["NatIp"] !== null) {
            $this->NatIp = $param["NatIp"];
        }
    }
}
