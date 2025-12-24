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
namespace TencentCloud\Dbs\V20211108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份计划信息
 *
 * @method string getRegion() 获取地域信息。
 * @method void setRegion(string $Region) 设置地域信息。
 * @method string getBackupPlanId() 获取备份计划 ID。
 * @method void setBackupPlanId(string $BackupPlanId) 设置备份计划 ID。
 * @method string getBackupPlanName() 获取备份计划名称。
 * @method void setBackupPlanName(string $BackupPlanName) 设置备份计划名称。
 * @method string getStatus() 获取备份计划状态。可能的取值为：
"notStarted" - 未启动;
"checking" - 校验中;
"checkPass" - 校验通过;
"checkNotPass" - 校验未通过;
"running" - 运行中;
"fullBacking" - 全量备份中;
"isolating" - 隔离中;
"isolated" - 已隔离;
"offlining" - 下线中;
"offlined" - 已下线;
"paused" - 已暂停。
 * @method void setStatus(string $Status) 设置备份计划状态。可能的取值为：
"notStarted" - 未启动;
"checking" - 校验中;
"checkPass" - 校验通过;
"checkNotPass" - 校验未通过;
"running" - 运行中;
"fullBacking" - 全量备份中;
"isolating" - 隔离中;
"isolated" - 已隔离;
"offlining" - 下线中;
"offlined" - 已下线;
"paused" - 已暂停。
 * @method string getDatabaseType() 获取数据库类型。
 * @method void setDatabaseType(string $DatabaseType) 设置数据库类型。
 * @method string getAccessType() 获取访问类型。可能的取值为：
"extranet" - 外网;
"cvm" - cvm 自建实例;
"dcg" - 专线接入;
"vpncloud" - 云vpn接入;
"cdb" - 腾讯云数据库实例;
"ccn" - 云联网。
 * @method void setAccessType(string $AccessType) 设置访问类型。可能的取值为：
"extranet" - 外网;
"cvm" - cvm 自建实例;
"dcg" - 专线接入;
"vpncloud" - 云vpn接入;
"cdb" - 腾讯云数据库实例;
"ccn" - 云联网。
 * @method array getSourceInfo() 获取源实例信息。
 * @method void setSourceInfo(array $SourceInfo) 设置源实例信息。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method string getExpireTime() 获取到期时间。
 * @method void setExpireTime(string $ExpireTime) 设置到期时间。
 * @method string getOfflineTime() 获取下线时间。
 * @method void setOfflineTime(string $OfflineTime) 设置下线时间。
 * @method string getInstanceClass() 获取实例规格类型。可能的取值为：["micro", "small", "medium", "large", "xlarge"]。
 * @method void setInstanceClass(string $InstanceClass) 设置实例规格类型。可能的取值为：["micro", "small", "medium", "large", "xlarge"]。
 * @method string getBackupMethod() 获取备份方式。可能的取值为：
"logical" - 逻辑备份;
"physical" - 物理备份。
 * @method void setBackupMethod(string $BackupMethod) 设置备份方式。可能的取值为：
"logical" - 逻辑备份;
"physical" - 物理备份。
 * @method array getTags() 获取标签信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoRenewFlag() 获取自动续费标记。可能的取值为：
0 - 未开启自动续费;
1 - 已开启自动续费;
2 - 已关闭自动续费。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标记。可能的取值为：
0 - 未开启自动续费;
1 - 已开启自动续费;
2 - 已关闭自动续费。
 * @method boolean getEnableIncrement() 获取是否开启增量备份标记。
 * @method void setEnableIncrement(boolean $EnableIncrement) 设置是否开启增量备份标记。
 * @method string getPayType() 获取付费类型。可能的取值为：
"prePay" - 预付费类型;
"postPay" - 后付费类型。
 * @method void setPayType(string $PayType) 设置付费类型。可能的取值为：
