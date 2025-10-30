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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMuskPrompts请求参数结构体
 *
 * @method string getWorkgroupId() 获取workgroup id
 * @method void setWorkgroupId(string $WorkgroupId) 设置workgroup id
 * @method string getWorkflowId() 获取workflow id
 * @method void setWorkflowId(string $WorkflowId) 设置workflow id
 * @method integer getOffset() 获取offset 
 * @method void setOffset(integer $Offset) 设置offset 
 * @method integer getLimit() 获取limit
 * @method void setLimit(integer $Limit) 设置limit
 * @method array getFilters() 获取过滤参数 支持过滤的键值： PromptId，Status
 * @method void setFilters(array $Filters) 设置过滤参数 支持过滤的键值： PromptId，Status
 */
class DescribeMuskPromptsRequest extends AbstractModel
{
    /**
     * @var string workgroup id
     */
    public $WorkgroupId;

    /**
     * @var string workflow id
     */
    public $WorkflowId;

    /**
     * @var integer offset 
     */
    public $Offset;

    /**
     * @var integer limit
     */
    public $Limit;

    /**
     * @var array 过滤参数 支持过滤的键值： PromptId，Status
     */
    public $Filters;

    /**
     * @param string $WorkgroupId workgroup id
     * @param string $WorkflowId workflow id
     * @param integer $Offset offset 
     * @param integer $Limit limit
     * @param array $Filters 过滤参数 支持过滤的键值： PromptId，Status
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
        if (array_key_exists("WorkgroupId",$param) and $param["WorkgroupId"] !== null) {
            $this->WorkgroupId = $param["WorkgroupId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
