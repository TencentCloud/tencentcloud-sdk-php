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
 * ModifyWorkflowInfo请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getWorkflowId() 获取工作流id
 * @method void setWorkflowId(string $WorkflowId) 设置工作流id
 * @method string getOwner() 获取责任人
 * @method void setOwner(string $Owner) 设置责任人
 * @method string getOwnerId() 获取责任人id
 * @method void setOwnerId(string $OwnerId) 设置责任人id
 * @method string getWorkflowDesc() 获取备注
 * @method void setWorkflowDesc(string $WorkflowDesc) 设置备注
 * @method string getWorkflowName() 获取工作流名称
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
 * @method string getFolderId() 获取所属文件夹id
 * @method void setFolderId(string $FolderId) 设置所属文件夹id
 * @method string getUserGroupId() 获取工作流所属用户分组id  若有多个,分号隔开: a;b;c
 * @method void setUserGroupId(string $UserGroupId) 设置工作流所属用户分组id  若有多个,分号隔开: a;b;c
 * @method string getUserGroupName() 获取工作流所属用户分组名称  若有多个,分号隔开: a;b;c
 * @method void setUserGroupName(string $UserGroupName) 设置工作流所属用户分组名称  若有多个,分号隔开: a;b;c
 * @method array getWorkflowParams() 获取工作流参数列表
 * @method void setWorkflowParams(array $WorkflowParams) 设置工作流参数列表
 * @method array getGeneralTaskParams() 获取用于配置优化参数（线程、内存、CPU核数等），仅作用于Spark SQL节点。多个参数用英文分号分隔。
 * @method void setGeneralTaskParams(array $GeneralTaskParams) 设置用于配置优化参数（线程、内存、CPU核数等），仅作用于Spark SQL节点。多个参数用英文分号分隔。
 */
class ModifyWorkflowInfoRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 工作流id
     */
    public $WorkflowId;

    /**
     * @var string 责任人
     */
    public $Owner;

    /**
     * @var string 责任人id
     */
    public $OwnerId;

    /**
     * @var string 备注
     */
    public $WorkflowDesc;

    /**
     * @var string 工作流名称
     */
    public $WorkflowName;

    /**
     * @var string 所属文件夹id
     */
    public $FolderId;

    /**
     * @var string 工作流所属用户分组id  若有多个,分号隔开: a;b;c
     */
    public $UserGroupId;

    /**
     * @var string 工作流所属用户分组名称  若有多个,分号隔开: a;b;c
     */
    public $UserGroupName;

    /**
     * @var array 工作流参数列表
     */
    public $WorkflowParams;

    /**
     * @var array 用于配置优化参数（线程、内存、CPU核数等），仅作用于Spark SQL节点。多个参数用英文分号分隔。
     */
    public $GeneralTaskParams;

    /**
     * @param string $ProjectId 项目Id
     * @param string $WorkflowId 工作流id
     * @param string $Owner 责任人
     * @param string $OwnerId 责任人id
     * @param string $WorkflowDesc 备注
     * @param string $WorkflowName 工作流名称
     * @param string $FolderId 所属文件夹id
     * @param string $UserGroupId 工作流所属用户分组id  若有多个,分号隔开: a;b;c
     * @param string $UserGroupName 工作流所属用户分组名称  若有多个,分号隔开: a;b;c
     * @param array $WorkflowParams 工作流参数列表
     * @param array $GeneralTaskParams 用于配置优化参数（线程、内存、CPU核数等），仅作用于Spark SQL节点。多个参数用英文分号分隔。
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

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("OwnerId",$param) and $param["OwnerId"] !== null) {
            $this->OwnerId = $param["OwnerId"];
        }

        if (array_key_exists("WorkflowDesc",$param) and $param["WorkflowDesc"] !== null) {
            $this->WorkflowDesc = $param["WorkflowDesc"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("UserGroupId",$param) and $param["UserGroupId"] !== null) {
            $this->UserGroupId = $param["UserGroupId"];
        }

        if (array_key_exists("UserGroupName",$param) and $param["UserGroupName"] !== null) {
            $this->UserGroupName = $param["UserGroupName"];
        }

        if (array_key_exists("WorkflowParams",$param) and $param["WorkflowParams"] !== null) {
            $this->WorkflowParams = [];
            foreach ($param["WorkflowParams"] as $key => $value){
                $obj = new ParamInfo();
                $obj->deserialize($value);
                array_push($this->WorkflowParams, $obj);
            }
        }

        if (array_key_exists("GeneralTaskParams",$param) and $param["GeneralTaskParams"] !== null) {
            $this->GeneralTaskParams = [];
            foreach ($param["GeneralTaskParams"] as $key => $value){
                $obj = new GeneralTaskParam();
                $obj->deserialize($value);
                array_push($this->GeneralTaskParams, $obj);
            }
        }
    }
}
