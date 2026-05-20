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
 * @method string getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
 * @method string getTaskId() 获取<p>任务ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务ID</p>
 * @method string getCurRunDate() 获取<p>实例数据时间</p>
 * @method void setCurRunDate(string $CurRunDate) 设置<p>实例数据时间</p>
 * @method string getRequestFromSource() 获取请求来源，WEB 前端；CLIENT 客户端
 * @method void setRequestFromSource(string $RequestFromSource) 设置请求来源，WEB 前端；CLIENT 客户端
 * @method string getBrokerIp() 获取<p>执行机IP</p>
 * @method void setBrokerIp(string $BrokerIp) 设置<p>执行机IP</p>
 * @method string getOriginFileName() 获取<p>日志文件名</p>
 * @method void setOriginFileName(string $OriginFileName) 设置<p>日志文件名</p>
 * @method string getExecutionJobId() 获取<p>执行平台下发执行id</p>
 * @method void setExecutionJobId(string $ExecutionJobId) 设置<p>执行平台下发执行id</p>
 * @method string getLogLevelType() 获取<p>日志级别，Info/Debug/Warn/Error/All</p>
 * @method void setLogLevelType(string $LogLevelType) 设置<p>日志级别，Info/Debug/Warn/Error/All</p>
 * @method string getExecutionFileType() 获取<p>文件类型,Log/Code</p>
 * @method void setExecutionFileType(string $ExecutionFileType) 设置<p>文件类型,Log/Code</p>
 * @method array getInstanceLifeDetailDtoList() 获取<p>生命周期为基础数据进行日志匹配。Dynamic=true动态获取日志链路中使用</p>
 * @method void setInstanceLifeDetailDtoList(array $InstanceLifeDetailDtoList) 设置<p>生命周期为基础数据进行日志匹配。Dynamic=true动态获取日志链路中使用</p>
 * @method integer getCurrentLifeRound() 获取<p>当前生命周期数</p>
 * @method void setCurrentLifeRound(integer $CurrentLifeRound) 设置<p>当前生命周期数</p>
 * @method integer getMaxLifeRound() 获取<p>最大生命周期数</p>
 * @method void setMaxLifeRound(integer $MaxLifeRound) 设置<p>最大生命周期数</p>
 * @method integer getTries() 获取<p>当前生命周期重试次数</p>
 * @method void setTries(integer $Tries) 设置<p>当前生命周期重试次数</p>
 * @method boolean getDynamic() 获取<p>动态获取日志信息标识</p>
 * @method void setDynamic(boolean $Dynamic) 设置<p>动态获取日志信息标识</p>
 */
class DescribeInstanceLogFileRequest extends AbstractModel
{
    /**
     * @var string <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>任务ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>实例数据时间</p>
     */
    public $CurRunDate;

    /**
     * @var string 请求来源，WEB 前端；CLIENT 客户端
     */
    public $RequestFromSource;

    /**
     * @var string <p>执行机IP</p>
     */
    public $BrokerIp;

    /**
     * @var string <p>日志文件名</p>
     */
    public $OriginFileName;

    /**
     * @var string <p>执行平台下发执行id</p>
     */
    public $ExecutionJobId;

    /**
     * @var string <p>日志级别，Info/Debug/Warn/Error/All</p>
     */
    public $LogLevelType;

    /**
     * @var string <p>文件类型,Log/Code</p>
     */
    public $ExecutionFileType;

    /**
     * @var array <p>生命周期为基础数据进行日志匹配。Dynamic=true动态获取日志链路中使用</p>
     */
    public $InstanceLifeDetailDtoList;

    /**
     * @var integer <p>当前生命周期数</p>
     */
    public $CurrentLifeRound;

    /**
     * @var integer <p>最大生命周期数</p>
     */
    public $MaxLifeRound;

    /**
     * @var integer <p>当前生命周期重试次数</p>
     */
    public $Tries;

    /**
     * @var boolean <p>动态获取日志信息标识</p>
     */
    public $Dynamic;

    /**
     * @param string $ProjectId <p>项目ID</p>
     * @param string $TaskId <p>任务ID</p>
     * @param string $CurRunDate <p>实例数据时间</p>
     * @param string $RequestFromSource 请求来源，WEB 前端；CLIENT 客户端
     * @param string $BrokerIp <p>执行机IP</p>
     * @param string $OriginFileName <p>日志文件名</p>
     * @param string $ExecutionJobId <p>执行平台下发执行id</p>
     * @param string $LogLevelType <p>日志级别，Info/Debug/Warn/Error/All</p>
     * @param string $ExecutionFileType <p>文件类型,Log/Code</p>
     * @param array $InstanceLifeDetailDtoList <p>生命周期为基础数据进行日志匹配。Dynamic=true动态获取日志链路中使用</p>
     * @param integer $CurrentLifeRound <p>当前生命周期数</p>
     * @param integer $MaxLifeRound <p>最大生命周期数</p>
     * @param integer $Tries <p>当前生命周期重试次数</p>
     * @param boolean $Dynamic <p>动态获取日志信息标识</p>
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
