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
 * DescribeQASummaryList请求参数结构体
 *
 * @method string getKbId() 获取<p>所属知识库 ID</p>
 * @method void setKbId(string $KbId) 设置<p>所属知识库 ID</p>
 * @method array getFilterList() 获取<p>过滤条件（多个 Filter 之间为 AND 关系，同一 Filter 的多个 Values 为 OR 关系）：Status-QA状态,枚举值,精确匹配; CategoryId-分类ID,精确匹配; SourceType-QA来源类型,枚举值,精确匹配; EffectiveDomain-生效作用域,精确匹配; DocId-关联文档ID,精确匹配;  CreateTime-创建时间,Unix秒,BETWEEN 传 [起始秒,结束秒]; UpdateTime-更新时间,Unix秒,BETWEEN 传 [起始秒,结束秒]</p>
 * @method void setFilterList(array $FilterList) 设置<p>过滤条件（多个 Filter 之间为 AND 关系，同一 Filter 的多个 Values 为 OR 关系）：Status-QA状态,枚举值,精确匹配; CategoryId-分类ID,精确匹配; SourceType-QA来源类型,枚举值,精确匹配; EffectiveDomain-生效作用域,精确匹配; DocId-关联文档ID,精确匹配;  CreateTime-创建时间,Unix秒,BETWEEN 传 [起始秒,结束秒]; UpdateTime-更新时间,Unix秒,BETWEEN 传 [起始秒,结束秒]</p>
 * @method integer getPageNumber() 获取<p>分页页码，从 0 开始</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>分页页码，从 0 开始</p>
 * @method integer getPageSize() 获取<p>每页数量，默认 10，最大 100</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数量，默认 10，最大 100</p>
 * @method QAQuery getQuery() 获取<p>查询条件（关键词 + 查询范围）</p>
 * @method void setQuery(QAQuery $Query) 设置<p>查询条件（关键词 + 查询范围）</p>
 * @method SummaryListSwitch getSummaryListSwitch() 获取<p>开关配置</p>
 * @method void setSummaryListSwitch(SummaryListSwitch $SummaryListSwitch) 设置<p>开关配置</p>
 */
class DescribeQASummaryListRequest extends AbstractModel
{
    /**
     * @var string <p>所属知识库 ID</p>
     */
    public $KbId;

    /**
     * @var array <p>过滤条件（多个 Filter 之间为 AND 关系，同一 Filter 的多个 Values 为 OR 关系）：Status-QA状态,枚举值,精确匹配; CategoryId-分类ID,精确匹配; SourceType-QA来源类型,枚举值,精确匹配; EffectiveDomain-生效作用域,精确匹配; DocId-关联文档ID,精确匹配;  CreateTime-创建时间,Unix秒,BETWEEN 传 [起始秒,结束秒]; UpdateTime-更新时间,Unix秒,BETWEEN 传 [起始秒,结束秒]</p>
     */
    public $FilterList;

    /**
     * @var integer <p>分页页码，从 0 开始</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页数量，默认 10，最大 100</p>
     */
    public $PageSize;

    /**
     * @var QAQuery <p>查询条件（关键词 + 查询范围）</p>
     */
    public $Query;

    /**
     * @var SummaryListSwitch <p>开关配置</p>
     */
    public $SummaryListSwitch;

    /**
     * @param string $KbId <p>所属知识库 ID</p>
     * @param array $FilterList <p>过滤条件（多个 Filter 之间为 AND 关系，同一 Filter 的多个 Values 为 OR 关系）：Status-QA状态,枚举值,精确匹配; CategoryId-分类ID,精确匹配; SourceType-QA来源类型,枚举值,精确匹配; EffectiveDomain-生效作用域,精确匹配; DocId-关联文档ID,精确匹配;  CreateTime-创建时间,Unix秒,BETWEEN 传 [起始秒,结束秒]; UpdateTime-更新时间,Unix秒,BETWEEN 传 [起始秒,结束秒]</p>
     * @param integer $PageNumber <p>分页页码，从 0 开始</p>
     * @param integer $PageSize <p>每页数量，默认 10，最大 100</p>
     * @param QAQuery $Query <p>查询条件（关键词 + 查询范围）</p>
     * @param SummaryListSwitch $SummaryListSwitch <p>开关配置</p>
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

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = new QAQuery();
            $this->Query->deserialize($param["Query"]);
        }

        if (array_key_exists("SummaryListSwitch",$param) and $param["SummaryListSwitch"] !== null) {
            $this->SummaryListSwitch = new SummaryListSwitch();
            $this->SummaryListSwitch->deserialize($param["SummaryListSwitch"]);
        }
    }
}
