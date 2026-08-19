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
 * 资产概览统计信息
 *
 * @method integer getAssetTotalCount() 获取<p>资产总数</p>
 * @method void setAssetTotalCount(integer $AssetTotalCount) 设置<p>资产总数</p>
 * @method integer getAssetAddCount() 获取<p>近7天新增资产数量</p>
 * @method void setAssetAddCount(integer $AssetAddCount) 设置<p>近7天新增资产数量</p>
 * @method integer getRiskAssetCount() 获取<p>有风险资产数量</p>
 * @method void setRiskAssetCount(integer $RiskAssetCount) 设置<p>有风险资产数量</p>
 * @method integer getAlarmAssetCount() 获取<p>有告警资产数量</p>
 * @method void setAlarmAssetCount(integer $AlarmAssetCount) 设置<p>有告警资产数量</p>
 * @method integer getPublicAssetCount() 获取<p>公网资产数量</p>
 * @method void setPublicAssetCount(integer $PublicAssetCount) 设置<p>公网资产数量</p>
 * @method integer getExposeAssetCount() 获取<p>暴露资产数量</p>
 * @method void setExposeAssetCount(integer $ExposeAssetCount) 设置<p>暴露资产数量</p>
 * @method integer getCloudHostAssetCount() 获取<p>主机资产数量</p>
 * @method void setCloudHostAssetCount(integer $CloudHostAssetCount) 设置<p>主机资产数量</p>
 */
class AssetStatisticsInfo extends AbstractModel
{
    /**
     * @var integer <p>资产总数</p>
     */
    public $AssetTotalCount;

    /**
     * @var integer <p>近7天新增资产数量</p>
     */
    public $AssetAddCount;

    /**
     * @var integer <p>有风险资产数量</p>
     */
    public $RiskAssetCount;

    /**
     * @var integer <p>有告警资产数量</p>
     */
    public $AlarmAssetCount;

    /**
     * @var integer <p>公网资产数量</p>
     */
    public $PublicAssetCount;

    /**
     * @var integer <p>暴露资产数量</p>
     */
    public $ExposeAssetCount;

    /**
     * @var integer <p>主机资产数量</p>
     */
    public $CloudHostAssetCount;

    /**
     * @param integer $AssetTotalCount <p>资产总数</p>
     * @param integer $AssetAddCount <p>近7天新增资产数量</p>
     * @param integer $RiskAssetCount <p>有风险资产数量</p>
     * @param integer $AlarmAssetCount <p>有告警资产数量</p>
     * @param integer $PublicAssetCount <p>公网资产数量</p>
     * @param integer $ExposeAssetCount <p>暴露资产数量</p>
     * @param integer $CloudHostAssetCount <p>主机资产数量</p>
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
        if (array_key_exists("AssetTotalCount",$param) and $param["AssetTotalCount"] !== null) {
            $this->AssetTotalCount = $param["AssetTotalCount"];
        }

        if (array_key_exists("AssetAddCount",$param) and $param["AssetAddCount"] !== null) {
            $this->AssetAddCount = $param["AssetAddCount"];
        }

        if (array_key_exists("RiskAssetCount",$param) and $param["RiskAssetCount"] !== null) {
            $this->RiskAssetCount = $param["RiskAssetCount"];
        }

        if (array_key_exists("AlarmAssetCount",$param) and $param["AlarmAssetCount"] !== null) {
            $this->AlarmAssetCount = $param["AlarmAssetCount"];
        }

        if (array_key_exists("PublicAssetCount",$param) and $param["PublicAssetCount"] !== null) {
            $this->PublicAssetCount = $param["PublicAssetCount"];
        }

        if (array_key_exists("ExposeAssetCount",$param) and $param["ExposeAssetCount"] !== null) {
            $this->ExposeAssetCount = $param["ExposeAssetCount"];
        }

        if (array_key_exists("CloudHostAssetCount",$param) and $param["CloudHostAssetCount"] !== null) {
            $this->CloudHostAssetCount = $param["CloudHostAssetCount"];
        }
    }
}
