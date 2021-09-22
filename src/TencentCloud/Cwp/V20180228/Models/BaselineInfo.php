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
 * 基线信息
 *
 * @method string getName() 获取基线名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置基线名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevel() 获取危害等级：1-低危；2-中危；3-高危；4-严重
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(integer $Level) 设置危害等级：1-低危；2-中危；3-高危；4-严重
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleCount() 获取检测项数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleCount(integer $RuleCount) 设置检测项数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHostCount() 获取影响服务器数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostCount(integer $HostCount) 设置影响服务器数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取通过状态:0:未通过,1:已通过
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置通过状态:0:未通过,1:已通过
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCategoryId() 获取基线id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategoryId(integer $CategoryId) 设置基线id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastScanTime() 获取最后检测时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastScanTime(string $LastScanTime) 设置最后检测时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxStatus() 获取检测中状态: 5
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxStatus(integer $MaxStatus) 设置检测中状态: 5
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBaselineFailCount() 获取基线风险项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBaselineFailCount(integer $BaselineFailCount) 设置基线风险项
注意：此字段可能返回 null，表示取不到有效值。
 */
class BaselineInfo extends AbstractModel
{
    /**
     * @var string 基线名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 危害等级：1-低危；2-中危；3-高危；4-严重
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var integer 检测项数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleCount;

    /**
     * @var integer 影响服务器数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostCount;

    /**
     * @var integer 通过状态:0:未通过,1:已通过
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 基线id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CategoryId;

    /**
     * @var string 最后检测时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastScanTime;

    /**
     * @var integer 检测中状态: 5
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxStatus;

    /**
     * @var integer 基线风险项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BaselineFailCount;

    /**
     * @param string $Name 基线名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Level 危害等级：1-低危；2-中危；3-高危；4-严重
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleCount 检测项数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HostCount 影响服务器数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 通过状态:0:未通过,1:已通过
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CategoryId 基线id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastScanTime 最后检测时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxStatus 检测中状态: 5
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BaselineFailCount 基线风险项
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("RuleCount",$param) and $param["RuleCount"] !== null) {
            $this->RuleCount = $param["RuleCount"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("MaxStatus",$param) and $param["MaxStatus"] !== null) {
            $this->MaxStatus = $param["MaxStatus"];
        }

        if (array_key_exists("BaselineFailCount",$param) and $param["BaselineFailCount"] !== null) {
            $this->BaselineFailCount = $param["BaselineFailCount"];
        }
    }
}
