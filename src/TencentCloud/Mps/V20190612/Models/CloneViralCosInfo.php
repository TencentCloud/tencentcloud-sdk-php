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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 爆款复刻输出COS信息
 *
 * @method string getRegion() 获取<p>区域</p>
 * @method void setRegion(string $Region) 设置<p>区域</p>
 * @method string getBucket() 获取<p>COS桶</p>
 * @method void setBucket(string $Bucket) 设置<p>COS桶</p>
 * @method string getDir() 获取<p>目录。空时默认根目录</p>
 * @method void setDir(string $Dir) 设置<p>目录。空时默认根目录</p>
 */
class CloneViralCosInfo extends AbstractModel
{
    /**
     * @var string <p>区域</p>
     */
    public $Region;

    /**
     * @var string <p>COS桶</p>
     */
    public $Bucket;

    /**
     * @var string <p>目录。空时默认根目录</p>
     */
    public $Dir;

    /**
     * @param string $Region <p>区域</p>
     * @param string $Bucket <p>COS桶</p>
     * @param string $Dir <p>目录。空时默认根目录</p>
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Dir",$param) and $param["Dir"] !== null) {
            $this->Dir = $param["Dir"];
        }
    }
}
