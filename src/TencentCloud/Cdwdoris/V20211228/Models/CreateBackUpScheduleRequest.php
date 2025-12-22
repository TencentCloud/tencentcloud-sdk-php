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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBackUpSchedule请求参数结构体
 *
 * @method string getInstanceId() 获取集群id
 * @method void setInstanceId(string $InstanceId) 设置集群id
 * @method string getOperationType() 获取操作类型 create(创建) update(编辑修改)
 * @method void setOperationType(string $OperationType) 设置操作类型 create(创建) update(编辑修改)
 * @method integer getScheduleId() 获取编辑时需要传
 * @method void setScheduleId(integer $ScheduleId) 设置编辑时需要传
 * @method string getWeekDays() 获取选择的星期 逗号分隔
废弃：使用ScheduleInfo
 * @method void setWeekDays(string $WeekDays) 设置选择的星期 逗号分隔
废弃：使用ScheduleInfo
 * @method integer getExecuteHour() 获取执行小时
废弃：使用ScheduleInfo
 * @method void setExecuteHour(integer $ExecuteHour) 设置执行小时
废弃：使用ScheduleInfo
 * @method array getBackUpTables() 获取备份表列表
 * @method void setBackUpTables(array $BackUpTables) 设置备份表列表
 * @method integer getBackupType() 获取0为默认。1时是对远端的doris进行备份，不周期，一次性
 * @method void setBackupType(integer $BackupType) 设置0为默认。1时是对远端的doris进行备份，不周期，一次性
 * @method DorisSourceInfo getDorisSourceInfo() 获取远端doris集群的连接信息
 * @method void setDorisSourceInfo(DorisSourceInfo $DorisSourceInfo) 设置远端doris集群的连接信息
 * @method integer getBackupTimeType() 获取0为周期备份。1时是立即备份。3时是定时备份。
 * @method void setBackupTimeType(integer $BackupTimeType) 设置0为周期备份。1时是立即备份。3时是定时备份。
 * @method integer getRestoreType() 获取0为默认。1时是备份完成后立即恢复
 * @method void setRestoreType(integer $RestoreType) 设置0为默认。1时是备份完成后立即恢复
 * @method integer getAuthType() 获取0为默认。1时是提供自定义的secret连接cos
 * @method void setAuthType(integer $AuthType) 设置0为默认。1时是提供自定义的secret连接cos
 * @method CosSourceInfo getCosSourceInfo() 获取cos认证的信息
 * @method void setCosSourceInfo(CosSourceInfo $CosSourceInfo) 设置cos认证的信息
 * @method string getScheduleName() 获取调度任务名
 * @method void setScheduleName(string $ScheduleName) 设置调度任务名
 * @method ScheduleInfo getScheduleInfo() 获取调度信息
 * @method void setScheduleInfo(ScheduleInfo $ScheduleInfo) 设置调度信息
 * @method integer getUpdateStatus() 获取更新任务状态：
3-暂停,
2-删除,
1-启动
 * @method void setUpdateStatus(integer $UpdateStatus) 设置更新任务状态：
3-暂停,
2-删除,
1-启动
 * @method string getCosBucket() 获取当前任务的cos桶信息
 * @method void setCosBucket(string $CosBucket) 设置当前任务的cos桶信息
 * @method SnapshotRemainPolicy getSnapshotRemainPolicy() 获取快照保留策略
 * @method void setSnapshotRemainPolicy(SnapshotRemainPolicy $SnapshotRemainPolicy) 设置快照保留策略
 * @method string getDataRemoteRegion() 获取备份数据所在地域，当前地域应该为空
 * @method void setDataRemoteRegion(string $DataRemoteRegion) 设置备份数据所在地域，当前地域应该为空
 * @method string getBucketType() 获取托管桶类型：standard-标准，maz-多可用区
 * @method void setBucketType(string $BucketType) 设置托管桶类型：standard-标准，maz-多可用区
 * @method integer getEnableSecurityLock() 获取是否开启安全锁：0-未开启，1-开启
 * @method void setEnableSecurityLock(integer $EnableSecurityLock) 设置是否开启安全锁：0-未开启，1-开启
 * @method integer getGracePeriod() 获取宽限期（天数）
 * @method void setGracePeriod(integer $GracePeriod) 设置宽限期（天数）
 */
class CreateBackUpScheduleRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $InstanceId;

    /**
     * @var string 操作类型 create(创建) update(编辑修改)
     */
    public $OperationType;

    /**
     * @var integer 编辑时需要传
     */
    public $ScheduleId;

    /**
     * @var string 选择的星期 逗号分隔
废弃：使用ScheduleInfo
     * @deprecated
     */
    public $WeekDays;

    /**
     * @var integer 执行小时
废弃：使用ScheduleInfo
     * @deprecated
     */
    public $ExecuteHour;

    /**
     * @var array 备份表列表
     */
    public $BackUpTables;

    /**
     * @var integer 0为默认。1时是对远端的doris进行备份，不周期，一次性
     * @deprecated
     */
    public $BackupType;

    /**
     * @var DorisSourceInfo 远端doris集群的连接信息
     * @deprecated
     */
    public $DorisSourceInfo;

    /**
     * @var integer 0为周期备份。1时是立即备份。3时是定时备份。
     */
    public $BackupTimeType;

    /**
     * @var integer 0为默认。1时是备份完成后立即恢复
     * @deprecated
     */
    public $RestoreType;

    /**
     * @var integer 0为默认。1时是提供自定义的secret连接cos
     * @deprecated
     */
    public $AuthType;

    /**
     * @var CosSourceInfo cos认证的信息
     * @deprecated
     */
    public $CosSourceInfo;

    /**
     * @var string 调度任务名
     */
    public $ScheduleName;

    /**
     * @var ScheduleInfo 调度信息
     */
    public $ScheduleInfo;

    /**
     * @var integer 更新任务状态：
3-暂停,
2-删除,
1-启动
     */
    public $UpdateStatus;

    /**
     * @var string 当前任务的cos桶信息
     */
    public $CosBucket;

    /**
     * @var SnapshotRemainPolicy 快照保留策略
     */
    public $SnapshotRemainPolicy;

    /**
     * @var string 备份数据所在地域，当前地域应该为空
     */
    public $DataRemoteRegion;

    /**
     * @var string 托管桶类型：standard-标准，maz-多可用区
     */
    public $BucketType;

    /**
     * @var integer 是否开启安全锁：0-未开启，1-开启
     */
    public $EnableSecurityLock;

    /**
     * @var integer 宽限期（天数）
     */
    public $GracePeriod;

    /**
     * @param string $InstanceId 集群id
     * @param string $OperationType 操作类型 create(创建) update(编辑修改)
     * @param integer $ScheduleId 编辑时需要传
     * @param string $WeekDays 选择的星期 逗号分隔
废弃：使用ScheduleInfo
     * @param integer $ExecuteHour 执行小时
废弃：使用ScheduleInfo
     * @param array $BackUpTables 备份表列表
     * @param integer $BackupType 0为默认。1时是对远端的doris进行备份，不周期，一次性
     * @param DorisSourceInfo $DorisSourceInfo 远端doris集群的连接信息
     * @param integer $BackupTimeType 0为周期备份。1时是立即备份。3时是定时备份。
     * @param integer $RestoreType 0为默认。1时是备份完成后立即恢复
     * @param integer $AuthType 0为默认。1时是提供自定义的secret连接cos
     * @param CosSourceInfo $CosSourceInfo cos认证的信息
     * @param string $ScheduleName 调度任务名
     * @param ScheduleInfo $ScheduleInfo 调度信息
     * @param integer $UpdateStatus 更新任务状态：
3-暂停,
2-删除,
1-启动
     * @param string $CosBucket 当前任务的cos桶信息
     * @param SnapshotRemainPolicy $SnapshotRemainPolicy 快照保留策略
     * @param string $DataRemoteRegion 备份数据所在地域，当前地域应该为空
     * @param string $BucketType 托管桶类型：standard-标准，maz-多可用区
     * @param integer $EnableSecurityLock 是否开启安全锁：0-未开启，1-开启
     * @param integer $GracePeriod 宽限期（天数）
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("ScheduleId",$param) and $param["ScheduleId"] !== null) {
            $this->ScheduleId = $param["ScheduleId"];
        }

        if (array_key_exists("WeekDays",$param) and $param["WeekDays"] !== null) {
            $this->WeekDays = $param["WeekDays"];
        }

        if (array_key_exists("ExecuteHour",$param) and $param["ExecuteHour"] !== null) {
            $this->ExecuteHour = $param["ExecuteHour"];
        }

        if (array_key_exists("BackUpTables",$param) and $param["BackUpTables"] !== null) {
            $this->BackUpTables = [];
            foreach ($param["BackUpTables"] as $key => $value){
                $obj = new BackupTableContent();
                $obj->deserialize($value);
                array_push($this->BackUpTables, $obj);
            }
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("DorisSourceInfo",$param) and $param["DorisSourceInfo"] !== null) {
            $this->DorisSourceInfo = new DorisSourceInfo();
            $this->DorisSourceInfo->deserialize($param["DorisSourceInfo"]);
        }

        if (array_key_exists("BackupTimeType",$param) and $param["BackupTimeType"] !== null) {
            $this->BackupTimeType = $param["BackupTimeType"];
        }

        if (array_key_exists("RestoreType",$param) and $param["RestoreType"] !== null) {
            $this->RestoreType = $param["RestoreType"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("CosSourceInfo",$param) and $param["CosSourceInfo"] !== null) {
            $this->CosSourceInfo = new CosSourceInfo();
            $this->CosSourceInfo->deserialize($param["CosSourceInfo"]);
        }

        if (array_key_exists("ScheduleName",$param) and $param["ScheduleName"] !== null) {
            $this->ScheduleName = $param["ScheduleName"];
        }

        if (array_key_exists("ScheduleInfo",$param) and $param["ScheduleInfo"] !== null) {
            $this->ScheduleInfo = new ScheduleInfo();
            $this->ScheduleInfo->deserialize($param["ScheduleInfo"]);
        }

        if (array_key_exists("UpdateStatus",$param) and $param["UpdateStatus"] !== null) {
            $this->UpdateStatus = $param["UpdateStatus"];
        }

        if (array_key_exists("CosBucket",$param) and $param["CosBucket"] !== null) {
            $this->CosBucket = $param["CosBucket"];
        }

        if (array_key_exists("SnapshotRemainPolicy",$param) and $param["SnapshotRemainPolicy"] !== null) {
            $this->SnapshotRemainPolicy = new SnapshotRemainPolicy();
            $this->SnapshotRemainPolicy->deserialize($param["SnapshotRemainPolicy"]);
        }

        if (array_key_exists("DataRemoteRegion",$param) and $param["DataRemoteRegion"] !== null) {
            $this->DataRemoteRegion = $param["DataRemoteRegion"];
        }

        if (array_key_exists("BucketType",$param) and $param["BucketType"] !== null) {
            $this->BucketType = $param["BucketType"];
        }

        if (array_key_exists("EnableSecurityLock",$param) and $param["EnableSecurityLock"] !== null) {
            $this->EnableSecurityLock = $param["EnableSecurityLock"];
        }

        if (array_key_exists("GracePeriod",$param) and $param["GracePeriod"] !== null) {
            $this->GracePeriod = $param["GracePeriod"];
        }
    }
}
