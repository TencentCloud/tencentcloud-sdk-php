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
 * 集群列表项
 *
 * @method integer getAppID() 获取<p>appid</p>
 * @method void setAppID(integer $AppID) 设置<p>appid</p>
 * @method string getAssetId() 获取<p>资产id</p>
 * @method void setAssetId(string $AssetId) 设置<p>资产id</p>
 * @method string getClusterId() 获取<p>集群id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群id</p>
 * @method string getClusterName() 获取<p>集群名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p>
 * @method string getClusterType() 获取<p>集群类型<br>MANAGED_CLUSTER: 托管集群</p>
 * @method void setClusterType(string $ClusterType) 设置<p>集群类型<br>MANAGED_CLUSTER: 托管集群</p>
 * @method integer getAlarmEventCriticalCount() 获取<p>严重告警事件数</p>
 * @method void setAlarmEventCriticalCount(integer $AlarmEventCriticalCount) 设置<p>严重告警事件数</p>
 * @method integer getAlarmEventHighCount() 获取<p>高危告警事件数</p>
 * @method void setAlarmEventHighCount(integer $AlarmEventHighCount) 设置<p>高危告警事件数</p>
 * @method integer getAlarmEventMiddleCount() 获取<p>中危告警事件数</p>
 * @method void setAlarmEventMiddleCount(integer $AlarmEventMiddleCount) 设置<p>中危告警事件数</p>
 * @method integer getAlarmEventLowCount() 获取<p>低危告警事件数</p>
 * @method void setAlarmEventLowCount(integer $AlarmEventLowCount) 设置<p>低危告警事件数</p>
 * @method integer getRiskEventCriticalCount() 获取<p>严重风险事件数</p>
 * @method void setRiskEventCriticalCount(integer $RiskEventCriticalCount) 设置<p>严重风险事件数</p>
 * @method integer getRiskEventHighCount() 获取<p>高危风险事件数</p>
 * @method void setRiskEventHighCount(integer $RiskEventHighCount) 设置<p>高危风险事件数</p>
 * @method integer getRiskEventMiddleCount() 获取<p>中危风险事件数</p>
 * @method void setRiskEventMiddleCount(integer $RiskEventMiddleCount) 设置<p>中危风险事件数</p>
 * @method integer getRiskEventLowCount() 获取<p>低危风险事件数</p>
 * @method void setRiskEventLowCount(integer $RiskEventLowCount) 设置<p>低危风险事件数</p>
 * @method integer getNodeCount() 获取<p>节点总数</p>
 * @method void setNodeCount(integer $NodeCount) 设置<p>节点总数</p>
 * @method integer getOfflineNodeCount() 获取<p>离线节点总数</p>
 * @method void setOfflineNodeCount(integer $OfflineNodeCount) 设置<p>离线节点总数</p>
 * @method integer getUninstallNodeCount() 获取<p>未安装节点总数</p>
 * @method void setUninstallNodeCount(integer $UninstallNodeCount) 设置<p>未安装节点总数</p>
 * @method integer getTotalCoresCount() 获取<p>总核数</p>
 * @method void setTotalCoresCount(integer $TotalCoresCount) 设置<p>总核数</p>
 * @method integer getDefendCoresCount() 获取<p>已防护核数</p>
 * @method void setDefendCoresCount(integer $DefendCoresCount) 设置<p>已防护核数</p>
 * @method integer getAuditLogSwitchStatus() 获取<p>审计日志开关<br>(0:关闭 1:开启 2:开启失败 3:关闭失败)</p>
 * @method void setAuditLogSwitchStatus(integer $AuditLogSwitchStatus) 设置<p>审计日志开关<br>(0:关闭 1:开启 2:开启失败 3:关闭失败)</p>
 * @method string getDefendStatus() 获取<p>防护状态<br>已防护: Defended</p>
 * @method void setDefendStatus(string $DefendStatus) 设置<p>防护状态<br>已防护: Defended</p>
 * @method string getRunStatus() 获取<p>集群状态</p>
 * @method void setRunStatus(string $RunStatus) 设置<p>集群状态</p>
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method string getVersion() 获取<p>k8s版本</p>
 * @method void setVersion(string $Version) 设置<p>k8s版本</p>
 * @method string getLastAssetSyncTime() 获取<p>最近资产同步时间</p>
 * @method void setLastAssetSyncTime(string $LastAssetSyncTime) 设置<p>最近资产同步时间</p>
 * @method string getLastRiskCheckTime() 获取<p>最近风险检查时间</p>
 * @method void setLastRiskCheckTime(string $LastRiskCheckTime) 设置<p>最近风险检查时间</p>
 * @method string getRiskStatus() 获取<p>风险状态</p>
 * @method void setRiskStatus(string $RiskStatus) 设置<p>风险状态</p>
 * @method array getTags() 获取<p>标签列表</p>
 * @method void setTags(array $Tags) 设置<p>标签列表</p>
 * @method string getOwnerName() 获取<p>负责人名称</p>
 * @method void setOwnerName(string $OwnerName) 设置<p>负责人名称</p>
 * @method string getFailMessage() 获取<p>失败原因</p>
 * @method void setFailMessage(string $FailMessage) 设置<p>失败原因</p>
 * @method string getRunSubStatus() 获取<p>运行子状态</p>
 * @method void setRunSubStatus(string $RunSubStatus) 设置<p>运行子状态</p>
 * @method string getAccessedStatus() 获取<p>集群接入状态</p><p>枚举值：</p><ul><li>AccessedNone： 未接入</li><li>AccessedInstalling： 接入中</li><li>AccessedInstalled： 已接入-未防护</li><li>AccessedUninstalling： 卸载中</li><li>AccessedUninstallException： 卸载异常</li><li>AccessedDefended： 已接入-已防护</li><li>AccessedPartialDefence： 已接入-部分防护</li><li>AccessedException： 接入异常</li></ul>
 * @method void setAccessedStatus(string $AccessedStatus) 设置<p>集群接入状态</p><p>枚举值：</p><ul><li>AccessedNone： 未接入</li><li>AccessedInstalling： 接入中</li><li>AccessedInstalled： 已接入-未防护</li><li>AccessedUninstalling： 卸载中</li><li>AccessedUninstallException： 卸载异常</li><li>AccessedDefended： 已接入-已防护</li><li>AccessedPartialDefence： 已接入-部分防护</li><li>AccessedException： 接入异常</li></ul>
 * @method string getAccessedSubStatus() 获取<p>接入子状态</p>
 * @method void setAccessedSubStatus(string $AccessedSubStatus) 设置<p>接入子状态</p>
 * @method string getClusterCaMD5() 获取<p>集群ca证书md5值，集群唯一标识</p>
 * @method void setClusterCaMD5(string $ClusterCaMD5) 设置<p>集群ca证书md5值，集群唯一标识</p>
 * @method string getAssetSyncStatus() 获取<p>资产同步状态</p><p>枚举值：</p><ul><li>AssetCheckNone： 初始状态</li><li>AssetCheckSync： 同步中</li><li>AssetCheckFinished： 同步完成</li><li>AssetCheckFailed： 同步失败</li></ul>
 * @method void setAssetSyncStatus(string $AssetSyncStatus) 设置<p>资产同步状态</p><p>枚举值：</p><ul><li>AssetCheckNone： 初始状态</li><li>AssetCheckSync： 同步中</li><li>AssetCheckFinished： 同步完成</li><li>AssetCheckFailed： 同步失败</li></ul>
 * @method integer getRiskConfigCount() 获取<p>集群配置风险数量</p>
 * @method void setRiskConfigCount(integer $RiskConfigCount) 设置<p>集群配置风险数量</p>
 * @method string getAccessFailedMessage() 获取<p>集群接入失败原因</p>
 * @method void setAccessFailedMessage(string $AccessFailedMessage) 设置<p>集群接入失败原因</p>
 * @method string getRegionName() 获取<p>地域中文名</p>
 * @method void setRegionName(string $RegionName) 设置<p>地域中文名</p>
 * @method string getRegionNameEn() 获取<p>地域英文名</p>
 * @method void setRegionNameEn(string $RegionNameEn) 设置<p>地域英文名</p>
 * @method integer getUnboundUltimateNodeCount() 获取<p>未绑定旗舰版的节点数量</p>
 * @method void setUnboundUltimateNodeCount(integer $UnboundUltimateNodeCount) 设置<p>未绑定旗舰版的节点数量</p>
 */
