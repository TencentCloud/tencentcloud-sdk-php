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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAnnotationJobs请求参数结构体
 *
 * @method integer getOffset() 获取<p>分页偏移，默认 0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移，默认 0</p>
 * @method integer getLimit() 获取<p>每页数量，默认 20，最大 100</p><p>取值范围：[10, 100]</p>
 * @method void setLimit(integer $Limit) 设置<p>每页数量，默认 20，最大 100</p><p>取值范围：[10, 100]</p>
 * @method integer getStatus() 获取<p>按任务状态过滤：1 处理中，2 异常，3 成功。不传查全部</p><p>枚举值：</p><ul><li>1： 处理中</li><li>2： 异常</li><li>3： 成功</li></ul>
 * @method void setStatus(integer $Status) 设置<p>按任务状态过滤：1 处理中，2 异常，3 成功。不传查全部</p><p>枚举值：</p><ul><li>1： 处理中</li><li>2： 异常</li><li>3： 成功</li></ul>
 * @method string getInputPath() 获取<p>按输入路径前缀过滤，不传不过滤</p>
 * @method void setInputPath(string $InputPath) 设置<p>按输入路径前缀过滤，不传不过滤</p>
 */
class DescribeAnnotationJobsRequest extends AbstractModel
{
    /**
     * @var integer <p>分页偏移，默认 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页数量，默认 20，最大 100</p><p>取值范围：[10, 100]</p>
     */
    public $Limit;

    /**
     * @var integer <p>按任务状态过滤：1 处理中，2 异常，3 成功。不传查全部</p><p>枚举值：</p><ul><li>1： 处理中</li><li>2： 异常</li><li>3： 成功</li></ul>
     */
    public $Status;

    /**
     * @var string <p>按输入路径前缀过滤，不传不过滤</p>
     */
    public $InputPath;

    /**
     * @param integer $Offset <p>分页偏移，默认 0</p>
     * @param integer $Limit <p>每页数量，默认 20，最大 100</p><p>取值范围：[10, 100]</p>
     * @param integer $Status <p>按任务状态过滤：1 处理中，2 异常，3 成功。不传查全部</p><p>枚举值：</p><ul><li>1： 处理中</li><li>2： 异常</li><li>3： 成功</li></ul>
     * @param string $InputPath <p>按输入路径前缀过滤，不传不过滤</p>
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InputPath",$param) and $param["InputPath"] !== null) {
            $this->InputPath = $param["InputPath"];
        }
    }
}
