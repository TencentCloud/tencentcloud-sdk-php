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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePhoneAlarmFlowTotalCount请求参数结构体
 *
 * @method string getModule() 获取默认monitor
 * @method void setModule(string $Module) 设置默认monitor
 * @method integer getQueryTime() 获取unix时间戳，单位：s
 * @method void setQueryTime(integer $QueryTime) 设置unix时间戳，单位：s
 */
class DescribePhoneAlarmFlowTotalCountRequest extends AbstractModel
{
    /**
     * @var string 默认monitor
     */
    public $Module;

    /**
     * @var integer unix时间戳，单位：s
     */
    public $QueryTime;

    /**
     * @param string $Module 默认monitor
     * @param integer $QueryTime unix时间戳，单位：s
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("QueryTime",$param) and $param["QueryTime"] !== null) {
            $this->QueryTime = $param["QueryTime"];
        }
    }
}
