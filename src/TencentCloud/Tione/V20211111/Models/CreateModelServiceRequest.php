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
 * CreateModelService请求参数结构体
 *
 * @method string getServiceGroupId() 获取<p>新增版本时需要填写</p>
 * @method void setServiceGroupId(string $ServiceGroupId) 设置<p>新增版本时需要填写</p>
 * @method string getServiceGroupName() 获取<p>不超过60个字，仅支持英文、数字、下划线&quot;_&quot;、短横&quot;-&quot;，只能以英文、数字开头</p>
 * @method void setServiceGroupName(string $ServiceGroupName) 设置<p>不超过60个字，仅支持英文、数字、下划线&quot;_&quot;、短横&quot;-&quot;，只能以英文、数字开头</p>
 * @method string getServiceDescription() 获取<p>模型服务的描述</p>
 * @method void setServiceDescription(string $ServiceDescription) 设置<p>模型服务的描述</p>
 * @method string getChargeType() 获取<p>付费模式,有 PREPAID （包年包月）和 POSTPAID_BY_HOUR（按量付费）</p>
 * @method void setChargeType(string $ChargeType) 设置<p>付费模式,有 PREPAID （包年包月）和 POSTPAID_BY_HOUR（按量付费）</p>
 * @method string getResourceGroupId() 获取<p>预付费模式下所属的资源组id，同服务组下唯一</p>
 * @method void setResourceGroupId(string $ResourceGroupId) 设置<p>预付费模式下所属的资源组id，同服务组下唯一</p>
 * @method ModelInfo getModelInfo() 获取<p>模型信息，需要挂载模型时填写</p>
 * @method void setModelInfo(ModelInfo $ModelInfo) 设置<p>模型信息，需要挂载模型时填写</p>
 * @method ImageInfo getImageInfo() 获取<p>镜像信息，配置服务运行所需的镜像地址等信息</p>
 * @method void setImageInfo(ImageInfo $ImageInfo) 设置<p>镜像信息，配置服务运行所需的镜像地址等信息</p>
 * @method array getEnv() 获取<p>环境变量，可选参数，用于配置容器中的环境变量</p>
 * @method void setEnv(array $Env) 设置<p>环境变量，可选参数，用于配置容器中的环境变量</p>
 * @method ResourceInfo getResources() 获取<p>资源描述，指定包年包月模式下的cpu,mem,gpu等信息，后付费无需填写</p>
 * @method void setResources(ResourceInfo $Resources) 设置<p>资源描述，指定包年包月模式下的cpu,mem,gpu等信息，后付费无需填写</p>
 * @method string getInstanceType() 获取<p>使用DescribeBillingSpecs接口返回的规格列表中的值，或者参考实例列表:<br>TI.S.MEDIUM.POST    2C4G<br>TI.S.LARGE.POST    4C8G<br>TI.S.2XLARGE16.POST    8C16G<br>TI.S.2XLARGE32.POST    8C32G<br>TI.S.4XLARGE32.POST    16C32G<br>TI.S.4XLARGE64.POST    16C64G<br>TI.S.6XLARGE48.POST    24C48G<br>TI.S.6XLARGE96.POST    24C96G<br>TI.S.8XLARGE64.POST    32C64G<br>TI.S.8XLARGE128.POST 32C128G<br>TI.GN7.LARGE20.POST    4C20G T4<em>1/4<br>TI.GN7.2XLARGE40.POST    10C40G T4</em>1/2<br>TI.GN7.2XLARGE32.POST    8C32G T4<em>1<br>TI.GN7.5XLARGE80.POST    20C80G T4</em>1<br>TI.GN7.8XLARGE128.POST    32C128G T4<em>1<br>TI.GN7.10XLARGE160.POST    40C160G T4</em>2<br>TI.GN7.20XLARGE320.POST    80C320G T4*4</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>使用DescribeBillingSpecs接口返回的规格列表中的值，或者参考实例列表:<br>TI.S.MEDIUM.POST    2C4G<br>TI.S.LARGE.POST    4C8G<br>TI.S.2XLARGE16.POST    8C16G<br>TI.S.2XLARGE32.POST    8C32G<br>TI.S.4XLARGE32.POST    16C32G<br>TI.S.4XLARGE64.POST    16C64G<br>TI.S.6XLARGE48.POST    24C48G<br>TI.S.6XLARGE96.POST    24C96G<br>TI.S.8XLARGE64.POST    32C64G<br>TI.S.8XLARGE128.POST 32C128G<br>TI.GN7.LARGE20.POST    4C20G T4<em>1/4<br>TI.GN7.2XLARGE40.POST    10C40G T4</em>1/2<br>TI.GN7.2XLARGE32.POST    8C32G T4<em>1<br>TI.GN7.5XLARGE80.POST    20C80G T4</em>1<br>TI.GN7.8XLARGE128.POST    32C128G T4<em>1<br>TI.GN7.10XLARGE160.POST    40C160G T4</em>2<br>TI.GN7.20XLARGE320.POST    80C320G T4*4</p>
 * @method string getScaleMode() 获取<p>扩缩容类型 支持：自动 - &quot;AUTO&quot;, 手动 - &quot;MANUAL&quot;,默认为MANUAL</p>
 * @method void setScaleMode(string $ScaleMode) 设置<p>扩缩容类型 支持：自动 - &quot;AUTO&quot;, 手动 - &quot;MANUAL&quot;,默认为MANUAL</p>
 * @method integer getReplicas() 获取<p>实例数量, 不同计费模式和调节模式下对应关系如下<br>PREPAID 和 POSTPAID_BY_HOUR:<br>手动调节模式下对应 实例数量<br>自动调节模式下对应 基于时间的默认策略的实例数量<br>HYBRID_PAID:<br>后付费实例手动调节模式下对应 实例数量<br>后付费实例自动调节模式下对应 时间策略的默认策略的实例数量</p>
 * @method void setReplicas(integer $Replicas) 设置<p>实例数量, 不同计费模式和调节模式下对应关系如下<br>PREPAID 和 POSTPAID_BY_HOUR:<br>手动调节模式下对应 实例数量<br>自动调节模式下对应 基于时间的默认策略的实例数量<br>HYBRID_PAID:<br>后付费实例手动调节模式下对应 实例数量<br>后付费实例自动调节模式下对应 时间策略的默认策略的实例数量</p>
 * @method HorizontalPodAutoscaler getHorizontalPodAutoscaler() 获取<p>自动伸缩信息</p>
 * @method void setHorizontalPodAutoscaler(HorizontalPodAutoscaler $HorizontalPodAutoscaler) 设置<p>自动伸缩信息</p>
 * @method boolean getLogEnable() 获取<p>是否开启日志投递，开启后需填写配置投递到指定cls</p>
 * @method void setLogEnable(boolean $LogEnable) 设置<p>是否开启日志投递，开启后需填写配置投递到指定cls</p>
 * @method LogConfig getLogConfig() 获取<p>日志配置，需要投递服务日志到指定cls时填写</p>
 * @method void setLogConfig(LogConfig $LogConfig) 设置<p>日志配置，需要投递服务日志到指定cls时填写</p>
 * @method boolean getAuthorizationEnable() 获取<p>是否开启接口鉴权，开启后自动生成token信息，访问需要token鉴权</p>
 * @method void setAuthorizationEnable(boolean $AuthorizationEnable) 设置<p>是否开启接口鉴权，开启后自动生成token信息，访问需要token鉴权</p>
 * @method array getTags() 获取<p>腾讯云标签</p>
 * @method void setTags(array $Tags) 设置<p>腾讯云标签</p>
 * @method boolean getNewVersion() 获取<p>是否新增版本</p>
 * @method void setNewVersion(boolean $NewVersion) 设置<p>是否新增版本</p>
 * @method array getCronScaleJobs() 获取<p>定时任务配置，使用定时策略时填写</p>
 * @method void setCronScaleJobs(array $CronScaleJobs) 设置<p>定时任务配置，使用定时策略时填写</p>
 * @method string getScaleStrategy() 获取<p>自动伸缩策略配置 HPA : 通过HPA进行弹性伸缩 CRON 通过定时任务进行伸缩</p>
 * @method void setScaleStrategy(string $ScaleStrategy) 设置<p>自动伸缩策略配置 HPA : 通过HPA进行弹性伸缩 CRON 通过定时任务进行伸缩</p>
 * @method integer getHybridBillingPrepaidReplicas() 获取<p>计费模式[HYBRID_PAID]时生效, 用于标识混合计费模式下的预付费实例数</p>
 * @method void setHybridBillingPrepaidReplicas(integer $HybridBillingPrepaidReplicas) 设置<p>计费模式[HYBRID_PAID]时生效, 用于标识混合计费模式下的预付费实例数</p>
 * @method string getCreateSource() 获取<p>[AUTO_ML 自动学习，自动学习正式发布 AUTO_ML_FORMAL, DEFAULT 默认]</p>
 * @method void setCreateSource(string $CreateSource) 设置<p>[AUTO_ML 自动学习，自动学习正式发布 AUTO_ML_FORMAL, DEFAULT 默认]</p>
 * @method boolean getModelHotUpdateEnable() 获取<p>是否开启模型的热更新。默认不开启</p>
 * @method void setModelHotUpdateEnable(boolean $ModelHotUpdateEnable) 设置<p>是否开启模型的热更新。默认不开启</p>
 * @method ScheduledAction getScheduledAction() 获取<p>定时停止配置</p>
 * @method void setScheduledAction(ScheduledAction $ScheduledAction) 设置<p>定时停止配置</p>
 * @method VolumeMount getVolumeMount() 获取<p>挂载配置，目前只支持CFS</p>
 * @method void setVolumeMount(VolumeMount $VolumeMount) 设置<p>挂载配置，目前只支持CFS</p>
 * @method ServiceLimit getServiceLimit() 获取<p>服务限速限流相关配置</p>
 * @method void setServiceLimit(ServiceLimit $ServiceLimit) 设置<p>服务限速限流相关配置</p>
 * @method string getCallbackUrl() 获取<p>回调地址，用于回调创建服务状态信息，回调格式&amp;内容详情见：<a href="https://cloud.tencent.com/document/product/851/84292">TI-ONE 接口回调说明</a></p>
 * @method void setCallbackUrl(string $CallbackUrl) 设置<p>回调地址，用于回调创建服务状态信息，回调格式&amp;内容详情见：<a href="https://cloud.tencent.com/document/product/851/84292">TI-ONE 接口回调说明</a></p>
 * @method boolean getModelTurboEnable() 获取<p>是否开启模型的加速, 仅对StableDiffusion(动态加速)格式的模型有效。</p>
 * @method void setModelTurboEnable(boolean $ModelTurboEnable) 设置<p>是否开启模型的加速, 仅对StableDiffusion(动态加速)格式的模型有效。</p>
 * @method string getServiceCategory() 获取<p>服务分类</p>
 * @method void setServiceCategory(string $ServiceCategory) 设置<p>服务分类</p>
 * @method string getCommand() 获取<p>服务的启动命令，如遇特殊字符导致配置失败，可使用CommandBase64参数</p>
 * @method void setCommand(string $Command) 设置<p>服务的启动命令，如遇特殊字符导致配置失败，可使用CommandBase64参数</p>
 * @method ServiceEIP getServiceEIP() 获取<p>是否开启TIONE内网访问外部，此功能仅支持后付费机型与从TIONE平台购买的预付费机型；使用从CVM选择资源组时此配置不生效。</p>
 * @method void setServiceEIP(ServiceEIP $ServiceEIP) 设置<p>是否开启TIONE内网访问外部，此功能仅支持后付费机型与从TIONE平台购买的预付费机型；使用从CVM选择资源组时此配置不生效。</p>
 * @method string getCommandBase64() 获取<p>服务的启动命令，以base64格式进行输入，与Command同时配置时，仅当前参数生效</p>
 * @method void setCommandBase64(string $CommandBase64) 设置<p>服务的启动命令，以base64格式进行输入，与Command同时配置时，仅当前参数生效</p>
 * @method integer getServicePort() 获取<p>服务端口，仅在非内置镜像时生效，默认8501。不支持输入8501-8510,6006,9092</p>
 * @method void setServicePort(integer $ServicePort) 设置<p>服务端口，仅在非内置镜像时生效，默认8501。不支持输入8501-8510,6006,9092</p>
 * @method string getDeployType() 获取<p>服务的部署类型 [标准部署，分布式多机部署，] 默认STANDARD</p><p>枚举值：</p><ul><li>STANDARD： 标准部署</li><li>DIST： 多机分布式部署</li><li>ROLE_SET： 多角色部署</li></ul>
 * @method void setDeployType(string $DeployType) 设置<p>服务的部署类型 [标准部署，分布式多机部署，] 默认STANDARD</p><p>枚举值：</p><ul><li>STANDARD： 标准部署</li><li>DIST： 多机分布式部署</li><li>ROLE_SET： 多角色部署</li></ul>
 * @method integer getInstancePerReplicas() 获取<p>单副本下的实例数，仅在部署类型为DIST时生效，默认1</p>
 * @method void setInstancePerReplicas(integer $InstancePerReplicas) 设置<p>单副本下的实例数，仅在部署类型为DIST时生效，默认1</p>
 * @method integer getTerminationGracePeriodSeconds() 获取<p>服务的优雅退出时限。单位为秒，默认值为30，最小为1</p>
 * @method void setTerminationGracePeriodSeconds(integer $TerminationGracePeriodSeconds) 设置<p>服务的优雅退出时限。单位为秒，默认值为30，最小为1</p>
 * @method array getPreStopCommand() 获取<p>服务实例停止前执行的命令，执行完毕或执行时间超过优雅退出时限后实例结束</p>
 * @method void setPreStopCommand(array $PreStopCommand) 设置<p>服务实例停止前执行的命令，执行完毕或执行时间超过优雅退出时限后实例结束</p>
 * @method boolean getGrpcEnable() 获取<p>是否启用 grpc 端口</p>
 * @method void setGrpcEnable(boolean $GrpcEnable) 设置<p>是否启用 grpc 端口</p>
 * @method HealthProbe getHealthProbe() 获取<p>健康探针</p>
 * @method void setHealthProbe(HealthProbe $HealthProbe) 设置<p>健康探针</p>
 * @method RollingUpdate getRollingUpdate() 获取<p>滚动更新策略</p>
 * @method void setRollingUpdate(RollingUpdate $RollingUpdate) 设置<p>滚动更新策略</p>
 * @method SidecarSpec getSidecar() 获取<p>sidecar配置</p>
 * @method void setSidecar(SidecarSpec $Sidecar) 设置<p>sidecar配置</p>
 * @method array getVolumeMounts() 获取<p>数据盘批量挂载配置，当前仅支持CFS，仅针对“模型来源-腾讯云存储、模型来源-腾讯云容器镜像、模型来源-资源组、模型来源-数据源”。</p>
 * @method void setVolumeMounts(array $VolumeMounts) 设置<p>数据盘批量挂载配置，当前仅支持CFS，仅针对“模型来源-腾讯云存储、模型来源-腾讯云容器镜像、模型来源-资源组、模型来源-数据源”。</p>
 * @method string getSchedulingStrategy() 获取<p>调度策略 [binpack] 优先占满整机，尽量避免碎卡（默认值）[spread] 优先分散在各个节点，确保服务高可用</p>
 * @method void setSchedulingStrategy(string $SchedulingStrategy) 设置<p>调度策略 [binpack] 优先占满整机，尽量避免碎卡（默认值）[spread] 优先分散在各个节点，确保服务高可用</p>
 * @method LogConfig getGatewayLogConfig() 获取<p>网关日志投递相关配置</p>
 * @method void setGatewayLogConfig(LogConfig $GatewayLogConfig) 设置<p>网关日志投递相关配置</p>
 * @method GatewayConfig getGatewayConfig() 获取<p>网关相关配置</p>
 * @method void setGatewayConfig(GatewayConfig $GatewayConfig) 设置<p>网关相关配置</p>
 */
