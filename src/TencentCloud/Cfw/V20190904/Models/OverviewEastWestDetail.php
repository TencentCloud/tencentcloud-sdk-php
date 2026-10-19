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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 概览东西向带宽详情
 *
 * @method integer getTotalMbps() 获取<p>东西向总带宽，单位为 Mbps。</p><p>单位：Mbps</p>
 * @method void setTotalMbps(integer $TotalMbps) 设置<p>东西向总带宽，单位为 Mbps。</p><p>单位：Mbps</p>
 * @method integer getUsedBps() 获取<p>当前已使用流量，单位为 bps。</p><p>单位：bps</p>
 * @method void setUsedBps(integer $UsedBps) 设置<p>当前已使用流量，单位为 bps。</p><p>单位：bps</p>
 * @method float getUsagePercent() 获取<p>当前带宽使用率。</p><p>单位：%</p>
 * @method void setUsagePercent(float $UsagePercent) 设置<p>当前带宽使用率。</p><p>单位：%</p>
 * @method integer getAllocatedBandwidthUsedMbps() 获取<p>已分配并使用的带宽，单位为 Mbps。</p><p>单位：Mbps</p>
 * @method void setAllocatedBandwidthUsedMbps(integer $AllocatedBandwidthUsedMbps) 设置<p>已分配并使用的带宽，单位为 Mbps。</p><p>单位：Mbps</p>
 * @method integer getCanUsedBandwidthMbps() 获取<p>当前仍可使用带宽，单位为 Mbps。</p><p>单位：Mbps</p>
 * @method void setCanUsedBandwidthMbps(integer $CanUsedBandwidthMbps) 设置<p>当前仍可使用带宽，单位为 Mbps。</p><p>单位：Mbps</p>
 * @method integer getClusterModeWidthMbps() 获取<p>集群模式带宽，单位为 Mbps。</p><p>单位：Mbps</p>
 * @method void setClusterModeWidthMbps(integer $ClusterModeWidthMbps) 设置<p>集群模式带宽，单位为 Mbps。</p><p>单位：Mbps</p>
 * @method integer getMasterSlaveModeWidthMbps() 获取<p>主备模式带宽，单位为 Mbps。</p><p>单位：Mbps</p>
 * @method void setMasterSlaveModeWidthMbps(integer $MasterSlaveModeWidthMbps) 设置<p>主备模式带宽，单位为 Mbps。</p><p>单位：Mbps</p>
 * @method string getSameRegionFwInsId() 获取<p>同地域防火墙实例 ID。</p>
 * @method void setSameRegionFwInsId(string $SameRegionFwInsId) 设置<p>同地域防火墙实例 ID。</p>
 * @method string getSameRegionFwInsName() 获取<p>同地域防火墙实例名称。</p>
 * @method void setSameRegionFwInsName(string $SameRegionFwInsName) 设置<p>同地域防火墙实例名称。</p>
 * @method integer getSameRegionMaxFlowBps() 获取<p>同地域防火墙实例峰值流量，单位为 bps。</p><p>单位：bps</p>
 * @method void setSameRegionMaxFlowBps(integer $SameRegionMaxFlowBps) 设置<p>同地域防火墙实例峰值流量，单位为 bps。</p><p>单位：bps</p>
 * @method string getDiffRegionFwInsId() 获取<p>跨地域防火墙实例 ID。</p>
 * @method void setDiffRegionFwInsId(string $DiffRegionFwInsId) 设置<p>跨地域防火墙实例 ID。</p>
 * @method string getDiffRegionFwInsName() 获取<p>跨地域防火墙实例名称。</p>
 * @method void setDiffRegionFwInsName(string $DiffRegionFwInsName) 设置<p>跨地域防火墙实例名称。</p>
 * @method integer getDiffRegionMaxFlowBps() 获取<p>跨地域防火墙实例峰值流量，单位为 bps。</p><p>单位：bps</p>
 * @method void setDiffRegionMaxFlowBps(integer $DiffRegionMaxFlowBps) 设置<p>跨地域防火墙实例峰值流量，单位为 bps。</p><p>单位：bps</p>
 * @method string getFwGroupId() 获取<p>防火墙实例组 ID。</p>
 * @method void setFwGroupId(string $FwGroupId) 设置<p>防火墙实例组 ID。</p>
 * @method string getFwGroupName() 获取<p>防火墙实例组名称。</p>
 * @method void setFwGroupName(string $FwGroupName) 设置<p>防火墙实例组名称。</p>
 * @method integer getFwGroupMaxFlowBps() 获取<p>防火墙实例组峰值流量，单位为 bps。</p><p>单位：bps</p>
 * @method void setFwGroupMaxFlowBps(integer $FwGroupMaxFlowBps) 设置<p>防火墙实例组峰值流量，单位为 bps。</p><p>单位：bps</p>
 * @method string getFwInsId() 获取<p>防火墙实例 ID。</p>
 * @method void setFwInsId(string $FwInsId) 设置<p>防火墙实例 ID。</p>
 * @method string getFwInsName() 获取<p>防火墙实例名称。</p>
 * @method void setFwInsName(string $FwInsName) 设置<p>防火墙实例名称。</p>
 * @method integer getFwInsMaxFlowBps() 获取<p>防火墙实例峰值流量，单位为 bps。</p><p>单位：bps</p>
 * @method void setFwInsMaxFlowBps(integer $FwInsMaxFlowBps) 设置<p>防火墙实例峰值流量，单位为 bps。</p><p>单位：bps</p>
 * @method integer getClusterVpcMaxFlowBps() 获取<p>集群 VPC 峰值流量，单位为 bps。</p><p>单位：bps</p>
 * @method void setClusterVpcMaxFlowBps(integer $ClusterVpcMaxFlowBps) 设置<p>集群 VPC 峰值流量，单位为 bps。</p><p>单位：bps</p>
 */
