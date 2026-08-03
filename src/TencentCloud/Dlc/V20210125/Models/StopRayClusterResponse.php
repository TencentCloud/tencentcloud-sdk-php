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
 * StopRayCluster返回参数结构体
 *
 * @method string getId() 获取<p>集群ID</p>
 * @method void setId(string $Id) 设置<p>集群ID</p>
 * @method string getType() 获取<p>资源类型：CLUSTER-普通集群；WORKSPACE-数据实验室（开发入口）</p>
 * @method void setType(string $Type) 设置<p>资源类型：CLUSTER-普通集群；WORKSPACE-数据实验室（开发入口）</p>
 * @method string getName() 获取<p>集群名称</p>
 * @method void setName(string $Name) 设置<p>集群名称</p>
 * @method string getResourcePartitionId() 获取<p>所属资源分区ID</p>
 * @method void setResourcePartitionId(string $ResourcePartitionId) 设置<p>所属资源分区ID</p>
 * @method string getResourcePartitionName() 获取<p>资源分区名称</p>
 * @method void setResourcePartitionName(string $ResourcePartitionName) 设置<p>资源分区名称</p>
 * @method string getQueue() 获取<p>所属队列名称</p>
 * @method void setQueue(string $Queue) 设置<p>所属队列名称</p>
 * @method integer getAppId() 获取<p>应用ID</p>
 * @method void setAppId(integer $AppId) 设置<p>应用ID</p>
 * @method string getUin() 获取<p>用户UIN</p>
 * @method void setUin(string $Uin) 设置<p>用户UIN</p>
 * @method string getSubAccountUin() 获取<p>子账号UIN</p>
 * @method void setSubAccountUin(string $SubAccountUin) 设置<p>子账号UIN</p>
 * @method string getStatus() 获取<p>集群状态</p>
 * @method void setStatus(string $Status) 设置<p>集群状态</p>
 * @method integer getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间</p>
 * @method string getGroupId() 获取<p>计算组 ID</p>
 * @method void setGroupId(string $GroupId) 设置<p>计算组 ID</p>
 * @method string getGroupName() 获取<p>所属集群组名称</p>
 * @method void setGroupName(string $GroupName) 设置<p>所属集群组名称</p>
 * @method string getResourceConfig() 获取<p>资源配置(JSON)</p>
 * @method void setResourceConfig(string $ResourceConfig) 设置<p>资源配置(JSON)</p>
 * @method string getImage() 获取<p>镜像地址</p>
 * @method void setImage(string $Image) 设置<p>镜像地址</p>
 * @method string getCatalog() 获取<p>存储卷和挂载卷配置(JSON)</p>
 * @method void setCatalog(string $Catalog) 设置<p>存储卷和挂载卷配置(JSON)</p>
 * @method string getHistoryUrl() 获取<p>Dashboard URL / 历史记录链接</p>
 * @method void setHistoryUrl(string $HistoryUrl) 设置<p>Dashboard URL / 历史记录链接</p>
 * @method string getImagePullPolicy() 获取<p>镜像拉取策略</p>
 * @method void setImagePullPolicy(string $ImagePullPolicy) 设置<p>镜像拉取策略</p>
 * @method string getImagePullType() 获取<p>镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
 * @method void setImagePullType(string $ImagePullType) 设置<p>镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
 * @method integer getPriority() 获取<p>优先级（1-9，数字越大优先级越高）</p>
 * @method void setPriority(integer $Priority) 设置<p>优先级（1-9，数字越大优先级越高）</p>
 * @method integer getStartTime() 获取<p>启动时间（最近一次启动）</p>
 * @method void setStartTime(integer $StartTime) 设置<p>启动时间（最近一次启动）</p>
 * @method integer getStopTime() 获取<p>停止时间（最近一次停止/休眠）</p>
 * @method void setStopTime(integer $StopTime) 设置<p>停止时间（最近一次停止/休眠）</p>
 * @method array getTags() 获取<p>标签列表（TagKey-TagValue）</p>
 * @method void setTags(array $Tags) 设置<p>标签列表（TagKey-TagValue）</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class StopRayClusterResponse extends AbstractModel
{
    /**
     * @var string <p>集群ID</p>
     */
    public $Id;

    /**
     * @var string <p>资源类型：CLUSTER-普通集群；WORKSPACE-数据实验室（开发入口）</p>
     */
    public $Type;

    /**
     * @var string <p>集群名称</p>
     */
    public $Name;

    /**
     * @var string <p>所属资源分区ID</p>
     */
    public $ResourcePartitionId;

    /**
     * @var string <p>资源分区名称</p>
     */
    public $ResourcePartitionName;

    /**
     * @var string <p>所属队列名称</p>
     */
    public $Queue;

    /**
     * @var integer <p>应用ID</p>
     */
    public $AppId;

    /**
     * @var string <p>用户UIN</p>
     */
    public $Uin;

    /**
     * @var string <p>子账号UIN</p>
     */
    public $SubAccountUin;

    /**
     * @var string <p>集群状态</p>
     */
    public $Status;

    /**
     * @var integer <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>计算组 ID</p>
     */
    public $GroupId;

    /**
     * @var string <p>所属集群组名称</p>
     */
    public $GroupName;

    /**
     * @var string <p>资源配置(JSON)</p>
     */
    public $ResourceConfig;

    /**
     * @var string <p>镜像地址</p>
     */
    public $Image;

    /**
     * @var string <p>存储卷和挂载卷配置(JSON)</p>
     */
    public $Catalog;

    /**
     * @var string <p>Dashboard URL / 历史记录链接</p>
     */
    public $HistoryUrl;

    /**
     * @var string <p>镜像拉取策略</p>
     */
    public $ImagePullPolicy;

    /**
     * @var string <p>镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
     */
    public $ImagePullType;

    /**
     * @var integer <p>优先级（1-9，数字越大优先级越高）</p>
     */
    public $Priority;

    /**
     * @var integer <p>启动时间（最近一次启动）</p>
     */
    public $StartTime;

    /**
     * @var integer <p>停止时间（最近一次停止/休眠）</p>
     */
    public $StopTime;

    /**
     * @var array <p>标签列表（TagKey-TagValue）</p>
     */
    public $Tags;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Id <p>集群ID</p>
     * @param string $Type <p>资源类型：CLUSTER-普通集群；WORKSPACE-数据实验室（开发入口）</p>
     * @param string $Name <p>集群名称</p>
     * @param string $ResourcePartitionId <p>所属资源分区ID</p>
     * @param string $ResourcePartitionName <p>资源分区名称</p>
     * @param string $Queue <p>所属队列名称</p>
     * @param integer $AppId <p>应用ID</p>
     * @param string $Uin <p>用户UIN</p>
     * @param string $SubAccountUin <p>子账号UIN</p>
     * @param string $Status <p>集群状态</p>
     * @param integer $CreateTime <p>创建时间</p>
     * @param string $GroupId <p>计算组 ID</p>
     * @param string $GroupName <p>所属集群组名称</p>
     * @param string $ResourceConfig <p>资源配置(JSON)</p>
     * @param string $Image <p>镜像地址</p>
     * @param string $Catalog <p>存储卷和挂载卷配置(JSON)</p>
     * @param string $HistoryUrl <p>Dashboard URL / 历史记录链接</p>
     * @param string $ImagePullPolicy <p>镜像拉取策略</p>
     * @param string $ImagePullType <p>镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
     * @param integer $Priority <p>优先级（1-9，数字越大优先级越高）</p>
     * @param integer $StartTime <p>启动时间（最近一次启动）</p>
     * @param integer $StopTime <p>停止时间（最近一次停止/休眠）</p>
     * @param array $Tags <p>标签列表（TagKey-TagValue）</p>
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ResourceConfig",$param) and $param["ResourceConfig"] !== null) {
            $this->ResourceConfig = $param["ResourceConfig"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("HistoryUrl",$param) and $param["HistoryUrl"] !== null) {
            $this->HistoryUrl = $param["HistoryUrl"];
        }

        if (array_key_exists("ImagePullPolicy",$param) and $param["ImagePullPolicy"] !== null) {
            $this->ImagePullPolicy = $param["ImagePullPolicy"];
        }

        if (array_key_exists("ImagePullType",$param) and $param["ImagePullType"] !== null) {
            $this->ImagePullType = $param["ImagePullType"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("StopTime",$param) and $param["StopTime"] !== null) {
            $this->StopTime = $param["StopTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
