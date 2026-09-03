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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLaunchConfigurationAttributes请求参数结构体
 *
 * @method string getLaunchConfigurationId() 获取<p>启动配置ID。可通过登录 <a href="https://console.cloud.tencent.com/autoscaling/config">控制台</a> 或调用接口 <a href="https://cloud.tencent.com/document/api/377/20445">DescribeLaunchConfigurations</a> ，取返回信息中的 LaunchConfigurationId 获取启动配置ID。</p>
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) 设置<p>启动配置ID。可通过登录 <a href="https://console.cloud.tencent.com/autoscaling/config">控制台</a> 或调用接口 <a href="https://cloud.tencent.com/document/api/377/20445">DescribeLaunchConfigurations</a> ，取返回信息中的 LaunchConfigurationId 获取启动配置ID。</p>
 * @method string getImageId() 获取<p>指定有效的<a href="https://cloud.tencent.com/document/product/213/4940">镜像</a>ID，格式形如<code>img-8toqc6s3</code>。镜像类型分为四种：<br><li>公共镜像</li><li>自定义镜像</li><li>共享镜像</li><li>服务市场镜像</li><br>可通过以下方式获取可用的镜像ID：<br><li><code>公共镜像</code>、<code>自定义镜像</code>、<code>共享镜像</code>的镜像ID可通过登录<a href="https://console.cloud.tencent.com/cvm/image?rid=1&amp;imageType=PUBLIC_IMAGE">控制台</a>查询；<code>服务镜像市场</code>的镜像ID可通过<a href="https://market.cloud.tencent.com/list">云市场</a>查询。</li><li>通过调用接口 <a href="https://cloud.tencent.com/document/api/213/15715">DescribeImages</a> ，取返回信息中的<code>ImageId</code>字段。</li></p>
 * @method void setImageId(string $ImageId) 设置<p>指定有效的<a href="https://cloud.tencent.com/document/product/213/4940">镜像</a>ID，格式形如<code>img-8toqc6s3</code>。镜像类型分为四种：<br><li>公共镜像</li><li>自定义镜像</li><li>共享镜像</li><li>服务市场镜像</li><br>可通过以下方式获取可用的镜像ID：<br><li><code>公共镜像</code>、<code>自定义镜像</code>、<code>共享镜像</code>的镜像ID可通过登录<a href="https://console.cloud.tencent.com/cvm/image?rid=1&amp;imageType=PUBLIC_IMAGE">控制台</a>查询；<code>服务镜像市场</code>的镜像ID可通过<a href="https://market.cloud.tencent.com/list">云市场</a>查询。</li><li>通过调用接口 <a href="https://cloud.tencent.com/document/api/213/15715">DescribeImages</a> ，取返回信息中的<code>ImageId</code>字段。</li></p>
 * @method array getInstanceTypes() 获取<p>实例类型列表，不同实例机型指定了不同的资源规格，最多支持10种实例机型。<br>InstanceType 指定单一实例类型，通过设置 InstanceTypes可以指定多实例类型，并使原有的InstanceType失效。具体取值可通过调用接口<a href="https://cloud.tencent.com/document/api/213/15749">DescribeInstanceTypeConfigs</a>来获得最新的规格表或参见<a href="https://cloud.tencent.com/document/product/213/11518">实例规格描述</a>。</p>
 * @method void setInstanceTypes(array $InstanceTypes) 设置<p>实例类型列表，不同实例机型指定了不同的资源规格，最多支持10种实例机型。<br>InstanceType 指定单一实例类型，通过设置 InstanceTypes可以指定多实例类型，并使原有的InstanceType失效。具体取值可通过调用接口<a href="https://cloud.tencent.com/document/api/213/15749">DescribeInstanceTypeConfigs</a>来获得最新的规格表或参见<a href="https://cloud.tencent.com/document/product/213/11518">实例规格描述</a>。</p>
 * @method string getInstanceTypesCheckPolicy() 获取<p>实例类型校验策略，在实际修改 InstanceTypes 时发挥作用，取值包括 ALL 和 ANY，默认取值为ANY。</p><li> ALL，所有实例类型（InstanceType）都可用则通过校验，否则校验报错。</li> <li> ANY，存在任何一个实例类型（InstanceType）可用则通过校验，否则校验报错。</li> 实例类型不可用的常见原因包括该实例类型售罄、对应云盘售罄等。如果 InstanceTypes 中一款机型不存在或者已下线，则无论 InstanceTypesCheckPolicy 采用何种取值，都会校验报错。
 * @method void setInstanceTypesCheckPolicy(string $InstanceTypesCheckPolicy) 设置<p>实例类型校验策略，在实际修改 InstanceTypes 时发挥作用，取值包括 ALL 和 ANY，默认取值为ANY。</p><li> ALL，所有实例类型（InstanceType）都可用则通过校验，否则校验报错。</li> <li> ANY，存在任何一个实例类型（InstanceType）可用则通过校验，否则校验报错。</li> 实例类型不可用的常见原因包括该实例类型售罄、对应云盘售罄等。如果 InstanceTypes 中一款机型不存在或者已下线，则无论 InstanceTypesCheckPolicy 采用何种取值，都会校验报错。
 * @method string getLaunchConfigurationName() 获取<p>启动配置显示名称。名称仅支持中文、英文、数字、下划线、分隔符&quot;-&quot;、小数点，最大长度不能超60个字节。</p>
 * @method void setLaunchConfigurationName(string $LaunchConfigurationName) 设置<p>启动配置显示名称。名称仅支持中文、英文、数字、下划线、分隔符&quot;-&quot;、小数点，最大长度不能超60个字节。</p>
 * @method string getUserData() 获取<p>经过 Base64 编码后的自定义数据，最大长度不超过16KB。如果要清空UserData，则指定其为空字符串。</p>
 * @method void setUserData(string $UserData) 设置<p>经过 Base64 编码后的自定义数据，最大长度不超过16KB。如果要清空UserData，则指定其为空字符串。</p>
 * @method array getSecurityGroupIds() 获取<p>实例所属安全组。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的<code>SecurityGroupId</code>字段来获取。<br>若指定该参数，请至少提供一个安全组，列表顺序有先后。</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>实例所属安全组。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的<code>SecurityGroupId</code>字段来获取。<br>若指定该参数，请至少提供一个安全组，列表顺序有先后。</p>
 * @method InternetAccessible getInternetAccessible() 获取<p>公网带宽相关信息设置。<br>当公网出带宽上限为0Mbps时，不支持修改为开通分配公网IP；相应的，当前为开通分配公网IP时，修改的公网出带宽上限值必须大于0Mbps。</p>
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置<p>公网带宽相关信息设置。<br>当公网出带宽上限为0Mbps时，不支持修改为开通分配公网IP；相应的，当前为开通分配公网IP时，修改的公网出带宽上限值必须大于0Mbps。</p>
 * @method string getInstanceChargeType() 获取<p>实例计费类型。具体取值范围如下：</p><li>POSTPAID_BY_HOUR：按小时后付费</li><li>SPOTPAID：竞价付费</li><li>PREPAID：预付费，即包年包月</li><li>CDCPAID：专用集群付费</li>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>实例计费类型。具体取值范围如下：</p><li>POSTPAID_BY_HOUR：按小时后付费</li><li>SPOTPAID：竞价付费</li><li>PREPAID：预付费，即包年包月</li><li>CDCPAID：专用集群付费</li>
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取<p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。<br>若修改实例的付费模式为预付费，则该参数必传；从预付费修改为其他付费模式时，本字段原信息会自动丢弃。<br>当新增该字段时，必须传递购买实例的时长，其它未传递字段会设置为默认值。<br>当修改本字段时，当前付费模式必须为预付费。</p>
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置<p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。<br>若修改实例的付费模式为预付费，则该参数必传；从预付费修改为其他付费模式时，本字段原信息会自动丢弃。<br>当新增该字段时，必须传递购买实例的时长，其它未传递字段会设置为默认值。<br>当修改本字段时，当前付费模式必须为预付费。</p>
 * @method InstanceMarketOptionsRequest getInstanceMarketOptions() 获取<p>实例的市场相关选项，如竞价实例相关参数。<br>若修改实例的付费模式为竞价付费，则该参数必传；从竞价付费修改为其他付费模式时，本字段原信息会自动丢弃。<br>当新增该字段时，必须传递竞价相关选项下的竞价出价，其它未传递字段会设置为默认值。<br>当修改本字段时，当前付费模式必须为竞价付费。</p>
 * @method void setInstanceMarketOptions(InstanceMarketOptionsRequest $InstanceMarketOptions) 设置<p>实例的市场相关选项，如竞价实例相关参数。<br>若修改实例的付费模式为竞价付费，则该参数必传；从竞价付费修改为其他付费模式时，本字段原信息会自动丢弃。<br>当新增该字段时，必须传递竞价相关选项下的竞价出价，其它未传递字段会设置为默认值。<br>当修改本字段时，当前付费模式必须为竞价付费。</p>
 * @method string getDiskTypePolicy() 获取<p>云盘类型选择策略，取值范围：</p><li>ORIGINAL：使用设置的云盘类型。</li><li>AUTOMATIC：自动选择当前可用的云盘类型。</li>
 * @method void setDiskTypePolicy(string $DiskTypePolicy) 设置<p>云盘类型选择策略，取值范围：</p><li>ORIGINAL：使用设置的云盘类型。</li><li>AUTOMATIC：自动选择当前可用的云盘类型。</li>
 * @method SystemDisk getSystemDisk() 获取<p>实例系统盘配置信息。</p>
 * @method void setSystemDisk(SystemDisk $SystemDisk) 设置<p>实例系统盘配置信息。</p>
 * @method array getDataDisks() 获取<p>实例数据盘配置信息。<br>最多支持指定11块数据盘。采取整体修改，因此请提供修改后的全部值。<br>数据盘类型默认与系统盘类型保持一致。</p>
 * @method void setDataDisks(array $DataDisks) 设置<p>实例数据盘配置信息。<br>最多支持指定11块数据盘。采取整体修改，因此请提供修改后的全部值。<br>数据盘类型默认与系统盘类型保持一致。</p>
 * @method HostNameSettings getHostNameSettings() 获取<p>云服务器主机名（HostName）的相关设置。<br>不支持windows实例设置主机名。<br>新增该属性时，必须传递云服务器的主机名，其它未传递字段会设置为默认值。<br>会校验主机名(如果存在后缀则加上后缀)是否超过最大位数46。</p>
 * @method void setHostNameSettings(HostNameSettings $HostNameSettings) 设置<p>云服务器主机名（HostName）的相关设置。<br>不支持windows实例设置主机名。<br>新增该属性时，必须传递云服务器的主机名，其它未传递字段会设置为默认值。<br>会校验主机名(如果存在后缀则加上后缀)是否超过最大位数46。</p>
 * @method InstanceNameSettings getInstanceNameSettings() 获取<p>云服务器（InstanceName）实例名的相关设置。<br>如果用户在启动配置中设置此字段，则伸缩组创建出的实例 InstanceName 参照此字段进行设置，并传递给 CVM；如果用户未在启动配置中设置此字段，则伸缩组创建出的实例 InstanceName 按照“as-{{ 伸缩组AutoScalingGroupName }}”进行设置，并传递给 CVM。<br>新增该属性时，必须传递云服务器的实例名称，其它未传递字段会设置为默认值。<br>会校验实例名(如果存在后缀则加上后缀)是否超过最大位数108。</p>
 * @method void setInstanceNameSettings(InstanceNameSettings $InstanceNameSettings) 设置<p>云服务器（InstanceName）实例名的相关设置。<br>如果用户在启动配置中设置此字段，则伸缩组创建出的实例 InstanceName 参照此字段进行设置，并传递给 CVM；如果用户未在启动配置中设置此字段，则伸缩组创建出的实例 InstanceName 按照“as-{{ 伸缩组AutoScalingGroupName }}”进行设置，并传递给 CVM。<br>新增该属性时，必须传递云服务器的实例名称，其它未传递字段会设置为默认值。<br>会校验实例名(如果存在后缀则加上后缀)是否超过最大位数108。</p>
 * @method EnhancedService getEnhancedService() 获取<p>增强服务。通过该参数可以指定是否开启云安全、云监控等服务。</p>
 * @method void setEnhancedService(EnhancedService $EnhancedService) 设置<p>增强服务。通过该参数可以指定是否开启云安全、云监控等服务。</p>
 * @method string getCamRoleName() 获取<p>CAM角色名称。可通过<a href="https://cloud.tencent.com/document/product/598/36223">DescribeRoleList</a>接口返回值中的roleName获取。</p>
 * @method void setCamRoleName(string $CamRoleName) 设置<p>CAM角色名称。可通过<a href="https://cloud.tencent.com/document/product/598/36223">DescribeRoleList</a>接口返回值中的roleName获取。</p>
 * @method string getHpcClusterId() 获取<p>高性能计算集群ID。可通过调用<a href="https://cloud.tencent.com/document/product/213/83220">DescribeHpcClusters</a>接口获取该参数。<br>注意：此字段默认为空。</p>
 * @method void setHpcClusterId(string $HpcClusterId) 设置<p>高性能计算集群ID。可通过调用<a href="https://cloud.tencent.com/document/product/213/83220">DescribeHpcClusters</a>接口获取该参数。<br>注意：此字段默认为空。</p>
 * @method IPv6InternetAccessible getIPv6InternetAccessible() 获取<p>IPv6公网带宽相关信息设置。若新建实例包含IPv6地址，该参数可为新建实例的IPv6地址分配公网带宽。关联启动配置的伸缩组Ipv6AddressCount参数为0时，该参数不会生效。</p>
 * @method void setIPv6InternetAccessible(IPv6InternetAccessible $IPv6InternetAccessible) 设置<p>IPv6公网带宽相关信息设置。若新建实例包含IPv6地址，该参数可为新建实例的IPv6地址分配公网带宽。关联启动配置的伸缩组Ipv6AddressCount参数为0时，该参数不会生效。</p>
 * @method array getDisasterRecoverGroupIds() 获取<p>置放群组id，仅支持指定一个。可通过调用<a href="https://cloud.tencent.com/document/product/213/17810">DescribeDisasterRecoverGroups</a>接口获取该参数。</p>
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) 设置<p>置放群组id，仅支持指定一个。可通过调用<a href="https://cloud.tencent.com/document/product/213/17810">DescribeDisasterRecoverGroups</a>接口获取该参数。</p>
 * @method LoginSettings getLoginSettings() 获取<p>实例登录设置，包括密码、密钥或保持镜像的原始登录设置。<br>请注意，指定新的登录设置会覆盖原有登录设置。例如，如果您之前使用密码登录，使用该参数将登录设置修改为密钥，则原有密码被清除。</p>
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置<p>实例登录设置，包括密码、密钥或保持镜像的原始登录设置。<br>请注意，指定新的登录设置会覆盖原有登录设置。例如，如果您之前使用密码登录，使用该参数将登录设置修改为密钥，则原有密码被清除。</p>
 * @method array getInstanceTags() 获取<p>实例标签列表。通过指定该参数，可以为扩容的实例绑定标签。最多支持指定10个标签。<br>该参数会覆盖原有的实例标签列表，如需新增标签，需将新标签和原有标签一并传入。</p>
 * @method void setInstanceTags(array $InstanceTags) 设置<p>实例标签列表。通过指定该参数，可以为扩容的实例绑定标签。最多支持指定10个标签。<br>该参数会覆盖原有的实例标签列表，如需新增标签，需将新标签和原有标签一并传入。</p>
 * @method string getImageFamily() 获取<p>镜像族名称。可通过调用<a href="https://cloud.tencent.com/document/product/213/15715">DescribeImages</a>接口获取该参数。</p>
 * @method void setImageFamily(string $ImageFamily) 设置<p>镜像族名称。可通过调用<a href="https://cloud.tencent.com/document/product/213/15715">DescribeImages</a>接口获取该参数。</p>
 * @method string getDedicatedClusterId() 获取<p>本地专用集群ID。</p>
 * @method void setDedicatedClusterId(string $DedicatedClusterId) 设置<p>本地专用集群ID。</p>
 * @method Metadata getMetadata() 获取<p>自定义metadata。</p>
 * @method void setMetadata(Metadata $Metadata) 设置<p>自定义metadata。</p>
 * @method array getNetworkInterfaces() 获取<p>替换启动配置中的弹性网卡配置。</p><p>入参限制：最多 17 项；必须显式包含且只能包含一个 PRIMARY，AS 不自动补齐主网卡；显式空数组非法。</p><p>字段规则与 CreateLaunchConfiguration 一致。清除请调用 ClearLaunchConfigurationAttributes 并传 ClearNetworkInterfaces=true。</p>
 * @method void setNetworkInterfaces(array $NetworkInterfaces) 设置<p>替换启动配置中的弹性网卡配置。</p><p>入参限制：最多 17 项；必须显式包含且只能包含一个 PRIMARY，AS 不自动补齐主网卡；显式空数组非法。</p><p>字段规则与 CreateLaunchConfiguration 一致。清除请调用 ClearLaunchConfigurationAttributes 并传 ClearNetworkInterfaces=true。</p>
 */
