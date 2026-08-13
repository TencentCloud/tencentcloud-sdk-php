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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务详情
 *
 * @method string getServiceId() 获取<p>服务id</p>
 * @method void setServiceId(string $ServiceId) 设置<p>服务id</p>
 * @method string getServiceName() 获取<p>服务名称</p>
 * @method void setServiceName(string $ServiceName) 设置<p>服务名称</p>
 * @method string getServiceState() 获取<p>服务状态</p>
 * @method void setServiceState(string $ServiceState) 设置<p>服务状态</p>
 * @method integer getRunningReplicas() 获取<p>运行中的副本数</p>
 * @method void setRunningReplicas(integer $RunningReplicas) 设置<p>运行中的副本数</p>
 * @method integer getTotalReplicas() 获取<p>期望的副本总数</p>
 * @method void setTotalReplicas(integer $TotalReplicas) 设置<p>期望的副本总数</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method array getComputeSet() 获取<p>算力套餐详情</p>
 * @method void setComputeSet(array $ComputeSet) 设置<p>算力套餐详情</p>
 * @method string getModelName() 获取<p>模型名称</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名称</p>
 * @method array getDeploymentConfigs() 获取<p>服务部署信息</p>
 * @method void setDeploymentConfigs(array $DeploymentConfigs) 设置<p>服务部署信息</p>
 * @method HyperParam getHyperParam() 获取<p>服务超参数配置</p>
 * @method void setHyperParam(HyperParam $HyperParam) 设置<p>服务超参数配置</p>
 * @method string getSecurityType() 获取<p>安全类型</p>
 * @method void setSecurityType(string $SecurityType) 设置<p>安全类型</p>
 * @method array getRoleComputeSet() 获取<p>角色算力配置列表</p>
 * @method void setRoleComputeSet(array $RoleComputeSet) 设置<p>角色算力配置列表</p>
 * @method integer getTargetReplicas() 获取<p>目标副本数</p>
 * @method void setTargetReplicas(integer $TargetReplicas) 设置<p>目标副本数</p>
 * @method string getChargeType() 获取<p>计费类型：POSTPAID_BY_HOUR(按量)/PREPAID_BY_MONTH(包月)</p>
 * @method void setChargeType(string $ChargeType) 设置<p>计费类型：POSTPAID_BY_HOUR(按量)/PREPAID_BY_MONTH(包月)</p>
 * @method string getExpireTime() 获取<p>到期时间(包月)，按量为空</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>到期时间(包月)，按量为空</p>
 * @method string getRenewFlag() 获取<p>自动续费标识(包月)</p>
 * @method void setRenewFlag(string $RenewFlag) 设置<p>自动续费标识(包月)</p>
 * @method string getRestrictState() 获取<p>受限状态(如欠费隔离)</p>
 * @method void setRestrictState(string $RestrictState) 设置<p>受限状态(如欠费隔离)</p>
 * @method integer getIsCustomDeploy() 获取<p>是否自定义部署：1是 0否</p>
 * @method void setIsCustomDeploy(integer $IsCustomDeploy) 设置<p>是否自定义部署：1是 0否</p>
 */
class ServiceDetail extends AbstractModel
{
    /**
     * @var string <p>服务id</p>
     */
    public $ServiceId;

    /**
     * @var string <p>服务名称</p>
     */
    public $ServiceName;

    /**
     * @var string <p>服务状态</p>
     */
    public $ServiceState;

    /**
     * @var integer <p>运行中的副本数</p>
     */
    public $RunningReplicas;

    /**
     * @var integer <p>期望的副本总数</p>
     */
    public $TotalReplicas;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var array <p>算力套餐详情</p>
     */
    public $ComputeSet;

    /**
     * @var string <p>模型名称</p>
     */
    public $ModelName;

    /**
     * @var array <p>服务部署信息</p>
     */
    public $DeploymentConfigs;

    /**
     * @var HyperParam <p>服务超参数配置</p>
     */
    public $HyperParam;

    /**
     * @var string <p>安全类型</p>
     */
    public $SecurityType;

    /**
     * @var array <p>角色算力配置列表</p>
     */
    public $RoleComputeSet;

