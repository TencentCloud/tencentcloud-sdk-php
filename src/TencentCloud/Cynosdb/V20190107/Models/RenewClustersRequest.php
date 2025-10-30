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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RenewClusters请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method float getTimeSpan() 获取续费时长
 * @method void setTimeSpan(float $TimeSpan) 设置续费时长
 * @method string getTimeUnit() 获取时间单位 y,m,d,h,i,s
 * @method void setTimeUnit(string $TimeUnit) 设置时间单位 y,m,d,h,i,s
 * @method integer getDealMode() 获取交易模式 0-下单并支付 1-下单
 * @method void setDealMode(integer $DealMode) 设置交易模式 0-下单并支付 1-下单
 */
class RenewClustersRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var float 续费时长
     */
    public $TimeSpan;

    /**
     * @var string 时间单位 y,m,d,h,i,s
     */
    public $TimeUnit;

    /**
     * @var integer 交易模式 0-下单并支付 1-下单
     */
    public $DealMode;

    /**
     * @param string $ClusterId 集群ID
     * @param float $TimeSpan 续费时长
     * @param string $TimeUnit 时间单位 y,m,d,h,i,s
     * @param integer $DealMode 交易模式 0-下单并支付 1-下单
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("DealMode",$param) and $param["DealMode"] !== null) {
            $this->DealMode = $param["DealMode"];
        }
    }
}
