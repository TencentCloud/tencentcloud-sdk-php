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
 * DescribeTaskList请求参数结构体
 *
 * @method string getInstanceId() 获取指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。
 * @method string getInstanceName() 获取实例名称。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
 * @method integer getLimit() 获取每页输出的任务列表大小。默认为 20，最多输出100条。
 * @method void setLimit(integer $Limit) 设置每页输出的任务列表大小。默认为 20，最多输出100条。
 * @method integer getOffset() 获取分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。
 * @method void setOffset(integer $Offset) 设置分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。
 * @method array getProjectIds() 获取项目 ID。登录 [Redis 控制台](https://console.cloud.tencent.com/redis)，在右上角的账号信息下拉菜单中，选择**项目管理**，即可获取对应的项目 ID。
 * @method void setProjectIds(array $ProjectIds) 设置项目 ID。登录 [Redis 控制台](https://console.cloud.tencent.com/redis)，在右上角的账号信息下拉菜单中，选择**项目管理**，即可获取对应的项目 ID。
 * @method array getTaskTypes() 获取任务类型。
- FLOW_CREATE：创建实例。
- FLOW_MODIFYCONNECTIONCONFIG：调整带宽连接数。
- FLOW_MODIFYINSTANCEPASSWORDFREE：免密变更流程。
- FLOW_CLEARNETWORK：VPC退还中。
- FLOW_SETPWD：设置访问密码。
- FLOW_EXPORSHR：扩缩容流程。
- FLOW_UpgradeArch：实例架构升级流程。
- FLOW_MODIFYINSTANCEPARAMS：修改实例参数。
- FLOW_MODIFYINSTACEREADONLY：只读变更流程。
- FLOW_CLOSE：关闭实例。
- FLOW_DELETE：删除实例。
- FLOW_OPEN_WAN：开启外网。
- FLOW_CLEAN：清空实例。      
- FLOW_MODIFYINSTANCEACCOUNT：修改实例账号。
- FLOW_ENABLEINSTANCE_REPLICATE：开启副本只读。
- FLOW_DISABLEINSTANCE_REPLICATE: 关闭副本只读。
- FLOW_SWITCHINSTANCEVIP：交换实例 VIP。
- FLOW_CHANGE_REPLICA_TO_MSTER：副本节点升主节点。
- FLOW_BACKUPINSTANCE：备份实例。
 * @method void setTaskTypes(array $TaskTypes) 设置任务类型。
- FLOW_CREATE：创建实例。
- FLOW_MODIFYCONNECTIONCONFIG：调整带宽连接数。
- FLOW_MODIFYINSTANCEPASSWORDFREE：免密变更流程。
- FLOW_CLEARNETWORK：VPC退还中。
- FLOW_SETPWD：设置访问密码。
- FLOW_EXPORSHR：扩缩容流程。
- FLOW_UpgradeArch：实例架构升级流程。
- FLOW_MODIFYINSTANCEPARAMS：修改实例参数。
- FLOW_MODIFYINSTACEREADONLY：只读变更流程。
- FLOW_CLOSE：关闭实例。
- FLOW_DELETE：删除实例。
- FLOW_OPEN_WAN：开启外网。
- FLOW_CLEAN：清空实例。      
- FLOW_MODIFYINSTANCEACCOUNT：修改实例账号。
- FLOW_ENABLEINSTANCE_REPLICATE：开启副本只读。
- FLOW_DISABLEINSTANCE_REPLICATE: 关闭副本只读。
- FLOW_SWITCHINSTANCEVIP：交换实例 VIP。
- FLOW_CHANGE_REPLICA_TO_MSTER：副本节点升主节点。
- FLOW_BACKUPINSTANCE：备份实例。
 * @method string getBeginTime() 获取任务执行的起始时间。格式如：2021-12-30 00:00:00。
 * @method void setBeginTime(string $BeginTime) 设置任务执行的起始时间。格式如：2021-12-30 00:00:00。
 * @method string getEndTime() 获取任务运行的终止时间。格式如：2021-12-30 20:59:35
 * @method void setEndTime(string $EndTime) 设置任务运行的终止时间。格式如：2021-12-30 20:59:35
 * @method array getTaskStatus() 获取该参数为内部使用，请忽略。
 * @method void setTaskStatus(array $TaskStatus) 设置该参数为内部使用，请忽略。
 * @method array getResult() 获取任务执行状态。
- 0：任务初始化。
- 1：执行中。
- 2：完成。
- 4：失败。
 * @method void setResult(array $Result) 设置任务执行状态。
- 0：任务初始化。
- 1：执行中。
- 2：完成。
- 4：失败。
 * @method array getOperatorUin() 获取该字段已废弃，使用OperateUin代替，请忽略。
 * @method void setOperatorUin(array $OperatorUin) 设置该字段已废弃，使用OperateUin代替，请忽略。
 * @method array getOperateUin() 获取操作者账号 ID，UIN。
 * @method void setOperateUin(array $OperateUin) 设置操作者账号 ID，UIN。
 */
class DescribeTaskListRequest extends AbstractModel
{
    /**
     * @var string 指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 实例名称。
     */
    public $InstanceName;

    /**
     * @var integer 每页输出的任务列表大小。默认为 20，最多输出100条。
     */
    public $Limit;

    /**
     * @var integer 分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。
     */
    public $Offset;

    /**
     * @var array 项目 ID。登录 [Redis 控制台](https://console.cloud.tencent.com/redis)，在右上角的账号信息下拉菜单中，选择**项目管理**，即可获取对应的项目 ID。
     */
    public $ProjectIds;

    /**
     * @var array 任务类型。
- FLOW_CREATE：创建实例。
- FLOW_MODIFYCONNECTIONCONFIG：调整带宽连接数。
- FLOW_MODIFYINSTANCEPASSWORDFREE：免密变更流程。
- FLOW_CLEARNETWORK：VPC退还中。
- FLOW_SETPWD：设置访问密码。
- FLOW_EXPORSHR：扩缩容流程。
- FLOW_UpgradeArch：实例架构升级流程。
- FLOW_MODIFYINSTANCEPARAMS：修改实例参数。
- FLOW_MODIFYINSTACEREADONLY：只读变更流程。
- FLOW_CLOSE：关闭实例。
- FLOW_DELETE：删除实例。
- FLOW_OPEN_WAN：开启外网。
- FLOW_CLEAN：清空实例。      
- FLOW_MODIFYINSTANCEACCOUNT：修改实例账号。
- FLOW_ENABLEINSTANCE_REPLICATE：开启副本只读。
- FLOW_DISABLEINSTANCE_REPLICATE: 关闭副本只读。
- FLOW_SWITCHINSTANCEVIP：交换实例 VIP。
- FLOW_CHANGE_REPLICA_TO_MSTER：副本节点升主节点。
- FLOW_BACKUPINSTANCE：备份实例。
     */
    public $TaskTypes;

    /**
     * @var string 任务执行的起始时间。格式如：2021-12-30 00:00:00。
     */
    public $BeginTime;

    /**
     * @var string 任务运行的终止时间。格式如：2021-12-30 20:59:35
     */
    public $EndTime;

    /**
     * @var array 该参数为内部使用，请忽略。
     */
    public $TaskStatus;

    /**
     * @var array 任务执行状态。
- 0：任务初始化。
- 1：执行中。
- 2：完成。
- 4：失败。
     */
    public $Result;

    /**
     * @var array 该字段已废弃，使用OperateUin代替，请忽略。
     */
    public $OperatorUin;

    /**
     * @var array 操作者账号 ID，UIN。
     */
    public $OperateUin;

    /**
     * @param string $InstanceId 指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。
     * @param string $InstanceName 实例名称。
     * @param integer $Limit 每页输出的任务列表大小。默认为 20，最多输出100条。
     * @param integer $Offset 分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。
     * @param array $ProjectIds 项目 ID。登录 [Redis 控制台](https://console.cloud.tencent.com/redis)，在右上角的账号信息下拉菜单中，选择**项目管理**，即可获取对应的项目 ID。
     * @param array $TaskTypes 任务类型。
- FLOW_CREATE：创建实例。
- FLOW_MODIFYCONNECTIONCONFIG：调整带宽连接数。
- FLOW_MODIFYINSTANCEPASSWORDFREE：免密变更流程。
- FLOW_CLEARNETWORK：VPC退还中。
- FLOW_SETPWD：设置访问密码。
- FLOW_EXPORSHR：扩缩容流程。
- FLOW_UpgradeArch：实例架构升级流程。
- FLOW_MODIFYINSTANCEPARAMS：修改实例参数。
- FLOW_MODIFYINSTACEREADONLY：只读变更流程。
- FLOW_CLOSE：关闭实例。
- FLOW_DELETE：删除实例。
- FLOW_OPEN_WAN：开启外网。
- FLOW_CLEAN：清空实例。      
- FLOW_MODIFYINSTANCEACCOUNT：修改实例账号。
- FLOW_ENABLEINSTANCE_REPLICATE：开启副本只读。
- FLOW_DISABLEINSTANCE_REPLICATE: 关闭副本只读。
- FLOW_SWITCHINSTANCEVIP：交换实例 VIP。
- FLOW_CHANGE_REPLICA_TO_MSTER：副本节点升主节点。
- FLOW_BACKUPINSTANCE：备份实例。
     * @param string $BeginTime 任务执行的起始时间。格式如：2021-12-30 00:00:00。
     * @param string $EndTime 任务运行的终止时间。格式如：2021-12-30 20:59:35
     * @param array $TaskStatus 该参数为内部使用，请忽略。
     * @param array $Result 任务执行状态。
- 0：任务初始化。
- 1：执行中。
- 2：完成。
- 4：失败。
     * @param array $OperatorUin 该字段已废弃，使用OperateUin代替，请忽略。
     * @param array $OperateUin 操作者账号 ID，UIN。
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("TaskTypes",$param) and $param["TaskTypes"] !== null) {
            $this->TaskTypes = $param["TaskTypes"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("OperatorUin",$param) and $param["OperatorUin"] !== null) {
            $this->OperatorUin = $param["OperatorUin"];
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }
    }
}
