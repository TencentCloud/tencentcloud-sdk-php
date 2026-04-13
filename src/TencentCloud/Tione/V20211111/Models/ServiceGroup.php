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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 在线服务一个服务组的信息
 *
 * @method string getServiceGroupId() 获取<p>服务组id</p>
 * @method void setServiceGroupId(string $ServiceGroupId) 设置<p>服务组id</p>
 * @method string getServiceGroupName() 获取<p>服务组名</p>
 * @method void setServiceGroupName(string $ServiceGroupName) 设置<p>服务组名</p>
 * @method string getCreatedBy() 获取<p>创建者</p>
 * @method void setCreatedBy(string $CreatedBy) 设置<p>创建者</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method string getUin() 获取<p>主账号</p>
 * @method void setUin(string $Uin) 设置<p>主账号</p>
 * @method integer getServiceCount() 获取<p>服务组下服务总数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceCount(integer $ServiceCount) 设置<p>服务组下服务总数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunningServiceCount() 获取<p>服务组下在运行的服务数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningServiceCount(integer $RunningServiceCount) 设置<p>服务组下在运行的服务数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getServices() 获取<p>服务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServices(array $Services) 设置<p>服务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>服务组状态，与服务一致<br> CREATING 创建中<br>     CREATE_FAILED 创建失败<br>     Normal    正常运行中<br>     Stopped  已停止<br>     Stopping 停止中<br>     Abnormal 异常<br>     Pending 启动中<br>     Waiting 就绪中</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>服务组状态，与服务一致<br> CREATING 创建中<br>     CREATE_FAILED 创建失败<br>     Normal    正常运行中<br>     Stopped  已停止<br>     Stopping 停止中<br>     Abnormal 异常<br>     Pending 启动中<br>     Waiting 就绪中</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取<p>服务组标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>服务组标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestVersion() 获取<p>服务组下最高版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestVersion(string $LatestVersion) 设置<p>服务组下最高版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusinessStatus() 获取<p>服务的业务状态<br>CREATING 创建中<br>     CREATE_FAILED 创建失败<br>     ARREARS_STOP 因欠费被强制停止<br>     BILLING 计费中<br>     WHITELIST_USING 白名单试用中<br>     WHITELIST_STOP 白名单额度不足</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessStatus(string $BusinessStatus) 设置<p>服务的业务状态<br>CREATING 创建中<br>     CREATE_FAILED 创建失败<br>     ARREARS_STOP 因欠费被强制停止<br>     BILLING 计费中<br>     WHITELIST_USING 白名单试用中<br>     WHITELIST_STOP 白名单额度不足</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBillingInfo() 获取<p>服务的计费信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillingInfo(string $BillingInfo) 设置<p>服务的计费信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateSource() 获取<p>服务的创建来源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateSource(string $CreateSource) 设置<p>服务的创建来源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWeightUpdateStatus() 获取<p>服务组的权重更新状态<br>UPDATING 更新中<br>     UPDATED 更新成功<br>     UPDATE_FAILED 更新失败</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeightUpdateStatus(string $WeightUpdateStatus) 设置<p>服务组的权重更新状态<br>UPDATING 更新中<br>     UPDATED 更新成功<br>     UPDATE_FAILED 更新失败</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReplicasCount() 获取<p>服务组下运行的pod数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicasCount(integer $ReplicasCount) 设置<p>服务组下运行的pod数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAvailableReplicasCount() 获取<p>服务组下期望的pod数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailableReplicasCount(integer $AvailableReplicasCount) 设置<p>服务组下期望的pod数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubUin() 获取<p>服务组的subuin</p>
 * @method void setSubUin(string $SubUin) 设置<p>服务组的subuin</p>
 * @method integer getAppId() 获取<p>服务组的app_id</p>
 * @method void setAppId(integer $AppId) 设置<p>服务组的app_id</p>
 * @method boolean getAuthorizationEnable() 获取<p>是否开启鉴权</p>
 * @method void setAuthorizationEnable(boolean $AuthorizationEnable) 设置<p>是否开启鉴权</p>
 * @method array getAuthTokens() 获取<p>限流鉴权 token 列表</p>
 * @method void setAuthTokens(array $AuthTokens) 设置<p>限流鉴权 token 列表</p>
 * @method string getMonitorSource() 获取<p>用于监控的创建来源字段</p>
 * @method void setMonitorSource(string $MonitorSource) 设置<p>用于监控的创建来源字段</p>
 * @method string getSubUinName() 获取<p>子用户的 nickname</p>
 * @method void setSubUinName(string $SubUinName) 设置<p>子用户的 nickname</p>
 * @method LogConfig getGatewayLogConfig() 获取<p>网关日志投递相关配置</p>
 * @method void setGatewayLogConfig(LogConfig $GatewayLogConfig) 设置<p>网关日志投递相关配置</p>
 * @method GatewayConfig getGatewayConfig() 获取<p>网关路由相关配置</p>
 * @method void setGatewayConfig(GatewayConfig $GatewayConfig) 设置<p>网关路由相关配置</p>
 */
class ServiceGroup extends AbstractModel
{
    /**
     * @var string <p>服务组id</p>
     */
    public $ServiceGroupId;

    /**
     * @var string <p>服务组名</p>
     */
    public $ServiceGroupName;

    /**
     * @var string <p>创建者</p>
     */
    public $CreatedBy;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>主账号</p>
     */
    public $Uin;

