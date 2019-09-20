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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getDisplayStrategy() 获取集群展示策略，该字段取值根据所选页面不同输入不同，集群列表页：clusterList，集群监控：monitorManage，云硬件管理：cloudHardwareManage，组件管理页：componentManage
 * @method void setDisplayStrategy(string $DisplayStrategy) 设置集群展示策略，该字段取值根据所选页面不同输入不同，集群列表页：clusterList，集群监控：monitorManage，云硬件管理：cloudHardwareManage，组件管理页：componentManage
 * @method array getInstanceIds() 获取查询列表,  如果不填写，返回该AppId下所有实例列表
 * @method void setInstanceIds(array $InstanceIds) 设置查询列表,  如果不填写，返回该AppId下所有实例列表
 * @method integer getOffset() 获取查询偏移量，默认0
 * @method void setOffset(integer $Offset) 设置查询偏移量，默认0
 * @method integer getLimit() 获取查询结果限制，默认值10
 * @method void setLimit(integer $Limit) 设置查询结果限制，默认值10
 * @method integer getProjectId() 获取项目列表，默认值-1
 * @method void setProjectId(integer $ProjectId) 设置项目列表，默认值-1
 * @method string getOrderField() 获取排序字段，当前支持以下排序字段：clusterId、addTime、status
 * @method void setOrderField(string $OrderField) 设置排序字段，当前支持以下排序字段：clusterId、addTime、status
 * @method integer getAsc() 获取排序方法，0降序，1升序
 * @method void setAsc(integer $Asc) 设置排序方法，0降序，1升序
 */

/**
 *DescribeInstances请求参数结构体
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var string 集群展示策略，该字段取值根据所选页面不同输入不同，集群列表页：clusterList，集群监控：monitorManage，云硬件管理：cloudHardwareManage，组件管理页：componentManage
     */
    public $DisplayStrategy;

    /**
     * @var array 查询列表,  如果不填写，返回该AppId下所有实例列表
     */
    public $InstanceIds;

    /**
     * @var integer 查询偏移量，默认0
     */
    public $Offset;

    /**
     * @var integer 查询结果限制，默认值10
     */
    public $Limit;

    /**
     * @var integer 项目列表，默认值-1
     */
    public $ProjectId;

    /**
     * @var string 排序字段，当前支持以下排序字段：clusterId、addTime、status
     */
    public $OrderField;

    /**
     * @var integer 排序方法，0降序，1升序
     */
    public $Asc;
    /**
     * @param string $DisplayStrategy 集群展示策略，该字段取值根据所选页面不同输入不同，集群列表页：clusterList，集群监控：monitorManage，云硬件管理：cloudHardwareManage，组件管理页：componentManage
     * @param array $InstanceIds 查询列表,  如果不填写，返回该AppId下所有实例列表
     * @param integer $Offset 查询偏移量，默认0
     * @param integer $Limit 查询结果限制，默认值10
     * @param integer $ProjectId 项目列表，默认值-1
     * @param string $OrderField 排序字段，当前支持以下排序字段：clusterId、addTime、status
     * @param integer $Asc 排序方法，0降序，1升序
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DisplayStrategy",$param) and $param["DisplayStrategy"] !== null) {
            $this->DisplayStrategy = $param["DisplayStrategy"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Asc",$param) and $param["Asc"] !== null) {
            $this->Asc = $param["Asc"];
        }
    }
}
