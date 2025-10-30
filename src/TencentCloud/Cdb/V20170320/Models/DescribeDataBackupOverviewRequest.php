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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDataBackupOverview请求参数结构体
 *
 * @method string getProduct() 获取需要查询数据备份概览的云数据库产品类型。可取值为：mysql 指双节点/三节点的高可用实例，mysql-basic 指单节点（云盘）实例，mysql-cluster 指云盘版实例。
 * @method void setProduct(string $Product) 设置需要查询数据备份概览的云数据库产品类型。可取值为：mysql 指双节点/三节点的高可用实例，mysql-basic 指单节点（云盘）实例，mysql-cluster 指云盘版实例。
 */
class DescribeDataBackupOverviewRequest extends AbstractModel
{
    /**
     * @var string 需要查询数据备份概览的云数据库产品类型。可取值为：mysql 指双节点/三节点的高可用实例，mysql-basic 指单节点（云盘）实例，mysql-cluster 指云盘版实例。
     */
    public $Product;

    /**
     * @param string $Product 需要查询数据备份概览的云数据库产品类型。可取值为：mysql 指双节点/三节点的高可用实例，mysql-basic 指单节点（云盘）实例，mysql-cluster 指云盘版实例。
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
    }
}
