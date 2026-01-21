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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCluster请求参数结构体
 *
 * @method Placement getPlacement() 获取<p>集群中实例所在的位置。</p>
 * @method void setPlacement(Placement $Placement) 设置<p>集群中实例所在的位置。</p>
 * @method ManagerNode getManagerNode() 获取<p>指定管理节点。</p>
 * @method void setManagerNode(ManagerNode $ManagerNode) 设置<p>指定管理节点。</p>
 * @method integer getManagerNodeCount() 获取<p>指定管理节点的数量。默认取值：1。取值范围：1～2。</p>
 * @method void setManagerNodeCount(integer $ManagerNodeCount) 设置<p>指定管理节点的数量。默认取值：1。取值范围：1～2。</p>
 * @method ComputeNode getComputeNode() 获取<p>指定计算节点。</p>
 * @method void setComputeNode(ComputeNode $ComputeNode) 设置<p>指定计算节点。</p>
 * @method integer getComputeNodeCount() 获取<p>指定计算节点的数量。默认取值：0。</p>
 * @method void setComputeNodeCount(integer $ComputeNodeCount) 设置<p>指定计算节点的数量。默认取值：0。</p>
 * @method string getSchedulerType() 获取<p>调度器类型。默认取值：SLURM。<li>SLURM：SLURM调度器。</li></p>
 * @method void setSchedulerType(string $SchedulerType) 设置<p>调度器类型。默认取值：SLURM。<li>SLURM：SLURM调度器。</li></p>
 * @method string getSchedulerVersion() 获取<p>创建调度器的版本号，可填写版本号为“latest” 和 各调度器支持的版本号；如果是&quot;latest&quot;, 则代表创建的是平台当前支持的该类型调度器最新版本。如果不填写，默认创建的是“latest”版本调度器<br>各调度器支持的集群版本：</p><li>SLURM：21.08.8、23.11.7</li>
 * @method void setSchedulerVersion(string $SchedulerVersion) 设置<p>创建调度器的版本号，可填写版本号为“latest” 和 各调度器支持的版本号；如果是&quot;latest&quot;, 则代表创建的是平台当前支持的该类型调度器最新版本。如果不填写，默认创建的是“latest”版本调度器<br>各调度器支持的集群版本：</p><li>SLURM：21.08.8、23.11.7</li>
 * @method string getImageId() 获取<p>指定有效的<a href="https://cloud.tencent.com/document/product/213/4940">镜像</a>ID，格式形如<code>img-xxx</code>。目前支持部分公有镜像和自定义镜像。公共镜像请参考<a href="https://cloud.tencent.com/document/product/1527/64818#.E9.95.9C.E5.83.8F">镜像限制</a></p>
 * @method void setImageId(string $ImageId) 设置<p>指定有效的<a href="https://cloud.tencent.com/document/product/213/4940">镜像</a>ID，格式形如<code>img-xxx</code>。目前支持部分公有镜像和自定义镜像。公共镜像请参考<a href="https://cloud.tencent.com/document/product/1527/64818#.E9.95.9C.E5.83.8F">镜像限制</a></p>
 * @method VirtualPrivateCloud getVirtualPrivateCloud() 获取<p>私有网络相关信息配置。</p>
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) 设置<p>私有网络相关信息配置。</p>
 * @method LoginSettings getLoginSettings() 获取<p>集群登录设置。</p>
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置<p>集群登录设置。</p>
 * @method array getSecurityGroupIds() 获取<p>集群中实例所属安全组。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>集群中实例所属安全组。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。</p>
 * @method string getClientToken() 获取<p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
 * @method void setClientToken(string $ClientToken) 设置<p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
 * @method boolean getDryRun() 获取<p>是否只预检此次请求。<br>true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和云服务器库存。<br>如果检查不通过，则返回对应错误码；<br>如果检查通过，则返回RequestId.<br>false（默认）：发送正常请求，通过检查后直接创建实例</p>
 * @method void setDryRun(boolean $DryRun) 设置<p>是否只预检此次请求。<br>true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和云服务器库存。<br>如果检查不通过，则返回对应错误码；<br>如果检查通过，则返回RequestId.<br>false（默认）：发送正常请求，通过检查后直接创建实例</p>
 * @method string getAccountType() 获取<p>域名字服务类型。默认取值：NIS。</p><li>NIS：NIS域名字服务。</li>
 * @method void setAccountType(string $AccountType) 设置<p>域名字服务类型。默认取值：NIS。</p><li>NIS：NIS域名字服务。</li>
 * @method string getClusterName() 获取<p>集群显示名称。</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群显示名称。</p>
 * @method StorageOption getStorageOption() 获取<p>集群存储选项</p>
 * @method void setStorageOption(StorageOption $StorageOption) 设置<p>集群存储选项</p>
 * @method LoginNode getLoginNode() 获取<p>指定登录节点。</p>
 * @method void setLoginNode(LoginNode $LoginNode) 设置<p>指定登录节点。</p>
 * @method integer getLoginNodeCount() 获取<p>指定登录节点的数量。默认取值：0。取值范围：0～10。</p>
 * @method void setLoginNodeCount(integer $LoginNodeCount) 设置<p>指定登录节点的数量。默认取值：0。取值范围：0～10。</p>
 * @method array getTags() 获取<p>创建集群时同时绑定的标签对说明。</p>
 * @method void setTags(array $Tags) 设置<p>创建集群时同时绑定的标签对说明。</p>
 * @method string getAutoScalingType() 获取<p>弹性伸缩类型。默认值：THPC_AS</p>
 * @method void setAutoScalingType(string $AutoScalingType) 设置<p>弹性伸缩类型。默认值：THPC_AS</p>
 * @method array getInitNodeScripts() 获取<p>节点初始化脚本信息列表。</p>
 * @method void setInitNodeScripts(array $InitNodeScripts) 设置<p>节点初始化脚本信息列表。</p>
 * @method string getHpcClusterId() 获取<p>高性能计算集群ID。若创建的实例为高性能计算实例，需指定实例放置的集群，否则不可指定。</p>
 * @method void setHpcClusterId(string $HpcClusterId) 设置<p>高性能计算集群ID。若创建的实例为高性能计算实例，需指定实例放置的集群，否则不可指定。</p>
 */
