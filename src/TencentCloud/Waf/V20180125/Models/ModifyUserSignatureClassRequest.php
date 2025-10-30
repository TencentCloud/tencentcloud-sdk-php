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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUserSignatureClass请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getTypeID() 获取规则类型ID
 * @method void setTypeID(string $TypeID) 设置规则类型ID
 * @method integer getStatus() 获取规则类型状态，0:关闭，1:开启
 * @method void setStatus(integer $Status) 设置规则类型状态，0:关闭，1:开启
 */
class ModifyUserSignatureClassRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 规则类型ID
     */
    public $TypeID;

    /**
     * @var integer 规则类型状态，0:关闭，1:开启
     */
    public $Status;

    /**
     * @param string $Domain 域名
     * @param string $TypeID 规则类型ID
     * @param integer $Status 规则类型状态，0:关闭，1:开启
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("TypeID",$param) and $param["TypeID"] !== null) {
            $this->TypeID = $param["TypeID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
