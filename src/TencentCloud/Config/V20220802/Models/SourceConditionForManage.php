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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 管理端规则条件
 *
 * @method string getEmptyAs() 获取条件为空，合规：COMPLIANT，不合规：NON_COMPLIANT，无法应用：NOT_APPLICABLE
 * @method void setEmptyAs(string $EmptyAs) 设置条件为空，合规：COMPLIANT，不合规：NON_COMPLIANT，无法应用：NOT_APPLICABLE
 * @method string getSelectPath() 获取配置路径
 * @method void setSelectPath(string $SelectPath) 设置配置路径
 * @method string getOperator() 获取操作运算符
 * @method void setOperator(string $Operator) 设置操作运算符
 * @method boolean getRequired() 获取是否必须
 * @method void setRequired(boolean $Required) 设置是否必须
 * @method string getDesiredValue() 获取期望值
 * @method void setDesiredValue(string $DesiredValue) 设置期望值
 */
class SourceConditionForManage extends AbstractModel
{
    /**
     * @var string 条件为空，合规：COMPLIANT，不合规：NON_COMPLIANT，无法应用：NOT_APPLICABLE
     */
    public $EmptyAs;

    /**
     * @var string 配置路径
     */
    public $SelectPath;

    /**
     * @var string 操作运算符
     */
    public $Operator;

    /**
     * @var boolean 是否必须
     */
    public $Required;

    /**
     * @var string 期望值
     */
    public $DesiredValue;

    /**
     * @param string $EmptyAs 条件为空，合规：COMPLIANT，不合规：NON_COMPLIANT，无法应用：NOT_APPLICABLE
     * @param string $SelectPath 配置路径
     * @param string $Operator 操作运算符
     * @param boolean $Required 是否必须
     * @param string $DesiredValue 期望值
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
        if (array_key_exists("EmptyAs",$param) and $param["EmptyAs"] !== null) {
            $this->EmptyAs = $param["EmptyAs"];
        }

        if (array_key_exists("SelectPath",$param) and $param["SelectPath"] !== null) {
            $this->SelectPath = $param["SelectPath"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Required",$param) and $param["Required"] !== null) {
            $this->Required = $param["Required"];
        }

        if (array_key_exists("DesiredValue",$param) and $param["DesiredValue"] !== null) {
            $this->DesiredValue = $param["DesiredValue"];
        }
    }
}
