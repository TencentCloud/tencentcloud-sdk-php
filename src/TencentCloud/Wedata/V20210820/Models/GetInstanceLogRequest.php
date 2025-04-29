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
 * GetInstanceLog请求参数结构体
 *
 * @method string getProjectId() 获取**项目ID**
 * @method void setProjectId(string $ProjectId) 设置**项目ID**
 * @method string getInstanceKey() 获取**实例唯一标识**
 * @method void setInstanceKey(string $InstanceKey) 设置**实例唯一标识**
 * @method integer getLifeRoundNum() 获取**实例生命周期编号，标识实例的某一次执行**

例如：周期实例第一次运行的编号为0，用户后期又重跑了该实例，第二次执行的编号为1
 * @method void setLifeRoundNum(integer $LifeRoundNum) 设置**实例生命周期编号，标识实例的某一次执行**

例如：周期实例第一次运行的编号为0，用户后期又重跑了该实例，第二次执行的编号为1
 * @method string getScheduleTimeZone() 获取**时区**
timeZone, 默认UTC+8
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置**时区**
timeZone, 默认UTC+8
 * @method string getBrokerIp() 获取**日志所在执行机Ip**
 * @method void setBrokerIp(string $BrokerIp) 设置**日志所在执行机Ip**
 * @method string getOriginFileName() 获取**日志文件**
实例详情中 executionJobId 为空时，但 originFileName 不为空时，入参中必须包含 originFileName 与 brokerIp
如果 executionJobId 与 originFileName 都为空，则说明实例未下发执行或没有产生日志。例如分支节点 或 归并节点
 * @method void setOriginFileName(string $OriginFileName) 设置**日志文件**
实例详情中 executionJobId 为空时，但 originFileName 不为空时，入参中必须包含 originFileName 与 brokerIp
如果 executionJobId 与 originFileName 都为空，则说明实例未下发执行或没有产生日志。例如分支节点 或 归并节点
 * @method string getExecutionJobId() 获取**执行ID**

实例详情中 executionJobId 不为空时，入参中需包含executionJobId 。originFileName 与 brokerIp为非必要参数
 * @method void setExecutionJobId(string $ExecutionJobId) 设置**执行ID**

实例详情中 executionJobId 不为空时，入参中需包含executionJobId 。originFileName 与 brokerIp为非必要参数
 * @method string getLogLevel() 获取**日志级别**
默认All

- Info
- Debug
- Warn
- Error
- All
 * @method void setLogLevel(string $LogLevel) 设置**日志级别**
默认All

- Info
- Debug
- Warn
- Error
- All
 * @method integer getStartLineNum() 获取**获取日志的开始行 行号**
默认 1
 * @method void setStartLineNum(integer $StartLineNum) 设置**获取日志的开始行 行号**
默认 1
 * @method integer getEndLineCount() 获取**获取日志的结束行 行号**
默认 10000
 * @method void setEndLineCount(integer $EndLineCount) 设置**获取日志的结束行 行号**
默认 10000
 * @method string getExtInfo() 获取**分页查询日志时使用，无具体业务含义**

第一次查询时值为null 
第二次及以后查询时使用上一次查询返回信息中的ExtInfo字段值即可
 * @method void setExtInfo(string $ExtInfo) 设置**分页查询日志时使用，无具体业务含义**

第一次查询时值为null 
第二次及以后查询时使用上一次查询返回信息中的ExtInfo字段值即可
 */
class GetInstanceLogRequest extends AbstractModel
{
    /**
     * @var string **项目ID**
     */
    public $ProjectId;

    /**
     * @var string **实例唯一标识**
     */
    public $InstanceKey;

    /**
     * @var integer **实例生命周期编号，标识实例的某一次执行**

例如：周期实例第一次运行的编号为0，用户后期又重跑了该实例，第二次执行的编号为1
     */
    public $LifeRoundNum;

    /**
     * @var string **时区**
timeZone, 默认UTC+8
     */
    public $ScheduleTimeZone;

    /**
     * @var string **日志所在执行机Ip**
     */
    public $BrokerIp;

    /**
     * @var string **日志文件**
实例详情中 executionJobId 为空时，但 originFileName 不为空时，入参中必须包含 originFileName 与 brokerIp
如果 executionJobId 与 originFileName 都为空，则说明实例未下发执行或没有产生日志。例如分支节点 或 归并节点
     */
    public $OriginFileName;

    /**
     * @var string **执行ID**

实例详情中 executionJobId 不为空时，入参中需包含executionJobId 。originFileName 与 brokerIp为非必要参数
     */
    public $ExecutionJobId;

    /**
     * @var string **日志级别**
默认All

- Info
- Debug
- Warn
- Error
- All
     */
    public $LogLevel;

    /**
     * @var integer **获取日志的开始行 行号**
默认 1
     */
    public $StartLineNum;

    /**
     * @var integer **获取日志的结束行 行号**
默认 10000
     */
    public $EndLineCount;

    /**
     * @var string **分页查询日志时使用，无具体业务含义**

第一次查询时值为null 
第二次及以后查询时使用上一次查询返回信息中的ExtInfo字段值即可
     */
    public $ExtInfo;

    /**
     * @param string $ProjectId **项目ID**
     * @param string $InstanceKey **实例唯一标识**
     * @param integer $LifeRoundNum **实例生命周期编号，标识实例的某一次执行**

例如：周期实例第一次运行的编号为0，用户后期又重跑了该实例，第二次执行的编号为1
     * @param string $ScheduleTimeZone **时区**
timeZone, 默认UTC+8
     * @param string $BrokerIp **日志所在执行机Ip**
     * @param string $OriginFileName **日志文件**
实例详情中 executionJobId 为空时，但 originFileName 不为空时，入参中必须包含 originFileName 与 brokerIp
如果 executionJobId 与 originFileName 都为空，则说明实例未下发执行或没有产生日志。例如分支节点 或 归并节点
     * @param string $ExecutionJobId **执行ID**

实例详情中 executionJobId 不为空时，入参中需包含executionJobId 。originFileName 与 brokerIp为非必要参数
     * @param string $LogLevel **日志级别**
默认All

- Info
- Debug
- Warn
- Error
- All
     * @param integer $StartLineNum **获取日志的开始行 行号**
默认 1
     * @param integer $EndLineCount **获取日志的结束行 行号**
默认 10000
     * @param string $ExtInfo **分页查询日志时使用，无具体业务含义**

第一次查询时值为null 
第二次及以后查询时使用上一次查询返回信息中的ExtInfo字段值即可
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("LifeRoundNum",$param) and $param["LifeRoundNum"] !== null) {
            $this->LifeRoundNum = $param["LifeRoundNum"];
        }

        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }

        if (array_key_exists("BrokerIp",$param) and $param["BrokerIp"] !== null) {
            $this->BrokerIp = $param["BrokerIp"];
        }

        if (array_key_exists("OriginFileName",$param) and $param["OriginFileName"] !== null) {
            $this->OriginFileName = $param["OriginFileName"];
        }

        if (array_key_exists("ExecutionJobId",$param) and $param["ExecutionJobId"] !== null) {
            $this->ExecutionJobId = $param["ExecutionJobId"];
        }

        if (array_key_exists("LogLevel",$param) and $param["LogLevel"] !== null) {
            $this->LogLevel = $param["LogLevel"];
        }

        if (array_key_exists("StartLineNum",$param) and $param["StartLineNum"] !== null) {
            $this->StartLineNum = $param["StartLineNum"];
        }

        if (array_key_exists("EndLineCount",$param) and $param["EndLineCount"] !== null) {
            $this->EndLineCount = $param["EndLineCount"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
