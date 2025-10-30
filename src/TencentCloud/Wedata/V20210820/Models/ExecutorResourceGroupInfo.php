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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源组详情
 *
 * @method string getExecutorGroupId() 获取执行组id, 仅更新资源时需要传
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupId(string $ExecutorGroupId) 设置执行组id, 仅更新资源时需要传
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupName() 获取执行组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupName(string $ExecutorGroupName) 设置执行组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupDesc() 获取执行组描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupDesc(string $ExecutorGroupDesc) 设置执行组描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExecutorResourceType() 获取SCHEDULER （标准调度资源组），CUSTOM_SCHEDULER （自定义调度资源），INTEGRATION（集成资源组），DATA_SERVICE（数据服务资源组）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorResourceType(integer $ExecutorResourceType) 设置SCHEDULER （标准调度资源组），CUSTOM_SCHEDULER （自定义调度资源），INTEGRATION（集成资源组），DATA_SERVICE（数据服务资源组）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取区域中文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置区域中文
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取vpcId, 托管服务时需要传递
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置vpcId, 托管服务时需要传递
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取subnetId, 托管服务时需要传递
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置subnetId, 托管服务时需要传递
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExecutorResourcePackageInfo getBasicResourcePackage() 获取基础资源包，资源组至少包含一个基础资源包
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBasicResourcePackage(ExecutorResourcePackageInfo $BasicResourcePackage) 设置基础资源包，资源组至少包含一个基础资源包
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExecutorResourcePackageInfo getAdvanceResourcePackage() 获取增强资源包
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvanceResourcePackage(ExecutorResourcePackageInfo $AdvanceResourcePackage) 设置增强资源包
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoRenewFlag() 获取是否自动续费
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置是否自动续费
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegionEn() 获取区域英文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionEn(string $RegionEn) 设置区域英文
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRegionId() 获取区域Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionId(integer $RegionId) 设置区域Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectDisplayName() 获取项目展示名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectDisplayName(string $ProjectDisplayName) 设置项目展示名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAssociateProjectNums() 获取资源组关联项目数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssociateProjectNums(integer $AssociateProjectNums) 设置资源组关联项目数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsLocked() 获取是否锁定，false为未锁定，true为锁定
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsLocked(boolean $IsLocked) 设置是否锁定，false为未锁定，true为锁定
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSourceType() 获取来源类型，0为系统默认，1为自定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceType(integer $SourceType) 设置来源类型，0为系统默认，1为自定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method MQPackageVO getMQPackageVO() 获取队列资源包
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMQPackageVO(MQPackageVO $MQPackageVO) 设置队列资源包
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getFirstChoice() 获取是否首选
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstChoice(boolean $FirstChoice) 设置是否首选
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPythonSubVersions() 获取资源组python版本绑定详情
 * @method void setPythonSubVersions(array $PythonSubVersions) 设置资源组python版本绑定详情
 */
class ExecutorResourceGroupInfo extends AbstractModel
{
    /**
     * @var string 执行组id, 仅更新资源时需要传
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorGroupId;

    /**
     * @var string 执行组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorGroupName;

    /**
     * @var string 执行组描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorGroupDesc;

    /**
     * @var integer SCHEDULER （标准调度资源组），CUSTOM_SCHEDULER （自定义调度资源），INTEGRATION（集成资源组），DATA_SERVICE（数据服务资源组）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorResourceType;

    /**
     * @var string 区域中文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string vpcId, 托管服务时需要传递
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string subnetId, 托管服务时需要传递
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string 项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var ExecutorResourcePackageInfo 基础资源包，资源组至少包含一个基础资源包
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BasicResourcePackage;

    /**
     * @var ExecutorResourcePackageInfo 增强资源包
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdvanceResourcePackage;

    /**
     * @var integer 是否自动续费
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRenewFlag;

    /**
     * @var string 区域英文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionEn;

    /**
     * @var integer 区域Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionId;

    /**
     * @var string 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var string 项目展示名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectDisplayName;

    /**
     * @var integer 资源组关联项目数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssociateProjectNums;

    /**
     * @var boolean 是否锁定，false为未锁定，true为锁定
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsLocked;

    /**
     * @var integer 来源类型，0为系统默认，1为自定义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceType;

    /**
     * @var MQPackageVO 队列资源包
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MQPackageVO;

    /**
     * @var boolean 是否首选
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstChoice;

    /**
     * @var array 资源组python版本绑定详情
     */
    public $PythonSubVersions;

