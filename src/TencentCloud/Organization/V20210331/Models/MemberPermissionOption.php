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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建/邀请成员时可设置的财务权限
 *
 * @method integer getId() 获取<p>权限 ID</p>
 * @method void setId(integer $Id) 设置<p>权限 ID</p>
 * @method string getName() 获取<p>权限名</p>
 * @method void setName(string $Name) 设置<p>权限名</p>
 * @method string getStatus() 获取<p>展示状态</p><p>枚举值：</p><ul><li>FIXED： 已勾选且置灰，不可修改</li><li>OPTIONAL： 正常可选</li><li>DISABLE： 置灰不可选，悬浮展示原因</li></ul><p>默认值：OPTIONAL</p>
 * @method void setStatus(string $Status) 设置<p>展示状态</p><p>枚举值：</p><ul><li>FIXED： 已勾选且置灰，不可修改</li><li>OPTIONAL： 正常可选</li><li>DISABLE： 置灰不可选，悬浮展示原因</li></ul><p>默认值：OPTIONAL</p>
 * @method boolean getDefaultChecked() 获取<p>是否默认勾选</p>
 * @method void setDefaultChecked(boolean $DefaultChecked) 设置<p>是否默认勾选</p>
 * @method string getDisabledCode() 获取<p>置灰原因码</p><p>枚举值：</p><ul><li>TransferNotAllowAdd： 资金划拨权限未命中白名单</li><li>CreditAmountsNotAllowAdd： 信用额度设置权限未命中白名单</li><li>AddDiscountInheritNotAllow： 校验不通过或异常</li></ul>
 * @method void setDisabledCode(string $DisabledCode) 设置<p>置灰原因码</p><p>枚举值：</p><ul><li>TransferNotAllowAdd： 资金划拨权限未命中白名单</li><li>CreditAmountsNotAllowAdd： 信用额度设置权限未命中白名单</li><li>AddDiscountInheritNotAllow： 校验不通过或异常</li></ul>
 */
class MemberPermissionOption extends AbstractModel
{
    /**
     * @var integer <p>权限 ID</p>
     */
    public $Id;

    /**
     * @var string <p>权限名</p>
     */
    public $Name;

    /**
     * @var string <p>展示状态</p><p>枚举值：</p><ul><li>FIXED： 已勾选且置灰，不可修改</li><li>OPTIONAL： 正常可选</li><li>DISABLE： 置灰不可选，悬浮展示原因</li></ul><p>默认值：OPTIONAL</p>
     */
    public $Status;

    /**
     * @var boolean <p>是否默认勾选</p>
     */
    public $DefaultChecked;

    /**
     * @var string <p>置灰原因码</p><p>枚举值：</p><ul><li>TransferNotAllowAdd： 资金划拨权限未命中白名单</li><li>CreditAmountsNotAllowAdd： 信用额度设置权限未命中白名单</li><li>AddDiscountInheritNotAllow： 校验不通过或异常</li></ul>
     */
    public $DisabledCode;

    /**
     * @param integer $Id <p>权限 ID</p>
     * @param string $Name <p>权限名</p>
     * @param string $Status <p>展示状态</p><p>枚举值：</p><ul><li>FIXED： 已勾选且置灰，不可修改</li><li>OPTIONAL： 正常可选</li><li>DISABLE： 置灰不可选，悬浮展示原因</li></ul><p>默认值：OPTIONAL</p>
     * @param boolean $DefaultChecked <p>是否默认勾选</p>
     * @param string $DisabledCode <p>置灰原因码</p><p>枚举值：</p><ul><li>TransferNotAllowAdd： 资金划拨权限未命中白名单</li><li>CreditAmountsNotAllowAdd： 信用额度设置权限未命中白名单</li><li>AddDiscountInheritNotAllow： 校验不通过或异常</li></ul>
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DefaultChecked",$param) and $param["DefaultChecked"] !== null) {
            $this->DefaultChecked = $param["DefaultChecked"];
        }

        if (array_key_exists("DisabledCode",$param) and $param["DisabledCode"] !== null) {
            $this->DisabledCode = $param["DisabledCode"];
        }
    }
}
