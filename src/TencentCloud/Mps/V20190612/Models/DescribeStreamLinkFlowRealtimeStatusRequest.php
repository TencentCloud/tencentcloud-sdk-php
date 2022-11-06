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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStreamLinkFlowRealtimeStatus请求参数结构体
 *
 * @method string getFlowId() 获取流ID。
 * @method void setFlowId(string $FlowId) 设置流ID。
 * @method array getInputIds() 获取输入id数组，如果输入输出数组都为空，则代表全量查询。
 * @method void setInputIds(array $InputIds) 设置输入id数组，如果输入输出数组都为空，则代表全量查询。
 * @method array getOutputIds() 获取输出id数组，如果输入输出数组都为空，则代表全量查询。
 * @method void setOutputIds(array $OutputIds) 设置输出id数组，如果输入输出数组都为空，则代表全量查询。
 */
class DescribeStreamLinkFlowRealtimeStatusRequest extends AbstractModel
{
    /**
     * @var string 流ID。
     */
    public $FlowId;

    /**
     * @var array 输入id数组，如果输入输出数组都为空，则代表全量查询。
     */
    public $InputIds;

    /**
     * @var array 输出id数组，如果输入输出数组都为空，则代表全量查询。
     */
    public $OutputIds;

    /**
     * @param string $FlowId 流ID。
     * @param array $InputIds 输入id数组，如果输入输出数组都为空，则代表全量查询。
     * @param array $OutputIds 输出id数组，如果输入输出数组都为空，则代表全量查询。
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("InputIds",$param) and $param["InputIds"] !== null) {
            $this->InputIds = $param["InputIds"];
        }

        if (array_key_exists("OutputIds",$param) and $param["OutputIds"] !== null) {
            $this->OutputIds = $param["OutputIds"];
        }
    }
}
