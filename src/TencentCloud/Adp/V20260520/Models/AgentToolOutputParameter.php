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
 * Agent 工具输出参数
 *
 * @method string getName() 获取<p>参数名称</p>
 * @method void setName(string $Name) 设置<p>参数名称</p>
 * @method string getDescription() 获取<p>变量描述</p>
 * @method void setDescription(string $Description) 设置<p>变量描述</p>
 * @method integer getType() 获取<p>参数类型</p><p>枚举值：</p><ul><li>0： STRING</li><li>1： INT</li><li>2： FLOAT</li><li>3： BOOL</li><li>4： OBJECT</li><li>5： ARRAY_STRING</li><li>6： ARRAY_INT</li><li>7： ARRAY_FLOAT</li><li>8： ARRAY_BOOL</li><li>9： ARRAY_OBJECT</li><li>20： ARRAY_ARRAY</li><li>99： NULL</li></ul>
 * @method void setType(integer $Type) 设置<p>参数类型</p><p>枚举值：</p><ul><li>0： STRING</li><li>1： INT</li><li>2： FLOAT</li><li>3： BOOL</li><li>4： OBJECT</li><li>5： ARRAY_STRING</li><li>6： ARRAY_INT</li><li>7： ARRAY_FLOAT</li><li>8： ARRAY_BOOL</li><li>9： ARRAY_OBJECT</li><li>20： ARRAY_ARRAY</li><li>99： NULL</li></ul>
 * @method array getSubParameterList() 获取<p>子参数，仅 OBJECT 或 ARRAY_OBJECT 类型时使用</p>
 * @method void setSubParameterList(array $SubParameterList) 设置<p>子参数，仅 OBJECT 或 ARRAY_OBJECT 类型时使用</p>
 * @method integer getRenderMode() 获取<p>解析方式</p>
 * @method void setRenderMode(integer $RenderMode) 设置<p>解析方式</p>
 */
class AgentToolOutputParameter extends AbstractModel
{
    /**
     * @var string <p>参数名称</p>
     */
    public $Name;

    /**
     * @var string <p>变量描述</p>
     */
    public $Description;

    /**
     * @var integer <p>参数类型</p><p>枚举值：</p><ul><li>0： STRING</li><li>1： INT</li><li>2： FLOAT</li><li>3： BOOL</li><li>4： OBJECT</li><li>5： ARRAY_STRING</li><li>6： ARRAY_INT</li><li>7： ARRAY_FLOAT</li><li>8： ARRAY_BOOL</li><li>9： ARRAY_OBJECT</li><li>20： ARRAY_ARRAY</li><li>99： NULL</li></ul>
     */
    public $Type;

    /**
     * @var array <p>子参数，仅 OBJECT 或 ARRAY_OBJECT 类型时使用</p>
     */
    public $SubParameterList;

    /**
     * @var integer <p>解析方式</p>
     */
    public $RenderMode;

    /**
     * @param string $Name <p>参数名称</p>
     * @param string $Description <p>变量描述</p>
     * @param integer $Type <p>参数类型</p><p>枚举值：</p><ul><li>0： STRING</li><li>1： INT</li><li>2： FLOAT</li><li>3： BOOL</li><li>4： OBJECT</li><li>5： ARRAY_STRING</li><li>6： ARRAY_INT</li><li>7： ARRAY_FLOAT</li><li>8： ARRAY_BOOL</li><li>9： ARRAY_OBJECT</li><li>20： ARRAY_ARRAY</li><li>99： NULL</li></ul>
     * @param array $SubParameterList <p>子参数，仅 OBJECT 或 ARRAY_OBJECT 类型时使用</p>
     * @param integer $RenderMode <p>解析方式</p>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SubParameterList",$param) and $param["SubParameterList"] !== null) {
            $this->SubParameterList = [];
            foreach ($param["SubParameterList"] as $key => $value){
                $obj = new AgentToolOutputParameter();
                $obj->deserialize($value);
                array_push($this->SubParameterList, $obj);
            }
        }

        if (array_key_exists("RenderMode",$param) and $param["RenderMode"] !== null) {
            $this->RenderMode = $param["RenderMode"];
        }
    }
}
