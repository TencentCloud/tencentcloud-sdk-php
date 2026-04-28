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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWorkspaces请求参数结构体
 *
 * @method string getTiProjectId() 获取<p>TI工作空间ID</p><p>仅用于“工作空间”白名单功能。如需使用，请联系TI管理员开通白名单。</p>
 * @method void setTiProjectId(string $TiProjectId) 设置<p>TI工作空间ID</p><p>仅用于“工作空间”白名单功能。如需使用，请联系TI管理员开通白名单。</p>
 * @method array getFilters() 获取<p>过滤条件</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件</p>
 * @method integer getOffset() 获取<p>偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量</p>
 * @method integer getLimit() 获取<p>数量</p>
 * @method void setLimit(integer $Limit) 设置<p>数量</p>
 * @method string getOrderField() 获取<p>排序字段</p>
 * @method void setOrderField(string $OrderField) 设置<p>排序字段</p>
 * @method string getOrder() 获取<p>排序方式</p>
 * @method void setOrder(string $Order) 设置<p>排序方式</p>
 */
class DescribeWorkspacesRequest extends AbstractModel
{
    /**
     * @var string <p>TI工作空间ID</p><p>仅用于“工作空间”白名单功能。如需使用，请联系TI管理员开通白名单。</p>
     */
    public $TiProjectId;

    /**
     * @var array <p>过滤条件</p>
     */
    public $Filters;

    /**
     * @var integer <p>偏移量</p>
     */
    public $Offset;

    /**
     * @var integer <p>数量</p>
     */
    public $Limit;

    /**
     * @var string <p>排序字段</p>
     */
    public $OrderField;

    /**
     * @var string <p>排序方式</p>
     */
    public $Order;

    /**
     * @param string $TiProjectId <p>TI工作空间ID</p><p>仅用于“工作空间”白名单功能。如需使用，请联系TI管理员开通白名单。</p>
     * @param array $Filters <p>过滤条件</p>
     * @param integer $Offset <p>偏移量</p>
     * @param integer $Limit <p>数量</p>
     * @param string $OrderField <p>排序字段</p>
     * @param string $Order <p>排序方式</p>
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
        if (array_key_exists("TiProjectId",$param) and $param["TiProjectId"] !== null) {
            $this->TiProjectId = $param["TiProjectId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
