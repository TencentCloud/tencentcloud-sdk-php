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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群资产返回的结构体
 *
 * @method string getClusterId() 获取<p>集群id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群id</p>
 * @method string getClusterCAMD5() 获取<p>集群ca证书md5值</p>
 * @method void setClusterCAMD5(string $ClusterCAMD5) 设置<p>集群ca证书md5值</p>
 * @method string getClusterName() 获取<p>集群名字</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名字</p>
 * @method string getClusterVersion() 获取<p>集群版本</p>
 * @method void setClusterVersion(string $ClusterVersion) 设置<p>集群版本</p>
 * @method string getClusterOs() 获取<p>集群操作系统</p>
 * @method void setClusterOs(string $ClusterOs) 设置<p>集群操作系统</p>
 * @method string getClusterType() 获取<p>集群类型</p>
 * @method void setClusterType(string $ClusterType) 设置<p>集群类型</p>
 * @method integer getClusterNodeNum() 获取<p>集群节点数</p>
 * @method void setClusterNodeNum(integer $ClusterNodeNum) 设置<p>集群节点数</p>
 * @method string getRegion() 获取<p>集群区域</p>
 * @method void setRegion(string $Region) 设置<p>集群区域</p>
 * @method string getDefenderStatus() 获取<p>防护状态:<br>已防护: Defended<br>未防护: UnDefended<br>部分防护: PartDefened</p>
 * @method void setDefenderStatus(string $DefenderStatus) 设置<p>防护状态:<br>已防护: Defended<br>未防护: UnDefended<br>部分防护: PartDefened</p>
 * @method string getClusterStatus() 获取<p>集群状态</p>
 * @method void setClusterStatus(string $ClusterStatus) 设置<p>集群状态</p>
 * @method string getClusterSubStatus() 获取<p>集群运行子状态</p>
 * @method void setClusterSubStatus(string $ClusterSubStatus) 设置<p>集群运行子状态</p>
 * @method string getClusterCheckMode() 获取<p>集群的检测模式，为Cluster_Normal或者Cluster_Actived.</p>
 * @method void setClusterCheckMode(string $ClusterCheckMode) 设置<p>集群的检测模式，为Cluster_Normal或者Cluster_Actived.</p>
 * @method boolean getClusterAutoCheck() 获取<p>是否自动定期检测</p>
 * @method void setClusterAutoCheck(boolean $ClusterAutoCheck) 设置<p>是否自动定期检测</p>
 * @method string getDefenderErrorReason() 获取<p>防护容器部署失败原因，为UserDaemonSetNotReady时,和UnreadyNodeNum转成&quot;N个节点防御容器为就绪&quot;，其他错误直接展示</p>
 * @method void setDefenderErrorReason(string $DefenderErrorReason) 设置<p>防护容器部署失败原因，为UserDaemonSetNotReady时,和UnreadyNodeNum转成&quot;N个节点防御容器为就绪&quot;，其他错误直接展示</p>
 * @method integer getUnreadyNodeNum() 获取<p>防御容器没有ready状态的节点数量</p>
 * @method void setUnreadyNodeNum(integer $UnreadyNodeNum) 设置<p>防御容器没有ready状态的节点数量</p>
 * @method integer getSeriousRiskCount() 获取<p>严重风险检查项的数量</p>
 * @method void setSeriousRiskCount(integer $SeriousRiskCount) 设置<p>严重风险检查项的数量</p>
 * @method integer getHighRiskCount() 获取<p>高风险检查项的数量</p>
 * @method void setHighRiskCount(integer $HighRiskCount) 设置<p>高风险检查项的数量</p>
 * @method integer getMiddleRiskCount() 获取<p>中风险检查项的数量</p>
 * @method void setMiddleRiskCount(integer $MiddleRiskCount) 设置<p>中风险检查项的数量</p>
 * @method integer getHintRiskCount() 获取<p>提示风险检查项的数量</p>
 * @method void setHintRiskCount(integer $HintRiskCount) 设置<p>提示风险检查项的数量</p>
 * @method string getCheckFailReason() 获取<p>检查失败原因</p>
 * @method void setCheckFailReason(string $CheckFailReason) 设置<p>检查失败原因</p>
 * @method string getCheckStatus() 获取<p>检查状态,为Task_Running, NoRisk, HasRisk, Uncheck, Task_Error</p>
 * @method void setCheckStatus(string $CheckStatus) 设置<p>检查状态,为Task_Running, NoRisk, HasRisk, Uncheck, Task_Error</p>
 * @method string getTaskCreateTime() 获取<p>任务创建时间,检查时间</p>
 * @method void setTaskCreateTime(string $TaskCreateTime) 设置<p>任务创建时间,检查时间</p>
 * @method string getAccessedStatus() 获取<p>接入状态:<br>未接入: AccessedNone<br>已防护: AccessedDefended<br>未防护: AccessedInstalled<br>部分防护: AccessedPartialDefence<br>接入异常: AccessedException<br>卸载异常: AccessedUninstallException<br>接入中: AccessedInstalling<br>卸载中: AccessedUninstalling</p>
 * @method void setAccessedStatus(string $AccessedStatus) 设置<p>接入状态:<br>未接入: AccessedNone<br>已防护: AccessedDefended<br>未防护: AccessedInstalled<br>部分防护: AccessedPartialDefence<br>接入异常: AccessedException<br>卸载异常: AccessedUninstallException<br>接入中: AccessedInstalling<br>卸载中: AccessedUninstalling</p>
 * @method string getAccessedSubStatus() 获取<p>接入失败原因</p>
 * @method void setAccessedSubStatus(string $AccessedSubStatus) 设置<p>接入失败原因</p>
 * @method string getAccessedErrorReason() 获取<p>接入/卸载失败原因</p>
 * @method void setAccessedErrorReason(string $AccessedErrorReason) 设置<p>接入/卸载失败原因</p>
 * @method integer getNodeCount() 获取<p>节点总数</p>
 * @method void setNodeCount(integer $NodeCount) 设置<p>节点总数</p>
 * @method integer getOffLineNodeCount() 获取<p>离线节点数</p>
 * @method void setOffLineNodeCount(integer $OffLineNodeCount) 设置<p>离线节点数</p>
 * @method integer getUnInstallAgentNodeCount() 获取<p>未安装agent节点数</p>
 * @method void setUnInstallAgentNodeCount(integer $UnInstallAgentNodeCount) 设置<p>未安装agent节点数</p>
 * @method integer getChargeCoresCnt() 获取<p>计费核数(弹性计费核数+普通计费核数)</p>
 * @method void setChargeCoresCnt(integer $ChargeCoresCnt) 设置<p>计费核数(弹性计费核数+普通计费核数)</p>
 * @method array getMasterAddresses() 获取<p>master 地址列表</p>
 * @method void setMasterAddresses(array $MasterAddresses) 设置<p>master 地址列表</p>
 * @method integer getCoresCnt() 获取<p>核数</p>
 * @method void setCoresCnt(integer $CoresCnt) 设置<p>核数</p>
 * @method string getClusterAuditStatus() 获取<p>集群审计开关状态：<br>已关闭Closed/关闭中Closing/关闭失败CloseFailed/已开启Opened/开启中Opening/开启失败OpenFailed</p>
 * @method void setClusterAuditStatus(string $ClusterAuditStatus) 设置<p>集群审计开关状态：<br>已关闭Closed/关闭中Closing/关闭失败CloseFailed/已开启Opened/开启中Opening/开启失败OpenFailed</p>
 * @method string getClusterAuditFailedInfo() 获取<p>集群审计开关失败信息</p>
 * @method void setClusterAuditFailedInfo(string $ClusterAuditFailedInfo) 设置<p>集群审计开关失败信息</p>
 * @method string getOwnerName() 获取<p>所有者名称</p>
 * @method void setOwnerName(string $OwnerName) 设置<p>所有者名称</p>
 */
