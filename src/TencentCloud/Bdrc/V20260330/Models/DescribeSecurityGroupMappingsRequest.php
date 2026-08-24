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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityGroupMappings请求参数结构体
 *
 * @method string getSitePairId() 获取安全组映射所属的站点对ID。
 * @method void setSitePairId(string $SitePairId) 设置安全组映射所属的站点对ID。
 * @method array getFilters() 获取过滤条件，详见过滤条件表。支持的Name：src-security-group-id、target-security-group-id
 * @method void setFilters(array $Filters) 设置过滤条件，详见过滤条件表。支持的Name：src-security-group-id、target-security-group-id
 * @method integer getOffset() 获取偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节
 * @method integer getLimit() 获取返回数量，默认为20，最大值为500。关于Limit的更进一步介绍请参考 API 简介中的相关小节
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为500。关于Limit的更进一步介绍请参考 API 简介中的相关小节
 * @method string getOrder() 获取输出结果按升序还是降序，可选值：ASC、DESC
 * @method void setOrder(string $Order) 设置输出结果按升序还是降序，可选值：ASC、DESC
 * @method string getOrderField() 获取输出结果的排序字段，可选值：CREATE_TIME
 * @method void setOrderField(string $OrderField) 设置输出结果的排序字段，可选值：CREATE_TIME
 */
class DescribeSecurityGroupMappingsRequest extends AbstractModel
{
    /**
     * @var string 安全组映射所属的站点对ID。
     */
    public $SitePairId;

    /**
     * @var array 过滤条件，详见过滤条件表。支持的Name：src-security-group-id、target-security-group-id
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为500。关于Limit的更进一步介绍请参考 API 简介中的相关小节
     */
    public $Limit;

    /**
     * @var string 输出结果按升序还是降序，可选值：ASC、DESC
     */
    public $Order;

    /**
     * @var string 输出结果的排序字段，可选值：CREATE_TIME
     */
    public $OrderField;

    /**
     * @param string $SitePairId 安全组映射所属的站点对ID。
     * @param array $Filters 过滤条件，详见过滤条件表。支持的Name：src-security-group-id、target-security-group-id
     * @param integer $Offset 偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节
     * @param integer $Limit 返回数量，默认为20，最大值为500。关于Limit的更进一步介绍请参考 API 简介中的相关小节
     * @param string $Order 输出结果按升序还是降序，可选值：ASC、DESC
     * @param string $OrderField 输出结果的排序字段，可选值：CREATE_TIME
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
        if (array_key_exists("SitePairId",$param) and $param["SitePairId"] !== null) {
            $this->SitePairId = $param["SitePairId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new FilterModel();
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }
    }
}
