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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrometheusAlertGroups请求参数结构体
 *
 * @method string getInstanceId() 获取Prometheus 实例 ID
 * @method void setInstanceId(string $InstanceId) 设置Prometheus 实例 ID
 * @method integer getLimit() 获取返回数量，默认为 20，最大值为 100
 * @method void setLimit(integer $Limit) 设置返回数量，默认为 20，最大值为 100
 * @method integer getOffset() 获取偏移量，默认为 0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为 0
 * @method string getGroupId() 获取告警分组ID，形如alert-xxxx。
查询给定ID的告警分组
 * @method void setGroupId(string $GroupId) 设置告警分组ID，形如alert-xxxx。
查询给定ID的告警分组
 * @method string getGroupName() 获取告警分组名称。
查询名称中包含给定字符串的告警分组
 * @method void setGroupName(string $GroupName) 设置告警分组名称。
查询名称中包含给定字符串的告警分组
 */
class DescribePrometheusAlertGroupsRequest extends AbstractModel
{
    /**
     * @var string Prometheus 实例 ID
     */
    public $InstanceId;

    /**
     * @var integer 返回数量，默认为 20，最大值为 100
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为 0
     */
    public $Offset;

    /**
     * @var string 告警分组ID，形如alert-xxxx。
查询给定ID的告警分组
     */
    public $GroupId;

    /**
     * @var string 告警分组名称。
查询名称中包含给定字符串的告警分组
     */
    public $GroupName;

    /**
     * @param string $InstanceId Prometheus 实例 ID
     * @param integer $Limit 返回数量，默认为 20，最大值为 100
     * @param integer $Offset 偏移量，默认为 0
     * @param string $GroupId 告警分组ID，形如alert-xxxx。
查询给定ID的告警分组
     * @param string $GroupName 告警分组名称。
查询名称中包含给定字符串的告警分组
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
    }
}
