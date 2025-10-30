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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量导出子域名解析量查询条件
 *
 * @method string getDomain() 获取要查询解析量的主域名。
 * @method void setDomain(string $Domain) 设置要查询解析量的主域名。
 * @method string getSubDomain() 获取要查询解析量的子域名主机头。
 * @method void setSubDomain(string $SubDomain) 设置要查询解析量的子域名主机头。
 * @method integer getOffset() 获取查询子域名列表的偏移量。没有指定查询的 Subdomain 参数时，根据分页参数返回每页子域名解析量。
 * @method void setOffset(integer $Offset) 设置查询子域名列表的偏移量。没有指定查询的 Subdomain 参数时，根据分页参数返回每页子域名解析量。
 * @method integer getLimit() 获取查询子域名列表的每页条数。没有指定查询的 Subdomain 参数时，根据分页参数返回每页子域名解析量。
 * @method void setLimit(integer $Limit) 设置查询子域名列表的每页条数。没有指定查询的 Subdomain 参数时，根据分页参数返回每页子域名解析量。
 */
class SubDomainsAnalyticsParamsItem extends AbstractModel
{
    /**
     * @var string 要查询解析量的主域名。
     */
    public $Domain;

    /**
     * @var string 要查询解析量的子域名主机头。
     */
    public $SubDomain;

    /**
     * @var integer 查询子域名列表的偏移量。没有指定查询的 Subdomain 参数时，根据分页参数返回每页子域名解析量。
     */
    public $Offset;

    /**
     * @var integer 查询子域名列表的每页条数。没有指定查询的 Subdomain 参数时，根据分页参数返回每页子域名解析量。
     */
    public $Limit;

    /**
     * @param string $Domain 要查询解析量的主域名。
     * @param string $SubDomain 要查询解析量的子域名主机头。
     * @param integer $Offset 查询子域名列表的偏移量。没有指定查询的 Subdomain 参数时，根据分页参数返回每页子域名解析量。
     * @param integer $Limit 查询子域名列表的每页条数。没有指定查询的 Subdomain 参数时，根据分页参数返回每页子域名解析量。
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("SubDomain",$param) and $param["SubDomain"] !== null) {
            $this->SubDomain = $param["SubDomain"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
