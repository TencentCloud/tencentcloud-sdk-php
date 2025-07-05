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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API监控明细数据
 *
 * @method array getTopStatusCode() 获取总调用数
 * @method void setTopStatusCode(array $TopStatusCode) 设置总调用数
 * @method array getTopTimeCost() 获取平均错误率
 * @method void setTopTimeCost(array $TopTimeCost) 设置平均错误率
 * @method QuantileEntity getQuantile() 获取分位值对象
 * @method void setQuantile(QuantileEntity $Quantile) 设置分位值对象
 */
class GroupApiUseStatistics extends AbstractModel
{
    /**
     * @var array 总调用数
     */
    public $TopStatusCode;

    /**
     * @var array 平均错误率
     */
    public $TopTimeCost;

    /**
     * @var QuantileEntity 分位值对象
     */
    public $Quantile;

    /**
     * @param array $TopStatusCode 总调用数
     * @param array $TopTimeCost 平均错误率
     * @param QuantileEntity $Quantile 分位值对象
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
        if (array_key_exists("TopStatusCode",$param) and $param["TopStatusCode"] !== null) {
            $this->TopStatusCode = [];
            foreach ($param["TopStatusCode"] as $key => $value){
                $obj = new ApiUseStatisticsEntity();
                $obj->deserialize($value);
                array_push($this->TopStatusCode, $obj);
            }
        }

        if (array_key_exists("TopTimeCost",$param) and $param["TopTimeCost"] !== null) {
            $this->TopTimeCost = [];
            foreach ($param["TopTimeCost"] as $key => $value){
                $obj = new ApiUseStatisticsEntity();
                $obj->deserialize($value);
                array_push($this->TopTimeCost, $obj);
            }
        }

        if (array_key_exists("Quantile",$param) and $param["Quantile"] !== null) {
            $this->Quantile = new QuantileEntity();
            $this->Quantile->deserialize($param["Quantile"]);
        }
    }
}
