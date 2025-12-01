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
 * @method integer getMemory() 获取实例内存大小，单位：MB，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的内存规格。
 * @method void setMemory(integer $Memory) 设置实例内存大小，单位：MB，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的内存规格。
 * @method integer getVolume() 获取实例硬盘大小，单位：GB，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的硬盘范围。
 * @method void setVolume(integer $Volume) 设置实例硬盘大小，单位：GB，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的硬盘范围。
 * @method integer getPeriod() 获取实例时长，单位：月，可选值包括 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。
 * @method void setPeriod(integer $Period) 设置实例时长，单位：月，可选值包括 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。
 * @method integer getGoodsNum() 获取实例数量，默认值为1, 最小值1，最大值为100。
 * @method void setGoodsNum(integer $GoodsNum) 设置实例数量，默认值为1, 最小值1，最大值为100。
 * @method string getZone() 获取可用区信息，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的可用区。
说明：若您创建单节点、双节点、三节点实例，此参数为必填项，请指定可用区，若不指定可用区，则系统会自动选择一个可用区（可能不是您希望部署的可用区）；若您创建云盘版实例，此参数不填，请通过参数 ClusterTopology 进行读写节点和只读节点的可用区配置。
 * @method void setZone(string $Zone) 设置可用区信息，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的可用区。
说明：若您创建单节点、双节点、三节点实例，此参数为必填项，请指定可用区，若不指定可用区，则系统会自动选择一个可用区（可能不是您希望部署的可用区）；若您创建云盘版实例，此参数不填，请通过参数 ClusterTopology 进行读写节点和只读节点的可用区配置。
 * @method string getUniqVpcId() 获取私有网络 ID，请使用 [查询私有网络列表](/document/api/215/15778)。
说明：如果创建的是云盘版实例，此参数为必填且为私有网络类型。若此项不填，则系统会选择默认的 VPC。
 * @method void setUniqVpcId(string $UniqVpcId) 设置私有网络 ID，请使用 [查询私有网络列表](/document/api/215/15778)。
说明：如果创建的是云盘版实例，此参数为必填且为私有网络类型。若此项不填，则系统会选择默认的 VPC。
 * @method string getUniqSubnetId() 获取私有网络下的子网 ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用 [查询子网列表](/document/api/215/15784)。
说明：若此项不填，则系统会选择默认 VPC 下的默认子网。
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置私有网络下的子网 ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用 [查询子网列表](/document/api/215/15784)。
说明：若此项不填，则系统会选择默认 VPC 下的默认子网。
 * @method integer getProjectId() 获取项目 ID，不填为默认项目。购买只读实例和灾备实例时，项目 ID 默认和主实例保持一致。
 * @method void setProjectId(integer $ProjectId) 设置项目 ID，不填为默认项目。购买只读实例和灾备实例时，项目 ID 默认和主实例保持一致。
 * @method integer getPort() 获取自定义端口，端口支持范围：[ 1024-65535 ]。
说明：若此项不填，则默认为3306。
 * @method void setPort(integer $Port) 设置自定义端口，端口支持范围：[ 1024-65535 ]。
说明：若此项不填，则默认为3306。
 * @method string getInstanceRole() 获取实例类型，支持值包括：master - 表示主实例，dr - 表示灾备实例，ro - 表示只读实例。
说明：请选择实例类型，不填会默认选择 master。
 * @method void setInstanceRole(string $InstanceRole) 设置实例类型，支持值包括：master - 表示主实例，dr - 表示灾备实例，ro - 表示只读实例。
说明：请选择实例类型，不填会默认选择 master。
 * @method string getMasterInstanceId() 获取实例 ID，购买只读实例或灾备实例时必填，该字段表示只读实例或灾备实例的主实例 ID，请使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口查询云数据库实例 ID。
 * @method void setMasterInstanceId(string $MasterInstanceId) 设置实例 ID，购买只读实例或灾备实例时必填，该字段表示只读实例或灾备实例的主实例 ID，请使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口查询云数据库实例 ID。
 * @method string getEngineVersion() 获取MySQL 版本，值包括：5.5、5.6、5.7和8.0，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的实例版本。
说明：创建非云盘版实例时，请根据需要指定实例版本（推荐5.7或8.0），若此参数不填，则默认值为8.0；若创建的是云盘版实例，则此参数仅能指定为5.7或8.0。
 * @method void setEngineVersion(string $EngineVersion) 设置MySQL 版本，值包括：5.5、5.6、5.7和8.0，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的实例版本。
