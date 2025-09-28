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
 * DescribeAuditInstanceList请求参数结构体
 *
 * @method string getProduct() 获取服务产品类型，支持值包括： "dcdb" - 云数据库 Tdsql， "mariadb" - 云数据库 MariaDB。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值包括： "dcdb" - 云数据库 Tdsql， "mariadb" - 云数据库 MariaDB。
 * @method string getNodeRequestType() 获取NodeRequestType主要标识数据库产品类型，与Product保持一致。如："dcdb" ,"mariadb"。
 * @method void setNodeRequestType(string $NodeRequestType) 设置NodeRequestType主要标识数据库产品类型，与Product保持一致。如："dcdb" ,"mariadb"。
 * @method integer getAuditSwitch() 获取审计状态标识，0-未开通审计；1-已开通审计，默认为0。
 * @method void setAuditSwitch(integer $AuditSwitch) 设置审计状态标识，0-未开通审计；1-已开通审计，默认为0。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取查询数目，默认为20，最大为100。
 * @method void setLimit(integer $Limit) 设置查询数目，默认为20，最大为100。
 * @method array getFilters() 获取查询实例的搜索条件。Name包括：InstanceId， InstanceName。
 * @method void setFilters(array $Filters) 设置查询实例的搜索条件。Name包括：InstanceId， InstanceName。
 */
class DescribeAuditInstanceListRequest extends AbstractModel
{
    /**
     * @var string 服务产品类型，支持值包括： "dcdb" - 云数据库 Tdsql， "mariadb" - 云数据库 MariaDB。
     */
    public $Product;

    /**
     * @var string NodeRequestType主要标识数据库产品类型，与Product保持一致。如："dcdb" ,"mariadb"。
     */
    public $NodeRequestType;

    /**
     * @var integer 审计状态标识，0-未开通审计；1-已开通审计，默认为0。
     */
    public $AuditSwitch;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 查询数目，默认为20，最大为100。
     */
    public $Limit;

    /**
     * @var array 查询实例的搜索条件。Name包括：InstanceId， InstanceName。
     */
    public $Filters;

    /**
     * @param string $Product 服务产品类型，支持值包括： "dcdb" - 云数据库 Tdsql， "mariadb" - 云数据库 MariaDB。
     * @param string $NodeRequestType NodeRequestType主要标识数据库产品类型，与Product保持一致。如："dcdb" ,"mariadb"。
     * @param integer $AuditSwitch 审计状态标识，0-未开通审计；1-已开通审计，默认为0。
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 查询数目，默认为20，最大为100。
     * @param array $Filters 查询实例的搜索条件。Name包括：InstanceId， InstanceName。
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

        if (array_key_exists("AuditSwitch",$param) and $param["AuditSwitch"] !== null) {
            $this->AuditSwitch = $param["AuditSwitch"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AuditInstanceFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
