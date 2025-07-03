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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Job详细信息
 *
 * @method string getJobId() 获取作业ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobId(string $JobId) 设置作业ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取用户AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置用户AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取用户UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置用户UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatorUin() 获取创建者UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorUin(string $CreatorUin) 设置创建者UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取作业名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置作业名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getJobType() 获取作业类型，1：sql作业，2：Jar作业
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobType(integer $JobType) 设置作业类型，1：sql作业，2：Jar作业
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取作业状态，1：未初始化，2：未发布，3：操作中，4：运行中，5：停止，6：暂停，-1：故障
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置作业状态，1：未初始化，2：未发布，3：操作中，4：运行中，5：停止，6：暂停，-1：故障
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取作业创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置作业创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取作业启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置作业启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStopTime() 获取作业停止时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStopTime(string $StopTime) 设置作业停止时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取作业更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置作业更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalRunMillis() 获取作业累计运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalRunMillis(integer $TotalRunMillis) 设置作业累计运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastOpResult() 获取操作错误提示信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastOpResult(string $LastOpResult) 设置操作错误提示信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取集群名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置集群名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLatestJobConfigVersion() 获取最新配置版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestJobConfigVersion(integer $LatestJobConfigVersion) 设置最新配置版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPublishedJobConfigVersion() 获取已发布的配置版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublishedJobConfigVersion(integer $PublishedJobConfigVersion) 设置已发布的配置版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunningCuNum() 获取运行的CU数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningCuNum(integer $RunningCuNum) 设置运行的CU数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCuMem() 获取作业内存规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCuMem(integer $CuMem) 设置作业内存规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusDesc() 获取作业状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusDesc(string $StatusDesc) 设置作业状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCurrentRunMillis() 获取运行状态时表示单次运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentRunMillis(integer $CurrentRunMillis) 设置运行状态时表示单次运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取作业所在的集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置作业所在的集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWebUIUrl() 获取作业管理WEB UI 入口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebUIUrl(string $WebUIUrl) 设置作业管理WEB UI 入口
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSchedulerType() 获取作业所在集群类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerType(integer $SchedulerType) 设置作业所在集群类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getClusterStatus() 获取作业所在集群状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterStatus(integer $ClusterStatus) 设置作业所在集群状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRunningCu() 获取细粒度下的运行的CU数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningCu(float $RunningCu) 设置细粒度下的运行的CU数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlinkVersion() 获取作业运行的 Flink 版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlinkVersion(string $FlinkVersion) 设置作业运行的 Flink 版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkSpaceId() 获取工作空间 SerialId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置工作空间 SerialId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkSpaceName() 获取工作空间名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkSpaceName(string $WorkSpaceName) 设置工作空间名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取作业标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置作业标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method JobEventInfo getEventInfo() 获取作业异常事件信息	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventInfo(JobEventInfo $EventInfo) 设置作业异常事件信息	
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScalingType() 获取0:代表没开启调优任务，1:开启智能调优，2:代表定时调优

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScalingType(integer $ScalingType) 设置0:代表没开启调优任务，1:开启智能调优，2:代表定时调优

