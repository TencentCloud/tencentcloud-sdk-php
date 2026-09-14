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
 * 检索过滤配置
 *
 * @method boolean getOnlyRetrievalSelectedLabel() 获取<p>是否仅检索选中标签，true:仅检索带有选中标签的知识，false:同时检索带有选中标签和不带任何标签的知识</p>
 * @method void setOnlyRetrievalSelectedLabel(boolean $OnlyRetrievalSelectedLabel) 设置<p>是否仅检索选中标签，true:仅检索带有选中标签的知识，false:同时检索带有选中标签和不带任何标签的知识</p>
 * @method SearchFilter getSearchFilter() 获取<p>检索过滤</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSearchFilter(SearchFilter $SearchFilter) 设置<p>检索过滤</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class SearchFilterConfig extends AbstractModel
{
    /**
     * @var boolean <p>是否仅检索选中标签，true:仅检索带有选中标签的知识，false:同时检索带有选中标签和不带任何标签的知识</p>
     */
    public $OnlyRetrievalSelectedLabel;

    /**
     * @var SearchFilter <p>检索过滤</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SearchFilter;

    /**
     * @param boolean $OnlyRetrievalSelectedLabel <p>是否仅检索选中标签，true:仅检索带有选中标签的知识，false:同时检索带有选中标签和不带任何标签的知识</p>
     * @param SearchFilter $SearchFilter <p>检索过滤</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("OnlyRetrievalSelectedLabel",$param) and $param["OnlyRetrievalSelectedLabel"] !== null) {
            $this->OnlyRetrievalSelectedLabel = $param["OnlyRetrievalSelectedLabel"];
        }

        if (array_key_exists("SearchFilter",$param) and $param["SearchFilter"] !== null) {
            $this->SearchFilter = new SearchFilter();
            $this->SearchFilter->deserialize($param["SearchFilter"]);
        }
    }
}
