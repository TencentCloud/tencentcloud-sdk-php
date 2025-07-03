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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 执行资源包使用情况
 *
 * @method float getCpuUsagePercent() 获取CPU占用百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuUsagePercent(float $CpuUsagePercent) 设置CPU占用百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMemUsagePercent() 获取内存占用百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemUsagePercent(float $MemUsagePercent) 设置内存占用百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getStatus() 获取资源包状态, /**
     * 初始化中
     */
    INIT(0),
    /**
     * 运行中
     */
    RUNNING(1),
    /**
     * 运行异常
     */
    RUNNING_FAILED(2),
    /**
     * 释放中
     */
    DELETEING(3),
    /**
     * 已释放
     */
    DELETED(4),
    /**
     * 创建中
     */
    CREATING(5),
    /**
     * 创建失败
     */
    CREATE_FAILED(6),
    /**
     * 更新中
     */
    UPDATING(7),
    /**
     * 更新失败
     */
    UPDATE_FAILED(8),
    /**
     * 已到期
     */
    EXPIRED(9);
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(float $Status) 设置资源包状态, /**
     * 初始化中
     */
    INIT(0),
    /**
     * 运行中
     */
    RUNNING(1),
    /**
     * 运行异常
     */
    RUNNING_FAILED(2),
    /**
     * 释放中
     */
    DELETEING(3),
    /**
     * 已释放
     */
    DELETED(4),
    /**
     * 创建中
     */
    CREATING(5),
    /**
     * 创建失败
     */
    CREATE_FAILED(6),
    /**
     * 更新中
     */
    UPDATING(7),
    /**
     * 更新失败
     */
    UPDATE_FAILED(8),
    /**
     * 已到期
     */
    EXPIRED(9);
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunningTaskNum() 获取/**
     * 初始化中
     */
    INIT(0),
    /**
     * 运行中
     */
    RUNNING(1),
    /**
     * 运行异常
     */
    RUNNING_FAILED(2),
    /**
     * 释放中
     */
    DELETEING(3),
    /**
     * 已释放
     */
    DELETED(4),
    /**
     * 创建中
     */
    CREATING(5),
    /**
     * 创建失败
     */
    CREATE_FAILED(6),
    /**
     * 更新中
     */
    UPDATING(7),
    /**
     * 更新失败
     */
    UPDATE_FAILED(8),
    /**
     * 已到期
     */
运行中的任务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningTaskNum(integer $RunningTaskNum) 设置/**
     * 初始化中
     */
    INIT(0),
    /**
     * 运行中
     */
    RUNNING(1),
    /**
     * 运行异常
     */
    RUNNING_FAILED(2),
    /**
     * 释放中
     */
    DELETEING(3),
    /**
     * 已释放
     */
    DELETED(4),
    /**
     * 创建中
     */
    CREATING(5),
    /**
     * 创建失败
     */
    CREATE_FAILED(6),
    /**
     * 更新中
     */
    UPDATING(7),
    /**
     * 更新失败
     */
    UPDATE_FAILED(8),
    /**
     * 已到期
     */
