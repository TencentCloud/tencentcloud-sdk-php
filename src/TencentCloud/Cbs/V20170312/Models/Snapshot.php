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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了快照的详细信息
 *
 * @method Placement getPlacement() 获取<p>快照所在的位置。</p>
 * @method void setPlacement(Placement $Placement) 设置<p>快照所在的位置。</p>
 * @method boolean getCopyFromRemote() 获取<p>是否为跨地域复制的快照。取值范围：</p><ul>    <li>true：表示为跨地域复制的快照。</li>    <li>false：本地域的快照。</li></ul>
 * @method void setCopyFromRemote(boolean $CopyFromRemote) 设置<p>是否为跨地域复制的快照。取值范围：</p><ul>    <li>true：表示为跨地域复制的快照。</li>    <li>false：本地域的快照。</li></ul>
 * @method string getSnapshotState() 获取<p>快照的状态。取值范围：</p><ul>    <li>NORMAL：正常</li>    <li>CREATING：创建中</li>    <li>ROLLBACKING：回滚中</li>    <li>COPYING_FROM_REMOTE：跨地域复制中</li>    <li>CHECKING_COPIED：复制校验中</li>    <li>TORECYCLE：待回收</li></ul>
 * @method void setSnapshotState(string $SnapshotState) 设置<p>快照的状态。取值范围：</p><ul>    <li>NORMAL：正常</li>    <li>CREATING：创建中</li>    <li>ROLLBACKING：回滚中</li>    <li>COPYING_FROM_REMOTE：跨地域复制中</li>    <li>CHECKING_COPIED：复制校验中</li>    <li>TORECYCLE：待回收</li></ul>
 * @method boolean getIsPermanent() 获取<p>是否为永久快照。取值范围：</p><ul>    <li>true：永久快照</li>    <li>false：非永久快照</li></ul>
 * @method void setIsPermanent(boolean $IsPermanent) 设置<p>是否为永久快照。取值范围：</p><ul>    <li>true：永久快照</li>    <li>false：非永久快照</li></ul>
 * @method string getSnapshotName() 获取<p>快照名称，用户自定义的快照别名。调用<a href="/document/product/362/15650">ModifySnapshotAttribute</a>可修改此字段。</p>
 * @method void setSnapshotName(string $SnapshotName) 设置<p>快照名称，用户自定义的快照别名。调用<a href="/document/product/362/15650">ModifySnapshotAttribute</a>可修改此字段。</p>
 * @method string getDeadlineTime() 获取<p>快照到期时间。如果快照为永久保留，此字段为空。</p>
 * @method void setDeadlineTime(string $DeadlineTime) 设置<p>快照到期时间。如果快照为永久保留，此字段为空。</p>
 * @method integer getPercent() 获取<p>快照创建进度百分比，快照创建成功后此字段恒为100。</p>
 * @method void setPercent(integer $Percent) 设置<p>快照创建进度百分比，快照创建成功后此字段恒为100。</p>
 * @method array getImages() 获取<p>快照关联的镜像列表。</p>
 * @method void setImages(array $Images) 设置<p>快照关联的镜像列表。</p>
 * @method integer getShareReference() 获取<p>快照当前被共享数。</p>
 * @method void setShareReference(integer $ShareReference) 设置<p>快照当前被共享数。</p>
 * @method string getSnapshotType() 获取<p>快照类型，目前该项取值可以为<code>PRIVATE_SNAPSHOT</code>（私有快照）或者<code>SHARED_SNAPSHOT</code>（共享快照）</p>
 * @method void setSnapshotType(string $SnapshotType) 设置<p>快照类型，目前该项取值可以为<code>PRIVATE_SNAPSHOT</code>（私有快照）或者<code>SHARED_SNAPSHOT</code>（共享快照）</p>
 * @method integer getDiskSize() 获取<p>创建此快照的云硬盘大小，单位GiB。</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>创建此快照的云硬盘大小，单位GiB。</p>
 * @method string getDiskId() 获取<p>创建此快照的云硬盘ID。</p>
 * @method void setDiskId(string $DiskId) 设置<p>创建此快照的云硬盘ID。</p>
 * @method array getCopyingToRegions() 获取<p>快照正在跨地域复制的目的地域，若没有则返回<code>[]</code>。</p>
 * @method void setCopyingToRegions(array $CopyingToRegions) 设置<p>快照正在跨地域复制的目的地域，若没有则返回<code>[]</code>。</p>
 * @method boolean getEncrypt() 获取<p>是否为加密盘创建的快照。取值范围：</p><ul>    <li>true：该快照为加密盘创建的</li>    <li>false：非加密盘创建的快照</li></ul>
 * @method void setEncrypt(boolean $Encrypt) 设置<p>是否为加密盘创建的快照。取值范围：</p><ul>    <li>true：该快照为加密盘创建的</li>    <li>false：非加密盘创建的快照</li></ul>
 * @method string getCreateTime() 获取<p>快照的创建时间。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>快照的创建时间。</p>
 * @method integer getImageCount() 获取<p>快照关联的镜像个数。</p>
 * @method void setImageCount(integer $ImageCount) 设置<p>快照关联的镜像个数。</p>
 * @method string getDiskUsage() 获取<p>创建此快照的云硬盘类型。取值范围：</p><ul>    <li>SYSTEM_DISK：系统盘</li>    <li>DATA_DISK：数据盘</li></ul>
 * @method void setDiskUsage(string $DiskUsage) 设置<p>创建此快照的云硬盘类型。取值范围：</p><ul>    <li>SYSTEM_DISK：系统盘</li>    <li>DATA_DISK：数据盘</li></ul>
 * @method string getSnapshotId() 获取<p>快照ID。</p>
 * @method void setSnapshotId(string $SnapshotId) 设置<p>快照ID。</p>
 * @method string getTimeStartShare() 获取<p>快照开始共享的时间。</p>
 * @method void setTimeStartShare(string $TimeStartShare) 设置<p>快照开始共享的时间。</p>
 * @method array getTags() 获取<p>快照绑定的标签列表。</p>
 * @method void setTags(array $Tags) 设置<p>快照绑定的标签列表。</p>
 * @method boolean getIsLocked() 获取<p>快照是否锁定。取值范围：</p><ul>    <li>true：已锁定</li>    <li>false：未锁定</li></ul>
 * @method void setIsLocked(boolean $IsLocked) 设置<p>快照是否锁定。取值范围：</p><ul>    <li>true：已锁定</li>    <li>false：未锁定</li></ul>
 * @method string getLatestModifyTime() 获取<p>快照记录的最新修改时间</p>
 * @method void setLatestModifyTime(string $LatestModifyTime) 设置<p>快照记录的最新修改时间</p>
 * @method string getAutoSnapshotPolicyId() 获取<p>自动快照策略ID，仅当该快照由自动快照策略方式创建时才会返回。</p>
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) 设置<p>自动快照策略ID，仅当该快照由自动快照策略方式创建时才会返回。</p>
 * @method string getSnapshotMode() 获取<p>快照模式。取值为 INSTANT_SNAPSHOT 表示极速快照，STANDARD_SNAPSHOT 表示普通快照。</p><p>枚举值：</p><ul><li>INSTANT_SNAPSHOT： 极速快照</li><li>STANDARD_SNAPSHOT： 普通快照</li></ul>
 * @method void setSnapshotMode(string $SnapshotMode) 设置<p>快照模式。取值为 INSTANT_SNAPSHOT 表示极速快照，STANDARD_SNAPSHOT 表示普通快照。</p><p>枚举值：</p><ul><li>INSTANT_SNAPSHOT： 极速快照</li><li>STANDARD_SNAPSHOT： 普通快照</li></ul>
 */
