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
 * DescribeIssuesDistribution请求参数结构体
 *
 * @method string getProductId() 获取<p>产品Id</p>
 * @method void setProductId(string $ProductId) 设置<p>产品Id</p>
 * @method string getFormListString() 获取<p>接口调试专用，当 token 为空时，以这里的 value 作为筛选表单信息</p>
 * @method void setFormListString(string $FormListString) 设置<p>接口调试专用，当 token 为空时，以这里的 value 作为筛选表单信息</p>
 * @method string getDimType() 获取<p>分布维度是自定义维度时，填‘user_custom’</p>
 * @method void setDimType(string $DimType) 设置<p>分布维度是自定义维度时，填‘user_custom’</p>
 * @method string getDimension() 获取<p>维度，e.g. os_version, app_version, model等</p>
 * @method void setDimension(string $Dimension) 设置<p>维度，e.g. os_version, app_version, model等</p>
 * @method array getIntervals() 获取<p>数字类型字段的区间范围</p>
 * @method void setIntervals(array $Intervals) 设置<p>数字类型字段的区间范围</p>
 * @method string getParamToken() 获取<p>提供给前端使用，当填写本字段时，会覆盖 form_list 的值</p>
 * @method void setParamToken(string $ParamToken) 设置<p>提供给前端使用，当填写本字段时，会覆盖 form_list 的值</p>
 * @method string getIssueId() 获取<p>问题Id</p>
 * @method void setIssueId(string $IssueId) 设置<p>问题Id</p>
 * @method integer getIssueType() 获取<p>问题类型</p>
 * @method void setIssueType(integer $IssueType) 设置<p>问题类型</p>
 * @method integer getParamLimit() 获取<p>限制返回的个数，默认返回所有值</p>
 * @method void setParamLimit(integer $ParamLimit) 设置<p>限制返回的个数，默认返回所有值</p>
 * @method string getMapKey() 获取<p>键</p>
 * @method void setMapKey(string $MapKey) 设置<p>键</p>
 * @method string getMapName() 获取<p>名称</p>
 * @method void setMapName(string $MapName) 设置<p>名称</p>
 * @method integer getMetricType() 获取<p>指标类型</p>
 * @method void setMetricType(integer $MetricType) 设置<p>指标类型</p>
 * @method integer getPageSize() 获取<p>每页数目</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数目</p>
 * @method integer getPageNumber() 获取<p>页码</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码</p>
 * @method string getUserCustomKey() 获取<p>用户自定义维度key</p>
 * @method void setUserCustomKey(string $UserCustomKey) 设置<p>用户自定义维度key</p>
 * @method string getExtraData() 获取<p>拓展字段</p>
 * @method void setExtraData(string $ExtraData) 设置<p>拓展字段</p>
 * @method string getRequestHeader() 获取<p>请求头</p>
 * @method void setRequestHeader(string $RequestHeader) 设置<p>请求头</p>
 */
class DescribeIssuesDistributionRequest extends AbstractModel
{
    /**
     * @var string <p>产品Id</p>
     */
    public $ProductId;

    /**
     * @var string <p>接口调试专用，当 token 为空时，以这里的 value 作为筛选表单信息</p>
     */
    public $FormListString;

    /**
     * @var string <p>分布维度是自定义维度时，填‘user_custom’</p>
     */
    public $DimType;

    /**
     * @var string <p>维度，e.g. os_version, app_version, model等</p>
     */
    public $Dimension;

    /**
     * @var array <p>数字类型字段的区间范围</p>
     */
    public $Intervals;

    /**
     * @var string <p>提供给前端使用，当填写本字段时，会覆盖 form_list 的值</p>
     */
    public $ParamToken;

    /**
     * @var string <p>问题Id</p>
     */
    public $IssueId;

    /**
     * @var integer <p>问题类型</p>
     */
    public $IssueType;

    /**
     * @var integer <p>限制返回的个数，默认返回所有值</p>
     */
    public $ParamLimit;

    /**
     * @var string <p>键</p>
     */
    public $MapKey;

    /**
     * @var string <p>名称</p>
     */
    public $MapName;

    /**
     * @var integer <p>指标类型</p>
     */
    public $MetricType;

    /**
     * @var integer <p>每页数目</p>
     */
    public $PageSize;

    /**
     * @var integer <p>页码</p>
     */
    public $PageNumber;

    /**
     * @var string <p>用户自定义维度key</p>
     */
    public $UserCustomKey;

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
     * @param string $FormListString <p>接口调试专用，当 token 为空时，以这里的 value 作为筛选表单信息</p>
     * @param string $DimType <p>分布维度是自定义维度时，填‘user_custom’</p>
     * @param string $Dimension <p>维度，e.g. os_version, app_version, model等</p>
     * @param array $Intervals <p>数字类型字段的区间范围</p>
     * @param string $ParamToken <p>提供给前端使用，当填写本字段时，会覆盖 form_list 的值</p>
     * @param string $IssueId <p>问题Id</p>
     * @param integer $IssueType <p>问题类型</p>
     * @param integer $ParamLimit <p>限制返回的个数，默认返回所有值</p>
     * @param string $MapKey <p>键</p>
     * @param string $MapName <p>名称</p>
     * @param integer $MetricType <p>指标类型</p>
     * @param integer $PageSize <p>每页数目</p>
     * @param integer $PageNumber <p>页码</p>
     * @param string $UserCustomKey <p>用户自定义维度key</p>
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

        if (array_key_exists("FormListString",$param) and $param["FormListString"] !== null) {
            $this->FormListString = $param["FormListString"];
        }

        if (array_key_exists("DimType",$param) and $param["DimType"] !== null) {
            $this->DimType = $param["DimType"];
        }

        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }

        if (array_key_exists("Intervals",$param) and $param["Intervals"] !== null) {
            $this->Intervals = $param["Intervals"];
        }

        if (array_key_exists("ParamToken",$param) and $param["ParamToken"] !== null) {
            $this->ParamToken = $param["ParamToken"];
        }

        if (array_key_exists("IssueId",$param) and $param["IssueId"] !== null) {
            $this->IssueId = $param["IssueId"];
        }

        if (array_key_exists("IssueType",$param) and $param["IssueType"] !== null) {
            $this->IssueType = $param["IssueType"];
        }

        if (array_key_exists("ParamLimit",$param) and $param["ParamLimit"] !== null) {
            $this->ParamLimit = $param["ParamLimit"];
        }

        if (array_key_exists("MapKey",$param) and $param["MapKey"] !== null) {
            $this->MapKey = $param["MapKey"];
        }

        if (array_key_exists("MapName",$param) and $param["MapName"] !== null) {
            $this->MapName = $param["MapName"];
        }

        if (array_key_exists("MetricType",$param) and $param["MetricType"] !== null) {
            $this->MetricType = $param["MetricType"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("UserCustomKey",$param) and $param["UserCustomKey"] !== null) {
            $this->UserCustomKey = $param["UserCustomKey"];
        }

        if (array_key_exists("ExtraData",$param) and $param["ExtraData"] !== null) {
            $this->ExtraData = $param["ExtraData"];
        }

        if (array_key_exists("RequestHeader",$param) and $param["RequestHeader"] !== null) {
            $this->RequestHeader = $param["RequestHeader"];
        }
    }
}
