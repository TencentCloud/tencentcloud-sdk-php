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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrometheusAlertGroups请求参数结构体
 *
 * @method string getInstanceId() 获取<p>Prometheus 实例 ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>Prometheus 实例 ID</p>
 * @method integer getLimit() 获取<p>返回数量，默认为 20，最大值为 100</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为 20，最大值为 100</p>
 * @method integer getOffset() 获取<p>偏移量，默认为 0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为 0</p>
 * @method string getGroupId() 获取<p>告警分组ID，形如alert-xxxx。<br>查询给定ID的告警分组</p>
 * @method void setGroupId(string $GroupId) 设置<p>告警分组ID，形如alert-xxxx。<br>查询给定ID的告警分组</p>
 * @method string getGroupName() 获取<p>告警分组名称。<br>查询名称中包含给定字符串的告警分组</p>
 * @method void setGroupName(string $GroupName) 设置<p>告警分组名称。<br>查询名称中包含给定字符串的告警分组</p>
 * @method array getLabels() 获取<p>通过自定义label查询告警规则：<br>返回包含符合过滤条件告警规则的整个分组</p><p>多个label过滤条件取交集</p>
 * @method void setLabels(array $Labels) 设置<p>通过自定义label查询告警规则：<br>返回包含符合过滤条件告警规则的整个分组</p><p>多个label过滤条件取交集</p>
 */
class DescribePrometheusAlertGroupsRequest extends AbstractModel
{
    /**
     * @var string <p>Prometheus 实例 ID</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>返回数量，默认为 20，最大值为 100</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量，默认为 0</p>
     */
    public $Offset;

    /**
     * @var string <p>告警分组ID，形如alert-xxxx。<br>查询给定ID的告警分组</p>
     */
    public $GroupId;

    /**
     * @var string <p>告警分组名称。<br>查询名称中包含给定字符串的告警分组</p>
     */
    public $GroupName;

    /**
     * @var array <p>通过自定义label查询告警规则：<br>返回包含符合过滤条件告警规则的整个分组</p><p>多个label过滤条件取交集</p>
     */
    public $Labels;

    /**
     * @param string $InstanceId <p>Prometheus 实例 ID</p>
     * @param integer $Limit <p>返回数量，默认为 20，最大值为 100</p>
     * @param integer $Offset <p>偏移量，默认为 0</p>
     * @param string $GroupId <p>告警分组ID，形如alert-xxxx。<br>查询给定ID的告警分组</p>
     * @param string $GroupName <p>告警分组名称。<br>查询名称中包含给定字符串的告警分组</p>
     * @param array $Labels <p>通过自定义label查询告警规则：<br>返回包含符合过滤条件告警规则的整个分组</p><p>多个label过滤条件取交集</p>
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new PrometheusRuleKV();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }
    }
}
