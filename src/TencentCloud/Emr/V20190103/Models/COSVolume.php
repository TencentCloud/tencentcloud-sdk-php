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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos 存储卷
 *
 * @method string getVolumeName() 获取存储卷名称
 * @method void setVolumeName(string $VolumeName) 设置存储卷名称
 * @method string getSecret() 获取密钥名称
 * @method void setSecret(string $Secret) 设置密钥名称
 * @method string getRegion() 获取cos桶所在地域
 * @method void setRegion(string $Region) 设置cos桶所在地域
 * @method string getBucket() 获取存储桶名称
 * @method void setBucket(string $Bucket) 设置存储桶名称
 * @method string getSubPath() 获取cos 子目录
 * @method void setSubPath(string $SubPath) 设置cos 子目录
 */
class COSVolume extends AbstractModel
{
    /**
     * @var string 存储卷名称
     */
    public $VolumeName;

    /**
     * @var string 密钥名称
     */
    public $Secret;

    /**
     * @var string cos桶所在地域
     */
    public $Region;

    /**
     * @var string 存储桶名称
     */
    public $Bucket;

    /**
     * @var string cos 子目录
     */
    public $SubPath;

    /**
     * @param string $VolumeName 存储卷名称
     * @param string $Secret 密钥名称
     * @param string $Region cos桶所在地域
     * @param string $Bucket 存储桶名称
     * @param string $SubPath cos 子目录
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
        if (array_key_exists("VolumeName",$param) and $param["VolumeName"] !== null) {
            $this->VolumeName = $param["VolumeName"];
        }

        if (array_key_exists("Secret",$param) and $param["Secret"] !== null) {
            $this->Secret = $param["Secret"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("SubPath",$param) and $param["SubPath"] !== null) {
            $this->SubPath = $param["SubPath"];
        }
    }
}
