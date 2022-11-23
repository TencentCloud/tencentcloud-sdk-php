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
 * ModifyModelService请求参数结构体
 *
 * @method string getServiceId() 获取服务id
 * @method void setServiceId(string $ServiceId) 设置服务id
 * @method ModelInfo getModelInfo() 获取模型信息，需要挂载模型时填写
 * @method void setModelInfo(ModelInfo $ModelInfo) 设置模型信息，需要挂载模型时填写
 * @method ImageInfo getImageInfo() 获取镜像信息，配置服务运行所需的镜像地址等信息
 * @method void setImageInfo(ImageInfo $ImageInfo) 设置镜像信息，配置服务运行所需的镜像地址等信息
 * @method array getEnv() 获取环境变量，可选参数，用于配置容器中的环境变量
 * @method void setEnv(array $Env) 设置环境变量，可选参数，用于配置容器中的环境变量
 * @method ResourceInfo getResources() 获取资源描述，指定预付费模式下的cpu,mem,gpu等信息，后付费无需填写
 * @method void setResources(ResourceInfo $Resources) 设置资源描述，指定预付费模式下的cpu,mem,gpu等信息，后付费无需填写
 * @method string getInstanceType() 获取使用DescribeBillingSpecs接口返回的规格列表中的值，或者参考实例列表:
TI.S.MEDIUM.POST	2C4G
TI.S.LARGE.POST	4C8G
TI.S.2XLARGE16.POST	8C16G
TI.S.2XLARGE32.POST	8C32G
TI.S.4XLARGE32.POST	16C32G
TI.S.4XLARGE64.POST	16C64G
TI.S.6XLARGE48.POST	24C48G
TI.S.6XLARGE96.POST	24C96G
TI.S.8XLARGE64.POST	32C64G
TI.S.8XLARGE128.POST 32C128G
TI.GN7.LARGE20.POST	4C20G T4*1/4
TI.GN7.2XLARGE40.POST	10C40G T4*1/2
TI.GN7.2XLARGE32.POST	8C32G T4*1
TI.GN7.5XLARGE80.POST	20C80G T4*1
TI.GN7.8XLARGE128.POST	32C128G T4*1
TI.GN7.10XLARGE160.POST	40C160G T4*2
TI.GN7.20XLARGE320.POST	80C320G T4*4
 * @method void setInstanceType(string $InstanceType) 设置使用DescribeBillingSpecs接口返回的规格列表中的值，或者参考实例列表:
TI.S.MEDIUM.POST	2C4G
TI.S.LARGE.POST	4C8G
TI.S.2XLARGE16.POST	8C16G
TI.S.2XLARGE32.POST	8C32G
TI.S.4XLARGE32.POST	16C32G
TI.S.4XLARGE64.POST	16C64G
TI.S.6XLARGE48.POST	24C48G
TI.S.6XLARGE96.POST	24C96G
TI.S.8XLARGE64.POST	32C64G
TI.S.8XLARGE128.POST 32C128G
TI.GN7.LARGE20.POST	4C20G T4*1/4
TI.GN7.2XLARGE40.POST	10C40G T4*1/2
TI.GN7.2XLARGE32.POST	8C32G T4*1
TI.GN7.5XLARGE80.POST	20C80G T4*1
TI.GN7.8XLARGE128.POST	32C128G T4*1
TI.GN7.10XLARGE160.POST	40C160G T4*2
TI.GN7.20XLARGE320.POST	80C320G T4*4
 * @method string getScaleMode() 获取扩缩容类型 支持：自动 - "AUTO", 手动 - "MANUAL"
 * @method void setScaleMode(string $ScaleMode) 设置扩缩容类型 支持：自动 - "AUTO", 手动 - "MANUAL"
 * @method integer getReplicas() 获取实例数量, 不同计费模式和调节模式下对应关系如下
PREPAID 和 POSTPAID_BY_HOUR:
手动调节模式下对应 实例数量
自动调节模式下对应 基于时间的默认策略的实例数量
HYBRID_PAID:
后付费实例手动调节模式下对应 实例数量
后付费实例自动调节模式下对应 时间策略的默认策略的实例数量
 * @method void setReplicas(integer $Replicas) 设置实例数量, 不同计费模式和调节模式下对应关系如下