class ClusterInfoItem extends AbstractModel
{
    /**
     * @var string <p>集群id</p>
     */
    public $ClusterId;

    /**
     * @var string <p>集群ca证书md5值</p>
     */
    public $ClusterCAMD5;

    /**
     * @var string <p>集群名字</p>
     */
    public $ClusterName;

    /**
     * @var string <p>集群版本</p>
     */
    public $ClusterVersion;

    /**
     * @var string <p>集群操作系统</p>
     */
    public $ClusterOs;

    /**
     * @var string <p>集群类型</p>
     */
    public $ClusterType;

    /**
     * @var integer <p>集群节点数</p>
     */
    public $ClusterNodeNum;

    /**
     * @var string <p>集群区域</p>
     */
    public $Region;

    /**
     * @var string <p>防护状态:<br>已防护: Defended<br>未防护: UnDefended<br>部分防护: PartDefened</p>
     */
    public $DefenderStatus;

    /**
     * @var string <p>集群状态</p>
     */
    public $ClusterStatus;

    /**
     * @var string <p>集群运行子状态</p>
     */
    public $ClusterSubStatus;

    /**
     * @var string <p>集群的检测模式，为Cluster_Normal或者Cluster_Actived.</p>
     */
    public $ClusterCheckMode;

    /**
     * @var boolean <p>是否自动定期检测</p>
     */
    public $ClusterAutoCheck;

