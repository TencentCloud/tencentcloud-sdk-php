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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulInfoCvss返回参数结构体
 *
 * @method integer getVulId() 获取漏洞id
 * @method void setVulId(integer $VulId) 设置漏洞id
 * @method string getVulName() 获取漏洞名称
 * @method void setVulName(string $VulName) 设置漏洞名称
 * @method integer getVulLevel() 获取危害等级：1-低危；2-中危；3-高危；4-严重
 * @method void setVulLevel(integer $VulLevel) 设置危害等级：1-低危；2-中危；3-高危；4-严重
 * @method integer getVulType() 获取漏洞分类 1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞
 * @method void setVulType(integer $VulType) 设置漏洞分类 1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞
 * @method string getDescription() 获取漏洞描述信息
 * @method void setDescription(string $Description) 设置漏洞描述信息
 * @method string getRepairPlan() 获取修复方案
 * @method void setRepairPlan(string $RepairPlan) 设置修复方案
 * @method string getCveId() 获取漏洞CVEID
 * @method void setCveId(string $CveId) 设置漏洞CVEID
 * @method string getReference() 获取参考链接
 * @method void setReference(string $Reference) 设置参考链接
 * @method string getCVSS() 获取CVSS信息
 * @method void setCVSS(string $CVSS) 设置CVSS信息
 * @method string getPublicDate() 获取发布时间
 * @method void setPublicDate(string $PublicDate) 设置发布时间
 * @method integer getCvssScore() 获取Cvss分数
 * @method void setCvssScore(integer $CvssScore) 设置Cvss分数
 * @method string getCveInfo() 获取cvss详情
 * @method void setCveInfo(string $CveInfo) 设置cvss详情
 * @method float getCvssScoreFloat() 获取cvss 分数 浮点型
 * @method void setCvssScoreFloat(float $CvssScoreFloat) 设置cvss 分数 浮点型
 * @method string getLabels() 获取漏洞标签 多个逗号分割
 * @method void setLabels(string $Labels) 设置漏洞标签 多个逗号分割
 * @method integer getDefenseAttackCount() 获取已防御的攻击次数
 * @method void setDefenseAttackCount(integer $DefenseAttackCount) 设置已防御的攻击次数
 * @method integer getSuccessFixCount() 获取全网修复成功次数, 不支持自动修复的漏洞默认返回0
 * @method void setSuccessFixCount(integer $SuccessFixCount) 设置全网修复成功次数, 不支持自动修复的漏洞默认返回0
 * @method integer getFixSwitch() 获取修复是否支持：0-windows/linux均不支持修复 ;1-windows/linux 均支持修复 ;2-仅linux支持修复;3-仅windows支持修复
 * @method void setFixSwitch(integer $FixSwitch) 设置修复是否支持：0-windows/linux均不支持修复 ;1-windows/linux 均支持修复 ;2-仅linux支持修复;3-仅windows支持修复
 * @method integer getSupportDefence() 获取是否支持防御： 0-不支持 1-支持
 * @method void setSupportDefence(integer $SupportDefence) 设置是否支持防御： 0-不支持 1-支持
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVulInfoCvssResponse extends AbstractModel
{
    /**
     * @var integer 漏洞id
     */
    public $VulId;

    /**
     * @var string 漏洞名称
     */
    public $VulName;

    /**
     * @var integer 危害等级：1-低危；2-中危；3-高危；4-严重
     */
    public $VulLevel;

    /**
     * @var integer 漏洞分类 1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞
     */
    public $VulType;

    /**
     * @var string 漏洞描述信息
     */
    public $Description;

    /**
     * @var string 修复方案
     */
    public $RepairPlan;

    /**
     * @var string 漏洞CVEID
     */
    public $CveId;

    /**
     * @var string 参考链接
     */
    public $Reference;

    /**
     * @var string CVSS信息
     */
    public $CVSS;

    /**
     * @var string 发布时间
     */
    public $PublicDate;

    /**
     * @var integer Cvss分数
     */
    public $CvssScore;

    /**
     * @var string cvss详情
     */
    public $CveInfo;

    /**
     * @var float cvss 分数 浮点型
     */
    public $CvssScoreFloat;

    /**
     * @var string 漏洞标签 多个逗号分割
     */
    public $Labels;

    /**
     * @var integer 已防御的攻击次数
     */
    public $DefenseAttackCount;

    /**
     * @var integer 全网修复成功次数, 不支持自动修复的漏洞默认返回0
     */
    public $SuccessFixCount;

    /**
     * @var integer 修复是否支持：0-windows/linux均不支持修复 ;1-windows/linux 均支持修复 ;2-仅linux支持修复;3-仅windows支持修复
     */
    public $FixSwitch;

    /**
     * @var integer 是否支持防御： 0-不支持 1-支持
     */
    public $SupportDefence;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $VulId 漏洞id
     * @param string $VulName 漏洞名称
     * @param integer $VulLevel 危害等级：1-低危；2-中危；3-高危；4-严重
     * @param integer $VulType 漏洞分类 1: web-cms漏洞 2:应用漏洞  4: Linux软件漏洞 5: Windows系统漏洞
     * @param string $Description 漏洞描述信息
     * @param string $RepairPlan 修复方案
     * @param string $CveId 漏洞CVEID
     * @param string $Reference 参考链接
     * @param string $CVSS CVSS信息
     * @param string $PublicDate 发布时间
     * @param integer $CvssScore Cvss分数
     * @param string $CveInfo cvss详情
     * @param float $CvssScoreFloat cvss 分数 浮点型
     * @param string $Labels 漏洞标签 多个逗号分割
     * @param integer $DefenseAttackCount 已防御的攻击次数
     * @param integer $SuccessFixCount 全网修复成功次数, 不支持自动修复的漏洞默认返回0
     * @param integer $FixSwitch 修复是否支持：0-windows/linux均不支持修复 ;1-windows/linux 均支持修复 ;2-仅linux支持修复;3-仅windows支持修复
     * @param integer $SupportDefence 是否支持防御： 0-不支持 1-支持
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("VulLevel",$param) and $param["VulLevel"] !== null) {
            $this->VulLevel = $param["VulLevel"];
        }

        if (array_key_exists("VulType",$param) and $param["VulType"] !== null) {
            $this->VulType = $param["VulType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RepairPlan",$param) and $param["RepairPlan"] !== null) {
            $this->RepairPlan = $param["RepairPlan"];
        }

        if (array_key_exists("CveId",$param) and $param["CveId"] !== null) {
            $this->CveId = $param["CveId"];
        }

        if (array_key_exists("Reference",$param) and $param["Reference"] !== null) {
            $this->Reference = $param["Reference"];
        }

        if (array_key_exists("CVSS",$param) and $param["CVSS"] !== null) {
            $this->CVSS = $param["CVSS"];
        }

        if (array_key_exists("PublicDate",$param) and $param["PublicDate"] !== null) {
            $this->PublicDate = $param["PublicDate"];
        }

        if (array_key_exists("CvssScore",$param) and $param["CvssScore"] !== null) {
            $this->CvssScore = $param["CvssScore"];
        }

        if (array_key_exists("CveInfo",$param) and $param["CveInfo"] !== null) {
            $this->CveInfo = $param["CveInfo"];
        }

        if (array_key_exists("CvssScoreFloat",$param) and $param["CvssScoreFloat"] !== null) {
            $this->CvssScoreFloat = $param["CvssScoreFloat"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }

        if (array_key_exists("DefenseAttackCount",$param) and $param["DefenseAttackCount"] !== null) {
            $this->DefenseAttackCount = $param["DefenseAttackCount"];
        }

        if (array_key_exists("SuccessFixCount",$param) and $param["SuccessFixCount"] !== null) {
            $this->SuccessFixCount = $param["SuccessFixCount"];
        }

        if (array_key_exists("FixSwitch",$param) and $param["FixSwitch"] !== null) {
            $this->FixSwitch = $param["FixSwitch"];
        }

        if (array_key_exists("SupportDefence",$param) and $param["SupportDefence"] !== null) {
            $this->SupportDefence = $param["SupportDefence"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