class Snapshot extends AbstractModel
{
    /**
     * @var Placement <p>快照所在的位置。</p>
     */
    public $Placement;

    /**
     * @var boolean <p>是否为跨地域复制的快照。取值范围：</p><ul>    <li>true：表示为跨地域复制的快照。</li>    <li>false：本地域的快照。</li></ul>
     */
    public $CopyFromRemote;

    /**
     * @var string <p>快照的状态。取值范围：</p><ul>    <li>NORMAL：正常</li>    <li>CREATING：创建中</li>    <li>ROLLBACKING：回滚中</li>    <li>COPYING_FROM_REMOTE：跨地域复制中</li>    <li>CHECKING_COPIED：复制校验中</li>    <li>TORECYCLE：待回收</li></ul>
     */
    public $SnapshotState;

    /**
     * @var boolean <p>是否为永久快照。取值范围：</p><ul>    <li>true：永久快照</li>    <li>false：非永久快照</li></ul>
     */
    public $IsPermanent;

    /**
     * @var string <p>快照名称，用户自定义的快照别名。调用<a href="/document/product/362/15650">ModifySnapshotAttribute</a>可修改此字段。</p>
     */
    public $SnapshotName;

    /**
     * @var string <p>快照到期时间。如果快照为永久保留，此字段为空。</p>
     */
    public $DeadlineTime;

