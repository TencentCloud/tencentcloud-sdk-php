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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应急漏洞列表信息
 *
 * @method string getName() 获取漏洞名称
 * @method void setName(string $Name) 设置漏洞名称
 * @method array getTags() 获取漏洞标签
 * @method void setTags(array $Tags) 设置漏洞标签
 * @method float getCVSSV3Score() 获取CVSS V3分数
 * @method void setCVSSV3Score(float $CVSSV3Score) 设置CVSS V3分数
 * @method string getLevel() 获取风险等级
 * @method void setLevel(string $Level) 设置风险等级
 * @method string getCVEID() 获取CVE编号
 * @method void setCVEID(string $CVEID) 设置CVE编号
 * @method string getCategory() 获取漏洞类型
 * @method void setCategory(string $Category) 设置漏洞类型
 * @method string getSubmitTime() 获取漏洞披露时间
 * @method void setSubmitTime(string $SubmitTime) 设置漏洞披露时间
 * @method string getLatestFoundTime() 获取最近发现时间
 * @method void setLatestFoundTime(string $LatestFoundTime) 设置最近发现时间
 * @method string getStatus() 获取应急漏洞风险情况：NOT_SCAN：未扫描，SCANNING：扫描中，SCANNED_NOT_RISK：已扫描，暂未风险 ，SCANNED_RISK：已扫描存在风险
 * @method void setStatus(string $Status) 设置应急漏洞风险情况：NOT_SCAN：未扫描，SCANNING：扫描中，SCANNED_NOT_RISK：已扫描，暂未风险 ，SCANNED_RISK：已扫描存在风险
 * @method integer getID() 获取漏洞ID
 * @method void setID(integer $ID) 设置漏洞ID
 * @method string getPocID() 获取漏洞PocID
 * @method void setPocID(string $PocID) 设置漏洞PocID
 * @method string getDefenceStatus() 获取防御状态，NO_DEFENDED:未防御，DEFENDED:已防御
 * @method void setDefenceStatus(string $DefenceStatus) 设置防御状态，NO_DEFENDED:未防御，DEFENDED:已防御
 * @method string getDefenceScope() 获取漏洞防御主机范围: MANUAL:自选主机节点，ALL:全部
 * @method void setDefenceScope(string $DefenceScope) 设置漏洞防御主机范围: MANUAL:自选主机节点，ALL:全部
 * @method integer getDefenceHostCount() 获取漏洞防御主机数量
 * @method void setDefenceHostCount(integer $DefenceHostCount) 设置漏洞防御主机数量
 * @method integer getDefendedCount() 获取已防御攻击次数
 * @method void setDefendedCount(integer $DefendedCount) 设置已防御攻击次数
 */
class EmergencyVulInfo extends AbstractModel
{
    /**
     * @var string 漏洞名称
     */
    public $Name;

    /**
     * @var array 漏洞标签
     */
    public $Tags;

    /**
     * @var float CVSS V3分数
     */
    public $CVSSV3Score;

    /**
     * @var string 风险等级
     */
    public $Level;

    /**
     * @var string CVE编号
     */
    public $CVEID;

    /**
     * @var string 漏洞类型
     */
    public $Category;

    /**
     * @var string 漏洞披露时间
     */
    public $SubmitTime;

    /**
     * @var string 最近发现时间
     */
    public $LatestFoundTime;

    /**
     * @var string 应急漏洞风险情况：NOT_SCAN：未扫描，SCANNING：扫描中，SCANNED_NOT_RISK：已扫描，暂未风险 ，SCANNED_RISK：已扫描存在风险
     */
    public $Status;

    /**
     * @var integer 漏洞ID
     */
    public $ID;

    /**
     * @var string 漏洞PocID
     */
    public $PocID;

    /**
     * @var string 防御状态，NO_DEFENDED:未防御，DEFENDED:已防御
     */
    public $DefenceStatus;

    /**
     * @var string 漏洞防御主机范围: MANUAL:自选主机节点，ALL:全部
     */
    public $DefenceScope;

    /**
     * @var integer 漏洞防御主机数量
     */
    public $DefenceHostCount;

    /**
     * @var integer 已防御攻击次数
     */
    public $DefendedCount;

    /**
     * @param string $Name 漏洞名称
     * @param array $Tags 漏洞标签
     * @param float $CVSSV3Score CVSS V3分数
     * @param string $Level 风险等级
     * @param string $CVEID CVE编号
     * @param string $Category 漏洞类型
     * @param string $SubmitTime 漏洞披露时间
     * @param string $LatestFoundTime 最近发现时间
     * @param string $Status 应急漏洞风险情况：NOT_SCAN：未扫描，SCANNING：扫描中，SCANNED_NOT_RISK：已扫描，暂未风险 ，SCANNED_RISK：已扫描存在风险
     * @param integer $ID 漏洞ID
     * @param string $PocID 漏洞PocID
     * @param string $DefenceStatus 防御状态，NO_DEFENDED:未防御，DEFENDED:已防御
     * @param string $DefenceScope 漏洞防御主机范围: MANUAL:自选主机节点，ALL:全部
     * @param integer $DefenceHostCount 漏洞防御主机数量
     * @param integer $DefendedCount 已防御攻击次数
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("CVSSV3Score",$param) and $param["CVSSV3Score"] !== null) {
            $this->CVSSV3Score = $param["CVSSV3Score"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("CVEID",$param) and $param["CVEID"] !== null) {
            $this->CVEID = $param["CVEID"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("SubmitTime",$param) and $param["SubmitTime"] !== null) {
            $this->SubmitTime = $param["SubmitTime"];
        }

        if (array_key_exists("LatestFoundTime",$param) and $param["LatestFoundTime"] !== null) {
            $this->LatestFoundTime = $param["LatestFoundTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("PocID",$param) and $param["PocID"] !== null) {
            $this->PocID = $param["PocID"];
        }

        if (array_key_exists("DefenceStatus",$param) and $param["DefenceStatus"] !== null) {
            $this->DefenceStatus = $param["DefenceStatus"];
        }

        if (array_key_exists("DefenceScope",$param) and $param["DefenceScope"] !== null) {
            $this->DefenceScope = $param["DefenceScope"];
        }

        if (array_key_exists("DefenceHostCount",$param) and $param["DefenceHostCount"] !== null) {
            $this->DefenceHostCount = $param["DefenceHostCount"];
        }

        if (array_key_exists("DefendedCount",$param) and $param["DefendedCount"] !== null) {
            $this->DefendedCount = $param["DefendedCount"];
        }
    }
}
