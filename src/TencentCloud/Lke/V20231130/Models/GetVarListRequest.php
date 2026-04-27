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
 * GetVarList请求参数结构体
 *
 * @method string getAppBizId() 获取<p>应用ID，获取方法参看如何获取   <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">BotBizId</a>。</p>
 * @method void setAppBizId(string $AppBizId) 设置<p>应用ID，获取方法参看如何获取   <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">BotBizId</a>。</p>
 * @method array getVarIds() 获取<p>变量ID数组</p>
 * @method void setVarIds(array $VarIds) 设置<p>变量ID数组</p>
 * @method string getKeyword() 获取<p>按变量名称关键词搜索</p>
 * @method void setKeyword(string $Keyword) 设置<p>按变量名称关键词搜索</p>
 * @method integer getOffset() 获取<p>起始偏移量（默认0），取值范围 &gt; 0</p>
 * @method void setOffset(integer $Offset) 设置<p>起始偏移量（默认0），取值范围 &gt; 0</p>
 * @method integer getLimit() 获取<p>限定数量（默认15），取值范围 1-200</p>
 * @method void setLimit(integer $Limit) 设置<p>限定数量（默认15），取值范围 1-200</p>
 * @method string getVarType() 获取<p>按变量类型过滤，默认查询所有类型(STRING,INT,FLOAT,BOOL,OBJECT,ARRAY_STRING,ARRAY_INT,ARRAY_FLOAT,ARRAY_BOOL,ARRAY_OBJECT,FILE,DOCUMENT,IMAGE,AUDIO)</p>
 * @method void setVarType(string $VarType) 设置<p>按变量类型过滤，默认查询所有类型(STRING,INT,FLOAT,BOOL,OBJECT,ARRAY_STRING,ARRAY_INT,ARRAY_FLOAT,ARRAY_BOOL,ARRAY_OBJECT,FILE,DOCUMENT,IMAGE,AUDIO)</p>
 * @method boolean getNeedInternalVar() 获取<p>是否需要内部变量, 在结果中包含平台预置的“内置自定义变量” (默认false)。</p><ul><li>当&nbsp;<code>NeedInternalVar = true</code>&nbsp;且&nbsp;<code>VarModuleType</code>&nbsp;为&nbsp;<code>AllVar</code>&nbsp;或&nbsp;<code>ApiVar</code>&nbsp;时，返回列表会在用户变量之前拼入内置变量，并同样支持&nbsp;<code>Keyword</code>&nbsp;<code>VarType</code>&nbsp;<code>VarIds</code>&nbsp;过滤。</li><li>其他<code>VarModuleType</code>下，该开关不生效。</li></ul>
 * @method void setNeedInternalVar(boolean $NeedInternalVar) 设置<p>是否需要内部变量, 在结果中包含平台预置的“内置自定义变量” (默认false)。</p><ul><li>当&nbsp;<code>NeedInternalVar = true</code>&nbsp;且&nbsp;<code>VarModuleType</code>&nbsp;为&nbsp;<code>AllVar</code>&nbsp;或&nbsp;<code>ApiVar</code>&nbsp;时，返回列表会在用户变量之前拼入内置变量，并同样支持&nbsp;<code>Keyword</code>&nbsp;<code>VarType</code>&nbsp;<code>VarIds</code>&nbsp;过滤。</li><li>其他<code>VarModuleType</code>下，该开关不生效。</li></ul>
 * @method integer getVarModuleType() 获取<p>变量模块类型</p><p>枚举值：</p><ul><li>0： API参数</li><li>1： 环境参数</li><li>2： 应用参数</li><li>3： 系统参数</li></ul><p>默认值：0</p>
 * @method void setVarModuleType(integer $VarModuleType) 设置<p>变量模块类型</p><p>枚举值：</p><ul><li>0： API参数</li><li>1： 环境参数</li><li>2： 应用参数</li><li>3： 系统参数</li></ul><p>默认值：0</p>
 */
class GetVarListRequest extends AbstractModel
{
    /**
     * @var string <p>应用ID，获取方法参看如何获取   <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">BotBizId</a>。</p>
     */
    public $AppBizId;

