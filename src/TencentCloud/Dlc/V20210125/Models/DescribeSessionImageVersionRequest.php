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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSessionImageVersion请求参数结构体
 *
 * @method string getDataEngineId() 获取引擎Id
 * @method void setDataEngineId(string $DataEngineId) 设置引擎Id
 * @method string getFrameworkType() 获取框架类型：machine-learning、python、spark-ml
 * @method void setFrameworkType(string $FrameworkType) 设置框架类型：machine-learning、python、spark-ml
 */
class DescribeSessionImageVersionRequest extends AbstractModel
{
    /**
     * @var string 引擎Id
     */
    public $DataEngineId;

    /**
     * @var string 框架类型：machine-learning、python、spark-ml
     */
    public $FrameworkType;

    /**
     * @param string $DataEngineId 引擎Id
     * @param string $FrameworkType 框架类型：machine-learning、python、spark-ml
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
        if (array_key_exists("DataEngineId",$param) and $param["DataEngineId"] !== null) {
            $this->DataEngineId = $param["DataEngineId"];
        }

        if (array_key_exists("FrameworkType",$param) and $param["FrameworkType"] !== null) {
            $this->FrameworkType = $param["FrameworkType"];
        }
    }
}
