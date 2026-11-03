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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitRayJob请求参数结构体
 *
 * @method string getEntrypoint() 获取<p>入口命令</p>
 * @method void setEntrypoint(string $Entrypoint) 设置<p>入口命令</p>
 * @method string getResourcePartitionId() 获取<p>资源分区ID</p>
 * @method void setResourcePartitionId(string $ResourcePartitionId) 设置<p>资源分区ID</p>
 * @method string getQueue() 获取<p>队列名称</p>
 * @method void setQueue(string $Queue) 设置<p>队列名称</p>
 * @method string getJobName() 获取<p>任务名称</p>
 * @method void setJobName(string $JobName) 设置<p>任务名称</p>
 * @method string getRuntimeEnv() 获取<p>运行时环境</p>
 * @method void setRuntimeEnv(string $RuntimeEnv) 设置<p>运行时环境</p>
 * @method string getImage() 获取<p>镜像名称</p>
 * @method void setImage(string $Image) 设置<p>镜像名称</p>
 * @method string getImagePullPolicy() 获取<p>镜像拉取策略（Always, IfNotPresent, Never）</p>
 * @method void setImagePullPolicy(string $ImagePullPolicy) 设置<p>镜像拉取策略（Always, IfNotPresent, Never）</p>
 * @method string getImagePullType() 获取<p>镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
 * @method void setImagePullType(string $ImagePullType) 设置<p>镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
 * @method string getResourceConfig() 获取<p>资源配置</p>
 * @method void setResourceConfig(string $ResourceConfig) 设置<p>资源配置</p>
 * @method string getCatalog() 获取<p>目录</p>
 * @method void setCatalog(string $Catalog) 设置<p>目录</p>
 * @method string getAutoscalerOptions() 获取<p>弹性伸缩配置</p>
 * @method void setAutoscalerOptions(string $AutoscalerOptions) 设置<p>弹性伸缩配置</p>
 * @method string getAdvancedOptions() 获取<p>高级参数，JSON 字符串（透传到 Neutrino）</p>
 * @method void setAdvancedOptions(string $AdvancedOptions) 设置<p>高级参数，JSON 字符串（透传到 Neutrino）</p>
 * @method string getGroupId() 获取<p>计算组ID；与 ClusterId 互斥。组成员展开为候选集群后由 neutrino 侧路由</p>
 * @method void setGroupId(string $GroupId) 设置<p>计算组ID；与 ClusterId 互斥。组成员展开为候选集群后由 neutrino 侧路由</p>
 * @method integer getPriority() 获取<p>作业优先级（1-9，数字越大优先级越高）</p>
 * @method void setPriority(integer $Priority) 设置<p>作业优先级（1-9，数字越大优先级越高）</p>
 * @method array getTags() 获取<p>标签列表（TagKey-TagValue），用于将资源与腾讯云标签系统中的标签绑定</p>
 * @method void setTags(array $Tags) 设置<p>标签列表（TagKey-TagValue），用于将资源与腾讯云标签系统中的标签绑定</p>
 * @method string getNetworkConfig() 获取<p>用户网络配置 JSON 字符串</p>
 * @method void setNetworkConfig(string $NetworkConfig) 设置<p>用户网络配置 JSON 字符串</p>
 */
class SubmitRayJobRequest extends AbstractModel
{
    /**
     * @var string <p>入口命令</p>
     */
    public $Entrypoint;

    /**
     * @var string <p>资源分区ID</p>
     */
    public $ResourcePartitionId;

    /**
     * @var string <p>队列名称</p>
     */
    public $Queue;

    /**
     * @var string <p>任务名称</p>
     */
    public $JobName;

    /**
     * @var string <p>运行时环境</p>
     */
    public $RuntimeEnv;

    /**
     * @var string <p>镜像名称</p>
     */
    public $Image;

    /**
     * @var string <p>镜像拉取策略（Always, IfNotPresent, Never）</p>
     */
    public $ImagePullPolicy;

