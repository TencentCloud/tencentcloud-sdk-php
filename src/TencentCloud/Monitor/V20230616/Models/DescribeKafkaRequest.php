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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeKafka请求参数结构体
 *
 * @method string getBrokers() 获取kafka地址
 * @method void setBrokers(string $Brokers) 设置kafka地址
 * @method array getDispenseRegions() 获取转发部署地域列表
 * @method void setDispenseRegions(array $DispenseRegions) 设置转发部署地域列表
 */
class DescribeKafkaRequest extends AbstractModel
{
    /**
     * @var string kafka地址
     */
    public $Brokers;

    /**
     * @var array 转发部署地域列表
     */
    public $DispenseRegions;

    /**
     * @param string $Brokers kafka地址
     * @param array $DispenseRegions 转发部署地域列表
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
        if (array_key_exists("Brokers",$param) and $param["Brokers"] !== null) {
            $this->Brokers = $param["Brokers"];
        }

        if (array_key_exists("DispenseRegions",$param) and $param["DispenseRegions"] !== null) {
            $this->DispenseRegions = $param["DispenseRegions"];
        }
    }
}
