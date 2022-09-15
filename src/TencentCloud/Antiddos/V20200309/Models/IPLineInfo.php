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
 * IP线路信息
 *
 * @method string getType() 获取IP线路类型，取值[
"bgp"：BGP线路IP
"ctcc"：电信线路IP
"cucc"：联通线路IP
"cmcc"：移动线路IP
"abroad"：境外线路IP
]
 * @method void setType(string $Type) 设置IP线路类型，取值[
"bgp"：BGP线路IP
"ctcc"：电信线路IP
"cucc"：联通线路IP
"cmcc"：移动线路IP
"abroad"：境外线路IP
]
 * @method string getEip() 获取线路IP
 * @method void setEip(string $Eip) 设置线路IP
 * @method string getCname() 获取实例对应的cname
 * @method void setCname(string $Cname) 设置实例对应的cname
 * @method integer getResourceFlag() 获取资源flag，0：高防包资源，1：高防IP资源，2：非高防资源IP
 * @method void setResourceFlag(integer $ResourceFlag) 设置资源flag，0：高防包资源，1：高防IP资源，2：非高防资源IP
 */
class IPLineInfo extends AbstractModel
{
    /**
     * @var string IP线路类型，取值[
"bgp"：BGP线路IP
"ctcc"：电信线路IP
"cucc"：联通线路IP
"cmcc"：移动线路IP
"abroad"：境外线路IP
]
     */
    public $Type;

    /**
     * @var string 线路IP
     */
    public $Eip;

    /**
     * @var string 实例对应的cname
     */
    public $Cname;

    /**
     * @var integer 资源flag，0：高防包资源，1：高防IP资源，2：非高防资源IP
     */
    public $ResourceFlag;

    /**
     * @param string $Type IP线路类型，取值[
"bgp"：BGP线路IP
"ctcc"：电信线路IP
"cucc"：联通线路IP
"cmcc"：移动线路IP
"abroad"：境外线路IP
]
     * @param string $Eip 线路IP
     * @param string $Cname 实例对应的cname
     * @param integer $ResourceFlag 资源flag，0：高防包资源，1：高防IP资源，2：非高防资源IP
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Eip",$param) and $param["Eip"] !== null) {
            $this->Eip = $param["Eip"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("ResourceFlag",$param) and $param["ResourceFlag"] !== null) {
            $this->ResourceFlag = $param["ResourceFlag"];
        }
    }
}
