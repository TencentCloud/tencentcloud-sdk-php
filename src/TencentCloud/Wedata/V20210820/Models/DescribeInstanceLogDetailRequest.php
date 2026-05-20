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
 * DescribeInstanceLogDetail请求参数结构体
 *
 * @method string getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
 * @method string getTaskId() 获取<p>任务id</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务id</p>
 * @method string getCurRunDate() 获取<p>数据时间</p>
 * @method void setCurRunDate(string $CurRunDate) 设置<p>数据时间</p>
 * @method string getLogLevelType() 获取<p>日志级别，Info/Debug/Warn/Error/All</p>
 * @method void setLogLevelType(string $LogLevelType) 设置<p>日志级别，Info/Debug/Warn/Error/All</p>
 * @method string getExecutionFileType() 获取<p>文件类型,Log/Code</p>
 * @method void setExecutionFileType(string $ExecutionFileType) 设置<p>文件类型,Log/Code</p>
 * @method string getExecutionJobId() 获取<p>统一执行平台执行id, 注意: ExecutionJobId 跟 &quot;BrokerIp+OriginFileName&quot; 必须有一个不为空</p>
 * @method void setExecutionJobId(string $ExecutionJobId) 设置<p>统一执行平台执行id, 注意: ExecutionJobId 跟 &quot;BrokerIp+OriginFileName&quot; 必须有一个不为空</p>
 * @method string getBrokerIp() 获取<p>服务器Ip, 注意: &quot;BrokerIp+OriginFileName&quot;跟ExecutionJobId必须有一个不为空</p>
 * @method void setBrokerIp(string $BrokerIp) 设置<p>服务器Ip, 注意: &quot;BrokerIp+OriginFileName&quot;跟ExecutionJobId必须有一个不为空</p>
 * @method string getOriginFileName() 获取<p>文件Name, 注意: &quot;BrokerIp+OriginFileName&quot;跟ExecutionJobId必须有一个不为空</p>
 * @method void setOriginFileName(string $OriginFileName) 设置<p>文件Name, 注意: &quot;BrokerIp+OriginFileName&quot;跟ExecutionJobId必须有一个不为空</p>
 * @method integer getStartCount() 获取<p>起始行</p>
 * @method void setStartCount(integer $StartCount) 设置<p>起始行</p>
 * @method integer getLineCount() 获取<p>每次查询行数</p>
 * @method void setLineCount(integer $LineCount) 设置<p>每次查询行数</p>
 * @method string getExtInfo() 获取<p>查询日志扩展信息,通过统一执行平台接口分页查询日志时需要带上,第一页时为null</p>
 * @method void setExtInfo(string $ExtInfo) 设置<p>查询日志扩展信息,通过统一执行平台接口分页查询日志时需要带上,第一页时为null</p>
 * @method string getRequestFromSource() 获取请求来源，WEB 前端；CLIENT 客户端
 * @method void setRequestFromSource(string $RequestFromSource) 设置请求来源，WEB 前端；CLIENT 客户端
 * @method array getInstanceLifeDetailDtoList() 获取<p>生命周期为基础数据进行日志匹配</p>
 * @method void setInstanceLifeDetailDtoList(array $InstanceLifeDetailDtoList) 设置<p>生命周期为基础数据进行日志匹配</p>
 * @method integer getCurrentLifeRound() 获取<p>当前生命周期</p>
 * @method void setCurrentLifeRound(integer $CurrentLifeRound) 设置<p>当前生命周期</p>
 * @method integer getMaxLifeRound() 获取<p>生命周期总数</p>
 * @method void setMaxLifeRound(integer $MaxLifeRound) 设置<p>生命周期总数</p>
 * @method integer getTries() 获取<p>当前生命周期重试次数</p>
 * @method void setTries(integer $Tries) 设置<p>当前生命周期重试次数</p>
 * @method boolean getDynamic() 获取<p>动态加载日志</p>
 * @method void setDynamic(boolean $Dynamic) 设置<p>动态加载日志</p>
 */
class DescribeInstanceLogDetailRequest extends AbstractModel
{
    /**
     * @var string <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>任务id</p>
     */
    public $TaskId;

    /**
     * @var string <p>数据时间</p>
     */
    public $CurRunDate;

    /**
     * @var string <p>日志级别，Info/Debug/Warn/Error/All</p>
     */
    public $LogLevelType;

    /**
     * @var string <p>文件类型,Log/Code</p>
     */
    public $ExecutionFileType;

