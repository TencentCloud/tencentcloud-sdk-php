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
 * 变量信息
 *
 * @method string getDefaultFileName() 获取默认文件名称
 * @method void setDefaultFileName(string $DefaultFileName) 设置默认文件名称
 * @method string getDefaultValue() 获取默认值
 * @method void setDefaultValue(string $DefaultValue) 设置默认值
 * @method string getDescription() 获取变量描述
 * @method void setDescription(string $Description) 设置变量描述
 * @method integer getModuleType() 获取模块类型。枚举值: 1:环境参数, 2:应用参数, 3:系统参数, -1:所有参数
 * @method void setModuleType(integer $ModuleType) 设置模块类型。枚举值: 1:环境参数, 2:应用参数, 3:系统参数, -1:所有参数
 * @method string getName() 获取变量名称
 * @method void setName(string $Name) 设置变量名称
 * @method integer getType() 获取变量类型。枚举值: 1:字符串, 2:整数, 3:浮点数, 4:布尔值, 5:对象, 6:字符串数组, 7:整数数组, 8:浮点数数组, 9:布尔值数组, 10:对象数组, 11:文件, 12:文档, 13:图片, 14:音频, 15:视频, 16:文件数组, 17:文档数组, 18:图片数组, 19:音频数组, 20:视频数组, 21:数组的数组, 22:密钥/敏感信息, 99:空值
 * @method void setType(integer $Type) 设置变量类型。枚举值: 1:字符串, 2:整数, 3:浮点数, 4:布尔值, 5:对象, 6:字符串数组, 7:整数数组, 8:浮点数数组, 9:布尔值数组, 10:对象数组, 11:文件, 12:文档, 13:图片, 14:音频, 15:视频, 16:文件数组, 17:文档数组, 18:图片数组, 19:音频数组, 20:视频数组, 21:数组的数组, 22:密钥/敏感信息, 99:空值
 * @method string getVariableId() 获取变量ID
 * @method void setVariableId(string $VariableId) 设置变量ID
 */
class Variable extends AbstractModel
{
    /**
     * @var string 默认文件名称
     */
    public $DefaultFileName;

    /**
     * @var string 默认值
     */
    public $DefaultValue;

    /**
     * @var string 变量描述
     */
    public $Description;

    /**
     * @var integer 模块类型。枚举值: 1:环境参数, 2:应用参数, 3:系统参数, -1:所有参数
     */
    public $ModuleType;

    /**
     * @var string 变量名称
     */
    public $Name;

    /**
     * @var integer 变量类型。枚举值: 1:字符串, 2:整数, 3:浮点数, 4:布尔值, 5:对象, 6:字符串数组, 7:整数数组, 8:浮点数数组, 9:布尔值数组, 10:对象数组, 11:文件, 12:文档, 13:图片, 14:音频, 15:视频, 16:文件数组, 17:文档数组, 18:图片数组, 19:音频数组, 20:视频数组, 21:数组的数组, 22:密钥/敏感信息, 99:空值
     */
    public $Type;

    /**
     * @var string 变量ID
     */
    public $VariableId;

    /**
     * @param string $DefaultFileName 默认文件名称
     * @param string $DefaultValue 默认值
     * @param string $Description 变量描述
     * @param integer $ModuleType 模块类型。枚举值: 1:环境参数, 2:应用参数, 3:系统参数, -1:所有参数
     * @param string $Name 变量名称
     * @param integer $Type 变量类型。枚举值: 1:字符串, 2:整数, 3:浮点数, 4:布尔值, 5:对象, 6:字符串数组, 7:整数数组, 8:浮点数数组, 9:布尔值数组, 10:对象数组, 11:文件, 12:文档, 13:图片, 14:音频, 15:视频, 16:文件数组, 17:文档数组, 18:图片数组, 19:音频数组, 20:视频数组, 21:数组的数组, 22:密钥/敏感信息, 99:空值
     * @param string $VariableId 变量ID
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
        if (array_key_exists("DefaultFileName",$param) and $param["DefaultFileName"] !== null) {
            $this->DefaultFileName = $param["DefaultFileName"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ModuleType",$param) and $param["ModuleType"] !== null) {
            $this->ModuleType = $param["ModuleType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("VariableId",$param) and $param["VariableId"] !== null) {
            $this->VariableId = $param["VariableId"];
        }
    }
}
