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
 * 应急漏洞信息
 *
 * @method integer getVulId() 获取漏洞id
 * @method void setVulId(integer $VulId) 设置漏洞id
 * @method integer getLevel() 获取漏洞级别
 * @method void setLevel(integer $Level) 设置漏洞级别
 * @method string getVulName() 获取漏洞名称
 * @method void setVulName(string $VulName) 设置漏洞名称
 * @method string getPublishDate() 获取发布日期
 * @method void setPublishDate(string $PublishDate) 设置发布日期
 * @method integer getCategory() 获取漏洞分类
 * @method void setCategory(integer $Category) 设置漏洞分类
 * @method integer getStatus() 获取漏洞状态 0未检测 1有风险 ，2无风险 ，3 检查中展示progress
 * @method void setStatus(integer $Status) 设置漏洞状态 0未检测 1有风险 ，2无风险 ，3 检查中展示progress
 * @method string getLastScanTime() 获取最后扫描时间
 * @method void setLastScanTime(string $LastScanTime) 设置最后扫描时间
 * @method integer getProgress() 获取扫描进度
 * @method void setProgress(integer $Progress) 设置扫描进度
 * @method string getCveId() 获取cve编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCveId(string $CveId) 设置cve编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getCvssScore() 获取CVSS评分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCvssScore(float $CvssScore) 设置CVSS评分
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabels() 获取漏洞标签 多个逗号分割
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(string $Labels) 设置漏洞标签 多个逗号分割
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHostCount() 获取影响机器数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostCount(integer $HostCount) 设置影响机器数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsSupportDefense() 获取是否支持防御， 0:不支持 1:支持
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsSupportDefense(integer $IsSupportDefense) 设置是否支持防御， 0:不支持 1:支持
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDefenseAttackCount() 获取已防御的攻击次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefenseAttackCount(integer $DefenseAttackCount) 设置已防御的攻击次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMethod() 获取检测规则 0 - 版本比对, 1 - POC验证
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMethod(integer $Method) 设置检测规则 0 - 版本比对, 1 - POC验证
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAttackLevel() 获取攻击热度级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackLevel(integer $AttackLevel) 设置攻击热度级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDefenseState() 获取是否有漏洞主机开启漏洞防御
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefenseState(boolean $DefenseState) 设置是否有漏洞主机开启漏洞防御
注意：此字段可能返回 null，表示取不到有效值。
 */
class EmergencyVul extends AbstractModel
{
    /**
     * @var integer 漏洞id
     */
    public $VulId;

    /**
     * @var integer 漏洞级别
     */
    public $Level;

    /**
     * @var string 漏洞名称
     */
    public $VulName;

    /**
     * @var string 发布日期
     */
    public $PublishDate;

    /**
     * @var integer 漏洞分类
     */
    public $Category;

    /**
     * @var integer 漏洞状态 0未检测 1有风险 ，2无风险 ，3 检查中展示progress
     */
    public $Status;

    /**
     * @var string 最后扫描时间
     */
    public $LastScanTime;

    /**
     * @var integer 扫描进度
     */
    public $Progress;

    /**
     * @var string cve编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CveId;

    /**
     * @var float CVSS评分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CvssScore;

    /**
     * @var string 漏洞标签 多个逗号分割
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @var integer 影响机器数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostCount;

    /**
     * @var integer 是否支持防御， 0:不支持 1:支持
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsSupportDefense;

    /**
     * @var integer 已防御的攻击次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefenseAttackCount;

    /**
     * @var integer 检测规则 0 - 版本比对, 1 - POC验证
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Method;

    /**
     * @var integer 攻击热度级别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackLevel;

    /**
     * @var boolean 是否有漏洞主机开启漏洞防御
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefenseState;

    /**
     * @param integer $VulId 漏洞id
     * @param integer $Level 漏洞级别
     * @param string $VulName 漏洞名称
     * @param string $PublishDate 发布日期
     * @param integer $Category 漏洞分类
     * @param integer $Status 漏洞状态 0未检测 1有风险 ，2无风险 ，3 检查中展示progress
     * @param string $LastScanTime 最后扫描时间
     * @param integer $Progress 扫描进度
     * @param string $CveId cve编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $CvssScore CVSS评分
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Labels 漏洞标签 多个逗号分割
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HostCount 影响机器数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsSupportDefense 是否支持防御， 0:不支持 1:支持
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DefenseAttackCount 已防御的攻击次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Method 检测规则 0 - 版本比对, 1 - POC验证
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AttackLevel 攻击热度级别
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DefenseState 是否有漏洞主机开启漏洞防御
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
        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("PublishDate",$param) and $param["PublishDate"] !== null) {
            $this->PublishDate = $param["PublishDate"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("CveId",$param) and $param["CveId"] !== null) {
            $this->CveId = $param["CveId"];
        }

        if (array_key_exists("CvssScore",$param) and $param["CvssScore"] !== null) {
            $this->CvssScore = $param["CvssScore"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("IsSupportDefense",$param) and $param["IsSupportDefense"] !== null) {
            $this->IsSupportDefense = $param["IsSupportDefense"];
        }

        if (array_key_exists("DefenseAttackCount",$param) and $param["DefenseAttackCount"] !== null) {
            $this->DefenseAttackCount = $param["DefenseAttackCount"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("AttackLevel",$param) and $param["AttackLevel"] !== null) {
            $this->AttackLevel = $param["AttackLevel"];
        }

        if (array_key_exists("DefenseState",$param) and $param["DefenseState"] !== null) {
            $this->DefenseState = $param["DefenseState"];
        }
    }
}
