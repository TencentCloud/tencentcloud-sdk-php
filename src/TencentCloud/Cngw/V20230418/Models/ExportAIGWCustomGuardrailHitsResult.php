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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 导出自定义安全护栏命中记录结果
 *
 * @method string getFormat() 获取<p>实际导出格式</p>
 * @method void setFormat(string $Format) 设置<p>实际导出格式</p>
 * @method integer getRowCount() 获取<p>实际编码进导出内容的审核记录数，最多 1000。</p>
 * @method void setRowCount(integer $RowCount) 设置<p>实际编码进导出内容的审核记录数，最多 1000。</p>
 * @method boolean getTruncated() 获取<p>是否达到单次最多 1000 条的导出截断条件；true 时可能还有更多记录，可缩小时间范围后分别导出。</p>
 * @method void setTruncated(boolean $Truncated) 设置<p>是否达到单次最多 1000 条的导出截断条件；true 时可能还有更多记录，可缩小时间范围后分别导出。</p>
 * @method string getContent() 获取<p>CSV/JSON 文件内容的 Base64 编码字符串，需 Base64 解码后保存，不是下载 URL。</p>
 * @method void setContent(string $Content) 设置<p>CSV/JSON 文件内容的 Base64 编码字符串，需 Base64 解码后保存，不是下载 URL。</p>
 */
class ExportAIGWCustomGuardrailHitsResult extends AbstractModel
{
    /**
     * @var string <p>实际导出格式</p>
     */
    public $Format;

    /**
     * @var integer <p>实际编码进导出内容的审核记录数，最多 1000。</p>
     */
    public $RowCount;

    /**
     * @var boolean <p>是否达到单次最多 1000 条的导出截断条件；true 时可能还有更多记录，可缩小时间范围后分别导出。</p>
     */
    public $Truncated;

    /**
     * @var string <p>CSV/JSON 文件内容的 Base64 编码字符串，需 Base64 解码后保存，不是下载 URL。</p>
     */
    public $Content;

    /**
     * @param string $Format <p>实际导出格式</p>
     * @param integer $RowCount <p>实际编码进导出内容的审核记录数，最多 1000。</p>
     * @param boolean $Truncated <p>是否达到单次最多 1000 条的导出截断条件；true 时可能还有更多记录，可缩小时间范围后分别导出。</p>
     * @param string $Content <p>CSV/JSON 文件内容的 Base64 编码字符串，需 Base64 解码后保存，不是下载 URL。</p>
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
        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("RowCount",$param) and $param["RowCount"] !== null) {
            $this->RowCount = $param["RowCount"];
        }

        if (array_key_exists("Truncated",$param) and $param["Truncated"] !== null) {
            $this->Truncated = $param["Truncated"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
