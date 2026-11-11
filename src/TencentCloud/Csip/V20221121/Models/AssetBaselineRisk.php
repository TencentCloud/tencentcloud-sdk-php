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
 * 资产基线风险
 *
 * @method string getRiskID() 获取<p>风险记录唯一标识。</p>
 * @method void setRiskID(string $RiskID) 设置<p>风险记录唯一标识。</p>
 * @method BaselineItem getItem() 获取<p>检测项详细信息。</p>
 * @method void setItem(BaselineItem $Item) 设置<p>检测项详细信息。</p>
 * @method string getLatestCheckTime() 获取<p>最近一次检测时间（ISO 8601 格式）。</p>
 * @method void setLatestCheckTime(string $LatestCheckTime) 设置<p>最近一次检测时间（ISO 8601 格式）。</p>
 * @method string getResultStatus() 获取<p>检测结果状态。取值：</p><ul><li>NOT_PASS：未通过</li><li>PASS：通过</li><li>CHECKING：检测中</li></ul><p></p>
 * @method void setResultStatus(string $ResultStatus) 设置<p>检测结果状态。取值：</p><ul><li>NOT_PASS：未通过</li><li>PASS：通过</li><li>CHECKING：检测中</li></ul><p></p>
 * @method BaselinePolicyBrief getPolicyInfo() 获取<p>所属基线策略简要信息。</p>
 * @method void setPolicyInfo(BaselinePolicyBrief $PolicyInfo) 设置<p>所属基线策略简要信息。</p>
 */
class AssetBaselineRisk extends AbstractModel
{
    /**
     * @var string <p>风险记录唯一标识。</p>
     */
    public $RiskID;

    /**
     * @var BaselineItem <p>检测项详细信息。</p>
     */
    public $Item;

    /**
     * @var string <p>最近一次检测时间（ISO 8601 格式）。</p>
     */
    public $LatestCheckTime;

    /**
     * @var string <p>检测结果状态。取值：</p><ul><li>NOT_PASS：未通过</li><li>PASS：通过</li><li>CHECKING：检测中</li></ul><p></p>
     */
    public $ResultStatus;

    /**
     * @var BaselinePolicyBrief <p>所属基线策略简要信息。</p>
     */
    public $PolicyInfo;

    /**
     * @param string $RiskID <p>风险记录唯一标识。</p>
     * @param BaselineItem $Item <p>检测项详细信息。</p>
     * @param string $LatestCheckTime <p>最近一次检测时间（ISO 8601 格式）。</p>
     * @param string $ResultStatus <p>检测结果状态。取值：</p><ul><li>NOT_PASS：未通过</li><li>PASS：通过</li><li>CHECKING：检测中</li></ul><p></p>
     * @param BaselinePolicyBrief $PolicyInfo <p>所属基线策略简要信息。</p>
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

        if (array_key_exists("Item",$param) and $param["Item"] !== null) {
            $this->Item = new BaselineItem();
            $this->Item->deserialize($param["Item"]);
        }

        if (array_key_exists("LatestCheckTime",$param) and $param["LatestCheckTime"] !== null) {
            $this->LatestCheckTime = $param["LatestCheckTime"];
        }

        if (array_key_exists("ResultStatus",$param) and $param["ResultStatus"] !== null) {
            $this->ResultStatus = $param["ResultStatus"];
        }

        if (array_key_exists("PolicyInfo",$param) and $param["PolicyInfo"] !== null) {
            $this->PolicyInfo = new BaselinePolicyBrief();
            $this->PolicyInfo->deserialize($param["PolicyInfo"]);
        }
    }
}
