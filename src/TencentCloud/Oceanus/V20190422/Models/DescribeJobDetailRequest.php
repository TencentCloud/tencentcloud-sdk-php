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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJobDetail请求参数结构体
 *
 * @method string getPath() 获取flink rest api 路径
 * @method void setPath(string $Path) 设置flink rest api 路径
 * @method string getJobSerialId() 获取作业id
 * @method void setJobSerialId(string $JobSerialId) 设置作业id
 * @method string getMethod() 获取请求rest api 方法
 * @method void setMethod(string $Method) 设置请求rest api 方法
 */
class DescribeJobDetailRequest extends AbstractModel
{
    /**
     * @var string flink rest api 路径
     */
    public $Path;

    /**
     * @var string 作业id
     */
    public $JobSerialId;

    /**
     * @var string 请求rest api 方法
     */
    public $Method;

    /**
     * @param string $Path flink rest api 路径
     * @param string $JobSerialId 作业id
     * @param string $Method 请求rest api 方法
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("JobSerialId",$param) and $param["JobSerialId"] !== null) {
            $this->JobSerialId = $param["JobSerialId"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }
    }
}
