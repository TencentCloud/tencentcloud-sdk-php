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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSparkAppJob请求参数结构体
 *
 * @method string getJobId() 获取spark作业Id，与JobName同时存在时，JobName无效
 * @method void setJobId(string $JobId) 设置spark作业Id，与JobName同时存在时，JobName无效
 * @method string getJobName() 获取spark作业名
 * @method void setJobName(string $JobName) 设置spark作业名
 */
class DescribeSparkAppJobRequest extends AbstractModel
{
    /**
     * @var string spark作业Id，与JobName同时存在时，JobName无效
     */
    public $JobId;

    /**
     * @var string spark作业名
     */
    public $JobName;

    /**
     * @param string $JobId spark作业Id，与JobName同时存在时，JobName无效
     * @param string $JobName spark作业名
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }
    }
}
