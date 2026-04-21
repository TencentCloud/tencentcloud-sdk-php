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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDBInstance请求参数结构体
 *
 * @method integer getMemory() 获取<p>实例内存大小，单位：MB，请使用 <a href="https://cloud.tencent.com/document/api/236/17229">获取云数据库可售卖规格</a> 接口获取可创建的内存规格。</p>
 * @method void setMemory(integer $Memory) 设置<p>实例内存大小，单位：MB，请使用 <a href="https://cloud.tencent.com/document/api/236/17229">获取云数据库可售卖规格</a> 接口获取可创建的内存规格。</p>
 * @method integer getVolume() 获取<p>实例硬盘大小，单位：GB，请使用 <a href="https://cloud.tencent.com/document/api/236/17229">获取云数据库可售卖规格</a> 接口获取可创建的硬盘范围。</p>
 * @method void setVolume(integer $Volume) 设置<p>实例硬盘大小，单位：GB，请使用 <a href="https://cloud.tencent.com/document/api/236/17229">获取云数据库可售卖规格</a> 接口获取可创建的硬盘范围。</p>
 * @method integer getPeriod() 获取<p>实例时长，单位：月，可选值包括 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。</p>
 * @method void setPeriod(integer $Period) 设置<p>实例时长，单位：月，可选值包括 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。</p>
 * @method integer getGoodsNum() 获取<p>实例数量，默认值为1, 最小值1，最大值为100。</p>
 * @method void setGoodsNum(integer $GoodsNum) 设置<p>实例数量，默认值为1, 最小值1，最大值为100。</p>
 * @method string getZone() 获取<p>可用区信息，请使用 <a href="https://cloud.tencent.com/document/api/236/17229">获取云数据库可售卖规格</a> 接口获取可创建的可用区。<br>说明：若您创建单节点、双节点、三节点实例，此参数为必填项，请指定可用区，若不指定可用区，则系统会自动选择一个可用区（可能不是您希望部署的可用区）；若您创建云盘版实例，此参数不填，请通过参数 ClusterTopology 进行读写节点和只读节点的可用区配置。</p>
 * @method void setZone(string $Zone) 设置<p>可用区信息，请使用 <a href="https://cloud.tencent.com/document/api/236/17229">获取云数据库可售卖规格</a> 接口获取可创建的可用区。<br>说明：若您创建单节点、双节点、三节点实例，此参数为必填项，请指定可用区，若不指定可用区，则系统会自动选择一个可用区（可能不是您希望部署的可用区）；若您创建云盘版实例，此参数不填，请通过参数 ClusterTopology 进行读写节点和只读节点的可用区配置。</p>
 * @method string getUniqVpcId() 获取<p>私有网络 ID，请使用 <a href="/document/api/215/15778">查询私有网络列表</a>。<br>说明：如果创建的是云盘版实例，此参数为必填且为私有网络类型。若此项不填，则系统会选择默认的 VPC。</p>
 * @method void setUniqVpcId(string $UniqVpcId) 设置<p>私有网络 ID，请使用 <a href="/document/api/215/15778">查询私有网络列表</a>。<br>说明：如果创建的是云盘版实例，此参数为必填且为私有网络类型。若此项不填，则系统会选择默认的 VPC。</p>
 * @method string getUniqSubnetId() 获取<p>私有网络下的子网 ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用 <a href="/document/api/215/15784">查询子网列表</a>。<br>说明：若此项不填，则系统会选择默认 VPC 下的默认子网。</p>
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置<p>私有网络下的子网 ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用 <a href="/document/api/215/15784">查询子网列表</a>。<br>说明：若此项不填，则系统会选择默认 VPC 下的默认子网。</p>
 * @method integer getProjectId() 获取<p>项目 ID，不填为默认项目。购买只读实例和灾备实例时，项目 ID 默认和主实例保持一致。</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目 ID，不填为默认项目。购买只读实例和灾备实例时，项目 ID 默认和主实例保持一致。</p>
 * @method integer getPort() 获取<p>自定义端口，端口支持范围：[ 1024-65535 ]。<br>说明：若此项不填，则默认为3306。</p>
 * @method void setPort(integer $Port) 设置<p>自定义端口，端口支持范围：[ 1024-65535 ]。<br>说明：若此项不填，则默认为3306。</p>
 * @method string getInstanceRole() 获取<p>实例类型，支持值包括：master - 表示主实例，dr - 表示灾备实例，ro - 表示只读实例。<br>说明：请选择实例类型，不填会默认选择 master。</p>
 * @method void setInstanceRole(string $InstanceRole) 设置<p>实例类型，支持值包括：master - 表示主实例，dr - 表示灾备实例，ro - 表示只读实例。<br>说明：请选择实例类型，不填会默认选择 master。</p>
 * @method string getMasterInstanceId() 获取<p>实例 ID，购买只读实例或灾备实例时必填，该字段表示只读实例或灾备实例的主实例 ID，请使用 <a href="https://cloud.tencent.com/document/api/236/15872">查询实例列表</a> 接口查询云数据库实例 ID。</p>
 * @method void setMasterInstanceId(string $MasterInstanceId) 设置<p>实例 ID，购买只读实例或灾备实例时必填，该字段表示只读实例或灾备实例的主实例 ID，请使用 <a href="https://cloud.tencent.com/document/api/236/15872">查询实例列表</a> 接口查询云数据库实例 ID。</p>
 * @method string getEngineVersion() 获取<p>MySQL 版本，值包括：5.5、5.6、5.7和8.0，请使用 <a href="https://cloud.tencent.com/document/api/236/17229">获取云数据库可售卖规格</a> 接口获取可创建的实例版本。<br>说明：创建非云盘版实例时，请根据需要指定实例版本（推荐5.7或8.0），若此参数不填，则默认值为8.0；若创建的是云盘版实例，则此参数仅能指定为5.7或8.0。</p>
 * @method void setEngineVersion(string $EngineVersion) 设置<p>MySQL 版本，值包括：5.5、5.6、5.7和8.0，请使用 <a href="https://cloud.tencent.com/document/api/236/17229">获取云数据库可售卖规格</a> 接口获取可创建的实例版本。<br>说明：创建非云盘版实例时，请根据需要指定实例版本（推荐5.7或8.0），若此参数不填，则默认值为8.0；若创建的是云盘版实例，则此参数仅能指定为5.7或8.0。</p>
 * @method string getPassword() 获取<p>设置 root 账号密码，密码规则：8 - 64 个字符，至少包含字母、数字、字符（支持的字符：_+-&amp;=!@#$%^*()）中的两种，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义。</p>
 * @method void setPassword(string $Password) 设置<p>设置 root 账号密码，密码规则：8 - 64 个字符，至少包含字母、数字、字符（支持的字符：_+-&amp;=!@#$%^*()）中的两种，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义。</p>
 * @method integer getProtectMode() 获取<p>数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。</p>
 * @method void setProtectMode(integer $ProtectMode) 设置<p>数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。</p>
 * @method integer getDeployMode() 获取<p>多可用区域，默认为 0，支持值包括：0 - 表示单可用区，1 - 表示多可用区。</p>
 * @method void setDeployMode(integer $DeployMode) 设置<p>多可用区域，默认为 0，支持值包括：0 - 表示单可用区，1 - 表示多可用区。</p>
 * @method string getSlaveZone() 获取<p>备库 1 的可用区信息。<br>说明：双节点、三节点实例请指定此参数值，若不指定，则默认为 Zone 的值；云盘版实例此参数可不填，请通过参数 ClusterTopology 进行读写节点和只读节点的可用区配置；单节点实例为单可用区，无需指定此参数。</p>
 * @method void setSlaveZone(string $SlaveZone) 设置<p>备库 1 的可用区信息。<br>说明：双节点、三节点实例请指定此参数值，若不指定，则默认为 Zone 的值；云盘版实例此参数可不填，请通过参数 ClusterTopology 进行读写节点和只读节点的可用区配置；单节点实例为单可用区，无需指定此参数。</p>
 * @method array getParamList() 获取<p>参数列表，参数格式如 ParamList.0.Name=auto_increment&amp;ParamList.0.Value=1。可通过 <a href="https://cloud.tencent.com/document/api/236/32662">查询默认的可设置参数列表</a> 查询支持设置的参数。<br>说明：表名大小写敏感的开启和关闭可通过参数 lower_case_table_names 进行设置，参数值为0表示开启，参数值为1表示关闭，若不设置则此参数默认值为0。若您创建的是 MySQL 8.0 版本的实例，则需要在创建实例时通过设置 lower_case_table_names 参数来开启或关闭表名大小写敏感，创建实例后无法修改参数，即创建后无法修改表名大小写敏感。其他数据库版本的实例支持在创建实例后修改 lower_case_table_names 参数。创建实例时设置表名大小写敏感的 API 调用方法请参见本文中的示例3。</p>
 * @method void setParamList(array $ParamList) 设置<p>参数列表，参数格式如 ParamList.0.Name=auto_increment&amp;ParamList.0.Value=1。可通过 <a href="https://cloud.tencent.com/document/api/236/32662">查询默认的可设置参数列表</a> 查询支持设置的参数。<br>说明：表名大小写敏感的开启和关闭可通过参数 lower_case_table_names 进行设置，参数值为0表示开启，参数值为1表示关闭，若不设置则此参数默认值为0。若您创建的是 MySQL 8.0 版本的实例，则需要在创建实例时通过设置 lower_case_table_names 参数来开启或关闭表名大小写敏感，创建实例后无法修改参数，即创建后无法修改表名大小写敏感。其他数据库版本的实例支持在创建实例后修改 lower_case_table_names 参数。创建实例时设置表名大小写敏感的 API 调用方法请参见本文中的示例3。</p>
 * @method string getBackupZone() 获取<p>备库 2 的可用区信息，默认为空，购买三节点主实例时可指定该参数。</p>
 * @method void setBackupZone(string $BackupZone) 设置<p>备库 2 的可用区信息，默认为空，购买三节点主实例时可指定该参数。</p>
 * @method integer getAutoRenewFlag() 获取<p>自动续费标记，可选值为：0 - 不自动续费；1 - 自动续费。默认为0。</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>自动续费标记，可选值为：0 - 不自动续费；1 - 自动续费。默认为0。</p>
 * @method string getMasterRegion() 获取<p>主实例地域信息，购买灾备、RO实例时，该字段必填。</p>
 * @method void setMasterRegion(string $MasterRegion) 设置<p>主实例地域信息，购买灾备、RO实例时，该字段必填。</p>
 * @method array getSecurityGroup() 获取<p>安全组参数，可使用 <a href="https://cloud.tencent.com/document/api/236/15850">查询项目安全组信息</a> 接口查询某个项目的安全组详情。</p>
 * @method void setSecurityGroup(array $SecurityGroup) 设置<p>安全组参数，可使用 <a href="https://cloud.tencent.com/document/api/236/15850">查询项目安全组信息</a> 接口查询某个项目的安全组详情。</p>
 * @method RoGroup getRoGroup() 获取<p>只读实例参数。购买只读实例时，该参数必传。</p>
 * @method void setRoGroup(RoGroup $RoGroup) 设置<p>只读实例参数。购买只读实例时，该参数必传。</p>
 * @method string getInstanceName() 获取<p>实例名称。一次购买多个实例命名会用后缀数字区分，例instnaceName=db，goodsNum=3，实例命名分别为db1，db2，db3。</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称。一次购买多个实例命名会用后缀数字区分，例instnaceName=db，goodsNum=3，实例命名分别为db1，db2，db3。</p>
 * @method array getResourceTags() 获取<p>实例标签信息。</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>实例标签信息。</p>
 * @method string getDeployGroupId() 获取<p>置放群组 ID。</p>
 * @method void setDeployGroupId(string $DeployGroupId) 设置<p>置放群组 ID。</p>
 * @method string getClientToken() 获取<p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间在48小时内唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
 * @method void setClientToken(string $ClientToken) 设置<p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间在48小时内唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
 * @method string getDeviceType() 获取<p>实例隔离类型。支持值包括：&quot;UNIVERSAL&quot; - 通用型实例，&quot;EXCLUSIVE&quot; - 独享型实例，&quot;BASIC_V2&quot; - ONTKE 单节点实例，&quot;CLOUD_NATIVE_CLUSTER&quot; - 云盘版标准型，&quot;CLOUD_NATIVE_CLUSTER_EXCLUSIVE&quot; - 云盘版加强型。不指定则默认为通用型实例。<br>说明：如果创建的是云盘版实例，此参数为必填。</p>
 * @method void setDeviceType(string $DeviceType) 设置<p>实例隔离类型。支持值包括：&quot;UNIVERSAL&quot; - 通用型实例，&quot;EXCLUSIVE&quot; - 独享型实例，&quot;BASIC_V2&quot; - ONTKE 单节点实例，&quot;CLOUD_NATIVE_CLUSTER&quot; - 云盘版标准型，&quot;CLOUD_NATIVE_CLUSTER_EXCLUSIVE&quot; - 云盘版加强型。不指定则默认为通用型实例。<br>说明：如果创建的是云盘版实例，此参数为必填。</p>
 * @method integer getParamTemplateId() 获取<p>参数模板 id。<br>备注：如您使用自定义参数模板 id，可传入自定义参数模板 id；如您计划使用默认参数模板，该参数模板 id 传入 id 无效，需设置 ParamTemplateType。</p>
 * @method void setParamTemplateId(integer $ParamTemplateId) 设置<p>参数模板 id。<br>备注：如您使用自定义参数模板 id，可传入自定义参数模板 id；如您计划使用默认参数模板，该参数模板 id 传入 id 无效，需设置 ParamTemplateType。</p>
 * @method array getAlarmPolicyList() 获取<p>告警策略id数组。腾讯云可观测平台DescribeAlarmPolicy接口返回的OriginId。</p>
 * @method void setAlarmPolicyList(array $AlarmPolicyList) 设置<p>告警策略id数组。腾讯云可观测平台DescribeAlarmPolicy接口返回的OriginId。</p>
 * @method integer getInstanceNodes() 获取<p>实例节点数。对于 RO 和 基础版实例， 该值默认为1。 如果需要购买三节点实例， 请将该值设置为3 或指定 BackupZone 参数。当购买主实例，且未指定该参数和 BackupZone 参数时，该值默认是 2， 即购买两节点实例。</p>
 * @method void setInstanceNodes(integer $InstanceNodes) 设置<p>实例节点数。对于 RO 和 基础版实例， 该值默认为1。 如果需要购买三节点实例， 请将该值设置为3 或指定 BackupZone 参数。当购买主实例，且未指定该参数和 BackupZone 参数时，该值默认是 2， 即购买两节点实例。</p>
 * @method integer getCpu() 获取<p>实例 Cpu 核数。</p><p>当内存规格 Memory 存在多种 CPU 配置时（如 64000MB 内存对应 8核/16核/32核），必须传入 Cpu 参数。</p>
 * @method void setCpu(integer $Cpu) 设置<p>实例 Cpu 核数。</p><p>当内存规格 Memory 存在多种 CPU 配置时（如 64000MB 内存对应 8核/16核/32核），必须传入 Cpu 参数。</p>
 * @method integer getAutoSyncFlag() 获取<p>是否自动发起灾备同步功能。该参数仅对购买灾备实例生效。 可选值为：0 - 不自动发起灾备同步；1 - 自动发起灾备同步。该值默认为0。</p>
 * @method void setAutoSyncFlag(integer $AutoSyncFlag) 设置<p>是否自动发起灾备同步功能。该参数仅对购买灾备实例生效。 可选值为：0 - 不自动发起灾备同步；1 - 自动发起灾备同步。该值默认为0。</p>
 * @method string getCageId() 获取<p>金融围拢 ID。</p>
 * @method void setCageId(string $CageId) 设置<p>金融围拢 ID。</p>
 * @method string getParamTemplateType() 获取<p>默认参数模板类型。支持值包括：&quot;HIGH_STABILITY&quot; - 高稳定模板，&quot;HIGH_PERFORMANCE&quot; - 高性能模板。<br>备注：如您需使用云数据库 MySQL 默认参数模板，请设置 ParamTemplateType。</p>
 * @method void setParamTemplateType(string $ParamTemplateType) 设置<p>默认参数模板类型。支持值包括：&quot;HIGH_STABILITY&quot; - 高稳定模板，&quot;HIGH_PERFORMANCE&quot; - 高性能模板。<br>备注：如您需使用云数据库 MySQL 默认参数模板，请设置 ParamTemplateType。</p>
 * @method array getAlarmPolicyIdList() 获取<p>告警策略名数组，例如:[&quot;policy-uyoee9wg&quot;]，AlarmPolicyList不为空时该参数无效。</p>
 * @method void setAlarmPolicyIdList(array $AlarmPolicyIdList) 设置<p>告警策略名数组，例如:[&quot;policy-uyoee9wg&quot;]，AlarmPolicyList不为空时该参数无效。</p>
 * @method boolean getDryRun() 获取<p>是否只预检此次请求。true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制等。如果检查不通过，则返回对应错误码；如果检查通过，则返回 RequestId。false：发送正常请求，通过检查后直接创建实例。<br>默认为 false。</p>
 * @method void setDryRun(boolean $DryRun) 设置<p>是否只预检此次请求。true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制等。如果检查不通过，则返回对应错误码；如果检查通过，则返回 RequestId。false：发送正常请求，通过检查后直接创建实例。<br>默认为 false。</p>
 * @method string getEngineType() 获取<p>实例引擎类型，默认为&quot;InnoDB&quot;，支持值包括：&quot;InnoDB&quot;，&quot;RocksDB&quot;。</p>
 * @method void setEngineType(string $EngineType) 设置<p>实例引擎类型，默认为&quot;InnoDB&quot;，支持值包括：&quot;InnoDB&quot;，&quot;RocksDB&quot;。</p>
 * @method array getVips() 获取<p>指定实例的IP列表。仅支持主实例指定，按实例顺序，不足则按未指定处理。</p>
 * @method void setVips(array $Vips) 设置<p>指定实例的IP列表。仅支持主实例指定，按实例顺序，不足则按未指定处理。</p>
 * @method integer getDataProtectVolume() 获取<p>云盘版实例的数据保护空间大小，单位 GB，设置范围1 - 10。</p>
 * @method void setDataProtectVolume(integer $DataProtectVolume) 设置<p>云盘版实例的数据保护空间大小，单位 GB，设置范围1 - 10。</p>
 * @method ClusterTopology getClusterTopology() 获取<p>云盘版节点拓扑配置。<br>说明：若购买的是云盘版实例，此参数为必填，需设置云盘版实例的 RW 和 RO 节点拓扑，RO 节点范围是1 - 5个，请至少设置1个 RO 节点。</p>
 * @method void setClusterTopology(ClusterTopology $ClusterTopology) 设置<p>云盘版节点拓扑配置。<br>说明：若购买的是云盘版实例，此参数为必填，需设置云盘版实例的 RW 和 RO 节点拓扑，RO 节点范围是1 - 5个，请至少设置1个 RO 节点。</p>
 * @method string getDiskType() 获取<p>磁盘类型，单节点（云盘版）或者云盘版实例可以指定此参数。CLOUD_SSD 表示 SSD 云硬盘，CLOUD_HSSD 表示增强型 SSD 云硬盘，CLOUD_PREMIUM 表示高性能云硬盘。<br>说明：单节点（云盘版）、云盘版实例硬盘类型所支持的地域略有不同，具体支持情况请参考 <a href="https://cloud.tencent.com/document/product/236/8458">地域和可用区</a>。</p>
 * @method void setDiskType(string $DiskType) 设置<p>磁盘类型，单节点（云盘版）或者云盘版实例可以指定此参数。CLOUD_SSD 表示 SSD 云硬盘，CLOUD_HSSD 表示增强型 SSD 云硬盘，CLOUD_PREMIUM 表示高性能云硬盘。<br>说明：单节点（云盘版）、云盘版实例硬盘类型所支持的地域略有不同，具体支持情况请参考 <a href="https://cloud.tencent.com/document/product/236/8458">地域和可用区</a>。</p>
 * @method string getDestroyProtect() 获取<p>开启或关闭实例销毁保护。on-开启，off-关闭</p>
 * @method void setDestroyProtect(string $DestroyProtect) 设置<p>开启或关闭实例销毁保护。on-开启，off-关闭</p>
 */
