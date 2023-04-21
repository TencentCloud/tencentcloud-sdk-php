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
 * DescribeAuditLogFiles请求参数结构体
 *
 * @method string getProduct() 获取服务产品类型，支持值包括： "dcdb" - 云数据库 Tdsql， "mariadb" - 云数据库 MariaDB for MariaDB。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值包括： "dcdb" - 云数据库 Tdsql， "mariadb" - 云数据库 MariaDB for MariaDB。
 * @method string getNodeRequestType() 获取与Product保持一致。如："dcdb" ,"mariadb"
 * @method void setNodeRequestType(string $NodeRequestType) 设置与Product保持一致。如："dcdb" ,"mariadb"
 * @method string getInstanceId() 获取实例 ID 。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID 。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取查询数目，默认为20，最大为100。
 * @method void setLimit(integer $Limit) 设置查询数目，默认为20，最大为100。
 */
class DescribeAuditLogFilesRequest extends AbstractModel
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
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 查询数目，默认为20，最大为100。
     */
    public $Limit;

    /**
     * @param string $Product 服务产品类型，支持值包括： "dcdb" - 云数据库 Tdsql， "mariadb" - 云数据库 MariaDB for MariaDB。
     * @param string $NodeRequestType 与Product保持一致。如："dcdb" ,"mariadb"
     * @param string $InstanceId 实例 ID 。
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 查询数目，默认为20，最大为100。
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
