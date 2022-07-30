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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSampleLogs请求参数结构体
 *
 * @method string getProjectId() 获取测试项目ID
 * @method void setProjectId(string $ProjectId) 设置测试项目ID
 * @method string getScenarioId() 获取测试场景ID
 * @method void setScenarioId(string $ScenarioId) 设置测试场景ID
 * @method string getJobId() 获取测试任务ID
 * @method void setJobId(string $JobId) 设置测试任务ID
 * @method string getContext() 获取加载更多日志时使用，透传上次返回的Context值，获取后续的日志内容。过期时间1小时
 * @method void setContext(string $Context) 设置加载更多日志时使用，透传上次返回的Context值，获取后续的日志内容。过期时间1小时
 * @method string getFrom() 获取日志开始时间
 * @method void setFrom(string $From) 设置日志开始时间
 * @method string getTo() 获取日志结束时间
 * @method void setTo(string $To) 设置日志结束时间
 * @method string getSeverityText() 获取日志级别debug,info,error
 * @method void setSeverityText(string $SeverityText) 设置日志级别debug,info,error
 * @method string getInstanceRegion() 获取ap-shanghai, ap-guangzhou
 * @method void setInstanceRegion(string $InstanceRegion) 设置ap-shanghai, ap-guangzhou
 * @method string getInstance() 获取施压引擎节点IP
 * @method void setInstance(string $Instance) 设置施压引擎节点IP
 * @method string getLogType() 获取request 代表采样日志,可为不填
 * @method void setLogType(string $LogType) 设置request 代表采样日志,可为不填
 * @method integer getLimit() 获取返回日志条数，最大100
 * @method void setLimit(integer $Limit) 设置返回日志条数，最大100
 * @method ReactionTimeRange getReactionTimeRange() 获取采样日志响应时间范围
 * @method void setReactionTimeRange(ReactionTimeRange $ReactionTimeRange) 设置采样日志响应时间范围
 * @method string getStatus() 获取采样请求状态码
 * @method void setStatus(string $Status) 设置采样请求状态码
 * @method string getResult() 获取采样请求结果码
 * @method void setResult(string $Result) 设置采样请求结果码
 * @method string getMethod() 获取采样请求方法
 * @method void setMethod(string $Method) 设置采样请求方法
 * @method string getService() 获取采样服务API
 * @method void setService(string $Service) 设置采样服务API
 */
class DescribeSampleLogsRequest extends AbstractModel
{
    /**
     * @var string 测试项目ID
     */
    public $ProjectId;

    /**
     * @var string 测试场景ID
     */
    public $ScenarioId;

    /**
     * @var string 测试任务ID
     */
    public $JobId;

    /**
     * @var string 加载更多日志时使用，透传上次返回的Context值，获取后续的日志内容。过期时间1小时
     */
    public $Context;

    /**
     * @var string 日志开始时间
     */
    public $From;

    /**
     * @var string 日志结束时间
     */
    public $To;

    /**
     * @var string 日志级别debug,info,error
     */
    public $SeverityText;

    /**
     * @var string ap-shanghai, ap-guangzhou
     */
    public $InstanceRegion;

    /**
     * @var string 施压引擎节点IP
     */
    public $Instance;

    /**
     * @var string request 代表采样日志,可为不填
     */
    public $LogType;

    /**
     * @var integer 返回日志条数，最大100
     */
    public $Limit;

    /**
     * @var ReactionTimeRange 采样日志响应时间范围
     */
    public $ReactionTimeRange;

    /**
     * @var string 采样请求状态码
     */
    public $Status;

    /**
     * @var string 采样请求结果码
     */
    public $Result;

    /**
     * @var string 采样请求方法
     */
    public $Method;

    /**
     * @var string 采样服务API
     */
    public $Service;

    /**
     * @param string $ProjectId 测试项目ID
     * @param string $ScenarioId 测试场景ID
     * @param string $JobId 测试任务ID
     * @param string $Context 加载更多日志时使用，透传上次返回的Context值，获取后续的日志内容。过期时间1小时
     * @param string $From 日志开始时间
     * @param string $To 日志结束时间
     * @param string $SeverityText 日志级别debug,info,error
     * @param string $InstanceRegion ap-shanghai, ap-guangzhou
     * @param string $Instance 施压引擎节点IP
     * @param string $LogType request 代表采样日志,可为不填
     * @param integer $Limit 返回日志条数，最大100
     * @param ReactionTimeRange $ReactionTimeRange 采样日志响应时间范围
     * @param string $Status 采样请求状态码
     * @param string $Result 采样请求结果码
     * @param string $Method 采样请求方法
     * @param string $Service 采样服务API
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

        if (array_key_exists("ScenarioId",$param) and $param["ScenarioId"] !== null) {
            $this->ScenarioId = $param["ScenarioId"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("To",$param) and $param["To"] !== null) {
            $this->To = $param["To"];
        }

        if (array_key_exists("SeverityText",$param) and $param["SeverityText"] !== null) {
            $this->SeverityText = $param["SeverityText"];
        }

        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            $this->InstanceRegion = $param["InstanceRegion"];
        }

        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = $param["Instance"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ReactionTimeRange",$param) and $param["ReactionTimeRange"] !== null) {
            $this->ReactionTimeRange = new ReactionTimeRange();
            $this->ReactionTimeRange->deserialize($param["ReactionTimeRange"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }
    }
}
