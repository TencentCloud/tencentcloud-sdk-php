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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMongoDBProcessList请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
 * @method string getProduct() 获取服务产品类型，支持值：mongodb
 * @method void setProduct(string $Product) 设置服务产品类型，支持值：mongodb
 * @method integer getID() 获取线程的ID，用于筛选线程列表。
 * @method void setID(integer $ID) 设置线程的ID，用于筛选线程列表。
 * @method string getHost() 获取线程的操作主机地址，用于筛选线程列表。
 * @method void setHost(string $Host) 设置线程的操作主机地址，用于筛选线程列表。
 * @method string getDB() 获取线程的操作数据库，用于筛选线程列表,如果是多个 使用 ','  分割
 * @method void setDB(string $DB) 设置线程的操作数据库，用于筛选线程列表,如果是多个 使用 ','  分割
 * @method string getType() 获取命令类型 ,如果是多个 使用 ','  分割
 * @method void setType(string $Type) 设置命令类型 ,如果是多个 使用 ','  分割
 * @method integer getTime() 获取线程的操作时长最小值，单位秒，用于筛选操作时长大于该值的线程列表。
 * @method void setTime(integer $Time) 设置线程的操作时长最小值，单位秒，用于筛选操作时长大于该值的线程列表。
 * @method integer getLimit() 获取返回数量，默认20。
 * @method void setLimit(integer $Limit) 设置返回数量，默认20。
 */
class DescribeMongoDBProcessListRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
     */
    public $InstanceId;

    /**
     * @var string 服务产品类型，支持值：mongodb
     */
    public $Product;

    /**
     * @var integer 线程的ID，用于筛选线程列表。
     */
    public $ID;

    /**
     * @var string 线程的操作主机地址，用于筛选线程列表。
     */
    public $Host;

    /**
     * @var string 线程的操作数据库，用于筛选线程列表,如果是多个 使用 ','  分割
     */
    public $DB;

    /**
     * @var string 命令类型 ,如果是多个 使用 ','  分割
     */
    public $Type;

    /**
     * @var integer 线程的操作时长最小值，单位秒，用于筛选操作时长大于该值的线程列表。
     */
    public $Time;

    /**
     * @var integer 返回数量，默认20。
     */
    public $Limit;

    /**
     * @param string $InstanceId 实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
     * @param string $Product 服务产品类型，支持值：mongodb
     * @param integer $ID 线程的ID，用于筛选线程列表。
     * @param string $Host 线程的操作主机地址，用于筛选线程列表。
     * @param string $DB 线程的操作数据库，用于筛选线程列表,如果是多个 使用 ','  分割
     * @param string $Type 命令类型 ,如果是多个 使用 ','  分割
     * @param integer $Time 线程的操作时长最小值，单位秒，用于筛选操作时长大于该值的线程列表。
     * @param integer $Limit 返回数量，默认20。
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

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("DB",$param) and $param["DB"] !== null) {
            $this->DB = $param["DB"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
