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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 采用日志响应时间RT范围
 *
 * @method string getMin() 获取最小响应时间，单位ms
 * @method void setMin(string $Min) 设置最小响应时间，单位ms
 * @method string getMax() 获取最大响应时间，单位ms
 * @method void setMax(string $Max) 设置最大响应时间，单位ms
 */
class ReactionTimeRange extends AbstractModel
{
    /**
     * @var string 最小响应时间，单位ms
     */
    public $Min;

    /**
     * @var string 最大响应时间，单位ms
     */
    public $Max;

    /**
     * @param string $Min 最小响应时间，单位ms
     * @param string $Max 最大响应时间，单位ms
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
        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }
    }
}
