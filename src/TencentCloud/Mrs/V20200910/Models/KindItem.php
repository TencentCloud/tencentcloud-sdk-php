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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 类型描述
 *
 * @method integer getLevel() 获取等级，分为1，2，3级别，类型逐级细分
 * @method void setLevel(integer $Level) 设置等级，分为1，2，3级别，类型逐级细分
 * @method integer getID() 获取类型编号，对应唯一的类型编号
 * @method void setID(integer $ID) 设置类型编号，对应唯一的类型编号
 * @method string getName() 获取类型名称
 * @method void setName(string $Name) 设置类型名称
 */
class KindItem extends AbstractModel
{
    /**
     * @var integer 等级，分为1，2，3级别，类型逐级细分
     */
    public $Level;

    /**
     * @var integer 类型编号，对应唯一的类型编号
     */
    public $ID;

    /**
     * @var string 类型名称
     */
    public $Name;

    /**
     * @param integer $Level 等级，分为1，2，3级别，类型逐级细分
     * @param integer $ID 类型编号，对应唯一的类型编号
     * @param string $Name 类型名称
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
        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