    /**
     * @var integer <p>目标副本数</p>
     */
    public $TargetReplicas;

    /**
     * @var string <p>计费类型：POSTPAID_BY_HOUR(按量)/PREPAID_BY_MONTH(包月)</p>
     */
    public $ChargeType;

    /**
     * @var string <p>到期时间(包月)，按量为空</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>自动续费标识(包月)</p>
     */
    public $RenewFlag;

    /**
     * @var string <p>受限状态(如欠费隔离)</p>
     */
    public $RestrictState;

    /**
     * @var integer <p>是否自定义部署：1是 0否</p>
     */
    public $IsCustomDeploy;

    /**
     * @param string $ServiceId <p>服务id</p>
     * @param string $ServiceName <p>服务名称</p>
     * @param string $ServiceState <p>服务状态</p>
     * @param integer $RunningReplicas <p>运行中的副本数</p>
     * @param integer $TotalReplicas <p>期望的副本总数</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param array $ComputeSet <p>算力套餐详情</p>
     * @param string $ModelName <p>模型名称</p>
     * @param array $DeploymentConfigs <p>服务部署信息</p>
     * @param HyperParam $HyperParam <p>服务超参数配置</p>
     * @param string $SecurityType <p>安全类型</p>
     * @param array $RoleComputeSet <p>角色算力配置列表</p>
     * @param integer $TargetReplicas <p>目标副本数</p>
     * @param string $ChargeType <p>计费类型：POSTPAID_BY_HOUR(按量)/PREPAID_BY_MONTH(包月)</p>
     * @param string $ExpireTime <p>到期时间(包月)，按量为空</p>
     * @param string $RenewFlag <p>自动续费标识(包月)</p>
     * @param string $RestrictState <p>受限状态(如欠费隔离)</p>
     * @param integer $IsCustomDeploy <p>是否自定义部署：1是 0否</p>
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceState",$param) and $param["ServiceState"] !== null) {
            $this->ServiceState = $param["ServiceState"];
        }

        if (array_key_exists("RunningReplicas",$param) and $param["RunningReplicas"] !== null) {
            $this->RunningReplicas = $param["RunningReplicas"];
        }

        if (array_key_exists("TotalReplicas",$param) and $param["TotalReplicas"] !== null) {
            $this->TotalReplicas = $param["TotalReplicas"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ComputeSet",$param) and $param["ComputeSet"] !== null) {
            $this->ComputeSet = [];
            foreach ($param["ComputeSet"] as $key => $value){
                $obj = new ComputeDetail();
                $obj->deserialize($value);
                array_push($this->ComputeSet, $obj);
            }
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("DeploymentConfigs",$param) and $param["DeploymentConfigs"] !== null) {
            $this->DeploymentConfigs = [];
            foreach ($param["DeploymentConfigs"] as $key => $value){
                $obj = new DeploymentConfig();
                $obj->deserialize($value);
                array_push($this->DeploymentConfigs, $obj);
            }
        }

        if (array_key_exists("HyperParam",$param) and $param["HyperParam"] !== null) {
            $this->HyperParam = new HyperParam();
            $this->HyperParam->deserialize($param["HyperParam"]);
        }

        if (array_key_exists("SecurityType",$param) and $param["SecurityType"] !== null) {
            $this->SecurityType = $param["SecurityType"];
        }

        if (array_key_exists("RoleComputeSet",$param) and $param["RoleComputeSet"] !== null) {
            $this->RoleComputeSet = [];
            foreach ($param["RoleComputeSet"] as $key => $value){
                $obj = new ComputeDetail();
                $obj->deserialize($value);
                array_push($this->RoleComputeSet, $obj);
            }
        }

        if (array_key_exists("TargetReplicas",$param) and $param["TargetReplicas"] !== null) {
            $this->TargetReplicas = $param["TargetReplicas"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("RestrictState",$param) and $param["RestrictState"] !== null) {
            $this->RestrictState = $param["RestrictState"];
        }

        if (array_key_exists("IsCustomDeploy",$param) and $param["IsCustomDeploy"] !== null) {
            $this->IsCustomDeploy = $param["IsCustomDeploy"];
        }
    }
}
