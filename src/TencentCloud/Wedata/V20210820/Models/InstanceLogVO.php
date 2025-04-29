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
 * 实例日志内容
 *
 * @method string getInstanceKey() 获取实例唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceKey(string $InstanceKey) 设置实例唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceState() 获取**实例状态**

- [0] 表示 等待事件
- [12] 表示 等待上游
- [6, 7, 9, 10, 18] 表示 等待运行
- [1, 19, 22] 表示 运行中
- [21] 表示 跳过运行
- [3] 表示 失败重试
- [8, 4, 5, 13] 表示 失败
- [2] 表示 成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceState(integer $InstanceState) 设置**实例状态**

- [0] 表示 等待事件
- [12] 表示 等待上游
- [6, 7, 9, 10, 18] 表示 等待运行
- [1, 19, 22] 表示 运行中
- [21] 表示 跳过运行
- [3] 表示 失败重试
- [8, 4, 5, 13] 表示 失败
- [2] 表示 成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunType() 获取**实例运行触发类型**

- RERUN 表示重跑
- ADDITION 表示补录
- PERIODIC 表示周期
- APERIODIC 表示非周期
- RERUN_SKIP_RUN 表示重跑 - 空跑
- ADDITION_SKIP_RUN 表示补录 - 空跑
- PERIODIC_SKIP_RUN 表示周期 - 空跑
- APERIODIC_SKIP_RUN 表示非周期 - 空跑
- MANUAL_TRIGGER 表示手动触发
- RERUN_MANUAL_TRIGGER 表示手动触发 - 重跑
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunType(string $RunType) 设置**实例运行触发类型**

- RERUN 表示重跑
- ADDITION 表示补录
- PERIODIC 表示周期
- APERIODIC 表示非周期
- RERUN_SKIP_RUN 表示重跑 - 空跑
- ADDITION_SKIP_RUN 表示补录 - 空跑
- PERIODIC_SKIP_RUN 表示周期 - 空跑
- APERIODIC_SKIP_RUN 表示非周期 - 空跑
- MANUAL_TRIGGER 表示手动触发
- RERUN_MANUAL_TRIGGER 表示手动触发 - 重跑
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取开始运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置开始运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取运行完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置运行完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodeInfo() 获取**运行代码内容**
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeInfo(string $CodeInfo) 设置**运行代码内容**
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodeFileSize() 获取**运行代码文件大小**
单位KB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeFileSize(string $CodeFileSize) 设置**运行代码文件大小**
单位KB
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBrokerIp() 获取日志所在节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBrokerIp(string $BrokerIp) 设置日志所在节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogInfo() 获取**日志内容**
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogInfo(string $LogInfo) 设置**日志内容**
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogFileSize() 获取**日志文件大小**
单位KB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogFileSize(string $LogFileSize) 设置**日志文件大小**
单位KB
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLineCount() 获取**本次查询返回的日志行数**
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLineCount(integer $LineCount) 设置**本次查询返回的日志行数**
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtInfo() 获取**分页查询日志时使用，无具体业务含义**

第一次查询时值为null 
第二次及以后查询时使用上一次查询返回信息中的ExtInfo字段值即可
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtInfo(string $ExtInfo) 设置**分页查询日志时使用，无具体业务含义**

