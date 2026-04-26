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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建智能文档解析任务的配置信息
 *
 * @method string getTableResultType() 获取<p>Markdown文件中表格返回的形式<br>0，表格以MD形式返回<br>1，表格以HTML形式返回<br>默认为0</p>
 * @method void setTableResultType(string $TableResultType) 设置<p>Markdown文件中表格返回的形式<br>0，表格以MD形式返回<br>1，表格以HTML形式返回<br>默认为0</p>
 * @method string getResultType() 获取<p>智能文档解析返回结果的格式<br>0：只返回全文MD；<br>1：只返回每一页的OCR原始Json；<br>2：只返回每一页的MD，<br>3：返回全文MD + 每一页的OCR原始Json；<br>4：返回全文MD + 每一页的MD<br>5: 返回全文md，每一页ocr原始json，每一页md<br>默认值为0</p>
 * @method void setResultType(string $ResultType) 设置<p>智能文档解析返回结果的格式<br>0：只返回全文MD；<br>1：只返回每一页的OCR原始Json；<br>2：只返回每一页的MD，<br>3：返回全文MD + 每一页的OCR原始Json；<br>4：返回全文MD + 每一页的MD<br>5: 返回全文md，每一页ocr原始json，每一页md<br>默认值为0</p>
 * @method boolean getIgnoreFailedPage() 获取<p>是否忽略失败页，返回已成功的页数据。默认为true。</p>
 * @method void setIgnoreFailedPage(boolean $IgnoreFailedPage) 设置<p>是否忽略失败页，返回已成功的页数据。默认为true。</p>
 * @method boolean getReturnPageFormat() 获取<p>Markdown文件中是否包含页码信息</p>
 * @method void setReturnPageFormat(boolean $ReturnPageFormat) 设置<p>Markdown文件中是否包含页码信息</p>
 * @method string getPageFormat() 获取<p>自定义输出页码样式,{{p}}为页码占位符，开启ReturnPageFormat生效。未填默认样式:<page_num>page {{p}}</page_num></p>
 * @method void setPageFormat(string $PageFormat) 设置<p>自定义输出页码样式,{{p}}为页码占位符，开启ReturnPageFormat生效。未填默认样式:<page_num>page {{p}}</page_num></p>
 */
class CreateReconstructDocumentFlowConfig extends AbstractModel
{
    /**
     * @var string <p>Markdown文件中表格返回的形式<br>0，表格以MD形式返回<br>1，表格以HTML形式返回<br>默认为0</p>
     */
    public $TableResultType;

    /**
     * @var string <p>智能文档解析返回结果的格式<br>0：只返回全文MD；<br>1：只返回每一页的OCR原始Json；<br>2：只返回每一页的MD，<br>3：返回全文MD + 每一页的OCR原始Json；<br>4：返回全文MD + 每一页的MD<br>5: 返回全文md，每一页ocr原始json，每一页md<br>默认值为0</p>
     */
    public $ResultType;

    /**
     * @var boolean <p>是否忽略失败页，返回已成功的页数据。默认为true。</p>
     */
    public $IgnoreFailedPage;

    /**
     * @var boolean <p>Markdown文件中是否包含页码信息</p>
     */
    public $ReturnPageFormat;

    /**
     * @var string <p>自定义输出页码样式,{{p}}为页码占位符，开启ReturnPageFormat生效。未填默认样式:<page_num>page {{p}}</page_num></p>
     */
    public $PageFormat;

    /**
     * @param string $TableResultType <p>Markdown文件中表格返回的形式<br>0，表格以MD形式返回<br>1，表格以HTML形式返回<br>默认为0</p>
     * @param string $ResultType <p>智能文档解析返回结果的格式<br>0：只返回全文MD；<br>1：只返回每一页的OCR原始Json；<br>2：只返回每一页的MD，<br>3：返回全文MD + 每一页的OCR原始Json；<br>4：返回全文MD + 每一页的MD<br>5: 返回全文md，每一页ocr原始json，每一页md<br>默认值为0</p>
     * @param boolean $IgnoreFailedPage <p>是否忽略失败页，返回已成功的页数据。默认为true。</p>
     * @param boolean $ReturnPageFormat <p>Markdown文件中是否包含页码信息</p>
     * @param string $PageFormat <p>自定义输出页码样式,{{p}}为页码占位符，开启ReturnPageFormat生效。未填默认样式:<page_num>page {{p}}</page_num></p>
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
        if (array_key_exists("TableResultType",$param) and $param["TableResultType"] !== null) {
            $this->TableResultType = $param["TableResultType"];
        }

        if (array_key_exists("ResultType",$param) and $param["ResultType"] !== null) {
            $this->ResultType = $param["ResultType"];
        }

        if (array_key_exists("IgnoreFailedPage",$param) and $param["IgnoreFailedPage"] !== null) {
            $this->IgnoreFailedPage = $param["IgnoreFailedPage"];
        }

        if (array_key_exists("ReturnPageFormat",$param) and $param["ReturnPageFormat"] !== null) {
            $this->ReturnPageFormat = $param["ReturnPageFormat"];
        }

        if (array_key_exists("PageFormat",$param) and $param["PageFormat"] !== null) {
            $this->PageFormat = $param["PageFormat"];
        }
    }
}