PREPAID 和 POSTPAID_BY_HOUR:
手动调节模式下对应 实例数量
自动调节模式下对应 基于时间的默认策略的实例数量
HYBRID_PAID:
后付费实例手动调节模式下对应 实例数量
后付费实例自动调节模式下对应 时间策略的默认策略的实例数量
 * @method HorizontalPodAutoscaler getHorizontalPodAutoscaler() 获取自动伸缩信息
 * @method void setHorizontalPodAutoscaler(HorizontalPodAutoscaler $HorizontalPodAutoscaler) 设置自动伸缩信息
 * @method boolean getLogEnable() 获取是否开启日志投递，开启后需填写配置投递到指定cls
 * @method void setLogEnable(boolean $LogEnable) 设置是否开启日志投递，开启后需填写配置投递到指定cls
 * @method LogConfig getLogConfig() 获取日志配置，需要投递服务日志到指定cls时填写
 * @method void setLogConfig(LogConfig $LogConfig) 设置日志配置，需要投递服务日志到指定cls时填写
 * @method string getServiceAction() 获取特殊更新行为： "STOP": 停止, "RESUME": 重启, "SCALE": 扩缩容, 存在这些特殊更新行为时，会忽略其他更新字段
 * @method void setServiceAction(string $ServiceAction) 设置特殊更新行为： "STOP": 停止, "RESUME": 重启, "SCALE": 扩缩容, 存在这些特殊更新行为时，会忽略其他更新字段
 * @method string getServiceDescription() 获取服务的描述
 * @method void setServiceDescription(string $ServiceDescription) 设置服务的描述
 * @method string getScaleStrategy() 获取自动伸缩策略
 * @method void setScaleStrategy(string $ScaleStrategy) 设置自动伸缩策略
 * @method array getCronScaleJobs() 获取自动伸缩策略配置 HPA : 通过HPA进行弹性伸缩 CRON 通过定时任务进行伸缩
 * @method void setCronScaleJobs(array $CronScaleJobs) 设置自动伸缩策略配置 HPA : 通过HPA进行弹性伸缩 CRON 通过定时任务进行伸缩
 * @method integer getHybridBillingPrepaidReplicas() 获取计费模式[HYBRID_PAID]时生效, 用于标识混合计费模式下的预付费实例数, 若不填则默认为1
 * @method void setHybridBillingPrepaidReplicas(integer $HybridBillingPrepaidReplicas) 设置计费模式[HYBRID_PAID]时生效, 用于标识混合计费模式下的预付费实例数, 若不填则默认为1
 * @method boolean getModelHotUpdateEnable() 获取是否开启模型的热更新。默认不开启
 * @method void setModelHotUpdateEnable(boolean $ModelHotUpdateEnable) 设置是否开启模型的热更新。默认不开启
 * @method ScheduledAction getScheduledAction() 获取定时停止配置
 * @method void setScheduledAction(ScheduledAction $ScheduledAction) 设置定时停止配置
 * @method ServiceLimit getServiceLimit() 获取服务限速限流相关配置
 * @method void setServiceLimit(ServiceLimit $ServiceLimit) 设置服务限速限流相关配置
 * @method VolumeMount getVolumeMount() 获取挂载配置，目前只支持CFS
 * @method void setVolumeMount(VolumeMount $VolumeMount) 设置挂载配置，目前只支持CFS
 */
class ModifyModelServiceRequest extends AbstractModel
{
    /**
     * @var string 服务id
     */
    public $ServiceId;

    /**
     * @var ModelInfo 模型信息，需要挂载模型时填写
     */
    public $ModelInfo;

    /**
     * @var ImageInfo 镜像信息，配置服务运行所需的镜像地址等信息
     */
    public $ImageInfo;

    /**
     * @var array 环境变量，可选参数，用于配置容器中的环境变量
     */
    public $Env;

    /**
     * @var ResourceInfo 资源描述，指定预付费模式下的cpu,mem,gpu等信息，后付费无需填写
     */
    public $Resources;

