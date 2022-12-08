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
 * 描述在线服务
 *
 * @method string getServiceGroupId() 获取服务组id
 * @method void setServiceGroupId(string $ServiceGroupId) 设置服务组id
 * @method string getServiceId() 获取服务id
 * @method void setServiceId(string $ServiceId) 设置服务id
 * @method string getServiceGroupName() 获取服务组名
 * @method void setServiceGroupName(string $ServiceGroupName) 设置服务组名
 * @method string getServiceDescription() 获取服务描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceDescription(string $ServiceDescription) 设置服务描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespace() 获取命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeType() 获取付费类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeType(string $ChargeType) 设置付费类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupId() 获取后付费资源组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupId(string $ResourceGroupId) 设置后付费资源组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedBy() 获取创建者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedBy(string $CreatedBy) 设置创建者
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取主账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置主账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubUin() 获取子账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubUin(string $SubUin) 设置子账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取app_id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置app_id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestVersion() 获取服务组下服务的最高版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestVersion(string $LatestVersion) 设置服务组下服务的最高版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method ServiceInfo getServiceInfo() 获取服务的详细信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceInfo(ServiceInfo $ServiceInfo) 设置服务的详细信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusinessStatus() 获取服务的业务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessStatus(string $BusinessStatus) 设置服务的业务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateSource() 获取服务的创建来源
AUTO_ML: 来自自动学习的一键发布
DEFAULT: 其他来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateSource(string $CreateSource) 设置服务的创建来源
AUTO_ML: 来自自动学习的一键发布
DEFAULT: 其他来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBillingInfo() 获取费用信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillingInfo(string $BillingInfo) 设置费用信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取服务状态
CREATING 创建中
CREATE_FAILED 创建失败
Normal	正常运行中
Stopped  已停止
Stopping 停止中
Abnormal 异常
Pending 启动中
Waiting 就绪中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置服务状态
CREATING 创建中
CREATE_FAILED 创建失败
Normal	正常运行中
Stopped  已停止
Stopping 停止中
Abnormal 异常
Pending 启动中
Waiting 就绪中
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWeight() 获取模型权重
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(integer $Weight) 设置模型权重
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIngressName() 获取服务所在的 ingress 的 name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIngressName(string $IngressName) 设置服务所在的 ingress 的 name
注意：此字段可能返回 null，表示取不到有效值。
 * @method ServiceLimit getServiceLimit() 获取服务限速限流相关配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceLimit(ServiceLimit $ServiceLimit) 设置服务限速限流相关配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method ScheduledAction getScheduledAction() 获取定时停止的配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheduledAction(ScheduledAction $ScheduledAction) 设置定时停止的配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateFailedReason() 获取服务创建失败的原因，创建成功后该字段为默认值 CREATE_SUCCEED
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateFailedReason(string $CreateFailedReason) 设置服务创建失败的原因，创建成功后该字段为默认值 CREATE_SUCCEED
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroupName() 获取预付费服务对应的资源组名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroupName(string $ResourceGroupName) 设置预付费服务对应的资源组名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取服务的标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置服务的标签
注意：此字段可能返回 null，表示取不到有效值。
 */
class Service extends AbstractModel
{
    /**
     * @var string 服务组id
     */
    public $ServiceGroupId;

    /**
     * @var string 服务id
     */
    public $ServiceId;

    /**
     * @var string 服务组名
     */
    public $ServiceGroupName;

