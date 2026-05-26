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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群实例信息
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getInstanceType() 获取<p>引擎类型</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>引擎类型</p>
 * @method string getInstanceStatus() 获取<p>实例状态</p>
 * @method void setInstanceStatus(string $InstanceStatus) 设置<p>实例状态</p>
 * @method string getInstanceStatusDesc() 获取<p>实例状态描述</p>
 * @method void setInstanceStatusDesc(string $InstanceStatusDesc) 设置<p>实例状态描述</p>
 * @method integer getInstanceCpu() 获取<p>cpu核数</p>
 * @method void setInstanceCpu(integer $InstanceCpu) 设置<p>cpu核数</p>
 * @method integer getInstanceMemory() 获取<p>内存</p>
 * @method void setInstanceMemory(integer $InstanceMemory) 设置<p>内存</p>
 * @method integer getInstanceStorage() 获取<p>硬盘</p>
 * @method void setInstanceStorage(integer $InstanceStorage) 设置<p>硬盘</p>
 * @method string getInstanceRole() 获取<p>实例角色</p>
 * @method void setInstanceRole(string $InstanceRole) 设置<p>实例角色</p>
 * @method integer getMaintainStartTime() 获取<p>执行开始时间(距离0点的秒数)</p>
 * @method void setMaintainStartTime(integer $MaintainStartTime) 设置<p>执行开始时间(距离0点的秒数)</p>
 * @method integer getMaintainDuration() 获取<p>持续的时间(单位：秒)</p>
 * @method void setMaintainDuration(integer $MaintainDuration) 设置<p>持续的时间(单位：秒)</p>
 * @method array getMaintainWeekDays() 获取<p>可以执行的时间，枚举值：[&quot;Mon&quot;,&quot;Tue&quot;,&quot;Wed&quot;,&quot;Thu&quot;,&quot;Fri&quot;, &quot;Sat&quot;, &quot;Sun&quot;]</p>
 * @method void setMaintainWeekDays(array $MaintainWeekDays) 设置<p>可以执行的时间，枚举值：[&quot;Mon&quot;,&quot;Tue&quot;,&quot;Wed&quot;,&quot;Thu&quot;,&quot;Fri&quot;, &quot;Sat&quot;, &quot;Sun&quot;]</p>
 * @method string getServerlessStatus() 获取<p>serverless实例子状态</p>
 * @method void setServerlessStatus(string $ServerlessStatus) 设置<p>serverless实例子状态</p>
 * @method array getInstanceTasks() 获取<p>实例任务信息</p>
 * @method void setInstanceTasks(array $InstanceTasks) 设置<p>实例任务信息</p>
 * @method string getInstanceDeviceType() 获取<p>实例机器类型</p><ol><li>common，通用型。</li><li>exclusive，独享型。</li></ol>
 * @method void setInstanceDeviceType(string $InstanceDeviceType) 设置<p>实例机器类型</p><ol><li>common，通用型。</li><li>exclusive，独享型。</li></ol>
 * @method string getInstanceStorageType() 获取<p>实例存储类型<br>说明：仅当要查询的资源为 LibraDB 时，此参数才会返回值。</p>
 * @method void setInstanceStorageType(string $InstanceStorageType) 设置<p>实例存储类型<br>说明：仅当要查询的资源为 LibraDB 时，此参数才会返回值。</p>
 * @method string getDbMode() 获取<p>数据库类型</p>
 * @method void setDbMode(string $DbMode) 设置<p>数据库类型</p>
 * @method array getNodeList() 获取<p>节点列表<br>说明：仅当要查询的资源为 LibraDB 时，此参数才会返回值。</p>
 * @method void setNodeList(array $NodeList) 设置<p>节点列表<br>说明：仅当要查询的资源为 LibraDB 时，此参数才会返回值。</p>
 * @method AIOptimizerStatus getAIOptimizerStatus() 获取<p>AI优化器状态</p>
 * @method void setAIOptimizerStatus(AIOptimizerStatus $AIOptimizerStatus) 设置<p>AI优化器状态</p>
 */