    /**
     * @var array <p>变量ID数组</p>
     */
    public $VarIds;

    /**
     * @var string <p>按变量名称关键词搜索</p>
     */
    public $Keyword;

    /**
     * @var integer <p>起始偏移量（默认0），取值范围 &gt; 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>限定数量（默认15），取值范围 1-200</p>
     */
    public $Limit;

    /**
     * @var string <p>按变量类型过滤，默认查询所有类型(STRING,INT,FLOAT,BOOL,OBJECT,ARRAY_STRING,ARRAY_INT,ARRAY_FLOAT,ARRAY_BOOL,ARRAY_OBJECT,FILE,DOCUMENT,IMAGE,AUDIO)</p>
     */
    public $VarType;

    /**
     * @var boolean <p>是否需要内部变量, 在结果中包含平台预置的“内置自定义变量” (默认false)。</p><ul><li>当&nbsp;<code>NeedInternalVar = true</code>&nbsp;且&nbsp;<code>VarModuleType</code>&nbsp;为&nbsp;<code>AllVar</code>&nbsp;或&nbsp;<code>ApiVar</code>&nbsp;时，返回列表会在用户变量之前拼入内置变量，并同样支持&nbsp;<code>Keyword</code>&nbsp;<code>VarType</code>&nbsp;<code>VarIds</code>&nbsp;过滤。</li><li>其他<code>VarModuleType</code>下，该开关不生效。</li></ul>
     */
    public $NeedInternalVar;

    /**
     * @var integer <p>变量模块类型</p><p>枚举值：</p><ul><li>0： API参数</li><li>1： 环境参数</li><li>2： 应用参数</li><li>3： 系统参数</li></ul><p>默认值：0</p>
     */
    public $VarModuleType;

    /**
     * @param string $AppBizId <p>应用ID，获取方法参看如何获取   <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">BotBizId</a>。</p>
     * @param array $VarIds <p>变量ID数组</p>
     * @param string $Keyword <p>按变量名称关键词搜索</p>
     * @param integer $Offset <p>起始偏移量（默认0），取值范围 &gt; 0</p>
     * @param integer $Limit <p>限定数量（默认15），取值范围 1-200</p>
     * @param string $VarType <p>按变量类型过滤，默认查询所有类型(STRING,INT,FLOAT,BOOL,OBJECT,ARRAY_STRING,ARRAY_INT,ARRAY_FLOAT,ARRAY_BOOL,ARRAY_OBJECT,FILE,DOCUMENT,IMAGE,AUDIO)</p>
     * @param boolean $NeedInternalVar <p>是否需要内部变量, 在结果中包含平台预置的“内置自定义变量” (默认false)。</p><ul><li>当&nbsp;<code>NeedInternalVar = true</code>&nbsp;且&nbsp;<code>VarModuleType</code>&nbsp;为&nbsp;<code>AllVar</code>&nbsp;或&nbsp;<code>ApiVar</code>&nbsp;时，返回列表会在用户变量之前拼入内置变量，并同样支持&nbsp;<code>Keyword</code>&nbsp;<code>VarType</code>&nbsp;<code>VarIds</code>&nbsp;过滤。</li><li>其他<code>VarModuleType</code>下，该开关不生效。</li></ul>
     * @param integer $VarModuleType <p>变量模块类型</p><p>枚举值：</p><ul><li>0： API参数</li><li>1： 环境参数</li><li>2： 应用参数</li><li>3： 系统参数</li></ul><p>默认值：0</p>
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

        if (array_key_exists("VarIds",$param) and $param["VarIds"] !== null) {
            $this->VarIds = $param["VarIds"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("VarType",$param) and $param["VarType"] !== null) {
            $this->VarType = $param["VarType"];
        }

        if (array_key_exists("NeedInternalVar",$param) and $param["NeedInternalVar"] !== null) {
            $this->NeedInternalVar = $param["NeedInternalVar"];
        }

        if (array_key_exists("VarModuleType",$param) and $param["VarModuleType"] !== null) {
            $this->VarModuleType = $param["VarModuleType"];
        }
    }
}
