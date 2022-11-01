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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 在线服务一个服务组的信息
 *
 * @method string getServiceGroupId() 获取服务组id
 * @method void setServiceGroupId(string $ServiceGroupId) 设置服务组id
 * @method string getServiceGroupName() 获取服务组名
 * @method void setServiceGroupName(string $ServiceGroupName) 设置服务组名
 * @method string getCreatedBy() 获取创建者
 * @method void setCreatedBy(string $CreatedBy) 设置创建者
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getUin() 获取主账号
 * @method void setUin(string $Uin) 设置主账号
 * @method integer getServiceCount() 获取服务组下服务总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceCount(integer $ServiceCount) 设置服务组下服务总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunningServiceCount() 获取服务组下在运行的服务数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningServiceCount(integer $RunningServiceCount) 设置服务组下在运行的服务数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getServices() 获取服务描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServices(array $Services) 设置服务描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取服务组状态，与服务一致
 CREATING 创建中
     CREATE_FAILED 创建失败
     Normal	正常运行中
     Stopped  已停止
     Stopping 停止中
     Abnormal 异常
     Pending 启动中
     Waiting 就绪中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置服务组状态，与服务一致
 CREATING 创建中
     CREATE_FAILED 创建失败
     Normal	正常运行中
     Stopped  已停止
     Stopping 停止中
     Abnormal 异常
     Pending 启动中
     Waiting 就绪中
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取服务组标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置服务组标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestVersion() 获取服务组下最高版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestVersion(string $LatestVersion) 设置服务组下最高版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusinessStatus() 获取服务的业务状态
CREATING 创建中
     CREATE_FAILED 创建失败
     ARREARS_STOP 因欠费被强制停止
     BILLING 计费中
     WHITELIST_USING 白名单试用中
     WHITELIST_STOP 白名单额度不足
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessStatus(string $BusinessStatus) 设置服务的业务状态
CREATING 创建中
     CREATE_FAILED 创建失败
     ARREARS_STOP 因欠费被强制停止
     BILLING 计费中
     WHITELIST_USING 白名单试用中
     WHITELIST_STOP 白名单额度不足
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBillingInfo() 获取服务的计费信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillingInfo(string $BillingInfo) 设置服务的计费信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateSource() 获取服务的创建来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateSource(string $CreateSource) 设置服务的创建来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWeightUpdateStatus() 获取服务组的权重更新状态 
UPDATING 更新中
     UPDATED 更新成功
     UPDATE_FAILED 更新失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeightUpdateStatus(string $WeightUpdateStatus) 设置服务组的权重更新状态 
UPDATING 更新中
     UPDATED 更新成功
     UPDATE_FAILED 更新失败
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServiceGroup extends AbstractModel
{
    /**
     * @var string 服务组id
     */
    public $ServiceGroupId;

    /**
     * @var string 服务组名
     */
    public $ServiceGroupName;

    /**
     * @var string 创建者
     */
    public $CreatedBy;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 主账号
     */
    public $Uin;

    /**
     * @var integer 服务组下服务总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceCount;

    /**
     * @var integer 服务组下在运行的服务数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningServiceCount;

    /**
     * @var array 服务描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Services;

    /**
     * @var string 服务组状态，与服务一致
 CREATING 创建中
     CREATE_FAILED 创建失败
     Normal	正常运行中
     Stopped  已停止
     Stopping 停止中
     Abnormal 异常
     Pending 启动中
     Waiting 就绪中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var array 服务组标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 服务组下最高版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestVersion;

    /**
     * @var string 服务的业务状态
CREATING 创建中
     CREATE_FAILED 创建失败
     ARREARS_STOP 因欠费被强制停止
     BILLING 计费中
     WHITELIST_USING 白名单试用中
     WHITELIST_STOP 白名单额度不足
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessStatus;

    /**
     * @var string 服务的计费信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillingInfo;

    /**
     * @var string 服务的创建来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateSource;

    /**
     * @var string 服务组的权重更新状态 
UPDATING 更新中
     UPDATED 更新成功
     UPDATE_FAILED 更新失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WeightUpdateStatus;

    /**
     * @param string $ServiceGroupId 服务组id
     * @param string $ServiceGroupName 服务组名
     * @param string $CreatedBy 创建者
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param string $Uin 主账号
     * @param integer $ServiceCount 服务组下服务总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunningServiceCount 服务组下在运行的服务数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Services 服务描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 服务组状态，与服务一致
 CREATING 创建中
     CREATE_FAILED 创建失败
     Normal	正常运行中
     Stopped  已停止
     Stopping 停止中
     Abnormal 异常
     Pending 启动中
     Waiting 就绪中
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 服务组标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestVersion 服务组下最高版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BusinessStatus 服务的业务状态
CREATING 创建中
     CREATE_FAILED 创建失败
     ARREARS_STOP 因欠费被强制停止
     BILLING 计费中
     WHITELIST_USING 白名单试用中
     WHITELIST_STOP 白名单额度不足
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BillingInfo 服务的计费信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateSource 服务的创建来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WeightUpdateStatus 服务组的权重更新状态 
UPDATING 更新中
     UPDATED 更新成功
     UPDATE_FAILED 更新失败
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ServiceGroupId",$param) and $param["ServiceGroupId"] !== null) {
            $this->ServiceGroupId = $param["ServiceGroupId"];
        }

        if (array_key_exists("ServiceGroupName",$param) and $param["ServiceGroupName"] !== null) {
            $this->ServiceGroupName = $param["ServiceGroupName"];
        }

        if (array_key_exists("CreatedBy",$param) and $param["CreatedBy"] !== null) {
            $this->CreatedBy = $param["CreatedBy"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("ServiceCount",$param) and $param["ServiceCount"] !== null) {
            $this->ServiceCount = $param["ServiceCount"];
        }

        if (array_key_exists("RunningServiceCount",$param) and $param["RunningServiceCount"] !== null) {
            $this->RunningServiceCount = $param["RunningServiceCount"];
        }

        if (array_key_exists("Services",$param) and $param["Services"] !== null) {
            $this->Services = [];
            foreach ($param["Services"] as $key => $value){
                $obj = new Service();
                $obj->deserialize($value);
                array_push($this->Services, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("LatestVersion",$param) and $param["LatestVersion"] !== null) {
            $this->LatestVersion = $param["LatestVersion"];
        }

        if (array_key_exists("BusinessStatus",$param) and $param["BusinessStatus"] !== null) {
            $this->BusinessStatus = $param["BusinessStatus"];
        }

        if (array_key_exists("BillingInfo",$param) and $param["BillingInfo"] !== null) {
            $this->BillingInfo = $param["BillingInfo"];
        }

        if (array_key_exists("CreateSource",$param) and $param["CreateSource"] !== null) {
            $this->CreateSource = $param["CreateSource"];
        }

        if (array_key_exists("WeightUpdateStatus",$param) and $param["WeightUpdateStatus"] !== null) {
            $this->WeightUpdateStatus = $param["WeightUpdateStatus"];
        }
    }
}
