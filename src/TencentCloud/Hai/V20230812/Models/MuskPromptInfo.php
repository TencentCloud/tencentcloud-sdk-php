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
 * musk prompt详情
 *
 * @method string getWorkflowId() 获取workflow id
 * @method void setWorkflowId(string $WorkflowId) 设置workflow id
 * @method string getWorkgroupId() 获取workgroup id
 * @method void setWorkgroupId(string $WorkgroupId) 设置workgroup id
 * @method string getPromptId() 获取prompt id
 * @method void setPromptId(string $PromptId) 设置prompt id
 * @method array getOutputResource() 获取生成的内容
 * @method void setOutputResource(array $OutputResource) 设置生成的内容
 * @method integer getStatus() 获取prompt status 
0: 执行中
1: 执行成功
2: 执行失败
 * @method void setStatus(integer $Status) 设置prompt status 
0: 执行中
1: 执行成功
2: 执行失败
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method integer getCost() 获取任务执行耗时，单位毫秒
 * @method void setCost(integer $Cost) 设置任务执行耗时，单位毫秒
 * @method string getErrorMessage() 获取任务执行失败错误信息
 * @method void setErrorMessage(string $ErrorMessage) 设置任务执行失败错误信息
 */
class MuskPromptInfo extends AbstractModel
{
    /**
     * @var string workflow id
     */
    public $WorkflowId;

    /**
     * @var string workgroup id
     */
    public $WorkgroupId;

    /**
     * @var string prompt id
     */
    public $PromptId;

    /**
     * @var array 生成的内容
     */
    public $OutputResource;

    /**
     * @var integer prompt status 
0: 执行中
1: 执行成功
2: 执行失败
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var integer 任务执行耗时，单位毫秒
     */
    public $Cost;

    /**
     * @var string 任务执行失败错误信息
     */
    public $ErrorMessage;

    /**
     * @param string $WorkflowId workflow id
     * @param string $WorkgroupId workgroup id
     * @param string $PromptId prompt id
     * @param array $OutputResource 生成的内容
     * @param integer $Status prompt status 
0: 执行中
1: 执行成功
2: 执行失败
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param integer $Cost 任务执行耗时，单位毫秒
     * @param string $ErrorMessage 任务执行失败错误信息
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
        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkgroupId",$param) and $param["WorkgroupId"] !== null) {
            $this->WorkgroupId = $param["WorkgroupId"];
        }

        if (array_key_exists("PromptId",$param) and $param["PromptId"] !== null) {
            $this->PromptId = $param["PromptId"];
        }

        if (array_key_exists("OutputResource",$param) and $param["OutputResource"] !== null) {
            $this->OutputResource = $param["OutputResource"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Cost",$param) and $param["Cost"] !== null) {
            $this->Cost = $param["Cost"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }
    }
}
