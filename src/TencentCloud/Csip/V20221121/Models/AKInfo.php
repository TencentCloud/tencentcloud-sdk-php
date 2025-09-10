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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AK简要信息
 *
 * @method integer getID() 获取ak对应id
 * @method void setID(integer $ID) 设置ak对应id
 * @method string getName() 获取ak具体值 临时密钥时返回临时密钥
 * @method void setName(string $Name) 设置ak具体值 临时密钥时返回临时密钥
 * @method string getUser() 获取所属账号
 * @method void setUser(string $User) 设置所属账号
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 */
class AKInfo extends AbstractModel
{
    /**
     * @var integer ak对应id
     */
    public $ID;

    /**
     * @var string ak具体值 临时密钥时返回临时密钥
     */
    public $Name;

    /**
     * @var string 所属账号
     */
    public $User;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @param integer $ID ak对应id
     * @param string $Name ak具体值 临时密钥时返回临时密钥
     * @param string $User 所属账号
     * @param string $Remark 备注
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
