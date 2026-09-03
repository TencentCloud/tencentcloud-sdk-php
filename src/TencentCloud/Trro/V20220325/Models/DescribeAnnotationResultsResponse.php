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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAnnotationResults返回参数结构体
 *
 * @method string getTaskId() 获取<p>处理项 ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>处理项 ID</p>
 * @method string getFileName() 获取<p>视频文件名</p>
 * @method void setFileName(string $FileName) 设置<p>视频文件名</p>
 * @method integer getStatus() 获取<p>处理项状态：1 未处理，2 处理中，3 超时，4 异常，5待确认，6 成功</p><p>枚举值：</p><ul><li>1： 未处理</li><li>2： 处理中</li><li>3： 超时</li><li>4： 异常</li><li>5： 待确认</li><li>6： 成功</li></ul>
 * @method void setStatus(integer $Status) 设置<p>处理项状态：1 未处理，2 处理中，3 超时，4 异常，5待确认，6 成功</p><p>枚举值：</p><ul><li>1： 未处理</li><li>2： 处理中</li><li>3： 超时</li><li>4： 异常</li><li>5： 待确认</li><li>6： 成功</li></ul>
 * @method string getErrorMsg() 获取<p>失败原因，成功为空</p>
 * @method void setErrorMsg(string $ErrorMsg) 设置<p>失败原因，成功为空</p>
 * @method string getResult() 获取<p>标注结果 JSON 原文，非成功状态为空</p>
 * @method void setResult(string $Result) 设置<p>标注结果 JSON 原文，非成功状态为空</p>
 * @method integer getResultSize() 获取<p>标注结果字节数</p>
 * @method void setResultSize(integer $ResultSize) 设置<p>标注结果字节数</p>
 * @method string getCreateTime() 获取<p>创建时间，Unix 时间戳（秒）</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间，Unix 时间戳（秒）</p>
 * @method string getFinishTime() 获取<p>完成时间，Unix 时间戳（秒），进行中为 0</p>
 * @method void setFinishTime(string $FinishTime) 设置<p>完成时间，Unix 时间戳（秒），进行中为 0</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAnnotationResultsResponse extends AbstractModel
{
    /**
     * @var string <p>处理项 ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>视频文件名</p>
     */
    public $FileName;

    /**
     * @var integer <p>处理项状态：1 未处理，2 处理中，3 超时，4 异常，5待确认，6 成功</p><p>枚举值：</p><ul><li>1： 未处理</li><li>2： 处理中</li><li>3： 超时</li><li>4： 异常</li><li>5： 待确认</li><li>6： 成功</li></ul>
     */
    public $Status;

    /**
     * @var string <p>失败原因，成功为空</p>
     */
    public $ErrorMsg;

    /**
     * @var string <p>标注结果 JSON 原文，非成功状态为空</p>
     */
    public $Result;

    /**
     * @var integer <p>标注结果字节数</p>
     */
    public $ResultSize;

    /**
     * @var string <p>创建时间，Unix 时间戳（秒）</p>
     */
    public $CreateTime;

    /**
     * @var string <p>完成时间，Unix 时间戳（秒），进行中为 0</p>
     */
    public $FinishTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId <p>处理项 ID</p>
     * @param string $FileName <p>视频文件名</p>
     * @param integer $Status <p>处理项状态：1 未处理，2 处理中，3 超时，4 异常，5待确认，6 成功</p><p>枚举值：</p><ul><li>1： 未处理</li><li>2： 处理中</li><li>3： 超时</li><li>4： 异常</li><li>5： 待确认</li><li>6： 成功</li></ul>
     * @param string $ErrorMsg <p>失败原因，成功为空</p>
     * @param string $Result <p>标注结果 JSON 原文，非成功状态为空</p>
     * @param integer $ResultSize <p>标注结果字节数</p>
     * @param string $CreateTime <p>创建时间，Unix 时间戳（秒）</p>
     * @param string $FinishTime <p>完成时间，Unix 时间戳（秒），进行中为 0</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("ResultSize",$param) and $param["ResultSize"] !== null) {
            $this->ResultSize = $param["ResultSize"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
