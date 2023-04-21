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
 * CreateAuditLogFile请求参数结构体
 *
 * @method string getProduct() 获取服务产品类型，支持值包括： "dcdb" - 云数据库 Tdsql， "mariadb" - 云数据库 MariaDB for MariaDB。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值包括： "dcdb" - 云数据库 Tdsql， "mariadb" - 云数据库 MariaDB for MariaDB。
 * @method string getNodeRequestType() 获取与Product保持一致。如："dcdb" ,"mariadb"
 * @method void setNodeRequestType(string $NodeRequestType) 设置与Product保持一致。如："dcdb" ,"mariadb"
 * @method string getInstanceId() 获取实例 ID 。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID 。
 * @method string getStartTime() 获取开始时间，如“2019-09-10 12:13:14”。	
 * @method void setStartTime(string $StartTime) 设置开始时间，如“2019-09-10 12:13:14”。	
 * @method string getEndTime() 获取截止时间，如“2019-09-11 10:13:14”。
 * @method void setEndTime(string $EndTime) 设置截止时间，如“2019-09-11 10:13:14”。
 * @method AuditLogFilter getFilter() 获取过滤条件。可按设置的过滤条件过滤日志。
 * @method void setFilter(AuditLogFilter $Filter) 设置过滤条件。可按设置的过滤条件过滤日志。
 */
class CreateAuditLogFileRequest extends AbstractModel
{
    /**
     * @var string 服务产品类型，支持值包括： "dcdb" - 云数据库 Tdsql， "mariadb" - 云数据库 MariaDB for MariaDB。
     */
    public $Product;

    /**
     * @var string 与Product保持一致。如："dcdb" ,"mariadb"
     */
    public $NodeRequestType;

    /**
     * @var string 实例 ID 。
     */
    public $InstanceId;

    /**
     * @var string 开始时间，如“2019-09-10 12:13:14”。	
     */
    public $StartTime;

    /**
     * @var string 截止时间，如“2019-09-11 10:13:14”。
     */
    public $EndTime;

    /**
     * @var AuditLogFilter 过滤条件。可按设置的过滤条件过滤日志。
     */
    public $Filter;

    /**
     * @param string $Product 服务产品类型，支持值包括： "dcdb" - 云数据库 Tdsql， "mariadb" - 云数据库 MariaDB for MariaDB。
     * @param string $NodeRequestType 与Product保持一致。如："dcdb" ,"mariadb"
     * @param string $InstanceId 实例 ID 。
     * @param string $StartTime 开始时间，如“2019-09-10 12:13:14”。	
     * @param string $EndTime 截止时间，如“2019-09-11 10:13:14”。
     * @param AuditLogFilter $Filter 过滤条件。可按设置的过滤条件过滤日志。
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("NodeRequestType",$param) and $param["NodeRequestType"] !== null) {
            $this->NodeRequestType = $param["NodeRequestType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new AuditLogFilter();
            $this->Filter->deserialize($param["Filter"]);
        }
    }
}
