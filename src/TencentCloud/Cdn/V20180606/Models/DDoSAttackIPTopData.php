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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 攻击ip数据详细数据
 *
 * @method string getAttackIP() 获取攻击ip
 * @method void setAttackIP(string $AttackIP) 设置攻击ip
 * @method string getProvince() 获取攻击ip所在省份
 * @method void setProvince(string $Province) 设置攻击ip所在省份
 * @method string getCountry() 获取攻击ip所在国家
 * @method void setCountry(string $Country) 设置攻击ip所在国家
 * @method string getIsp() 获取红果电信
 * @method void setIsp(string $Isp) 设置红果电信
 * @method float getAttackCount() 获取攻击次数
 * @method void setAttackCount(float $AttackCount) 设置攻击次数
 */
class DDoSAttackIPTopData extends AbstractModel
{
    /**
     * @var string 攻击ip
     */
    public $AttackIP;

    /**
     * @var string 攻击ip所在省份
     */
    public $Province;

    /**
     * @var string 攻击ip所在国家
     */
    public $Country;

    /**
     * @var string 红果电信
     */
    public $Isp;

    /**
     * @var float 攻击次数
     */
    public $AttackCount;

    /**
     * @param string $AttackIP 攻击ip
     * @param string $Province 攻击ip所在省份
     * @param string $Country 攻击ip所在国家
     * @param string $Isp 红果电信
     * @param float $AttackCount 攻击次数
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
        if (array_key_exists("AttackIP",$param) and $param["AttackIP"] !== null) {
            $this->AttackIP = $param["AttackIP"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }

        if (array_key_exists("AttackCount",$param) and $param["AttackCount"] !== null) {
            $this->AttackCount = $param["AttackCount"];
        }
    }
}
