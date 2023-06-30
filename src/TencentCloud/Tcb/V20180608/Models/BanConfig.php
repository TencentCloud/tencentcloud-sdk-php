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
 * 封禁配置
 *
 * @method array getIpWhiteList() 获取ip白名单，支持ipv4、ipv6，支持CIDR
 * @method void setIpWhiteList(array $IpWhiteList) 设置ip白名单，支持ipv4、ipv6，支持CIDR
 * @method array getIpBlackList() 获取ip黑名单，支持ipv4、ipv6，支持CIDR
 * @method void setIpBlackList(array $IpBlackList) 设置ip黑名单，支持ipv4、ipv6，支持CIDR
 * @method array getCountryWhiteList() 获取地域白名单（国家英文名）
 * @method void setCountryWhiteList(array $CountryWhiteList) 设置地域白名单（国家英文名）
 * @method array getCountryBlackList() 获取地域黑名单（国家英文名）
 * @method void setCountryBlackList(array $CountryBlackList) 设置地域黑名单（国家英文名）
 */
class BanConfig extends AbstractModel
{
    /**
     * @var array ip白名单，支持ipv4、ipv6，支持CIDR
     */
    public $IpWhiteList;

    /**
     * @var array ip黑名单，支持ipv4、ipv6，支持CIDR
     */
    public $IpBlackList;

    /**
     * @var array 地域白名单（国家英文名）
     */
    public $CountryWhiteList;

    /**
     * @var array 地域黑名单（国家英文名）
     */
    public $CountryBlackList;

    /**
     * @param array $IpWhiteList ip白名单，支持ipv4、ipv6，支持CIDR
     * @param array $IpBlackList ip黑名单，支持ipv4、ipv6，支持CIDR
     * @param array $CountryWhiteList 地域白名单（国家英文名）
     * @param array $CountryBlackList 地域黑名单（国家英文名）
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
        if (array_key_exists("IpWhiteList",$param) and $param["IpWhiteList"] !== null) {
            $this->IpWhiteList = $param["IpWhiteList"];
        }

        if (array_key_exists("IpBlackList",$param) and $param["IpBlackList"] !== null) {
            $this->IpBlackList = $param["IpBlackList"];
        }

        if (array_key_exists("CountryWhiteList",$param) and $param["CountryWhiteList"] !== null) {
            $this->CountryWhiteList = $param["CountryWhiteList"];
        }

        if (array_key_exists("CountryBlackList",$param) and $param["CountryBlackList"] !== null) {
            $this->CountryBlackList = $param["CountryBlackList"];
        }
    }
}
