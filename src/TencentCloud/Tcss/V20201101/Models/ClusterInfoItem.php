<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getClusterName() 获取集群名字
 * @method void setClusterName(string $ClusterName) 设置集群名字
 * @method string getClusterVersion() 获取集群版本
 * @method void setClusterVersion(string $ClusterVersion) 设置集群版本
 * @method string getClusterOs() 获取集群操作系统
 * @method void setClusterOs(string $ClusterOs) 设置集群操作系统
 * @method string getClusterType() 获取集群类型
 * @method void setClusterType(string $ClusterType) 设置集群类型
 * @method integer getClusterNodeNum() 获取集群节点数
 * @method void setClusterNodeNum(integer $ClusterNodeNum) 设置集群节点数
 * @method string getRegion() 获取集群区域
 * @method void setRegion(string $Region) 设置集群区域
 * @method string getDefenderStatus() 获取监控组件的状态，为Defender_Uninstall、Defender_Normal、Defender_Error、Defender_Installing
 * @method void setDefenderStatus(string $DefenderStatus) 设置监控组件的状态，为Defender_Uninstall、Defender_Normal、Defender_Error、Defender_Installing
 * @method string getClusterStatus() 获取集群状态
 * @method void setClusterStatus(string $ClusterStatus) 设置集群状态
 * @method string getClusterCheckMode() 获取集群的检测模式，为Cluster_Normal或者Cluster_Actived.
 * @method void setClusterCheckMode(string $ClusterCheckMode) 设置集群的检测模式，为Cluster_Normal或者Cluster_Actived.
 * @method boolean getClusterAutoCheck() 获取是否自动定期检测
 * @method void setClusterAutoCheck(boolean $ClusterAutoCheck) 设置是否自动定期检测
 * @method string getDefenderErrorReason() 获取防护容器部署失败原因，为UserDaemonSetNotReady时,和UnreadyNodeNum转成"N个节点防御容器为就绪"，其他错误直接展示
 * @method void setDefenderErrorReason(string $DefenderErrorReason) 设置防护容器部署失败原因，为UserDaemonSetNotReady时,和UnreadyNodeNum转成"N个节点防御容器为就绪"，其他错误直接展示
 * @method integer getUnreadyNodeNum() 获取防御容器没有ready状态的节点数量
 * @method void setUnreadyNodeNum(integer $UnreadyNodeNum) 设置防御容器没有ready状态的节点数量
 * @method integer getSeriousRiskCount() 获取严重风险检查项的数量
 * @method void setSeriousRiskCount(integer $SeriousRiskCount) 设置严重风险检查项的数量
 * @method integer getHighRiskCount() 获取高风险检查项的数量
 * @method void setHighRiskCount(integer $HighRiskCount) 设置高风险检查项的数量
 * @method integer getMiddleRiskCount() 获取中风险检查项的数量
 * @method void setMiddleRiskCount(integer $MiddleRiskCount) 设置中风险检查项的数量
 * @method integer getHintRiskCount() 获取提示风险检查项的数量
 * @method void setHintRiskCount(integer $HintRiskCount) 设置提示风险检查项的数量
 * @method string getCheckFailReason() 获取检查失败原因
 * @method void setCheckFailReason(string $CheckFailReason) 设置检查失败原因
 * @method string getCheckStatus() 获取检查状态,为Task_Running, NoRisk, HasRisk, Uncheck, Task_Error
 * @method void setCheckStatus(string $CheckStatus) 设置检查状态,为Task_Running, NoRisk, HasRisk, Uncheck, Task_Error
 * @method string getTaskCreateTime() 获取任务创建时间,检查时间
 * @method void setTaskCreateTime(string $TaskCreateTime) 设置任务创建时间,检查时间
 */
class ClusterInfoItem extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 集群名字
     */
    public $ClusterName;

    /**
     * @var string 集群版本
     */
    public $ClusterVersion;

    /**
     * @var string 集群操作系统
     */
    public $ClusterOs;

    /**
     * @var string 集群类型
     */
    public $ClusterType;

    /**
     * @var integer 集群节点数
     */
    public $ClusterNodeNum;

    /**
     * @var string 集群区域
     */
    public $Region;

    /**
     * @var string 监控组件的状态，为Defender_Uninstall、Defender_Normal、Defender_Error、Defender_Installing
     */
    public $DefenderStatus;

    /**
     * @var string 集群状态
     */
    public $ClusterStatus;

    /**
     * @var string 集群的检测模式，为Cluster_Normal或者Cluster_Actived.
     */
    public $ClusterCheckMode;

    /**
     * @var boolean 是否自动定期检测
     */
    public $ClusterAutoCheck;

    /**
     * @var string 防护容器部署失败原因，为UserDaemonSetNotReady时,和UnreadyNodeNum转成"N个节点防御容器为就绪"，其他错误直接展示
     */
    public $DefenderErrorReason;

    /**
     * @var integer 防御容器没有ready状态的节点数量
     */
    public $UnreadyNodeNum;

    /**
     * @var integer 严重风险检查项的数量
     */
    public $SeriousRiskCount;

    /**
     * @var integer 高风险检查项的数量
     */
    public $HighRiskCount;

    /**
     * @var integer 中风险检查项的数量
     */
    public $MiddleRiskCount;

    /**
     * @var integer 提示风险检查项的数量
     */
    public $HintRiskCount;

    /**
     * @var string 检查失败原因
     */
    public $CheckFailReason;

    /**
     * @var string 检查状态,为Task_Running, NoRisk, HasRisk, Uncheck, Task_Error
     */
    public $CheckStatus;

    /**
     * @var string 任务创建时间,检查时间
     */
    public $TaskCreateTime;

    /**
     * @param string $ClusterId 集群id
     * @param string $ClusterName 集群名字
     * @param string $ClusterVersion 集群版本
     * @param string $ClusterOs 集群操作系统
     * @param string $ClusterType 集群类型
     * @param integer $ClusterNodeNum 集群节点数
     * @param string $Region 集群区域
     * @param string $DefenderStatus 监控组件的状态，为Defender_Uninstall、Defender_Normal、Defender_Error、Defender_Installing
     * @param string $ClusterStatus 集群状态
     * @param string $ClusterCheckMode 集群的检测模式，为Cluster_Normal或者Cluster_Actived.
     * @param boolean $ClusterAutoCheck 是否自动定期检测
     * @param string $DefenderErrorReason 防护容器部署失败原因，为UserDaemonSetNotReady时,和UnreadyNodeNum转成"N个节点防御容器为就绪"，其他错误直接展示
     * @param integer $UnreadyNodeNum 防御容器没有ready状态的节点数量
     * @param integer $SeriousRiskCount 严重风险检查项的数量
     * @param integer $HighRiskCount 高风险检查项的数量
     * @param integer $MiddleRiskCount 中风险检查项的数量
     * @param integer $HintRiskCount 提示风险检查项的数量
     * @param string $CheckFailReason 检查失败原因
     * @param string $CheckStatus 检查状态,为Task_Running, NoRisk, HasRisk, Uncheck, Task_Error
     * @param string $TaskCreateTime 任务创建时间,检查时间
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
    }
}
