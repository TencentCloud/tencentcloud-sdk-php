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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 推理服务在集群中的信息
 *
 * @method integer getReplicas() 获取<p>期望运行的Pod数量，停止状态是0<br>不同计费模式和调节模式下对应关系如下<br>PREPAID 和 POSTPAID_BY_HOUR:<br>手动调节模式下对应 实例数量<br>自动调节模式下对应 基于时间的默认策略的实例数量<br>HYBRID_PAID:<br>后付费实例手动调节模式下对应 实例数量<br>后付费实例自动调节模式下对应 时间策略的默认策略的实例数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicas(integer $Replicas) 设置<p>期望运行的Pod数量，停止状态是0<br>不同计费模式和调节模式下对应关系如下<br>PREPAID 和 POSTPAID_BY_HOUR:<br>手动调节模式下对应 实例数量<br>自动调节模式下对应 基于时间的默认策略的实例数量<br>HYBRID_PAID:<br>后付费实例手动调节模式下对应 实例数量<br>后付费实例自动调节模式下对应 时间策略的默认策略的实例数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageInfo getImageInfo() 获取<p>镜像信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageInfo(ImageInfo $ImageInfo) 设置<p>镜像信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEnv() 获取<p>环境变量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnv(array $Env) 设置<p>环境变量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResourceInfo getResources() 获取<p>资源信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResources(ResourceInfo $Resources) 设置<p>资源信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取<p>后付费实例对应的机型规格</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>后付费实例对应的机型规格</p>
 * @method ModelInfo getModelInfo() 获取<p>模型信息</p>
 * @method void setModelInfo(ModelInfo $ModelInfo) 设置<p>模型信息</p>
 * @method boolean getLogEnable() 获取<p>是否启用日志</p>
 * @method void setLogEnable(boolean $LogEnable) 设置<p>是否启用日志</p>
 * @method LogConfig getLogConfig() 获取<p>日志配置</p>
 * @method void setLogConfig(LogConfig $LogConfig) 设置<p>日志配置</p>
 * @method boolean getAuthorizationEnable() 获取<p>是否开启鉴权</p>
 * @method void setAuthorizationEnable(boolean $AuthorizationEnable) 设置<p>是否开启鉴权</p>
 * @method HorizontalPodAutoscaler getHorizontalPodAutoscaler() 获取<p>hpa配置</p>
 * @method void setHorizontalPodAutoscaler(HorizontalPodAutoscaler $HorizontalPodAutoscaler) 设置<p>hpa配置</p>
 * @method WorkloadStatus getStatus() 获取<p>服务的状态描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(WorkloadStatus $Status) 设置<p>服务的状态描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWeight() 获取<p>权重</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(integer $Weight) 设置<p>权重</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResourceInfo getResourceTotal() 获取<p>资源总量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceTotal(ResourceInfo $ResourceTotal) 设置<p>资源总量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOldReplicas() 获取<p>历史实例数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOldReplicas(integer $OldReplicas) 设置<p>历史实例数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHybridBillingPrepaidReplicas() 获取<p>计费模式[HYBRID_PAID]时生效, 用于标识混合计费模式下的预付费实例数, 若不填则默认为1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHybridBillingPrepaidReplicas(integer $HybridBillingPrepaidReplicas) 设置<p>计费模式[HYBRID_PAID]时生效, 用于标识混合计费模式下的预付费实例数, 若不填则默认为1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOldHybridBillingPrepaidReplicas() 获取<p>历史 HYBRID_PAID 时的实例数，用户恢复服务</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOldHybridBillingPrepaidReplicas(integer $OldHybridBillingPrepaidReplicas) 设置<p>历史 HYBRID_PAID 时的实例数，用户恢复服务</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getModelHotUpdateEnable() 获取<p>是否开启模型的热更新。默认不开启</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelHotUpdateEnable(boolean $ModelHotUpdateEnable) 设置<p>是否开启模型的热更新。默认不开启</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceAlias() 获取<p>服务的规格别名</p>
 * @method void setInstanceAlias(string $InstanceAlias) 设置<p>服务的规格别名</p>
 * @method string getScaleMode() 获取<p>实例数量调节方式,默认为手动<br>支持：自动 - &quot;AUTO&quot;, 手动 - &quot;MANUAL&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScaleMode(string $ScaleMode) 设置<p>实例数量调节方式,默认为手动<br>支持：自动 - &quot;AUTO&quot;, 手动 - &quot;MANUAL&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCronScaleJobs() 获取<p>定时伸缩任务</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCronScaleJobs(array $CronScaleJobs) 设置<p>定时伸缩任务</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScaleStrategy() 获取<p>定时伸缩策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScaleStrategy(string $ScaleStrategy) 设置<p>定时伸缩策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ScheduledAction getScheduledAction() 获取<p>定时停止的配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduledAction(ScheduledAction $ScheduledAction) 设置<p>定时停止的配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPodList() 获取<p>实例列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodList(array $PodList) 设置<p>实例列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method Pod getPods() 获取<p>Pod列表信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPods(Pod $Pods) 设置<p>Pod列表信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPodInfos() 获取<p>Pod列表信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodInfos(array $PodInfos) 设置<p>Pod列表信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ServiceLimit getServiceLimit() 获取<p>服务限速限流相关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceLimit(ServiceLimit $ServiceLimit) 设置<p>服务限速限流相关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getModelTurboEnable() 获取<p>是否开启模型的加速, 仅对StableDiffusion(动态加速)格式的模型有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelTurboEnable(boolean $ModelTurboEnable) 设置<p>是否开启模型的加速, 仅对StableDiffusion(动态加速)格式的模型有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method VolumeMount getVolumeMount() 获取<p>挂载</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeMount(VolumeMount $VolumeMount) 设置<p>挂载</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method InferCodeInfo getInferCodeInfo() 获取<p>推理代码信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInferCodeInfo(InferCodeInfo $InferCodeInfo) 设置<p>推理代码信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCommand() 获取<p>服务的启动命令</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCommand(string $Command) 设置<p>服务的启动命令</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ServiceEIP getServiceEIP() 获取<p>开启TIONE内网访问外部设置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceEIP(ServiceEIP $ServiceEIP) 设置<p>开启TIONE内网访问外部设置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getServicePort() 获取<p>服务端口，默认为8501</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServicePort(integer $ServicePort) 设置<p>服务端口，默认为8501</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTerminationGracePeriodSeconds() 获取<p>服务的优雅退出时限。单位为秒，默认值为30，最小为1</p>
 * @method void setTerminationGracePeriodSeconds(integer $TerminationGracePeriodSeconds) 设置<p>服务的优雅退出时限。单位为秒，默认值为30，最小为1</p>
 * @method array getPreStopCommand() 获取<p>服务实例停止前执行的命令，执行完毕或执行时间超过优雅退出时限后实例结束</p>
 * @method void setPreStopCommand(array $PreStopCommand) 设置<p>服务实例停止前执行的命令，执行完毕或执行时间超过优雅退出时限后实例结束</p>
 * @method boolean getGrpcEnable() 获取<p>是否启用grpc端口</p>
 * @method void setGrpcEnable(boolean $GrpcEnable) 设置<p>是否启用grpc端口</p>
 * @method HealthProbe getHealthProbe() 获取<p>健康探针</p>
 * @method void setHealthProbe(HealthProbe $HealthProbe) 设置<p>健康探针</p>
 * @method RollingUpdate getRollingUpdate() 获取<p>滚动更新配置</p>
 * @method void setRollingUpdate(RollingUpdate $RollingUpdate) 设置<p>滚动更新配置</p>
 * @method integer getInstancePerReplicas() 获取<p>单副本下的实例数，仅在部署类型为DIST、ROLE时生效，默认1</p>
 * @method void setInstancePerReplicas(integer $InstancePerReplicas) 设置<p>单副本下的实例数，仅在部署类型为DIST、ROLE时生效，默认1</p>
 * @method array getVolumeMounts() 获取<p>批量数据盘挂载配置</p>
 * @method void setVolumeMounts(array $VolumeMounts) 设置<p>批量数据盘挂载配置</p>
 * @method string getSchedulingStrategy() 获取<p>调度策略 [binpack] 优先占满整机，尽量避免碎卡（默认值）[spread] 优先分散在各个节点，确保服务高可用</p>
 * @method void setSchedulingStrategy(string $SchedulingStrategy) 设置<p>调度策略 [binpack] 优先占满整机，尽量避免碎卡（默认值）[spread] 优先分散在各个节点，确保服务高可用</p>
 * @method integer getNodeCount() 获取<p>服务实际运行的节点数</p>
 * @method void setNodeCount(integer $NodeCount) 设置<p>服务实际运行的节点数</p>
 */