class CreateModelServiceRequest extends AbstractModel
{
    /**
     * @var string <p>新增版本时需要填写</p>
     */
    public $ServiceGroupId;

    /**
     * @var string <p>不超过60个字，仅支持英文、数字、下划线&quot;_&quot;、短横&quot;-&quot;，只能以英文、数字开头</p>
     */
    public $ServiceGroupName;

    /**
     * @var string <p>模型服务的描述</p>
     */
    public $ServiceDescription;

    /**
     * @var string <p>付费模式,有 PREPAID （包年包月）和 POSTPAID_BY_HOUR（按量付费）</p>
     */
    public $ChargeType;

    /**
     * @var string <p>预付费模式下所属的资源组id，同服务组下唯一</p>
     */
    public $ResourceGroupId;

    /**
     * @var ModelInfo <p>模型信息，需要挂载模型时填写</p>
     */
    public $ModelInfo;

    /**
     * @var ImageInfo <p>镜像信息，配置服务运行所需的镜像地址等信息</p>
     */
    public $ImageInfo;

    /**
     * @var array <p>环境变量，可选参数，用于配置容器中的环境变量</p>
     */
    public $Env;

    /**
     * @var ResourceInfo <p>资源描述，指定包年包月模式下的cpu,mem,gpu等信息，后付费无需填写</p>
     */
    public $Resources;

