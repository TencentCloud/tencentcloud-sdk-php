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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadFiles请求参数结构体
 *
 * @method string getBusinessType() 获取文件对应业务类型
1. TEMPLATE - 模板； 文件类型：.pdf/.doc/.docx/.html
2. DOCUMENT - 签署过程及签署后的合同文档/图片控件 文件类型：.pdf/.doc/.docx/.jpg/.png/.xls.xlsx/.html
3. SEAL - 印章； 文件类型：.jpg/.jpeg/.png
 * @method void setBusinessType(string $BusinessType) 设置文件对应业务类型
1. TEMPLATE - 模板； 文件类型：.pdf/.doc/.docx/.html
2. DOCUMENT - 签署过程及签署后的合同文档/图片控件 文件类型：.pdf/.doc/.docx/.jpg/.png/.xls.xlsx/.html
3. SEAL - 印章； 文件类型：.jpg/.jpeg/.png
 * @method Caller getCaller() 获取调用方信息，其中OperatorId为必填字段，即用户的UserId
 * @method void setCaller(Caller $Caller) 设置调用方信息，其中OperatorId为必填字段，即用户的UserId
 * @method array getFileInfos() 获取上传文件内容数组，最多支持20个文件
 * @method void setFileInfos(array $FileInfos) 设置上传文件内容数组，最多支持20个文件
 * @method string getFileType() 获取文件类型， 默认通过文件内容解析得到文件类型，客户可以显示的说明上传文件的类型。
如：PDF 表示上传的文件 xxx.pdf的文件类型是 PDF
 * @method void setFileType(string $FileType) 设置文件类型， 默认通过文件内容解析得到文件类型，客户可以显示的说明上传文件的类型。
如：PDF 表示上传的文件 xxx.pdf的文件类型是 PDF
 * @method boolean getCoverRect() 获取此参数只对 PDF 文件有效。是否将pdf灰色矩阵置白
true--是，处理置白
默认为false--否，不处理
 * @method void setCoverRect(boolean $CoverRect) 设置此参数只对 PDF 文件有效。是否将pdf灰色矩阵置白
true--是，处理置白
默认为false--否，不处理
 * @method array getCustomIds() 获取用户自定义ID数组，与上传文件一一对应
 * @method void setCustomIds(array $CustomIds) 设置用户自定义ID数组，与上传文件一一对应
 * @method string getFileUrls() 获取不再使用，上传文件链接数组，最多支持20个URL
 * @method void setFileUrls(string $FileUrls) 设置不再使用，上传文件链接数组，最多支持20个URL
 */
class UploadFilesRequest extends AbstractModel
{
    /**
     * @var string 文件对应业务类型
1. TEMPLATE - 模板； 文件类型：.pdf/.doc/.docx/.html
2. DOCUMENT - 签署过程及签署后的合同文档/图片控件 文件类型：.pdf/.doc/.docx/.jpg/.png/.xls.xlsx/.html
3. SEAL - 印章； 文件类型：.jpg/.jpeg/.png
     */
    public $BusinessType;

    /**
     * @var Caller 调用方信息，其中OperatorId为必填字段，即用户的UserId
     */
    public $Caller;

    /**
     * @var array 上传文件内容数组，最多支持20个文件
     */
    public $FileInfos;

    /**
     * @var string 文件类型， 默认通过文件内容解析得到文件类型，客户可以显示的说明上传文件的类型。
如：PDF 表示上传的文件 xxx.pdf的文件类型是 PDF
     */
    public $FileType;

    /**
     * @var boolean 此参数只对 PDF 文件有效。是否将pdf灰色矩阵置白
true--是，处理置白
默认为false--否，不处理
     */
    public $CoverRect;

    /**
     * @var array 用户自定义ID数组，与上传文件一一对应
     */
    public $CustomIds;

    /**
     * @var string 不再使用，上传文件链接数组，最多支持20个URL
     */
    public $FileUrls;

    /**
     * @param string $BusinessType 文件对应业务类型
1. TEMPLATE - 模板； 文件类型：.pdf/.doc/.docx/.html
2. DOCUMENT - 签署过程及签署后的合同文档/图片控件 文件类型：.pdf/.doc/.docx/.jpg/.png/.xls.xlsx/.html
3. SEAL - 印章； 文件类型：.jpg/.jpeg/.png
     * @param Caller $Caller 调用方信息，其中OperatorId为必填字段，即用户的UserId
     * @param array $FileInfos 上传文件内容数组，最多支持20个文件
     * @param string $FileType 文件类型， 默认通过文件内容解析得到文件类型，客户可以显示的说明上传文件的类型。
如：PDF 表示上传的文件 xxx.pdf的文件类型是 PDF
     * @param boolean $CoverRect 此参数只对 PDF 文件有效。是否将pdf灰色矩阵置白
true--是，处理置白
默认为false--否，不处理
     * @param array $CustomIds 用户自定义ID数组，与上传文件一一对应
     * @param string $FileUrls 不再使用，上传文件链接数组，最多支持20个URL
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
        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }

        if (array_key_exists("Caller",$param) and $param["Caller"] !== null) {
            $this->Caller = new Caller();
            $this->Caller->deserialize($param["Caller"]);
        }

        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new UploadFile();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("CoverRect",$param) and $param["CoverRect"] !== null) {
            $this->CoverRect = $param["CoverRect"];
        }

        if (array_key_exists("CustomIds",$param) and $param["CustomIds"] !== null) {
            $this->CustomIds = $param["CustomIds"];
        }

        if (array_key_exists("FileUrls",$param) and $param["FileUrls"] !== null) {
            $this->FileUrls = $param["FileUrls"];
        }
    }
}
