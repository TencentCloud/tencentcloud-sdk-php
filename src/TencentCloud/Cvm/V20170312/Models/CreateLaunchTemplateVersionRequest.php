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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLaunchTemplateVersion请求参数结构体
 *
 * @method Placement getPlacement() 获取实例所在的位置。通过该参数可以指定实例所属可用区，所属项目，所属宿主机（在专用宿主机上创建子机时指定）等属性。
 * @method void setPlacement(Placement $Placement) 设置实例所在的位置。通过该参数可以指定实例所属可用区，所属项目，所属宿主机（在专用宿主机上创建子机时指定）等属性。
 * @method string getLaunchTemplateId() 获取启动模板ID，新版本将基于该实例启动模板ID创建。可通过 [DescribeLaunchTemplates](https://cloud.tencent.com/document/api/213/66322) 接口返回值中的`LaunchTemplateId`获取。
 * @method void setLaunchTemplateId(string $LaunchTemplateId) 设置启动模板ID，新版本将基于该实例启动模板ID创建。可通过 [DescribeLaunchTemplates](https://cloud.tencent.com/document/api/213/66322) 接口返回值中的`LaunchTemplateId`获取。
 * @method integer getLaunchTemplateVersion() 获取若给定，新实例启动模板将基于给定的版本号创建。若未指定则使用默认版本,可以通过 [DescribeLaunchTemplateVersions](https://cloud.tencent.com/document/api/213/66323)查询默认版本。
 * @method void setLaunchTemplateVersion(integer $LaunchTemplateVersion) 设置若给定，新实例启动模板将基于给定的版本号创建。若未指定则使用默认版本,可以通过 [DescribeLaunchTemplateVersions](https://cloud.tencent.com/document/api/213/66323)查询默认版本。
 * @method string getLaunchTemplateVersionDescription() 获取实例启动模板版本描述。长度为2~256个英文或中文字符，不指定该参数时默认为空字符。
 * @method void setLaunchTemplateVersionDescription(string $LaunchTemplateVersionDescription) 设置实例启动模板版本描述。长度为2~256个英文或中文字符，不指定该参数时默认为空字符。
 * @method string getInstanceType() 获取实例机型。不同实例机型指定了不同的资源规格。
<br><li>对于付费模式为PREPAID或POSTPAID\_BY\_HOUR的实例创建，具体取值可通过调用接口[DescribeInstanceTypeConfigs](https://cloud.tencent.com/document/api/213/15749)来获得最新的规格表或参见[实例规格](https://cloud.tencent.com/document/product/213/11518)描述。若不指定该参数，则系统将根据当前地域的资源售卖情况动态指定默认机型。</li><br><li>对于付费模式为CDHPAID的实例创建，该参数以"CDH_"为前缀，根据CPU和内存配置生成，具体形式为：CDH_XCXG，例如对于创建CPU为1核，内存为1G大小的专用宿主机的实例，该参数应该为CDH_1C1G。</li>
 * @method void setInstanceType(string $InstanceType) 设置实例机型。不同实例机型指定了不同的资源规格。
<br><li>对于付费模式为PREPAID或POSTPAID\_BY\_HOUR的实例创建，具体取值可通过调用接口[DescribeInstanceTypeConfigs](https://cloud.tencent.com/document/api/213/15749)来获得最新的规格表或参见[实例规格](https://cloud.tencent.com/document/product/213/11518)描述。若不指定该参数，则系统将根据当前地域的资源售卖情况动态指定默认机型。</li><br><li>对于付费模式为CDHPAID的实例创建，该参数以"CDH_"为前缀，根据CPU和内存配置生成，具体形式为：CDH_XCXG，例如对于创建CPU为1核，内存为1G大小的专用宿主机的实例，该参数应该为CDH_1C1G。</li>
 * @method string getImageId() 获取指定有效的[镜像](https://cloud.tencent.com/document/product/213/4940)ID，格式形如`img-xxx`。镜像类型分为四种：<br/><li>公共镜像</li><li>自定义镜像</li><li>共享镜像</li><li>云镜像市场</li><br/>可通过以下方式获取可用的镜像ID：<br/><li>`公共镜像`、`自定义镜像`、`共享镜像`的镜像ID可通过登录[控制台](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE)查询；`云镜像市场`的镜像ID可通过[云市场](https://market.cloud.tencent.com/list)查询。</li><li>通过调用接口 [DescribeImages](https://cloud.tencent.com/document/api/213/15715) ，传入InstanceType获取当前机型支持的镜像列表，取返回信息中的`ImageId`字段。</li>
 * @method void setImageId(string $ImageId) 设置指定有效的[镜像](https://cloud.tencent.com/document/product/213/4940)ID，格式形如`img-xxx`。镜像类型分为四种：<br/><li>公共镜像</li><li>自定义镜像</li><li>共享镜像</li><li>云镜像市场</li><br/>可通过以下方式获取可用的镜像ID：<br/><li>`公共镜像`、`自定义镜像`、`共享镜像`的镜像ID可通过登录[控制台](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE)查询；`云镜像市场`的镜像ID可通过[云市场](https://market.cloud.tencent.com/list)查询。</li><li>通过调用接口 [DescribeImages](https://cloud.tencent.com/document/api/213/15715) ，传入InstanceType获取当前机型支持的镜像列表，取返回信息中的`ImageId`字段。</li>
 * @method SystemDisk getSystemDisk() 获取实例系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。
 * @method void setSystemDisk(SystemDisk $SystemDisk) 设置实例系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。
 * @method array getDataDisks() 获取实例数据盘配置信息。若不指定该参数，则默认不购买数据盘。支持购买的时候指定21块数据盘，其中最多包含1块LOCAL_BASIC数据盘或者LOCAL_SSD数据盘，最多包含20块CLOUD_BASIC数据盘、CLOUD_PREMIUM数据盘或者CLOUD_SSD数据盘。
 * @method void setDataDisks(array $DataDisks) 设置实例数据盘配置信息。若不指定该参数，则默认不购买数据盘。支持购买的时候指定21块数据盘，其中最多包含1块LOCAL_BASIC数据盘或者LOCAL_SSD数据盘，最多包含20块CLOUD_BASIC数据盘、CLOUD_PREMIUM数据盘或者CLOUD_SSD数据盘。
 * @method VirtualPrivateCloud getVirtualPrivateCloud() 获取私有网络相关信息配置。通过该参数可以指定私有网络的ID，子网ID等信息。若不指定该参数，则默认使用基础网络。若在此参数中指定了私有网络IP，即表示每个实例的主网卡IP；同时，InstanceCount参数必须与私有网络IP的个数一致且不能大于20。
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) 设置私有网络相关信息配置。通过该参数可以指定私有网络的ID，子网ID等信息。若不指定该参数，则默认使用基础网络。若在此参数中指定了私有网络IP，即表示每个实例的主网卡IP；同时，InstanceCount参数必须与私有网络IP的个数一致且不能大于20。
 * @method InternetAccessible getInternetAccessible() 获取公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。
 * @method integer getInstanceCount() 获取购买实例数量。具体配额相关限制详见[CVM实例购买限制](https://cloud.tencent.com/document/product/213/2664)。
 * @method void setInstanceCount(integer $InstanceCount) 设置购买实例数量。具体配额相关限制详见[CVM实例购买限制](https://cloud.tencent.com/document/product/213/2664)。
 * @method string getInstanceName() 获取实例显示名称。<br><li>不指定实例显示名称则默认显示‘未命名’。</li><li>购买多台实例，如果指定模式串`{R:x}`，表示生成数字`[x, x+n-1]`，其中`n`表示购买实例的数量，例如`server_{R:3}`，购买1台时，实例显示名称为`server_3`；购买2台时，实例显示名称分别为`server_3`，`server_4`。支持指定多个模式串`{R:x}`。</li><li>购买多台实例，如果不指定模式串，则在实例显示名称添加后缀`1、2...n`，其中`n`表示购买实例的数量，例如`server_`，购买2台时，实例显示名称分别为`server_1`，`server_2`。</li><li>最多支持128个字符（包含模式串）。</li>
 * @method void setInstanceName(string $InstanceName) 设置实例显示名称。<br><li>不指定实例显示名称则默认显示‘未命名’。</li><li>购买多台实例，如果指定模式串`{R:x}`，表示生成数字`[x, x+n-1]`，其中`n`表示购买实例的数量，例如`server_{R:3}`，购买1台时，实例显示名称为`server_3`；购买2台时，实例显示名称分别为`server_3`，`server_4`。支持指定多个模式串`{R:x}`。</li><li>购买多台实例，如果不指定模式串，则在实例显示名称添加后缀`1、2...n`，其中`n`表示购买实例的数量，例如`server_`，购买2台时，实例显示名称分别为`server_1`，`server_2`。</li><li>最多支持128个字符（包含模式串）。</li>
 * @method LoginSettings getLoginSettings() 获取实例登录设置。通过该参数可以设置实例的登录方式为密钥或保持镜像的原始登录设置。
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置实例登录设置。通过该参数可以设置实例的登录方式为密钥或保持镜像的原始登录设置。
 * @method array getSecurityGroupIds() 获取实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。
 * @method EnhancedService getEnhancedService() 获取增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认公共镜像开启云监控、云安全服务；自定义镜像与云镜像市场镜像默认不开启云监控，云安全服务，而使用镜像里保留的服务。
 * @method void setEnhancedService(EnhancedService $EnhancedService) 设置增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认公共镜像开启云监控、云安全服务；自定义镜像与云镜像市场镜像默认不开启云监控，云安全服务，而使用镜像里保留的服务。
 * @method string getClientToken() 获取用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
 * @method void setClientToken(string $ClientToken) 设置用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
 * @method string getHostName() 获取云服务器的主机名。<br><li>点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</li><br><li>Windows 实例：名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><br><li>其他类型（Linux 等）实例：字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li>
 * @method void setHostName(string $HostName) 设置云服务器的主机名。<br><li>点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</li><br><li>Windows 实例：名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><br><li>其他类型（Linux 等）实例：字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li>
 * @method ActionTimer getActionTimer() 获取定时任务。通过该参数可以为实例指定定时任务，目前仅支持定时销毁。
 * @method void setActionTimer(ActionTimer $ActionTimer) 设置定时任务。通过该参数可以为实例指定定时任务，目前仅支持定时销毁。
 * @method array getDisasterRecoverGroupIds() 获取置放群组id，仅支持指定一个。可使用[DescribeDisasterRecoverGroups](https://cloud.tencent.com/document/api/213/17810)接口获取。
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) 设置置放群组id，仅支持指定一个。可使用[DescribeDisasterRecoverGroups](https://cloud.tencent.com/document/api/213/17810)接口获取。
 * @method array getTagSpecification() 获取标签描述列表。通过指定该参数可以同时绑定标签到相应的资源实例，当前仅支持绑定标签到云服务器实例。
 * @method void setTagSpecification(array $TagSpecification) 设置标签描述列表。通过指定该参数可以同时绑定标签到相应的资源实例，当前仅支持绑定标签到云服务器实例。
 * @method InstanceMarketOptionsRequest getInstanceMarketOptions() 获取实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费则该参数必传。
 * @method void setInstanceMarketOptions(InstanceMarketOptionsRequest $InstanceMarketOptions) 设置实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费则该参数必传。
 * @method string getUserData() 获取提供给实例使用的用户数据，需要以 base64 方式编码，支持的最大数据大小为 16KB。关于获取此参数的详细介绍，请参阅[Windows](https://cloud.tencent.com/document/product/213/17526)和[Linux](https://cloud.tencent.com/document/product/213/17525)启动时运行命令。
 * @method void setUserData(string $UserData) 设置提供给实例使用的用户数据，需要以 base64 方式编码，支持的最大数据大小为 16KB。关于获取此参数的详细介绍，请参阅[Windows](https://cloud.tencent.com/document/product/213/17526)和[Linux](https://cloud.tencent.com/document/product/213/17525)启动时运行命令。
 * @method boolean getDryRun() 获取是否只预检此次请求。
true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和云服务器库存。
如果检查不通过，则返回对应错误码；
如果检查通过，则返回RequestId.
false（默认）：发送正常请求，通过检查后直接创建实例。
 * @method void setDryRun(boolean $DryRun) 设置是否只预检此次请求。
true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和云服务器库存。
如果检查不通过，则返回对应错误码；
如果检查通过，则返回RequestId.
false（默认）：发送正常请求，通过检查后直接创建实例。
 * @method string getCamRoleName() 获取CAM角色名称。可通过[ DescribeRoleList ](https://cloud.tencent.com/document/product/598/13887)接口返回值中的`roleName`获取。
 * @method void setCamRoleName(string $CamRoleName) 设置CAM角色名称。可通过[ DescribeRoleList ](https://cloud.tencent.com/document/product/598/13887)接口返回值中的`roleName`获取。
 * @method string getHpcClusterId() 获取高性能计算集群ID。若创建的实例为高性能计算实例，需指定实例放置的集群，否则不可指定。该参数可以通过调用 [DescribeHpcClusters](https://cloud.tencent.com/document/api/213/83220) 的返回值中的 `HpcClusterId` 字段来获取。
 * @method void setHpcClusterId(string $HpcClusterId) 设置高性能计算集群ID。若创建的实例为高性能计算实例，需指定实例放置的集群，否则不可指定。该参数可以通过调用 [DescribeHpcClusters](https://cloud.tencent.com/document/api/213/83220) 的返回值中的 `HpcClusterId` 字段来获取。
 * @method string getInstanceChargeType() 获取实例[计费类型](https://cloud.tencent.com/document/product/213/2180)。<br><li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：按小时后付费</li><li>CDHPAID：独享子机（基于专用宿主机创建，宿主机部分的资源不收费）</li><li>SPOTPAID：竞价付费</li>默认值：POSTPAID_BY_HOUR。
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例[计费类型](https://cloud.tencent.com/document/product/213/2180)。<br><li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：按小时后付费</li><li>CDHPAID：独享子机（基于专用宿主机创建，宿主机部分的资源不收费）</li><li>SPOTPAID：竞价付费</li>默认值：POSTPAID_BY_HOUR。
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
 * @method boolean getDisableApiTermination() 获取实例销毁保护标志，表示是否允许通过api接口删除实例。取值范围：<br><li>TRUE：表示开启实例保护，不允许通过api接口删除实例</li><br><li>FALSE：表示关闭实例保护，允许通过api接口删除实例</li><br><br>默认取值：FALSE。
 * @method void setDisableApiTermination(boolean $DisableApiTermination) 设置实例销毁保护标志，表示是否允许通过api接口删除实例。取值范围：<br><li>TRUE：表示开启实例保护，不允许通过api接口删除实例</li><br><li>FALSE：表示关闭实例保护，允许通过api接口删除实例</li><br><br>默认取值：FALSE。
 * @method boolean getEnableJumboFrame() 获取实例是否开启巨型帧，取值范围：<br><li/> true：表示实例开启巨型帧，只有支持巨型帧的机型可设置为true。<br><li/>false：表示实例关闭巨型帧，只有支持巨型帧的机型可设置为false。<br> 支持巨型帧的实例规格： [实例规格](https://cloud.tencent.com/document/product/213/11518)
 * @method void setEnableJumboFrame(boolean $EnableJumboFrame) 设置实例是否开启巨型帧，取值范围：<br><li/> true：表示实例开启巨型帧，只有支持巨型帧的机型可设置为true。<br><li/>false：表示实例关闭巨型帧，只有支持巨型帧的机型可设置为false。<br> 支持巨型帧的实例规格： [实例规格](https://cloud.tencent.com/document/product/213/11518)
 * @method Metadata getMetadata() 获取自定义metadata，支持创建 CVM 时添加自定义元数据键值对。
**注：内测中**。
 * @method void setMetadata(Metadata $Metadata) 设置自定义metadata，支持创建 CVM 时添加自定义元数据键值对。
**注：内测中**。
 * @method string getTemplateDataModifyAction() 获取只允许传递 Update 和 Replace 参数，在模板使用自定义 Metadata 且在 RunInstances 也传递 Metadata 时生效。默认采用 Replace。

- Update：设模板 t含本参数值为Update、 metadata=[k1:v1, k2:v2] ，则RunInstances（给metadata=[k2:v3]）+ t 创建的 cvm 使用metadata=[k1:v1, k2:v3] 
- Replace：模板 t含本参数值为Replace、 metadata=[k1:v1, k2:v2] ，则RunInstances（给metadata=[k2:v3]）+ t 创建的 cvm 使用metadata=[k2:v3] 
**注：内测中**。
 * @method void setTemplateDataModifyAction(string $TemplateDataModifyAction) 设置只允许传递 Update 和 Replace 参数，在模板使用自定义 Metadata 且在 RunInstances 也传递 Metadata 时生效。默认采用 Replace。

- Update：设模板 t含本参数值为Update、 metadata=[k1:v1, k2:v2] ，则RunInstances（给metadata=[k2:v3]）+ t 创建的 cvm 使用metadata=[k1:v1, k2:v3] 
- Replace：模板 t含本参数值为Replace、 metadata=[k1:v1, k2:v2] ，则RunInstances（给metadata=[k2:v3]）+ t 创建的 cvm 使用metadata=[k2:v3] 
**注：内测中**。
 */
class CreateLaunchTemplateVersionRequest extends AbstractModel
{
    /**
     * @var Placement 实例所在的位置。通过该参数可以指定实例所属可用区，所属项目，所属宿主机（在专用宿主机上创建子机时指定）等属性。
     */
    public $Placement;

    /**
     * @var string 启动模板ID，新版本将基于该实例启动模板ID创建。可通过 [DescribeLaunchTemplates](https://cloud.tencent.com/document/api/213/66322) 接口返回值中的`LaunchTemplateId`获取。
     */
    public $LaunchTemplateId;

    /**
     * @var integer 若给定，新实例启动模板将基于给定的版本号创建。若未指定则使用默认版本,可以通过 [DescribeLaunchTemplateVersions](https://cloud.tencent.com/document/api/213/66323)查询默认版本。
     */
    public $LaunchTemplateVersion;

    /**
     * @var string 实例启动模板版本描述。长度为2~256个英文或中文字符，不指定该参数时默认为空字符。
     */
    public $LaunchTemplateVersionDescription;

    /**
     * @var string 实例机型。不同实例机型指定了不同的资源规格。
<br><li>对于付费模式为PREPAID或POSTPAID\_BY\_HOUR的实例创建，具体取值可通过调用接口[DescribeInstanceTypeConfigs](https://cloud.tencent.com/document/api/213/15749)来获得最新的规格表或参见[实例规格](https://cloud.tencent.com/document/product/213/11518)描述。若不指定该参数，则系统将根据当前地域的资源售卖情况动态指定默认机型。</li><br><li>对于付费模式为CDHPAID的实例创建，该参数以"CDH_"为前缀，根据CPU和内存配置生成，具体形式为：CDH_XCXG，例如对于创建CPU为1核，内存为1G大小的专用宿主机的实例，该参数应该为CDH_1C1G。</li>
     */
    public $InstanceType;

    /**
     * @var string 指定有效的[镜像](https://cloud.tencent.com/document/product/213/4940)ID，格式形如`img-xxx`。镜像类型分为四种：<br/><li>公共镜像</li><li>自定义镜像</li><li>共享镜像</li><li>云镜像市场</li><br/>可通过以下方式获取可用的镜像ID：<br/><li>`公共镜像`、`自定义镜像`、`共享镜像`的镜像ID可通过登录[控制台](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE)查询；`云镜像市场`的镜像ID可通过[云市场](https://market.cloud.tencent.com/list)查询。</li><li>通过调用接口 [DescribeImages](https://cloud.tencent.com/document/api/213/15715) ，传入InstanceType获取当前机型支持的镜像列表，取返回信息中的`ImageId`字段。</li>
     */
    public $ImageId;

    /**
     * @var SystemDisk 实例系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。
     */
    public $SystemDisk;

    /**
     * @var array 实例数据盘配置信息。若不指定该参数，则默认不购买数据盘。支持购买的时候指定21块数据盘，其中最多包含1块LOCAL_BASIC数据盘或者LOCAL_SSD数据盘，最多包含20块CLOUD_BASIC数据盘、CLOUD_PREMIUM数据盘或者CLOUD_SSD数据盘。
     */
    public $DataDisks;

    /**
     * @var VirtualPrivateCloud 私有网络相关信息配置。通过该参数可以指定私有网络的ID，子网ID等信息。若不指定该参数，则默认使用基础网络。若在此参数中指定了私有网络IP，即表示每个实例的主网卡IP；同时，InstanceCount参数必须与私有网络IP的个数一致且不能大于20。
     */
    public $VirtualPrivateCloud;

    /**
     * @var InternetAccessible 公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。
     */
    public $InternetAccessible;

    /**
     * @var integer 购买实例数量。具体配额相关限制详见[CVM实例购买限制](https://cloud.tencent.com/document/product/213/2664)。
     */
    public $InstanceCount;

    /**
     * @var string 实例显示名称。<br><li>不指定实例显示名称则默认显示‘未命名’。</li><li>购买多台实例，如果指定模式串`{R:x}`，表示生成数字`[x, x+n-1]`，其中`n`表示购买实例的数量，例如`server_{R:3}`，购买1台时，实例显示名称为`server_3`；购买2台时，实例显示名称分别为`server_3`，`server_4`。支持指定多个模式串`{R:x}`。</li><li>购买多台实例，如果不指定模式串，则在实例显示名称添加后缀`1、2...n`，其中`n`表示购买实例的数量，例如`server_`，购买2台时，实例显示名称分别为`server_1`，`server_2`。</li><li>最多支持128个字符（包含模式串）。</li>
     */
    public $InstanceName;

    /**
     * @var LoginSettings 实例登录设置。通过该参数可以设置实例的登录方式为密钥或保持镜像的原始登录设置。
     */
    public $LoginSettings;

    /**
     * @var array 实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。
     */
    public $SecurityGroupIds;

    /**
     * @var EnhancedService 增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认公共镜像开启云监控、云安全服务；自定义镜像与云镜像市场镜像默认不开启云监控，云安全服务，而使用镜像里保留的服务。
     */
    public $EnhancedService;

    /**
     * @var string 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
     */
    public $ClientToken;

    /**
     * @var string 云服务器的主机名。<br><li>点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</li><br><li>Windows 实例：名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><br><li>其他类型（Linux 等）实例：字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li>
     */
    public $HostName;

    /**
     * @var ActionTimer 定时任务。通过该参数可以为实例指定定时任务，目前仅支持定时销毁。
     */
    public $ActionTimer;

    /**
     * @var array 置放群组id，仅支持指定一个。可使用[DescribeDisasterRecoverGroups](https://cloud.tencent.com/document/api/213/17810)接口获取。
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var array 标签描述列表。通过指定该参数可以同时绑定标签到相应的资源实例，当前仅支持绑定标签到云服务器实例。
     */
    public $TagSpecification;

    /**
     * @var InstanceMarketOptionsRequest 实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费则该参数必传。
     */
    public $InstanceMarketOptions;

    /**
     * @var string 提供给实例使用的用户数据，需要以 base64 方式编码，支持的最大数据大小为 16KB。关于获取此参数的详细介绍，请参阅[Windows](https://cloud.tencent.com/document/product/213/17526)和[Linux](https://cloud.tencent.com/document/product/213/17525)启动时运行命令。
     */
    public $UserData;

    /**
     * @var boolean 是否只预检此次请求。
true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和云服务器库存。
如果检查不通过，则返回对应错误码；
如果检查通过，则返回RequestId.
false（默认）：发送正常请求，通过检查后直接创建实例。
     */
    public $DryRun;

    /**
     * @var string CAM角色名称。可通过[ DescribeRoleList ](https://cloud.tencent.com/document/product/598/13887)接口返回值中的`roleName`获取。
     */
    public $CamRoleName;

    /**
     * @var string 高性能计算集群ID。若创建的实例为高性能计算实例，需指定实例放置的集群，否则不可指定。该参数可以通过调用 [DescribeHpcClusters](https://cloud.tencent.com/document/api/213/83220) 的返回值中的 `HpcClusterId` 字段来获取。
     */
    public $HpcClusterId;

    /**
     * @var string 实例[计费类型](https://cloud.tencent.com/document/product/213/2180)。<br><li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：按小时后付费</li><li>CDHPAID：独享子机（基于专用宿主机创建，宿主机部分的资源不收费）</li><li>SPOTPAID：竞价付费</li>默认值：POSTPAID_BY_HOUR。
     */
    public $InstanceChargeType;

    /**
     * @var InstanceChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
     */
    public $InstanceChargePrepaid;

    /**
     * @var boolean 实例销毁保护标志，表示是否允许通过api接口删除实例。取值范围：<br><li>TRUE：表示开启实例保护，不允许通过api接口删除实例</li><br><li>FALSE：表示关闭实例保护，允许通过api接口删除实例</li><br><br>默认取值：FALSE。
     */
    public $DisableApiTermination;

    /**
     * @var boolean 实例是否开启巨型帧，取值范围：<br><li/> true：表示实例开启巨型帧，只有支持巨型帧的机型可设置为true。<br><li/>false：表示实例关闭巨型帧，只有支持巨型帧的机型可设置为false。<br> 支持巨型帧的实例规格： [实例规格](https://cloud.tencent.com/document/product/213/11518)
     */
    public $EnableJumboFrame;

    /**
     * @var Metadata 自定义metadata，支持创建 CVM 时添加自定义元数据键值对。
**注：内测中**。
     */
    public $Metadata;

    /**
     * @var string 只允许传递 Update 和 Replace 参数，在模板使用自定义 Metadata 且在 RunInstances 也传递 Metadata 时生效。默认采用 Replace。

- Update：设模板 t含本参数值为Update、 metadata=[k1:v1, k2:v2] ，则RunInstances（给metadata=[k2:v3]）+ t 创建的 cvm 使用metadata=[k1:v1, k2:v3] 
- Replace：模板 t含本参数值为Replace、 metadata=[k1:v1, k2:v2] ，则RunInstances（给metadata=[k2:v3]）+ t 创建的 cvm 使用metadata=[k2:v3] 
**注：内测中**。
     */
    public $TemplateDataModifyAction;

    /**
     * @param Placement $Placement 实例所在的位置。通过该参数可以指定实例所属可用区，所属项目，所属宿主机（在专用宿主机上创建子机时指定）等属性。
     * @param string $LaunchTemplateId 启动模板ID，新版本将基于该实例启动模板ID创建。可通过 [DescribeLaunchTemplates](https://cloud.tencent.com/document/api/213/66322) 接口返回值中的`LaunchTemplateId`获取。
     * @param integer $LaunchTemplateVersion 若给定，新实例启动模板将基于给定的版本号创建。若未指定则使用默认版本,可以通过 [DescribeLaunchTemplateVersions](https://cloud.tencent.com/document/api/213/66323)查询默认版本。
     * @param string $LaunchTemplateVersionDescription 实例启动模板版本描述。长度为2~256个英文或中文字符，不指定该参数时默认为空字符。
     * @param string $InstanceType 实例机型。不同实例机型指定了不同的资源规格。
<br><li>对于付费模式为PREPAID或POSTPAID\_BY\_HOUR的实例创建，具体取值可通过调用接口[DescribeInstanceTypeConfigs](https://cloud.tencent.com/document/api/213/15749)来获得最新的规格表或参见[实例规格](https://cloud.tencent.com/document/product/213/11518)描述。若不指定该参数，则系统将根据当前地域的资源售卖情况动态指定默认机型。</li><br><li>对于付费模式为CDHPAID的实例创建，该参数以"CDH_"为前缀，根据CPU和内存配置生成，具体形式为：CDH_XCXG，例如对于创建CPU为1核，内存为1G大小的专用宿主机的实例，该参数应该为CDH_1C1G。</li>
     * @param string $ImageId 指定有效的[镜像](https://cloud.tencent.com/document/product/213/4940)ID，格式形如`img-xxx`。镜像类型分为四种：<br/><li>公共镜像</li><li>自定义镜像</li><li>共享镜像</li><li>云镜像市场</li><br/>可通过以下方式获取可用的镜像ID：<br/><li>`公共镜像`、`自定义镜像`、`共享镜像`的镜像ID可通过登录[控制台](https://console.cloud.tencent.com/cvm/image?rid=1&imageType=PUBLIC_IMAGE)查询；`云镜像市场`的镜像ID可通过[云市场](https://market.cloud.tencent.com/list)查询。</li><li>通过调用接口 [DescribeImages](https://cloud.tencent.com/document/api/213/15715) ，传入InstanceType获取当前机型支持的镜像列表，取返回信息中的`ImageId`字段。</li>
     * @param SystemDisk $SystemDisk 实例系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。
     * @param array $DataDisks 实例数据盘配置信息。若不指定该参数，则默认不购买数据盘。支持购买的时候指定21块数据盘，其中最多包含1块LOCAL_BASIC数据盘或者LOCAL_SSD数据盘，最多包含20块CLOUD_BASIC数据盘、CLOUD_PREMIUM数据盘或者CLOUD_SSD数据盘。
     * @param VirtualPrivateCloud $VirtualPrivateCloud 私有网络相关信息配置。通过该参数可以指定私有网络的ID，子网ID等信息。若不指定该参数，则默认使用基础网络。若在此参数中指定了私有网络IP，即表示每个实例的主网卡IP；同时，InstanceCount参数必须与私有网络IP的个数一致且不能大于20。
     * @param InternetAccessible $InternetAccessible 公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。
     * @param integer $InstanceCount 购买实例数量。具体配额相关限制详见[CVM实例购买限制](https://cloud.tencent.com/document/product/213/2664)。
     * @param string $InstanceName 实例显示名称。<br><li>不指定实例显示名称则默认显示‘未命名’。</li><li>购买多台实例，如果指定模式串`{R:x}`，表示生成数字`[x, x+n-1]`，其中`n`表示购买实例的数量，例如`server_{R:3}`，购买1台时，实例显示名称为`server_3`；购买2台时，实例显示名称分别为`server_3`，`server_4`。支持指定多个模式串`{R:x}`。</li><li>购买多台实例，如果不指定模式串，则在实例显示名称添加后缀`1、2...n`，其中`n`表示购买实例的数量，例如`server_`，购买2台时，实例显示名称分别为`server_1`，`server_2`。</li><li>最多支持128个字符（包含模式串）。</li>
     * @param LoginSettings $LoginSettings 实例登录设置。通过该参数可以设置实例的登录方式为密钥或保持镜像的原始登录设置。
     * @param array $SecurityGroupIds 实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。若不指定该参数，则绑定默认安全组。
     * @param EnhancedService $EnhancedService 增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认公共镜像开启云监控、云安全服务；自定义镜像与云镜像市场镜像默认不开启云监控，云安全服务，而使用镜像里保留的服务。
     * @param string $ClientToken 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
     * @param string $HostName 云服务器的主机名。<br><li>点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</li><br><li>Windows 实例：名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><br><li>其他类型（Linux 等）实例：字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li>
     * @param ActionTimer $ActionTimer 定时任务。通过该参数可以为实例指定定时任务，目前仅支持定时销毁。
     * @param array $DisasterRecoverGroupIds 置放群组id，仅支持指定一个。可使用[DescribeDisasterRecoverGroups](https://cloud.tencent.com/document/api/213/17810)接口获取。
     * @param array $TagSpecification 标签描述列表。通过指定该参数可以同时绑定标签到相应的资源实例，当前仅支持绑定标签到云服务器实例。
     * @param InstanceMarketOptionsRequest $InstanceMarketOptions 实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费则该参数必传。
     * @param string $UserData 提供给实例使用的用户数据，需要以 base64 方式编码，支持的最大数据大小为 16KB。关于获取此参数的详细介绍，请参阅[Windows](https://cloud.tencent.com/document/product/213/17526)和[Linux](https://cloud.tencent.com/document/product/213/17525)启动时运行命令。
     * @param boolean $DryRun 是否只预检此次请求。
true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和云服务器库存。
如果检查不通过，则返回对应错误码；
如果检查通过，则返回RequestId.
false（默认）：发送正常请求，通过检查后直接创建实例。
     * @param string $CamRoleName CAM角色名称。可通过[ DescribeRoleList ](https://cloud.tencent.com/document/product/598/13887)接口返回值中的`roleName`获取。
     * @param string $HpcClusterId 高性能计算集群ID。若创建的实例为高性能计算实例，需指定实例放置的集群，否则不可指定。该参数可以通过调用 [DescribeHpcClusters](https://cloud.tencent.com/document/api/213/83220) 的返回值中的 `HpcClusterId` 字段来获取。
     * @param string $InstanceChargeType 实例[计费类型](https://cloud.tencent.com/document/product/213/2180)。<br><li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：按小时后付费</li><li>CDHPAID：独享子机（基于专用宿主机创建，宿主机部分的资源不收费）</li><li>SPOTPAID：竞价付费</li>默认值：POSTPAID_BY_HOUR。
     * @param InstanceChargePrepaid $InstanceChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。
     * @param boolean $DisableApiTermination 实例销毁保护标志，表示是否允许通过api接口删除实例。取值范围：<br><li>TRUE：表示开启实例保护，不允许通过api接口删除实例</li><br><li>FALSE：表示关闭实例保护，允许通过api接口删除实例</li><br><br>默认取值：FALSE。
     * @param boolean $EnableJumboFrame 实例是否开启巨型帧，取值范围：<br><li/> true：表示实例开启巨型帧，只有支持巨型帧的机型可设置为true。<br><li/>false：表示实例关闭巨型帧，只有支持巨型帧的机型可设置为false。<br> 支持巨型帧的实例规格： [实例规格](https://cloud.tencent.com/document/product/213/11518)
     * @param Metadata $Metadata 自定义metadata，支持创建 CVM 时添加自定义元数据键值对。
**注：内测中**。
     * @param string $TemplateDataModifyAction 只允许传递 Update 和 Replace 参数，在模板使用自定义 Metadata 且在 RunInstances 也传递 Metadata 时生效。默认采用 Replace。

- Update：设模板 t含本参数值为Update、 metadata=[k1:v1, k2:v2] ，则RunInstances（给metadata=[k2:v3]）+ t 创建的 cvm 使用metadata=[k1:v1, k2:v3] 
- Replace：模板 t含本参数值为Replace、 metadata=[k1:v1, k2:v2] ，则RunInstances（给metadata=[k2:v3]）+ t 创建的 cvm 使用metadata=[k2:v3] 
**注：内测中**。
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

        if (array_key_exists("LaunchTemplateId",$param) and $param["LaunchTemplateId"] !== null) {
            $this->LaunchTemplateId = $param["LaunchTemplateId"];
        }

        if (array_key_exists("LaunchTemplateVersion",$param) and $param["LaunchTemplateVersion"] !== null) {
            $this->LaunchTemplateVersion = $param["LaunchTemplateVersion"];
        }

        if (array_key_exists("LaunchTemplateVersionDescription",$param) and $param["LaunchTemplateVersionDescription"] !== null) {
            $this->LaunchTemplateVersionDescription = $param["LaunchTemplateVersionDescription"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
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

        if (array_key_exists("VirtualPrivateCloud",$param) and $param["VirtualPrivateCloud"] !== null) {
            $this->VirtualPrivateCloud = new VirtualPrivateCloud();
            $this->VirtualPrivateCloud->deserialize($param["VirtualPrivateCloud"]);
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
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

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("ActionTimer",$param) and $param["ActionTimer"] !== null) {
            $this->ActionTimer = new ActionTimer();
            $this->ActionTimer->deserialize($param["ActionTimer"]);
        }

        if (array_key_exists("DisasterRecoverGroupIds",$param) and $param["DisasterRecoverGroupIds"] !== null) {
            $this->DisasterRecoverGroupIds = $param["DisasterRecoverGroupIds"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }

        if (array_key_exists("InstanceMarketOptions",$param) and $param["InstanceMarketOptions"] !== null) {
            $this->InstanceMarketOptions = new InstanceMarketOptionsRequest();
            $this->InstanceMarketOptions->deserialize($param["InstanceMarketOptions"]);
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("CamRoleName",$param) and $param["CamRoleName"] !== null) {
            $this->CamRoleName = $param["CamRoleName"];
        }

        if (array_key_exists("HpcClusterId",$param) and $param["HpcClusterId"] !== null) {
            $this->HpcClusterId = $param["HpcClusterId"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("DisableApiTermination",$param) and $param["DisableApiTermination"] !== null) {
            $this->DisableApiTermination = $param["DisableApiTermination"];
        }

        if (array_key_exists("EnableJumboFrame",$param) and $param["EnableJumboFrame"] !== null) {
            $this->EnableJumboFrame = $param["EnableJumboFrame"];
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = new Metadata();
            $this->Metadata->deserialize($param["Metadata"]);
        }

        if (array_key_exists("TemplateDataModifyAction",$param) and $param["TemplateDataModifyAction"] !== null) {
            $this->TemplateDataModifyAction = $param["TemplateDataModifyAction"];
        }
    }
}
