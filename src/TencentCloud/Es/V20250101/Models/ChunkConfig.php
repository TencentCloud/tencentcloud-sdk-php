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
namespace TencentCloud\Es\V20250101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文档分片配置
 *
 * @method integer getMaxChunkSize() 获取最大分片长度
 * @method void setMaxChunkSize(integer $MaxChunkSize) 设置最大分片长度
 * @method array getDelimiters() 获取分隔符列表
 * @method void setDelimiters(array $Delimiters) 设置分隔符列表
 */
class ChunkConfig extends AbstractModel
{
    /**
     * @var integer 最大分片长度
     */
    public $MaxChunkSize;

    /**
     * @var array 分隔符列表
     */
    public $Delimiters;

    /**
     * @param integer $MaxChunkSize 最大分片长度
     * @param array $Delimiters 分隔符列表
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
        if (array_key_exists("MaxChunkSize",$param) and $param["MaxChunkSize"] !== null) {
            $this->MaxChunkSize = $param["MaxChunkSize"];
        }

        if (array_key_exists("Delimiters",$param) and $param["Delimiters"] !== null) {
            $this->Delimiters = $param["Delimiters"];
        }
    }
}