    /**
     * @var string <p>使用DescribeBillingSpecs接口返回的规格列表中的值，或者参考实例列表:<br>TI.S.MEDIUM.POST    2C4G<br>TI.S.LARGE.POST    4C8G<br>TI.S.2XLARGE16.POST    8C16G<br>TI.S.2XLARGE32.POST    8C32G<br>TI.S.4XLARGE32.POST    16C32G<br>TI.S.4XLARGE64.POST    16C64G<br>TI.S.6XLARGE48.POST    24C48G<br>TI.S.6XLARGE96.POST    24C96G<br>TI.S.8XLARGE64.POST    32C64G<br>TI.S.8XLARGE128.POST 32C128G<br>TI.GN7.LARGE20.POST    4C20G T4<em>1/4<br>TI.GN7.2XLARGE40.POST    10C40G T4</em>1/2<br>TI.GN7.2XLARGE32.POST    8C32G T4<em>1<br>TI.GN7.5XLARGE80.POST    20C80G T4</em>1<br>TI.GN7.8XLARGE128.POST    32C128G T4<em>1<br>TI.GN7.10XLARGE160.POST    40C160G T4</em>2<br>TI.GN7.20XLARGE320.POST    80C320G T4*4</p>
     */
    public $InstanceType;

    /**
     * @var string <p>扩缩容类型 支持：自动 - &quot;AUTO&quot;, 手动 - &quot;MANUAL&quot;,默认为MANUAL</p>
     */
    public $ScaleMode;