class CreateClusterRequest extends AbstractModel
{
    /**
     * @var Placement <p>集群中实例所在的位置。</p>
     */
    public $Placement;

    /**
     * @var ManagerNode <p>指定管理节点。</p>
     */
    public $ManagerNode;

    /**
     * @var integer <p>指定管理节点的数量。默认取值：1。取值范围：1～2。</p>
     */
    public $ManagerNodeCount;

    /**
     * @var ComputeNode <p>指定计算节点。</p>
     */
    public $ComputeNode;

    /**
     * @var integer <p>指定计算节点的数量。默认取值：0。</p>
     */
    public $ComputeNodeCount;

    /**
     * @var string <p>调度器类型。默认取值：SLURM。<li>SLURM：SLURM调度器。</li></p>
     */
    public $SchedulerType;

    /**
     * @var string <p>创建调度器的版本号，可填写版本号为“latest” 和 各调度器支持的版本号；如果是&quot;latest&quot;, 则代表创建的是平台当前支持的该类型调度器最新版本。如果不填写，默认创建的是“latest”版本调度器<br>各调度器支持的集群版本：</p><li>SLURM：21.08.8、23.11.7</li>
     */
    public $SchedulerVersion;

    /**
     * @var string <p>指定有效的<a href="https://cloud.tencent.com/document/product/213/4940">镜像</a>ID，格式形如<code>img-xxx</code>。目前支持部分公有镜像和自定义镜像。公共镜像请参考<a href="https://cloud.tencent.com/document/product/1527/64818#.E9.95.9C.E5.83.8F">镜像限制</a></p>
     */
    public $ImageId;

    /**
     * @var VirtualPrivateCloud <p>私有网络相关信息配置。</p>
     */
    public $VirtualPrivateCloud;

    /**
     * @var LoginSettings <p>集群登录设置。</p>
     */
    public $LoginSettings;

    /**
     * @var array <p>集群中实例所属安全组。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。</p>
     */
    public $SecurityGroupIds;

    /**
     * @var string <p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
     */
    public $ClientToken;

    /**
     * @var boolean <p>是否只预检此次请求。<br>true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和云服务器库存。<br>如果检查不通过，则返回对应错误码；<br>如果检查通过，则返回RequestId.<br>false（默认）：发送正常请求，通过检查后直接创建实例</p>
     */
    public $DryRun;

    /**
     * @var string <p>域名字服务类型。默认取值：NIS。</p><li>NIS：NIS域名字服务。</li>
     */
    public $AccountType;

    /**
     * @var string <p>集群显示名称。</p>
     */
    public $ClusterName;

    /**
     * @var StorageOption <p>集群存储选项</p>
     */
    public $StorageOption;

    /**
     * @var LoginNode <p>指定登录节点。</p>
     */
    public $LoginNode;

    /**
     * @var integer <p>指定登录节点的数量。默认取值：0。取值范围：0～10。</p>
     */
    public $LoginNodeCount;

    /**
     * @var array <p>创建集群时同时绑定的标签对说明。</p>
     */
    public $Tags;

    /**
     * @var string <p>弹性伸缩类型。默认值：THPC_AS</p>
     */
    public $AutoScalingType;

    /**
     * @var array <p>节点初始化脚本信息列表。</p>
     */
    public $InitNodeScripts;

    /**
     * @var string <p>高性能计算集群ID。若创建的实例为高性能计算实例，需指定实例放置的集群，否则不可指定。</p>
     */
    public $HpcClusterId;

