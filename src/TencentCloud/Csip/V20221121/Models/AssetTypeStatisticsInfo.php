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
 * 资产类型以及存在风险的资产类型数量
 *
 * @method integer getAssetTypeCount() 获取<p>资产类型数量</p>
 * @method void setAssetTypeCount(integer $AssetTypeCount) 设置<p>资产类型数量</p>
 * @method integer getRiskAssetTypeCount() 获取<p>存在风险的资产类型数量</p>
 * @method void setRiskAssetTypeCount(integer $RiskAssetTypeCount) 设置<p>存在风险的资产类型数量</p>
 */
class AssetTypeStatisticsInfo extends AbstractModel
{
    /**
     * @var integer <p>资产类型数量</p>
     */
    public $AssetTypeCount;

    /**
     * @var integer <p>存在风险的资产类型数量</p>
     */
    public $RiskAssetTypeCount;

    /**
     * @param integer $AssetTypeCount <p>资产类型数量</p>
     * @param integer $RiskAssetTypeCount <p>存在风险的资产类型数量</p>
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
        if (array_key_exists("AssetTypeCount",$param) and $param["AssetTypeCount"] !== null) {
            $this->AssetTypeCount = $param["AssetTypeCount"];
        }

        if (array_key_exists("RiskAssetTypeCount",$param) and $param["RiskAssetTypeCount"] !== null) {
            $this->RiskAssetTypeCount = $param["RiskAssetTypeCount"];
        }
    }
}
