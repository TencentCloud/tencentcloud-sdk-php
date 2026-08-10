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
 * @method integer getRiskID() 获取<p>风险记录 ID（kb_risk.id）</p>
 * @method void setRiskID(integer $RiskID) 设置<p>风险记录 ID（kb_risk.id）</p>
 * @method KBDetail getKBDetail() 获取<p>Windows KB 补丁详细信息</p>
 * @method void setKBDetail(KBDetail $KBDetail) 设置<p>Windows KB 补丁详细信息</p>
 * @method integer getEffectHostCount() 获取<p>受影响主机数</p>
 * @method void setEffectHostCount(integer $EffectHostCount) 设置<p>受影响主机数</p>
 * @method string getLatestScanTime() 获取<p>最近扫描时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ</p>
 * @method void setLatestScanTime(string $LatestScanTime) 设置<p>最近扫描时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ</p>
 * @method array getAccount() 获取<p>所属账号列表</p>
 * @method void setAccount(array $Account) 设置<p>所属账号列表</p>
 * @method string getRiskStatus() 获取<p>修复状态<br>枚举值：<br>PENDING：待修复<br>SCANNING：扫描中<br>FIXED：已修复<br>IGNORED：已加白<br>FIXING：修复中<br>FIX_FAILED：修复失败</p>
 * @method void setRiskStatus(string $RiskStatus) 设置<p>修复状态<br>枚举值：<br>PENDING：待修复<br>SCANNING：扫描中<br>FIXED：已修复<br>IGNORED：已加白<br>FIXING：修复中<br>FIX_FAILED：修复失败</p>
 */
class HostKBRisk extends AbstractModel
{
    /**
     * @var integer <p>风险记录 ID（kb_risk.id）</p>
     */
    public $RiskID;

    /**
     * @var KBDetail <p>Windows KB 补丁详细信息</p>
     */
    public $KBDetail;

    /**
     * @var integer <p>受影响主机数</p>
     */
    public $EffectHostCount;

    /**
     * @var string <p>最近扫描时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ</p>
     */
    public $LatestScanTime;

    /**
     * @var array <p>所属账号列表</p>
     */
    public $Account;

    /**
     * @var string <p>修复状态<br>枚举值：<br>PENDING：待修复<br>SCANNING：扫描中<br>FIXED：已修复<br>IGNORED：已加白<br>FIXING：修复中<br>FIX_FAILED：修复失败</p>
     */
    public $RiskStatus;

    /**
     * @param integer $RiskID <p>风险记录 ID（kb_risk.id）</p>
     * @param KBDetail $KBDetail <p>Windows KB 补丁详细信息</p>
     * @param integer $EffectHostCount <p>受影响主机数</p>
     * @param string $LatestScanTime <p>最近扫描时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ</p>
     * @param array $Account <p>所属账号列表</p>
     * @param string $RiskStatus <p>修复状态<br>枚举值：<br>PENDING：待修复<br>SCANNING：扫描中<br>FIXED：已修复<br>IGNORED：已加白<br>FIXING：修复中<br>FIX_FAILED：修复失败</p>
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

        if (array_key_exists("KBDetail",$param) and $param["KBDetail"] !== null) {
            $this->KBDetail = new KBDetail();
            $this->KBDetail->deserialize($param["KBDetail"]);
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

        if (array_key_exists("RiskStatus",$param) and $param["RiskStatus"] !== null) {
            $this->RiskStatus = $param["RiskStatus"];
        }
    }
}
