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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 函数运行状态
 *
 * @method string getFunctionName() 获取函数的名称
 * @method void setFunctionName(string $FunctionName) 设置函数的名称
 * @method string getRetMsg() 获取函数执行完成后的返回值
 * @method void setRetMsg(string $RetMsg) 设置函数执行完成后的返回值
 * @method string getRequestId() 获取查询的请求 id
 * @method void setRequestId(string $RequestId) 设置查询的请求 id
 * @method string getStartTime() 获取请求开始时间
 * @method void setStartTime(string $StartTime) 设置请求开始时间
 * @method integer getRetCode() 获取请求执行结果， 0 表示执行成功，1表示运行中，-1 表示执行异常。
 * @method void setRetCode(integer $RetCode) 设置请求执行结果， 0 表示执行成功，1表示运行中，-1 表示执行异常。
 * @method float getDuration() 获取请求运行耗时，单位：ms
 * @method void setDuration(float $Duration) 设置请求运行耗时，单位：ms
 * @method float getMemUsage() 获取请求消耗内存，单位为 MB
 * @method void setMemUsage(float $MemUsage) 设置请求消耗内存，单位为 MB
 * @method integer getRetryNum() 获取重试次数
 * @method void setRetryNum(integer $RetryNum) 设置重试次数
 */
class RequestStatus extends AbstractModel
{
    /**
     * @var string 函数的名称
     */
    public $FunctionName;

    /**
     * @var string 函数执行完成后的返回值
     */
    public $RetMsg;

    /**
     * @var string 查询的请求 id
     */
    public $RequestId;

    /**
     * @var string 请求开始时间
     */
    public $StartTime;

    /**
     * @var integer 请求执行结果， 0 表示执行成功，1表示运行中，-1 表示执行异常。
     */
    public $RetCode;

    /**
     * @var float 请求运行耗时，单位：ms
     */
    public $Duration;

    /**
     * @var float 请求消耗内存，单位为 MB
     */
    public $MemUsage;

    /**
     * @var integer 重试次数
     */
    public $RetryNum;

    /**
     * @param string $FunctionName 函数的名称
     * @param string $RetMsg 函数执行完成后的返回值
     * @param string $RequestId 查询的请求 id
     * @param string $StartTime 请求开始时间
     * @param integer $RetCode 请求执行结果， 0 表示执行成功，1表示运行中，-1 表示执行异常。
     * @param float $Duration 请求运行耗时，单位：ms
     * @param float $MemUsage 请求消耗内存，单位为 MB
     * @param integer $RetryNum 重试次数
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
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("RetMsg",$param) and $param["RetMsg"] !== null) {
            $this->RetMsg = $param["RetMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("RetCode",$param) and $param["RetCode"] !== null) {
            $this->RetCode = $param["RetCode"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("MemUsage",$param) and $param["MemUsage"] !== null) {
            $this->MemUsage = $param["MemUsage"];
        }

        if (array_key_exists("RetryNum",$param) and $param["RetryNum"] !== null) {
            $this->RetryNum = $param["RetryNum"];
        }
    }
}
