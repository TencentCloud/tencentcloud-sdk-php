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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExtMetric请求参数结构体
 *
 * @method string getExtNamespace() 获取对外命名空间
 * @method void setExtNamespace(string $ExtNamespace) 设置对外命名空间
 */
class DescribeExtMetricRequest extends AbstractModel
{
    /**
     * @var string 对外命名空间
     */
    public $ExtNamespace;

    /**
     * @param string $ExtNamespace 对外命名空间
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
        if (array_key_exists("ExtNamespace",$param) and $param["ExtNamespace"] !== null) {
            $this->ExtNamespace = $param["ExtNamespace"];
        }
    }
}
