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
 * 合规详情
 *
 * @method string getConfiguration() 获取资源当前实际配置。长度为0~256位字符，即资源不合规配置
 * @method void setConfiguration(string $Configuration) 设置资源当前实际配置。长度为0~256位字符，即资源不合规配置
 * @method string getDesiredValue() 获取资源期望配置。长度为0~256位字符，即资源合规配置
 * @method void setDesiredValue(string $DesiredValue) 设置资源期望配置。长度为0~256位字符，即资源合规配置
 * @method string getOperator() 获取资源当前配置和期望配置之间的比较运算符。长度为0~16位字符，自定义规则上报评估结果此字段可能为空
 * @method void setOperator(string $Operator) 设置资源当前配置和期望配置之间的比较运算符。长度为0~16位字符，自定义规则上报评估结果此字段可能为空
 * @method string getProperty() 获取当前配置在资源属性结构体中的JSON路径。长度为0~256位字符，自定义规则上报评估结果此字段可能为空
 * @method void setProperty(string $Property) 设置当前配置在资源属性结构体中的JSON路径。长度为0~256位字符，自定义规则上报评估结果此字段可能为空
 */
class Annotation extends AbstractModel
{
    /**
     * @var string 资源当前实际配置。长度为0~256位字符，即资源不合规配置
     */
    public $Configuration;

    /**
     * @var string 资源期望配置。长度为0~256位字符，即资源合规配置
     */
    public $DesiredValue;

    /**
     * @var string 资源当前配置和期望配置之间的比较运算符。长度为0~16位字符，自定义规则上报评估结果此字段可能为空
     */
    public $Operator;

    /**
     * @var string 当前配置在资源属性结构体中的JSON路径。长度为0~256位字符，自定义规则上报评估结果此字段可能为空
     */
    public $Property;

    /**
     * @param string $Configuration 资源当前实际配置。长度为0~256位字符，即资源不合规配置
     * @param string $DesiredValue 资源期望配置。长度为0~256位字符，即资源合规配置
     * @param string $Operator 资源当前配置和期望配置之间的比较运算符。长度为0~16位字符，自定义规则上报评估结果此字段可能为空
     * @param string $Property 当前配置在资源属性结构体中的JSON路径。长度为0~256位字符，自定义规则上报评估结果此字段可能为空
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
        if (array_key_exists("Configuration",$param) and $param["Configuration"] !== null) {
            $this->Configuration = $param["Configuration"];
        }

        if (array_key_exists("DesiredValue",$param) and $param["DesiredValue"] !== null) {
            $this->DesiredValue = $param["DesiredValue"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Property",$param) and $param["Property"] !== null) {
            $this->Property = $param["Property"];
        }
    }
}
