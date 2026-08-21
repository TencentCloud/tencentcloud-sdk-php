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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件系统基本信息
 *
 * @method string getCreationTime() 获取<p>创建时间</p>
 * @method void setCreationTime(string $CreationTime) 设置<p>创建时间</p>
 * @method string getCreationToken() 获取<p>用户自定义名称</p>
 * @method void setCreationToken(string $CreationToken) 设置<p>用户自定义名称</p>
 * @method string getFileSystemId() 获取<p>文件系统 ID</p>
 * @method void setFileSystemId(string $FileSystemId) 设置<p>文件系统 ID</p>
 * @method string getLifeCycleState() 获取<p>文件系统状态。取值范围：</p><ul><li>creating:创建中</li><li>mounting:挂载中</li><li>create_failed:创建失败</li><li>available:可使用</li><li>unserviced:停服中</li><li>upgrading:升级中</li></ul>
 * @method void setLifeCycleState(string $LifeCycleState) 设置<p>文件系统状态。取值范围：</p><ul><li>creating:创建中</li><li>mounting:挂载中</li><li>create_failed:创建失败</li><li>available:可使用</li><li>unserviced:停服中</li><li>upgrading:升级中</li></ul>
 * @method integer getSizeByte() 获取<p>文件系统已使用容量。单位：Byte</p>
 * @method void setSizeByte(integer $SizeByte) 设置<p>文件系统已使用容量。单位：Byte</p>
 * @method integer getSizeLimit() 获取<p>文件系统空间限制。单位:GiB</p>
 * @method void setSizeLimit(integer $SizeLimit) 设置<p>文件系统空间限制。单位:GiB</p>
 * @method integer getZoneId() 获取<p>区域 ID</p>
 * @method void setZoneId(integer $ZoneId) 设置<p>区域 ID</p>
 * @method string getZone() 获取<p>区域名称</p>
 * @method void setZone(string $Zone) 设置<p>区域名称</p>
 * @method string getProtocol() 获取<p>文件系统协议类型, 支持 NFS,CIFS,TURBO</p>
 * @method void setProtocol(string $Protocol) 设置<p>文件系统协议类型, 支持 NFS,CIFS,TURBO</p>
 * @method string getStorageType() 获取<p>存储类型，HP：通用性能型；SD：通用标准型；TP:turbo性能型；TB：turbo标准型；THP：吞吐型</p>
 * @method void setStorageType(string $StorageType) 设置<p>存储类型，HP：通用性能型；SD：通用标准型；TP:turbo性能型；TB：turbo标准型；THP：吞吐型</p>
 * @method string getStorageResourcePkg() 获取<p>文件系统绑定的预付费存储包</p>
 * @method void setStorageResourcePkg(string $StorageResourcePkg) 设置<p>文件系统绑定的预付费存储包</p>
 * @method string getBandwidthResourcePkg() 获取<p>文件系统绑定的预付费带宽包（暂未支持）</p>
 * @method void setBandwidthResourcePkg(string $BandwidthResourcePkg) 设置<p>文件系统绑定的预付费带宽包（暂未支持）</p>
 * @method PGroup getPGroup() 获取<p>文件系统绑定权限组信息</p>
 * @method void setPGroup(PGroup $PGroup) 设置<p>文件系统绑定权限组信息</p>
 * @method string getFsName() 获取<p>用户自定义名称</p>
 * @method void setFsName(string $FsName) 设置<p>用户自定义名称</p>
 * @method boolean getEncrypted() 获取<p>文件系统是否加密,true：代表加密，false：非加密</p>
 * @method void setEncrypted(boolean $Encrypted) 设置<p>文件系统是否加密,true：代表加密，false：非加密</p>
 * @method string getKmsKeyId() 获取<p>加密所使用的密钥，可以为密钥的 ID 或者 ARN</p>
 * @method void setKmsKeyId(string $KmsKeyId) 设置<p>加密所使用的密钥，可以为密钥的 ID 或者 ARN</p>
 * @method integer getAppId() 获取<p>应用ID</p>
 * @method void setAppId(integer $AppId) 设置<p>应用ID</p>
 * @method float getBandwidthLimit() 获取<p>文件系统吞吐上限，吞吐上限是根据文件系统当前已使用存储量、绑定的存储资源包以及吞吐资源包一同确定. 单位MiB/s</p>
 * @method void setBandwidthLimit(float $BandwidthLimit) 设置<p>文件系统吞吐上限，吞吐上限是根据文件系统当前已使用存储量、绑定的存储资源包以及吞吐资源包一同确定. 单位MiB/s</p>
 * @method string getAutoSnapshotPolicyId() 获取<p>文件系统关联的快照策略</p>
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) 设置<p>文件系统关联的快照策略</p>
 * @method string getSnapStatus() 获取<p>文件系统处理快照状态,snapping：快照中，normal：正常状态</p>
 * @method void setSnapStatus(string $SnapStatus) 设置<p>文件系统处理快照状态,snapping：快照中，normal：正常状态</p>
 * @method integer getCapacity() 获取<p>文件系统容量规格上限<br>单位:GiB</p>
 * @method void setCapacity(integer $Capacity) 设置<p>文件系统容量规格上限<br>单位:GiB</p>
 * @method array getTags() 获取<p>文件系统标签列表</p>
 * @method void setTags(array $Tags) 设置<p>文件系统标签列表</p>
 * @method string getTieringState() 获取<p>文件系统生命周期管理状态<br>NotAvailable：不可用<br>Available:可用</p>
 * @method void setTieringState(string $TieringState) 设置<p>文件系统生命周期管理状态<br>NotAvailable：不可用<br>Available:可用</p>
 * @method TieringDetailInfo getTieringDetail() 获取<p>分层存储详情</p>
 * @method void setTieringDetail(TieringDetailInfo $TieringDetail) 设置<p>分层存储详情</p>
 * @method AutoScaleUpRule getAutoScaleUpRule() 获取<p>文件系统自动扩容策略</p>
 * @method void setAutoScaleUpRule(AutoScaleUpRule $AutoScaleUpRule) 设置<p>文件系统自动扩容策略</p>
 * @method string getVersion() 获取<p>文件系统版本</p>
 * @method void setVersion(string $Version) 设置<p>文件系统版本</p>
 * @method array getExstraPerformanceInfo() 获取<p>额外性能信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExstraPerformanceInfo(array $ExstraPerformanceInfo) 设置<p>额外性能信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetaType() 获取<p>basic：标准版元数据类型<br>enhanced：增项版元数据类型</p>
 * @method void setMetaType(string $MetaType) 设置<p>basic：标准版元数据类型<br>enhanced：增项版元数据类型</p>
 * @method string getScenario() 获取<p>业务场景。</p><p>枚举值：</p><ul><li>AgentSandbox： 创建 AgentCFS</li></ul>
 * @method void setScenario(string $Scenario) 设置<p>业务场景。</p><p>枚举值：</p><ul><li>AgentSandbox： 创建 AgentCFS</li></ul>
 */