第一次查询时值为null 
第二次及以后查询时使用上一次查询返回信息中的ExtInfo字段值即可
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsEnd() 获取日志分页查询，是否最后一页
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsEnd(boolean $IsEnd) 设置日志分页查询，是否最后一页
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceLogVO extends AbstractModel
{
    /**
     * @var string 实例唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceKey;

    /**
     * @var string 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var integer **实例状态**

- [0] 表示 等待事件
- [12] 表示 等待上游
- [6, 7, 9, 10, 18] 表示 等待运行
- [1, 19, 22] 表示 运行中
- [21] 表示 跳过运行
- [3] 表示 失败重试
- [8, 4, 5, 13] 表示 失败
- [2] 表示 成功
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceState;

    /**
     * @var string **实例运行触发类型**

- RERUN 表示重跑
- ADDITION 表示补录
- PERIODIC 表示周期
- APERIODIC 表示非周期
- RERUN_SKIP_RUN 表示重跑 - 空跑
- ADDITION_SKIP_RUN 表示补录 - 空跑
- PERIODIC_SKIP_RUN 表示周期 - 空跑
- APERIODIC_SKIP_RUN 表示非周期 - 空跑
- MANUAL_TRIGGER 表示手动触发
- RERUN_MANUAL_TRIGGER 表示手动触发 - 重跑
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunType;

    /**
     * @var string 开始运行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 运行完成时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string **运行代码内容**
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeInfo;

    /**
     * @var string **运行代码文件大小**
单位KB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeFileSize;

    /**
     * @var string 日志所在节点信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BrokerIp;

    /**
     * @var string **日志内容**
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogInfo;

    /**
     * @var string **日志文件大小**
单位KB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogFileSize;

    /**
     * @var integer **本次查询返回的日志行数**
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LineCount;

    /**
     * @var string **分页查询日志时使用，无具体业务含义**

第一次查询时值为null 
第二次及以后查询时使用上一次查询返回信息中的ExtInfo字段值即可
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtInfo;

    /**
     * @var boolean 日志分页查询，是否最后一页
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsEnd;

    /**
     * @param string $InstanceKey 实例唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceState **实例状态**

- [0] 表示 等待事件
- [12] 表示 等待上游
- [6, 7, 9, 10, 18] 表示 等待运行
- [1, 19, 22] 表示 运行中
- [21] 表示 跳过运行
- [3] 表示 失败重试
- [8, 4, 5, 13] 表示 失败
- [2] 表示 成功
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunType **实例运行触发类型**

- RERUN 表示重跑
- ADDITION 表示补录
- PERIODIC 表示周期
- APERIODIC 表示非周期
- RERUN_SKIP_RUN 表示重跑 - 空跑
- ADDITION_SKIP_RUN 表示补录 - 空跑
- PERIODIC_SKIP_RUN 表示周期 - 空跑
- APERIODIC_SKIP_RUN 表示非周期 - 空跑
- MANUAL_TRIGGER 表示手动触发
- RERUN_MANUAL_TRIGGER 表示手动触发 - 重跑
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 开始运行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 运行完成时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CodeInfo **运行代码内容**
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CodeFileSize **运行代码文件大小**
单位KB
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BrokerIp 日志所在节点信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogInfo **日志内容**
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogFileSize **日志文件大小**
单位KB
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LineCount **本次查询返回的日志行数**
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtInfo **分页查询日志时使用，无具体业务含义**

第一次查询时值为null 
第二次及以后查询时使用上一次查询返回信息中的ExtInfo字段值即可
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsEnd 日志分页查询，是否最后一页
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
        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("RunType",$param) and $param["RunType"] !== null) {
            $this->RunType = $param["RunType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CodeInfo",$param) and $param["CodeInfo"] !== null) {
            $this->CodeInfo = $param["CodeInfo"];
        }

        if (array_key_exists("CodeFileSize",$param) and $param["CodeFileSize"] !== null) {
            $this->CodeFileSize = $param["CodeFileSize"];
        }

        if (array_key_exists("BrokerIp",$param) and $param["BrokerIp"] !== null) {
            $this->BrokerIp = $param["BrokerIp"];
        }

        if (array_key_exists("LogInfo",$param) and $param["LogInfo"] !== null) {
            $this->LogInfo = $param["LogInfo"];
        }

        if (array_key_exists("LogFileSize",$param) and $param["LogFileSize"] !== null) {
            $this->LogFileSize = $param["LogFileSize"];
        }

        if (array_key_exists("LineCount",$param) and $param["LineCount"] !== null) {
            $this->LineCount = $param["LineCount"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }

        if (array_key_exists("IsEnd",$param) and $param["IsEnd"] !== null) {
            $this->IsEnd = $param["IsEnd"];
        }
    }
}