class ClusterListItem extends AbstractModel
{
    /**
     * @var integer <p>appid</p>
     */
    public $AppID;

    /**
     * @var string <p>资产id</p>
     * @deprecated
     */
    public $AssetId;

    /**
     * @var string <p>集群id</p>
     */
    public $ClusterId;

    /**
     * @var string <p>集群名称</p>
     */
    public $ClusterName;

    /**
     * @var string <p>集群类型<br>MANAGED_CLUSTER: 托管集群</p>
     */
    public $ClusterType;

    /**
     * @var integer <p>严重告警事件数</p>
     * @deprecated
     */
    public $AlarmEventCriticalCount;

    /**
     * @var integer <p>高危告警事件数</p>
     * @deprecated
     */
    public $AlarmEventHighCount;

    /**
     * @var integer <p>中危告警事件数</p>
     * @deprecated
     */
    public $AlarmEventMiddleCount;

    /**
     * @var integer <p>低危告警事件数</p>
     * @deprecated
     */
    public $AlarmEventLowCount;

    /**
     * @var integer <p>严重风险事件数</p>
     * @deprecated
     */
    public $RiskEventCriticalCount;

    /**
     * @var integer <p>高危风险事件数</p>
     * @deprecated
     */
    public $RiskEventHighCount;

    /**
     * @var integer <p>中危风险事件数</p>
     * @deprecated
     */
    public $RiskEventMiddleCount;

