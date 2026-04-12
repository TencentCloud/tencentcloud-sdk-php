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
 * DescribeIssuesList请求参数结构体
 *
 * @method string getProductId() 获取产品Id
 * @method void setProductId(string $ProductId) 设置产品Id
 * @method string getFormList() 获取接口调试专用，当 token 为空时，以这里的 value 作为筛选表单信息
 * @method void setFormList(string $FormList) 设置接口调试专用，当 token 为空时，以这里的 value 作为筛选表单信息
 * @method string getFormListA() 获取接口调试专用，对比模式下条件A，当 token 为空时，以这里的 value 作为筛选表单信息
 * @method void setFormListA(string $FormListA) 设置接口调试专用，对比模式下条件A，当 token 为空时，以这里的 value 作为筛选表单信息
 * @method string getFormListB() 获取接口调试专用，对比模式下条件B，当 token 为空时，以这里的 value 作为筛选表单信息
 * @method void setFormListB(string $FormListB) 设置接口调试专用，对比模式下条件B，当 token 为空时，以这里的 value 作为筛选表单信息
 * @method string getParamToken() 获取提供给前端使用，当填写本字段时，会覆盖 form_list 的值
 * @method void setParamToken(string $ParamToken) 设置提供给前端使用，当填写本字段时，会覆盖 form_list 的值
 * @method integer getIssueType() 获取问题类型
 * @method void setIssueType(integer $IssueType) 设置问题类型
 * @method string getSortField() 获取排序字段
 * @method void setSortField(string $SortField) 设置排序字段
 * @method string getSortType() 获取排序方式
 * @method void setSortType(string $SortType) 设置排序方式
 * @method integer getPageSize() 获取每页数目
 * @method void setPageSize(integer $PageSize) 设置每页数目
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method string getSortABRatio() 获取问题对比列表模式下，用于标识是按照sort_field字段的A值排序还是B值还是ratio值
 * @method void setSortABRatio(string $SortABRatio) 设置问题对比列表模式下，用于标识是按照sort_field字段的A值排序还是B值还是ratio值
 * @method boolean getCompare() 获取模式：false:问题列表模式，true:对比列表模式
 * @method void setCompare(boolean $Compare) 设置模式：false:问题列表模式，true:对比列表模式
 * @method integer getCompareStatus() 获取对比状态 0:所有 1:新增 2：遗留 3:已解决
 * @method void setCompareStatus(integer $CompareStatus) 设置对比状态 0:所有 1:新增 2：遗留 3:已解决
 * @method string getExtraData() 获取拓展字段
 * @method void setExtraData(string $ExtraData) 设置拓展字段
 * @method string getRequestHeader() 获取请求头
 * @method void setRequestHeader(string $RequestHeader) 设置请求头
 */
class DescribeIssuesListRequest extends AbstractModel
{
    /**
     * @var string 产品Id
     */
    public $ProductId;

    /**
     * @var string 接口调试专用，当 token 为空时，以这里的 value 作为筛选表单信息
     */
    public $FormList;

    /**
     * @var string 接口调试专用，对比模式下条件A，当 token 为空时，以这里的 value 作为筛选表单信息
     */
    public $FormListA;

    /**
     * @var string 接口调试专用，对比模式下条件B，当 token 为空时，以这里的 value 作为筛选表单信息
     */
    public $FormListB;

    /**
     * @var string 提供给前端使用，当填写本字段时，会覆盖 form_list 的值
     */
    public $ParamToken;

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
     * @var integer 每页数目
     */
    public $PageSize;

    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var string 问题对比列表模式下，用于标识是按照sort_field字段的A值排序还是B值还是ratio值
     */
    public $SortABRatio;

    /**
     * @var boolean 模式：false:问题列表模式，true:对比列表模式
     */
    public $Compare;

    /**
     * @var integer 对比状态 0:所有 1:新增 2：遗留 3:已解决
     */
    public $CompareStatus;

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
     * @param string $FormList 接口调试专用，当 token 为空时，以这里的 value 作为筛选表单信息
     * @param string $FormListA 接口调试专用，对比模式下条件A，当 token 为空时，以这里的 value 作为筛选表单信息
     * @param string $FormListB 接口调试专用，对比模式下条件B，当 token 为空时，以这里的 value 作为筛选表单信息
     * @param string $ParamToken 提供给前端使用，当填写本字段时，会覆盖 form_list 的值
     * @param integer $IssueType 问题类型
     * @param string $SortField 排序字段
     * @param string $SortType 排序方式
     * @param integer $PageSize 每页数目
     * @param integer $PageNumber 页码
     * @param string $SortABRatio 问题对比列表模式下，用于标识是按照sort_field字段的A值排序还是B值还是ratio值
     * @param boolean $Compare 模式：false:问题列表模式，true:对比列表模式
     * @param integer $CompareStatus 对比状态 0:所有 1:新增 2：遗留 3:已解决
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

        if (array_key_exists("FormList",$param) and $param["FormList"] !== null) {
            $this->FormList = $param["FormList"];
        }

        if (array_key_exists("FormListA",$param) and $param["FormListA"] !== null) {
            $this->FormListA = $param["FormListA"];
        }

        if (array_key_exists("FormListB",$param) and $param["FormListB"] !== null) {
            $this->FormListB = $param["FormListB"];
        }

        if (array_key_exists("ParamToken",$param) and $param["ParamToken"] !== null) {
            $this->ParamToken = $param["ParamToken"];
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

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("SortABRatio",$param) and $param["SortABRatio"] !== null) {
            $this->SortABRatio = $param["SortABRatio"];
        }

        if (array_key_exists("Compare",$param) and $param["Compare"] !== null) {
            $this->Compare = $param["Compare"];
        }

        if (array_key_exists("CompareStatus",$param) and $param["CompareStatus"] !== null) {
            $this->CompareStatus = $param["CompareStatus"];
        }

        if (array_key_exists("ExtraData",$param) and $param["ExtraData"] !== null) {
            $this->ExtraData = $param["ExtraData"];
        }

        if (array_key_exists("RequestHeader",$param) and $param["RequestHeader"] !== null) {
            $this->RequestHeader = $param["RequestHeader"];
        }
    }
}
