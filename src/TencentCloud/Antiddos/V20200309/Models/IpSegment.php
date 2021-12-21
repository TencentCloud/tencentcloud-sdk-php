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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ip段数据结构
 *
 * @method string getIp() 获取ip地址
 * @method void setIp(string $Ip) 设置ip地址
 * @method integer getMask() 获取ip掩码，如果为32位ip，填0
 * @method void setMask(integer $Mask) 设置ip掩码，如果为32位ip，填0
 */
class IpSegment extends AbstractModel
{
    /**
     * @var string ip地址
     */
    public $Ip;

    /**
     * @var integer ip掩码，如果为32位ip，填0
     */
    public $Mask;

    /**
     * @param string $Ip ip地址
     * @param integer $Mask ip掩码，如果为32位ip，填0
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

        if (array_key_exists("Mask",$param) and $param["Mask"] !== null) {
            $this->Mask = $param["Mask"];
        }
    }
}
