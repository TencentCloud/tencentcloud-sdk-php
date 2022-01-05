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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户权限
 *
 * @method string getNameSpace() 获取*表示所有数据库,db.name表示特定的name数据库。
 * @method void setNameSpace(string $NameSpace) 设置*表示所有数据库,db.name表示特定的name数据库。
 * @method integer getMask() 获取用于控制权限,0无权限，1只读，2只写，3读写。
 * @method void setMask(integer $Mask) 设置用于控制权限,0无权限，1只读，2只写，3读写。
 */
class Auth extends AbstractModel
{
    /**
     * @var string *表示所有数据库,db.name表示特定的name数据库。
     */
    public $NameSpace;

    /**
     * @var integer 用于控制权限,0无权限，1只读，2只写，3读写。
     */
    public $Mask;

    /**
     * @param string $NameSpace *表示所有数据库,db.name表示特定的name数据库。
     * @param integer $Mask 用于控制权限,0无权限，1只读，2只写，3读写。
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
        if (array_key_exists("NameSpace",$param) and $param["NameSpace"] !== null) {
            $this->NameSpace = $param["NameSpace"];
        }

        if (array_key_exists("Mask",$param) and $param["Mask"] !== null) {
            $this->Mask = $param["Mask"];
        }
    }
}
