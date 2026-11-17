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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大模型安全按小时账单趋势数据点
 *
 * @method string getHour() 获取小时，取值00到23
 * @method void setHour(string $Hour) 设置小时，取值00到23
 * @method string getFee() 获取该小时账单总额（元，净费用）
 * @method void setFee(string $Fee) 设置该小时账单总额（元，净费用）
 */
class LLMHourBillTrendItem extends AbstractModel
{
    /**
     * @var string 小时，取值00到23
     */
    public $Hour;

    /**
     * @var string 该小时账单总额（元，净费用）
     */
    public $Fee;

    /**
     * @param string $Hour 小时，取值00到23
     * @param string $Fee 该小时账单总额（元，净费用）
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
        if (array_key_exists("Hour",$param) and $param["Hour"] !== null) {
            $this->Hour = $param["Hour"];
        }

        if (array_key_exists("Fee",$param) and $param["Fee"] !== null) {
            $this->Fee = $param["Fee"];
        }
    }
}
