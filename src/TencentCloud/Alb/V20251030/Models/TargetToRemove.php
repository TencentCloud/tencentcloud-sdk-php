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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 从目标组移除的后端服务。
 *
 * @method integer getPort() 获取后端服务器使用的端口。取值范围：**1 - 65535**。

>当目标组的 **targetType** 取值为 **Instance** 时，该参数必传。
 * @method void setPort(integer $Port) 设置后端服务器使用的端口。取值范围：**1 - 65535**。

>当目标组的 **targetType** 取值为 **Instance** 时，该参数必传。
 * @method string getTargetIp() 获取后端服务IP。**TargetIp**和**TargetId**需要至少传一个。

- 当服务器组为 **Instance** 类型时，该参数为 **Eni** 的主内网 IP 或辅助内网 IP。

 * @method void setTargetIp(string $TargetIp) 设置后端服务IP。**TargetIp**和**TargetId**需要至少传一个。

- 当服务器组为 **Instance** 类型时，该参数为 **Eni** 的主内网 IP 或辅助内网 IP。
 */
class TargetToRemove extends AbstractModel
{
    /**
     * @var integer 后端服务器使用的端口。取值范围：**1 - 65535**。

>当目标组的 **targetType** 取值为 **Instance** 时，该参数必传。
     */
    public $Port;

    /**
     * @var string 后端服务IP。**TargetIp**和**TargetId**需要至少传一个。

- 当服务器组为 **Instance** 类型时，该参数为 **Eni** 的主内网 IP 或辅助内网 IP。

     */
    public $TargetIp;

    /**
     * @param integer $Port 后端服务器使用的端口。取值范围：**1 - 65535**。

>当目标组的 **targetType** 取值为 **Instance** 时，该参数必传。
     * @param string $TargetIp 后端服务IP。**TargetIp**和**TargetId**需要至少传一个。

- 当服务器组为 **Instance** 类型时，该参数为 **Eni** 的主内网 IP 或辅助内网 IP。
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
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("TargetIp",$param) and $param["TargetIp"] !== null) {
            $this->TargetIp = $param["TargetIp"];
        }
    }
}