    /**
     * @var integer <p>实例数量, 不同计费模式和调节模式下对应关系如下<br>PREPAID 和 POSTPAID_BY_HOUR:<br>手动调节模式下对应 实例数量<br>自动调节模式下对应 基于时间的默认策略的实例数量<br>HYBRID_PAID:<br>后付费实例手动调节模式下对应 实例数量<br>后付费实例自动调节模式下对应 时间策略的默认策略的实例数量</p>
     */
    public $Replicas;

    /**
     * @var HorizontalPodAutoscaler <p>自动伸缩信息</p>
     */
    public $HorizontalPodAutoscaler;

    /**
     * @var boolean <p>是否开启日志投递，开启后需填写配置投递到指定cls</p>
     */
    public $LogEnable;

    /**
     * @var LogConfig <p>日志配置，需要投递服务日志到指定cls时填写</p>
     */
    public $LogConfig;

    /**
     * @var boolean <p>是否开启接口鉴权，开启后自动生成token信息，访问需要token鉴权</p>
     */
    public $AuthorizationEnable;

    /**
     * @var array <p>腾讯云标签</p>
     */
    public $Tags;

    /**
     * @var boolean <p>是否新增版本</p>
     */
    public $NewVersion;

    /**
     * @var array <p>定时任务配置，使用定时策略时填写</p>
     */
    public $CronScaleJobs;