class ClusterInstanceDetail extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>引擎类型</p>
     */
    public $InstanceType;

    /**
     * @var string <p>实例状态</p>
     */
    public $InstanceStatus;

    /**
     * @var string <p>实例状态描述</p>
     */
    public $InstanceStatusDesc;

    /**
     * @var integer <p>cpu核数</p>
     */
    public $InstanceCpu;

    /**
     * @var integer <p>内存</p>
     */
    public $InstanceMemory;

    /**
     * @var integer <p>硬盘</p>
     */
    public $InstanceStorage;

    /**
     * @var string <p>实例角色</p>
     */
    public $InstanceRole;

    /**
     * @var integer <p>执行开始时间(距离0点的秒数)</p>
     */
    public $MaintainStartTime;

    /**
     * @var integer <p>持续的时间(单位：秒)</p>
     */
    public $MaintainDuration;

    /**
     * @var array <p>可以执行的时间，枚举值：[&quot;Mon&quot;,&quot;Tue&quot;,&quot;Wed&quot;,&quot;Thu&quot;,&quot;Fri&quot;, &quot;Sat&quot;, &quot;Sun&quot;]</p>
     */
    public $MaintainWeekDays;

    /**
     * @var string <p>serverless实例子状态</p>
     */
    public $ServerlessStatus;

    /**
     * @var array <p>实例任务信息</p>
     */
    public $InstanceTasks;

    /**
     * @var string <p>实例机器类型</p><ol><li>common，通用型。</li><li>exclusive，独享型。</li></ol>
     */
    public $InstanceDeviceType;

    /**
     * @var string <p>实例存储类型<br>说明：仅当要查询的资源为 LibraDB 时，此参数才会返回值。</p>
     */
    public $InstanceStorageType;

    /**
     * @var string <p>数据库类型</p>
     */
    public $DbMode;

    /**
     * @var array <p>节点列表<br>说明：仅当要查询的资源为 LibraDB 时，此参数才会返回值。</p>
     */
    public $NodeList;

    /**
     * @var AIOptimizerStatus <p>AI优化器状态</p>
     */
    public $AIOptimizerStatus;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param string $InstanceType <p>引擎类型</p>
     * @param string $InstanceStatus <p>实例状态</p>
     * @param string $InstanceStatusDesc <p>实例状态描述</p>
     * @param integer $InstanceCpu <p>cpu核数</p>
     * @param integer $InstanceMemory <p>内存</p>
     * @param integer $InstanceStorage <p>硬盘</p>
     * @param string $InstanceRole <p>实例角色</p>
     * @param integer $MaintainStartTime <p>执行开始时间(距离0点的秒数)</p>
     * @param integer $MaintainDuration <p>持续的时间(单位：秒)</p>
     * @param array $MaintainWeekDays <p>可以执行的时间，枚举值：[&quot;Mon&quot;,&quot;Tue&quot;,&quot;Wed&quot;,&quot;Thu&quot;,&quot;Fri&quot;, &quot;Sat&quot;, &quot;Sun&quot;]</p>
     * @param string $ServerlessStatus <p>serverless实例子状态</p>
     * @param array $InstanceTasks <p>实例任务信息</p>
     * @param string $InstanceDeviceType <p>实例机器类型</p><ol><li>common，通用型。</li><li>exclusive，独享型。</li></ol>
     * @param string $InstanceStorageType <p>实例存储类型<br>说明：仅当要查询的资源为 LibraDB 时，此参数才会返回值。</p>
     * @param string $DbMode <p>数据库类型</p>
     * @param array $NodeList <p>节点列表<br>说明：仅当要查询的资源为 LibraDB 时，此参数才会返回值。</p>
     * @param AIOptimizerStatus $AIOptimizerStatus <p>AI优化器状态</p>
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("InstanceStatusDesc",$param) and $param["InstanceStatusDesc"] !== null) {
            $this->InstanceStatusDesc = $param["InstanceStatusDesc"];
        }

        if (array_key_exists("InstanceCpu",$param) and $param["InstanceCpu"] !== null) {
            $this->InstanceCpu = $param["InstanceCpu"];
        }

        if (array_key_exists("InstanceMemory",$param) and $param["InstanceMemory"] !== null) {
            $this->InstanceMemory = $param["InstanceMemory"];
        }

        if (array_key_exists("InstanceStorage",$param) and $param["InstanceStorage"] !== null) {
            $this->InstanceStorage = $param["InstanceStorage"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("MaintainStartTime",$param) and $param["MaintainStartTime"] !== null) {
            $this->MaintainStartTime = $param["MaintainStartTime"];
        }

        if (array_key_exists("MaintainDuration",$param) and $param["MaintainDuration"] !== null) {
            $this->MaintainDuration = $param["MaintainDuration"];
        }

        if (array_key_exists("MaintainWeekDays",$param) and $param["MaintainWeekDays"] !== null) {
            $this->MaintainWeekDays = $param["MaintainWeekDays"];
        }

        if (array_key_exists("ServerlessStatus",$param) and $param["ServerlessStatus"] !== null) {
            $this->ServerlessStatus = $param["ServerlessStatus"];
        }

        if (array_key_exists("InstanceTasks",$param) and $param["InstanceTasks"] !== null) {
            $this->InstanceTasks = [];
            foreach ($param["InstanceTasks"] as $key => $value){
                $obj = new ObjectTask();
                $obj->deserialize($value);
                array_push($this->InstanceTasks, $obj);
            }
        }

        if (array_key_exists("InstanceDeviceType",$param) and $param["InstanceDeviceType"] !== null) {
            $this->InstanceDeviceType = $param["InstanceDeviceType"];
        }

        if (array_key_exists("InstanceStorageType",$param) and $param["InstanceStorageType"] !== null) {
            $this->InstanceStorageType = $param["InstanceStorageType"];
        }

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("NodeList",$param) and $param["NodeList"] !== null) {
            $this->NodeList = $param["NodeList"];
        }

        if (array_key_exists("AIOptimizerStatus",$param) and $param["AIOptimizerStatus"] !== null) {
            $this->AIOptimizerStatus = new AIOptimizerStatus();
            $this->AIOptimizerStatus->deserialize($param["AIOptimizerStatus"]);
        }
    }
}
