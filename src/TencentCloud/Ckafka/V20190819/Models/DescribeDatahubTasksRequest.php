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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatahubTasks请求参数结构体
 *
 * @method integer getLimit() 获取<p>返回数量，默认为20，最大值为100 (超过100限制为100)</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为20，最大值为100 (超过100限制为100)</p>
 * @method integer getOffset() 获取<p>分页偏移量，默认为0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，默认为0</p>
 * @method string getSearchWord() 获取<p>过滤条件，按照 TaskName 过滤，支持模糊查询</p>
 * @method void setSearchWord(string $SearchWord) 设置<p>过滤条件，按照 TaskName 过滤，支持模糊查询</p>
 * @method string getTargetType() 获取<p>转储的目标类型</p>
 * @method void setTargetType(string $TargetType) 设置<p>转储的目标类型</p>
 * @method string getTaskType() 获取<p>任务类型，SOURCE数据接入，SINK数据流出</p>
 * @method void setTaskType(string $TaskType) 设置<p>任务类型，SOURCE数据接入，SINK数据流出</p>
 * @method string getSourceType() 获取<p>转储的源类型</p>
 * @method void setSourceType(string $SourceType) 设置<p>转储的源类型</p>
 * @method string getResource() 获取<p>转储的资源</p>
 * @method void setResource(string $Resource) 设置<p>转储的资源</p>
 */
class DescribeDatahubTasksRequest extends AbstractModel
{
    /**
     * @var integer <p>返回数量，默认为20，最大值为100 (超过100限制为100)</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移量，默认为0</p>
     */
    public $Offset;

    /**
     * @var string <p>过滤条件，按照 TaskName 过滤，支持模糊查询</p>
     */
    public $SearchWord;

    /**
     * @var string <p>转储的目标类型</p>
     */
    public $TargetType;

    /**
     * @var string <p>任务类型，SOURCE数据接入，SINK数据流出</p>
     */
    public $TaskType;

    /**
     * @var string <p>转储的源类型</p>
     */
    public $SourceType;

    /**
     * @var string <p>转储的资源</p>
     */
    public $Resource;

    /**
     * @param integer $Limit <p>返回数量，默认为20，最大值为100 (超过100限制为100)</p>
     * @param integer $Offset <p>分页偏移量，默认为0</p>
     * @param string $SearchWord <p>过滤条件，按照 TaskName 过滤，支持模糊查询</p>
     * @param string $TargetType <p>转储的目标类型</p>
     * @param string $TaskType <p>任务类型，SOURCE数据接入，SINK数据流出</p>
     * @param string $SourceType <p>转储的源类型</p>
     * @param string $Resource <p>转储的资源</p>
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
