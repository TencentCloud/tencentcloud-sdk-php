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
 * RenewWorkflowDs请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getWorkflowId() 获取工作流ID
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
 * @method string getWorkflowName() 获取工作流名称
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
 * @method string getWorkflowDesc() 获取工作流描述
 * @method void setWorkflowDesc(string $WorkflowDesc) 设置工作流描述
 * @method string getFolderId() 获取文件夹ID
 * @method void setFolderId(string $FolderId) 设置文件夹ID
 * @method string getOwnerId() 获取责任ID，多个使用;分割
 * @method void setOwnerId(string $OwnerId) 设置责任ID，多个使用;分割
 * @method string getOwner() 获取责任人名称，多个使用;分割
 * @method void setOwner(string $Owner) 设置责任人名称，多个使用;分割
 * @method string getSparkSqlParams() 获取SparkSql参数
 * @method void setSparkSqlParams(string $SparkSqlParams) 设置SparkSql参数
 */
class RenewWorkflowDsRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

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
     * @var string 文件夹ID
     */
    public $FolderId;

    /**
     * @var string 责任ID，多个使用;分割
     */
    public $OwnerId;

    /**
     * @var string 责任人名称，多个使用;分割
     */
    public $Owner;

    /**
     * @var string SparkSql参数
     */
    public $SparkSqlParams;

    /**
     * @param string $ProjectId 项目ID
     * @param string $WorkflowId 工作流ID
     * @param string $WorkflowName 工作流名称
     * @param string $WorkflowDesc 工作流描述
     * @param string $FolderId 文件夹ID
     * @param string $OwnerId 责任ID，多个使用;分割
     * @param string $Owner 责任人名称，多个使用;分割
     * @param string $SparkSqlParams SparkSql参数
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

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("WorkflowDesc",$param) and $param["WorkflowDesc"] !== null) {
            $this->WorkflowDesc = $param["WorkflowDesc"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("OwnerId",$param) and $param["OwnerId"] !== null) {
            $this->OwnerId = $param["OwnerId"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("SparkSqlParams",$param) and $param["SparkSqlParams"] !== null) {
            $this->SparkSqlParams = $param["SparkSqlParams"];
        }
    }
}
