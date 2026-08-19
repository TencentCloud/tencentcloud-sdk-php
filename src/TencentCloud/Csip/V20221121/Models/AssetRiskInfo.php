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
 * 资产关联风险信息
 *
 * @method string getResultType() 获取<p>风险类型</p>
 * @method void setResultType(string $ResultType) 设置<p>风险类型</p>
 * @method integer getRiskCount() 获取<p>总风险数量</p>
 * @method void setRiskCount(integer $RiskCount) 设置<p>总风险数量</p>
 * @method integer getRiskCritical() 获取<p>严重风险数量</p>
 * @method void setRiskCritical(integer $RiskCritical) 设置<p>严重风险数量</p>
 * @method integer getRiskHigh() 获取<p>高风险数量</p>
 * @method void setRiskHigh(integer $RiskHigh) 设置<p>高风险数量</p>
 * @method integer getRiskMedium() 获取<p>中风险数量</p>
 * @method void setRiskMedium(integer $RiskMedium) 设置<p>中风险数量</p>
 * @method integer getRiskLow() 获取<p>低风险数量</p>
 * @method void setRiskLow(integer $RiskLow) 设置<p>低风险数量</p>
 */
class AssetRiskInfo extends AbstractModel
{
    /**
     * @var string <p>风险类型</p>
     */
    public $ResultType;

    /**
     * @var integer <p>总风险数量</p>
     */
    public $RiskCount;

    /**
     * @var integer <p>严重风险数量</p>
     */
    public $RiskCritical;

    /**
     * @var integer <p>高风险数量</p>
     */
    public $RiskHigh;

    /**
     * @var integer <p>中风险数量</p>
     */
    public $RiskMedium;

    /**
     * @var integer <p>低风险数量</p>
     */
    public $RiskLow;

    /**
     * @param string $ResultType <p>风险类型</p>
     * @param integer $RiskCount <p>总风险数量</p>
     * @param integer $RiskCritical <p>严重风险数量</p>
     * @param integer $RiskHigh <p>高风险数量</p>
     * @param integer $RiskMedium <p>中风险数量</p>
     * @param integer $RiskLow <p>低风险数量</p>
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
        if (array_key_exists("ResultType",$param) and $param["ResultType"] !== null) {
            $this->ResultType = $param["ResultType"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("RiskCritical",$param) and $param["RiskCritical"] !== null) {
            $this->RiskCritical = $param["RiskCritical"];
        }

        if (array_key_exists("RiskHigh",$param) and $param["RiskHigh"] !== null) {
            $this->RiskHigh = $param["RiskHigh"];
        }

        if (array_key_exists("RiskMedium",$param) and $param["RiskMedium"] !== null) {
            $this->RiskMedium = $param["RiskMedium"];
        }

        if (array_key_exists("RiskLow",$param) and $param["RiskLow"] !== null) {
            $this->RiskLow = $param["RiskLow"];
        }
    }
}
