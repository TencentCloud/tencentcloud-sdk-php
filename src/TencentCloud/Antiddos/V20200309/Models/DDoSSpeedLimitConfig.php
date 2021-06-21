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
 * DDoS访问限速配置
 *
 * @method integer getMode() 获取限速模式，取值[
1(基于源IP限速)
2(基于目的端口限速)
]
 * @method void setMode(integer $Mode) 设置限速模式，取值[
1(基于源IP限速)
2(基于目的端口限速)
]
 * @method array getSpeedValues() 获取限速值，每种类型的限速值最多支持1个；该字段数组至少有一种限速值
 * @method void setSpeedValues(array $SpeedValues) 设置限速值，每种类型的限速值最多支持1个；该字段数组至少有一种限速值
 * @method array getDstPortScopes() 获取此字段已弃用，请填写新字段DstPortList。
 * @method void setDstPortScopes(array $DstPortScopes) 设置此字段已弃用，请填写新字段DstPortList。
 * @method string getId() 获取配置ID，配置添加成功后生成；添加新限制配置时不用填写此字段，修改或删除限速配置时需要填写配置ID
 * @method void setId(string $Id) 设置配置ID，配置添加成功后生成；添加新限制配置时不用填写此字段，修改或删除限速配置时需要填写配置ID
 * @method string getProtocolList() 获取IP protocol numbers, 取值[
ALL(所有协议)
TCP(tcp协议)
UDP(udp协议)
SMP(smp协议)
1;2-100(自定义协议号范围,最多8个)
]
注意：当自定义协议号范围时，只能填写协议号，多个范围;分隔；当填写ALL时不能再填写其他协议或协议号。
 * @method void setProtocolList(string $ProtocolList) 设置IP protocol numbers, 取值[
ALL(所有协议)
TCP(tcp协议)
UDP(udp协议)
SMP(smp协议)
1;2-100(自定义协议号范围,最多8个)
]
注意：当自定义协议号范围时，只能填写协议号，多个范围;分隔；当填写ALL时不能再填写其他协议或协议号。
 * @method string getDstPortList() 获取端口范围列表，最多8个，多个;分隔，范围表示用-；此端口范围必须填写；填写样式1:0-65535，样式2:80;443;1000-2000
 * @method void setDstPortList(string $DstPortList) 设置端口范围列表，最多8个，多个;分隔，范围表示用-；此端口范围必须填写；填写样式1:0-65535，样式2:80;443;1000-2000
 */
class DDoSSpeedLimitConfig extends AbstractModel
{
    /**
     * @var integer 限速模式，取值[
1(基于源IP限速)
2(基于目的端口限速)
]
     */
    public $Mode;

    /**
     * @var array 限速值，每种类型的限速值最多支持1个；该字段数组至少有一种限速值
     */
    public $SpeedValues;

    /**
     * @var array 此字段已弃用，请填写新字段DstPortList。
     */
    public $DstPortScopes;

    /**
     * @var string 配置ID，配置添加成功后生成；添加新限制配置时不用填写此字段，修改或删除限速配置时需要填写配置ID
     */
    public $Id;

    /**
     * @var string IP protocol numbers, 取值[
ALL(所有协议)
TCP(tcp协议)
UDP(udp协议)
SMP(smp协议)
1;2-100(自定义协议号范围,最多8个)
]
注意：当自定义协议号范围时，只能填写协议号，多个范围;分隔；当填写ALL时不能再填写其他协议或协议号。
     */
    public $ProtocolList;

    /**
     * @var string 端口范围列表，最多8个，多个;分隔，范围表示用-；此端口范围必须填写；填写样式1:0-65535，样式2:80;443;1000-2000
     */
    public $DstPortList;

    /**
     * @param integer $Mode 限速模式，取值[
1(基于源IP限速)
2(基于目的端口限速)
]
     * @param array $SpeedValues 限速值，每种类型的限速值最多支持1个；该字段数组至少有一种限速值
     * @param array $DstPortScopes 此字段已弃用，请填写新字段DstPortList。
     * @param string $Id 配置ID，配置添加成功后生成；添加新限制配置时不用填写此字段，修改或删除限速配置时需要填写配置ID
     * @param string $ProtocolList IP protocol numbers, 取值[
ALL(所有协议)
TCP(tcp协议)
UDP(udp协议)
SMP(smp协议)
1;2-100(自定义协议号范围,最多8个)
]
注意：当自定义协议号范围时，只能填写协议号，多个范围;分隔；当填写ALL时不能再填写其他协议或协议号。
     * @param string $DstPortList 端口范围列表，最多8个，多个;分隔，范围表示用-；此端口范围必须填写；填写样式1:0-65535，样式2:80;443;1000-2000
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("SpeedValues",$param) and $param["SpeedValues"] !== null) {
            $this->SpeedValues = [];
            foreach ($param["SpeedValues"] as $key => $value){
                $obj = new SpeedValue();
                $obj->deserialize($value);
                array_push($this->SpeedValues, $obj);
            }
        }

        if (array_key_exists("DstPortScopes",$param) and $param["DstPortScopes"] !== null) {
            $this->DstPortScopes = [];
            foreach ($param["DstPortScopes"] as $key => $value){
                $obj = new PortSegment();
                $obj->deserialize($value);
                array_push($this->DstPortScopes, $obj);
            }
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ProtocolList",$param) and $param["ProtocolList"] !== null) {
            $this->ProtocolList = $param["ProtocolList"];
        }

        if (array_key_exists("DstPortList",$param) and $param["DstPortList"] !== null) {
            $this->DstPortList = $param["DstPortList"];
        }
    }
}
