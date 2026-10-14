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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWorkflows请求参数结构体
 *
 * @method array getWorkflowIds() 获取<p>工作流 ID 过滤条件，数组长度限制：100。</p>
 * @method void setWorkflowIds(array $WorkflowIds) 设置<p>工作流 ID 过滤条件，数组长度限制：100。</p>
 * @method string getStatus() 获取<p>工作流状态，取值范围：</p><li>Enabled：已启用，</li><li>Disabled：已禁用。</li>不填此参数，则不区分工作流状态。
 * @method void setStatus(string $Status) 设置<p>工作流状态，取值范围：</p><li>Enabled：已启用，</li><li>Disabled：已禁用。</li>不填此参数，则不区分工作流状态。
 * @method integer getOffset() 获取<p>分页偏移量，默认值：0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，默认值：0。</p>
 * @method integer getLimit() 获取<p>返回记录条数，默认值：10，最大值：100。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回记录条数，默认值：10，最大值：100。</p>
 */
class DescribeWorkflowsRequest extends AbstractModel
{
    /**
     * @var array <p>工作流 ID 过滤条件，数组长度限制：100。</p>
     */
    public $WorkflowIds;

    /**
     * @var string <p>工作流状态，取值范围：</p><li>Enabled：已启用，</li><li>Disabled：已禁用。</li>不填此参数，则不区分工作流状态。
     */
    public $Status;

    /**
     * @var integer <p>分页偏移量，默认值：0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回记录条数，默认值：10，最大值：100。</p>
     */
    public $Limit;

    /**
     * @param array $WorkflowIds <p>工作流 ID 过滤条件，数组长度限制：100。</p>
     * @param string $Status <p>工作流状态，取值范围：</p><li>Enabled：已启用，</li><li>Disabled：已禁用。</li>不填此参数，则不区分工作流状态。
     * @param integer $Offset <p>分页偏移量，默认值：0。</p>
     * @param integer $Limit <p>返回记录条数，默认值：10，最大值：100。</p>
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
        if (array_key_exists("WorkflowIds",$param) and $param["WorkflowIds"] !== null) {
            $this->WorkflowIds = $param["WorkflowIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
