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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用分享白名单项
 *
 * @method integer getType() 获取白名单类型。枚举值: 1:UIN账号, 2:手机号码, 3:邮箱地址, 4:IP地址
 * @method void setType(integer $Type) 设置白名单类型。枚举值: 1:UIN账号, 2:手机号码, 3:邮箱地址, 4:IP地址
 * @method array getValues() 获取白名单值列表(UIN/手机号/邮箱/IP等)
 * @method void setValues(array $Values) 设置白名单值列表(UIN/手机号/邮箱/IP等)
 */
class AppShareWhitelistItem extends AbstractModel
{
    /**
     * @var integer 白名单类型。枚举值: 1:UIN账号, 2:手机号码, 3:邮箱地址, 4:IP地址
     */
    public $Type;

    /**
     * @var array 白名单值列表(UIN/手机号/邮箱/IP等)
     */
    public $Values;

    /**
     * @param integer $Type 白名单类型。枚举值: 1:UIN账号, 2:手机号码, 3:邮箱地址, 4:IP地址
     * @param array $Values 白名单值列表(UIN/手机号/邮箱/IP等)
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
