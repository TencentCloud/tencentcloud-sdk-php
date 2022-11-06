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
 * 创建媒体传输流的输出的RTP配置。
 *
 * @method array getDestinations() 获取转推的目标地址，可填1~2个。
 * @method void setDestinations(array $Destinations) 设置转推的目标地址，可填1~2个。
 * @method string getFEC() 获取只能填none。
 * @method void setFEC(string $FEC) 设置只能填none。
 * @method integer getIdleTimeout() 获取空闲超时时间，单位ms。
 * @method void setIdleTimeout(integer $IdleTimeout) 设置空闲超时时间，单位ms。
 */
class CreateOutputInfoRTPSettings extends AbstractModel
{
    /**
     * @var array 转推的目标地址，可填1~2个。
     */
    public $Destinations;

    /**
     * @var string 只能填none。
     */
    public $FEC;

    /**
     * @var integer 空闲超时时间，单位ms。
     */
    public $IdleTimeout;

    /**
     * @param array $Destinations 转推的目标地址，可填1~2个。
     * @param string $FEC 只能填none。
     * @param integer $IdleTimeout 空闲超时时间，单位ms。
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
        if (array_key_exists("Destinations",$param) and $param["Destinations"] !== null) {
            $this->Destinations = [];
            foreach ($param["Destinations"] as $key => $value){
                $obj = new CreateOutputRTPSettingsDestinations();
                $obj->deserialize($value);
                array_push($this->Destinations, $obj);
            }
        }

        if (array_key_exists("FEC",$param) and $param["FEC"] !== null) {
            $this->FEC = $param["FEC"];
        }

        if (array_key_exists("IdleTimeout",$param) and $param["IdleTimeout"] !== null) {
            $this->IdleTimeout = $param["IdleTimeout"];
        }
    }
}
