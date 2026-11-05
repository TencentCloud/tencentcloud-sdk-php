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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddExistedInstances请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID（请登录 <a href="https://console.cloud.tencent.com/tke2">TKE 控制台</a> 获取集群 ID ）</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID（请登录 <a href="https://console.cloud.tencent.com/tke2">TKE 控制台</a> 获取集群 ID ）</p>
 * @method array getInstanceIds() 获取<p>实例列表，不支持竞价实例（请登录 <a href="https://console.cloud.tencent.com/cvm">CVM控制台</a> 获取待添加节点ID ）</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>实例列表，不支持竞价实例（请登录 <a href="https://console.cloud.tencent.com/cvm">CVM控制台</a> 获取待添加节点ID ）</p>
 * @method InstanceAdvancedSettings getInstanceAdvancedSettings() 获取<p>实例额外需要设置参数信息(默认值)</p>
 * @method void setInstanceAdvancedSettings(InstanceAdvancedSettings $InstanceAdvancedSettings) 设置<p>实例额外需要设置参数信息(默认值)</p>
 * @method EnhancedService getEnhancedService() 获取<p>增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认开启云监控、云安全服务。</p>
 * @method void setEnhancedService(EnhancedService $EnhancedService) 设置<p>增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认开启云监控、云安全服务。</p>
 * @method LoginSettings getLoginSettings() 获取<p>节点登录信息（目前仅支持使用Password或者单个KeyIds）</p>
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置<p>节点登录信息（目前仅支持使用Password或者单个KeyIds）</p>
 * @method string getHostName() 获取<p>重装系统时，可以指定修改实例的HostName(集群为HostName模式时，此参数必传，规则名称除不支持大写字符外与<a href="https://cloud.tencent.com/document/product/213/15730">CVM创建实例</a>接口HostName一致)</p>
 * @method void setHostName(string $HostName) 设置<p>重装系统时，可以指定修改实例的HostName(集群为HostName模式时，此参数必传，规则名称除不支持大写字符外与<a href="https://cloud.tencent.com/document/product/213/15730">CVM创建实例</a>接口HostName一致)</p>
 * @method array getSecurityGroupIds() 获取<p>实例所属安全组。该参数可以通过调用 DescribeSecurityGroups 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。（目前仅支持设置单个sgId）</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>实例所属安全组。该参数可以通过调用 DescribeSecurityGroups 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。（目前仅支持设置单个sgId）</p>
 * @method NodePoolOption getNodePool() 获取<p>节点池选项</p>
 * @method void setNodePool(NodePoolOption $NodePool) 设置<p>节点池选项</p>
 * @method array getSkipValidateOptions() 获取<p>校验规则相关选项，可配置跳过某些校验规则。目前支持GlobalRouteCIDRCheck（跳过GlobalRouter的相关校验），VpcCniCIDRCheck（跳过VpcCni相关校验）</p>
 * @method void setSkipValidateOptions(array $SkipValidateOptions) 设置<p>校验规则相关选项，可配置跳过某些校验规则。目前支持GlobalRouteCIDRCheck（跳过GlobalRouter的相关校验），VpcCniCIDRCheck（跳过VpcCni相关校验）</p>
 * @method array getInstanceAdvancedSettingsOverrides() 获取<p>参数InstanceAdvancedSettingsOverride数组用于定制化地配置各台instance，与InstanceIds顺序对应。当传入InstanceAdvancedSettingsOverrides数组时，将覆盖默认参数InstanceAdvancedSettings；当没有传入参数InstanceAdvancedSettingsOverrides时，InstanceAdvancedSettings参数对每台instance生效。参数InstanceAdvancedSettingsOverride数组的长度应与InstanceIds数组一致；当长度大于InstanceIds数组长度时将报错；当长度小于InstanceIds数组时，没有对应配置的instance将使用默认配置。</p>
 * @method void setInstanceAdvancedSettingsOverrides(array $InstanceAdvancedSettingsOverrides) 设置<p>参数InstanceAdvancedSettingsOverride数组用于定制化地配置各台instance，与InstanceIds顺序对应。当传入InstanceAdvancedSettingsOverrides数组时，将覆盖默认参数InstanceAdvancedSettings；当没有传入参数InstanceAdvancedSettingsOverrides时，InstanceAdvancedSettings参数对每台instance生效。参数InstanceAdvancedSettingsOverride数组的长度应与InstanceIds数组一致；当长度大于InstanceIds数组长度时将报错；当长度小于InstanceIds数组时，没有对应配置的instance将使用默认配置。</p>
 * @method array getSkipOptions() 获取<p>添加已有节点时需要跳过的步骤，默认为空，当前支持 :</p><ul><li>ResetCVM——跳过 CVM 重装（请确保 TKE 的 UserData 已经写入 CVM）</li><li>InstallRuntime——跳过运行时安装</li><li>ConfigRuntime——跳过运行时配置文件下发</li><li>InstallKubelet——跳过 kubelet 配置文件下发</li><li>ConfigKubelet——跳过 kubelet安装</li></ul>
 * @method void setSkipOptions(array $SkipOptions) 设置<p>添加已有节点时需要跳过的步骤，默认为空，当前支持 :</p><ul><li>ResetCVM——跳过 CVM 重装（请确保 TKE 的 UserData 已经写入 CVM）</li><li>InstallRuntime——跳过运行时安装</li><li>ConfigRuntime——跳过运行时配置文件下发</li><li>InstallKubelet——跳过 kubelet 配置文件下发</li><li>ConfigKubelet——跳过 kubelet安装</li></ul>
 * @method string getImageId() 获取<p>节点镜像</p>
 * @method void setImageId(string $ImageId) 设置<p>节点镜像</p>
 * @method string getNodeType() 获取<p>直接添加为原生节点</p>
 * @method void setNodeType(string $NodeType) 设置<p>直接添加为原生节点</p>
 * @method array getTags() 获取<p>云标签列表</p>
 * @method void setTags(array $Tags) 设置<p>云标签列表</p>
 * @method string getRenewFlag() 获取<p>自动续费标识，NOTIFY_AND_AUTO_RENEW（通知过期且自动续费）、NOTIFY_AND_MANUAL_RENEW（通知过期不自动续费）</p>
 * @method void setRenewFlag(string $RenewFlag) 设置<p>自动续费标识，NOTIFY_AND_AUTO_RENEW（通知过期且自动续费）、NOTIFY_AND_MANUAL_RENEW（通知过期不自动续费）</p>
 */
class AddExistedInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID（请登录 <a href="https://console.cloud.tencent.com/tke2">TKE 控制台</a> 获取集群 ID ）</p>
     */
    public $ClusterId;

    /**
     * @var array <p>实例列表，不支持竞价实例（请登录 <a href="https://console.cloud.tencent.com/cvm">CVM控制台</a> 获取待添加节点ID ）</p>
     */
    public $InstanceIds;

    /**
     * @var InstanceAdvancedSettings <p>实例额外需要设置参数信息(默认值)</p>
     */
    public $InstanceAdvancedSettings;

    /**
     * @var EnhancedService <p>增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认开启云监控、云安全服务。</p>
     */
    public $EnhancedService;

    /**
     * @var LoginSettings <p>节点登录信息（目前仅支持使用Password或者单个KeyIds）</p>
     */
    public $LoginSettings;

    /**
     * @var string <p>重装系统时，可以指定修改实例的HostName(集群为HostName模式时，此参数必传，规则名称除不支持大写字符外与<a href="https://cloud.tencent.com/document/product/213/15730">CVM创建实例</a>接口HostName一致)</p>
     */
    public $HostName;

    /**
     * @var array <p>实例所属安全组。该参数可以通过调用 DescribeSecurityGroups 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。（目前仅支持设置单个sgId）</p>
     */
    public $SecurityGroupIds;

    /**
     * @var NodePoolOption <p>节点池选项</p>
     */
    public $NodePool;

    /**
     * @var array <p>校验规则相关选项，可配置跳过某些校验规则。目前支持GlobalRouteCIDRCheck（跳过GlobalRouter的相关校验），VpcCniCIDRCheck（跳过VpcCni相关校验）</p>
     */
    public $SkipValidateOptions;

    /**
     * @var array <p>参数InstanceAdvancedSettingsOverride数组用于定制化地配置各台instance，与InstanceIds顺序对应。当传入InstanceAdvancedSettingsOverrides数组时，将覆盖默认参数InstanceAdvancedSettings；当没有传入参数InstanceAdvancedSettingsOverrides时，InstanceAdvancedSettings参数对每台instance生效。参数InstanceAdvancedSettingsOverride数组的长度应与InstanceIds数组一致；当长度大于InstanceIds数组长度时将报错；当长度小于InstanceIds数组时，没有对应配置的instance将使用默认配置。</p>
     */
    public $InstanceAdvancedSettingsOverrides;

    /**
     * @var array <p>添加已有节点时需要跳过的步骤，默认为空，当前支持 :</p><ul><li>ResetCVM——跳过 CVM 重装（请确保 TKE 的 UserData 已经写入 CVM）</li><li>InstallRuntime——跳过运行时安装</li><li>ConfigRuntime——跳过运行时配置文件下发</li><li>InstallKubelet——跳过 kubelet 配置文件下发</li><li>ConfigKubelet——跳过 kubelet安装</li></ul>
     */
    public $SkipOptions;

    /**
     * @var string <p>节点镜像</p>
     */
    public $ImageId;

    /**
     * @var string <p>直接添加为原生节点</p>
     */
    public $NodeType;

    /**
     * @var array <p>云标签列表</p>
     */
    public $Tags;

    /**
     * @var string <p>自动续费标识，NOTIFY_AND_AUTO_RENEW（通知过期且自动续费）、NOTIFY_AND_MANUAL_RENEW（通知过期不自动续费）</p>
     */
    public $RenewFlag;

    /**
     * @param string $ClusterId <p>集群ID（请登录 <a href="https://console.cloud.tencent.com/tke2">TKE 控制台</a> 获取集群 ID ）</p>
     * @param array $InstanceIds <p>实例列表，不支持竞价实例（请登录 <a href="https://console.cloud.tencent.com/cvm">CVM控制台</a> 获取待添加节点ID ）</p>
     * @param InstanceAdvancedSettings $InstanceAdvancedSettings <p>实例额外需要设置参数信息(默认值)</p>
     * @param EnhancedService $EnhancedService <p>增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认开启云监控、云安全服务。</p>
     * @param LoginSettings $LoginSettings <p>节点登录信息（目前仅支持使用Password或者单个KeyIds）</p>
     * @param string $HostName <p>重装系统时，可以指定修改实例的HostName(集群为HostName模式时，此参数必传，规则名称除不支持大写字符外与<a href="https://cloud.tencent.com/document/product/213/15730">CVM创建实例</a>接口HostName一致)</p>
     * @param array $SecurityGroupIds <p>实例所属安全组。该参数可以通过调用 DescribeSecurityGroups 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。（目前仅支持设置单个sgId）</p>
     * @param NodePoolOption $NodePool <p>节点池选项</p>
     * @param array $SkipValidateOptions <p>校验规则相关选项，可配置跳过某些校验规则。目前支持GlobalRouteCIDRCheck（跳过GlobalRouter的相关校验），VpcCniCIDRCheck（跳过VpcCni相关校验）</p>
     * @param array $InstanceAdvancedSettingsOverrides <p>参数InstanceAdvancedSettingsOverride数组用于定制化地配置各台instance，与InstanceIds顺序对应。当传入InstanceAdvancedSettingsOverrides数组时，将覆盖默认参数InstanceAdvancedSettings；当没有传入参数InstanceAdvancedSettingsOverrides时，InstanceAdvancedSettings参数对每台instance生效。参数InstanceAdvancedSettingsOverride数组的长度应与InstanceIds数组一致；当长度大于InstanceIds数组长度时将报错；当长度小于InstanceIds数组时，没有对应配置的instance将使用默认配置。</p>
     * @param array $SkipOptions <p>添加已有节点时需要跳过的步骤，默认为空，当前支持 :</p><ul><li>ResetCVM——跳过 CVM 重装（请确保 TKE 的 UserData 已经写入 CVM）</li><li>InstallRuntime——跳过运行时安装</li><li>ConfigRuntime——跳过运行时配置文件下发</li><li>InstallKubelet——跳过 kubelet 配置文件下发</li><li>ConfigKubelet——跳过 kubelet安装</li></ul>
     * @param string $ImageId <p>节点镜像</p>
     * @param string $NodeType <p>直接添加为原生节点</p>
     * @param array $Tags <p>云标签列表</p>
     * @param string $RenewFlag <p>自动续费标识，NOTIFY_AND_AUTO_RENEW（通知过期且自动续费）、NOTIFY_AND_MANUAL_RENEW（通知过期不自动续费）</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceAdvancedSettings",$param) and $param["InstanceAdvancedSettings"] !== null) {
            $this->InstanceAdvancedSettings = new InstanceAdvancedSettings();
            $this->InstanceAdvancedSettings->deserialize($param["InstanceAdvancedSettings"]);
        }

        if (array_key_exists("EnhancedService",$param) and $param["EnhancedService"] !== null) {
            $this->EnhancedService = new EnhancedService();
            $this->EnhancedService->deserialize($param["EnhancedService"]);
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("NodePool",$param) and $param["NodePool"] !== null) {
            $this->NodePool = new NodePoolOption();
            $this->NodePool->deserialize($param["NodePool"]);
        }

        if (array_key_exists("SkipValidateOptions",$param) and $param["SkipValidateOptions"] !== null) {
            $this->SkipValidateOptions = $param["SkipValidateOptions"];
        }

        if (array_key_exists("InstanceAdvancedSettingsOverrides",$param) and $param["InstanceAdvancedSettingsOverrides"] !== null) {
            $this->InstanceAdvancedSettingsOverrides = [];
            foreach ($param["InstanceAdvancedSettingsOverrides"] as $key => $value){
                $obj = new InstanceAdvancedSettings();
                $obj->deserialize($value);
                array_push($this->InstanceAdvancedSettingsOverrides, $obj);
            }
        }

        if (array_key_exists("SkipOptions",$param) and $param["SkipOptions"] !== null) {
            $this->SkipOptions = $param["SkipOptions"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}
