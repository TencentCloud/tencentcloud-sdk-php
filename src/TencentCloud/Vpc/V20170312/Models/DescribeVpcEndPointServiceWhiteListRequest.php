<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVpcEndPointServiceWhiteList请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取单页返回数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置单页返回数量，默认为20，最大值为100。
 * @method array getFilters() 获取过滤条件。
<li> user-uin String - （过滤条件）用户UIN。登录 腾讯云账号中心控制台 获取。</li>
<li> end-point-service-id String - （过滤条件）终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li> user-uin String - （过滤条件）用户UIN。登录 腾讯云账号中心控制台 获取。</li>
<li> end-point-service-id String - （过滤条件）终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
</li>
 */
class DescribeVpcEndPointServiceWhiteListRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 单页返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var array 过滤条件。
<li> user-uin String - （过滤条件）用户UIN。登录 腾讯云账号中心控制台 获取。</li>
<li> end-point-service-id String - （过滤条件）终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
</li>
     */
    public $Filters;

    /**
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 单页返回数量，默认为20，最大值为100。
     * @param array $Filters 过滤条件。
<li> user-uin String - （过滤条件）用户UIN。登录 腾讯云账号中心控制台 获取。</li>
<li> end-point-service-id String - （过滤条件）终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
</li>
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
