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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogstashPipelines返回参数结构体
 *
 * @method integer getTotalCount() 获取管道总数
 * @method void setTotalCount(integer $TotalCount) 设置管道总数
 * @method array getLogstashPipelineList() 获取管道列表
 * @method void setLogstashPipelineList(array $LogstashPipelineList) 设置管道列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLogstashPipelinesResponse extends AbstractModel
{
    /**
     * @var integer 管道总数
     */
    public $TotalCount;

    /**
     * @var array 管道列表
     */
    public $LogstashPipelineList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 管道总数
     * @param array $LogstashPipelineList 管道列表
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("LogstashPipelineList",$param) and $param["LogstashPipelineList"] !== null) {
            $this->LogstashPipelineList = [];
            foreach ($param["LogstashPipelineList"] as $key => $value){
                $obj = new LogstashPipelineInfo();
                $obj->deserialize($value);
                array_push($this->LogstashPipelineList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
