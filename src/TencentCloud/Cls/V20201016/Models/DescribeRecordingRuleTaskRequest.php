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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRecordingRuleTask请求参数结构体
 *
 * @method string getTopicId() 获取<p>源指标主题id</p>
 * @method void setTopicId(string $TopicId) 设置<p>源指标主题id</p>
 * @method integer getOffset() 获取<p>分页的偏移量，默认值为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页的偏移量，默认值为0。</p>
 * @method integer getLimit() 获取<p>分页单页限制数目，默认值为20，最大值100。</p>
 * @method void setLimit(integer $Limit) 设置<p>分页单页限制数目，默认值为20，最大值100。</p>
 * @method array getFilters() 获取<li>yamlId【关联yaml配置ID】进行过滤，模糊匹配。类型：String。必选：否</li> <li>taskName按照【任务名称】进行过滤，模糊匹配。类型：String。必选：否</li> <li>taskId按照【任务ID】进行过滤，模糊匹配。类型：String。必选：否</li>
 * @method void setFilters(array $Filters) 设置<li>yamlId【关联yaml配置ID】进行过滤，模糊匹配。类型：String。必选：否</li> <li>taskName按照【任务名称】进行过滤，模糊匹配。类型：String。必选：否</li> <li>taskId按照【任务ID】进行过滤，模糊匹配。类型：String。必选：否</li>
 */
class DescribeRecordingRuleTaskRequest extends AbstractModel
{
    /**
     * @var string <p>源指标主题id</p>
     */
    public $TopicId;

    /**
     * @var integer <p>分页的偏移量，默认值为0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页单页限制数目，默认值为20，最大值100。</p>
     */
    public $Limit;

    /**
     * @var array <li>yamlId【关联yaml配置ID】进行过滤，模糊匹配。类型：String。必选：否</li> <li>taskName按照【任务名称】进行过滤，模糊匹配。类型：String。必选：否</li> <li>taskId按照【任务ID】进行过滤，模糊匹配。类型：String。必选：否</li>
     */
    public $Filters;

    /**
     * @param string $TopicId <p>源指标主题id</p>
     * @param integer $Offset <p>分页的偏移量，默认值为0。</p>
     * @param integer $Limit <p>分页单页限制数目，默认值为20，最大值100。</p>
     * @param array $Filters <li>yamlId【关联yaml配置ID】进行过滤，模糊匹配。类型：String。必选：否</li> <li>taskName按照【任务名称】进行过滤，模糊匹配。类型：String。必选：否</li> <li>taskId按照【任务ID】进行过滤，模糊匹配。类型：String。必选：否</li>
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
