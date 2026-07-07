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
 * RunInstances请求参数结构体
 *
 * @method string getInstanceChargeType() 获取<p>实例<a href="https://cloud.tencent.com/document/product/213/2180">计费类型</a>。<br><li>PREPAID：预付费，即包年包月</li><br><li>POSTPAID_BY_HOUR：按小时后付费</li><br><li>CDHPAID：独享子机（基于专用宿主机创建，宿主机部分的资源不收费）</li><br><li>SPOTPAID：竞价付费</li><br><li>CDCPAID：专用集群付费</li><br>默认值：POSTPAID_BY_HOUR。</p>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>实例<a href="https://cloud.tencent.com/document/product/213/2180">计费类型</a>。<br><li>PREPAID：预付费，即包年包月</li><br><li>POSTPAID_BY_HOUR：按小时后付费</li><br><li>CDHPAID：独享子机（基于专用宿主机创建，宿主机部分的资源不收费）</li><br><li>SPOTPAID：竞价付费</li><br><li>CDCPAID：专用集群付费</li><br>默认值：POSTPAID_BY_HOUR。</p>
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取<p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。</p>
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置<p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。</p>
 * @method Placement getPlacement() 获取<p>实例所在的位置。通过该参数可以指定实例所属可用区，所属项目，所属宿主机（在专用宿主机上创建子机时指定）等属性。<br> <b>注：如果您不指定LaunchTemplate参数，则Placement为必选参数。若同时传递Placement和LaunchTemplate，则默认覆盖LaunchTemplate中对应的Placement的值。</b></p>
 * @method void setPlacement(Placement $Placement) 设置<p>实例所在的位置。通过该参数可以指定实例所属可用区，所属项目，所属宿主机（在专用宿主机上创建子机时指定）等属性。<br> <b>注：如果您不指定LaunchTemplate参数，则Placement为必选参数。若同时传递Placement和LaunchTemplate，则默认覆盖LaunchTemplate中对应的Placement的值。</b></p>
 * @method string getInstanceType() 获取<p>实例机型。不同实例机型指定了不同的资源规格。<br><br><li>对于付费模式为PREPAID或POSTPAID_BY_HOUR的实例创建，具体取值可通过调用接口<a href="https://cloud.tencent.com/document/api/213/15749">DescribeInstanceTypeConfigs</a>来获得最新的规格表或参见<a href="https://cloud.tencent.com/document/product/213/11518">实例规格</a>描述。若不指定该参数，则系统将根据当前地域的资源售卖情况动态指定默认机型。</li><br><li>对于付费模式为CDHPAID的实例创建，该参数以&quot;CDH_&quot;为前缀，根据CPU和内存配置生成，具体形式为：CDH_XCXG，例如对于创建CPU为1核，内存为1G大小的专用宿主机的实例，该参数应该为CDH_1C1G。</li></p>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例机型。不同实例机型指定了不同的资源规格。<br><br><li>对于付费模式为PREPAID或POSTPAID_BY_HOUR的实例创建，具体取值可通过调用接口<a href="https://cloud.tencent.com/document/api/213/15749">DescribeInstanceTypeConfigs</a>来获得最新的规格表或参见<a href="https://cloud.tencent.com/document/product/213/11518">实例规格</a>描述。若不指定该参数，则系统将根据当前地域的资源售卖情况动态指定默认机型。</li><br><li>对于付费模式为CDHPAID的实例创建，该参数以&quot;CDH_&quot;为前缀，根据CPU和内存配置生成，具体形式为：CDH_XCXG，例如对于创建CPU为1核，内存为1G大小的专用宿主机的实例，该参数应该为CDH_1C1G。</li></p>
 * @method string getImageId() 获取<p>指定有效的<a href="https://cloud.tencent.com/document/product/213/4940">镜像</a>ID，格式形如<code>img-xxx</code>。镜像类型分为四种：<br><li>公共镜像</li><li>自定义镜像</li><li>共享镜像</li><li>服务市场镜像</li><br>可通过以下方式获取可用的镜像ID：<br><li><code>公共镜像</code>、<code>自定义镜像</code>、<code>共享镜像</code>的镜像ID可通过登录<a href="https://console.cloud.tencent.com/cvm/image?rid=1&amp;imageType=PUBLIC_IMAGE">控制台</a>查询；<code>服务镜像市场</code>的镜像ID可通过<a href="https://market.cloud.tencent.com/list">云市场</a>查询。</li><li>通过调用接口 <a href="https://cloud.tencent.com/document/api/213/15715">DescribeImages</a> ，传入InstanceType获取当前机型支持的镜像列表，取返回信息中的<code>ImageId</code>字段。</li><br> <b>注：如果您不指定LaunchTemplate参数，则ImageId为必选参数。若同时传递ImageId和LaunchTemplate，则默认覆盖LaunchTemplate中对应的ImageId的值。</b></p>
 * @method void setImageId(string $ImageId) 设置<p>指定有效的<a href="https://cloud.tencent.com/document/product/213/4940">镜像</a>ID，格式形如<code>img-xxx</code>。镜像类型分为四种：<br><li>公共镜像</li><li>自定义镜像</li><li>共享镜像</li><li>服务市场镜像</li><br>可通过以下方式获取可用的镜像ID：<br><li><code>公共镜像</code>、<code>自定义镜像</code>、<code>共享镜像</code>的镜像ID可通过登录<a href="https://console.cloud.tencent.com/cvm/image?rid=1&amp;imageType=PUBLIC_IMAGE">控制台</a>查询；<code>服务镜像市场</code>的镜像ID可通过<a href="https://market.cloud.tencent.com/list">云市场</a>查询。</li><li>通过调用接口 <a href="https://cloud.tencent.com/document/api/213/15715">DescribeImages</a> ，传入InstanceType获取当前机型支持的镜像列表，取返回信息中的<code>ImageId</code>字段。</li><br> <b>注：如果您不指定LaunchTemplate参数，则ImageId为必选参数。若同时传递ImageId和LaunchTemplate，则默认覆盖LaunchTemplate中对应的ImageId的值。</b></p>
 * @method SystemDisk getSystemDisk() 获取<p>实例系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。</p>
 * @method void setSystemDisk(SystemDisk $SystemDisk) 设置<p>实例系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。</p>
 * @method array getDataDisks() 获取<p>实例数据盘配置信息。若不指定该参数，则默认不购买数据盘。支持购买的时候指定21块数据盘，其中最多包含1块LOCAL_BASIC数据盘或者LOCAL_SSD数据盘，最多包含20块CLOUD_BASIC数据盘、CLOUD_PREMIUM数据盘或者CLOUD_SSD数据盘。</p>
 * @method void setDataDisks(array $DataDisks) 设置<p>实例数据盘配置信息。若不指定该参数，则默认不购买数据盘。支持购买的时候指定21块数据盘，其中最多包含1块LOCAL_BASIC数据盘或者LOCAL_SSD数据盘，最多包含20块CLOUD_BASIC数据盘、CLOUD_PREMIUM数据盘或者CLOUD_SSD数据盘。</p>
 * @method VirtualPrivateCloud getVirtualPrivateCloud() 获取<p>私有网络相关信息配置。通过该参数可以指定私有网络的ID，子网ID等信息。若在此参数中指定了私有网络IP，即表示每个实例的主网卡IP；同时，InstanceCount参数必须与私有网络IP的个数一致且不能大于20。</p>
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) 设置<p>私有网络相关信息配置。通过该参数可以指定私有网络的ID，子网ID等信息。若在此参数中指定了私有网络IP，即表示每个实例的主网卡IP；同时，InstanceCount参数必须与私有网络IP的个数一致且不能大于20。</p>
 * @method InternetAccessible getInternetAccessible() 获取<p>公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。</p>
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置<p>公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。</p>
 * @method integer getInstanceCount() 获取<p>购买实例数量。包年包月实例取值范围：[1，500]，按量计费实例取值范围：[1，500]。默认取值：1。指定购买实例的数量不能超过用户所能购买的剩余配额数量，具体配额相关限制详见<a href="https://cloud.tencent.com/document/product/213/2664">CVM实例购买限制</a>。</p>
 * @method void setInstanceCount(integer $InstanceCount) 设置<p>购买实例数量。包年包月实例取值范围：[1，500]，按量计费实例取值范围：[1，500]。默认取值：1。指定购买实例的数量不能超过用户所能购买的剩余配额数量，具体配额相关限制详见<a href="https://cloud.tencent.com/document/product/213/2664">CVM实例购买限制</a>。</p>
 * @method integer getMinCount() 获取<p>指定创建实例的最小数量，取值范围为不大于InstanceCount的正整数。<br>指定最小数量时，承诺最少创建MinCount台实例，并尽量创建InstanceCount台实例。<br>库存不足以满足最小数量时，API 会返回库存不足最小数量的错误信息。<br>仅对支持部分发货的账号、区域和计费模式（包年包月、按量计费、竞价实例、按量包销）生效。</p>
 * @method void setMinCount(integer $MinCount) 设置<p>指定创建实例的最小数量，取值范围为不大于InstanceCount的正整数。<br>指定最小数量时，承诺最少创建MinCount台实例，并尽量创建InstanceCount台实例。<br>库存不足以满足最小数量时，API 会返回库存不足最小数量的错误信息。<br>仅对支持部分发货的账号、区域和计费模式（包年包月、按量计费、竞价实例、按量包销）生效。</p>
 * @method string getInstanceName() 获取<p>实例显示名称。<br><li>不指定实例显示名称则默认显示‘未命名’。</li><li>最多支持128个字符（含模式串）。</li><li>购买多台实例时：</p><ul><li>指定模式串  {R:x}：表示生成数字序列 [x, x+n-1]，其中 n为购买实例的数量。例如：输入 server_{R:3}，购买1台时，实例显示名称为 server_3；购买2台时，实例显示名称分别为 server_3、server_4。</li><li>指定模式串  {R:x,F:y}：y表示固定位数（可选），取值范围为 [0,8]，默认值 0表示不固定位数（等效于 {R:x}）。不足位时自动补零，例如：输入server_{R:3,F:3}，购买2台时，实例显示名称为 server_003、server_004。；若数字位数超过 y（如 {R:99,F:2}），以实际位数为准，例如：app_{R:99,F:2}，购买2台时，实例显示名称为 app_99、app_100。</li><li>模式串需严格遵循 {R:x,F:y}或 {R:x}格式，无效格式（如 {}）视为普通文本。支持多个模式串。</li><li>未指定模式串：实例显示名称添加后缀 1、2...n，其中n表示购买实例的数量，例如 server_购买2台时生成 server_1、server_2。</li></li></ul>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例显示名称。<br><li>不指定实例显示名称则默认显示‘未命名’。</li><li>最多支持128个字符（含模式串）。</li><li>购买多台实例时：</p><ul><li>指定模式串  {R:x}：表示生成数字序列 [x, x+n-1]，其中 n为购买实例的数量。例如：输入 server_{R:3}，购买1台时，实例显示名称为 server_3；购买2台时，实例显示名称分别为 server_3、server_4。</li><li>指定模式串  {R:x,F:y}：y表示固定位数（可选），取值范围为 [0,8]，默认值 0表示不固定位数（等效于 {R:x}）。不足位时自动补零，例如：输入server_{R:3,F:3}，购买2台时，实例显示名称为 server_003、server_004。；若数字位数超过 y（如 {R:99,F:2}），以实际位数为准，例如：app_{R:99,F:2}，购买2台时，实例显示名称为 app_99、app_100。</li><li>模式串需严格遵循 {R:x,F:y}或 {R:x}格式，无效格式（如 {}）视为普通文本。支持多个模式串。</li><li>未指定模式串：实例显示名称添加后缀 1、2...n，其中n表示购买实例的数量，例如 server_购买2台时生成 server_1、server_2。</li></li></ul>
 * @method LoginSettings getLoginSettings() 获取<p>实例登录设置。通过该参数可以设置实例的登录方式密码、密钥或保持镜像的原始登录设置。默认情况下会随机生成密码，并以站内信方式知会到用户。</p>
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置<p>实例登录设置。通过该参数可以设置实例的登录方式密码、密钥或保持镜像的原始登录设置。默认情况下会随机生成密码，并以站内信方式知会到用户。</p>
 * @method array getSecurityGroupIds() 获取<p>实例所属安全组。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的 <code>SecurityGroupId</code> 字段来获取。若不指定该参数，则绑定指定项目下的默认安全组，如默认安全组不存在则将自动创建。</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>实例所属安全组。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的 <code>SecurityGroupId</code> 字段来获取。若不指定该参数，则绑定指定项目下的默认安全组，如默认安全组不存在则将自动创建。</p>
 * @method EnhancedService getEnhancedService() 获取<p>增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认公共镜像开启云监控、云安全服务；自定义镜像与镜像市场镜像默认不开启云监控，云安全服务，而使用镜像里保留的服务。</p>
 * @method void setEnhancedService(EnhancedService $EnhancedService) 设置<p>增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认公共镜像开启云监控、云安全服务；自定义镜像与镜像市场镜像默认不开启云监控，云安全服务，而使用镜像里保留的服务。</p>
 * @method string getClientToken() 获取<p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
 * @method void setClientToken(string $ClientToken) 设置<p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
 * @method string getHostName() 获取<p>实例主机名。<br><li>点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</li><br><li>Windows 实例：主机名名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><br><li>其他类型（Linux 等）实例：主机名字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li><br><li>购买多台实例时：</p><ul><li>指定模式串  {R:x}：表示生成数字序列 [x, x+n-1]，其中 n为购买实例的数量。例如：输入 server_{R:3}，购买1台时，实例主机名为 server_3；购买2台时，实例主机名分别为 server_3、server_4。</li><li>指定模式串  {R:x,F:y}：y表示固定位数（可选），取值范围为 [0,8]，默认值 0表示不固定位数（等效于 {R:x}）。不足位时自动补零，例如：输入server_{R:3,F:3}，购买2台时，实例主机名为 server_003、server_004。若数字位数超过 y（如 {R:99,F:2}），以实际位数为准，例如：app_{R:99,F:2}，购买2台时，实例主机名为 app_99、app_100。</li><li>指定模式串 {IP}：自动替换为实例的内网IP地址。例如：输入 node-{IP}，实例主机名为 node-10.0.12.8；支持与序号模式串混合使用，例如：输入 web-{IP}-{R:1}，购买2台时，实例主机名分别为 web-10.0.12.8-1、web-10.0.12.9-2。</li><li>模式串需严格遵循 {R:x,F:y}、{R:x} 或 {IP} 格式，无效格式（如 {}）视为普通文本。支持多个模式串。</li><li>未指定模式串：实例主机名添加后缀 1、2...n，其中n表示购买实例的数量，例如 server_购买2台时生成 server_1、server_2。</li></li></ul>
 * @method void setHostName(string $HostName) 设置<p>实例主机名。<br><li>点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</li><br><li>Windows 实例：主机名名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><br><li>其他类型（Linux 等）实例：主机名字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li><br><li>购买多台实例时：</p><ul><li>指定模式串  {R:x}：表示生成数字序列 [x, x+n-1]，其中 n为购买实例的数量。例如：输入 server_{R:3}，购买1台时，实例主机名为 server_3；购买2台时，实例主机名分别为 server_3、server_4。</li><li>指定模式串  {R:x,F:y}：y表示固定位数（可选），取值范围为 [0,8]，默认值 0表示不固定位数（等效于 {R:x}）。不足位时自动补零，例如：输入server_{R:3,F:3}，购买2台时，实例主机名为 server_003、server_004。若数字位数超过 y（如 {R:99,F:2}），以实际位数为准，例如：app_{R:99,F:2}，购买2台时，实例主机名为 app_99、app_100。</li><li>指定模式串 {IP}：自动替换为实例的内网IP地址。例如：输入 node-{IP}，实例主机名为 node-10.0.12.8；支持与序号模式串混合使用，例如：输入 web-{IP}-{R:1}，购买2台时，实例主机名分别为 web-10.0.12.8-1、web-10.0.12.9-2。</li><li>模式串需严格遵循 {R:x,F:y}、{R:x} 或 {IP} 格式，无效格式（如 {}）视为普通文本。支持多个模式串。</li><li>未指定模式串：实例主机名添加后缀 1、2...n，其中n表示购买实例的数量，例如 server_购买2台时生成 server_1、server_2。</li></li></ul>
 * @method ActionTimer getActionTimer() 获取<p>定时任务。通过该参数可以为实例指定定时任务，目前仅支持定时销毁。</p>
 * @method void setActionTimer(ActionTimer $ActionTimer) 设置<p>定时任务。通过该参数可以为实例指定定时任务，目前仅支持定时销毁。</p>
 * @method array getDisasterRecoverGroupIds() 获取<p>置放群组id，仅支持指定一个。</p>
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) 设置<p>置放群组id，仅支持指定一个。</p>
 * @method array getTagSpecification() 获取<p>标签描述列表。通过指定该参数可以同时绑定标签到相应的云服务器、云硬盘实例。</p>
 * @method void setTagSpecification(array $TagSpecification) 设置<p>标签描述列表。通过指定该参数可以同时绑定标签到相应的云服务器、云硬盘实例。</p>
 * @method InstanceMarketOptionsRequest getInstanceMarketOptions() 获取<p>实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费但没有传递该参数时，默认按当前固定折扣价格出价。</p>
 * @method void setInstanceMarketOptions(InstanceMarketOptionsRequest $InstanceMarketOptions) 设置<p>实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费但没有传递该参数时，默认按当前固定折扣价格出价。</p>
 * @method string getUserData() 获取<p>提供给实例使用的用户数据，需要以 base64 方式编码，支持的最大数据大小为 16KB。关于获取此参数的详细介绍，请参阅<a href="https://cloud.tencent.com/document/product/213/17526">Windows</a>和<a href="https://cloud.tencent.com/document/product/213/17525">Linux</a>启动时运行命令。</p>
 * @method void setUserData(string $UserData) 设置<p>提供给实例使用的用户数据，需要以 base64 方式编码，支持的最大数据大小为 16KB。关于获取此参数的详细介绍，请参阅<a href="https://cloud.tencent.com/document/product/213/17526">Windows</a>和<a href="https://cloud.tencent.com/document/product/213/17525">Linux</a>启动时运行命令。</p>
 * @method Metadata getMetadata() 获取<p>自定义metadata，支持创建 CVM 时添加自定义元数据键值对。<br><strong>注：内测中</strong>。</p>
 * @method void setMetadata(Metadata $Metadata) 设置<p>自定义metadata，支持创建 CVM 时添加自定义元数据键值对。<br><strong>注：内测中</strong>。</p>
 * @method boolean getDryRun() 获取<p>是否只预检此次请求。<br>true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和云服务器库存。<br>如果检查不通过，则返回对应错误码；<br>如果检查通过，则返回RequestId.<br>false（默认）：发送正常请求，通过检查后直接创建实例</p>
 * @method void setDryRun(boolean $DryRun) 设置<p>是否只预检此次请求。<br>true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和云服务器库存。<br>如果检查不通过，则返回对应错误码；<br>如果检查通过，则返回RequestId.<br>false（默认）：发送正常请求，通过检查后直接创建实例</p>
 * @method CpuTopology getCpuTopology() 获取<p>描述了实例CPU拓扑结构的相关信息。若不指定该参数，则按系统资源情况决定。</p>
 * @method void setCpuTopology(CpuTopology $CpuTopology) 设置<p>描述了实例CPU拓扑结构的相关信息。若不指定该参数，则按系统资源情况决定。</p>
 * @method string getCamRoleName() 获取<p>CAM角色名称。可通过<a href="https://cloud.tencent.com/document/product/598/36223"> DescribeRoleList </a>接口返回值中的<code>RoleName</code>获取。</p>
 * @method void setCamRoleName(string $CamRoleName) 设置<p>CAM角色名称。可通过<a href="https://cloud.tencent.com/document/product/598/36223"> DescribeRoleList </a>接口返回值中的<code>RoleName</code>获取。</p>
 * @method string getHpcClusterId() 获取<p>高性能计算集群ID。若创建的实例为高性能计算实例，需指定实例放置的集群，否则不可指定。</p>
 * @method void setHpcClusterId(string $HpcClusterId) 设置<p>高性能计算集群ID。若创建的实例为高性能计算实例，需指定实例放置的集群，否则不可指定。</p>
 * @method LaunchTemplate getLaunchTemplate() 获取<p>实例启动模板。</p>
 * @method void setLaunchTemplate(LaunchTemplate $LaunchTemplate) 设置<p>实例启动模板。</p>
 * @method string getDedicatedClusterId() 获取<p>指定专用集群创建。</p>
 * @method void setDedicatedClusterId(string $DedicatedClusterId) 设置<p>指定专用集群创建。</p>
 * @method array getChcIds() 获取<p>指定CHC物理服务器来创建CHC云主机。</p>
 * @method void setChcIds(array $ChcIds) 设置<p>指定CHC物理服务器来创建CHC云主机。</p>
 * @method integer getPartitionNumber() 获取<p>分区置放群组的分区序号，具体取决于所选置放群组的分区数量，如果选中的置放群组是分区置放群组，该值不传默认随机。(功能灰度中)</p>
 * @method void setPartitionNumber(integer $PartitionNumber) 设置<p>分区置放群组的分区序号，具体取决于所选置放群组的分区数量，如果选中的置放群组是分区置放群组，该值不传默认随机。(功能灰度中)</p>
 * @method boolean getDisableApiTermination() 获取<p>实例销毁保护标志，表示是否允许通过api接口删除实例。取值范围：<br><li>true：表示开启实例保护，不允许通过api接口删除实例</li><br><li>false：表示关闭实例保护，允许通过api接口删除实例</li><br><br>默认取值：false。</p>
 * @method void setDisableApiTermination(boolean $DisableApiTermination) 设置<p>实例销毁保护标志，表示是否允许通过api接口删除实例。取值范围：<br><li>true：表示开启实例保护，不允许通过api接口删除实例</li><br><li>false：表示关闭实例保护，允许通过api接口删除实例</li><br><br>默认取值：false。</p>
 * @method boolean getEnableJumboFrame() 获取<p>实例是否开启巨型帧，取值范围：<br>&lt;li/&gt; true：表示实例开启巨型帧，只有支持巨型帧的机型可设置为true。<br>&lt;li/&gt;false：表示实例关闭巨型帧，只有支持巨型帧的机型可设置为false。<br> 支持巨型帧的实例规格： <a href="https://cloud.tencent.com/document/product/213/11518">实例规格</a></p>
 * @method void setEnableJumboFrame(boolean $EnableJumboFrame) 设置<p>实例是否开启巨型帧，取值范围：<br>&lt;li/&gt; true：表示实例开启巨型帧，只有支持巨型帧的机型可设置为true。<br>&lt;li/&gt;false：表示实例关闭巨型帧，只有支持巨型帧的机型可设置为false。<br> 支持巨型帧的实例规格： <a href="https://cloud.tencent.com/document/product/213/11518">实例规格</a></p>
 */
class RunInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>实例<a href="https://cloud.tencent.com/document/product/213/2180">计费类型</a>。<br><li>PREPAID：预付费，即包年包月</li><br><li>POSTPAID_BY_HOUR：按小时后付费</li><br><li>CDHPAID：独享子机（基于专用宿主机创建，宿主机部分的资源不收费）</li><br><li>SPOTPAID：竞价付费</li><br><li>CDCPAID：专用集群付费</li><br>默认值：POSTPAID_BY_HOUR。</p>
     */
    public $InstanceChargeType;

    /**
     * @var InstanceChargePrepaid <p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。</p>
     */
    public $InstanceChargePrepaid;

    /**
     * @var Placement <p>实例所在的位置。通过该参数可以指定实例所属可用区，所属项目，所属宿主机（在专用宿主机上创建子机时指定）等属性。<br> <b>注：如果您不指定LaunchTemplate参数，则Placement为必选参数。若同时传递Placement和LaunchTemplate，则默认覆盖LaunchTemplate中对应的Placement的值。</b></p>
     */
    public $Placement;

    /**
     * @var string <p>实例机型。不同实例机型指定了不同的资源规格。<br><br><li>对于付费模式为PREPAID或POSTPAID_BY_HOUR的实例创建，具体取值可通过调用接口<a href="https://cloud.tencent.com/document/api/213/15749">DescribeInstanceTypeConfigs</a>来获得最新的规格表或参见<a href="https://cloud.tencent.com/document/product/213/11518">实例规格</a>描述。若不指定该参数，则系统将根据当前地域的资源售卖情况动态指定默认机型。</li><br><li>对于付费模式为CDHPAID的实例创建，该参数以&quot;CDH_&quot;为前缀，根据CPU和内存配置生成，具体形式为：CDH_XCXG，例如对于创建CPU为1核，内存为1G大小的专用宿主机的实例，该参数应该为CDH_1C1G。</li></p>
     */
    public $InstanceType;

    /**
     * @var string <p>指定有效的<a href="https://cloud.tencent.com/document/product/213/4940">镜像</a>ID，格式形如<code>img-xxx</code>。镜像类型分为四种：<br><li>公共镜像</li><li>自定义镜像</li><li>共享镜像</li><li>服务市场镜像</li><br>可通过以下方式获取可用的镜像ID：<br><li><code>公共镜像</code>、<code>自定义镜像</code>、<code>共享镜像</code>的镜像ID可通过登录<a href="https://console.cloud.tencent.com/cvm/image?rid=1&amp;imageType=PUBLIC_IMAGE">控制台</a>查询；<code>服务镜像市场</code>的镜像ID可通过<a href="https://market.cloud.tencent.com/list">云市场</a>查询。</li><li>通过调用接口 <a href="https://cloud.tencent.com/document/api/213/15715">DescribeImages</a> ，传入InstanceType获取当前机型支持的镜像列表，取返回信息中的<code>ImageId</code>字段。</li><br> <b>注：如果您不指定LaunchTemplate参数，则ImageId为必选参数。若同时传递ImageId和LaunchTemplate，则默认覆盖LaunchTemplate中对应的ImageId的值。</b></p>
     */
    public $ImageId;

    /**
     * @var SystemDisk <p>实例系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。</p>
     */
    public $SystemDisk;

    /**
     * @var array <p>实例数据盘配置信息。若不指定该参数，则默认不购买数据盘。支持购买的时候指定21块数据盘，其中最多包含1块LOCAL_BASIC数据盘或者LOCAL_SSD数据盘，最多包含20块CLOUD_BASIC数据盘、CLOUD_PREMIUM数据盘或者CLOUD_SSD数据盘。</p>
     */
    public $DataDisks;

    /**
     * @var VirtualPrivateCloud <p>私有网络相关信息配置。通过该参数可以指定私有网络的ID，子网ID等信息。若在此参数中指定了私有网络IP，即表示每个实例的主网卡IP；同时，InstanceCount参数必须与私有网络IP的个数一致且不能大于20。</p>
     */
    public $VirtualPrivateCloud;

    /**
     * @var InternetAccessible <p>公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。</p>
     */
    public $InternetAccessible;

    /**
     * @var integer <p>购买实例数量。包年包月实例取值范围：[1，500]，按量计费实例取值范围：[1，500]。默认取值：1。指定购买实例的数量不能超过用户所能购买的剩余配额数量，具体配额相关限制详见<a href="https://cloud.tencent.com/document/product/213/2664">CVM实例购买限制</a>。</p>
     */
    public $InstanceCount;

    /**
     * @var integer <p>指定创建实例的最小数量，取值范围为不大于InstanceCount的正整数。<br>指定最小数量时，承诺最少创建MinCount台实例，并尽量创建InstanceCount台实例。<br>库存不足以满足最小数量时，API 会返回库存不足最小数量的错误信息。<br>仅对支持部分发货的账号、区域和计费模式（包年包月、按量计费、竞价实例、按量包销）生效。</p>
     */
    public $MinCount;

    /**
     * @var string <p>实例显示名称。<br><li>不指定实例显示名称则默认显示‘未命名’。</li><li>最多支持128个字符（含模式串）。</li><li>购买多台实例时：</p><ul><li>指定模式串  {R:x}：表示生成数字序列 [x, x+n-1]，其中 n为购买实例的数量。例如：输入 server_{R:3}，购买1台时，实例显示名称为 server_3；购买2台时，实例显示名称分别为 server_3、server_4。</li><li>指定模式串  {R:x,F:y}：y表示固定位数（可选），取值范围为 [0,8]，默认值 0表示不固定位数（等效于 {R:x}）。不足位时自动补零，例如：输入server_{R:3,F:3}，购买2台时，实例显示名称为 server_003、server_004。；若数字位数超过 y（如 {R:99,F:2}），以实际位数为准，例如：app_{R:99,F:2}，购买2台时，实例显示名称为 app_99、app_100。</li><li>模式串需严格遵循 {R:x,F:y}或 {R:x}格式，无效格式（如 {}）视为普通文本。支持多个模式串。</li><li>未指定模式串：实例显示名称添加后缀 1、2...n，其中n表示购买实例的数量，例如 server_购买2台时生成 server_1、server_2。</li></li></ul>
     */
    public $InstanceName;

    /**
     * @var LoginSettings <p>实例登录设置。通过该参数可以设置实例的登录方式密码、密钥或保持镜像的原始登录设置。默认情况下会随机生成密码，并以站内信方式知会到用户。</p>
     */
    public $LoginSettings;

    /**
     * @var array <p>实例所属安全组。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的 <code>SecurityGroupId</code> 字段来获取。若不指定该参数，则绑定指定项目下的默认安全组，如默认安全组不存在则将自动创建。</p>
     */
    public $SecurityGroupIds;

    /**
     * @var EnhancedService <p>增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认公共镜像开启云监控、云安全服务；自定义镜像与镜像市场镜像默认不开启云监控，云安全服务，而使用镜像里保留的服务。</p>
     */
    public $EnhancedService;

    /**
     * @var string <p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
     */
    public $ClientToken;

    /**
     * @var string <p>实例主机名。<br><li>点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</li><br><li>Windows 实例：主机名名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><br><li>其他类型（Linux 等）实例：主机名字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li><br><li>购买多台实例时：</p><ul><li>指定模式串  {R:x}：表示生成数字序列 [x, x+n-1]，其中 n为购买实例的数量。例如：输入 server_{R:3}，购买1台时，实例主机名为 server_3；购买2台时，实例主机名分别为 server_3、server_4。</li><li>指定模式串  {R:x,F:y}：y表示固定位数（可选），取值范围为 [0,8]，默认值 0表示不固定位数（等效于 {R:x}）。不足位时自动补零，例如：输入server_{R:3,F:3}，购买2台时，实例主机名为 server_003、server_004。若数字位数超过 y（如 {R:99,F:2}），以实际位数为准，例如：app_{R:99,F:2}，购买2台时，实例主机名为 app_99、app_100。</li><li>指定模式串 {IP}：自动替换为实例的内网IP地址。例如：输入 node-{IP}，实例主机名为 node-10.0.12.8；支持与序号模式串混合使用，例如：输入 web-{IP}-{R:1}，购买2台时，实例主机名分别为 web-10.0.12.8-1、web-10.0.12.9-2。</li><li>模式串需严格遵循 {R:x,F:y}、{R:x} 或 {IP} 格式，无效格式（如 {}）视为普通文本。支持多个模式串。</li><li>未指定模式串：实例主机名添加后缀 1、2...n，其中n表示购买实例的数量，例如 server_购买2台时生成 server_1、server_2。</li></li></ul>
     */
    public $HostName;

    /**
     * @var ActionTimer <p>定时任务。通过该参数可以为实例指定定时任务，目前仅支持定时销毁。</p>
     */
    public $ActionTimer;

    /**
     * @var array <p>置放群组id，仅支持指定一个。</p>
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var array <p>标签描述列表。通过指定该参数可以同时绑定标签到相应的云服务器、云硬盘实例。</p>
     */
    public $TagSpecification;

    /**
     * @var InstanceMarketOptionsRequest <p>实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费但没有传递该参数时，默认按当前固定折扣价格出价。</p>
     */
    public $InstanceMarketOptions;

    /**
     * @var string <p>提供给实例使用的用户数据，需要以 base64 方式编码，支持的最大数据大小为 16KB。关于获取此参数的详细介绍，请参阅<a href="https://cloud.tencent.com/document/product/213/17526">Windows</a>和<a href="https://cloud.tencent.com/document/product/213/17525">Linux</a>启动时运行命令。</p>
     */
    public $UserData;

    /**
     * @var Metadata <p>自定义metadata，支持创建 CVM 时添加自定义元数据键值对。<br><strong>注：内测中</strong>。</p>
     */
    public $Metadata;

    /**
     * @var boolean <p>是否只预检此次请求。<br>true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和云服务器库存。<br>如果检查不通过，则返回对应错误码；<br>如果检查通过，则返回RequestId.<br>false（默认）：发送正常请求，通过检查后直接创建实例</p>
     */
    public $DryRun;

    /**
     * @var CpuTopology <p>描述了实例CPU拓扑结构的相关信息。若不指定该参数，则按系统资源情况决定。</p>
     */
    public $CpuTopology;

    /**
     * @var string <p>CAM角色名称。可通过<a href="https://cloud.tencent.com/document/product/598/36223"> DescribeRoleList </a>接口返回值中的<code>RoleName</code>获取。</p>
     */
    public $CamRoleName;

    /**
     * @var string <p>高性能计算集群ID。若创建的实例为高性能计算实例，需指定实例放置的集群，否则不可指定。</p>
     */
    public $HpcClusterId;

    /**
     * @var LaunchTemplate <p>实例启动模板。</p>
     */
    public $LaunchTemplate;

    /**
     * @var string <p>指定专用集群创建。</p>
     */
    public $DedicatedClusterId;

    /**
     * @var array <p>指定CHC物理服务器来创建CHC云主机。</p>
     */
    public $ChcIds;

    /**
     * @var integer <p>分区置放群组的分区序号，具体取决于所选置放群组的分区数量，如果选中的置放群组是分区置放群组，该值不传默认随机。(功能灰度中)</p>
     */
    public $PartitionNumber;

    /**
     * @var boolean <p>实例销毁保护标志，表示是否允许通过api接口删除实例。取值范围：<br><li>true：表示开启实例保护，不允许通过api接口删除实例</li><br><li>false：表示关闭实例保护，允许通过api接口删除实例</li><br><br>默认取值：false。</p>
     */
    public $DisableApiTermination;

    /**
     * @var boolean <p>实例是否开启巨型帧，取值范围：<br>&lt;li/&gt; true：表示实例开启巨型帧，只有支持巨型帧的机型可设置为true。<br>&lt;li/&gt;false：表示实例关闭巨型帧，只有支持巨型帧的机型可设置为false。<br> 支持巨型帧的实例规格： <a href="https://cloud.tencent.com/document/product/213/11518">实例规格</a></p>
     */
    public $EnableJumboFrame;

    /**
     * @param string $InstanceChargeType <p>实例<a href="https://cloud.tencent.com/document/product/213/2180">计费类型</a>。<br><li>PREPAID：预付费，即包年包月</li><br><li>POSTPAID_BY_HOUR：按小时后付费</li><br><li>CDHPAID：独享子机（基于专用宿主机创建，宿主机部分的资源不收费）</li><br><li>SPOTPAID：竞价付费</li><br><li>CDCPAID：专用集群付费</li><br>默认值：POSTPAID_BY_HOUR。</p>
     * @param InstanceChargePrepaid $InstanceChargePrepaid <p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。</p>
     * @param Placement $Placement <p>实例所在的位置。通过该参数可以指定实例所属可用区，所属项目，所属宿主机（在专用宿主机上创建子机时指定）等属性。<br> <b>注：如果您不指定LaunchTemplate参数，则Placement为必选参数。若同时传递Placement和LaunchTemplate，则默认覆盖LaunchTemplate中对应的Placement的值。</b></p>
     * @param string $InstanceType <p>实例机型。不同实例机型指定了不同的资源规格。<br><br><li>对于付费模式为PREPAID或POSTPAID_BY_HOUR的实例创建，具体取值可通过调用接口<a href="https://cloud.tencent.com/document/api/213/15749">DescribeInstanceTypeConfigs</a>来获得最新的规格表或参见<a href="https://cloud.tencent.com/document/product/213/11518">实例规格</a>描述。若不指定该参数，则系统将根据当前地域的资源售卖情况动态指定默认机型。</li><br><li>对于付费模式为CDHPAID的实例创建，该参数以&quot;CDH_&quot;为前缀，根据CPU和内存配置生成，具体形式为：CDH_XCXG，例如对于创建CPU为1核，内存为1G大小的专用宿主机的实例，该参数应该为CDH_1C1G。</li></p>
     * @param string $ImageId <p>指定有效的<a href="https://cloud.tencent.com/document/product/213/4940">镜像</a>ID，格式形如<code>img-xxx</code>。镜像类型分为四种：<br><li>公共镜像</li><li>自定义镜像</li><li>共享镜像</li><li>服务市场镜像</li><br>可通过以下方式获取可用的镜像ID：<br><li><code>公共镜像</code>、<code>自定义镜像</code>、<code>共享镜像</code>的镜像ID可通过登录<a href="https://console.cloud.tencent.com/cvm/image?rid=1&amp;imageType=PUBLIC_IMAGE">控制台</a>查询；<code>服务镜像市场</code>的镜像ID可通过<a href="https://market.cloud.tencent.com/list">云市场</a>查询。</li><li>通过调用接口 <a href="https://cloud.tencent.com/document/api/213/15715">DescribeImages</a> ，传入InstanceType获取当前机型支持的镜像列表，取返回信息中的<code>ImageId</code>字段。</li><br> <b>注：如果您不指定LaunchTemplate参数，则ImageId为必选参数。若同时传递ImageId和LaunchTemplate，则默认覆盖LaunchTemplate中对应的ImageId的值。</b></p>
     * @param SystemDisk $SystemDisk <p>实例系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。</p>
     * @param array $DataDisks <p>实例数据盘配置信息。若不指定该参数，则默认不购买数据盘。支持购买的时候指定21块数据盘，其中最多包含1块LOCAL_BASIC数据盘或者LOCAL_SSD数据盘，最多包含20块CLOUD_BASIC数据盘、CLOUD_PREMIUM数据盘或者CLOUD_SSD数据盘。</p>
     * @param VirtualPrivateCloud $VirtualPrivateCloud <p>私有网络相关信息配置。通过该参数可以指定私有网络的ID，子网ID等信息。若在此参数中指定了私有网络IP，即表示每个实例的主网卡IP；同时，InstanceCount参数必须与私有网络IP的个数一致且不能大于20。</p>
     * @param InternetAccessible $InternetAccessible <p>公网带宽相关信息设置。若不指定该参数，则默认公网带宽为0Mbps。</p>
     * @param integer $InstanceCount <p>购买实例数量。包年包月实例取值范围：[1，500]，按量计费实例取值范围：[1，500]。默认取值：1。指定购买实例的数量不能超过用户所能购买的剩余配额数量，具体配额相关限制详见<a href="https://cloud.tencent.com/document/product/213/2664">CVM实例购买限制</a>。</p>
     * @param integer $MinCount <p>指定创建实例的最小数量，取值范围为不大于InstanceCount的正整数。<br>指定最小数量时，承诺最少创建MinCount台实例，并尽量创建InstanceCount台实例。<br>库存不足以满足最小数量时，API 会返回库存不足最小数量的错误信息。<br>仅对支持部分发货的账号、区域和计费模式（包年包月、按量计费、竞价实例、按量包销）生效。</p>
     * @param string $InstanceName <p>实例显示名称。<br><li>不指定实例显示名称则默认显示‘未命名’。</li><li>最多支持128个字符（含模式串）。</li><li>购买多台实例时：</p><ul><li>指定模式串  {R:x}：表示生成数字序列 [x, x+n-1]，其中 n为购买实例的数量。例如：输入 server_{R:3}，购买1台时，实例显示名称为 server_3；购买2台时，实例显示名称分别为 server_3、server_4。</li><li>指定模式串  {R:x,F:y}：y表示固定位数（可选），取值范围为 [0,8]，默认值 0表示不固定位数（等效于 {R:x}）。不足位时自动补零，例如：输入server_{R:3,F:3}，购买2台时，实例显示名称为 server_003、server_004。；若数字位数超过 y（如 {R:99,F:2}），以实际位数为准，例如：app_{R:99,F:2}，购买2台时，实例显示名称为 app_99、app_100。</li><li>模式串需严格遵循 {R:x,F:y}或 {R:x}格式，无效格式（如 {}）视为普通文本。支持多个模式串。</li><li>未指定模式串：实例显示名称添加后缀 1、2...n，其中n表示购买实例的数量，例如 server_购买2台时生成 server_1、server_2。</li></li></ul>
     * @param LoginSettings $LoginSettings <p>实例登录设置。通过该参数可以设置实例的登录方式密码、密钥或保持镜像的原始登录设置。默认情况下会随机生成密码，并以站内信方式知会到用户。</p>
     * @param array $SecurityGroupIds <p>实例所属安全组。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的 <code>SecurityGroupId</code> 字段来获取。若不指定该参数，则绑定指定项目下的默认安全组，如默认安全组不存在则将自动创建。</p>
     * @param EnhancedService $EnhancedService <p>增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认公共镜像开启云监控、云安全服务；自定义镜像与镜像市场镜像默认不开启云监控，云安全服务，而使用镜像里保留的服务。</p>
     * @param string $ClientToken <p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
     * @param string $HostName <p>实例主机名。<br><li>点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</li><br><li>Windows 实例：主机名名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><br><li>其他类型（Linux 等）实例：主机名字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li><br><li>购买多台实例时：</p><ul><li>指定模式串  {R:x}：表示生成数字序列 [x, x+n-1]，其中 n为购买实例的数量。例如：输入 server_{R:3}，购买1台时，实例主机名为 server_3；购买2台时，实例主机名分别为 server_3、server_4。</li><li>指定模式串  {R:x,F:y}：y表示固定位数（可选），取值范围为 [0,8]，默认值 0表示不固定位数（等效于 {R:x}）。不足位时自动补零，例如：输入server_{R:3,F:3}，购买2台时，实例主机名为 server_003、server_004。若数字位数超过 y（如 {R:99,F:2}），以实际位数为准，例如：app_{R:99,F:2}，购买2台时，实例主机名为 app_99、app_100。</li><li>指定模式串 {IP}：自动替换为实例的内网IP地址。例如：输入 node-{IP}，实例主机名为 node-10.0.12.8；支持与序号模式串混合使用，例如：输入 web-{IP}-{R:1}，购买2台时，实例主机名分别为 web-10.0.12.8-1、web-10.0.12.9-2。</li><li>模式串需严格遵循 {R:x,F:y}、{R:x} 或 {IP} 格式，无效格式（如 {}）视为普通文本。支持多个模式串。</li><li>未指定模式串：实例主机名添加后缀 1、2...n，其中n表示购买实例的数量，例如 server_购买2台时生成 server_1、server_2。</li></li></ul>
     * @param ActionTimer $ActionTimer <p>定时任务。通过该参数可以为实例指定定时任务，目前仅支持定时销毁。</p>
     * @param array $DisasterRecoverGroupIds <p>置放群组id，仅支持指定一个。</p>
     * @param array $TagSpecification <p>标签描述列表。通过指定该参数可以同时绑定标签到相应的云服务器、云硬盘实例。</p>
     * @param InstanceMarketOptionsRequest $InstanceMarketOptions <p>实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费但没有传递该参数时，默认按当前固定折扣价格出价。</p>
     * @param string $UserData <p>提供给实例使用的用户数据，需要以 base64 方式编码，支持的最大数据大小为 16KB。关于获取此参数的详细介绍，请参阅<a href="https://cloud.tencent.com/document/product/213/17526">Windows</a>和<a href="https://cloud.tencent.com/document/product/213/17525">Linux</a>启动时运行命令。</p>
     * @param Metadata $Metadata <p>自定义metadata，支持创建 CVM 时添加自定义元数据键值对。<br><strong>注：内测中</strong>。</p>
     * @param boolean $DryRun <p>是否只预检此次请求。<br>true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和云服务器库存。<br>如果检查不通过，则返回对应错误码；<br>如果检查通过，则返回RequestId.<br>false（默认）：发送正常请求，通过检查后直接创建实例</p>
     * @param CpuTopology $CpuTopology <p>描述了实例CPU拓扑结构的相关信息。若不指定该参数，则按系统资源情况决定。</p>
     * @param string $CamRoleName <p>CAM角色名称。可通过<a href="https://cloud.tencent.com/document/product/598/36223"> DescribeRoleList </a>接口返回值中的<code>RoleName</code>获取。</p>
     * @param string $HpcClusterId <p>高性能计算集群ID。若创建的实例为高性能计算实例，需指定实例放置的集群，否则不可指定。</p>
     * @param LaunchTemplate $LaunchTemplate <p>实例启动模板。</p>
     * @param string $DedicatedClusterId <p>指定专用集群创建。</p>
     * @param array $ChcIds <p>指定CHC物理服务器来创建CHC云主机。</p>
     * @param integer $PartitionNumber <p>分区置放群组的分区序号，具体取决于所选置放群组的分区数量，如果选中的置放群组是分区置放群组，该值不传默认随机。(功能灰度中)</p>
     * @param boolean $DisableApiTermination <p>实例销毁保护标志，表示是否允许通过api接口删除实例。取值范围：<br><li>true：表示开启实例保护，不允许通过api接口删除实例</li><br><li>false：表示关闭实例保护，允许通过api接口删除实例</li><br><br>默认取值：false。</p>
     * @param boolean $EnableJumboFrame <p>实例是否开启巨型帧，取值范围：<br>&lt;li/&gt; true：表示实例开启巨型帧，只有支持巨型帧的机型可设置为true。<br>&lt;li/&gt;false：表示实例关闭巨型帧，只有支持巨型帧的机型可设置为false。<br> 支持巨型帧的实例规格： <a href="https://cloud.tencent.com/document/product/213/11518">实例规格</a></p>
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
        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
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

        if (array_key_exists("MinCount",$param) and $param["MinCount"] !== null) {
            $this->MinCount = $param["MinCount"];
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

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = new Metadata();
            $this->Metadata->deserialize($param["Metadata"]);
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("CpuTopology",$param) and $param["CpuTopology"] !== null) {
            $this->CpuTopology = new CpuTopology();
            $this->CpuTopology->deserialize($param["CpuTopology"]);
        }

        if (array_key_exists("CamRoleName",$param) and $param["CamRoleName"] !== null) {
            $this->CamRoleName = $param["CamRoleName"];
        }

        if (array_key_exists("HpcClusterId",$param) and $param["HpcClusterId"] !== null) {
            $this->HpcClusterId = $param["HpcClusterId"];
        }

        if (array_key_exists("LaunchTemplate",$param) and $param["LaunchTemplate"] !== null) {
            $this->LaunchTemplate = new LaunchTemplate();
            $this->LaunchTemplate->deserialize($param["LaunchTemplate"]);
        }

        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }

        if (array_key_exists("ChcIds",$param) and $param["ChcIds"] !== null) {
            $this->ChcIds = $param["ChcIds"];
        }

        if (array_key_exists("PartitionNumber",$param) and $param["PartitionNumber"] !== null) {
            $this->PartitionNumber = $param["PartitionNumber"];
        }

        if (array_key_exists("DisableApiTermination",$param) and $param["DisableApiTermination"] !== null) {
            $this->DisableApiTermination = $param["DisableApiTermination"];
        }

        if (array_key_exists("EnableJumboFrame",$param) and $param["EnableJumboFrame"] !== null) {
            $this->EnableJumboFrame = $param["EnableJumboFrame"];
        }
    }
}
