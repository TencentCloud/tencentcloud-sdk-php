<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BOT统计结果数据
 *
 * @method string getMetric() 获取指标名称
 * @method void setMetric(string $Metric) 设置指标名称
 * @method array getDetailData() 获取指标详细数据
 * @method void setDetailData(array $DetailData) 设置指标详细数据
 */
class BotStats extends AbstractModel
{
    /**
     * @var string 指标名称
     */
    public $Metric;

    /**
     * @var array 指标详细数据
     */
    public $DetailData;

    /**
     * @param string $Metric 指标名称
     * @param array $DetailData 指标详细数据
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
        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("DetailData",$param) and $param["DetailData"] !== null) {
            $this->DetailData = [];
            foreach ($param["DetailData"] as $key => $value){
                $obj = new BotStatsDetailData();
                $obj->deserialize($value);
                array_push($this->DetailData, $obj);
            }
        }
    }
}
