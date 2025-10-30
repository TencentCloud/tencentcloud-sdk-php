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
 * DescribeNativeGatewayServiceSources请求参数结构体
 *
 * @method string getGatewayID() 获取网关实例ID
 * @method void setGatewayID(string $GatewayID) 设置网关实例ID
 * @method integer getLimit() 获取单页条数，最大100
 * @method void setLimit(integer $Limit) 设置单页条数，最大100
 * @method integer getOffset() 获取分页偏移量
 * @method void setOffset(integer $Offset) 设置分页偏移量
 * @method string getSourceID() 获取服务来源ID
 * @method void setSourceID(string $SourceID) 设置服务来源ID
 * @method string getSourceName() 获取服务来源实例名称，模糊搜索
 * @method void setSourceName(string $SourceName) 设置服务来源实例名称，模糊搜索
 * @method array getSourceTypes() 获取微服务引擎类型：TSE-Nacos｜TSE-Consul｜TSE-PolarisMesh｜Customer-Nacos｜Customer-Consul｜Customer-PolarisMesh
 * @method void setSourceTypes(array $SourceTypes) 设置微服务引擎类型：TSE-Nacos｜TSE-Consul｜TSE-PolarisMesh｜Customer-Nacos｜Customer-Consul｜Customer-PolarisMesh
 * @method string getOrderField() 获取排序字段类型，当前仅支持SourceName
 * @method void setOrderField(string $OrderField) 设置排序字段类型，当前仅支持SourceName
 * @method string getOrderType() 获取排序类型，AES/DESC
 * @method void setOrderType(string $OrderType) 设置排序类型，AES/DESC
 */
class DescribeNativeGatewayServiceSourcesRequest extends AbstractModel
{
    /**
     * @var string 网关实例ID
     */
    public $GatewayID;

    /**
     * @var integer 单页条数，最大100
     */
    public $Limit;

    /**
     * @var integer 分页偏移量
     */
    public $Offset;

    /**
     * @var string 服务来源ID
     */
    public $SourceID;

    /**
     * @var string 服务来源实例名称，模糊搜索
     */
    public $SourceName;

    /**
     * @var array 微服务引擎类型：TSE-Nacos｜TSE-Consul｜TSE-PolarisMesh｜Customer-Nacos｜Customer-Consul｜Customer-PolarisMesh
     */
    public $SourceTypes;

    /**
     * @var string 排序字段类型，当前仅支持SourceName
     */
    public $OrderField;

    /**
     * @var string 排序类型，AES/DESC
     */
    public $OrderType;

    /**
     * @param string $GatewayID 网关实例ID
     * @param integer $Limit 单页条数，最大100
     * @param integer $Offset 分页偏移量
     * @param string $SourceID 服务来源ID
     * @param string $SourceName 服务来源实例名称，模糊搜索
     * @param array $SourceTypes 微服务引擎类型：TSE-Nacos｜TSE-Consul｜TSE-PolarisMesh｜Customer-Nacos｜Customer-Consul｜Customer-PolarisMesh
     * @param string $OrderField 排序字段类型，当前仅支持SourceName
     * @param string $OrderType 排序类型，AES/DESC
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
        if (array_key_exists("GatewayID",$param) and $param["GatewayID"] !== null) {
            $this->GatewayID = $param["GatewayID"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SourceID",$param) and $param["SourceID"] !== null) {
            $this->SourceID = $param["SourceID"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("SourceTypes",$param) and $param["SourceTypes"] !== null) {
            $this->SourceTypes = $param["SourceTypes"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }
    }
}
