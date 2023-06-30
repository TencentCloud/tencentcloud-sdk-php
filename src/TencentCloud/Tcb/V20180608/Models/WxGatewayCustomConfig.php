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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全网关自定义配置
 *
 * @method boolean getIsOpenXRealIp() 获取是否开启x-real-ip
 * @method void setIsOpenXRealIp(boolean $IsOpenXRealIp) 设置是否开启x-real-ip
 * @method BanConfig getBanConfig() 获取封禁配置
 * @method void setBanConfig(BanConfig $BanConfig) 设置封禁配置
 * @method string getSourceIpType() 获取获取源ip方式，PPV1(Proxy Protocol V1)、PPV2(Proxy Protocol V2)、TOA(tcp option address)
 * @method void setSourceIpType(string $SourceIpType) 设置获取源ip方式，PPV1(Proxy Protocol V1)、PPV2(Proxy Protocol V2)、TOA(tcp option address)
 * @method CustomLogConfig getLogConfig() 获取日志信息
 * @method void setLogConfig(CustomLogConfig $LogConfig) 设置日志信息
 * @method boolean getIsAcceptHttpOne() 获取是否开启http1.0
 * @method void setIsAcceptHttpOne(boolean $IsAcceptHttpOne) 设置是否开启http1.0
 */
class WxGatewayCustomConfig extends AbstractModel
{
    /**
     * @var boolean 是否开启x-real-ip
     */
    public $IsOpenXRealIp;

    /**
     * @var BanConfig 封禁配置
     */
    public $BanConfig;

    /**
     * @var string 获取源ip方式，PPV1(Proxy Protocol V1)、PPV2(Proxy Protocol V2)、TOA(tcp option address)
     */
    public $SourceIpType;

    /**
     * @var CustomLogConfig 日志信息
     */
    public $LogConfig;

    /**
     * @var boolean 是否开启http1.0
     */
    public $IsAcceptHttpOne;

    /**
     * @param boolean $IsOpenXRealIp 是否开启x-real-ip
     * @param BanConfig $BanConfig 封禁配置
     * @param string $SourceIpType 获取源ip方式，PPV1(Proxy Protocol V1)、PPV2(Proxy Protocol V2)、TOA(tcp option address)
     * @param CustomLogConfig $LogConfig 日志信息
     * @param boolean $IsAcceptHttpOne 是否开启http1.0
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
        if (array_key_exists("IsOpenXRealIp",$param) and $param["IsOpenXRealIp"] !== null) {
            $this->IsOpenXRealIp = $param["IsOpenXRealIp"];
        }

        if (array_key_exists("BanConfig",$param) and $param["BanConfig"] !== null) {
            $this->BanConfig = new BanConfig();
            $this->BanConfig->deserialize($param["BanConfig"]);
        }

        if (array_key_exists("SourceIpType",$param) and $param["SourceIpType"] !== null) {
            $this->SourceIpType = $param["SourceIpType"];
        }

        if (array_key_exists("LogConfig",$param) and $param["LogConfig"] !== null) {
            $this->LogConfig = new CustomLogConfig();
            $this->LogConfig->deserialize($param["LogConfig"]);
        }

        if (array_key_exists("IsAcceptHttpOne",$param) and $param["IsAcceptHttpOne"] !== null) {
            $this->IsAcceptHttpOne = $param["IsAcceptHttpOne"];
        }
    }
}
