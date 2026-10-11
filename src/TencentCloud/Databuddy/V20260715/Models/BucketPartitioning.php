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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分桶分区策略
 *
 * @method array getFiledNames() 获取分桶字段
 * @method void setFiledNames(array $FiledNames) 设置分桶字段
 * @method string getNumBuckets() 获取分桶数
 * @method void setNumBuckets(string $NumBuckets) 设置分桶数
 */
class BucketPartitioning extends AbstractModel
{
    /**
     * @var array 分桶字段
     */
    public $FiledNames;

    /**
     * @var string 分桶数
     */
    public $NumBuckets;

    /**
     * @param array $FiledNames 分桶字段
     * @param string $NumBuckets 分桶数
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
        if (array_key_exists("FiledNames",$param) and $param["FiledNames"] !== null) {
            $this->FiledNames = $param["FiledNames"];
        }

        if (array_key_exists("NumBuckets",$param) and $param["NumBuckets"] !== null) {
            $this->NumBuckets = $param["NumBuckets"];
        }
    }
}
