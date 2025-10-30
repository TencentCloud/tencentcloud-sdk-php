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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 输出重定向配置
 *
 * @method string getDriver() 获取输出driver类型
 * @method void setDriver(string $Driver) 设置输出driver类型
 * @method array getOptions() 获取重定向配置参数
 * @method void setOptions(array $Options) 设置重定向配置参数
 */
class OutputRedirect extends AbstractModel
{
    /**
     * @var string 输出driver类型
     */
    public $Driver;

    /**
     * @var array 重定向配置参数
     */
    public $Options;

    /**
     * @param string $Driver 输出driver类型
     * @param array $Options 重定向配置参数
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
        if (array_key_exists("Driver",$param) and $param["Driver"] !== null) {
            $this->Driver = $param["Driver"];
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = $param["Options"];
        }
    }
}
