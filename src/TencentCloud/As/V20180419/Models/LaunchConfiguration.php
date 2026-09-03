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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 符合条件的启动配置信息的集合。
 *
 * @method integer getProjectId() 获取<p>实例所属项目ID。</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>实例所属项目ID。</p>
 * @method string getLaunchConfigurationId() 获取<p>启动配置ID。</p>
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) 设置<p>启动配置ID。</p>
 * @method string getLaunchConfigurationName() 获取<p>启动配置名称。</p>
 * @method void setLaunchConfigurationName(string $LaunchConfigurationName) 设置<p>启动配置名称。</p>
 * @method string getInstanceType() 获取<p>实例机型。</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例机型。</p>
 * @method SystemDisk getSystemDisk() 获取<p>实例系统盘配置信息。</p>
 * @method void setSystemDisk(SystemDisk $SystemDisk) 设置<p>实例系统盘配置信息。</p>
 * @method array getDataDisks() 获取<p>实例数据盘配置信息。</p>
 * @method void setDataDisks(array $DataDisks) 设置<p>实例数据盘配置信息。</p>
 * @method LimitedLoginSettings getLoginSettings() 获取<p>实例登录设置。</p>
 * @method void setLoginSettings(LimitedLoginSettings $LoginSettings) 设置<p>实例登录设置。</p>
 * @method InternetAccessible getInternetAccessible() 获取<p>公网带宽相关信息设置。</p>
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置<p>公网带宽相关信息设置。</p>
 * @method array getSecurityGroupIds() 获取<p>实例所属安全组。</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>实例所属安全组。</p>
 * @method array getAutoScalingGroupAbstractSet() 获取<p>启动配置关联的伸缩组。</p>
 * @method void setAutoScalingGroupAbstractSet(array $AutoScalingGroupAbstractSet) 设置<p>启动配置关联的伸缩组。</p>
 * @method string getUserData() 获取<p>自定义数据。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserData(string $UserData) 设置<p>自定义数据。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取<p>启动配置创建时间，为标准<code>UTC</code>时间。</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>启动配置创建时间，为标准<code>UTC</code>时间。</p>
 * @method EnhancedService getEnhancedService() 获取<p>实例的增强服务启用情况与其设置。</p>
 * @method void setEnhancedService(EnhancedService $EnhancedService) 设置<p>实例的增强服务启用情况与其设置。</p>
 * @method string getImageId() 获取<p>镜像ID。</p>
 * @method void setImageId(string $ImageId) 设置<p>镜像ID。</p>
 * @method string getLaunchConfigurationStatus() 获取<p>启动配置当前状态。取值范围：<li>NORMAL：正常</li><li>IMAGE_ABNORMAL：启动配置镜像异常</li><li>CBS_SNAP_ABNORMAL：启动配置数据盘快照异常</li><li>SECURITY_GROUP_ABNORMAL：启动配置安全组异常</li></p>
 * @method void setLaunchConfigurationStatus(string $LaunchConfigurationStatus) 设置<p>启动配置当前状态。取值范围：<li>NORMAL：正常</li><li>IMAGE_ABNORMAL：启动配置镜像异常</li><li>CBS_SNAP_ABNORMAL：启动配置数据盘快照异常</li><li>SECURITY_GROUP_ABNORMAL：启动配置安全组异常</li></p>
 * @method string getInstanceChargeType() 获取<p>实例计费类型，取值范围如下：</p><li>POSTPAID_BY_HOUR：按小时后付费</li><li>SPOTPAID：竞价付费</li><li>PREPAID：预付费，即包年包月</li><li>CDCPAID：专用集群付费</li>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>实例计费类型，取值范围如下：</p><li>POSTPAID_BY_HOUR：按小时后付费</li><li>SPOTPAID：竞价付费</li><li>PREPAID：预付费，即包年包月</li><li>CDCPAID：专用集群付费</li>
 * @method InstanceMarketOptionsRequest getInstanceMarketOptions() 获取<p>实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费则该参数必传。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceMarketOptions(InstanceMarketOptionsRequest $InstanceMarketOptions) 设置<p>实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费则该参数必传。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInstanceTypes() 获取<p>实例机型列表。</p>
 * @method void setInstanceTypes(array $InstanceTypes) 设置<p>实例机型列表。</p>
 * @method array getInstanceTags() 获取<p>实例标签列表。扩容出来的实例会自动带上标签，最多支持10个标签。</p>
 * @method void setInstanceTags(array $InstanceTags) 设置<p>实例标签列表。扩容出来的实例会自动带上标签，最多支持10个标签。</p>
 * @method array getTags() 获取<p>标签列表，该参数内的标签仅用于绑定启动配置，不会传递给基于该启动配置扩容的 CVM 实例。</p>
 * @method void setTags(array $Tags) 设置<p>标签列表，该参数内的标签仅用于绑定启动配置，不会传递给基于该启动配置扩容的 CVM 实例。</p>
 * @method integer getVersionNumber() 获取<p>版本号。</p>
 * @method void setVersionNumber(integer $VersionNumber) 设置<p>版本号。</p>
 * @method string getUpdatedTime() 获取<p>更新时间，为标准<code>UTC</code>时间。</p>
 * @method void setUpdatedTime(string $UpdatedTime) 设置<p>更新时间，为标准<code>UTC</code>时间。</p>
 * @method string getCamRoleName() 获取<p>CAM角色名称。可通过<a href="https://cloud.tencent.com/document/product/598/36223">DescribeRoleList</a>接口返回值中的roleName获取。</p>
 * @method void setCamRoleName(string $CamRoleName) 设置<p>CAM角色名称。可通过<a href="https://cloud.tencent.com/document/product/598/36223">DescribeRoleList</a>接口返回值中的roleName获取。</p>
 * @method string getLastOperationInstanceTypesCheckPolicy() 获取<p>上次操作时，InstanceTypesCheckPolicy 取值。</p>
 * @method void setLastOperationInstanceTypesCheckPolicy(string $LastOperationInstanceTypesCheckPolicy) 设置<p>上次操作时，InstanceTypesCheckPolicy 取值。</p>
 * @method HostNameSettings getHostNameSettings() 获取<p>云服务器主机名（HostName）的相关设置。</p>
 * @method void setHostNameSettings(HostNameSettings $HostNameSettings) 设置<p>云服务器主机名（HostName）的相关设置。</p>
 * @method InstanceNameSettings getInstanceNameSettings() 获取<p>云服务器实例名（InstanceName）的相关设置。</p>
 * @method void setInstanceNameSettings(InstanceNameSettings $InstanceNameSettings) 设置<p>云服务器实例名（InstanceName）的相关设置。</p>
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取<p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。</p>
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置<p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。</p>
 * @method string getDiskTypePolicy() 获取<p>云盘类型选择策略。取值范围：<li>ORIGINAL：使用设置的云盘类型</li><li>AUTOMATIC：自动选择当前可用区下可用的云盘类型</li></p>
 * @method void setDiskTypePolicy(string $DiskTypePolicy) 设置<p>云盘类型选择策略。取值范围：<li>ORIGINAL：使用设置的云盘类型</li><li>AUTOMATIC：自动选择当前可用区下可用的云盘类型</li></p>
 * @method string getHpcClusterId() 获取<p>高性能计算集群ID。<br><br>注意：此字段默认为空。</p>
 * @method void setHpcClusterId(string $HpcClusterId) 设置<p>高性能计算集群ID。<br><br>注意：此字段默认为空。</p>
 * @method IPv6InternetAccessible getIPv6InternetAccessible() 获取<p>IPv6公网带宽相关信息设置。</p>
 * @method void setIPv6InternetAccessible(IPv6InternetAccessible $IPv6InternetAccessible) 设置<p>IPv6公网带宽相关信息设置。</p>
 * @method array getDisasterRecoverGroupIds() 获取<p>置放群组id，仅支持指定一个。</p>
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) 设置<p>置放群组id，仅支持指定一个。</p>
 * @method string getImageFamily() 获取<p>镜像族名称。</p>
 * @method void setImageFamily(string $ImageFamily) 设置<p>镜像族名称。</p>
 * @method string getDedicatedClusterId() 获取<p>本地专用集群 ID。</p>
 * @method void setDedicatedClusterId(string $DedicatedClusterId) 设置<p>本地专用集群 ID。</p>
 * @method array getNetworkInterfaces() 获取<p>启动配置的弹性网卡配置。</p>
 * @method void setNetworkInterfaces(array $NetworkInterfaces) 设置<p>启动配置的弹性网卡配置。</p>
 */
