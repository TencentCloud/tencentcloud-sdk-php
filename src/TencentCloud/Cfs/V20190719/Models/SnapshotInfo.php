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
 * 快照信息
 *
 * @method string getCreationTime() 获取<p>创建快照时间</p>
 * @method void setCreationTime(string $CreationTime) 设置<p>创建快照时间</p>
 * @method string getSnapshotName() 获取<p>快照名称</p>
 * @method void setSnapshotName(string $SnapshotName) 设置<p>快照名称</p>
 * @method string getSnapshotId() 获取<p>快照ID</p>
 * @method void setSnapshotId(string $SnapshotId) 设置<p>快照ID</p>
 * @method string getStatus() 获取<p>快照状态，creating-创建中；available-运行中；deleting-删除中；rollbacking-new 创建新文件系统中；create-failed 创建失败</p>
 * @method void setStatus(string $Status) 设置<p>快照状态，creating-创建中；available-运行中；deleting-删除中；rollbacking-new 创建新文件系统中；create-failed 创建失败</p>
 * @method string getRegionName() 获取<p>地域名称</p>
 * @method void setRegionName(string $RegionName) 设置<p>地域名称</p>
 * @method string getFileSystemId() 获取<p>文件系统ID</p>
 * @method void setFileSystemId(string $FileSystemId) 设置<p>文件系统ID</p>
 * @method integer getSize() 获取<p>快照大小</p><p>单位：MiB</p>
 * @method void setSize(integer $Size) 设置<p>快照大小</p><p>单位：MiB</p>
 * @method integer getAliveDay() 获取<p>保留时长天</p>
 * @method void setAliveDay(integer $AliveDay) 设置<p>保留时长天</p>
 * @method integer getPercent() 获取<p>快照进度百分比，1表示1% 范围1-100</p>
 * @method void setPercent(integer $Percent) 设置<p>快照进度百分比，1表示1% 范围1-100</p>
 * @method integer getAppId() 获取<p>账号ID</p>
 * @method void setAppId(integer $AppId) 设置<p>账号ID</p>
 * @method string getDeleteTime() 获取<p>快照删除时间</p>
 * @method void setDeleteTime(string $DeleteTime) 设置<p>快照删除时间</p>
 * @method string getFsName() 获取<p>文件系统名称</p>
 * @method void setFsName(string $FsName) 设置<p>文件系统名称</p>
 * @method array getTags() 获取<p>快照标签</p>
 * @method void setTags(array $Tags) 设置<p>快照标签</p>
 * @method string getSnapshotType() 获取<p>快照类型，general为通用系列快照，turbo为Turbo系列快照</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotType(string $SnapshotType) 设置<p>快照类型，general为通用系列快照，turbo为Turbo系列快照</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSnapshotTime() 获取<p>实际快照时间，反映快照对应文件系统某个时刻的数据。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotTime(string $SnapshotTime) 设置<p>实际快照时间，反映快照对应文件系统某个时刻的数据。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class SnapshotInfo extends AbstractModel
{
    /**
     * @var string <p>创建快照时间</p>
     */
    public $CreationTime;

    /**
     * @var string <p>快照名称</p>
     */
    public $SnapshotName;

    /**
     * @var string <p>快照ID</p>
     */
    public $SnapshotId;

    /**
     * @var string <p>快照状态，creating-创建中；available-运行中；deleting-删除中；rollbacking-new 创建新文件系统中；create-failed 创建失败</p>
     */
    public $Status;

    /**
     * @var string <p>地域名称</p>
     */
    public $RegionName;

    /**
     * @var string <p>文件系统ID</p>
     */
    public $FileSystemId;

    /**
     * @var integer <p>快照大小</p><p>单位：MiB</p>
     */
    public $Size;

    /**
     * @var integer <p>保留时长天</p>
     */
    public $AliveDay;

    /**
     * @var integer <p>快照进度百分比，1表示1% 范围1-100</p>
     */
    public $Percent;

    /**
     * @var integer <p>账号ID</p>
     */
    public $AppId;

    /**
     * @var string <p>快照删除时间</p>
     */
    public $DeleteTime;

    /**
     * @var string <p>文件系统名称</p>
     */
    public $FsName;

    /**
     * @var array <p>快照标签</p>
     */
    public $Tags;

    /**
     * @var string <p>快照类型，general为通用系列快照，turbo为Turbo系列快照</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotType;

    /**
     * @var string <p>实际快照时间，反映快照对应文件系统某个时刻的数据。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotTime;

    /**
     * @param string $CreationTime <p>创建快照时间</p>
     * @param string $SnapshotName <p>快照名称</p>
     * @param string $SnapshotId <p>快照ID</p>
     * @param string $Status <p>快照状态，creating-创建中；available-运行中；deleting-删除中；rollbacking-new 创建新文件系统中；create-failed 创建失败</p>
     * @param string $RegionName <p>地域名称</p>
     * @param string $FileSystemId <p>文件系统ID</p>
     * @param integer $Size <p>快照大小</p><p>单位：MiB</p>
     * @param integer $AliveDay <p>保留时长天</p>
     * @param integer $Percent <p>快照进度百分比，1表示1% 范围1-100</p>
     * @param integer $AppId <p>账号ID</p>
     * @param string $DeleteTime <p>快照删除时间</p>
     * @param string $FsName <p>文件系统名称</p>
     * @param array $Tags <p>快照标签</p>
     * @param string $SnapshotType <p>快照类型，general为通用系列快照，turbo为Turbo系列快照</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SnapshotTime <p>实际快照时间，反映快照对应文件系统某个时刻的数据。</p>
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

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("AliveDay",$param) and $param["AliveDay"] !== null) {
            $this->AliveDay = $param["AliveDay"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("DeleteTime",$param) and $param["DeleteTime"] !== null) {
            $this->DeleteTime = $param["DeleteTime"];
        }

        if (array_key_exists("FsName",$param) and $param["FsName"] !== null) {
            $this->FsName = $param["FsName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("SnapshotType",$param) and $param["SnapshotType"] !== null) {
            $this->SnapshotType = $param["SnapshotType"];
        }

        if (array_key_exists("SnapshotTime",$param) and $param["SnapshotTime"] !== null) {
            $this->SnapshotTime = $param["SnapshotTime"];
        }
    }
}
