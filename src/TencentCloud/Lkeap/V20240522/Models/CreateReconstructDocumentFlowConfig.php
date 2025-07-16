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
 * @method string getTableResultType() 获取Markdown文件中表格返回的形式
0，表格以MD形式返回
1，表格以HTML形式返回
默认为0
 * @method void setTableResultType(string $TableResultType) 设置Markdown文件中表格返回的形式
0，表格以MD形式返回
1，表格以HTML形式返回
默认为0
 * @method string getResultType() 获取智能文档解析返回结果的格式
0：只返回全文MD；
1：只返回每一页的OCR原始Json；
2：只返回每一页的MD，
3：返回全文MD + 每一页的OCR原始Json；
4：返回全文MD + 每一页的MD，
默认值为0
 * @method void setResultType(string $ResultType) 设置智能文档解析返回结果的格式
0：只返回全文MD；
1：只返回每一页的OCR原始Json；
2：只返回每一页的MD，
3：返回全文MD + 每一页的OCR原始Json；
4：返回全文MD + 每一页的MD，
默认值为0
 * @method boolean getIgnoreFailedPage() 获取是否忽略失败页，返回已成功的页数据。默认为true。
 * @method void setIgnoreFailedPage(boolean $IgnoreFailedPage) 设置是否忽略失败页，返回已成功的页数据。默认为true。
 */
class CreateReconstructDocumentFlowConfig extends AbstractModel
{
    /**
     * @var string Markdown文件中表格返回的形式
0，表格以MD形式返回
1，表格以HTML形式返回
默认为0
     */
    public $TableResultType;

    /**
     * @var string 智能文档解析返回结果的格式
0：只返回全文MD；
1：只返回每一页的OCR原始Json；
2：只返回每一页的MD，
3：返回全文MD + 每一页的OCR原始Json；
4：返回全文MD + 每一页的MD，
默认值为0
     */
    public $ResultType;

    /**
     * @var boolean 是否忽略失败页，返回已成功的页数据。默认为true。
     */
    public $IgnoreFailedPage;

    /**
     * @param string $TableResultType Markdown文件中表格返回的形式
0，表格以MD形式返回
1，表格以HTML形式返回
默认为0
     * @param string $ResultType 智能文档解析返回结果的格式
0：只返回全文MD；
1：只返回每一页的OCR原始Json；
2：只返回每一页的MD，
3：返回全文MD + 每一页的OCR原始Json；
4：返回全文MD + 每一页的MD，
默认值为0
     * @param boolean $IgnoreFailedPage 是否忽略失败页，返回已成功的页数据。默认为true。
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
    }
}
