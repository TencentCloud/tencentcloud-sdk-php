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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterVpcFwSwitch请求参数结构体
 *
 * @method integer getEnable() 获取开关，0：关闭，1：开启
 * @method void setEnable(integer $Enable) 设置开关，0：关闭，1：开启
 * @method array getCcnSwitch() 获取集群模式vpc间防火墙ccn开关信息
 * @method void setCcnSwitch(array $CcnSwitch) 设置集群模式vpc间防火墙ccn开关信息
 */
class ModifyClusterVpcFwSwitchRequest extends AbstractModel
{
    /**
     * @var integer 开关，0：关闭，1：开启
     */
    public $Enable;

    /**
     * @var array 集群模式vpc间防火墙ccn开关信息
     */
    public $CcnSwitch;

    /**
     * @param integer $Enable 开关，0：关闭，1：开启
     * @param array $CcnSwitch 集群模式vpc间防火墙ccn开关信息
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("CcnSwitch",$param) and $param["CcnSwitch"] !== null) {
            $this->CcnSwitch = [];
            foreach ($param["CcnSwitch"] as $key => $value){
                $obj = new CcnSwitchInfo();
                $obj->deserialize($value);
                array_push($this->CcnSwitch, $obj);
            }
        }
    }
}
