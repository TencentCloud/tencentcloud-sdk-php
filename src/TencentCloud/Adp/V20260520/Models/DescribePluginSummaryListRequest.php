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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePluginSummaryList请求参数结构体
 *
 * @method string getSpaceId() 获取<p>空间ID，查询空间内的插件列表时使用</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>空间ID，查询空间内的插件列表时使用</p>
 * @method array getFilterList() 获取<p>过滤条件列表，支持 PluginKind、CategoryKey、PluginSource、PluginId、PluginClass、BillingType、AuthType、IsShared、IsCreatedByMe</p>
 * @method void setFilterList(array $FilterList) 设置<p>过滤条件列表，支持 PluginKind、CategoryKey、PluginSource、PluginId、PluginClass、BillingType、AuthType、IsShared、IsCreatedByMe</p>
 * @method boolean getIsFavoriteOnly() 获取<p>是否只返回已收藏插件。取 true 时，仅返回当前用户已收藏的插件；取 false 或不传时不按收藏状态过滤。</p>
 * @method void setIsFavoriteOnly(boolean $IsFavoriteOnly) 设置<p>是否只返回已收藏插件。取 true 时，仅返回当前用户已收藏的插件；取 false 或不传时不按收藏状态过滤。</p>
 * @method integer getModule() 获取<p>插件展示场景。不传或取 0 时不限定场景。</p><p>枚举值：</p><ul><li>0：不限定场景</li><li>1：Agent 模式</li><li>2：工作流</li><li>3：智能工作台</li></ul>
 * @method void setModule(integer $Module) 设置<p>插件展示场景。不传或取 0 时不限定场景。</p><p>枚举值：</p><ul><li>0：不限定场景</li><li>1：Agent 模式</li><li>2：工作流</li><li>3：智能工作台</li></ul>
 * @method integer getPageNumber() 获取<p>页码 从0开始</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码 从0开始</p>
 * @method integer getPageSize() 获取<p>每页大小</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页大小</p>
 * @method string getQuery() 获取<p>查询内容 模糊匹配：插件名称/插件描述/工具名称/工具描述</p>
 * @method void setQuery(string $Query) 设置<p>查询内容 模糊匹配：插件名称/插件描述/工具名称/工具描述</p>
 * @method integer getSortType() 获取<p>排序方式。</p><p>枚举值：</p><ul><li>0：未指定，默认排序</li><li>1：按相关性排序</li><li>2：按更新时间排序</li><li>3：默认排序</li><li>4：按热度排序</li></ul>
 * @method void setSortType(integer $SortType) 设置<p>排序方式。</p><p>枚举值：</p><ul><li>0：未指定，默认排序</li><li>1：按相关性排序</li><li>2：按更新时间排序</li><li>3：默认排序</li><li>4：按热度排序</li></ul>
 * @method integer getPluginSpaceRelation() 获取<p>筛选当前空间/企业共享插件</p><p>取值范围：[0, 2]</p>
 * @method void setPluginSpaceRelation(integer $PluginSpaceRelation) 设置<p>筛选当前空间/企业共享插件</p><p>取值范围：[0, 2]</p>
 */
class DescribePluginSummaryListRequest extends AbstractModel
{
    /**
     * @var string <p>空间ID，查询空间内的插件列表时使用</p>
     */
    public $SpaceId;

    /**
     * @var array <p>过滤条件列表，支持 PluginKind、CategoryKey、PluginSource、PluginId、PluginClass、BillingType、AuthType、IsShared、IsCreatedByMe</p>
     */
    public $FilterList;

    /**
     * @var boolean <p>是否只返回已收藏插件。取 true 时，仅返回当前用户已收藏的插件；取 false 或不传时不按收藏状态过滤。</p>
     */
    public $IsFavoriteOnly;

    /**
     * @var integer <p>插件展示场景。不传或取 0 时不限定场景。</p><p>枚举值：</p><ul><li>0：不限定场景</li><li>1：Agent 模式</li><li>2：工作流</li><li>3：智能工作台</li></ul>
     */
    public $Module;

    /**
     * @var integer <p>页码 从0开始</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页大小</p>
     */
    public $PageSize;

    /**
     * @var string <p>查询内容 模糊匹配：插件名称/插件描述/工具名称/工具描述</p>
     */
    public $Query;

    /**
     * @var integer <p>排序方式。</p><p>枚举值：</p><ul><li>0：未指定，默认排序</li><li>1：按相关性排序</li><li>2：按更新时间排序</li><li>3：默认排序</li><li>4：按热度排序</li></ul>
     */
    public $SortType;

    /**
     * @var integer <p>筛选当前空间/企业共享插件</p><p>取值范围：[0, 2]</p>
     */
    public $PluginSpaceRelation;

    /**
     * @param string $SpaceId <p>空间ID，查询空间内的插件列表时使用</p>
     * @param array $FilterList <p>过滤条件列表，支持 PluginKind、CategoryKey、PluginSource、PluginId、PluginClass、BillingType、AuthType、IsShared、IsCreatedByMe</p>
     * @param boolean $IsFavoriteOnly <p>是否只返回已收藏插件。取 true 时，仅返回当前用户已收藏的插件；取 false 或不传时不按收藏状态过滤。</p>
     * @param integer $Module <p>插件展示场景。不传或取 0 时不限定场景。</p><p>枚举值：</p><ul><li>0：不限定场景</li><li>1：Agent 模式</li><li>2：工作流</li><li>3：智能工作台</li></ul>
     * @param integer $PageNumber <p>页码 从0开始</p>
     * @param integer $PageSize <p>每页大小</p>
     * @param string $Query <p>查询内容 模糊匹配：插件名称/插件描述/工具名称/工具描述</p>
     * @param integer $SortType <p>排序方式。</p><p>枚举值：</p><ul><li>0：未指定，默认排序</li><li>1：按相关性排序</li><li>2：按更新时间排序</li><li>3：默认排序</li><li>4：按热度排序</li></ul>
     * @param integer $PluginSpaceRelation <p>筛选当前空间/企业共享插件</p><p>取值范围：[0, 2]</p>
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }

        if (array_key_exists("IsFavoriteOnly",$param) and $param["IsFavoriteOnly"] !== null) {
            $this->IsFavoriteOnly = $param["IsFavoriteOnly"];
        }

        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("PluginSpaceRelation",$param) and $param["PluginSpaceRelation"] !== null) {
            $this->PluginSpaceRelation = $param["PluginSpaceRelation"];
        }
    }
}
