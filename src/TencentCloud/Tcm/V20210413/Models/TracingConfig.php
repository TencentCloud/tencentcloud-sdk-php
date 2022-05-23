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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 调用链配置
 *
 * @method float getSampling() 获取调用链采样率，百分比
 * @method void setSampling(float $Sampling) 设置调用链采样率，百分比
 * @method boolean getEnable() 获取是否启用调用跟踪
 * @method void setEnable(boolean $Enable) 设置是否启用调用跟踪
 * @method APM getAPM() 获取腾讯云 APM 服务相关参数
 * @method void setAPM(APM $APM) 设置腾讯云 APM 服务相关参数
 * @method TracingZipkin getZipkin() 获取启动第三方服务器的地址
 * @method void setZipkin(TracingZipkin $Zipkin) 设置启动第三方服务器的地址
 */
class TracingConfig extends AbstractModel
{
    /**
     * @var float 调用链采样率，百分比
     */
    public $Sampling;

    /**
     * @var boolean 是否启用调用跟踪
     */
    public $Enable;

    /**
     * @var APM 腾讯云 APM 服务相关参数
     */
    public $APM;

    /**
     * @var TracingZipkin 启动第三方服务器的地址
     */
    public $Zipkin;

    /**
     * @param float $Sampling 调用链采样率，百分比
     * @param boolean $Enable 是否启用调用跟踪
     * @param APM $APM 腾讯云 APM 服务相关参数
     * @param TracingZipkin $Zipkin 启动第三方服务器的地址
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
        if (array_key_exists("Sampling",$param) and $param["Sampling"] !== null) {
            $this->Sampling = $param["Sampling"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("APM",$param) and $param["APM"] !== null) {
            $this->APM = new APM();
            $this->APM->deserialize($param["APM"]);
        }

        if (array_key_exists("Zipkin",$param) and $param["Zipkin"] !== null) {
            $this->Zipkin = new TracingZipkin();
            $this->Zipkin->deserialize($param["Zipkin"]);
        }
    }
}
