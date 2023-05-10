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

namespace TencentCloud\Lighthouse\V20200324;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Lighthouse\V20200324\Models as Models;

/**
 * @method Models\ApplyDiskBackupResponse ApplyDiskBackup(Models\ApplyDiskBackupRequest $req) 本接口（ApplyDiskBackup）用于回滚指定云硬盘的备份点。
* 仅支持回滚到原云硬盘。
* 用于回滚的云硬盘备份点必须处于 NORMAL 状态。
  云硬盘备份点状态可以通过  [DescribeDiskBackups](https://cloud.tencent.com/document/api/1207/84379) 接口查询。
* 回滚云硬盘备份点时，云硬盘的状态必须为 UNATTACHED或ATTACHED。
  云硬盘状态可通过 [DescribeDisks](https://cloud.tencent.com/document/api/1207/66093) 接口查询。
* 如果云硬盘处于 ATTACHED状态，相关RUNNING 状态的实例会强制关机，然后回滚云硬盘备份点。
 * @method Models\ApplyInstanceSnapshotResponse ApplyInstanceSnapshot(Models\ApplyInstanceSnapshotRequest $req) 本接口（ApplyInstanceSnapshot）用于回滚指定实例的系统盘快照。
<li>仅支持回滚到原系统盘。</li>
<li>用于回滚的快照必须处于 NORMAL 状态。快照状态可以通 DescribeSnapshots 接口查询，见输出参数中 SnapshotState 字段解释。</li>
<li>回滚快照时，实例的状态必须为 STOPPED 或 RUNNING，可通过 DescribeInstances 接口查询实例状态。处于 RUNNING 状态的实例会强制关机，然后回滚快照。</li>
 * @method Models\AssociateInstancesKeyPairsResponse AssociateInstancesKeyPairs(Models\AssociateInstancesKeyPairsRequest $req) 本接口（AssociateInstancesKeyPairs）用于绑定用户指定密钥对到实例。
* 只支持 [RUNNING, STOPPED] 状态的 LINUX_UNIX 操作系统的实例。处于 RUNNING 状态的实例会强制关机，然后绑定。
* 将密钥的公钥写入到实例的 SSH 配置当中，用户就可以通过该密钥的私钥来登录实例。
* 如果实例原来绑定过密钥，那么原来的密钥将失效。
* 如果实例原来是通过密码登录，绑定密钥后无法使用密码登录。
* 支持批量操作。每次请求批量实例的上限为 100。如果批量实例存在不允许操作的实例，操作会以特定错误码返回。
* 本接口为异步接口，请求发送成功后会返回一个 RequestId，此时操作并未立即完成。实例操作结果可以通过调用 DescribeInstances 接口查询，如果实例的最新操作状态（LatestOperationState）为“SUCCESS”，则代表操作成功。
 * @method Models\AttachCcnResponse AttachCcn(Models\AttachCcnRequest $req) 本接口 (AttachCcn) 用于建立与云联网的关联。
 * @method Models\AttachDisksResponse AttachDisks(Models\AttachDisksRequest $req) 本接口（AttachDisks）用于挂载一个或多个云硬盘。
 * @method Models\CreateBlueprintResponse CreateBlueprint(Models\CreateBlueprintRequest $req) 本接口 (CreateBlueprint) 用于创建镜像。
 * @method Models\CreateDiskBackupResponse CreateDiskBackup(Models\CreateDiskBackupRequest $req) 本接口 ( CreateDiskBackup  ) 用于创建指定云硬盘（当前只支持数据盘）的备份点。
 * @method Models\CreateDisksResponse CreateDisks(Models\CreateDisksRequest $req) 本接口(CreateDisks)用于创建一个或多个云硬盘。
 * @method Models\CreateFirewallRulesResponse CreateFirewallRules(Models\CreateFirewallRulesRequest $req) 本接口（CreateFirewallRules）用于在实例上添加防火墙规则。


* FirewallVersion 为防火墙版本号，用户每次更新防火墙规则版本会自动加1，防止您更新的规则已过期，不填不考虑冲突。

在 FirewallRules 参数中：
* Protocol 字段支持输入 TCP，UDP，ICMP，ALL。
* Port 字段允许输入 ALL，或者一个单独的端口号，或者用逗号分隔的离散端口号，或者用减号分隔的两个端口号代表的端口范围。当 Port 为范围时，减号分隔的第一个端口号小于第二个端口号。当 Protocol 字段不是 TCP 或 UDP 时，Port 字段只能为空或 ALL。Port 字段长度不得超过 64。
* CidrBlock 字段允许输入符合 cidr 格式标准的任意字符串。租户之间网络隔离规则优先于防火墙中的内网规则。
* Action 字段只允许输入 ACCEPT 或 DROP。
* FirewallRuleDescription 字段长度不得超过 64。
 * @method Models\CreateInstanceSnapshotResponse CreateInstanceSnapshot(Models\CreateInstanceSnapshotRequest $req) 本接口（CreateInstanceSnapshot）用于创建指定实例的系统盘快照。
 * @method Models\CreateInstancesResponse CreateInstances(Models\CreateInstancesRequest $req) 本接口(CreateInstances)用于创建一个或多个指定套餐的轻量应用服务器实例。
 * @method Models\CreateKeyPairResponse CreateKeyPair(Models\CreateKeyPairRequest $req) 本接口（CreateKeyPair）用于创建一个密钥对。
 * @method Models\DeleteBlueprintsResponse DeleteBlueprints(Models\DeleteBlueprintsRequest $req) 本接口 (DeleteBlueprints) 用于删除镜像。
 * @method Models\DeleteDiskBackupsResponse DeleteDiskBackups(Models\DeleteDiskBackupsRequest $req) 本接口（DeleteDiskBackups）用于删除云硬盘备份点。
云硬盘备份点必须处于 NORMAL 状态，云硬盘备份点状态可以通过 [DescribeDiskBackups](https://cloud.tencent.com/document/api/1207/84379)接口查询，见输出参数中 DiskBackupState 字段解释。
 * @method Models\DeleteFirewallRulesResponse DeleteFirewallRules(Models\DeleteFirewallRulesRequest $req) 本接口（DeleteFirewallRules）用于删除实例的防火墙规则。

* FirewallVersion 用于指定要操作的防火墙的版本。传入 FirewallVersion 版本号若不等于当前防火墙的最新版本，将返回失败；若不传 FirewallVersion 则直接删除指定的规则。

在 FirewallRules 参数中：
* Protocol 字段支持输入 TCP，UDP，ICMP，ALL。
* Port 字段允许输入 ALL，或者一个单独的端口号，或者用逗号分隔的离散端口号，或者用减号分隔的两个端口号代表的端口范围。当 Port 为范围时，减号分隔的第一个端口号小于第二个端口号。当 Protocol 字段不是 TCP 或 UDP 时，Port 字段只能为空或 ALL。Port 字段长度不得超过 64。
* CidrBlock 字段允许输入符合 cidr 格式标准的任意字符串。租户之间网络隔离规则优先于防火墙中的内网规则。
* Action 字段只允许输入 ACCEPT 或 DROP。
* FirewallRuleDescription 字段长度不得超过 64。
 * @method Models\DeleteKeyPairsResponse DeleteKeyPairs(Models\DeleteKeyPairsRequest $req) 本接口（DeleteKeyPairs）用于删除密钥对。
 * @method Models\DeleteSnapshotsResponse DeleteSnapshots(Models\DeleteSnapshotsRequest $req) 本接口（DeleteSnapshots）用于删除快照。
快照必须处于 NORMAL 状态，快照状态可以通过 DescribeSnapshots 接口查询，见输出参数中 SnapshotState 字段解释。
 * @method Models\DescribeAllScenesResponse DescribeAllScenes(Models\DescribeAllScenesRequest $req) 本接口(DescribeAllScenes)用于查询全地域使用场景列表。
 * @method Models\DescribeBlueprintInstancesResponse DescribeBlueprintInstances(Models\DescribeBlueprintInstancesRequest $req) 本接口（DescribeBlueprintInstances）用于查询镜像实例信息。
 * @method Models\DescribeBlueprintsResponse DescribeBlueprints(Models\DescribeBlueprintsRequest $req) 本接口（DescribeBlueprints）用于查询镜像信息。
 * @method Models\DescribeBundleDiscountResponse DescribeBundleDiscount(Models\DescribeBundleDiscountRequest $req) 本接口（DescribeBundleDiscount）用于查询套餐折扣信息。
 * @method Models\DescribeBundlesResponse DescribeBundles(Models\DescribeBundlesRequest $req) 本接口（DescribeBundles）用于查询套餐信息。
 * @method Models\DescribeCcnAttachedInstancesResponse DescribeCcnAttachedInstances(Models\DescribeCcnAttachedInstancesRequest $req) 本接口 (DescribeCcnAttachedInstances) 用于查询云联网关联的实例信息。
 * @method Models\DescribeDiskBackupsResponse DescribeDiskBackups(Models\DescribeDiskBackupsRequest $req) 本接口（DescribeDiskBackups）用于查询云硬盘备份点的详细信息。
 * @method Models\DescribeDiskBackupsDeniedActionsResponse DescribeDiskBackupsDeniedActions(Models\DescribeDiskBackupsDeniedActionsRequest $req) 本接口（DescribeDiskBackupsDeniedActions）用于查询一个或多个云硬盘备份点的操作限制列表信息。
 * @method Models\DescribeDiskConfigsResponse DescribeDiskConfigs(Models\DescribeDiskConfigsRequest $req) 本接口（DescribeDiskConfigs）用于查询云硬盘配置。
 * @method Models\DescribeDiskDiscountResponse DescribeDiskDiscount(Models\DescribeDiskDiscountRequest $req) 本接口(DescribeDiskDiscount)用于查询云硬盘折扣信息。
 * @method Models\DescribeDisksResponse DescribeDisks(Models\DescribeDisksRequest $req) 本接口（DescribeDisks）用于查询云硬盘信息。
 * @method Models\DescribeDisksDeniedActionsResponse DescribeDisksDeniedActions(Models\DescribeDisksDeniedActionsRequest $req) 本接口（DescribeDisksDeniedActions）用于查询一个或多个云硬盘的操作限制列表信息。
 * @method Models\DescribeDisksReturnableResponse DescribeDisksReturnable(Models\DescribeDisksReturnableRequest $req) 本接口（DescribeDisksReturnable）用于查询云硬盘是否可退还。
 * @method Models\DescribeFirewallRulesResponse DescribeFirewallRules(Models\DescribeFirewallRulesRequest $req) 本接口（DescribeFirewallRules）用于查询实例的防火墙规则。
 * @method Models\DescribeFirewallRulesTemplateResponse DescribeFirewallRulesTemplate(Models\DescribeFirewallRulesTemplateRequest $req) 本接口（DescribeFirewallRulesTemplate）用于查询防火墙规则模板。
 * @method Models\DescribeGeneralResourceQuotasResponse DescribeGeneralResourceQuotas(Models\DescribeGeneralResourceQuotasRequest $req) 本接口（DescribeGeneralResourceQuotas）用于查询通用资源配额信息。
 * @method Models\DescribeInstanceLoginKeyPairAttributeResponse DescribeInstanceLoginKeyPairAttribute(Models\DescribeInstanceLoginKeyPairAttributeRequest $req) 本接口用于查询实例默认登录密钥属性。
 * @method Models\DescribeInstanceVncUrlResponse DescribeInstanceVncUrl(Models\DescribeInstanceVncUrlRequest $req) 本接口 ( DescribeInstanceVncUrl ) 用于查询实例管理终端地址，获取的地址可用于实例的 VNC 登录。

* 处于 `STOPPED` 状态的机器无法使用此功能。
* 管理终端地址的有效期为 15 秒，调用接口成功后如果 15 秒内不使用该链接进行访问，管理终端地址自动失效，您需要重新查询。
* 管理终端地址一旦被访问，将自动失效，您需要重新查询。
* 如果连接断开，每分钟内重新连接的次数不能超过 30 次。
* 参数 `InstanceVncUrl` ：调用接口成功后会返回的 `InstanceVncUrl` 的值。
获取到 `InstanceVncUrl` 后，您需要在链接 `https://img.qcloud.com/qcloud/app/active_vnc/index.html?` 末尾加上参数 `InstanceVncUrl=xxxx`。
 最后组成的 URL 格式如下：

```
https://img.qcloud.com/qcloud/app/active_vnc/index.html?InstanceVncUrl=wss%3A%2F%2Fbjvnc.qcloud.com%3A26789%2Fvnc%3Fs%3DaHpjWnRVMFNhYmxKdDM5MjRHNlVTSVQwajNUSW0wb2tBbmFtREFCTmFrcy8vUUNPMG0wSHZNOUUxRm5PMmUzWmFDcWlOdDJIbUJxSTZDL0RXcHZxYnZZMmRkWWZWcEZia2lyb09XMzdKNmM9
```

 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 本接口（DescribeInstances）用于查询一个或多个实例的详细信息。

* 可以根据实例 ID、实例名称或者实例的内网 IP 查询实例的详细信息。
* 过滤信息详细请见过滤器 [Filters](https://cloud.tencent.com/document/product/1207/47576#Filter) 。
* 如果参数为空，返回当前用户一定数量（Limit 所指定的数量，默认为 20）的实例。
* 支持查询实例的最新操作（LatestOperation）以及最新操作状态（LatestOperationState）。
 * @method Models\DescribeInstancesDeniedActionsResponse DescribeInstancesDeniedActions(Models\DescribeInstancesDeniedActionsRequest $req) 本接口（DescribeInstancesDeniedActions）用于查询一个或多个实例的操作限制列表信息。
 * @method Models\DescribeInstancesDiskNumResponse DescribeInstancesDiskNum(Models\DescribeInstancesDiskNumRequest $req) 本接口(DescribeInstancesDiskNum)用于查询实例挂载云硬盘数量。
 * @method Models\DescribeInstancesReturnableResponse DescribeInstancesReturnable(Models\DescribeInstancesReturnableRequest $req) 本接口（DescribeInstancesReturnable）用于查询实例是否可退还。
 * @method Models\DescribeInstancesTrafficPackagesResponse DescribeInstancesTrafficPackages(Models\DescribeInstancesTrafficPackagesRequest $req) 本接口（DescribeInstancesTrafficPackages）用于查询一个或多个实例的流量包详情。
 * @method Models\DescribeKeyPairsResponse DescribeKeyPairs(Models\DescribeKeyPairsRequest $req) 本接口 (DescribeKeyPairs) 用于查询用户密钥对信息。
 * @method Models\DescribeModifyInstanceBundlesResponse DescribeModifyInstanceBundles(Models\DescribeModifyInstanceBundlesRequest $req) 本接口（DescribeModifyInstanceBundles）用于查询实例可变更套餐列表。
 * @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) 本接口（DescribeRegions）用于查询地域信息。
 * @method Models\DescribeResetInstanceBlueprintsResponse DescribeResetInstanceBlueprints(Models\DescribeResetInstanceBlueprintsRequest $req) 本接口（DescribeResetInstanceBlueprints）查询重置实例的镜像信息。
 * @method Models\DescribeScenesResponse DescribeScenes(Models\DescribeScenesRequest $req) 本接口(DescribeScenes)用于查看使用场景列表。
 * @method Models\DescribeSnapshotsResponse DescribeSnapshots(Models\DescribeSnapshotsRequest $req) 本接口（DescribeSnapshots）用于查询快照的详细信息。
 * @method Models\DescribeSnapshotsDeniedActionsResponse DescribeSnapshotsDeniedActions(Models\DescribeSnapshotsDeniedActionsRequest $req) 本接口（DescribeSnapshotsDeniedActions）用于查询一个或多个快照的操作限制列表信息。
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) 查询地域下可用区
 * @method Models\DetachCcnResponse DetachCcn(Models\DetachCcnRequest $req) 本接口 (AttachCcn) 用于解除与云联网的关联。
 * @method Models\DetachDisksResponse DetachDisks(Models\DetachDisksRequest $req) 本接口（DetachDisks）用于卸载一个或多个云硬盘。
 * @method Models\DisassociateInstancesKeyPairsResponse DisassociateInstancesKeyPairs(Models\DisassociateInstancesKeyPairsRequest $req) 本接口（DisassociateInstancesKeyPairs）用于解除实例与指定密钥对的绑定关系。

* 只支持 [RUNNING, STOPPED] 状态的 LINUX_UNIX 操作系统的实例。处于 RUNNING 状态的实例会强制关机，然后解绑。
* 解绑密钥后，实例可以通过原来设置的密码登录。
* 如果原来没有设置密码，解绑后将无法使用 SSH 登录。可以调用 ResetInstancesPassword 接口来设置登录密码。
* 支持批量操作。每次请求批量实例的上限为 100。
* 本接口为异步接口，请求发送成功后会返回一个 RequestId，此时操作并未立即完成。实例操作结果可以通过调用 DescribeInstances 接口查询，如果实例的最新操作状态（LatestOperationState）为“SUCCESS”，则代表操作成功。
 * @method Models\ImportKeyPairResponse ImportKeyPair(Models\ImportKeyPairRequest $req) 本接口（ImportKeyPair）用于导入用户指定密钥对。
 * @method Models\InquirePriceCreateBlueprintResponse InquirePriceCreateBlueprint(Models\InquirePriceCreateBlueprintRequest $req) 本接口 (InquirePriceCreateBlueprint) 用于创建镜像询价。
 * @method Models\InquirePriceCreateDisksResponse InquirePriceCreateDisks(Models\InquirePriceCreateDisksRequest $req) 本接口（InquirePriceCreateDisks）用于新购云硬盘询价。
 * @method Models\InquirePriceCreateInstancesResponse InquirePriceCreateInstances(Models\InquirePriceCreateInstancesRequest $req) 本接口（InquiryPriceCreateInstances）用于创建实例询价。
 * @method Models\InquirePriceRenewDisksResponse InquirePriceRenewDisks(Models\InquirePriceRenewDisksRequest $req) 本接口（InquirePriceRenewDisks）用于续费云硬盘询价。
 * @method Models\InquirePriceRenewInstancesResponse InquirePriceRenewInstances(Models\InquirePriceRenewInstancesRequest $req) 本接口（InquirePriceRenewInstances）用于续费实例询价。
 * @method Models\IsolateDisksResponse IsolateDisks(Models\IsolateDisksRequest $req) 本接口(IsolateDisks)用于退还一个或多个轻量应用服务器云硬盘。

只有状态为 UNATTACHED 的数据盘才可以进行此操作。
接口调用成功后，云硬盘会进入SHUTDOWN 状态。
支持批量操作。每次请求批量资源的上限为 20。
本接口为异步接口，请求发送成功后会返回一个 RequestId，此时操作并未立即完成。云硬盘操作结果可以通过调用 [DescribeDisks](https://cloud.tencent.com/document/product/1207/66093) 接口查询，如果云硬盘的最新操作状态（LatestOperationState）为“SUCCESS”，则代表操作成功。
 * @method Models\IsolateInstancesResponse IsolateInstances(Models\IsolateInstancesRequest $req) 本接口(IsolateInstances)用于退还一个或多个轻量应用服务器实例。
* 只有状态为 RUNNING 或 STOPPED 的实例才可以进行此操作。
* 接口调用成功后，实例会进入SHUTDOWN 状态。
* 支持批量操作。每次请求批量资源（包括实例与数据盘）的上限为 20。
* 本接口为异步接口，请求发送成功后会返回一个 RequestId，此时操作并未立即完成。实例操作结果可以通过调用 DescribeInstances 接口查询，如果实例的最新操作状态（LatestOperationState）为“SUCCESS”，则代表操作成功。
 * @method Models\ModifyBlueprintAttributeResponse ModifyBlueprintAttribute(Models\ModifyBlueprintAttributeRequest $req) 本接口 (ModifyBlueprintAttribute) 用于修改镜像属性。
 * @method Models\ModifyDiskBackupsAttributeResponse ModifyDiskBackupsAttribute(Models\ModifyDiskBackupsAttributeRequest $req) 本接口 (ModifyDiskBackupsAttribute) 用于修改云硬盘备份点属性。
 * @method Models\ModifyDisksAttributeResponse ModifyDisksAttribute(Models\ModifyDisksAttributeRequest $req) 本接口(ModifyDisksAttribute)用于修改云硬盘属性。
 * @method Models\ModifyDisksRenewFlagResponse ModifyDisksRenewFlag(Models\ModifyDisksRenewFlagRequest $req) 本接口（ModifyDisksRenewFlag）用于修改云硬盘续费标识。
 * @method Models\ModifyFirewallRuleDescriptionResponse ModifyFirewallRuleDescription(Models\ModifyFirewallRuleDescriptionRequest $req) 本接口（ModifyFirewallRuleDescription）用于修改单条防火墙规则描述。

* FirewallVersion 用于指定要操作的防火墙的版本。传入 FirewallVersion 版本号若不等于当前防火墙的最新版本，将返回失败；若不传 FirewallVersion 则直接修改防火墙规则备注。

在 FirewallRule 参数中：
* Protocol 字段支持输入 TCP，UDP，ICMP，ALL。
* Port 字段允许输入 ALL，或者一个单独的端口号，或者用逗号分隔的离散端口号，或者用减号分隔的两个端口号代表的端口范围。当 Port 为范围时，减号分隔的第一个端口号小于第二个端口号。当 Protocol 字段不是 TCP 或 UDP 时，Port 字段只能为空或 ALL。Port 字段长度不得超过 64。
* CidrBlock 字段允许输入符合 cidr 格式标准的任意字符串。租户之间网络隔离规则优先于防火墙中的内网规则。
* Action 字段只允许输入 ACCEPT 或 DROP。
* FirewallRuleDescription 字段长度不得超过 64。
 * @method Models\ModifyFirewallRulesResponse ModifyFirewallRules(Models\ModifyFirewallRulesRequest $req) 本接口（ModifyFirewallRules）用于重置实例防火墙规则。

本接口先删除当前实例的所有防火墙规则，然后添加新的规则。

* FirewallVersion 用于指定要操作的防火墙的版本。传入 FirewallVersion 版本号若不等于当前防火墙的最新版本，将返回失败；若不传 FirewallVersion 则直接重置防火墙规则。

在 FirewallRules 参数中：
* Protocol 字段支持输入 TCP，UDP，ICMP，ALL。
* Port 字段允许输入 ALL，或者一个单独的端口号，或者用逗号分隔的离散端口号，或者用减号分隔的两个端口号代表的端口范围。当 Port 为范围时，减号分隔的第一个端口号小于第二个端口号。当 Protocol 字段不是 TCP 或 UDP 时，Port 字段只能为空或 ALL。Port 字段长度不得超过 64。
* CidrBlock 字段允许输入符合 cidr 格式标准的任意字符串。租户之间网络隔离规则优先于防火墙中的内网规则。
* Action 字段只允许输入 ACCEPT 或 DROP。
* FirewallRuleDescription 字段长度不得超过 64。
 * @method Models\ModifyInstancesAttributeResponse ModifyInstancesAttribute(Models\ModifyInstancesAttributeRequest $req) 本接口（ModifyInstancesAttribute）用于修改实例的属性。
* “实例名称”仅为方便用户自己管理之用。
* 支持批量操作。每次请求批量实例的上限为 100。
 * @method Models\ModifyInstancesBundleResponse ModifyInstancesBundle(Models\ModifyInstancesBundleRequest $req) 本接口(ModifyInstancesBundle)用于变更一个或多个轻量应用服务器实例套餐。
* 只有状态为 RUNNING，STOPPED的实例才可以进行此操作。
* 支持批量操作。每次请求批量实例的上限为 30。
* 本接口为异步接口，请求发送成功后会返回一个 RequestId，此时操作并未立即完成。实例操作结果可以通过调用 DescribeInstances 接口查询，如果实例的最新操作状态（LatestOperationState）为“SUCCESS”，则代表操作成功。
 * @method Models\ModifyInstancesLoginKeyPairAttributeResponse ModifyInstancesLoginKeyPairAttribute(Models\ModifyInstancesLoginKeyPairAttributeRequest $req) 本接口用于设置实例默认登录密钥对属性。


 * @method Models\ModifyInstancesRenewFlagResponse ModifyInstancesRenewFlag(Models\ModifyInstancesRenewFlagRequest $req) 本接口 (ModifyInstancesRenewFlag) 用于修改包年包月实例续费标识。

* 实例被标识为自动续费后，每次在实例到期时，会自动续费一个月。
* 支持批量操作。每次请求批量实例的上限为100。
 * @method Models\ModifySnapshotAttributeResponse ModifySnapshotAttribute(Models\ModifySnapshotAttributeRequest $req) 本接口（ModifySnapshotAttribute）用于修改指定快照的属性。
<li>“快照名称”仅为方便用户自己管理之用。</li>
 * @method Models\RebootInstancesResponse RebootInstances(Models\RebootInstancesRequest $req) 本接口（RebootInstances）用于重启实例。

* 只有状态为 RUNNING 的实例才可以进行此操作。
* 接口调用成功时，实例会进入 REBOOTING 状态；重启实例成功时，实例会进入 RUNNING 状态。
* 支持批量操作，每次请求批量实例的上限为 100。
* 本接口为异步接口，请求发送成功后会返回一个 RequestId，此时操作并未立即完成。实例操作结果可以通过调用 DescribeInstances 接口查询，如果实例的最新操作状态（LatestOperationState）为“SUCCESS”，则代表操作成功。
 * @method Models\RenewDisksResponse RenewDisks(Models\RenewDisksRequest $req) 本接口(RenewDisks)用于续费一个或多个轻量应用服务器云硬盘。

只有状态为 ATTACHED，UNATTACHED 或 SHUTDOWN 的数据盘才可以进行此操作。
支持批量操作。每次请求批量云硬盘的上限为 50。
本接口为异步接口，请求发送成功后会返回一个 RequestId，此时操作并未立即完成。云硬盘操作结果可以通过调用 [DescribeDisks](https://cloud.tencent.com/document/product/1207/66093) 接口查询，如果云硬盘的最新操作状态（LatestOperationState）为“SUCCESS”，则代表操作成功。
 * @method Models\RenewInstancesResponse RenewInstances(Models\RenewInstancesRequest $req) 本接口(RenewInstances)用于续费一个或多个轻量应用服务器实例。
* 只有状态为 RUNNING，STOPPED 或 SHUTDOWN 的实例才可以进行此操作。
* 支持批量操作。每次请求批量实例的上限为 100。
* 本接口为异步接口，请求发送成功后会返回一个 RequestId，此时操作并未立即完成。实例操作结果可以通过调用 DescribeInstances 接口查询，如果实例的最新操作状态（LatestOperationState）为“SUCCESS”，则代表操作成功。
 * @method Models\ResetAttachCcnResponse ResetAttachCcn(Models\ResetAttachCcnRequest $req) 本接口 (ResetAttachCcn) 用于关联云联网实例申请过期时，重新申请关联操作。
 * @method Models\ResetInstanceResponse ResetInstance(Models\ResetInstanceRequest $req) 本接口（ResetInstance）用于重装指定实例上的镜像。

* 如果指定了 BlueprintId 参数，则使用指定的镜像重装；否则按照当前实例使用的镜像进行重装。
* 系统盘将会被格式化，并重置；请确保系统盘中无重要文件。
* 目前不支持实例使用该接口实现 LINUX_UNIX 和 WINDOWS 操作系统切换。
* 本接口为异步接口，请求发送成功后会返回一个 RequestId，此时操作并未立即完成。实例操作结果可以通过调用 DescribeInstances 接口查询，如果实例的最新操作状态（LatestOperationState）为“SUCCESS”，则代表操作成功。
 * @method Models\ResetInstancesPasswordResponse ResetInstancesPassword(Models\ResetInstancesPasswordRequest $req) 本接口（ResetInstancesPassword）用于将实例操作系统的密码重置为用户指定的密码。
* 只修改管理员帐号的密码。实例的操作系统不同，管理员帐号也会不一样（Windows 为 Administrator，Ubuntu 为 ubuntu ，其它系统为 root）。
* 支持批量操作。将多个实例操作系统的密码重置为相同的密码。每次请求批量实例的上限为 100。
* 建议对运行中的实例先手动关机，然后再进行密码重置。如实例处于运行中状态，本接口操作过程中会对实例进行关机操作，尝试正常关机失败后进行强制关机。
* 本接口为异步接口，请求发送成功后会返回一个 RequestId，此时操作并未立即完成。实例操作结果可以通过调用 DescribeInstances 接口查询，如果实例的最新操作状态（LatestOperationState）为“SUCCESS”，则代表操作成功。
注意：强制关机的效果等同于关闭物理计算机的电源开关。强制关机可能会导致数据丢失或文件系统损坏。
 * @method Models\StartInstancesResponse StartInstances(Models\StartInstancesRequest $req) 本接口（StartInstances）用于启动一个或多个实例。

* 只有状态为 STOPPED 的实例才可以进行此操作。
* 接口调用成功时，实例会进入 STARTING 状态；启动实例成功时，实例会进入 RUNNING 状态。
* 支持批量操作。每次请求批量实例的上限为 100。
* 本接口为异步接口，请求发送成功后会返回一个 RequestId，此时操作并未立即完成。实例操作结果可以通过调用 DescribeInstances 接口查询，如果实例的最新操作状态（LatestOperationState）为“SUCCESS”，则代表操作成功。
 * @method Models\StopInstancesResponse StopInstances(Models\StopInstancesRequest $req) 本接口（StopInstances）用于关闭一个或多个实例。
* 只有状态为 RUNNING 的实例才可以进行此操作。
* 接口调用成功时，实例会进入 STOPPING 状态；关闭实例成功时，实例会进入 STOPPED 状态。
* 支持批量操作。每次请求批量实例的上限为 100。
* 本接口为异步接口，请求发送成功后会返回一个 RequestId，此时操作并未立即完成。实例操作结果可以通过调用 DescribeInstances 接口查询，如果实例的最新操作状态（LatestOperationState）为“SUCCESS”，则代表操作成功。
 * @method Models\TerminateDisksResponse TerminateDisks(Models\TerminateDisksRequest $req) 本接口（TerminateDisks）用于销毁一个或多个云硬盘。
 * @method Models\TerminateInstancesResponse TerminateInstances(Models\TerminateInstancesRequest $req) 本接口 (TerminateInstances) 用于销毁实例。

* 处于 SHUTDOWN 状态的实例，可通过本接口销毁，且不可恢复。
* 支持批量操作，每次请求批量实例的上限为100。
* 本接口为异步接口，请求发送成功后会返回一个 RequestId，此时操作并未立即完成。实例操作结果可以通过调用 DescribeInstances 接口查询，如果实例的最新操作状态 (LatestOperationState) 为“SUCCESS”，则代表操作成功。
 */

class LighthouseClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "lighthouse.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "lighthouse";

    /**
     * @var string
     */
    protected $version = "2020-03-24";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("lighthouse")."\\"."V20200324\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
