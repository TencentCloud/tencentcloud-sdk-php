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
 * UpdateVar请求参数结构体
 *
 * @method string getAppBizId() 获取<p>应用ID，获取方法参看如何获取   <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">BotBizId</a>。</p>
 * @method void setAppBizId(string $AppBizId) 设置<p>应用ID，获取方法参看如何获取   <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">BotBizId</a>。</p>
 * @method string getVarId() 获取<p>变量 ID。由 CreateVar 接口生成，通过 CreateVar / DescribeVar 返回结果获取。</p>
 * @method void setVarId(string $VarId) 设置<p>变量 ID。由 CreateVar 接口生成，通过 CreateVar / DescribeVar 返回结果获取。</p>
 * @method string getVarName() 获取<p>变量名称，最大支持50个字符，英文字母开头，支持英文数字与下划线”_” 。</p>
 * @method void setVarName(string $VarName) 设置<p>变量名称，最大支持50个字符，英文字母开头，支持英文数字与下划线”_” 。</p>
 * @method string getVarDesc() 获取<p>参数描述</p>
 * @method void setVarDesc(string $VarDesc) 设置<p>参数描述</p>
 * @method string getVarType() 获取<p>变量类型</p><p>枚举值：</p><ul><li>STRING： 字符串</li><li>INT： 整形</li><li>BOOL： 布尔型</li><li>OBJECT： 对象</li><li>ARRAY_STRING： 字符串数组</li><li>ARRAY_INT： 整型数组</li><li>ARRAY_FLOAT： 浮点型数组</li><li>ARRAY_BOOL： 布尔型数组</li><li>ARRAY_OBJECT： 对象数组</li><li>FILE： 文件类型</li><li>DOCUMENT： 文档类型</li><li>IMAGE： 图片类型</li><li>AUDIO： 音频</li><li>VIDEO： 视频</li><li>ARRAY_FILE： 文件数组</li><li>ARRAY_DOCUMENT： 文档数组</li><li>ARRAY_IMAGE： 图片数组</li><li>ARRAY_AUDIO： 音频数组</li><li>ARRAY_VIDEO： 视频数组</li><li>SECRET： 秘钥</li><li>ARRAY_ARRAY： 多维数组</li></ul><p>默认值：STRING</p>
 * @method void setVarType(string $VarType) 设置<p>变量类型</p><p>枚举值：</p><ul><li>STRING： 字符串</li><li>INT： 整形</li><li>BOOL： 布尔型</li><li>OBJECT： 对象</li><li>ARRAY_STRING： 字符串数组</li><li>ARRAY_INT： 整型数组</li><li>ARRAY_FLOAT： 浮点型数组</li><li>ARRAY_BOOL： 布尔型数组</li><li>ARRAY_OBJECT： 对象数组</li><li>FILE： 文件类型</li><li>DOCUMENT： 文档类型</li><li>IMAGE： 图片类型</li><li>AUDIO： 音频</li><li>VIDEO： 视频</li><li>ARRAY_FILE： 文件数组</li><li>ARRAY_DOCUMENT： 文档数组</li><li>ARRAY_IMAGE： 图片数组</li><li>ARRAY_AUDIO： 音频数组</li><li>ARRAY_VIDEO： 视频数组</li><li>SECRET： 秘钥</li><li>ARRAY_ARRAY： 多维数组</li></ul><p>默认值：STRING</p>
 * @method string getVarDefaultValue() 获取<p>自定义变量默认值，<code>VarDefaultValue</code>&nbsp;默认为空</p>
 * @method void setVarDefaultValue(string $VarDefaultValue) 设置<p>自定义变量默认值，<code>VarDefaultValue</code>&nbsp;默认为空</p>
 * @method string getVarDefaultFileName() 获取<p>自定义变量文件默认名称，<code>VarDefaultFileName</code> 默认为空</p>
 * @method void setVarDefaultFileName(string $VarDefaultFileName) 设置<p>自定义变量文件默认名称，<code>VarDefaultFileName</code> 默认为空</p>
 * @method integer getVarModuleType() 获取<p>变量模块类型</p><p>枚举值：</p><ul><li>0： API参数</li><li>1： 环境参数</li><li>2： 应用参数</li><li>3： 系统参数</li></ul>
 * @method void setVarModuleType(integer $VarModuleType) 设置<p>变量模块类型</p><p>枚举值：</p><ul><li>0： API参数</li><li>1： 环境参数</li><li>2： 应用参数</li><li>3： 系统参数</li></ul>
 */
