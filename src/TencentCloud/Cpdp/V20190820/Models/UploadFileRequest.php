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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadFile请求参数结构体
 *
 * @method string getFileName() 获取文件名
 * @method void setFileName(string $FileName) 设置文件名
 * @method string getFileType() 获取文件类型
__IdCard__:身份证
__IdCardCheck__:身份证加验证(只支持人像面)
 * @method void setFileType(string $FileType) 设置文件类型
__IdCard__:身份证
__IdCardCheck__:身份证加验证(只支持人像面)
 * @method string getFileUrl() 获取文件链接
__FileUrl和FileContent二选一__
 * @method void setFileUrl(string $FileUrl) 设置文件链接
__FileUrl和FileContent二选一__
 * @method string getFileContent() 获取文件内容，Base64编码
__FileUrl和FileContent二选一__
 * @method void setFileContent(string $FileContent) 设置文件内容，Base64编码
__FileUrl和FileContent二选一__
 * @method array getFileExtendInfo() 获取文件扩展信息
 * @method void setFileExtendInfo(array $FileExtendInfo) 设置文件扩展信息
 */
class UploadFileRequest extends AbstractModel
{
    /**
     * @var string 文件名
     */
    public $FileName;

    /**
     * @var string 文件类型
__IdCard__:身份证
__IdCardCheck__:身份证加验证(只支持人像面)
     */
    public $FileType;

    /**
     * @var string 文件链接
__FileUrl和FileContent二选一__
     */
    public $FileUrl;

    /**
     * @var string 文件内容，Base64编码
__FileUrl和FileContent二选一__
     */
    public $FileContent;

    /**
     * @var array 文件扩展信息
     */
    public $FileExtendInfo;

    /**
     * @param string $FileName 文件名
     * @param string $FileType 文件类型
__IdCard__:身份证
__IdCardCheck__:身份证加验证(只支持人像面)
     * @param string $FileUrl 文件链接
__FileUrl和FileContent二选一__
     * @param string $FileContent 文件内容，Base64编码
__FileUrl和FileContent二选一__
     * @param array $FileExtendInfo 文件扩展信息
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }

        if (array_key_exists("FileExtendInfo",$param) and $param["FileExtendInfo"] !== null) {
            $this->FileExtendInfo = [];
            foreach ($param["FileExtendInfo"] as $key => $value){
                $obj = new AnchorExtendInfo();
                $obj->deserialize($value);
                array_push($this->FileExtendInfo, $obj);
            }
        }
    }
}
