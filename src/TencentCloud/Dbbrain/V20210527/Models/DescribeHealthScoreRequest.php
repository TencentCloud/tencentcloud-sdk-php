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
 * DescribeHealthScore请求参数结构体
 *
 * @method string getInstanceId() 获取<p>需要获取健康得分的实例ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。如果是dcdb(TDSQL MySQL)，请使用 <code>{ClusterId}&amp;{InstanceId}</code> 拼接结果代替入参</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>需要获取健康得分的实例ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。如果是dcdb(TDSQL MySQL)，请使用 <code>{ClusterId}&amp;{InstanceId}</code> 拼接结果代替入参</p>
 * @method string getTime() 获取<p>获取健康得分的时间，时间格式如：2019-09-10 12:13:14。</p>
 * @method void setTime(string $Time) 设置<p>获取健康得分的时间，时间格式如：2019-09-10 12:13:14。</p>
 * @method string getProduct() 获取<p>服务产品类型，支持值包括： &quot;mysql&quot; - 云数据库 MySQL， &quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL，&quot;redis&quot; - 云数据库 Redis，默认为&quot;mysql&quot;。</p>
 * @method void setProduct(string $Product) 设置<p>服务产品类型，支持值包括： &quot;mysql&quot; - 云数据库 MySQL， &quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL，&quot;redis&quot; - 云数据库 Redis，默认为&quot;mysql&quot;。</p>
 */
class DescribeHealthScoreRequest extends AbstractModel
{
    /**
     * @var string <p>需要获取健康得分的实例ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。如果是dcdb(TDSQL MySQL)，请使用 <code>{ClusterId}&amp;{InstanceId}</code> 拼接结果代替入参</p>
     */
    public $InstanceId;

    /**
     * @var string <p>获取健康得分的时间，时间格式如：2019-09-10 12:13:14。</p>
     */
    public $Time;

    /**
     * @var string <p>服务产品类型，支持值包括： &quot;mysql&quot; - 云数据库 MySQL， &quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL，&quot;redis&quot; - 云数据库 Redis，默认为&quot;mysql&quot;。</p>
     */
    public $Product;

    /**
     * @param string $InstanceId <p>需要获取健康得分的实例ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。如果是dcdb(TDSQL MySQL)，请使用 <code>{ClusterId}&amp;{InstanceId}</code> 拼接结果代替入参</p>
     * @param string $Time <p>获取健康得分的时间，时间格式如：2019-09-10 12:13:14。</p>
     * @param string $Product <p>服务产品类型，支持值包括： &quot;mysql&quot; - 云数据库 MySQL， &quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL，&quot;redis&quot; - 云数据库 Redis，默认为&quot;mysql&quot;。</p>
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

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
