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
 * ListCatalogs请求参数结构体
 *
 * @method string getWorkspaceId() 获取<p>工作空间唯一id</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间唯一id</p>
 * @method integer getMaxResults() 获取<p>最大结果条数</p>
 * @method void setMaxResults(integer $MaxResults) 设置<p>最大结果条数</p>
 * @method string getPageToken() 获取<p>分页token</p>
 * @method void setPageToken(string $PageToken) 设置<p>分页token</p>
 * @method array getTypes() 获取<p>catalog类型，可填：TABLE、MODEL、VOLUME</p>
 * @method void setTypes(array $Types) 设置<p>catalog类型，可填：TABLE、MODEL、VOLUME</p>
 * @method boolean getCurrentWorkspaceOnly() 获取<p>是否只返回当前工作空间有权限的，false时会额外返回当前用户有权限管理的catalog</p>
 * @method void setCurrentWorkspaceOnly(boolean $CurrentWorkspaceOnly) 设置<p>是否只返回当前工作空间有权限的，false时会额外返回当前用户有权限管理的catalog</p>
 * @method FetchOption getFetchOption() 获取<p>数据获取选项，可选，控制是否返回权限信息及按权限过滤</p>
 * @method void setFetchOption(FetchOption $FetchOption) 设置<p>数据获取选项，可选，控制是否返回权限信息及按权限过滤</p>
 * @method array getCatalogSources() 获取数据目录来源筛选（融合版新增字段），取值参考 CatalogSourceEnum。空数组或不传→只查tclake；["METALAKE"]→只查tclake；["CONNECTION"]→只查分析版ana_catalog；["METALAKE","CONNECTION"]→合并返回
 * @method void setCatalogSources(array $CatalogSources) 设置数据目录来源筛选（融合版新增字段），取值参考 CatalogSourceEnum。空数组或不传→只查tclake；["METALAKE"]→只查tclake；["CONNECTION"]→只查分析版ana_catalog；["METALAKE","CONNECTION"]→合并返回
 */
class ListCatalogsRequest extends AbstractModel
{
    /**
     * @var string <p>工作空间唯一id</p>
     */
    public $WorkspaceId;

    /**
     * @var integer <p>最大结果条数</p>
     */
    public $MaxResults;

    /**
     * @var string <p>分页token</p>
     */
    public $PageToken;

    /**
     * @var array <p>catalog类型，可填：TABLE、MODEL、VOLUME</p>
     */
    public $Types;

    /**
     * @var boolean <p>是否只返回当前工作空间有权限的，false时会额外返回当前用户有权限管理的catalog</p>
     */
    public $CurrentWorkspaceOnly;

    /**
     * @var FetchOption <p>数据获取选项，可选，控制是否返回权限信息及按权限过滤</p>
     */
    public $FetchOption;

    /**
     * @var array 数据目录来源筛选（融合版新增字段），取值参考 CatalogSourceEnum。空数组或不传→只查tclake；["METALAKE"]→只查tclake；["CONNECTION"]→只查分析版ana_catalog；["METALAKE","CONNECTION"]→合并返回
     */
    public $CatalogSources;

    /**
     * @param string $WorkspaceId <p>工作空间唯一id</p>
     * @param integer $MaxResults <p>最大结果条数</p>
     * @param string $PageToken <p>分页token</p>
     * @param array $Types <p>catalog类型，可填：TABLE、MODEL、VOLUME</p>
     * @param boolean $CurrentWorkspaceOnly <p>是否只返回当前工作空间有权限的，false时会额外返回当前用户有权限管理的catalog</p>
     * @param FetchOption $FetchOption <p>数据获取选项，可选，控制是否返回权限信息及按权限过滤</p>
     * @param array $CatalogSources 数据目录来源筛选（融合版新增字段），取值参考 CatalogSourceEnum。空数组或不传→只查tclake；["METALAKE"]→只查tclake；["CONNECTION"]→只查分析版ana_catalog；["METALAKE","CONNECTION"]→合并返回
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

        if (array_key_exists("CurrentWorkspaceOnly",$param) and $param["CurrentWorkspaceOnly"] !== null) {
            $this->CurrentWorkspaceOnly = $param["CurrentWorkspaceOnly"];
        }

        if (array_key_exists("FetchOption",$param) and $param["FetchOption"] !== null) {
            $this->FetchOption = new FetchOption();
            $this->FetchOption->deserialize($param["FetchOption"]);
        }

        if (array_key_exists("CatalogSources",$param) and $param["CatalogSources"] !== null) {
            $this->CatalogSources = $param["CatalogSources"];
        }
    }
}