    /**
     * @var string <p>防护容器部署失败原因，为UserDaemonSetNotReady时,和UnreadyNodeNum转成&quot;N个节点防御容器为就绪&quot;，其他错误直接展示</p>
     */
    public $DefenderErrorReason;

    /**
     * @var integer <p>防御容器没有ready状态的节点数量</p>
     */
    public $UnreadyNodeNum;

    /**
     * @var integer <p>严重风险检查项的数量</p>
     */
    public $SeriousRiskCount;

    /**
     * @var integer <p>高风险检查项的数量</p>
     */
    public $HighRiskCount;

    /**
     * @var integer <p>中风险检查项的数量</p>
     */
    public $MiddleRiskCount;

    /**
     * @var integer <p>提示风险检查项的数量</p>
     */
    public $HintRiskCount;

    /**
     * @var string <p>检查失败原因</p>
     */
    public $CheckFailReason;

    /**
     * @var string <p>检查状态,为Task_Running, NoRisk, HasRisk, Uncheck, Task_Error</p>
     */
    public $CheckStatus;

    /**
     * @var string <p>任务创建时间,检查时间</p>
     */
    public $TaskCreateTime;

    /**
     * @var string <p>接入状态:<br>未接入: AccessedNone<br>已防护: AccessedDefended<br>未防护: AccessedInstalled<br>部分防护: AccessedPartialDefence<br>接入异常: AccessedException<br>卸载异常: AccessedUninstallException<br>接入中: AccessedInstalling<br>卸载中: AccessedUninstalling</p>
     */
    public $AccessedStatus;

    /**
     * @var string <p>接入失败原因</p>
     */
    public $AccessedSubStatus;

    /**
     * @var string <p>接入/卸载失败原因</p>
     */
    public $AccessedErrorReason;

    /**
     * @var integer <p>节点总数</p>
     */
    public $NodeCount;

    /**
     * @var integer <p>离线节点数</p>
     */
    public $OffLineNodeCount;

    /**
     * @var integer <p>未安装agent节点数</p>
     */
    public $UnInstallAgentNodeCount;

    /**
     * @var integer <p>计费核数(弹性计费核数+普通计费核数)</p>
     */
    public $ChargeCoresCnt;

    /**
     * @var array <p>master 地址列表</p>
     */
    public $MasterAddresses;

    /**
     * @var integer <p>核数</p>
     */
    public $CoresCnt;

    /**
     * @var string <p>集群审计开关状态：<br>已关闭Closed/关闭中Closing/关闭失败CloseFailed/已开启Opened/开启中Opening/开启失败OpenFailed</p>
     */
    public $ClusterAuditStatus;

    /**
     * @var string <p>集群审计开关失败信息</p>
     */
    public $ClusterAuditFailedInfo;