class ModifyLaunchConfigurationAttributesRequest extends AbstractModel
{
    /**
     * @var string <p>启动配置ID。可通过登录 <a href="https://console.cloud.tencent.com/autoscaling/config">控制台</a> 或调用接口 <a href="https://cloud.tencent.com/document/api/377/20445">DescribeLaunchConfigurations</a> ，取返回信息中的 LaunchConfigurationId 获取启动配置ID。</p>
     */
    public $LaunchConfigurationId;

    /**
     * @var string <p>指定有效的<a href="https://cloud.tencent.com/document/product/213/4940">镜像</a>ID，格式形如<code>img-8toqc6s3</code>。镜像类型分为四种：<br><li>公共镜像</li><li>自定义镜像</li><li>共享镜像</li><li>服务市场镜像</li><br>可通过以下方式获取可用的镜像ID：<br><li><code>公共镜像</code>、<code>自定义镜像</code>、<code>共享镜像</code>的镜像ID可通过登录<a href="https://console.cloud.tencent.com/cvm/image?rid=1&amp;imageType=PUBLIC_IMAGE">控制台</a>查询；<code>服务镜像市场</code>的镜像ID可通过<a href="https://market.cloud.tencent.com/list">云市场</a>查询。</li><li>通过调用接口 <a href="https://cloud.tencent.com/document/api/213/15715">DescribeImages</a> ，取返回信息中的<code>ImageId</code>字段。</li></p>
     */
    public $ImageId;

