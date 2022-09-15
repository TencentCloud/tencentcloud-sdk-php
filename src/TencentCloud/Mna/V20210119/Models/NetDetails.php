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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络详细信息
 *
 * @method string getTime() 获取时间点，单位：s
 * @method void setTime(string $Time) 设置时间点，单位：s
 * @method float getCurrent() 获取流量值（bit）
 * @method void setCurrent(float $Current) 设置流量值（bit）
 */
class NetDetails extends AbstractModel
{
    /**
     * @var string 时间点，单位：s
     */
    public $Time;

    /**
     * @var float 流量值（bit）
     */
    public $Current;

    /**
     * @param string $Time 时间点，单位：s
     * @param float $Current 流量值（bit）
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Current",$param) and $param["Current"] !== null) {
            $this->Current = $param["Current"];
        }
    }
}
