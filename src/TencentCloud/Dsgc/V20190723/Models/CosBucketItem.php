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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos桶资源项
 *
 * @method string getRegion() 获取资源所处地域。
 * @method void setRegion(string $Region) 设置资源所处地域。
 * @method array getBuckets() 获取COS桶列表。
 * @method void setBuckets(array $Buckets) 设置COS桶列表。
 */
class CosBucketItem extends AbstractModel
{
    /**
     * @var string 资源所处地域。
     */
    public $Region;

    /**
     * @var array COS桶列表。
     */
    public $Buckets;

    /**
     * @param string $Region 资源所处地域。
     * @param array $Buckets COS桶列表。
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

        if (array_key_exists("Buckets",$param) and $param["Buckets"] !== null) {
            $this->Buckets = $param["Buckets"];
        }
    }
}
