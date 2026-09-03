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
 * DescribeAnnotationTasks请求参数结构体
 *
 * @method string getJobId() 获取<p>任务 ID</p>
 * @method void setJobId(string $JobId) 设置<p>任务 ID</p>
 * @method integer getOffset() 获取<p>分页偏移，默认 0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移，默认 0</p>
 * @method integer getLimit() 获取<p>每页数量，默认 20，最大 100</p><p>取值范围：[10, 100]</p>
 * @method void setLimit(integer $Limit) 设置<p>每页数量，默认 20，最大 100</p><p>取值范围：[10, 100]</p>
 * @method string getFileName() 获取<p>按文件名前缀过滤，不传不过滤</p>
 * @method void setFileName(string $FileName) 设置<p>按文件名前缀过滤，不传不过滤</p>
 * @method integer getStatus() 获取<p>按处理项状态过滤：1 未处理，2 处理中，3 超时，4 异常，5待确认，6 成功。不传查全部</p><p>枚举值：</p><ul><li>1： 未处理</li><li>2： 处理中</li><li>3： 超时</li><li>4： 异常</li><li>5： 待确认</li><li>6： 成功</li></ul>
 * @method void setStatus(integer $Status) 设置<p>按处理项状态过滤：1 未处理，2 处理中，3 超时，4 异常，5待确认，6 成功。不传查全部</p><p>枚举值：</p><ul><li>1： 未处理</li><li>2： 处理中</li><li>3： 超时</li><li>4： 异常</li><li>5： 待确认</li><li>6： 成功</li></ul>
 */
class DescribeAnnotationTasksRequest extends AbstractModel
{
    /**
     * @var string <p>任务 ID</p>
     */
    public $JobId;

    /**
     * @var integer <p>分页偏移，默认 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页数量，默认 20，最大 100</p><p>取值范围：[10, 100]</p>
     */
    public $Limit;

    /**
     * @var string <p>按文件名前缀过滤，不传不过滤</p>
     */
    public $FileName;

    /**
     * @var integer <p>按处理项状态过滤：1 未处理，2 处理中，3 超时，4 异常，5待确认，6 成功。不传查全部</p><p>枚举值：</p><ul><li>1： 未处理</li><li>2： 处理中</li><li>3： 超时</li><li>4： 异常</li><li>5： 待确认</li><li>6： 成功</li></ul>
     */
    public $Status;

    /**
     * @param string $JobId <p>任务 ID</p>
     * @param integer $Offset <p>分页偏移，默认 0</p>
     * @param integer $Limit <p>每页数量，默认 20，最大 100</p><p>取值范围：[10, 100]</p>
     * @param string $FileName <p>按文件名前缀过滤，不传不过滤</p>
     * @param integer $Status <p>按处理项状态过滤：1 未处理，2 处理中，3 超时，4 异常，5待确认，6 成功。不传查全部</p><p>枚举值：</p><ul><li>1： 未处理</li><li>2： 处理中</li><li>3： 超时</li><li>4： 异常</li><li>5： 待确认</li><li>6： 成功</li></ul>
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
