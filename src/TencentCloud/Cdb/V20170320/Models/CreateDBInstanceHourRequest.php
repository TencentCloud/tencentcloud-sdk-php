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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDBInstanceHour请求参数结构体
 *
 * @method integer getGoodsNum() 获取实例数量，默认值为 1，最小值 1，最大值为 100。
 * @method void setGoodsNum(integer $GoodsNum) 设置实例数量，默认值为 1，最小值 1，最大值为 100。
 * @method integer getMemory() 获取实例内存大小，单位：MB，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的内存规格。
 * @method void setMemory(integer $Memory) 设置实例内存大小，单位：MB，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的内存规格。
 * @method integer getVolume() 获取实例硬盘大小，单位：GB，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的硬盘范围。
 * @method void setVolume(integer $Volume) 设置实例硬盘大小，单位：GB，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的硬盘范围。
 * @method string getEngineVersion() 获取MySQL 版本，值包括：5.5、5.6 、5.7 、8.0，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的实例版本。
 * @method void setEngineVersion(string $EngineVersion) 设置MySQL 版本，值包括：5.5、5.6 、5.7 、8.0，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的实例版本。
 * @method string getUniqVpcId() 获取私有网络 ID，如果不传则默认选择基础网络，请使用 [查询私有网络列表](/document/api/215/15778) 。
 * @method void setUniqVpcId(string $UniqVpcId) 设置私有网络 ID，如果不传则默认选择基础网络，请使用 [查询私有网络列表](/document/api/215/15778) 。
 * @method string getUniqSubnetId() 获取私有网络下的子网 ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用[查询子网列表](/document/api/215/15784)。
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置私有网络下的子网 ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用[查询子网列表](/document/api/215/15784)。
 * @method integer getProjectId() 获取项目 ID，不填为默认项目。请使用 [查询项目列表](https://cloud.tencent.com/document/product/378/4400) 接口获取项目 ID。
 * @method void setProjectId(integer $ProjectId) 设置项目 ID，不填为默认项目。请使用 [查询项目列表](https://cloud.tencent.com/document/product/378/4400) 接口获取项目 ID。
 * @method string getZone() 获取可用区信息，该参数缺省时，系统会自动选择一个可用区，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的可用区。
 * @method void setZone(string $Zone) 设置可用区信息，该参数缺省时，系统会自动选择一个可用区，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的可用区。
 * @method string getMasterInstanceId() 获取实例 ID，购买只读实例或者灾备实例时必填，该字段表示只读实例或者灾备实例的主实例 ID，请使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口查询云数据库实例 ID。
 * @method void setMasterInstanceId(string $MasterInstanceId) 设置实例 ID，购买只读实例或者灾备实例时必填，该字段表示只读实例或者灾备实例的主实例 ID，请使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口查询云数据库实例 ID。
 * @method string getInstanceRole() 获取实例类型，默认为 master，支持值包括：master - 表示主实例，dr - 表示灾备实例，ro - 表示只读实例。
 * @method void setInstanceRole(string $InstanceRole) 设置实例类型，默认为 master，支持值包括：master - 表示主实例，dr - 表示灾备实例，ro - 表示只读实例。
 * @method string getMasterRegion() 获取主实例的可用区信息，购买灾备、RO实例时必填。
 * @method void setMasterRegion(string $MasterRegion) 设置主实例的可用区信息，购买灾备、RO实例时必填。
 * @method integer getPort() 获取自定义端口，端口支持范围：[ 1024-65535 ] 。
 * @method void setPort(integer $Port) 设置自定义端口，端口支持范围：[ 1024-65535 ] 。
 * @method string getPassword() 获取设置 root 帐号密码，密码规则：8 - 64 个字符，至少包含字母、数字、字符（支持的字符：_+-&=!@#$%^*()）中的两种，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义。
 * @method void setPassword(string $Password) 设置设置 root 帐号密码，密码规则：8 - 64 个字符，至少包含字母、数字、字符（支持的字符：_+-&=!@#$%^*()）中的两种，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义。
 * @method array getParamList() 获取参数列表，参数格式如 ParamList.0.Name=auto_increment&ParamList.0.Value=1。可通过 [查询默认的可设置参数列表](https://cloud.tencent.com/document/api/236/32662) 查询支持设置的参数。
 * @method void setParamList(array $ParamList) 设置参数列表，参数格式如 ParamList.0.Name=auto_increment&ParamList.0.Value=1。可通过 [查询默认的可设置参数列表](https://cloud.tencent.com/document/api/236/32662) 查询支持设置的参数。
 * @method integer getProtectMode() 获取数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义。
 * @method void setProtectMode(integer $ProtectMode) 设置数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义。
 * @method integer getDeployMode() 获取多可用区域，默认为 0，支持值包括：0 - 表示单可用区，1 - 表示多可用区，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义。
 * @method void setDeployMode(integer $DeployMode) 设置多可用区域，默认为 0，支持值包括：0 - 表示单可用区，1 - 表示多可用区，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义。
 * @method string getSlaveZone() 获取备库 1 的可用区信息，默认为 Zone 的值，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义。
 * @method void setSlaveZone(string $SlaveZone) 设置备库 1 的可用区信息，默认为 Zone 的值，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义。
 * @method string getBackupZone() 获取备库 2 的可用区信息，默认为空，购买三节点主实例时可指定该参数。
 * @method void setBackupZone(string $BackupZone) 设置备库 2 的可用区信息，默认为空，购买三节点主实例时可指定该参数。
 * @method array getSecurityGroup() 获取安全组参数，可使用 [查询项目安全组信息](https://cloud.tencent.com/document/api/236/15850) 接口查询某个项目的安全组详情。
 * @method void setSecurityGroup(array $SecurityGroup) 设置安全组参数，可使用 [查询项目安全组信息](https://cloud.tencent.com/document/api/236/15850) 接口查询某个项目的安全组详情。
 * @method RoGroup getRoGroup() 获取只读实例信息。购买只读实例时，该参数必传。
 * @method void setRoGroup(RoGroup $RoGroup) 设置只读实例信息。购买只读实例时，该参数必传。
 * @method integer getAutoRenewFlag() 获取购买按量计费实例该字段无意义。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置购买按量计费实例该字段无意义。
 * @method string getInstanceName() 获取实例名称。一次购买多个实例命名会用后缀数字区分，例instnaceName=db，goodsNum=3，实例命名分别为db1，db2，db3。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。一次购买多个实例命名会用后缀数字区分，例instnaceName=db，goodsNum=3，实例命名分别为db1，db2，db3。
 * @method array getResourceTags() 获取实例标签信息。
 * @method void setResourceTags(array $ResourceTags) 设置实例标签信息。
 * @method string getDeployGroupId() 获取置放群组 ID。
 * @method void setDeployGroupId(string $DeployGroupId) 设置置放群组 ID。
 * @method string getClientToken() 获取用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间在48小时内唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
 * @method void setClientToken(string $ClientToken) 设置用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间在48小时内唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
 * @method string getDeviceType() 获取实例隔离类型。支持值包括： "UNIVERSAL" - 通用型实例， "EXCLUSIVE" - 独享型实例， "BASIC" - 基础版实例。 不指定则默认为通用型实例。
 * @method void setDeviceType(string $DeviceType) 设置实例隔离类型。支持值包括： "UNIVERSAL" - 通用型实例， "EXCLUSIVE" - 独享型实例， "BASIC" - 基础版实例。 不指定则默认为通用型实例。
 * @method integer getParamTemplateId() 获取参数模板id。
 * @method void setParamTemplateId(integer $ParamTemplateId) 设置参数模板id。
 * @method array getAlarmPolicyList() 获取告警策略id数组。云监控DescribeAlarmPolicy接口返回的OriginId。
 * @method void setAlarmPolicyList(array $AlarmPolicyList) 设置告警策略id数组。云监控DescribeAlarmPolicy接口返回的OriginId。
 * @method integer getInstanceNodes() 获取实例节点数。对于 RO 和 基础版实例， 该值默认为1。 如果需要购买三节点实例， 请将该值设置为3 或指定 BackupZone 参数。当购买主实例，且未指定该参数和 BackupZone 参数时，该值默认是 2， 即购买两节点实例。
 * @method void setInstanceNodes(integer $InstanceNodes) 设置实例节点数。对于 RO 和 基础版实例， 该值默认为1。 如果需要购买三节点实例， 请将该值设置为3 或指定 BackupZone 参数。当购买主实例，且未指定该参数和 BackupZone 参数时，该值默认是 2， 即购买两节点实例。
 * @method integer getCpu() 获取实例cpu核数， 如果不传将根据memory指定的内存值自动填充对应的cpu值。
 * @method void setCpu(integer $Cpu) 设置实例cpu核数， 如果不传将根据memory指定的内存值自动填充对应的cpu值。
 * @method integer getAutoSyncFlag() 获取是否自动发起灾备同步功能。该参数仅对购买灾备实例生效。 可选值为：0 - 不自动发起灾备同步；1 - 自动发起灾备同步。该值默认为0。
 * @method void setAutoSyncFlag(integer $AutoSyncFlag) 设置是否自动发起灾备同步功能。该参数仅对购买灾备实例生效。 可选值为：0 - 不自动发起灾备同步；1 - 自动发起灾备同步。该值默认为0。
 * @method string getCageId() 获取金融围拢 ID 。
 * @method void setCageId(string $CageId) 设置金融围拢 ID 。
 * @method string getParamTemplateType() 获取默认参数模板类型。支持值包括："HIGH_STABILITY" - 高稳定模板，"HIGH_PERFORMANCE" - 高性能模板，默认值是："HIGH_STABILITY"。
 * @method void setParamTemplateType(string $ParamTemplateType) 设置默认参数模板类型。支持值包括："HIGH_STABILITY" - 高稳定模板，"HIGH_PERFORMANCE" - 高性能模板，默认值是："HIGH_STABILITY"。
 * @method array getAlarmPolicyIdList() 获取告警策略名数组，例如:["policy-uyoee9wg"]，AlarmPolicyList不为空时该参数无效。
 * @method void setAlarmPolicyIdList(array $AlarmPolicyIdList) 设置告警策略名数组，例如:["policy-uyoee9wg"]，AlarmPolicyList不为空时该参数无效。
 * @method boolean getDryRun() 获取是否只预检此次请求。true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制等。如果检查不通过，则返回对应错误码；如果检查通过，则返回RequestId.默认为false：发送正常请求，通过检查后直接创建实例。
 * @method void setDryRun(boolean $DryRun) 设置是否只预检此次请求。true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制等。如果检查不通过，则返回对应错误码；如果检查通过，则返回RequestId.默认为false：发送正常请求，通过检查后直接创建实例。
 * @method string getEngineType() 获取实例引擎类型，默认为"InnoDB"，支持值包括："InnoDB"，"RocksDB"。
 * @method void setEngineType(string $EngineType) 设置实例引擎类型，默认为"InnoDB"，支持值包括："InnoDB"，"RocksDB"。
 * @method array getVips() 获取指定实例的IP列表。仅支持主实例指定，按实例顺序，不足则按未指定处理。
 * @method void setVips(array $Vips) 设置指定实例的IP列表。仅支持主实例指定，按实例顺序，不足则按未指定处理。
 */
class CreateDBInstanceHourRequest extends AbstractModel
{
    /**
     * @var integer 实例数量，默认值为 1，最小值 1，最大值为 100。
     */
    public $GoodsNum;

    /**
     * @var integer 实例内存大小，单位：MB，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的内存规格。
     */
    public $Memory;

    /**
     * @var integer 实例硬盘大小，单位：GB，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的硬盘范围。
     */
    public $Volume;

    /**
     * @var string MySQL 版本，值包括：5.5、5.6 、5.7 、8.0，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的实例版本。
     */
    public $EngineVersion;

    /**
     * @var string 私有网络 ID，如果不传则默认选择基础网络，请使用 [查询私有网络列表](/document/api/215/15778) 。
     */
    public $UniqVpcId;

    /**
     * @var string 私有网络下的子网 ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用[查询子网列表](/document/api/215/15784)。
     */
    public $UniqSubnetId;

    /**
     * @var integer 项目 ID，不填为默认项目。请使用 [查询项目列表](https://cloud.tencent.com/document/product/378/4400) 接口获取项目 ID。
     */
    public $ProjectId;

    /**
     * @var string 可用区信息，该参数缺省时，系统会自动选择一个可用区，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的可用区。
     */
    public $Zone;

    /**
     * @var string 实例 ID，购买只读实例或者灾备实例时必填，该字段表示只读实例或者灾备实例的主实例 ID，请使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口查询云数据库实例 ID。
     */
    public $MasterInstanceId;

    /**
     * @var string 实例类型，默认为 master，支持值包括：master - 表示主实例，dr - 表示灾备实例，ro - 表示只读实例。
     */
    public $InstanceRole;

    /**
     * @var string 主实例的可用区信息，购买灾备、RO实例时必填。
     */
    public $MasterRegion;

    /**
     * @var integer 自定义端口，端口支持范围：[ 1024-65535 ] 。
     */
    public $Port;

    /**
     * @var string 设置 root 帐号密码，密码规则：8 - 64 个字符，至少包含字母、数字、字符（支持的字符：_+-&=!@#$%^*()）中的两种，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义。
     */
    public $Password;

    /**
     * @var array 参数列表，参数格式如 ParamList.0.Name=auto_increment&ParamList.0.Value=1。可通过 [查询默认的可设置参数列表](https://cloud.tencent.com/document/api/236/32662) 查询支持设置的参数。
     */
    public $ParamList;

    /**
     * @var integer 数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义。
     */
    public $ProtectMode;

    /**
     * @var integer 多可用区域，默认为 0，支持值包括：0 - 表示单可用区，1 - 表示多可用区，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义。
     */
    public $DeployMode;

    /**
     * @var string 备库 1 的可用区信息，默认为 Zone 的值，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义。
     */
    public $SlaveZone;

    /**
     * @var string 备库 2 的可用区信息，默认为空，购买三节点主实例时可指定该参数。
     */
    public $BackupZone;

    /**
     * @var array 安全组参数，可使用 [查询项目安全组信息](https://cloud.tencent.com/document/api/236/15850) 接口查询某个项目的安全组详情。
     */
    public $SecurityGroup;

    /**
     * @var RoGroup 只读实例信息。购买只读实例时，该参数必传。
     */
    public $RoGroup;

    /**
     * @var integer 购买按量计费实例该字段无意义。
     */
    public $AutoRenewFlag;

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
     * @var string 实例隔离类型。支持值包括： "UNIVERSAL" - 通用型实例， "EXCLUSIVE" - 独享型实例， "BASIC" - 基础版实例。 不指定则默认为通用型实例。
     */
    public $DeviceType;

    /**
     * @var integer 参数模板id。
     */
    public $ParamTemplateId;

    /**
     * @var array 告警策略id数组。云监控DescribeAlarmPolicy接口返回的OriginId。
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
     * @var string 金融围拢 ID 。
     */
    public $CageId;

    /**
     * @var string 默认参数模板类型。支持值包括："HIGH_STABILITY" - 高稳定模板，"HIGH_PERFORMANCE" - 高性能模板，默认值是："HIGH_STABILITY"。
     */
    public $ParamTemplateType;

    /**
     * @var array 告警策略名数组，例如:["policy-uyoee9wg"]，AlarmPolicyList不为空时该参数无效。
     */
    public $AlarmPolicyIdList;

    /**
     * @var boolean 是否只预检此次请求。true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制等。如果检查不通过，则返回对应错误码；如果检查通过，则返回RequestId.默认为false：发送正常请求，通过检查后直接创建实例。
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
     * @param integer $GoodsNum 实例数量，默认值为 1，最小值 1，最大值为 100。
     * @param integer $Memory 实例内存大小，单位：MB，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的内存规格。
     * @param integer $Volume 实例硬盘大小，单位：GB，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的硬盘范围。
     * @param string $EngineVersion MySQL 版本，值包括：5.5、5.6 、5.7 、8.0，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的实例版本。
     * @param string $UniqVpcId 私有网络 ID，如果不传则默认选择基础网络，请使用 [查询私有网络列表](/document/api/215/15778) 。
     * @param string $UniqSubnetId 私有网络下的子网 ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用[查询子网列表](/document/api/215/15784)。
     * @param integer $ProjectId 项目 ID，不填为默认项目。请使用 [查询项目列表](https://cloud.tencent.com/document/product/378/4400) 接口获取项目 ID。
     * @param string $Zone 可用区信息，该参数缺省时，系统会自动选择一个可用区，请使用 [获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229) 接口获取可创建的可用区。
     * @param string $MasterInstanceId 实例 ID，购买只读实例或者灾备实例时必填，该字段表示只读实例或者灾备实例的主实例 ID，请使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口查询云数据库实例 ID。
     * @param string $InstanceRole 实例类型，默认为 master，支持值包括：master - 表示主实例，dr - 表示灾备实例，ro - 表示只读实例。
     * @param string $MasterRegion 主实例的可用区信息，购买灾备、RO实例时必填。
     * @param integer $Port 自定义端口，端口支持范围：[ 1024-65535 ] 。
     * @param string $Password 设置 root 帐号密码，密码规则：8 - 64 个字符，至少包含字母、数字、字符（支持的字符：_+-&=!@#$%^*()）中的两种，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义。
     * @param array $ParamList 参数列表，参数格式如 ParamList.0.Name=auto_increment&ParamList.0.Value=1。可通过 [查询默认的可设置参数列表](https://cloud.tencent.com/document/api/236/32662) 查询支持设置的参数。
     * @param integer $ProtectMode 数据复制方式，默认为 0，支持值包括：0 - 表示异步复制，1 - 表示半同步复制，2 - 表示强同步复制，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义。
     * @param integer $DeployMode 多可用区域，默认为 0，支持值包括：0 - 表示单可用区，1 - 表示多可用区，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义。
     * @param string $SlaveZone 备库 1 的可用区信息，默认为 Zone 的值，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义。
     * @param string $BackupZone 备库 2 的可用区信息，默认为空，购买三节点主实例时可指定该参数。
     * @param array $SecurityGroup 安全组参数，可使用 [查询项目安全组信息](https://cloud.tencent.com/document/api/236/15850) 接口查询某个项目的安全组详情。
     * @param RoGroup $RoGroup 只读实例信息。购买只读实例时，该参数必传。
     * @param integer $AutoRenewFlag 购买按量计费实例该字段无意义。
     * @param string $InstanceName 实例名称。一次购买多个实例命名会用后缀数字区分，例instnaceName=db，goodsNum=3，实例命名分别为db1，db2，db3。
     * @param array $ResourceTags 实例标签信息。
     * @param string $DeployGroupId 置放群组 ID。
     * @param string $ClientToken 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间在48小时内唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
     * @param string $DeviceType 实例隔离类型。支持值包括： "UNIVERSAL" - 通用型实例， "EXCLUSIVE" - 独享型实例， "BASIC" - 基础版实例。 不指定则默认为通用型实例。
     * @param integer $ParamTemplateId 参数模板id。
     * @param array $AlarmPolicyList 告警策略id数组。云监控DescribeAlarmPolicy接口返回的OriginId。
     * @param integer $InstanceNodes 实例节点数。对于 RO 和 基础版实例， 该值默认为1。 如果需要购买三节点实例， 请将该值设置为3 或指定 BackupZone 参数。当购买主实例，且未指定该参数和 BackupZone 参数时，该值默认是 2， 即购买两节点实例。
     * @param integer $Cpu 实例cpu核数， 如果不传将根据memory指定的内存值自动填充对应的cpu值。
     * @param integer $AutoSyncFlag 是否自动发起灾备同步功能。该参数仅对购买灾备实例生效。 可选值为：0 - 不自动发起灾备同步；1 - 自动发起灾备同步。该值默认为0。
     * @param string $CageId 金融围拢 ID 。
     * @param string $ParamTemplateType 默认参数模板类型。支持值包括："HIGH_STABILITY" - 高稳定模板，"HIGH_PERFORMANCE" - 高性能模板，默认值是："HIGH_STABILITY"。
     * @param array $AlarmPolicyIdList 告警策略名数组，例如:["policy-uyoee9wg"]，AlarmPolicyList不为空时该参数无效。
     * @param boolean $DryRun 是否只预检此次请求。true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制等。如果检查不通过，则返回对应错误码；如果检查通过，则返回RequestId.默认为false：发送正常请求，通过检查后直接创建实例。
     * @param string $EngineType 实例引擎类型，默认为"InnoDB"，支持值包括："InnoDB"，"RocksDB"。
     * @param array $Vips 指定实例的IP列表。仅支持主实例指定，按实例顺序，不足则按未指定处理。
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
        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
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

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("MasterInstanceId",$param) and $param["MasterInstanceId"] !== null) {
            $this->MasterInstanceId = $param["MasterInstanceId"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("MasterRegion",$param) and $param["MasterRegion"] !== null) {
            $this->MasterRegion = $param["MasterRegion"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new ParamInfo();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
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

        if (array_key_exists("BackupZone",$param) and $param["BackupZone"] !== null) {
            $this->BackupZone = $param["BackupZone"];
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("RoGroup",$param) and $param["RoGroup"] !== null) {
            $this->RoGroup = new RoGroup();
            $this->RoGroup->deserialize($param["RoGroup"]);
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
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
    }
}