    /**
     * @var array <p>实例类型列表，不同实例机型指定了不同的资源规格，最多支持10种实例机型。<br>InstanceType 指定单一实例类型，通过设置 InstanceTypes可以指定多实例类型，并使原有的InstanceType失效。具体取值可通过调用接口<a href="https://cloud.tencent.com/document/api/213/15749">DescribeInstanceTypeConfigs</a>来获得最新的规格表或参见<a href="https://cloud.tencent.com/document/product/213/11518">实例规格描述</a>。</p>
     */
    public $InstanceTypes;

    /**
     * @var string <p>实例类型校验策略，在实际修改 InstanceTypes 时发挥作用，取值包括 ALL 和 ANY，默认取值为ANY。</p><li> ALL，所有实例类型（InstanceType）都可用则通过校验，否则校验报错。</li> <li> ANY，存在任何一个实例类型（InstanceType）可用则通过校验，否则校验报错。</li> 实例类型不可用的常见原因包括该实例类型售罄、对应云盘售罄等。如果 InstanceTypes 中一款机型不存在或者已下线，则无论 InstanceTypesCheckPolicy 采用何种取值，都会校验报错。
     */
    public $InstanceTypesCheckPolicy;

    /**
     * @var string <p>启动配置显示名称。名称仅支持中文、英文、数字、下划线、分隔符&quot;-&quot;、小数点，最大长度不能超60个字节。</p>
     */
    public $LaunchConfigurationName;