class CreateDBInstanceRequest extends AbstractModel
{
    /**
     * @var integer <p>实例内存大小，单位：MB，请使用 <a href="https://cloud.tencent.com/document/api/236/17229">获取云数据库可售卖规格</a> 接口获取可创建的内存规格。</p>
     */
    public $Memory;

    /**
     * @var integer <p>实例硬盘大小，单位：GB，请使用 <a href="https://cloud.tencent.com/document/api/236/17229">获取云数据库可售卖规格</a> 接口获取可创建的硬盘范围。</p>
     */
    public $Volume;

    /**
     * @var integer <p>实例时长，单位：月，可选值包括 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。</p>
     */
    public $Period;

    /**
     * @var integer <p>实例数量，默认值为1, 最小值1，最大值为100。</p>
     */
    public $GoodsNum;

    /**
     * @var string <p>可用区信息，请使用 <a href="https://cloud.tencent.com/document/api/236/17229">获取云数据库可售卖规格</a> 接口获取可创建的可用区。<br>说明：若您创建单节点、双节点、三节点实例，此参数为必填项，请指定可用区，若不指定可用区，则系统会自动选择一个可用区（可能不是您希望部署的可用区）；若您创建云盘版实例，此参数不填，请通过参数 ClusterTopology 进行读写节点和只读节点的可用区配置。</p>
     */
    public $Zone;

