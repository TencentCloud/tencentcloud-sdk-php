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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProject请求参数结构体
 *
 * @method string getName() 获取<p>项目名称</p>
 * @method void setName(string $Name) 设置<p>项目名称</p>
 * @method string getColorCode() 获取<p>logo底色</p>
 * @method void setColorCode(string $ColorCode) 设置<p>logo底色</p>
 * @method string getLogo() 获取<p>项目Logo</p>
 * @method void setLogo(string $Logo) 设置<p>项目Logo</p>
 * @method string getMark() 获取<p>备注</p>
 * @method void setMark(string $Mark) 设置<p>备注</p>
 * @method boolean getIsApply() 获取<p>是否允许用户申请</p>
 * @method void setIsApply(boolean $IsApply) 设置<p>是否允许用户申请</p>
 * @method integer getDefaultPanelType() 获取<p>默认看板</p><p>枚举值：</p><ul><li>1： 项目看板</li><li>2： 我的看板</li></ul>
 * @method void setDefaultPanelType(integer $DefaultPanelType) 设置<p>默认看板</p><p>枚举值：</p><ul><li>1： 项目看板</li><li>2： 我的看板</li></ul>
 * @method string getManagePlatform() 获取<p>管理平台</p>
 * @method void setManagePlatform(string $ManagePlatform) 设置<p>管理平台</p>
 */
class CreateProjectRequest extends AbstractModel
{
    /**
     * @var string <p>项目名称</p>
     */
    public $Name;

    /**
     * @var string <p>logo底色</p>
     */
    public $ColorCode;

    /**
     * @var string <p>项目Logo</p>
     */
    public $Logo;

    /**
     * @var string <p>备注</p>
     */
    public $Mark;

    /**
     * @var boolean <p>是否允许用户申请</p>
     */
    public $IsApply;

    /**
     * @var integer <p>默认看板</p><p>枚举值：</p><ul><li>1： 项目看板</li><li>2： 我的看板</li></ul>
     */
    public $DefaultPanelType;

    /**
     * @var string <p>管理平台</p>
     */
    public $ManagePlatform;

    /**
     * @param string $Name <p>项目名称</p>
     * @param string $ColorCode <p>logo底色</p>
     * @param string $Logo <p>项目Logo</p>
     * @param string $Mark <p>备注</p>
     * @param boolean $IsApply <p>是否允许用户申请</p>
     * @param integer $DefaultPanelType <p>默认看板</p><p>枚举值：</p><ul><li>1： 项目看板</li><li>2： 我的看板</li></ul>
     * @param string $ManagePlatform <p>管理平台</p>
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

        if (array_key_exists("ColorCode",$param) and $param["ColorCode"] !== null) {
            $this->ColorCode = $param["ColorCode"];
        }

        if (array_key_exists("Logo",$param) and $param["Logo"] !== null) {
            $this->Logo = $param["Logo"];
        }

        if (array_key_exists("Mark",$param) and $param["Mark"] !== null) {
            $this->Mark = $param["Mark"];
        }

        if (array_key_exists("IsApply",$param) and $param["IsApply"] !== null) {
            $this->IsApply = $param["IsApply"];
        }

        if (array_key_exists("DefaultPanelType",$param) and $param["DefaultPanelType"] !== null) {
            $this->DefaultPanelType = $param["DefaultPanelType"];
        }

        if (array_key_exists("ManagePlatform",$param) and $param["ManagePlatform"] !== null) {
            $this->ManagePlatform = $param["ManagePlatform"];
        }
    }
}