class UpdateVarRequest extends AbstractModel
{
    /**
     * @var string <p>应用ID，获取方法参看如何获取   <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">BotBizId</a>。</p>
     */
    public $AppBizId;

    /**
     * @var string <p>变量 ID。由 CreateVar 接口生成，通过 CreateVar / DescribeVar 返回结果获取。</p>
     */
    public $VarId;

    /**
     * @var string <p>变量名称，最大支持50个字符，英文字母开头，支持英文数字与下划线”_” 。</p>
     */
    public $VarName;

    /**
     * @var string <p>参数描述</p>
     */
    public $VarDesc;

    /**
     * @var string <p>变量类型</p><p>枚举值：</p><ul><li>STRING： 字符串</li><li>INT： 整形</li><li>BOOL： 布尔型</li><li>OBJECT： 对象</li><li>ARRAY_STRING： 字符串数组</li><li>ARRAY_INT： 整型数组</li><li>ARRAY_FLOAT： 浮点型数组</li><li>ARRAY_BOOL： 布尔型数组</li><li>ARRAY_OBJECT： 对象数组</li><li>FILE： 文件类型</li><li>DOCUMENT： 文档类型</li><li>IMAGE： 图片类型</li><li>AUDIO： 音频</li><li>VIDEO： 视频</li><li>ARRAY_FILE： 文件数组</li><li>ARRAY_DOCUMENT： 文档数组</li><li>ARRAY_IMAGE： 图片数组</li><li>ARRAY_AUDIO： 音频数组</li><li>ARRAY_VIDEO： 视频数组</li><li>SECRET： 秘钥</li><li>ARRAY_ARRAY： 多维数组</li></ul><p>默认值：STRING</p>
     */
    public $VarType;

    /**
     * @var string <p>自定义变量默认值，<code>VarDefaultValue</code>&nbsp;默认为空</p>
     */
    public $VarDefaultValue;

    /**
     * @var string <p>自定义变量文件默认名称，<code>VarDefaultFileName</code> 默认为空</p>
     */
    public $VarDefaultFileName;

    /**
     * @var integer <p>变量模块类型</p><p>枚举值：</p><ul><li>0： API参数</li><li>1： 环境参数</li><li>2： 应用参数</li><li>3： 系统参数</li></ul>
     */
    public $VarModuleType;

    /**
     * @param string $AppBizId <p>应用ID，获取方法参看如何获取   <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">BotBizId</a>。</p>
     * @param string $VarId <p>变量 ID。由 CreateVar 接口生成，通过 CreateVar / DescribeVar 返回结果获取。</p>
     * @param string $VarName <p>变量名称，最大支持50个字符，英文字母开头，支持英文数字与下划线”_” 。</p>
     * @param string $VarDesc <p>参数描述</p>
     * @param string $VarType <p>变量类型</p><p>枚举值：</p><ul><li>STRING： 字符串</li><li>INT： 整形</li><li>BOOL： 布尔型</li><li>OBJECT： 对象</li><li>ARRAY_STRING： 字符串数组</li><li>ARRAY_INT： 整型数组</li><li>ARRAY_FLOAT： 浮点型数组</li><li>ARRAY_BOOL： 布尔型数组</li><li>ARRAY_OBJECT： 对象数组</li><li>FILE： 文件类型</li><li>DOCUMENT： 文档类型</li><li>IMAGE： 图片类型</li><li>AUDIO： 音频</li><li>VIDEO： 视频</li><li>ARRAY_FILE： 文件数组</li><li>ARRAY_DOCUMENT： 文档数组</li><li>ARRAY_IMAGE： 图片数组</li><li>ARRAY_AUDIO： 音频数组</li><li>ARRAY_VIDEO： 视频数组</li><li>SECRET： 秘钥</li><li>ARRAY_ARRAY： 多维数组</li></ul><p>默认值：STRING</p>
     * @param string $VarDefaultValue <p>自定义变量默认值，<code>VarDefaultValue</code>&nbsp;默认为空</p>
     * @param string $VarDefaultFileName <p>自定义变量文件默认名称，<code>VarDefaultFileName</code> 默认为空</p>
     * @param integer $VarModuleType <p>变量模块类型</p><p>枚举值：</p><ul><li>0： API参数</li><li>1： 环境参数</li><li>2： 应用参数</li><li>3： 系统参数</li></ul>
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

        if (array_key_exists("VarModuleType",$param) and $param["VarModuleType"] !== null) {
            $this->VarModuleType = $param["VarModuleType"];
        }
    }
}
