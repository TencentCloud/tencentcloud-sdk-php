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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method integer getStatus() 获取实例状态。取值范围：
<li>1：申请中</li>
<li>2：运行中</li>
<li>3：受限运行中 (主备切换中)</li>
<li>4：已隔离</li>
<li>5：回收中</li>
<li>6：已回收</li>
<li>7：任务执行中 (实例做备份、回档等操作)</li>
<li>8：已下线</li>
<li>9：实例扩容中</li>
<li>10：实例迁移中</li>
<li>11：只读</li>
<li>12：重启中</li>
 * @method void setStatus(integer $Status) 设置实例状态。取值范围：
<li>1：申请中</li>
<li>2：运行中</li>
<li>3：受限运行中 (主备切换中)</li>
<li>4：已隔离</li>
<li>5：回收中</li>
<li>6：已回收</li>
<li>7：任务执行中 (实例做备份、回档等操作)</li>
<li>8：已下线</li>
<li>9：实例扩容中</li>
<li>10：实例迁移中</li>
<li>11：只读</li>
<li>12：重启中</li>
 * @method integer getOffset() 获取页数，默认为 0
 * @method void setOffset(integer $Offset) 设置页数，默认为 0
 * @method integer getLimit() 获取页大小，默认为50
 * @method void setLimit(integer $Limit) 设置页大小，默认为50
 * @method array getInstanceIdSet() 获取一个或者多个实例ID。实例ID，格式如：mssql-si2823jyl
 * @method void setInstanceIdSet(array $InstanceIdSet) 设置一个或者多个实例ID。实例ID，格式如：mssql-si2823jyl
 * @method integer getPayMode() 获取付费类型检索 1-包年包月，0-按量计费
 * @method void setPayMode(integer $PayMode) 设置付费类型检索 1-包年包月，0-按量计费
 */

/**
 *DescribeDBInstances请求参数结构体
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 实例状态。取值范围：
<li>1：申请中</li>
<li>2：运行中</li>
<li>3：受限运行中 (主备切换中)</li>
<li>4：已隔离</li>
<li>5：回收中</li>
<li>6：已回收</li>
<li>7：任务执行中 (实例做备份、回档等操作)</li>
<li>8：已下线</li>
<li>9：实例扩容中</li>
<li>10：实例迁移中</li>
<li>11：只读</li>
<li>12：重启中</li>
     */
    public $Status;

    /**
     * @var integer 页数，默认为 0
     */
    public $Offset;

    /**
     * @var integer 页大小，默认为50
     */
    public $Limit;

    /**
     * @var array 一个或者多个实例ID。实例ID，格式如：mssql-si2823jyl
     */
    public $InstanceIdSet;

    /**
     * @var integer 付费类型检索 1-包年包月，0-按量计费
     */
    public $PayMode;
    /**
     * @param integer $ProjectId 项目ID
     * @param integer $Status 实例状态。取值范围：
<li>1：申请中</li>
<li>2：运行中</li>
<li>3：受限运行中 (主备切换中)</li>
<li>4：已隔离</li>
<li>5：回收中</li>
<li>6：已回收</li>
<li>7：任务执行中 (实例做备份、回档等操作)</li>
<li>8：已下线</li>
<li>9：实例扩容中</li>
<li>10：实例迁移中</li>
<li>11：只读</li>
<li>12：重启中</li>
     * @param integer $Offset 页数，默认为 0
     * @param integer $Limit 页大小，默认为50
     * @param array $InstanceIdSet 一个或者多个实例ID。实例ID，格式如：mssql-si2823jyl
     * @param integer $PayMode 付费类型检索 1-包年包月，0-按量计费
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }
    }
}
