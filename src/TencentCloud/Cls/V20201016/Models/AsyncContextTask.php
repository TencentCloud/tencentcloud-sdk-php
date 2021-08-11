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
 * 异步上下文任务
 *
 * @method string getLogsetId() 获取日志集ID
 * @method void setLogsetId(string $LogsetId) 设置日志集ID
 * @method string getTopicId() 获取日志主题ID
 * @method void setTopicId(string $TopicId) 设置日志主题ID
 * @method integer getCreateTime() 获取创建时间，时间戳，精确到毫秒
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，时间戳，精确到毫秒
 * @method integer getStatus() 获取状态，0表示待开始，1表示运行中，2表示已完成，-1表示失败
 * @method void setStatus(integer $Status) 设置状态，0表示待开始，1表示运行中，2表示已完成，-1表示失败
 * @method string getAsyncContextTaskId() 获取异步上下文任务ID
 * @method void setAsyncContextTaskId(string $AsyncContextTaskId) 设置异步上下文任务ID
 * @method string getErrorMessage() 获取任务失败的错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(string $ErrorMessage) 设置任务失败的错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPkgId() 获取日志包序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPkgId(string $PkgId) 设置日志包序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPkgLogId() 获取日志包内一条日志的序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPkgLogId(string $PkgLogId) 设置日志包内一条日志的序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTime() 获取日志时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTime(integer $Time) 设置日志时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFinishTime() 获取任务完成时间，时间戳，精确到毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinishTime(integer $FinishTime) 设置任务完成时间，时间戳，精确到毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAsyncSearchTaskId() 获取相关联的异步检索ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsyncSearchTaskId(string $AsyncSearchTaskId) 设置相关联的异步检索ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class AsyncContextTask extends AbstractModel
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
     * @var integer 创建时间，时间戳，精确到毫秒
     */
    public $CreateTime;

    /**
     * @var integer 状态，0表示待开始，1表示运行中，2表示已完成，-1表示失败
     */
    public $Status;

    /**
     * @var string 异步上下文任务ID
     */
    public $AsyncContextTaskId;

    /**
     * @var string 任务失败的错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @var string 日志包序号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PkgId;

    /**
     * @var string 日志包内一条日志的序号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PkgLogId;

    /**
     * @var integer 日志时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Time;

    /**
     * @var integer 任务完成时间，时间戳，精确到毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinishTime;

    /**
     * @var string 相关联的异步检索ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsyncSearchTaskId;

    /**
     * @param string $LogsetId 日志集ID
     * @param string $TopicId 日志主题ID
     * @param integer $CreateTime 创建时间，时间戳，精确到毫秒
     * @param integer $Status 状态，0表示待开始，1表示运行中，2表示已完成，-1表示失败
     * @param string $AsyncContextTaskId 异步上下文任务ID
     * @param string $ErrorMessage 任务失败的错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PkgId 日志包序号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PkgLogId 日志包内一条日志的序号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Time 日志时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FinishTime 任务完成时间，时间戳，精确到毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AsyncSearchTaskId 相关联的异步检索ID
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

        if (array_key_exists("AsyncContextTaskId",$param) and $param["AsyncContextTaskId"] !== null) {
            $this->AsyncContextTaskId = $param["AsyncContextTaskId"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("PkgLogId",$param) and $param["PkgLogId"] !== null) {
            $this->PkgLogId = $param["PkgLogId"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("AsyncSearchTaskId",$param) and $param["AsyncSearchTaskId"] !== null) {
            $this->AsyncSearchTaskId = $param["AsyncSearchTaskId"];
        }
    }
}
