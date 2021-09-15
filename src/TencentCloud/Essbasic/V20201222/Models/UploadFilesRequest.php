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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadFiles请求参数结构体
 *
 * @method Caller getCaller() 获取调用方信息
 * @method void setCaller(Caller $Caller) 设置调用方信息
 * @method string getBusinessType() 获取文件对应业务类型，用于区分文件存储路径：
1. TEMPLATE - 模版； 文件类型：.pdf/.html
2. DOCUMENT - 签署过程及签署后的合同文档 文件类型：.pdf/.html
3. FLOW - 签署过程 文件类型：.pdf/.html
4. SEAL - 印章； 文件类型：.jpg/.jpeg/.png
5. BUSINESSLICENSE - 营业执照 文件类型：.jpg/.jpeg/.png
6. IDCARD - 身份证 文件类型：.jpg/.jpeg/.png
 * @method void setBusinessType(string $BusinessType) 设置文件对应业务类型，用于区分文件存储路径：
1. TEMPLATE - 模版； 文件类型：.pdf/.html
2. DOCUMENT - 签署过程及签署后的合同文档 文件类型：.pdf/.html
3. FLOW - 签署过程 文件类型：.pdf/.html
4. SEAL - 印章； 文件类型：.jpg/.jpeg/.png
5. BUSINESSLICENSE - 营业执照 文件类型：.jpg/.jpeg/.png
6. IDCARD - 身份证 文件类型：.jpg/.jpeg/.png
 * @method array getFileInfos() 获取上传文件内容数组，最多支持20个文件
 * @method void setFileInfos(array $FileInfos) 设置上传文件内容数组，最多支持20个文件
 * @method array getFileUrls() 获取上传文件链接数组，最多支持20个URL
 * @method void setFileUrls(array $FileUrls) 设置上传文件链接数组，最多支持20个URL
 * @method boolean getCoverRect() 获取是否将pdf灰色矩阵置白
true--是，处理置白
false--否，不处理
 * @method void setCoverRect(boolean $CoverRect) 设置是否将pdf灰色矩阵置白
true--是，处理置白
false--否，不处理
 * @method string getFileType() 获取特殊文件类型需要指定文件类型：
HTML-- .html文件
 * @method void setFileType(string $FileType) 设置特殊文件类型需要指定文件类型：
HTML-- .html文件
 * @method array getCustomIds() 获取用户自定义ID数组，与上传文件一一对应
 * @method void setCustomIds(array $CustomIds) 设置用户自定义ID数组，与上传文件一一对应
 */
class UploadFilesRequest extends AbstractModel
{
    /**
     * @var Caller 调用方信息
     */
    public $Caller;

    /**
     * @var string 文件对应业务类型，用于区分文件存储路径：
1. TEMPLATE - 模版； 文件类型：.pdf/.html
2. DOCUMENT - 签署过程及签署后的合同文档 文件类型：.pdf/.html
3. FLOW - 签署过程 文件类型：.pdf/.html
4. SEAL - 印章； 文件类型：.jpg/.jpeg/.png
5. BUSINESSLICENSE - 营业执照 文件类型：.jpg/.jpeg/.png
6. IDCARD - 身份证 文件类型：.jpg/.jpeg/.png
     */
    public $BusinessType;

    /**
     * @var array 上传文件内容数组，最多支持20个文件
     */
    public $FileInfos;

    /**
     * @var array 上传文件链接数组，最多支持20个URL
     */
    public $FileUrls;

    /**
     * @var boolean 是否将pdf灰色矩阵置白
true--是，处理置白
false--否，不处理
     */
    public $CoverRect;

    /**
     * @var string 特殊文件类型需要指定文件类型：
HTML-- .html文件
     */
    public $FileType;

    /**
     * @var array 用户自定义ID数组，与上传文件一一对应
     */
    public $CustomIds;

    /**
     * @param Caller $Caller 调用方信息
     * @param string $BusinessType 文件对应业务类型，用于区分文件存储路径：
1. TEMPLATE - 模版； 文件类型：.pdf/.html
2. DOCUMENT - 签署过程及签署后的合同文档 文件类型：.pdf/.html
3. FLOW - 签署过程 文件类型：.pdf/.html
4. SEAL - 印章； 文件类型：.jpg/.jpeg/.png
5. BUSINESSLICENSE - 营业执照 文件类型：.jpg/.jpeg/.png
6. IDCARD - 身份证 文件类型：.jpg/.jpeg/.png
     * @param array $FileInfos 上传文件内容数组，最多支持20个文件
     * @param array $FileUrls 上传文件链接数组，最多支持20个URL
     * @param boolean $CoverRect 是否将pdf灰色矩阵置白
true--是，处理置白
false--否，不处理
     * @param string $FileType 特殊文件类型需要指定文件类型：
HTML-- .html文件
     * @param array $CustomIds 用户自定义ID数组，与上传文件一一对应
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
        if (array_key_exists("Caller",$param) and $param["Caller"] !== null) {
            $this->Caller = new Caller();
            $this->Caller->deserialize($param["Caller"]);
        }

        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }

        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new UploadFile();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("FileUrls",$param) and $param["FileUrls"] !== null) {
            $this->FileUrls = $param["FileUrls"];
        }

        if (array_key_exists("CoverRect",$param) and $param["CoverRect"] !== null) {
            $this->CoverRect = $param["CoverRect"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("CustomIds",$param) and $param["CustomIds"] !== null) {
            $this->CustomIds = $param["CustomIds"];
        }
    }
}