说明：创建非云盘版实例时，请根据需要指定实例版本（推荐5.7或8.0），若此参数不填，则默认值为8.0；若创建的是云盘版实例，则此参数仅能指定为5.7或8.0。
 * @method string getPassword() 获取设置 root 账号密码，密码规则：8 - 64 个字符，至少包含字母、数字、字符（支持的字符：_+-&=!@#$%^*()）中的两种，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义。
 * @method void setPassword(string $Password) 设置设置 root 账号密码，密码规则：8 - 64 个字符，至少包含字母、数字、字符（支持的字符：_+-&=!@#$%^*()）中的两种，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义。
 * @method integer getProtectMode() 获取数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。
 * @method void setProtectMode(integer $ProtectMode) 设置数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。
 * @method integer getDeployMode() 获取多可用区域，默认为 0，支持值包括：0 - 表示单可用区，1 - 表示多可用区。
 * @method void setDeployMode(integer $DeployMode) 设置多可用区域，默认为 0，支持值包括：0 - 表示单可用区，1 - 表示多可用区。
 * @method string getSlaveZone() 获取备库 1 的可用区信息。
说明：双节点、三节点实例请指定此参数值，若不指定，则默认为 Zone 的值；云盘版实例此参数可不填，请通过参数 ClusterTopology 进行读写节点和只读节点的可用区配置；单节点实例为单可用区，无需指定此参数。
 * @method void setSlaveZone(string $SlaveZone) 设置备库 1 的可用区信息。
