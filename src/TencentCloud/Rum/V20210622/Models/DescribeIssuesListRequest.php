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
 * @method string getProductId() 获取<p>产品Id</p>
 * @method void setProductId(string $ProductId) 设置<p>产品Id</p>
 * @method string getFormList() 获取<p>接口调试专用，当 token 为空时，以这里的 value 作为筛选表单信息</p>
 * @method void setFormList(string $FormList) 设置<p>接口调试专用，当 token 为空时，以这里的 value 作为筛选表单信息</p>
 * @method string getFormListA() 获取<p>接口调试专用，对比模式下条件A，当 token 为空时，以这里的 value 作为筛选表单信息</p>
 * @method void setFormListA(string $FormListA) 设置<p>接口调试专用，对比模式下条件A，当 token 为空时，以这里的 value 作为筛选表单信息</p>
 * @method string getFormListB() 获取<p>接口调试专用，对比模式下条件B，当 token 为空时，以这里的 value 作为筛选表单信息</p>
 * @method void setFormListB(string $FormListB) 设置<p>接口调试专用，对比模式下条件B，当 token 为空时，以这里的 value 作为筛选表单信息</p>
 * @method string getParamToken() 获取<p>提供给前端使用，当填写本字段时，会覆盖 form_list 的值</p>
 * @method void setParamToken(string $ParamToken) 设置<p>提供给前端使用，当填写本字段时，会覆盖 form_list 的值</p>
 * @method integer getIssueType() 获取<p>问题类型</p>
 * @method void setIssueType(integer $IssueType) 设置<p>问题类型</p>
 * @method string getSortField() 获取<p>排序字段</p>
 * @method void setSortField(string $SortField) 设置<p>排序字段</p>
 * @method string getSortType() 获取<p>排序方式</p>
 * @method void setSortType(string $SortType) 设置<p>排序方式</p>
 * @method integer getPageSize() 获取<p>每页数目</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数目</p>
 * @method integer getPageNumber() 获取<p>页码</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码</p>
 * @method string getSortABRatio() 获取<p>问题对比列表模式下，用于标识是按照sort_field字段的A值排序还是B值还是ratio值</p>
 * @method void setSortABRatio(string $SortABRatio) 设置<p>问题对比列表模式下，用于标识是按照sort_field字段的A值排序还是B值还是ratio值</p>
 * @method boolean getCompare() 获取<p>模式：false:问题列表模式，true:对比列表模式</p>
 * @method void setCompare(boolean $Compare) 设置<p>模式：false:问题列表模式，true:对比列表模式</p>
 * @method integer getCompareStatus() 获取<p>对比状态 0:所有 1:新增 2：遗留 3:已解决</p>
 * @method void setCompareStatus(integer $CompareStatus) 设置<p>对比状态 0:所有 1:新增 2：遗留 3:已解决</p>
 * @method string getExtraData() 获取<p>拓展字段</p>
 * @method void setExtraData(string $ExtraData) 设置<p>拓展字段</p>
 * @method string getRequestHeader() 获取<p>请求头</p>
 * @method void setRequestHeader(string $RequestHeader) 设置<p>请求头</p>
 */
class DescribeIssuesListRequest extends AbstractModel
{
    /**
     * @var string <p>产品Id</p>
     */
    public $ProductId;

    /**
     * @var string <p>接口调试专用，当 token 为空时，以这里的 value 作为筛选表单信息</p>
     */
    public $FormList;

    /**
     * @var string <p>接口调试专用，对比模式下条件A，当 token 为空时，以这里的 value 作为筛选表单信息</p>
     */
    public $FormListA;

    /**
     * @var string <p>接口调试专用，对比模式下条件B，当 token 为空时，以这里的 value 作为筛选表单信息</p>
     */
    public $FormListB;

    /**
     * @var string <p>提供给前端使用，当填写本字段时，会覆盖 form_list 的值</p>
     */
    public $ParamToken;

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
     * @var integer <p>每页数目</p>
     */
    public $PageSize;

    /**
     * @var integer <p>页码</p>
     */
    public $PageNumber;

    /**
     * @var string <p>问题对比列表模式下，用于标识是按照sort_field字段的A值排序还是B值还是ratio值</p>
     */
    public $SortABRatio;

    /**
     * @var boolean <p>模式：false:问题列表模式，true:对比列表模式</p>
     */
    public $Compare;

    /**
     * @var integer <p>对比状态 0:所有 1:新增 2：遗留 3:已解决</p>
     */
    public $CompareStatus;

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
     * @param string $FormList <p>接口调试专用，当 token 为空时，以这里的 value 作为筛选表单信息</p>
     * @param string $FormListA <p>接口调试专用，对比模式下条件A，当 token 为空时，以这里的 value 作为筛选表单信息</p>
     * @param string $FormListB <p>接口调试专用，对比模式下条件B，当 token 为空时，以这里的 value 作为筛选表单信息</p>
     * @param string $ParamToken <p>提供给前端使用，当填写本字段时，会覆盖 form_list 的值</p>
     * @param integer $IssueType <p>问题类型</p>
     * @param string $SortField <p>排序字段</p>
     * @param string $SortType <p>排序方式</p>
     * @param integer $PageSize <p>每页数目</p>
     * @param integer $PageNumber <p>页码</p>
     * @param string $SortABRatio <p>问题对比列表模式下，用于标识是按照sort_field字段的A值排序还是B值还是ratio值</p>
     * @param boolean $Compare <p>模式：false:问题列表模式，true:对比列表模式</p>
     * @param integer $CompareStatus <p>对比状态 0:所有 1:新增 2：遗留 3:已解决</p>
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