    /**
     * @var string <p>经过 Base64 编码后的自定义数据，最大长度不超过16KB。如果要清空UserData，则指定其为空字符串。</p>
     */
    public $UserData;

    /**
     * @var array <p>实例所属安全组。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的<code>SecurityGroupId</code>字段来获取。<br>若指定该参数，请至少提供一个安全组，列表顺序有先后。</p>
     */
    public $SecurityGroupIds;

    /**
     * @var InternetAccessible <p>公网带宽相关信息设置。<br>当公网出带宽上限为0Mbps时，不支持修改为开通分配公网IP；相应的，当前为开通分配公网IP时，修改的公网出带宽上限值必须大于0Mbps。</p>
     */
    public $InternetAccessible;

    /**
     * @var string <p>实例计费类型。具体取值范围如下：</p><li>POSTPAID_BY_HOUR：按小时后付费</li><li>SPOTPAID：竞价付费</li><li>PREPAID：预付费，即包年包月</li><li>CDCPAID：专用集群付费</li>
     */
    public $InstanceChargeType;

    /**
     * @var InstanceChargePrepaid <p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。<br>若修改实例的付费模式为预付费，则该参数必传；从预付费修改为其他付费模式时，本字段原信息会自动丢弃。<br>当新增该字段时，必须传递购买实例的时长，其它未传递字段会设置为默认值。<br>当修改本字段时，当前付费模式必须为预付费。</p>
     */
    public $InstanceChargePrepaid;

