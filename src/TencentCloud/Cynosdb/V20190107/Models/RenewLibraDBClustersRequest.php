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
 * RenewLibraDBClusters请求参数结构体
 *
 * @method integer getTimeSpan() 获取时间间隔
 * @method void setTimeSpan(integer $TimeSpan) 设置时间间隔
 * @method string getTimeUnit() 获取时间单位
 * @method void setTimeUnit(string $TimeUnit) 设置时间单位
 * @method string getClusterId() 获取分析集群 ID
 * @method void setClusterId(string $ClusterId) 设置分析集群 ID
 * @method integer getDealMode() 获取订单模式
 * @method void setDealMode(integer $DealMode) 设置订单模式
 */
class RenewLibraDBClustersRequest extends AbstractModel
{
    /**
     * @var integer 时间间隔
     */
    public $TimeSpan;

    /**
     * @var string 时间单位
     */
    public $TimeUnit;

    /**
     * @var string 分析集群 ID
     */
    public $ClusterId;

    /**
     * @var integer 订单模式
     */
    public $DealMode;

    /**
     * @param integer $TimeSpan 时间间隔
     * @param string $TimeUnit 时间单位
     * @param string $ClusterId 分析集群 ID
     * @param integer $DealMode 订单模式
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
        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("DealMode",$param) and $param["DealMode"] !== null) {
            $this->DealMode = $param["DealMode"];
        }
    }
}
