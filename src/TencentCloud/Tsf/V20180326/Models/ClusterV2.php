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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群详情
 *
 * @method string getClusterId() 获取集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterDesc() 获取集群描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterDesc(string $ClusterDesc) 设置集群描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterType() 获取集群类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterType(string $ClusterType) 设置集群类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取集群所属私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置集群所属私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterStatus() 获取集群状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterStatus(string $ClusterStatus) 设置集群状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterCIDR() 获取集群CIDR
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterCIDR(string $ClusterCIDR) 设置集群CIDR
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getClusterTotalCpu() 获取集群总CPU，单位: 核
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterTotalCpu(float $ClusterTotalCpu) 设置集群总CPU，单位: 核
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getClusterTotalMem() 获取集群总内存，单位: G
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterTotalMem(float $ClusterTotalMem) 设置集群总内存，单位: G
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getClusterUsedCpu() 获取集群已使用CPU，单位: 核
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterUsedCpu(float $ClusterUsedCpu) 设置集群已使用CPU，单位: 核
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getClusterUsedMem() 获取集群已使用内存，单位: G
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterUsedMem(float $ClusterUsedMem) 设置集群已使用内存，单位: G
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceCount() 获取集群机器实例数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceCount(integer $InstanceCount) 设置集群机器实例数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunInstanceCount() 获取集群运行中的机器实例数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunInstanceCount(integer $RunInstanceCount) 设置集群运行中的机器实例数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNormalInstanceCount() 获取集群正常状态的机器实例数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNormalInstanceCount(integer $NormalInstanceCount) 设置集群正常状态的机器实例数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDeleteFlag() 获取删除标记：true：可以删除；false：不可删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeleteFlag(boolean $DeleteFlag) 设置删除标记：true：可以删除；false：不可删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTsfRegionId() 获取集群所属TSF地域ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTsfRegionId(string $TsfRegionId) 设置集群所属TSF地域ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTsfRegionName() 获取集群所属TSF地域名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTsfRegionName(string $TsfRegionName) 设置集群所属TSF地域名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTsfZoneId() 获取集群所属TSF可用区ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTsfZoneId(string $TsfZoneId) 设置集群所属TSF可用区ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTsfZoneName() 获取集群所属TSF可用区名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTsfZoneName(string $TsfZoneName) 设置集群所属TSF可用区名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeleteFlagReason() 获取集群不可删除的原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeleteFlagReason(string $DeleteFlagReason) 设置集群不可删除的原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取集群所属私有网络子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置集群所属私有网络子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterLimitCpu() 获取集群剩余 cpu limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterLimitCpu(string $ClusterLimitCpu) 设置集群剩余 cpu limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterLimitMem() 获取集群剩余 memory limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterLimitMem(string $ClusterLimitMem) 设置集群剩余 memory limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunServiceInstanceCount() 获取运行服务实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunServiceInstanceCount(integer $RunServiceInstanceCount) 设置运行服务实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method OperationInfo getOperationInfo() 获取给前端的按钮控制信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperationInfo(OperationInfo $OperationInfo) 设置给前端的按钮控制信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterVersion() 获取容器集群版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterVersion(string $ClusterVersion) 设置容器集群版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGroupCount() 获取部署组总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupCount(integer $GroupCount) 设置部署组总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunGroupCount() 获取运行中部署组数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunGroupCount(integer $RunGroupCount) 设置运行中部署组数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStopGroupCount() 获取停止中部署组数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStopGroupCount(integer $StopGroupCount) 设置停止中部署组数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAbnormalGroupCount() 获取异常部署组数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAbnormalGroupCount(integer $AbnormalGroupCount) 设置异常部署组数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterRemarkName() 获取集群备注名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterRemarkName(string $ClusterRemarkName) 设置集群备注名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKuberneteApiServer() 获取api地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKuberneteApiServer(string $KuberneteApiServer) 设置api地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKuberneteNativeType() 获取K : kubeconfig, S : service account
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKuberneteNativeType(string $KuberneteNativeType) 设置K : kubeconfig, S : service account
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKuberneteNativeSecret() 获取native secret
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKuberneteNativeSecret(string $KuberneteNativeSecret) 设置native secret
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClusterV2 extends AbstractModel
{
    /**
     * @var string 集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var string 集群描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterDesc;

    /**
     * @var string 集群类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterType;

    /**
     * @var string 集群所属私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 集群状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterStatus;

    /**
     * @var string 集群CIDR
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterCIDR;

    /**
     * @var float 集群总CPU，单位: 核
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterTotalCpu;

    /**
     * @var float 集群总内存，单位: G
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterTotalMem;

    /**
     * @var float 集群已使用CPU，单位: 核
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterUsedCpu;

    /**
     * @var float 集群已使用内存，单位: G
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterUsedMem;

    /**
     * @var integer 集群机器实例数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceCount;

    /**
     * @var integer 集群运行中的机器实例数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunInstanceCount;

    /**
     * @var integer 集群正常状态的机器实例数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NormalInstanceCount;

    /**
     * @var boolean 删除标记：true：可以删除；false：不可删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeleteFlag;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 集群所属TSF地域ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TsfRegionId;

    /**
     * @var string 集群所属TSF地域名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TsfRegionName;

    /**
     * @var string 集群所属TSF可用区ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TsfZoneId;

    /**
     * @var string 集群所属TSF可用区名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TsfZoneName;

    /**
     * @var string 集群不可删除的原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeleteFlagReason;

    /**
     * @var string 集群所属私有网络子网ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string 集群剩余 cpu limit
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterLimitCpu;

    /**
     * @var string 集群剩余 memory limit
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterLimitMem;

    /**
     * @var integer 运行服务实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunServiceInstanceCount;

    /**
     * @var OperationInfo 给前端的按钮控制信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperationInfo;

    /**
     * @var string 容器集群版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterVersion;

    /**
     * @var integer 部署组总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupCount;

    /**
     * @var integer 运行中部署组数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunGroupCount;

    /**
     * @var integer 停止中部署组数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StopGroupCount;

    /**
     * @var integer 异常部署组数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AbnormalGroupCount;

    /**
     * @var string 集群备注名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterRemarkName;

    /**
     * @var string api地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KuberneteApiServer;

    /**
     * @var string K : kubeconfig, S : service account
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KuberneteNativeType;

    /**
     * @var string native secret
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KuberneteNativeSecret;

    /**
     * @param string $ClusterId 集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterDesc 集群描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterType 集群类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 集群所属私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterStatus 集群状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterCIDR 集群CIDR
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ClusterTotalCpu 集群总CPU，单位: 核
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ClusterTotalMem 集群总内存，单位: G
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ClusterUsedCpu 集群已使用CPU，单位: 核
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ClusterUsedMem 集群已使用内存，单位: G
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceCount 集群机器实例数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunInstanceCount 集群运行中的机器实例数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NormalInstanceCount 集群正常状态的机器实例数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DeleteFlag 删除标记：true：可以删除；false：不可删除
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TsfRegionId 集群所属TSF地域ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TsfRegionName 集群所属TSF地域名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TsfZoneId 集群所属TSF可用区ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TsfZoneName 集群所属TSF可用区名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeleteFlagReason 集群不可删除的原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 集群所属私有网络子网ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterLimitCpu 集群剩余 cpu limit
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterLimitMem 集群剩余 memory limit
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunServiceInstanceCount 运行服务实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param OperationInfo $OperationInfo 给前端的按钮控制信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterVersion 容器集群版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GroupCount 部署组总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunGroupCount 运行中部署组数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StopGroupCount 停止中部署组数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AbnormalGroupCount 异常部署组数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterRemarkName 集群备注名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KuberneteApiServer api地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KuberneteNativeType K : kubeconfig, S : service account
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KuberneteNativeSecret native secret
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("ClusterDesc",$param) and $param["ClusterDesc"] !== null) {
            $this->ClusterDesc = $param["ClusterDesc"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("ClusterCIDR",$param) and $param["ClusterCIDR"] !== null) {
            $this->ClusterCIDR = $param["ClusterCIDR"];
        }

        if (array_key_exists("ClusterTotalCpu",$param) and $param["ClusterTotalCpu"] !== null) {
            $this->ClusterTotalCpu = $param["ClusterTotalCpu"];
        }

        if (array_key_exists("ClusterTotalMem",$param) and $param["ClusterTotalMem"] !== null) {
            $this->ClusterTotalMem = $param["ClusterTotalMem"];
        }

        if (array_key_exists("ClusterUsedCpu",$param) and $param["ClusterUsedCpu"] !== null) {
            $this->ClusterUsedCpu = $param["ClusterUsedCpu"];
        }

        if (array_key_exists("ClusterUsedMem",$param) and $param["ClusterUsedMem"] !== null) {
            $this->ClusterUsedMem = $param["ClusterUsedMem"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("RunInstanceCount",$param) and $param["RunInstanceCount"] !== null) {
            $this->RunInstanceCount = $param["RunInstanceCount"];
        }

        if (array_key_exists("NormalInstanceCount",$param) and $param["NormalInstanceCount"] !== null) {
            $this->NormalInstanceCount = $param["NormalInstanceCount"];
        }

        if (array_key_exists("DeleteFlag",$param) and $param["DeleteFlag"] !== null) {
            $this->DeleteFlag = $param["DeleteFlag"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TsfRegionId",$param) and $param["TsfRegionId"] !== null) {
            $this->TsfRegionId = $param["TsfRegionId"];
        }

        if (array_key_exists("TsfRegionName",$param) and $param["TsfRegionName"] !== null) {
            $this->TsfRegionName = $param["TsfRegionName"];
        }

        if (array_key_exists("TsfZoneId",$param) and $param["TsfZoneId"] !== null) {
            $this->TsfZoneId = $param["TsfZoneId"];
        }

        if (array_key_exists("TsfZoneName",$param) and $param["TsfZoneName"] !== null) {
            $this->TsfZoneName = $param["TsfZoneName"];
        }

        if (array_key_exists("DeleteFlagReason",$param) and $param["DeleteFlagReason"] !== null) {
            $this->DeleteFlagReason = $param["DeleteFlagReason"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ClusterLimitCpu",$param) and $param["ClusterLimitCpu"] !== null) {
            $this->ClusterLimitCpu = $param["ClusterLimitCpu"];
        }

        if (array_key_exists("ClusterLimitMem",$param) and $param["ClusterLimitMem"] !== null) {
            $this->ClusterLimitMem = $param["ClusterLimitMem"];
        }

        if (array_key_exists("RunServiceInstanceCount",$param) and $param["RunServiceInstanceCount"] !== null) {
            $this->RunServiceInstanceCount = $param["RunServiceInstanceCount"];
        }

        if (array_key_exists("OperationInfo",$param) and $param["OperationInfo"] !== null) {
            $this->OperationInfo = new OperationInfo();
            $this->OperationInfo->deserialize($param["OperationInfo"]);
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("GroupCount",$param) and $param["GroupCount"] !== null) {
            $this->GroupCount = $param["GroupCount"];
        }

        if (array_key_exists("RunGroupCount",$param) and $param["RunGroupCount"] !== null) {
            $this->RunGroupCount = $param["RunGroupCount"];
        }

        if (array_key_exists("StopGroupCount",$param) and $param["StopGroupCount"] !== null) {
            $this->StopGroupCount = $param["StopGroupCount"];
        }

        if (array_key_exists("AbnormalGroupCount",$param) and $param["AbnormalGroupCount"] !== null) {
            $this->AbnormalGroupCount = $param["AbnormalGroupCount"];
        }

        if (array_key_exists("ClusterRemarkName",$param) and $param["ClusterRemarkName"] !== null) {
            $this->ClusterRemarkName = $param["ClusterRemarkName"];
        }

        if (array_key_exists("KuberneteApiServer",$param) and $param["KuberneteApiServer"] !== null) {
            $this->KuberneteApiServer = $param["KuberneteApiServer"];
        }

        if (array_key_exists("KuberneteNativeType",$param) and $param["KuberneteNativeType"] !== null) {
            $this->KuberneteNativeType = $param["KuberneteNativeType"];
        }

        if (array_key_exists("KuberneteNativeSecret",$param) and $param["KuberneteNativeSecret"] !== null) {
            $this->KuberneteNativeSecret = $param["KuberneteNativeSecret"];
        }
    }
}