    /**
     * @var string <p>自动伸缩策略配置 HPA : 通过HPA进行弹性伸缩 CRON 通过定时任务进行伸缩</p>
     */
    public $ScaleStrategy;

    /**
     * @var integer <p>计费模式[HYBRID_PAID]时生效, 用于标识混合计费模式下的预付费实例数</p>
     */
    public $HybridBillingPrepaidReplicas;

    /**
     * @var string <p>[AUTO_ML 自动学习，自动学习正式发布 AUTO_ML_FORMAL, DEFAULT 默认]</p>
     */
    public $CreateSource;

    /**
     * @var boolean <p>是否开启模型的热更新。默认不开启</p>
     */
    public $ModelHotUpdateEnable;

    /**
     * @var ScheduledAction <p>定时停止配置</p>
     */
    public $ScheduledAction;

    /**
     * @var VolumeMount <p>挂载配置，目前只支持CFS</p>
     */
    public $VolumeMount;

    /**
     * @var ServiceLimit <p>服务限速限流相关配置</p>
     */
    public $ServiceLimit;

    /**
     * @var string <p>回调地址，用于回调创建服务状态信息，回调格式&amp;内容详情见：<a href="https://cloud.tencent.com/document/product/851/84292">TI-ONE 接口回调说明</a></p>
     */
    public $CallbackUrl;

    /**
     * @var boolean <p>是否开启模型的加速, 仅对StableDiffusion(动态加速)格式的模型有效。</p>
     */
    public $ModelTurboEnable;

    /**
     * @var string <p>服务分类</p>
     */
    public $ServiceCategory;

    /**
     * @var string <p>服务的启动命令，如遇特殊字符导致配置失败，可使用CommandBase64参数</p>
     */
    public $Command;

    /**
     * @var ServiceEIP <p>是否开启TIONE内网访问外部，此功能仅支持后付费机型与从TIONE平台购买的预付费机型；使用从CVM选择资源组时此配置不生效。</p>
     */
    public $ServiceEIP;

