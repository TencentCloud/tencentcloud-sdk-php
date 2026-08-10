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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主机漏洞风险
 *
 * @method integer getRiskID() 获取<p>风险记录 ID（host_vul_risk.id）</p>
 * @method void setRiskID(integer $RiskID) 设置<p>风险记录 ID（host_vul_risk.id）</p>
 * @method integer getEffectHostCount() 获取<p>受影响主机数</p>
 * @method void setEffectHostCount(integer $EffectHostCount) 设置<p>受影响主机数</p>
 * @method string getLatestScanTime() 获取<p>最近扫描时间<br>参数格式：YYYY-MM-DD HH:mm:ss</p>
 * @method void setLatestScanTime(string $LatestScanTime) 设置<p>最近扫描时间<br>参数格式：YYYY-MM-DD HH:mm:ss</p>
 * @method array getAccount() 获取<p>所属账号列表</p>
 * @method void setAccount(array $Account) 设置<p>所属账号列表</p>
 * @method string getDefendStatus() 获取<p>漏洞防御状态<br>枚举值：<br>ENABLED：已开启<br>NOT_SUPPORTED：不支持<br>NOT_ENABLED：未开启</p>
 * @method void setDefendStatus(string $DefendStatus) 设置<p>漏洞防御状态<br>枚举值：<br>ENABLED：已开启<br>NOT_SUPPORTED：不支持<br>NOT_ENABLED：未开启</p>
 * @method string getRiskStatus() 获取<p>修复状态<br>枚举值：<br>PENDING：待修复<br>SCANNING：扫描中<br>FIXED：已修复<br>IGNORED：已加白<br>FIXING：修复中<br>FIX_FAILED：修复失败<br>NOTSCAN：未扫描<br>WITHOUT_RISK：无风险<br>NEED_REBOOT：修复待重启</p>
 * @method void setRiskStatus(string $RiskStatus) 设置<p>修复状态<br>枚举值：<br>PENDING：待修复<br>SCANNING：扫描中<br>FIXED：已修复<br>IGNORED：已加白<br>FIXING：修复中<br>FIX_FAILED：修复失败<br>NOTSCAN：未扫描<br>WITHOUT_RISK：无风险<br>NEED_REBOOT：修复待重启</p>
 * @method VulDetailInfo getVulDetail() 获取<p>漏洞详细信息</p>
 * @method void setVulDetail(VulDetailInfo $VulDetail) 设置<p>漏洞详细信息</p>
 */
class HostVulRisk extends AbstractModel
{
    /**
     * @var integer <p>风险记录 ID（host_vul_risk.id）</p>
     */
    public $RiskID;

    /**
     * @var integer <p>受影响主机数</p>
     */
    public $EffectHostCount;

    /**
     * @var string <p>最近扫描时间<br>参数格式：YYYY-MM-DD HH:mm:ss</p>
     */
    public $LatestScanTime;

    /**
     * @var array <p>所属账号列表</p>
     */
    public $Account;

    /**
     * @var string <p>漏洞防御状态<br>枚举值：<br>ENABLED：已开启<br>NOT_SUPPORTED：不支持<br>NOT_ENABLED：未开启</p>
     */
    public $DefendStatus;

    /**
     * @var string <p>修复状态<br>枚举值：<br>PENDING：待修复<br>SCANNING：扫描中<br>FIXED：已修复<br>IGNORED：已加白<br>FIXING：修复中<br>FIX_FAILED：修复失败<br>NOTSCAN：未扫描<br>WITHOUT_RISK：无风险<br>NEED_REBOOT：修复待重启</p>
     */
    public $RiskStatus;

    /**
     * @var VulDetailInfo <p>漏洞详细信息</p>
     */
    public $VulDetail;

    /**
     * @param integer $RiskID <p>风险记录 ID（host_vul_risk.id）</p>
     * @param integer $EffectHostCount <p>受影响主机数</p>
     * @param string $LatestScanTime <p>最近扫描时间<br>参数格式：YYYY-MM-DD HH:mm:ss</p>
     * @param array $Account <p>所属账号列表</p>
     * @param string $DefendStatus <p>漏洞防御状态<br>枚举值：<br>ENABLED：已开启<br>NOT_SUPPORTED：不支持<br>NOT_ENABLED：未开启</p>
     * @param string $RiskStatus <p>修复状态<br>枚举值：<br>PENDING：待修复<br>SCANNING：扫描中<br>FIXED：已修复<br>IGNORED：已加白<br>FIXING：修复中<br>FIX_FAILED：修复失败<br>NOTSCAN：未扫描<br>WITHOUT_RISK：无风险<br>NEED_REBOOT：修复待重启</p>
     * @param VulDetailInfo $VulDetail <p>漏洞详细信息</p>
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
        if (array_key_exists("RiskID",$param) and $param["RiskID"] !== null) {
            $this->RiskID = $param["RiskID"];
        }

        if (array_key_exists("EffectHostCount",$param) and $param["EffectHostCount"] !== null) {
            $this->EffectHostCount = $param["EffectHostCount"];
        }

        if (array_key_exists("LatestScanTime",$param) and $param["LatestScanTime"] !== null) {
            $this->LatestScanTime = $param["LatestScanTime"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = [];
            foreach ($param["Account"] as $key => $value){
                $obj = new AccountBriefInfo();
                $obj->deserialize($value);
                array_push($this->Account, $obj);
            }
        }

        if (array_key_exists("DefendStatus",$param) and $param["DefendStatus"] !== null) {
            $this->DefendStatus = $param["DefendStatus"];
        }

        if (array_key_exists("RiskStatus",$param) and $param["RiskStatus"] !== null) {
            $this->RiskStatus = $param["RiskStatus"];
        }

        if (array_key_exists("VulDetail",$param) and $param["VulDetail"] !== null) {
            $this->VulDetail = new VulDetailInfo();
            $this->VulDetail->deserialize($param["VulDetail"]);
        }
    }
}
