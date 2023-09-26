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
 * ModifyProject请求参数结构体
 *
 * @method integer getId() 获取项目Id
 * @method void setId(integer $Id) 设置项目Id
 * @method string getName() 获取名字
 * @method void setName(string $Name) 设置名字
 * @method string getColorCode() 获取颜色值
 * @method void setColorCode(string $ColorCode) 设置颜色值
 * @method string getLogo() 获取图标
 * @method void setLogo(string $Logo) 设置图标
 * @method string getMark() 获取备注
 * @method void setMark(string $Mark) 设置备注
 * @method boolean getIsApply() 获取可申请
 * @method void setIsApply(boolean $IsApply) 设置可申请
 * @method string getSeed() 获取种子
 * @method void setSeed(string $Seed) 设置种子
 * @method integer getDefaultPanelType() 获取默认看板
 * @method void setDefaultPanelType(integer $DefaultPanelType) 设置默认看板
 * @method string getPanelScope() 获取2
 * @method void setPanelScope(string $PanelScope) 设置2
 */
class ModifyProjectRequest extends AbstractModel
{
    /**
     * @var integer 项目Id
     */
    public $Id;

    /**
     * @var string 名字
     */
    public $Name;

    /**
     * @var string 颜色值
     */
    public $ColorCode;

    /**
     * @var string 图标
     */
    public $Logo;

    /**
     * @var string 备注
     */
    public $Mark;

    /**
     * @var boolean 可申请
     */
    public $IsApply;

    /**
     * @var string 种子
     */
    public $Seed;

    /**
     * @var integer 默认看板
     */
    public $DefaultPanelType;

    /**
     * @var string 2
     */
    public $PanelScope;

    /**
     * @param integer $Id 项目Id
     * @param string $Name 名字
     * @param string $ColorCode 颜色值
     * @param string $Logo 图标
     * @param string $Mark 备注
     * @param boolean $IsApply 可申请
     * @param string $Seed 种子
     * @param integer $DefaultPanelType 默认看板
     * @param string $PanelScope 2
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

        if (array_key_exists("Seed",$param) and $param["Seed"] !== null) {
            $this->Seed = $param["Seed"];
        }

        if (array_key_exists("DefaultPanelType",$param) and $param["DefaultPanelType"] !== null) {
            $this->DefaultPanelType = $param["DefaultPanelType"];
        }

        if (array_key_exists("PanelScope",$param) and $param["PanelScope"] !== null) {
            $this->PanelScope = $param["PanelScope"];
        }
    }
}
