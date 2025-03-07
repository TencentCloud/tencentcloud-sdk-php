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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务信息详情
 *
 * @method integer getTaskId() 获取任务 ID。
 * @method void setTaskId(integer $TaskId) 设置任务 ID。
 * @method string getStartTime() 获取任务开始时间。
 * @method void setStartTime(string $StartTime) 设置任务开始时间。
 * @method string getTaskType() 获取任务类型。
- FLOW_CREATE: "001"，新建实例
- FLOW_RESIZE ： "002"，配置变更
- FLOW_CLOSE："003"，关闭实例
- FLOW_CLEAN： "004"，清空实例
- FLOW_STARTUP："005"，实例启用。
- FLOW_DELETE："006"，删除实例。
- FLOW_SETPWD："007"，重置密码。
- FLOW_EXPORTBACKUP："009"，导出备份文件。
- FLOW_RESTOREBACKUP："010"，恢复备份。
- FLOW_BACKUPINSTANCE："012"，备份实例。
- FLOW_MIGRATEINSTANCE："013"，迁移实例。
- FLOW_DELBACKUP："014"，删除备份。
- FLOW_EXCHANGEINSTANCE： "016"，切换实例流程。
- FLOW_AUTOBACKUP："017"，自动备份实例。
- FLOW_MIGRATECHECK： "022"，迁移参数校验。
- FLOW_MIGRATETASK："023"，数据迁移中。
- FLOW_CLEANDB："025"，清空某个数据库。
- FLOW_CLONEBACKUP："026"，克隆备份。
- FLOW_CHANGEVIP： "027"，改变vip地址。
- FLOW_EXPORSHR ："028"，扩缩容。
- FLOW_ADDNODES："029"，加（减）节点。
- FLOW_CHANGENET："031"，改变网络类型。
- FLOW_MODIFYINSTACEREADONLY："033"，只读策略变更。
- FLOW_MODIFYINSTANCEPARAMS："034"，修改实例参数。
- FLOW_MODIFYINSTANCEPASSWORDFREE："035"，设置免密。
- FLOW_SWITCHINSTANCEVIP："036"，实例VIP切换。
- FLOW_MODIFYINSTANCEACCOUNT："037"，实例帐号变更。
- FLOW_MODIFYINSTANCEBANDWIDTH："038"，实例带宽变更。
- FLOW_ENABLEINSTANCE_REPLICATE："039"，开启副本只读。
- FLOW_DISABLEINSTANCE_REPLICATE："040"，关闭副本只读。
- FLOW_UpgradeArch："041"，实例架构升级，主从升集群。
- FLOW_DowngradeArch： "042"，实例架构降级，集群降主从。
- FLOW_UpgradeVersion： "043"，版本升级。
- FLOW_MODIFYCONNECTIONCONFIG："044"，带宽连接数调整。
- FLOW_CLEARNETWORK："045"，更换网络，
- FLOW_REMOVE_BACKUP_FILE："046"，删除备份。
- FLOW_UPGRADE_SUPPORT_MULTI_AZ："047"，升级实例支持多可用区。
- FLOW_SHUTDOWN_MASTER："048"，模拟故障。
- FLOW_CHANGE_REPLICA_TO_MASTER："049"，手动提主。
- FLOW_CODE_ADD_REPLICATION_INSTANCE："050"，新增复制组。
- FLOW_OPEN_WAN："052"，开通外网。
- FLOW_CLOSE_WAN："053"，关闭外网FLOW_UPDATE_WAN："054"，更新外网。
- FLOW_CODE_DELETE_REPLICATION_INSTANCE："055"，解绑复制组。
- FLOW_CODE_CHANGE_MASTER_INSTANCE："056"，复制组实例切主。
- FLOW_CODE_CHANGE_INSTANCE_ROLE： "057"，更改复制组实例角色。
- FLOW_MIGRATE_NODE："058"，迁移节点。
- FLOW_SWITCH_NODE："059"，切换节点。
- FLOW_UPGRADE_SMALL_VERSION："060"，升级 Redi s版本。
- FLOW_UPGRADE_PROXY_VERSION："061"，升级 Proxy 版本。
- FLOW_MODIFY_INSTANCE_NETWORK： "062"，实例修改网络。
- FLOW_MIGRATE_PROXY_NODE："063"，迁移proxy节点。
- FLOW_MIGRATION_INSTANCE_ZONE："066"，实例可用区迁移中。
- FLOW_UPGRADE_INSTANCE_CACHE_AND_PROXY： "067"，实例版本升级中。
- FLOW_MODIFY_PROXY_NUM："069"，加（减）Proxy 节点。
- FLOW_MODIFYBACKUPMOD："070"，变更实例备份模式。
 * @method void setTaskType(string $TaskType) 设置任务类型。