    /**
     * @var string <p>服务的启动命令，以base64格式进行输入，与Command同时配置时，仅当前参数生效</p>
     */
    public $CommandBase64;

    /**
     * @var integer <p>服务端口，仅在非内置镜像时生效，默认8501。不支持输入8501-8510,6006,9092</p>
     */
    public $ServicePort;

    /**
     * @var string <p>服务的部署类型 [标准部署，分布式多机部署，] 默认STANDARD</p><p>枚举值：</p><ul><li>STANDARD： 标准部署</li><li>DIST： 多机分布式部署</li><li>ROLE_SET： 多角色部署</li></ul>
     */
    public $DeployType;

    /**
     * @var integer <p>单副本下的实例数，仅在部署类型为DIST时生效，默认1</p>
     */
    public $InstancePerReplicas;

    /**
     * @var integer <p>服务的优雅退出时限。单位为秒，默认值为30，最小为1</p>
     */
    public $TerminationGracePeriodSeconds;

    /**
     * @var array <p>服务实例停止前执行的命令，执行完毕或执行时间超过优雅退出时限后实例结束</p>
     */
    public $PreStopCommand;

    /**
     * @var boolean <p>是否启用 grpc 端口</p>
     */
    public $GrpcEnable;

    /**
     * @var HealthProbe <p>健康探针</p>
     */
    public $HealthProbe;

    /**
     * @var RollingUpdate <p>滚动更新策略</p>
     */
    public $RollingUpdate;

    /**
     * @var SidecarSpec <p>sidecar配置</p>
     */
    public $Sidecar;

    /**
     * @var array <p>数据盘批量挂载配置，当前仅支持CFS，仅针对“模型来源-腾讯云存储、模型来源-腾讯云容器镜像、模型来源-资源组、模型来源-数据源”。</p>
     */
    public $VolumeMounts;

    /**
     * @var string <p>调度策略 [binpack] 优先占满整机，尽量避免碎卡（默认值）[spread] 优先分散在各个节点，确保服务高可用</p>
     */
    public $SchedulingStrategy;

    /**
     * @var LogConfig <p>网关日志投递相关配置</p>
     */
    public $GatewayLogConfig;

    /**
     * @var GatewayConfig <p>网关相关配置</p>
     */
    public $GatewayConfig;

