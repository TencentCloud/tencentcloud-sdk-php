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
 * DescribeNormalLogs请求参数结构体
 *
 * @method string getProjectId() 获取压测项目ID
 * @method void setProjectId(string $ProjectId) 设置压测项目ID
 * @method string getScenarioId() 获取测试场景ID
 * @method void setScenarioId(string $ScenarioId) 设置测试场景ID
 * @method string getJobId() 获取压测任务ID
 * @method void setJobId(string $JobId) 设置压测任务ID
 * @method string getContext() 获取日志上下文，加载更多日志时使用，透传上次返回的Context值，获取后续的日志内容。过期时间1小时
 * @method void setContext(string $Context) 设置日志上下文，加载更多日志时使用，透传上次返回的Context值，获取后续的日志内容。过期时间1小时
 * @method string getFrom() 获取日志开始时间
 * @method void setFrom(string $From) 设置日志开始时间
 * @method string getTo() 获取日志结束时间
 * @method void setTo(string $To) 设置日志结束时间
 * @method string getSeverityText() 获取日志级别，可取debug/info/error
 * @method void setSeverityText(string $SeverityText) 设置日志级别，可取debug/info/error
 * @method string getInstance() 获取施压节点IP
 * @method void setInstance(string $Instance) 设置施压节点IP
 * @method string getInstanceRegion() 获取施压节点所在地域
 * @method void setInstanceRegion(string $InstanceRegion) 设置施压节点所在地域
 * @method string getLogType() 获取日志类型， console代表用户输出，engine代表引擎输出
 * @method void setLogType(string $LogType) 设置日志类型， console代表用户输出，engine代表引擎输出
 * @method integer getLimit() 获取返回日志条数限制，最大100
 * @method void setLimit(integer $Limit) 设置返回日志条数限制，最大100
 */
class DescribeNormalLogsRequest extends AbstractModel
{
    /**
     * @var string 压测项目ID
     */
    public $ProjectId;

    /**
     * @var string 测试场景ID
     */
    public $ScenarioId;

    /**
     * @var string 压测任务ID
     */
    public $JobId;

    /**
     * @var string 日志上下文，加载更多日志时使用，透传上次返回的Context值，获取后续的日志内容。过期时间1小时
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
     * @var string 日志级别，可取debug/info/error
     */
    public $SeverityText;

    /**
     * @var string 施压节点IP
     */
    public $Instance;

    /**
     * @var string 施压节点所在地域
     */
    public $InstanceRegion;

    /**
     * @var string 日志类型， console代表用户输出，engine代表引擎输出
     */
    public $LogType;

    /**
     * @var integer 返回日志条数限制，最大100
     */
    public $Limit;

    /**
     * @param string $ProjectId 压测项目ID
     * @param string $ScenarioId 测试场景ID
     * @param string $JobId 压测任务ID
     * @param string $Context 日志上下文，加载更多日志时使用，透传上次返回的Context值，获取后续的日志内容。过期时间1小时
     * @param string $From 日志开始时间
     * @param string $To 日志结束时间
     * @param string $SeverityText 日志级别，可取debug/info/error
     * @param string $Instance 施压节点IP
     * @param string $InstanceRegion 施压节点所在地域
     * @param string $LogType 日志类型， console代表用户输出，engine代表引擎输出
     * @param integer $Limit 返回日志条数限制，最大100
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

        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = $param["Instance"];
        }

        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            $this->InstanceRegion = $param["InstanceRegion"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
