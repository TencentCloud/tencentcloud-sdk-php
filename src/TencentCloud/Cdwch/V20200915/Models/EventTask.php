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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 事件任务
 *
 * @method string getInstanceId() 获取集群id
 * @method void setInstanceId(string $InstanceId) 设置集群id
 * @method integer getEventTaskId() 获取事件任务的id	
 * @method void setEventTaskId(integer $EventTaskId) 设置事件任务的id	
 * @method string getHandleUser() 获取处理人uin
 * @method void setHandleUser(string $HandleUser) 设置处理人uin
 * @method string getEventCode() 获取事件名称	
 * @method void setEventCode(string $EventCode) 设置事件名称	
 * @method string getRepairId() 获取CVM相关事件的维修id
 * @method void setRepairId(string $RepairId) 设置CVM相关事件的维修id
 * @method string getEventNameDescribe() 获取事件名称描述	
 * @method void setEventNameDescribe(string $EventNameDescribe) 设置事件名称描述	
 * @method integer getEventPriority() 获取事件等级（0-低；1-中；2-高；3-严重）	
 * @method void setEventPriority(integer $EventPriority) 设置事件等级（0-低；1-中；2-高；3-严重）	
 * @method string getEventDetail() 获取事件详情	
 * @method void setEventDetail(string $EventDetail) 设置事件详情	
 * @method string getIP() 获取影响集群节点	
 * @method void setIP(string $IP) 设置影响集群节点	
 * @method string getCreateTime() 获取事件触发时间	
 * @method void setCreateTime(string $CreateTime) 设置事件触发时间	
 * @method integer getStatus() 获取事件状态(1-待处理;2-已预约;3-处理中;4-已完成;5-处理中;6-自动处理中;-1-已忽略;-2-已删除)	
 * @method void setStatus(integer $Status) 设置事件状态(1-待处理;2-已预约;3-处理中;4-已完成;5-处理中;6-自动处理中;-1-已忽略;-2-已删除)	
 * @method integer getNeedAuthorization() 获取是否需要授权维修：1-不需要，2-需要
 * @method void setNeedAuthorization(integer $NeedAuthorization) 设置是否需要授权维修：1-不需要，2-需要
 * @method array getOperationType() 获取该事件涉及到的操作类型（OnlineMigrationForInstance-实例在线迁移,OnlineMaintenanceForInstance-实例在线维修,等）	
 * @method void setOperationType(array $OperationType) 设置该事件涉及到的操作类型（OnlineMigrationForInstance-实例在线迁移,OnlineMaintenanceForInstance-实例在线维修,等）	
 * @method string getFinishTime() 获取完成时间
 * @method void setFinishTime(string $FinishTime) 设置完成时间
 * @method string getOperationGuide() 获取操作指引
 * @method void setOperationGuide(string $OperationGuide) 设置操作指引
 * @method string getResourceId() 获取资源id
 * @method void setResourceId(string $ResourceId) 设置资源id
 */
class EventTask extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $InstanceId;

    /**
     * @var integer 事件任务的id	
     */
    public $EventTaskId;

    /**
     * @var string 处理人uin
     */
    public $HandleUser;

    /**
     * @var string 事件名称	
     */
    public $EventCode;

    /**
     * @var string CVM相关事件的维修id
     */
    public $RepairId;

    /**
     * @var string 事件名称描述	
     */
    public $EventNameDescribe;

    /**
     * @var integer 事件等级（0-低；1-中；2-高；3-严重）	
     */
    public $EventPriority;

    /**
     * @var string 事件详情	
     */
    public $EventDetail;

    /**
     * @var string 影响集群节点	
     */
    public $IP;

    /**
     * @var string 事件触发时间	
     */
    public $CreateTime;

    /**
     * @var integer 事件状态(1-待处理;2-已预约;3-处理中;4-已完成;5-处理中;6-自动处理中;-1-已忽略;-2-已删除)	
     */
    public $Status;

    /**
     * @var integer 是否需要授权维修：1-不需要，2-需要
     */
    public $NeedAuthorization;

    /**
     * @var array 该事件涉及到的操作类型（OnlineMigrationForInstance-实例在线迁移,OnlineMaintenanceForInstance-实例在线维修,等）	
     */
    public $OperationType;

    /**
     * @var string 完成时间
     */
    public $FinishTime;

    /**
     * @var string 操作指引
     */
    public $OperationGuide;

    /**
     * @var string 资源id
     */
    public $ResourceId;

    /**
     * @param string $InstanceId 集群id
     * @param integer $EventTaskId 事件任务的id	
     * @param string $HandleUser 处理人uin
     * @param string $EventCode 事件名称	
     * @param string $RepairId CVM相关事件的维修id
     * @param string $EventNameDescribe 事件名称描述	
     * @param integer $EventPriority 事件等级（0-低；1-中；2-高；3-严重）	
     * @param string $EventDetail 事件详情	
     * @param string $IP 影响集群节点	
     * @param string $CreateTime 事件触发时间	
     * @param integer $Status 事件状态(1-待处理;2-已预约;3-处理中;4-已完成;5-处理中;6-自动处理中;-1-已忽略;-2-已删除)	
     * @param integer $NeedAuthorization 是否需要授权维修：1-不需要，2-需要
     * @param array $OperationType 该事件涉及到的操作类型（OnlineMigrationForInstance-实例在线迁移,OnlineMaintenanceForInstance-实例在线维修,等）	
     * @param string $FinishTime 完成时间
     * @param string $OperationGuide 操作指引
     * @param string $ResourceId 资源id
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

        if (array_key_exists("EventTaskId",$param) and $param["EventTaskId"] !== null) {
            $this->EventTaskId = $param["EventTaskId"];
        }

        if (array_key_exists("HandleUser",$param) and $param["HandleUser"] !== null) {
            $this->HandleUser = $param["HandleUser"];
        }

        if (array_key_exists("EventCode",$param) and $param["EventCode"] !== null) {
            $this->EventCode = $param["EventCode"];
        }

        if (array_key_exists("RepairId",$param) and $param["RepairId"] !== null) {
            $this->RepairId = $param["RepairId"];
        }

        if (array_key_exists("EventNameDescribe",$param) and $param["EventNameDescribe"] !== null) {
            $this->EventNameDescribe = $param["EventNameDescribe"];
        }

        if (array_key_exists("EventPriority",$param) and $param["EventPriority"] !== null) {
            $this->EventPriority = $param["EventPriority"];
        }

        if (array_key_exists("EventDetail",$param) and $param["EventDetail"] !== null) {
            $this->EventDetail = $param["EventDetail"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NeedAuthorization",$param) and $param["NeedAuthorization"] !== null) {
            $this->NeedAuthorization = $param["NeedAuthorization"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("OperationGuide",$param) and $param["OperationGuide"] !== null) {
            $this->OperationGuide = $param["OperationGuide"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
