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
 * 应用防护白名单攻击类型列表
 *
 * @method string getAttackTypeName() 获取攻击类型名称
 * @method void setAttackTypeName(string $AttackTypeName) 设置攻击类型名称
 * @method integer getAttackTypeID() 获取攻击类型ID
 * @method void setAttackTypeID(integer $AttackTypeID) 设置攻击类型ID
 * @method string getSource() 获取漏洞对应的功能类型，rasp:漏洞防御,memshell_inject:内存马注入
 * @method void setSource(string $Source) 设置漏洞对应的功能类型，rasp:漏洞防御,memshell_inject:内存马注入
 */
class RaspAttackTypeListItem extends AbstractModel
{
    /**
     * @var string 攻击类型名称
     */
    public $AttackTypeName;

    /**
     * @var integer 攻击类型ID
     */
    public $AttackTypeID;

    /**
     * @var string 漏洞对应的功能类型，rasp:漏洞防御,memshell_inject:内存马注入
     */
    public $Source;

    /**
     * @param string $AttackTypeName 攻击类型名称
     * @param integer $AttackTypeID 攻击类型ID
     * @param string $Source 漏洞对应的功能类型，rasp:漏洞防御,memshell_inject:内存马注入
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
        if (array_key_exists("AttackTypeName",$param) and $param["AttackTypeName"] !== null) {
            $this->AttackTypeName = $param["AttackTypeName"];
        }

        if (array_key_exists("AttackTypeID",$param) and $param["AttackTypeID"] !== null) {
            $this->AttackTypeID = $param["AttackTypeID"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }
    }
}
