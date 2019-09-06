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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getTaskId() 获取任务标识。
 * @method void setTaskId(integer $TaskId) 设置任务标识。
 * @method integer getStatus() 获取任务状态码，0：任务等待，1：任务执行中，2：任务成功，3：任务失败。
 * @method void setStatus(integer $Status) 设置任务状态码，0：任务等待，1：任务执行中，2：任务成功，3：任务失败。
 * @method string getStatusStr() 获取任务状态，waiting：任务等待，doing：任务执行中，success：任务成功，failed：任务失败。
 * @method void setStatusStr(string $StatusStr) 设置任务状态，waiting：任务等待，doing：任务执行中，success：任务成功，failed：任务失败。
 * @method string getResult() 获取识别结果。
 * @method void setResult(string $Result) 设置识别结果。
 * @method string getErrorMsg() 获取失败原因说明。
 * @method void setErrorMsg(string $ErrorMsg) 设置失败原因说明。
 */

/**
 *获取录音识别结果结果的返回参数
 */
class TaskStatus extends AbstractModel
{
    /**
     * @var integer 任务标识。
     */
    public $TaskId;

    /**
     * @var integer 任务状态码，0：任务等待，1：任务执行中，2：任务成功，3：任务失败。
     */
    public $Status;

    /**
     * @var string 任务状态，waiting：任务等待，doing：任务执行中，success：任务成功，failed：任务失败。
     */
    public $StatusStr;

    /**
     * @var string 识别结果。
     */
    public $Result;

    /**
     * @var string 失败原因说明。
     */
    public $ErrorMsg;
    /**
     * @param integer $TaskId 任务标识。
     * @param integer $Status 任务状态码，0：任务等待，1：任务执行中，2：任务成功，3：任务失败。
     * @param string $StatusStr 任务状态，waiting：任务等待，doing：任务执行中，success：任务成功，failed：任务失败。
     * @param string $Result 识别结果。
     * @param string $ErrorMsg 失败原因说明。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusStr",$param) and $param["StatusStr"] !== null) {
            $this->StatusStr = $param["StatusStr"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }
    }
}
