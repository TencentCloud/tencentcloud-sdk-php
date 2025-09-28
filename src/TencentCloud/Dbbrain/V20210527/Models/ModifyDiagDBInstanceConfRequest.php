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
 * ModifyDiagDBInstanceConf请求参数结构体
 *
 * @method InstanceConfs getInstanceConfs() 获取实例配置，包括巡检、概览开关等。
 * @method void setInstanceConfs(InstanceConfs $InstanceConfs) 设置实例配置，包括巡检、概览开关等。
 * @method string getRegions() 获取生效实例地域，固定为"All"，代表全地域。
 * @method void setRegions(string $Regions) 设置生效实例地域，固定为"All"，代表全地域。
 * @method string getProduct() 获取服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，"redis" - 云数据库 Redis。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，"redis" - 云数据库 Redis。
 * @method array getInstanceIds() 获取指定更改巡检状态的实例ID。
可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。

 * @method void setInstanceIds(array $InstanceIds) 设置指定更改巡检状态的实例ID。
可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
 */
class ModifyDiagDBInstanceConfRequest extends AbstractModel
{
    /**
     * @var InstanceConfs 实例配置，包括巡检、概览开关等。
     */
    public $InstanceConfs;

    /**
     * @var string 生效实例地域，固定为"All"，代表全地域。
     */
    public $Regions;

    /**
     * @var string 服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，"redis" - 云数据库 Redis。
     */
    public $Product;

    /**
     * @var array 指定更改巡检状态的实例ID。
可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。

     */
    public $InstanceIds;

    /**
     * @param InstanceConfs $InstanceConfs 实例配置，包括巡检、概览开关等。
     * @param string $Regions 生效实例地域，固定为"All"，代表全地域。
     * @param string $Product 服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，"redis" - 云数据库 Redis。
     * @param array $InstanceIds 指定更改巡检状态的实例ID。
可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
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
        if (array_key_exists("InstanceConfs",$param) and $param["InstanceConfs"] !== null) {
            $this->InstanceConfs = new InstanceConfs();
            $this->InstanceConfs->deserialize($param["InstanceConfs"]);
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = $param["Regions"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
