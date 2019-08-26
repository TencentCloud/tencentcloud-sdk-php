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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getDiskId() 获取云硬盘ID。
 * @method void setDiskId(string $DiskId) 设置云硬盘ID。
 * @method string getDiskUsage() 获取云硬盘类型。取值范围：<br><li>SYSTEM_DISK：系统盘<br><li>DATA_DISK：数据盘。
 * @method void setDiskUsage(string $DiskUsage) 设置云硬盘类型。取值范围：<br><li>SYSTEM_DISK：系统盘<br><li>DATA_DISK：数据盘。
 * @method string getDiskChargeType() 获取付费模式。取值范围：<br><li>PREPAID：预付费，即包年包月<br><li>POSTPAID_BY_HOUR：后付费，即按量计费。
 * @method void setDiskChargeType(string $DiskChargeType) 设置付费模式。取值范围：<br><li>PREPAID：预付费，即包年包月<br><li>POSTPAID_BY_HOUR：后付费，即按量计费。
 * @method boolean getPortable() 获取是否为弹性云盘，false表示非弹性云盘，true表示弹性云盘。
 * @method void setPortable(boolean $Portable) 设置是否为弹性云盘，false表示非弹性云盘，true表示弹性云盘。
 * @method Placement getPlacement() 获取云硬盘所在的位置。
 * @method void setPlacement(Placement $Placement) 设置云硬盘所在的位置。
 * @method boolean getSnapshotAbility() 获取云盘是否具备创建快照的能力。取值范围：<br><li>false表示不具备<br><li>true表示具备。
 * @method void setSnapshotAbility(boolean $SnapshotAbility) 设置云盘是否具备创建快照的能力。取值范围：<br><li>false表示不具备<br><li>true表示具备。
 * @method string getDiskName() 获取云硬盘名称。
 * @method void setDiskName(string $DiskName) 设置云硬盘名称。
 * @method integer getDiskSize() 获取云硬盘大小，单位GB。
 * @method void setDiskSize(integer $DiskSize) 设置云硬盘大小，单位GB。
 * @method string getDiskState() 获取云盘状态。取值范围：<br><li>UNATTACHED：未挂载<br><li>ATTACHING：挂载中<br><li>ATTACHED：已挂载<br><li>DETACHING：解挂中<br><li>EXPANDING：扩容中<br><li>ROLLBACKING：回滚中<br><li>TORECYCLE：待回收<br><li>DUMPING：拷贝硬盘中。
 * @method void setDiskState(string $DiskState) 设置云盘状态。取值范围：<br><li>UNATTACHED：未挂载<br><li>ATTACHING：挂载中<br><li>ATTACHED：已挂载<br><li>DETACHING：解挂中<br><li>EXPANDING：扩容中<br><li>ROLLBACKING：回滚中<br><li>TORECYCLE：待回收<br><li>DUMPING：拷贝硬盘中。
 * @method string getDiskType() 获取云盘介质类型。取值范围：<br><li>CLOUD_BASIC：表示普通云硬盘<br><li>CLOUD_PREMIUM：表示高性能云硬盘<br><li>CLOUD_SSD：SSD表示SSD云硬盘。
 * @method void setDiskType(string $DiskType) 设置云盘介质类型。取值范围：<br><li>CLOUD_BASIC：表示普通云硬盘<br><li>CLOUD_PREMIUM：表示高性能云硬盘<br><li>CLOUD_SSD：SSD表示SSD云硬盘。
 * @method boolean getAttached() 获取云盘是否挂载到云主机上。取值范围：<br><li>false:表示未挂载<br><li>true:表示已挂载。
 * @method void setAttached(boolean $Attached) 设置云盘是否挂载到云主机上。取值范围：<br><li>false:表示未挂载<br><li>true:表示已挂载。
 * @method string getInstanceId() 获取云硬盘挂载的云主机ID。
 * @method void setInstanceId(string $InstanceId) 设置云硬盘挂载的云主机ID。
 * @method string getCreateTime() 获取云硬盘的创建时间。
 * @method void setCreateTime(string $CreateTime) 设置云硬盘的创建时间。
 * @method string getDeadlineTime() 获取云硬盘的到期时间。
 * @method void setDeadlineTime(string $DeadlineTime) 设置云硬盘的到期时间。
 * @method boolean getRollbacking() 获取云盘是否处于快照回滚状态。取值范围：<br><li>false:表示不处于快照回滚状态<br><li>true:表示处于快照回滚状态。
 * @method void setRollbacking(boolean $Rollbacking) 设置云盘是否处于快照回滚状态。取值范围：<br><li>false:表示不处于快照回滚状态<br><li>true:表示处于快照回滚状态。
 * @method integer getRollbackPercent() 获取云盘快照回滚的进度。
 * @method void setRollbackPercent(integer $RollbackPercent) 设置云盘快照回滚的进度。
 * @method boolean getEncrypt() 获取云盘是否为加密盘。取值范围：<br><li>false:表示非加密盘<br><li>true:表示加密盘。
 * @method void setEncrypt(boolean $Encrypt) 设置云盘是否为加密盘。取值范围：<br><li>false:表示非加密盘<br><li>true:表示加密盘。
 * @method boolean getAutoRenewFlagError() 获取云盘已挂载到子机，且子机与云盘都是包年包月。<br><li>true：子机设置了自动续费标识，但云盘未设置<br><li>false：云盘自动续费标识正常。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRenewFlagError(boolean $AutoRenewFlagError) 设置云盘已挂载到子机，且子机与云盘都是包年包月。<br><li>true：子机设置了自动续费标识，但云盘未设置<br><li>false：云盘自动续费标识正常。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRenewFlag() 获取自动续费标识。取值范围：<br><li>NOTIFY_AND_AUTO_RENEW：通知过期且自动续费<br><li>NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费<br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewFlag(string $RenewFlag) 设置自动续费标识。取值范围：<br><li>NOTIFY_AND_AUTO_RENEW：通知过期且自动续费<br><li>NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费<br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDeadlineError() 获取在云盘已挂载到实例，且实例与云盘都是包年包月的条件下，此字段才有意义。<br><li>true:云盘到期时间早于实例。<br><li>false：云盘到期时间晚于实例。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeadlineError(boolean $DeadlineError) 设置在云盘已挂载到实例，且实例与云盘都是包年包月的条件下，此字段才有意义。<br><li>true:云盘到期时间早于实例。<br><li>false：云盘到期时间晚于实例。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsReturnable() 获取判断预付费的云盘是否支持主动退还。<br><li>true:支持主动退还<br><li>false:不支持主动退还。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsReturnable(boolean $IsReturnable) 设置判断预付费的云盘是否支持主动退还。<br><li>true:支持主动退还<br><li>false:不支持主动退还。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReturnFailCode() 获取预付费云盘在不支持主动退还的情况下，该参数表明不支持主动退还的具体原因。取值范围：<br><li>1：云硬盘已经退还<br><li>2：云硬盘已过期<br><li>3：云盘不支持退还<br><li>8：超过可退还数量的限制。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReturnFailCode(integer $ReturnFailCode) 设置预付费云盘在不支持主动退还的情况下，该参数表明不支持主动退还的具体原因。取值范围：<br><li>1：云硬盘已经退还<br><li>2：云硬盘已过期<br><li>3：云盘不支持退还<br><li>8：超过可退还数量的限制。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAutoSnapshotPolicyIds() 获取云盘关联的定期快照ID。只有在调用DescribeDisks接口时，入参ReturnBindAutoSnapshotPolicy取值为TRUE才会返回该参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoSnapshotPolicyIds(array $AutoSnapshotPolicyIds) 设置云盘关联的定期快照ID。只有在调用DescribeDisks接口时，入参ReturnBindAutoSnapshotPolicy取值为TRUE才会返回该参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取与云盘绑定的标签，云盘未绑定标签则取值为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置与云盘绑定的标签，云盘未绑定标签则取值为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDeleteWithInstance() 获取云盘是否与挂载的实例一起销毁。<br><li>true:销毁实例时会同时销毁云盘，只支持按小时后付费云盘。<br><li>false：销毁实例时不销毁云盘。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeleteWithInstance(boolean $DeleteWithInstance) 设置云盘是否与挂载的实例一起销毁。<br><li>true:销毁实例时会同时销毁云盘，只支持按小时后付费云盘。<br><li>false：销毁实例时不销毁云盘。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDifferDaysOfDeadline() 获取当前时间距离盘到期的天数（仅对预付费盘有意义）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDifferDaysOfDeadline(integer $DifferDaysOfDeadline) 设置当前时间距离盘到期的天数（仅对预付费盘有意义）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getMigrating() 获取云盘是否处于类型变更中。取值范围：<br><li>false:表示云盘不处于类型变更中<br><li>true:表示云盘已发起类型变更，正处于迁移中。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMigrating(boolean $Migrating) 设置云盘是否处于类型变更中。取值范围：<br><li>false:表示云盘不处于类型变更中<br><li>true:表示云盘已发起类型变更，正处于迁移中。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMigratePercent() 获取云盘类型变更的迁移进度，取值0到100。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMigratePercent(integer $MigratePercent) 设置云盘类型变更的迁移进度，取值0到100。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getShareable() 获取云盘是否为共享型云盘。
 * @method void setShareable(boolean $Shareable) 设置云盘是否为共享型云盘。
 * @method array getInstanceIdList() 获取对于非共享型云盘，该参数为空数组。对于共享型云盘，则表示该云盘当前被挂载到的CVM实例InstanceId
 * @method void setInstanceIdList(array $InstanceIdList) 设置对于非共享型云盘，该参数为空数组。对于共享型云盘，则表示该云盘当前被挂载到的CVM实例InstanceId
 * @method string getAttachDeviceId() 获取云硬盘挂载目标设备的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachDeviceId(string $AttachDeviceId) 设置云硬盘挂载目标设备的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttachDeviceType() 获取云硬盘挂载目标设备的类型，目前包括CVM和POD
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachDeviceType(string $AttachDeviceType) 设置云硬盘挂载目标设备的类型，目前包括CVM和POD
注意：此字段可能返回 null，表示取不到有效值。
 */

