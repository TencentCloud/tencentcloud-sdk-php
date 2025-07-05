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
namespace TencentCloud\Cdz\V20221123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 专属可用区资源水位数据详情，对应一个具体的垂直产品。
 *
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method string getSubProductName() 获取子产品名称
 * @method void setSubProductName(string $SubProductName) 设置子产品名称
 * @method array getStatistics() 获取资源统计详情
 * @method void setStatistics(array $Statistics) 设置资源统计详情
 */
class CloudDedicatedZoneResourceSummaryInfo extends AbstractModel
{
    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var string 子产品名称
     */
    public $SubProductName;

    /**
     * @var array 资源统计详情
     */
    public $Statistics;

    /**
     * @param string $ProductName 产品名称
     * @param string $SubProductName 子产品名称
     * @param array $Statistics 资源统计详情
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
        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("SubProductName",$param) and $param["SubProductName"] !== null) {
            $this->SubProductName = $param["SubProductName"];
        }

        if (array_key_exists("Statistics",$param) and $param["Statistics"] !== null) {
            $this->Statistics = [];
            foreach ($param["Statistics"] as $key => $value){
                $obj = new CloudDedicatedZoneResourceStatisticsInfo();
                $obj->deserialize($value);
                array_push($this->Statistics, $obj);
            }
        }
    }
}
