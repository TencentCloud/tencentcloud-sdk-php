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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskRecords请求参数结构体
 *
 * @method integer getOffset() 获取翻页偏移量。默认值为0
 * @method void setOffset(integer $Offset) 设置翻页偏移量。默认值为0
 * @method integer getLimit() 获取翻页查询单页数量。默认值为 20，最大值为 1000
 * @method void setLimit(integer $Limit) 设置翻页查询单页数量。默认值为 20，最大值为 1000
 * @method string getSearchWord() 获取模糊查询关键字，支持任务ID和任务名称。
 * @method void setSearchWord(string $SearchWord) 设置模糊查询关键字，支持任务ID和任务名称。
 * @method string getTaskState() 获取任务启用状态。一共2种状态可选，ENABLED：启用，DISABLED：停用
 * @method void setTaskState(string $TaskState) 设置任务启用状态。一共2种状态可选，ENABLED：启用，DISABLED：停用
 * @method string getGroupId() 获取部署组ID。前往[应用管理](https://console.cloud.tencent.com/tsf/app?rid=1)点击应用ID进入应用部署列表页面获取部署组ID。
 * @method void setGroupId(string $GroupId) 设置部署组ID。前往[应用管理](https://console.cloud.tencent.com/tsf/app?rid=1)点击应用ID进入应用部署列表页面获取部署组ID。
 * @method string getTaskType() 获取任务类型。当前只支持一种任务类型。枚举值，java：Java类任务
 * @method void setTaskType(string $TaskType) 设置任务类型。当前只支持一种任务类型。枚举值，java：Java类任务
 * @method string getExecuteType() 获取任务执行方式，unicast：随机单节点执行，broadcast：广播执行，shard：分片执行
 * @method void setExecuteType(string $ExecuteType) 设置任务执行方式，unicast：随机单节点执行，broadcast：广播执行，shard：分片执行
 * @method array getIds() 获取任务ID列表。在[任务管理](https://console.cloud.tencent.com/tsf/tct?rid=1)列表页第一列查看任务ID。
 * @method void setIds(array $Ids) 设置任务ID列表。在[任务管理](https://console.cloud.tencent.com/tsf/tct?rid=1)列表页第一列查看任务ID。
 */
class DescribeTaskRecordsRequest extends AbstractModel
{
    /**
     * @var integer 翻页偏移量。默认值为0
     */
    public $Offset;

    /**
     * @var integer 翻页查询单页数量。默认值为 20，最大值为 1000
     */
    public $Limit;

    /**
     * @var string 模糊查询关键字，支持任务ID和任务名称。
     */
    public $SearchWord;

    /**
     * @var string 任务启用状态。一共2种状态可选，ENABLED：启用，DISABLED：停用
     */
    public $TaskState;

    /**
     * @var string 部署组ID。前往[应用管理](https://console.cloud.tencent.com/tsf/app?rid=1)点击应用ID进入应用部署列表页面获取部署组ID。
     */
    public $GroupId;

    /**
     * @var string 任务类型。当前只支持一种任务类型。枚举值，java：Java类任务
     */
    public $TaskType;

    /**
     * @var string 任务执行方式，unicast：随机单节点执行，broadcast：广播执行，shard：分片执行
     */
    public $ExecuteType;

    /**
     * @var array 任务ID列表。在[任务管理](https://console.cloud.tencent.com/tsf/tct?rid=1)列表页第一列查看任务ID。
     */
    public $Ids;

    /**
     * @param integer $Offset 翻页偏移量。默认值为0
     * @param integer $Limit 翻页查询单页数量。默认值为 20，最大值为 1000
     * @param string $SearchWord 模糊查询关键字，支持任务ID和任务名称。
     * @param string $TaskState 任务启用状态。一共2种状态可选，ENABLED：启用，DISABLED：停用
     * @param string $GroupId 部署组ID。前往[应用管理](https://console.cloud.tencent.com/tsf/app?rid=1)点击应用ID进入应用部署列表页面获取部署组ID。
     * @param string $TaskType 任务类型。当前只支持一种任务类型。枚举值，java：Java类任务
     * @param string $ExecuteType 任务执行方式，unicast：随机单节点执行，broadcast：广播执行，shard：分片执行
     * @param array $Ids 任务ID列表。在[任务管理](https://console.cloud.tencent.com/tsf/tct?rid=1)列表页第一列查看任务ID。
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

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("TaskState",$param) and $param["TaskState"] !== null) {
            $this->TaskState = $param["TaskState"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ExecuteType",$param) and $param["ExecuteType"] !== null) {
            $this->ExecuteType = $param["ExecuteType"];
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }
    }
}
