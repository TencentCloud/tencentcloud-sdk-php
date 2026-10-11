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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 重排序结果
 *
 * @method integer getIndex() 获取文档在输入 Docs 列表中的索引，从 0 开始，用于回溯原文档。
 * @method void setIndex(integer $Index) 设置文档在输入 Docs 列表中的索引，从 0 开始，用于回溯原文档。
 * @method float getScore() 获取文档与查询内容的相关性得分，数值越大越相关。
 * @method void setScore(float $Score) 设置文档与查询内容的相关性得分，数值越大越相关。
 */
class RerankResult extends AbstractModel
{
    /**
     * @var integer 文档在输入 Docs 列表中的索引，从 0 开始，用于回溯原文档。
     */
    public $Index;

    /**
     * @var float 文档与查询内容的相关性得分，数值越大越相关。
     */
    public $Score;

    /**
     * @param integer $Index 文档在输入 Docs 列表中的索引，从 0 开始，用于回溯原文档。
     * @param float $Score 文档与查询内容的相关性得分，数值越大越相关。
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

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }
    }
}
