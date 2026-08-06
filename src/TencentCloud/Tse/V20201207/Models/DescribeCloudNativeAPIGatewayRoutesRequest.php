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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudNativeAPIGatewayRoutes请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关ID</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关ID</p>
 * @method integer getLimit() 获取<p>翻页单页查询限制数量[0,1000], 默认值0</p>
 * @method void setLimit(integer $Limit) 设置<p>翻页单页查询限制数量[0,1000], 默认值0</p>
 * @method integer getOffset() 获取<p>翻页单页偏移量，默认值0</p>
 * @method void setOffset(integer $Offset) 设置<p>翻页单页偏移量，默认值0</p>
 * @method string getServiceName() 获取<p>服务的名字，精确匹配</p>
 * @method void setServiceName(string $ServiceName) 设置<p>服务的名字，精确匹配</p>
 * @method string getRouteName() 获取<p>路由的名字，精确匹配</p>
 * @method void setRouteName(string $RouteName) 设置<p>路由的名字，精确匹配</p>
 * @method array getFilters() 获取<p>过滤条件，多个过滤条件之间是与的关系，支持 name, path, host, method, service, protocol</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件，多个过滤条件之间是与的关系，支持 name, path, host, method, service, protocol</p>
 * @method array getRouteTypes() 获取<p>路由类型</p>
 * @method void setRouteTypes(array $RouteTypes) 设置<p>路由类型</p>
 * @method boolean getGrayRoutesFirst() 获取<p>是否将灰度规则可能带来的路由排在原始路由前</p>
 * @method void setGrayRoutesFirst(boolean $GrayRoutesFirst) 设置<p>是否将灰度规则可能带来的路由排在原始路由前</p>
 * @method string getOrderField() 获取<p>排序字段</p>
 * @method void setOrderField(string $OrderField) 设置<p>排序字段</p>
 * @method string getOrderType() 获取<p>排序方式</p><p>枚举值：</p><ul><li>DESC： 降序</li><li>ASC： 升序</li></ul>
 * @method void setOrderType(string $OrderType) 设置<p>排序方式</p><p>枚举值：</p><ul><li>DESC： 降序</li><li>ASC： 升序</li></ul>
 */
class DescribeCloudNativeAPIGatewayRoutesRequest extends AbstractModel
{
    /**
     * @var string <p>网关ID</p>
     */
    public $GatewayId;

    /**
     * @var integer <p>翻页单页查询限制数量[0,1000], 默认值0</p>
     */
    public $Limit;

    /**
     * @var integer <p>翻页单页偏移量，默认值0</p>
     */
    public $Offset;

    /**
     * @var string <p>服务的名字，精确匹配</p>
     */
    public $ServiceName;

    /**
     * @var string <p>路由的名字，精确匹配</p>
     */
    public $RouteName;

    /**
     * @var array <p>过滤条件，多个过滤条件之间是与的关系，支持 name, path, host, method, service, protocol</p>
     */
    public $Filters;

    /**
     * @var array <p>路由类型</p>
     */
    public $RouteTypes;

    /**
     * @var boolean <p>是否将灰度规则可能带来的路由排在原始路由前</p>
     */
    public $GrayRoutesFirst;

    /**
     * @var string <p>排序字段</p>
     */
    public $OrderField;

    /**
     * @var string <p>排序方式</p><p>枚举值：</p><ul><li>DESC： 降序</li><li>ASC： 升序</li></ul>
     */
    public $OrderType;

    /**
     * @param string $GatewayId <p>网关ID</p>
     * @param integer $Limit <p>翻页单页查询限制数量[0,1000], 默认值0</p>
     * @param integer $Offset <p>翻页单页偏移量，默认值0</p>
     * @param string $ServiceName <p>服务的名字，精确匹配</p>
     * @param string $RouteName <p>路由的名字，精确匹配</p>
     * @param array $Filters <p>过滤条件，多个过滤条件之间是与的关系，支持 name, path, host, method, service, protocol</p>
     * @param array $RouteTypes <p>路由类型</p>
     * @param boolean $GrayRoutesFirst <p>是否将灰度规则可能带来的路由排在原始路由前</p>
     * @param string $OrderField <p>排序字段</p>
     * @param string $OrderType <p>排序方式</p><p>枚举值：</p><ul><li>DESC： 降序</li><li>ASC： 升序</li></ul>
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("RouteName",$param) and $param["RouteName"] !== null) {
            $this->RouteName = $param["RouteName"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ListFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("RouteTypes",$param) and $param["RouteTypes"] !== null) {
            $this->RouteTypes = $param["RouteTypes"];
        }

        if (array_key_exists("GrayRoutesFirst",$param) and $param["GrayRoutesFirst"] !== null) {
            $this->GrayRoutesFirst = $param["GrayRoutesFirst"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }
    }
}