class LaunchConfiguration extends AbstractModel
{
    /**
     * @var integer <p>实例所属项目ID。</p>
     */
    public $ProjectId;

    /**
     * @var string <p>启动配置ID。</p>
     */
    public $LaunchConfigurationId;

    /**
     * @var string <p>启动配置名称。</p>
     */
    public $LaunchConfigurationName;

    /**
     * @var string <p>实例机型。</p>
     */
    public $InstanceType;

    /**
     * @var SystemDisk <p>实例系统盘配置信息。</p>
     */
    public $SystemDisk;

    /**
     * @var array <p>实例数据盘配置信息。</p>
     */
    public $DataDisks;

    /**
     * @var LimitedLoginSettings <p>实例登录设置。</p>
     */
    public $LoginSettings;

    /**
     * @var InternetAccessible <p>公网带宽相关信息设置。</p>
     */
    public $InternetAccessible;

    /**
     * @var array <p>实例所属安全组。</p>
     */
    public $SecurityGroupIds;

    /**
     * @var array <p>启动配置关联的伸缩组。</p>
     */
    public $AutoScalingGroupAbstractSet;

    /**
     * @var string <p>自定义数据。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserData;

    /**
     * @var string <p>启动配置创建时间，为标准<code>UTC</code>时间。</p>
     */
    public $CreatedTime;

