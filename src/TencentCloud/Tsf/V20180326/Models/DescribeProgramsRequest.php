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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrograms请求参数结构体
 *
 * @method string getSearchWord() 获取<p>模糊查询数据集ID，数据集名称，不传入时查询全量</p>
 * @method void setSearchWord(string $SearchWord) 设置<p>模糊查询数据集ID，数据集名称，不传入时查询全量</p>
 * @method integer getLimit() 获取<p>每页数量，默认值20</p>
 * @method void setLimit(integer $Limit) 设置<p>每页数量，默认值20</p>
 * @method integer getOffset() 获取<p>起始偏移量，默认值0</p>
 * @method void setOffset(integer $Offset) 设置<p>起始偏移量，默认值0</p>
 * @method SearchFiltersProgram getSearchFilters() 获取<p>模糊查询，传递模糊查询字段和对应的值</p>
 * @method void setSearchFilters(SearchFiltersProgram $SearchFilters) 设置<p>模糊查询，传递模糊查询字段和对应的值</p>
 */
class DescribeProgramsRequest extends AbstractModel
{
    /**
     * @var string <p>模糊查询数据集ID，数据集名称，不传入时查询全量</p>
     */
    public $SearchWord;

    /**
     * @var integer <p>每页数量，默认值20</p>
     */
    public $Limit;

    /**
     * @var integer <p>起始偏移量，默认值0</p>
     */
    public $Offset;

    /**
     * @var SearchFiltersProgram <p>模糊查询，传递模糊查询字段和对应的值</p>
     */
    public $SearchFilters;

    /**
     * @param string $SearchWord <p>模糊查询数据集ID，数据集名称，不传入时查询全量</p>
     * @param integer $Limit <p>每页数量，默认值20</p>
     * @param integer $Offset <p>起始偏移量，默认值0</p>
     * @param SearchFiltersProgram $SearchFilters <p>模糊查询，传递模糊查询字段和对应的值</p>
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
        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SearchFilters",$param) and $param["SearchFilters"] !== null) {
            $this->SearchFilters = new SearchFiltersProgram();
            $this->SearchFilters->deserialize($param["SearchFilters"]);
        }
    }
}