注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRunningCpu() 获取使用CPU数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningCpu(float $RunningCpu) 设置使用CPU数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRunningMem() 获取使用内存数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningMem(float $RunningMem) 设置使用内存数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOpenJobDefaultAlarm() 获取是否开了默认告警
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpenJobDefaultAlarm(integer $OpenJobDefaultAlarm) 设置是否开了默认告警
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProgressDesc() 获取操作中描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgressDesc(string $ProgressDesc) 设置操作中描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class JobV1 extends AbstractModel
{
    /**
     * @var string 作业ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobId;

    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var integer 用户AppId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 用户UIN
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var string 创建者UIN
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorUin;

    /**
     * @var string 作业名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 作业类型，1：sql作业，2：Jar作业
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobType;

    /**
     * @var integer 作业状态，1：未初始化，2：未发布，3：操作中，4：运行中，5：停止，6：暂停，-1：故障
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 作业创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 作业启动时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 作业停止时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StopTime;

    /**
     * @var string 作业更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 作业累计运行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalRunMillis;

    /**
     * @var string 备注信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 操作错误提示信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastOpResult;

    /**
     * @var string 集群名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var integer 最新配置版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestJobConfigVersion;

    /**
     * @var integer 已发布的配置版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublishedJobConfigVersion;

    /**
     * @var integer 运行的CU数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningCuNum;

    /**
     * @var integer 作业内存规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CuMem;

    /**
     * @var string 作业状态描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusDesc;

    /**
     * @var integer 运行状态时表示单次运行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentRunMillis;

    /**
     * @var string 作业所在的集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 作业管理WEB UI 入口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebUIUrl;

    /**
     * @var integer 作业所在集群类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerType;

    /**
     * @var integer 作业所在集群状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterStatus;

    /**
     * @var float 细粒度下的运行的CU数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningCu;

    /**
     * @var string 作业运行的 Flink 版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlinkVersion;

    /**
     * @var string 工作空间 SerialId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkSpaceId;

    /**
     * @var string 工作空间名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkSpaceName;

    /**
     * @var array 作业标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var JobEventInfo 作业异常事件信息	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventInfo;

    /**
     * @var string 描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 0:代表没开启调优任务，1:开启智能调优，2:代表定时调优

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScalingType;

    /**
     * @var float 使用CPU数目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningCpu;

    /**
     * @var float 使用内存数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningMem;

    /**
     * @var integer 是否开了默认告警
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpenJobDefaultAlarm;

    /**
     * @var string 操作中描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProgressDesc;

    /**
     * @param string $JobId 作业ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId 用户AppId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin 用户UIN
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatorUin 创建者UIN
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 作业名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $JobType 作业类型，1：sql作业，2：Jar作业
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 作业状态，1：未初始化，2：未发布，3：操作中，4：运行中，5：停止，6：暂停，-1：故障
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 作业创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 作业启动时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StopTime 作业停止时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 作业更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalRunMillis 作业累计运行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastOpResult 操作错误提示信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 集群名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LatestJobConfigVersion 最新配置版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PublishedJobConfigVersion 已发布的配置版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunningCuNum 运行的CU数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CuMem 作业内存规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusDesc 作业状态描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CurrentRunMillis 运行状态时表示单次运行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 作业所在的集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WebUIUrl 作业管理WEB UI 入口
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SchedulerType 作业所在集群类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ClusterStatus 作业所在集群状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RunningCu 细粒度下的运行的CU数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlinkVersion 作业运行的 Flink 版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkSpaceId 工作空间 SerialId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkSpaceName 工作空间名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 作业标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param JobEventInfo $EventInfo 作业异常事件信息	
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScalingType 0:代表没开启调优任务，1:开启智能调优，2:代表定时调优

注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RunningCpu 使用CPU数目
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RunningMem 使用内存数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OpenJobDefaultAlarm 是否开了默认告警
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProgressDesc 操作中描述
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("StopTime",$param) and $param["StopTime"] !== null) {
            $this->StopTime = $param["StopTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TotalRunMillis",$param) and $param["TotalRunMillis"] !== null) {
            $this->TotalRunMillis = $param["TotalRunMillis"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("LastOpResult",$param) and $param["LastOpResult"] !== null) {
            $this->LastOpResult = $param["LastOpResult"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("LatestJobConfigVersion",$param) and $param["LatestJobConfigVersion"] !== null) {
            $this->LatestJobConfigVersion = $param["LatestJobConfigVersion"];
        }

        if (array_key_exists("PublishedJobConfigVersion",$param) and $param["PublishedJobConfigVersion"] !== null) {
            $this->PublishedJobConfigVersion = $param["PublishedJobConfigVersion"];
        }

        if (array_key_exists("RunningCuNum",$param) and $param["RunningCuNum"] !== null) {
            $this->RunningCuNum = $param["RunningCuNum"];
        }

        if (array_key_exists("CuMem",$param) and $param["CuMem"] !== null) {
            $this->CuMem = $param["CuMem"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("CurrentRunMillis",$param) and $param["CurrentRunMillis"] !== null) {
            $this->CurrentRunMillis = $param["CurrentRunMillis"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("WebUIUrl",$param) and $param["WebUIUrl"] !== null) {
            $this->WebUIUrl = $param["WebUIUrl"];
        }

        if (array_key_exists("SchedulerType",$param) and $param["SchedulerType"] !== null) {
            $this->SchedulerType = $param["SchedulerType"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("RunningCu",$param) and $param["RunningCu"] !== null) {
            $this->RunningCu = $param["RunningCu"];
        }

        if (array_key_exists("FlinkVersion",$param) and $param["FlinkVersion"] !== null) {
            $this->FlinkVersion = $param["FlinkVersion"];
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }

        if (array_key_exists("WorkSpaceName",$param) and $param["WorkSpaceName"] !== null) {
            $this->WorkSpaceName = $param["WorkSpaceName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("EventInfo",$param) and $param["EventInfo"] !== null) {
            $this->EventInfo = new JobEventInfo();
            $this->EventInfo->deserialize($param["EventInfo"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ScalingType",$param) and $param["ScalingType"] !== null) {
            $this->ScalingType = $param["ScalingType"];
        }

        if (array_key_exists("RunningCpu",$param) and $param["RunningCpu"] !== null) {
            $this->RunningCpu = $param["RunningCpu"];
        }

        if (array_key_exists("RunningMem",$param) and $param["RunningMem"] !== null) {
            $this->RunningMem = $param["RunningMem"];
        }

        if (array_key_exists("OpenJobDefaultAlarm",$param) and $param["OpenJobDefaultAlarm"] !== null) {
            $this->OpenJobDefaultAlarm = $param["OpenJobDefaultAlarm"];
        }

        if (array_key_exists("ProgressDesc",$param) and $param["ProgressDesc"] !== null) {
            $this->ProgressDesc = $param["ProgressDesc"];
        }
    }
}
