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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImageTask返回参数结构体
 *
 * @method array getResultSet() 获取任务处理结果
 * @method void setResultSet(array $ResultSet) 设置任务处理结果
 * @method integer getJobId() 获取任务唯一标识
 * @method void setJobId(integer $JobId) 设置任务唯一标识
 * @method integer getProgress() 获取任务执行进度
 * @method void setProgress(integer $Progress) 设置任务执行进度
 * @method integer getTotalCount() 获取任务结果数目
 * @method void setTotalCount(integer $TotalCount) 设置任务结果数目
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeImageTaskResponse extends AbstractModel
{
    /**
     * @var array 任务处理结果
     */
    public $ResultSet;

    /**
     * @var integer 任务唯一标识
     */
    public $JobId;

    /**
     * @var integer 任务执行进度
     */
    public $Progress;

    /**
     * @var integer 任务结果数目
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $ResultSet 任务处理结果
     * @param integer $JobId 任务唯一标识
     * @param integer $Progress 任务执行进度
     * @param integer $TotalCount 任务结果数目
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
        if (array_key_exists("ResultSet",$param) and $param["ResultSet"] !== null) {
            $this->ResultSet = [];
            foreach ($param["ResultSet"] as $key => $value){
                $obj = new ImageTaskResult();
                $obj->deserialize($value);
                array_push($this->ResultSet, $obj);
            }
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