class FileSystemInfo extends AbstractModel
{
    /**
     * @var string <p>创建时间</p>
     */
    public $CreationTime;

    /**
     * @var string <p>用户自定义名称</p>
     */
    public $CreationToken;

    /**
     * @var string <p>文件系统 ID</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>文件系统状态。取值范围：</p><ul><li>creating:创建中</li><li>mounting:挂载中</li><li>create_failed:创建失败</li><li>available:可使用</li><li>unserviced:停服中</li><li>upgrading:升级中</li></ul>
     */
    public $LifeCycleState;

    /**
     * @var integer <p>文件系统已使用容量。单位：Byte</p>
     */
    public $SizeByte;

    /**
     * @var integer <p>文件系统空间限制。单位:GiB</p>
     */
    public $SizeLimit;

    /**
     * @var integer <p>区域 ID</p>
     */
    public $ZoneId;

    /**
     * @var string <p>区域名称</p>
     */
    public $Zone;

    /**
     * @var string <p>文件系统协议类型, 支持 NFS,CIFS,TURBO</p>
     */
    public $Protocol;

    /**
     * @var string <p>存储类型，HP：通用性能型；SD：通用标准型；TP:turbo性能型；TB：turbo标准型；THP：吞吐型</p>
     */
    public $StorageType;

    /**
     * @var string <p>文件系统绑定的预付费存储包</p>
     */
    public $StorageResourcePkg;