- FLOW_CREATE: "001"，新建实例
- FLOW_RESIZE ： "002"，配置变更
- FLOW_CLOSE："003"，关闭实例
- FLOW_CLEAN： "004"，清空实例
- FLOW_STARTUP："005"，实例启用。
- FLOW_DELETE："006"，删除实例。
- FLOW_SETPWD："007"，重置密码。
- FLOW_EXPORTBACKUP："009"，导出备份文件。
- FLOW_RESTOREBACKUP："010"，恢复备份。
- FLOW_BACKUPINSTANCE："012"，备份实例。
- FLOW_MIGRATEINSTANCE："013"，迁移实例。
- FLOW_DELBACKUP："014"，删除备份。
- FLOW_EXCHANGEINSTANCE： "016"，切换实例流程。
- FLOW_AUTOBACKUP："017"，自动备份实例。
- FLOW_MIGRATECHECK： "022"，迁移参数校验。
- FLOW_MIGRATETASK："023"，数据迁移中。
- FLOW_CLEANDB："025"，清空某个数据库。
- FLOW_CLONEBACKUP："026"，克隆备份。
- FLOW_CHANGEVIP： "027"，改变vip地址。
- FLOW_EXPORSHR ："028"，扩缩容。
- FLOW_ADDNODES："029"，加（减）节点。
- FLOW_CHANGENET："031"，改变网络类型。
- FLOW_MODIFYINSTACEREADONLY："033"，只读策略变更。
- FLOW_MODIFYINSTANCEPARAMS："034"，修改实例参数。
- FLOW_MODIFYINSTANCEPASSWORDFREE："035"，设置免密。
- FLOW_SWITCHINSTANCEVIP："036"，实例VIP切换。
- FLOW_MODIFYINSTANCEACCOUNT："037"，实例帐号变更。
- FLOW_MODIFYINSTANCEBANDWIDTH："038"，实例带宽变更。
- FLOW_ENABLEINSTANCE_REPLICATE："039"，开启副本只读。
- FLOW_DISABLEINSTANCE_REPLICATE："040"，关闭副本只读。
- FLOW_UpgradeArch："041"，实例架构升级，主从升集群。
- FLOW_DowngradeArch： "042"，实例架构降级，集群降主从。
- FLOW_UpgradeVersion： "043"，版本升级。
- FLOW_MODIFYCONNECTIONCONFIG："044"，带宽连接数调整。
- FLOW_CLEARNETWORK："045"，更换网络，
- FLOW_REMOVE_BACKUP_FILE："046"，删除备份。
- FLOW_UPGRADE_SUPPORT_MULTI_AZ："047"，升级实例支持多可用区。
- FLOW_SHUTDOWN_MASTER："048"，模拟故障。
- FLOW_CHANGE_REPLICA_TO_MASTER："049"，手动提主。
- FLOW_CODE_ADD_REPLICATION_INSTANCE："050"，新增复制组。
- FLOW_OPEN_WAN："052"，开通外网。
- FLOW_CLOSE_WAN："053"，关闭外网FLOW_UPDATE_WAN："054"，更新外网。
- FLOW_CODE_DELETE_REPLICATION_INSTANCE："055"，解绑复制组。
- FLOW_CODE_CHANGE_MASTER_INSTANCE："056"，复制组实例切主。
- FLOW_CODE_CHANGE_INSTANCE_ROLE： "057"，更改复制组实例角色。
- FLOW_MIGRATE_NODE："058"，迁移节点。
- FLOW_SWITCH_NODE："059"，切换节点。
- FLOW_UPGRADE_SMALL_VERSION："060"，升级 Redi s版本。
- FLOW_UPGRADE_PROXY_VERSION："061"，升级 Proxy 版本。
- FLOW_MODIFY_INSTANCE_NETWORK： "062"，实例修改网络。
- FLOW_MIGRATE_PROXY_NODE："063"，迁移proxy节点。
- FLOW_MIGRATION_INSTANCE_ZONE："066"，实例可用区迁移中。
- FLOW_UPGRADE_INSTANCE_CACHE_AND_PROXY： "067"，实例版本升级中。
- FLOW_MODIFY_PROXY_NUM："069"，加（减）Proxy 节点。
- FLOW_MODIFYBACKUPMOD："070"，变更实例备份模式。
 * @method string getInstanceName() 获取实例名称。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
 * @method string getInstanceId() 获取实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。
 * @method integer getProjectId() 获取项目 ID。
 * @method void setProjectId(integer $ProjectId) 设置项目 ID。
 * @method float getProgress() 获取任务进度。
 * @method void setProgress(float $Progress) 设置任务进度。
 * @method string getEndTime() 获取任务执行结束时间。
 * @method void setEndTime(string $EndTime) 设置任务执行结束时间。
 * @method integer getResult() 获取任务执行状态。

