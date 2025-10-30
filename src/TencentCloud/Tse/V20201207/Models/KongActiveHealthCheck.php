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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Kong网关主动健康检查配置
 *
 * @method integer getHealthyInterval() 获取主动健康检查健康探测间隔，单位：秒，0表示不开启
 * @method void setHealthyInterval(integer $HealthyInterval) 设置主动健康检查健康探测间隔，单位：秒，0表示不开启
 * @method integer getUnHealthyInterval() 获取主动健康检查异常探测间隔，单位：秒，0表示不开启
 * @method void setUnHealthyInterval(integer $UnHealthyInterval) 设置主动健康检查异常探测间隔，单位：秒，0表示不开启
 * @method string getHttpPath() 获取在 GET HTTP 请求中使用的路径，以作为主动运行状况检查的探测器运行。默认： ”/”。
 * @method void setHttpPath(string $HttpPath) 设置在 GET HTTP 请求中使用的路径，以作为主动运行状况检查的探测器运行。默认： ”/”。
 * @method float getTimeout() 获取GET HTTP 请求的超时时间，单位：秒。默认 60。
 * @method void setTimeout(float $Timeout) 设置GET HTTP 请求的超时时间，单位：秒。默认 60。
 */
class KongActiveHealthCheck extends AbstractModel
{
    /**
     * @var integer 主动健康检查健康探测间隔，单位：秒，0表示不开启
     */
    public $HealthyInterval;

    /**
     * @var integer 主动健康检查异常探测间隔，单位：秒，0表示不开启
     */
    public $UnHealthyInterval;

    /**
     * @var string 在 GET HTTP 请求中使用的路径，以作为主动运行状况检查的探测器运行。默认： ”/”。
     */
    public $HttpPath;

    /**
     * @var float GET HTTP 请求的超时时间，单位：秒。默认 60。
     */
    public $Timeout;

    /**
     * @param integer $HealthyInterval 主动健康检查健康探测间隔，单位：秒，0表示不开启
     * @param integer $UnHealthyInterval 主动健康检查异常探测间隔，单位：秒，0表示不开启
     * @param string $HttpPath 在 GET HTTP 请求中使用的路径，以作为主动运行状况检查的探测器运行。默认： ”/”。
     * @param float $Timeout GET HTTP 请求的超时时间，单位：秒。默认 60。
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
        if (array_key_exists("HealthyInterval",$param) and $param["HealthyInterval"] !== null) {
            $this->HealthyInterval = $param["HealthyInterval"];
        }

        if (array_key_exists("UnHealthyInterval",$param) and $param["UnHealthyInterval"] !== null) {
            $this->UnHealthyInterval = $param["UnHealthyInterval"];
        }

        if (array_key_exists("HttpPath",$param) and $param["HttpPath"] !== null) {
            $this->HttpPath = $param["HttpPath"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }
    }
}
