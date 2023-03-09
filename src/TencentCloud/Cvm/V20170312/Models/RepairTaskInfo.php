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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述维修任务的相关信息
 *
 * @method string getTaskId() 获取维修任务ID
 * @method void setTaskId(string $TaskId) 设置维修任务ID
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getAlias() 获取实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlias(string $Alias) 设置实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskTypeId() 获取任务类型ID，与任务类型中文名的对应关系如下：

- `101`：实例运行隐患
- `102`：实例运行异常
- `103`：实例硬盘异常
- `104`：实例网络连接异常
- `105`：实例运行预警
- `106`：实例硬盘预警
- `107`：实例维护升级

各任务类型的具体含义，可参考 [维修任务分类](https://cloud.tencent.com/document/product/213/67789#.E7.BB.B4.E4.BF.AE.E4.BB.BB.E5.8A.A1.E5.88.86.E7.B1.BB)。
 * @method void setTaskTypeId(integer $TaskTypeId) 设置任务类型ID，与任务类型中文名的对应关系如下：

- `101`：实例运行隐患
- `102`：实例运行异常
- `103`：实例硬盘异常
- `104`：实例网络连接异常
- `105`：实例运行预警
- `106`：实例硬盘预警
- `107`：实例维护升级

各任务类型的具体含义，可参考 [维修任务分类](https://cloud.tencent.com/document/product/213/67789#.E7.BB.B4.E4.BF.AE.E4.BB.BB.E5.8A.A1.E5.88.86.E7.B1.BB)。
 * @method string getTaskTypeName() 获取任务类型中文名
 * @method void setTaskTypeName(string $TaskTypeName) 设置任务类型中文名
 * @method integer getTaskStatus() 获取任务状态ID，与任务状态中文名的对应关系如下：

- `1`：待授权
- `2`：处理中
- `3`：已结束
- `4`：已预约
- `5`：已取消
- `6`：已避免

各任务状态的具体含义，可参考 [任务状态](https://cloud.tencent.com/document/product/213/67789#.E4.BB.BB.E5.8A.A1.E7.8A.B6.E6.80.81)。
 * @method void setTaskStatus(integer $TaskStatus) 设置任务状态ID，与任务状态中文名的对应关系如下：

- `1`：待授权
- `2`：处理中
- `3`：已结束
- `4`：已预约
- `5`：已取消
- `6`：已避免

各任务状态的具体含义，可参考 [任务状态](https://cloud.tencent.com/document/product/213/67789#.E4.BB.BB.E5.8A.A1.E7.8A.B6.E6.80.81)。
 * @method integer getDeviceStatus() 获取设备状态ID，与设备状态中文名的对应关系如下：

- `1`：故障中
- `2`：处理中
- `3`：正常
- `4`：已预约
- `5`：已取消
- `6`：已避免
 * @method void setDeviceStatus(integer $DeviceStatus) 设置设备状态ID，与设备状态中文名的对应关系如下：

- `1`：故障中
- `2`：处理中
- `3`：正常
- `4`：已预约
- `5`：已取消
- `6`：已避免
 * @method integer getOperateStatus() 获取操作状态ID，与操作状态中文名的对应关系如下：

- `1`：未授权
- `2`：已授权
- `3`：已处理
- `4`：已预约
- `5`：已取消
- `6`：已避免
 * @method void setOperateStatus(integer $OperateStatus) 设置操作状态ID，与操作状态中文名的对应关系如下：

- `1`：未授权
- `2`：已授权
- `3`：已处理
- `4`：已预约
- `5`：已取消
- `6`：已避免
 * @method string getCreateTime() 获取任务创建时间
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间
 * @method string getAuthTime() 获取任务授权时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthTime(string $AuthTime) 设置任务授权时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskDetail() 获取任务详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskDetail(string $TaskDetail) 设置任务详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取所在私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置所在私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcName() 获取所在私有网络名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcName(string $VpcName) 设置所在私有网络名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取所在子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置所在子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetName() 获取所在子网名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetName(string $SubnetName) 设置所在子网名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWanIp() 获取实例公网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWanIp(string $WanIp) 设置实例公网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLanIp() 获取实例内网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLanIp(string $LanIp) 设置实例内网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProduct() 获取产品类型，支持取值：

- `CVM`：云服务器
- `CDH`：专用宿主机
- `CPM2.0`：裸金属云服务器
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProduct(string $Product) 设置产品类型，支持取值：

- `CVM`：云服务器
- `CDH`：专用宿主机
- `CPM2.0`：裸金属云服务器
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskSubType() 获取任务子类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskSubType(string $TaskSubType) 设置任务子类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAuthType() 获取任务授权类型
 * @method void setAuthType(integer $AuthType) 设置任务授权类型
 * @method string getAuthSource() 获取授权渠道，支持取值：

- `Waiting_auth`：待授权
- `Customer_auth`：客户操作授权
- `System_mandatory_auth`：系统默认授权
- `Pre_policy_auth`：预置策略授权
 * @method void setAuthSource(string $AuthSource) 设置授权渠道，支持取值：

- `Waiting_auth`：待授权
- `Customer_auth`：客户操作授权
- `System_mandatory_auth`：系统默认授权
- `Pre_policy_auth`：预置策略授权
 */
class RepairTaskInfo extends AbstractModel
{
    /**
     * @var string 维修任务ID
     */
    public $TaskId;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Alias;

    /**
     * @var integer 任务类型ID，与任务类型中文名的对应关系如下：

- `101`：实例运行隐患
- `102`：实例运行异常
- `103`：实例硬盘异常
- `104`：实例网络连接异常
- `105`：实例运行预警
- `106`：实例硬盘预警
- `107`：实例维护升级

各任务类型的具体含义，可参考 [维修任务分类](https://cloud.tencent.com/document/product/213/67789#.E7.BB.B4.E4.BF.AE.E4.BB.BB.E5.8A.A1.E5.88.86.E7.B1.BB)。
     */
    public $TaskTypeId;

    /**
     * @var string 任务类型中文名
     */
    public $TaskTypeName;

    /**
     * @var integer 任务状态ID，与任务状态中文名的对应关系如下：

- `1`：待授权
- `2`：处理中
- `3`：已结束
- `4`：已预约
- `5`：已取消
- `6`：已避免

各任务状态的具体含义，可参考 [任务状态](https://cloud.tencent.com/document/product/213/67789#.E4.BB.BB.E5.8A.A1.E7.8A.B6.E6.80.81)。
     */
    public $TaskStatus;

    /**
     * @var integer 设备状态ID，与设备状态中文名的对应关系如下：

- `1`：故障中
- `2`：处理中
- `3`：正常
- `4`：已预约
- `5`：已取消
- `6`：已避免
     */
    public $DeviceStatus;

    /**
     * @var integer 操作状态ID，与操作状态中文名的对应关系如下：

- `1`：未授权
- `2`：已授权
- `3`：已处理
- `4`：已预约
- `5`：已取消
- `6`：已避免
     */
    public $OperateStatus;

    /**
     * @var string 任务创建时间
     */
    public $CreateTime;

    /**
     * @var string 任务授权时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthTime;

    /**
     * @var string 任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 任务详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskDetail;

    /**
     * @var string 可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 所在私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 所在私有网络名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcName;

    /**
     * @var string 所在子网ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string 所在子网名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetName;

    /**
     * @var string 实例公网IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WanIp;

    /**
     * @var string 实例内网IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LanIp;

    /**
     * @var string 产品类型，支持取值：

- `CVM`：云服务器
- `CDH`：专用宿主机
- `CPM2.0`：裸金属云服务器
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Product;

    /**
     * @var string 任务子类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskSubType;

    /**
     * @var integer 任务授权类型
     */
    public $AuthType;

    /**
     * @var string 授权渠道，支持取值：

- `Waiting_auth`：待授权
- `Customer_auth`：客户操作授权
- `System_mandatory_auth`：系统默认授权
- `Pre_policy_auth`：预置策略授权
     */
    public $AuthSource;

    /**
     * @param string $TaskId 维修任务ID
     * @param string $InstanceId 实例ID
     * @param string $Alias 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskTypeId 任务类型ID，与任务类型中文名的对应关系如下：

- `101`：实例运行隐患
- `102`：实例运行异常
- `103`：实例硬盘异常
- `104`：实例网络连接异常
- `105`：实例运行预警
- `106`：实例硬盘预警
- `107`：实例维护升级

各任务类型的具体含义，可参考 [维修任务分类](https://cloud.tencent.com/document/product/213/67789#.E7.BB.B4.E4.BF.AE.E4.BB.BB.E5.8A.A1.E5.88.86.E7.B1.BB)。
     * @param string $TaskTypeName 任务类型中文名
     * @param integer $TaskStatus 任务状态ID，与任务状态中文名的对应关系如下：

- `1`：待授权
- `2`：处理中
- `3`：已结束
- `4`：已预约
- `5`：已取消
- `6`：已避免

各任务状态的具体含义，可参考 [任务状态](https://cloud.tencent.com/document/product/213/67789#.E4.BB.BB.E5.8A.A1.E7.8A.B6.E6.80.81)。
     * @param integer $DeviceStatus 设备状态ID，与设备状态中文名的对应关系如下：

- `1`：故障中
- `2`：处理中
- `3`：正常
- `4`：已预约
- `5`：已取消
- `6`：已避免
     * @param integer $OperateStatus 操作状态ID，与操作状态中文名的对应关系如下：

- `1`：未授权
- `2`：已授权
- `3`：已处理
- `4`：已预约
- `5`：已取消
- `6`：已避免
     * @param string $CreateTime 任务创建时间
     * @param string $AuthTime 任务授权时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskDetail 任务详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 所在私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcName 所在私有网络名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 所在子网ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetName 所在子网名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WanIp 实例公网IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LanIp 实例内网IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Product 产品类型，支持取值：

- `CVM`：云服务器
- `CDH`：专用宿主机
- `CPM2.0`：裸金属云服务器
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskSubType 任务子类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AuthType 任务授权类型
     * @param string $AuthSource 授权渠道，支持取值：

- `Waiting_auth`：待授权
- `Customer_auth`：客户操作授权
- `System_mandatory_auth`：系统默认授权
- `Pre_policy_auth`：预置策略授权
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("TaskTypeName",$param) and $param["TaskTypeName"] !== null) {
            $this->TaskTypeName = $param["TaskTypeName"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("DeviceStatus",$param) and $param["DeviceStatus"] !== null) {
            $this->DeviceStatus = $param["DeviceStatus"];
        }

        if (array_key_exists("OperateStatus",$param) and $param["OperateStatus"] !== null) {
            $this->OperateStatus = $param["OperateStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AuthTime",$param) and $param["AuthTime"] !== null) {
            $this->AuthTime = $param["AuthTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskDetail",$param) and $param["TaskDetail"] !== null) {
            $this->TaskDetail = $param["TaskDetail"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
        }

        if (array_key_exists("LanIp",$param) and $param["LanIp"] !== null) {
            $this->LanIp = $param["LanIp"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("TaskSubType",$param) and $param["TaskSubType"] !== null) {
            $this->TaskSubType = $param["TaskSubType"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("AuthSource",$param) and $param["AuthSource"] !== null) {
            $this->AuthSource = $param["AuthSource"];
        }
    }
}
