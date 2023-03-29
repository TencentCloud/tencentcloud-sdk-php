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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件系统基本信息
 *
 * @method string getCreationTime() 获取创建时间
 * @method void setCreationTime(string $CreationTime) 设置创建时间
 * @method string getCreationToken() 获取用户自定义名称
 * @method void setCreationToken(string $CreationToken) 设置用户自定义名称
 * @method string getFileSystemId() 获取文件系统 ID
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统 ID
 * @method string getLifeCycleState() 获取文件系统状态。取值范围：
- creating:创建中
- mounting:挂载中
- create_failed:创建失败
- available:可使用
- unserviced:停服中
- upgrading:升级中
 * @method void setLifeCycleState(string $LifeCycleState) 设置文件系统状态。取值范围：
- creating:创建中
- mounting:挂载中
- create_failed:创建失败
- available:可使用
- unserviced:停服中
- upgrading:升级中
 * @method integer getSizeByte() 获取文件系统已使用容量
 * @method void setSizeByte(integer $SizeByte) 设置文件系统已使用容量
 * @method integer getSizeLimit() 获取文件系统最大空间限制
 * @method void setSizeLimit(integer $SizeLimit) 设置文件系统最大空间限制
 * @method integer getZoneId() 获取区域 ID
 * @method void setZoneId(integer $ZoneId) 设置区域 ID
 * @method string getZone() 获取区域名称
 * @method void setZone(string $Zone) 设置区域名称
 * @method string getProtocol() 获取文件系统协议类型
 * @method void setProtocol(string $Protocol) 设置文件系统协议类型
 * @method string getStorageType() 获取文件系统存储类型
 * @method void setStorageType(string $StorageType) 设置文件系统存储类型
 * @method string getStorageResourcePkg() 获取文件系统绑定的预付费存储包
 * @method void setStorageResourcePkg(string $StorageResourcePkg) 设置文件系统绑定的预付费存储包
 * @method string getBandwidthResourcePkg() 获取文件系统绑定的预付费带宽包（暂未支持）
 * @method void setBandwidthResourcePkg(string $BandwidthResourcePkg) 设置文件系统绑定的预付费带宽包（暂未支持）
 * @method PGroup getPGroup() 获取文件系统绑定权限组信息
 * @method void setPGroup(PGroup $PGroup) 设置文件系统绑定权限组信息
 * @method string getFsName() 获取用户自定义名称
 * @method void setFsName(string $FsName) 设置用户自定义名称
 * @method boolean getEncrypted() 获取文件系统是否加密
 * @method void setEncrypted(boolean $Encrypted) 设置文件系统是否加密
 * @method string getKmsKeyId() 获取加密所使用的密钥，可以为密钥的 ID 或者 ARN
 * @method void setKmsKeyId(string $KmsKeyId) 设置加密所使用的密钥，可以为密钥的 ID 或者 ARN
 * @method integer getAppId() 获取应用ID
 * @method void setAppId(integer $AppId) 设置应用ID
 * @method float getBandwidthLimit() 获取文件系统吞吐上限，吞吐上限是根据文件系统当前已使用存储量、绑定的存储资源包以及吞吐资源包一同确定
 * @method void setBandwidthLimit(float $BandwidthLimit) 设置文件系统吞吐上限，吞吐上限是根据文件系统当前已使用存储量、绑定的存储资源包以及吞吐资源包一同确定
 * @method integer getCapacity() 获取文件系统总容量
 * @method void setCapacity(integer $Capacity) 设置文件系统总容量
 * @method array getTags() 获取文件系统标签列表
 * @method void setTags(array $Tags) 设置文件系统标签列表
 * @method string getTieringState() 获取文件系统生命周期管理状态
 * @method void setTieringState(string $TieringState) 设置文件系统生命周期管理状态
 * @method TieringDetailInfo getTieringDetail() 获取分层存储详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTieringDetail(TieringDetailInfo $TieringDetail) 设置分层存储详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class FileSystemInfo extends AbstractModel
{
    /**
     * @var string 创建时间
     */
    public $CreationTime;

    /**
     * @var string 用户自定义名称
     */
    public $CreationToken;

    /**
     * @var string 文件系统 ID
     */
    public $FileSystemId;

    /**
     * @var string 文件系统状态。取值范围：
- creating:创建中
- mounting:挂载中
- create_failed:创建失败
- available:可使用
- unserviced:停服中
- upgrading:升级中
     */
    public $LifeCycleState;

    /**
     * @var integer 文件系统已使用容量
     */
    public $SizeByte;

    /**
     * @var integer 文件系统最大空间限制
     */
    public $SizeLimit;

    /**
     * @var integer 区域 ID
     */
    public $ZoneId;

    /**
     * @var string 区域名称
     */
    public $Zone;

    /**
     * @var string 文件系统协议类型
     */
    public $Protocol;

    /**
     * @var string 文件系统存储类型
     */
    public $StorageType;

    /**
     * @var string 文件系统绑定的预付费存储包
     */
    public $StorageResourcePkg;

    /**
     * @var string 文件系统绑定的预付费带宽包（暂未支持）
     */
    public $BandwidthResourcePkg;

    /**
     * @var PGroup 文件系统绑定权限组信息
     */
    public $PGroup;

    /**
     * @var string 用户自定义名称
     */
    public $FsName;

    /**
     * @var boolean 文件系统是否加密
     */
    public $Encrypted;

    /**
     * @var string 加密所使用的密钥，可以为密钥的 ID 或者 ARN
     */
    public $KmsKeyId;

    /**
     * @var integer 应用ID
     */
    public $AppId;

    /**
     * @var float 文件系统吞吐上限，吞吐上限是根据文件系统当前已使用存储量、绑定的存储资源包以及吞吐资源包一同确定
     */
    public $BandwidthLimit;

    /**
     * @var integer 文件系统总容量
     */
    public $Capacity;

    /**
     * @var array 文件系统标签列表
     */
    public $Tags;

    /**
     * @var string 文件系统生命周期管理状态
     */
    public $TieringState;

    /**
     * @var TieringDetailInfo 分层存储详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TieringDetail;

    /**
     * @param string $CreationTime 创建时间
     * @param string $CreationToken 用户自定义名称
     * @param string $FileSystemId 文件系统 ID
     * @param string $LifeCycleState 文件系统状态。取值范围：
- creating:创建中
- mounting:挂载中
- create_failed:创建失败
- available:可使用
- unserviced:停服中
- upgrading:升级中
     * @param integer $SizeByte 文件系统已使用容量
     * @param integer $SizeLimit 文件系统最大空间限制
     * @param integer $ZoneId 区域 ID
     * @param string $Zone 区域名称
     * @param string $Protocol 文件系统协议类型
     * @param string $StorageType 文件系统存储类型
     * @param string $StorageResourcePkg 文件系统绑定的预付费存储包
     * @param string $BandwidthResourcePkg 文件系统绑定的预付费带宽包（暂未支持）
     * @param PGroup $PGroup 文件系统绑定权限组信息
     * @param string $FsName 用户自定义名称
     * @param boolean $Encrypted 文件系统是否加密
     * @param string $KmsKeyId 加密所使用的密钥，可以为密钥的 ID 或者 ARN
     * @param integer $AppId 应用ID
     * @param float $BandwidthLimit 文件系统吞吐上限，吞吐上限是根据文件系统当前已使用存储量、绑定的存储资源包以及吞吐资源包一同确定
     * @param integer $Capacity 文件系统总容量
     * @param array $Tags 文件系统标签列表
     * @param string $TieringState 文件系统生命周期管理状态
     * @param TieringDetailInfo $TieringDetail 分层存储详情
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
    }
}
