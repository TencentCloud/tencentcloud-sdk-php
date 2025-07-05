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
 * CreateMuskPrompt请求参数结构体
 *
 * @method string getWorkgroupId() 获取workgroup id
 * @method void setWorkgroupId(string $WorkgroupId) 设置workgroup id
 * @method string getWorkflowId() 获取workflow id
 * @method void setWorkflowId(string $WorkflowId) 设置workflow id
 * @method string getPromptParams() 获取prompt 参数
 * @method void setPromptParams(string $PromptParams) 设置prompt 参数
 */
class CreateMuskPromptRequest extends AbstractModel
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
     * @var string prompt 参数
     */
    public $PromptParams;

    /**
     * @param string $WorkgroupId workgroup id
     * @param string $WorkflowId workflow id
     * @param string $PromptParams prompt 参数
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

        if (array_key_exists("PromptParams",$param) and $param["PromptParams"] !== null) {
            $this->PromptParams = $param["PromptParams"];
        }
    }
}