运行中的任务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWaitingTaskNum() 获取等待中的任务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaitingTaskNum(integer $WaitingTaskNum) 设置等待中的任务数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsageTrendStartTime() 获取资源使用趋势: 开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsageTrendStartTime(string $UsageTrendStartTime) 设置资源使用趋势: 开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsageTrendEndTime() 获取资源使用趋势: 结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsageTrendEndTime(string $UsageTrendEndTime) 设置资源使用趋势: 结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUsageTrendList() 获取资源使用趋势列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsageTrendList(array $UsageTrendList) 设置资源使用趋势列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExecutorResourcePackageUsageInfo extends AbstractModel
{
    /**
     * @var float CPU占用百分比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuUsagePercent;

    /**
     * @var float 内存占用百分比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemUsagePercent;

    /**
     * @var float 资源包状态, /**
     * 初始化中
     */
    INIT(0),
    /**
     * 运行中
     */
    RUNNING(1),
    /**
     * 运行异常
     */
    RUNNING_FAILED(2),
    /**
     * 释放中
     */
    DELETEING(3),
    /**
     * 已释放
     */
    DELETED(4),
    /**
     * 创建中
     */
    CREATING(5),
    /**
     * 创建失败
     */
    CREATE_FAILED(6),
    /**
     * 更新中
     */
    UPDATING(7),
    /**
     * 更新失败
     */
    UPDATE_FAILED(8),
    /**
     * 已到期
     */
    EXPIRED(9);
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer /**
     * 初始化中
     */
    INIT(0),
    /**
     * 运行中
     */
    RUNNING(1),
    /**
     * 运行异常
     */
    RUNNING_FAILED(2),
    /**
     * 释放中
     */
    DELETEING(3),
    /**
     * 已释放
     */
    DELETED(4),
    /**
     * 创建中
     */
    CREATING(5),
    /**
     * 创建失败
     */
    CREATE_FAILED(6),
    /**
     * 更新中
     */
    UPDATING(7),
    /**
     * 更新失败
     */
    UPDATE_FAILED(8),
    /**
     * 已到期
     */
运行中的任务数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningTaskNum;

    /**
     * @var integer 等待中的任务数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WaitingTaskNum;

    /**
     * @var string 资源使用趋势: 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsageTrendStartTime;

    /**
     * @var string 资源使用趋势: 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsageTrendEndTime;

    /**
     * @var array 资源使用趋势列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsageTrendList;

    /**
     * @param float $CpuUsagePercent CPU占用百分比
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $MemUsagePercent 内存占用百分比
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Status 资源包状态, /**
     * 初始化中
     */
    INIT(0),
    /**
     * 运行中
     */
    RUNNING(1),
    /**
     * 运行异常
     */
    RUNNING_FAILED(2),
    /**
     * 释放中
     */
    DELETEING(3),
    /**
     * 已释放
     */
    DELETED(4),
    /**
     * 创建中
     */
    CREATING(5),
    /**
     * 创建失败
     */
    CREATE_FAILED(6),
    /**
     * 更新中
     */
    UPDATING(7),
    /**
     * 更新失败
     */
    UPDATE_FAILED(8),
    /**
     * 已到期
     */
    EXPIRED(9);
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunningTaskNum /**
     * 初始化中
     */
    INIT(0),
    /**
     * 运行中
     */
    RUNNING(1),
    /**
     * 运行异常
     */
    RUNNING_FAILED(2),
    /**
     * 释放中
     */
    DELETEING(3),
    /**
     * 已释放
     */
    DELETED(4),
    /**
     * 创建中
     */
    CREATING(5),
    /**
     * 创建失败
     */
    CREATE_FAILED(6),
    /**
     * 更新中
     */
    UPDATING(7),
    /**
     * 更新失败
     */
    UPDATE_FAILED(8),
    /**
     * 已到期
     */
运行中的任务数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WaitingTaskNum 等待中的任务数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UsageTrendStartTime 资源使用趋势: 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UsageTrendEndTime 资源使用趋势: 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UsageTrendList 资源使用趋势列表
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
        if (array_key_exists("CpuUsagePercent",$param) and $param["CpuUsagePercent"] !== null) {
            $this->CpuUsagePercent = $param["CpuUsagePercent"];
        }

        if (array_key_exists("MemUsagePercent",$param) and $param["MemUsagePercent"] !== null) {
            $this->MemUsagePercent = $param["MemUsagePercent"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RunningTaskNum",$param) and $param["RunningTaskNum"] !== null) {
            $this->RunningTaskNum = $param["RunningTaskNum"];
        }

        if (array_key_exists("WaitingTaskNum",$param) and $param["WaitingTaskNum"] !== null) {
            $this->WaitingTaskNum = $param["WaitingTaskNum"];
        }

        if (array_key_exists("UsageTrendStartTime",$param) and $param["UsageTrendStartTime"] !== null) {
            $this->UsageTrendStartTime = $param["UsageTrendStartTime"];
        }

        if (array_key_exists("UsageTrendEndTime",$param) and $param["UsageTrendEndTime"] !== null) {
            $this->UsageTrendEndTime = $param["UsageTrendEndTime"];
        }

        if (array_key_exists("UsageTrendList",$param) and $param["UsageTrendList"] !== null) {
            $this->UsageTrendList = [];
            foreach ($param["UsageTrendList"] as $key => $value){
                $obj = new ExecutorUsageTrendInfo();
                $obj->deserialize($value);
                array_push($this->UsageTrendList, $obj);
            }
        }
    }
}