class ServiceInfo extends AbstractModel
{
    /**
     * @var integer <p>期望运行的Pod数量，停止状态是0<br>不同计费模式和调节模式下对应关系如下<br>PREPAID 和 POSTPAID_BY_HOUR:<br>手动调节模式下对应 实例数量<br>自动调节模式下对应 基于时间的默认策略的实例数量<br>HYBRID_PAID:<br>后付费实例手动调节模式下对应 实例数量<br>后付费实例自动调节模式下对应 时间策略的默认策略的实例数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Replicas;

    /**
     * @var ImageInfo <p>镜像信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageInfo;

    /**
     * @var array <p>环境变量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Env;

    /**
     * @var ResourceInfo <p>资源信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resources;

    /**
     * @var string <p>后付费实例对应的机型规格</p>
     */
    public $InstanceType;

    /**
     * @var ModelInfo <p>模型信息</p>
     */
    public $ModelInfo;

    /**
     * @var boolean <p>是否启用日志</p>
     */
    public $LogEnable;

    /**
     * @var LogConfig <p>日志配置</p>
     */
    public $LogConfig;

    /**
     * @var boolean <p>是否开启鉴权</p>
     */
    public $AuthorizationEnable;

    /**
     * @var HorizontalPodAutoscaler <p>hpa配置</p>
     */
    public $HorizontalPodAutoscaler;

