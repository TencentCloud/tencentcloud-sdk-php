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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteLink请求参数结构体
 *
 * @method string getProjectId() 获取当前项目id
 * @method void setProjectId(string $ProjectId) 设置当前项目id
 * @method string getTaskFrom() 获取边的源节点
 * @method void setTaskFrom(string $TaskFrom) 设置边的源节点
 * @method string getTaskTo() 获取边的目标节点
 * @method void setTaskTo(string $TaskTo) 设置边的目标节点
 * @method string getWorkflowId() 获取当前工作流id
 * @method void setWorkflowId(string $WorkflowId) 设置当前工作流id
 * @method string getId() 获取边id
 * @method void setId(string $Id) 设置边id
 * @method string getRequestFromSource() 获取请求来源，WEB 前端；CLIENT 客户端
 * @method void setRequestFromSource(string $RequestFromSource) 设置请求来源，WEB 前端；CLIENT 客户端
 */
class DeleteLinkRequest extends AbstractModel
{
    /**
     * @var string 当前项目id
     */
    public $ProjectId;

    /**
     * @var string 边的源节点
     */
    public $TaskFrom;

    /**
     * @var string 边的目标节点
     */
    public $TaskTo;

    /**
     * @var string 当前工作流id
     */
    public $WorkflowId;

    /**
     * @var string 边id
     */
    public $Id;

    /**
     * @var string 请求来源，WEB 前端；CLIENT 客户端
     */
    public $RequestFromSource;

    /**
     * @param string $ProjectId 当前项目id
     * @param string $TaskFrom 边的源节点
     * @param string $TaskTo 边的目标节点
     * @param string $WorkflowId 当前工作流id
     * @param string $Id 边id
     * @param string $RequestFromSource 请求来源，WEB 前端；CLIENT 客户端
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskFrom",$param) and $param["TaskFrom"] !== null) {
            $this->TaskFrom = $param["TaskFrom"];
        }

        if (array_key_exists("TaskTo",$param) and $param["TaskTo"] !== null) {
            $this->TaskTo = $param["TaskTo"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RequestFromSource",$param) and $param["RequestFromSource"] !== null) {
            $this->RequestFromSource = $param["RequestFromSource"];
        }
    }
}
