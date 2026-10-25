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
 * UpdateTable请求参数结构体
 *
 * @method string getCatalogName() 获取<p>数据目录名称，必填</p>
 * @method void setCatalogName(string $CatalogName) 设置<p>数据目录名称，必填</p>
 * @method string getSchemaName() 获取<p>数据库名称，必填</p>
 * @method void setSchemaName(string $SchemaName) 设置<p>数据库名称，必填</p>
 * @method string getTableName() 获取<p>表名，必填</p>
 * @method void setTableName(string $TableName) 设置<p>表名，必填</p>
 * @method string getWorkspaceId() 获取<p>调用时所在workspace唯一id，必填</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>调用时所在workspace唯一id，必填</p>
 * @method string getNewName() 获取<p>新名称，可选，为空表示不修改名称</p>
 * @method void setNewName(string $NewName) 设置<p>新名称，可选，为空表示不修改名称</p>
 * @method string getNewComment() 获取<p>新描述，可选，为空表示不修改注释</p>
 * @method void setNewComment(string $NewComment) 设置<p>新描述，可选，为空表示不修改注释</p>
 * @method string getConnectionId() 获取<p>数据源连接ID，可选。分析版catalog不支持写操作，传入非空时返回错误。可通过 ListConnections 获取</p>
 * @method void setConnectionId(string $ConnectionId) 设置<p>数据源连接ID，可选。分析版catalog不支持写操作，传入非空时返回错误。可通过 ListConnections 获取</p>
 * @method string getCatalogSource() 获取<p>数据目录来源，可选（Setats融合新增字段）。取值：METALAKE（专业版tclake）/ CONNECTION（分析版Linked Catalog）/ SETATS（Setats元数据）。路由优先级：显式非空CatalogSource &gt; 非空ConnectionId（视为CONNECTION）&gt; 默认METALAKE；CatalogSource非空时ConnectionId将被忽略。</p>
 * @method void setCatalogSource(string $CatalogSource) 设置<p>数据目录来源，可选（Setats融合新增字段）。取值：METALAKE（专业版tclake）/ CONNECTION（分析版Linked Catalog）/ SETATS（Setats元数据）。路由优先级：显式非空CatalogSource &gt; 非空ConnectionId（视为CONNECTION）&gt; 默认METALAKE；CatalogSource非空时ConnectionId将被忽略。</p>
 */
class UpdateTableRequest extends AbstractModel
{
    /**
     * @var string <p>数据目录名称，必填</p>
     */
    public $CatalogName;

    /**
     * @var string <p>数据库名称，必填</p>
     */
    public $SchemaName;

    /**
     * @var string <p>表名，必填</p>
     */
    public $TableName;

    /**
     * @var string <p>调用时所在workspace唯一id，必填</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>新名称，可选，为空表示不修改名称</p>
     */
    public $NewName;

    /**
     * @var string <p>新描述，可选，为空表示不修改注释</p>
     */
    public $NewComment;

    /**
     * @var string <p>数据源连接ID，可选。分析版catalog不支持写操作，传入非空时返回错误。可通过 ListConnections 获取</p>
     */
    public $ConnectionId;

    /**
     * @var string <p>数据目录来源，可选（Setats融合新增字段）。取值：METALAKE（专业版tclake）/ CONNECTION（分析版Linked Catalog）/ SETATS（Setats元数据）。路由优先级：显式非空CatalogSource &gt; 非空ConnectionId（视为CONNECTION）&gt; 默认METALAKE；CatalogSource非空时ConnectionId将被忽略。</p>
     */
    public $CatalogSource;

    /**
     * @param string $CatalogName <p>数据目录名称，必填</p>
     * @param string $SchemaName <p>数据库名称，必填</p>
     * @param string $TableName <p>表名，必填</p>
     * @param string $WorkspaceId <p>调用时所在workspace唯一id，必填</p>
     * @param string $NewName <p>新名称，可选，为空表示不修改名称</p>
     * @param string $NewComment <p>新描述，可选，为空表示不修改注释</p>
     * @param string $ConnectionId <p>数据源连接ID，可选。分析版catalog不支持写操作，传入非空时返回错误。可通过 ListConnections 获取</p>
     * @param string $CatalogSource <p>数据目录来源，可选（Setats融合新增字段）。取值：METALAKE（专业版tclake）/ CONNECTION（分析版Linked Catalog）/ SETATS（Setats元数据）。路由优先级：显式非空CatalogSource &gt; 非空ConnectionId（视为CONNECTION）&gt; 默认METALAKE；CatalogSource非空时ConnectionId将被忽略。</p>
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

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("NewName",$param) and $param["NewName"] !== null) {
            $this->NewName = $param["NewName"];
        }

        if (array_key_exists("NewComment",$param) and $param["NewComment"] !== null) {
            $this->NewComment = $param["NewComment"];
        }

        if (array_key_exists("ConnectionId",$param) and $param["ConnectionId"] !== null) {
            $this->ConnectionId = $param["ConnectionId"];
        }

        if (array_key_exists("CatalogSource",$param) and $param["CatalogSource"] !== null) {
            $this->CatalogSource = $param["CatalogSource"];
        }
    }
}
