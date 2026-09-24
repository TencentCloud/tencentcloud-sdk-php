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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJobLog请求参数结构体
 *
 * @method string getJobId() 获取<p>作业 ID（必填）。</p>
 * @method void setJobId(string $JobId) 设置<p>作业 ID（必填）。</p>
 * @method string getLogType() 获取<p>日志类型（必填）。可选值：SPARK_SQL_OPERATION / SPARK_BATCH_OPERATION / SPARK_LAUNCH / SPARK_DRIVER_STDOUT / SPARK_DRIVER_LOG4J / SPARK_EXECUTOR_STDOUT / SPARK_EXECUTOR_LOG4J。</p>
 * @method void setLogType(string $LogType) 设置<p>日志类型（必填）。可选值：SPARK_SQL_OPERATION / SPARK_BATCH_OPERATION / SPARK_LAUNCH / SPARK_DRIVER_STDOUT / SPARK_DRIVER_LOG4J / SPARK_EXECUTOR_STDOUT / SPARK_EXECUTOR_LOG4J。</p>
 * @method integer getStatementIndex() 获取<p>Statement 序号（1-based，仅 LogType=SPARK_SQL_OPERATION 时可传），定位多语句作业中的具体语句。</p>
 * @method void setStatementIndex(integer $StatementIndex) 设置<p>Statement 序号（1-based，仅 LogType=SPARK_SQL_OPERATION 时可传），定位多语句作业中的具体语句。</p>
 * @method string getCursor() 获取<p>分页游标（首页不传，后续页原样透传上一响应的 Cursor；不透明，无需解析）。无法续读时以 HasMore=false 终止分页。</p>
 * @method void setCursor(string $Cursor) 设置<p>分页游标（首页不传，后续页原样透传上一响应的 Cursor；不透明，无需解析）。无法续读时以 HasMore=false 终止分页。</p>
 * @method integer getLimit() 获取<p>返回上限（行数），范围 [1, 1000]。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回上限（行数），范围 [1, 1000]。</p>
 * @method string getKeyword() 获取<p>关键词过滤。</p>
 * @method void setKeyword(string $Keyword) 设置<p>关键词过滤。</p>
 * @method string getPodName() 获取<p>Pod 名称过滤。</p>
 * @method void setPodName(string $PodName) 设置<p>Pod 名称过滤。</p>
 * @method string getLogLevel() 获取<p>日志级别过滤。取值：ERROR / WARN / INFO / DEBUG / TRACE，非法值拒绝。</p>
 * @method void setLogLevel(string $LogLevel) 设置<p>日志级别过滤。取值：ERROR / WARN / INFO / DEBUG / TRACE，非法值拒绝。</p>
 * @method integer getFrom() 获取<p>起始时间，Unix 毫秒。</p>
 * @method void setFrom(integer $From) 设置<p>起始时间，Unix 毫秒。</p>
 * @method integer getTo() 获取<p>结束时间，Unix 毫秒。</p>
 * @method void setTo(integer $To) 设置<p>结束时间，Unix 毫秒。</p>
 */
class DescribeJobLogRequest extends AbstractModel
{
    /**
     * @var string <p>作业 ID（必填）。</p>
     */
    public $JobId;

    /**
     * @var string <p>日志类型（必填）。可选值：SPARK_SQL_OPERATION / SPARK_BATCH_OPERATION / SPARK_LAUNCH / SPARK_DRIVER_STDOUT / SPARK_DRIVER_LOG4J / SPARK_EXECUTOR_STDOUT / SPARK_EXECUTOR_LOG4J。</p>
     */
    public $LogType;

    /**
     * @var integer <p>Statement 序号（1-based，仅 LogType=SPARK_SQL_OPERATION 时可传），定位多语句作业中的具体语句。</p>
     */
    public $StatementIndex;

    /**
     * @var string <p>分页游标（首页不传，后续页原样透传上一响应的 Cursor；不透明，无需解析）。无法续读时以 HasMore=false 终止分页。</p>
     */
    public $Cursor;

    /**
     * @var integer <p>返回上限（行数），范围 [1, 1000]。</p>
     */
    public $Limit;

    /**
     * @var string <p>关键词过滤。</p>
     */
    public $Keyword;

    /**
     * @var string <p>Pod 名称过滤。</p>
     */
    public $PodName;

    /**
     * @var string <p>日志级别过滤。取值：ERROR / WARN / INFO / DEBUG / TRACE，非法值拒绝。</p>
     */
    public $LogLevel;

    /**
     * @var integer <p>起始时间，Unix 毫秒。</p>
     */
    public $From;

    /**
     * @var integer <p>结束时间，Unix 毫秒。</p>
     */
    public $To;

    /**
     * @param string $JobId <p>作业 ID（必填）。</p>
     * @param string $LogType <p>日志类型（必填）。可选值：SPARK_SQL_OPERATION / SPARK_BATCH_OPERATION / SPARK_LAUNCH / SPARK_DRIVER_STDOUT / SPARK_DRIVER_LOG4J / SPARK_EXECUTOR_STDOUT / SPARK_EXECUTOR_LOG4J。</p>
     * @param integer $StatementIndex <p>Statement 序号（1-based，仅 LogType=SPARK_SQL_OPERATION 时可传），定位多语句作业中的具体语句。</p>
     * @param string $Cursor <p>分页游标（首页不传，后续页原样透传上一响应的 Cursor；不透明，无需解析）。无法续读时以 HasMore=false 终止分页。</p>
     * @param integer $Limit <p>返回上限（行数），范围 [1, 1000]。</p>
     * @param string $Keyword <p>关键词过滤。</p>
     * @param string $PodName <p>Pod 名称过滤。</p>
     * @param string $LogLevel <p>日志级别过滤。取值：ERROR / WARN / INFO / DEBUG / TRACE，非法值拒绝。</p>
     * @param integer $From <p>起始时间，Unix 毫秒。</p>
     * @param integer $To <p>结束时间，Unix 毫秒。</p>
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

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("StatementIndex",$param) and $param["StatementIndex"] !== null) {
            $this->StatementIndex = $param["StatementIndex"];
        }

        if (array_key_exists("Cursor",$param) and $param["Cursor"] !== null) {
            $this->Cursor = $param["Cursor"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("LogLevel",$param) and $param["LogLevel"] !== null) {
            $this->LogLevel = $param["LogLevel"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("To",$param) and $param["To"] !== null) {
            $this->To = $param["To"];
        }
    }
}
