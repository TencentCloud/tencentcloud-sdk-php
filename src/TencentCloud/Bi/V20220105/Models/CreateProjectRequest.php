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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProject请求参数结构体
 *
 * @method string getName() 获取项目名称
 * @method void setName(string $Name) 设置项目名称
 * @method string getColorCode() 获取logo底色
 * @method void setColorCode(string $ColorCode) 设置logo底色
 * @method string getLogo() 获取项目Logo
 * @method void setLogo(string $Logo) 设置项目Logo
 * @method string getMark() 获取备注
 * @method void setMark(string $Mark) 设置备注
 * @method boolean getIsApply() 获取是否允许用户申请
 * @method void setIsApply(boolean $IsApply) 设置是否允许用户申请
 * @method integer getDefaultPanelType() 获取默认看板
 * @method void setDefaultPanelType(integer $DefaultPanelType) 设置默认看板
 */
class CreateProjectRequest extends AbstractModel
{
    /**
     * @var string 项目名称
     */
    public $Name;

    /**
     * @var string logo底色
     */
    public $ColorCode;

    /**
     * @var string 项目Logo
     */
    public $Logo;

    /**
     * @var string 备注
     */
    public $Mark;

    /**
     * @var boolean 是否允许用户申请
     */
    public $IsApply;

    /**
     * @var integer 默认看板
     */
    public $DefaultPanelType;

    /**
     * @param string $Name 项目名称
     * @param string $ColorCode logo底色
     * @param string $Logo 项目Logo
     * @param string $Mark 备注
     * @param boolean $IsApply 是否允许用户申请
     * @param integer $DefaultPanelType 默认看板
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
    }
}
