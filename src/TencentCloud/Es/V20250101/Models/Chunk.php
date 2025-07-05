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
namespace TencentCloud\Es\V20250101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 切片对象信息
 *
 * @method integer getIndex() 获取chunk索引。切片顺序 id。
 * @method void setIndex(integer $Index) 设置chunk索引。切片顺序 id。
 * @method string getContent() 获取chunk内容。
 * @method void setContent(string $Content) 设置chunk内容。
 */
class Chunk extends AbstractModel
{
    /**
     * @var integer chunk索引。切片顺序 id。
     */
    public $Index;

    /**
     * @var string chunk内容。
     */
    public $Content;

    /**
     * @param integer $Index chunk索引。切片顺序 id。
     * @param string $Content chunk内容。
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
