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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifyDomainOwnershipForConsole请求参数结构体
 *
 * @method string getDomain() 获取需要接入点播的域名。
 * @method void setDomain(string $Domain) 设置需要接入点播的域名。
 * @method string getAccelerateArea() 获取需要开启加速的区域： <li>Mainland: 中国大陆地区</li> <li>Internation: 海外地区及港澳台</li> <li>Global: 全球</li> 不填会根据用户注册腾讯云时的地域信息自动判断 Mainland 或 Internation	
 * @method void setAccelerateArea(string $AccelerateArea) 设置需要开启加速的区域： <li>Mainland: 中国大陆地区</li> <li>Internation: 海外地区及港澳台</li> <li>Global: 全球</li> 不填会根据用户注册腾讯云时的地域信息自动判断 Mainland 或 Internation	
 */
class VerifyDomainOwnershipForConsoleRequest extends AbstractModel
{
    /**
     * @var string 需要接入点播的域名。
     */
    public $Domain;

    /**
     * @var string 需要开启加速的区域： <li>Mainland: 中国大陆地区</li> <li>Internation: 海外地区及港澳台</li> <li>Global: 全球</li> 不填会根据用户注册腾讯云时的地域信息自动判断 Mainland 或 Internation	
     */
    public $AccelerateArea;

    /**
     * @param string $Domain 需要接入点播的域名。
     * @param string $AccelerateArea 需要开启加速的区域： <li>Mainland: 中国大陆地区</li> <li>Internation: 海外地区及港澳台</li> <li>Global: 全球</li> 不填会根据用户注册腾讯云时的地域信息自动判断 Mainland 或 Internation	
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("AccelerateArea",$param) and $param["AccelerateArea"] !== null) {
            $this->AccelerateArea = $param["AccelerateArea"];
        }
    }
}