    /**
     * @var WorkloadStatus <p>服务的状态描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer <p>权重</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @var ResourceInfo <p>资源总量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceTotal;

    /**
     * @var integer <p>历史实例数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OldReplicas;

    /**
     * @var integer <p>计费模式[HYBRID_PAID]时生效, 用于标识混合计费模式下的预付费实例数, 若不填则默认为1</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HybridBillingPrepaidReplicas;

    /**
     * @var integer <p>历史 HYBRID_PAID 时的实例数，用户恢复服务</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OldHybridBillingPrepaidReplicas;

    /**
     * @var boolean <p>是否开启模型的热更新。默认不开启</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelHotUpdateEnable;

    /**
     * @var string <p>服务的规格别名</p>
     */
    public $InstanceAlias;

    /**
     * @var string <p>实例数量调节方式,默认为手动<br>支持：自动 - &quot;AUTO&quot;, 手动 - &quot;MANUAL&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScaleMode;

    /**
     * @var array <p>定时伸缩任务</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CronScaleJobs;

    /**
     * @var string <p>定时伸缩策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScaleStrategy;

    /**
     * @var ScheduledAction <p>定时停止的配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduledAction;

    /**
     * @var array <p>实例列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $PodList;

    /**
     * @var Pod <p>Pod列表信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $Pods;

    /**
     * @var array <p>Pod列表信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodInfos;

    /**
     * @var ServiceLimit <p>服务限速限流相关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceLimit;

    /**
     * @var boolean <p>是否开启模型的加速, 仅对StableDiffusion(动态加速)格式的模型有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelTurboEnable;

    /**
     * @var VolumeMount <p>挂载</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeMount;

    /**
     * @var InferCodeInfo <p>推理代码信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InferCodeInfo;

    /**
     * @var string <p>服务的启动命令</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Command;

    /**
     * @var ServiceEIP <p>开启TIONE内网访问外部设置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceEIP;

    /**
     * @var integer <p>服务端口，默认为8501</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServicePort;

    /**
     * @var integer <p>服务的优雅退出时限。单位为秒，默认值为30，最小为1</p>
     */
    public $TerminationGracePeriodSeconds;

    /**
     * @var array <p>服务实例停止前执行的命令，执行完毕或执行时间超过优雅退出时限后实例结束</p>
     */
    public $PreStopCommand;

    /**
     * @var boolean <p>是否启用grpc端口</p>
     */
    public $GrpcEnable;

    /**
     * @var HealthProbe <p>健康探针</p>
     */
    public $HealthProbe;

