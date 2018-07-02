<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getStatus() 获取校验任务状态：unavailable(当前不可用), starting(开始中)，running(校验中)，finished(校验完成)
 * @method void setStatus(string $Status) 设置校验任务状态：unavailable(当前不可用), starting(开始中)，running(校验中)，finished(校验完成)
 * @method integer getErrorCode() 获取任务的错误码
 * @method void setErrorCode(integer $ErrorCode) 设置任务的错误码
 * @method string getErrorMessage() 获取任务的错误信息
 * @method void setErrorMessage(string $ErrorMessage) 设置任务的错误信息
 * @method string getProgress() 获取Check任务总进度,如："30"表示30%
 * @method void setProgress(string $Progress) 设置Check任务总进度,如："30"表示30%
 * @method integer getCheckFlag() 获取校验是否通过,0-未通过，1-校验通过, 3-未校验
 * @method void setCheckFlag(integer $CheckFlag) 设置校验是否通过,0-未通过，1-校验通过, 3-未校验
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *DescribeMigrateCheckJob返回参数结构体
 */
class DescribeMigrateCheckJobResponse extends AbstractModel
{
    /**
     * @var string 校验任务状态：unavailable(当前不可用), starting(开始中)，running(校验中)，finished(校验完成)
     */
    public $Status;

    /**
     * @var integer 任务的错误码
     */
    public $ErrorCode;

    /**
     * @var string 任务的错误信息
     */
    public $ErrorMessage;

    /**
     * @var string Check任务总进度,如："30"表示30%
     */
    public $Progress;

    /**
     * @var integer 校验是否通过,0-未通过，1-校验通过, 3-未校验
     */
    public $CheckFlag;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;
    /**
     * @param string $Status 校验任务状态：unavailable(当前不可用), starting(开始中)，running(校验中)，finished(校验完成)
     * @param integer $ErrorCode 任务的错误码
     * @param string $ErrorMessage 任务的错误信息
     * @param string $Progress Check任务总进度,如："30"表示30%
     * @param integer $CheckFlag 校验是否通过,0-未通过，1-校验通过, 3-未校验
     * @param string $RequestId 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("CheckFlag",$param) and $param["CheckFlag"] !== null) {
            $this->CheckFlag = $param["CheckFlag"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
