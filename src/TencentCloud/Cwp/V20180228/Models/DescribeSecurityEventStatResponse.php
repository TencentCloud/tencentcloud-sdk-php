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
 * DescribeSecurityEventStat返回参数结构体
 *
 * @method EventStat getMalwareStat() 获取木马事件统计
 * @method void setMalwareStat(EventStat $MalwareStat) 设置木马事件统计
 * @method EventStat getHostLoginStat() 获取异地事件统计
 * @method void setHostLoginStat(EventStat $HostLoginStat) 设置异地事件统计
 * @method EventStat getBruteAttackStat() 获取爆破事件统计
 * @method void setBruteAttackStat(EventStat $BruteAttackStat) 设置爆破事件统计
 * @method EventStat getMaliciousRequestStat() 获取恶意请求事件统计
 * @method void setMaliciousRequestStat(EventStat $MaliciousRequestStat) 设置恶意请求事件统计
 * @method EventStat getPrivilegeStat() 获取本地提权事件统计
 * @method void setPrivilegeStat(EventStat $PrivilegeStat) 设置本地提权事件统计
 * @method EventStat getReverseShellStat() 获取反弹Shell事件统计
 * @method void setReverseShellStat(EventStat $ReverseShellStat) 设置反弹Shell事件统计
 * @method EventStat getHighRiskBashStat() 获取高危命令事件统计
 * @method void setHighRiskBashStat(EventStat $HighRiskBashStat) 设置高危命令事件统计
 * @method EventStat getAttackLogsStat() 获取网络攻击事件统计
 * @method void setAttackLogsStat(EventStat $AttackLogsStat) 设置网络攻击事件统计
 * @method EventStat getVulHighStat() 获取高危漏洞事件统计
 * @method void setVulHighStat(EventStat $VulHighStat) 设置高危漏洞事件统计
 * @method EventStat getVulNormalStat() 获取中危漏洞事件统计
 * @method void setVulNormalStat(EventStat $VulNormalStat) 设置中危漏洞事件统计
 * @method EventStat getVulLowStat() 获取低危漏洞事件统计
 * @method void setVulLowStat(EventStat $VulLowStat) 设置低危漏洞事件统计
 * @method EventStat getBaselineHighStat() 获取高危基线漏洞事件统计
 * @method void setBaselineHighStat(EventStat $BaselineHighStat) 设置高危基线漏洞事件统计
 * @method EventStat getBaselineNormalStat() 获取中危基线漏事件统计
 * @method void setBaselineNormalStat(EventStat $BaselineNormalStat) 设置中危基线漏事件统计
 * @method EventStat getBaselineLowStat() 获取低危基线漏事件统计
 * @method void setBaselineLowStat(EventStat $BaselineLowStat) 设置低危基线漏事件统计
 * @method integer getMachineTotalAffectNum() 获取有未处理安全事件的机器总数
 * @method void setMachineTotalAffectNum(integer $MachineTotalAffectNum) 设置有未处理安全事件的机器总数
 * @method integer getInvasionTotalAffectNum() 获取有未处理入侵安全事件的机器总数
 * @method void setInvasionTotalAffectNum(integer $InvasionTotalAffectNum) 设置有未处理入侵安全事件的机器总数
 * @method integer getVulTotalAffectNum() 获取有未处理漏洞安全事件的机器总数
 * @method void setVulTotalAffectNum(integer $VulTotalAffectNum) 设置有未处理漏洞安全事件的机器总数
 * @method integer getBaseLineTotalAffectNum() 获取有未处理基线安全事件的机器总数
 * @method void setBaseLineTotalAffectNum(integer $BaseLineTotalAffectNum) 设置有未处理基线安全事件的机器总数
 * @method integer getCyberAttackTotalAffectNum() 获取有未处理网络攻击安全事件的机器总数
 * @method void setCyberAttackTotalAffectNum(integer $CyberAttackTotalAffectNum) 设置有未处理网络攻击安全事件的机器总数
 * @method EventStat getVulRiskStat() 获取严重漏洞事件统计
 * @method void setVulRiskStat(EventStat $VulRiskStat) 设置严重漏洞事件统计
 * @method EventStat getBaselineRiskStat() 获取严重基线漏洞事件统计
 * @method void setBaselineRiskStat(EventStat $BaselineRiskStat) 设置严重基线漏洞事件统计
 * @method EventStat getVulStat() 获取漏洞数统计
 * @method void setVulStat(EventStat $VulStat) 设置漏洞数统计
 * @method integer getScore() 获取安全得分
 * @method void setScore(integer $Score) 设置安全得分
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSecurityEventStatResponse extends AbstractModel
{
    /**
     * @var EventStat 木马事件统计
     */
    public $MalwareStat;

    /**
     * @var EventStat 异地事件统计
     */
    public $HostLoginStat;

    /**
     * @var EventStat 爆破事件统计
     */
    public $BruteAttackStat;

    /**
     * @var EventStat 恶意请求事件统计
     */
    public $MaliciousRequestStat;

    /**
     * @var EventStat 本地提权事件统计
     */
    public $PrivilegeStat;

    /**
     * @var EventStat 反弹Shell事件统计
     */
    public $ReverseShellStat;

    /**
     * @var EventStat 高危命令事件统计
     */
    public $HighRiskBashStat;

    /**
     * @var EventStat 网络攻击事件统计
     */
    public $AttackLogsStat;

    /**
     * @var EventStat 高危漏洞事件统计
     */
    public $VulHighStat;

    /**
     * @var EventStat 中危漏洞事件统计
     */
    public $VulNormalStat;

    /**
     * @var EventStat 低危漏洞事件统计
     */
    public $VulLowStat;

    /**
     * @var EventStat 高危基线漏洞事件统计
     */
    public $BaselineHighStat;

    /**
     * @var EventStat 中危基线漏事件统计
     */
    public $BaselineNormalStat;

    /**
     * @var EventStat 低危基线漏事件统计
     */
    public $BaselineLowStat;

    /**
     * @var integer 有未处理安全事件的机器总数
     */
    public $MachineTotalAffectNum;

    /**
     * @var integer 有未处理入侵安全事件的机器总数
     */
    public $InvasionTotalAffectNum;

    /**
     * @var integer 有未处理漏洞安全事件的机器总数
     */
    public $VulTotalAffectNum;

    /**
     * @var integer 有未处理基线安全事件的机器总数
     */
    public $BaseLineTotalAffectNum;

    /**
     * @var integer 有未处理网络攻击安全事件的机器总数
     */
    public $CyberAttackTotalAffectNum;

    /**
     * @var EventStat 严重漏洞事件统计
     */
    public $VulRiskStat;

    /**
     * @var EventStat 严重基线漏洞事件统计
     */
    public $BaselineRiskStat;

    /**
     * @var EventStat 漏洞数统计
     */
    public $VulStat;

    /**
     * @var integer 安全得分
     */
    public $Score;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param EventStat $MalwareStat 木马事件统计
     * @param EventStat $HostLoginStat 异地事件统计
     * @param EventStat $BruteAttackStat 爆破事件统计
     * @param EventStat $MaliciousRequestStat 恶意请求事件统计
     * @param EventStat $PrivilegeStat 本地提权事件统计
     * @param EventStat $ReverseShellStat 反弹Shell事件统计
     * @param EventStat $HighRiskBashStat 高危命令事件统计
     * @param EventStat $AttackLogsStat 网络攻击事件统计
     * @param EventStat $VulHighStat 高危漏洞事件统计
     * @param EventStat $VulNormalStat 中危漏洞事件统计
     * @param EventStat $VulLowStat 低危漏洞事件统计
     * @param EventStat $BaselineHighStat 高危基线漏洞事件统计
     * @param EventStat $BaselineNormalStat 中危基线漏事件统计
     * @param EventStat $BaselineLowStat 低危基线漏事件统计
     * @param integer $MachineTotalAffectNum 有未处理安全事件的机器总数
     * @param integer $InvasionTotalAffectNum 有未处理入侵安全事件的机器总数
     * @param integer $VulTotalAffectNum 有未处理漏洞安全事件的机器总数
     * @param integer $BaseLineTotalAffectNum 有未处理基线安全事件的机器总数
     * @param integer $CyberAttackTotalAffectNum 有未处理网络攻击安全事件的机器总数
     * @param EventStat $VulRiskStat 严重漏洞事件统计
     * @param EventStat $BaselineRiskStat 严重基线漏洞事件统计
     * @param EventStat $VulStat 漏洞数统计
     * @param integer $Score 安全得分
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("MalwareStat",$param) and $param["MalwareStat"] !== null) {
            $this->MalwareStat = new EventStat();
            $this->MalwareStat->deserialize($param["MalwareStat"]);
        }

        if (array_key_exists("HostLoginStat",$param) and $param["HostLoginStat"] !== null) {
            $this->HostLoginStat = new EventStat();
            $this->HostLoginStat->deserialize($param["HostLoginStat"]);
        }

        if (array_key_exists("BruteAttackStat",$param) and $param["BruteAttackStat"] !== null) {
            $this->BruteAttackStat = new EventStat();
            $this->BruteAttackStat->deserialize($param["BruteAttackStat"]);
        }

        if (array_key_exists("MaliciousRequestStat",$param) and $param["MaliciousRequestStat"] !== null) {
            $this->MaliciousRequestStat = new EventStat();
            $this->MaliciousRequestStat->deserialize($param["MaliciousRequestStat"]);
        }

        if (array_key_exists("PrivilegeStat",$param) and $param["PrivilegeStat"] !== null) {
            $this->PrivilegeStat = new EventStat();
            $this->PrivilegeStat->deserialize($param["PrivilegeStat"]);
        }

        if (array_key_exists("ReverseShellStat",$param) and $param["ReverseShellStat"] !== null) {
            $this->ReverseShellStat = new EventStat();
            $this->ReverseShellStat->deserialize($param["ReverseShellStat"]);
        }

        if (array_key_exists("HighRiskBashStat",$param) and $param["HighRiskBashStat"] !== null) {
            $this->HighRiskBashStat = new EventStat();
            $this->HighRiskBashStat->deserialize($param["HighRiskBashStat"]);
        }

        if (array_key_exists("AttackLogsStat",$param) and $param["AttackLogsStat"] !== null) {
            $this->AttackLogsStat = new EventStat();
            $this->AttackLogsStat->deserialize($param["AttackLogsStat"]);
        }

        if (array_key_exists("VulHighStat",$param) and $param["VulHighStat"] !== null) {
            $this->VulHighStat = new EventStat();
            $this->VulHighStat->deserialize($param["VulHighStat"]);
        }

        if (array_key_exists("VulNormalStat",$param) and $param["VulNormalStat"] !== null) {
            $this->VulNormalStat = new EventStat();
            $this->VulNormalStat->deserialize($param["VulNormalStat"]);
        }

        if (array_key_exists("VulLowStat",$param) and $param["VulLowStat"] !== null) {
            $this->VulLowStat = new EventStat();
            $this->VulLowStat->deserialize($param["VulLowStat"]);
        }

        if (array_key_exists("BaselineHighStat",$param) and $param["BaselineHighStat"] !== null) {
            $this->BaselineHighStat = new EventStat();
            $this->BaselineHighStat->deserialize($param["BaselineHighStat"]);
        }

        if (array_key_exists("BaselineNormalStat",$param) and $param["BaselineNormalStat"] !== null) {
            $this->BaselineNormalStat = new EventStat();
            $this->BaselineNormalStat->deserialize($param["BaselineNormalStat"]);
        }

        if (array_key_exists("BaselineLowStat",$param) and $param["BaselineLowStat"] !== null) {
            $this->BaselineLowStat = new EventStat();
            $this->BaselineLowStat->deserialize($param["BaselineLowStat"]);
        }

        if (array_key_exists("MachineTotalAffectNum",$param) and $param["MachineTotalAffectNum"] !== null) {
            $this->MachineTotalAffectNum = $param["MachineTotalAffectNum"];
        }

        if (array_key_exists("InvasionTotalAffectNum",$param) and $param["InvasionTotalAffectNum"] !== null) {
            $this->InvasionTotalAffectNum = $param["InvasionTotalAffectNum"];
        }

        if (array_key_exists("VulTotalAffectNum",$param) and $param["VulTotalAffectNum"] !== null) {
            $this->VulTotalAffectNum = $param["VulTotalAffectNum"];
        }

        if (array_key_exists("BaseLineTotalAffectNum",$param) and $param["BaseLineTotalAffectNum"] !== null) {
            $this->BaseLineTotalAffectNum = $param["BaseLineTotalAffectNum"];
        }

        if (array_key_exists("CyberAttackTotalAffectNum",$param) and $param["CyberAttackTotalAffectNum"] !== null) {
            $this->CyberAttackTotalAffectNum = $param["CyberAttackTotalAffectNum"];
        }

        if (array_key_exists("VulRiskStat",$param) and $param["VulRiskStat"] !== null) {
            $this->VulRiskStat = new EventStat();
            $this->VulRiskStat->deserialize($param["VulRiskStat"]);
        }

        if (array_key_exists("BaselineRiskStat",$param) and $param["BaselineRiskStat"] !== null) {
            $this->BaselineRiskStat = new EventStat();
            $this->BaselineRiskStat->deserialize($param["BaselineRiskStat"]);
        }

        if (array_key_exists("VulStat",$param) and $param["VulStat"] !== null) {
            $this->VulStat = new EventStat();
            $this->VulStat->deserialize($param["VulStat"]);
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
