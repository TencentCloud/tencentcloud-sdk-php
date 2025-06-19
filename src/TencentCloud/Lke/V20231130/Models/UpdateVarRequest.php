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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateVar请求参数结构体
 *
 * @method string getAppBizId() 获取应用ID
 * @method void setAppBizId(string $AppBizId) 设置应用ID
 * @method string getVarId() 获取变量ID
 * @method void setVarId(string $VarId) 设置变量ID
 * @method string getVarName() 获取变量名称，最大支持50个字符
 * @method void setVarName(string $VarName) 设置变量名称，最大支持50个字符
 * @method string getVarDesc() 获取参数描述
 * @method void setVarDesc(string $VarDesc) 设置参数描述
 * @method string getVarType() 获取参数类型
 * @method void setVarType(string $VarType) 设置参数类型
 * @method string getVarDefaultValue() 获取自定义变量默认值
 * @method void setVarDefaultValue(string $VarDefaultValue) 设置自定义变量默认值
 * @method string getVarDefaultFileName() 获取自定义变量文件默认名称
 * @method void setVarDefaultFileName(string $VarDefaultFileName) 设置自定义变量文件默认名称
 */
class UpdateVarRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $AppBizId;

    /**
     * @var string 变量ID
     */
    public $VarId;

    /**
     * @var string 变量名称，最大支持50个字符
     */
    public $VarName;

    /**
     * @var string 参数描述
     */
    public $VarDesc;

    /**
     * @var string 参数类型
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
     * @param string $AppBizId 应用ID
     * @param string $VarId 变量ID
     * @param string $VarName 变量名称，最大支持50个字符
     * @param string $VarDesc 参数描述
     * @param string $VarType 参数类型
     * @param string $VarDefaultValue 自定义变量默认值
     * @param string $VarDefaultFileName 自定义变量文件默认名称
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

        if (array_key_exists("VarId",$param) and $param["VarId"] !== null) {
            $this->VarId = $param["VarId"];
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
    }
}
