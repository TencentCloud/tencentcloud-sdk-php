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
 * ListCatalogNames请求参数结构体
 *
 * @method string getWorkspaceId() 获取<p>workspace唯一id，必填</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>workspace唯一id，必填</p>
 * @method string getMaxResults() 获取<p>最大结果条数，可选，默认10</p>
 * @method void setMaxResults(string $MaxResults) 设置<p>最大结果条数，可选，默认10</p>
 * @method string getPageToken() 获取<p>分页token信息(base64编码，包含offset、snapshotId等)</p>
 * @method void setPageToken(string $PageToken) 设置<p>分页token信息(base64编码，包含offset、snapshotId等)</p>
 * @method array getTypes() 获取<p>catalog类型，参考CatalogType(当前支持：TABLE、MODEL、VOLUME)，可选，不填默认查询所有类型</p>
 * @method void setTypes(array $Types) 设置<p>catalog类型，参考CatalogType(当前支持：TABLE、MODEL、VOLUME)，可选，不填默认查询所有类型</p>
 * @method array getCatalogSources() 获取<p>数据目录来源筛选，取值参考CatalogSourceEnum(METALAKE/CONNECTION/SETATS)</p>
 * @method void setCatalogSources(array $CatalogSources) 设置<p>数据目录来源筛选，取值参考CatalogSourceEnum(METALAKE/CONNECTION/SETATS)</p>
 */
class ListCatalogNamesRequest extends AbstractModel
{
    /**
     * @var string <p>workspace唯一id，必填</p>
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
     * @var array <p>catalog类型，参考CatalogType(当前支持：TABLE、MODEL、VOLUME)，可选，不填默认查询所有类型</p>
     */
    public $Types;

    /**
     * @var array <p>数据目录来源筛选，取值参考CatalogSourceEnum(METALAKE/CONNECTION/SETATS)</p>
     */
    public $CatalogSources;

    /**
     * @param string $WorkspaceId <p>workspace唯一id，必填</p>
     * @param string $MaxResults <p>最大结果条数，可选，默认10</p>
     * @param string $PageToken <p>分页token信息(base64编码，包含offset、snapshotId等)</p>
     * @param array $Types <p>catalog类型，参考CatalogType(当前支持：TABLE、MODEL、VOLUME)，可选，不填默认查询所有类型</p>
     * @param array $CatalogSources <p>数据目录来源筛选，取值参考CatalogSourceEnum(METALAKE/CONNECTION/SETATS)</p>
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("PageToken",$param) and $param["PageToken"] !== null) {
            $this->PageToken = $param["PageToken"];
        }

        if (array_key_exists("Types",$param) and $param["Types"] !== null) {
            $this->Types = $param["Types"];
        }

        if (array_key_exists("CatalogSources",$param) and $param["CatalogSources"] !== null) {
            $this->CatalogSources = $param["CatalogSources"];
        }
    }
}