/**
 *描述了云硬盘的详细信息
 */
class Disk extends AbstractModel
{
    /**
     * @var string 云硬盘ID。
     */
    public $DiskId;

    /**
     * @var string 云硬盘类型。取值范围：<br><li>SYSTEM_DISK：系统盘<br><li>DATA_DISK：数据盘。
     */
    public $DiskUsage;

    /**
     * @var string 付费模式。取值范围：<br><li>PREPAID：预付费，即包年包月<br><li>POSTPAID_BY_HOUR：后付费，即按量计费。
     */
    public $DiskChargeType;

    /**
     * @var boolean 是否为弹性云盘，false表示非弹性云盘，true表示弹性云盘。
     */
    public $Portable;

    /**
     * @var Placement 云硬盘所在的位置。
     */
    public $Placement;

    /**
     * @var boolean 云盘是否具备创建快照的能力。取值范围：<br><li>false表示不具备<br><li>true表示具备。
     */
    public $SnapshotAbility;

    /**
     * @var string 云硬盘名称。
     */
    public $DiskName;

    /**
     * @var integer 云硬盘大小，单位GB。
     */
    public $DiskSize;

    /**
     * @var string 云盘状态。取值范围：<br><li>UNATTACHED：未挂载<br><li>ATTACHING：挂载中<br><li>ATTACHED：已挂载<br><li>DETACHING：解挂中<br><li>EXPANDING：扩容中<br><li>ROLLBACKING：回滚中<br><li>TORECYCLE：待回收<br><li>DUMPING：拷贝硬盘中。
     */
    public $DiskState;

