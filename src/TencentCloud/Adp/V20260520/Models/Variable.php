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
 * @method string getDefaultFileName() 获取<p>默认文件名称</p>
 * @method void setDefaultFileName(string $DefaultFileName) 设置<p>默认文件名称</p>
 * @method string getDefaultValue() 获取<p>默认值</p>
 * @method void setDefaultValue(string $DefaultValue) 设置<p>默认值</p>
 * @method string getDescription() 获取<p>变量描述</p>
 * @method void setDescription(string $Description) 设置<p>变量描述</p>
 * @method integer getModuleType() 获取<p>模块类型。枚举值: 1:环境参数, 2:应用参数, 3:系统参数, -1:所有参数</p>
 * @method void setModuleType(integer $ModuleType) 设置<p>模块类型。枚举值: 1:环境参数, 2:应用参数, 3:系统参数, -1:所有参数</p>
 * @method string getName() 获取<p>变量名称</p>
 * @method void setName(string $Name) 设置<p>变量名称</p>
 * @method integer getType() 获取<p>变量类型</p><p>枚举值：</p><ul><li>0： 字符串</li><li>1： 整数</li><li>2： 浮点数</li><li>3： 布尔值</li><li>4： 对象</li><li>5： 字符串数组</li><li>6： 整数数组</li><li>7： 浮点数数组</li><li>8： 布尔值数组</li><li>9： 对象数组</li><li>10： 文件</li><li>11： 文档</li><li>12： 图片</li><li>13： 音频</li><li>14： 视频</li><li>15： 文件数组</li><li>16： 文档数组</li><li>17： 图片数组</li><li>18： 音频数组</li><li>19： 视频数组</li><li>20： 数组的数组</li><li>21： 密钥</li></ul>
 * @method void setType(integer $Type) 设置<p>变量类型</p><p>枚举值：</p><ul><li>0： 字符串</li><li>1： 整数</li><li>2： 浮点数</li><li>3： 布尔值</li><li>4： 对象</li><li>5： 字符串数组</li><li>6： 整数数组</li><li>7： 浮点数数组</li><li>8： 布尔值数组</li><li>9： 对象数组</li><li>10： 文件</li><li>11： 文档</li><li>12： 图片</li><li>13： 音频</li><li>14： 视频</li><li>15： 文件数组</li><li>16： 文档数组</li><li>17： 图片数组</li><li>18： 音频数组</li><li>19： 视频数组</li><li>20： 数组的数组</li><li>21： 密钥</li></ul>
 * @method string getVariableId() 获取<p>变量ID</p>
 * @method void setVariableId(string $VariableId) 设置<p>变量ID</p>
 * @method boolean getEnableEndpoints() 获取<p>是否启用网络策略(仅环境变量生效)</p>
 * @method void setEnableEndpoints(boolean $EnableEndpoints) 设置<p>是否启用网络策略(仅环境变量生效)</p>
 * @method array getEndpointList() 获取<p>网络策略列表(支持: 精确域名、*.通配子域名、可带协议/端口/路径前缀)</p>
 * @method void setEndpointList(array $EndpointList) 设置<p>网络策略列表(支持: 精确域名、*.通配子域名、可带协议/端口/路径前缀)</p>
 */
class Variable extends AbstractModel
{
    /**
     * @var string <p>默认文件名称</p>
     */
    public $DefaultFileName;

    /**
     * @var string <p>默认值</p>
     */
    public $DefaultValue;

    /**
     * @var string <p>变量描述</p>
     */
    public $Description;

    /**
     * @var integer <p>模块类型。枚举值: 1:环境参数, 2:应用参数, 3:系统参数, -1:所有参数</p>
     */
    public $ModuleType;

    /**
     * @var string <p>变量名称</p>
     */
    public $Name;

    /**
     * @var integer <p>变量类型</p><p>枚举值：</p><ul><li>0： 字符串</li><li>1： 整数</li><li>2： 浮点数</li><li>3： 布尔值</li><li>4： 对象</li><li>5： 字符串数组</li><li>6： 整数数组</li><li>7： 浮点数数组</li><li>8： 布尔值数组</li><li>9： 对象数组</li><li>10： 文件</li><li>11： 文档</li><li>12： 图片</li><li>13： 音频</li><li>14： 视频</li><li>15： 文件数组</li><li>16： 文档数组</li><li>17： 图片数组</li><li>18： 音频数组</li><li>19： 视频数组</li><li>20： 数组的数组</li><li>21： 密钥</li></ul>
     */
    public $Type;

    /**
     * @var string <p>变量ID</p>
     */
    public $VariableId;

    /**
     * @var boolean <p>是否启用网络策略(仅环境变量生效)</p>
     */
    public $EnableEndpoints;

    /**
     * @var array <p>网络策略列表(支持: 精确域名、*.通配子域名、可带协议/端口/路径前缀)</p>
     */
    public $EndpointList;

    /**
     * @param string $DefaultFileName <p>默认文件名称</p>
     * @param string $DefaultValue <p>默认值</p>
     * @param string $Description <p>变量描述</p>
     * @param integer $ModuleType <p>模块类型。枚举值: 1:环境参数, 2:应用参数, 3:系统参数, -1:所有参数</p>
     * @param string $Name <p>变量名称</p>
     * @param integer $Type <p>变量类型</p><p>枚举值：</p><ul><li>0： 字符串</li><li>1： 整数</li><li>2： 浮点数</li><li>3： 布尔值</li><li>4： 对象</li><li>5： 字符串数组</li><li>6： 整数数组</li><li>7： 浮点数数组</li><li>8： 布尔值数组</li><li>9： 对象数组</li><li>10： 文件</li><li>11： 文档</li><li>12： 图片</li><li>13： 音频</li><li>14： 视频</li><li>15： 文件数组</li><li>16： 文档数组</li><li>17： 图片数组</li><li>18： 音频数组</li><li>19： 视频数组</li><li>20： 数组的数组</li><li>21： 密钥</li></ul>
     * @param string $VariableId <p>变量ID</p>
     * @param boolean $EnableEndpoints <p>是否启用网络策略(仅环境变量生效)</p>
     * @param array $EndpointList <p>网络策略列表(支持: 精确域名、*.通配子域名、可带协议/端口/路径前缀)</p>
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

        if (array_key_exists("EnableEndpoints",$param) and $param["EnableEndpoints"] !== null) {
            $this->EnableEndpoints = $param["EnableEndpoints"];
        }

        if (array_key_exists("EndpointList",$param) and $param["EndpointList"] !== null) {
            $this->EndpointList = $param["EndpointList"];
        }
    }
}