    /**
     * @var string <p>私有网络 ID，请使用 <a href="/document/api/215/15778">查询私有网络列表</a>。<br>说明：如果创建的是云盘版实例，此参数为必填且为私有网络类型。若此项不填，则系统会选择默认的 VPC。</p>
     */
    public $UniqVpcId;

    /**
     * @var string <p>私有网络下的子网 ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用 <a href="/document/api/215/15784">查询子网列表</a>。<br>说明：若此项不填，则系统会选择默认 VPC 下的默认子网。</p>
     */
    public $UniqSubnetId;

    /**
     * @var integer <p>项目 ID，不填为默认项目。购买只读实例和灾备实例时，项目 ID 默认和主实例保持一致。</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>自定义端口，端口支持范围：[ 1024-65535 ]。<br>说明：若此项不填，则默认为3306。</p>
     */
    public $Port;

    /**
     * @var string <p>实例类型，支持值包括：master - 表示主实例，dr - 表示灾备实例，ro - 表示只读实例。<br>说明：请选择实例类型，不填会默认选择 master。</p>
     */
    public $InstanceRole;

    /**
     * @var string <p>实例 ID，购买只读实例或灾备实例时必填，该字段表示只读实例或灾备实例的主实例 ID，请使用 <a href="https://cloud.tencent.com/document/api/236/15872">查询实例列表</a> 接口查询云数据库实例 ID。</p>
     */
    public $MasterInstanceId;