    /**
     * @var string 使用DescribeBillingSpecs接口返回的规格列表中的值，或者参考实例列表:
TI.S.MEDIUM.POST	2C4G
TI.S.LARGE.POST	4C8G
TI.S.2XLARGE16.POST	8C16G
TI.S.2XLARGE32.POST	8C32G
TI.S.4XLARGE32.POST	16C32G
TI.S.4XLARGE64.POST	16C64G
TI.S.6XLARGE48.POST	24C48G
TI.S.6XLARGE96.POST	24C96G
TI.S.8XLARGE64.POST	32C64G
TI.S.8XLARGE128.POST 32C128G
TI.GN7.LARGE20.POST	4C20G T4*1/4
TI.GN7.2XLARGE40.POST	10C40G T4*1/2
TI.GN7.2XLARGE32.POST	8C32G T4*1
TI.GN7.5XLARGE80.POST	20C80G T4*1
TI.GN7.8XLARGE128.POST	32C128G T4*1
TI.GN7.10XLARGE160.POST	40C160G T4*2
TI.GN7.20XLARGE320.POST	80C320G T4*4
     */
    public $InstanceType;

    /**
     * @var string 扩缩容类型 支持：自动 - "AUTO", 手动 - "MANUAL"
     */
    public $ScaleMode;

    /**
     * @var integer 实例数量, 不同计费模式和调节模式下对应关系如下
PREPAID 和 POSTPAID_BY_HOUR:
手动调节模式下对应 实例数量
自动调节模式下对应 基于时间的默认策略的实例数量
HYBRID_PAID:
后付费实例手动调节模式下对应 实例数量
后付费实例自动调节模式下对应 时间策略的默认策略的实例数量
     */
    public $Replicas;

    /**
     * @var HorizontalPodAutoscaler 自动伸缩信息
     */
    public $HorizontalPodAutoscaler;

    /**
     * @var boolean 是否开启日志投递，开启后需填写配置投递到指定cls
     */
    public $LogEnable;

    /**
     * @var LogConfig 日志配置，需要投递服务日志到指定cls时填写
     */
    public $LogConfig;

    /**
     * @var string 特殊更新行为： "STOP": 停止, "RESUME": 重启, "SCALE": 扩缩容, 存在这些特殊更新行为时，会忽略其他更新字段
     */
    public $ServiceAction;

    /**
     * @var string 服务的描述
     */
    public $ServiceDescription;

    /**
     * @var string 自动伸缩策略
     */
    public $ScaleStrategy;

    /**
     * @var array 自动伸缩策略配置 HPA : 通过HPA进行弹性伸缩 CRON 通过定时任务进行伸缩
     */
    public $CronScaleJobs;

    /**
     * @var integer 计费模式[HYBRID_PAID]时生效, 用于标识混合计费模式下的预付费实例数, 若不填则默认为1
     */
    public $HybridBillingPrepaidReplicas;

    /**
     * @var boolean 是否开启模型的热更新。默认不开启
     */
    public $ModelHotUpdateEnable;

    /**
     * @var ScheduledAction 定时停止配置
     */
    public $ScheduledAction;

    /**
     * @var ServiceLimit 服务限速限流相关配置
     */
    public $ServiceLimit;

    /**
     * @var VolumeMount 挂载配置，目前只支持CFS
     */
    public $VolumeMount;