    /**
     * @var string <p>统一执行平台执行id, 注意: ExecutionJobId 跟 &quot;BrokerIp+OriginFileName&quot; 必须有一个不为空</p>
     */
    public $ExecutionJobId;

    /**
     * @var string <p>服务器Ip, 注意: &quot;BrokerIp+OriginFileName&quot;跟ExecutionJobId必须有一个不为空</p>
     */
    public $BrokerIp;

    /**
     * @var string <p>文件Name, 注意: &quot;BrokerIp+OriginFileName&quot;跟ExecutionJobId必须有一个不为空</p>
     */
    public $OriginFileName;

    /**
     * @var integer <p>起始行</p>
     */
    public $StartCount;

    /**
     * @var integer <p>每次查询行数</p>
     */
    public $LineCount;

    /**
     * @var string <p>查询日志扩展信息,通过统一执行平台接口分页查询日志时需要带上,第一页时为null</p>
     */
    public $ExtInfo;

    /**
     * @var string 请求来源，WEB 前端；CLIENT 客户端
     */
    public $RequestFromSource;

    /**
     * @var array <p>生命周期为基础数据进行日志匹配</p>
     */
    public $InstanceLifeDetailDtoList;

    /**
     * @var integer <p>当前生命周期</p>
     */
    public $CurrentLifeRound;

    /**
     * @var integer <p>生命周期总数</p>
     */
    public $MaxLifeRound;

    /**
     * @var integer <p>当前生命周期重试次数</p>
     */
    public $Tries;

    /**
     * @var boolean <p>动态加载日志</p>
     */
    public $Dynamic;

    /**
     * @param string $ProjectId <p>项目ID</p>
     * @param string $TaskId <p>任务id</p>
     * @param string $CurRunDate <p>数据时间</p>
     * @param string $LogLevelType <p>日志级别，Info/Debug/Warn/Error/All</p>
     * @param string $ExecutionFileType <p>文件类型,Log/Code</p>
     * @param string $ExecutionJobId <p>统一执行平台执行id, 注意: ExecutionJobId 跟 &quot;BrokerIp+OriginFileName&quot; 必须有一个不为空</p>
     * @param string $BrokerIp <p>服务器Ip, 注意: &quot;BrokerIp+OriginFileName&quot;跟ExecutionJobId必须有一个不为空</p>
     * @param string $OriginFileName <p>文件Name, 注意: &quot;BrokerIp+OriginFileName&quot;跟ExecutionJobId必须有一个不为空</p>
     * @param integer $StartCount <p>起始行</p>
     * @param integer $LineCount <p>每次查询行数</p>
     * @param string $ExtInfo <p>查询日志扩展信息,通过统一执行平台接口分页查询日志时需要带上,第一页时为null</p>
     * @param string $RequestFromSource 请求来源，WEB 前端；CLIENT 客户端
     * @param array $InstanceLifeDetailDtoList <p>生命周期为基础数据进行日志匹配</p>
     * @param integer $CurrentLifeRound <p>当前生命周期</p>
     * @param integer $MaxLifeRound <p>生命周期总数</p>
     * @param integer $Tries <p>当前生命周期重试次数</p>
     * @param boolean $Dynamic <p>动态加载日志</p>
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

        if (array_key_exists("LogLevelType",$param) and $param["LogLevelType"] !== null) {
            $this->LogLevelType = $param["LogLevelType"];
        }

        if (array_key_exists("ExecutionFileType",$param) and $param["ExecutionFileType"] !== null) {
            $this->ExecutionFileType = $param["ExecutionFileType"];
        }

        if (array_key_exists("ExecutionJobId",$param) and $param["ExecutionJobId"] !== null) {
            $this->ExecutionJobId = $param["ExecutionJobId"];
        }

        if (array_key_exists("BrokerIp",$param) and $param["BrokerIp"] !== null) {
            $this->BrokerIp = $param["BrokerIp"];
        }

        if (array_key_exists("OriginFileName",$param) and $param["OriginFileName"] !== null) {
            $this->OriginFileName = $param["OriginFileName"];
        }

        if (array_key_exists("StartCount",$param) and $param["StartCount"] !== null) {
            $this->StartCount = $param["StartCount"];
        }

        if (array_key_exists("LineCount",$param) and $param["LineCount"] !== null) {
            $this->LineCount = $param["LineCount"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }

        if (array_key_exists("RequestFromSource",$param) and $param["RequestFromSource"] !== null) {
            $this->RequestFromSource = $param["RequestFromSource"];
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
