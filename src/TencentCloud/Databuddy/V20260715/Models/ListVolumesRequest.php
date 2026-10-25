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
 * ListVolumes请求参数结构体
 *
 * @method string getCatalogName() 获取<p>数据目录名称</p>
 * @method void setCatalogName(string $CatalogName) 设置<p>数据目录名称</p>
 * @method string getSchemaName() 获取<p>schema名称</p>
 * @method void setSchemaName(string $SchemaName) 设置<p>schema名称</p>
 * @method integer getMaxResults() 获取<p>获取数量</p>
 * @method void setMaxResults(integer $MaxResults) 设置<p>获取数量</p>
 * @method string getWorkspaceId() 获取<p>调用时所在workspace唯一id</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>调用时所在workspace唯一id</p>
 * @method string getPageToken() 获取<p>分页信息</p>
 * @method void setPageToken(string $PageToken) 设置<p>分页信息</p>
 * @method FetchOption getFetchOption() 获取<p>数据获取选项，可选，控制是否返回权限信息及按权限过滤</p>
 * @method void setFetchOption(FetchOption $FetchOption) 设置<p>数据获取选项，可选，控制是否返回权限信息及按权限过滤</p>
 */
class ListVolumesRequest extends AbstractModel
{
    /**
     * @var string <p>数据目录名称</p>
     */
    public $CatalogName;

    /**
     * @var string <p>schema名称</p>
     */
    public $SchemaName;

    /**
     * @var integer <p>获取数量</p>
     */
    public $MaxResults;

    /**
     * @var string <p>调用时所在workspace唯一id</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>分页信息</p>
     */
    public $PageToken;

    /**
     * @var FetchOption <p>数据获取选项，可选，控制是否返回权限信息及按权限过滤</p>
     */
    public $FetchOption;

    /**
     * @param string $CatalogName <p>数据目录名称</p>
     * @param string $SchemaName <p>schema名称</p>
     * @param integer $MaxResults <p>获取数量</p>
     * @param string $WorkspaceId <p>调用时所在workspace唯一id</p>
     * @param string $PageToken <p>分页信息</p>
     * @param FetchOption $FetchOption <p>数据获取选项，可选，控制是否返回权限信息及按权限过滤</p>
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

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("PageToken",$param) and $param["PageToken"] !== null) {
            $this->PageToken = $param["PageToken"];
        }

        if (array_key_exists("FetchOption",$param) and $param["FetchOption"] !== null) {
            $this->FetchOption = new FetchOption();
            $this->FetchOption->deserialize($param["FetchOption"]);
        }
    }
}