    /**
     * @var string <p>所有者名称</p>
     */
    public $OwnerName;

    /**
     * @param string $ClusterId <p>集群id</p>
     * @param string $ClusterCAMD5 <p>集群ca证书md5值</p>
     * @param string $ClusterName <p>集群名字</p>
     * @param string $ClusterVersion <p>集群版本</p>
     * @param string $ClusterOs <p>集群操作系统</p>
     * @param string $ClusterType <p>集群类型</p>
     * @param integer $ClusterNodeNum <p>集群节点数</p>
     * @param string $Region <p>集群区域</p>
     * @param string $DefenderStatus <p>防护状态:<br>已防护: Defended<br>未防护: UnDefended<br>部分防护: PartDefened</p>
     * @param string $ClusterStatus <p>集群状态</p>
     * @param string $ClusterSubStatus <p>集群运行子状态</p>
     * @param string $ClusterCheckMode <p>集群的检测模式，为Cluster_Normal或者Cluster_Actived.</p>
     * @param boolean $ClusterAutoCheck <p>是否自动定期检测</p>
     * @param string $DefenderErrorReason <p>防护容器部署失败原因，为UserDaemonSetNotReady时,和UnreadyNodeNum转成&quot;N个节点防御容器为就绪&quot;，其他错误直接展示</p>
     * @param integer $UnreadyNodeNum <p>防御容器没有ready状态的节点数量</p>
     * @param integer $SeriousRiskCount <p>严重风险检查项的数量</p>
     * @param integer $HighRiskCount <p>高风险检查项的数量</p>
     * @param integer $MiddleRiskCount <p>中风险检查项的数量</p>
     * @param integer $HintRiskCount <p>提示风险检查项的数量</p>
     * @param string $CheckFailReason <p>检查失败原因</p>
     * @param string $CheckStatus <p>检查状态,为Task_Running, NoRisk, HasRisk, Uncheck, Task_Error</p>
     * @param string $TaskCreateTime <p>任务创建时间,检查时间</p>
     * @param string $AccessedStatus <p>接入状态:<br>未接入: AccessedNone<br>已防护: AccessedDefended<br>未防护: AccessedInstalled<br>部分防护: AccessedPartialDefence<br>接入异常: AccessedException<br>卸载异常: AccessedUninstallException<br>接入中: AccessedInstalling<br>卸载中: AccessedUninstalling</p>
     * @param string $AccessedSubStatus <p>接入失败原因</p>
     * @param string $AccessedErrorReason <p>接入/卸载失败原因</p>
     * @param integer $NodeCount <p>节点总数</p>
     * @param integer $OffLineNodeCount <p>离线节点数</p>
     * @param integer $UnInstallAgentNodeCount <p>未安装agent节点数</p>
     * @param integer $ChargeCoresCnt <p>计费核数(弹性计费核数+普通计费核数)</p>
     * @param array $MasterAddresses <p>master 地址列表</p>
     * @param integer $CoresCnt <p>核数</p>
     * @param string $ClusterAuditStatus <p>集群审计开关状态：<br>已关闭Closed/关闭中Closing/关闭失败CloseFailed/已开启Opened/开启中Opening/开启失败OpenFailed</p>
     * @param string $ClusterAuditFailedInfo <p>集群审计开关失败信息</p>
     * @param string $OwnerName <p>所有者名称</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterCAMD5",$param) and $param["ClusterCAMD5"] !== null) {
            $this->ClusterCAMD5 = $param["ClusterCAMD5"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("ClusterOs",$param) and $param["ClusterOs"] !== null) {
            $this->ClusterOs = $param["ClusterOs"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterNodeNum",$param) and $param["ClusterNodeNum"] !== null) {
            $this->ClusterNodeNum = $param["ClusterNodeNum"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("DefenderStatus",$param) and $param["DefenderStatus"] !== null) {
            $this->DefenderStatus = $param["DefenderStatus"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("ClusterSubStatus",$param) and $param["ClusterSubStatus"] !== null) {
            $this->ClusterSubStatus = $param["ClusterSubStatus"];
        }

        if (array_key_exists("ClusterCheckMode",$param) and $param["ClusterCheckMode"] !== null) {
            $this->ClusterCheckMode = $param["ClusterCheckMode"];
        }

        if (array_key_exists("ClusterAutoCheck",$param) and $param["ClusterAutoCheck"] !== null) {
            $this->ClusterAutoCheck = $param["ClusterAutoCheck"];
        }

        if (array_key_exists("DefenderErrorReason",$param) and $param["DefenderErrorReason"] !== null) {
            $this->DefenderErrorReason = $param["DefenderErrorReason"];
        }

        if (array_key_exists("UnreadyNodeNum",$param) and $param["UnreadyNodeNum"] !== null) {
            $this->UnreadyNodeNum = $param["UnreadyNodeNum"];
        }

        if (array_key_exists("SeriousRiskCount",$param) and $param["SeriousRiskCount"] !== null) {
            $this->SeriousRiskCount = $param["SeriousRiskCount"];
        }

        if (array_key_exists("HighRiskCount",$param) and $param["HighRiskCount"] !== null) {
            $this->HighRiskCount = $param["HighRiskCount"];
        }

        if (array_key_exists("MiddleRiskCount",$param) and $param["MiddleRiskCount"] !== null) {
            $this->MiddleRiskCount = $param["MiddleRiskCount"];
        }

        if (array_key_exists("HintRiskCount",$param) and $param["HintRiskCount"] !== null) {
            $this->HintRiskCount = $param["HintRiskCount"];
        }

        if (array_key_exists("CheckFailReason",$param) and $param["CheckFailReason"] !== null) {
            $this->CheckFailReason = $param["CheckFailReason"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }

        if (array_key_exists("TaskCreateTime",$param) and $param["TaskCreateTime"] !== null) {
            $this->TaskCreateTime = $param["TaskCreateTime"];
        }

        if (array_key_exists("AccessedStatus",$param) and $param["AccessedStatus"] !== null) {
            $this->AccessedStatus = $param["AccessedStatus"];
        }

        if (array_key_exists("AccessedSubStatus",$param) and $param["AccessedSubStatus"] !== null) {
            $this->AccessedSubStatus = $param["AccessedSubStatus"];
        }

        if (array_key_exists("AccessedErrorReason",$param) and $param["AccessedErrorReason"] !== null) {
            $this->AccessedErrorReason = $param["AccessedErrorReason"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("OffLineNodeCount",$param) and $param["OffLineNodeCount"] !== null) {
            $this->OffLineNodeCount = $param["OffLineNodeCount"];
        }

        if (array_key_exists("UnInstallAgentNodeCount",$param) and $param["UnInstallAgentNodeCount"] !== null) {
            $this->UnInstallAgentNodeCount = $param["UnInstallAgentNodeCount"];
        }

        if (array_key_exists("ChargeCoresCnt",$param) and $param["ChargeCoresCnt"] !== null) {
            $this->ChargeCoresCnt = $param["ChargeCoresCnt"];
        }

        if (array_key_exists("MasterAddresses",$param) and $param["MasterAddresses"] !== null) {
            $this->MasterAddresses = $param["MasterAddresses"];
        }

        if (array_key_exists("CoresCnt",$param) and $param["CoresCnt"] !== null) {
            $this->CoresCnt = $param["CoresCnt"];
        }

        if (array_key_exists("ClusterAuditStatus",$param) and $param["ClusterAuditStatus"] !== null) {
            $this->ClusterAuditStatus = $param["ClusterAuditStatus"];
        }

        if (array_key_exists("ClusterAuditFailedInfo",$param) and $param["ClusterAuditFailedInfo"] !== null) {
            $this->ClusterAuditFailedInfo = $param["ClusterAuditFailedInfo"];
        }

        if (array_key_exists("OwnerName",$param) and $param["OwnerName"] !== null) {
            $this->OwnerName = $param["OwnerName"];
        }
    }
}
