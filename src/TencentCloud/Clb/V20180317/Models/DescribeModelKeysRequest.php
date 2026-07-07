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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModelKeys请求参数结构体
 *
 * @method string getAccessType() 获取<p>接入类型过滤：PublicBYOK/PublicCustom/PrivateCustom</p>
 * @method void setAccessType(string $AccessType) 设置<p>接入类型过滤：PublicBYOK/PublicCustom/PrivateCustom</p>
 * @method array getFilters() 获取<p>过滤条件</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件</p>
 * @method integer getLimit() 获取<p>返回数量限制</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量限制</p>
 * @method integer getOffset() 获取<p>翻页启始索引</p>
 * @method void setOffset(integer $Offset) 设置<p>翻页启始索引</p>
 * @method array getServiceProviderIds() 获取<p>服务提供商ID</p>
 * @method void setServiceProviderIds(array $ServiceProviderIds) 设置<p>服务提供商ID</p>
 */
class DescribeModelKeysRequest extends AbstractModel
{
    /**
     * @var string <p>接入类型过滤：PublicBYOK/PublicCustom/PrivateCustom</p>
     */
    public $AccessType;

    /**
     * @var array <p>过滤条件</p>
     */
    public $Filters;

    /**
     * @var integer <p>返回数量限制</p>
     */
    public $Limit;

    /**
     * @var integer <p>翻页启始索引</p>
     */
    public $Offset;

    /**
     * @var array <p>服务提供商ID</p>
     */
    public $ServiceProviderIds;

    /**
     * @param string $AccessType <p>接入类型过滤：PublicBYOK/PublicCustom/PrivateCustom</p>
     * @param array $Filters <p>过滤条件</p>
     * @param integer $Limit <p>返回数量限制</p>
     * @param integer $Offset <p>翻页启始索引</p>
     * @param array $ServiceProviderIds <p>服务提供商ID</p>
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
        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ServiceProviderIds",$param) and $param["ServiceProviderIds"] !== null) {
            $this->ServiceProviderIds = $param["ServiceProviderIds"];
        }
    }
}
