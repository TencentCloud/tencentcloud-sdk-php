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
 * DescribeLabel请求参数结构体
 *
 * @method string getKbId() 获取<p>所属知识库 ID</p>
 * @method void setKbId(string $KbId) 设置<p>所属知识库 ID</p>
 * @method string getLabelId() 获取<p>标签 ID</p>
 * @method void setLabelId(string $LabelId) 设置<p>标签 ID</p>
 * @method array getFilterList() 获取<p>通用过滤</p>
 * @method void setFilterList(array $FilterList) 设置<p>通用过滤</p>
 * @method string getLastTermId() 获取<p>滚动加载游标的标准词 ID（首次请求传 0，后续传上一页最后一条的 TermId）</p>
 * @method void setLastTermId(string $LastTermId) 设置<p>滚动加载游标的标准词 ID（首次请求传 0，后续传上一页最后一条的 TermId）</p>
 * @method integer getLimit() 获取<p>每次加载数量，默认 10，最大 100</p>
 * @method void setLimit(integer $Limit) 设置<p>每次加载数量，默认 10，最大 100</p>
 * @method string getQuery() 获取<p>关键词搜索</p>
 * @method void setQuery(string $Query) 设置<p>关键词搜索</p>
 */
class DescribeLabelRequest extends AbstractModel
{
    /**
     * @var string <p>所属知识库 ID</p>
     */
    public $KbId;

    /**
     * @var string <p>标签 ID</p>
     */
    public $LabelId;

    /**
     * @var array <p>通用过滤</p>
     */
    public $FilterList;

    /**
     * @var string <p>滚动加载游标的标准词 ID（首次请求传 0，后续传上一页最后一条的 TermId）</p>
     */
    public $LastTermId;

    /**
     * @var integer <p>每次加载数量，默认 10，最大 100</p>
     */
    public $Limit;

    /**
     * @var string <p>关键词搜索</p>
     */
    public $Query;

    /**
     * @param string $KbId <p>所属知识库 ID</p>
     * @param string $LabelId <p>标签 ID</p>
     * @param array $FilterList <p>通用过滤</p>
     * @param string $LastTermId <p>滚动加载游标的标准词 ID（首次请求传 0，后续传上一页最后一条的 TermId）</p>
     * @param integer $Limit <p>每次加载数量，默认 10，最大 100</p>
     * @param string $Query <p>关键词搜索</p>
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
        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("LabelId",$param) and $param["LabelId"] !== null) {
            $this->LabelId = $param["LabelId"];
        }

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }

        if (array_key_exists("LastTermId",$param) and $param["LastTermId"] !== null) {
            $this->LastTermId = $param["LastTermId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }
    }
}
