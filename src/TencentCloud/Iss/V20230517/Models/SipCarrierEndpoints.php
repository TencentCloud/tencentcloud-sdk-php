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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多运营商的国标服务器IP地址
 *
 * @method string getCT() 获取<p>电信IP</p>
 * @method void setCT(string $CT) 设置<p>电信IP</p>
 * @method string getCU() 获取<p>联通IP</p>
 * @method void setCU(string $CU) 设置<p>联通IP</p>
 * @method string getCMCC() 获取<p>移动IP</p>
 * @method void setCMCC(string $CMCC) 设置<p>移动IP</p>
 * @method string getBGP() 获取<p>腾讯网络IP</p>
 * @method void setBGP(string $BGP) 设置<p>腾讯网络IP</p>
 * @method string getCAP() 获取<p>中小运营商IP</p>
 * @method void setCAP(string $CAP) 设置<p>中小运营商IP</p>
 */
class SipCarrierEndpoints extends AbstractModel
{
    /**
     * @var string <p>电信IP</p>
     */
    public $CT;

    /**
     * @var string <p>联通IP</p>
     */
    public $CU;

    /**
     * @var string <p>移动IP</p>
     */
    public $CMCC;

    /**
     * @var string <p>腾讯网络IP</p>
     */
    public $BGP;

    /**
     * @var string <p>中小运营商IP</p>
     */
    public $CAP;

    /**
     * @param string $CT <p>电信IP</p>
     * @param string $CU <p>联通IP</p>
     * @param string $CMCC <p>移动IP</p>
     * @param string $BGP <p>腾讯网络IP</p>
     * @param string $CAP <p>中小运营商IP</p>
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
        if (array_key_exists("CT",$param) and $param["CT"] !== null) {
            $this->CT = $param["CT"];
        }

        if (array_key_exists("CU",$param) and $param["CU"] !== null) {
            $this->CU = $param["CU"];
        }

        if (array_key_exists("CMCC",$param) and $param["CMCC"] !== null) {
            $this->CMCC = $param["CMCC"];
        }

        if (array_key_exists("BGP",$param) and $param["BGP"] !== null) {
            $this->BGP = $param["BGP"];
        }

        if (array_key_exists("CAP",$param) and $param["CAP"] !== null) {
            $this->CAP = $param["CAP"];
        }
    }
}