    /**
     * @param string $ExecutorGroupId 执行组id, 仅更新资源时需要传
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupName 执行组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupDesc 执行组描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExecutorResourceType SCHEDULER （标准调度资源组），CUSTOM_SCHEDULER （自定义调度资源），INTEGRATION（集成资源组），DATA_SERVICE（数据服务资源组）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 区域中文
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId vpcId, 托管服务时需要传递
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId subnetId, 托管服务时需要传递
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExecutorResourcePackageInfo $BasicResourcePackage 基础资源包，资源组至少包含一个基础资源包
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExecutorResourcePackageInfo $AdvanceResourcePackage 增强资源包
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoRenewFlag 是否自动续费
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegionEn 区域英文
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RegionId 区域Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectDisplayName 项目展示名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AssociateProjectNums 资源组关联项目数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsLocked 是否锁定，false为未锁定，true为锁定
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SourceType 来源类型，0为系统默认，1为自定义
注意：此字段可能返回 null，表示取不到有效值。
     * @param MQPackageVO $MQPackageVO 队列资源包
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $FirstChoice 是否首选
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PythonSubVersions 资源组python版本绑定详情
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
        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("ExecutorGroupName",$param) and $param["ExecutorGroupName"] !== null) {
            $this->ExecutorGroupName = $param["ExecutorGroupName"];
        }

        if (array_key_exists("ExecutorGroupDesc",$param) and $param["ExecutorGroupDesc"] !== null) {
            $this->ExecutorGroupDesc = $param["ExecutorGroupDesc"];
        }

        if (array_key_exists("ExecutorResourceType",$param) and $param["ExecutorResourceType"] !== null) {
            $this->ExecutorResourceType = $param["ExecutorResourceType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("BasicResourcePackage",$param) and $param["BasicResourcePackage"] !== null) {
            $this->BasicResourcePackage = new ExecutorResourcePackageInfo();
            $this->BasicResourcePackage->deserialize($param["BasicResourcePackage"]);
        }

        if (array_key_exists("AdvanceResourcePackage",$param) and $param["AdvanceResourcePackage"] !== null) {
            $this->AdvanceResourcePackage = new ExecutorResourcePackageInfo();
            $this->AdvanceResourcePackage->deserialize($param["AdvanceResourcePackage"]);
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("RegionEn",$param) and $param["RegionEn"] !== null) {
            $this->RegionEn = $param["RegionEn"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ProjectDisplayName",$param) and $param["ProjectDisplayName"] !== null) {
            $this->ProjectDisplayName = $param["ProjectDisplayName"];
        }

        if (array_key_exists("AssociateProjectNums",$param) and $param["AssociateProjectNums"] !== null) {
            $this->AssociateProjectNums = $param["AssociateProjectNums"];
        }

        if (array_key_exists("IsLocked",$param) and $param["IsLocked"] !== null) {
            $this->IsLocked = $param["IsLocked"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("MQPackageVO",$param) and $param["MQPackageVO"] !== null) {
            $this->MQPackageVO = new MQPackageVO();
            $this->MQPackageVO->deserialize($param["MQPackageVO"]);
        }

        if (array_key_exists("FirstChoice",$param) and $param["FirstChoice"] !== null) {
            $this->FirstChoice = $param["FirstChoice"];
        }

        if (array_key_exists("PythonSubVersions",$param) and $param["PythonSubVersions"] !== null) {
            $this->PythonSubVersions = $param["PythonSubVersions"];
        }
    }
}