    /**
     * @param string $ServiceId 服务id
     * @param ModelInfo $ModelInfo 模型信息，需要挂载模型时填写
     * @param ImageInfo $ImageInfo 镜像信息，配置服务运行所需的镜像地址等信息
     * @param array $Env 环境变量，可选参数，用于配置容器中的环境变量
     * @param ResourceInfo $Resources 资源描述，指定预付费模式下的cpu,mem,gpu等信息，后付费无需填写
     * @param string $InstanceType 使用DescribeBillingSpecs接口返回的规格列表中的值，或者参考实例列表:
TI.S.MEDIUM.POST	2C4G
TI.S.LARGE.POST	4C8G
TI.S.2XLARGE16.POST	8C16G
TI.S.2XLARGE32.POST	8C32G
TI.S.4XLARGE32.POST	16C32G
TI.S.4XLARGE64.POST	16C64G
TI.S.6XLARGE48.POST	24C48G
TI.S.6XLARGE96.POST	24C96G
TI.S.8XLARGE64.POST	32C64G
TI.S.8XLARGE128.POST 32C128G
TI.GN7.LARGE20.POST	4C20G T4*1/4
TI.GN7.2XLARGE40.POST	10C40G T4*1/2
TI.GN7.2XLARGE32.POST	8C32G T4*1
TI.GN7.5XLARGE80.POST	20C80G T4*1
TI.GN7.8XLARGE128.POST	32C128G T4*1
TI.GN7.10XLARGE160.POST	40C160G T4*2
TI.GN7.20XLARGE320.POST	80C320G T4*4
     * @param string $ScaleMode 扩缩容类型 支持：自动 - "AUTO", 手动 - "MANUAL"
     * @param integer $Replicas 实例数量, 不同计费模式和调节模式下对应关系如下
PREPAID 和 POSTPAID_BY_HOUR:
手动调节模式下对应 实例数量
自动调节模式下对应 基于时间的默认策略的实例数量
HYBRID_PAID:
后付费实例手动调节模式下对应 实例数量
后付费实例自动调节模式下对应 时间策略的默认策略的实例数量
     * @param HorizontalPodAutoscaler $HorizontalPodAutoscaler 自动伸缩信息
     * @param boolean $LogEnable 是否开启日志投递，开启后需填写配置投递到指定cls
     * @param LogConfig $LogConfig 日志配置，需要投递服务日志到指定cls时填写
     * @param string $ServiceAction 特殊更新行为： "STOP": 停止, "RESUME": 重启, "SCALE": 扩缩容, 存在这些特殊更新行为时，会忽略其他更新字段
     * @param string $ServiceDescription 服务的描述
     * @param string $ScaleStrategy 自动伸缩策略
     * @param array $CronScaleJobs 自动伸缩策略配置 HPA : 通过HPA进行弹性伸缩 CRON 通过定时任务进行伸缩
     * @param integer $HybridBillingPrepaidReplicas 计费模式[HYBRID_PAID]时生效, 用于标识混合计费模式下的预付费实例数, 若不填则默认为1
     * @param boolean $ModelHotUpdateEnable 是否开启模型的热更新。默认不开启
     * @param ScheduledAction $ScheduledAction 定时停止配置
     * @param ServiceLimit $ServiceLimit 服务限速限流相关配置
     * @param VolumeMount $VolumeMount 挂载配置，目前只支持CFS
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

        if (array_key_exists("ModelInfo",$param) and $param["ModelInfo"] !== null) {
            $this->ModelInfo = new ModelInfo();
            $this->ModelInfo->deserialize($param["ModelInfo"]);
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

        if (array_key_exists("ScaleMode",$param) and $param["ScaleMode"] !== null) {
            $this->ScaleMode = $param["ScaleMode"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("HorizontalPodAutoscaler",$param) and $param["HorizontalPodAutoscaler"] !== null) {
            $this->HorizontalPodAutoscaler = new HorizontalPodAutoscaler();
            $this->HorizontalPodAutoscaler->deserialize($param["HorizontalPodAutoscaler"]);
        }

        if (array_key_exists("LogEnable",$param) and $param["LogEnable"] !== null) {
            $this->LogEnable = $param["LogEnable"];
        }

        if (array_key_exists("LogConfig",$param) and $param["LogConfig"] !== null) {
            $this->LogConfig = new LogConfig();
            $this->LogConfig->deserialize($param["LogConfig"]);
        }

        if (array_key_exists("ServiceAction",$param) and $param["ServiceAction"] !== null) {
            $this->ServiceAction = $param["ServiceAction"];
        }

        if (array_key_exists("ServiceDescription",$param) and $param["ServiceDescription"] !== null) {
            $this->ServiceDescription = $param["ServiceDescription"];
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

        if (array_key_exists("HybridBillingPrepaidReplicas",$param) and $param["HybridBillingPrepaidReplicas"] !== null) {
            $this->HybridBillingPrepaidReplicas = $param["HybridBillingPrepaidReplicas"];
        }

        if (array_key_exists("ModelHotUpdateEnable",$param) and $param["ModelHotUpdateEnable"] !== null) {
            $this->ModelHotUpdateEnable = $param["ModelHotUpdateEnable"];
        }

        if (array_key_exists("ScheduledAction",$param) and $param["ScheduledAction"] !== null) {
            $this->ScheduledAction = new ScheduledAction();
            $this->ScheduledAction->deserialize($param["ScheduledAction"]);
        }

        if (array_key_exists("ServiceLimit",$param) and $param["ServiceLimit"] !== null) {
            $this->ServiceLimit = new ServiceLimit();
            $this->ServiceLimit->deserialize($param["ServiceLimit"]);
        }

        if (array_key_exists("VolumeMount",$param) and $param["VolumeMount"] !== null) {
            $this->VolumeMount = new VolumeMount();
            $this->VolumeMount->deserialize($param["VolumeMount"]);
        }
    }
}
