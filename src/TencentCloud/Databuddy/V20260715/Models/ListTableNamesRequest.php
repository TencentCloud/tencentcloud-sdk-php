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
 * ListTableNames请求参数结构体
 *
 * @method string getCatalogName() 获取<p>数据目录名，必填</p>
 * @method void setCatalogName(string $CatalogName) 设置<p>数据目录名，必填</p>
 * @method string getSchemaName() 获取<p>数据库名，必填</p>
 * @method void setSchemaName(string $SchemaName) 设置<p>数据库名，必填</p>
 * @method string getWorkspaceId() 获取<p>调用时所在workspace唯一id，必填</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>调用时所在workspace唯一id，必填</p>
 * @method string getMaxResults() 获取<p>最大结果条数，可选，默认10</p>
 * @method void setMaxResults(string $MaxResults) 设置<p>最大结果条数，可选，默认10</p>
 * @method string getPageToken() 获取<p>分页token信息(base64编码，包含offset、snapshotId等)</p>
 * @method void setPageToken(string $PageToken) 设置<p>分页token信息(base64编码，包含offset、snapshotId等)</p>
 * @method string getConnectionId() 获取<p>数据源连接ID，可选（融合版新增字段）</p>
 * @method void setConnectionId(string $ConnectionId) 设置<p>数据源连接ID，可选（融合版新增字段）</p>
 * @method string getCatalogSource() 获取<p>数据目录来源，取值参考CatalogSourceEnum：METALAKE/CONNECTION/SETATS</p>
 * @method void setCatalogSource(string $CatalogSource) 设置<p>数据目录来源，取值参考CatalogSourceEnum：METALAKE/CONNECTION/SETATS</p>
 */
class ListTableNamesRequest extends AbstractModel
{
    /**
     * @var string <p>数据目录名，必填</p>
     */
    public $CatalogName;

    /**
     * @var string <p>数据库名，必填</p>
     */
    public $SchemaName;

    /**
     * @var string <p>调用时所在workspace唯一id，必填</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>最大结果条数，可选，默认10</p>
     */
    public $MaxResults;

    /**
     * @var string <p>分页token信息(base64编码，包含offset、snapshotId等)</p>
     */
    public $PageToken;

    /**
     * @var string <p>数据源连接ID，可选（融合版新增字段）</p>
     */
    public $ConnectionId;

    /**
     * @var string <p>数据目录来源，取值参考CatalogSourceEnum：METALAKE/CONNECTION/SETATS</p>
     */
    public $CatalogSource;

    /**
     * @param string $CatalogName <p>数据目录名，必填</p>
     * @param string $SchemaName <p>数据库名，必填</p>
     * @param string $WorkspaceId <p>调用时所在workspace唯一id，必填</p>
     * @param string $MaxResults <p>最大结果条数，可选，默认10</p>
     * @param string $PageToken <p>分页token信息(base64编码，包含offset、snapshotId等)</p>
     * @param string $ConnectionId <p>数据源连接ID，可选（融合版新增字段）</p>
     * @param string $CatalogSource <p>数据目录来源，取值参考CatalogSourceEnum：METALAKE/CONNECTION/SETATS</p>
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

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("PageToken",$param) and $param["PageToken"] !== null) {
            $this->PageToken = $param["PageToken"];
        }

        if (array_key_exists("ConnectionId",$param) and $param["ConnectionId"] !== null) {
            $this->ConnectionId = $param["ConnectionId"];
        }

        if (array_key_exists("CatalogSource",$param) and $param["CatalogSource"] !== null) {
            $this->CatalogSource = $param["CatalogSource"];
        }
    }
}
