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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReconstructDocumentSSE 功能配置参数
 *
 * @method string getTableResultType() 获取Markdown文件中表格返回的形式
0，表格以MD形式返回
1，表格以HTML形式返回
默认为0
 * @method void setTableResultType(string $TableResultType) 设置Markdown文件中表格返回的形式
0，表格以MD形式返回
1，表格以HTML形式返回
默认为0
 * @method string getMarkdownImageResponseType() 获取Markdown文件中图片返回的形式
0:markdown中图片以链接形式返回
1:markdown中图片只返回图片中提取的文本内容
默认是0
 * @method void setMarkdownImageResponseType(string $MarkdownImageResponseType) 设置Markdown文件中图片返回的形式
0:markdown中图片以链接形式返回
1:markdown中图片只返回图片中提取的文本内容
默认是0
 * @method boolean getReturnPageFormat() 获取Markdown文件中是否包含页码信息
 * @method void setReturnPageFormat(boolean $ReturnPageFormat) 设置Markdown文件中是否包含页码信息
 * @method string getPageFormat() 获取自定义输出页码样式,{{p}}为页码占位符，开启ReturnPageFormat生效。未填默认样式:<page_num>page {{p}}</page_num>
 * @method void setPageFormat(string $PageFormat) 设置自定义输出页码样式,{{p}}为页码占位符，开启ReturnPageFormat生效。未填默认样式:<page_num>page {{p}}</page_num>
 */
class ReconstructDocumentSSEConfig extends AbstractModel
{
    /**
     * @var string Markdown文件中表格返回的形式
0，表格以MD形式返回
1，表格以HTML形式返回
默认为0
     */
    public $TableResultType;

    /**
     * @var string Markdown文件中图片返回的形式
0:markdown中图片以链接形式返回
1:markdown中图片只返回图片中提取的文本内容
默认是0
     */
    public $MarkdownImageResponseType;

    /**
     * @var boolean Markdown文件中是否包含页码信息
     */
    public $ReturnPageFormat;

    /**
     * @var string 自定义输出页码样式,{{p}}为页码占位符，开启ReturnPageFormat生效。未填默认样式:<page_num>page {{p}}</page_num>
     */
    public $PageFormat;

    /**
     * @param string $TableResultType Markdown文件中表格返回的形式
0，表格以MD形式返回
1，表格以HTML形式返回
默认为0
     * @param string $MarkdownImageResponseType Markdown文件中图片返回的形式
0:markdown中图片以链接形式返回
1:markdown中图片只返回图片中提取的文本内容
默认是0
     * @param boolean $ReturnPageFormat Markdown文件中是否包含页码信息
     * @param string $PageFormat 自定义输出页码样式,{{p}}为页码占位符，开启ReturnPageFormat生效。未填默认样式:<page_num>page {{p}}</page_num>
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

        if (array_key_exists("MarkdownImageResponseType",$param) and $param["MarkdownImageResponseType"] !== null) {
            $this->MarkdownImageResponseType = $param["MarkdownImageResponseType"];
        }

        if (array_key_exists("ReturnPageFormat",$param) and $param["ReturnPageFormat"] !== null) {
            $this->ReturnPageFormat = $param["ReturnPageFormat"];
        }

        if (array_key_exists("PageFormat",$param) and $param["PageFormat"] !== null) {
            $this->PageFormat = $param["PageFormat"];
        }
    }
}
