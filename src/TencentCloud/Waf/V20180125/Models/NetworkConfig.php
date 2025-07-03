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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例的网络配置
 *
 * @method string getAntiDDosEip() 获取高防EIP地址
 * @method void setAntiDDosEip(string $AntiDDosEip) 设置高防EIP地址
 * @method integer getAntiDDosEipStatus() 获取高防EIP绑定状态。
0：解绑
1：绑定
 * @method void setAntiDDosEipStatus(integer $AntiDDosEipStatus) 设置高防EIP绑定状态。
0：解绑
1：绑定
 * @method integer getVipStatus() 获取WAF原生VIP绑定状态。
0：解绑
1：绑定
 * @method void setVipStatus(integer $VipStatus) 设置WAF原生VIP绑定状态。
0：解绑
1：绑定
 */
class NetworkConfig extends AbstractModel
{
    /**
     * @var string 高防EIP地址
     */
    public $AntiDDosEip;

    /**
     * @var integer 高防EIP绑定状态。
0：解绑
1：绑定
     */
    public $AntiDDosEipStatus;

    /**
     * @var integer WAF原生VIP绑定状态。
0：解绑
1：绑定
     */
    public $VipStatus;

    /**
     * @param string $AntiDDosEip 高防EIP地址
     * @param integer $AntiDDosEipStatus 高防EIP绑定状态。
0：解绑
1：绑定
     * @param integer $VipStatus WAF原生VIP绑定状态。
0：解绑
1：绑定
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
        if (array_key_exists("AntiDDosEip",$param) and $param["AntiDDosEip"] !== null) {
            $this->AntiDDosEip = $param["AntiDDosEip"];
        }

        if (array_key_exists("AntiDDosEipStatus",$param) and $param["AntiDDosEipStatus"] !== null) {
            $this->AntiDDosEipStatus = $param["AntiDDosEipStatus"];
        }

        if (array_key_exists("VipStatus",$param) and $param["VipStatus"] !== null) {
            $this->VipStatus = $param["VipStatus"];
        }
    }
}
