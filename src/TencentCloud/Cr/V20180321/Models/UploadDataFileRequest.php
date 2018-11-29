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
namespace TencentCloud\Cr\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getModule() 获取模块名
 * @method void setModule(string $Module) 设置模块名
 * @method string getOperation() 获取操作名
 * @method void setOperation(string $Operation) 设置操作名
 * @method string getFileName() 获取文件名
 * @method void setFileName(string $FileName) 设置文件名
 * @method string getUploadModel() 获取上传类型，不填默认催收文件，催收文件为data，还款文件为repay。
 * @method void setUploadModel(string $UploadModel) 设置上传类型，不填默认催收文件，催收文件为data，还款文件为repay。
 * @method binary getFile() 获取文件，文件与文件地址上传只可选用一种，使用 Content-Type: multipart/form-data 协议来上传二进制流文件。
 * @method void setFile(binary $File) 设置文件，文件与文件地址上传只可选用一种，使用 Content-Type: multipart/form-data 协议来上传二进制流文件。
 * @method string getFileUrl() 获取文件上传地址
 * @method void setFileUrl(string $FileUrl) 设置文件上传地址
 */

/**
 *UploadDataFile请求参数结构体
 */
class UploadDataFileRequest extends AbstractModel
{
    /**
     * @var string 模块名
     */
    public $Module;

    /**
     * @var string 操作名
     */
    public $Operation;

    /**
     * @var string 文件名
     */
    public $FileName;

    /**
     * @var string 上传类型，不填默认催收文件，催收文件为data，还款文件为repay。
     */
    public $UploadModel;

    /**
     * @var binary 文件，文件与文件地址上传只可选用一种，使用 Content-Type: multipart/form-data 协议来上传二进制流文件。
     */
    public $File;

    /**
     * @var string 文件上传地址
     */
    public $FileUrl;
    /**
     * @param string $Module 模块名
     * @param string $Operation 操作名
     * @param string $FileName 文件名
     * @param string $UploadModel 上传类型，不填默认催收文件，催收文件为data，还款文件为repay。
     * @param binary $File 文件，文件与文件地址上传只可选用一种，使用 Content-Type: multipart/form-data 协议来上传二进制流文件。
     * @param string $FileUrl 文件上传地址
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("UploadModel",$param) and $param["UploadModel"] !== null) {
            $this->UploadModel = $param["UploadModel"];
        }

        if (array_key_exists("File",$param) and $param["File"] !== null) {
            $this->File = new binary();
            $this->File->deserialize($param["File"]);
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }
    }
}
