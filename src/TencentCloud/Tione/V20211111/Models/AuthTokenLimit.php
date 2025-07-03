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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AuthToken 限流信息
 *
 * @method string getStrategy() 获取限频策略：PerMinute 每分钟限频；PerDay 每日限频
 * @method void setStrategy(string $Strategy) 设置限频策略：PerMinute 每分钟限频；PerDay 每日限频
 * @method integer getMax() 获取上限值
 * @method void setMax(integer $Max) 设置上限值
 */
class AuthTokenLimit extends AbstractModel
{
    /**
     * @var string 限频策略：PerMinute 每分钟限频；PerDay 每日限频
     */
    public $Strategy;

    /**
     * @var integer 上限值
     */
    public $Max;

    /**
     * @param string $Strategy 限频策略：PerMinute 每分钟限频；PerDay 每日限频
     * @param integer $Max 上限值
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
        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }
    }
}
