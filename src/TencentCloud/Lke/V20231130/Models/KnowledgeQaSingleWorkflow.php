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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 问答知识库单工作流模式下指定单工作流配置
 *
 * @method string getWorkflowId() 获取工作流ID
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
 * @method string getWorkflowName() 获取工作流名称
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
 * @method string getWorkflowDesc() 获取工作流描述
 * @method void setWorkflowDesc(string $WorkflowDesc) 设置工作流描述
 * @method string getStatus() 获取工作流状态，发布状态(UNPUBLISHED: 待发布 PUBLISHING: 发布中 PUBLISHED: 已发布 FAIL:发布失败)
 * @method void setStatus(string $Status) 设置工作流状态，发布状态(UNPUBLISHED: 待发布 PUBLISHING: 发布中 PUBLISHED: 已发布 FAIL:发布失败)
 * @method boolean getIsEnable() 获取工作流是否启用
 * @method void setIsEnable(boolean $IsEnable) 设置工作流是否启用
 */
class KnowledgeQaSingleWorkflow extends AbstractModel
{
    /**
     * @var string 工作流ID
     */
    public $WorkflowId;

    /**
     * @var string 工作流名称
     */
    public $WorkflowName;

    /**
     * @var string 工作流描述
     */
    public $WorkflowDesc;

    /**
     * @var string 工作流状态，发布状态(UNPUBLISHED: 待发布 PUBLISHING: 发布中 PUBLISHED: 已发布 FAIL:发布失败)
     */
    public $Status;

    /**
     * @var boolean 工作流是否启用
     */
    public $IsEnable;

    /**
     * @param string $WorkflowId 工作流ID
     * @param string $WorkflowName 工作流名称
     * @param string $WorkflowDesc 工作流描述
     * @param string $Status 工作流状态，发布状态(UNPUBLISHED: 待发布 PUBLISHING: 发布中 PUBLISHED: 已发布 FAIL:发布失败)
     * @param boolean $IsEnable 工作流是否启用
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

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("WorkflowDesc",$param) and $param["WorkflowDesc"] !== null) {
            $this->WorkflowDesc = $param["WorkflowDesc"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsEnable",$param) and $param["IsEnable"] !== null) {
            $this->IsEnable = $param["IsEnable"];
        }
    }
}
