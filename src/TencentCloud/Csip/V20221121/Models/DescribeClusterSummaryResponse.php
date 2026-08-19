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
 * DescribeClusterSummary返回参数结构体
 *
 * @method integer getTotalClusterCount() 获取<p>集群总数</p>
 * @method void setTotalClusterCount(integer $TotalClusterCount) 设置<p>集群总数</p>
 * @method integer getAlarmClusterCount() 获取<p>告警集群总数</p>
 * @method void setAlarmClusterCount(integer $AlarmClusterCount) 设置<p>告警集群总数</p>
 * @method integer getRiskClusterCount() 获取<p>风险集群总数</p>
 * @method void setRiskClusterCount(integer $RiskClusterCount) 设置<p>风险集群总数</p>
 * @method integer getTotalNodeCount() 获取<p>节点总数</p>
 * @method void setTotalNodeCount(integer $TotalNodeCount) 设置<p>节点总数</p>
 * @method integer getTotalCoreCount() 获取<p>总核数</p>
 * @method void setTotalCoreCount(integer $TotalCoreCount) 设置<p>总核数</p>
 * @method integer getAlarmEventCount() 获取<p>告警事件总数</p>
 * @method void setAlarmEventCount(integer $AlarmEventCount) 设置<p>告警事件总数</p>
 * @method integer getCriticalAlarmEventCount() 获取<p>严重告警事件数</p>
 * @method void setCriticalAlarmEventCount(integer $CriticalAlarmEventCount) 设置<p>严重告警事件数</p>
 * @method integer getHighAlarmEventCount() 获取<p>高危告警事件数</p>
 * @method void setHighAlarmEventCount(integer $HighAlarmEventCount) 设置<p>高危告警事件数</p>
 * @method integer getMiddleAlarmEventCount() 获取<p>中危告警事件数</p>
 * @method void setMiddleAlarmEventCount(integer $MiddleAlarmEventCount) 设置<p>中危告警事件数</p>
 * @method integer getLowAlarmEventCount() 获取<p>低危告警事件数</p>
 * @method void setLowAlarmEventCount(integer $LowAlarmEventCount) 设置<p>低危告警事件数</p>
 * @method integer getRiskEventCount() 获取<p>风险事件总数</p>
 * @method void setRiskEventCount(integer $RiskEventCount) 设置<p>风险事件总数</p>
 * @method integer getCriticalRiskEventCount() 获取<p>严重风险事件数</p>
 * @method void setCriticalRiskEventCount(integer $CriticalRiskEventCount) 设置<p>严重风险事件数</p>
 * @method integer getHighRiskEventCount() 获取<p>高危风险事件数</p>
 * @method void setHighRiskEventCount(integer $HighRiskEventCount) 设置<p>高危风险事件数</p>
 * @method integer getMiddleRiskEventCount() 获取<p>中危风险事件个数</p>
 * @method void setMiddleRiskEventCount(integer $MiddleRiskEventCount) 设置<p>中危风险事件个数</p>
 * @method integer getLowRiskEventCount() 获取<p>低危风险事件个数</p>
 * @method void setLowRiskEventCount(integer $LowRiskEventCount) 设置<p>低危风险事件个数</p>
 * @method integer getUsedCoreQuota() 获取<p>已使用核数额度</p>
 * @method void setUsedCoreQuota(integer $UsedCoreQuota) 设置<p>已使用核数额度</p>
 * @method integer getPurchasedCoreQuota() 获取<p>已购买核数额度</p>
 * @method void setPurchasedCoreQuota(integer $PurchasedCoreQuota) 设置<p>已购买核数额度</p>
 * @method integer getElasticCoreQuota() 获取<p>弹性计费核数</p>
 * @method void setElasticCoreQuota(integer $ElasticCoreQuota) 设置<p>弹性计费核数</p>
 * @method integer getUnprotectedCoreCount() 获取<p>集群未防护核数</p>
 * @method void setUnprotectedCoreCount(integer $UnprotectedCoreCount) 设置<p>集群未防护核数</p>
 * @method integer getProtectedCoreCount() 获取<p>集群已防护核数</p>
 * @method void setProtectedCoreCount(integer $ProtectedCoreCount) 设置<p>集群已防护核数</p>
 * @method integer getUnprotectedClusterCount() 获取<p>未防护集群数</p>
 * @method void setUnprotectedClusterCount(integer $UnprotectedClusterCount) 设置<p>未防护集群数</p>
 * @method integer getProtectedClusterCount() 获取<p>已防护集群数</p>
 * @method void setProtectedClusterCount(integer $ProtectedClusterCount) 设置<p>已防护集群数</p>
 * @method integer getTkeClusterCount() 获取<p>腾讯云TKE集群数量</p>
 * @method void setTkeClusterCount(integer $TkeClusterCount) 设置<p>腾讯云TKE集群数量</p>
 * @method integer getSelfBuiltClusterCount() 获取<p>自建集群数量</p>
 * @method void setSelfBuiltClusterCount(integer $SelfBuiltClusterCount) 设置<p>自建集群数量</p>
 * @method integer getCriticalAlarmClusterCount() 获取<p>严重告警集群数量</p>
 * @method void setCriticalAlarmClusterCount(integer $CriticalAlarmClusterCount) 设置<p>严重告警集群数量</p>
 * @method integer getHighAlarmClusterCount() 获取<p>高危告警集群数量</p>
 * @method void setHighAlarmClusterCount(integer $HighAlarmClusterCount) 设置<p>高危告警集群数量</p>
 * @method integer getCriticalRiskClusterCount() 获取<p>严重风险集群数</p>
 * @method void setCriticalRiskClusterCount(integer $CriticalRiskClusterCount) 设置<p>严重风险集群数</p>
 * @method integer getHighRiskClusterCount() 获取<p>高危风险集群数量</p>
 * @method void setHighRiskClusterCount(integer $HighRiskClusterCount) 设置<p>高危风险集群数量</p>
 * @method integer getUnboundUltimateNodeCount() 获取<p>未绑定旗舰版节点数量</p>
 * @method void setUnboundUltimateNodeCount(integer $UnboundUltimateNodeCount) 设置<p>未绑定旗舰版节点数量</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeClusterSummaryResponse extends AbstractModel
{
    /**
     * @var integer <p>集群总数</p>
     */
    public $TotalClusterCount;

    /**
     * @var integer <p>告警集群总数</p>
     * @deprecated
     */
    public $AlarmClusterCount;

    /**
     * @var integer <p>风险集群总数</p>
     * @deprecated
     */
    public $RiskClusterCount;

    /**
     * @var integer <p>节点总数</p>
     */
    public $TotalNodeCount;

    /**
     * @var integer <p>总核数</p>
     */
    public $TotalCoreCount;

    /**
     * @var integer <p>告警事件总数</p>
     * @deprecated
     */
    public $AlarmEventCount;

    /**
     * @var integer <p>严重告警事件数</p>
     * @deprecated
     */
    public $CriticalAlarmEventCount;

    /**
     * @var integer <p>高危告警事件数</p>
     * @deprecated
     */
    public $HighAlarmEventCount;

    /**
     * @var integer <p>中危告警事件数</p>
     * @deprecated
     */
    public $MiddleAlarmEventCount;

    /**
     * @var integer <p>低危告警事件数</p>
     * @deprecated
     */
    public $LowAlarmEventCount;

    /**
     * @var integer <p>风险事件总数</p>
     * @deprecated
     */
    public $RiskEventCount;

    /**
     * @var integer <p>严重风险事件数</p>
     * @deprecated
     */
    public $CriticalRiskEventCount;

    /**
     * @var integer <p>高危风险事件数</p>
     * @deprecated
     */
    public $HighRiskEventCount;

    /**
     * @var integer <p>中危风险事件个数</p>
     * @deprecated
     */
    public $MiddleRiskEventCount;

    /**
     * @var integer <p>低危风险事件个数</p>
     * @deprecated
     */
    public $LowRiskEventCount;

    /**
     * @var integer <p>已使用核数额度</p>
     */
    public $UsedCoreQuota;

    /**
     * @var integer <p>已购买核数额度</p>
     */
    public $PurchasedCoreQuota;

    /**
     * @var integer <p>弹性计费核数</p>
     */
    public $ElasticCoreQuota;

    /**
     * @var integer <p>集群未防护核数</p>
     */
    public $UnprotectedCoreCount;

    /**
     * @var integer <p>集群已防护核数</p>
     */
    public $ProtectedCoreCount;

    /**
     * @var integer <p>未防护集群数</p>
     */
    public $UnprotectedClusterCount;

    /**
     * @var integer <p>已防护集群数</p>
     */
    public $ProtectedClusterCount;

    /**
     * @var integer <p>腾讯云TKE集群数量</p>
     */
    public $TkeClusterCount;

    /**
     * @var integer <p>自建集群数量</p>
     */
    public $SelfBuiltClusterCount;

    /**
     * @var integer <p>严重告警集群数量</p>
     * @deprecated
     */
    public $CriticalAlarmClusterCount;

    /**
     * @var integer <p>高危告警集群数量</p>
     * @deprecated
     */
    public $HighAlarmClusterCount;

    /**
     * @var integer <p>严重风险集群数</p>
     * @deprecated
     */
    public $CriticalRiskClusterCount;

    /**
     * @var integer <p>高危风险集群数量</p>
     * @deprecated
     */
    public $HighRiskClusterCount;

    /**
     * @var integer <p>未绑定旗舰版节点数量</p>
     */
    public $UnboundUltimateNodeCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalClusterCount <p>集群总数</p>
     * @param integer $AlarmClusterCount <p>告警集群总数</p>
     * @param integer $RiskClusterCount <p>风险集群总数</p>
     * @param integer $TotalNodeCount <p>节点总数</p>
     * @param integer $TotalCoreCount <p>总核数</p>
     * @param integer $AlarmEventCount <p>告警事件总数</p>
     * @param integer $CriticalAlarmEventCount <p>严重告警事件数</p>
     * @param integer $HighAlarmEventCount <p>高危告警事件数</p>
     * @param integer $MiddleAlarmEventCount <p>中危告警事件数</p>
     * @param integer $LowAlarmEventCount <p>低危告警事件数</p>
     * @param integer $RiskEventCount <p>风险事件总数</p>
     * @param integer $CriticalRiskEventCount <p>严重风险事件数</p>
     * @param integer $HighRiskEventCount <p>高危风险事件数</p>
     * @param integer $MiddleRiskEventCount <p>中危风险事件个数</p>
     * @param integer $LowRiskEventCount <p>低危风险事件个数</p>
     * @param integer $UsedCoreQuota <p>已使用核数额度</p>
     * @param integer $PurchasedCoreQuota <p>已购买核数额度</p>
     * @param integer $ElasticCoreQuota <p>弹性计费核数</p>
     * @param integer $UnprotectedCoreCount <p>集群未防护核数</p>
     * @param integer $ProtectedCoreCount <p>集群已防护核数</p>
     * @param integer $UnprotectedClusterCount <p>未防护集群数</p>
     * @param integer $ProtectedClusterCount <p>已防护集群数</p>
     * @param integer $TkeClusterCount <p>腾讯云TKE集群数量</p>
     * @param integer $SelfBuiltClusterCount <p>自建集群数量</p>
     * @param integer $CriticalAlarmClusterCount <p>严重告警集群数量</p>
     * @param integer $HighAlarmClusterCount <p>高危告警集群数量</p>
     * @param integer $CriticalRiskClusterCount <p>严重风险集群数</p>
     * @param integer $HighRiskClusterCount <p>高危风险集群数量</p>
     * @param integer $UnboundUltimateNodeCount <p>未绑定旗舰版节点数量</p>
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
        if (array_key_exists("TotalClusterCount",$param) and $param["TotalClusterCount"] !== null) {
            $this->TotalClusterCount = $param["TotalClusterCount"];
        }

        if (array_key_exists("AlarmClusterCount",$param) and $param["AlarmClusterCount"] !== null) {
            $this->AlarmClusterCount = $param["AlarmClusterCount"];
        }

        if (array_key_exists("RiskClusterCount",$param) and $param["RiskClusterCount"] !== null) {
            $this->RiskClusterCount = $param["RiskClusterCount"];
        }

        if (array_key_exists("TotalNodeCount",$param) and $param["TotalNodeCount"] !== null) {
            $this->TotalNodeCount = $param["TotalNodeCount"];
        }

        if (array_key_exists("TotalCoreCount",$param) and $param["TotalCoreCount"] !== null) {
            $this->TotalCoreCount = $param["TotalCoreCount"];
        }

        if (array_key_exists("AlarmEventCount",$param) and $param["AlarmEventCount"] !== null) {
            $this->AlarmEventCount = $param["AlarmEventCount"];
        }

        if (array_key_exists("CriticalAlarmEventCount",$param) and $param["CriticalAlarmEventCount"] !== null) {
            $this->CriticalAlarmEventCount = $param["CriticalAlarmEventCount"];
        }

        if (array_key_exists("HighAlarmEventCount",$param) and $param["HighAlarmEventCount"] !== null) {
            $this->HighAlarmEventCount = $param["HighAlarmEventCount"];
        }

        if (array_key_exists("MiddleAlarmEventCount",$param) and $param["MiddleAlarmEventCount"] !== null) {
            $this->MiddleAlarmEventCount = $param["MiddleAlarmEventCount"];
        }

        if (array_key_exists("LowAlarmEventCount",$param) and $param["LowAlarmEventCount"] !== null) {
            $this->LowAlarmEventCount = $param["LowAlarmEventCount"];
        }

        if (array_key_exists("RiskEventCount",$param) and $param["RiskEventCount"] !== null) {
            $this->RiskEventCount = $param["RiskEventCount"];
        }

        if (array_key_exists("CriticalRiskEventCount",$param) and $param["CriticalRiskEventCount"] !== null) {
            $this->CriticalRiskEventCount = $param["CriticalRiskEventCount"];
        }

        if (array_key_exists("HighRiskEventCount",$param) and $param["HighRiskEventCount"] !== null) {
            $this->HighRiskEventCount = $param["HighRiskEventCount"];
        }

        if (array_key_exists("MiddleRiskEventCount",$param) and $param["MiddleRiskEventCount"] !== null) {
            $this->MiddleRiskEventCount = $param["MiddleRiskEventCount"];
        }

        if (array_key_exists("LowRiskEventCount",$param) and $param["LowRiskEventCount"] !== null) {
            $this->LowRiskEventCount = $param["LowRiskEventCount"];
        }

        if (array_key_exists("UsedCoreQuota",$param) and $param["UsedCoreQuota"] !== null) {
            $this->UsedCoreQuota = $param["UsedCoreQuota"];
        }

        if (array_key_exists("PurchasedCoreQuota",$param) and $param["PurchasedCoreQuota"] !== null) {
            $this->PurchasedCoreQuota = $param["PurchasedCoreQuota"];
        }

        if (array_key_exists("ElasticCoreQuota",$param) and $param["ElasticCoreQuota"] !== null) {
            $this->ElasticCoreQuota = $param["ElasticCoreQuota"];
        }

        if (array_key_exists("UnprotectedCoreCount",$param) and $param["UnprotectedCoreCount"] !== null) {
            $this->UnprotectedCoreCount = $param["UnprotectedCoreCount"];
        }

        if (array_key_exists("ProtectedCoreCount",$param) and $param["ProtectedCoreCount"] !== null) {
            $this->ProtectedCoreCount = $param["ProtectedCoreCount"];
        }

        if (array_key_exists("UnprotectedClusterCount",$param) and $param["UnprotectedClusterCount"] !== null) {
            $this->UnprotectedClusterCount = $param["UnprotectedClusterCount"];
        }

        if (array_key_exists("ProtectedClusterCount",$param) and $param["ProtectedClusterCount"] !== null) {
            $this->ProtectedClusterCount = $param["ProtectedClusterCount"];
        }

        if (array_key_exists("TkeClusterCount",$param) and $param["TkeClusterCount"] !== null) {
            $this->TkeClusterCount = $param["TkeClusterCount"];
        }

        if (array_key_exists("SelfBuiltClusterCount",$param) and $param["SelfBuiltClusterCount"] !== null) {
            $this->SelfBuiltClusterCount = $param["SelfBuiltClusterCount"];
        }

        if (array_key_exists("CriticalAlarmClusterCount",$param) and $param["CriticalAlarmClusterCount"] !== null) {
            $this->CriticalAlarmClusterCount = $param["CriticalAlarmClusterCount"];
        }

        if (array_key_exists("HighAlarmClusterCount",$param) and $param["HighAlarmClusterCount"] !== null) {
            $this->HighAlarmClusterCount = $param["HighAlarmClusterCount"];
        }

        if (array_key_exists("CriticalRiskClusterCount",$param) and $param["CriticalRiskClusterCount"] !== null) {
            $this->CriticalRiskClusterCount = $param["CriticalRiskClusterCount"];
        }

        if (array_key_exists("HighRiskClusterCount",$param) and $param["HighRiskClusterCount"] !== null) {
            $this->HighRiskClusterCount = $param["HighRiskClusterCount"];
        }

        if (array_key_exists("UnboundUltimateNodeCount",$param) and $param["UnboundUltimateNodeCount"] !== null) {
            $this->UnboundUltimateNodeCount = $param["UnboundUltimateNodeCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
