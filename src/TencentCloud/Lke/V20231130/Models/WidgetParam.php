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
 * Widget参数配置
 *
 * @method string getName() 获取<p>参数名称</p>
 * @method void setName(string $Name) 设置<p>参数名称</p>
 * @method integer getType() 获取<p>参数类型</p><p>枚举值：</p><ul><li>0： string</li><li>1： int</li><li>2： float</li><li>3： bool</li><li>4： object</li><li>5： array_string</li><li>6： array_int</li><li>7： array_float</li><li>8： array_bool</li><li>9： array_object</li><li>20： array_array</li></ul>
 * @method void setType(integer $Type) 设置<p>参数类型</p><p>枚举值：</p><ul><li>0： string</li><li>1： int</li><li>2： float</li><li>3： bool</li><li>4： object</li><li>5： array_string</li><li>6： array_int</li><li>7： array_float</li><li>8： array_bool</li><li>9： array_object</li><li>20： array_array</li></ul>
 * @method array getSubParams() 获取<p>子参数</p>
 * @method void setSubParams(array $SubParams) 设置<p>子参数</p>
 * @method string getDefaultValue() 获取<p>默认值, Input未指定时，使用该值</p>
 * @method void setDefaultValue(string $DefaultValue) 设置<p>默认值, Input未指定时，使用该值</p>
 * @method AgentInput getInput() 获取<p>输入的值</p>
 * @method void setInput(AgentInput $Input) 设置<p>输入的值</p>
 */
class WidgetParam extends AbstractModel
{
    /**
     * @var string <p>参数名称</p>
     */
    public $Name;

    /**
     * @var integer <p>参数类型</p><p>枚举值：</p><ul><li>0： string</li><li>1： int</li><li>2： float</li><li>3： bool</li><li>4： object</li><li>5： array_string</li><li>6： array_int</li><li>7： array_float</li><li>8： array_bool</li><li>9： array_object</li><li>20： array_array</li></ul>
     */
    public $Type;

    /**
     * @var array <p>子参数</p>
     */
    public $SubParams;

    /**
     * @var string <p>默认值, Input未指定时，使用该值</p>
     */
    public $DefaultValue;

    /**
     * @var AgentInput <p>输入的值</p>
     */
    public $Input;

    /**
     * @param string $Name <p>参数名称</p>
     * @param integer $Type <p>参数类型</p><p>枚举值：</p><ul><li>0： string</li><li>1： int</li><li>2： float</li><li>3： bool</li><li>4： object</li><li>5： array_string</li><li>6： array_int</li><li>7： array_float</li><li>8： array_bool</li><li>9： array_object</li><li>20： array_array</li></ul>
     * @param array $SubParams <p>子参数</p>
     * @param string $DefaultValue <p>默认值, Input未指定时，使用该值</p>
     * @param AgentInput $Input <p>输入的值</p>
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SubParams",$param) and $param["SubParams"] !== null) {
            $this->SubParams = [];
            foreach ($param["SubParams"] as $key => $value){
                $obj = new WidgetParam();
                $obj->deserialize($value);
                array_push($this->SubParams, $obj);
            }
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new AgentInput();
            $this->Input->deserialize($param["Input"]);
        }
    }
}
