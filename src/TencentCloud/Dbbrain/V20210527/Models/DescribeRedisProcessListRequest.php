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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRedisProcessList请求参数结构体
 *
 * @method string getInstanceId() 获取Redis 实例ID。
 * @method void setInstanceId(string $InstanceId) 设置Redis 实例ID。
 * @method string getProduct() 获取服务产品类型，支持值包括 "redis" - 云数据库 Redis。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值包括 "redis" - 云数据库 Redis。
 * @method integer getLimit() 获取查询的Proxy节点数量上限，默认值为20，最大值为50。
 * @method void setLimit(integer $Limit) 设置查询的Proxy节点数量上限，默认值为20，最大值为50。
 * @method integer getOffset() 获取Proxy节点的偏移量，默认值为0。
 * @method void setOffset(integer $Offset) 设置Proxy节点的偏移量，默认值为0。
 */
class DescribeRedisProcessListRequest extends AbstractModel
{
    /**
     * @var string Redis 实例ID。
     */
    public $InstanceId;

    /**
     * @var string 服务产品类型，支持值包括 "redis" - 云数据库 Redis。
     */
    public $Product;

    /**
     * @var integer 查询的Proxy节点数量上限，默认值为20，最大值为50。
     */
    public $Limit;

    /**
     * @var integer Proxy节点的偏移量，默认值为0。
     */
    public $Offset;

    /**
     * @param string $InstanceId Redis 实例ID。
     * @param string $Product 服务产品类型，支持值包括 "redis" - 云数据库 Redis。
     * @param integer $Limit 查询的Proxy节点数量上限，默认值为20，最大值为50。
     * @param integer $Offset Proxy节点的偏移量，默认值为0。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