    /**
     * @var integer <p>快照创建进度百分比，快照创建成功后此字段恒为100。</p>
     */
    public $Percent;

    /**
     * @var array <p>快照关联的镜像列表。</p>
     */
    public $Images;

    /**
     * @var integer <p>快照当前被共享数。</p>
     */
    public $ShareReference;

    /**
     * @var string <p>快照类型，目前该项取值可以为<code>PRIVATE_SNAPSHOT</code>（私有快照）或者<code>SHARED_SNAPSHOT</code>（共享快照）</p>
     */
    public $SnapshotType;

    /**
     * @var integer <p>创建此快照的云硬盘大小，单位GiB。</p>
     */
    public $DiskSize;

    /**
     * @var string <p>创建此快照的云硬盘ID。</p>
     */
    public $DiskId;

    /**
     * @var array <p>快照正在跨地域复制的目的地域，若没有则返回<code>[]</code>。</p>
     */
    public $CopyingToRegions;

    /**
     * @var boolean <p>是否为加密盘创建的快照。取值范围：</p><ul>    <li>true：该快照为加密盘创建的</li>    <li>false：非加密盘创建的快照</li></ul>
     */
    public $Encrypt;

    /**
     * @var string <p>快照的创建时间。</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>快照关联的镜像个数。</p>
     */
    public $ImageCount;

    /**
     * @var string <p>创建此快照的云硬盘类型。取值范围：</p><ul>    <li>SYSTEM_DISK：系统盘</li>    <li>DATA_DISK：数据盘</li></ul>
     */
    public $DiskUsage;

    /**
     * @var string <p>快照ID。</p>
     */
    public $SnapshotId;

    /**
     * @var string <p>快照开始共享的时间。</p>
     */
    public $TimeStartShare;

    /**
     * @var array <p>快照绑定的标签列表。</p>
     */
    public $Tags;

    /**
     * @var boolean <p>快照是否锁定。取值范围：</p><ul>    <li>true：已锁定</li>    <li>false：未锁定</li></ul>
     */
    public $IsLocked;

    /**
     * @var string <p>快照记录的最新修改时间</p>
     */
    public $LatestModifyTime;

    /**
     * @var string <p>自动快照策略ID，仅当该快照由自动快照策略方式创建时才会返回。</p>
     */
    public $AutoSnapshotPolicyId;

    /**
     * @var string <p>快照模式。取值为 INSTANT_SNAPSHOT 表示极速快照，STANDARD_SNAPSHOT 表示普通快照。</p><p>枚举值：</p><ul><li>INSTANT_SNAPSHOT： 极速快照</li><li>STANDARD_SNAPSHOT： 普通快照</li></ul>
     */
    public $SnapshotMode;

