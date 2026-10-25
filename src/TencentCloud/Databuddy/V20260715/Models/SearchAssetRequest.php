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
 * SearchAsset请求参数结构体
 *
 * @method string getWorkspaceId() 获取<p>工作空间ID</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间ID</p>
 * @method integer getMaxResults() 获取<p>最大结果条数，默认30，可选30～50</p>
 * @method void setMaxResults(integer $MaxResults) 设置<p>最大结果条数，默认30，可选30～50</p>
 * @method string getKeyword() 获取<p>关键字</p>
 * @method void setKeyword(string $Keyword) 设置<p>关键字</p>
 * @method array getAssetTypes() 获取<p>资产类型列表，类型参见ListEntityTypeMetas的返回</p>
 * @method void setAssetTypes(array $AssetTypes) 设置<p>资产类型列表，类型参见ListEntityTypeMetas的返回</p>
 * @method string getPageToken() 获取<p>分页token信息，取上一页返回NextPageToken</p>
 * @method void setPageToken(string $PageToken) 设置<p>分页token信息，取上一页返回NextPageToken</p>
 * @method array getOwner() 获取<p>按资产负责人检索</p><ul><li>my 我负责的(包含my时其他uin不生效)</li><li>uin 指定用户uin</li></ul>
 * @method void setOwner(array $Owner) 设置<p>按资产负责人检索</p><ul><li>my 我负责的(包含my时其他uin不生效)</li><li>uin 指定用户uin</li></ul>
 * @method array getTagIds() 获取<p>标签IDs，可通过 ListTags 获取</p>
 * @method void setTagIds(array $TagIds) 设置<p>标签IDs，可通过 ListTags 获取</p>
 * @method array getTagValueIds() 获取<p>标签值IDs，可通过 ListTags 获取</p>
 * @method void setTagValueIds(array $TagValueIds) 设置<p>标签值IDs，可通过 ListTags 获取</p>
 * @method string getModifiedTime() 获取<p>更新时间，13位时间戳</p>
 * @method void setModifiedTime(string $ModifiedTime) 设置<p>更新时间，13位时间戳</p>
 * @method array getCatalogNames() 获取<p>数据目录列表</p>
 * @method void setCatalogNames(array $CatalogNames) 设置<p>数据目录列表</p>
 * @method array getWorkspacePaths() 获取<p>工作空间路径筛选(非catalog类资产)</p>
 * @method void setWorkspacePaths(array $WorkspacePaths) 设置<p>工作空间路径筛选(非catalog类资产)</p>
 * @method boolean getEnableHybridSearch() 获取<p>是否开启混合搜索</p>
 * @method void setEnableHybridSearch(boolean $EnableHybridSearch) 设置<p>是否开启混合搜索</p>
 * @method array getFieldTagIds() 获取<p>字段标签ID列表（可选）。使用场景：根据字段上打的标签检索资产（表），返回包含该字段标签的资产。与 TagIds 的区别：TagIds 是表级标签过滤，FieldTagIds 是字段级标签过滤。规格要求：int64 数组，最多支持 20 个标签 ID 同时过滤。可通过 ListTags 获取</p>
 * @method void setFieldTagIds(array $FieldTagIds) 设置<p>字段标签ID列表（可选）。使用场景：根据字段上打的标签检索资产（表），返回包含该字段标签的资产。与 TagIds 的区别：TagIds 是表级标签过滤，FieldTagIds 是字段级标签过滤。规格要求：int64 数组，最多支持 20 个标签 ID 同时过滤。可通过 ListTags 获取</p>
 * @method array getOrderBys() 获取<p>排序，为空时默认按相关度倒排序</p><p>Name:<br>PopularityQuantity 热度</p><p>Direction:<br>Desc 降序<br>Asc 升序</p>
 * @method void setOrderBys(array $OrderBys) 设置<p>排序，为空时默认按相关度倒排序</p><p>Name:<br>PopularityQuantity 热度</p><p>Direction:<br>Desc 降序<br>Asc 升序</p>
 */
class SearchAssetRequest extends AbstractModel
{
    /**
     * @var string <p>工作空间ID</p>
     */
    public $WorkspaceId;

    /**
     * @var integer <p>最大结果条数，默认30，可选30～50</p>
     */
    public $MaxResults;

    /**
     * @var string <p>关键字</p>
     */
    public $Keyword;

    /**
     * @var array <p>资产类型列表，类型参见ListEntityTypeMetas的返回</p>
     */
    public $AssetTypes;

    /**
     * @var string <p>分页token信息，取上一页返回NextPageToken</p>
     */
    public $PageToken;

