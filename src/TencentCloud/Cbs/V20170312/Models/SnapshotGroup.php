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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述快照组详情
 *
 * @method string getSnapshotGroupId() 获取快照组ID。
 * @method void setSnapshotGroupId(string $SnapshotGroupId) 设置快照组ID。
 * @method string getSnapshotGroupType() 获取快照组类型。NORMAL: 普通快照组，非一致性快照。
 * @method void setSnapshotGroupType(string $SnapshotGroupType) 设置快照组类型。NORMAL: 普通快照组，非一致性快照。
 * @method boolean getContainRootSnapshot() 获取快照组是否包含系统盘快照。
 * @method void setContainRootSnapshot(boolean $ContainRootSnapshot) 设置快照组是否包含系统盘快照。
 * @method array getSnapshotIdSet() 获取快照组包含的快照ID列表。
 * @method void setSnapshotIdSet(array $SnapshotIdSet) 设置快照组包含的快照ID列表。
 * @method string getSnapshotGroupState() 获取快照组状态。<br><li>NORMAL: 正常<br><li>CREATING:创建中<br><li>ROLLBACKING:回滚中
 * @method void setSnapshotGroupState(string $SnapshotGroupState) 设置快照组状态。<br><li>NORMAL: 正常<br><li>CREATING:创建中<br><li>ROLLBACKING:回滚中
 * @method integer getPercent() 获取快照组创建进度。
 * @method void setPercent(integer $Percent) 设置快照组创建进度。
 * @method string getCreateTime() 获取快照组创建时间。
 * @method void setCreateTime(string $CreateTime) 设置快照组创建时间。
 * @method string getModifyTime() 获取快照组最新修改时间
 * @method void setModifyTime(string $ModifyTime) 设置快照组最新修改时间
 * @method array getImages() 获取快照组关联的镜像列表。
 * @method void setImages(array $Images) 设置快照组关联的镜像列表。
 * @method string getSnapshotGroupName() 获取快照组名称。
 * @method void setSnapshotGroupName(string $SnapshotGroupName) 设置快照组名称。
 * @method integer getImageCount() 获取快照组关联的镜像数量。
 * @method void setImageCount(integer $ImageCount) 设置快照组关联的镜像数量。
 * @method boolean getIsPermanent() 获取快照组是否永久保留
 * @method void setIsPermanent(boolean $IsPermanent) 设置快照组是否永久保留
 * @method string getDeadlineTime() 获取快照组到期时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeadlineTime(string $DeadlineTime) 设置快照组到期时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SnapshotGroup extends AbstractModel
{
    /**
     * @var string 快照组ID。
     */
    public $SnapshotGroupId;

    /**
     * @var string 快照组类型。NORMAL: 普通快照组，非一致性快照。
     */
    public $SnapshotGroupType;

    /**
     * @var boolean 快照组是否包含系统盘快照。
     */
    public $ContainRootSnapshot;

    /**
     * @var array 快照组包含的快照ID列表。
     */
    public $SnapshotIdSet;

    /**
     * @var string 快照组状态。<br><li>NORMAL: 正常<br><li>CREATING:创建中<br><li>ROLLBACKING:回滚中
     */
    public $SnapshotGroupState;

    /**
     * @var integer 快照组创建进度。
     */
    public $Percent;

    /**
     * @var string 快照组创建时间。
     */
    public $CreateTime;

    /**
     * @var string 快照组最新修改时间
     */
    public $ModifyTime;

    /**
     * @var array 快照组关联的镜像列表。
     */
    public $Images;

    /**
     * @var string 快照组名称。
     */
    public $SnapshotGroupName;

    /**
     * @var integer 快照组关联的镜像数量。
     */
    public $ImageCount;

    /**
     * @var boolean 快照组是否永久保留
     */
    public $IsPermanent;

    /**
     * @var string 快照组到期时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeadlineTime;

    /**
     * @param string $SnapshotGroupId 快照组ID。
     * @param string $SnapshotGroupType 快照组类型。NORMAL: 普通快照组，非一致性快照。
     * @param boolean $ContainRootSnapshot 快照组是否包含系统盘快照。
     * @param array $SnapshotIdSet 快照组包含的快照ID列表。
     * @param string $SnapshotGroupState 快照组状态。<br><li>NORMAL: 正常<br><li>CREATING:创建中<br><li>ROLLBACKING:回滚中
     * @param integer $Percent 快照组创建进度。
     * @param string $CreateTime 快照组创建时间。
     * @param string $ModifyTime 快照组最新修改时间
     * @param array $Images 快照组关联的镜像列表。
     * @param string $SnapshotGroupName 快照组名称。
     * @param integer $ImageCount 快照组关联的镜像数量。
     * @param boolean $IsPermanent 快照组是否永久保留
     * @param string $DeadlineTime 快照组到期时间。
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
        if (array_key_exists("SnapshotGroupId",$param) and $param["SnapshotGroupId"] !== null) {
            $this->SnapshotGroupId = $param["SnapshotGroupId"];
        }

        if (array_key_exists("SnapshotGroupType",$param) and $param["SnapshotGroupType"] !== null) {
            $this->SnapshotGroupType = $param["SnapshotGroupType"];
        }

        if (array_key_exists("ContainRootSnapshot",$param) and $param["ContainRootSnapshot"] !== null) {
            $this->ContainRootSnapshot = $param["ContainRootSnapshot"];
        }

        if (array_key_exists("SnapshotIdSet",$param) and $param["SnapshotIdSet"] !== null) {
            $this->SnapshotIdSet = $param["SnapshotIdSet"];
        }

        if (array_key_exists("SnapshotGroupState",$param) and $param["SnapshotGroupState"] !== null) {
            $this->SnapshotGroupState = $param["SnapshotGroupState"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = [];
            foreach ($param["Images"] as $key => $value){
                $obj = new Image();
                $obj->deserialize($value);
                array_push($this->Images, $obj);
            }
        }

        if (array_key_exists("SnapshotGroupName",$param) and $param["SnapshotGroupName"] !== null) {
            $this->SnapshotGroupName = $param["SnapshotGroupName"];
        }

        if (array_key_exists("ImageCount",$param) and $param["ImageCount"] !== null) {
            $this->ImageCount = $param["ImageCount"];
        }

        if (array_key_exists("IsPermanent",$param) and $param["IsPermanent"] !== null) {
            $this->IsPermanent = $param["IsPermanent"];
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }
    }
}
