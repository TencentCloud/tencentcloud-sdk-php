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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ddos黑白名单
 *
 * @method string getSwitch() 获取开关标识防护是否清空
 * @method void setSwitch(string $Switch) 设置开关标识防护是否清空
 * @method array getUserAllowBlockIp() 获取黑白名单数组
 * @method void setUserAllowBlockIp(array $UserAllowBlockIp) 设置黑白名单数组
 */
class DdosAllowBlock extends AbstractModel
{
    /**
     * @var string 开关标识防护是否清空
     */
    public $Switch;

    /**
     * @var array 黑白名单数组
     */
    public $UserAllowBlockIp;

    /**
     * @param string $Switch 开关标识防护是否清空
     * @param array $UserAllowBlockIp 黑白名单数组
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("UserAllowBlockIp",$param) and $param["UserAllowBlockIp"] !== null) {
            $this->UserAllowBlockIp = [];
            foreach ($param["UserAllowBlockIp"] as $key => $value){
                $obj = new DDoSUserAllowBlockIP();
                $obj->deserialize($value);
                array_push($this->UserAllowBlockIp, $obj);
            }
        }
    }
}
