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
 * DescribeDatahubTasks请求参数结构体
 *
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100
 * @method integer getOffset() 获取分页偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认为0
 * @method string getSearchWord() 获取过滤条件，按照 TaskName 过滤，支持模糊查询
 * @method void setSearchWord(string $SearchWord) 设置过滤条件，按照 TaskName 过滤，支持模糊查询
 * @method string getTargetType() 获取转储的目标类型
 * @method void setTargetType(string $TargetType) 设置转储的目标类型
 * @method string getTaskType() 获取任务类型，SOURCE数据接入，SINK数据流出
 * @method void setTaskType(string $TaskType) 设置任务类型，SOURCE数据接入，SINK数据流出
 * @method string getSourceType() 获取转储的源类型
 * @method void setSourceType(string $SourceType) 设置转储的源类型
 * @method string getResource() 获取转储的资源
 * @method void setResource(string $Resource) 设置转储的资源
 */
class DescribeDatahubTasksRequest extends AbstractModel
{
    /**
     * @var integer 返回数量，默认为20，最大值为100
     */
    public $Limit;

    /**
     * @var integer 分页偏移量，默认为0
     */
    public $Offset;

    /**
     * @var string 过滤条件，按照 TaskName 过滤，支持模糊查询
     */
    public $SearchWord;

    /**
     * @var string 转储的目标类型
     */
    public $TargetType;

    /**
     * @var string 任务类型，SOURCE数据接入，SINK数据流出
     */
    public $TaskType;

    /**
     * @var string 转储的源类型
     */
    public $SourceType;

    /**
     * @var string 转储的资源
     */
    public $Resource;

    /**
     * @param integer $Limit 返回数量，默认为20，最大值为100
     * @param integer $Offset 分页偏移量，默认为0
     * @param string $SearchWord 过滤条件，按照 TaskName 过滤，支持模糊查询
     * @param string $TargetType 转储的目标类型
     * @param string $TaskType 任务类型，SOURCE数据接入，SINK数据流出
     * @param string $SourceType 转储的源类型
     * @param string $Resource 转储的资源
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }
    }
}
