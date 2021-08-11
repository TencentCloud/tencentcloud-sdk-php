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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 异步检索任务
 *
 * @method string getLogsetId() 获取日志集ID
 * @method void setLogsetId(string $LogsetId) 设置日志集ID
 * @method string getTopicId() 获取日志主题ID
 * @method void setTopicId(string $TopicId) 设置日志主题ID
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getStatus() 获取状态，0表示待开始，1表示运行中，2表示已完成，-1表示失败
 * @method void setStatus(integer $Status) 设置状态，0表示待开始，1表示运行中，2表示已完成，-1表示失败
 * @method string getAsyncSearchTaskId() 获取异步检索任务ID
 * @method void setAsyncSearchTaskId(string $AsyncSearchTaskId) 设置异步检索任务ID
 * @method string getQuery() 获取查询语句
 * @method void setQuery(string $Query) 设置查询语句
 * @method integer getFrom() 获取要查询的日志的起始时间，Unix时间戳，单位ms
 * @method void setFrom(integer $From) 设置要查询的日志的起始时间，Unix时间戳，单位ms
 * @method integer getTo() 获取要查询的日志的结束时间，Unix时间戳，单位ms
 * @method void setTo(integer $To) 设置要查询的日志的结束时间，Unix时间戳，单位ms
 * @method string getSort() 获取日志扫描顺序，可选值：asc(升序)、desc(降序)
 * @method void setSort(string $Sort) 设置日志扫描顺序，可选值：asc(升序)、desc(降序)
 * @method string getErrorMessage() 获取任务失败的错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(string $ErrorMessage) 设置任务失败的错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLogCount() 获取异步检索任务匹配的总日志条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogCount(integer $LogCount) 设置异步检索任务匹配的总日志条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFinishTime() 获取任务完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinishTime(string $FinishTime) 设置任务完成时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class AsyncSearchTask extends AbstractModel
{
    /**
     * @var string 日志集ID
     */
    public $LogsetId;

    /**
     * @var string 日志主题ID
     */
    public $TopicId;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 状态，0表示待开始，1表示运行中，2表示已完成，-1表示失败
     */
    public $Status;

    /**
     * @var string 异步检索任务ID
     */
    public $AsyncSearchTaskId;

    /**
     * @var string 查询语句
     */
    public $Query;

    /**
     * @var integer 要查询的日志的起始时间，Unix时间戳，单位ms
     */
    public $From;

    /**
     * @var integer 要查询的日志的结束时间，Unix时间戳，单位ms
     */
    public $To;

    /**
     * @var string 日志扫描顺序，可选值：asc(升序)、desc(降序)
     */
    public $Sort;

    /**
     * @var string 任务失败的错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @var integer 异步检索任务匹配的总日志条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogCount;

    /**
     * @var string 任务完成时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinishTime;

    /**
     * @param string $LogsetId 日志集ID
     * @param string $TopicId 日志主题ID
     * @param string $CreateTime 创建时间
     * @param integer $Status 状态，0表示待开始，1表示运行中，2表示已完成，-1表示失败
     * @param string $AsyncSearchTaskId 异步检索任务ID
     * @param string $Query 查询语句
     * @param integer $From 要查询的日志的起始时间，Unix时间戳，单位ms
     * @param integer $To 要查询的日志的结束时间，Unix时间戳，单位ms
     * @param string $Sort 日志扫描顺序，可选值：asc(升序)、desc(降序)
     * @param string $ErrorMessage 任务失败的错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LogCount 异步检索任务匹配的总日志条数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FinishTime 任务完成时间
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
        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AsyncSearchTaskId",$param) and $param["AsyncSearchTaskId"] !== null) {
            $this->AsyncSearchTaskId = $param["AsyncSearchTaskId"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("To",$param) and $param["To"] !== null) {
            $this->To = $param["To"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("LogCount",$param) and $param["LogCount"] !== null) {
            $this->LogCount = $param["LogCount"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }
    }
}
