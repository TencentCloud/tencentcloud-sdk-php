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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RenewWorkflowOwnerDs请求参数结构体
 *
 * @method string getProjectId() 获取工作流ID
 * @method void setProjectId(string $ProjectId) 设置工作流ID
 * @method string getOwner() 获取责任人
 * @method void setOwner(string $Owner) 设置责任人
 * @method string getOwnerId() 获取责任人ID
 * @method void setOwnerId(string $OwnerId) 设置责任人ID
 * @method array getWorkflowIds() 获取工作流ID列表
 * @method void setWorkflowIds(array $WorkflowIds) 设置工作流ID列表
 */
class RenewWorkflowOwnerDsRequest extends AbstractModel
{
    /**
     * @var string 工作流ID
     */
    public $ProjectId;

    /**
     * @var string 责任人
     */
    public $Owner;

    /**
     * @var string 责任人ID
     */
    public $OwnerId;

    /**
     * @var array 工作流ID列表
     */
    public $WorkflowIds;

    /**
     * @param string $ProjectId 工作流ID
     * @param string $Owner 责任人
     * @param string $OwnerId 责任人ID
     * @param array $WorkflowIds 工作流ID列表
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

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("OwnerId",$param) and $param["OwnerId"] !== null) {
            $this->OwnerId = $param["OwnerId"];
        }

        if (array_key_exists("WorkflowIds",$param) and $param["WorkflowIds"] !== null) {
            $this->WorkflowIds = $param["WorkflowIds"];
        }
    }
}
