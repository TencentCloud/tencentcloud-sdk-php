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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 反查Lb绑定关系。
 *
 * @method string getLoadBalancerId() 获取lb的字符串id
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置lb的字符串id
 * @method string getVip() 获取lb的vip
 * @method void setVip(string $Vip) 设置lb的vip
 * @method array getListeners() 获取监听器规则
 * @method void setListeners(array $Listeners) 设置监听器规则
 * @method string getRegion() 获取LB所在地域
 * @method void setRegion(string $Region) 设置LB所在地域
 */
class LBItem extends AbstractModel
{
    /**
     * @var string lb的字符串id
     */
    public $LoadBalancerId;

    /**
     * @var string lb的vip
     */
    public $Vip;

    /**
     * @var array 监听器规则
     */
    public $Listeners;

    /**
     * @var string LB所在地域
     */
    public $Region;

    /**
     * @param string $LoadBalancerId lb的字符串id
     * @param string $Vip lb的vip
     * @param array $Listeners 监听器规则
     * @param string $Region LB所在地域
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Listeners",$param) and $param["Listeners"] !== null) {
            $this->Listeners = [];
            foreach ($param["Listeners"] as $key => $value){
                $obj = new ListenerItem();
                $obj->deserialize($value);
                array_push($this->Listeners, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
