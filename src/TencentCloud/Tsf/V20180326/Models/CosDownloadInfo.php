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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cos下载所需信息
 *
 * @method string getBucket() 获取桶名称
 * @method void setBucket(string $Bucket) 设置桶名称
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getPath() 获取路径
 * @method void setPath(string $Path) 设置路径
 * @method CosCredentials getCredentials() 获取鉴权信息
 * @method void setCredentials(CosCredentials $Credentials) 设置鉴权信息
 */
class CosDownloadInfo extends AbstractModel
{
    /**
     * @var string 桶名称
     */
    public $Bucket;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 路径
     */
    public $Path;

    /**
     * @var CosCredentials 鉴权信息
     */
    public $Credentials;

    /**
     * @param string $Bucket 桶名称
     * @param string $Region 地域
     * @param string $Path 路径
     * @param CosCredentials $Credentials 鉴权信息
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
        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Credentials",$param) and $param["Credentials"] !== null) {
            $this->Credentials = new CosCredentials();
            $this->Credentials->deserialize($param["Credentials"]);
        }
    }
}
