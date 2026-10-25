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
 * CreateCatalog请求参数结构体
 *
 * @method string getName() 获取<p>catalog名称</p>
 * @method void setName(string $Name) 设置<p>catalog名称</p>
 * @method string getType() 获取<p>catalog类型, 可选值TABLE、MODEL、VOLUME</p>
 * @method void setType(string $Type) 设置<p>catalog类型, 可选值TABLE、MODEL、VOLUME</p>
 * @method string getWorkspaceId() 获取<p>工作空间唯一id</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间唯一id</p>
 * @method string getComment() 获取<p>描述</p>
 * @method void setComment(string $Comment) 设置<p>描述</p>
 * @method string getConnectionId() 获取<p>connection 的 ID，通过ListConnections接口获取</p>
 * @method void setConnectionId(string $ConnectionId) 设置<p>connection 的 ID，通过ListConnections接口获取</p>
 * @method string getCatalogSource() 获取<p>数据目录来源，可选（融合版新增字段），取值参考 CatalogSourceEnum：METALAKE（专业版）/ CONNECTION（分析版），不传时默认按 METALAKE 处理</p>
 * @method void setCatalogSource(string $CatalogSource) 设置<p>数据目录来源，可选（融合版新增字段），取值参考 CatalogSourceEnum：METALAKE（专业版）/ CONNECTION（分析版），不传时默认按 METALAKE 处理</p>
 * @method string getConnectionCatalogName() 获取<p>连接侧数据目录名或数据库名，三段式数据源必填，二段式数据源（如 MySQL）不填。Doris/StarRocks/TChouse-D 等 MySQL 内核三段式数据源填写 external catalog 名称；PostgreSQL/Tencent PG/GaussDB/Hologres 等 PG 内核三段式数据源填写 databaseName；MySQL 等二段式数据源不填。</p>
 * @method void setConnectionCatalogName(string $ConnectionCatalogName) 设置<p>连接侧数据目录名或数据库名，三段式数据源必填，二段式数据源（如 MySQL）不填。Doris/StarRocks/TChouse-D 等 MySQL 内核三段式数据源填写 external catalog 名称；PostgreSQL/Tencent PG/GaussDB/Hologres 等 PG 内核三段式数据源填写 databaseName；MySQL 等二段式数据源不填。</p>
 */
class CreateCatalogRequest extends AbstractModel
{
    /**
     * @var string <p>catalog名称</p>
     */
    public $Name;

    /**
     * @var string <p>catalog类型, 可选值TABLE、MODEL、VOLUME</p>
     */
    public $Type;

    /**
     * @var string <p>工作空间唯一id</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>描述</p>
     */
    public $Comment;

    /**
     * @var string <p>connection 的 ID，通过ListConnections接口获取</p>
     */
    public $ConnectionId;

    /**
     * @var string <p>数据目录来源，可选（融合版新增字段），取值参考 CatalogSourceEnum：METALAKE（专业版）/ CONNECTION（分析版），不传时默认按 METALAKE 处理</p>
     */
    public $CatalogSource;

    /**
     * @var string <p>连接侧数据目录名或数据库名，三段式数据源必填，二段式数据源（如 MySQL）不填。Doris/StarRocks/TChouse-D 等 MySQL 内核三段式数据源填写 external catalog 名称；PostgreSQL/Tencent PG/GaussDB/Hologres 等 PG 内核三段式数据源填写 databaseName；MySQL 等二段式数据源不填。</p>
     */
    public $ConnectionCatalogName;

    /**
     * @param string $Name <p>catalog名称</p>
     * @param string $Type <p>catalog类型, 可选值TABLE、MODEL、VOLUME</p>
     * @param string $WorkspaceId <p>工作空间唯一id</p>
     * @param string $Comment <p>描述</p>
     * @param string $ConnectionId <p>connection 的 ID，通过ListConnections接口获取</p>
     * @param string $CatalogSource <p>数据目录来源，可选（融合版新增字段），取值参考 CatalogSourceEnum：METALAKE（专业版）/ CONNECTION（分析版），不传时默认按 METALAKE 处理</p>
     * @param string $ConnectionCatalogName <p>连接侧数据目录名或数据库名，三段式数据源必填，二段式数据源（如 MySQL）不填。Doris/StarRocks/TChouse-D 等 MySQL 内核三段式数据源填写 external catalog 名称；PostgreSQL/Tencent PG/GaussDB/Hologres 等 PG 内核三段式数据源填写 databaseName；MySQL 等二段式数据源不填。</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("ConnectionId",$param) and $param["ConnectionId"] !== null) {
            $this->ConnectionId = $param["ConnectionId"];
        }

        if (array_key_exists("CatalogSource",$param) and $param["CatalogSource"] !== null) {
            $this->CatalogSource = $param["CatalogSource"];
        }

        if (array_key_exists("ConnectionCatalogName",$param) and $param["ConnectionCatalogName"] !== null) {
            $this->ConnectionCatalogName = $param["ConnectionCatalogName"];
        }
    }
}
