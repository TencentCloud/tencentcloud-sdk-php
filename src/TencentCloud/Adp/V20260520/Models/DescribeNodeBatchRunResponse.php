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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNodeBatchRun返回参数结构体
 *
 * @method string getFailCode() 获取<p>错误码</p>
 * @method void setFailCode(string $FailCode) 设置<p>错误码</p>
 * @method string getFailMessage() 获取<p>错误描述</p>
 * @method void setFailMessage(string $FailMessage) 设置<p>错误描述</p>
 * @method string getInput() 获取<p>输入参数</p>
 * @method void setInput(string $Input) 设置<p>输入参数</p>
 * @method string getInputRef() 获取<p>输入参数Cos地址</p>
 * @method void setInputRef(string $InputRef) 设置<p>输入参数Cos地址</p>
 * @method string getOutput() 获取<p>输出参数</p>
 * @method void setOutput(string $Output) 设置<p>输出参数</p>
 * @method string getOutputRef() 获取<p>输出参数Cos地址</p>
 * @method void setOutputRef(string $OutputRef) 设置<p>输出参数Cos地址</p>
 * @method integer getStatus() 获取<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>NODE_BATCH_RUN_STATUS_UNSPECIFIED</td><td>0</td><td>未定义</td></tr><tr><td>NODE_BATCH_RUN_STATUS_INIT</td><td>1</td><td>初始状态</td></tr><tr><td>NODE_BATCH_RUN_STATUS_RUNNING</td><td>2</td><td>运行中</td></tr><tr><td>NODE_BATCH_RUN_STATUS_SUCCESS</td><td>3</td><td>运行成功</td></tr><tr><td>NODE_BATCH_RUN_STATUS_FAILED</td><td>4</td><td>运行失败</td></tr><tr><td>NODE_BATCH_RUN_STATUS_CANCELED</td><td>5</td><td>已取消</td></tr><tr><td>NODE_BATCH_RUN_STATUS_WAITING_INPUT</td><td>6</td><td>待处理</td></tr></tbody></table>
 * @method void setStatus(integer $Status) 设置<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>NODE_BATCH_RUN_STATUS_UNSPECIFIED</td><td>0</td><td>未定义</td></tr><tr><td>NODE_BATCH_RUN_STATUS_INIT</td><td>1</td><td>初始状态</td></tr><tr><td>NODE_BATCH_RUN_STATUS_RUNNING</td><td>2</td><td>运行中</td></tr><tr><td>NODE_BATCH_RUN_STATUS_SUCCESS</td><td>3</td><td>运行成功</td></tr><tr><td>NODE_BATCH_RUN_STATUS_FAILED</td><td>4</td><td>运行失败</td></tr><tr><td>NODE_BATCH_RUN_STATUS_CANCELED</td><td>5</td><td>已取消</td></tr><tr><td>NODE_BATCH_RUN_STATUS_WAITING_INPUT</td><td>6</td><td>待处理</td></tr></tbody></table>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeNodeBatchRunResponse extends AbstractModel
{
    /**
     * @var string <p>错误码</p>
     */
    public $FailCode;

    /**
     * @var string <p>错误描述</p>
     */
    public $FailMessage;

    /**
     * @var string <p>输入参数</p>
     */
    public $Input;

    /**
     * @var string <p>输入参数Cos地址</p>
     */
    public $InputRef;

    /**
     * @var string <p>输出参数</p>
     */
    public $Output;

    /**
     * @var string <p>输出参数Cos地址</p>
     */
    public $OutputRef;

    /**
     * @var integer <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>NODE_BATCH_RUN_STATUS_UNSPECIFIED</td><td>0</td><td>未定义</td></tr><tr><td>NODE_BATCH_RUN_STATUS_INIT</td><td>1</td><td>初始状态</td></tr><tr><td>NODE_BATCH_RUN_STATUS_RUNNING</td><td>2</td><td>运行中</td></tr><tr><td>NODE_BATCH_RUN_STATUS_SUCCESS</td><td>3</td><td>运行成功</td></tr><tr><td>NODE_BATCH_RUN_STATUS_FAILED</td><td>4</td><td>运行失败</td></tr><tr><td>NODE_BATCH_RUN_STATUS_CANCELED</td><td>5</td><td>已取消</td></tr><tr><td>NODE_BATCH_RUN_STATUS_WAITING_INPUT</td><td>6</td><td>待处理</td></tr></tbody></table>
     */
    public $Status;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $FailCode <p>错误码</p>
     * @param string $FailMessage <p>错误描述</p>
     * @param string $Input <p>输入参数</p>
     * @param string $InputRef <p>输入参数Cos地址</p>
     * @param string $Output <p>输出参数</p>
     * @param string $OutputRef <p>输出参数Cos地址</p>
     * @param integer $Status <table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>NODE_BATCH_RUN_STATUS_UNSPECIFIED</td><td>0</td><td>未定义</td></tr><tr><td>NODE_BATCH_RUN_STATUS_INIT</td><td>1</td><td>初始状态</td></tr><tr><td>NODE_BATCH_RUN_STATUS_RUNNING</td><td>2</td><td>运行中</td></tr><tr><td>NODE_BATCH_RUN_STATUS_SUCCESS</td><td>3</td><td>运行成功</td></tr><tr><td>NODE_BATCH_RUN_STATUS_FAILED</td><td>4</td><td>运行失败</td></tr><tr><td>NODE_BATCH_RUN_STATUS_CANCELED</td><td>5</td><td>已取消</td></tr><tr><td>NODE_BATCH_RUN_STATUS_WAITING_INPUT</td><td>6</td><td>待处理</td></tr></tbody></table>
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
        if (array_key_exists("FailCode",$param) and $param["FailCode"] !== null) {
            $this->FailCode = $param["FailCode"];
        }

        if (array_key_exists("FailMessage",$param) and $param["FailMessage"] !== null) {
            $this->FailMessage = $param["FailMessage"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }

        if (array_key_exists("InputRef",$param) and $param["InputRef"] !== null) {
            $this->InputRef = $param["InputRef"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }

        if (array_key_exists("OutputRef",$param) and $param["OutputRef"] !== null) {
            $this->OutputRef = $param["OutputRef"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