    /**
     * @var string <p>MySQL 版本，值包括：5.5、5.6、5.7和8.0，请使用 <a href="https://cloud.tencent.com/document/api/236/17229">获取云数据库可售卖规格</a> 接口获取可创建的实例版本。<br>说明：创建非云盘版实例时，请根据需要指定实例版本（推荐5.7或8.0），若此参数不填，则默认值为8.0；若创建的是云盘版实例，则此参数仅能指定为5.7或8.0。</p>
     */
    public $EngineVersion;

    /**
     * @var string <p>设置 root 账号密码，密码规则：8 - 64 个字符，至少包含字母、数字、字符（支持的字符：_+-&amp;=!@#$%^*()）中的两种，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义。</p>
     */
    public $Password;

    /**
     * @var integer <p>数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。</p>
     */
    public $ProtectMode;

    /**
     * @var integer <p>多可用区域，默认为 0，支持值包括：0 - 表示单可用区，1 - 表示多可用区。</p>
     */
    public $DeployMode;

    /**
     * @var string <p>备库 1 的可用区信息。<br>说明：双节点、三节点实例请指定此参数值，若不指定，则默认为 Zone 的值；云盘版实例此参数可不填，请通过参数 ClusterTopology 进行读写节点和只读节点的可用区配置；单节点实例为单可用区，无需指定此参数。</p>
     */
    public $SlaveZone;

