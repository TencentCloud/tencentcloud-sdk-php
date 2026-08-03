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
 * GetRayJob返回参数结构体
 *
 * @method string getId() 获取<p>任务ID</p>
 * @method void setId(string $Id) 设置<p>任务ID</p>
 * @method string getResourcePartitionId() 获取<p>所属资源分区ID</p>
 * @method void setResourcePartitionId(string $ResourcePartitionId) 设置<p>所属资源分区ID</p>
 * @method string getResourcePartitionName() 获取<p>默认资源分区名称</p>
 * @method void setResourcePartitionName(string $ResourcePartitionName) 设置<p>默认资源分区名称</p>
 * @method string getQueue() 获取<p>所属队列名称</p>
 * @method void setQueue(string $Queue) 设置<p>所属队列名称</p>
 * @method string getStatus() 获取<p>任务状态</p>
 * @method void setStatus(string $Status) 设置<p>任务状态</p>
 * @method string getEntrypoint() 获取<p>入口命令</p>
 * @method void setEntrypoint(string $Entrypoint) 设置<p>入口命令</p>
 * @method string getJobName() 获取<p>任务名称</p>
 * @method void setJobName(string $JobName) 设置<p>任务名称</p>
 * @method integer getAppId() 获取<p>应用ID</p>
 * @method void setAppId(integer $AppId) 设置<p>应用ID</p>
 * @method string getUin() 获取<p>用户主账号UIN</p>
 * @method void setUin(string $Uin) 设置<p>用户主账号UIN</p>
 * @method string getSubAccountUin() 获取<p>创建账号</p>
 * @method void setSubAccountUin(string $SubAccountUin) 设置<p>创建账号</p>
 * @method string getHistoryUrl() 获取<p>历史记录链接</p>
 * @method void setHistoryUrl(string $HistoryUrl) 设置<p>历史记录链接</p>
 * @method integer getRunningTime() 获取<p>运行时间(ms)</p>
 * @method void setRunningTime(integer $RunningTime) 设置<p>运行时间(ms)</p>
 * @method integer getFinishTime() 获取<p>完成时间</p>
 * @method void setFinishTime(integer $FinishTime) 设置<p>完成时间</p>
 * @method integer getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间</p>
 * @method string getErrorMessage() 获取<p>失败原因/错误信息</p>
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>失败原因/错误信息</p>
 * @method string getRuntimeEnv() 获取<p>运行时环境配置(JSON)</p>
 * @method void setRuntimeEnv(string $RuntimeEnv) 设置<p>运行时环境配置(JSON)</p>
 * @method string getImage() 获取<p>镜像地址</p>
 * @method void setImage(string $Image) 设置<p>镜像地址</p>
 * @method string getResourceConfig() 获取<p>资源配置(JSON)</p>
 * @method void setResourceConfig(string $ResourceConfig) 设置<p>资源配置(JSON)</p>
 * @method string getCatalog() 获取<p>存储卷和挂载卷配置(JSON)</p>
 * @method void setCatalog(string $Catalog) 设置<p>存储卷和挂载卷配置(JSON)</p>
 * @method string getImagePullPolicy() 获取<p>镜像拉取策略</p>
 * @method void setImagePullPolicy(string $ImagePullPolicy) 设置<p>镜像拉取策略</p>
 * @method string getAutoscalerOptions() 获取<p>弹性伸缩配置(JSON)</p>
 * @method void setAutoscalerOptions(string $AutoscalerOptions) 设置<p>弹性伸缩配置(JSON)</p>
 * @method string getSpecId() 获取<p>来源配置ID</p>
 * @method void setSpecId(string $SpecId) 设置<p>来源配置ID</p>
 * @method string getSpecName() 获取<p>来源配置名称</p>
 * @method void setSpecName(string $SpecName) 设置<p>来源配置名称</p>
 * @method string getAdvancedOptions() 获取<p>高级参数，JSON 字符串（透传到 Neutrino）</p>
 * @method void setAdvancedOptions(string $AdvancedOptions) 设置<p>高级参数，JSON 字符串（透传到 Neutrino）</p>
 * @method integer getPriority() 获取<p>作业优先级（1-9，数字越大优先级越高）</p>
 * @method void setPriority(integer $Priority) 设置<p>作业优先级（1-9，数字越大优先级越高）</p>
 * @method array getTags() 获取<p>标签列表（TagKey-TagValue），用于将资源与腾讯云标签系统中的标签绑定</p>
 * @method void setTags(array $Tags) 设置<p>标签列表（TagKey-TagValue），用于将资源与腾讯云标签系统中的标签绑定</p>
 * @method string getJobSource() 获取<p>业务来源标识（调用上下文，长度上限 64，禁止控制字符）</p>
 * @method void setJobSource(string $JobSource) 设置<p>业务来源标识（调用上下文，长度上限 64，禁止控制字符）</p>
 * @method string getClusterName() 获取<p>集群名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetRayJobResponse extends AbstractModel
{
    /**
     * @var string <p>任务ID</p>
     */
    public $Id;

    /**
     * @var string <p>所属资源分区ID</p>
     */
    public $ResourcePartitionId;

    /**
     * @var string <p>默认资源分区名称</p>
     */
    public $ResourcePartitionName;

    /**
     * @var string <p>所属队列名称</p>
     */
    public $Queue;

    /**
     * @var string <p>任务状态</p>
     */
    public $Status;

    /**
     * @var string <p>入口命令</p>
     */
    public $Entrypoint;

    /**
     * @var string <p>任务名称</p>
     */
    public $JobName;

    /**
     * @var integer <p>应用ID</p>
     */
    public $AppId;

    /**
     * @var string <p>用户主账号UIN</p>
     */
    public $Uin;

    /**
     * @var string <p>创建账号</p>
     */
    public $SubAccountUin;

    /**
     * @var string <p>历史记录链接</p>
     */
    public $HistoryUrl;

    /**
     * @var integer <p>运行时间(ms)</p>
     */
    public $RunningTime;

    /**
     * @var integer <p>完成时间</p>
     */
    public $FinishTime;

    /**
     * @var integer <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>失败原因/错误信息</p>
     */
    public $ErrorMessage;

    /**
     * @var string <p>运行时环境配置(JSON)</p>
     */
    public $RuntimeEnv;

    /**
     * @var string <p>镜像地址</p>
     */
    public $Image;

    /**
     * @var string <p>资源配置(JSON)</p>
     */
    public $ResourceConfig;

    /**
     * @var string <p>存储卷和挂载卷配置(JSON)</p>
     */
    public $Catalog;

    /**
     * @var string <p>镜像拉取策略</p>
     */
    public $ImagePullPolicy;

    /**
     * @var string <p>弹性伸缩配置(JSON)</p>
     */
    public $AutoscalerOptions;

    /**
     * @var string <p>来源配置ID</p>
     */
    public $SpecId;

    /**
     * @var string <p>来源配置名称</p>
     */
    public $SpecName;

    /**
     * @var string <p>高级参数，JSON 字符串（透传到 Neutrino）</p>
     */
    public $AdvancedOptions;

    /**
     * @var integer <p>作业优先级（1-9，数字越大优先级越高）</p>
     */
    public $Priority;

    /**
     * @var array <p>标签列表（TagKey-TagValue），用于将资源与腾讯云标签系统中的标签绑定</p>
     */
    public $Tags;

    /**
     * @var string <p>业务来源标识（调用上下文，长度上限 64，禁止控制字符）</p>
     */
    public $JobSource;

    /**
     * @var string <p>集群名称</p>
     */
    public $ClusterName;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Id <p>任务ID</p>
     * @param string $ResourcePartitionId <p>所属资源分区ID</p>
     * @param string $ResourcePartitionName <p>默认资源分区名称</p>
     * @param string $Queue <p>所属队列名称</p>
     * @param string $Status <p>任务状态</p>
     * @param string $Entrypoint <p>入口命令</p>
     * @param string $JobName <p>任务名称</p>
     * @param integer $AppId <p>应用ID</p>
     * @param string $Uin <p>用户主账号UIN</p>
     * @param string $SubAccountUin <p>创建账号</p>
     * @param string $HistoryUrl <p>历史记录链接</p>
     * @param integer $RunningTime <p>运行时间(ms)</p>
     * @param integer $FinishTime <p>完成时间</p>
     * @param integer $CreateTime <p>创建时间</p>
     * @param string $ErrorMessage <p>失败原因/错误信息</p>
     * @param string $RuntimeEnv <p>运行时环境配置(JSON)</p>
     * @param string $Image <p>镜像地址</p>
     * @param string $ResourceConfig <p>资源配置(JSON)</p>
     * @param string $Catalog <p>存储卷和挂载卷配置(JSON)</p>
     * @param string $ImagePullPolicy <p>镜像拉取策略</p>
     * @param string $AutoscalerOptions <p>弹性伸缩配置(JSON)</p>
     * @param string $SpecId <p>来源配置ID</p>
     * @param string $SpecName <p>来源配置名称</p>
     * @param string $AdvancedOptions <p>高级参数，JSON 字符串（透传到 Neutrino）</p>
     * @param integer $Priority <p>作业优先级（1-9，数字越大优先级越高）</p>
     * @param array $Tags <p>标签列表（TagKey-TagValue），用于将资源与腾讯云标签系统中的标签绑定</p>
     * @param string $JobSource <p>业务来源标识（调用上下文，长度上限 64，禁止控制字符）</p>
     * @param string $ClusterName <p>集群名称</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ResourcePartitionId",$param) and $param["ResourcePartitionId"] !== null) {
            $this->ResourcePartitionId = $param["ResourcePartitionId"];
        }

        if (array_key_exists("ResourcePartitionName",$param) and $param["ResourcePartitionName"] !== null) {
            $this->ResourcePartitionName = $param["ResourcePartitionName"];
        }

        if (array_key_exists("Queue",$param) and $param["Queue"] !== null) {
            $this->Queue = $param["Queue"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Entrypoint",$param) and $param["Entrypoint"] !== null) {
            $this->Entrypoint = $param["Entrypoint"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("HistoryUrl",$param) and $param["HistoryUrl"] !== null) {
            $this->HistoryUrl = $param["HistoryUrl"];
        }

        if (array_key_exists("RunningTime",$param) and $param["RunningTime"] !== null) {
            $this->RunningTime = $param["RunningTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("RuntimeEnv",$param) and $param["RuntimeEnv"] !== null) {
            $this->RuntimeEnv = $param["RuntimeEnv"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("ResourceConfig",$param) and $param["ResourceConfig"] !== null) {
            $this->ResourceConfig = $param["ResourceConfig"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("ImagePullPolicy",$param) and $param["ImagePullPolicy"] !== null) {
            $this->ImagePullPolicy = $param["ImagePullPolicy"];
        }

        if (array_key_exists("AutoscalerOptions",$param) and $param["AutoscalerOptions"] !== null) {
            $this->AutoscalerOptions = $param["AutoscalerOptions"];
        }

        if (array_key_exists("SpecId",$param) and $param["SpecId"] !== null) {
            $this->SpecId = $param["SpecId"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("AdvancedOptions",$param) and $param["AdvancedOptions"] !== null) {
            $this->AdvancedOptions = $param["AdvancedOptions"];
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

        if (array_key_exists("JobSource",$param) and $param["JobSource"] !== null) {
            $this->JobSource = $param["JobSource"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