"prePay" - 预付费类型;
"postPay" - 后付费类型。
 * @method array getSetSourceInfo() 获取源端信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSetSourceInfo(array $SetSourceInfo) 设置源端信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class BackupPlanInfo extends AbstractModel
{
    /**
     * @var string 地域信息。
     */
    public $Region;

    /**
     * @var string 备份计划 ID。
     */
    public $BackupPlanId;

    /**
     * @var string 备份计划名称。
     */
    public $BackupPlanName;

    /**
     * @var string 备份计划状态。可能的取值为：
"notStarted" - 未启动;
"checking" - 校验中;
"checkPass" - 校验通过;
"checkNotPass" - 校验未通过;
"running" - 运行中;
"fullBacking" - 全量备份中;
"isolating" - 隔离中;
"isolated" - 已隔离;
"offlining" - 下线中;
"offlined" - 已下线;
"paused" - 已暂停。
     */
    public $Status;

    /**
     * @var string 数据库类型。
     */
    public $DatabaseType;

    /**
     * @var string 访问类型。可能的取值为：
"extranet" - 外网;
"cvm" - cvm 自建实例;
"dcg" - 专线接入;
"vpncloud" - 云vpn接入;
"cdb" - 腾讯云数据库实例;
"ccn" - 云联网。
     */
    public $AccessType;

    /**
     * @var array 源实例信息。
     */
    public $SourceInfo;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var string 到期时间。
     */
    public $ExpireTime;

    /**
     * @var string 下线时间。
     */
    public $OfflineTime;

    /**
     * @var string 实例规格类型。可能的取值为：["micro", "small", "medium", "large", "xlarge"]。
     */
    public $InstanceClass;

    /**
     * @var string 备份方式。可能的取值为：
"logical" - 逻辑备份;
"physical" - 物理备份。
     */
    public $BackupMethod;

    /**
     * @var array 标签信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var integer 自动续费标记。可能的取值为：
0 - 未开启自动续费;
1 - 已开启自动续费;
2 - 已关闭自动续费。
     */
    public $AutoRenewFlag;

    /**
     * @var boolean 是否开启增量备份标记。
     */
    public $EnableIncrement;

    /**
     * @var string 付费类型。可能的取值为：
"prePay" - 预付费类型;
"postPay" - 后付费类型。
     */
    public $PayType;

    /**
     * @var array 源端信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SetSourceInfo;

    /**
     * @param string $Region 地域信息。
     * @param string $BackupPlanId 备份计划 ID。
     * @param string $BackupPlanName 备份计划名称。
     * @param string $Status 备份计划状态。可能的取值为：
"notStarted" - 未启动;
"checking" - 校验中;
"checkPass" - 校验通过;
"checkNotPass" - 校验未通过;
"running" - 运行中;
"fullBacking" - 全量备份中;
"isolating" - 隔离中;
"isolated" - 已隔离;
"offlining" - 下线中;
"offlined" - 已下线;
"paused" - 已暂停。
     * @param string $DatabaseType 数据库类型。
     * @param string $AccessType 访问类型。可能的取值为：
"extranet" - 外网;
"cvm" - cvm 自建实例;
"dcg" - 专线接入;
"vpncloud" - 云vpn接入;
"cdb" - 腾讯云数据库实例;
"ccn" - 云联网。
     * @param array $SourceInfo 源实例信息。
     * @param string $CreateTime 创建时间。
     * @param string $ExpireTime 到期时间。
     * @param string $OfflineTime 下线时间。
     * @param string $InstanceClass 实例规格类型。可能的取值为：["micro", "small", "medium", "large", "xlarge"]。
     * @param string $BackupMethod 备份方式。可能的取值为：
"logical" - 逻辑备份;
"physical" - 物理备份。
     * @param array $Tags 标签信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoRenewFlag 自动续费标记。可能的取值为：
0 - 未开启自动续费;
1 - 已开启自动续费;
2 - 已关闭自动续费。
     * @param boolean $EnableIncrement 是否开启增量备份标记。
     * @param string $PayType 付费类型。可能的取值为：
"prePay" - 预付费类型;
"postPay" - 后付费类型。
     * @param array $SetSourceInfo 源端信息
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("BackupPlanId",$param) and $param["BackupPlanId"] !== null) {
            $this->BackupPlanId = $param["BackupPlanId"];
        }

        if (array_key_exists("BackupPlanName",$param) and $param["BackupPlanName"] !== null) {
            $this->BackupPlanName = $param["BackupPlanName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DatabaseType",$param) and $param["DatabaseType"] !== null) {
            $this->DatabaseType = $param["DatabaseType"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("SourceInfo",$param) and $param["SourceInfo"] !== null) {
            $this->SourceInfo = $param["SourceInfo"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }

        if (array_key_exists("InstanceClass",$param) and $param["InstanceClass"] !== null) {
            $this->InstanceClass = $param["InstanceClass"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("EnableIncrement",$param) and $param["EnableIncrement"] !== null) {
            $this->EnableIncrement = $param["EnableIncrement"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("SetSourceInfo",$param) and $param["SetSourceInfo"] !== null) {
            $this->SetSourceInfo = $param["SetSourceInfo"];
        }
    }
}
