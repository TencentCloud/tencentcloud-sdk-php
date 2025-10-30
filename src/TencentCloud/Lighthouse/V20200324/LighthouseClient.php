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
 * @method Models\ApplyFirewallTemplateResponse ApplyFirewallTemplate(Models\ApplyFirewallTemplateRequest $req) 本接口 (ApplyFirewallTemplate) 用于应用防火墙模板到多个实例。
 * @method Models\ApplyInstanceSnapshotResponse ApplyInstanceSnapshot(Models\ApplyInstanceSnapshotRequest $req) 本接口（ApplyInstanceSnapshot）用于回滚指定实例的系统盘快照。
- 仅支持回滚到原系统盘。
- 用于回滚的快照必须处于 NORMAL 状态。快照状态可以通过 [DescribeSnapshots](https://cloud.tencent.com/document/product/1207/54388) 接口查询，见输出参数中 SnapshotState 字段解释。
- 回滚快照时，实例的状态必须为 STOPPED 或 RUNNING，可通过 [DescribeInstances](https://cloud.tencent.com/document/product/1207/47573) 接口查询实例状态。处于 RUNNING 状态的实例会强制关机，然后回滚快照。
 * @method Models\AssociateInstancesKeyPairsResponse AssociateInstancesKeyPairs(Models\AssociateInstancesKeyPairsRequest $req) 本接口（AssociateInstancesKeyPairs）用于绑定用户指定密钥对到实例。
* 只支持 [RUNNING, STOPPED] 状态的 LINUX_UNIX 操作系统的实例。处于 RUNNING 状态的实例会强制关机，然后绑定。
* 将密钥的公钥写入到实例的 SSH 配置当中，用户就可以通过该密钥的私钥来登录实例。
* 如果实例原来绑定过密钥，那么原来的密钥将失效。
* 如果实例原来是通过密码登录，绑定密钥后无法使用密码登录。
* 支持批量操作。每次请求批量实例的上限为 100。如果批量实例存在不允许操作的实例，操作会以特定错误码返回。
* 本接口为异步接口，请求发送成功后会返回一个 RequestId，此时操作并未立即完成。实例操作结果可以通过调用 <a href="https://cloud.tencent.com/document/product/1207/47573" target="_blank">DescribeInstances</a> 接口查询，如果实例的最新操作状态（LatestOperationState）为“SUCCESS”，则代表操作成功。
 * @method Models\AttachCcnResponse AttachCcn(Models\AttachCcnRequest $req) 本接口 (AttachCcn) 用于建立与云联网的关联。
 * @method Models\AttachDisksResponse AttachDisks(Models\AttachDisksRequest $req) 本接口（AttachDisks）用于挂载一个或多个云硬盘。
<li>只能挂载磁盘状态（DiskState）处于待挂载（UNATTACHED）状态的云硬盘，磁盘状态可通过接口查询云硬盘（DescribeDisks）获取</li>
 * @method Models\CancelShareBlueprintAcrossAccountsResponse CancelShareBlueprintAcrossAccounts(Models\CancelShareBlueprintAcrossAccountsRequest $req) 本接口（CancelShareBlueprintAcrossAccounts）用于取消镜像跨账号共享。
指定的镜像ID必须为自定义镜像，且指定账号ID必须已进行共享。
 * @method Models\CreateBlueprintResponse CreateBlueprint(Models\CreateBlueprintRequest $req) 本接口 (CreateBlueprint) 用于创建镜像。
 * @method Models\CreateDiskBackupResponse CreateDiskBackup(Models\CreateDiskBackupRequest $req) 本接口 ( CreateDiskBackup  ) 用于创建指定云硬盘（当前只支持数据盘）的备份点。
 * @method Models\CreateDisksResponse CreateDisks(Models\CreateDisksRequest $req) 本接口(CreateDisks)用于创建一个或多个云硬盘。
 * @method Models\CreateFirewallRulesResponse CreateFirewallRules(Models\CreateFirewallRulesRequest $req) 本接口（CreateFirewallRules）用于在实例上添加防火墙规则。


* FirewallVersion 为防火墙版本号，用户每次更新防火墙规则版本会自动加1，防止您更新的规则已过期，不填不考虑冲突。FirewallVersion可通过[DescribeFirewallRules](https://cloud.tencent.com/document/api/1207/48252)接口返回值中的FirewallVersion获取。

在 FirewallRules 参数中：
* Protocol 字段支持输入 TCP，UDP，ICMP，ICMPv6，ALL。
* Port 字段允许输入 ALL，或者一个单独的端口号，或者用逗号分隔的离散端口号，或者用减号分隔的两个端口号代表的端口范围。当 Port 为范围时，减号分隔的第一个端口号小于第二个端口号。当 Protocol 字段不是 TCP 或 UDP 时，Port 字段只能为空或 ALL。Port 字段长度不得超过 64。
* CidrBlock 字段允许输入符合 cidr 格式标准的任意字符串。租户之间网络隔离规则优先于防火墙中的内网规则。
* Action 字段只允许输入 ACCEPT 或 DROP。
* FirewallRuleDescription 字段长度不得超过 64。
 * @method Models\CreateFirewallTemplateResponse CreateFirewallTemplate(Models\CreateFirewallTemplateRequest $req) 本接口 (CreateFirewallTemplate) 用于创建防火墙模板。
 * @method Models\CreateFirewallTemplateRulesResponse CreateFirewallTemplateRules(Models\CreateFirewallTemplateRulesRequest $req) 本接口 (CreateFirewallTemplateRules) 用于创建防火墙模板规则。
 * @method Models\CreateInstanceSnapshotResponse CreateInstanceSnapshot(Models\CreateInstanceSnapshotRequest $req) 本接口（CreateInstanceSnapshot）用于创建指定实例的系统盘快照。
 * @method Models\CreateInstancesResponse CreateInstances(Models\CreateInstancesRequest $req) 本接口(CreateInstances)用于创建一个或多个指定套餐的轻量应用服务器实例。
*创建实例时，如指定实例访问域名信息时，本次创建请求，仅支持购买一台实例。
 * @method Models\CreateKeyPairResponse CreateKeyPair(Models\CreateKeyPairRequest $req) 本接口（CreateKeyPair）用于创建一个密钥对。
 * @method Models\CreateMcpServerResponse CreateMcpServer(Models\CreateMcpServerRequest $req) 本接口（CreateMcpServer）用于创建MCP Server。
- 本接口为异步接口，请求发送成功后会返回一个 McpServerId，此时操作并未立即完成。实例操作结果可以通过调用 DescribeMcpServers 接口查询。
 * @method Models\DeleteBlueprintsResponse DeleteBlueprints(Models\DeleteBlueprintsRequest $req) 本接口 (DeleteBlueprints) 用于删除镜像。可删除的镜像应满足如下条件：
1、删除镜像接口需要镜像状态为NORMAL（正常）、ISOLATED（已隔离）、CREATEFAILED（创建失败）、SYNCING_FAILED（目的地域同步失败），其他状态下的镜像不支持删除操作。镜像状态，可通过[DescribeBlueprints](https://cloud.tencent.com/document/product/1207/47689)接口返回值中的BlueprintState获取。
2、仅支持删除自定义镜像。
 * @method Models\DeleteDiskBackupsResponse DeleteDiskBackups(Models\DeleteDiskBackupsRequest $req) 本接口（DeleteDiskBackups）用于删除云硬盘备份点。
云硬盘备份点必须处于 NORMAL 状态，云硬盘备份点状态可以通过 [DescribeDiskBackups](https://cloud.tencent.com/document/api/1207/84379)接口查询，见输出参数中 DiskBackupState 字段解释。
 * @method Models\DeleteFirewallRulesResponse DeleteFirewallRules(Models\DeleteFirewallRulesRequest $req) 本接口（DeleteFirewallRules）用于删除实例的防火墙规则。

* FirewallVersion 用于指定要操作的防火墙的版本。传入 FirewallVersion 版本号若不等于当前防火墙的最新版本，将返回失败；若不传 FirewallVersion 则直接删除指定的规则。FirewallVersion可通过[DescribeFirewallRules](https://cloud.tencent.com/document/api/1207/48252)接口返回值中的FirewallVersion获取。

在 FirewallRules 参数中：
* Protocol 字段支持输入 TCP，UDP，ICMP，ICMPv6，ALL。
* Port 字段允许输入 ALL，或者一个单独的端口号，或者用逗号分隔的离散端口号，或者用减号分隔的两个端口号代表的端口范围。当 Port 为范围时，减号分隔的第一个端口号小于第二个端口号。当 Protocol 字段不是 TCP 或 UDP 时，Port 字段只能为空或 ALL。Port 字段长度不得超过 64。
* CidrBlock 字段允许输入符合 cidr 格式标准的任意字符串。租户之间网络隔离规则优先于防火墙中的内网规则。
* Action 字段只允许输入 ACCEPT 或 DROP。
* FirewallRuleDescription 字段长度不得超过 64。
 * @method Models\DeleteFirewallTemplateResponse DeleteFirewallTemplate(Models\DeleteFirewallTemplateRequest $req) 本接口 (DeleteFirewallTemplate) 用于删除防火墙模板。
 * @method Models\DeleteFirewallTemplateRulesResponse DeleteFirewallTemplateRules(Models\DeleteFirewallTemplateRulesRequest $req) 本接口 (DeleteFirewallTemplateRules) 用于删除防火墙模板规则。
 * @method Models\DeleteKeyPairsResponse DeleteKeyPairs(Models\DeleteKeyPairsRequest $req) 本接口（DeleteKeyPairs）用于删除密钥对。
- 不能删除已被实例或镜像引用的密钥对，删除之前需要确保没有被任何实例和镜像引用。
 * @method Models\DeleteSnapshotsResponse DeleteSnapshots(Models\DeleteSnapshotsRequest $req) 本接口（DeleteSnapshots）用于删除快照。
快照必须处于 NORMAL 状态，快照状态可以通过 <a href="https://cloud.tencent.com/document/product/1207/54388" target="_blank">DescribeSnapshots</a> 接口查询，见输出参数中 SnapshotState 字段解释。
 * @method Models\DescribeAllScenesResponse DescribeAllScenes(Models\DescribeAllScenesRequest $req) 本接口(DescribeAllScenes)用于查询全地域使用场景列表。
 * @method Models\DescribeBlueprintInstancesResponse DescribeBlueprintInstances(Models\DescribeBlueprintInstancesRequest $req) 本接口（DescribeBlueprintInstances）用于查询镜像实例信息。
 * @method Models\DescribeBlueprintsResponse DescribeBlueprints(Models\DescribeBlueprintsRequest $req) 本接口（DescribeBlueprints）用于查询镜像信息。该接口返回的镜像类型有：自定义镜像、共享镜像、公共镜像。
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
 * @method Models\DescribeDockerActivitiesResponse DescribeDockerActivities(Models\DescribeDockerActivitiesRequest $req) 查询实例内的Docker活动列表。
 * @method Models\DescribeDockerContainerConfigurationResponse DescribeDockerContainerConfiguration(Models\DescribeDockerContainerConfigurationRequest $req) 查询实例内的Docker容器配置信息
 * @method Models\DescribeDockerContainerDetailResponse DescribeDockerContainerDetail(Models\DescribeDockerContainerDetailRequest $req) 查询实例内的Docker容器详情
 * @method Models\DescribeDockerContainersResponse DescribeDockerContainers(Models\DescribeDockerContainersRequest $req) 查询实例内的容器列表。
 * @method Models\DescribeFirewallRulesResponse DescribeFirewallRules(Models\DescribeFirewallRulesRequest $req) 本接口（DescribeFirewallRules）用于查询实例的防火墙规则。
 * @method Models\DescribeFirewallRulesTemplateResponse DescribeFirewallRulesTemplate(Models\DescribeFirewallRulesTemplateRequest $req) 本接口（DescribeFirewallRulesTemplate）用于查询防火墙规则模板。
 * @method Models\DescribeFirewallTemplateApplyRecordsResponse DescribeFirewallTemplateApplyRecords(Models\DescribeFirewallTemplateApplyRecordsRequest $req) 本接口 (DescribeFirewallTemplateApplyRecords) 用于查询防火墙模板应用记录列表。
 * @method Models\DescribeFirewallTemplateQuotaResponse DescribeFirewallTemplateQuota(Models\DescribeFirewallTemplateQuotaRequest $req) 本接口 (DescribeFirewallTemplateQuota) 用于查询防火墙模板配额。
 * @method Models\DescribeFirewallTemplateRuleQuotaResponse DescribeFirewallTemplateRuleQuota(Models\DescribeFirewallTemplateRuleQuotaRequest $req) 本接口 (DescribeFirewallTemplateRuleQuota) 用于查询防火墙模板规则配额。
 * @method Models\DescribeFirewallTemplateRulesResponse DescribeFirewallTemplateRules(Models\DescribeFirewallTemplateRulesRequest $req) 本接口 (DescribeFirewallTemplateRules) 用于查询防火墙模板规则列表。
 * @method Models\DescribeFirewallTemplatesResponse DescribeFirewallTemplates(Models\DescribeFirewallTemplatesRequest $req) 本接口 (DescribeFirewallTemplates) 用于查询防火墙模板列表。
 * @method Models\DescribeGeneralResourceQuotasResponse DescribeGeneralResourceQuotas(Models\DescribeGeneralResourceQuotasRequest $req) 本接口（DescribeGeneralResourceQuotas）用于查询通用资源配额信息。
 * @method Models\DescribeImagesToShareResponse DescribeImagesToShare(Models\DescribeImagesToShareRequest $req) 本接口 (DescribeImagesToShare) 用于查询CVM的自定义镜像列表共享到轻量应用服务器。
 * @method Models\DescribeInstanceVncUrlResponse DescribeInstanceVncUrl(Models\DescribeInstanceVncUrlRequest $req) 本接口 ( DescribeInstanceVncUrl ) 用于查询实例管理终端地址，获取的地址可用于实例的 VNC 登录。

* 仅处于 `RUNNING`，`RESCUE_MODE` 状态的机器，且当前机器无变更中操作，才可使用此功能。
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
 * @method Models\DescribeMcpServerTemplatesResponse DescribeMcpServerTemplates(Models\DescribeMcpServerTemplatesRequest $req) 本接口（DescribeMcpServerTemplates）用于查询MCP Server模板列表。
 * @method Models\DescribeMcpServersResponse DescribeMcpServers(Models\DescribeMcpServersRequest $req) 本接口（DescribeMcpServers）用于查询MCP Server列表。
 * @method Models\DescribeModifyInstanceBundlesResponse DescribeModifyInstanceBundles(Models\DescribeModifyInstanceBundlesRequest $req) 本接口（DescribeModifyInstanceBundles）用于查询实例可变更套餐列表。
 * @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) 本接口（DescribeRegions）用于查询地域信息。
 * @method Models\DescribeResetInstanceBlueprintsResponse DescribeResetInstanceBlueprints(Models\DescribeResetInstanceBlueprintsRequest $req) 本接口（DescribeResetInstanceBlueprints）查询重置实例的镜像信息。对于游戏专区实例，该接口只会返回当前镜像，且不支持 Filters 参数。
 * @method Models\DescribeScenesResponse DescribeScenes(Models\DescribeScenesRequest $req) 本接口(DescribeScenes)用于查看使用场景列表。
 * @method Models\DescribeSnapshotsResponse DescribeSnapshots(Models\DescribeSnapshotsRequest $req) 本接口（DescribeSnapshots）用于查询快照的详细信息。
 * @method Models\DescribeSnapshotsDeniedActionsResponse DescribeSnapshotsDeniedActions(Models\DescribeSnapshotsDeniedActionsRequest $req) 本接口（DescribeSnapshotsDeniedActions）用于查询一个或多个快照的操作限制列表信息。
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) 查询地域下可用区
 * @method Models\DetachCcnResponse DetachCcn(Models\DetachCcnRequest $req) 本接口 (DetachCcn) 用于解除与云联网的关联。
 * @method Models\DetachDisksResponse DetachDisks(Models\DetachDisksRequest $req) 本接口（DetachDisks）用于卸载一个或多个云硬盘。该操作目前仅支持云硬盘类型为数据盘的云硬盘。
- 支持批量操作，卸载挂载在同一主机上的多块云硬盘。如果多块云硬盘中存在不允许卸载的云硬盘，则操作不执行，返回特定的错误码。
- 本接口为异步接口，当请求成功返回时，云硬盘并未立即卸载，可通过接口[DescribeDisks](https://cloud.tencent.com/document/product/362/16315)来查询对应云硬盘的状态，如果云硬盘的状态由“ATTACHED”变为“UNATTACHED”，则为卸载成功。
 * @method Models\DisassociateInstancesKeyPairsResponse DisassociateInstancesKeyPairs(Models\DisassociateInstancesKeyPairsRequest $req) 本接口（DisassociateInstancesKeyPairs）用于解除实例与指定密钥对的绑定关系。

* 只支持 [RUNNING, STOPPED] 状态的 LINUX_UNIX 操作系统的实例。处于 RUNNING 状态的实例会强制关机，然后解绑。
* 解绑密钥后，实例可以通过原来设置的密码登录。
* 如果原来没有设置密码，解绑后将无法使用 SSH 登录。可以调用 <a href="https://cloud.tencent.com/document/product/1207/55546" target="_blank">ResetInstancesPassword</a> 接口来设置登录密码。
* 支持批量操作。每次请求批量实例的上限为 100。
* 本接口为异步接口，请求发送成功后会返回一个 RequestId，此时操作并未立即完成。实例操作结果可以通过调用 <a href="https://cloud.tencent.com/document/product/1207/47573" target="_blank">DescribeInstances</a> 接口查询，如果实例的最新操作状态（LatestOperationState）为“SUCCESS”，则代表操作成功。
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
* 本接口为异步接口，请求发送成功后会返回一个 RequestId，此时操作并未立即完成。实例操作结果可以通过调用 <a href="https://cloud.tencent.com/document/product/1207/47573" target="_blank">DescribeInstances</a> 接口查询，如果实例的最新操作状态（LatestOperationState）为“SUCCESS”，则代表操作成功。
 * @method Models\ModifyBlueprintAttributeResponse ModifyBlueprintAttribute(Models\ModifyBlueprintAttributeRequest $req) 本接口 (ModifyBlueprintAttribute) 用于修改镜像属性。
 * @method Models\ModifyDiskBackupsAttributeResponse ModifyDiskBackupsAttribute(Models\ModifyDiskBackupsAttributeRequest $req) 本接口 (ModifyDiskBackupsAttribute) 用于修改云硬盘备份点属性。
 * @method Models\ModifyDisksAttributeResponse ModifyDisksAttribute(Models\ModifyDisksAttributeRequest $req) 本接口(ModifyDisksAttribute)用于修改云硬盘属性。
云硬盘必须处于以下状态:
<li> ATTACHED（已挂载）</li>
<li> UNATTACHED（待挂载）</li>
 * @method Models\ModifyDisksBackupQuotaResponse ModifyDisksBackupQuota(Models\ModifyDisksBackupQuotaRequest $req) 本接口(ModifyDisksBackupQuota)用于调整云硬盘备份点配额。
该操作目前仅支持状态是ATTACHED（已挂载）或 UNATTACHED（待挂载）的云硬盘。
支持批量操作。每次批量请求云硬盘数量上限为15个。
 * @method Models\ModifyDisksRenewFlagResponse ModifyDisksRenewFlag(Models\ModifyDisksRenewFlagRequest $req) 本接口（ModifyDisksRenewFlag）用于修改云硬盘续费标识。
云硬盘需要处于以下状态：
<li> ATTACHED （已挂载）</li>
<li> UNATTACHED （待挂载）</li>
<li> ATTACHING （挂载中） </li>
<li> DETACHING （卸载中）</li>
 * @method Models\ModifyDockerContainerResponse ModifyDockerContainer(Models\ModifyDockerContainerRequest $req) 修改实例内的Docker容器，之后可以通过返回的ActivityId调用<a href="https://cloud.tencent.com/document/product/1207/95476" target="_blank">DescribeDockerActivities</a>接口查询重建情况。
请注意：本接口会重新创建并运行实例内的Docker容器。
 * @method Models\ModifyFirewallRuleDescriptionResponse ModifyFirewallRuleDescription(Models\ModifyFirewallRuleDescriptionRequest $req) 本接口（ModifyFirewallRuleDescription）用于修改单条防火墙规则描述。

* FirewallVersion 用于指定要操作的防火墙的版本。传入 FirewallVersion 版本号若不等于当前防火墙的最新版本，将返回失败；若不传 FirewallVersion 则直接修改防火墙规则备注。FirewallVersion可通过[DescribeFirewallRules](https://cloud.tencent.com/document/api/1207/48252)接口返回值中的FirewallVersion获取。

用FirewallRule参数来指定要修改的防火墙规则，使用其中的Protocol， Port， CidrBlock，Action字段来匹配要修改的防火墙规则。

在 FirewallRule 参数中：
* Protocol 字段支持输入 TCP，UDP，ICMP，ICMPv6，ALL。
* Port 字段允许输入 ALL，或者一个单独的端口号，或者用逗号分隔的离散端口号，或者用减号分隔的两个端口号代表的端口范围。当 Port 为范围时，减号分隔的第一个端口号小于第二个端口号。当 Protocol 字段不是 TCP 或 UDP 时，Port 字段只能为空或 ALL。Port 字段长度不得超过 64。
* CidrBlock 字段允许输入符合 cidr 格式标准的任意字符串。租户之间网络隔离规则优先于防火墙中的内网规则。
* Action 字段只允许输入 ACCEPT 或 DROP。
* FirewallRuleDescription 字段长度不得超过 64。
 * @method Models\ModifyFirewallRulesResponse ModifyFirewallRules(Models\ModifyFirewallRulesRequest $req) 本接口（ModifyFirewallRules）用于重置实例防火墙规则。

本接口先删除当前实例的所有防火墙规则，然后添加新的规则。

* FirewallVersion 用于指定要操作的防火墙的版本。传入 FirewallVersion 版本号若不等于当前防火墙的最新版本，将返回失败；若不传 FirewallVersion 则直接重置防火墙规则。可通过[DescribeFirewallRules](https://cloud.tencent.com/document/api/1207/48252)接口返回值中的FirewallVersion获取。

在 FirewallRules 参数中：
* Protocol 字段支持输入 TCP，UDP，ICMP，ICMPv6，ALL。
* Port 字段允许输入 ALL，或者一个单独的端口号，或者用逗号分隔的离散端口号，或者用减号分隔的两个端口号代表的端口范围。当 Port 为范围时，减号分隔的第一个端口号小于第二个端口号。当 Protocol 字段不是 TCP 或 UDP 时，Port 字段只能为空或 ALL。Port 字段长度不得超过 64。
* CidrBlock 字段允许输入符合 cidr 格式标准的任意字符串。租户之间网络隔离规则优先于防火墙中的内网规则。
* Action 字段只允许输入 ACCEPT 或 DROP。
* FirewallRuleDescription 字段长度不得超过 64。
 * @method Models\ModifyFirewallTemplateResponse ModifyFirewallTemplate(Models\ModifyFirewallTemplateRequest $req) 本接口 (ModifyFirewallTemplate) 用于修改防火墙模板。
 * @method Models\ModifyImageSharePermissionResponse ModifyImageSharePermission(Models\ModifyImageSharePermissionRequest $req) 本接口 (ModifyImageSharePermission) 用于共享和取消共享CVM自定义镜像到轻量应用服务器服务。
CVM镜像共享到轻量应用服务器镜像需要满足如下条件：
1.已共享过的镜像不支持再次共享。
2.外部导入的镜像不支持共享。
3.整机镜像不支持共享。
4.镜像要支持Cloudinit才支持共享。
5.镜像的Platform和OsName要满足。
6.NORMAL状态的镜像才支持共享。
 * @method Models\ModifyInstancesAttributeResponse ModifyInstancesAttribute(Models\ModifyInstancesAttributeRequest $req) 本接口（ModifyInstancesAttribute）用于修改实例的属性。
* “实例名称”仅为方便用户自己管理之用。
* 支持批量操作。每次请求批量实例的上限为 100。
 * @method Models\ModifyInstancesBundleResponse ModifyInstancesBundle(Models\ModifyInstancesBundleRequest $req) 本接口(ModifyInstancesBundle)用于变更一个或多个轻量应用服务器实例套餐。
* 只有状态为 RUNNING，STOPPED的实例才可以进行此操作。
* 支持批量操作。每次请求批量实例的上限为 30。
* 本接口为异步接口，请求发送成功后会返回一个 RequestId，此时操作并未立即完成。实例操作结果可以通过调用 <a href="https://cloud.tencent.com/document/product/1207/47573" target="_blank">DescribeInstances</a> 接口查询，如果实例的最新操作状态（LatestOperationState）为“SUCCESS”，则代表操作成功。
 * @method Models\ModifyInstancesRenewFlagResponse ModifyInstancesRenewFlag(Models\ModifyInstancesRenewFlagRequest $req) 本接口 (ModifyInstancesRenewFlag) 用于修改包年包月实例续费标识。

* 实例被标识为自动续费后，每次在实例到期时，会自动续费一个月。
* 支持批量操作。每次请求批量实例的上限为100。
 * @method Models\ModifyMcpServerResponse ModifyMcpServer(Models\ModifyMcpServerRequest $req) 本接口（ModifyMcpServer）用于修改实例的MCP Server信息。
- 本接口为异步接口，API返回时修改操作并未立即完成。MCP Server的修改结果可以通过调用 DescribeMcpServers 接口查询。
 * @method Models\ModifySnapshotAttributeResponse ModifySnapshotAttribute(Models\ModifySnapshotAttributeRequest $req) 本接口（ModifySnapshotAttribute）用于修改指定快照的属性。
<li>“快照名称”仅为方便用户自己管理之用。</li>
 * @method Models\RebootInstancesResponse RebootInstances(Models\RebootInstancesRequest $req) 本接口（RebootInstances）用于重启实例。

* 只有状态为 RUNNING 的实例才可以进行此操作。
* 接口调用成功时，实例会进入 REBOOTING 状态；重启实例成功时，实例会进入 RUNNING 状态。
* 支持批量操作，每次请求批量实例的上限为 100。
* 本接口为异步接口，请求发送成功后会返回一个 RequestId，此时操作并未立即完成。实例操作结果可以通过调用 <a href="https://cloud.tencent.com/document/product/1207/47573" target="_blank">DescribeInstances</a> 接口查询，如果实例的最新操作状态（LatestOperationState）为“SUCCESS”，则代表操作成功。
 * @method Models\RemoveDockerContainersResponse RemoveDockerContainers(Models\RemoveDockerContainersRequest $req) 删除实例内的Docker容器，之后可以通过返回的ActivityId调用[DescribeDockerActivities](https://cloud.tencent.com/document/product/1207/95476)接口查询删除情况。
 * @method Models\RemoveMcpServersResponse RemoveMcpServers(Models\RemoveMcpServersRequest $req) 本接口（RemoveMcpServers）用于删除MCP Server。
- 本接口为异步接口，API返回时操作并未立即完成。MCP Server的操作结果可以通过调用 DescribeMcpServers 接口查询。
- 本接口在操作多个MCP Server时，不会因为某一个失败而停止。您需要通过调用 DescribeMcpServers 接口查询最终操作结果，如无法查询到，代表删除成功。
 * @method Models\RenameDockerContainerResponse RenameDockerContainer(Models\RenameDockerContainerRequest $req) 重命名实例内的Docker容器，之后可以通过返回的ActivityId调用[DescribeDockerActivities](https://cloud.tencent.com/document/product/1207/95476)接口查询重命名情况。
 * @method Models\RenewDisksResponse RenewDisks(Models\RenewDisksRequest $req) 本接口(RenewDisks)用于续费一个或多个轻量应用服务器云硬盘。

只有状态为 ATTACHED，UNATTACHED 或 SHUTDOWN 的数据盘才可以进行此操作。
支持批量操作。每次请求批量云硬盘的上限为 50。
本接口为异步接口，请求发送成功后会返回一个 RequestId，此时操作并未立即完成。云硬盘操作结果可以通过调用 [DescribeDisks](https://cloud.tencent.com/document/product/1207/66093) 接口查询，如果云硬盘的最新操作状态（LatestOperationState）为“SUCCESS”，则代表操作成功。
 * @method Models\RenewInstancesResponse RenewInstances(Models\RenewInstancesRequest $req) 本接口(RenewInstances)用于续费一个或多个轻量应用服务器实例。
* 只有状态为 RUNNING，STOPPED 或 SHUTDOWN 的实例才可以进行此操作。
* 支持批量操作。每次请求批量实例的上限为 100。
* 本接口为异步接口，请求发送成功后会返回一个 RequestId，此时操作并未立即完成。实例操作结果可以通过调用 <a href="https://cloud.tencent.com/document/product/1207/47573" target="_blank">DescribeInstances</a> 接口查询，如果实例的最新操作状态（LatestOperationState）为“SUCCESS”，则代表操作成功。
 * @method Models\ReplaceFirewallTemplateRuleResponse ReplaceFirewallTemplateRule(Models\ReplaceFirewallTemplateRuleRequest $req) 本接口 (ReplaceFirewallTemplateRules) 用于替换防火墙模板规则。
 * @method Models\RerunDockerContainerResponse RerunDockerContainer(Models\RerunDockerContainerRequest $req) 重新创建并运行实例内的Docker容器，之后可以通过返回的ActivityId调用[DescribeDockerActivities](https://cloud.tencent.com/document/product/1207/95476)接口查询重建情况。
 * @method Models\ResetAttachCcnResponse ResetAttachCcn(Models\ResetAttachCcnRequest $req) 本接口 (ResetAttachCcn) 用于关联云联网实例申请过期时，重新申请关联操作。
 * @method Models\ResetFirewallTemplateRulesResponse ResetFirewallTemplateRules(Models\ResetFirewallTemplateRulesRequest $req) 本接口 (ResetFirewallTemplateRules) 用于重置防火墙模板下所有规则。
 * @method Models\ResetInstanceResponse ResetInstance(Models\ResetInstanceRequest $req) 本接口（ResetInstance）用于重装指定实例上的镜像。

* 仅`RUNNING`，`STOPPED`状态的机器，且当前机器无变更中的操作，才支持重装系统。
* 如果指定了 BlueprintId 参数，则使用指定的镜像重装，否则按照当前实例使用的镜像进行重装。
* 非中国大陆地域的实例不支持使用该接口实现LIUNX_UNIX和WINDOWS操作系统切换。
* 系统盘将会被格式化，并重置，请确保系统盘中无重要文件。
* 本接口为异步接口，请求发送成功后会返回一个 RequestId，此时操作并未立即完成。实例操作结果可以通过调用 <a href="https://cloud.tencent.com/document/product/1207/47573" target="_blank">DescribeInstances</a> 接口查询，如果实例的最新操作状态（LatestOperationState）为“SUCCESS”，则代表操作成功。
* 对于游戏专区实例，仅支持重装当前镜像。
 * @method Models\ResetInstancesPasswordResponse ResetInstancesPassword(Models\ResetInstancesPasswordRequest $req) 本接口（ResetInstancesPassword）用于将实例操作系统的密码重置为用户指定的密码。
* 只修改管理员账号的密码。实例的操作系统不同，管理员账号也会不一样（Windows 为 Administrator，Ubuntu 为 ubuntu ，其它系统为 root）。
* 支持批量操作。将多个实例操作系统的密码重置为相同的密码。每次请求批量实例的上限为 100。
* 建议对运行中的实例先手动关机，然后再进行密码重置。如实例处于运行中状态，本接口操作过程中会对实例进行关机操作，尝试正常关机失败后进行强制关机。
* 本接口为异步接口，请求发送成功后会返回一个 RequestId，此时操作并未立即完成。实例操作结果可以通过调用 <a href="https://cloud.tencent.com/document/product/1207/47573" target="_blank">DescribeInstances</a> 接口查询，如果实例的最新操作状态（LatestOperationState）为“SUCCESS”，则代表操作成功。
注意：强制关机的效果等同于关闭物理计算机的电源开关。强制关机可能会导致数据丢失或文件系统损坏。
 * @method Models\ResizeDisksResponse ResizeDisks(Models\ResizeDisksRequest $req) 本接口(ResizeDisks)用于扩容云硬盘。该操作目前仅支持云硬盘类型为数据盘且状态处于ATTACHED（已挂载）或 UNATTACHED（待挂载）的云硬盘。
 * @method Models\RestartDockerContainersResponse RestartDockerContainers(Models\RestartDockerContainersRequest $req) 重启实例内的Docker容器，之后可以通过返回的ActivityId调用[DescribeDockerActivities](https://cloud.tencent.com/document/product/1207/95476)接口查询重启情况。
 * @method Models\RestartMcpServersResponse RestartMcpServers(Models\RestartMcpServersRequest $req) 本接口（RestartMcpServers）用于重启实例中的MCP Server。
- 本接口为异步接口，API返回时操作并未立即完成。MCP Server的操作结果可以通过调用 DescribeMcpServers 接口查询。
- 本接口在操作多个MCP Server时，不会因为某一个失败而停止。您需要通过调用 DescribeMcpServers 接口查询最终操作结果。
 * @method Models\RunDockerContainersResponse RunDockerContainers(Models\RunDockerContainersRequest $req) 创建并运行多个Docker容器，之后可以通过返回的ActivityIds调用<a href="https://cloud.tencent.com/document/product/1207/95476" target="_blank">DescribeDockerActivities</a>接口查询创建情况。
 * @method Models\ShareBlueprintAcrossAccountsResponse ShareBlueprintAcrossAccounts(Models\ShareBlueprintAcrossAccountsRequest $req) 本接口（ShareBlueprintAcrossAccounts）用于跨账号共享镜像。
仅支持共享自定义镜像， 且用于共享的镜像状态必须为NORMAL。
共享的账号必须为主账号。
 * @method Models\StartDockerContainersResponse StartDockerContainers(Models\StartDockerContainersRequest $req) 启动实例内的Docker容器，之后可以通过返回的ActivityId调用[DescribeDockerActivities](https://cloud.tencent.com/document/product/1207/95476)接口查询启动情况。
 * @method Models\StartInstancesResponse StartInstances(Models\StartInstancesRequest $req) 本接口（StartInstances）用于启动一个或多个实例。

* 只有状态为 STOPPED 的实例才可以进行此操作。
* 接口调用成功时，实例会进入 STARTING 状态；启动实例成功时，实例会进入 RUNNING 状态。
* 支持批量操作。每次请求批量实例的上限为 100。
* 本接口为异步接口，请求发送成功后会返回一个 RequestId，此时操作并未立即完成。实例操作结果可以通过调用 <a href="https://cloud.tencent.com/document/product/1207/47573" target="_blank">DescribeInstances</a> 接口查询，如果实例的最新操作状态（LatestOperationState）为“SUCCESS”，则代表操作成功。
 * @method Models\StartMcpServersResponse StartMcpServers(Models\StartMcpServersRequest $req) 本接口（StartMcpServers）用于开启实例中的MCP Server。
- 本接口为异步接口，API返回时操作并未立即完成。MCP Server的操作结果可以通过调用 DescribeMcpServers 接口查询。
- 本接口在操作多个MCP Server时，不会因为某一个失败而停止。您需要通过调用 DescribeMcpServers 接口查询最终操作结果。
 * @method Models\StopDockerContainersResponse StopDockerContainers(Models\StopDockerContainersRequest $req) 停止实例内的Docker容器，之后可以通过返回的ActivityId调用[DescribeDockerActivities](https://cloud.tencent.com/document/product/1207/95476)接口查询停止情况。
 * @method Models\StopInstancesResponse StopInstances(Models\StopInstancesRequest $req) 本接口（StopInstances）用于关闭一个或多个实例。
* 只有状态为 RUNNING 的实例才可以进行此操作。
* 接口调用成功时，实例会进入 STOPPING 状态；关闭实例成功时，实例会进入 STOPPED 状态。
* 支持批量操作。每次请求批量实例的上限为 100。
* 本接口为异步接口，请求发送成功后会返回一个 RequestId，此时操作并未立即完成。实例操作结果可以通过调用 <a href="https://cloud.tencent.com/document/product/1207/47573" target="_blank">DescribeInstances</a> 接口查询，如果实例的最新操作状态（LatestOperationState）为“SUCCESS”，则代表操作成功。
 * @method Models\StopMcpServersResponse StopMcpServers(Models\StopMcpServersRequest $req) 本接口（StopMcpServers）用于关闭实例中的MCP Server。
- 本接口为异步接口，API返回时操作并未立即完成。MCP Server的操作结果可以通过调用 DescribeMcpServers 接口查询。
- 本接口在操作多个MCP Server时，不会因为某一个失败而停止。您需要通过调用 DescribeMcpServers 接口查询最终操作结果。
 * @method Models\SyncBlueprintResponse SyncBlueprint(Models\SyncBlueprintRequest $req) 本接口 (SyncBlueprint) 用于将自定义镜像同步到其它地域。

* 支持向多个地域同步。最多10个地域。
* 不支持向源地域同步。
* 只支持NORMAL状态的镜像进行同步。
* 不支持中国大陆地域和非中国大陆地域之间同步。
* 可以通过[DescribeBlueprints](https://cloud.tencent.com/document/api/1207/47689)查询镜像状态，当镜像状态为NORMAL时表示源地域同步结束。
 * @method Models\TerminateDisksResponse TerminateDisks(Models\TerminateDisksRequest $req) 本接口（TerminateDisks）用于销毁一个或多个云硬盘。
云硬盘状态必须处于SHUTDOWN（已隔离）状态。
 * @method Models\TerminateInstancesResponse TerminateInstances(Models\TerminateInstancesRequest $req) 本接口 (TerminateInstances) 用于销毁实例。

* 处于 SHUTDOWN 状态的实例，可通过本接口销毁，且不可恢复。
* 支持批量操作，每次请求批量实例的上限为100。
* 本接口为异步接口，请求发送成功后会返回一个 RequestId，此时操作并未立即完成。实例操作结果可以通过调用 <a href="https://cloud.tencent.com/document/product/1207/47573" target="_blank">DescribeInstances</a> 接口查询，如果返回列表中不存在该实例，则代表操作成功。
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