    /**
     * @var string <p>文件系统绑定的预付费带宽包（暂未支持）</p>
     */
    public $BandwidthResourcePkg;

    /**
     * @var PGroup <p>文件系统绑定权限组信息</p>
     */
    public $PGroup;

    /**
     * @var string <p>用户自定义名称</p>
     */
    public $FsName;

    /**
     * @var boolean <p>文件系统是否加密,true：代表加密，false：非加密</p>
     */
    public $Encrypted;

    /**
     * @var string <p>加密所使用的密钥，可以为密钥的 ID 或者 ARN</p>
     */
    public $KmsKeyId;

    /**
     * @var integer <p>应用ID</p>
     */
    public $AppId;

    /**
     * @var float <p>文件系统吞吐上限，吞吐上限是根据文件系统当前已使用存储量、绑定的存储资源包以及吞吐资源包一同确定. 单位MiB/s</p>
     */
    public $BandwidthLimit;

    /**
     * @var string <p>文件系统关联的快照策略</p>
     */
    public $AutoSnapshotPolicyId;

    /**
     * @var string <p>文件系统处理快照状态,snapping：快照中，normal：正常状态</p>
     */
    public $SnapStatus;

    /**
     * @var integer <p>文件系统容量规格上限<br>单位:GiB</p>
     */
    public $Capacity;

    /**
     * @var array <p>文件系统标签列表</p>
     */
    public $Tags;

    /**
     * @var string <p>文件系统生命周期管理状态<br>NotAvailable：不可用<br>Available:可用</p>
     */
    public $TieringState;

    /**
     * @var TieringDetailInfo <p>分层存储详情</p>
     */
    public $TieringDetail;

    /**
     * @var AutoScaleUpRule <p>文件系统自动扩容策略</p>
     */
    public $AutoScaleUpRule;

    /**
     * @var string <p>文件系统版本</p>
     */
    public $Version;

    /**
     * @var array <p>额外性能信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExstraPerformanceInfo;

    /**
     * @var string <p>basic：标准版元数据类型<br>enhanced：增项版元数据类型</p>
     */
    public $MetaType;

    /**
     * @var string <p>业务场景。</p><p>枚举值：</p><ul><li>AgentSandbox： 创建 AgentCFS</li></ul>
     */
    public $Scenario;