0：任务初始化。
1：执行中。
2：完成。
4：失败。
 * @method void setResult(integer $Result) 设置任务执行状态。

0：任务初始化。
1：执行中。
2：完成。
4：失败。
 */
class TaskInfoDetail extends AbstractModel
{
    /**
     * @var integer 任务 ID。
     */
    public $TaskId;

    /**
     * @var string 任务开始时间。
     */
    public $StartTime;

    /**
     * @var string 任务类型。
- FLOW_CREATE: "001"，新建实例
- FLOW_RESIZE ： "002"，配置变更
- FLOW_CLOSE："003"，关闭实例
- FLOW_CLEAN： "004"，清空实例
- FLOW_STARTUP："005"，实例启用。
- FLOW_DELETE："006"，删除实例。
- FLOW_SETPWD："007"，重置密码。
- FLOW_EXPORTBACKUP："009"，导出备份文件。
- FLOW_RESTOREBACKUP："010"，恢复备份。
- FLOW_BACKUPINSTANCE："012"，备份实例。
- FLOW_MIGRATEINSTANCE："013"，迁移实例。
- FLOW_DELBACKUP："014"，删除备份。
- FLOW_EXCHANGEINSTANCE： "016"，切换实例流程。
- FLOW_AUTOBACKUP："017"，自动备份实例。
- FLOW_MIGRATECHECK： "022"，迁移参数校验。
- FLOW_MIGRATETASK："023"，数据迁移中。
- FLOW_CLEANDB："025"，清空某个数据库。
- FLOW_CLONEBACKUP："026"，克隆备份。
- FLOW_CHANGEVIP： "027"，改变vip地址。
- FLOW_EXPORSHR ："028"，扩缩容。
- FLOW_ADDNODES："029"，加（减）节点。
- FLOW_CHANGENET："031"，改变网络类型。
- FLOW_MODIFYINSTACEREADONLY："033"，只读策略变更。
- FLOW_MODIFYINSTANCEPARAMS："034"，修改实例参数。
- FLOW_MODIFYINSTANCEPASSWORDFREE："035"，设置免密。
- FLOW_SWITCHINSTANCEVIP："036"，实例VIP切换。
- FLOW_MODIFYINSTANCEACCOUNT："037"，实例帐号变更。
- FLOW_MODIFYINSTANCEBANDWIDTH："038"，实例带宽变更。
- FLOW_ENABLEINSTANCE_REPLICATE："039"，开启副本只读。
- FLOW_DISABLEINSTANCE_REPLICATE："040"，关闭副本只读。
- FLOW_UpgradeArch："041"，实例架构升级，主从升集群。
- FLOW_DowngradeArch： "042"，实例架构降级，集群降主从。
- FLOW_UpgradeVersion： "043"，版本升级。
- FLOW_MODIFYCONNECTIONCONFIG："044"，带宽连接数调整。
- FLOW_CLEARNETWORK："045"，更换网络，
- FLOW_REMOVE_BACKUP_FILE："046"，删除备份。
- FLOW_UPGRADE_SUPPORT_MULTI_AZ："047"，升级实例支持多可用区。
- FLOW_SHUTDOWN_MASTER："048"，模拟故障。
- FLOW_CHANGE_REPLICA_TO_MASTER："049"，手动提主。
- FLOW_CODE_ADD_REPLICATION_INSTANCE："050"，新增复制组。
- FLOW_OPEN_WAN："052"，开通外网。
- FLOW_CLOSE_WAN："053"，关闭外网FLOW_UPDATE_WAN："054"，更新外网。
- FLOW_CODE_DELETE_REPLICATION_INSTANCE："055"，解绑复制组。
- FLOW_CODE_CHANGE_MASTER_INSTANCE："056"，复制组实例切主。
- FLOW_CODE_CHANGE_INSTANCE_ROLE： "057"，更改复制组实例角色。
- FLOW_MIGRATE_NODE："058"，迁移节点。
- FLOW_SWITCH_NODE："059"，切换节点。
- FLOW_UPGRADE_SMALL_VERSION："060"，升级 Redi s版本。
- FLOW_UPGRADE_PROXY_VERSION："061"，升级 Proxy 版本。
- FLOW_MODIFY_INSTANCE_NETWORK： "062"，实例修改网络。
- FLOW_MIGRATE_PROXY_NODE："063"，迁移proxy节点。
- FLOW_MIGRATION_INSTANCE_ZONE："066"，实例可用区迁移中。
- FLOW_UPGRADE_INSTANCE_CACHE_AND_PROXY： "067"，实例版本升级中。
- FLOW_MODIFY_PROXY_NUM："069"，加（减）Proxy 节点。
- FLOW_MODIFYBACKUPMOD："070"，变更实例备份模式。
     */
    public $TaskType;