    /**
     * @var string 云盘介质类型。取值范围：<br><li>CLOUD_BASIC：表示普通云硬盘<br><li>CLOUD_PREMIUM：表示高性能云硬盘<br><li>CLOUD_SSD：SSD表示SSD云硬盘。
     */
    public $DiskType;

    /**
     * @var boolean 云盘是否挂载到云主机上。取值范围：<br><li>false:表示未挂载<br><li>true:表示已挂载。
     */
    public $Attached;

    /**
     * @var string 云硬盘挂载的云主机ID。
     */
    public $InstanceId;

    /**
     * @var string 云硬盘的创建时间。
     */
    public $CreateTime;

    /**
     * @var string 云硬盘的到期时间。
     */
    public $DeadlineTime;

    /**
     * @var boolean 云盘是否处于快照回滚状态。取值范围：<br><li>false:表示不处于快照回滚状态<br><li>true:表示处于快照回滚状态。
     */
    public $Rollbacking;

    /**
     * @var integer 云盘快照回滚的进度。
     */
    public $RollbackPercent;

    /**
     * @var boolean 云盘是否为加密盘。取值范围：<br><li>false:表示非加密盘<br><li>true:表示加密盘。
     */
    public $Encrypt;

    /**
     * @var boolean 云盘已挂载到子机，且子机与云盘都是包年包月。<br><li>true：子机设置了自动续费标识，但云盘未设置<br><li>false：云盘自动续费标识正常。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRenewFlagError;

    /**
     * @var string 自动续费标识。取值范围：<br><li>NOTIFY_AND_AUTO_RENEW：通知过期且自动续费<br><li>NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费<br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenewFlag;

    /**
     * @var boolean 在云盘已挂载到实例，且实例与云盘都是包年包月的条件下，此字段才有意义。<br><li>true:云盘到期时间早于实例。<br><li>false：云盘到期时间晚于实例。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeadlineError;

    /**
     * @var boolean 判断预付费的云盘是否支持主动退还。<br><li>true:支持主动退还<br><li>false:不支持主动退还。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsReturnable;

    /**
     * @var integer 预付费云盘在不支持主动退还的情况下，该参数表明不支持主动退还的具体原因。取值范围：<br><li>1：云硬盘已经退还<br><li>2：云硬盘已过期<br><li>3：云盘不支持退还<br><li>8：超过可退还数量的限制。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReturnFailCode;

    /**
     * @var array 云盘关联的定期快照ID。只有在调用DescribeDisks接口时，入参ReturnBindAutoSnapshotPolicy取值为TRUE才会返回该参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoSnapshotPolicyIds;

    /**
     * @var array 与云盘绑定的标签，云盘未绑定标签则取值为空。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var boolean 云盘是否与挂载的实例一起销毁。<br><li>true:销毁实例时会同时销毁云盘，只支持按小时后付费云盘。<br><li>false：销毁实例时不销毁云盘。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeleteWithInstance;

    /**
     * @var integer 当前时间距离盘到期的天数（仅对预付费盘有意义）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DifferDaysOfDeadline;

    /**
     * @var boolean 云盘是否处于类型变更中。取值范围：<br><li>false:表示云盘不处于类型变更中<br><li>true:表示云盘已发起类型变更，正处于迁移中。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Migrating;

    /**
     * @var integer 云盘类型变更的迁移进度，取值0到100。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MigratePercent;

    /**
     * @var boolean 云盘是否为共享型云盘。
     */
    public $Shareable;

