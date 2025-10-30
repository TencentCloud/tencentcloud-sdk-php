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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExports请求参数结构体
 *
 * @method string getTopicId() 获取日志主题ID，可以通过DescribeTopics接口获取,访问日志主题ID和攻击日志主题ID方式不同，注意DescribeTopics接口使用方法
 * @method void setTopicId(string $TopicId) 设置日志主题ID，可以通过DescribeTopics接口获取,访问日志主题ID和攻击日志主题ID方式不同，注意DescribeTopics接口使用方法
 * @method integer getOffset() 获取分页的偏移量，默认值为0
 * @method void setOffset(integer $Offset) 设置分页的偏移量，默认值为0
 * @method integer getLimit() 获取分页单页限制数目，默认值为20，最大值100
 * @method void setLimit(integer $Limit) 设置分页单页限制数目，默认值为20，最大值100
 */
class DescribeExportsRequest extends AbstractModel
{
    /**
     * @var string 日志主题ID，可以通过DescribeTopics接口获取,访问日志主题ID和攻击日志主题ID方式不同，注意DescribeTopics接口使用方法
     */
    public $TopicId;

    /**
     * @var integer 分页的偏移量，默认值为0
     */
    public $Offset;

    /**
     * @var integer 分页单页限制数目，默认值为20，最大值100
     */
    public $Limit;

    /**
     * @param string $TopicId 日志主题ID，可以通过DescribeTopics接口获取,访问日志主题ID和攻击日志主题ID方式不同，注意DescribeTopics接口使用方法
     * @param integer $Offset 分页的偏移量，默认值为0
     * @param integer $Limit 分页单页限制数目，默认值为20，最大值100
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
