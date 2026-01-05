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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRaspMaxCpu请求参数结构体
 *
 * @method integer getRaspMaxCpu() 获取rasp当前最大cpu限制，大于0，小于等于100，默认100表示不限制
 * @method void setRaspMaxCpu(integer $RaspMaxCpu) 设置rasp当前最大cpu限制，大于0，小于等于100，默认100表示不限制
 */
class ModifyRaspMaxCpuRequest extends AbstractModel
{
    /**
     * @var integer rasp当前最大cpu限制，大于0，小于等于100，默认100表示不限制
     */
    public $RaspMaxCpu;

    /**
     * @param integer $RaspMaxCpu rasp当前最大cpu限制，大于0，小于等于100，默认100表示不限制
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
        if (array_key_exists("RaspMaxCpu",$param) and $param["RaspMaxCpu"] !== null) {
            $this->RaspMaxCpu = $param["RaspMaxCpu"];
        }
    }
}
