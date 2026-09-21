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
 * @method string getComparisonPointId() 获取<p>合同对比差异点唯一ID。</p>
 * @method void setComparisonPointId(string $ComparisonPointId) 设置<p>合同对比差异点唯一ID。</p>
 * @method string getComparisonType() 获取<p>对比前后差异类型，具体如下：</p><ul><li> **add**：新增</li><li> **change**：变更</li><li> **delete**：删除</li></ul>
 * @method void setComparisonType(string $ComparisonType) 设置<p>对比前后差异类型，具体如下：</p><ul><li> **add**：新增</li><li> **change**：变更</li><li> **delete**：删除</li></ul>
 * @method string getContentType() 获取<p>对比内容类型，具体如下：</p><ul><li> **text**：文本</li><li> **table**：表格</li><li> **picture**：图片</li></ul>
 * @method void setContentType(string $ContentType) 设置<p>对比内容类型，具体如下：</p><ul><li> **text**：文本</li><li> **table**：表格</li><li> **picture**：图片</li></ul>
 * @method string getOriginText() 获取<p>原文文本。</p>
 * @method void setOriginText(string $OriginText) 设置<p>原文文本。</p>
 * @method string getDiffText() 获取<p>对比文本。</p>
 * @method void setDiffText(string $DiffText) 设置<p>对比文本。</p>
 * @method integer getFormatType() 获取<p>合同文本的格式类型。<br>类型如下：</p><ul><li> **0**：段落（正文）</li><li> **1**：标点符号</li><li> **2**：页眉页脚</li><li> **3**：目录</li><li> **4**：印章</li><li> **5**：序号</li><li> **6**：水印</li><li> **7**：下划线内容（填写区）</li></ul>
 * @method void setFormatType(integer $FormatType) 设置<p>合同文本的格式类型。<br>类型如下：</p><ul><li> **0**：段落（正文）</li><li> **1**：标点符号</li><li> **2**：页眉页脚</li><li> **3**：目录</li><li> **4**：印章</li><li> **5**：序号</li><li> **6**：水印</li><li> **7**：下划线内容（填写区）</li></ul>
 * @method integer getPageNumber() 获取<p>页码：对比点所在页码。</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码：对比点所在页码。</p>
 */
class ComparisonDetail extends AbstractModel
{
    /**
     * @var string <p>合同对比差异点唯一ID。</p>
     */
    public $ComparisonPointId;

    /**
     * @var string <p>对比前后差异类型，具体如下：</p><ul><li> **add**：新增</li><li> **change**：变更</li><li> **delete**：删除</li></ul>
     */
    public $ComparisonType;

    /**
     * @var string <p>对比内容类型，具体如下：</p><ul><li> **text**：文本</li><li> **table**：表格</li><li> **picture**：图片</li></ul>
     */
    public $ContentType;

    /**
     * @var string <p>原文文本。</p>
     */
    public $OriginText;

    /**
     * @var string <p>对比文本。</p>
     */
    public $DiffText;

    /**
     * @var integer <p>合同文本的格式类型。<br>类型如下：</p><ul><li> **0**：段落（正文）</li><li> **1**：标点符号</li><li> **2**：页眉页脚</li><li> **3**：目录</li><li> **4**：印章</li><li> **5**：序号</li><li> **6**：水印</li><li> **7**：下划线内容（填写区）</li></ul>
     */
    public $FormatType;

    /**
     * @var integer <p>页码：对比点所在页码。</p>
     */
    public $PageNumber;

    /**
     * @param string $ComparisonPointId <p>合同对比差异点唯一ID。</p>
     * @param string $ComparisonType <p>对比前后差异类型，具体如下：</p><ul><li> **add**：新增</li><li> **change**：变更</li><li> **delete**：删除</li></ul>
     * @param string $ContentType <p>对比内容类型，具体如下：</p><ul><li> **text**：文本</li><li> **table**：表格</li><li> **picture**：图片</li></ul>
     * @param string $OriginText <p>原文文本。</p>
     * @param string $DiffText <p>对比文本。</p>
     * @param integer $FormatType <p>合同文本的格式类型。<br>类型如下：</p><ul><li> **0**：段落（正文）</li><li> **1**：标点符号</li><li> **2**：页眉页脚</li><li> **3**：目录</li><li> **4**：印章</li><li> **5**：序号</li><li> **6**：水印</li><li> **7**：下划线内容（填写区）</li></ul>
     * @param integer $PageNumber <p>页码：对比点所在页码。</p>
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
        if (array_key_exists("ComparisonPointId",$param) and $param["ComparisonPointId"] !== null) {
            $this->ComparisonPointId = $param["ComparisonPointId"];
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

        if (array_key_exists("FormatType",$param) and $param["FormatType"] !== null) {
            $this->FormatType = $param["FormatType"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }
    }
}
