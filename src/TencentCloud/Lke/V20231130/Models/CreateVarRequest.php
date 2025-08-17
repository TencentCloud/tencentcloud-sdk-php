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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVar请求参数结构体
 *
 * @method string getAppBizId() 获取应用ID
 * @method void setAppBizId(string $AppBizId) 设置应用ID
 * @method string getVarName() 获取变量名称，不允许重复，最大支持50个字符
 * @method void setVarName(string $VarName) 设置变量名称，不允许重复，最大支持50个字符
 * @method string getVarDesc() 获取变量描述，最大支持120个字符
 * @method void setVarDesc(string $VarDesc) 设置变量描述，最大支持120个字符
 * @method string getVarType() 获取变量类型定义，支持类型如下：(STRING,INT,FLOAT,BOOL,OBJECT,ARRAY_STRING,ARRAY_INT,ARRAY_FLOAT,ARRAY_BOOL,ARRAY_OBJECT,FILE,DOCUMENT,IMAGE,AUDIO);传输过程是json字符串，标签中仅支持"STRING"类型使用
 * @method void setVarType(string $VarType) 设置变量类型定义，支持类型如下：(STRING,INT,FLOAT,BOOL,OBJECT,ARRAY_STRING,ARRAY_INT,ARRAY_FLOAT,ARRAY_BOOL,ARRAY_OBJECT,FILE,DOCUMENT,IMAGE,AUDIO);传输过程是json字符串，标签中仅支持"STRING"类型使用
 * @method string getVarDefaultValue() 获取自定义变量默认值
 * @method void setVarDefaultValue(string $VarDefaultValue) 设置自定义变量默认值
 * @method string getVarDefaultFileName() 获取自定义变量文件默认名称
 * @method void setVarDefaultFileName(string $VarDefaultFileName) 设置自定义变量文件默认名称
 * @method integer getVarModuleType() 获取参数类型
 * @method void setVarModuleType(integer $VarModuleType) 设置参数类型
 */
class CreateVarRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $AppBizId;

    /**
     * @var string 变量名称，不允许重复，最大支持50个字符
     */
    public $VarName;

    /**
     * @var string 变量描述，最大支持120个字符
     */
    public $VarDesc;

    /**
     * @var string 变量类型定义，支持类型如下：(STRING,INT,FLOAT,BOOL,OBJECT,ARRAY_STRING,ARRAY_INT,ARRAY_FLOAT,ARRAY_BOOL,ARRAY_OBJECT,FILE,DOCUMENT,IMAGE,AUDIO);传输过程是json字符串，标签中仅支持"STRING"类型使用
     */
    public $VarType;

    /**
     * @var string 自定义变量默认值
     */
    public $VarDefaultValue;

    /**
     * @var string 自定义变量文件默认名称
     */
    public $VarDefaultFileName;

    /**
     * @var integer 参数类型
     */
    public $VarModuleType;

    /**
     * @param string $AppBizId 应用ID
     * @param string $VarName 变量名称，不允许重复，最大支持50个字符
     * @param string $VarDesc 变量描述，最大支持120个字符
     * @param string $VarType 变量类型定义，支持类型如下：(STRING,INT,FLOAT,BOOL,OBJECT,ARRAY_STRING,ARRAY_INT,ARRAY_FLOAT,ARRAY_BOOL,ARRAY_OBJECT,FILE,DOCUMENT,IMAGE,AUDIO);传输过程是json字符串，标签中仅支持"STRING"类型使用
     * @param string $VarDefaultValue 自定义变量默认值
     * @param string $VarDefaultFileName 自定义变量文件默认名称
     * @param integer $VarModuleType 参数类型
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
        if (array_key_exists("AppBizId",$param) and $param["AppBizId"] !== null) {
            $this->AppBizId = $param["AppBizId"];
        }

        if (array_key_exists("VarName",$param) and $param["VarName"] !== null) {
            $this->VarName = $param["VarName"];
        }

        if (array_key_exists("VarDesc",$param) and $param["VarDesc"] !== null) {
            $this->VarDesc = $param["VarDesc"];
        }

        if (array_key_exists("VarType",$param) and $param["VarType"] !== null) {
            $this->VarType = $param["VarType"];
        }

        if (array_key_exists("VarDefaultValue",$param) and $param["VarDefaultValue"] !== null) {
            $this->VarDefaultValue = $param["VarDefaultValue"];
        }

        if (array_key_exists("VarDefaultFileName",$param) and $param["VarDefaultFileName"] !== null) {
            $this->VarDefaultFileName = $param["VarDefaultFileName"];
        }

        if (array_key_exists("VarModuleType",$param) and $param["VarModuleType"] !== null) {
            $this->VarModuleType = $param["VarModuleType"];
        }
    }
}
