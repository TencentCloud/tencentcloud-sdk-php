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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceLogFile请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getCurRunDate() 获取实例数据时间
 * @method void setCurRunDate(string $CurRunDate) 设置实例数据时间
 * @method string getRequestFromSource() 获取请求来源，WEB 前端；CLIENT 客户端
 * @method void setRequestFromSource(string $RequestFromSource) 设置请求来源，WEB 前端；CLIENT 客户端
 * @method string getBrokerIp() 获取执行机IP
 * @method void setBrokerIp(string $BrokerIp) 设置执行机IP
 * @method string getOriginFileName() 获取日志文件名
 * @method void setOriginFileName(string $OriginFileName) 设置日志文件名
 * @method string getExecutionJobId() 获取执行平台下发执行id
 * @method void setExecutionJobId(string $ExecutionJobId) 设置执行平台下发执行id
 * @method string getLogLevelType() 获取日志级别，Info/Debug/Warn/Error/All
 * @method void setLogLevelType(string $LogLevelType) 设置日志级别，Info/Debug/Warn/Error/All
 * @method string getExecutionFileType() 获取文件类型,Log/Code
 * @method void setExecutionFileType(string $ExecutionFileType) 设置文件类型,Log/Code
 * @method array getInstanceLifeDetailDtoList() 获取生命周期为基础数据进行日志匹配。Dynamic=true动态获取日志链路中使用
 * @method void setInstanceLifeDetailDtoList(array $InstanceLifeDetailDtoList) 设置生命周期为基础数据进行日志匹配。Dynamic=true动态获取日志链路中使用
 * @method integer getCurrentLifeRound() 获取当前生命周期数
 * @method void setCurrentLifeRound(integer $CurrentLifeRound) 设置当前生命周期数
 * @method integer getMaxLifeRound() 获取最大生命周期数
 * @method void setMaxLifeRound(integer $MaxLifeRound) 设置最大生命周期数
 * @method integer getTries() 获取当前生命周期重试次数
 * @method void setTries(integer $Tries) 设置当前生命周期重试次数
 * @method boolean getDynamic() 获取动态获取日志信息标识
 * @method void setDynamic(boolean $Dynamic) 设置动态获取日志信息标识
 */
class DescribeInstanceLogFileRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 实例数据时间
     */
    public $CurRunDate;

    /**
     * @var string 请求来源，WEB 前端；CLIENT 客户端
     */
    public $RequestFromSource;

    /**
     * @var string 执行机IP
     */
    public $BrokerIp;

    /**
     * @var string 日志文件名
     */
    public $OriginFileName;

    /**
     * @var string 执行平台下发执行id
     */
    public $ExecutionJobId;

    /**
     * @var string 日志级别，Info/Debug/Warn/Error/All
     */
    public $LogLevelType;

    /**
     * @var string 文件类型,Log/Code
     */
    public $ExecutionFileType;

    /**
     * @var array 生命周期为基础数据进行日志匹配。Dynamic=true动态获取日志链路中使用
     */
    public $InstanceLifeDetailDtoList;

    /**
     * @var integer 当前生命周期数
     */
    public $CurrentLifeRound;

    /**
     * @var integer 最大生命周期数
     */
    public $MaxLifeRound;

    /**
     * @var integer 当前生命周期重试次数
     */
    public $Tries;

    /**
     * @var boolean 动态获取日志信息标识
     */
    public $Dynamic;

    /**
     * @param string $ProjectId 项目ID
     * @param string $TaskId 任务ID
     * @param string $CurRunDate 实例数据时间
     * @param string $RequestFromSource 请求来源，WEB 前端；CLIENT 客户端
     * @param string $BrokerIp 执行机IP
     * @param string $OriginFileName 日志文件名
     * @param string $ExecutionJobId 执行平台下发执行id
     * @param string $LogLevelType 日志级别，Info/Debug/Warn/Error/All
     * @param string $ExecutionFileType 文件类型,Log/Code
     * @param array $InstanceLifeDetailDtoList 生命周期为基础数据进行日志匹配。Dynamic=true动态获取日志链路中使用
     * @param integer $CurrentLifeRound 当前生命周期数
     * @param integer $MaxLifeRound 最大生命周期数
     * @param integer $Tries 当前生命周期重试次数
     * @param boolean $Dynamic 动态获取日志信息标识
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("RequestFromSource",$param) and $param["RequestFromSource"] !== null) {
            $this->RequestFromSource = $param["RequestFromSource"];
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

        if (array_key_exists("LogLevelType",$param) and $param["LogLevelType"] !== null) {
            $this->LogLevelType = $param["LogLevelType"];
        }

        if (array_key_exists("ExecutionFileType",$param) and $param["ExecutionFileType"] !== null) {
            $this->ExecutionFileType = $param["ExecutionFileType"];
        }

        if (array_key_exists("InstanceLifeDetailDtoList",$param) and $param["InstanceLifeDetailDtoList"] !== null) {
            $this->InstanceLifeDetailDtoList = [];
            foreach ($param["InstanceLifeDetailDtoList"] as $key => $value){
                $obj = new InstanceLifeDetailDto();
                $obj->deserialize($value);
                array_push($this->InstanceLifeDetailDtoList, $obj);
            }
        }

        if (array_key_exists("CurrentLifeRound",$param) and $param["CurrentLifeRound"] !== null) {
            $this->CurrentLifeRound = $param["CurrentLifeRound"];
        }

        if (array_key_exists("MaxLifeRound",$param) and $param["MaxLifeRound"] !== null) {
            $this->MaxLifeRound = $param["MaxLifeRound"];
        }

        if (array_key_exists("Tries",$param) and $param["Tries"] !== null) {
            $this->Tries = $param["Tries"];
        }

        if (array_key_exists("Dynamic",$param) and $param["Dynamic"] !== null) {
            $this->Dynamic = $param["Dynamic"];
        }
    }
}
