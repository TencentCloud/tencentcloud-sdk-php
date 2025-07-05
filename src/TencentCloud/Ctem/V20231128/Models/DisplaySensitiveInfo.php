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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 敏感信息泄露数据
 *
 * @method integer getId() 获取主键Id
 * @method void setId(integer $Id) 设置主键Id
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method string getSource() 获取来源
 * @method void setSource(string $Source) 设置来源
 * @method string getValue() 获取值
 * @method void setValue(string $Value) 设置值
 * @method DisplayToolCommon getDisplayToolCommon() 获取公共字段
 * @method void setDisplayToolCommon(DisplayToolCommon $DisplayToolCommon) 设置公共字段
 */
class DisplaySensitiveInfo extends AbstractModel
{
    /**
     * @var integer 主键Id
     */
    public $Id;

    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var string 来源
     */
    public $Source;

    /**
     * @var string 值
     */
    public $Value;

    /**
     * @var DisplayToolCommon 公共字段
     */
    public $DisplayToolCommon;

    /**
     * @param integer $Id 主键Id
     * @param string $Type 类型
     * @param string $Source 来源
     * @param string $Value 值
     * @param DisplayToolCommon $DisplayToolCommon 公共字段
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("DisplayToolCommon",$param) and $param["DisplayToolCommon"] !== null) {
            $this->DisplayToolCommon = new DisplayToolCommon();
            $this->DisplayToolCommon->deserialize($param["DisplayToolCommon"]);
        }
    }
}
