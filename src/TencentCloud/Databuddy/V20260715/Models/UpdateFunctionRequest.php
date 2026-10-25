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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateFunction请求参数结构体
 *
 * @method string getCatalogName() 获取数据目录名称，必填
 * @method void setCatalogName(string $CatalogName) 设置数据目录名称，必填
 * @method string getSchemaName() 获取schema名称，必填
 * @method void setSchemaName(string $SchemaName) 设置schema名称，必填
 * @method string getFunctionName() 获取函数名称，必填
 * @method void setFunctionName(string $FunctionName) 设置函数名称，必填
 * @method string getWorkspaceId() 获取调用时所在workspace唯一id，必填
 * @method void setWorkspaceId(string $WorkspaceId) 设置调用时所在workspace唯一id，必填
 * @method string getNewComment() 获取新描述，可选，为空表示不修改注释
 * @method void setNewComment(string $NewComment) 设置新描述，可选，为空表示不修改注释
 */
class UpdateFunctionRequest extends AbstractModel
{
    /**
     * @var string 数据目录名称，必填
     */
    public $CatalogName;

    /**
     * @var string schema名称，必填
     */
    public $SchemaName;

    /**
     * @var string 函数名称，必填
     */
    public $FunctionName;

    /**
     * @var string 调用时所在workspace唯一id，必填
     */
    public $WorkspaceId;

    /**
     * @var string 新描述，可选，为空表示不修改注释
     */
    public $NewComment;

    /**
     * @param string $CatalogName 数据目录名称，必填
     * @param string $SchemaName schema名称，必填
     * @param string $FunctionName 函数名称，必填
     * @param string $WorkspaceId 调用时所在workspace唯一id，必填
     * @param string $NewComment 新描述，可选，为空表示不修改注释
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
        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("NewComment",$param) and $param["NewComment"] !== null) {
            $this->NewComment = $param["NewComment"];
        }
    }
}
