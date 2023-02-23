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
 * DescribeNoPrimaryKeyTables请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method string getDate() 获取查询日期，如2021-05-27，最早为30天前的日期。
 * @method void setDate(string $Date) 设置查询日期，如2021-05-27，最早为30天前的日期。
 * @method integer getLimit() 获取查询数目，默认为20，最大为100。
 * @method void setLimit(integer $Limit) 设置查询数目，默认为20，最大为100。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method string getProduct() 获取服务产品类型，支持值："mysql" - 云数据库 MySQL，默认为"mysql"。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值："mysql" - 云数据库 MySQL，默认为"mysql"。
 */
class DescribeNoPrimaryKeyTablesRequest extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var string 查询日期，如2021-05-27，最早为30天前的日期。
     */
    public $Date;

    /**
     * @var integer 查询数目，默认为20，最大为100。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var string 服务产品类型，支持值："mysql" - 云数据库 MySQL，默认为"mysql"。
     */
    public $Product;

    /**
     * @param string $InstanceId 实例ID。
     * @param string $Date 查询日期，如2021-05-27，最早为30天前的日期。
     * @param integer $Limit 查询数目，默认为20，最大为100。
     * @param integer $Offset 偏移量，默认为0。
     * @param string $Product 服务产品类型，支持值："mysql" - 云数据库 MySQL，默认为"mysql"。
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

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
