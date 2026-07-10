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
 * CreateIgnoreDiagRecord请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID。</p>
 * @method string getProduct() 获取<p>服务产品类型，取值：mysql（云数据库 MySQL）、cynosdb（TDSQL-C MySQL 版）、dcdb（TDSQL MySQL 版）、mariadb（TDSQL MariaDB 版）、redis（云数据库 Redis）、mongodb（云数据库 MongoDB）、postgres（云数据库 PostgreSQL）。</p>
 * @method void setProduct(string $Product) 设置<p>服务产品类型，取值：mysql（云数据库 MySQL）、cynosdb（TDSQL-C MySQL 版）、dcdb（TDSQL MySQL 版）、mariadb（TDSQL MariaDB 版）、redis（云数据库 Redis）、mongodb（云数据库 MongoDB）、postgres（云数据库 PostgreSQL）。</p>
 * @method string getDiagItem() 获取<p>诊断项名称，用于指定需要忽略或取消忽略的诊断事件类型。</p>
 * @method void setDiagItem(string $DiagItem) 设置<p>诊断项名称，用于指定需要忽略或取消忽略的诊断事件类型。</p>
 * @method integer getStatus() 获取<p>忽略状态，取值：1（取消忽略），2（忽略）。</p>
 * @method void setStatus(integer $Status) 设置<p>忽略状态，取值：1（取消忽略），2（忽略）。</p>
 */
class CreateIgnoreDiagRecordRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>服务产品类型，取值：mysql（云数据库 MySQL）、cynosdb（TDSQL-C MySQL 版）、dcdb（TDSQL MySQL 版）、mariadb（TDSQL MariaDB 版）、redis（云数据库 Redis）、mongodb（云数据库 MongoDB）、postgres（云数据库 PostgreSQL）。</p>
     */
    public $Product;

    /**
     * @var string <p>诊断项名称，用于指定需要忽略或取消忽略的诊断事件类型。</p>
     */
    public $DiagItem;

    /**
     * @var integer <p>忽略状态，取值：1（取消忽略），2（忽略）。</p>
     */
    public $Status;

    /**
     * @param string $InstanceId <p>实例ID。</p>
     * @param string $Product <p>服务产品类型，取值：mysql（云数据库 MySQL）、cynosdb（TDSQL-C MySQL 版）、dcdb（TDSQL MySQL 版）、mariadb（TDSQL MariaDB 版）、redis（云数据库 Redis）、mongodb（云数据库 MongoDB）、postgres（云数据库 PostgreSQL）。</p>
     * @param string $DiagItem <p>诊断项名称，用于指定需要忽略或取消忽略的诊断事件类型。</p>
     * @param integer $Status <p>忽略状态，取值：1（取消忽略），2（忽略）。</p>
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

        if (array_key_exists("DiagItem",$param) and $param["DiagItem"] !== null) {
            $this->DiagItem = $param["DiagItem"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
