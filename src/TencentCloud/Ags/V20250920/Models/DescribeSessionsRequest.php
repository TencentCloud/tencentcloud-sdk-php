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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSessions请求参数结构体
 *
 * @method string getSpaceId() 获取<p>查询的会话空间 ID。</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>查询的会话空间 ID。</p>
 * @method array getAgentIds() 获取<p>Agent ID 列表，最多支持 100 个。</p>
 * @method void setAgentIds(array $AgentIds) 设置<p>Agent ID 列表，最多支持 100 个。</p>
 * @method array getUserIds() 获取<p>用户 ID 列表，最多支持 100 个。</p>
 * @method void setUserIds(array $UserIds) 设置<p>用户 ID 列表，最多支持 100 个。</p>
 * @method integer getOffset() 获取<p>分页偏移量，默认为 0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，默认为 0。</p>
 * @method integer getLimit() 获取<p>返回数量，默认为 20，最大值为 100。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为 20，最大值为 100。</p>
 * @method array getSessionIds() 获取<p>会话 ID 列表，最多支持 100 个。</p>
 * @method void setSessionIds(array $SessionIds) 设置<p>会话 ID 列表，最多支持 100 个。</p>
 * @method array getFilters() 获取<p>会话筛选条件列表，支持 Metadata 精确匹配、标题精确匹配和标题模糊匹配。同一 Filter 内多个 Values 之间为 OR，不同 Filter 之间为 AND。不传或传空数组时不增加筛选限制。</p><p>入参限制：最多传入 10 个 Filter，每个 Filter 最多支持 100 个 Values。Filter.Name 不可重复，支持 metadata:MetadataKey、title、title-like；title 与 title-like 不可同时提供。标题筛选值不可为空或纯空白。匹配区分大小写，标题包含匹配中的 %、_ 按普通字符处理，不具有通配含义。</p><p>例如 Name 为 title-like，Values 为 [&quot;客服&quot;,&quot;测试&quot;]，表示查询标题包含“客服”或“测试”的会话。Name 为 metadata:env，Values 为 [&quot;dev&quot;,&quot;test&quot;]，表示按 Metadata env 的值精确筛选。标题条件与 Metadata、SessionIds、UserIds 筛选条件可组合使用，条件之间为 AND。筛选在分页前执行，TotalCount 为符合条件的会话总数。</p>
 * @method void setFilters(array $Filters) 设置<p>会话筛选条件列表，支持 Metadata 精确匹配、标题精确匹配和标题模糊匹配。同一 Filter 内多个 Values 之间为 OR，不同 Filter 之间为 AND。不传或传空数组时不增加筛选限制。</p><p>入参限制：最多传入 10 个 Filter，每个 Filter 最多支持 100 个 Values。Filter.Name 不可重复，支持 metadata:MetadataKey、title、title-like；title 与 title-like 不可同时提供。标题筛选值不可为空或纯空白。匹配区分大小写，标题包含匹配中的 %、_ 按普通字符处理，不具有通配含义。</p><p>例如 Name 为 title-like，Values 为 [&quot;客服&quot;,&quot;测试&quot;]，表示查询标题包含“客服”或“测试”的会话。Name 为 metadata:env，Values 为 [&quot;dev&quot;,&quot;test&quot;]，表示按 Metadata env 的值精确筛选。标题条件与 Metadata、SessionIds、UserIds 筛选条件可组合使用，条件之间为 AND。筛选在分页前执行，TotalCount 为符合条件的会话总数。</p>
 */
class DescribeSessionsRequest extends AbstractModel
{
    /**
     * @var string <p>查询的会话空间 ID。</p>
     */
    public $SpaceId;

    /**
     * @var array <p>Agent ID 列表，最多支持 100 个。</p>
     * @deprecated
     */
    public $AgentIds;

    /**
     * @var array <p>用户 ID 列表，最多支持 100 个。</p>
     */
    public $UserIds;

    /**
     * @var integer <p>分页偏移量，默认为 0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，默认为 20，最大值为 100。</p>
     */
    public $Limit;

    /**
     * @var array <p>会话 ID 列表，最多支持 100 个。</p>
     */
    public $SessionIds;

    /**
     * @var array <p>会话筛选条件列表，支持 Metadata 精确匹配、标题精确匹配和标题模糊匹配。同一 Filter 内多个 Values 之间为 OR，不同 Filter 之间为 AND。不传或传空数组时不增加筛选限制。</p><p>入参限制：最多传入 10 个 Filter，每个 Filter 最多支持 100 个 Values。Filter.Name 不可重复，支持 metadata:MetadataKey、title、title-like；title 与 title-like 不可同时提供。标题筛选值不可为空或纯空白。匹配区分大小写，标题包含匹配中的 %、_ 按普通字符处理，不具有通配含义。</p><p>例如 Name 为 title-like，Values 为 [&quot;客服&quot;,&quot;测试&quot;]，表示查询标题包含“客服”或“测试”的会话。Name 为 metadata:env，Values 为 [&quot;dev&quot;,&quot;test&quot;]，表示按 Metadata env 的值精确筛选。标题条件与 Metadata、SessionIds、UserIds 筛选条件可组合使用，条件之间为 AND。筛选在分页前执行，TotalCount 为符合条件的会话总数。</p>
     */
    public $Filters;

    /**
     * @param string $SpaceId <p>查询的会话空间 ID。</p>
     * @param array $AgentIds <p>Agent ID 列表，最多支持 100 个。</p>
     * @param array $UserIds <p>用户 ID 列表，最多支持 100 个。</p>
     * @param integer $Offset <p>分页偏移量，默认为 0。</p>
     * @param integer $Limit <p>返回数量，默认为 20，最大值为 100。</p>
     * @param array $SessionIds <p>会话 ID 列表，最多支持 100 个。</p>
     * @param array $Filters <p>会话筛选条件列表，支持 Metadata 精确匹配、标题精确匹配和标题模糊匹配。同一 Filter 内多个 Values 之间为 OR，不同 Filter 之间为 AND。不传或传空数组时不增加筛选限制。</p><p>入参限制：最多传入 10 个 Filter，每个 Filter 最多支持 100 个 Values。Filter.Name 不可重复，支持 metadata:MetadataKey、title、title-like；title 与 title-like 不可同时提供。标题筛选值不可为空或纯空白。匹配区分大小写，标题包含匹配中的 %、_ 按普通字符处理，不具有通配含义。</p><p>例如 Name 为 title-like，Values 为 [&quot;客服&quot;,&quot;测试&quot;]，表示查询标题包含“客服”或“测试”的会话。Name 为 metadata:env，Values 为 [&quot;dev&quot;,&quot;test&quot;]，表示按 Metadata env 的值精确筛选。标题条件与 Metadata、SessionIds、UserIds 筛选条件可组合使用，条件之间为 AND。筛选在分页前执行，TotalCount 为符合条件的会话总数。</p>
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

        if (array_key_exists("AgentIds",$param) and $param["AgentIds"] !== null) {
            $this->AgentIds = $param["AgentIds"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SessionIds",$param) and $param["SessionIds"] !== null) {
            $this->SessionIds = $param["SessionIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
