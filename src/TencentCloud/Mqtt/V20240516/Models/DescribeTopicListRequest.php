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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopicList请求参数结构体
 *
 * @method string getInstanceId() 获取<p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
 * @method array getFilters() 获取<p>查询条件列表:<br>支持TopicName模糊查询</p>
 * @method void setFilters(array $Filters) 设置<p>查询条件列表:<br>支持TopicName模糊查询</p>
 * @method integer getOffset() 获取<p>查询起始位置，默认0。</p>
 * @method void setOffset(integer $Offset) 设置<p>查询起始位置，默认0。</p>
 * @method integer getLimit() 获取<p>查询结果限制数量，默认20，最大20</p>
 * @method void setLimit(integer $Limit) 设置<p>查询结果限制数量，默认20，最大20</p>
 */
class DescribeTopicListRequest extends AbstractModel
{
    /**
     * @var string <p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
     */
    public $InstanceId;

    /**
     * @var array <p>查询条件列表:<br>支持TopicName模糊查询</p>
     */
    public $Filters;

    /**
     * @var integer <p>查询起始位置，默认0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>查询结果限制数量，默认20，最大20</p>
     */
    public $Limit;

    /**
     * @param string $InstanceId <p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
     * @param array $Filters <p>查询条件列表:<br>支持TopicName模糊查询</p>
     * @param integer $Offset <p>查询起始位置，默认0。</p>
     * @param integer $Limit <p>查询结果限制数量，默认20，最大20</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
