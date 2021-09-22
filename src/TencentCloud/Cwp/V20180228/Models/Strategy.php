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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基线安全用户策略信息
 *
 * @method string getStrategyName() 获取策略名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyName(string $StrategyName) 设置策略名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStrategyId() 获取策略id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyId(integer $StrategyId) 设置策略id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleCount() 获取基线检测项总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleCount(integer $RuleCount) 设置基线检测项总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHostCount() 获取主机数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostCount(integer $HostCount) 设置主机数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScanCycle() 获取扫描周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanCycle(integer $ScanCycle) 设置扫描周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScanAt() 获取扫描时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanAt(string $ScanAt) 设置扫描时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnabled() 获取是否可用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnabled(integer $Enabled) 设置是否可用
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPassRate() 获取通过率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassRate(integer $PassRate) 设置通过率
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCategoryIds() 获取基线id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategoryIds(string $CategoryIds) 设置基线id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsDefault() 获取是否默认策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDefault(integer $IsDefault) 设置是否默认策略
注意：此字段可能返回 null，表示取不到有效值。
 */
class Strategy extends AbstractModel
{
    /**
     * @var string 策略名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyName;

    /**
     * @var integer 策略id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyId;

    /**
     * @var integer 基线检测项总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleCount;

    /**
     * @var integer 主机数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostCount;

    /**
     * @var integer 扫描周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanCycle;

    /**
     * @var string 扫描时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanAt;

    /**
     * @var integer 是否可用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enabled;

    /**
     * @var integer 通过率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PassRate;

    /**
     * @var string 基线id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CategoryIds;

    /**
     * @var integer 是否默认策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDefault;

    /**
     * @param string $StrategyName 策略名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StrategyId 策略id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleCount 基线检测项总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HostCount 主机数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScanCycle 扫描周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScanAt 扫描时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Enabled 是否可用
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PassRate 通过率
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CategoryIds 基线id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsDefault 是否默认策略
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
        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("RuleCount",$param) and $param["RuleCount"] !== null) {
            $this->RuleCount = $param["RuleCount"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("ScanCycle",$param) and $param["ScanCycle"] !== null) {
            $this->ScanCycle = $param["ScanCycle"];
        }

        if (array_key_exists("ScanAt",$param) and $param["ScanAt"] !== null) {
            $this->ScanAt = $param["ScanAt"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("PassRate",$param) and $param["PassRate"] !== null) {
            $this->PassRate = $param["PassRate"];
        }

        if (array_key_exists("CategoryIds",$param) and $param["CategoryIds"] !== null) {
            $this->CategoryIds = $param["CategoryIds"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }
    }
}
