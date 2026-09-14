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
 * 检索过滤
 *
 * @method integer getFilterType() 获取<p>检索过滤类型<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>SEARCH_FILTER_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_FILTER_TYPE_CUSTOMER_LABEL_VALUE</td><td>1</td><td>用户自定义标签值</td></tr><tr><td>SEARCH_FILTER_TYPE_CUSTOMER_LABEL_VALUE_ID</td><td>2</td><td>用户自定义标签值ID</td></tr><tr><td>SEARCH_FILTER_TYPE_DOC_ID</td><td>3</td><td>指定文档 ID 检索</td></tr><tr><td>SEARCH_FILTER_TYPE_DOC_CATEGORY_ID</td><td>4</td><td>指定文档分类 ID 检索</td></tr><tr><td>SEARCH_FILTER_TYPE_DB_TABLE_ID</td><td>5</td><td>指定数据库表 ID 检索</td></tr><tr><td>SEARCH_FILTER_TYPE_KB_SCHEMA_ID</td><td>6</td><td>指定知识库 schema ID</td></tr></tbody></table></p>
 * @method void setFilterType(integer $FilterType) 设置<p>检索过滤类型<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>SEARCH_FILTER_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_FILTER_TYPE_CUSTOMER_LABEL_VALUE</td><td>1</td><td>用户自定义标签值</td></tr><tr><td>SEARCH_FILTER_TYPE_CUSTOMER_LABEL_VALUE_ID</td><td>2</td><td>用户自定义标签值ID</td></tr><tr><td>SEARCH_FILTER_TYPE_DOC_ID</td><td>3</td><td>指定文档 ID 检索</td></tr><tr><td>SEARCH_FILTER_TYPE_DOC_CATEGORY_ID</td><td>4</td><td>指定文档分类 ID 检索</td></tr><tr><td>SEARCH_FILTER_TYPE_DB_TABLE_ID</td><td>5</td><td>指定数据库表 ID 检索</td></tr><tr><td>SEARCH_FILTER_TYPE_KB_SCHEMA_ID</td><td>6</td><td>指定知识库 schema ID</td></tr></tbody></table></p>
 * @method array getFilterValueList() 获取<p>过滤值列表，根据SearchFilterType取值1：传自定义标签值；2：传自定义标签值ID；3：传文档ID；4：传分类ID</p>
 * @method void setFilterValueList(array $FilterValueList) 设置<p>过滤值列表，根据SearchFilterType取值1：传自定义标签值；2：传自定义标签值ID；3：传文档ID；4：传分类ID</p>
 * @method string getLabelId() 获取<p>用户自定义标签 ID</p>
 * @method void setLabelId(string $LabelId) 设置<p>用户自定义标签 ID</p>
 * @method integer getLogicOp() 获取<p>逻辑运算符：AND 或 OR<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>LOGIC_OPR_NOOP</td><td>0</td><td></td></tr><tr><td>LOGIC_OPR_AND</td><td>1</td><td></td></tr><tr><td>LOGIC_OPR_OR</td><td>2</td><td></td></tr></tbody></table></p>
 * @method void setLogicOp(integer $LogicOp) 设置<p>逻辑运算符：AND 或 OR<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>LOGIC_OPR_NOOP</td><td>0</td><td></td></tr><tr><td>LOGIC_OPR_AND</td><td>1</td><td></td></tr><tr><td>LOGIC_OPR_OR</td><td>2</td><td></td></tr></tbody></table></p>
 * @method array getSearchFilterList() 获取<p>嵌套检索过滤</p>
 * @method void setSearchFilterList(array $SearchFilterList) 设置<p>嵌套检索过滤</p>
 */