    /**
     * @var array 对于非共享型云盘，该参数为空数组。对于共享型云盘，则表示该云盘当前被挂载到的CVM实例InstanceId
     */
    public $InstanceIdList;

    /**
     * @var string 云硬盘挂载目标设备的ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttachDeviceId;

    /**
     * @var string 云硬盘挂载目标设备的类型，目前包括CVM和POD
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttachDeviceType;
    /**
     * @param string $DiskId 云硬盘ID。
     * @param string $DiskUsage 云硬盘类型。取值范围：<br><li>SYSTEM_DISK：系统盘<br><li>DATA_DISK：数据盘。
     * @param string $DiskChargeType 付费模式。取值范围：<br><li>PREPAID：预付费，即包年包月<br><li>POSTPAID_BY_HOUR：后付费，即按量计费。
     * @param boolean $Portable 是否为弹性云盘，false表示非弹性云盘，true表示弹性云盘。
     * @param Placement $Placement 云硬盘所在的位置。
     * @param boolean $SnapshotAbility 云盘是否具备创建快照的能力。取值范围：<br><li>false表示不具备<br><li>true表示具备。
     * @param string $DiskName 云硬盘名称。
     * @param integer $DiskSize 云硬盘大小，单位GB。
     * @param string $DiskState 云盘状态。取值范围：<br><li>UNATTACHED：未挂载<br><li>ATTACHING：挂载中<br><li>ATTACHED：已挂载<br><li>DETACHING：解挂中<br><li>EXPANDING：扩容中<br><li>ROLLBACKING：回滚中<br><li>TORECYCLE：待回收<br><li>DUMPING：拷贝硬盘中。
     * @param string $DiskType 云盘介质类型。取值范围：<br><li>CLOUD_BASIC：表示普通云硬盘<br><li>CLOUD_PREMIUM：表示高性能云硬盘<br><li>CLOUD_SSD：SSD表示SSD云硬盘。
     * @param boolean $Attached 云盘是否挂载到云主机上。取值范围：<br><li>false:表示未挂载<br><li>true:表示已挂载。
     * @param string $InstanceId 云硬盘挂载的云主机ID。
     * @param string $CreateTime 云硬盘的创建时间。
     * @param string $DeadlineTime 云硬盘的到期时间。
     * @param boolean $Rollbacking 云盘是否处于快照回滚状态。取值范围：<br><li>false:表示不处于快照回滚状态<br><li>true:表示处于快照回滚状态。
     * @param integer $RollbackPercent 云盘快照回滚的进度。
     * @param boolean $Encrypt 云盘是否为加密盘。取值范围：<br><li>false:表示非加密盘<br><li>true:表示加密盘。
     * @param boolean $AutoRenewFlagError 云盘已挂载到子机，且子机与云盘都是包年包月。<br><li>true：子机设置了自动续费标识，但云盘未设置<br><li>false：云盘自动续费标识正常。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RenewFlag 自动续费标识。取值范围：<br><li>NOTIFY_AND_AUTO_RENEW：通知过期且自动续费<br><li>NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费<br><li>DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DeadlineError 在云盘已挂载到实例，且实例与云盘都是包年包月的条件下，此字段才有意义。<br><li>true:云盘到期时间早于实例。<br><li>false：云盘到期时间晚于实例。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsReturnable 判断预付费的云盘是否支持主动退还。<br><li>true:支持主动退还<br><li>false:不支持主动退还。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReturnFailCode 预付费云盘在不支持主动退还的情况下，该参数表明不支持主动退还的具体原因。取值范围：<br><li>1：云硬盘已经退还<br><li>2：云硬盘已过期<br><li>3：云盘不支持退还<br><li>8：超过可退还数量的限制。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AutoSnapshotPolicyIds 云盘关联的定期快照ID。只有在调用DescribeDisks接口时，入参ReturnBindAutoSnapshotPolicy取值为TRUE才会返回该参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 与云盘绑定的标签，云盘未绑定标签则取值为空。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DeleteWithInstance 云盘是否与挂载的实例一起销毁。<br><li>true:销毁实例时会同时销毁云盘，只支持按小时后付费云盘。<br><li>false：销毁实例时不销毁云盘。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DifferDaysOfDeadline 当前时间距离盘到期的天数（仅对预付费盘有意义）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Migrating 云盘是否处于类型变更中。取值范围：<br><li>false:表示云盘不处于类型变更中<br><li>true:表示云盘已发起类型变更，正处于迁移中。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MigratePercent 云盘类型变更的迁移进度，取值0到100。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Shareable 云盘是否为共享型云盘。
     * @param array $InstanceIdList 对于非共享型云盘，该参数为空数组。对于共享型云盘，则表示该云盘当前被挂载到的CVM实例InstanceId
     * @param string $AttachDeviceId 云硬盘挂载目标设备的ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttachDeviceType 云硬盘挂载目标设备的类型，目前包括CVM和POD
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("DiskChargeType",$param) and $param["DiskChargeType"] !== null) {
            $this->DiskChargeType = $param["DiskChargeType"];
        }

        if (array_key_exists("Portable",$param) and $param["Portable"] !== null) {
            $this->Portable = $param["Portable"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("SnapshotAbility",$param) and $param["SnapshotAbility"] !== null) {
            $this->SnapshotAbility = $param["SnapshotAbility"];
        }

        if (array_key_exists("DiskName",$param) and $param["DiskName"] !== null) {
            $this->DiskName = $param["DiskName"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskState",$param) and $param["DiskState"] !== null) {
            $this->DiskState = $param["DiskState"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("Attached",$param) and $param["Attached"] !== null) {
            $this->Attached = $param["Attached"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }

        if (array_key_exists("Rollbacking",$param) and $param["Rollbacking"] !== null) {
            $this->Rollbacking = $param["Rollbacking"];
        }

        if (array_key_exists("RollbackPercent",$param) and $param["RollbackPercent"] !== null) {
            $this->RollbackPercent = $param["RollbackPercent"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("AutoRenewFlagError",$param) and $param["AutoRenewFlagError"] !== null) {
            $this->AutoRenewFlagError = $param["AutoRenewFlagError"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("DeadlineError",$param) and $param["DeadlineError"] !== null) {
            $this->DeadlineError = $param["DeadlineError"];
        }

        if (array_key_exists("IsReturnable",$param) and $param["IsReturnable"] !== null) {
            $this->IsReturnable = $param["IsReturnable"];
        }

        if (array_key_exists("ReturnFailCode",$param) and $param["ReturnFailCode"] !== null) {
            $this->ReturnFailCode = $param["ReturnFailCode"];
        }

        if (array_key_exists("AutoSnapshotPolicyIds",$param) and $param["AutoSnapshotPolicyIds"] !== null) {
            $this->AutoSnapshotPolicyIds = $param["AutoSnapshotPolicyIds"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DeleteWithInstance",$param) and $param["DeleteWithInstance"] !== null) {
            $this->DeleteWithInstance = $param["DeleteWithInstance"];
        }

        if (array_key_exists("DifferDaysOfDeadline",$param) and $param["DifferDaysOfDeadline"] !== null) {
            $this->DifferDaysOfDeadline = $param["DifferDaysOfDeadline"];
        }

        if (array_key_exists("Migrating",$param) and $param["Migrating"] !== null) {
            $this->Migrating = $param["Migrating"];
        }

        if (array_key_exists("MigratePercent",$param) and $param["MigratePercent"] !== null) {
            $this->MigratePercent = $param["MigratePercent"];
        }

        if (array_key_exists("Shareable",$param) and $param["Shareable"] !== null) {
            $this->Shareable = $param["Shareable"];
        }

        if (array_key_exists("InstanceIdList",$param) and $param["InstanceIdList"] !== null) {
            $this->InstanceIdList = $param["InstanceIdList"];
        }

        if (array_key_exists("AttachDeviceId",$param) and $param["AttachDeviceId"] !== null) {
            $this->AttachDeviceId = $param["AttachDeviceId"];
        }

        if (array_key_exists("AttachDeviceType",$param) and $param["AttachDeviceType"] !== null) {
            $this->AttachDeviceType = $param["AttachDeviceType"];
        }
    }
}
