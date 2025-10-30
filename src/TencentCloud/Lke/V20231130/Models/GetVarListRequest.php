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
 * @method string getAppBizId() 获取应用ID
 * @method void setAppBizId(string $AppBizId) 设置应用ID
 * @method array getVarIds() 获取变量ID数组
 * @method void setVarIds(array $VarIds) 设置变量ID数组
 * @method string getKeyword() 获取按变量名称关键词搜索
 * @method void setKeyword(string $Keyword) 设置按变量名称关键词搜索
 * @method integer getOffset() 获取起始偏移量（默认0）
 * @method void setOffset(integer $Offset) 设置起始偏移量（默认0）
 * @method integer getLimit() 获取限定数量（默认15）
 * @method void setLimit(integer $Limit) 设置限定数量（默认15）
 * @method string getVarType() 获取按变量类型过滤，默认查询所有类型(STRING,INT,FLOAT,BOOL,OBJECT,ARRAY_STRING,ARRAY_INT,ARRAY_FLOAT,ARRAY_BOOL,ARRAY_OBJECT,FILE,DOCUMENT,IMAGE,AUDIO)
 * @method void setVarType(string $VarType) 设置按变量类型过滤，默认查询所有类型(STRING,INT,FLOAT,BOOL,OBJECT,ARRAY_STRING,ARRAY_INT,ARRAY_FLOAT,ARRAY_BOOL,ARRAY_OBJECT,FILE,DOCUMENT,IMAGE,AUDIO)
 * @method boolean getNeedInternalVar() 获取是否需要内部变量(默认false)
 * @method void setNeedInternalVar(boolean $NeedInternalVar) 设置是否需要内部变量(默认false)
 * @method integer getVarModuleType() 获取变量类型
 * @method void setVarModuleType(integer $VarModuleType) 设置变量类型
 */
class GetVarListRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $AppBizId;

    /**
     * @var array 变量ID数组
     */
    public $VarIds;

    /**
     * @var string 按变量名称关键词搜索
     */
    public $Keyword;

    /**
     * @var integer 起始偏移量（默认0）
     */
    public $Offset;

    /**
     * @var integer 限定数量（默认15）
     */
    public $Limit;

    /**
     * @var string 按变量类型过滤，默认查询所有类型(STRING,INT,FLOAT,BOOL,OBJECT,ARRAY_STRING,ARRAY_INT,ARRAY_FLOAT,ARRAY_BOOL,ARRAY_OBJECT,FILE,DOCUMENT,IMAGE,AUDIO)
     */
    public $VarType;

    /**
     * @var boolean 是否需要内部变量(默认false)
     */
    public $NeedInternalVar;

    /**
     * @var integer 变量类型
     */
    public $VarModuleType;

    /**
     * @param string $AppBizId 应用ID
     * @param array $VarIds 变量ID数组
     * @param string $Keyword 按变量名称关键词搜索
     * @param integer $Offset 起始偏移量（默认0）
     * @param integer $Limit 限定数量（默认15）
     * @param string $VarType 按变量类型过滤，默认查询所有类型(STRING,INT,FLOAT,BOOL,OBJECT,ARRAY_STRING,ARRAY_INT,ARRAY_FLOAT,ARRAY_BOOL,ARRAY_OBJECT,FILE,DOCUMENT,IMAGE,AUDIO)
     * @param boolean $NeedInternalVar 是否需要内部变量(默认false)
     * @param integer $VarModuleType 变量类型
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
