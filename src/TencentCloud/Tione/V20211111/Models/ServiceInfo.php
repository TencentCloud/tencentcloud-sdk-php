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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 推理服务在集群中的信息
 *
 * @method integer getReplicas() 获取期望运行的Pod数量，停止状态是0
不同计费模式和调节模式下对应关系如下
PREPAID 和 POSTPAID_BY_HOUR:
手动调节模式下对应 实例数量
自动调节模式下对应 基于时间的默认策略的实例数量
HYBRID_PAID:
后付费实例手动调节模式下对应 实例数量
后付费实例自动调节模式下对应 时间策略的默认策略的实例数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicas(integer $Replicas) 设置期望运行的Pod数量，停止状态是0
不同计费模式和调节模式下对应关系如下
PREPAID 和 POSTPAID_BY_HOUR:
手动调节模式下对应 实例数量
自动调节模式下对应 基于时间的默认策略的实例数量
HYBRID_PAID:
后付费实例手动调节模式下对应 实例数量
后付费实例自动调节模式下对应 时间策略的默认策略的实例数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageInfo getImageInfo() 获取镜像信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageInfo(ImageInfo $ImageInfo) 设置镜像信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEnv() 获取环境变量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnv(array $Env) 设置环境变量
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResourceInfo getResources() 获取资源信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResources(ResourceInfo $Resources) 设置资源信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取后付费实例对应的机型规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置后付费实例对应的机型规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method ModelInfo getModelInfo() 获取模型信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelInfo(ModelInfo $ModelInfo) 设置模型信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getLogEnable() 获取是否启用日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogEnable(boolean $LogEnable) 设置是否启用日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method LogConfig getLogConfig() 获取日志配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogConfig(LogConfig $LogConfig) 设置日志配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAuthorizationEnable() 获取是否开启鉴权
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthorizationEnable(boolean $AuthorizationEnable) 设置是否开启鉴权
注意：此字段可能返回 null，表示取不到有效值。
 * @method HorizontalPodAutoscaler getHorizontalPodAutoscaler() 获取hpa配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHorizontalPodAutoscaler(HorizontalPodAutoscaler $HorizontalPodAutoscaler) 设置hpa配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method WorkloadStatus getStatus() 获取服务的状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(WorkloadStatus $Status) 设置服务的状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWeight() 获取权重
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(integer $Weight) 设置权重
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPodList() 获取实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodList(array $PodList) 设置实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResourceInfo getResourceTotal() 获取资源总量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceTotal(ResourceInfo $ResourceTotal) 设置资源总量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOldReplicas() 获取历史实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOldReplicas(integer $OldReplicas) 设置历史实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHybridBillingPrepaidReplicas() 获取计费模式[HYBRID_PAID]时生效, 用于标识混合计费模式下的预付费实例数, 若不填则默认为1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHybridBillingPrepaidReplicas(integer $HybridBillingPrepaidReplicas) 设置计费模式[HYBRID_PAID]时生效, 用于标识混合计费模式下的预付费实例数, 若不填则默认为1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOldHybridBillingPrepaidReplicas() 获取历史 HYBRID_PAID 时的实例数，用户恢复服务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOldHybridBillingPrepaidReplicas(integer $OldHybridBillingPrepaidReplicas) 设置历史 HYBRID_PAID 时的实例数，用户恢复服务
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getModelHotUpdateEnable() 获取是否开启模型的热更新。默认不开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelHotUpdateEnable(boolean $ModelHotUpdateEnable) 设置是否开启模型的热更新。默认不开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method Pod getPods() 获取Pod列表信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPods(Pod $Pods) 设置Pod列表信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPodInfos() 获取Pod列表信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodInfos(array $PodInfos) 设置Pod列表信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScaleStrategy() 获取定时伸缩策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScaleStrategy(string $ScaleStrategy) 设置定时伸缩策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCronScaleJobs() 获取定时伸缩任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCronScaleJobs(array $CronScaleJobs) 设置定时伸缩任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScaleMode() 获取实例数量调节方式,默认为手动
支持：自动 - "AUTO", 手动 - "MANUAL"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScaleMode(string $ScaleMode) 设置实例数量调节方式,默认为手动
支持：自动 - "AUTO", 手动 - "MANUAL"
注意：此字段可能返回 null，表示取不到有效值。
 * @method ServiceLimit getServiceLimit() 获取服务限速限流相关配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceLimit(ServiceLimit $ServiceLimit) 设置服务限速限流相关配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduledAction() 获取定时停止的配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduledAction(string $ScheduledAction) 设置定时停止的配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServiceInfo extends AbstractModel
{
    /**
     * @var integer 期望运行的Pod数量，停止状态是0
不同计费模式和调节模式下对应关系如下
PREPAID 和 POSTPAID_BY_HOUR:
手动调节模式下对应 实例数量
自动调节模式下对应 基于时间的默认策略的实例数量
HYBRID_PAID:
后付费实例手动调节模式下对应 实例数量
后付费实例自动调节模式下对应 时间策略的默认策略的实例数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Replicas;

    /**
     * @var ImageInfo 镜像信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageInfo;

    /**
     * @var array 环境变量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Env;

    /**
     * @var ResourceInfo 资源信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resources;

    /**
     * @var string 后付费实例对应的机型规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var ModelInfo 模型信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelInfo;

    /**
     * @var boolean 是否启用日志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogEnable;

    /**
     * @var LogConfig 日志配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogConfig;

    /**
     * @var boolean 是否开启鉴权
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthorizationEnable;

    /**
     * @var HorizontalPodAutoscaler hpa配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HorizontalPodAutoscaler;

    /**
     * @var WorkloadStatus 服务的状态描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 权重
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @var array 实例列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodList;

    /**
     * @var ResourceInfo 资源总量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceTotal;

    /**
     * @var integer 历史实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OldReplicas;

    /**
     * @var integer 计费模式[HYBRID_PAID]时生效, 用于标识混合计费模式下的预付费实例数, 若不填则默认为1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HybridBillingPrepaidReplicas;

    /**
     * @var integer 历史 HYBRID_PAID 时的实例数，用户恢复服务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OldHybridBillingPrepaidReplicas;

    /**
     * @var boolean 是否开启模型的热更新。默认不开启
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelHotUpdateEnable;

    /**
     * @var Pod Pod列表信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pods;

    /**
     * @var array Pod列表信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodInfos;

    /**
     * @var string 定时伸缩策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScaleStrategy;

    /**
     * @var array 定时伸缩任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CronScaleJobs;

    /**
     * @var string 实例数量调节方式,默认为手动
支持：自动 - "AUTO", 手动 - "MANUAL"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScaleMode;

    /**
     * @var ServiceLimit 服务限速限流相关配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceLimit;

    /**
     * @var string 定时停止的配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduledAction;

    /**
     * @param integer $Replicas 期望运行的Pod数量，停止状态是0
不同计费模式和调节模式下对应关系如下
PREPAID 和 POSTPAID_BY_HOUR:
手动调节模式下对应 实例数量
自动调节模式下对应 基于时间的默认策略的实例数量
HYBRID_PAID:
后付费实例手动调节模式下对应 实例数量
后付费实例自动调节模式下对应 时间策略的默认策略的实例数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageInfo $ImageInfo 镜像信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Env 环境变量
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResourceInfo $Resources 资源信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType 后付费实例对应的机型规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param ModelInfo $ModelInfo 模型信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $LogEnable 是否启用日志
注意：此字段可能返回 null，表示取不到有效值。
     * @param LogConfig $LogConfig 日志配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AuthorizationEnable 是否开启鉴权
注意：此字段可能返回 null，表示取不到有效值。
     * @param HorizontalPodAutoscaler $HorizontalPodAutoscaler hpa配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param WorkloadStatus $Status 服务的状态描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Weight 权重
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PodList 实例列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResourceInfo $ResourceTotal 资源总量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OldReplicas 历史实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HybridBillingPrepaidReplicas 计费模式[HYBRID_PAID]时生效, 用于标识混合计费模式下的预付费实例数, 若不填则默认为1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OldHybridBillingPrepaidReplicas 历史 HYBRID_PAID 时的实例数，用户恢复服务
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ModelHotUpdateEnable 是否开启模型的热更新。默认不开启
注意：此字段可能返回 null，表示取不到有效值。
     * @param Pod $Pods Pod列表信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PodInfos Pod列表信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScaleStrategy 定时伸缩策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CronScaleJobs 定时伸缩任务
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScaleMode 实例数量调节方式,默认为手动
支持：自动 - "AUTO", 手动 - "MANUAL"
注意：此字段可能返回 null，表示取不到有效值。
     * @param ServiceLimit $ServiceLimit 服务限速限流相关配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScheduledAction 定时停止的配置
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
        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("ImageInfo",$param) and $param["ImageInfo"] !== null) {
            $this->ImageInfo = new ImageInfo();
            $this->ImageInfo->deserialize($param["ImageInfo"]);
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = [];
            foreach ($param["Env"] as $key => $value){
                $obj = new EnvVar();
                $obj->deserialize($value);
                array_push($this->Env, $obj);
            }
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = new ResourceInfo();
            $this->Resources->deserialize($param["Resources"]);
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ModelInfo",$param) and $param["ModelInfo"] !== null) {
            $this->ModelInfo = new ModelInfo();
            $this->ModelInfo->deserialize($param["ModelInfo"]);
        }

        if (array_key_exists("LogEnable",$param) and $param["LogEnable"] !== null) {
            $this->LogEnable = $param["LogEnable"];
        }

        if (array_key_exists("LogConfig",$param) and $param["LogConfig"] !== null) {
            $this->LogConfig = new LogConfig();
            $this->LogConfig->deserialize($param["LogConfig"]);
        }

        if (array_key_exists("AuthorizationEnable",$param) and $param["AuthorizationEnable"] !== null) {
            $this->AuthorizationEnable = $param["AuthorizationEnable"];
        }

        if (array_key_exists("HorizontalPodAutoscaler",$param) and $param["HorizontalPodAutoscaler"] !== null) {
            $this->HorizontalPodAutoscaler = new HorizontalPodAutoscaler();
            $this->HorizontalPodAutoscaler->deserialize($param["HorizontalPodAutoscaler"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = new WorkloadStatus();
            $this->Status->deserialize($param["Status"]);
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("PodList",$param) and $param["PodList"] !== null) {
            $this->PodList = $param["PodList"];
        }

        if (array_key_exists("ResourceTotal",$param) and $param["ResourceTotal"] !== null) {
            $this->ResourceTotal = new ResourceInfo();
            $this->ResourceTotal->deserialize($param["ResourceTotal"]);
        }

        if (array_key_exists("OldReplicas",$param) and $param["OldReplicas"] !== null) {
            $this->OldReplicas = $param["OldReplicas"];
        }

        if (array_key_exists("HybridBillingPrepaidReplicas",$param) and $param["HybridBillingPrepaidReplicas"] !== null) {
            $this->HybridBillingPrepaidReplicas = $param["HybridBillingPrepaidReplicas"];
        }

        if (array_key_exists("OldHybridBillingPrepaidReplicas",$param) and $param["OldHybridBillingPrepaidReplicas"] !== null) {
            $this->OldHybridBillingPrepaidReplicas = $param["OldHybridBillingPrepaidReplicas"];
        }

        if (array_key_exists("ModelHotUpdateEnable",$param) and $param["ModelHotUpdateEnable"] !== null) {
            $this->ModelHotUpdateEnable = $param["ModelHotUpdateEnable"];
        }

        if (array_key_exists("Pods",$param) and $param["Pods"] !== null) {
            $this->Pods = new Pod();
            $this->Pods->deserialize($param["Pods"]);
        }

        if (array_key_exists("PodInfos",$param) and $param["PodInfos"] !== null) {
            $this->PodInfos = [];
            foreach ($param["PodInfos"] as $key => $value){
                $obj = new Pod();
                $obj->deserialize($value);
                array_push($this->PodInfos, $obj);
            }
        }

        if (array_key_exists("ScaleStrategy",$param) and $param["ScaleStrategy"] !== null) {
            $this->ScaleStrategy = $param["ScaleStrategy"];
        }

        if (array_key_exists("CronScaleJobs",$param) and $param["CronScaleJobs"] !== null) {
            $this->CronScaleJobs = [];
            foreach ($param["CronScaleJobs"] as $key => $value){
                $obj = new CronScaleJob();
                $obj->deserialize($value);
                array_push($this->CronScaleJobs, $obj);
            }
        }

        if (array_key_exists("ScaleMode",$param) and $param["ScaleMode"] !== null) {
            $this->ScaleMode = $param["ScaleMode"];
        }

        if (array_key_exists("ServiceLimit",$param) and $param["ServiceLimit"] !== null) {
            $this->ServiceLimit = new ServiceLimit();
            $this->ServiceLimit->deserialize($param["ServiceLimit"]);
        }

        if (array_key_exists("ScheduledAction",$param) and $param["ScheduledAction"] !== null) {
            $this->ScheduledAction = $param["ScheduledAction"];
        }
    }
}
