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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Yarn 运行的Application信息
 *
 * @method string getId() 获取应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUser() 获取用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUser(string $User) 设置用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取应用名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置应用名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueue() 获取队列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueue(string $Queue) 设置队列
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationType() 获取应用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationType(string $ApplicationType) 设置应用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getElapsedTime() 获取运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElapsedTime(string $ElapsedTime) 设置运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getState() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(string $State) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFinalStatus() 获取最终状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinalStatus(string $FinalStatus) 设置最终状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProgress() 获取进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgress(integer $Progress) 设置进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartedTime() 获取开始时间毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartedTime(integer $StartedTime) 设置开始时间毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFinishedTime() 获取结束时间毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinishedTime(integer $FinishedTime) 设置结束时间毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAllocatedMB() 获取申请内存MB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllocatedMB(integer $AllocatedMB) 设置申请内存MB
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAllocatedVCores() 获取申请VCores
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllocatedVCores(integer $AllocatedVCores) 设置申请VCores
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunningContainers() 获取运行的Containers数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningContainers(integer $RunningContainers) 设置运行的Containers数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemorySeconds() 获取内存MB*时间秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemorySeconds(integer $MemorySeconds) 设置内存MB*时间秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVCoreSeconds() 获取VCores*时间秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVCoreSeconds(integer $VCoreSeconds) 设置VCores*时间秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getQueueUsagePercentage() 获取队列资源占比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueueUsagePercentage(float $QueueUsagePercentage) 设置队列资源占比
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getClusterUsagePercentage() 获取集群资源占比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterUsagePercentage(float $ClusterUsagePercentage) 设置集群资源占比
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPreemptedResourceMB() 获取预占用的内存
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPreemptedResourceMB(integer $PreemptedResourceMB) 设置预占用的内存
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPreemptedResourceVCores() 获取预占用的VCore
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPreemptedResourceVCores(integer $PreemptedResourceVCores) 设置预占用的VCore
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNumNonAMContainerPreempted() 获取预占的非应用程序主节点容器数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumNonAMContainerPreempted(integer $NumNonAMContainerPreempted) 设置预占的非应用程序主节点容器数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNumAMContainerPreempted() 获取AM预占用的容器数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumAMContainerPreempted(integer $NumAMContainerPreempted) 设置AM预占用的容器数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMapsTotal() 获取Map总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMapsTotal(integer $MapsTotal) 设置Map总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMapsCompleted() 获取完成的Map数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMapsCompleted(integer $MapsCompleted) 设置完成的Map数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReducesTotal() 获取Reduce总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReducesTotal(integer $ReducesTotal) 设置Reduce总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReducesCompleted() 获取完成的Reduce数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReducesCompleted(integer $ReducesCompleted) 设置完成的Reduce数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAvgMapTime() 获取平均Map时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvgMapTime(integer $AvgMapTime) 设置平均Map时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAvgReduceTime() 获取平均Reduce时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvgReduceTime(integer $AvgReduceTime) 设置平均Reduce时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAvgShuffleTime() 获取平均Shuffle时间毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvgShuffleTime(integer $AvgShuffleTime) 设置平均Shuffle时间毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAvgMergeTime() 获取平均Merge时间毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvgMergeTime(integer $AvgMergeTime) 设置平均Merge时间毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailedReduceAttempts() 获取失败的Reduce执行次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedReduceAttempts(integer $FailedReduceAttempts) 设置失败的Reduce执行次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getKilledReduceAttempts() 获取Kill的Reduce执行次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKilledReduceAttempts(integer $KilledReduceAttempts) 设置Kill的Reduce执行次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSuccessfulReduceAttempts() 获取成功的Reduce执行次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessfulReduceAttempts(integer $SuccessfulReduceAttempts) 设置成功的Reduce执行次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailedMapAttempts() 获取失败的Map执行次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedMapAttempts(integer $FailedMapAttempts) 设置失败的Map执行次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getKilledMapAttempts() 获取Kill的Map执行次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKilledMapAttempts(integer $KilledMapAttempts) 设置Kill的Map执行次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSuccessfulMapAttempts() 获取成功的Map执行次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessfulMapAttempts(integer $SuccessfulMapAttempts) 设置成功的Map执行次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGcTimeMillis() 获取GC毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGcTimeMillis(integer $GcTimeMillis) 设置GC毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVCoreMillisMaps() 获取Map使用的VCore毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVCoreMillisMaps(integer $VCoreMillisMaps) 设置Map使用的VCore毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMbMillisMaps() 获取Map使用的内存毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMbMillisMaps(integer $MbMillisMaps) 设置Map使用的内存毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVCoreMillisReduces() 获取Reduce使用的VCore毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVCoreMillisReduces(integer $VCoreMillisReduces) 设置Reduce使用的VCore毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMbMillisReduces() 获取Reduce使用的内存毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMbMillisReduces(integer $MbMillisReduces) 设置Reduce使用的内存毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalLaunchedMaps() 获取启动Map的总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalLaunchedMaps(integer $TotalLaunchedMaps) 设置启动Map的总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalLaunchedReduces() 获取启动Reduce的总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalLaunchedReduces(integer $TotalLaunchedReduces) 设置启动Reduce的总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMapInputRecords() 获取Map输入记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMapInputRecords(integer $MapInputRecords) 设置Map输入记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMapOutputRecords() 获取Map输出记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMapOutputRecords(integer $MapOutputRecords) 设置Map输出记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReduceInputRecords() 获取Reduce输入记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReduceInputRecords(integer $ReduceInputRecords) 设置Reduce输入记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReduceOutputRecords() 获取Reduce输出记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReduceOutputRecords(integer $ReduceOutputRecords) 设置Reduce输出记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHDFSBytesWritten() 获取HDFS写入字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHDFSBytesWritten(integer $HDFSBytesWritten) 设置HDFS写入字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHDFSBytesRead() 获取HDFS读取字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHDFSBytesRead(integer $HDFSBytesRead) 设置HDFS读取字节数
注意：此字段可能返回 null，表示取不到有效值。
 */
