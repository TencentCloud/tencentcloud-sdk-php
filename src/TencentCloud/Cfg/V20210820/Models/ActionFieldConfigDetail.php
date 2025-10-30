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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 动作动态参数返回格式
 *
 * @method string getType() 获取组件类型
可选项如下：
input  文本框
textarea  多行文本框
number  数值输入框
select   选择器
cascader  级联选择器
radio  单选
time   时间选择
 * @method void setType(string $Type) 设置组件类型
可选项如下：
input  文本框
textarea  多行文本框
number  数值输入框
select   选择器
cascader  级联选择器
radio  单选
time   时间选择
 * @method string getLable() 获取组件label
 * @method void setLable(string $Lable) 设置组件label
 * @method string getField() 获取组件唯一标识， 传回后端时的key
 * @method void setField(string $Field) 设置组件唯一标识， 传回后端时的key
 * @method string getDefaultValue() 获取默认值
 * @method void setDefaultValue(string $DefaultValue) 设置默认值
 * @method string getConfig() 获取支持配置项如下,可根据需要选择配置项，不需要配置是设置空{}：

{

  placeholder: string (占位符)

  tooltip: string (提示信息)

  reg: RegExp (对输入内容格式进行正则校验的规则)

  max: number (对于输入框，限制最大输入字符数，对于数值输入框，设置上限)

  min: number (对于数值输入框，设置下限)

  step: number (设置数值输入框的步长，默认为1)

  format: string (时间选择的格式，如YYYY-MM-DD表示年月日, YYYY-MM-DD HH:mm:ss 表示时分秒)

  separator:  string[] (多行输入框的分隔符，不传或者为空时表示不分隔，直接返回用户输入的文本字符串)

  multiple: boolean (是否多选,对选择器和级联选择器有效)

  options:  选择器的选项【支持以下两种形式】

直接给定选项数组  { value: string; label: string }[]
通过调接口获取选项                                                                                                                                       { api: string(接口地址),                                                                                                                                       params: string[] (接口参数,对应于参数配置的field，前端根据field对应的所有组件的输入值作为参数查询数据， 为空时在组件加载时直接请求数据)                                                                                                    }
}
 * @method void setConfig(string $Config) 设置支持配置项如下,可根据需要选择配置项，不需要配置是设置空{}：

{

  placeholder: string (占位符)

  tooltip: string (提示信息)

  reg: RegExp (对输入内容格式进行正则校验的规则)

  max: number (对于输入框，限制最大输入字符数，对于数值输入框，设置上限)

  min: number (对于数值输入框，设置下限)

  step: number (设置数值输入框的步长，默认为1)

  format: string (时间选择的格式，如YYYY-MM-DD表示年月日, YYYY-MM-DD HH:mm:ss 表示时分秒)

  separator:  string[] (多行输入框的分隔符，不传或者为空时表示不分隔，直接返回用户输入的文本字符串)

  multiple: boolean (是否多选,对选择器和级联选择器有效)

  options:  选择器的选项【支持以下两种形式】

直接给定选项数组  { value: string; label: string }[]
通过调接口获取选项                                                                                                                                       { api: string(接口地址),                                                                                                                                       params: string[] (接口参数,对应于参数配置的field，前端根据field对应的所有组件的输入值作为参数查询数据， 为空时在组件加载时直接请求数据)                                                                                                    }
}
 * @method integer getRequired() 获取是否必填 (0 -- 否   1-- 是)
 * @method void setRequired(integer $Required) 设置是否必填 (0 -- 否   1-- 是)
 * @method string getValidate() 获取compute配置依赖的其他field满足的条件时通过校验（如：三个表单项中必须至少有一个填写了）

[fieldName,

{ config:  此项保留，等待后面具体场景细化  }

]
 * @method void setValidate(string $Validate) 设置compute配置依赖的其他field满足的条件时通过校验（如：三个表单项中必须至少有一个填写了）

[fieldName,

{ config:  此项保留，等待后面具体场景细化  }

]
 * @method string getVisible() 获取是否可见
 * @method void setVisible(string $Visible) 设置是否可见
 */
class ActionFieldConfigDetail extends AbstractModel
{
    /**
     * @var string 组件类型
可选项如下：
input  文本框
textarea  多行文本框
number  数值输入框
select   选择器
cascader  级联选择器
radio  单选
time   时间选择
     */
    public $Type;

