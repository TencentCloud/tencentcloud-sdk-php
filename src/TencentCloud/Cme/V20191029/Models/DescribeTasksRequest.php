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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTasks请求参数结构体
 *
 * @method string getPlatform() 获取平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
 * @method void setPlatform(string $Platform) 设置平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
 * @method string getProjectId() 获取项目 Id，使用项目 Id 进行过滤。
 * @method void setProjectId(string $ProjectId) 设置项目 Id，使用项目 Id 进行过滤。
 * @method array getTaskTypeSet() 获取任务类型集合，取值有：
<li>VIDEO_EDIT_PROJECT_EXPORT：视频编辑项目导出。</li>

注：不填不使用任务类型进行过滤。
 * @method void setTaskTypeSet(array $TaskTypeSet) 设置任务类型集合，取值有：
<li>VIDEO_EDIT_PROJECT_EXPORT：视频编辑项目导出。</li>

注：不填不使用任务类型进行过滤。
 * @method array getStatusSet() 获取任务状态集合，取值有：
<li>PROCESSING：处理中；</li>
<li>SUCCESS：成功；</li>
<li>FAIL：失败。</li>

注：不填则不使用任务状态进行过滤。
 * @method void setStatusSet(array $StatusSet) 设置任务状态集合，取值有：
<li>PROCESSING：处理中；</li>
<li>SUCCESS：成功；</li>
<li>FAIL：失败。</li>

注：不填则不使用任务状态进行过滤。
 * @method integer getOffset() 获取分页返回的起始偏移量，默认值：0。
 * @method void setOffset(integer $Offset) 设置分页返回的起始偏移量，默认值：0。
 * @method integer getLimit() 获取分页返回的记录条数，默认值：10。最大值：20。
 * @method void setLimit(integer $Limit) 设置分页返回的记录条数，默认值：10。最大值：20。
 * @method string getOperator() 获取操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以获取所有任务信息。如果指定操作者，则操作者需要是任务发起者。
 * @method void setOperator(string $Operator) 设置操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以获取所有任务信息。如果指定操作者，则操作者需要是任务发起者。
 */
class DescribeTasksRequest extends AbstractModel
{
    /**
     * @var string 平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
     */
    public $Platform;

    /**
     * @var string 项目 Id，使用项目 Id 进行过滤。
     */
    public $ProjectId;

    /**
     * @var array 任务类型集合，取值有：
<li>VIDEO_EDIT_PROJECT_EXPORT：视频编辑项目导出。</li>

注：不填不使用任务类型进行过滤。
     */
    public $TaskTypeSet;

    /**
     * @var array 任务状态集合，取值有：
<li>PROCESSING：处理中；</li>
<li>SUCCESS：成功；</li>
<li>FAIL：失败。</li>

注：不填则不使用任务状态进行过滤。
     */
    public $StatusSet;

    /**
     * @var integer 分页返回的起始偏移量，默认值：0。
     */
    public $Offset;

    /**
     * @var integer 分页返回的记录条数，默认值：10。最大值：20。
     */
    public $Limit;

    /**
     * @var string 操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以获取所有任务信息。如果指定操作者，则操作者需要是任务发起者。
     */
    public $Operator;

    /**
     * @param string $Platform 平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
     * @param string $ProjectId 项目 Id，使用项目 Id 进行过滤。
     * @param array $TaskTypeSet 任务类型集合，取值有：
<li>VIDEO_EDIT_PROJECT_EXPORT：视频编辑项目导出。</li>

注：不填不使用任务类型进行过滤。
     * @param array $StatusSet 任务状态集合，取值有：
<li>PROCESSING：处理中；</li>
<li>SUCCESS：成功；</li>
<li>FAIL：失败。</li>

注：不填则不使用任务状态进行过滤。
     * @param integer $Offset 分页返回的起始偏移量，默认值：0。
     * @param integer $Limit 分页返回的记录条数，默认值：10。最大值：20。
     * @param string $Operator 操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以获取所有任务信息。如果指定操作者，则操作者需要是任务发起者。
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
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskTypeSet",$param) and $param["TaskTypeSet"] !== null) {
            $this->TaskTypeSet = $param["TaskTypeSet"];
        }

        if (array_key_exists("StatusSet",$param) and $param["StatusSet"] !== null) {
            $this->StatusSet = $param["StatusSet"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