    /**
     * @var EnhancedService <p>实例的增强服务启用情况与其设置。</p>
     */
    public $EnhancedService;

    /**
     * @var string <p>镜像ID。</p>
     */
    public $ImageId;

    /**
     * @var string <p>启动配置当前状态。取值范围：<li>NORMAL：正常</li><li>IMAGE_ABNORMAL：启动配置镜像异常</li><li>CBS_SNAP_ABNORMAL：启动配置数据盘快照异常</li><li>SECURITY_GROUP_ABNORMAL：启动配置安全组异常</li></p>
     */
    public $LaunchConfigurationStatus;

    /**
     * @var string <p>实例计费类型，取值范围如下：</p><li>POSTPAID_BY_HOUR：按小时后付费</li><li>SPOTPAID：竞价付费</li><li>PREPAID：预付费，即包年包月</li><li>CDCPAID：专用集群付费</li>
     */
    public $InstanceChargeType;

    /**
     * @var InstanceMarketOptionsRequest <p>实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费则该参数必传。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceMarketOptions;

    /**
     * @var array <p>实例机型列表。</p>
     */
    public $InstanceTypes;

    /**
     * @var array <p>实例标签列表。扩容出来的实例会自动带上标签，最多支持10个标签。</p>
     */
    public $InstanceTags;

    /**
     * @var array <p>标签列表，该参数内的标签仅用于绑定启动配置，不会传递给基于该启动配置扩容的 CVM 实例。</p>
     */
    public $Tags;

    /**
     * @var integer <p>版本号。</p>
     */
    public $VersionNumber;

    /**
     * @var string <p>更新时间，为标准<code>UTC</code>时间。</p>
     */
    public $UpdatedTime;

    /**
     * @var string <p>CAM角色名称。可通过<a href="https://cloud.tencent.com/document/product/598/36223">DescribeRoleList</a>接口返回值中的roleName获取。</p>
     */
    public $CamRoleName;

    /**
     * @var string <p>上次操作时，InstanceTypesCheckPolicy 取值。</p>
     */
    public $LastOperationInstanceTypesCheckPolicy;

    /**
     * @var HostNameSettings <p>云服务器主机名（HostName）的相关设置。</p>
     */
    public $HostNameSettings;

    /**
     * @var InstanceNameSettings <p>云服务器实例名（InstanceName）的相关设置。</p>
     */
    public $InstanceNameSettings;

    /**
     * @var InstanceChargePrepaid <p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。</p>
     */
    public $InstanceChargePrepaid;

    /**
     * @var string <p>云盘类型选择策略。取值范围：<li>ORIGINAL：使用设置的云盘类型</li><li>AUTOMATIC：自动选择当前可用区下可用的云盘类型</li></p>
     */
    public $DiskTypePolicy;

    /**
     * @var string <p>高性能计算集群ID。<br><br>注意：此字段默认为空。</p>
     */
    public $HpcClusterId;

    /**
     * @var IPv6InternetAccessible <p>IPv6公网带宽相关信息设置。</p>
     */
    public $IPv6InternetAccessible;