    /**
     * @var string 组件label
     */
    public $Lable;

    /**
     * @var string 组件唯一标识， 传回后端时的key
     */
    public $Field;

    /**
     * @var string 默认值
     */
    public $DefaultValue;

    /**
     * @var string 支持配置项如下,可根据需要选择配置项，不需要配置是设置空{}：

{

  placeholder: string (占位符)

  tooltip: string (提示信息)

  reg: RegExp (对输入内容格式进行正则校验的规则)

  max: number (对于输入框，限制最大输入字符数，对于数值输入框，设置上限)

  min: number (对于数值输入框，设置下限)

  step: number (设置数值输入框的步长，默认为1)

  format: string (时间选择的格式，如YYYY-MM-DD表示年月日, YYYY-MM-DD HH:mm:ss 表示时分秒)

  separator:  string[] (多行输入框的分隔符，不传或者为空时表示不分隔，直接返回用户输入的文本字符串)

  multiple: boolean (是否多选,对选择器和级联选择器有效)

  options:  选择器的选项【支持以下两种形式】

直接给定选项数组  { value: string; label: string }[]
通过调接口获取选项                                                                                                                                       { api: string(接口地址),                                                                                                                                       params: string[] (接口参数,对应于参数配置的field，前端根据field对应的所有组件的输入值作为参数查询数据， 为空时在组件加载时直接请求数据)                                                                                                    }
}
     */
    public $Config;

    /**
     * @var integer 是否必填 (0 -- 否   1-- 是)
     */
    public $Required;

    /**
     * @var string compute配置依赖的其他field满足的条件时通过校验（如：三个表单项中必须至少有一个填写了）

[fieldName,

{ config:  此项保留，等待后面具体场景细化  }

]
     */
    public $Validate;

    /**
     * @var string 是否可见
     */
    public $Visible;

    /**
     * @param string $Type 组件类型
可选项如下：
input  文本框
textarea  多行文本框
number  数值输入框
select   选择器
cascader  级联选择器
radio  单选
time   时间选择
     * @param string $Lable 组件label
     * @param string $Field 组件唯一标识， 传回后端时的key
     * @param string $DefaultValue 默认值
     * @param string $Config 支持配置项如下,可根据需要选择配置项，不需要配置是设置空{}：

{

  placeholder: string (占位符)

  tooltip: string (提示信息)

  reg: RegExp (对输入内容格式进行正则校验的规则)

  max: number (对于输入框，限制最大输入字符数，对于数值输入框，设置上限)

  min: number (对于数值输入框，设置下限)

  step: number (设置数值输入框的步长，默认为1)

  format: string (时间选择的格式，如YYYY-MM-DD表示年月日, YYYY-MM-DD HH:mm:ss 表示时分秒)

  separator:  string[] (多行输入框的分隔符，不传或者为空时表示不分隔，直接返回用户输入的文本字符串)

  multiple: boolean (是否多选,对选择器和级联选择器有效)

  options:  选择器的选项【支持以下两种形式】

直接给定选项数组  { value: string; label: string }[]
通过调接口获取选项                                                                                                                                       { api: string(接口地址),                                                                                                                                       params: string[] (接口参数,对应于参数配置的field，前端根据field对应的所有组件的输入值作为参数查询数据， 为空时在组件加载时直接请求数据)                                                                                                    }
}
     * @param integer $Required 是否必填 (0 -- 否   1-- 是)
     * @param string $Validate compute配置依赖的其他field满足的条件时通过校验（如：三个表单项中必须至少有一个填写了）

[fieldName,

{ config:  此项保留，等待后面具体场景细化  }

]
     * @param string $Visible 是否可见
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Lable",$param) and $param["Lable"] !== null) {
            $this->Lable = $param["Lable"];
        }

        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("Required",$param) and $param["Required"] !== null) {
            $this->Required = $param["Required"];
        }

        if (array_key_exists("Validate",$param) and $param["Validate"] !== null) {
            $this->Validate = $param["Validate"];
        }

        if (array_key_exists("Visible",$param) and $param["Visible"] !== null) {
            $this->Visible = $param["Visible"];
        }
    }
}