    /**
     * @param Placement $Placement <p>集群中实例所在的位置。</p>
     * @param ManagerNode $ManagerNode <p>指定管理节点。</p>
     * @param integer $ManagerNodeCount <p>指定管理节点的数量。默认取值：1。取值范围：1～2。</p>
     * @param ComputeNode $ComputeNode <p>指定计算节点。</p>
     * @param integer $ComputeNodeCount <p>指定计算节点的数量。默认取值：0。</p>
     * @param string $SchedulerType <p>调度器类型。默认取值：SLURM。<li>SLURM：SLURM调度器。</li></p>
     * @param string $SchedulerVersion <p>创建调度器的版本号，可填写版本号为“latest” 和 各调度器支持的版本号；如果是&quot;latest&quot;, 则代表创建的是平台当前支持的该类型调度器最新版本。如果不填写，默认创建的是“latest”版本调度器<br>各调度器支持的集群版本：</p><li>SLURM：21.08.8、23.11.7</li>
     * @param string $ImageId <p>指定有效的<a href="https://cloud.tencent.com/document/product/213/4940">镜像</a>ID，格式形如<code>img-xxx</code>。目前支持部分公有镜像和自定义镜像。公共镜像请参考<a href="https://cloud.tencent.com/document/product/1527/64818#.E9.95.9C.E5.83.8F">镜像限制</a></p>
     * @param VirtualPrivateCloud $VirtualPrivateCloud <p>私有网络相关信息配置。</p>
     * @param LoginSettings $LoginSettings <p>集群登录设置。</p>
     * @param array $SecurityGroupIds <p>集群中实例所属安全组。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。</p>
     * @param string $ClientToken <p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
     * @param boolean $DryRun <p>是否只预检此次请求。<br>true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和云服务器库存。<br>如果检查不通过，则返回对应错误码；<br>如果检查通过，则返回RequestId.<br>false（默认）：发送正常请求，通过检查后直接创建实例</p>
     * @param string $AccountType <p>域名字服务类型。默认取值：NIS。</p><li>NIS：NIS域名字服务。</li>
     * @param string $ClusterName <p>集群显示名称。</p>
     * @param StorageOption $StorageOption <p>集群存储选项</p>
     * @param LoginNode $LoginNode <p>指定登录节点。</p>
     * @param integer $LoginNodeCount <p>指定登录节点的数量。默认取值：0。取值范围：0～10。</p>
     * @param array $Tags <p>创建集群时同时绑定的标签对说明。</p>
     * @param string $AutoScalingType <p>弹性伸缩类型。默认值：THPC_AS</p>
     * @param array $InitNodeScripts <p>节点初始化脚本信息列表。</p>
     * @param string $HpcClusterId <p>高性能计算集群ID。若创建的实例为高性能计算实例，需指定实例放置的集群，否则不可指定。</p>
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
        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("ManagerNode",$param) and $param["ManagerNode"] !== null) {
            $this->ManagerNode = new ManagerNode();
            $this->ManagerNode->deserialize($param["ManagerNode"]);
        }

        if (array_key_exists("ManagerNodeCount",$param) and $param["ManagerNodeCount"] !== null) {
            $this->ManagerNodeCount = $param["ManagerNodeCount"];
        }

        if (array_key_exists("ComputeNode",$param) and $param["ComputeNode"] !== null) {
            $this->ComputeNode = new ComputeNode();
            $this->ComputeNode->deserialize($param["ComputeNode"]);
        }

        if (array_key_exists("ComputeNodeCount",$param) and $param["ComputeNodeCount"] !== null) {
            $this->ComputeNodeCount = $param["ComputeNodeCount"];
        }

        if (array_key_exists("SchedulerType",$param) and $param["SchedulerType"] !== null) {
            $this->SchedulerType = $param["SchedulerType"];
        }

        if (array_key_exists("SchedulerVersion",$param) and $param["SchedulerVersion"] !== null) {
            $this->SchedulerVersion = $param["SchedulerVersion"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("VirtualPrivateCloud",$param) and $param["VirtualPrivateCloud"] !== null) {
            $this->VirtualPrivateCloud = new VirtualPrivateCloud();
            $this->VirtualPrivateCloud->deserialize($param["VirtualPrivateCloud"]);
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("StorageOption",$param) and $param["StorageOption"] !== null) {
            $this->StorageOption = new StorageOption();
            $this->StorageOption->deserialize($param["StorageOption"]);
        }

        if (array_key_exists("LoginNode",$param) and $param["LoginNode"] !== null) {
            $this->LoginNode = new LoginNode();
            $this->LoginNode->deserialize($param["LoginNode"]);
        }

        if (array_key_exists("LoginNodeCount",$param) and $param["LoginNodeCount"] !== null) {
            $this->LoginNodeCount = $param["LoginNodeCount"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AutoScalingType",$param) and $param["AutoScalingType"] !== null) {
            $this->AutoScalingType = $param["AutoScalingType"];
        }

        if (array_key_exists("InitNodeScripts",$param) and $param["InitNodeScripts"] !== null) {
            $this->InitNodeScripts = [];
            foreach ($param["InitNodeScripts"] as $key => $value){
                $obj = new NodeScript();
                $obj->deserialize($value);
                array_push($this->InitNodeScripts, $obj);
            }
        }

        if (array_key_exists("HpcClusterId",$param) and $param["HpcClusterId"] !== null) {
            $this->HpcClusterId = $param["HpcClusterId"];
        }
    }
}
