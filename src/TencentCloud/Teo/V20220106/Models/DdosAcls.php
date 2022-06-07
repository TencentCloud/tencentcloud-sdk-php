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
 * ddos端口过滤
 *
 * @method string getSwitch() 获取开关 off清空规则标识
 * @method void setSwitch(string $Switch) 设置开关 off清空规则标识
 * @method array getAcl() 获取端口过了详细参数
 * @method void setAcl(array $Acl) 设置端口过了详细参数
 */
class DdosAcls extends AbstractModel
{
    /**
     * @var string 开关 off清空规则标识
     */
    public $Switch;

    /**
     * @var array 端口过了详细参数
     */
    public $Acl;

    /**
     * @param string $Switch 开关 off清空规则标识
     * @param array $Acl 端口过了详细参数
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

        if (array_key_exists("Acl",$param) and $param["Acl"] !== null) {
            $this->Acl = [];
            foreach ($param["Acl"] as $key => $value){
                $obj = new DDoSAcl();
                $obj->deserialize($value);
                array_push($this->Acl, $obj);
            }
        }
    }
}