    /**
     * @param string $ServiceGroupId <p>新增版本时需要填写</p>
     * @param string $ServiceGroupName <p>不超过60个字，仅支持英文、数字、下划线&quot;_&quot;、短横&quot;-&quot;，只能以英文、数字开头</p>
     * @param string $ServiceDescription <p>模型服务的描述</p>
     * @param string $ChargeType <p>付费模式,有 PREPAID （包年包月）和 POSTPAID_BY_HOUR（按量付费）</p>
     * @param string $ResourceGroupId <p>预付费模式下所属的资源组id，同服务组下唯一</p>
     * @param ModelInfo $ModelInfo <p>模型信息，需要挂载模型时填写</p>
     * @param ImageInfo $ImageInfo <p>镜像信息，配置服务运行所需的镜像地址等信息</p>
     * @param array $Env <p>环境变量，可选参数，用于配置容器中的环境变量</p>
     * @param ResourceInfo $Resources <p>资源描述，指定包年包月模式下的cpu,mem,gpu等信息，后付费无需填写</p>
     * @param string $InstanceType <p>使用DescribeBillingSpecs接口返回的规格列表中的值，或者参考实例列表:<br>TI.S.MEDIUM.POST    2C4G<br>TI.S.LARGE.POST    4C8G<br>TI.S.2XLARGE16.POST    8C16G<br>TI.S.2XLARGE32.POST    8C32G<br>TI.S.4XLARGE32.POST    16C32G<br>TI.S.4XLARGE64.POST    16C64G<br>TI.S.6XLARGE48.POST    24C48G<br>TI.S.6XLARGE96.POST    24C96G<br>TI.S.8XLARGE64.POST    32C64G<br>TI.S.8XLARGE128.POST 32C128G<br>TI.GN7.LARGE20.POST    4C20G T4<em>1/4<br>TI.GN7.2XLARGE40.POST    10C40G T4</em>1/2<br>TI.GN7.2XLARGE32.POST    8C32G T4<em>1<br>TI.GN7.5XLARGE80.POST    20C80G T4</em>1<br>TI.GN7.8XLARGE128.POST    32C128G T4<em>1<br>TI.GN7.10XLARGE160.POST    40C160G T4</em>2<br>TI.GN7.20XLARGE320.POST    80C320G T4*4</p>
     * @param string $ScaleMode <p>扩缩容类型 支持：自动 - &quot;AUTO&quot;, 手动 - &quot;MANUAL&quot;,默认为MANUAL</p>
     * @param integer $Replicas <p>实例数量, 不同计费模式和调节模式下对应关系如下<br>PREPAID 和 POSTPAID_BY_HOUR:<br>手动调节模式下对应 实例数量<br>自动调节模式下对应 基于时间的默认策略的实例数量<br>HYBRID_PAID:<br>后付费实例手动调节模式下对应 实例数量<br>后付费实例自动调节模式下对应 时间策略的默认策略的实例数量</p>
     * @param HorizontalPodAutoscaler $HorizontalPodAutoscaler <p>自动伸缩信息</p>
     * @param boolean $LogEnable <p>是否开启日志投递，开启后需填写配置投递到指定cls</p>
     * @param LogConfig $LogConfig <p>日志配置，需要投递服务日志到指定cls时填写</p>
     * @param boolean $AuthorizationEnable <p>是否开启接口鉴权，开启后自动生成token信息，访问需要token鉴权</p>
     * @param array $Tags <p>腾讯云标签</p>
     * @param boolean $NewVersion <p>是否新增版本</p>
     * @param array $CronScaleJobs <p>定时任务配置，使用定时策略时填写</p>
     * @param string $ScaleStrategy <p>自动伸缩策略配置 HPA : 通过HPA进行弹性伸缩 CRON 通过定时任务进行伸缩</p>
     * @param integer $HybridBillingPrepaidReplicas <p>计费模式[HYBRID_PAID]时生效, 用于标识混合计费模式下的预付费实例数</p>
     * @param string $CreateSource <p>[AUTO_ML 自动学习，自动学习正式发布 AUTO_ML_FORMAL, DEFAULT 默认]</p>
     * @param boolean $ModelHotUpdateEnable <p>是否开启模型的热更新。默认不开启</p>
     * @param ScheduledAction $ScheduledAction <p>定时停止配置</p>
     * @param VolumeMount $VolumeMount <p>挂载配置，目前只支持CFS</p>
     * @param ServiceLimit $ServiceLimit <p>服务限速限流相关配置</p>
     * @param string $CallbackUrl <p>回调地址，用于回调创建服务状态信息，回调格式&amp;内容详情见：<a href="https://cloud.tencent.com/document/product/851/84292">TI-ONE 接口回调说明</a></p>
     * @param boolean $ModelTurboEnable <p>是否开启模型的加速, 仅对StableDiffusion(动态加速)格式的模型有效。</p>
     * @param string $ServiceCategory <p>服务分类</p>
     * @param string $Command <p>服务的启动命令，如遇特殊字符导致配置失败，可使用CommandBase64参数</p>
     * @param ServiceEIP $ServiceEIP <p>是否开启TIONE内网访问外部，此功能仅支持后付费机型与从TIONE平台购买的预付费机型；使用从CVM选择资源组时此配置不生效。</p>
     * @param string $CommandBase64 <p>服务的启动命令，以base64格式进行输入，与Command同时配置时，仅当前参数生效</p>
     * @param integer $ServicePort <p>服务端口，仅在非内置镜像时生效，默认8501。不支持输入8501-8510,6006,9092</p>
     * @param string $DeployType <p>服务的部署类型 [标准部署，分布式多机部署，] 默认STANDARD</p><p>枚举值：</p><ul><li>STANDARD： 标准部署</li><li>DIST： 多机分布式部署</li><li>ROLE_SET： 多角色部署</li></ul>
     * @param integer $InstancePerReplicas <p>单副本下的实例数，仅在部署类型为DIST时生效，默认1</p>
     * @param integer $TerminationGracePeriodSeconds <p>服务的优雅退出时限。单位为秒，默认值为30，最小为1</p>
     * @param array $PreStopCommand <p>服务实例停止前执行的命令，执行完毕或执行时间超过优雅退出时限后实例结束</p>
     * @param boolean $GrpcEnable <p>是否启用 grpc 端口</p>
     * @param HealthProbe $HealthProbe <p>健康探针</p>
     * @param RollingUpdate $RollingUpdate <p>滚动更新策略</p>
     * @param SidecarSpec $Sidecar <p>sidecar配置</p>
     * @param array $VolumeMounts <p>数据盘批量挂载配置，当前仅支持CFS，仅针对“模型来源-腾讯云存储、模型来源-腾讯云容器镜像、模型来源-资源组、模型来源-数据源”。</p>
     * @param string $SchedulingStrategy <p>调度策略 [binpack] 优先占满整机，尽量避免碎卡（默认值）[spread] 优先分散在各个节点，确保服务高可用</p>
     * @param LogConfig $GatewayLogConfig <p>网关日志投递相关配置</p>
     * @param GatewayConfig $GatewayConfig <p>网关相关配置</p>
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
        if (array_key_exists("ServiceGroupId",$param) and $param["ServiceGroupId"] !== null) {
            $this->ServiceGroupId = $param["ServiceGroupId"];
        }

        if (array_key_exists("ServiceGroupName",$param) and $param["ServiceGroupName"] !== null) {
            $this->ServiceGroupName = $param["ServiceGroupName"];
        }

        if (array_key_exists("ServiceDescription",$param) and $param["ServiceDescription"] !== null) {
            $this->ServiceDescription = $param["ServiceDescription"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
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

        if (array_key_exists("AuthorizationEnable",$param) and $param["AuthorizationEnable"] !== null) {
            $this->AuthorizationEnable = $param["AuthorizationEnable"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("NewVersion",$param) and $param["NewVersion"] !== null) {
            $this->NewVersion = $param["NewVersion"];
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

        if (array_key_exists("HybridBillingPrepaidReplicas",$param) and $param["HybridBillingPrepaidReplicas"] !== null) {
            $this->HybridBillingPrepaidReplicas = $param["HybridBillingPrepaidReplicas"];
        }

        if (array_key_exists("CreateSource",$param) and $param["CreateSource"] !== null) {
            $this->CreateSource = $param["CreateSource"];
        }

        if (array_key_exists("ModelHotUpdateEnable",$param) and $param["ModelHotUpdateEnable"] !== null) {
            $this->ModelHotUpdateEnable = $param["ModelHotUpdateEnable"];
        }

        if (array_key_exists("ScheduledAction",$param) and $param["ScheduledAction"] !== null) {
            $this->ScheduledAction = new ScheduledAction();
            $this->ScheduledAction->deserialize($param["ScheduledAction"]);
        }

        if (array_key_exists("VolumeMount",$param) and $param["VolumeMount"] !== null) {
            $this->VolumeMount = new VolumeMount();
            $this->VolumeMount->deserialize($param["VolumeMount"]);
        }

        if (array_key_exists("ServiceLimit",$param) and $param["ServiceLimit"] !== null) {
            $this->ServiceLimit = new ServiceLimit();
            $this->ServiceLimit->deserialize($param["ServiceLimit"]);
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("ModelTurboEnable",$param) and $param["ModelTurboEnable"] !== null) {
            $this->ModelTurboEnable = $param["ModelTurboEnable"];
        }

        if (array_key_exists("ServiceCategory",$param) and $param["ServiceCategory"] !== null) {
            $this->ServiceCategory = $param["ServiceCategory"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("ServiceEIP",$param) and $param["ServiceEIP"] !== null) {
            $this->ServiceEIP = new ServiceEIP();
            $this->ServiceEIP->deserialize($param["ServiceEIP"]);
        }

        if (array_key_exists("CommandBase64",$param) and $param["CommandBase64"] !== null) {
            $this->CommandBase64 = $param["CommandBase64"];
        }

        if (array_key_exists("ServicePort",$param) and $param["ServicePort"] !== null) {
            $this->ServicePort = $param["ServicePort"];
        }

        if (array_key_exists("DeployType",$param) and $param["DeployType"] !== null) {
            $this->DeployType = $param["DeployType"];
        }

        if (array_key_exists("InstancePerReplicas",$param) and $param["InstancePerReplicas"] !== null) {
            $this->InstancePerReplicas = $param["InstancePerReplicas"];
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

        if (array_key_exists("Sidecar",$param) and $param["Sidecar"] !== null) {
            $this->Sidecar = new SidecarSpec();
            $this->Sidecar->deserialize($param["Sidecar"]);
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

        if (array_key_exists("GatewayLogConfig",$param) and $param["GatewayLogConfig"] !== null) {
            $this->GatewayLogConfig = new LogConfig();
            $this->GatewayLogConfig->deserialize($param["GatewayLogConfig"]);
        }

        if (array_key_exists("GatewayConfig",$param) and $param["GatewayConfig"] !== null) {
            $this->GatewayConfig = new GatewayConfig();
            $this->GatewayConfig->deserialize($param["GatewayConfig"]);
        }
    }
}
