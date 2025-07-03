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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 成本分析金额返回数据模型
 *
 * @method string getKey() 获取费用类型
 * @method void setKey(string $Key) 设置费用类型
 * @method integer getDisplay() 获取是否展示
 * @method void setDisplay(integer $Display) 设置是否展示
 */
class AnalyseAmountDetail extends AbstractModel
{
    /**
     * @var string 费用类型
     */
    public $Key;

    /**
     * @var integer 是否展示
     */
    public $Display;

    /**
     * @param string $Key 费用类型
     * @param integer $Display 是否展示
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Display",$param) and $param["Display"] !== null) {
            $this->Display = $param["Display"];
        }
    }
}