    /**
     * @var array <p>参数列表，参数格式如 ParamList.0.Name=auto_increment&amp;ParamList.0.Value=1。可通过 <a href="https://cloud.tencent.com/document/api/236/32662">查询默认的可设置参数列表</a> 查询支持设置的参数。<br>说明：表名大小写敏感的开启和关闭可通过参数 lower_case_table_names 进行设置，参数值为0表示开启，参数值为1表示关闭，若不设置则此参数默认值为0。若您创建的是 MySQL 8.0 版本的实例，则需要在创建实例时通过设置 lower_case_table_names 参数来开启或关闭表名大小写敏感，创建实例后无法修改参数，即创建后无法修改表名大小写敏感。其他数据库版本的实例支持在创建实例后修改 lower_case_table_names 参数。创建实例时设置表名大小写敏感的 API 调用方法请参见本文中的示例3。</p>
     */
    public $ParamList;

    /**
     * @var string <p>备库 2 的可用区信息，默认为空，购买三节点主实例时可指定该参数。</p>
     */
    public $BackupZone;

    /**
     * @var integer <p>自动续费标记，可选值为：0 - 不自动续费；1 - 自动续费。默认为0。</p>
     */
    public $AutoRenewFlag;

    /**
     * @var string <p>主实例地域信息，购买灾备、RO实例时，该字段必填。</p>
     */
    public $MasterRegion;

    /**
     * @var array <p>安全组参数，可使用 <a href="https://cloud.tencent.com/document/api/236/15850">查询项目安全组信息</a> 接口查询某个项目的安全组详情。</p>
     */
    public $SecurityGroup;

    /**
     * @var RoGroup <p>只读实例参数。购买只读实例时，该参数必传。</p>
     */
    public $RoGroup;

    /**
     * @var string <p>实例名称。一次购买多个实例命名会用后缀数字区分，例instnaceName=db，goodsNum=3，实例命名分别为db1，db2，db3。</p>
     */
    public $InstanceName;

    /**
     * @var array <p>实例标签信息。</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>置放群组 ID。</p>
     */
    public $DeployGroupId;

    /**
     * @var string <p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间在48小时内唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
     */
    public $ClientToken;

    /**
     * @var string <p>实例隔离类型。支持值包括：&quot;UNIVERSAL&quot; - 通用型实例，&quot;EXCLUSIVE&quot; - 独享型实例，&quot;BASIC_V2&quot; - ONTKE 单节点实例，&quot;CLOUD_NATIVE_CLUSTER&quot; - 云盘版标准型，&quot;CLOUD_NATIVE_CLUSTER_EXCLUSIVE&quot; - 云盘版加强型。不指定则默认为通用型实例。<br>说明：如果创建的是云盘版实例，此参数为必填。</p>
     */
    public $DeviceType;