    /**
     * @var RollingUpdate <p>滚动更新配置</p>
     */
    public $RollingUpdate;

    /**
     * @var integer <p>单副本下的实例数，仅在部署类型为DIST、ROLE时生效，默认1</p>
     */
    public $InstancePerReplicas;

    /**
     * @var array <p>批量数据盘挂载配置</p>
     */
    public $VolumeMounts;

    /**
     * @var string <p>调度策略 [binpack] 优先占满整机，尽量避免碎卡（默认值）[spread] 优先分散在各个节点，确保服务高可用</p>
     */
    public $SchedulingStrategy;

    /**
     * @var integer <p>服务实际运行的节点数</p>
     */
    public $NodeCount;

    /**
     * @param integer $Replicas <p>期望运行的Pod数量，停止状态是0<br>不同计费模式和调节模式下对应关系如下<br>PREPAID 和 POSTPAID_BY_HOUR:<br>手动调节模式下对应 实例数量<br>自动调节模式下对应 基于时间的默认策略的实例数量<br>HYBRID_PAID:<br>后付费实例手动调节模式下对应 实例数量<br>后付费实例自动调节模式下对应 时间策略的默认策略的实例数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageInfo $ImageInfo <p>镜像信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Env <p>环境变量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResourceInfo $Resources <p>资源信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType <p>后付费实例对应的机型规格</p>
     * @param ModelInfo $ModelInfo <p>模型信息</p>
     * @param boolean $LogEnable <p>是否启用日志</p>
     * @param LogConfig $LogConfig <p>日志配置</p>
     * @param boolean $AuthorizationEnable <p>是否开启鉴权</p>
     * @param HorizontalPodAutoscaler $HorizontalPodAutoscaler <p>hpa配置</p>
     * @param WorkloadStatus $Status <p>服务的状态描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Weight <p>权重</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResourceInfo $ResourceTotal <p>资源总量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OldReplicas <p>历史实例数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HybridBillingPrepaidReplicas <p>计费模式[HYBRID_PAID]时生效, 用于标识混合计费模式下的预付费实例数, 若不填则默认为1</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OldHybridBillingPrepaidReplicas <p>历史 HYBRID_PAID 时的实例数，用户恢复服务</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ModelHotUpdateEnable <p>是否开启模型的热更新。默认不开启</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceAlias <p>服务的规格别名</p>
     * @param string $ScaleMode <p>实例数量调节方式,默认为手动<br>支持：自动 - &quot;AUTO&quot;, 手动 - &quot;MANUAL&quot;</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CronScaleJobs <p>定时伸缩任务</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScaleStrategy <p>定时伸缩策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ScheduledAction $ScheduledAction <p>定时停止的配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PodList <p>实例列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param Pod $Pods <p>Pod列表信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PodInfos <p>Pod列表信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ServiceLimit $ServiceLimit <p>服务限速限流相关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ModelTurboEnable <p>是否开启模型的加速, 仅对StableDiffusion(动态加速)格式的模型有效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param VolumeMount $VolumeMount <p>挂载</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param InferCodeInfo $InferCodeInfo <p>推理代码信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Command <p>服务的启动命令</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ServiceEIP $ServiceEIP <p>开启TIONE内网访问外部设置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ServicePort <p>服务端口，默认为8501</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TerminationGracePeriodSeconds <p>服务的优雅退出时限。单位为秒，默认值为30，最小为1</p>
     * @param array $PreStopCommand <p>服务实例停止前执行的命令，执行完毕或执行时间超过优雅退出时限后实例结束</p>
     * @param boolean $GrpcEnable <p>是否启用grpc端口</p>
     * @param HealthProbe $HealthProbe <p>健康探针</p>
     * @param RollingUpdate $RollingUpdate <p>滚动更新配置</p>
     * @param integer $InstancePerReplicas <p>单副本下的实例数，仅在部署类型为DIST、ROLE时生效，默认1</p>
     * @param array $VolumeMounts <p>批量数据盘挂载配置</p>
     * @param string $SchedulingStrategy <p>调度策略 [binpack] 优先占满整机，尽量避免碎卡（默认值）[spread] 优先分散在各个节点，确保服务高可用</p>
     * @param integer $NodeCount <p>服务实际运行的节点数</p>
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

        if (array_key_exists("InstanceAlias",$param) and $param["InstanceAlias"] !== null) {
            $this->InstanceAlias = $param["InstanceAlias"];
        }

        if (array_key_exists("ScaleMode",$param) and $param["ScaleMode"] !== null) {
            $this->ScaleMode = $param["ScaleMode"];
        }

        if (array_key_exists("CronScaleJobs",$param) and $param["CronScaleJobs"] !== null) {
            $this->CronScaleJobs = [];
            foreach ($param["CronScaleJobs"] as $key => $value){
                $obj = new CronScaleJob();
                $obj->deserialize($value);
                array_push($this->CronScaleJobs, $obj);
            }
        }

        if (array_key_exists("ScaleStrategy",$param) and $param["ScaleStrategy"] !== null) {
            $this->ScaleStrategy = $param["ScaleStrategy"];
        }

        if (array_key_exists("ScheduledAction",$param) and $param["ScheduledAction"] !== null) {
            $this->ScheduledAction = new ScheduledAction();
            $this->ScheduledAction->deserialize($param["ScheduledAction"]);
        }

        if (array_key_exists("PodList",$param) and $param["PodList"] !== null) {
            $this->PodList = $param["PodList"];
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

        if (array_key_exists("ServiceLimit",$param) and $param["ServiceLimit"] !== null) {
            $this->ServiceLimit = new ServiceLimit();
            $this->ServiceLimit->deserialize($param["ServiceLimit"]);
        }

        if (array_key_exists("ModelTurboEnable",$param) and $param["ModelTurboEnable"] !== null) {
            $this->ModelTurboEnable = $param["ModelTurboEnable"];
        }

        if (array_key_exists("VolumeMount",$param) and $param["VolumeMount"] !== null) {
            $this->VolumeMount = new VolumeMount();
            $this->VolumeMount->deserialize($param["VolumeMount"]);
        }

        if (array_key_exists("InferCodeInfo",$param) and $param["InferCodeInfo"] !== null) {
            $this->InferCodeInfo = new InferCodeInfo();
            $this->InferCodeInfo->deserialize($param["InferCodeInfo"]);
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("ServiceEIP",$param) and $param["ServiceEIP"] !== null) {
            $this->ServiceEIP = new ServiceEIP();
            $this->ServiceEIP->deserialize($param["ServiceEIP"]);
        }

        if (array_key_exists("ServicePort",$param) and $param["ServicePort"] !== null) {
            $this->ServicePort = $param["ServicePort"];
        }

        if (array_key_exists("TerminationGracePeriodSeconds",$param) and $param["TerminationGracePeriodSeconds"] !== null) {
            $this->TerminationGracePeriodSeconds = $param["TerminationGracePeriodSeconds"];
        }

        if (array_key_exists("PreStopCommand",$param) and $param["PreStopCommand"] !== null) {
            $this->PreStopCommand = $param["PreStopCommand"];
        }

        if (array_key_exists("GrpcEnable",$param) and $param["GrpcEnable"] !== null) {
            $this->GrpcEnable = $param["GrpcEnable"];
        }

        if (array_key_exists("HealthProbe",$param) and $param["HealthProbe"] !== null) {
            $this->HealthProbe = new HealthProbe();
            $this->HealthProbe->deserialize($param["HealthProbe"]);
        }

        if (array_key_exists("RollingUpdate",$param) and $param["RollingUpdate"] !== null) {
            $this->RollingUpdate = new RollingUpdate();
            $this->RollingUpdate->deserialize($param["RollingUpdate"]);
        }

        if (array_key_exists("InstancePerReplicas",$param) and $param["InstancePerReplicas"] !== null) {
            $this->InstancePerReplicas = $param["InstancePerReplicas"];
        }

        if (array_key_exists("VolumeMounts",$param) and $param["VolumeMounts"] !== null) {
            $this->VolumeMounts = [];
            foreach ($param["VolumeMounts"] as $key => $value){
                $obj = new VolumeMount();
                $obj->deserialize($value);
                array_push($this->VolumeMounts, $obj);
            }
        }

        if (array_key_exists("SchedulingStrategy",$param) and $param["SchedulingStrategy"] !== null) {
            $this->SchedulingStrategy = $param["SchedulingStrategy"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }
    }
}
