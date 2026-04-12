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
 * DescribeLagANRProblemFeatureAccounts请求参数结构体
 *
 * @method string getProductId() 获取产品Id
 * @method void setProductId(string $ProductId) 设置产品Id
 * @method string getFormListString() 获取接口调试专用，当 token 为空时，以这里的 value 作为筛选表单信息
 * @method void setFormListString(string $FormListString) 设置接口调试专用，当 token 为空时，以这里的 value 作为筛选表单信息
 * @method string getParamToken() 获取提供给前端使用，当填写本字段时，会覆盖 formlist 的值
 * @method void setParamToken(string $ParamToken) 设置提供给前端使用，当填写本字段时，会覆盖 formlist 的值
 * @method string getFeature() 获取问题特征
 * @method void setFeature(string $Feature) 设置问题特征
 * @method string getSortField() 获取排序字段
 * @method void setSortField(string $SortField) 设置排序字段
 * @method string getSortType() 获取排序类型
 * @method void setSortType(string $SortType) 设置排序类型
 * @method integer getPageNumber() 获取当前页码
 * @method void setPageNumber(integer $PageNumber) 设置当前页码
 * @method integer getPageSize() 获取每页展示最大数量
 * @method void setPageSize(integer $PageSize) 设置每页展示最大数量
 * @method string getExtraData() 获取拓展数据
 * @method void setExtraData(string $ExtraData) 设置拓展数据
 * @method string getRequestHeader() 获取请求头
 * @method void setRequestHeader(string $RequestHeader) 设置请求头
 */
class DescribeLagANRProblemFeatureAccountsRequest extends AbstractModel
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
     * @var string 提供给前端使用，当填写本字段时，会覆盖 formlist 的值
     */
    public $ParamToken;

    /**
     * @var string 问题特征
     */
    public $Feature;

    /**
     * @var string 排序字段
     */
    public $SortField;

    /**
     * @var string 排序类型
     */
    public $SortType;

    /**
     * @var integer 当前页码
     */
    public $PageNumber;

    /**
     * @var integer 每页展示最大数量
     */
    public $PageSize;

    /**
     * @var string 拓展数据
     */
    public $ExtraData;

    /**
     * @var string 请求头
     */
    public $RequestHeader;

    /**
     * @param string $ProductId 产品Id
     * @param string $FormListString 接口调试专用，当 token 为空时，以这里的 value 作为筛选表单信息
     * @param string $ParamToken 提供给前端使用，当填写本字段时，会覆盖 formlist 的值
     * @param string $Feature 问题特征
     * @param string $SortField 排序字段
     * @param string $SortType 排序类型
     * @param integer $PageNumber 当前页码
     * @param integer $PageSize 每页展示最大数量
     * @param string $ExtraData 拓展数据
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

        if (array_key_exists("ParamToken",$param) and $param["ParamToken"] !== null) {
            $this->ParamToken = $param["ParamToken"];
        }

        if (array_key_exists("Feature",$param) and $param["Feature"] !== null) {
            $this->Feature = $param["Feature"];
        }

        if (array_key_exists("SortField",$param) and $param["SortField"] !== null) {
            $this->SortField = $param["SortField"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ExtraData",$param) and $param["ExtraData"] !== null) {
            $this->ExtraData = $param["ExtraData"];
        }

        if (array_key_exists("RequestHeader",$param) and $param["RequestHeader"] !== null) {
            $this->RequestHeader = $param["RequestHeader"];
        }
    }
}
