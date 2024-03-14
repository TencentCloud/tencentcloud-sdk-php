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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 停止服务时的参数
 *
 * @method string getStopPolicy() 获取安全模式：safe
默认模式：default
 * @method void setStopPolicy(string $StopPolicy) 设置安全模式：safe
默认模式：default
 * @method integer getThreadCount() 获取线程数
 * @method void setThreadCount(integer $ThreadCount) 设置线程数
 */
class StopParams extends AbstractModel
{
    /**
     * @var string 安全模式：safe
默认模式：default
     */
    public $StopPolicy;

    /**
     * @var integer 线程数
     */
    public $ThreadCount;

    /**
     * @param string $StopPolicy 安全模式：safe
默认模式：default
     * @param integer $ThreadCount 线程数
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
        if (array_key_exists("StopPolicy",$param) and $param["StopPolicy"] !== null) {
            $this->StopPolicy = $param["StopPolicy"];
        }

        if (array_key_exists("ThreadCount",$param) and $param["ThreadCount"] !== null) {
            $this->ThreadCount = $param["ThreadCount"];
        }
    }
}