class YarnApplication extends AbstractModel
{
    /**
     * @var string 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $User;

    /**
     * @var string 应用名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 队列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Queue;

    /**
     * @var string 应用类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationType;

    /**
     * @var string 运行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ElapsedTime;

    /**
     * @var string 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var string 最终状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinalStatus;

    /**
     * @var integer 进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Progress;

    /**
     * @var integer 开始时间毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartedTime;

    /**
     * @var integer 结束时间毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinishedTime;

    /**
     * @var integer 申请内存MB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllocatedMB;

    /**
     * @var integer 申请VCores
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllocatedVCores;

    /**
     * @var integer 运行的Containers数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningContainers;

    /**
     * @var integer 内存MB*时间秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemorySeconds;

    /**
     * @var integer VCores*时间秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VCoreSeconds;

    /**
     * @var float 队列资源占比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueueUsagePercentage;

    /**
     * @var float 集群资源占比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterUsagePercentage;

    /**
     * @var integer 预占用的内存
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PreemptedResourceMB;

    /**
     * @var integer 预占用的VCore
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PreemptedResourceVCores;

    /**
     * @var integer 预占的非应用程序主节点容器数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NumNonAMContainerPreempted;

    /**
     * @var integer AM预占用的容器数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NumAMContainerPreempted;

    /**
     * @var integer Map总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MapsTotal;

    /**
     * @var integer 完成的Map数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MapsCompleted;

    /**
     * @var integer Reduce总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReducesTotal;

    /**
     * @var integer 完成的Reduce数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReducesCompleted;

    /**
     * @var integer 平均Map时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvgMapTime;

    /**
     * @var integer 平均Reduce时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvgReduceTime;

    /**
     * @var integer 平均Shuffle时间毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvgShuffleTime;

    /**
     * @var integer 平均Merge时间毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvgMergeTime;

    /**
     * @var integer 失败的Reduce执行次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedReduceAttempts;

    /**
     * @var integer Kill的Reduce执行次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KilledReduceAttempts;

    /**
     * @var integer 成功的Reduce执行次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessfulReduceAttempts;

    /**
     * @var integer 失败的Map执行次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedMapAttempts;

    /**
     * @var integer Kill的Map执行次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KilledMapAttempts;

    /**
     * @var integer 成功的Map执行次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessfulMapAttempts;

    /**
     * @var integer GC毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GcTimeMillis;

    /**
     * @var integer Map使用的VCore毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VCoreMillisMaps;

    /**
     * @var integer Map使用的内存毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MbMillisMaps;

    /**
     * @var integer Reduce使用的VCore毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VCoreMillisReduces;

    /**
     * @var integer Reduce使用的内存毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MbMillisReduces;

    /**
     * @var integer 启动Map的总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalLaunchedMaps;

    /**
     * @var integer 启动Reduce的总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalLaunchedReduces;

    /**
     * @var integer Map输入记录数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MapInputRecords;

    /**
     * @var integer Map输出记录数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MapOutputRecords;

    /**
     * @var integer Reduce输入记录数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReduceInputRecords;

    /**
     * @var integer Reduce输出记录数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReduceOutputRecords;

    /**
     * @var integer HDFS写入字节数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HDFSBytesWritten;

    /**
     * @var integer HDFS读取字节数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HDFSBytesRead;

    /**
     * @param string $Id 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $User 用户
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 应用名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Queue 队列
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationType 应用类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ElapsedTime 运行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $State 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FinalStatus 最终状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Progress 进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartedTime 开始时间毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FinishedTime 结束时间毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AllocatedMB 申请内存MB
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AllocatedVCores 申请VCores
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunningContainers 运行的Containers数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MemorySeconds 内存MB*时间秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VCoreSeconds VCores*时间秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $QueueUsagePercentage 队列资源占比
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ClusterUsagePercentage 集群资源占比
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PreemptedResourceMB 预占用的内存
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PreemptedResourceVCores 预占用的VCore
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NumNonAMContainerPreempted 预占的非应用程序主节点容器数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NumAMContainerPreempted AM预占用的容器数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MapsTotal Map总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MapsCompleted 完成的Map数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReducesTotal Reduce总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReducesCompleted 完成的Reduce数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AvgMapTime 平均Map时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AvgReduceTime 平均Reduce时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AvgShuffleTime 平均Shuffle时间毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AvgMergeTime 平均Merge时间毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FailedReduceAttempts 失败的Reduce执行次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $KilledReduceAttempts Kill的Reduce执行次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SuccessfulReduceAttempts 成功的Reduce执行次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FailedMapAttempts 失败的Map执行次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $KilledMapAttempts Kill的Map执行次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SuccessfulMapAttempts 成功的Map执行次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GcTimeMillis GC毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VCoreMillisMaps Map使用的VCore毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MbMillisMaps Map使用的内存毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VCoreMillisReduces Reduce使用的VCore毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MbMillisReduces Reduce使用的内存毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalLaunchedMaps 启动Map的总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalLaunchedReduces 启动Reduce的总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MapInputRecords Map输入记录数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MapOutputRecords Map输出记录数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReduceInputRecords Reduce输入记录数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReduceOutputRecords Reduce输出记录数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HDFSBytesWritten HDFS写入字节数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HDFSBytesRead HDFS读取字节数
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Queue",$param) and $param["Queue"] !== null) {
            $this->Queue = $param["Queue"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("ElapsedTime",$param) and $param["ElapsedTime"] !== null) {
            $this->ElapsedTime = $param["ElapsedTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("FinalStatus",$param) and $param["FinalStatus"] !== null) {
            $this->FinalStatus = $param["FinalStatus"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("StartedTime",$param) and $param["StartedTime"] !== null) {
            $this->StartedTime = $param["StartedTime"];
        }

        if (array_key_exists("FinishedTime",$param) and $param["FinishedTime"] !== null) {
            $this->FinishedTime = $param["FinishedTime"];
        }

        if (array_key_exists("AllocatedMB",$param) and $param["AllocatedMB"] !== null) {
            $this->AllocatedMB = $param["AllocatedMB"];
        }

        if (array_key_exists("AllocatedVCores",$param) and $param["AllocatedVCores"] !== null) {
            $this->AllocatedVCores = $param["AllocatedVCores"];
        }

        if (array_key_exists("RunningContainers",$param) and $param["RunningContainers"] !== null) {
            $this->RunningContainers = $param["RunningContainers"];
        }

        if (array_key_exists("MemorySeconds",$param) and $param["MemorySeconds"] !== null) {
            $this->MemorySeconds = $param["MemorySeconds"];
        }

        if (array_key_exists("VCoreSeconds",$param) and $param["VCoreSeconds"] !== null) {
            $this->VCoreSeconds = $param["VCoreSeconds"];
        }

        if (array_key_exists("QueueUsagePercentage",$param) and $param["QueueUsagePercentage"] !== null) {
            $this->QueueUsagePercentage = $param["QueueUsagePercentage"];
        }

        if (array_key_exists("ClusterUsagePercentage",$param) and $param["ClusterUsagePercentage"] !== null) {
            $this->ClusterUsagePercentage = $param["ClusterUsagePercentage"];
        }

        if (array_key_exists("PreemptedResourceMB",$param) and $param["PreemptedResourceMB"] !== null) {
            $this->PreemptedResourceMB = $param["PreemptedResourceMB"];
        }

        if (array_key_exists("PreemptedResourceVCores",$param) and $param["PreemptedResourceVCores"] !== null) {
            $this->PreemptedResourceVCores = $param["PreemptedResourceVCores"];
        }

        if (array_key_exists("NumNonAMContainerPreempted",$param) and $param["NumNonAMContainerPreempted"] !== null) {
            $this->NumNonAMContainerPreempted = $param["NumNonAMContainerPreempted"];
        }

        if (array_key_exists("NumAMContainerPreempted",$param) and $param["NumAMContainerPreempted"] !== null) {
            $this->NumAMContainerPreempted = $param["NumAMContainerPreempted"];
        }

        if (array_key_exists("MapsTotal",$param) and $param["MapsTotal"] !== null) {
            $this->MapsTotal = $param["MapsTotal"];
        }

        if (array_key_exists("MapsCompleted",$param) and $param["MapsCompleted"] !== null) {
            $this->MapsCompleted = $param["MapsCompleted"];
        }

        if (array_key_exists("ReducesTotal",$param) and $param["ReducesTotal"] !== null) {
            $this->ReducesTotal = $param["ReducesTotal"];
        }

        if (array_key_exists("ReducesCompleted",$param) and $param["ReducesCompleted"] !== null) {
            $this->ReducesCompleted = $param["ReducesCompleted"];
        }

        if (array_key_exists("AvgMapTime",$param) and $param["AvgMapTime"] !== null) {
            $this->AvgMapTime = $param["AvgMapTime"];
        }

        if (array_key_exists("AvgReduceTime",$param) and $param["AvgReduceTime"] !== null) {
            $this->AvgReduceTime = $param["AvgReduceTime"];
        }

        if (array_key_exists("AvgShuffleTime",$param) and $param["AvgShuffleTime"] !== null) {
            $this->AvgShuffleTime = $param["AvgShuffleTime"];
        }

        if (array_key_exists("AvgMergeTime",$param) and $param["AvgMergeTime"] !== null) {
            $this->AvgMergeTime = $param["AvgMergeTime"];
        }

        if (array_key_exists("FailedReduceAttempts",$param) and $param["FailedReduceAttempts"] !== null) {
            $this->FailedReduceAttempts = $param["FailedReduceAttempts"];
        }

        if (array_key_exists("KilledReduceAttempts",$param) and $param["KilledReduceAttempts"] !== null) {
            $this->KilledReduceAttempts = $param["KilledReduceAttempts"];
        }

        if (array_key_exists("SuccessfulReduceAttempts",$param) and $param["SuccessfulReduceAttempts"] !== null) {
            $this->SuccessfulReduceAttempts = $param["SuccessfulReduceAttempts"];
        }

        if (array_key_exists("FailedMapAttempts",$param) and $param["FailedMapAttempts"] !== null) {
            $this->FailedMapAttempts = $param["FailedMapAttempts"];
        }

        if (array_key_exists("KilledMapAttempts",$param) and $param["KilledMapAttempts"] !== null) {
            $this->KilledMapAttempts = $param["KilledMapAttempts"];
        }

        if (array_key_exists("SuccessfulMapAttempts",$param) and $param["SuccessfulMapAttempts"] !== null) {
            $this->SuccessfulMapAttempts = $param["SuccessfulMapAttempts"];
        }

        if (array_key_exists("GcTimeMillis",$param) and $param["GcTimeMillis"] !== null) {
            $this->GcTimeMillis = $param["GcTimeMillis"];
        }

        if (array_key_exists("VCoreMillisMaps",$param) and $param["VCoreMillisMaps"] !== null) {
            $this->VCoreMillisMaps = $param["VCoreMillisMaps"];
        }

        if (array_key_exists("MbMillisMaps",$param) and $param["MbMillisMaps"] !== null) {
            $this->MbMillisMaps = $param["MbMillisMaps"];
        }

        if (array_key_exists("VCoreMillisReduces",$param) and $param["VCoreMillisReduces"] !== null) {
            $this->VCoreMillisReduces = $param["VCoreMillisReduces"];
        }

        if (array_key_exists("MbMillisReduces",$param) and $param["MbMillisReduces"] !== null) {
            $this->MbMillisReduces = $param["MbMillisReduces"];
        }

        if (array_key_exists("TotalLaunchedMaps",$param) and $param["TotalLaunchedMaps"] !== null) {
            $this->TotalLaunchedMaps = $param["TotalLaunchedMaps"];
        }

        if (array_key_exists("TotalLaunchedReduces",$param) and $param["TotalLaunchedReduces"] !== null) {
            $this->TotalLaunchedReduces = $param["TotalLaunchedReduces"];
        }

        if (array_key_exists("MapInputRecords",$param) and $param["MapInputRecords"] !== null) {
            $this->MapInputRecords = $param["MapInputRecords"];
        }

        if (array_key_exists("MapOutputRecords",$param) and $param["MapOutputRecords"] !== null) {
            $this->MapOutputRecords = $param["MapOutputRecords"];
        }

        if (array_key_exists("ReduceInputRecords",$param) and $param["ReduceInputRecords"] !== null) {
            $this->ReduceInputRecords = $param["ReduceInputRecords"];
        }

        if (array_key_exists("ReduceOutputRecords",$param) and $param["ReduceOutputRecords"] !== null) {
            $this->ReduceOutputRecords = $param["ReduceOutputRecords"];
        }

        if (array_key_exists("HDFSBytesWritten",$param) and $param["HDFSBytesWritten"] !== null) {
            $this->HDFSBytesWritten = $param["HDFSBytesWritten"];
        }

        if (array_key_exists("HDFSBytesRead",$param) and $param["HDFSBytesRead"] !== null) {
            $this->HDFSBytesRead = $param["HDFSBytesRead"];
        }
    }
}
