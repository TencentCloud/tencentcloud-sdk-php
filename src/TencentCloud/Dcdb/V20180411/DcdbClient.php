<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace TencentCloud\Dcdb\V20180411;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dcdb\V20180411\Models as Models;

/**
* @method Models\CreateDCDBInstanceResponse CreateDCDBInstance(Models\CreateDCDBInstanceRequest $req) 本接口（CreateDCDBInstance）用于创建包年包月的云数据库实例，可通过传入实例规格、数据库版本号、购买时长等信息创建云数据库实例。
* @method Models\DescribeDBLogFilesResponse DescribeDBLogFiles(Models\DescribeDBLogFilesRequest $req) 本接口(DescribeDBLogFiles)用于获取数据库的各种日志列表，包括冷备、binlog、errlog和slowlog。
* @method Models\DescribeDCDBInstancesResponse DescribeDCDBInstances(Models\DescribeDCDBInstancesRequest $req) 查询云数据库实例列表，支持通过项目ID、实例ID、内网地址、实例名称等来筛选实例。
如果不指定任何筛选条件，则默认返回10条实例记录，单次请求最多支持返回100条实例记录。
* @method Models\DescribeDCDBPriceResponse DescribeDCDBPrice(Models\DescribeDCDBPriceRequest $req) 本接口（DescribeDCDBPrice）用于在购买实例前，查询实例的价格。
* @method Models\DescribeDCDBRenewalPriceResponse DescribeDCDBRenewalPrice(Models\DescribeDCDBRenewalPriceRequest $req) 本接口（DescribeDCDBRenewalPrice）用于在续费分布式数据库实例时，查询续费的价格。
* @method Models\DescribeDCDBSaleInfoResponse DescribeDCDBSaleInfo(Models\DescribeDCDBSaleInfoRequest $req) 本接口(DescribeDCDBSaleInfo)用于查询分布式数据库可售卖的地域和可用区信息。
* @method Models\DescribeDCDBUpgradePriceResponse DescribeDCDBUpgradePrice(Models\DescribeDCDBUpgradePriceRequest $req) 本接口（DescribeDCDBUpgradePrice）用于查询升级分布式数据库实例价格。
* @method Models\DescribeOrdersResponse DescribeOrders(Models\DescribeOrdersRequest $req) 本接口（DescribeOrders）用于查询分布式数据库订单信息。传入订单Id来查询订单关联的分布式数据库实例，和对应的任务流程ID。
* @method Models\DescribeShardSpecResponse DescribeShardSpec(Models\DescribeShardSpecRequest $req) 查询可创建的分布式数据库可售卖的分片规格配置。
* @method Models\RenewDCDBInstanceResponse RenewDCDBInstance(Models\RenewDCDBInstanceRequest $req) 本接口（RenewDCDBInstance）用于续费分布式数据库实例。
* @method Models\UpgradeDCDBInstanceResponse UpgradeDCDBInstance(Models\UpgradeDCDBInstanceRequest $req) 本接口（UpgradeDCDBInstance）用于升级分布式数据库实例。本接口完成下单和支付两个动作，如果发生支付失败的错误，调用用户账户相关接口中的支付订单接口（PayDeals）重新支付即可。
 */

class DcdbClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "dcdb.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-04-11";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("dcdb")."\\"."V20180411\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
