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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建媒体传输流的输出SRT的目标地址。
 *
 * @method string getIp() 获取输出的IP或域名。
 * @method void setIp(string $Ip) 设置输出的IP或域名。
 * @method integer getPort() 获取输出的端口。
 * @method void setPort(integer $Port) 设置输出的端口。
 */
class CreateOutputSRTSettingsDestinations extends AbstractModel
{
    /**
     * @var string 输出的IP或域名。
     */
    public $Ip;

    /**
     * @var integer 输出的端口。
     */
    public $Port;

    /**
     * @param string $Ip 输出的IP或域名。
     * @param integer $Port 输出的端口。
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
