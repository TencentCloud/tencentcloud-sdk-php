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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合同对比差异结果详情。
 *
 * @method string getComparisonType() 获取对比前后差异类型，具体如下：
<ul><li> **add**：新增</li>
<li> **change**：变更</li>
<li> **delete**：删除</li>
</ul>
 * @method void setComparisonType(string $ComparisonType) 设置对比前后差异类型，具体如下：
<ul><li> **add**：新增</li>
<li> **change**：变更</li>
<li> **delete**：删除</li>
</ul>
 * @method string getContentType() 获取对比内容类型，具体如下：
<ul><li> **text**：文本</li>
<li> **table**：表格</li>
<li> **picture**：图片</li>
</ul>
 * @method void setContentType(string $ContentType) 设置对比内容类型，具体如下：
<ul><li> **text**：文本</li>
<li> **table**：表格</li>
<li> **picture**：图片</li>
</ul>
 * @method string getOriginText() 获取原文文本。
 * @method void setOriginText(string $OriginText) 设置原文文本。
 * @method string getDiffText() 获取对比文本。
 * @method void setDiffText(string $DiffText) 设置对比文本。
 */
class ComparisonDetail extends AbstractModel
{
    /**
     * @var string 对比前后差异类型，具体如下：
<ul><li> **add**：新增</li>
<li> **change**：变更</li>
<li> **delete**：删除</li>
</ul>
     */
    public $ComparisonType;

    /**
     * @var string 对比内容类型，具体如下：
<ul><li> **text**：文本</li>
<li> **table**：表格</li>
<li> **picture**：图片</li>
</ul>
     */
    public $ContentType;

    /**
     * @var string 原文文本。
     */
    public $OriginText;

    /**
     * @var string 对比文本。
     */
    public $DiffText;

    /**
     * @param string $ComparisonType 对比前后差异类型，具体如下：
<ul><li> **add**：新增</li>
<li> **change**：变更</li>
<li> **delete**：删除</li>
</ul>
     * @param string $ContentType 对比内容类型，具体如下：
<ul><li> **text**：文本</li>
<li> **table**：表格</li>
<li> **picture**：图片</li>
</ul>
     * @param string $OriginText 原文文本。
     * @param string $DiffText 对比文本。
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
        if (array_key_exists("ComparisonType",$param) and $param["ComparisonType"] !== null) {
            $this->ComparisonType = $param["ComparisonType"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("OriginText",$param) and $param["OriginText"] !== null) {
            $this->OriginText = $param["OriginText"];
        }

        if (array_key_exists("DiffText",$param) and $param["DiffText"] !== null) {
            $this->DiffText = $param["DiffText"];
        }
    }
}
