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
 * ModifyVulWhitelistSwitch请求参数结构体
 *
 * @method array getId() 获取<p>id列表</p>
 * @method void setId(array $Id) 设置<p>id列表</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method integer getSwitch() 获取<p>策略开关</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul>
 * @method void setSwitch(integer $Switch) 设置<p>策略开关</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul>
 */
class ModifyVulWhitelistSwitchRequest extends AbstractModel
{
    /**
     * @var array <p>id列表</p>
     */
    public $Id;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>策略开关</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul>
     */
    public $Switch;

    /**
     * @param array $Id <p>id列表</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param integer $Switch <p>策略开关</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul>
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

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }
    }
}
