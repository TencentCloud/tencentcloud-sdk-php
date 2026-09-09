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
 * @method string getInstanceId() 获取<p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
 * @method string getProduct() 获取<p>服务产品类型，支持值：mongodb</p>
 * @method void setProduct(string $Product) 设置<p>服务产品类型，支持值：mongodb</p>
 * @method integer getID() 获取<p>线程的ID，用于筛选线程列表。</p>
 * @method void setID(integer $ID) 设置<p>线程的ID，用于筛选线程列表。</p>
 * @method string getHost() 获取<p>线程的操作主机地址，用于筛选线程列表。</p>
 * @method void setHost(string $Host) 设置<p>线程的操作主机地址，用于筛选线程列表。</p>
 * @method string getDB() 获取<p>线程的操作数据库，用于筛选线程列表,如果是多个 使用 &#39;,&#39;  分割</p>
 * @method void setDB(string $DB) 设置<p>线程的操作数据库，用于筛选线程列表,如果是多个 使用 &#39;,&#39;  分割</p>
 * @method string getType() 获取<p>命令类型 ,如果是多个 使用 &#39;,&#39;  分割</p>
 * @method void setType(string $Type) 设置<p>命令类型 ,如果是多个 使用 &#39;,&#39;  分割</p>
 * @method integer getTime() 获取<p>线程的操作时长最小值，单位秒，用于筛选操作时长大于该值的线程列表。</p>
 * @method void setTime(integer $Time) 设置<p>线程的操作时长最小值，单位秒，用于筛选操作时长大于该值的线程列表。</p>
 * @method integer getLimit() 获取<p>返回数量，默认20。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认20。</p>
 */
class DescribeMongoDBProcessListRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>服务产品类型，支持值：mongodb</p>
     */
    public $Product;

    /**
     * @var integer <p>线程的ID，用于筛选线程列表。</p>
     */
    public $ID;

    /**
     * @var string <p>线程的操作主机地址，用于筛选线程列表。</p>
     */
    public $Host;

    /**
     * @var string <p>线程的操作数据库，用于筛选线程列表,如果是多个 使用 &#39;,&#39;  分割</p>
     */
    public $DB;

    /**
     * @var string <p>命令类型 ,如果是多个 使用 &#39;,&#39;  分割</p>
     */
    public $Type;

    /**
     * @var integer <p>线程的操作时长最小值，单位秒，用于筛选操作时长大于该值的线程列表。</p>
     */
    public $Time;

    /**
     * @var integer <p>返回数量，默认20。</p>
     */
    public $Limit;

    /**
     * @param string $InstanceId <p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
     * @param string $Product <p>服务产品类型，支持值：mongodb</p>
     * @param integer $ID <p>线程的ID，用于筛选线程列表。</p>
     * @param string $Host <p>线程的操作主机地址，用于筛选线程列表。</p>
     * @param string $DB <p>线程的操作数据库，用于筛选线程列表,如果是多个 使用 &#39;,&#39;  分割</p>
     * @param string $Type <p>命令类型 ,如果是多个 使用 &#39;,&#39;  分割</p>
     * @param integer $Time <p>线程的操作时长最小值，单位秒，用于筛选操作时长大于该值的线程列表。</p>
     * @param integer $Limit <p>返回数量，默认20。</p>
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
