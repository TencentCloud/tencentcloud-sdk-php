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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAutoOpenProVersionConfig请求参数结构体
 *
 * @method string getStatus() 获取设置自动开通状态。
<li>CLOSE：关闭</li>
<li>OPEN：打开</li>
 * @method void setStatus(string $Status) 设置设置自动开通状态。
<li>CLOSE：关闭</li>
<li>OPEN：打开</li>
 * @method integer getAutoRepurchaseSwitch() 获取自动加购/扩容授权开关,默认 1, 0关闭, 1开启
 * @method void setAutoRepurchaseSwitch(integer $AutoRepurchaseSwitch) 设置自动加购/扩容授权开关,默认 1, 0关闭, 1开启
 * @method integer getAutoRepurchaseRenewSwitch() 获取自动加购的订单是否自动续费,默认0 ,0关闭, 1开启
 * @method void setAutoRepurchaseRenewSwitch(integer $AutoRepurchaseRenewSwitch) 设置自动加购的订单是否自动续费,默认0 ,0关闭, 1开启
 * @method integer getRepurchaseRenewSwitch() 获取手动购买的订单是否自动续费,默认0, 0关闭 ,1 开启
 * @method void setRepurchaseRenewSwitch(integer $RepurchaseRenewSwitch) 设置手动购买的订单是否自动续费,默认0, 0关闭 ,1 开启
 * @method integer getAutoBindRaspSwitch() 获取新增机器自动绑定rasp,0 关闭 1开启
 * @method void setAutoBindRaspSwitch(integer $AutoBindRaspSwitch) 设置新增机器自动绑定rasp,0 关闭 1开启
 * @method integer getAutoOpenRaspSwitch() 获取新增机器自动开启rasp防护,默认关闭,0 关闭 1开启
 * @method void setAutoOpenRaspSwitch(integer $AutoOpenRaspSwitch) 设置新增机器自动开启rasp防护,默认关闭,0 关闭 1开启
 */
class ModifyAutoOpenProVersionConfigRequest extends AbstractModel
{
    /**
     * @var string 设置自动开通状态。
<li>CLOSE：关闭</li>
<li>OPEN：打开</li>
     */
    public $Status;

    /**
     * @var integer 自动加购/扩容授权开关,默认 1, 0关闭, 1开启
     */
    public $AutoRepurchaseSwitch;

    /**
     * @var integer 自动加购的订单是否自动续费,默认0 ,0关闭, 1开启
     */
    public $AutoRepurchaseRenewSwitch;

    /**
     * @var integer 手动购买的订单是否自动续费,默认0, 0关闭 ,1 开启
     */
    public $RepurchaseRenewSwitch;

    /**
     * @var integer 新增机器自动绑定rasp,0 关闭 1开启
     */
    public $AutoBindRaspSwitch;

    /**
     * @var integer 新增机器自动开启rasp防护,默认关闭,0 关闭 1开启
     */
    public $AutoOpenRaspSwitch;

    /**
     * @param string $Status 设置自动开通状态。
<li>CLOSE：关闭</li>
<li>OPEN：打开</li>
     * @param integer $AutoRepurchaseSwitch 自动加购/扩容授权开关,默认 1, 0关闭, 1开启
     * @param integer $AutoRepurchaseRenewSwitch 自动加购的订单是否自动续费,默认0 ,0关闭, 1开启
     * @param integer $RepurchaseRenewSwitch 手动购买的订单是否自动续费,默认0, 0关闭 ,1 开启
     * @param integer $AutoBindRaspSwitch 新增机器自动绑定rasp,0 关闭 1开启
     * @param integer $AutoOpenRaspSwitch 新增机器自动开启rasp防护,默认关闭,0 关闭 1开启
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AutoRepurchaseSwitch",$param) and $param["AutoRepurchaseSwitch"] !== null) {
            $this->AutoRepurchaseSwitch = $param["AutoRepurchaseSwitch"];
        }

        if (array_key_exists("AutoRepurchaseRenewSwitch",$param) and $param["AutoRepurchaseRenewSwitch"] !== null) {
            $this->AutoRepurchaseRenewSwitch = $param["AutoRepurchaseRenewSwitch"];
        }

        if (array_key_exists("RepurchaseRenewSwitch",$param) and $param["RepurchaseRenewSwitch"] !== null) {
            $this->RepurchaseRenewSwitch = $param["RepurchaseRenewSwitch"];
        }

        if (array_key_exists("AutoBindRaspSwitch",$param) and $param["AutoBindRaspSwitch"] !== null) {
            $this->AutoBindRaspSwitch = $param["AutoBindRaspSwitch"];
        }

        if (array_key_exists("AutoOpenRaspSwitch",$param) and $param["AutoOpenRaspSwitch"] !== null) {
            $this->AutoOpenRaspSwitch = $param["AutoOpenRaspSwitch"];
        }
    }
}
