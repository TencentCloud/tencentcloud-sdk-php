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
namespace TencentCloud\Thpc\V20220401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCluster请求参数结构体
 *
 * @method Placement getPlacement() 获取集群中实例所在的位置。
 * @method void setPlacement(Placement $Placement) 设置集群中实例所在的位置。
 * @method ManagerNode getManagerNode() 获取指定管理节点。
 * @method void setManagerNode(ManagerNode $ManagerNode) 设置指定管理节点。
 * @method integer getManagerNodeCount() 获取指定管理节点的数量。默认取值：1。取值范围：1～2。
 * @method void setManagerNodeCount(integer $ManagerNodeCount) 设置指定管理节点的数量。默认取值：1。取值范围：1～2。
 * @method ComputeNode getComputeNode() 获取指定计算节点。
 * @method void setComputeNode(ComputeNode $ComputeNode) 设置指定计算节点。
 * @method integer getComputeNodeCount() 获取指定计算节点的数量。默认取值：0。
 * @method void setComputeNodeCount(integer $ComputeNodeCount) 设置指定计算节点的数量。默认取值：0。
 * @method string getSchedulerType() 获取调度器类型。默认取值：SLURM。<br><li>SGE：SGE调度器。<br><li>SLURM：SLURM调度器。
 * @method void setSchedulerType(string $SchedulerType) 设置调度器类型。默认取值：SLURM。<br><li>SGE：SGE调度器。<br><li>SLURM：SLURM调度器。
 * @method string getImageId() 获取指定有效的[镜像](https://cloud.tencent.com/document/product/213/4940)ID，格式形如`img-xxx`。目前仅支持公有镜像。
 * @method void setImageId(string $ImageId) 设置指定有效的[镜像](https://cloud.tencent.com/document/product/213/4940)ID，格式形如`img-xxx`。目前仅支持公有镜像。
 * @method VirtualPrivateCloud getVirtualPrivateCloud() 获取私有网络相关信息配置。
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) 设置私有网络相关信息配置。
 * @method LoginSettings getLoginSettings() 获取集群登录设置。
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置集群登录设置。
 * @method array getSecurityGroupIds() 获取集群中实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置集群中实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。
 * @method string getClientToken() 获取用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
 * @method void setClientToken(string $ClientToken) 设置用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
 * @method boolean getDryRun() 获取是否只预检此次请求。
true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和云服务器库存。
如果检查不通过，则返回对应错误码；
如果检查通过，则返回RequestId.
false（默认）：发送正常请求，通过检查后直接创建实例
 * @method void setDryRun(boolean $DryRun) 设置是否只预检此次请求。
true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和云服务器库存。
如果检查不通过，则返回对应错误码；
如果检查通过，则返回RequestId.
false（默认）：发送正常请求，通过检查后直接创建实例
 * @method string getAccountType() 获取域名字服务类型。默认取值：NIS。
<li>NIS：NIS域名字服务。
 * @method void setAccountType(string $AccountType) 设置域名字服务类型。默认取值：NIS。
<li>NIS：NIS域名字服务。
 * @method string getClusterName() 获取集群显示名称。
 * @method void setClusterName(string $ClusterName) 设置集群显示名称。
 * @method StorageOption getStorageOption() 获取集群存储选项
 * @method void setStorageOption(StorageOption $StorageOption) 设置集群存储选项
 * @method LoginNode getLoginNode() 获取指定登录节点。
 * @method void setLoginNode(LoginNode $LoginNode) 设置指定登录节点。
 * @method integer getLoginNodeCount() 获取指定登录节点的数量。默认取值：0。取值范围：0～10。
 * @method void setLoginNodeCount(integer $LoginNodeCount) 设置指定登录节点的数量。默认取值：0。取值范围：0～10。
 * @method array getTags() 获取创建集群时同时绑定的标签对说明。
 * @method void setTags(array $Tags) 设置创建集群时同时绑定的标签对说明。
 * @method string getAutoScalingType() 获取弹性伸缩类型。<br><li>AS：集群自动扩缩容由[弹性伸缩](https://cloud.tencent.com/document/product/377/3154)产品实现。<br><li>THPC_AS：集群自动扩缩容由THPC产品内部实现。
 * @method void setAutoScalingType(string $AutoScalingType) 设置弹性伸缩类型。<br><li>AS：集群自动扩缩容由[弹性伸缩](https://cloud.tencent.com/document/product/377/3154)产品实现。<br><li>THPC_AS：集群自动扩缩容由THPC产品内部实现。
 */
class CreateClusterRequest extends AbstractModel
{
    /**
     * @var Placement 集群中实例所在的位置。
     */
    public $Placement;

    /**
     * @var ManagerNode 指定管理节点。
     */
    public $ManagerNode;

    /**
     * @var integer 指定管理节点的数量。默认取值：1。取值范围：1～2。
     */
    public $ManagerNodeCount;

    /**
     * @var ComputeNode 指定计算节点。
     */
    public $ComputeNode;

    /**
     * @var integer 指定计算节点的数量。默认取值：0。
     */
    public $ComputeNodeCount;

    /**
     * @var string 调度器类型。默认取值：SLURM。<br><li>SGE：SGE调度器。<br><li>SLURM：SLURM调度器。
     */
    public $SchedulerType;

    /**
     * @var string 指定有效的[镜像](https://cloud.tencent.com/document/product/213/4940)ID，格式形如`img-xxx`。目前仅支持公有镜像。
     */
    public $ImageId;

    /**
     * @var VirtualPrivateCloud 私有网络相关信息配置。
     */
    public $VirtualPrivateCloud;

    /**
     * @var LoginSettings 集群登录设置。
     */
    public $LoginSettings;

    /**
     * @var array 集群中实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。
     */
    public $SecurityGroupIds;

    /**
     * @var string 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
     */
    public $ClientToken;

    /**
     * @var boolean 是否只预检此次请求。
true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和云服务器库存。
如果检查不通过，则返回对应错误码；
如果检查通过，则返回RequestId.
false（默认）：发送正常请求，通过检查后直接创建实例
     */
    public $DryRun;

    /**
     * @var string 域名字服务类型。默认取值：NIS。
<li>NIS：NIS域名字服务。
     */
    public $AccountType;

    /**
     * @var string 集群显示名称。
     */
    public $ClusterName;

    /**
     * @var StorageOption 集群存储选项
     */
    public $StorageOption;

    /**
     * @var LoginNode 指定登录节点。
     */
    public $LoginNode;

    /**
     * @var integer 指定登录节点的数量。默认取值：0。取值范围：0～10。
     */
    public $LoginNodeCount;

    /**
     * @var array 创建集群时同时绑定的标签对说明。
     */
    public $Tags;

    /**
     * @var string 弹性伸缩类型。<br><li>AS：集群自动扩缩容由[弹性伸缩](https://cloud.tencent.com/document/product/377/3154)产品实现。<br><li>THPC_AS：集群自动扩缩容由THPC产品内部实现。
     */
    public $AutoScalingType;

    /**
     * @param Placement $Placement 集群中实例所在的位置。
     * @param ManagerNode $ManagerNode 指定管理节点。
     * @param integer $ManagerNodeCount 指定管理节点的数量。默认取值：1。取值范围：1～2。
     * @param ComputeNode $ComputeNode 指定计算节点。
     * @param integer $ComputeNodeCount 指定计算节点的数量。默认取值：0。
     * @param string $SchedulerType 调度器类型。默认取值：SLURM。<br><li>SGE：SGE调度器。<br><li>SLURM：SLURM调度器。
     * @param string $ImageId 指定有效的[镜像](https://cloud.tencent.com/document/product/213/4940)ID，格式形如`img-xxx`。目前仅支持公有镜像。
     * @param VirtualPrivateCloud $VirtualPrivateCloud 私有网络相关信息配置。
     * @param LoginSettings $LoginSettings 集群登录设置。
     * @param array $SecurityGroupIds 集群中实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。
     * @param string $ClientToken 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
     * @param boolean $DryRun 是否只预检此次请求。
true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和云服务器库存。
如果检查不通过，则返回对应错误码；
如果检查通过，则返回RequestId.
false（默认）：发送正常请求，通过检查后直接创建实例
     * @param string $AccountType 域名字服务类型。默认取值：NIS。
<li>NIS：NIS域名字服务。
     * @param string $ClusterName 集群显示名称。
     * @param StorageOption $StorageOption 集群存储选项
     * @param LoginNode $LoginNode 指定登录节点。
     * @param integer $LoginNodeCount 指定登录节点的数量。默认取值：0。取值范围：0～10。
     * @param array $Tags 创建集群时同时绑定的标签对说明。
     * @param string $AutoScalingType 弹性伸缩类型。<br><li>AS：集群自动扩缩容由[弹性伸缩](https://cloud.tencent.com/document/product/377/3154)产品实现。<br><li>THPC_AS：集群自动扩缩容由THPC产品内部实现。
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
    }
}
