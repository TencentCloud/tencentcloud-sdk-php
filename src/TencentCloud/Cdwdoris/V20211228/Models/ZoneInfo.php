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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可用区描述信息
 *
 * @method string getName() 获取可用区名称，例如"ap-guangzhou-1"
 * @method void setName(string $Name) 设置可用区名称，例如"ap-guangzhou-1"
 * @method string getDesc() 获取可用区描述信息，例如“广州一区”
 * @method void setDesc(string $Desc) 设置可用区描述信息，例如“广州一区”
 * @method integer getZoneId() 获取可用区唯一标记
 * @method void setZoneId(integer $ZoneId) 设置可用区唯一标记
 * @method integer getEncrypt() 获取Encryptid
 * @method void setEncrypt(integer $Encrypt) 设置Encryptid
 * @method boolean getMain() 获取是否为主力园区
 * @method void setMain(boolean $Main) 设置是否为主力园区
 */
class ZoneInfo extends AbstractModel
{
    /**
     * @var string 可用区名称，例如"ap-guangzhou-1"
     */
    public $Name;

    /**
     * @var string 可用区描述信息，例如“广州一区”
     */
    public $Desc;

    /**
     * @var integer 可用区唯一标记
     */
    public $ZoneId;

    /**
     * @var integer Encryptid
     */
    public $Encrypt;

    /**
     * @var boolean 是否为主力园区
     */
    public $Main;

    /**
     * @param string $Name 可用区名称，例如"ap-guangzhou-1"
     * @param string $Desc 可用区描述信息，例如“广州一区”
     * @param integer $ZoneId 可用区唯一标记
     * @param integer $Encrypt Encryptid
     * @param boolean $Main 是否为主力园区
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("Main",$param) and $param["Main"] !== null) {
            $this->Main = $param["Main"];
        }
    }
}
