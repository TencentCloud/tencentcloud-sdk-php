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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TWeSee 语义理解自定义标签请求
 *
 * @method string getKey() 获取自定义标签的标识符
 * @method void setKey(string $Key) 设置自定义标签的标识符
 * @method string getQuery() 获取自定义标签的描述文本
 * @method void setQuery(string $Query) 设置自定义标签的描述文本
 */
class VisionCustomDetectQuery extends AbstractModel
{
    /**
     * @var string 自定义标签的标识符
     */
    public $Key;

    /**
     * @var string 自定义标签的描述文本
     */
    public $Query;

    /**
     * @param string $Key 自定义标签的标识符
     * @param string $Query 自定义标签的描述文本
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }
    }
}