    /**
     * @var integer <p>服务组下服务总数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceCount;

    /**
     * @var integer <p>服务组下在运行的服务数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningServiceCount;

    /**
     * @var array <p>服务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Services;

    /**
     * @var string <p>服务组状态，与服务一致<br> CREATING 创建中<br>     CREATE_FAILED 创建失败<br>     Normal    正常运行中<br>     Stopped  已停止<br>     Stopping 停止中<br>     Abnormal 异常<br>     Pending 启动中<br>     Waiting 就绪中</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var array <p>服务组标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string <p>服务组下最高版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestVersion;

    /**
     * @var string <p>服务的业务状态<br>CREATING 创建中<br>     CREATE_FAILED 创建失败<br>     ARREARS_STOP 因欠费被强制停止<br>     BILLING 计费中<br>     WHITELIST_USING 白名单试用中<br>     WHITELIST_STOP 白名单额度不足</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessStatus;

    /**
     * @var string <p>服务的计费信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillingInfo;

    /**
     * @var string <p>服务的创建来源</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateSource;

    /**
     * @var string <p>服务组的权重更新状态<br>UPDATING 更新中<br>     UPDATED 更新成功<br>     UPDATE_FAILED 更新失败</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WeightUpdateStatus;

    /**
     * @var integer <p>服务组下运行的pod数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplicasCount;

    /**
     * @var integer <p>服务组下期望的pod数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvailableReplicasCount;

    /**
     * @var string <p>服务组的subuin</p>
     */
    public $SubUin;

    /**
     * @var integer <p>服务组的app_id</p>
     */
    public $AppId;

    /**
     * @var boolean <p>是否开启鉴权</p>
     */
    public $AuthorizationEnable;

    /**
     * @var array <p>限流鉴权 token 列表</p>
     */
    public $AuthTokens;

    /**
     * @var string <p>用于监控的创建来源字段</p>
     */
    public $MonitorSource;

    /**
     * @var string <p>子用户的 nickname</p>
     */
    public $SubUinName;

    /**
     * @var LogConfig <p>网关日志投递相关配置</p>
     */
    public $GatewayLogConfig;

    /**
     * @var GatewayConfig <p>网关路由相关配置</p>
     */
    public $GatewayConfig;

    /**
     * @param string $ServiceGroupId <p>服务组id</p>
     * @param string $ServiceGroupName <p>服务组名</p>
     * @param string $CreatedBy <p>创建者</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param string $Uin <p>主账号</p>
     * @param integer $ServiceCount <p>服务组下服务总数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunningServiceCount <p>服务组下在运行的服务数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Services <p>服务描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>服务组状态，与服务一致<br> CREATING 创建中<br>     CREATE_FAILED 创建失败<br>     Normal    正常运行中<br>     Stopped  已停止<br>     Stopping 停止中<br>     Abnormal 异常<br>     Pending 启动中<br>     Waiting 就绪中</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags <p>服务组标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestVersion <p>服务组下最高版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BusinessStatus <p>服务的业务状态<br>CREATING 创建中<br>     CREATE_FAILED 创建失败<br>     ARREARS_STOP 因欠费被强制停止<br>     BILLING 计费中<br>     WHITELIST_USING 白名单试用中<br>     WHITELIST_STOP 白名单额度不足</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BillingInfo <p>服务的计费信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateSource <p>服务的创建来源</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WeightUpdateStatus <p>服务组的权重更新状态<br>UPDATING 更新中<br>     UPDATED 更新成功<br>     UPDATE_FAILED 更新失败</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReplicasCount <p>服务组下运行的pod数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AvailableReplicasCount <p>服务组下期望的pod数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubUin <p>服务组的subuin</p>
     * @param integer $AppId <p>服务组的app_id</p>
     * @param boolean $AuthorizationEnable <p>是否开启鉴权</p>
     * @param array $AuthTokens <p>限流鉴权 token 列表</p>
     * @param string $MonitorSource <p>用于监控的创建来源字段</p>
     * @param string $SubUinName <p>子用户的 nickname</p>
     * @param LogConfig $GatewayLogConfig <p>网关日志投递相关配置</p>
     * @param GatewayConfig $GatewayConfig <p>网关路由相关配置</p>
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

        if (array_key_exists("ReplicasCount",$param) and $param["ReplicasCount"] !== null) {
            $this->ReplicasCount = $param["ReplicasCount"];
        }

        if (array_key_exists("AvailableReplicasCount",$param) and $param["AvailableReplicasCount"] !== null) {
            $this->AvailableReplicasCount = $param["AvailableReplicasCount"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AuthorizationEnable",$param) and $param["AuthorizationEnable"] !== null) {
            $this->AuthorizationEnable = $param["AuthorizationEnable"];
        }

        if (array_key_exists("AuthTokens",$param) and $param["AuthTokens"] !== null) {
            $this->AuthTokens = [];
            foreach ($param["AuthTokens"] as $key => $value){
                $obj = new AuthToken();
                $obj->deserialize($value);
                array_push($this->AuthTokens, $obj);
            }
        }

        if (array_key_exists("MonitorSource",$param) and $param["MonitorSource"] !== null) {
            $this->MonitorSource = $param["MonitorSource"];
        }

        if (array_key_exists("SubUinName",$param) and $param["SubUinName"] !== null) {
            $this->SubUinName = $param["SubUinName"];
        }

        if (array_key_exists("GatewayLogConfig",$param) and $param["GatewayLogConfig"] !== null) {
            $this->GatewayLogConfig = new LogConfig();
            $this->GatewayLogConfig->deserialize($param["GatewayLogConfig"]);
        }

        if (array_key_exists("GatewayConfig",$param) and $param["GatewayConfig"] !== null) {
            $this->GatewayConfig = new GatewayConfig();
            $this->GatewayConfig->deserialize($param["GatewayConfig"]);
        }
    }
}
