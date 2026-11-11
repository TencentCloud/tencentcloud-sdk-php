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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HPC集群
 *
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method string getName() 获取<p>名称</p>
 * @method void setName(string $Name) 设置<p>名称</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getStatus() 获取<p>状态</p>
 * @method void setStatus(string $Status) 设置<p>状态</p>
 * @method string getScheduler() 获取<p>调度器</p>
 * @method void setScheduler(string $Scheduler) 设置<p>调度器</p>
 * @method string getVPCId() 获取<p>VPC ID</p>
 * @method void setVPCId(string $VPCId) 设置<p>VPC ID</p>
 * @method integer getNodeCount() 获取<p>节点数量</p>
 * @method void setNodeCount(integer $NodeCount) 设置<p>节点数量</p>
 * @method array getTags() 获取<p>标签</p>
 * @method void setTags(array $Tags) 设置<p>标签</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getType() 获取<p>集群类型</p>
 * @method void setType(string $Type) 设置<p>集群类型</p>
 * @method string getOsName() 获取<p>系统名称</p>
 * @method void setOsName(string $OsName) 设置<p>系统名称</p>
 * @method string getSchedulerVersion() 获取<p>调度器版本</p>
 * @method void setSchedulerVersion(string $SchedulerVersion) 设置<p>调度器版本</p>
 * @method string getVPCCIDRBlock() 获取<p>集群VPC CIDR</p>
 * @method void setVPCCIDRBlock(string $VPCCIDRBlock) 设置<p>集群VPC CIDR</p>
 * @method string getConfirmDeadline() 获取<p>集群确认交付截止日期</p>
 * @method void setConfirmDeadline(string $ConfirmDeadline) 设置<p>集群确认交付截止日期</p>
 * @method string getStatusReason() 获取<p>状态原因</p>
 * @method void setStatusReason(string $StatusReason) 设置<p>状态原因</p>
 * @method string getIsolateTime() 获取<p>隔离时间</p>
 * @method void setIsolateTime(string $IsolateTime) 设置<p>隔离时间</p>
 * @method string getMessage() 获取<p>消息</p>
 * @method void setMessage(string $Message) 设置<p>消息</p>
 */
class HPCCluster extends AbstractModel
{
    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>名称</p>
     */
    public $Name;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>状态</p>
     */
    public $Status;

    /**
     * @var string <p>调度器</p>
     */
    public $Scheduler;

    /**
     * @var string <p>VPC ID</p>
     */
    public $VPCId;

    /**
     * @var integer <p>节点数量</p>
     */
    public $NodeCount;

    /**
     * @var array <p>标签</p>
     */
    public $Tags;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>集群类型</p>
     */
    public $Type;

    /**
     * @var string <p>系统名称</p>
     */
    public $OsName;

    /**
     * @var string <p>调度器版本</p>
     */
    public $SchedulerVersion;

    /**
     * @var string <p>集群VPC CIDR</p>
     */
    public $VPCCIDRBlock;

    /**
     * @var string <p>集群确认交付截止日期</p>
     */
    public $ConfirmDeadline;

    /**
     * @var string <p>状态原因</p>
     */
    public $StatusReason;

    /**
     * @var string <p>隔离时间</p>
     */
    public $IsolateTime;

    /**
     * @var string <p>消息</p>
     */
    public $Message;

    /**
     * @param string $ClusterId <p>集群ID</p>
     * @param string $Name <p>名称</p>
     * @param string $Description <p>描述</p>
     * @param string $Status <p>状态</p>
     * @param string $Scheduler <p>调度器</p>
     * @param string $VPCId <p>VPC ID</p>
     * @param integer $NodeCount <p>节点数量</p>
     * @param array $Tags <p>标签</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $Type <p>集群类型</p>
     * @param string $OsName <p>系统名称</p>
     * @param string $SchedulerVersion <p>调度器版本</p>
     * @param string $VPCCIDRBlock <p>集群VPC CIDR</p>
     * @param string $ConfirmDeadline <p>集群确认交付截止日期</p>
     * @param string $StatusReason <p>状态原因</p>
     * @param string $IsolateTime <p>隔离时间</p>
     * @param string $Message <p>消息</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("VPCId",$param) and $param["VPCId"] !== null) {
            $this->VPCId = $param["VPCId"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("SchedulerVersion",$param) and $param["SchedulerVersion"] !== null) {
            $this->SchedulerVersion = $param["SchedulerVersion"];
        }

        if (array_key_exists("VPCCIDRBlock",$param) and $param["VPCCIDRBlock"] !== null) {
            $this->VPCCIDRBlock = $param["VPCCIDRBlock"];
        }

        if (array_key_exists("ConfirmDeadline",$param) and $param["ConfirmDeadline"] !== null) {
            $this->ConfirmDeadline = $param["ConfirmDeadline"];
        }

        if (array_key_exists("StatusReason",$param) and $param["StatusReason"] !== null) {
            $this->StatusReason = $param["StatusReason"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
