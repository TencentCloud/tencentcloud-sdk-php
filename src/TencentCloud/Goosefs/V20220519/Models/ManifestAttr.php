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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 清单配置
 *
 * @method string getBucket() 获取<p>桶名字</p>
 * @method void setBucket(string $Bucket) 设置<p>桶名字</p>
 * @method string getPrefix() 获取<p>目录前缀</p>
 * @method void setPrefix(string $Prefix) 设置<p>目录前缀</p>
 * @method array getAttributes() 获取<p>文件属性</p>
 * @method void setAttributes(array $Attributes) 设置<p>文件属性</p>
 * @method string getRegion() 获取<p>桶所在地域</p><p>桶所在的地域，可以不填，认为是实例所在地域</p>
 * @method void setRegion(string $Region) 设置<p>桶所在地域</p><p>桶所在的地域，可以不填，认为是实例所在地域</p>
 */
class ManifestAttr extends AbstractModel
{
    /**
     * @var string <p>桶名字</p>
     */
    public $Bucket;

    /**
     * @var string <p>目录前缀</p>
     */
    public $Prefix;

    /**
     * @var array <p>文件属性</p>
     */
    public $Attributes;

    /**
     * @var string <p>桶所在地域</p><p>桶所在的地域，可以不填，认为是实例所在地域</p>
     */
    public $Region;

    /**
     * @param string $Bucket <p>桶名字</p>
     * @param string $Prefix <p>目录前缀</p>
     * @param array $Attributes <p>文件属性</p>
     * @param string $Region <p>桶所在地域</p><p>桶所在的地域，可以不填，认为是实例所在地域</p>
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

        if (array_key_exists("Prefix",$param) and $param["Prefix"] !== null) {
            $this->Prefix = $param["Prefix"];
        }

        if (array_key_exists("Attributes",$param) and $param["Attributes"] !== null) {
            $this->Attributes = $param["Attributes"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
