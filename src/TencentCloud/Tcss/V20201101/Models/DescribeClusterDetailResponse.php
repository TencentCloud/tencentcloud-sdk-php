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
 * DescribeClusterDetail返回参数结构体
 *
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getClusterName() 获取集群名字
 * @method void setClusterName(string $ClusterName) 设置集群名字
 * @method integer getScanTaskProgress() 获取当前集群扫描任务的进度，100表示扫描完成.
 * @method void setScanTaskProgress(integer $ScanTaskProgress) 设置当前集群扫描任务的进度，100表示扫描完成.
 * @method string getClusterVersion() 获取集群版本
 * @method void setClusterVersion(string $ClusterVersion) 设置集群版本
 * @method string getContainerRuntime() 获取运行时组件
 * @method void setContainerRuntime(string $ContainerRuntime) 设置运行时组件
 * @method integer getClusterNodeNum() 获取集群节点数
 * @method void setClusterNodeNum(integer $ClusterNodeNum) 设置集群节点数
 * @method string getClusterStatus() 获取集群状态 (Running 运行中 Creating 创建中 Abnormal 异常 )
 * @method void setClusterStatus(string $ClusterStatus) 设置集群状态 (Running 运行中 Creating 创建中 Abnormal 异常 )
 * @method string getClusterType() 获取集群类型：为托管集群MANAGED_CLUSTER、独立集群INDEPENDENT_CLUSTER
 * @method void setClusterType(string $ClusterType) 设置集群类型：为托管集群MANAGED_CLUSTER、独立集群INDEPENDENT_CLUSTER
 * @method string getRegion() 获取集群区域
 * @method void setRegion(string $Region) 设置集群区域
 * @method integer getSeriousRiskCount() 获取严重风险检查项的数量
 * @method void setSeriousRiskCount(integer $SeriousRiskCount) 设置严重风险检查项的数量
 * @method integer getHighRiskCount() 获取高风险检查项的数量
 * @method void setHighRiskCount(integer $HighRiskCount) 设置高风险检查项的数量
 * @method integer getMiddleRiskCount() 获取中风险检查项的数量
 * @method void setMiddleRiskCount(integer $MiddleRiskCount) 设置中风险检查项的数量
 * @method integer getHintRiskCount() 获取提示风险检查项的数量
 * @method void setHintRiskCount(integer $HintRiskCount) 设置提示风险检查项的数量
 * @method string getCheckStatus() 获取检查任务的状态
 * @method void setCheckStatus(string $CheckStatus) 设置检查任务的状态
 * @method string getDefenderStatus() 获取防御容器状态
 * @method void setDefenderStatus(string $DefenderStatus) 设置防御容器状态
 * @method string getTaskCreateTime() 获取扫描任务创建时间
 * @method void setTaskCreateTime(string $TaskCreateTime) 设置扫描任务创建时间
 * @method string getNetworkType() 获取网络类型.PublicNetwork为公网类型,VPCNetwork为VPC网络
 * @method void setNetworkType(string $NetworkType) 设置网络类型.PublicNetwork为公网类型,VPCNetwork为VPC网络
 * @method string getApiServerAddress() 获取API Server地址
 * @method void setApiServerAddress(string $ApiServerAddress) 设置API Server地址
 * @method integer getNodeCount() 获取节点数
 * @method void setNodeCount(integer $NodeCount) 设置节点数
 * @method integer getNamespaceCount() 获取命名空间数
 * @method void setNamespaceCount(integer $NamespaceCount) 设置命名空间数
 * @method integer getWorkloadCount() 获取工作负载数
 * @method void setWorkloadCount(integer $WorkloadCount) 设置工作负载数
 * @method integer getPodCount() 获取Pod数量
 * @method void setPodCount(integer $PodCount) 设置Pod数量
 * @method integer getServiceCount() 获取Service数量
 * @method void setServiceCount(integer $ServiceCount) 设置Service数量
 * @method integer getIngressCount() 获取Ingress数量
 * @method void setIngressCount(integer $IngressCount) 设置Ingress数量
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeClusterDetailResponse extends AbstractModel
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
     * @var integer 当前集群扫描任务的进度，100表示扫描完成.
     */
    public $ScanTaskProgress;

    /**
     * @var string 集群版本
     */
    public $ClusterVersion;

    /**
     * @var string 运行时组件
     */
    public $ContainerRuntime;

    /**
     * @var integer 集群节点数
     */
    public $ClusterNodeNum;

    /**
     * @var string 集群状态 (Running 运行中 Creating 创建中 Abnormal 异常 )
     */
    public $ClusterStatus;

    /**
     * @var string 集群类型：为托管集群MANAGED_CLUSTER、独立集群INDEPENDENT_CLUSTER
     */
    public $ClusterType;

    /**
     * @var string 集群区域
     */
    public $Region;

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
     * @var string 检查任务的状态
     */
    public $CheckStatus;

    /**
     * @var string 防御容器状态
     */
    public $DefenderStatus;

    /**
     * @var string 扫描任务创建时间
     */
    public $TaskCreateTime;

    /**
     * @var string 网络类型.PublicNetwork为公网类型,VPCNetwork为VPC网络
     */
    public $NetworkType;

    /**
     * @var string API Server地址
     */
    public $ApiServerAddress;

    /**
     * @var integer 节点数
     */
    public $NodeCount;

    /**
     * @var integer 命名空间数
     */
    public $NamespaceCount;

    /**
     * @var integer 工作负载数
     */
    public $WorkloadCount;

    /**
     * @var integer Pod数量
     */
    public $PodCount;

    /**
     * @var integer Service数量
     */
    public $ServiceCount;

    /**
     * @var integer Ingress数量
     */
    public $IngressCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ClusterId 集群id
     * @param string $ClusterName 集群名字
     * @param integer $ScanTaskProgress 当前集群扫描任务的进度，100表示扫描完成.
     * @param string $ClusterVersion 集群版本
     * @param string $ContainerRuntime 运行时组件
     * @param integer $ClusterNodeNum 集群节点数
     * @param string $ClusterStatus 集群状态 (Running 运行中 Creating 创建中 Abnormal 异常 )
     * @param string $ClusterType 集群类型：为托管集群MANAGED_CLUSTER、独立集群INDEPENDENT_CLUSTER
     * @param string $Region 集群区域
     * @param integer $SeriousRiskCount 严重风险检查项的数量
     * @param integer $HighRiskCount 高风险检查项的数量
     * @param integer $MiddleRiskCount 中风险检查项的数量
     * @param integer $HintRiskCount 提示风险检查项的数量
     * @param string $CheckStatus 检查任务的状态
     * @param string $DefenderStatus 防御容器状态
     * @param string $TaskCreateTime 扫描任务创建时间
     * @param string $NetworkType 网络类型.PublicNetwork为公网类型,VPCNetwork为VPC网络
     * @param string $ApiServerAddress API Server地址
     * @param integer $NodeCount 节点数
     * @param integer $NamespaceCount 命名空间数
     * @param integer $WorkloadCount 工作负载数
     * @param integer $PodCount Pod数量
     * @param integer $ServiceCount Service数量
     * @param integer $IngressCount Ingress数量
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("ScanTaskProgress",$param) and $param["ScanTaskProgress"] !== null) {
            $this->ScanTaskProgress = $param["ScanTaskProgress"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("ContainerRuntime",$param) and $param["ContainerRuntime"] !== null) {
            $this->ContainerRuntime = $param["ContainerRuntime"];
        }

        if (array_key_exists("ClusterNodeNum",$param) and $param["ClusterNodeNum"] !== null) {
            $this->ClusterNodeNum = $param["ClusterNodeNum"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
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

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }

        if (array_key_exists("DefenderStatus",$param) and $param["DefenderStatus"] !== null) {
            $this->DefenderStatus = $param["DefenderStatus"];
        }

        if (array_key_exists("TaskCreateTime",$param) and $param["TaskCreateTime"] !== null) {
            $this->TaskCreateTime = $param["TaskCreateTime"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("ApiServerAddress",$param) and $param["ApiServerAddress"] !== null) {
            $this->ApiServerAddress = $param["ApiServerAddress"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("NamespaceCount",$param) and $param["NamespaceCount"] !== null) {
            $this->NamespaceCount = $param["NamespaceCount"];
        }

        if (array_key_exists("WorkloadCount",$param) and $param["WorkloadCount"] !== null) {
            $this->WorkloadCount = $param["WorkloadCount"];
        }

        if (array_key_exists("PodCount",$param) and $param["PodCount"] !== null) {
            $this->PodCount = $param["PodCount"];
        }

        if (array_key_exists("ServiceCount",$param) and $param["ServiceCount"] !== null) {
            $this->ServiceCount = $param["ServiceCount"];
        }

        if (array_key_exists("IngressCount",$param) and $param["IngressCount"] !== null) {
            $this->IngressCount = $param["IngressCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
