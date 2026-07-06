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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 按账号分组的风险统计数据
 *
 * @method MemberInfo getMember() 获取成员账号信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMember(MemberInfo $Member) 设置成员账号信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUntreatedRiskCount() 获取该账号下所有产品待整改风险数汇总
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUntreatedRiskCount(integer $UntreatedRiskCount) 设置该账号下所有产品待整改风险数汇总
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProductStats() 获取该账号下各产品维度的风险统计列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductStats(array $ProductStats) 设置该账号下各产品维度的风险统计列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRectifyRate() 获取整改率
 * @method void setRectifyRate(string $RectifyRate) 设置整改率
 */
class AccountStatsGroup extends AbstractModel
{
    /**
     * @var MemberInfo 成员账号信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Member;

    /**
     * @var integer 该账号下所有产品待整改风险数汇总
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UntreatedRiskCount;

    /**
     * @var array 该账号下各产品维度的风险统计列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductStats;

    /**
     * @var string 整改率
     */
    public $RectifyRate;

    /**
     * @param MemberInfo $Member 成员账号信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UntreatedRiskCount 该账号下所有产品待整改风险数汇总
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProductStats 该账号下各产品维度的风险统计列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RectifyRate 整改率
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
        if (array_key_exists("Member",$param) and $param["Member"] !== null) {
            $this->Member = new MemberInfo();
            $this->Member->deserialize($param["Member"]);
        }

        if (array_key_exists("UntreatedRiskCount",$param) and $param["UntreatedRiskCount"] !== null) {
            $this->UntreatedRiskCount = $param["UntreatedRiskCount"];
        }

        if (array_key_exists("ProductStats",$param) and $param["ProductStats"] !== null) {
            $this->ProductStats = [];
            foreach ($param["ProductStats"] as $key => $value){
                $obj = new AccountProductDetailStats();
                $obj->deserialize($value);
                array_push($this->ProductStats, $obj);
            }
        }

        if (array_key_exists("RectifyRate",$param) and $param["RectifyRate"] !== null) {
            $this->RectifyRate = $param["RectifyRate"];
        }
    }
}
