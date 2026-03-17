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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 过检机器和对应的hostip
 *
 * @method string getUuid() 获取服务器id
 * @method void setUuid(string $Uuid) 设置服务器id
 * @method string getHostip() 获取服务器ip
 * @method void setHostip(string $Hostip) 设置服务器ip
 */
class UuidHostip extends AbstractModel
{
    /**
     * @var string 服务器id
     */
    public $Uuid;

    /**
     * @var string 服务器ip
     */
    public $Hostip;

    /**
     * @param string $Uuid 服务器id
     * @param string $Hostip 服务器ip
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Hostip",$param) and $param["Hostip"] !== null) {
            $this->Hostip = $param["Hostip"];
        }
    }
}
