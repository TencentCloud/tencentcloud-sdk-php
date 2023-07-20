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
 * UpdateWorkflowOwner请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method array getWorkflowIds() 获取工作流Ids
 * @method void setWorkflowIds(array $WorkflowIds) 设置工作流Ids
 * @method string getOwner() 获取责任人，多个以';'号分割
 * @method void setOwner(string $Owner) 设置责任人，多个以';'号分割
 * @method string getOwnerId() 获取责任人UserId，多个以';'号分割
 * @method void setOwnerId(string $OwnerId) 设置责任人UserId，多个以';'号分割
 */
class UpdateWorkflowOwnerRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var array 工作流Ids
     */
    public $WorkflowIds;

    /**
     * @var string 责任人，多个以';'号分割
     */
    public $Owner;

    /**
     * @var string 责任人UserId，多个以';'号分割
     */
    public $OwnerId;

    /**
     * @param string $ProjectId 项目Id
     * @param array $WorkflowIds 工作流Ids
     * @param string $Owner 责任人，多个以';'号分割
     * @param string $OwnerId 责任人UserId，多个以';'号分割
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

        if (array_key_exists("WorkflowIds",$param) and $param["WorkflowIds"] !== null) {
            $this->WorkflowIds = $param["WorkflowIds"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("OwnerId",$param) and $param["OwnerId"] !== null) {
            $this->OwnerId = $param["OwnerId"];
        }
    }
}