    /**
     * @var string 服务描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceDescription;

    /**
     * @var string 集群id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 命名空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var string 付费类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeType;

    /**
     * @var string 后付费资源组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupId;

    /**
     * @var string 创建者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedBy;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 主账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string 子账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubUin;

    /**
     * @var integer app_id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string 服务组下服务的最高版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestVersion;

    /**
     * @var ServiceInfo 服务的详细信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceInfo;

    /**
     * @var string 服务的业务状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessStatus;

    /**
     * @var string 服务的创建来源
AUTO_ML: 来自自动学习的一键发布
DEFAULT: 其他来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateSource;

    /**
     * @var string 费用信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillingInfo;

    /**
     * @var string 服务状态
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
     * @var integer 模型权重
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @var string 服务所在的 ingress 的 name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IngressName;

    /**
     * @var ServiceLimit 服务限速限流相关配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceLimit;

    /**
     * @var ScheduledAction 定时停止的配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScheduledAction;

    /**
     * @var string 服务创建失败的原因，创建成功后该字段为默认值 CREATE_SUCCEED
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateFailedReason;

    /**
     * @var string 预付费服务对应的资源组名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroupName;

    /**
     * @var array 服务的标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param string $ServiceGroupId 服务组id
     * @param string $ServiceId 服务id
     * @param string $ServiceGroupName 服务组名
     * @param string $ServiceDescription 服务描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 集群id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Namespace 命名空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeType 付费类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupId 后付费资源组id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedBy 创建者
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 主账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubUin 子账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId app_id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestVersion 服务组下服务的最高版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param ServiceInfo $ServiceInfo 服务的详细信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BusinessStatus 服务的业务状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateSource 服务的创建来源
AUTO_ML: 来自自动学习的一键发布
DEFAULT: 其他来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BillingInfo 费用信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 服务状态
CREATING 创建中
CREATE_FAILED 创建失败
Normal	正常运行中
Stopped  已停止
Stopping 停止中
Abnormal 异常
Pending 启动中
Waiting 就绪中
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Weight 模型权重
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IngressName 服务所在的 ingress 的 name
注意：此字段可能返回 null，表示取不到有效值。
     * @param ServiceLimit $ServiceLimit 服务限速限流相关配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param ScheduledAction $ScheduledAction 定时停止的配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateFailedReason 服务创建失败的原因，创建成功后该字段为默认值 CREATE_SUCCEED
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroupName 预付费服务对应的资源组名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 服务的标签
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

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ServiceGroupName",$param) and $param["ServiceGroupName"] !== null) {
            $this->ServiceGroupName = $param["ServiceGroupName"];
        }

        if (array_key_exists("ServiceDescription",$param) and $param["ServiceDescription"] !== null) {
            $this->ServiceDescription = $param["ServiceDescription"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
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

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("LatestVersion",$param) and $param["LatestVersion"] !== null) {
            $this->LatestVersion = $param["LatestVersion"];
        }

        if (array_key_exists("ServiceInfo",$param) and $param["ServiceInfo"] !== null) {
            $this->ServiceInfo = new ServiceInfo();
            $this->ServiceInfo->deserialize($param["ServiceInfo"]);
        }

        if (array_key_exists("BusinessStatus",$param) and $param["BusinessStatus"] !== null) {
            $this->BusinessStatus = $param["BusinessStatus"];
        }

        if (array_key_exists("CreateSource",$param) and $param["CreateSource"] !== null) {
            $this->CreateSource = $param["CreateSource"];
        }

        if (array_key_exists("BillingInfo",$param) and $param["BillingInfo"] !== null) {
            $this->BillingInfo = $param["BillingInfo"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("IngressName",$param) and $param["IngressName"] !== null) {
            $this->IngressName = $param["IngressName"];
        }

        if (array_key_exists("ServiceLimit",$param) and $param["ServiceLimit"] !== null) {
            $this->ServiceLimit = new ServiceLimit();
            $this->ServiceLimit->deserialize($param["ServiceLimit"]);
        }

        if (array_key_exists("ScheduledAction",$param) and $param["ScheduledAction"] !== null) {
            $this->ScheduledAction = new ScheduledAction();
            $this->ScheduledAction->deserialize($param["ScheduledAction"]);
        }

        if (array_key_exists("CreateFailedReason",$param) and $param["CreateFailedReason"] !== null) {
            $this->CreateFailedReason = $param["CreateFailedReason"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
