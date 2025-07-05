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
 * CreateSnapshotGroup请求参数结构体
 *
 * @method array getDiskIds() 获取需要创建快照组的云硬盘ID列表，必须选择挂载在同一实例上的盘列表。
 * @method void setDiskIds(array $DiskIds) 设置需要创建快照组的云硬盘ID列表，必须选择挂载在同一实例上的盘列表。
 * @method string getSnapshotGroupName() 获取快照组名称，快照组关联的快照也会继承快照组的名称。例如：快照组名称为testSnapshotGroup，快照组关联两个快照，则两个快照的名称分别为testSnapshotGroup_0，testSnapshotGroup_1。
 * @method void setSnapshotGroupName(string $SnapshotGroupName) 设置快照组名称，快照组关联的快照也会继承快照组的名称。例如：快照组名称为testSnapshotGroup，快照组关联两个快照，则两个快照的名称分别为testSnapshotGroup_0，testSnapshotGroup_1。
 * @method array getTags() 获取快照组需要绑定的标签列表。
 * @method void setTags(array $Tags) 设置快照组需要绑定的标签列表。
 */
class CreateSnapshotGroupRequest extends AbstractModel
{
    /**
     * @var array 需要创建快照组的云硬盘ID列表，必须选择挂载在同一实例上的盘列表。
     */
    public $DiskIds;

    /**
     * @var string 快照组名称，快照组关联的快照也会继承快照组的名称。例如：快照组名称为testSnapshotGroup，快照组关联两个快照，则两个快照的名称分别为testSnapshotGroup_0，testSnapshotGroup_1。
     */
    public $SnapshotGroupName;

    /**
     * @var array 快照组需要绑定的标签列表。
     */
    public $Tags;

    /**
     * @param array $DiskIds 需要创建快照组的云硬盘ID列表，必须选择挂载在同一实例上的盘列表。
     * @param string $SnapshotGroupName 快照组名称，快照组关联的快照也会继承快照组的名称。例如：快照组名称为testSnapshotGroup，快照组关联两个快照，则两个快照的名称分别为testSnapshotGroup_0，testSnapshotGroup_1。
     * @param array $Tags 快照组需要绑定的标签列表。
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
        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }

        if (array_key_exists("SnapshotGroupName",$param) and $param["SnapshotGroupName"] !== null) {
            $this->SnapshotGroupName = $param["SnapshotGroupName"];
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