    /**
     * @var integer <p>低危风险事件数</p>
     * @deprecated
     */
    public $RiskEventLowCount;

    /**
     * @var integer <p>节点总数</p>
     */
    public $NodeCount;

    /**
     * @var integer <p>离线节点总数</p>
     */
    public $OfflineNodeCount;

    /**
     * @var integer <p>未安装节点总数</p>
     */
    public $UninstallNodeCount;

    /**
     * @var integer <p>总核数</p>
     */
    public $TotalCoresCount;

    /**
     * @var integer <p>已防护核数</p>
     * @deprecated
     */
    public $DefendCoresCount;

    /**
     * @var integer <p>审计日志开关<br>(0:关闭 1:开启 2:开启失败 3:关闭失败)</p>
     */
    public $AuditLogSwitchStatus;

    /**
     * @var string <p>防护状态<br>已防护: Defended</p>
     */
    public $DefendStatus;

    /**
     * @var string <p>集群状态</p>
     */
    public $RunStatus;

    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var string <p>k8s版本</p>
     */
    public $Version;

    /**
     * @var string <p>最近资产同步时间</p>
     */
    public $LastAssetSyncTime;

    /**
     * @var string <p>最近风险检查时间</p>
     */
    public $LastRiskCheckTime;

    /**
     * @var string <p>风险状态</p>
     */
    public $RiskStatus;

    /**
     * @var array <p>标签列表</p>
     */
    public $Tags;

    /**
     * @var string <p>负责人名称</p>
     */
    public $OwnerName;

    /**
     * @var string <p>失败原因</p>
     */
    public $FailMessage;

    /**
     * @var string <p>运行子状态</p>
     */
    public $RunSubStatus;

    /**
     * @var string <p>集群接入状态</p><p>枚举值：</p><ul><li>AccessedNone： 未接入</li><li>AccessedInstalling： 接入中</li><li>AccessedInstalled： 已接入-未防护</li><li>AccessedUninstalling： 卸载中</li><li>AccessedUninstallException： 卸载异常</li><li>AccessedDefended： 已接入-已防护</li><li>AccessedPartialDefence： 已接入-部分防护</li><li>AccessedException： 接入异常</li></ul>
     */
    public $AccessedStatus;

    /**
     * @var string <p>接入子状态</p>
     */
    public $AccessedSubStatus;

    /**
     * @var string <p>集群ca证书md5值，集群唯一标识</p>
     */
    public $ClusterCaMD5;

    /**
     * @var string <p>资产同步状态</p><p>枚举值：</p><ul><li>AssetCheckNone： 初始状态</li><li>AssetCheckSync： 同步中</li><li>AssetCheckFinished： 同步完成</li><li>AssetCheckFailed： 同步失败</li></ul>
     */
    public $AssetSyncStatus;

    /**
     * @var integer <p>集群配置风险数量</p>
     * @deprecated
     */
    public $RiskConfigCount;

    /**
     * @var string <p>集群接入失败原因</p>
     * @deprecated
     */
    public $AccessFailedMessage;

    /**
     * @var string <p>地域中文名</p>
     */
    public $RegionName;

    /**
     * @var string <p>地域英文名</p>
     */
    public $RegionNameEn;

    /**
     * @var integer <p>未绑定旗舰版的节点数量</p>
     */
    public $UnboundUltimateNodeCount;

