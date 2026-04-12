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
 * @method string getProductId() 获取产品Id
 * @method void setProductId(string $ProductId) 设置产品Id
 * @method CompareCondition getCompare() 获取需要对比的查询条件，没有则不填
 * @method void setCompare(CompareCondition $Compare) 设置需要对比的查询条件，没有则不填
 * @method CompareCondition getCondition() 获取查询条件
 * @method void setCondition(CompareCondition $Condition) 设置查询条件
 * @method integer getIssueType() 获取问题类型
 * @method void setIssueType(integer $IssueType) 设置问题类型
 * @method string getSortField() 获取排序字段
 * @method void setSortField(string $SortField) 设置排序字段
 * @method string getSortType() 获取排序方式
 * @method void setSortType(string $SortType) 设置排序方式
 * @method integer getTopNum() 获取topN
 * @method void setTopNum(integer $TopNum) 设置topN
 * @method string getExtraData() 获取拓展字段
 * @method void setExtraData(string $ExtraData) 设置拓展字段
 * @method string getRequestHeader() 获取请求头
 * @method void setRequestHeader(string $RequestHeader) 设置请求头
 */
class DescribeTopIssuesRequest extends AbstractModel
{
    /**
     * @var string 产品Id
     */
    public $ProductId;

    /**
     * @var CompareCondition 需要对比的查询条件，没有则不填
     */
    public $Compare;

    /**
     * @var CompareCondition 查询条件
     */
    public $Condition;

    /**
     * @var integer 问题类型
     */
    public $IssueType;

    /**
     * @var string 排序字段
     */
    public $SortField;

    /**
     * @var string 排序方式
     */
    public $SortType;

    /**
     * @var integer topN
     */
    public $TopNum;

    /**
     * @var string 拓展字段
     */
    public $ExtraData;

    /**
     * @var string 请求头
     */
    public $RequestHeader;

    /**
     * @param string $ProductId 产品Id
     * @param CompareCondition $Compare 需要对比的查询条件，没有则不填
     * @param CompareCondition $Condition 查询条件
     * @param integer $IssueType 问题类型
     * @param string $SortField 排序字段
     * @param string $SortType 排序方式
     * @param integer $TopNum topN
     * @param string $ExtraData 拓展字段
     * @param string $RequestHeader 请求头
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
