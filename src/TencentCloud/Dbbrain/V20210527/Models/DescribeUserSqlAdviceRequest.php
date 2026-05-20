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
 * DescribeUserSqlAdvice请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
 * @method string getSqlText() 获取<p>SQL语句。</p>
 * @method void setSqlText(string $SqlText) 设置<p>SQL语句。</p>
 * @method string getSchema() 获取<p>库名。</p>
 * @method void setSchema(string $Schema) 设置<p>库名。</p>
 * @method string getProduct() 获取<p>服务产品类型，支持值&quot;dcdb&quot; - 云数据库TDSQL MySQL；&quot;mysql&quot; - 云数据库 MySQL；&quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL；&quot;dbbrain-mysql&quot; - 自建 MySQL，默认为&quot;mysql&quot;。</p>
 * @method void setProduct(string $Product) 设置<p>服务产品类型，支持值&quot;dcdb&quot; - 云数据库TDSQL MySQL；&quot;mysql&quot; - 云数据库 MySQL；&quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL；&quot;dbbrain-mysql&quot; - 自建 MySQL，默认为&quot;mysql&quot;。</p>
 */
class DescribeUserSqlAdviceRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>SQL语句。</p>
     */
    public $SqlText;

    /**
     * @var string <p>库名。</p>
     */
    public $Schema;

    /**
     * @var string <p>服务产品类型，支持值&quot;dcdb&quot; - 云数据库TDSQL MySQL；&quot;mysql&quot; - 云数据库 MySQL；&quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL；&quot;dbbrain-mysql&quot; - 自建 MySQL，默认为&quot;mysql&quot;。</p>
     */
    public $Product;

    /**
     * @param string $InstanceId <p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
     * @param string $SqlText <p>SQL语句。</p>
     * @param string $Schema <p>库名。</p>
     * @param string $Product <p>服务产品类型，支持值&quot;dcdb&quot; - 云数据库TDSQL MySQL；&quot;mysql&quot; - 云数据库 MySQL；&quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL；&quot;dbbrain-mysql&quot; - 自建 MySQL，默认为&quot;mysql&quot;。</p>
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

        if (array_key_exists("SqlText",$param) and $param["SqlText"] !== null) {
            $this->SqlText = $param["SqlText"];
        }

        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = $param["Schema"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