    /**
     * @param string $CreationTime <p>创建时间</p>
     * @param string $CreationToken <p>用户自定义名称</p>
     * @param string $FileSystemId <p>文件系统 ID</p>
     * @param string $LifeCycleState <p>文件系统状态。取值范围：</p><ul><li>creating:创建中</li><li>mounting:挂载中</li><li>create_failed:创建失败</li><li>available:可使用</li><li>unserviced:停服中</li><li>upgrading:升级中</li></ul>
     * @param integer $SizeByte <p>文件系统已使用容量。单位：Byte</p>
     * @param integer $SizeLimit <p>文件系统空间限制。单位:GiB</p>
     * @param integer $ZoneId <p>区域 ID</p>
     * @param string $Zone <p>区域名称</p>
     * @param string $Protocol <p>文件系统协议类型, 支持 NFS,CIFS,TURBO</p>
     * @param string $StorageType <p>存储类型，HP：通用性能型；SD：通用标准型；TP:turbo性能型；TB：turbo标准型；THP：吞吐型</p>
     * @param string $StorageResourcePkg <p>文件系统绑定的预付费存储包</p>
     * @param string $BandwidthResourcePkg <p>文件系统绑定的预付费带宽包（暂未支持）</p>
     * @param PGroup $PGroup <p>文件系统绑定权限组信息</p>
     * @param string $FsName <p>用户自定义名称</p>
     * @param boolean $Encrypted <p>文件系统是否加密,true：代表加密，false：非加密</p>
     * @param string $KmsKeyId <p>加密所使用的密钥，可以为密钥的 ID 或者 ARN</p>
     * @param integer $AppId <p>应用ID</p>
     * @param float $BandwidthLimit <p>文件系统吞吐上限，吞吐上限是根据文件系统当前已使用存储量、绑定的存储资源包以及吞吐资源包一同确定. 单位MiB/s</p>
     * @param string $AutoSnapshotPolicyId <p>文件系统关联的快照策略</p>
     * @param string $SnapStatus <p>文件系统处理快照状态,snapping：快照中，normal：正常状态</p>
     * @param integer $Capacity <p>文件系统容量规格上限<br>单位:GiB</p>
     * @param array $Tags <p>文件系统标签列表</p>
     * @param string $TieringState <p>文件系统生命周期管理状态<br>NotAvailable：不可用<br>Available:可用</p>
     * @param TieringDetailInfo $TieringDetail <p>分层存储详情</p>
     * @param AutoScaleUpRule $AutoScaleUpRule <p>文件系统自动扩容策略</p>
     * @param string $Version <p>文件系统版本</p>
     * @param array $ExstraPerformanceInfo <p>额外性能信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MetaType <p>basic：标准版元数据类型<br>enhanced：增项版元数据类型</p>
     * @param string $Scenario <p>业务场景。</p><p>枚举值：</p><ul><li>AgentSandbox： 创建 AgentCFS</li></ul>
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
        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("CreationToken",$param) and $param["CreationToken"] !== null) {
            $this->CreationToken = $param["CreationToken"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("LifeCycleState",$param) and $param["LifeCycleState"] !== null) {
            $this->LifeCycleState = $param["LifeCycleState"];
        }

        if (array_key_exists("SizeByte",$param) and $param["SizeByte"] !== null) {
            $this->SizeByte = $param["SizeByte"];
        }

        if (array_key_exists("SizeLimit",$param) and $param["SizeLimit"] !== null) {
            $this->SizeLimit = $param["SizeLimit"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("StorageResourcePkg",$param) and $param["StorageResourcePkg"] !== null) {
            $this->StorageResourcePkg = $param["StorageResourcePkg"];
        }

        if (array_key_exists("BandwidthResourcePkg",$param) and $param["BandwidthResourcePkg"] !== null) {
            $this->BandwidthResourcePkg = $param["BandwidthResourcePkg"];
        }

        if (array_key_exists("PGroup",$param) and $param["PGroup"] !== null) {
            $this->PGroup = new PGroup();
            $this->PGroup->deserialize($param["PGroup"]);
        }

        if (array_key_exists("FsName",$param) and $param["FsName"] !== null) {
            $this->FsName = $param["FsName"];
        }

        if (array_key_exists("Encrypted",$param) and $param["Encrypted"] !== null) {
            $this->Encrypted = $param["Encrypted"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("BandwidthLimit",$param) and $param["BandwidthLimit"] !== null) {
            $this->BandwidthLimit = $param["BandwidthLimit"];
        }

        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            $this->AutoSnapshotPolicyId = $param["AutoSnapshotPolicyId"];
        }

        if (array_key_exists("SnapStatus",$param) and $param["SnapStatus"] !== null) {
            $this->SnapStatus = $param["SnapStatus"];
        }

        if (array_key_exists("Capacity",$param) and $param["Capacity"] !== null) {
            $this->Capacity = $param["Capacity"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("TieringState",$param) and $param["TieringState"] !== null) {
            $this->TieringState = $param["TieringState"];
        }

        if (array_key_exists("TieringDetail",$param) and $param["TieringDetail"] !== null) {
            $this->TieringDetail = new TieringDetailInfo();
            $this->TieringDetail->deserialize($param["TieringDetail"]);
        }

        if (array_key_exists("AutoScaleUpRule",$param) and $param["AutoScaleUpRule"] !== null) {
            $this->AutoScaleUpRule = new AutoScaleUpRule();
            $this->AutoScaleUpRule->deserialize($param["AutoScaleUpRule"]);
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ExstraPerformanceInfo",$param) and $param["ExstraPerformanceInfo"] !== null) {
            $this->ExstraPerformanceInfo = [];
            foreach ($param["ExstraPerformanceInfo"] as $key => $value){
                $obj = new ExstraPerformanceInfo();
                $obj->deserialize($value);
                array_push($this->ExstraPerformanceInfo, $obj);
            }
        }

        if (array_key_exists("MetaType",$param) and $param["MetaType"] !== null) {
            $this->MetaType = $param["MetaType"];
        }

        if (array_key_exists("Scenario",$param) and $param["Scenario"] !== null) {
            $this->Scenario = $param["Scenario"];
        }
    }
}
