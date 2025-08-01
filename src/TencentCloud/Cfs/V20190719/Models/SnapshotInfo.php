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
 * @method string getCreationTime() 获取创建快照时间
 * @method void setCreationTime(string $CreationTime) 设置创建快照时间
 * @method string getSnapshotName() 获取快照名称
 * @method void setSnapshotName(string $SnapshotName) 设置快照名称
 * @method string getSnapshotId() 获取快照ID
 * @method void setSnapshotId(string $SnapshotId) 设置快照ID
 * @method string getStatus() 获取快照状态，creating-创建中；available-运行中；deleting-删除中；rollbacking-new 创建新文件系统中；create-failed 创建失败
 * @method void setStatus(string $Status) 设置快照状态，creating-创建中；available-运行中；deleting-删除中；rollbacking-new 创建新文件系统中；create-failed 创建失败
 * @method string getRegionName() 获取地域名称
 * @method void setRegionName(string $RegionName) 设置地域名称
 * @method string getFileSystemId() 获取文件系统ID
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统ID
 * @method integer getSize() 获取快照大小
 * @method void setSize(integer $Size) 设置快照大小
 * @method integer getAliveDay() 获取保留时长天
 * @method void setAliveDay(integer $AliveDay) 设置保留时长天
 * @method integer getPercent() 获取快照进度百分比，1表示1% 范围1-100
 * @method void setPercent(integer $Percent) 设置快照进度百分比，1表示1% 范围1-100
 * @method integer getAppId() 获取账号ID
 * @method void setAppId(integer $AppId) 设置账号ID
 * @method string getDeleteTime() 获取快照删除时间
 * @method void setDeleteTime(string $DeleteTime) 设置快照删除时间
 * @method string getFsName() 获取文件系统名称
 * @method void setFsName(string $FsName) 设置文件系统名称
 * @method array getTags() 获取快照标签
 * @method void setTags(array $Tags) 设置快照标签
 * @method string getSnapshotType() 获取快照类型，general为通用系列快照，turbo为Turbo系列快照
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotType(string $SnapshotType) 设置快照类型，general为通用系列快照，turbo为Turbo系列快照
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSnapshotTime() 获取实际快照时间，反映快照对应文件系统某个时刻的数据。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotTime(string $SnapshotTime) 设置实际快照时间，反映快照对应文件系统某个时刻的数据。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SnapshotInfo extends AbstractModel
{
    /**
     * @var string 创建快照时间
     */
    public $CreationTime;

    /**
     * @var string 快照名称
     */
    public $SnapshotName;

    /**
     * @var string 快照ID
     */
    public $SnapshotId;

    /**
     * @var string 快照状态，creating-创建中；available-运行中；deleting-删除中；rollbacking-new 创建新文件系统中；create-failed 创建失败
     */
    public $Status;

    /**
     * @var string 地域名称
     */
    public $RegionName;

    /**
     * @var string 文件系统ID
     */
    public $FileSystemId;

    /**
     * @var integer 快照大小
     */
    public $Size;

    /**
     * @var integer 保留时长天
     */
    public $AliveDay;

    /**
     * @var integer 快照进度百分比，1表示1% 范围1-100
     */
    public $Percent;

    /**
     * @var integer 账号ID
     */
    public $AppId;

    /**
     * @var string 快照删除时间
     */
    public $DeleteTime;

    /**
     * @var string 文件系统名称
     */
    public $FsName;

    /**
     * @var array 快照标签
     */
    public $Tags;

    /**
     * @var string 快照类型，general为通用系列快照，turbo为Turbo系列快照
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotType;

    /**
     * @var string 实际快照时间，反映快照对应文件系统某个时刻的数据。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotTime;

    /**
     * @param string $CreationTime 创建快照时间
     * @param string $SnapshotName 快照名称
     * @param string $SnapshotId 快照ID
     * @param string $Status 快照状态，creating-创建中；available-运行中；deleting-删除中；rollbacking-new 创建新文件系统中；create-failed 创建失败
     * @param string $RegionName 地域名称
     * @param string $FileSystemId 文件系统ID
     * @param integer $Size 快照大小
     * @param integer $AliveDay 保留时长天
     * @param integer $Percent 快照进度百分比，1表示1% 范围1-100
     * @param integer $AppId 账号ID
     * @param string $DeleteTime 快照删除时间
     * @param string $FsName 文件系统名称
     * @param array $Tags 快照标签
     * @param string $SnapshotType 快照类型，general为通用系列快照，turbo为Turbo系列快照
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SnapshotTime 实际快照时间，反映快照对应文件系统某个时刻的数据。
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
