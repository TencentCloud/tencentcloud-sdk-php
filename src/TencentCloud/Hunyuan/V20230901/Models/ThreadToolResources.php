<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 在会话中提供给助手工具的一系列资源。不同类型的工具会有各自对应的资源。比如代码解释器需要一个文件 ID 的列表，而文件搜索工具则需要一个向量存储 ID 的列表。
 *
 * @method array getCodeInterpreter() 获取文件 ID 列表
 * @method void setCodeInterpreter(array $CodeInterpreter) 设置文件 ID 列表
 * @method array getVectorStoreIDs() 获取向量存储 ID 列表
 * @method void setVectorStoreIDs(array $VectorStoreIDs) 设置向量存储 ID 列表
 */
class ThreadToolResources extends AbstractModel
{
    /**
     * @var array 文件 ID 列表
     */
    public $CodeInterpreter;

    /**
     * @var array 向量存储 ID 列表
     */
    public $VectorStoreIDs;

    /**
     * @param array $CodeInterpreter 文件 ID 列表
     * @param array $VectorStoreIDs 向量存储 ID 列表
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
        if (array_key_exists("CodeInterpreter",$param) and $param["CodeInterpreter"] !== null) {
            $this->CodeInterpreter = $param["CodeInterpreter"];
        }

        if (array_key_exists("VectorStoreIDs",$param) and $param["VectorStoreIDs"] !== null) {
            $this->VectorStoreIDs = $param["VectorStoreIDs"];
        }
    }
}