    /**
     * @var string 实例名称。
     */
    public $InstanceName;

    /**
     * @var string 实例 ID。
     */
    public $InstanceId;

    /**
     * @var integer 项目 ID。
     */
    public $ProjectId;

    /**
     * @var float 任务进度。
     */
    public $Progress;

    /**
     * @var string 任务执行结束时间。
     */
    public $EndTime;

    /**
     * @var integer 任务执行状态。

0：任务初始化。
1：执行中。
2：完成。
4：失败。
     */
    public $Result;

    /**
     * @param integer $TaskId 任务 ID。
     * @param string $StartTime 任务开始时间。
     * @param string $TaskType 任务类型。
- FLOW_CREATE: "001"，新建实例
- FLOW_RESIZE ： "002"，配置变更
- FLOW_CLOSE："003"，关闭实例
- FLOW_CLEAN： "004"，清空实例
- FLOW_STARTUP："005"，实例启用。
- FLOW_DELETE："006"，删除实例。
- FLOW_SETPWD："007"，重置密码。
- FLOW_EXPORTBACKUP："009"，导出备份文件。
- FLOW_RESTOREBACKUP："010"，恢复备份。
- FLOW_BACKUPINSTANCE："012"，备份实例。
- FLOW_MIGRATEINSTANCE："013"，迁移实例。
- FLOW_DELBACKUP："014"，删除备份。
- FLOW_EXCHANGEINSTANCE： "016"，切换实例流程。
- FLOW_AUTOBACKUP："017"，自动备份实例。
- FLOW_MIGRATECHECK： "022"，迁移参数校验。
- FLOW_MIGRATETASK："023"，数据迁移中。
- FLOW_CLEANDB："025"，清空某个数据库。
- FLOW_CLONEBACKUP："026"，克隆备份。
- FLOW_CHANGEVIP： "027"，改变vip地址。
- FLOW_EXPORSHR ："028"，扩缩容。
- FLOW_ADDNODES："029"，加（减）节点。
- FLOW_CHANGENET："031"，改变网络类型。
- FLOW_MODIFYINSTACEREADONLY："033"，只读策略变更。
- FLOW_MODIFYINSTANCEPARAMS："034"，修改实例参数。
- FLOW_MODIFYINSTANCEPASSWORDFREE："035"，设置免密。
- FLOW_SWITCHINSTANCEVIP："036"，实例VIP切换。
- FLOW_MODIFYINSTANCEACCOUNT："037"，实例帐号变更。
- FLOW_MODIFYINSTANCEBANDWIDTH："038"，实例带宽变更。
- FLOW_ENABLEINSTANCE_REPLICATE："039"，开启副本只读。
- FLOW_DISABLEINSTANCE_REPLICATE："040"，关闭副本只读。
- FLOW_UpgradeArch："041"，实例架构升级，主从升集群。
- FLOW_DowngradeArch： "042"，实例架构降级，集群降主从。
- FLOW_UpgradeVersion： "043"，版本升级。
- FLOW_MODIFYCONNECTIONCONFIG："044"，带宽连接数调整。
- FLOW_CLEARNETWORK："045"，更换网络，
- FLOW_REMOVE_BACKUP_FILE："046"，删除备份。
- FLOW_UPGRADE_SUPPORT_MULTI_AZ："047"，升级实例支持多可用区。
- FLOW_SHUTDOWN_MASTER："048"，模拟故障。
- FLOW_CHANGE_REPLICA_TO_MASTER："049"，手动提主。
- FLOW_CODE_ADD_REPLICATION_INSTANCE："050"，新增复制组。
- FLOW_OPEN_WAN："052"，开通外网。
- FLOW_CLOSE_WAN："053"，关闭外网FLOW_UPDATE_WAN："054"，更新外网。
- FLOW_CODE_DELETE_REPLICATION_INSTANCE："055"，解绑复制组。
- FLOW_CODE_CHANGE_MASTER_INSTANCE："056"，复制组实例切主。
- FLOW_CODE_CHANGE_INSTANCE_ROLE： "057"，更改复制组实例角色。
- FLOW_MIGRATE_NODE："058"，迁移节点。
- FLOW_SWITCH_NODE："059"，切换节点。
- FLOW_UPGRADE_SMALL_VERSION："060"，升级 Redi s版本。
- FLOW_UPGRADE_PROXY_VERSION："061"，升级 Proxy 版本。
- FLOW_MODIFY_INSTANCE_NETWORK： "062"，实例修改网络。
- FLOW_MIGRATE_PROXY_NODE："063"，迁移proxy节点。
- FLOW_MIGRATION_INSTANCE_ZONE："066"，实例可用区迁移中。
- FLOW_UPGRADE_INSTANCE_CACHE_AND_PROXY： "067"，实例版本升级中。
- FLOW_MODIFY_PROXY_NUM："069"，加（减）Proxy 节点。
- FLOW_MODIFYBACKUPMOD："070"，变更实例备份模式。
     * @param string $InstanceName 实例名称。
     * @param string $InstanceId 实例 ID。
     * @param integer $ProjectId 项目 ID。
     * @param float $Progress 任务进度。
     * @param string $EndTime 任务执行结束时间。
     * @param integer $Result 任务执行状态。

0：任务初始化。
1：执行中。
2：完成。
4：失败。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }
    }
}
