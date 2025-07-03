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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Ctsdb类型入参
 *
 * @method string getResource() 获取连接管理实例资源
 * @method void setResource(string $Resource) 设置连接管理实例资源
 * @method string getCtsdbMetric() 获取Ctsdb的metric
 * @method void setCtsdbMetric(string $CtsdbMetric) 设置Ctsdb的metric
 */
class CtsdbParam extends AbstractModel
{
    /**
     * @var string 连接管理实例资源
     */
    public $Resource;

    /**
     * @var string Ctsdb的metric
     */
    public $CtsdbMetric;

    /**
     * @param string $Resource 连接管理实例资源
     * @param string $CtsdbMetric Ctsdb的metric
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("CtsdbMetric",$param) and $param["CtsdbMetric"] !== null) {
            $this->CtsdbMetric = $param["CtsdbMetric"];
        }
    }
}
