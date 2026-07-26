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
 * AppTriggerParamBinding
 *
 * @method string getParamName() 获取<p>参数名字</p>
 * @method void setParamName(string $ParamName) 设置<p>参数名字</p>
 * @method integer getParamType() 获取<p>参数类型</p><p>枚举值：</p><ul><li>0： 字符串</li><li>1： 整数</li><li>2： 浮点数</li><li>4： 对象</li><li>5： 字符串数组</li><li>6： 整数数组</li><li>7： 浮点数数组</li><li>8： 布尔值数组</li><li>3： 布尔值</li><li>9： 对象数组</li><li>10： 文件</li><li>11： 文档</li><li>12： 图片</li><li>13： 音频</li><li>14： 视频</li><li>15： 文件数组</li><li>16： 文档数组</li><li>17： 图片数组</li><li>18： 音频数组</li><li>19： 视频数组</li><li>20： 数组嵌套</li><li>22： 密钥</li><li>99： 空值</li><li>100： 未指定类型，用于OneOf和AnyOf场景</li></ul>
 * @method void setParamType(integer $ParamType) 设置<p>参数类型</p><p>枚举值：</p><ul><li>0： 字符串</li><li>1： 整数</li><li>2： 浮点数</li><li>4： 对象</li><li>5： 字符串数组</li><li>6： 整数数组</li><li>7： 浮点数数组</li><li>8： 布尔值数组</li><li>3： 布尔值</li><li>9： 对象数组</li><li>10： 文件</li><li>11： 文档</li><li>12： 图片</li><li>13： 音频</li><li>14： 视频</li><li>15： 文件数组</li><li>16： 文档数组</li><li>17： 图片数组</li><li>18： 音频数组</li><li>19： 视频数组</li><li>20： 数组嵌套</li><li>22： 密钥</li><li>99： 空值</li><li>100： 未指定类型，用于OneOf和AnyOf场景</li></ul>
 * @method AppTriggerParamBindingValue getValue() 获取<p>参数值</p>
 * @method void setValue(AppTriggerParamBindingValue $Value) 设置<p>参数值</p>
 */
class AppTriggerParamBinding extends AbstractModel
{
    /**
     * @var string <p>参数名字</p>
     */
    public $ParamName;

    /**
     * @var integer <p>参数类型</p><p>枚举值：</p><ul><li>0： 字符串</li><li>1： 整数</li><li>2： 浮点数</li><li>4： 对象</li><li>5： 字符串数组</li><li>6： 整数数组</li><li>7： 浮点数数组</li><li>8： 布尔值数组</li><li>3： 布尔值</li><li>9： 对象数组</li><li>10： 文件</li><li>11： 文档</li><li>12： 图片</li><li>13： 音频</li><li>14： 视频</li><li>15： 文件数组</li><li>16： 文档数组</li><li>17： 图片数组</li><li>18： 音频数组</li><li>19： 视频数组</li><li>20： 数组嵌套</li><li>22： 密钥</li><li>99： 空值</li><li>100： 未指定类型，用于OneOf和AnyOf场景</li></ul>
     */
    public $ParamType;

    /**
     * @var AppTriggerParamBindingValue <p>参数值</p>
     */
    public $Value;

    /**
     * @param string $ParamName <p>参数名字</p>
     * @param integer $ParamType <p>参数类型</p><p>枚举值：</p><ul><li>0： 字符串</li><li>1： 整数</li><li>2： 浮点数</li><li>4： 对象</li><li>5： 字符串数组</li><li>6： 整数数组</li><li>7： 浮点数数组</li><li>8： 布尔值数组</li><li>3： 布尔值</li><li>9： 对象数组</li><li>10： 文件</li><li>11： 文档</li><li>12： 图片</li><li>13： 音频</li><li>14： 视频</li><li>15： 文件数组</li><li>16： 文档数组</li><li>17： 图片数组</li><li>18： 音频数组</li><li>19： 视频数组</li><li>20： 数组嵌套</li><li>22： 密钥</li><li>99： 空值</li><li>100： 未指定类型，用于OneOf和AnyOf场景</li></ul>
     * @param AppTriggerParamBindingValue $Value <p>参数值</p>
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
        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("ParamType",$param) and $param["ParamType"] !== null) {
            $this->ParamType = $param["ParamType"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = new AppTriggerParamBindingValue();
            $this->Value->deserialize($param["Value"]);
        }
    }
}
