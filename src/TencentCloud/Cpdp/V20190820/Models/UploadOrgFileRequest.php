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
 * UploadOrgFile请求参数结构体
 *
 * @method string getOpenId() 获取收单系统分配的开放ID
 * @method void setOpenId(string $OpenId) 设置收单系统分配的开放ID
 * @method string getOpenKey() 获取收单系统分配的密钥
 * @method void setOpenKey(string $OpenKey) 设置收单系统分配的密钥
 * @method string getStorage() 获取存储区域（0私密区，1公共区），请严格按文件要求，上传到不同的区域
 * @method void setStorage(string $Storage) 设置存储区域（0私密区，1公共区），请严格按文件要求，上传到不同的区域
 * @method string getFileMd5() 获取文件的md5值（为防止平台多次上传重复文件，文件名为文件md5,且不会覆盖，重复上传返回第一次上传成功的文件路径）
 * @method void setFileMd5(string $FileMd5) 设置文件的md5值（为防止平台多次上传重复文件，文件名为文件md5,且不会覆盖，重复上传返回第一次上传成功的文件路径）
 * @method string getFileContent() 获取文件内容（先将图片转换成二进制，再进行base64加密）
 * @method void setFileContent(string $FileContent) 设置文件内容（先将图片转换成二进制，再进行base64加密）
 * @method string getFileExtension() 获取文件扩展名（png,jpg,gif）
 * @method void setFileExtension(string $FileExtension) 设置文件扩展名（png,jpg,gif）
 * @method string getProfile() 获取沙箱环境填sandbox，正式环境不填
 * @method void setProfile(string $Profile) 设置沙箱环境填sandbox，正式环境不填
 */
class UploadOrgFileRequest extends AbstractModel
{
    /**
     * @var string 收单系统分配的开放ID
     */
    public $OpenId;

    /**
     * @var string 收单系统分配的密钥
     */
    public $OpenKey;

    /**
     * @var string 存储区域（0私密区，1公共区），请严格按文件要求，上传到不同的区域
     */
    public $Storage;

    /**
     * @var string 文件的md5值（为防止平台多次上传重复文件，文件名为文件md5,且不会覆盖，重复上传返回第一次上传成功的文件路径）
     */
    public $FileMd5;

    /**
     * @var string 文件内容（先将图片转换成二进制，再进行base64加密）
     */
    public $FileContent;

    /**
     * @var string 文件扩展名（png,jpg,gif）
     */
    public $FileExtension;

    /**
     * @var string 沙箱环境填sandbox，正式环境不填
     */
    public $Profile;

    /**
     * @param string $OpenId 收单系统分配的开放ID
     * @param string $OpenKey 收单系统分配的密钥
     * @param string $Storage 存储区域（0私密区，1公共区），请严格按文件要求，上传到不同的区域
     * @param string $FileMd5 文件的md5值（为防止平台多次上传重复文件，文件名为文件md5,且不会覆盖，重复上传返回第一次上传成功的文件路径）
     * @param string $FileContent 文件内容（先将图片转换成二进制，再进行base64加密）
     * @param string $FileExtension 文件扩展名（png,jpg,gif）
     * @param string $Profile 沙箱环境填sandbox，正式环境不填
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
        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("OpenKey",$param) and $param["OpenKey"] !== null) {
            $this->OpenKey = $param["OpenKey"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("FileMd5",$param) and $param["FileMd5"] !== null) {
            $this->FileMd5 = $param["FileMd5"];
        }

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }

        if (array_key_exists("FileExtension",$param) and $param["FileExtension"] !== null) {
            $this->FileExtension = $param["FileExtension"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