    /**
     * @var array <p>按资产负责人检索</p><ul><li>my 我负责的(包含my时其他uin不生效)</li><li>uin 指定用户uin</li></ul>
     */
    public $Owner;

    /**
     * @var array <p>标签IDs，可通过 ListTags 获取</p>
     */
    public $TagIds;

    /**
     * @var array <p>标签值IDs，可通过 ListTags 获取</p>
     */
    public $TagValueIds;

    /**
     * @var string <p>更新时间，13位时间戳</p>
     */
    public $ModifiedTime;

    /**
     * @var array <p>数据目录列表</p>
     */
    public $CatalogNames;

    /**
     * @var array <p>工作空间路径筛选(非catalog类资产)</p>
     */
    public $WorkspacePaths;

    /**
     * @var boolean <p>是否开启混合搜索</p>
     */
    public $EnableHybridSearch;

    /**
     * @var array <p>字段标签ID列表（可选）。使用场景：根据字段上打的标签检索资产（表），返回包含该字段标签的资产。与 TagIds 的区别：TagIds 是表级标签过滤，FieldTagIds 是字段级标签过滤。规格要求：int64 数组，最多支持 20 个标签 ID 同时过滤。可通过 ListTags 获取</p>
     */
    public $FieldTagIds;

    /**
     * @var array <p>排序，为空时默认按相关度倒排序</p><p>Name:<br>PopularityQuantity 热度</p><p>Direction:<br>Desc 降序<br>Asc 升序</p>
     */
    public $OrderBys;

    /**
     * @param string $WorkspaceId <p>工作空间ID</p>
     * @param integer $MaxResults <p>最大结果条数，默认30，可选30～50</p>
     * @param string $Keyword <p>关键字</p>
     * @param array $AssetTypes <p>资产类型列表，类型参见ListEntityTypeMetas的返回</p>
     * @param string $PageToken <p>分页token信息，取上一页返回NextPageToken</p>
     * @param array $Owner <p>按资产负责人检索</p><ul><li>my 我负责的(包含my时其他uin不生效)</li><li>uin 指定用户uin</li></ul>
     * @param array $TagIds <p>标签IDs，可通过 ListTags 获取</p>
     * @param array $TagValueIds <p>标签值IDs，可通过 ListTags 获取</p>
     * @param string $ModifiedTime <p>更新时间，13位时间戳</p>
     * @param array $CatalogNames <p>数据目录列表</p>
     * @param array $WorkspacePaths <p>工作空间路径筛选(非catalog类资产)</p>
     * @param boolean $EnableHybridSearch <p>是否开启混合搜索</p>
     * @param array $FieldTagIds <p>字段标签ID列表（可选）。使用场景：根据字段上打的标签检索资产（表），返回包含该字段标签的资产。与 TagIds 的区别：TagIds 是表级标签过滤，FieldTagIds 是字段级标签过滤。规格要求：int64 数组，最多支持 20 个标签 ID 同时过滤。可通过 ListTags 获取</p>
     * @param array $OrderBys <p>排序，为空时默认按相关度倒排序</p><p>Name:<br>PopularityQuantity 热度</p><p>Direction:<br>Desc 降序<br>Asc 升序</p>
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

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("AssetTypes",$param) and $param["AssetTypes"] !== null) {
            $this->AssetTypes = $param["AssetTypes"];
        }

        if (array_key_exists("PageToken",$param) and $param["PageToken"] !== null) {
            $this->PageToken = $param["PageToken"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("TagIds",$param) and $param["TagIds"] !== null) {
            $this->TagIds = $param["TagIds"];
        }

        if (array_key_exists("TagValueIds",$param) and $param["TagValueIds"] !== null) {
            $this->TagValueIds = $param["TagValueIds"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("CatalogNames",$param) and $param["CatalogNames"] !== null) {
            $this->CatalogNames = $param["CatalogNames"];
        }

        if (array_key_exists("WorkspacePaths",$param) and $param["WorkspacePaths"] !== null) {
            $this->WorkspacePaths = $param["WorkspacePaths"];
        }

        if (array_key_exists("EnableHybridSearch",$param) and $param["EnableHybridSearch"] !== null) {
            $this->EnableHybridSearch = $param["EnableHybridSearch"];
        }

        if (array_key_exists("FieldTagIds",$param) and $param["FieldTagIds"] !== null) {
            $this->FieldTagIds = $param["FieldTagIds"];
        }

        if (array_key_exists("OrderBys",$param) and $param["OrderBys"] !== null) {
            $this->OrderBys = [];
            foreach ($param["OrderBys"] as $key => $value){
                $obj = new OrderBy();
                $obj->deserialize($value);
                array_push($this->OrderBys, $obj);
            }
        }
    }
}
