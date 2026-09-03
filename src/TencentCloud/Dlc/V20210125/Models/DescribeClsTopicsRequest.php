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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClsTopics请求参数结构体
 *
 * @method string getTopicName() 获取<p>日志主题名称（模糊匹配），可为空</p>
 * @method void setTopicName(string $TopicName) 设置<p>日志主题名称（模糊匹配），可为空</p>
 * @method string getTopicId() 获取<p>日志主题 ID（精确匹配），可为空</p>
 * @method void setTopicId(string $TopicId) 设置<p>日志主题 ID（精确匹配），可为空</p>
 * @method integer getOffset() 获取<p>分页偏移量，从 0 开始，默认 0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，从 0 开始，默认 0</p>
 * @method integer getLimit() 获取<p>分页每页条数，默认 20，最大 100</p>
 * @method void setLimit(integer $Limit) 设置<p>分页每页条数，默认 20，最大 100</p>
 */
class DescribeClsTopicsRequest extends AbstractModel
{
    /**
     * @var string <p>日志主题名称（模糊匹配），可为空</p>
     */
    public $TopicName;

    /**
     * @var string <p>日志主题 ID（精确匹配），可为空</p>
     */
    public $TopicId;

    /**
     * @var integer <p>分页偏移量，从 0 开始，默认 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页每页条数，默认 20，最大 100</p>
     */
    public $Limit;

    /**
     * @param string $TopicName <p>日志主题名称（模糊匹配），可为空</p>
     * @param string $TopicId <p>日志主题 ID（精确匹配），可为空</p>
     * @param integer $Offset <p>分页偏移量，从 0 开始，默认 0</p>
     * @param integer $Limit <p>分页每页条数，默认 20，最大 100</p>
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