class OverviewEastWestDetail extends AbstractModel
{
    /**
     * @var integer <p>东西向总带宽，单位为 Mbps。</p><p>单位：Mbps</p>
     */
    public $TotalMbps;

    /**
     * @var integer <p>当前已使用流量，单位为 bps。</p><p>单位：bps</p>
     */
    public $UsedBps;

    /**
     * @var float <p>当前带宽使用率。</p><p>单位：%</p>
     */
    public $UsagePercent;

    /**
     * @var integer <p>已分配并使用的带宽，单位为 Mbps。</p><p>单位：Mbps</p>
     */
    public $AllocatedBandwidthUsedMbps;

    /**
     * @var integer <p>当前仍可使用带宽，单位为 Mbps。</p><p>单位：Mbps</p>
     */
    public $CanUsedBandwidthMbps;

    /**
     * @var integer <p>集群模式带宽，单位为 Mbps。</p><p>单位：Mbps</p>
     */
    public $ClusterModeWidthMbps;

    /**
     * @var integer <p>主备模式带宽，单位为 Mbps。</p><p>单位：Mbps</p>
     */
    public $MasterSlaveModeWidthMbps;

    /**
     * @var string <p>同地域防火墙实例 ID。</p>
     */
    public $SameRegionFwInsId;

    /**
     * @var string <p>同地域防火墙实例名称。</p>
     */
    public $SameRegionFwInsName;

    /**
     * @var integer <p>同地域防火墙实例峰值流量，单位为 bps。</p><p>单位：bps</p>
     */
    public $SameRegionMaxFlowBps;

    /**
     * @var string <p>跨地域防火墙实例 ID。</p>
     */
    public $DiffRegionFwInsId;

    /**
     * @var string <p>跨地域防火墙实例名称。</p>
     */
    public $DiffRegionFwInsName;

    /**
     * @var integer <p>跨地域防火墙实例峰值流量，单位为 bps。</p><p>单位：bps</p>
     */
    public $DiffRegionMaxFlowBps;

    /**
     * @var string <p>防火墙实例组 ID。</p>
     */
    public $FwGroupId;

    /**
     * @var string <p>防火墙实例组名称。</p>
     */
    public $FwGroupName;

    /**
     * @var integer <p>防火墙实例组峰值流量，单位为 bps。</p><p>单位：bps</p>
     */
    public $FwGroupMaxFlowBps;

    /**
     * @var string <p>防火墙实例 ID。</p>
     */
    public $FwInsId;

    /**
     * @var string <p>防火墙实例名称。</p>
     */
    public $FwInsName;

    /**
     * @var integer <p>防火墙实例峰值流量，单位为 bps。</p><p>单位：bps</p>
     */
    public $FwInsMaxFlowBps;

    /**
     * @var integer <p>集群 VPC 峰值流量，单位为 bps。</p><p>单位：bps</p>
     */
    public $ClusterVpcMaxFlowBps;

