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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStorageCredential返回参数结构体
 *
 * @method Credentials getCredentials() 获取<p>密钥信息</p>
 * @method void setCredentials(Credentials $Credentials) 设置<p>密钥信息</p>
 * @method integer getExpiredTime() 获取<p>失效时间，为 Unix 时间戳</p><p>单位：秒</p>
 * @method void setExpiredTime(integer $ExpiredTime) 设置<p>失效时间，为 Unix 时间戳</p><p>单位：秒</p>
 * @method integer getStartTime() 获取<p>开始时间，为 Unix 时间戳</p><p>单位：秒</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间，为 Unix 时间戳</p><p>单位：秒</p>
 * @method string getBucket() 获取<p>对象存储桶</p>
 * @method void setBucket(string $Bucket) 设置<p>对象存储桶</p>
 * @method string getRegion() 获取<p>对象存储可用区</p>
 * @method void setRegion(string $Region) 设置<p>对象存储可用区</p>
 * @method string getFilePath() 获取<p>文件存储目录</p>
 * @method void setFilePath(string $FilePath) 设置<p>文件存储目录</p>
 * @method string getType() 获取<p>存储类型</p>
 * @method void setType(string $Type) 设置<p>存储类型</p>
 * @method string getCorpUin() 获取<p>企业主账号</p>
 * @method void setCorpUin(string $CorpUin) 设置<p>企业主账号</p>
 * @method string getImagePath() 获取<p>图片存储目录</p>
 * @method void setImagePath(string $ImagePath) 设置<p>图片存储目录</p>
 * @method string getUploadPath() 获取<p>上传存储路径，到具体文件</p>
 * @method void setUploadPath(string $UploadPath) 设置<p>上传存储路径，到具体文件</p>
 * @method string getUploadUrl() 获取<p>文件上传地址，使用put请求上传文件到该地址</p>
 * @method void setUploadUrl(string $UploadUrl) 设置<p>文件上传地址，使用put请求上传文件到该地址</p>
 * @method string getFileUrl() 获取<p>文件的预签名地址，支持下载</p>
 * @method void setFileUrl(string $FileUrl) 设置<p>文件的预签名地址，支持下载</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeStorageCredentialResponse extends AbstractModel
{
    /**
     * @var Credentials <p>密钥信息</p>
     */
    public $Credentials;

    /**
     * @var integer <p>失效时间，为 Unix 时间戳</p><p>单位：秒</p>
     */
    public $ExpiredTime;

    /**
     * @var integer <p>开始时间，为 Unix 时间戳</p><p>单位：秒</p>
     */
    public $StartTime;

    /**
     * @var string <p>对象存储桶</p>
     */
    public $Bucket;

    /**
     * @var string <p>对象存储可用区</p>
     */
    public $Region;

    /**
     * @var string <p>文件存储目录</p>
     */
    public $FilePath;

    /**
     * @var string <p>存储类型</p>
     */
    public $Type;

    /**
     * @var string <p>企业主账号</p>
     */
    public $CorpUin;

    /**
     * @var string <p>图片存储目录</p>
     */
    public $ImagePath;

    /**
     * @var string <p>上传存储路径，到具体文件</p>
     */
    public $UploadPath;

    /**
     * @var string <p>文件上传地址，使用put请求上传文件到该地址</p>
     */
    public $UploadUrl;

    /**
     * @var string <p>文件的预签名地址，支持下载</p>
     */
    public $FileUrl;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param Credentials $Credentials <p>密钥信息</p>
     * @param integer $ExpiredTime <p>失效时间，为 Unix 时间戳</p><p>单位：秒</p>
     * @param integer $StartTime <p>开始时间，为 Unix 时间戳</p><p>单位：秒</p>
     * @param string $Bucket <p>对象存储桶</p>
     * @param string $Region <p>对象存储可用区</p>
     * @param string $FilePath <p>文件存储目录</p>
     * @param string $Type <p>存储类型</p>
     * @param string $CorpUin <p>企业主账号</p>
     * @param string $ImagePath <p>图片存储目录</p>
     * @param string $UploadPath <p>上传存储路径，到具体文件</p>
     * @param string $UploadUrl <p>文件上传地址，使用put请求上传文件到该地址</p>
     * @param string $FileUrl <p>文件的预签名地址，支持下载</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Credentials",$param) and $param["Credentials"] !== null) {
            $this->Credentials = new Credentials();
            $this->Credentials->deserialize($param["Credentials"]);
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CorpUin",$param) and $param["CorpUin"] !== null) {
            $this->CorpUin = $param["CorpUin"];
        }

        if (array_key_exists("ImagePath",$param) and $param["ImagePath"] !== null) {
            $this->ImagePath = $param["ImagePath"];
        }

        if (array_key_exists("UploadPath",$param) and $param["UploadPath"] !== null) {
            $this->UploadPath = $param["UploadPath"];
        }

        if (array_key_exists("UploadUrl",$param) and $param["UploadUrl"] !== null) {
            $this->UploadUrl = $param["UploadUrl"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
