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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * COS 文件信息
 *
 * @method string getBucket() 获取存储桶。
 * @method void setBucket(string $Bucket) 设置存储桶。
 * @method string getUri() 获取COS文件地址。
 * @method void setUri(string $Uri) 设置COS文件地址。
 * @method string getRegion() 获取地域。
 * @method void setRegion(string $Region) 设置地域。
 */
class CosFileInfo extends AbstractModel
{
    /**
     * @var string 存储桶。
     */
    public $Bucket;

    /**
     * @var string COS文件地址。
     */
    public $Uri;

    /**
     * @var string 地域。
     */
    public $Region;

    /**
     * @param string $Bucket 存储桶。
     * @param string $Uri COS文件地址。
     * @param string $Region 地域。
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

        if (array_key_exists("Uri",$param) and $param["Uri"] !== null) {
            $this->Uri = $param["Uri"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
