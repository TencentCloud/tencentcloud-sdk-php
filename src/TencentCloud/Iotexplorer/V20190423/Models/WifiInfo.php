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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * wifi定位信息
 *
 * @method string getMAC() 获取mac地址
 * @method void setMAC(string $MAC) 设置mac地址
 * @method integer getRSSI() 获取信号强度
 * @method void setRSSI(integer $RSSI) 设置信号强度
 */
class WifiInfo extends AbstractModel
{
    /**
     * @var string mac地址
     */
    public $MAC;

    /**
     * @var integer 信号强度
     */
    public $RSSI;

    /**
     * @param string $MAC mac地址
     * @param integer $RSSI 信号强度
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
        if (array_key_exists("MAC",$param) and $param["MAC"] !== null) {
            $this->MAC = $param["MAC"];
        }

        if (array_key_exists("RSSI",$param) and $param["RSSI"] !== null) {
            $this->RSSI = $param["RSSI"];
        }
    }
}
