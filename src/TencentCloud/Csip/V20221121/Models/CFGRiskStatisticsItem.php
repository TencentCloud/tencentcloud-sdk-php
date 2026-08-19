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
 * 云资源配置风险统计信息
 *
 * @method integer getTotalRiskCount() 获取<p>风险总数</p>
 * @method void setTotalRiskCount(integer $TotalRiskCount) 设置<p>风险总数</p>
 * @method integer getRiskAddCount() 获取<p>近7天新增风险数量</p>
 * @method void setRiskAddCount(integer $RiskAddCount) 设置<p>近7天新增风险数量</p>
 * @method integer getCheckViewCount() 获取<p>全部云资源配置风险的待修复项</p>
 * @method void setCheckViewCount(integer $CheckViewCount) 设置<p>全部云资源配置风险的待修复项</p>
 * @method integer getHighPriorityRiskCount() 获取<p>高优待修复风险</p>
 * @method void setHighPriorityRiskCount(integer $HighPriorityRiskCount) 设置<p>高优待修复风险</p>
 * @method integer getCheckViewAddCount() 获取<p>近7天新增的待修复项</p>
 * @method void setCheckViewAddCount(integer $CheckViewAddCount) 设置<p>近7天新增的待修复项</p>
 * @method integer getHighPriorityCheckViewCount() 获取<p>全部云资源配置风险的待修复项，高优待修复</p>
 * @method void setHighPriorityCheckViewCount(integer $HighPriorityCheckViewCount) 设置<p>全部云资源配置风险的待修复项，高优待修复</p>
 * @method integer getAssetViewCount() 获取<p>资产视角下的展示条数</p>
 * @method void setAssetViewCount(integer $AssetViewCount) 设置<p>资产视角下的展示条数</p>
 * @method integer getAssetViewAddCount() 获取<p>近7天新增的待修复资产条数</p>
 * @method void setAssetViewAddCount(integer $AssetViewAddCount) 设置<p>近7天新增的待修复资产条数</p>
 * @method integer getHighPriorityAssetViewCount() 获取<p>资产视角下的展示条数，高优待修复量</p>
 * @method void setHighPriorityAssetViewCount(integer $HighPriorityAssetViewCount) 设置<p>资产视角下的展示条数，高优待修复量</p>
 */
class CFGRiskStatisticsItem extends AbstractModel
{
    /**
     * @var integer <p>风险总数</p>
     */
    public $TotalRiskCount;

    /**
     * @var integer <p>近7天新增风险数量</p>
     */
    public $RiskAddCount;

    /**
     * @var integer <p>全部云资源配置风险的待修复项</p>
     */
    public $CheckViewCount;

    /**
     * @var integer <p>高优待修复风险</p>
     */
    public $HighPriorityRiskCount;

    /**
     * @var integer <p>近7天新增的待修复项</p>
     */
    public $CheckViewAddCount;

    /**
     * @var integer <p>全部云资源配置风险的待修复项，高优待修复</p>
     */
    public $HighPriorityCheckViewCount;

    /**
     * @var integer <p>资产视角下的展示条数</p>
     */
    public $AssetViewCount;

    /**
     * @var integer <p>近7天新增的待修复资产条数</p>
     */
    public $AssetViewAddCount;

    /**
     * @var integer <p>资产视角下的展示条数，高优待修复量</p>
     */
    public $HighPriorityAssetViewCount;

    /**
     * @param integer $TotalRiskCount <p>风险总数</p>
     * @param integer $RiskAddCount <p>近7天新增风险数量</p>
     * @param integer $CheckViewCount <p>全部云资源配置风险的待修复项</p>
     * @param integer $HighPriorityRiskCount <p>高优待修复风险</p>
     * @param integer $CheckViewAddCount <p>近7天新增的待修复项</p>
     * @param integer $HighPriorityCheckViewCount <p>全部云资源配置风险的待修复项，高优待修复</p>
     * @param integer $AssetViewCount <p>资产视角下的展示条数</p>
     * @param integer $AssetViewAddCount <p>近7天新增的待修复资产条数</p>
     * @param integer $HighPriorityAssetViewCount <p>资产视角下的展示条数，高优待修复量</p>
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
        if (array_key_exists("TotalRiskCount",$param) and $param["TotalRiskCount"] !== null) {
            $this->TotalRiskCount = $param["TotalRiskCount"];
        }

        if (array_key_exists("RiskAddCount",$param) and $param["RiskAddCount"] !== null) {
            $this->RiskAddCount = $param["RiskAddCount"];
        }

        if (array_key_exists("CheckViewCount",$param) and $param["CheckViewCount"] !== null) {
            $this->CheckViewCount = $param["CheckViewCount"];
        }

        if (array_key_exists("HighPriorityRiskCount",$param) and $param["HighPriorityRiskCount"] !== null) {
            $this->HighPriorityRiskCount = $param["HighPriorityRiskCount"];
        }

        if (array_key_exists("CheckViewAddCount",$param) and $param["CheckViewAddCount"] !== null) {
            $this->CheckViewAddCount = $param["CheckViewAddCount"];
        }

        if (array_key_exists("HighPriorityCheckViewCount",$param) and $param["HighPriorityCheckViewCount"] !== null) {
            $this->HighPriorityCheckViewCount = $param["HighPriorityCheckViewCount"];
        }

        if (array_key_exists("AssetViewCount",$param) and $param["AssetViewCount"] !== null) {
            $this->AssetViewCount = $param["AssetViewCount"];
        }

        if (array_key_exists("AssetViewAddCount",$param) and $param["AssetViewAddCount"] !== null) {
            $this->AssetViewAddCount = $param["AssetViewAddCount"];
        }

        if (array_key_exists("HighPriorityAssetViewCount",$param) and $param["HighPriorityAssetViewCount"] !== null) {
            $this->HighPriorityAssetViewCount = $param["HighPriorityAssetViewCount"];
        }
    }
}