    /**
     * @var integer <p>参数模板 id。<br>备注：如您使用自定义参数模板 id，可传入自定义参数模板 id；如您计划使用默认参数模板，该参数模板 id 传入 id 无效，需设置 ParamTemplateType。</p>
     */
    public $ParamTemplateId;

    /**
     * @var array <p>告警策略id数组。腾讯云可观测平台DescribeAlarmPolicy接口返回的OriginId。</p>
     */
    public $AlarmPolicyList;

    /**
     * @var integer <p>实例节点数。对于 RO 和 基础版实例， 该值默认为1。 如果需要购买三节点实例， 请将该值设置为3 或指定 BackupZone 参数。当购买主实例，且未指定该参数和 BackupZone 参数时，该值默认是 2， 即购买两节点实例。</p>
     */
    public $InstanceNodes;

    /**
     * @var integer <p>实例 Cpu 核数。</p><p>当内存规格 Memory 存在多种 CPU 配置时（如 64000MB 内存对应 8核/16核/32核），必须传入 Cpu 参数。</p>
     */
    public $Cpu;

    /**
     * @var integer <p>是否自动发起灾备同步功能。该参数仅对购买灾备实例生效。 可选值为：0 - 不自动发起灾备同步；1 - 自动发起灾备同步。该值默认为0。</p>
     */
    public $AutoSyncFlag;

    /**
     * @var string <p>金融围拢 ID。</p>
     */
    public $CageId;

    /**
     * @var string <p>默认参数模板类型。支持值包括：&quot;HIGH_STABILITY&quot; - 高稳定模板，&quot;HIGH_PERFORMANCE&quot; - 高性能模板。<br>备注：如您需使用云数据库 MySQL 默认参数模板，请设置 ParamTemplateType。</p>
     */
    public $ParamTemplateType;

    /**
     * @var array <p>告警策略名数组，例如:[&quot;policy-uyoee9wg&quot;]，AlarmPolicyList不为空时该参数无效。</p>
     */
    public $AlarmPolicyIdList;

    /**
     * @var boolean <p>是否只预检此次请求。true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制等。如果检查不通过，则返回对应错误码；如果检查通过，则返回 RequestId。false：发送正常请求，通过检查后直接创建实例。<br>默认为 false。</p>
     */
    public $DryRun;

    /**
     * @var string <p>实例引擎类型，默认为&quot;InnoDB&quot;，支持值包括：&quot;InnoDB&quot;，&quot;RocksDB&quot;。</p>
     */
    public $EngineType;

    /**
     * @var array <p>指定实例的IP列表。仅支持主实例指定，按实例顺序，不足则按未指定处理。</p>
     */
    public $Vips;

    /**
     * @var integer <p>云盘版实例的数据保护空间大小，单位 GB，设置范围1 - 10。</p>
     */
    public $DataProtectVolume;

    /**
     * @var ClusterTopology <p>云盘版节点拓扑配置。<br>说明：若购买的是云盘版实例，此参数为必填，需设置云盘版实例的 RW 和 RO 节点拓扑，RO 节点范围是1 - 5个，请至少设置1个 RO 节点。</p>
     */
    public $ClusterTopology;

    /**
     * @var string <p>磁盘类型，单节点（云盘版）或者云盘版实例可以指定此参数。CLOUD_SSD 表示 SSD 云硬盘，CLOUD_HSSD 表示增强型 SSD 云硬盘，CLOUD_PREMIUM 表示高性能云硬盘。<br>说明：单节点（云盘版）、云盘版实例硬盘类型所支持的地域略有不同，具体支持情况请参考 <a href="https://cloud.tencent.com/document/product/236/8458">地域和可用区</a>。</p>
     */
    public $DiskType;

    /**
     * @var string <p>开启或关闭实例销毁保护。on-开启，off-关闭</p>
     */
    public $DestroyProtect;

