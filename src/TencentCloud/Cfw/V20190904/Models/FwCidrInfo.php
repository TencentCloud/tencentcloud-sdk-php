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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 防火墙网段信息
 *
 * @method string getFwCidrType() 获取防火墙使用的网段类型，值VpcSelf/Assis/Custom分别代表自有网段优先/扩展网段优先/自定义
 * @method void setFwCidrType(string $FwCidrType) 设置防火墙使用的网段类型，值VpcSelf/Assis/Custom分别代表自有网段优先/扩展网段优先/自定义
 * @method array getFwCidrLst() 获取为每个vpc指定防火墙的网段
 * @method void setFwCidrLst(array $FwCidrLst) 设置为每个vpc指定防火墙的网段
 * @method string getComFwCidr() 获取其他防火墙占用网段，一般是防火墙需要独占vpc时指定的网段
 * @method void setComFwCidr(string $ComFwCidr) 设置其他防火墙占用网段，一般是防火墙需要独占vpc时指定的网段
 */
class FwCidrInfo extends AbstractModel
{
    /**
     * @var string 防火墙使用的网段类型，值VpcSelf/Assis/Custom分别代表自有网段优先/扩展网段优先/自定义
     */
    public $FwCidrType;

    /**
     * @var array 为每个vpc指定防火墙的网段
     */
    public $FwCidrLst;

    /**
     * @var string 其他防火墙占用网段，一般是防火墙需要独占vpc时指定的网段
     */
    public $ComFwCidr;

    /**
     * @param string $FwCidrType 防火墙使用的网段类型，值VpcSelf/Assis/Custom分别代表自有网段优先/扩展网段优先/自定义
     * @param array $FwCidrLst 为每个vpc指定防火墙的网段
     * @param string $ComFwCidr 其他防火墙占用网段，一般是防火墙需要独占vpc时指定的网段
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
        if (array_key_exists("FwCidrType",$param) and $param["FwCidrType"] !== null) {
            $this->FwCidrType = $param["FwCidrType"];
        }

        if (array_key_exists("FwCidrLst",$param) and $param["FwCidrLst"] !== null) {
            $this->FwCidrLst = [];
            foreach ($param["FwCidrLst"] as $key => $value){
                $obj = new FwVpcCidr();
                $obj->deserialize($value);
                array_push($this->FwCidrLst, $obj);
            }
        }

        if (array_key_exists("ComFwCidr",$param) and $param["ComFwCidr"] !== null) {
            $this->ComFwCidr = $param["ComFwCidr"];
        }
    }
}