    /**
     * @var string <p>镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
     */
    public $ImagePullType;

    /**
     * @var string <p>资源配置</p>
     */
    public $ResourceConfig;

    /**
     * @var string <p>目录</p>
     */
    public $Catalog;

    /**
     * @var string <p>弹性伸缩配置</p>
     */
    public $AutoscalerOptions;

    /**
     * @var string <p>高级参数，JSON 字符串（透传到 Neutrino）</p>
     */
    public $AdvancedOptions;

    /**
     * @var string <p>计算组ID；与 ClusterId 互斥。组成员展开为候选集群后由 neutrino 侧路由</p>
     */
    public $GroupId;

    /**
     * @var integer <p>作业优先级（1-9，数字越大优先级越高）</p>
     */
    public $Priority;

    /**
     * @var array <p>标签列表（TagKey-TagValue），用于将资源与腾讯云标签系统中的标签绑定</p>
     */
    public $Tags;

    /**
     * @var string <p>用户网络配置 JSON 字符串</p>
     */
    public $NetworkConfig;

    /**
     * @param string $Entrypoint <p>入口命令</p>
     * @param string $ResourcePartitionId <p>资源分区ID</p>
     * @param string $Queue <p>队列名称</p>
     * @param string $JobName <p>任务名称</p>
     * @param string $RuntimeEnv <p>运行时环境</p>
     * @param string $Image <p>镜像名称</p>
     * @param string $ImagePullPolicy <p>镜像拉取策略（Always, IfNotPresent, Never）</p>
     * @param string $ImagePullType <p>镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
     * @param string $ResourceConfig <p>资源配置</p>
     * @param string $Catalog <p>目录</p>
     * @param string $AutoscalerOptions <p>弹性伸缩配置</p>
     * @param string $AdvancedOptions <p>高级参数，JSON 字符串（透传到 Neutrino）</p>
     * @param string $GroupId <p>计算组ID；与 ClusterId 互斥。组成员展开为候选集群后由 neutrino 侧路由</p>
     * @param integer $Priority <p>作业优先级（1-9，数字越大优先级越高）</p>
     * @param array $Tags <p>标签列表（TagKey-TagValue），用于将资源与腾讯云标签系统中的标签绑定</p>
     * @param string $NetworkConfig <p>用户网络配置 JSON 字符串</p>
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
        if (array_key_exists("Entrypoint",$param) and $param["Entrypoint"] !== null) {
            $this->Entrypoint = $param["Entrypoint"];
        }

        if (array_key_exists("ResourcePartitionId",$param) and $param["ResourcePartitionId"] !== null) {
            $this->ResourcePartitionId = $param["ResourcePartitionId"];
        }

        if (array_key_exists("Queue",$param) and $param["Queue"] !== null) {
            $this->Queue = $param["Queue"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("RuntimeEnv",$param) and $param["RuntimeEnv"] !== null) {
            $this->RuntimeEnv = $param["RuntimeEnv"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("ImagePullPolicy",$param) and $param["ImagePullPolicy"] !== null) {
            $this->ImagePullPolicy = $param["ImagePullPolicy"];
        }

        if (array_key_exists("ImagePullType",$param) and $param["ImagePullType"] !== null) {
            $this->ImagePullType = $param["ImagePullType"];
        }

        if (array_key_exists("ResourceConfig",$param) and $param["ResourceConfig"] !== null) {
            $this->ResourceConfig = $param["ResourceConfig"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("AutoscalerOptions",$param) and $param["AutoscalerOptions"] !== null) {
            $this->AutoscalerOptions = $param["AutoscalerOptions"];
        }

        if (array_key_exists("AdvancedOptions",$param) and $param["AdvancedOptions"] !== null) {
            $this->AdvancedOptions = $param["AdvancedOptions"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("NetworkConfig",$param) and $param["NetworkConfig"] !== null) {
            $this->NetworkConfig = $param["NetworkConfig"];
        }
    }
}
