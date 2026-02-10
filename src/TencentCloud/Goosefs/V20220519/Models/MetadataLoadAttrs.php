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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 元数据预热参数
 *
 * @method string getLoadType() 获取预热类型，枚举值 LoadByPath｜LoadByList
 * @method void setLoadType(string $LoadType) 设置预热类型，枚举值 LoadByPath｜LoadByList
 * @method boolean getSkipIfExists() 获取是否跳过相同文件，默认为 true
 * @method void setSkipIfExists(boolean $SkipIfExists) 设置是否跳过相同文件，默认为 true
 * @method string getLoadByPath() 获取预热路径，入参单条挂载路径，长度不能超过255个字符。入参数LoadType为LoadByPath，该参数不应为空
 * @method void setLoadByPath(string $LoadByPath) 设置预热路径，入参单条挂载路径，长度不能超过255个字符。入参数LoadType为LoadByPath，该参数不应为空
 * @method string getLoadByList() 获取通过文件列表批量预热，入参为 cos://bucket-appid/ 开头的 COS 路径，且仅支持 txt 格式文件，长度不能超过255个字符。入参数LoadType为LoadByList，该参数不应为空
 * @method void setLoadByList(string $LoadByList) 设置通过文件列表批量预热，入参为 cos://bucket-appid/ 开头的 COS 路径，且仅支持 txt 格式文件，长度不能超过255个字符。入参数LoadType为LoadByList，该参数不应为空
 */
class MetadataLoadAttrs extends AbstractModel
{
    /**
     * @var string 预热类型，枚举值 LoadByPath｜LoadByList
     */
    public $LoadType;

    /**
     * @var boolean 是否跳过相同文件，默认为 true
     */
    public $SkipIfExists;

    /**
     * @var string 预热路径，入参单条挂载路径，长度不能超过255个字符。入参数LoadType为LoadByPath，该参数不应为空
     */
    public $LoadByPath;

    /**
     * @var string 通过文件列表批量预热，入参为 cos://bucket-appid/ 开头的 COS 路径，且仅支持 txt 格式文件，长度不能超过255个字符。入参数LoadType为LoadByList，该参数不应为空
     */
    public $LoadByList;

    /**
     * @param string $LoadType 预热类型，枚举值 LoadByPath｜LoadByList
     * @param boolean $SkipIfExists 是否跳过相同文件，默认为 true
     * @param string $LoadByPath 预热路径，入参单条挂载路径，长度不能超过255个字符。入参数LoadType为LoadByPath，该参数不应为空
     * @param string $LoadByList 通过文件列表批量预热，入参为 cos://bucket-appid/ 开头的 COS 路径，且仅支持 txt 格式文件，长度不能超过255个字符。入参数LoadType为LoadByList，该参数不应为空
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
        if (array_key_exists("LoadType",$param) and $param["LoadType"] !== null) {
            $this->LoadType = $param["LoadType"];
        }

        if (array_key_exists("SkipIfExists",$param) and $param["SkipIfExists"] !== null) {
            $this->SkipIfExists = $param["SkipIfExists"];
        }

        if (array_key_exists("LoadByPath",$param) and $param["LoadByPath"] !== null) {
            $this->LoadByPath = $param["LoadByPath"];
        }

        if (array_key_exists("LoadByList",$param) and $param["LoadByList"] !== null) {
            $this->LoadByList = $param["LoadByList"];
        }
    }
}