    /**
     * @param integer $TotalMbps <p>东西向总带宽，单位为 Mbps。</p><p>单位：Mbps</p>
     * @param integer $UsedBps <p>当前已使用流量，单位为 bps。</p><p>单位：bps</p>
     * @param float $UsagePercent <p>当前带宽使用率。</p><p>单位：%</p>
     * @param integer $AllocatedBandwidthUsedMbps <p>已分配并使用的带宽，单位为 Mbps。</p><p>单位：Mbps</p>
     * @param integer $CanUsedBandwidthMbps <p>当前仍可使用带宽，单位为 Mbps。</p><p>单位：Mbps</p>
     * @param integer $ClusterModeWidthMbps <p>集群模式带宽，单位为 Mbps。</p><p>单位：Mbps</p>
     * @param integer $MasterSlaveModeWidthMbps <p>主备模式带宽，单位为 Mbps。</p><p>单位：Mbps</p>
     * @param string $SameRegionFwInsId <p>同地域防火墙实例 ID。</p>
     * @param string $SameRegionFwInsName <p>同地域防火墙实例名称。</p>
     * @param integer $SameRegionMaxFlowBps <p>同地域防火墙实例峰值流量，单位为 bps。</p><p>单位：bps</p>
     * @param string $DiffRegionFwInsId <p>跨地域防火墙实例 ID。</p>
     * @param string $DiffRegionFwInsName <p>跨地域防火墙实例名称。</p>
     * @param integer $DiffRegionMaxFlowBps <p>跨地域防火墙实例峰值流量，单位为 bps。</p><p>单位：bps</p>
     * @param string $FwGroupId <p>防火墙实例组 ID。</p>
     * @param string $FwGroupName <p>防火墙实例组名称。</p>
     * @param integer $FwGroupMaxFlowBps <p>防火墙实例组峰值流量，单位为 bps。</p><p>单位：bps</p>
     * @param string $FwInsId <p>防火墙实例 ID。</p>
     * @param string $FwInsName <p>防火墙实例名称。</p>
     * @param integer $FwInsMaxFlowBps <p>防火墙实例峰值流量，单位为 bps。</p><p>单位：bps</p>
     * @param integer $ClusterVpcMaxFlowBps <p>集群 VPC 峰值流量，单位为 bps。</p><p>单位：bps</p>
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
        if (array_key_exists("TotalMbps",$param) and $param["TotalMbps"] !== null) {
            $this->TotalMbps = $param["TotalMbps"];
        }

        if (array_key_exists("UsedBps",$param) and $param["UsedBps"] !== null) {
            $this->UsedBps = $param["UsedBps"];
        }

        if (array_key_exists("UsagePercent",$param) and $param["UsagePercent"] !== null) {
            $this->UsagePercent = $param["UsagePercent"];
        }

        if (array_key_exists("AllocatedBandwidthUsedMbps",$param) and $param["AllocatedBandwidthUsedMbps"] !== null) {
            $this->AllocatedBandwidthUsedMbps = $param["AllocatedBandwidthUsedMbps"];
        }

        if (array_key_exists("CanUsedBandwidthMbps",$param) and $param["CanUsedBandwidthMbps"] !== null) {
            $this->CanUsedBandwidthMbps = $param["CanUsedBandwidthMbps"];
        }

        if (array_key_exists("ClusterModeWidthMbps",$param) and $param["ClusterModeWidthMbps"] !== null) {
            $this->ClusterModeWidthMbps = $param["ClusterModeWidthMbps"];
        }

        if (array_key_exists("MasterSlaveModeWidthMbps",$param) and $param["MasterSlaveModeWidthMbps"] !== null) {
            $this->MasterSlaveModeWidthMbps = $param["MasterSlaveModeWidthMbps"];
        }

        if (array_key_exists("SameRegionFwInsId",$param) and $param["SameRegionFwInsId"] !== null) {
            $this->SameRegionFwInsId = $param["SameRegionFwInsId"];
        }

        if (array_key_exists("SameRegionFwInsName",$param) and $param["SameRegionFwInsName"] !== null) {
            $this->SameRegionFwInsName = $param["SameRegionFwInsName"];
        }

        if (array_key_exists("SameRegionMaxFlowBps",$param) and $param["SameRegionMaxFlowBps"] !== null) {
            $this->SameRegionMaxFlowBps = $param["SameRegionMaxFlowBps"];
        }

        if (array_key_exists("DiffRegionFwInsId",$param) and $param["DiffRegionFwInsId"] !== null) {
            $this->DiffRegionFwInsId = $param["DiffRegionFwInsId"];
        }

        if (array_key_exists("DiffRegionFwInsName",$param) and $param["DiffRegionFwInsName"] !== null) {
            $this->DiffRegionFwInsName = $param["DiffRegionFwInsName"];
        }

        if (array_key_exists("DiffRegionMaxFlowBps",$param) and $param["DiffRegionMaxFlowBps"] !== null) {
            $this->DiffRegionMaxFlowBps = $param["DiffRegionMaxFlowBps"];
        }

        if (array_key_exists("FwGroupId",$param) and $param["FwGroupId"] !== null) {
            $this->FwGroupId = $param["FwGroupId"];
        }

        if (array_key_exists("FwGroupName",$param) and $param["FwGroupName"] !== null) {
            $this->FwGroupName = $param["FwGroupName"];
        }

        if (array_key_exists("FwGroupMaxFlowBps",$param) and $param["FwGroupMaxFlowBps"] !== null) {
            $this->FwGroupMaxFlowBps = $param["FwGroupMaxFlowBps"];
        }

        if (array_key_exists("FwInsId",$param) and $param["FwInsId"] !== null) {
            $this->FwInsId = $param["FwInsId"];
        }

        if (array_key_exists("FwInsName",$param) and $param["FwInsName"] !== null) {
            $this->FwInsName = $param["FwInsName"];
        }

        if (array_key_exists("FwInsMaxFlowBps",$param) and $param["FwInsMaxFlowBps"] !== null) {
            $this->FwInsMaxFlowBps = $param["FwInsMaxFlowBps"];
        }

        if (array_key_exists("ClusterVpcMaxFlowBps",$param) and $param["ClusterVpcMaxFlowBps"] !== null) {
            $this->ClusterVpcMaxFlowBps = $param["ClusterVpcMaxFlowBps"];
        }
    }
}
