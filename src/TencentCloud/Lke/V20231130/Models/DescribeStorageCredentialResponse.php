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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStorageCredential返回参数结构体
 *
 * @method Credentials getCredentials() 获取密钥信息
 * @method void setCredentials(Credentials $Credentials) 设置密钥信息
 * @method integer getExpiredTime() 获取失效时间
 * @method void setExpiredTime(integer $ExpiredTime) 设置失效时间
 * @method integer getStartTime() 获取开始时间
 * @method void setStartTime(integer $StartTime) 设置开始时间
 * @method string getBucket() 获取对象存储桶
 * @method void setBucket(string $Bucket) 设置对象存储桶
 * @method string getRegion() 获取对象存储可用区
 * @method void setRegion(string $Region) 设置对象存储可用区
 * @method string getFilePath() 获取文件存储目录
 * @method void setFilePath(string $FilePath) 设置文件存储目录
 * @method string getType() 获取存储类型
 * @method void setType(string $Type) 设置存储类型
 * @method string getCorpUin() 获取主号
 * @method void setCorpUin(string $CorpUin) 设置主号
 * @method string getImagePath() 获取图片存储目录
 * @method void setImagePath(string $ImagePath) 设置图片存储目录
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeStorageCredentialResponse extends AbstractModel
{
    /**
     * @var Credentials 密钥信息
     */
    public $Credentials;

    /**
     * @var integer 失效时间
     */
    public $ExpiredTime;

    /**
     * @var integer 开始时间
     */
    public $StartTime;

    /**
     * @var string 对象存储桶
     */
    public $Bucket;

    /**
     * @var string 对象存储可用区
     */
    public $Region;

    /**
     * @var string 文件存储目录
     */
    public $FilePath;

    /**
     * @var string 存储类型
     */
    public $Type;

    /**
     * @var string 主号
     */
    public $CorpUin;

    /**
     * @var string 图片存储目录
     */
    public $ImagePath;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param Credentials $Credentials 密钥信息
     * @param integer $ExpiredTime 失效时间
     * @param integer $StartTime 开始时间
     * @param string $Bucket 对象存储桶
     * @param string $Region 对象存储可用区
     * @param string $FilePath 文件存储目录
     * @param string $Type 存储类型
     * @param string $CorpUin 主号
     * @param string $ImagePath 图片存储目录
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