    /**
     * @param integer $AppID <p>appid</p>
     * @param string $AssetId <p>资产id</p>
     * @param string $ClusterId <p>集群id</p>
     * @param string $ClusterName <p>集群名称</p>
     * @param string $ClusterType <p>集群类型<br>MANAGED_CLUSTER: 托管集群</p>
     * @param integer $AlarmEventCriticalCount <p>严重告警事件数</p>
     * @param integer $AlarmEventHighCount <p>高危告警事件数</p>
     * @param integer $AlarmEventMiddleCount <p>中危告警事件数</p>
     * @param integer $AlarmEventLowCount <p>低危告警事件数</p>
     * @param integer $RiskEventCriticalCount <p>严重风险事件数</p>
     * @param integer $RiskEventHighCount <p>高危风险事件数</p>
     * @param integer $RiskEventMiddleCount <p>中危风险事件数</p>
     * @param integer $RiskEventLowCount <p>低危风险事件数</p>
     * @param integer $NodeCount <p>节点总数</p>
     * @param integer $OfflineNodeCount <p>离线节点总数</p>
     * @param integer $UninstallNodeCount <p>未安装节点总数</p>
     * @param integer $TotalCoresCount <p>总核数</p>
     * @param integer $DefendCoresCount <p>已防护核数</p>
     * @param integer $AuditLogSwitchStatus <p>审计日志开关<br>(0:关闭 1:开启 2:开启失败 3:关闭失败)</p>
     * @param string $DefendStatus <p>防护状态<br>已防护: Defended</p>
     * @param string $RunStatus <p>集群状态</p>
     * @param string $Region <p>地域</p>
     * @param string $Version <p>k8s版本</p>
     * @param string $LastAssetSyncTime <p>最近资产同步时间</p>
     * @param string $LastRiskCheckTime <p>最近风险检查时间</p>
     * @param string $RiskStatus <p>风险状态</p>
     * @param array $Tags <p>标签列表</p>
     * @param string $OwnerName <p>负责人名称</p>
     * @param string $FailMessage <p>失败原因</p>
     * @param string $RunSubStatus <p>运行子状态</p>
     * @param string $AccessedStatus <p>集群接入状态</p><p>枚举值：</p><ul><li>AccessedNone： 未接入</li><li>AccessedInstalling： 接入中</li><li>AccessedInstalled： 已接入-未防护</li><li>AccessedUninstalling： 卸载中</li><li>AccessedUninstallException： 卸载异常</li><li>AccessedDefended： 已接入-已防护</li><li>AccessedPartialDefence： 已接入-部分防护</li><li>AccessedException： 接入异常</li></ul>
     * @param string $AccessedSubStatus <p>接入子状态</p>
     * @param string $ClusterCaMD5 <p>集群ca证书md5值，集群唯一标识</p>
     * @param string $AssetSyncStatus <p>资产同步状态</p><p>枚举值：</p><ul><li>AssetCheckNone： 初始状态</li><li>AssetCheckSync： 同步中</li><li>AssetCheckFinished： 同步完成</li><li>AssetCheckFailed： 同步失败</li></ul>
     * @param integer $RiskConfigCount <p>集群配置风险数量</p>
     * @param string $AccessFailedMessage <p>集群接入失败原因</p>
     * @param string $RegionName <p>地域中文名</p>
     * @param string $RegionNameEn <p>地域英文名</p>
     * @param integer $UnboundUltimateNodeCount <p>未绑定旗舰版的节点数量</p>
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("AlarmEventCriticalCount",$param) and $param["AlarmEventCriticalCount"] !== null) {
            $this->AlarmEventCriticalCount = $param["AlarmEventCriticalCount"];
        }

        if (array_key_exists("AlarmEventHighCount",$param) and $param["AlarmEventHighCount"] !== null) {
            $this->AlarmEventHighCount = $param["AlarmEventHighCount"];
        }

        if (array_key_exists("AlarmEventMiddleCount",$param) and $param["AlarmEventMiddleCount"] !== null) {
            $this->AlarmEventMiddleCount = $param["AlarmEventMiddleCount"];
        }

        if (array_key_exists("AlarmEventLowCount",$param) and $param["AlarmEventLowCount"] !== null) {
            $this->AlarmEventLowCount = $param["AlarmEventLowCount"];
        }

        if (array_key_exists("RiskEventCriticalCount",$param) and $param["RiskEventCriticalCount"] !== null) {
            $this->RiskEventCriticalCount = $param["RiskEventCriticalCount"];
        }

        if (array_key_exists("RiskEventHighCount",$param) and $param["RiskEventHighCount"] !== null) {
            $this->RiskEventHighCount = $param["RiskEventHighCount"];
        }

        if (array_key_exists("RiskEventMiddleCount",$param) and $param["RiskEventMiddleCount"] !== null) {
            $this->RiskEventMiddleCount = $param["RiskEventMiddleCount"];
        }

        if (array_key_exists("RiskEventLowCount",$param) and $param["RiskEventLowCount"] !== null) {
            $this->RiskEventLowCount = $param["RiskEventLowCount"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("OfflineNodeCount",$param) and $param["OfflineNodeCount"] !== null) {
            $this->OfflineNodeCount = $param["OfflineNodeCount"];
        }

        if (array_key_exists("UninstallNodeCount",$param) and $param["UninstallNodeCount"] !== null) {
            $this->UninstallNodeCount = $param["UninstallNodeCount"];
        }

        if (array_key_exists("TotalCoresCount",$param) and $param["TotalCoresCount"] !== null) {
            $this->TotalCoresCount = $param["TotalCoresCount"];
        }

        if (array_key_exists("DefendCoresCount",$param) and $param["DefendCoresCount"] !== null) {
            $this->DefendCoresCount = $param["DefendCoresCount"];
        }

        if (array_key_exists("AuditLogSwitchStatus",$param) and $param["AuditLogSwitchStatus"] !== null) {
            $this->AuditLogSwitchStatus = $param["AuditLogSwitchStatus"];
        }

        if (array_key_exists("DefendStatus",$param) and $param["DefendStatus"] !== null) {
            $this->DefendStatus = $param["DefendStatus"];
        }

        if (array_key_exists("RunStatus",$param) and $param["RunStatus"] !== null) {
            $this->RunStatus = $param["RunStatus"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("LastAssetSyncTime",$param) and $param["LastAssetSyncTime"] !== null) {
            $this->LastAssetSyncTime = $param["LastAssetSyncTime"];
        }

        if (array_key_exists("LastRiskCheckTime",$param) and $param["LastRiskCheckTime"] !== null) {
            $this->LastRiskCheckTime = $param["LastRiskCheckTime"];
        }

        if (array_key_exists("RiskStatus",$param) and $param["RiskStatus"] !== null) {
            $this->RiskStatus = $param["RiskStatus"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new AssetTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("OwnerName",$param) and $param["OwnerName"] !== null) {
            $this->OwnerName = $param["OwnerName"];
        }

        if (array_key_exists("FailMessage",$param) and $param["FailMessage"] !== null) {
            $this->FailMessage = $param["FailMessage"];
        }

        if (array_key_exists("RunSubStatus",$param) and $param["RunSubStatus"] !== null) {
            $this->RunSubStatus = $param["RunSubStatus"];
        }

        if (array_key_exists("AccessedStatus",$param) and $param["AccessedStatus"] !== null) {
            $this->AccessedStatus = $param["AccessedStatus"];
        }

        if (array_key_exists("AccessedSubStatus",$param) and $param["AccessedSubStatus"] !== null) {
            $this->AccessedSubStatus = $param["AccessedSubStatus"];
        }

        if (array_key_exists("ClusterCaMD5",$param) and $param["ClusterCaMD5"] !== null) {
            $this->ClusterCaMD5 = $param["ClusterCaMD5"];
        }

        if (array_key_exists("AssetSyncStatus",$param) and $param["AssetSyncStatus"] !== null) {
            $this->AssetSyncStatus = $param["AssetSyncStatus"];
        }

        if (array_key_exists("RiskConfigCount",$param) and $param["RiskConfigCount"] !== null) {
            $this->RiskConfigCount = $param["RiskConfigCount"];
        }

        if (array_key_exists("AccessFailedMessage",$param) and $param["AccessFailedMessage"] !== null) {
            $this->AccessFailedMessage = $param["AccessFailedMessage"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionNameEn",$param) and $param["RegionNameEn"] !== null) {
            $this->RegionNameEn = $param["RegionNameEn"];
        }

        if (array_key_exists("UnboundUltimateNodeCount",$param) and $param["UnboundUltimateNodeCount"] !== null) {
            $this->UnboundUltimateNodeCount = $param["UnboundUltimateNodeCount"];
        }
    }
}
