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
 * 数据预热任务参数
 *
 * @method string getLoadType() 获取<p>预热类型，枚举值 LoadByPath｜LoadByList</p>
 * @method void setLoadType(string $LoadType) 设置<p>预热类型，枚举值 LoadByPath｜LoadByList</p>
 * @method boolean getSkipIfExists() 获取<p>是否跳过相同文件，默认为 true</p>
 * @method void setSkipIfExists(boolean $SkipIfExists) 设置<p>是否跳过相同文件，默认为 true</p>
 * @method string getLoadByPath() 获取<p>预热路径，入参单条挂载路径。入参数LoadType为LoadByPath，该参数不应为空</p>
 * @method void setLoadByPath(string $LoadByPath) 设置<p>预热路径，入参单条挂载路径。入参数LoadType为LoadByPath，该参数不应为空</p>
 * @method string getLoadByList() 获取<p>通过文件列表批量预热，入参为 cos://bucket-appid/ 开头的 COS 路径，且仅支持 txt 格式文件，长度不能超过255个字符。入参数LoadType为LoadByList，该参数不应为空</p>
 * @method void setLoadByList(string $LoadByList) 设置<p>通过文件列表批量预热，入参为 cos://bucket-appid/ 开头的 COS 路径，且仅支持 txt 格式文件，长度不能超过255个字符。入参数LoadType为LoadByList，该参数不应为空</p>
 * @method string getReplica() 获取<p>副本数配置，枚举值，可选值 SingleReplica（单副本，默认）｜MaxReplica（最大副本）</p>
 * @method void setReplica(string $Replica) 设置<p>副本数配置，枚举值，可选值 SingleReplica（单副本，默认）｜MaxReplica（最大副本）</p>
 */
class LoadDataAttrs extends AbstractModel
{
    /**
     * @var string <p>预热类型，枚举值 LoadByPath｜LoadByList</p>
     */
    public $LoadType;

    /**
     * @var boolean <p>是否跳过相同文件，默认为 true</p>
     */
    public $SkipIfExists;

    /**
     * @var string <p>预热路径，入参单条挂载路径。入参数LoadType为LoadByPath，该参数不应为空</p>
     */
    public $LoadByPath;

    /**
     * @var string <p>通过文件列表批量预热，入参为 cos://bucket-appid/ 开头的 COS 路径，且仅支持 txt 格式文件，长度不能超过255个字符。入参数LoadType为LoadByList，该参数不应为空</p>
     */
    public $LoadByList;

    /**
     * @var string <p>副本数配置，枚举值，可选值 SingleReplica（单副本，默认）｜MaxReplica（最大副本）</p>
     */
    public $Replica;

    /**
     * @param string $LoadType <p>预热类型，枚举值 LoadByPath｜LoadByList</p>
     * @param boolean $SkipIfExists <p>是否跳过相同文件，默认为 true</p>
     * @param string $LoadByPath <p>预热路径，入参单条挂载路径。入参数LoadType为LoadByPath，该参数不应为空</p>
     * @param string $LoadByList <p>通过文件列表批量预热，入参为 cos://bucket-appid/ 开头的 COS 路径，且仅支持 txt 格式文件，长度不能超过255个字符。入参数LoadType为LoadByList，该参数不应为空</p>
     * @param string $Replica <p>副本数配置，枚举值，可选值 SingleReplica（单副本，默认）｜MaxReplica（最大副本）</p>
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

        if (array_key_exists("Replica",$param) and $param["Replica"] !== null) {
            $this->Replica = $param["Replica"];
        }
    }
}
