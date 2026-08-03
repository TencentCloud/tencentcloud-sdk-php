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
 * CreateRayCluster请求参数结构体
 *
 * @method string getName() 获取<p>集群名称（可选，不填写则默认使用集群ID）</p>
 * @method void setName(string $Name) 设置<p>集群名称（可选，不填写则默认使用集群ID）</p>
 * @method string getDescription() 获取<p>集群描述</p>
 * @method void setDescription(string $Description) 设置<p>集群描述</p>
 * @method string getGroupId() 获取<p>所属计算组 ID</p>
 * @method void setGroupId(string $GroupId) 设置<p>所属计算组 ID</p>
 * @method string getResourcePartitionId() 获取<p>所属资源分区ID</p>
 * @method void setResourcePartitionId(string $ResourcePartitionId) 设置<p>所属资源分区ID</p>
 * @method string getQueue() 获取<p>所属队列名称</p>
 * @method void setQueue(string $Queue) 设置<p>所属队列名称</p>
 * @method string getImage() 获取<p>镜像地址</p>
 * @method void setImage(string $Image) 设置<p>镜像地址</p>
 * @method string getImagePullPolicy() 获取<p>镜像拉取策略（Always, IfNotPresent, Never）</p>
 * @method void setImagePullPolicy(string $ImagePullPolicy) 设置<p>镜像拉取策略（Always, IfNotPresent, Never）</p>
 * @method string getImagePullType() 获取<p>镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
 * @method void setImagePullType(string $ImagePullType) 设置<p>镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
 * @method string getResourceConfig() 获取<p>资源配置</p>
 * @method void setResourceConfig(string $ResourceConfig) 设置<p>资源配置</p>
 * @method string getResourceConfigId() 获取<p>资源配置ID</p>
 * @method void setResourceConfigId(string $ResourceConfigId) 设置<p>资源配置ID</p>
 * @method string getCatalog() 获取<p>存储卷和挂载卷配置</p>
 * @method void setCatalog(string $Catalog) 设置<p>存储卷和挂载卷配置</p>
 * @method string getAdvancedOptions() 获取<p>高级参数（规范化后的扁平 KV JSON）</p>
 * @method void setAdvancedOptions(string $AdvancedOptions) 设置<p>高级参数（规范化后的扁平 KV JSON）</p>
 * @method integer getPriority() 获取<p>优先级（1-9，数字越大优先级越高）</p>
 * @method void setPriority(integer $Priority) 设置<p>优先级（1-9，数字越大优先级越高）</p>
 * @method array getTags() 获取<p>标签列表（TagKey-TagValue），用于将资源与腾讯云标签系统中的标签绑定</p>
 * @method void setTags(array $Tags) 设置<p>标签列表（TagKey-TagValue），用于将资源与腾讯云标签系统中的标签绑定</p>
 */
class CreateRayClusterRequest extends AbstractModel
{
    /**
     * @var string <p>集群名称（可选，不填写则默认使用集群ID）</p>
     */
    public $Name;

    /**
     * @var string <p>集群描述</p>
     */
    public $Description;

    /**
     * @var string <p>所属计算组 ID</p>
     */
    public $GroupId;

    /**
     * @var string <p>所属资源分区ID</p>
     */
    public $ResourcePartitionId;

    /**
     * @var string <p>所属队列名称</p>
     */
    public $Queue;

    /**
     * @var string <p>镜像地址</p>
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
     * @var string <p>资源配置ID</p>
     */
    public $ResourceConfigId;

    /**
     * @var string <p>存储卷和挂载卷配置</p>
     */
    public $Catalog;

    /**
     * @var string <p>高级参数（规范化后的扁平 KV JSON）</p>
     */
    public $AdvancedOptions;

    /**
     * @var integer <p>优先级（1-9，数字越大优先级越高）</p>
     */
    public $Priority;

    /**
     * @var array <p>标签列表（TagKey-TagValue），用于将资源与腾讯云标签系统中的标签绑定</p>
     */
    public $Tags;

    /**
     * @param string $Name <p>集群名称（可选，不填写则默认使用集群ID）</p>
     * @param string $Description <p>集群描述</p>
     * @param string $GroupId <p>所属计算组 ID</p>
     * @param string $ResourcePartitionId <p>所属资源分区ID</p>
     * @param string $Queue <p>所属队列名称</p>
     * @param string $Image <p>镜像地址</p>
     * @param string $ImagePullPolicy <p>镜像拉取策略（Always, IfNotPresent, Never）</p>
     * @param string $ImagePullType <p>镜像拉取类型（BuiltIn: 内置, Custom: 自定义-TCR, CustomCcr: 自定义-CCR）</p>
     * @param string $ResourceConfig <p>资源配置</p>
     * @param string $ResourceConfigId <p>资源配置ID</p>
     * @param string $Catalog <p>存储卷和挂载卷配置</p>
     * @param string $AdvancedOptions <p>高级参数（规范化后的扁平 KV JSON）</p>
     * @param integer $Priority <p>优先级（1-9，数字越大优先级越高）</p>
     * @param array $Tags <p>标签列表（TagKey-TagValue），用于将资源与腾讯云标签系统中的标签绑定</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ResourcePartitionId",$param) and $param["ResourcePartitionId"] !== null) {
            $this->ResourcePartitionId = $param["ResourcePartitionId"];
        }

        if (array_key_exists("Queue",$param) and $param["Queue"] !== null) {
            $this->Queue = $param["Queue"];
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

        if (array_key_exists("ResourceConfigId",$param) and $param["ResourceConfigId"] !== null) {
            $this->ResourceConfigId = $param["ResourceConfigId"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
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
    }
}
