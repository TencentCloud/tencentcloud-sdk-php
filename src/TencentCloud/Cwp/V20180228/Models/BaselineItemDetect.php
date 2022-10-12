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
 * 基线检测项
 *
 * @method integer getItemId() 获取项Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItemId(integer $ItemId) 设置项Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getItemName() 获取项名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItemName(string $ItemName) 设置项名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getItemDesc() 获取项描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItemDesc(string $ItemDesc) 设置项描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFixMethod() 获取修复方法
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFixMethod(string $FixMethod) 设置修复方法
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleName() 获取所属规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置所属规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDetectStatus() 获取0:未通过 1:忽略 3:通过 5:检测中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetectStatus(integer $DetectStatus) 设置0:未通过 1:忽略 3:通过 5:检测中
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevel() 获取风险等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(integer $Level) 设置风险等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHostCount() 获取影响服务器数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostCount(integer $HostCount) 设置影响服务器数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstTime() 获取首次检测时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstTime(string $FirstTime) 设置首次检测时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastTime() 获取最后检测时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastTime(string $LastTime) 设置最后检测时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDetectResult() 获取检测结果,Json字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetectResult(string $DetectResult) 设置检测结果,Json字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleId() 获取所属规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置所属规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPassedHostCount() 获取通过的服务器数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassedHostCount(integer $PassedHostCount) 设置通过的服务器数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNotPassedHostCount() 获取未通过的服务器数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotPassedHostCount(integer $NotPassedHostCount) 设置未通过的服务器数
注意：此字段可能返回 null，表示取不到有效值。
 */
class BaselineItemDetect extends AbstractModel
{
    /**
     * @var integer 项Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ItemId;

    /**
     * @var string 项名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ItemName;

    /**
     * @var string 项描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ItemDesc;

    /**
     * @var string 修复方法
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FixMethod;

    /**
     * @var string 所属规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @var integer 0:未通过 1:忽略 3:通过 5:检测中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetectStatus;

    /**
     * @var integer 风险等级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var integer 影响服务器数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostCount;

    /**
     * @var string 首次检测时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstTime;

    /**
     * @var string 最后检测时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastTime;

    /**
     * @var string 检测结果,Json字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetectResult;

    /**
     * @var integer 所属规则ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var integer 通过的服务器数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PassedHostCount;

    /**
     * @var integer 未通过的服务器数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotPassedHostCount;

    /**
     * @param integer $ItemId 项Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ItemName 项名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ItemDesc 项描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FixMethod 修复方法
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleName 所属规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DetectStatus 0:未通过 1:忽略 3:通过 5:检测中
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Level 风险等级
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HostCount 影响服务器数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstTime 首次检测时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastTime 最后检测时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DetectResult 检测结果,Json字符串
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleId 所属规则ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PassedHostCount 通过的服务器数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NotPassedHostCount 未通过的服务器数
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("ItemName",$param) and $param["ItemName"] !== null) {
            $this->ItemName = $param["ItemName"];
        }

        if (array_key_exists("ItemDesc",$param) and $param["ItemDesc"] !== null) {
            $this->ItemDesc = $param["ItemDesc"];
        }

        if (array_key_exists("FixMethod",$param) and $param["FixMethod"] !== null) {
            $this->FixMethod = $param["FixMethod"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("DetectStatus",$param) and $param["DetectStatus"] !== null) {
            $this->DetectStatus = $param["DetectStatus"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("DetectResult",$param) and $param["DetectResult"] !== null) {
            $this->DetectResult = $param["DetectResult"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("PassedHostCount",$param) and $param["PassedHostCount"] !== null) {
            $this->PassedHostCount = $param["PassedHostCount"];
        }

        if (array_key_exists("NotPassedHostCount",$param) and $param["NotPassedHostCount"] !== null) {
            $this->NotPassedHostCount = $param["NotPassedHostCount"];
        }
    }
}
