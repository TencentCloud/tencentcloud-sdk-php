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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 漏洞趋势-攻击趋势、影响用户、影响资产
 *
 * @method integer getAffectAssetCount() 获取影响的资产数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAffectAssetCount(integer $AffectAssetCount) 设置影响的资产数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAffectUserCount() 获取影响的用户数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAffectUserCount(integer $AffectUserCount) 设置影响的用户数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAttackCount() 获取攻击数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackCount(integer $AttackCount) 设置攻击数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDate() 获取时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDate(string $Date) 设置时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class VulTrend extends AbstractModel
{
    /**
     * @var integer 影响的资产数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AffectAssetCount;

    /**
     * @var integer 影响的用户数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AffectUserCount;

    /**
     * @var integer 攻击数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackCount;

    /**
     * @var string 时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Date;

    /**
     * @param integer $AffectAssetCount 影响的资产数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AffectUserCount 影响的用户数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AttackCount 攻击数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Date 时间
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
        if (array_key_exists("AffectAssetCount",$param) and $param["AffectAssetCount"] !== null) {
            $this->AffectAssetCount = $param["AffectAssetCount"];
        }

        if (array_key_exists("AffectUserCount",$param) and $param["AffectUserCount"] !== null) {
            $this->AffectUserCount = $param["AffectUserCount"];
        }

        if (array_key_exists("AttackCount",$param) and $param["AttackCount"] !== null) {
            $this->AttackCount = $param["AttackCount"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }
    }
}
