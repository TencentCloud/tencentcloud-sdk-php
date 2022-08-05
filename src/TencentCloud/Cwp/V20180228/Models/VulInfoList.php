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
 * 主机安全-漏洞管理-漏洞列表
 *
 * @method string getIds() 获取漏洞包含的事件id串，多个用“,”分割
 * @method void setIds(string $Ids) 设置漏洞包含的事件id串，多个用“,”分割
 * @method string getName() 获取漏洞名
 * @method void setName(string $Name) 设置漏洞名
 * @method integer getStatus() 获取0: 待处理 1:忽略  3:已修复  5:检测中 6:修复中  8:修复失败
 * @method void setStatus(integer $Status) 设置0: 待处理 1:忽略  3:已修复  5:检测中 6:修复中  8:修复失败
 * @method integer getVulId() 获取漏洞id
 * @method void setVulId(integer $VulId) 设置漏洞id
 * @method string getPublishTime() 获取漏洞披露事件
 * @method void setPublishTime(string $PublishTime) 设置漏洞披露事件
 * @method string getLastTime() 获取最后检测时间
 * @method void setLastTime(string $LastTime) 设置最后检测时间
 * @method integer getHostCount() 获取影响主机数
 * @method void setHostCount(integer $HostCount) 设置影响主机数
 * @method integer getLevel() 获取漏洞等级 1:低 2:中 3:高 4:严重
 * @method void setLevel(integer $Level) 设置漏洞等级 1:低 2:中 3:高 4:严重
 * @method integer getFrom() 获取废弃字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrom(integer $From) 设置废弃字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescript() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescript(string $Descript) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublishTimeWisteria() 获取废弃字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublishTimeWisteria(string $PublishTimeWisteria) 设置废弃字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNameWisteria() 获取废弃字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNameWisteria(string $NameWisteria) 设置废弃字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescriptWisteria() 获取废弃字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescriptWisteria(string $DescriptWisteria) 设置废弃字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusStr() 获取聚合后事件状态串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusStr(string $StatusStr) 设置聚合后事件状态串
注意：此字段可能返回 null，表示取不到有效值。
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
 * @method integer getFixSwitch() 获取是否能自动修复且包含能自动修复的主机， 0=否  1=是
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFixSwitch(integer $FixSwitch) 设置是否能自动修复且包含能自动修复的主机， 0=否  1=是
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskId() 获取最后扫描任务的id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(integer $TaskId) 设置最后扫描任务的id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsSupportDefense() 获取是否支持防御， 0:不支持 1:支持
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsSupportDefense(integer $IsSupportDefense) 设置是否支持防御， 0:不支持 1:支持
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDefenseAttackCount() 获取已防御的攻击次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefenseAttackCount(integer $DefenseAttackCount) 设置已防御的攻击次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirstAppearTime() 获取首次出现时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstAppearTime(string $FirstAppearTime) 设置首次出现时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVulCategory() 获取漏洞类别 1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulCategory(integer $VulCategory) 设置漏洞类别 1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞
注意：此字段可能返回 null，表示取不到有效值。
 */
class VulInfoList extends AbstractModel
{
    /**
     * @var string 漏洞包含的事件id串，多个用“,”分割
     */
    public $Ids;

    /**
     * @var string 漏洞名
     */
    public $Name;

    /**
     * @var integer 0: 待处理 1:忽略  3:已修复  5:检测中 6:修复中  8:修复失败
     */
    public $Status;

    /**
     * @var integer 漏洞id
     */
    public $VulId;

    /**
     * @var string 漏洞披露事件
     */
    public $PublishTime;

    /**
     * @var string 最后检测时间
     */
    public $LastTime;

    /**
     * @var integer 影响主机数
     */
    public $HostCount;

    /**
     * @var integer 漏洞等级 1:低 2:中 3:高 4:严重
     */
    public $Level;

    /**
     * @var integer 废弃字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $From;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Descript;

    /**
     * @var string 废弃字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublishTimeWisteria;

    /**
     * @var string 废弃字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NameWisteria;

    /**
     * @var string 废弃字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DescriptWisteria;

    /**
     * @var string 聚合后事件状态串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusStr;

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
     * @var integer 是否能自动修复且包含能自动修复的主机， 0=否  1=是
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FixSwitch;

    /**
     * @var integer 最后扫描任务的id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

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
     * @var string 首次出现时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstAppearTime;

    /**
     * @var integer 漏洞类别 1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulCategory;

    /**
     * @param string $Ids 漏洞包含的事件id串，多个用“,”分割
     * @param string $Name 漏洞名
     * @param integer $Status 0: 待处理 1:忽略  3:已修复  5:检测中 6:修复中  8:修复失败
     * @param integer $VulId 漏洞id
     * @param string $PublishTime 漏洞披露事件
     * @param string $LastTime 最后检测时间
     * @param integer $HostCount 影响主机数
     * @param integer $Level 漏洞等级 1:低 2:中 3:高 4:严重
     * @param integer $From 废弃字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Descript 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublishTimeWisteria 废弃字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NameWisteria 废弃字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DescriptWisteria 废弃字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusStr 聚合后事件状态串
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CveId cve编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $CvssScore CVSS评分
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Labels 漏洞标签 多个逗号分割
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FixSwitch 是否能自动修复且包含能自动修复的主机， 0=否  1=是
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskId 最后扫描任务的id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsSupportDefense 是否支持防御， 0:不支持 1:支持
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DefenseAttackCount 已防御的攻击次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FirstAppearTime 首次出现时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VulCategory 漏洞类别 1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞
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
        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("Descript",$param) and $param["Descript"] !== null) {
            $this->Descript = $param["Descript"];
        }

        if (array_key_exists("PublishTimeWisteria",$param) and $param["PublishTimeWisteria"] !== null) {
            $this->PublishTimeWisteria = $param["PublishTimeWisteria"];
        }

        if (array_key_exists("NameWisteria",$param) and $param["NameWisteria"] !== null) {
            $this->NameWisteria = $param["NameWisteria"];
        }

        if (array_key_exists("DescriptWisteria",$param) and $param["DescriptWisteria"] !== null) {
            $this->DescriptWisteria = $param["DescriptWisteria"];
        }

        if (array_key_exists("StatusStr",$param) and $param["StatusStr"] !== null) {
            $this->StatusStr = $param["StatusStr"];
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

        if (array_key_exists("FixSwitch",$param) and $param["FixSwitch"] !== null) {
            $this->FixSwitch = $param["FixSwitch"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("IsSupportDefense",$param) and $param["IsSupportDefense"] !== null) {
            $this->IsSupportDefense = $param["IsSupportDefense"];
        }

        if (array_key_exists("DefenseAttackCount",$param) and $param["DefenseAttackCount"] !== null) {
            $this->DefenseAttackCount = $param["DefenseAttackCount"];
        }

        if (array_key_exists("FirstAppearTime",$param) and $param["FirstAppearTime"] !== null) {
            $this->FirstAppearTime = $param["FirstAppearTime"];
        }

        if (array_key_exists("VulCategory",$param) and $param["VulCategory"] !== null) {
            $this->VulCategory = $param["VulCategory"];
        }
    }
}