说明：双节点、三节点实例请指定此参数值，若不指定，则默认为 Zone 的值；云盘版实例此参数可不填，请通过参数 ClusterTopology 进行读写节点和只读节点的可用区配置；单节点实例为单可用区，无需指定此参数。
 * @method array getParamList() 获取参数列表，参数格式如 ParamList.0.Name=auto_increment&ParamList.0.Value=1。可通过 [查询默认的可设置参数列表](https://cloud.tencent.com/document/api/236/32662) 查询支持设置的参数。
说明：表名大小写敏感的开启和关闭可通过参数 lower_case_table_names 进行设置，参数值为0表示开启，参数值为1表示关闭，若不设置则此参数默认值为0。若您创建的是 MySQL 8.0 版本的实例，则需要在创建实例时通过设置 lower_case_table_names 参数来开启或关闭表名大小写敏感，创建实例后无法修改参数，即创建后无法修改表名大小写敏感。其他数据库版本的实例支持在创建实例后修改 lower_case_table_names 参数。创建实例时设置表名大小写敏感的 API 调用方法请参见本文中的示例3。
 * @method void setParamList(array $ParamList) 设置参数列表，参数格式如 ParamList.0.Name=auto_increment&ParamList.0.Value=1。可通过 [查询默认的可设置参数列表](https://cloud.tencent.com/document/api/236/32662) 查询支持设置的参数。
说明：表名大小写敏感的开启和关闭可通过参数 lower_case_table_names 进行设置，参数值为0表示开启，参数值为1表示关闭，若不设置则此参数默认值为0。若您创建的是 MySQL 8.0 版本的实例，则需要在创建实例时通过设置 lower_case_table_names 参数来开启或关闭表名大小写敏感，创建实例后无法修改参数，即创建后无法修改表名大小写敏感。其他数据库版本的实例支持在创建实例后修改 lower_case_table_names 参数。创建实例时设置表名大小写敏感的 API 调用方法请参见本文中的示例3。
 * @method string getBackupZone() 获取备库 2 的可用区信息，默认为空，购买三节点主实例时可指定该参数。
 * @method void setBackupZone(string $BackupZone) 设置备库 2 的可用区信息，默认为空，购买三节点主实例时可指定该参数。
 * @method integer getAutoRenewFlag() 获取自动续费标记，可选值为：0 - 不自动续费；1 - 自动续费。默认为0。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标记，可选值为：0 - 不自动续费；1 - 自动续费。默认为0。
 * @method string getMasterRegion() 获取主实例地域信息，购买灾备、RO实例时，该字段必填。
 * @method void setMasterRegion(string $MasterRegion) 设置主实例地域信息，购买灾备、RO实例时，该字段必填。
 * @method array getSecurityGroup() 获取安全组参数，可使用 [查询项目安全组信息](https://cloud.tencent.com/document/api/236/15850) 接口查询某个项目的安全组详情。
 * @method void setSecurityGroup(array $SecurityGroup) 设置安全组参数，可使用 [查询项目安全组信息](https://cloud.tencent.com/document/api/236/15850) 接口查询某个项目的安全组详情。
 * @method RoGroup getRoGroup() 获取只读实例参数。购买只读实例时，该参数必传。
 * @method void setRoGroup(RoGroup $RoGroup) 设置只读实例参数。购买只读实例时，该参数必传。
 * @method string getInstanceName() 获取实例名称。一次购买多个实例命名会用后缀数字区分，例instnaceName=db，goodsNum=3，实例命名分别为db1，db2，db3。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。一次购买多个实例命名会用后缀数字区分，例instnaceName=db，goodsNum=3，实例命名分别为db1，db2，db3。
 * @method array getResourceTags() 获取实例标签信息。
 * @method void setResourceTags(array $ResourceTags) 设置实例标签信息。
 * @method string getDeployGroupId() 获取置放群组 ID。
 * @method void setDeployGroupId(string $DeployGroupId) 设置置放群组 ID。
 * @method string getClientToken() 获取用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间在48小时内唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
 * @method void setClientToken(string $ClientToken) 设置用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间在48小时内唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
 * @method string getDeviceType() 获取实例隔离类型。支持值包括："UNIVERSAL" - 通用型实例，"EXCLUSIVE" - 独享型实例，"BASIC_V2" - ONTKE 单节点实例，"CLOUD_NATIVE_CLUSTER" - 云盘版标准型，"CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - 云盘版加强型。不指定则默认为通用型实例。
说明：如果创建的是云盘版实例，此参数为必填。
 * @method void setDeviceType(string $DeviceType) 设置实例隔离类型。支持值包括："UNIVERSAL" - 通用型实例，"EXCLUSIVE" - 独享型实例，"BASIC_V2" - ONTKE 单节点实例，"CLOUD_NATIVE_CLUSTER" - 云盘版标准型，"CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - 云盘版加强型。不指定则默认为通用型实例。
说明：如果创建的是云盘版实例，此参数为必填。
 * @method integer getParamTemplateId() 获取参数模板 id。
备注：如您使用自定义参数模板 id，可传入自定义参数模板 id；如您计划使用默认参数模板，该参数模板 id 传入 id 无效，需设置 ParamTemplateType。
 * @method void setParamTemplateId(integer $ParamTemplateId) 设置参数模板 id。
备注：如您使用自定义参数模板 id，可传入自定义参数模板 id；如您计划使用默认参数模板，该参数模板 id 传入 id 无效，需设置 ParamTemplateType。
 * @method array getAlarmPolicyList() 获取告警策略id数组。腾讯云可观测平台DescribeAlarmPolicy接口返回的OriginId。
 * @method void setAlarmPolicyList(array $AlarmPolicyList) 设置告警策略id数组。腾讯云可观测平台DescribeAlarmPolicy接口返回的OriginId。
 * @method integer getInstanceNodes() 获取实例节点数。对于 RO 和 基础版实例， 该值默认为1。 如果需要购买三节点实例， 请将该值设置为3 或指定 BackupZone 参数。当购买主实例，且未指定该参数和 BackupZone 参数时，该值默认是 2， 即购买两节点实例。
 * @method void setInstanceNodes(integer $InstanceNodes) 设置实例节点数。对于 RO 和 基础版实例， 该值默认为1。 如果需要购买三节点实例， 请将该值设置为3 或指定 BackupZone 参数。当购买主实例，且未指定该参数和 BackupZone 参数时，该值默认是 2， 即购买两节点实例。
 * @method integer getCpu() 获取实例cpu核数， 如果不传将根据memory指定的内存值自动填充对应的cpu值。
 * @method void setCpu(integer $Cpu) 设置实例cpu核数， 如果不传将根据memory指定的内存值自动填充对应的cpu值。
 * @method integer getAutoSyncFlag() 获取是否自动发起灾备同步功能。该参数仅对购买灾备实例生效。 可选值为：0 - 不自动发起灾备同步；1 - 自动发起灾备同步。该值默认为0。
 * @method void setAutoSyncFlag(integer $AutoSyncFlag) 设置是否自动发起灾备同步功能。该参数仅对购买灾备实例生效。 可选值为：0 - 不自动发起灾备同步；1 - 自动发起灾备同步。该值默认为0。
 * @method string getCageId() 获取金融围拢 ID。
 * @method void setCageId(string $CageId) 设置金融围拢 ID。
 * @method string getParamTemplateType() 获取默认参数模板类型。支持值包括："HIGH_STABILITY" - 高稳定模板，"HIGH_PERFORMANCE" - 高性能模板。
备注：如您需使用云数据库 MySQL 默认参数模板，请设置 ParamTemplateType。
 * @method void setParamTemplateType(string $ParamTemplateType) 设置默认参数模板类型。支持值包括："HIGH_STABILITY" - 高稳定模板，"HIGH_PERFORMANCE" - 高性能模板。
备注：如您需使用云数据库 MySQL 默认参数模板，请设置 ParamTemplateType。
 * @method array getAlarmPolicyIdList() 获取告警策略名数组，例如:["policy-uyoee9wg"]，AlarmPolicyList不为空时该参数无效。
 * @method void setAlarmPolicyIdList(array $AlarmPolicyIdList) 设置告警策略名数组，例如:["policy-uyoee9wg"]，AlarmPolicyList不为空时该参数无效。
 * @method boolean getDryRun() 获取是否只预检此次请求。true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制等。如果检查不通过，则返回对应错误码；如果检查通过，则返回 RequestId。false：发送正常请求，通过检查后直接创建实例。
默认为 false。
 * @method void setDryRun(boolean $DryRun) 设置是否只预检此次请求。true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制等。如果检查不通过，则返回对应错误码；如果检查通过，则返回 RequestId。false：发送正常请求，通过检查后直接创建实例。
默认为 false。
 * @method string getEngineType() 获取实例引擎类型，默认为"InnoDB"，支持值包括："InnoDB"，"RocksDB"。
 * @method void setEngineType(string $EngineType) 设置实例引擎类型，默认为"InnoDB"，支持值包括："InnoDB"，"RocksDB"。
 * @method array getVips() 获取指定实例的IP列表。仅支持主实例指定，按实例顺序，不足则按未指定处理。
 * @method void setVips(array $Vips) 设置指定实例的IP列表。仅支持主实例指定，按实例顺序，不足则按未指定处理。
 * @method integer getDataProtectVolume() 获取云盘版实例的数据保护空间大小，单位 GB，设置范围1 - 10。
 * @method void setDataProtectVolume(integer $DataProtectVolume) 设置云盘版实例的数据保护空间大小，单位 GB，设置范围1 - 10。
 * @method ClusterTopology getClusterTopology() 获取云盘版节点拓扑配置。
说明：若购买的是云盘版实例，此参数为必填，需设置云盘版实例的 RW 和 RO 节点拓扑，RO 节点范围是1 - 5个，请至少设置1个 RO 节点。
 * @method void setClusterTopology(ClusterTopology $ClusterTopology) 设置云盘版节点拓扑配置。
说明：若购买的是云盘版实例，此参数为必填，需设置云盘版实例的 RW 和 RO 节点拓扑，RO 节点范围是1 - 5个，请至少设置1个 RO 节点。
 * @method string getDiskType() 获取磁盘类型，单节点（云盘版）或者云盘版实例可以指定此参数。CLOUD_SSD 表示 SSD 云硬盘，CLOUD_HSSD 表示增强型 SSD 云硬盘，CLOUD_PREMIUM 表示高性能云硬盘。
说明：单节点（云盘版）、云盘版实例硬盘类型所支持的地域略有不同，具体支持情况请参考 [地域和可用区](https://cloud.tencent.com/document/product/236/8458)。
 * @method void setDiskType(string $DiskType) 设置磁盘类型，单节点（云盘版）或者云盘版实例可以指定此参数。CLOUD_SSD 表示 SSD 云硬盘，CLOUD_HSSD 表示增强型 SSD 云硬盘，CLOUD_PREMIUM 表示高性能云硬盘。
说明：单节点（云盘版）、云盘版实例硬盘类型所支持的地域略有不同，具体支持情况请参考 [地域和可用区](https://cloud.tencent.com/document/product/236/8458)。
 * @method string getDestroyProtect() 获取开启或关闭实例销毁保护。on-开启，off-关闭
 * @method void setDestroyProtect(string $DestroyProtect) 设置开启或关闭实例销毁保护。on-开启，off-关闭
 */
class CreateDBInstanceRequest extends AbstractModel
{
    /**
     * @var integer 实例内存大小，单位：MB，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的内存规格。
     */
    public $Memory;

    /**
     * @var integer 实例硬盘大小，单位：GB，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的硬盘范围。
     */
    public $Volume;

    /**
     * @var integer 实例时长，单位：月，可选值包括 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。
     */
    public $Period;

    /**
     * @var integer 实例数量，默认值为1, 最小值1，最大值为100。
     */
    public $GoodsNum;

    /**
     * @var string 可用区信息，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的可用区。
说明：若您创建单节点、双节点、三节点实例，此参数为必填项，请指定可用区，若不指定可用区，则系统会自动选择一个可用区（可能不是您希望部署的可用区）；若您创建云盘版实例，此参数不填，请通过参数 ClusterTopology 进行读写节点和只读节点的可用区配置。
     */
    public $Zone;

    /**
     * @var string 私有网络 ID，请使用 [查询私有网络列表](/document/api/215/15778)。
说明：如果创建的是云盘版实例，此参数为必填且为私有网络类型。若此项不填，则系统会选择默认的 VPC。
     */
    public $UniqVpcId;

    /**
     * @var string 私有网络下的子网 ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用 [查询子网列表](/document/api/215/15784)。
说明：若此项不填，则系统会选择默认 VPC 下的默认子网。
     */
    public $UniqSubnetId;

    /**
     * @var integer 项目 ID，不填为默认项目。购买只读实例和灾备实例时，项目 ID 默认和主实例保持一致。
     */
    public $ProjectId;

    /**
     * @var integer 自定义端口，端口支持范围：[ 1024-65535 ]。
说明：若此项不填，则默认为3306。
     */
    public $Port;

    /**
     * @var string 实例类型，支持值包括：master - 表示主实例，dr - 表示灾备实例，ro - 表示只读实例。
说明：请选择实例类型，不填会默认选择 master。
     */
    public $InstanceRole;

    /**
     * @var string 实例 ID，购买只读实例或灾备实例时必填，该字段表示只读实例或灾备实例的主实例 ID，请使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口查询云数据库实例 ID。
     */
    public $MasterInstanceId;

    /**
     * @var string MySQL 版本，值包括：5.5、5.6、5.7和8.0，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的实例版本。
说明：创建非云盘版实例时，请根据需要指定实例版本（推荐5.7或8.0），若此参数不填，则默认值为8.0；若创建的是云盘版实例，则此参数仅能指定为5.7或8.0。
     */
    public $EngineVersion;

    /**
     * @var string 设置 root 账号密码，密码规则：8 - 64 个字符，至少包含字母、数字、字符（支持的字符：_+-&=!@#$%^*()）中的两种，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义。
     */
    public $Password;

    /**
     * @var integer 数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。
     */
    public $ProtectMode;

    /**
     * @var integer 多可用区域，默认为 0，支持值包括：0 - 表示单可用区，1 - 表示多可用区。
     */
    public $DeployMode;

    /**
     * @var string 备库 1 的可用区信息。
说明：双节点、三节点实例请指定此参数值，若不指定，则默认为 Zone 的值；云盘版实例此参数可不填，请通过参数 ClusterTopology 进行读写节点和只读节点的可用区配置；单节点实例为单可用区，无需指定此参数。
     */
    public $SlaveZone;

    /**
     * @var array 参数列表，参数格式如 ParamList.0.Name=auto_increment&ParamList.0.Value=1。可通过 [查询默认的可设置参数列表](https://cloud.tencent.com/document/api/236/32662) 查询支持设置的参数。
说明：表名大小写敏感的开启和关闭可通过参数 lower_case_table_names 进行设置，参数值为0表示开启，参数值为1表示关闭，若不设置则此参数默认值为0。若您创建的是 MySQL 8.0 版本的实例，则需要在创建实例时通过设置 lower_case_table_names 参数来开启或关闭表名大小写敏感，创建实例后无法修改参数，即创建后无法修改表名大小写敏感。其他数据库版本的实例支持在创建实例后修改 lower_case_table_names 参数。创建实例时设置表名大小写敏感的 API 调用方法请参见本文中的示例3。
     */
    public $ParamList;

    /**
     * @var string 备库 2 的可用区信息，默认为空，购买三节点主实例时可指定该参数。
     */
    public $BackupZone;

    /**
     * @var integer 自动续费标记，可选值为：0 - 不自动续费；1 - 自动续费。默认为0。
     */
    public $AutoRenewFlag;

    /**
     * @var string 主实例地域信息，购买灾备、RO实例时，该字段必填。
     */
    public $MasterRegion;

    /**
     * @var array 安全组参数，可使用 [查询项目安全组信息](https://cloud.tencent.com/document/api/236/15850) 接口查询某个项目的安全组详情。
     */
    public $SecurityGroup;

    /**
     * @var RoGroup 只读实例参数。购买只读实例时，该参数必传。
     */
    public $RoGroup;

    /**
     * @var string 实例名称。一次购买多个实例命名会用后缀数字区分，例instnaceName=db，goodsNum=3，实例命名分别为db1，db2，db3。
     */
    public $InstanceName;

    /**
     * @var array 实例标签信息。
     */
    public $ResourceTags;

    /**
     * @var string 置放群组 ID。
     */
    public $DeployGroupId;

    /**
     * @var string 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间在48小时内唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
     */
    public $ClientToken;

    /**
     * @var string 实例隔离类型。支持值包括："UNIVERSAL" - 通用型实例，"EXCLUSIVE" - 独享型实例，"BASIC_V2" - ONTKE 单节点实例，"CLOUD_NATIVE_CLUSTER" - 云盘版标准型，"CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - 云盘版加强型。不指定则默认为通用型实例。
说明：如果创建的是云盘版实例，此参数为必填。
     */
    public $DeviceType;

    /**
     * @var integer 参数模板 id。
备注：如您使用自定义参数模板 id，可传入自定义参数模板 id；如您计划使用默认参数模板，该参数模板 id 传入 id 无效，需设置 ParamTemplateType。
     */
    public $ParamTemplateId;

    /**
     * @var array 告警策略id数组。腾讯云可观测平台DescribeAlarmPolicy接口返回的OriginId。
     */
    public $AlarmPolicyList;

    /**
     * @var integer 实例节点数。对于 RO 和 基础版实例， 该值默认为1。 如果需要购买三节点实例， 请将该值设置为3 或指定 BackupZone 参数。当购买主实例，且未指定该参数和 BackupZone 参数时，该值默认是 2， 即购买两节点实例。
     */
    public $InstanceNodes;

    /**
     * @var integer 实例cpu核数， 如果不传将根据memory指定的内存值自动填充对应的cpu值。
     */
    public $Cpu;

    /**
     * @var integer 是否自动发起灾备同步功能。该参数仅对购买灾备实例生效。 可选值为：0 - 不自动发起灾备同步；1 - 自动发起灾备同步。该值默认为0。
     */
    public $AutoSyncFlag;

    /**
     * @var string 金融围拢 ID。
     */
    public $CageId;

    /**
     * @var string 默认参数模板类型。支持值包括："HIGH_STABILITY" - 高稳定模板，"HIGH_PERFORMANCE" - 高性能模板。
备注：如您需使用云数据库 MySQL 默认参数模板，请设置 ParamTemplateType。
     */
    public $ParamTemplateType;

    /**
     * @var array 告警策略名数组，例如:["policy-uyoee9wg"]，AlarmPolicyList不为空时该参数无效。
     */
    public $AlarmPolicyIdList;

    /**
     * @var boolean 是否只预检此次请求。true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制等。如果检查不通过，则返回对应错误码；如果检查通过，则返回 RequestId。false：发送正常请求，通过检查后直接创建实例。
默认为 false。
     */
    public $DryRun;

    /**
     * @var string 实例引擎类型，默认为"InnoDB"，支持值包括："InnoDB"，"RocksDB"。
     */
    public $EngineType;

    /**
     * @var array 指定实例的IP列表。仅支持主实例指定，按实例顺序，不足则按未指定处理。
     */
    public $Vips;

    /**
     * @var integer 云盘版实例的数据保护空间大小，单位 GB，设置范围1 - 10。
     */
    public $DataProtectVolume;

    /**
     * @var ClusterTopology 云盘版节点拓扑配置。
说明：若购买的是云盘版实例，此参数为必填，需设置云盘版实例的 RW 和 RO 节点拓扑，RO 节点范围是1 - 5个，请至少设置1个 RO 节点。
     */
    public $ClusterTopology;

    /**
     * @var string 磁盘类型，单节点（云盘版）或者云盘版实例可以指定此参数。CLOUD_SSD 表示 SSD 云硬盘，CLOUD_HSSD 表示增强型 SSD 云硬盘，CLOUD_PREMIUM 表示高性能云硬盘。
说明：单节点（云盘版）、云盘版实例硬盘类型所支持的地域略有不同，具体支持情况请参考 [地域和可用区](https://cloud.tencent.com/document/product/236/8458)。
     */
    public $DiskType;

    /**
     * @var string 开启或关闭实例销毁保护。on-开启，off-关闭
     */
    public $DestroyProtect;

    /**
     * @param integer $Memory 实例内存大小，单位：MB，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的内存规格。
     * @param integer $Volume 实例硬盘大小，单位：GB，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的硬盘范围。
     * @param integer $Period 实例时长，单位：月，可选值包括 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。
     * @param integer $GoodsNum 实例数量，默认值为1, 最小值1，最大值为100。
     * @param string $Zone 可用区信息，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的可用区。
说明：若您创建单节点、双节点、三节点实例，此参数为必填项，请指定可用区，若不指定可用区，则系统会自动选择一个可用区（可能不是您希望部署的可用区）；若您创建云盘版实例，此参数不填，请通过参数 ClusterTopology 进行读写节点和只读节点的可用区配置。
     * @param string $UniqVpcId 私有网络 ID，请使用 [查询私有网络列表](/document/api/215/15778)。
说明：如果创建的是云盘版实例，此参数为必填且为私有网络类型。若此项不填，则系统会选择默认的 VPC。
     * @param string $UniqSubnetId 私有网络下的子网 ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用 [查询子网列表](/document/api/215/15784)。
说明：若此项不填，则系统会选择默认 VPC 下的默认子网。
     * @param integer $ProjectId 项目 ID，不填为默认项目。购买只读实例和灾备实例时，项目 ID 默认和主实例保持一致。
     * @param integer $Port 自定义端口，端口支持范围：[ 1024-65535 ]。
说明：若此项不填，则默认为3306。
     * @param string $InstanceRole 实例类型，支持值包括：master - 表示主实例，dr - 表示灾备实例，ro - 表示只读实例。
说明：请选择实例类型，不填会默认选择 master。
     * @param string $MasterInstanceId 实例 ID，购买只读实例或灾备实例时必填，该字段表示只读实例或灾备实例的主实例 ID，请使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口查询云数据库实例 ID。
     * @param string $EngineVersion MySQL 版本，值包括：5.5、5.6、5.7和8.0，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的实例版本。
说明：创建非云盘版实例时，请根据需要指定实例版本（推荐5.7或8.0），若此参数不填，则默认值为8.0；若创建的是云盘版实例，则此参数仅能指定为5.7或8.0。
     * @param string $Password 设置 root 账号密码，密码规则：8 - 64 个字符，至少包含字母、数字、字符（支持的字符：_+-&=!@#$%^*()）中的两种，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义。
     * @param integer $ProtectMode 数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制。
     * @param integer $DeployMode 多可用区域，默认为 0，支持值包括：0 - 表示单可用区，1 - 表示多可用区。
     * @param string $SlaveZone 备库 1 的可用区信息。
说明：双节点、三节点实例请指定此参数值，若不指定，则默认为 Zone 的值；云盘版实例此参数可不填，请通过参数 ClusterTopology 进行读写节点和只读节点的可用区配置；单节点实例为单可用区，无需指定此参数。
     * @param array $ParamList 参数列表，参数格式如 ParamList.0.Name=auto_increment&ParamList.0.Value=1。可通过 [查询默认的可设置参数列表](https://cloud.tencent.com/document/api/236/32662) 查询支持设置的参数。
说明：表名大小写敏感的开启和关闭可通过参数 lower_case_table_names 进行设置，参数值为0表示开启，参数值为1表示关闭，若不设置则此参数默认值为0。若您创建的是 MySQL 8.0 版本的实例，则需要在创建实例时通过设置 lower_case_table_names 参数来开启或关闭表名大小写敏感，创建实例后无法修改参数，即创建后无法修改表名大小写敏感。其他数据库版本的实例支持在创建实例后修改 lower_case_table_names 参数。创建实例时设置表名大小写敏感的 API 调用方法请参见本文中的示例3。
     * @param string $BackupZone 备库 2 的可用区信息，默认为空，购买三节点主实例时可指定该参数。
     * @param integer $AutoRenewFlag 自动续费标记，可选值为：0 - 不自动续费；1 - 自动续费。默认为0。
     * @param string $MasterRegion 主实例地域信息，购买灾备、RO实例时，该字段必填。
     * @param array $SecurityGroup 安全组参数，可使用 [查询项目安全组信息](https://cloud.tencent.com/document/api/236/15850) 接口查询某个项目的安全组详情。
     * @param RoGroup $RoGroup 只读实例参数。购买只读实例时，该参数必传。
     * @param string $InstanceName 实例名称。一次购买多个实例命名会用后缀数字区分，例instnaceName=db，goodsNum=3，实例命名分别为db1，db2，db3。
     * @param array $ResourceTags 实例标签信息。
     * @param string $DeployGroupId 置放群组 ID。
     * @param string $ClientToken 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间在48小时内唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
     * @param string $DeviceType 实例隔离类型。支持值包括："UNIVERSAL" - 通用型实例，"EXCLUSIVE" - 独享型实例，"BASIC_V2" - ONTKE 单节点实例，"CLOUD_NATIVE_CLUSTER" - 云盘版标准型，"CLOUD_NATIVE_CLUSTER_EXCLUSIVE" - 云盘版加强型。不指定则默认为通用型实例。
说明：如果创建的是云盘版实例，此参数为必填。
     * @param integer $ParamTemplateId 参数模板 id。
备注：如您使用自定义参数模板 id，可传入自定义参数模板 id；如您计划使用默认参数模板，该参数模板 id 传入 id 无效，需设置 ParamTemplateType。
     * @param array $AlarmPolicyList 告警策略id数组。腾讯云可观测平台DescribeAlarmPolicy接口返回的OriginId。
     * @param integer $InstanceNodes 实例节点数。对于 RO 和 基础版实例， 该值默认为1。 如果需要购买三节点实例， 请将该值设置为3 或指定 BackupZone 参数。当购买主实例，且未指定该参数和 BackupZone 参数时，该值默认是 2， 即购买两节点实例。
     * @param integer $Cpu 实例cpu核数， 如果不传将根据memory指定的内存值自动填充对应的cpu值。
     * @param integer $AutoSyncFlag 是否自动发起灾备同步功能。该参数仅对购买灾备实例生效。 可选值为：0 - 不自动发起灾备同步；1 - 自动发起灾备同步。该值默认为0。
     * @param string $CageId 金融围拢 ID。
     * @param string $ParamTemplateType 默认参数模板类型。支持值包括："HIGH_STABILITY" - 高稳定模板，"HIGH_PERFORMANCE" - 高性能模板。
备注：如您需使用云数据库 MySQL 默认参数模板，请设置 ParamTemplateType。
     * @param array $AlarmPolicyIdList 告警策略名数组，例如:["policy-uyoee9wg"]，AlarmPolicyList不为空时该参数无效。
     * @param boolean $DryRun 是否只预检此次请求。true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制等。如果检查不通过，则返回对应错误码；如果检查通过，则返回 RequestId。false：发送正常请求，通过检查后直接创建实例。
默认为 false。
     * @param string $EngineType 实例引擎类型，默认为"InnoDB"，支持值包括："InnoDB"，"RocksDB"。
     * @param array $Vips 指定实例的IP列表。仅支持主实例指定，按实例顺序，不足则按未指定处理。
     * @param integer $DataProtectVolume 云盘版实例的数据保护空间大小，单位 GB，设置范围1 - 10。
     * @param ClusterTopology $ClusterTopology 云盘版节点拓扑配置。
说明：若购买的是云盘版实例，此参数为必填，需设置云盘版实例的 RW 和 RO 节点拓扑，RO 节点范围是1 - 5个，请至少设置1个 RO 节点。
     * @param string $DiskType 磁盘类型，单节点（云盘版）或者云盘版实例可以指定此参数。CLOUD_SSD 表示 SSD 云硬盘，CLOUD_HSSD 表示增强型 SSD 云硬盘，CLOUD_PREMIUM 表示高性能云硬盘。
说明：单节点（云盘版）、云盘版实例硬盘类型所支持的地域略有不同，具体支持情况请参考 [地域和可用区](https://cloud.tencent.com/document/product/236/8458)。
     * @param string $DestroyProtect 开启或关闭实例销毁保护。on-开启，off-关闭
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