class SearchFilter extends AbstractModel
{
    /**
     * @var integer <p>检索过滤类型<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>SEARCH_FILTER_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_FILTER_TYPE_CUSTOMER_LABEL_VALUE</td><td>1</td><td>用户自定义标签值</td></tr><tr><td>SEARCH_FILTER_TYPE_CUSTOMER_LABEL_VALUE_ID</td><td>2</td><td>用户自定义标签值ID</td></tr><tr><td>SEARCH_FILTER_TYPE_DOC_ID</td><td>3</td><td>指定文档 ID 检索</td></tr><tr><td>SEARCH_FILTER_TYPE_DOC_CATEGORY_ID</td><td>4</td><td>指定文档分类 ID 检索</td></tr><tr><td>SEARCH_FILTER_TYPE_DB_TABLE_ID</td><td>5</td><td>指定数据库表 ID 检索</td></tr><tr><td>SEARCH_FILTER_TYPE_KB_SCHEMA_ID</td><td>6</td><td>指定知识库 schema ID</td></tr></tbody></table></p>
     */
    public $FilterType;

    /**
     * @var array <p>过滤值列表，根据SearchFilterType取值1：传自定义标签值；2：传自定义标签值ID；3：传文档ID；4：传分类ID</p>
     */
    public $FilterValueList;

    /**
     * @var string <p>用户自定义标签 ID</p>
     */
    public $LabelId;

    /**
     * @var integer <p>逻辑运算符：AND 或 OR<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>LOGIC_OPR_NOOP</td><td>0</td><td></td></tr><tr><td>LOGIC_OPR_AND</td><td>1</td><td></td></tr><tr><td>LOGIC_OPR_OR</td><td>2</td><td></td></tr></tbody></table></p>
     */
    public $LogicOp;

    /**
     * @var array <p>嵌套检索过滤</p>
     */
    public $SearchFilterList;

    /**
     * @param integer $FilterType <p>检索过滤类型<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>SEARCH_FILTER_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_FILTER_TYPE_CUSTOMER_LABEL_VALUE</td><td>1</td><td>用户自定义标签值</td></tr><tr><td>SEARCH_FILTER_TYPE_CUSTOMER_LABEL_VALUE_ID</td><td>2</td><td>用户自定义标签值ID</td></tr><tr><td>SEARCH_FILTER_TYPE_DOC_ID</td><td>3</td><td>指定文档 ID 检索</td></tr><tr><td>SEARCH_FILTER_TYPE_DOC_CATEGORY_ID</td><td>4</td><td>指定文档分类 ID 检索</td></tr><tr><td>SEARCH_FILTER_TYPE_DB_TABLE_ID</td><td>5</td><td>指定数据库表 ID 检索</td></tr><tr><td>SEARCH_FILTER_TYPE_KB_SCHEMA_ID</td><td>6</td><td>指定知识库 schema ID</td></tr></tbody></table></p>
     * @param array $FilterValueList <p>过滤值列表，根据SearchFilterType取值1：传自定义标签值；2：传自定义标签值ID；3：传文档ID；4：传分类ID</p>
     * @param string $LabelId <p>用户自定义标签 ID</p>
     * @param integer $LogicOp <p>逻辑运算符：AND 或 OR<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>LOGIC_OPR_NOOP</td><td>0</td><td></td></tr><tr><td>LOGIC_OPR_AND</td><td>1</td><td></td></tr><tr><td>LOGIC_OPR_OR</td><td>2</td><td></td></tr></tbody></table></p>
     * @param array $SearchFilterList <p>嵌套检索过滤</p>
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
        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("FilterValueList",$param) and $param["FilterValueList"] !== null) {
            $this->FilterValueList = $param["FilterValueList"];
        }

        if (array_key_exists("LabelId",$param) and $param["LabelId"] !== null) {
            $this->LabelId = $param["LabelId"];
        }

        if (array_key_exists("LogicOp",$param) and $param["LogicOp"] !== null) {
            $this->LogicOp = $param["LogicOp"];
        }

        if (array_key_exists("SearchFilterList",$param) and $param["SearchFilterList"] !== null) {
            $this->SearchFilterList = [];
            foreach ($param["SearchFilterList"] as $key => $value){
                $obj = new SearchFilter();
                $obj->deserialize($value);
                array_push($this->SearchFilterList, $obj);
            }
        }
    }
}
