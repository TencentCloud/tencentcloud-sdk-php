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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * exchange使用配额信息
 *
 * @method integer getMaxExchange() 获取可创建最大exchange数
 * @method void setMaxExchange(integer $MaxExchange) 设置可创建最大exchange数
 * @method integer getUsedExchange() 获取已创建exchange数
 * @method void setUsedExchange(integer $UsedExchange) 设置已创建exchange数
 */
class ExchangeQuota extends AbstractModel
{
    /**
     * @var integer 可创建最大exchange数
     */
    public $MaxExchange;

    /**
     * @var integer 已创建exchange数
     */
    public $UsedExchange;

    /**
     * @param integer $MaxExchange 可创建最大exchange数
     * @param integer $UsedExchange 已创建exchange数
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
        if (array_key_exists("MaxExchange",$param) and $param["MaxExchange"] !== null) {
            $this->MaxExchange = $param["MaxExchange"];
        }

        if (array_key_exists("UsedExchange",$param) and $param["UsedExchange"] !== null) {
            $this->UsedExchange = $param["UsedExchange"];
        }
    }
}