    /**
     * @var InstanceMarketOptionsRequest <p>实例的市场相关选项，如竞价实例相关参数。<br>若修改实例的付费模式为竞价付费，则该参数必传；从竞价付费修改为其他付费模式时，本字段原信息会自动丢弃。<br>当新增该字段时，必须传递竞价相关选项下的竞价出价，其它未传递字段会设置为默认值。<br>当修改本字段时，当前付费模式必须为竞价付费。</p>
     */
    public $InstanceMarketOptions;

    /**
     * @var string <p>云盘类型选择策略，取值范围：</p><li>ORIGINAL：使用设置的云盘类型。</li><li>AUTOMATIC：自动选择当前可用的云盘类型。</li>
     */
    public $DiskTypePolicy;

    /**
     * @var SystemDisk <p>实例系统盘配置信息。</p>
     */
    public $SystemDisk;

    /**
     * @var array <p>实例数据盘配置信息。<br>最多支持指定11块数据盘。采取整体修改，因此请提供修改后的全部值。<br>数据盘类型默认与系统盘类型保持一致。</p>
     */
    public $DataDisks;

    /**
     * @var HostNameSettings <p>云服务器主机名（HostName）的相关设置。<br>不支持windows实例设置主机名。<br>新增该属性时，必须传递云服务器的主机名，其它未传递字段会设置为默认值。<br>会校验主机名(如果存在后缀则加上后缀)是否超过最大位数46。</p>
     */
    public $HostNameSettings;

