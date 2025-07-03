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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLaunchConfiguration请求参数结构体
 *
 * @method string getLaunchConfigurationName() 获取启动配置显示名称。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超60个字节。
 * @method void setLaunchConfigurationName(string $LaunchConfigurationName) 设置启动配置显示名称。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超60个字节。
 * @method string getImageId() 获取指定有效的[镜像](https://cloud.tencent.com/document/product/213/4940)ID，格式形如`img-8toqc6s3`。镜像Id与镜像族名称，二者必填一个且只能填写一个。镜像类型分为四种：<br/><li>公共镜像</li><li>自定义镜像</li><li>共享镜像</li><li>服务市场镜像</li><br/>可通过以下方式获取可用的镜像ID：<br/><li>`公共镜像`、`自定义镜像`、`共享镜像`的镜像ID可通过登录[控制台](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE)查询；`服务镜像市场`的镜像ID可通过[云市场](https://market.cloud.tencent.com/list)查询。</li><li>通过调用接口 [DescribeImages](https://cloud.tencent.com/document/api/213/15715) ，取返回信息中的`ImageId`字段。</li>
 * @method void setImageId(string $ImageId) 设置指定有效的[镜像](https://cloud.tencent.com/document/product/213/4940)ID，格式形如`img-8toqc6s3`。镜像Id与镜像族名称，二者必填一个且只能填写一个。镜像类型分为四种：<br/><li>公共镜像</li><li>自定义镜像</li><li>共享镜像</li><li>服务市场镜像</li><br/>可通过以下方式获取可用的镜像ID：<br/><li>`公共镜像`、`自定义镜像`、`共享镜像`的镜像ID可通过登录[控制台](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE)查询；`服务镜像市场`的镜像ID可通过[云市场](https://market.cloud.tencent.com/list)查询。</li><li>通过调用接口 [DescribeImages](https://cloud.tencent.com/document/api/213/15715) ，取返回信息中的`ImageId`字段。</li>
 * @method integer getProjectId() 获取启动配置所属项目ID。默认值为0，表示使用默认项目。该参数可以通过调用 [DescribeProject](https://cloud.tencent.com/document/api/651/78725) 的返回值中的 projectId 字段来获取。
注意：伸缩组内实例所属项目ID取伸缩组项目ID，与这里取值无关。
 * @method void setProjectId(integer $ProjectId) 设置启动配置所属项目ID。默认值为0，表示使用默认项目。该参数可以通过调用 [DescribeProject](https://cloud.tencent.com/document/api/651/78725) 的返回值中的 projectId 字段来获取。
注意：伸缩组内实例所属项目ID取伸缩组项目ID，与这里取值无关。
 * @method string getInstanceType() 获取实例机型。不同实例机型指定了不同的资源规格，具体取值可通过调用接口 [DescribeInstanceTypeConfigs](https://cloud.tencent.com/document/api/213/15749) 来获得最新的规格表或参见[实例类型](https://cloud.tencent.com/document/product/213/11518)描述。
`InstanceType`和`InstanceTypes`参数互斥，二者必填一个且只能填写一个。
 * @method void setInstanceType(string $InstanceType) 设置实例机型。不同实例机型指定了不同的资源规格，具体取值可通过调用接口 [DescribeInstanceTypeConfigs](https://cloud.tencent.com/document/api/213/15749) 来获得最新的规格表或参见[实例类型](https://cloud.tencent.com/document/product/213/11518)描述。
`InstanceType`和`InstanceTypes`参数互斥，二者必填一个且只能填写一个。
 * @method SystemDisk getSystemDisk() 获取实例系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。
 * @method void setSystemDisk(SystemDisk $SystemDisk) 设置实例系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。
 * @method array getDataDisks() 获取实例数据盘配置信息。若不指定该参数，则默认不购买数据盘，最多支持指定11块数据盘。
 * @method void setDataDisks(array $DataDisks) 设置实例数据盘配置信息。若不指定该参数，则默认不购买数据盘，最多支持指定11块数据盘。
 * @method InternetAccessible getInternetAccessible() 获取公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。
 * @method LoginSettings getLoginSettings() 获取实例登录设置。通过该参数可以设置实例的登录方式密码、密钥或保持镜像的原始登录设置。默认情况下会随机生成密码，并以站内信方式知会到用户。
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置实例登录设置。通过该参数可以设置实例的登录方式密码、密钥或保持镜像的原始登录设置。默认情况下会随机生成密码，并以站内信方式知会到用户。
 * @method array getSecurityGroupIds() 获取实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的`SecurityGroupId`字段来获取。若不指定该参数，则默认不绑定安全组。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的`SecurityGroupId`字段来获取。若不指定该参数，则默认不绑定安全组。
 * @method EnhancedService getEnhancedService() 获取增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认开启云监控、云安全服务。
 * @method void setEnhancedService(EnhancedService $EnhancedService) 设置增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认开启云监控、云安全服务。
 * @method string getUserData() 获取经过 Base64 编码后的自定义数据，最大长度不超过16KB。
 * @method void setUserData(string $UserData) 设置经过 Base64 编码后的自定义数据，最大长度不超过16KB。
 * @method string getInstanceChargeType() 获取实例计费类型，CVM默认值按照POSTPAID_BY_HOUR处理。
<li>POSTPAID_BY_HOUR：按小时后付费</li>
<li>SPOTPAID：竞价付费</li>
<li>PREPAID：预付费，即包年包月</li>
<li>CDCPAID：专用集群付费</li>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例计费类型，CVM默认值按照POSTPAID_BY_HOUR处理。
<li>POSTPAID_BY_HOUR：按小时后付费</li>
<li>SPOTPAID：竞价付费</li>
<li>PREPAID：预付费，即包年包月</li>
<li>CDCPAID：专用集群付费</li>
 * @method InstanceMarketOptionsRequest getInstanceMarketOptions() 获取实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费则该参数必传。
 * @method void setInstanceMarketOptions(InstanceMarketOptionsRequest $InstanceMarketOptions) 设置实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费则该参数必传。
 * @method array getInstanceTypes() 获取实例机型列表，不同实例机型指定了不同的资源规格，最多支持10种实例机型。
`InstanceType`和`InstanceTypes`参数互斥，二者必填一个且只能填写一个。具体取值可通过调用接口[DescribeInstanceTypeConfigs](https://cloud.tencent.com/document/api/213/15749)来获得最新的规格表或参见[实例规格描述](https://cloud.tencent.com/document/product/213/11518)。
 * @method void setInstanceTypes(array $InstanceTypes) 设置实例机型列表，不同实例机型指定了不同的资源规格，最多支持10种实例机型。
`InstanceType`和`InstanceTypes`参数互斥，二者必填一个且只能填写一个。具体取值可通过调用接口[DescribeInstanceTypeConfigs](https://cloud.tencent.com/document/api/213/15749)来获得最新的规格表或参见[实例规格描述](https://cloud.tencent.com/document/product/213/11518)。
 * @method string getCamRoleName() 获取CAM角色名称。可通过[DescribeRoleList](https://cloud.tencent.com/document/product/598/36223)接口返回值中的roleName获取。
 * @method void setCamRoleName(string $CamRoleName) 设置CAM角色名称。可通过[DescribeRoleList](https://cloud.tencent.com/document/product/598/36223)接口返回值中的roleName获取。
 * @method string getInstanceTypesCheckPolicy() 获取实例类型校验策略，取值包括 ALL 和 ANY，默认取值为ANY。该参数仅在 InstanceTypes 入参包含多个机型时生效。
<li> ALL，所有实例类型（InstanceType）都可用则通过校验，否则校验报错。</li>
<li> ANY，存在任何一个实例类型（InstanceType）可用则通过校验，否则校验报错。</li>

实例类型不可用的常见原因包括该实例类型售罄、对应云盘售罄等。
如果 InstanceTypes 中一款机型不存在或者已下线，则无论 InstanceTypesCheckPolicy 采用何种取值，都会校验报错。
 * @method void setInstanceTypesCheckPolicy(string $InstanceTypesCheckPolicy) 设置实例类型校验策略，取值包括 ALL 和 ANY，默认取值为ANY。该参数仅在 InstanceTypes 入参包含多个机型时生效。
<li> ALL，所有实例类型（InstanceType）都可用则通过校验，否则校验报错。</li>
<li> ANY，存在任何一个实例类型（InstanceType）可用则通过校验，否则校验报错。</li>

实例类型不可用的常见原因包括该实例类型售罄、对应云盘售罄等。
如果 InstanceTypes 中一款机型不存在或者已下线，则无论 InstanceTypesCheckPolicy 采用何种取值，都会校验报错。
 * @method array getInstanceTags() 获取标签列表。通过指定该参数，可以为扩容的实例绑定标签。最多支持指定10个标签。
 * @method void setInstanceTags(array $InstanceTags) 设置标签列表。通过指定该参数，可以为扩容的实例绑定标签。最多支持指定10个标签。
 * @method array getTags() 获取标签描述列表。通过指定该参数可以支持绑定标签到启动配置。每个启动配置最多支持30个标签。
 * @method void setTags(array $Tags) 设置标签描述列表。通过指定该参数可以支持绑定标签到启动配置。每个启动配置最多支持30个标签。
 * @method HostNameSettings getHostNameSettings() 获取云服务器主机名（HostName）的相关设置。
 * @method void setHostNameSettings(HostNameSettings $HostNameSettings) 设置云服务器主机名（HostName）的相关设置。
 * @method InstanceNameSettings getInstanceNameSettings() 获取云服务器实例名（InstanceName）的相关设置。
如果用户在启动配置中设置此字段，则伸缩组创建出的实例 InstanceName 参照此字段进行设置，并传递给 CVM；如果用户未在启动配置中设置此字段，则伸缩组创建出的实例 InstanceName 按照“as-{{ 伸缩组AutoScalingGroupName }}”进行设置，并传递给 CVM。
 * @method void setInstanceNameSettings(InstanceNameSettings $InstanceNameSettings) 设置云服务器实例名（InstanceName）的相关设置。
如果用户在启动配置中设置此字段，则伸缩组创建出的实例 InstanceName 参照此字段进行设置，并传递给 CVM；如果用户未在启动配置中设置此字段，则伸缩组创建出的实例 InstanceName 按照“as-{{ 伸缩组AutoScalingGroupName }}”进行设置，并传递给 CVM。
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
 * @method string getDiskTypePolicy() 获取云盘类型选择策略，默认取值 ORIGINAL，取值范围：
<li>ORIGINAL：使用设置的云盘类型</li>
<li>AUTOMATIC：自动选择当前可用的云盘类型</li>
 * @method void setDiskTypePolicy(string $DiskTypePolicy) 设置云盘类型选择策略，默认取值 ORIGINAL，取值范围：
<li>ORIGINAL：使用设置的云盘类型</li>
<li>AUTOMATIC：自动选择当前可用的云盘类型</li>
 * @method string getHpcClusterId() 获取高性能计算集群ID。可通过调用[DescribeHpcClusters](https://cloud.tencent.com/document/product/213/83220)接口获取该参数。
注意：此字段默认为空。
 * @method void setHpcClusterId(string $HpcClusterId) 设置高性能计算集群ID。可通过调用[DescribeHpcClusters](https://cloud.tencent.com/document/product/213/83220)接口获取该参数。
注意：此字段默认为空。
 * @method IPv6InternetAccessible getIPv6InternetAccessible() 获取IPv6公网带宽相关信息设置。若新建实例包含IPv6地址，该参数可为新建实例的IPv6地址分配公网带宽。关联启动配置的伸缩组Ipv6AddressCount参数为0时，该参数不会生效。
 * @method void setIPv6InternetAccessible(IPv6InternetAccessible $IPv6InternetAccessible) 设置IPv6公网带宽相关信息设置。若新建实例包含IPv6地址，该参数可为新建实例的IPv6地址分配公网带宽。关联启动配置的伸缩组Ipv6AddressCount参数为0时，该参数不会生效。
 * @method array getDisasterRecoverGroupIds() 获取置放群组id，仅支持指定一个。
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) 设置置放群组id，仅支持指定一个。
 * @method string getImageFamily() 获取镜像族名称。镜像Id与镜像族名称，二者必填一个且只能填写一个。可通过调用[DescribeImages](https://cloud.tencent.com/document/product/213/15715)接口获取该参数。
 * @method void setImageFamily(string $ImageFamily) 设置镜像族名称。镜像Id与镜像族名称，二者必填一个且只能填写一个。可通过调用[DescribeImages](https://cloud.tencent.com/document/product/213/15715)接口获取该参数。
 * @method string getDedicatedClusterId() 获取本地专用集群ID。可通过 [DescribeDedicatedClusters](https://cloud.tencent.com/document/product/1346/73758) 接口获取该参数。
 * @method void setDedicatedClusterId(string $DedicatedClusterId) 设置本地专用集群ID。可通过 [DescribeDedicatedClusters](https://cloud.tencent.com/document/product/1346/73758) 接口获取该参数。
 * @method Metadata getMetadata() 获取自定义metadata。
 * @method void setMetadata(Metadata $Metadata) 设置自定义metadata。
 */
class CreateLaunchConfigurationRequest extends AbstractModel
{
    /**
     * @var string 启动配置显示名称。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超60个字节。
     */
    public $LaunchConfigurationName;

    /**
     * @var string 指定有效的[镜像](https://cloud.tencent.com/document/product/213/4940)ID，格式形如`img-8toqc6s3`。镜像Id与镜像族名称，二者必填一个且只能填写一个。镜像类型分为四种：<br/><li>公共镜像</li><li>自定义镜像</li><li>共享镜像</li><li>服务市场镜像</li><br/>可通过以下方式获取可用的镜像ID：<br/><li>`公共镜像`、`自定义镜像`、`共享镜像`的镜像ID可通过登录[控制台](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE)查询；`服务镜像市场`的镜像ID可通过[云市场](https://market.cloud.tencent.com/list)查询。</li><li>通过调用接口 [DescribeImages](https://cloud.tencent.com/document/api/213/15715) ，取返回信息中的`ImageId`字段。</li>
     */
    public $ImageId;

    /**
     * @var integer 启动配置所属项目ID。默认值为0，表示使用默认项目。该参数可以通过调用 [DescribeProject](https://cloud.tencent.com/document/api/651/78725) 的返回值中的 projectId 字段来获取。
注意：伸缩组内实例所属项目ID取伸缩组项目ID，与这里取值无关。
     */
    public $ProjectId;

    /**
     * @var string 实例机型。不同实例机型指定了不同的资源规格，具体取值可通过调用接口 [DescribeInstanceTypeConfigs](https://cloud.tencent.com/document/api/213/15749) 来获得最新的规格表或参见[实例类型](https://cloud.tencent.com/document/product/213/11518)描述。
`InstanceType`和`InstanceTypes`参数互斥，二者必填一个且只能填写一个。
     */
    public $InstanceType;

    /**
     * @var SystemDisk 实例系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。
     */
    public $SystemDisk;

    /**
     * @var array 实例数据盘配置信息。若不指定该参数，则默认不购买数据盘，最多支持指定11块数据盘。
     */
    public $DataDisks;

    /**
     * @var InternetAccessible 公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。
     */
    public $InternetAccessible;

    /**
     * @var LoginSettings 实例登录设置。通过该参数可以设置实例的登录方式密码、密钥或保持镜像的原始登录设置。默认情况下会随机生成密码，并以站内信方式知会到用户。
     */
    public $LoginSettings;

    /**
     * @var array 实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的`SecurityGroupId`字段来获取。若不指定该参数，则默认不绑定安全组。
     */
    public $SecurityGroupIds;

    /**
     * @var EnhancedService 增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认开启云监控、云安全服务。
     */
    public $EnhancedService;

    /**
     * @var string 经过 Base64 编码后的自定义数据，最大长度不超过16KB。
     */
    public $UserData;

    /**
     * @var string 实例计费类型，CVM默认值按照POSTPAID_BY_HOUR处理。
<li>POSTPAID_BY_HOUR：按小时后付费</li>
<li>SPOTPAID：竞价付费</li>
<li>PREPAID：预付费，即包年包月</li>
<li>CDCPAID：专用集群付费</li>
     */
    public $InstanceChargeType;

    /**
     * @var InstanceMarketOptionsRequest 实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费则该参数必传。
     */
    public $InstanceMarketOptions;

    /**
     * @var array 实例机型列表，不同实例机型指定了不同的资源规格，最多支持10种实例机型。
`InstanceType`和`InstanceTypes`参数互斥，二者必填一个且只能填写一个。具体取值可通过调用接口[DescribeInstanceTypeConfigs](https://cloud.tencent.com/document/api/213/15749)来获得最新的规格表或参见[实例规格描述](https://cloud.tencent.com/document/product/213/11518)。
     */
    public $InstanceTypes;

    /**
     * @var string CAM角色名称。可通过[DescribeRoleList](https://cloud.tencent.com/document/product/598/36223)接口返回值中的roleName获取。
     */
    public $CamRoleName;

    /**
     * @var string 实例类型校验策略，取值包括 ALL 和 ANY，默认取值为ANY。该参数仅在 InstanceTypes 入参包含多个机型时生效。
<li> ALL，所有实例类型（InstanceType）都可用则通过校验，否则校验报错。</li>
<li> ANY，存在任何一个实例类型（InstanceType）可用则通过校验，否则校验报错。</li>

实例类型不可用的常见原因包括该实例类型售罄、对应云盘售罄等。
如果 InstanceTypes 中一款机型不存在或者已下线，则无论 InstanceTypesCheckPolicy 采用何种取值，都会校验报错。
     */
    public $InstanceTypesCheckPolicy;

    /**
     * @var array 标签列表。通过指定该参数，可以为扩容的实例绑定标签。最多支持指定10个标签。
     */
    public $InstanceTags;

    /**
     * @var array 标签描述列表。通过指定该参数可以支持绑定标签到启动配置。每个启动配置最多支持30个标签。
     */
    public $Tags;

    /**
     * @var HostNameSettings 云服务器主机名（HostName）的相关设置。
     */
    public $HostNameSettings;

    /**
     * @var InstanceNameSettings 云服务器实例名（InstanceName）的相关设置。
如果用户在启动配置中设置此字段，则伸缩组创建出的实例 InstanceName 参照此字段进行设置，并传递给 CVM；如果用户未在启动配置中设置此字段，则伸缩组创建出的实例 InstanceName 按照“as-{{ 伸缩组AutoScalingGroupName }}”进行设置，并传递给 CVM。
     */
    public $InstanceNameSettings;

    /**
     * @var InstanceChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
     */
    public $InstanceChargePrepaid;

    /**
     * @var string 云盘类型选择策略，默认取值 ORIGINAL，取值范围：
<li>ORIGINAL：使用设置的云盘类型</li>
<li>AUTOMATIC：自动选择当前可用的云盘类型</li>
     */
    public $DiskTypePolicy;

    /**
     * @var string 高性能计算集群ID。可通过调用[DescribeHpcClusters](https://cloud.tencent.com/document/product/213/83220)接口获取该参数。
注意：此字段默认为空。
     */
    public $HpcClusterId;

    /**
     * @var IPv6InternetAccessible IPv6公网带宽相关信息设置。若新建实例包含IPv6地址，该参数可为新建实例的IPv6地址分配公网带宽。关联启动配置的伸缩组Ipv6AddressCount参数为0时，该参数不会生效。
     */
    public $IPv6InternetAccessible;

    /**
     * @var array 置放群组id，仅支持指定一个。
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var string 镜像族名称。镜像Id与镜像族名称，二者必填一个且只能填写一个。可通过调用[DescribeImages](https://cloud.tencent.com/document/product/213/15715)接口获取该参数。
     */
    public $ImageFamily;

    /**
     * @var string 本地专用集群ID。可通过 [DescribeDedicatedClusters](https://cloud.tencent.com/document/product/1346/73758) 接口获取该参数。
     */
    public $DedicatedClusterId;

    /**
     * @var Metadata 自定义metadata。
     */
    public $Metadata;

    /**
     * @param string $LaunchConfigurationName 启动配置显示名称。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超60个字节。
     * @param string $ImageId 指定有效的[镜像](https://cloud.tencent.com/document/product/213/4940)ID，格式形如`img-8toqc6s3`。镜像Id与镜像族名称，二者必填一个且只能填写一个。镜像类型分为四种：<br/><li>公共镜像</li><li>自定义镜像</li><li>共享镜像</li><li>服务市场镜像</li><br/>可通过以下方式获取可用的镜像ID：<br/><li>`公共镜像`、`自定义镜像`、`共享镜像`的镜像ID可通过登录[控制台](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE)查询；`服务镜像市场`的镜像ID可通过[云市场](https://market.cloud.tencent.com/list)查询。</li><li>通过调用接口 [DescribeImages](https://cloud.tencent.com/document/api/213/15715) ，取返回信息中的`ImageId`字段。</li>
     * @param integer $ProjectId 启动配置所属项目ID。默认值为0，表示使用默认项目。该参数可以通过调用 [DescribeProject](https://cloud.tencent.com/document/api/651/78725) 的返回值中的 projectId 字段来获取。
注意：伸缩组内实例所属项目ID取伸缩组项目ID，与这里取值无关。
     * @param string $InstanceType 实例机型。不同实例机型指定了不同的资源规格，具体取值可通过调用接口 [DescribeInstanceTypeConfigs](https://cloud.tencent.com/document/api/213/15749) 来获得最新的规格表或参见[实例类型](https://cloud.tencent.com/document/product/213/11518)描述。
`InstanceType`和`InstanceTypes`参数互斥，二者必填一个且只能填写一个。
     * @param SystemDisk $SystemDisk 实例系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。
     * @param array $DataDisks 实例数据盘配置信息。若不指定该参数，则默认不购买数据盘，最多支持指定11块数据盘。
     * @param InternetAccessible $InternetAccessible 公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。
     * @param LoginSettings $LoginSettings 实例登录设置。通过该参数可以设置实例的登录方式密码、密钥或保持镜像的原始登录设置。默认情况下会随机生成密码，并以站内信方式知会到用户。
     * @param array $SecurityGroupIds 实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的`SecurityGroupId`字段来获取。若不指定该参数，则默认不绑定安全组。
     * @param EnhancedService $EnhancedService 增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认开启云监控、云安全服务。
     * @param string $UserData 经过 Base64 编码后的自定义数据，最大长度不超过16KB。
     * @param string $InstanceChargeType 实例计费类型，CVM默认值按照POSTPAID_BY_HOUR处理。
<li>POSTPAID_BY_HOUR：按小时后付费</li>
<li>SPOTPAID：竞价付费</li>
<li>PREPAID：预付费，即包年包月</li>
<li>CDCPAID：专用集群付费</li>
     * @param InstanceMarketOptionsRequest $InstanceMarketOptions 实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费则该参数必传。
     * @param array $InstanceTypes 实例机型列表，不同实例机型指定了不同的资源规格，最多支持10种实例机型。
`InstanceType`和`InstanceTypes`参数互斥，二者必填一个且只能填写一个。具体取值可通过调用接口[DescribeInstanceTypeConfigs](https://cloud.tencent.com/document/api/213/15749)来获得最新的规格表或参见[实例规格描述](https://cloud.tencent.com/document/product/213/11518)。
     * @param string $CamRoleName CAM角色名称。可通过[DescribeRoleList](https://cloud.tencent.com/document/product/598/36223)接口返回值中的roleName获取。
     * @param string $InstanceTypesCheckPolicy 实例类型校验策略，取值包括 ALL 和 ANY，默认取值为ANY。该参数仅在 InstanceTypes 入参包含多个机型时生效。
<li> ALL，所有实例类型（InstanceType）都可用则通过校验，否则校验报错。</li>
<li> ANY，存在任何一个实例类型（InstanceType）可用则通过校验，否则校验报错。</li>

实例类型不可用的常见原因包括该实例类型售罄、对应云盘售罄等。
如果 InstanceTypes 中一款机型不存在或者已下线，则无论 InstanceTypesCheckPolicy 采用何种取值，都会校验报错。
     * @param array $InstanceTags 标签列表。通过指定该参数，可以为扩容的实例绑定标签。最多支持指定10个标签。
     * @param array $Tags 标签描述列表。通过指定该参数可以支持绑定标签到启动配置。每个启动配置最多支持30个标签。
     * @param HostNameSettings $HostNameSettings 云服务器主机名（HostName）的相关设置。
     * @param InstanceNameSettings $InstanceNameSettings 云服务器实例名（InstanceName）的相关设置。
如果用户在启动配置中设置此字段，则伸缩组创建出的实例 InstanceName 参照此字段进行设置，并传递给 CVM；如果用户未在启动配置中设置此字段，则伸缩组创建出的实例 InstanceName 按照“as-{{ 伸缩组AutoScalingGroupName }}”进行设置，并传递给 CVM。
     * @param InstanceChargePrepaid $InstanceChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
     * @param string $DiskTypePolicy 云盘类型选择策略，默认取值 ORIGINAL，取值范围：
<li>ORIGINAL：使用设置的云盘类型</li>
<li>AUTOMATIC：自动选择当前可用的云盘类型</li>
     * @param string $HpcClusterId 高性能计算集群ID。可通过调用[DescribeHpcClusters](https://cloud.tencent.com/document/product/213/83220)接口获取该参数。
注意：此字段默认为空。
     * @param IPv6InternetAccessible $IPv6InternetAccessible IPv6公网带宽相关信息设置。若新建实例包含IPv6地址，该参数可为新建实例的IPv6地址分配公网带宽。关联启动配置的伸缩组Ipv6AddressCount参数为0时，该参数不会生效。
     * @param array $DisasterRecoverGroupIds 置放群组id，仅支持指定一个。
     * @param string $ImageFamily 镜像族名称。镜像Id与镜像族名称，二者必填一个且只能填写一个。可通过调用[DescribeImages](https://cloud.tencent.com/document/product/213/15715)接口获取该参数。
     * @param string $DedicatedClusterId 本地专用集群ID。可通过 [DescribeDedicatedClusters](https://cloud.tencent.com/document/product/1346/73758) 接口获取该参数。
     * @param Metadata $Metadata 自定义metadata。
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
        if (array_key_exists("LaunchConfigurationName",$param) and $param["LaunchConfigurationName"] !== null) {
            $this->LaunchConfigurationName = $param["LaunchConfigurationName"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("EnhancedService",$param) and $param["EnhancedService"] !== null) {
            $this->EnhancedService = new EnhancedService();
            $this->EnhancedService->deserialize($param["EnhancedService"]);
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceMarketOptions",$param) and $param["InstanceMarketOptions"] !== null) {
            $this->InstanceMarketOptions = new InstanceMarketOptionsRequest();
            $this->InstanceMarketOptions->deserialize($param["InstanceMarketOptions"]);
        }

        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = $param["InstanceTypes"];
        }

        if (array_key_exists("CamRoleName",$param) and $param["CamRoleName"] !== null) {
            $this->CamRoleName = $param["CamRoleName"];
        }

        if (array_key_exists("InstanceTypesCheckPolicy",$param) and $param["InstanceTypesCheckPolicy"] !== null) {
            $this->InstanceTypesCheckPolicy = $param["InstanceTypesCheckPolicy"];
        }

        if (array_key_exists("InstanceTags",$param) and $param["InstanceTags"] !== null) {
            $this->InstanceTags = [];
            foreach ($param["InstanceTags"] as $key => $value){
                $obj = new InstanceTag();
                $obj->deserialize($value);
                array_push($this->InstanceTags, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("HostNameSettings",$param) and $param["HostNameSettings"] !== null) {
            $this->HostNameSettings = new HostNameSettings();
            $this->HostNameSettings->deserialize($param["HostNameSettings"]);
        }

        if (array_key_exists("InstanceNameSettings",$param) and $param["InstanceNameSettings"] !== null) {
            $this->InstanceNameSettings = new InstanceNameSettings();
            $this->InstanceNameSettings->deserialize($param["InstanceNameSettings"]);
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("DiskTypePolicy",$param) and $param["DiskTypePolicy"] !== null) {
            $this->DiskTypePolicy = $param["DiskTypePolicy"];
        }

        if (array_key_exists("HpcClusterId",$param) and $param["HpcClusterId"] !== null) {
            $this->HpcClusterId = $param["HpcClusterId"];
        }

        if (array_key_exists("IPv6InternetAccessible",$param) and $param["IPv6InternetAccessible"] !== null) {
            $this->IPv6InternetAccessible = new IPv6InternetAccessible();
            $this->IPv6InternetAccessible->deserialize($param["IPv6InternetAccessible"]);
        }

        if (array_key_exists("DisasterRecoverGroupIds",$param) and $param["DisasterRecoverGroupIds"] !== null) {
            $this->DisasterRecoverGroupIds = $param["DisasterRecoverGroupIds"];
        }

        if (array_key_exists("ImageFamily",$param) and $param["ImageFamily"] !== null) {
            $this->ImageFamily = $param["ImageFamily"];
        }

        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = new Metadata();
            $this->Metadata->deserialize($param["Metadata"]);
        }
    }
}
