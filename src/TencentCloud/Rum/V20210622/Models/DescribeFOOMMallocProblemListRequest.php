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
 * DescribeFOOMMallocProblemList请求参数结构体
 *
 * @method string getProductId() 获取<p>产品Id</p>
 * @method void setProductId(string $ProductId) 设置<p>产品Id</p>
 * @method string getParamToken() 获取<p>提供给前端使用，当填写本字段时，会覆盖 formlist 的值</p>
 * @method void setParamToken(string $ParamToken) 设置<p>提供给前端使用，当填写本字段时，会覆盖 formlist 的值</p>
 * @method string getFormListString() 获取<p>接口调试专用，当 token 为空时，以这里的 value 作为筛选表单信息</p>
 * @method void setFormListString(string $FormListString) 设置<p>接口调试专用，当 token 为空时，以这里的 value 作为筛选表单信息</p>
 * @method integer getPageNumber() 获取<p>当前页码</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>当前页码</p>
 * @method integer getPageSize() 获取<p>每页展示最大数量</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页展示最大数量</p>
 * @method string getSortField() 获取<p>排序字段</p>
 * @method void setSortField(string $SortField) 设置<p>排序字段</p>
 * @method string getSortType() 获取<p>排序类型</p>
 * @method void setSortType(string $SortType) 设置<p>排序类型</p>
 * @method string getExtraData() 获取<p>拓展数据</p>
 * @method void setExtraData(string $ExtraData) 设置<p>拓展数据</p>
 * @method string getRequestHeader() 获取<p>请求头</p>
 * @method void setRequestHeader(string $RequestHeader) 设置<p>请求头</p>
 */
class DescribeFOOMMallocProblemListRequest extends AbstractModel
{
    /**
     * @var string <p>产品Id</p>
     */
    public $ProductId;

    /**
     * @var string <p>提供给前端使用，当填写本字段时，会覆盖 formlist 的值</p>
     */
    public $ParamToken;

    /**
     * @var string <p>接口调试专用，当 token 为空时，以这里的 value 作为筛选表单信息</p>
     */
    public $FormListString;

    /**
     * @var integer <p>当前页码</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页展示最大数量</p>
     */
    public $PageSize;

    /**
     * @var string <p>排序字段</p>
     */
    public $SortField;

    /**
     * @var string <p>排序类型</p>
     */
    public $SortType;

    /**
     * @var string <p>拓展数据</p>
     */
    public $ExtraData;

    /**
     * @var string <p>请求头</p>
     */
    public $RequestHeader;

    /**
     * @param string $ProductId <p>产品Id</p>
     * @param string $ParamToken <p>提供给前端使用，当填写本字段时，会覆盖 formlist 的值</p>
     * @param string $FormListString <p>接口调试专用，当 token 为空时，以这里的 value 作为筛选表单信息</p>
     * @param integer $PageNumber <p>当前页码</p>
     * @param integer $PageSize <p>每页展示最大数量</p>
     * @param string $SortField <p>排序字段</p>
     * @param string $SortType <p>排序类型</p>
     * @param string $ExtraData <p>拓展数据</p>
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

        if (array_key_exists("ParamToken",$param) and $param["ParamToken"] !== null) {
            $this->ParamToken = $param["ParamToken"];
        }

        if (array_key_exists("FormListString",$param) and $param["FormListString"] !== null) {
            $this->FormListString = $param["FormListString"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("SortField",$param) and $param["SortField"] !== null) {
            $this->SortField = $param["SortField"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("ExtraData",$param) and $param["ExtraData"] !== null) {
            $this->ExtraData = $param["ExtraData"];
        }

        if (array_key_exists("RequestHeader",$param) and $param["RequestHeader"] !== null) {
            $this->RequestHeader = $param["RequestHeader"];
        }
    }
}
