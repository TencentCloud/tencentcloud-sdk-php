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
 * ModifyWebHookReceiver请求参数结构体
 *
 * @method integer getId() 获取id
 * @method void setId(integer $Id) 设置id
 * @method string getName() 获取接收人名称
 * @method void setName(string $Name) 设置接收人名称
 * @method string getAddr() 获取webhook地址
 * @method void setAddr(string $Addr) 设置webhook地址
 * @method boolean getIsModify() 获取是否修改
 * @method void setIsModify(boolean $IsModify) 设置是否修改
 */
class ModifyWebHookReceiverRequest extends AbstractModel
{
    /**
     * @var integer id
     */
    public $Id;

    /**
     * @var string 接收人名称
     */
    public $Name;

    /**
     * @var string webhook地址
     */
    public $Addr;

    /**
     * @var boolean 是否修改
     */
    public $IsModify;

    /**
     * @param integer $Id id
     * @param string $Name 接收人名称
     * @param string $Addr webhook地址
     * @param boolean $IsModify 是否修改
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Addr",$param) and $param["Addr"] !== null) {
            $this->Addr = $param["Addr"];
        }

        if (array_key_exists("IsModify",$param) and $param["IsModify"] !== null) {
            $this->IsModify = $param["IsModify"];
        }
    }
}