    /**
     * @var InstanceNameSettings <p>云服务器（InstanceName）实例名的相关设置。<br>如果用户在启动配置中设置此字段，则伸缩组创建出的实例 InstanceName 参照此字段进行设置，并传递给 CVM；如果用户未在启动配置中设置此字段，则伸缩组创建出的实例 InstanceName 按照“as-{{ 伸缩组AutoScalingGroupName }}”进行设置，并传递给 CVM。<br>新增该属性时，必须传递云服务器的实例名称，其它未传递字段会设置为默认值。<br>会校验实例名(如果存在后缀则加上后缀)是否超过最大位数108。</p>
     */
    public $InstanceNameSettings;

    /**
     * @var EnhancedService <p>增强服务。通过该参数可以指定是否开启云安全、云监控等服务。</p>
     */
    public $EnhancedService;

    /**
     * @var string <p>CAM角色名称。可通过<a href="https://cloud.tencent.com/document/product/598/36223">DescribeRoleList</a>接口返回值中的roleName获取。</p>
     */
    public $CamRoleName;

    /**
     * @var string <p>高性能计算集群ID。可通过调用<a href="https://cloud.tencent.com/document/product/213/83220">DescribeHpcClusters</a>接口获取该参数。<br>注意：此字段默认为空。</p>
     */
    public $HpcClusterId;

    /**
     * @var IPv6InternetAccessible <p>IPv6公网带宽相关信息设置。若新建实例包含IPv6地址，该参数可为新建实例的IPv6地址分配公网带宽。关联启动配置的伸缩组Ipv6AddressCount参数为0时，该参数不会生效。</p>
     */
    public $IPv6InternetAccessible;

    /**
     * @var array <p>置放群组id，仅支持指定一个。可通过调用<a href="https://cloud.tencent.com/document/product/213/17810">DescribeDisasterRecoverGroups</a>接口获取该参数。</p>
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var LoginSettings <p>实例登录设置，包括密码、密钥或保持镜像的原始登录设置。<br>请注意，指定新的登录设置会覆盖原有登录设置。例如，如果您之前使用密码登录，使用该参数将登录设置修改为密钥，则原有密码被清除。</p>
     */
    public $LoginSettings;

    /**
     * @var array <p>实例标签列表。通过指定该参数，可以为扩容的实例绑定标签。最多支持指定10个标签。<br>该参数会覆盖原有的实例标签列表，如需新增标签，需将新标签和原有标签一并传入。</p>
     */
    public $InstanceTags;

    /**
     * @var string <p>镜像族名称。可通过调用<a href="https://cloud.tencent.com/document/product/213/15715">DescribeImages</a>接口获取该参数。</p>
     */
    public $ImageFamily;

    /**
     * @var string <p>本地专用集群ID。</p>
     */
    public $DedicatedClusterId;

    /**
     * @var Metadata <p>自定义metadata。</p>
     */
    public $Metadata;

    /**
     * @var array <p>替换启动配置中的弹性网卡配置。</p><p>入参限制：最多 17 项；必须显式包含且只能包含一个 PRIMARY，AS 不自动补齐主网卡；显式空数组非法。</p><p>字段规则与 CreateLaunchConfiguration 一致。清除请调用 ClearLaunchConfigurationAttributes 并传 ClearNetworkInterfaces=true。</p>
     */
    public $NetworkInterfaces;