    /**
     * @param integer $Memory <p>实例内存大小，单位：MB，请使用 <a href="https://cloud.tencent.com/document/api/236/17229">获取云数据库可售卖规格</a> 接口获取可创建的内存规格。</p>
     * @param integer $Volume <p>实例硬盘大小，单位：GB，请使用 <a href="https://cloud.tencent.com/document/api/236/17229">获取云数据库可售卖规格</a> 接口获取可创建的硬盘范围。</p>
     * @param integer $Period <p>实例时长，单位：月，可选值包括 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。</p>
     * @param integer $GoodsNum <p>实例数量，默认值为1, 最小值1，最大值为100。</p>
     * @param string $Zone <p>可用区信息，请使用 <a href="https://cloud.tencent.com/document/api/236/17229">获取云数据库可售卖规格</a> 接口获取可创建的可用区。<br>说明：若您创建单节点、双节点、三节点实例，此参数为必填项，请指定可用区，若不指定可用区，则系统会自动选择一个可用区（可能不是您希望部署的可用区）；若您创建云盘版实例，此参数不填，请通过参数 ClusterTopology 进行读写节点和只读节点的可用区配置。</p>
     * @param string $UniqVpcId <p>私有网络 ID，请使用 <a href="/document/api/215/15778">查询私有网络列表</a>。<br>说明：如果创建的是云盘版实例，此参数为必填且为私有网络类型。若此项不填，则系统会选择默认的 VPC。</p>
     * @param string $UniqSubnetId <p>私有网络下的子网 ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用 <a href="/document/api/215/15784">查询子网列表</a>。<br>说明：若此项不填，则系统会选择默认 VPC 下的默认子网。</p>
     * @param integer $ProjectId <p>项目 ID，不填为默认项目。购买只读实例和灾备实例时，项目 ID 默认和主实例保持一致。</p>
     * @param integer $Port <p>自定义端口，端口支持范围：[ 1024-65535 ]。<br>说明：若此项不填，则默认为3306。</p>
     * @param string $InstanceRole <p>实例类型，支持值包括：master - 表示主实例，dr - 表示灾备实例，ro - 表示只读实例。<br>说明：请选择实例类型，不填会默认选择 master。</p>
     * @param string $MasterInstanceId <p>实例 ID，购买只读实例或灾备实例时必填，该字段表示只读实例或灾备实例的主实例 ID，请使用 <a href="https://cloud.tencent.com/document/api/236/15872">查询实例列表</a> 接口查询云数据库实例 ID。</p>
     * @param string $EngineVersion <p>MySQL 版本，值包括：5.5、5.6、5.7和8.0，请使用 <a href="https://cloud.tencent.com/document/api/236/17229">获取云数据库可售卖规格</a> 接口获取可创建的实例版本。<br>说明：创建非云盘版实例时，请根据需要指定实例版本（推荐5.7或8.0），若此参数不填，则默认值为8.0；若创建的是云盘版实例，则此参数仅能指定为5.7或8.0。</p>
     * @param string $Password <p>设置 root 账号密码，密码规则：8 - 64 个字符，至少包含字母、数字、字符（支持的字符：_+-&amp;=!@#$%^*()）中的两种，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义。</p>
     * @param integer $ProtectMode <p>数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。</p>
     * @param integer $DeployMode <p>多可用区域，默认为 0，支持值包括：0 - 表示单可用区，1 - 表示多可用区。</p>
     * @param string $SlaveZone <p>备库 1 的可用区信息。<br>说明：双节点、三节点实例请指定此参数值，若不指定，则默认为 Zone 的值；云盘版实例此参数可不填，请通过参数 ClusterTopology 进行读写节点和只读节点的可用区配置；单节点实例为单可用区，无需指定此参数。</p>
     * @param array $ParamList <p>参数列表，参数格式如 ParamList.0.Name=auto_increment&amp;ParamList.0.Value=1。可通过 <a href="https://cloud.tencent.com/document/api/236/32662">查询默认的可设置参数列表</a> 查询支持设置的参数。<br>说明：表名大小写敏感的开启和关闭可通过参数 lower_case_table_names 进行设置，参数值为0表示开启，参数值为1表示关闭，若不设置则此参数默认值为0。若您创建的是 MySQL 8.0 版本的实例，则需要在创建实例时通过设置 lower_case_table_names 参数来开启或关闭表名大小写敏感，创建实例后无法修改参数，即创建后无法修改表名大小写敏感。其他数据库版本的实例支持在创建实例后修改 lower_case_table_names 参数。创建实例时设置表名大小写敏感的 API 调用方法请参见本文中的示例3。</p>
     * @param string $BackupZone <p>备库 2 的可用区信息，默认为空，购买三节点主实例时可指定该参数。</p>
     * @param integer $AutoRenewFlag <p>自动续费标记，可选值为：0 - 不自动续费；1 - 自动续费。默认为0。</p>
     * @param string $MasterRegion <p>主实例地域信息，购买灾备、RO实例时，该字段必填。</p>
     * @param array $SecurityGroup <p>安全组参数，可使用 <a href="https://cloud.tencent.com/document/api/236/15850">查询项目安全组信息</a> 接口查询某个项目的安全组详情。</p>
     * @param RoGroup $RoGroup <p>只读实例参数。购买只读实例时，该参数必传。</p>
     * @param string $InstanceName <p>实例名称。一次购买多个实例命名会用后缀数字区分，例instnaceName=db，goodsNum=3，实例命名分别为db1，db2，db3。</p>
     * @param array $ResourceTags <p>实例标签信息。</p>
     * @param string $DeployGroupId <p>置放群组 ID。</p>
     * @param string $ClientToken <p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间在48小时内唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
     * @param string $DeviceType <p>实例隔离类型。支持值包括：&quot;UNIVERSAL&quot; - 通用型实例，&quot;EXCLUSIVE&quot; - 独享型实例，&quot;BASIC_V2&quot; - ONTKE 单节点实例，&quot;CLOUD_NATIVE_CLUSTER&quot; - 云盘版标准型，&quot;CLOUD_NATIVE_CLUSTER_EXCLUSIVE&quot; - 云盘版加强型。不指定则默认为通用型实例。<br>说明：如果创建的是云盘版实例，此参数为必填。</p>
     * @param integer $ParamTemplateId <p>参数模板 id。<br>备注：如您使用自定义参数模板 id，可传入自定义参数模板 id；如您计划使用默认参数模板，该参数模板 id 传入 id 无效，需设置 ParamTemplateType。</p>
     * @param array $AlarmPolicyList <p>告警策略id数组。腾讯云可观测平台DescribeAlarmPolicy接口返回的OriginId。</p>
     * @param integer $InstanceNodes <p>实例节点数。对于 RO 和 基础版实例， 该值默认为1。 如果需要购买三节点实例， 请将该值设置为3 或指定 BackupZone 参数。当购买主实例，且未指定该参数和 BackupZone 参数时，该值默认是 2， 即购买两节点实例。</p>
     * @param integer $Cpu <p>实例 Cpu 核数。</p><p>当内存规格 Memory 存在多种 CPU 配置时（如 64000MB 内存对应 8核/16核/32核），必须传入 Cpu 参数。</p>
     * @param integer $AutoSyncFlag <p>是否自动发起灾备同步功能。该参数仅对购买灾备实例生效。 可选值为：0 - 不自动发起灾备同步；1 - 自动发起灾备同步。该值默认为0。</p>
     * @param string $CageId <p>金融围拢 ID。</p>
     * @param string $ParamTemplateType <p>默认参数模板类型。支持值包括：&quot;HIGH_STABILITY&quot; - 高稳定模板，&quot;HIGH_PERFORMANCE&quot; - 高性能模板。<br>备注：如您需使用云数据库 MySQL 默认参数模板，请设置 ParamTemplateType。</p>
     * @param array $AlarmPolicyIdList <p>告警策略名数组，例如:[&quot;policy-uyoee9wg&quot;]，AlarmPolicyList不为空时该参数无效。</p>
     * @param boolean $DryRun <p>是否只预检此次请求。true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制等。如果检查不通过，则返回对应错误码；如果检查通过，则返回 RequestId。false：发送正常请求，通过检查后直接创建实例。<br>默认为 false。</p>
     * @param string $EngineType <p>实例引擎类型，默认为&quot;InnoDB&quot;，支持值包括：&quot;InnoDB&quot;，&quot;RocksDB&quot;。</p>
     * @param array $Vips <p>指定实例的IP列表。仅支持主实例指定，按实例顺序，不足则按未指定处理。</p>
     * @param integer $DataProtectVolume <p>云盘版实例的数据保护空间大小，单位 GB，设置范围1 - 10。</p>
     * @param ClusterTopology $ClusterTopology <p>云盘版节点拓扑配置。<br>说明：若购买的是云盘版实例，此参数为必填，需设置云盘版实例的 RW 和 RO 节点拓扑，RO 节点范围是1 - 5个，请至少设置1个 RO 节点。</p>
     * @param string $DiskType <p>磁盘类型，单节点（云盘版）或者云盘版实例可以指定此参数。CLOUD_SSD 表示 SSD 云硬盘，CLOUD_HSSD 表示增强型 SSD 云硬盘，CLOUD_PREMIUM 表示高性能云硬盘。<br>说明：单节点（云盘版）、云盘版实例硬盘类型所支持的地域略有不同，具体支持情况请参考 <a href="https://cloud.tencent.com/document/product/236/8458">地域和可用区</a>。</p>
     * @param string $DestroyProtect <p>开启或关闭实例销毁保护。on-开启，off-关闭</p>
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
        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("MasterInstanceId",$param) and $param["MasterInstanceId"] !== null) {
            $this->MasterInstanceId = $param["MasterInstanceId"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ProtectMode",$param) and $param["ProtectMode"] !== null) {
            $this->ProtectMode = $param["ProtectMode"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("SlaveZone",$param) and $param["SlaveZone"] !== null) {
            $this->SlaveZone = $param["SlaveZone"];
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new ParamInfo();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }

        if (array_key_exists("BackupZone",$param) and $param["BackupZone"] !== null) {
            $this->BackupZone = $param["BackupZone"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("MasterRegion",$param) and $param["MasterRegion"] !== null) {
            $this->MasterRegion = $param["MasterRegion"];
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("RoGroup",$param) and $param["RoGroup"] !== null) {
            $this->RoGroup = new RoGroup();
            $this->RoGroup->deserialize($param["RoGroup"]);
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("DeployGroupId",$param) and $param["DeployGroupId"] !== null) {
            $this->DeployGroupId = $param["DeployGroupId"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }

        if (array_key_exists("AlarmPolicyList",$param) and $param["AlarmPolicyList"] !== null) {
            $this->AlarmPolicyList = $param["AlarmPolicyList"];
        }

        if (array_key_exists("InstanceNodes",$param) and $param["InstanceNodes"] !== null) {
            $this->InstanceNodes = $param["InstanceNodes"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("AutoSyncFlag",$param) and $param["AutoSyncFlag"] !== null) {
            $this->AutoSyncFlag = $param["AutoSyncFlag"];
        }

        if (array_key_exists("CageId",$param) and $param["CageId"] !== null) {
            $this->CageId = $param["CageId"];
        }

        if (array_key_exists("ParamTemplateType",$param) and $param["ParamTemplateType"] !== null) {
            $this->ParamTemplateType = $param["ParamTemplateType"];
        }

        if (array_key_exists("AlarmPolicyIdList",$param) and $param["AlarmPolicyIdList"] !== null) {
            $this->AlarmPolicyIdList = $param["AlarmPolicyIdList"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("Vips",$param) and $param["Vips"] !== null) {
            $this->Vips = $param["Vips"];
        }

        if (array_key_exists("DataProtectVolume",$param) and $param["DataProtectVolume"] !== null) {
            $this->DataProtectVolume = $param["DataProtectVolume"];
        }

        if (array_key_exists("ClusterTopology",$param) and $param["ClusterTopology"] !== null) {
            $this->ClusterTopology = new ClusterTopology();
            $this->ClusterTopology->deserialize($param["ClusterTopology"]);
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DestroyProtect",$param) and $param["DestroyProtect"] !== null) {
            $this->DestroyProtect = $param["DestroyProtect"];
        }
    }
}
