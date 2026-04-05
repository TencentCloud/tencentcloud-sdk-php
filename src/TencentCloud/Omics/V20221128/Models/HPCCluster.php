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
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getScheduler() 获取调度器
 * @method void setScheduler(string $Scheduler) 设置调度器
 * @method string getVPCId() 获取VPC ID
 * @method void setVPCId(string $VPCId) 设置VPC ID
 * @method integer getNodeCount() 获取节点数量
 * @method void setNodeCount(integer $NodeCount) 设置节点数量
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getType() 获取集群类型
 * @method void setType(string $Type) 设置集群类型
 * @method string getOsName() 获取系统名称
 * @method void setOsName(string $OsName) 设置系统名称
 * @method string getSchedulerVersion() 获取调度器版本
 * @method void setSchedulerVersion(string $SchedulerVersion) 设置调度器版本
 * @method string getVPCCIDRBlock() 获取集群VPC CIDR
 * @method void setVPCCIDRBlock(string $VPCCIDRBlock) 设置集群VPC CIDR
 * @method string getConfirmDeadline() 获取集群确认交付截止日期
 * @method void setConfirmDeadline(string $ConfirmDeadline) 设置集群确认交付截止日期
 */
class HPCCluster extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var string 调度器
     */
    public $Scheduler;

    /**
     * @var string VPC ID
     */
    public $VPCId;

    /**
     * @var integer 节点数量
     */
    public $NodeCount;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 集群类型
     */
    public $Type;

    /**
     * @var string 系统名称
     */
    public $OsName;

    /**
     * @var string 调度器版本
     */
    public $SchedulerVersion;

    /**
     * @var string 集群VPC CIDR
     */
    public $VPCCIDRBlock;

    /**
     * @var string 集群确认交付截止日期
     */
    public $ConfirmDeadline;

    /**
     * @param string $ClusterId 集群ID
     * @param string $Name 名称
     * @param string $Description 描述
     * @param string $Status 状态
     * @param string $Scheduler 调度器
     * @param string $VPCId VPC ID
     * @param integer $NodeCount 节点数量
     * @param array $Tags 标签
     * @param string $CreateTime 创建时间
     * @param string $Type 集群类型
     * @param string $OsName 系统名称
     * @param string $SchedulerVersion 调度器版本
     * @param string $VPCCIDRBlock 集群VPC CIDR
     * @param string $ConfirmDeadline 集群确认交付截止日期
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
    }
}