    /**
     * @param string $LaunchConfigurationId <p>启动配置ID。可通过登录 <a href="https://console.cloud.tencent.com/autoscaling/config">控制台</a> 或调用接口 <a href="https://cloud.tencent.com/document/api/377/20445">DescribeLaunchConfigurations</a> ，取返回信息中的 LaunchConfigurationId 获取启动配置ID。</p>
     * @param string $ImageId <p>指定有效的<a href="https://cloud.tencent.com/document/product/213/4940">镜像</a>ID，格式形如<code>img-8toqc6s3</code>。镜像类型分为四种：<br><li>公共镜像</li><li>自定义镜像</li><li>共享镜像</li><li>服务市场镜像</li><br>可通过以下方式获取可用的镜像ID：<br><li><code>公共镜像</code>、<code>自定义镜像</code>、<code>共享镜像</code>的镜像ID可通过登录<a href="https://console.cloud.tencent.com/cvm/image?rid=1&amp;imageType=PUBLIC_IMAGE">控制台</a>查询；<code>服务镜像市场</code>的镜像ID可通过<a href="https://market.cloud.tencent.com/list">云市场</a>查询。</li><li>通过调用接口 <a href="https://cloud.tencent.com/document/api/213/15715">DescribeImages</a> ，取返回信息中的<code>ImageId</code>字段。</li></p>
     * @param array $InstanceTypes <p>实例类型列表，不同实例机型指定了不同的资源规格，最多支持10种实例机型。<br>InstanceType 指定单一实例类型，通过设置 InstanceTypes可以指定多实例类型，并使原有的InstanceType失效。具体取值可通过调用接口<a href="https://cloud.tencent.com/document/api/213/15749">DescribeInstanceTypeConfigs</a>来获得最新的规格表或参见<a href="https://cloud.tencent.com/document/product/213/11518">实例规格描述</a>。</p>
     * @param string $InstanceTypesCheckPolicy <p>实例类型校验策略，在实际修改 InstanceTypes 时发挥作用，取值包括 ALL 和 ANY，默认取值为ANY。</p><li> ALL，所有实例类型（InstanceType）都可用则通过校验，否则校验报错。</li> <li> ANY，存在任何一个实例类型（InstanceType）可用则通过校验，否则校验报错。</li> 实例类型不可用的常见原因包括该实例类型售罄、对应云盘售罄等。如果 InstanceTypes 中一款机型不存在或者已下线，则无论 InstanceTypesCheckPolicy 采用何种取值，都会校验报错。
     * @param string $LaunchConfigurationName <p>启动配置显示名称。名称仅支持中文、英文、数字、下划线、分隔符&quot;-&quot;、小数点，最大长度不能超60个字节。</p>
     * @param string $UserData <p>经过 Base64 编码后的自定义数据，最大长度不超过16KB。如果要清空UserData，则指定其为空字符串。</p>
     * @param array $SecurityGroupIds <p>实例所属安全组。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的<code>SecurityGroupId</code>字段来获取。<br>若指定该参数，请至少提供一个安全组，列表顺序有先后。</p>
     * @param InternetAccessible $InternetAccessible <p>公网带宽相关信息设置。<br>当公网出带宽上限为0Mbps时，不支持修改为开通分配公网IP；相应的，当前为开通分配公网IP时，修改的公网出带宽上限值必须大于0Mbps。</p>
     * @param string $InstanceChargeType <p>实例计费类型。具体取值范围如下：</p><li>POSTPAID_BY_HOUR：按小时后付费</li><li>SPOTPAID：竞价付费</li><li>PREPAID：预付费，即包年包月</li><li>CDCPAID：专用集群付费</li>
     * @param InstanceChargePrepaid $InstanceChargePrepaid <p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。<br>若修改实例的付费模式为预付费，则该参数必传；从预付费修改为其他付费模式时，本字段原信息会自动丢弃。<br>当新增该字段时，必须传递购买实例的时长，其它未传递字段会设置为默认值。<br>当修改本字段时，当前付费模式必须为预付费。</p>
     * @param InstanceMarketOptionsRequest $InstanceMarketOptions <p>实例的市场相关选项，如竞价实例相关参数。<br>若修改实例的付费模式为竞价付费，则该参数必传；从竞价付费修改为其他付费模式时，本字段原信息会自动丢弃。<br>当新增该字段时，必须传递竞价相关选项下的竞价出价，其它未传递字段会设置为默认值。<br>当修改本字段时，当前付费模式必须为竞价付费。</p>
     * @param string $DiskTypePolicy <p>云盘类型选择策略，取值范围：</p><li>ORIGINAL：使用设置的云盘类型。</li><li>AUTOMATIC：自动选择当前可用的云盘类型。</li>
     * @param SystemDisk $SystemDisk <p>实例系统盘配置信息。</p>
     * @param array $DataDisks <p>实例数据盘配置信息。<br>最多支持指定11块数据盘。采取整体修改，因此请提供修改后的全部值。<br>数据盘类型默认与系统盘类型保持一致。</p>
     * @param HostNameSettings $HostNameSettings <p>云服务器主机名（HostName）的相关设置。<br>不支持windows实例设置主机名。<br>新增该属性时，必须传递云服务器的主机名，其它未传递字段会设置为默认值。<br>会校验主机名(如果存在后缀则加上后缀)是否超过最大位数46。</p>
     * @param InstanceNameSettings $InstanceNameSettings <p>云服务器（InstanceName）实例名的相关设置。<br>如果用户在启动配置中设置此字段，则伸缩组创建出的实例 InstanceName 参照此字段进行设置，并传递给 CVM；如果用户未在启动配置中设置此字段，则伸缩组创建出的实例 InstanceName 按照“as-{{ 伸缩组AutoScalingGroupName }}”进行设置，并传递给 CVM。<br>新增该属性时，必须传递云服务器的实例名称，其它未传递字段会设置为默认值。<br>会校验实例名(如果存在后缀则加上后缀)是否超过最大位数108。</p>
     * @param EnhancedService $EnhancedService <p>增强服务。通过该参数可以指定是否开启云安全、云监控等服务。</p>
     * @param string $CamRoleName <p>CAM角色名称。可通过<a href="https://cloud.tencent.com/document/product/598/36223">DescribeRoleList</a>接口返回值中的roleName获取。</p>
     * @param string $HpcClusterId <p>高性能计算集群ID。可通过调用<a href="https://cloud.tencent.com/document/product/213/83220">DescribeHpcClusters</a>接口获取该参数。<br>注意：此字段默认为空。</p>
     * @param IPv6InternetAccessible $IPv6InternetAccessible <p>IPv6公网带宽相关信息设置。若新建实例包含IPv6地址，该参数可为新建实例的IPv6地址分配公网带宽。关联启动配置的伸缩组Ipv6AddressCount参数为0时，该参数不会生效。</p>
     * @param array $DisasterRecoverGroupIds <p>置放群组id，仅支持指定一个。可通过调用<a href="https://cloud.tencent.com/document/product/213/17810">DescribeDisasterRecoverGroups</a>接口获取该参数。</p>
     * @param LoginSettings $LoginSettings <p>实例登录设置，包括密码、密钥或保持镜像的原始登录设置。<br>请注意，指定新的登录设置会覆盖原有登录设置。例如，如果您之前使用密码登录，使用该参数将登录设置修改为密钥，则原有密码被清除。</p>
     * @param array $InstanceTags <p>实例标签列表。通过指定该参数，可以为扩容的实例绑定标签。最多支持指定10个标签。<br>该参数会覆盖原有的实例标签列表，如需新增标签，需将新标签和原有标签一并传入。</p>
     * @param string $ImageFamily <p>镜像族名称。可通过调用<a href="https://cloud.tencent.com/document/product/213/15715">DescribeImages</a>接口获取该参数。</p>
     * @param string $DedicatedClusterId <p>本地专用集群ID。</p>
     * @param Metadata $Metadata <p>自定义metadata。</p>
     * @param array $NetworkInterfaces <p>替换启动配置中的弹性网卡配置。</p><p>入参限制：最多 17 项；必须显式包含且只能包含一个 PRIMARY，AS 不自动补齐主网卡；显式空数组非法。</p><p>字段规则与 CreateLaunchConfiguration 一致。清除请调用 ClearLaunchConfigurationAttributes 并传 ClearNetworkInterfaces=true。</p>
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
        if (array_key_exists("LaunchConfigurationId",$param) and $param["LaunchConfigurationId"] !== null) {
            $this->LaunchConfigurationId = $param["LaunchConfigurationId"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = $param["InstanceTypes"];
        }

        if (array_key_exists("InstanceTypesCheckPolicy",$param) and $param["InstanceTypesCheckPolicy"] !== null) {
            $this->InstanceTypesCheckPolicy = $param["InstanceTypesCheckPolicy"];
        }

        if (array_key_exists("LaunchConfigurationName",$param) and $param["LaunchConfigurationName"] !== null) {
            $this->LaunchConfigurationName = $param["LaunchConfigurationName"];
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("InstanceMarketOptions",$param) and $param["InstanceMarketOptions"] !== null) {
            $this->InstanceMarketOptions = new InstanceMarketOptionsRequest();
            $this->InstanceMarketOptions->deserialize($param["InstanceMarketOptions"]);
        }

        if (array_key_exists("DiskTypePolicy",$param) and $param["DiskTypePolicy"] !== null) {
            $this->DiskTypePolicy = $param["DiskTypePolicy"];
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

        if (array_key_exists("HostNameSettings",$param) and $param["HostNameSettings"] !== null) {
            $this->HostNameSettings = new HostNameSettings();
            $this->HostNameSettings->deserialize($param["HostNameSettings"]);
        }

        if (array_key_exists("InstanceNameSettings",$param) and $param["InstanceNameSettings"] !== null) {
            $this->InstanceNameSettings = new InstanceNameSettings();
            $this->InstanceNameSettings->deserialize($param["InstanceNameSettings"]);
        }

        if (array_key_exists("EnhancedService",$param) and $param["EnhancedService"] !== null) {
            $this->EnhancedService = new EnhancedService();
            $this->EnhancedService->deserialize($param["EnhancedService"]);
        }

        if (array_key_exists("CamRoleName",$param) and $param["CamRoleName"] !== null) {
            $this->CamRoleName = $param["CamRoleName"];
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

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("InstanceTags",$param) and $param["InstanceTags"] !== null) {
            $this->InstanceTags = [];
            foreach ($param["InstanceTags"] as $key => $value){
                $obj = new InstanceTag();
                $obj->deserialize($value);
                array_push($this->InstanceTags, $obj);
            }
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

        if (array_key_exists("NetworkInterfaces",$param) and $param["NetworkInterfaces"] !== null) {
            $this->NetworkInterfaces = [];
            foreach ($param["NetworkInterfaces"] as $key => $value){
                $obj = new NetworkInterface();
                $obj->deserialize($value);
                array_push($this->NetworkInterfaces, $obj);
            }
        }
    }
}