    /**
     * @param Placement $Placement <p>快照所在的位置。</p>
     * @param boolean $CopyFromRemote <p>是否为跨地域复制的快照。取值范围：</p><ul>    <li>true：表示为跨地域复制的快照。</li>    <li>false：本地域的快照。</li></ul>
     * @param string $SnapshotState <p>快照的状态。取值范围：</p><ul>    <li>NORMAL：正常</li>    <li>CREATING：创建中</li>    <li>ROLLBACKING：回滚中</li>    <li>COPYING_FROM_REMOTE：跨地域复制中</li>    <li>CHECKING_COPIED：复制校验中</li>    <li>TORECYCLE：待回收</li></ul>
     * @param boolean $IsPermanent <p>是否为永久快照。取值范围：</p><ul>    <li>true：永久快照</li>    <li>false：非永久快照</li></ul>
     * @param string $SnapshotName <p>快照名称，用户自定义的快照别名。调用<a href="/document/product/362/15650">ModifySnapshotAttribute</a>可修改此字段。</p>
     * @param string $DeadlineTime <p>快照到期时间。如果快照为永久保留，此字段为空。</p>
     * @param integer $Percent <p>快照创建进度百分比，快照创建成功后此字段恒为100。</p>
     * @param array $Images <p>快照关联的镜像列表。</p>
     * @param integer $ShareReference <p>快照当前被共享数。</p>
     * @param string $SnapshotType <p>快照类型，目前该项取值可以为<code>PRIVATE_SNAPSHOT</code>（私有快照）或者<code>SHARED_SNAPSHOT</code>（共享快照）</p>
     * @param integer $DiskSize <p>创建此快照的云硬盘大小，单位GiB。</p>
     * @param string $DiskId <p>创建此快照的云硬盘ID。</p>
     * @param array $CopyingToRegions <p>快照正在跨地域复制的目的地域，若没有则返回<code>[]</code>。</p>
     * @param boolean $Encrypt <p>是否为加密盘创建的快照。取值范围：</p><ul>    <li>true：该快照为加密盘创建的</li>    <li>false：非加密盘创建的快照</li></ul>
     * @param string $CreateTime <p>快照的创建时间。</p>
     * @param integer $ImageCount <p>快照关联的镜像个数。</p>
     * @param string $DiskUsage <p>创建此快照的云硬盘类型。取值范围：</p><ul>    <li>SYSTEM_DISK：系统盘</li>    <li>DATA_DISK：数据盘</li></ul>
     * @param string $SnapshotId <p>快照ID。</p>
     * @param string $TimeStartShare <p>快照开始共享的时间。</p>
     * @param array $Tags <p>快照绑定的标签列表。</p>
     * @param boolean $IsLocked <p>快照是否锁定。取值范围：</p><ul>    <li>true：已锁定</li>    <li>false：未锁定</li></ul>
     * @param string $LatestModifyTime <p>快照记录的最新修改时间</p>
     * @param string $AutoSnapshotPolicyId <p>自动快照策略ID，仅当该快照由自动快照策略方式创建时才会返回。</p>
     * @param string $SnapshotMode <p>快照模式。取值为 INSTANT_SNAPSHOT 表示极速快照，STANDARD_SNAPSHOT 表示普通快照。</p><p>枚举值：</p><ul><li>INSTANT_SNAPSHOT： 极速快照</li><li>STANDARD_SNAPSHOT： 普通快照</li></ul>
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
        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("CopyFromRemote",$param) and $param["CopyFromRemote"] !== null) {
            $this->CopyFromRemote = $param["CopyFromRemote"];
        }

        if (array_key_exists("SnapshotState",$param) and $param["SnapshotState"] !== null) {
            $this->SnapshotState = $param["SnapshotState"];
        }

        if (array_key_exists("IsPermanent",$param) and $param["IsPermanent"] !== null) {
            $this->IsPermanent = $param["IsPermanent"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = [];
            foreach ($param["Images"] as $key => $value){
                $obj = new Image();
                $obj->deserialize($value);
                array_push($this->Images, $obj);
            }
        }

        if (array_key_exists("ShareReference",$param) and $param["ShareReference"] !== null) {
            $this->ShareReference = $param["ShareReference"];
        }

        if (array_key_exists("SnapshotType",$param) and $param["SnapshotType"] !== null) {
            $this->SnapshotType = $param["SnapshotType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("CopyingToRegions",$param) and $param["CopyingToRegions"] !== null) {
            $this->CopyingToRegions = $param["CopyingToRegions"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ImageCount",$param) and $param["ImageCount"] !== null) {
            $this->ImageCount = $param["ImageCount"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("TimeStartShare",$param) and $param["TimeStartShare"] !== null) {
            $this->TimeStartShare = $param["TimeStartShare"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("IsLocked",$param) and $param["IsLocked"] !== null) {
            $this->IsLocked = $param["IsLocked"];
        }

        if (array_key_exists("LatestModifyTime",$param) and $param["LatestModifyTime"] !== null) {
            $this->LatestModifyTime = $param["LatestModifyTime"];
        }

        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            $this->AutoSnapshotPolicyId = $param["AutoSnapshotPolicyId"];
        }

        if (array_key_exists("SnapshotMode",$param) and $param["SnapshotMode"] !== null) {
            $this->SnapshotMode = $param["SnapshotMode"];
        }
    }
}
