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
 * DescribeDBSpaceStatus请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。(备注，dcdb的InstanceId 要求使用 <code>ClusterId&amp;InstanceId</code>代替)</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。(备注，dcdb的InstanceId 要求使用 <code>ClusterId&amp;InstanceId</code>代替)</p>
 * @method integer getRangeDays() 获取<p>时间段天数，截止日期为当日，默认为7天。</p>
 * @method void setRangeDays(integer $RangeDays) 设置<p>时间段天数，截止日期为当日，默认为7天。</p>
 * @method string getProduct() 获取<p>服务产品类型，支持值包括： &quot;mysql&quot; - 云数据库 MySQL， &quot;cynosdb&quot; - 云数据库 CynosDB  for MySQL，&quot;mongodb&quot; - 云数据库 MongoDB，&quot;dcdb&quot; -（TDSQL MySQL 版）、&quot;mariadb&quot; -（TDSQL MariaDB 版）默认为&quot;mysql&quot;。</p>
 * @method void setProduct(string $Product) 设置<p>服务产品类型，支持值包括： &quot;mysql&quot; - 云数据库 MySQL， &quot;cynosdb&quot; - 云数据库 CynosDB  for MySQL，&quot;mongodb&quot; - 云数据库 MongoDB，&quot;dcdb&quot; -（TDSQL MySQL 版）、&quot;mariadb&quot; -（TDSQL MariaDB 版）默认为&quot;mysql&quot;。</p>
 */
class DescribeDBSpaceStatusRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。(备注，dcdb的InstanceId 要求使用 <code>ClusterId&amp;InstanceId</code>代替)</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>时间段天数，截止日期为当日，默认为7天。</p>
     */
    public $RangeDays;

    /**
     * @var string <p>服务产品类型，支持值包括： &quot;mysql&quot; - 云数据库 MySQL， &quot;cynosdb&quot; - 云数据库 CynosDB  for MySQL，&quot;mongodb&quot; - 云数据库 MongoDB，&quot;dcdb&quot; -（TDSQL MySQL 版）、&quot;mariadb&quot; -（TDSQL MariaDB 版）默认为&quot;mysql&quot;。</p>
     */
    public $Product;

    /**
     * @param string $InstanceId <p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。(备注，dcdb的InstanceId 要求使用 <code>ClusterId&amp;InstanceId</code>代替)</p>
     * @param integer $RangeDays <p>时间段天数，截止日期为当日，默认为7天。</p>
     * @param string $Product <p>服务产品类型，支持值包括： &quot;mysql&quot; - 云数据库 MySQL， &quot;cynosdb&quot; - 云数据库 CynosDB  for MySQL，&quot;mongodb&quot; - 云数据库 MongoDB，&quot;dcdb&quot; -（TDSQL MySQL 版）、&quot;mariadb&quot; -（TDSQL MariaDB 版）默认为&quot;mysql&quot;。</p>
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

        if (array_key_exists("RangeDays",$param) and $param["RangeDays"] !== null) {
            $this->RangeDays = $param["RangeDays"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
