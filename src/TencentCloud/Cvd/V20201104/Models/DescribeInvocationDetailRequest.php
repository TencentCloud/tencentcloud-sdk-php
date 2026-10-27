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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInvocationDetail请求参数结构体
 *
 * @method string getInstanceId() 获取<p>云桌面实例ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>云桌面实例ID。</p>
 * @method string getInvokeId() 获取<p>任务ID。</p>
 * @method void setInvokeId(string $InvokeId) 设置<p>任务ID。</p>
 * @method integer getOutputLinesOffset() 获取<p>需要返回的任务输出行号起始索引。</p>
 * @method void setOutputLinesOffset(integer $OutputLinesOffset) 设置<p>需要返回的任务输出行号起始索引。</p>
 * @method integer getOutputLinesLimit() 获取<p>需要返回的任务输出行数。</p>
 * @method void setOutputLinesLimit(integer $OutputLinesLimit) 设置<p>需要返回的任务输出行数。</p>
 * @method boolean getMergeOutputLines() 获取<p>任务的输出内容是否合并成一个字符串。默认为true。</p>
 * @method void setMergeOutputLines(boolean $MergeOutputLines) 设置<p>任务的输出内容是否合并成一个字符串。默认为true。</p>
 */
class DescribeInvocationDetailRequest extends AbstractModel
{
    /**
     * @var string <p>云桌面实例ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>任务ID。</p>
     */
    public $InvokeId;

    /**
     * @var integer <p>需要返回的任务输出行号起始索引。</p>
     */
    public $OutputLinesOffset;

    /**
     * @var integer <p>需要返回的任务输出行数。</p>
     */
    public $OutputLinesLimit;

    /**
     * @var boolean <p>任务的输出内容是否合并成一个字符串。默认为true。</p>
     */
    public $MergeOutputLines;

    /**
     * @param string $InstanceId <p>云桌面实例ID。</p>
     * @param string $InvokeId <p>任务ID。</p>
     * @param integer $OutputLinesOffset <p>需要返回的任务输出行号起始索引。</p>
     * @param integer $OutputLinesLimit <p>需要返回的任务输出行数。</p>
     * @param boolean $MergeOutputLines <p>任务的输出内容是否合并成一个字符串。默认为true。</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InvokeId",$param) and $param["InvokeId"] !== null) {
            $this->InvokeId = $param["InvokeId"];
        }

        if (array_key_exists("OutputLinesOffset",$param) and $param["OutputLinesOffset"] !== null) {
            $this->OutputLinesOffset = $param["OutputLinesOffset"];
        }

        if (array_key_exists("OutputLinesLimit",$param) and $param["OutputLinesLimit"] !== null) {
            $this->OutputLinesLimit = $param["OutputLinesLimit"];
        }

        if (array_key_exists("MergeOutputLines",$param) and $param["MergeOutputLines"] !== null) {
            $this->MergeOutputLines = $param["MergeOutputLines"];
        }
    }
}
