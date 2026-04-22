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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopIssues请求参数结构体
 *
 * @method string getProductId() 获取<p>产品Id</p>
 * @method void setProductId(string $ProductId) 设置<p>产品Id</p>
 * @method CompareCondition getCompare() 获取<p>需要对比的查询条件，没有则不填</p>
 * @method void setCompare(CompareCondition $Compare) 设置<p>需要对比的查询条件，没有则不填</p>
 * @method CompareCondition getCondition() 获取<p>查询条件</p>
 * @method void setCondition(CompareCondition $Condition) 设置<p>查询条件</p>
 * @method integer getIssueType() 获取<p>问题类型</p>
 * @method void setIssueType(integer $IssueType) 设置<p>问题类型</p>
 * @method string getSortField() 获取<p>排序字段</p>
 * @method void setSortField(string $SortField) 设置<p>排序字段</p>
 * @method string getSortType() 获取<p>排序方式</p>
 * @method void setSortType(string $SortType) 设置<p>排序方式</p>
 * @method integer getTopNum() 获取<p>topN</p>
 * @method void setTopNum(integer $TopNum) 设置<p>topN</p>
 * @method string getExtraData() 获取<p>拓展字段</p>
 * @method void setExtraData(string $ExtraData) 设置<p>拓展字段</p>
 * @method string getRequestHeader() 获取<p>请求头</p>
 * @method void setRequestHeader(string $RequestHeader) 设置<p>请求头</p>
 */
class DescribeTopIssuesRequest extends AbstractModel
{
    /**
     * @var string <p>产品Id</p>
     */
    public $ProductId;

    /**
     * @var CompareCondition <p>需要对比的查询条件，没有则不填</p>
     */
    public $Compare;

    /**
     * @var CompareCondition <p>查询条件</p>
     */
    public $Condition;

    /**
     * @var integer <p>问题类型</p>
     */
    public $IssueType;

    /**
     * @var string <p>排序字段</p>
     */
    public $SortField;

    /**
     * @var string <p>排序方式</p>
     */
    public $SortType;

    /**
     * @var integer <p>topN</p>
     */
    public $TopNum;

    /**
     * @var string <p>拓展字段</p>
     */
    public $ExtraData;

    /**
     * @var string <p>请求头</p>
     */
    public $RequestHeader;

    /**
     * @param string $ProductId <p>产品Id</p>
     * @param CompareCondition $Compare <p>需要对比的查询条件，没有则不填</p>
     * @param CompareCondition $Condition <p>查询条件</p>
     * @param integer $IssueType <p>问题类型</p>
     * @param string $SortField <p>排序字段</p>
     * @param string $SortType <p>排序方式</p>
     * @param integer $TopNum <p>topN</p>
     * @param string $ExtraData <p>拓展字段</p>
     * @param string $RequestHeader <p>请求头</p>
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Compare",$param) and $param["Compare"] !== null) {
            $this->Compare = new CompareCondition();
            $this->Compare->deserialize($param["Compare"]);
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = new CompareCondition();
            $this->Condition->deserialize($param["Condition"]);
        }

        if (array_key_exists("IssueType",$param) and $param["IssueType"] !== null) {
            $this->IssueType = $param["IssueType"];
        }

        if (array_key_exists("SortField",$param) and $param["SortField"] !== null) {
            $this->SortField = $param["SortField"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("TopNum",$param) and $param["TopNum"] !== null) {
            $this->TopNum = $param["TopNum"];
        }

        if (array_key_exists("ExtraData",$param) and $param["ExtraData"] !== null) {
            $this->ExtraData = $param["ExtraData"];
        }

        if (array_key_exists("RequestHeader",$param) and $param["RequestHeader"] !== null) {
            $this->RequestHeader = $param["RequestHeader"];
        }
    }
}
