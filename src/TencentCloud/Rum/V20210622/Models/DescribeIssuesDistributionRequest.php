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
 * @method string getProductId() 获取产品Id
 * @method void setProductId(string $ProductId) 设置产品Id
 * @method string getFormListString() 获取接口调试专用，当 token 为空时，以这里的 value 作为筛选表单信息
 * @method void setFormListString(string $FormListString) 设置接口调试专用，当 token 为空时，以这里的 value 作为筛选表单信息
 * @method string getDimType() 获取分布维度是自定义维度时，填‘user_custom’
 * @method void setDimType(string $DimType) 设置分布维度是自定义维度时，填‘user_custom’
 * @method string getDimension() 获取维度，e.g. os_version, app_version, model等
 * @method void setDimension(string $Dimension) 设置维度，e.g. os_version, app_version, model等
 * @method array getIntervals() 获取数字类型字段的区间范围
 * @method void setIntervals(array $Intervals) 设置数字类型字段的区间范围
 * @method string getParamToken() 获取提供给前端使用，当填写本字段时，会覆盖 form_list 的值
 * @method void setParamToken(string $ParamToken) 设置提供给前端使用，当填写本字段时，会覆盖 form_list 的值
 * @method string getIssueId() 获取问题Id
 * @method void setIssueId(string $IssueId) 设置问题Id
 * @method integer getIssueType() 获取问题类型
 * @method void setIssueType(integer $IssueType) 设置问题类型
 * @method integer getParamLimit() 获取限制返回的个数，默认返回所有值
 * @method void setParamLimit(integer $ParamLimit) 设置限制返回的个数，默认返回所有值
 * @method string getMapKey() 获取键
 * @method void setMapKey(string $MapKey) 设置键
 * @method string getMapName() 获取名称
 * @method void setMapName(string $MapName) 设置名称
 * @method integer getMetricType() 获取指标类型
 * @method void setMetricType(integer $MetricType) 设置指标类型
 * @method integer getPageSize() 获取每页数目
 * @method void setPageSize(integer $PageSize) 设置每页数目
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method string getUserCustomKey() 获取用户自定义维度key
 * @method void setUserCustomKey(string $UserCustomKey) 设置用户自定义维度key
 * @method string getExtraData() 获取拓展字段
 * @method void setExtraData(string $ExtraData) 设置拓展字段
 * @method string getRequestHeader() 获取请求头
 * @method void setRequestHeader(string $RequestHeader) 设置请求头
 */
class DescribeIssuesDistributionRequest extends AbstractModel
{
    /**
     * @var string 产品Id
     */
    public $ProductId;

    /**
     * @var string 接口调试专用，当 token 为空时，以这里的 value 作为筛选表单信息
     */
    public $FormListString;

    /**
     * @var string 分布维度是自定义维度时，填‘user_custom’
     */
    public $DimType;

    /**
     * @var string 维度，e.g. os_version, app_version, model等
     */
    public $Dimension;

    /**
     * @var array 数字类型字段的区间范围
     */
    public $Intervals;

    /**
     * @var string 提供给前端使用，当填写本字段时，会覆盖 form_list 的值
     */
    public $ParamToken;

    /**
     * @var string 问题Id
     */
    public $IssueId;

    /**
     * @var integer 问题类型
     */
    public $IssueType;

    /**
     * @var integer 限制返回的个数，默认返回所有值
     */
    public $ParamLimit;

    /**
     * @var string 键
     */
    public $MapKey;

    /**
     * @var string 名称
     */
    public $MapName;

    /**
     * @var integer 指标类型
     */
    public $MetricType;

    /**
     * @var integer 每页数目
     */
    public $PageSize;

    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var string 用户自定义维度key
     */
    public $UserCustomKey;

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
     * @param string $FormListString 接口调试专用，当 token 为空时，以这里的 value 作为筛选表单信息
     * @param string $DimType 分布维度是自定义维度时，填‘user_custom’
     * @param string $Dimension 维度，e.g. os_version, app_version, model等
     * @param array $Intervals 数字类型字段的区间范围
     * @param string $ParamToken 提供给前端使用，当填写本字段时，会覆盖 form_list 的值
     * @param string $IssueId 问题Id
     * @param integer $IssueType 问题类型
     * @param integer $ParamLimit 限制返回的个数，默认返回所有值
     * @param string $MapKey 键
     * @param string $MapName 名称
     * @param integer $MetricType 指标类型
     * @param integer $PageSize 每页数目
     * @param integer $PageNumber 页码
     * @param string $UserCustomKey 用户自定义维度key
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
