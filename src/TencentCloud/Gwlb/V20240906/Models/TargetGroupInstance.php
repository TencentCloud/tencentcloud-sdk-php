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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 目标组实例
 *
 * @method string getBindIP() 获取目标组实例的内网IP。
 * @method void setBindIP(string $BindIP) 设置目标组实例的内网IP。
 * @method integer getPort() 获取目标组实例的端口，只支持6081。
 * @method void setPort(integer $Port) 设置目标组实例的端口，只支持6081。
 * @method integer getWeight() 获取目标组实例的权重，只支持0或16，非0统一按16处理。
 * @method void setWeight(integer $Weight) 设置目标组实例的权重，只支持0或16，非0统一按16处理。
 */
class TargetGroupInstance extends AbstractModel
{
    /**
     * @var string 目标组实例的内网IP。
     */
    public $BindIP;

    /**
     * @var integer 目标组实例的端口，只支持6081。
     */
    public $Port;

    /**
     * @var integer 目标组实例的权重，只支持0或16，非0统一按16处理。
     */
    public $Weight;

    /**
     * @param string $BindIP 目标组实例的内网IP。
     * @param integer $Port 目标组实例的端口，只支持6081。
     * @param integer $Weight 目标组实例的权重，只支持0或16，非0统一按16处理。
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
        if (array_key_exists("BindIP",$param) and $param["BindIP"] !== null) {
            $this->BindIP = $param["BindIP"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