    /**
     * @var array <p>置放群组id，仅支持指定一个。</p>
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var string <p>镜像族名称。</p>
     */
    public $ImageFamily;

    /**
     * @var string <p>本地专用集群 ID。</p>
     */
    public $DedicatedClusterId;

    /**
     * @var array <p>启动配置的弹性网卡配置。</p>
     */
    public $NetworkInterfaces;

    /**
     * @param integer $ProjectId <p>实例所属项目ID。</p>
     * @param string $LaunchConfigurationId <p>启动配置ID。</p>
     * @param string $LaunchConfigurationName <p>启动配置名称。</p>
     * @param string $InstanceType <p>实例机型。</p>
     * @param SystemDisk $SystemDisk <p>实例系统盘配置信息。</p>
     * @param array $DataDisks <p>实例数据盘配置信息。</p>
     * @param LimitedLoginSettings $LoginSettings <p>实例登录设置。</p>
     * @param InternetAccessible $InternetAccessible <p>公网带宽相关信息设置。</p>
     * @param array $SecurityGroupIds <p>实例所属安全组。</p>
     * @param array $AutoScalingGroupAbstractSet <p>启动配置关联的伸缩组。</p>
     * @param string $UserData <p>自定义数据。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime <p>启动配置创建时间，为标准<code>UTC</code>时间。</p>
     * @param EnhancedService $EnhancedService <p>实例的增强服务启用情况与其设置。</p>
     * @param string $ImageId <p>镜像ID。</p>
     * @param string $LaunchConfigurationStatus <p>启动配置当前状态。取值范围：<li>NORMAL：正常</li><li>IMAGE_ABNORMAL：启动配置镜像异常</li><li>CBS_SNAP_ABNORMAL：启动配置数据盘快照异常</li><li>SECURITY_GROUP_ABNORMAL：启动配置安全组异常</li></p>
     * @param string $InstanceChargeType <p>实例计费类型，取值范围如下：</p><li>POSTPAID_BY_HOUR：按小时后付费</li><li>SPOTPAID：竞价付费</li><li>PREPAID：预付费，即包年包月</li><li>CDCPAID：专用集群付费</li>
     * @param InstanceMarketOptionsRequest $InstanceMarketOptions <p>实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费则该参数必传。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InstanceTypes <p>实例机型列表。</p>
     * @param array $InstanceTags <p>实例标签列表。扩容出来的实例会自动带上标签，最多支持10个标签。</p>
     * @param array $Tags <p>标签列表，该参数内的标签仅用于绑定启动配置，不会传递给基于该启动配置扩容的 CVM 实例。</p>
     * @param integer $VersionNumber <p>版本号。</p>
     * @param string $UpdatedTime <p>更新时间，为标准<code>UTC</code>时间。</p>
     * @param string $CamRoleName <p>CAM角色名称。可通过<a href="https://cloud.tencent.com/document/product/598/36223">DescribeRoleList</a>接口返回值中的roleName获取。</p>
     * @param string $LastOperationInstanceTypesCheckPolicy <p>上次操作时，InstanceTypesCheckPolicy 取值。</p>
     * @param HostNameSettings $HostNameSettings <p>云服务器主机名（HostName）的相关设置。</p>
     * @param InstanceNameSettings $InstanceNameSettings <p>云服务器实例名（InstanceName）的相关设置。</p>
     * @param InstanceChargePrepaid $InstanceChargePrepaid <p>预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的购买时长、是否设置自动续费等属性。若指定实例的付费模式为预付费则该参数必传。</p>
     * @param string $DiskTypePolicy <p>云盘类型选择策略。取值范围：<li>ORIGINAL：使用设置的云盘类型</li><li>AUTOMATIC：自动选择当前可用区下可用的云盘类型</li></p>
     * @param string $HpcClusterId <p>高性能计算集群ID。<br><br>注意：此字段默认为空。</p>
     * @param IPv6InternetAccessible $IPv6InternetAccessible <p>IPv6公网带宽相关信息设置。</p>
     * @param array $DisasterRecoverGroupIds <p>置放群组id，仅支持指定一个。</p>
     * @param string $ImageFamily <p>镜像族名称。</p>
     * @param string $DedicatedClusterId <p>本地专用集群 ID。</p>
     * @param array $NetworkInterfaces <p>启动配置的弹性网卡配置。</p>
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("LaunchConfigurationId",$param) and $param["LaunchConfigurationId"] !== null) {
            $this->LaunchConfigurationId = $param["LaunchConfigurationId"];
        }

        if (array_key_exists("LaunchConfigurationName",$param) and $param["LaunchConfigurationName"] !== null) {
            $this->LaunchConfigurationName = $param["LaunchConfigurationName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LimitedLoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("AutoScalingGroupAbstractSet",$param) and $param["AutoScalingGroupAbstractSet"] !== null) {
            $this->AutoScalingGroupAbstractSet = [];
            foreach ($param["AutoScalingGroupAbstractSet"] as $key => $value){
                $obj = new AutoScalingGroupAbstract();
                $obj->deserialize($value);
                array_push($this->AutoScalingGroupAbstractSet, $obj);
            }
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("EnhancedService",$param) and $param["EnhancedService"] !== null) {
            $this->EnhancedService = new EnhancedService();
            $this->EnhancedService->deserialize($param["EnhancedService"]);
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("LaunchConfigurationStatus",$param) and $param["LaunchConfigurationStatus"] !== null) {
            $this->LaunchConfigurationStatus = $param["LaunchConfigurationStatus"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceMarketOptions",$param) and $param["InstanceMarketOptions"] !== null) {
            $this->InstanceMarketOptions = new InstanceMarketOptionsRequest();
            $this->InstanceMarketOptions->deserialize($param["InstanceMarketOptions"]);
        }

        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = $param["InstanceTypes"];
        }

        if (array_key_exists("InstanceTags",$param) and $param["InstanceTags"] !== null) {
            $this->InstanceTags = [];
            foreach ($param["InstanceTags"] as $key => $value){
                $obj = new InstanceTag();
                $obj->deserialize($value);
                array_push($this->InstanceTags, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("VersionNumber",$param) and $param["VersionNumber"] !== null) {
            $this->VersionNumber = $param["VersionNumber"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("CamRoleName",$param) and $param["CamRoleName"] !== null) {
            $this->CamRoleName = $param["CamRoleName"];
        }

        if (array_key_exists("LastOperationInstanceTypesCheckPolicy",$param) and $param["LastOperationInstanceTypesCheckPolicy"] !== null) {
            $this->LastOperationInstanceTypesCheckPolicy = $param["LastOperationInstanceTypesCheckPolicy"];
        }

        if (array_key_exists("HostNameSettings",$param) and $param["HostNameSettings"] !== null) {
            $this->HostNameSettings = new HostNameSettings();
            $this->HostNameSettings->deserialize($param["HostNameSettings"]);
        }

        if (array_key_exists("InstanceNameSettings",$param) and $param["InstanceNameSettings"] !== null) {
            $this->InstanceNameSettings = new InstanceNameSettings();
            $this->InstanceNameSettings->deserialize($param["InstanceNameSettings"]);
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("DiskTypePolicy",$param) and $param["DiskTypePolicy"] !== null) {
            $this->DiskTypePolicy = $param["DiskTypePolicy"];
        }

        if (array_key_exists("HpcClusterId",$param) and $param["HpcClusterId"] !== null) {
            $this->HpcClusterId = $param["HpcClusterId"];
        }

        if (array_key_exists("IPv6InternetAccessible",$param) and $param["IPv6InternetAccessible"] !== null) {
            $this->IPv6InternetAccessible = new IPv6InternetAccessible();
            $this->IPv6InternetAccessible->deserialize($param["IPv6InternetAccessible"]);
        }

        if (array_key_exists("DisasterRecoverGroupIds",$param) and $param["DisasterRecoverGroupIds"] !== null) {
            $this->DisasterRecoverGroupIds = $param["DisasterRecoverGroupIds"];
        }

        if (array_key_exists("ImageFamily",$param) and $param["ImageFamily"] !== null) {
            $this->ImageFamily = $param["ImageFamily"];
        }

        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }

        if (array_key_exists("NetworkInterfaces",$param) and $param["NetworkInterfaces"] !== null) {
            $this->NetworkInterfaces = [];
            foreach ($param["NetworkInterfaces"] as $key => $value){
                $obj = new NetworkInterface();
                $obj->deserialize($value);
                array_push($this->NetworkInterfaces, $obj);
            }
        }
    }
}
