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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回调事件内容。
 *
 * @method string getEventType() 获取事件类型，可取值有：
<li>Storage.NewFileCreated：新文件产生事件；</li>
<li>Project.StreamConnect.StatusChanged：云转推项目状态变更事件；</li>
<li>Project.Switcher.StatusChanged：导播台项目状态变更事件；</li>
<li>Material.Imported：媒体导入事件；</li>
<li>Material.Added：媒体添加事件；</li>
<li>Material.Moved：媒体移动事件；</li>
<li>Material.Modified：媒体变更事件；</li>
<li>Material.Deleted：媒体删除事件；</li>
<li>Class.Created：分类新增事件；</li>
<li>Class.Moved：分类移动事件；</li>
<li>Class.Deleted：分类删除事件；</li>
<li>Task.VideoExportCompleted：视频导出完成事件； </li>
<li>Project.MediaCast.StatusChanged：点播转直播项目状态变更事件。 </li>
 * @method void setEventType(string $EventType) 设置事件类型，可取值有：
<li>Storage.NewFileCreated：新文件产生事件；</li>
<li>Project.StreamConnect.StatusChanged：云转推项目状态变更事件；</li>
<li>Project.Switcher.StatusChanged：导播台项目状态变更事件；</li>
<li>Material.Imported：媒体导入事件；</li>
<li>Material.Added：媒体添加事件；</li>
<li>Material.Moved：媒体移动事件；</li>
<li>Material.Modified：媒体变更事件；</li>
<li>Material.Deleted：媒体删除事件；</li>
<li>Class.Created：分类新增事件；</li>
<li>Class.Moved：分类移动事件；</li>
<li>Class.Deleted：分类删除事件；</li>
<li>Task.VideoExportCompleted：视频导出完成事件； </li>
<li>Project.MediaCast.StatusChanged：点播转直播项目状态变更事件。 </li>
 * @method string getOperator() 获取操作者，表示触发事件的操作者。如果是 `cmeid_system` 表示平台管理员操作。
 * @method void setOperator(string $Operator) 设置操作者，表示触发事件的操作者。如果是 `cmeid_system` 表示平台管理员操作。
 * @method StorageNewFileCreatedEvent getStorageNewFileCreatedEvent() 获取新文件产生事件。仅当 EventType 为 Storage.NewFileCreated 时有效。
 * @method void setStorageNewFileCreatedEvent(StorageNewFileCreatedEvent $StorageNewFileCreatedEvent) 设置新文件产生事件。仅当 EventType 为 Storage.NewFileCreated 时有效。
 * @method ProjectStreamConnectStatusChangedEvent getProjectStreamConnectStatusChangedEvent() 获取云转推项目状态变更事件。仅当 EventType 为 Project.StreamConnect.StatusChanged 时有效。
 * @method void setProjectStreamConnectStatusChangedEvent(ProjectStreamConnectStatusChangedEvent $ProjectStreamConnectStatusChangedEvent) 设置云转推项目状态变更事件。仅当 EventType 为 Project.StreamConnect.StatusChanged 时有效。
 * @method ProjectSwitcherStatusChangedEvent getProjectSwitcherStatusChangedEvent() 获取导播台项目状态变更事件。仅当 EventType 为 Project.Switcher.StatusChanged 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectSwitcherStatusChangedEvent(ProjectSwitcherStatusChangedEvent $ProjectSwitcherStatusChangedEvent) 设置导播台项目状态变更事件。仅当 EventType 为 Project.Switcher.StatusChanged 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MaterialImportedEvent getMaterialImportedEvent() 获取媒体导入事件。仅当 EventType 为 Material.Imported 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaterialImportedEvent(MaterialImportedEvent $MaterialImportedEvent) 设置媒体导入事件。仅当 EventType 为 Material.Imported 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MaterialAddedEvent getMaterialAddedEvent() 获取媒体添加事件。仅当 EventType 为 Material.Added 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaterialAddedEvent(MaterialAddedEvent $MaterialAddedEvent) 设置媒体添加事件。仅当 EventType 为 Material.Added 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MaterialMovedEvent getMaterialMovedEvent() 获取媒体移动事件。仅当 EventType 为 Material.Moved 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaterialMovedEvent(MaterialMovedEvent $MaterialMovedEvent) 设置媒体移动事件。仅当 EventType 为 Material.Moved 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MaterialModifiedEvent getMaterialModifiedEvent() 获取媒体更新事件。仅当 EventType 为 Material.Modified 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaterialModifiedEvent(MaterialModifiedEvent $MaterialModifiedEvent) 设置媒体更新事件。仅当 EventType 为 Material.Modified 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MaterialDeletedEvent getMaterialDeletedEvent() 获取媒体删除事件。仅当 EventType 为 Material.Deleted 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaterialDeletedEvent(MaterialDeletedEvent $MaterialDeletedEvent) 设置媒体删除事件。仅当 EventType 为 Material.Deleted 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClassCreatedEvent getClassCreatedEvent() 获取分类创建事件。仅当 EventType 为 Class.Created 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassCreatedEvent(ClassCreatedEvent $ClassCreatedEvent) 设置分类创建事件。仅当 EventType 为 Class.Created 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClassMovedEvent getClassMovedEvent() 获取分类移动事件。仅当 EventType 为 Class.Moved 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassMovedEvent(ClassMovedEvent $ClassMovedEvent) 设置分类移动事件。仅当 EventType 为 Class.Moved 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClassDeletedEvent getClassDeletedEvent() 获取分类删除事件。仅当 EventType 为 Class.Deleted 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassDeletedEvent(ClassDeletedEvent $ClassDeletedEvent) 设置分类删除事件。仅当 EventType 为 Class.Deleted 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method VideoExportCompletedEvent getVideoExportCompletedEvent() 获取视频导出完成事件。仅当 EventType 为 Task.VideoExportCompleted 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoExportCompletedEvent(VideoExportCompletedEvent $VideoExportCompletedEvent) 设置视频导出完成事件。仅当 EventType 为 Task.VideoExportCompleted 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ProjectMediaCastStatusChangedEvent getProjectMediaCastStatusChangedEvent() 获取点播转直播项目状态变更事件。仅当 EventType 为 Project.MediaCast.StatusChanged 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectMediaCastStatusChangedEvent(ProjectMediaCastStatusChangedEvent $ProjectMediaCastStatusChangedEvent) 设置点播转直播项目状态变更事件。仅当 EventType 为 Project.MediaCast.StatusChanged 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 */
class EventContent extends AbstractModel
{
    /**
     * @var string 事件类型，可取值有：
<li>Storage.NewFileCreated：新文件产生事件；</li>
<li>Project.StreamConnect.StatusChanged：云转推项目状态变更事件；</li>
<li>Project.Switcher.StatusChanged：导播台项目状态变更事件；</li>
<li>Material.Imported：媒体导入事件；</li>
<li>Material.Added：媒体添加事件；</li>
<li>Material.Moved：媒体移动事件；</li>
<li>Material.Modified：媒体变更事件；</li>
<li>Material.Deleted：媒体删除事件；</li>
<li>Class.Created：分类新增事件；</li>
<li>Class.Moved：分类移动事件；</li>
<li>Class.Deleted：分类删除事件；</li>
<li>Task.VideoExportCompleted：视频导出完成事件； </li>
<li>Project.MediaCast.StatusChanged：点播转直播项目状态变更事件。 </li>
     */
    public $EventType;

    /**
     * @var string 操作者，表示触发事件的操作者。如果是 `cmeid_system` 表示平台管理员操作。
     */
    public $Operator;

    /**
     * @var StorageNewFileCreatedEvent 新文件产生事件。仅当 EventType 为 Storage.NewFileCreated 时有效。
     */
    public $StorageNewFileCreatedEvent;

    /**
     * @var ProjectStreamConnectStatusChangedEvent 云转推项目状态变更事件。仅当 EventType 为 Project.StreamConnect.StatusChanged 时有效。
     */
    public $ProjectStreamConnectStatusChangedEvent;

    /**
     * @var ProjectSwitcherStatusChangedEvent 导播台项目状态变更事件。仅当 EventType 为 Project.Switcher.StatusChanged 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectSwitcherStatusChangedEvent;

    /**
     * @var MaterialImportedEvent 媒体导入事件。仅当 EventType 为 Material.Imported 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaterialImportedEvent;

    /**
     * @var MaterialAddedEvent 媒体添加事件。仅当 EventType 为 Material.Added 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaterialAddedEvent;

    /**
     * @var MaterialMovedEvent 媒体移动事件。仅当 EventType 为 Material.Moved 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaterialMovedEvent;

    /**
     * @var MaterialModifiedEvent 媒体更新事件。仅当 EventType 为 Material.Modified 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaterialModifiedEvent;

    /**
     * @var MaterialDeletedEvent 媒体删除事件。仅当 EventType 为 Material.Deleted 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaterialDeletedEvent;

    /**
     * @var ClassCreatedEvent 分类创建事件。仅当 EventType 为 Class.Created 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassCreatedEvent;

    /**
     * @var ClassMovedEvent 分类移动事件。仅当 EventType 为 Class.Moved 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassMovedEvent;

    /**
     * @var ClassDeletedEvent 分类删除事件。仅当 EventType 为 Class.Deleted 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassDeletedEvent;

    /**
     * @var VideoExportCompletedEvent 视频导出完成事件。仅当 EventType 为 Task.VideoExportCompleted 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoExportCompletedEvent;

    /**
     * @var ProjectMediaCastStatusChangedEvent 点播转直播项目状态变更事件。仅当 EventType 为 Project.MediaCast.StatusChanged 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectMediaCastStatusChangedEvent;

    /**
     * @param string $EventType 事件类型，可取值有：
<li>Storage.NewFileCreated：新文件产生事件；</li>
<li>Project.StreamConnect.StatusChanged：云转推项目状态变更事件；</li>
<li>Project.Switcher.StatusChanged：导播台项目状态变更事件；</li>
<li>Material.Imported：媒体导入事件；</li>
<li>Material.Added：媒体添加事件；</li>
<li>Material.Moved：媒体移动事件；</li>
<li>Material.Modified：媒体变更事件；</li>
<li>Material.Deleted：媒体删除事件；</li>
<li>Class.Created：分类新增事件；</li>
<li>Class.Moved：分类移动事件；</li>
<li>Class.Deleted：分类删除事件；</li>
<li>Task.VideoExportCompleted：视频导出完成事件； </li>
<li>Project.MediaCast.StatusChanged：点播转直播项目状态变更事件。 </li>
     * @param string $Operator 操作者，表示触发事件的操作者。如果是 `cmeid_system` 表示平台管理员操作。
     * @param StorageNewFileCreatedEvent $StorageNewFileCreatedEvent 新文件产生事件。仅当 EventType 为 Storage.NewFileCreated 时有效。
     * @param ProjectStreamConnectStatusChangedEvent $ProjectStreamConnectStatusChangedEvent 云转推项目状态变更事件。仅当 EventType 为 Project.StreamConnect.StatusChanged 时有效。
     * @param ProjectSwitcherStatusChangedEvent $ProjectSwitcherStatusChangedEvent 导播台项目状态变更事件。仅当 EventType 为 Project.Switcher.StatusChanged 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MaterialImportedEvent $MaterialImportedEvent 媒体导入事件。仅当 EventType 为 Material.Imported 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MaterialAddedEvent $MaterialAddedEvent 媒体添加事件。仅当 EventType 为 Material.Added 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MaterialMovedEvent $MaterialMovedEvent 媒体移动事件。仅当 EventType 为 Material.Moved 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MaterialModifiedEvent $MaterialModifiedEvent 媒体更新事件。仅当 EventType 为 Material.Modified 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MaterialDeletedEvent $MaterialDeletedEvent 媒体删除事件。仅当 EventType 为 Material.Deleted 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClassCreatedEvent $ClassCreatedEvent 分类创建事件。仅当 EventType 为 Class.Created 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClassMovedEvent $ClassMovedEvent 分类移动事件。仅当 EventType 为 Class.Moved 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClassDeletedEvent $ClassDeletedEvent 分类删除事件。仅当 EventType 为 Class.Deleted 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param VideoExportCompletedEvent $VideoExportCompletedEvent 视频导出完成事件。仅当 EventType 为 Task.VideoExportCompleted 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ProjectMediaCastStatusChangedEvent $ProjectMediaCastStatusChangedEvent 点播转直播项目状态变更事件。仅当 EventType 为 Project.MediaCast.StatusChanged 时有效。
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
        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("StorageNewFileCreatedEvent",$param) and $param["StorageNewFileCreatedEvent"] !== null) {
            $this->StorageNewFileCreatedEvent = new StorageNewFileCreatedEvent();
            $this->StorageNewFileCreatedEvent->deserialize($param["StorageNewFileCreatedEvent"]);
        }

        if (array_key_exists("ProjectStreamConnectStatusChangedEvent",$param) and $param["ProjectStreamConnectStatusChangedEvent"] !== null) {
            $this->ProjectStreamConnectStatusChangedEvent = new ProjectStreamConnectStatusChangedEvent();
            $this->ProjectStreamConnectStatusChangedEvent->deserialize($param["ProjectStreamConnectStatusChangedEvent"]);
        }

        if (array_key_exists("ProjectSwitcherStatusChangedEvent",$param) and $param["ProjectSwitcherStatusChangedEvent"] !== null) {
            $this->ProjectSwitcherStatusChangedEvent = new ProjectSwitcherStatusChangedEvent();
            $this->ProjectSwitcherStatusChangedEvent->deserialize($param["ProjectSwitcherStatusChangedEvent"]);
        }

        if (array_key_exists("MaterialImportedEvent",$param) and $param["MaterialImportedEvent"] !== null) {
            $this->MaterialImportedEvent = new MaterialImportedEvent();
            $this->MaterialImportedEvent->deserialize($param["MaterialImportedEvent"]);
        }

        if (array_key_exists("MaterialAddedEvent",$param) and $param["MaterialAddedEvent"] !== null) {
            $this->MaterialAddedEvent = new MaterialAddedEvent();
            $this->MaterialAddedEvent->deserialize($param["MaterialAddedEvent"]);
        }

        if (array_key_exists("MaterialMovedEvent",$param) and $param["MaterialMovedEvent"] !== null) {
            $this->MaterialMovedEvent = new MaterialMovedEvent();
            $this->MaterialMovedEvent->deserialize($param["MaterialMovedEvent"]);
        }

        if (array_key_exists("MaterialModifiedEvent",$param) and $param["MaterialModifiedEvent"] !== null) {
            $this->MaterialModifiedEvent = new MaterialModifiedEvent();
            $this->MaterialModifiedEvent->deserialize($param["MaterialModifiedEvent"]);
        }

        if (array_key_exists("MaterialDeletedEvent",$param) and $param["MaterialDeletedEvent"] !== null) {
            $this->MaterialDeletedEvent = new MaterialDeletedEvent();
            $this->MaterialDeletedEvent->deserialize($param["MaterialDeletedEvent"]);
        }

        if (array_key_exists("ClassCreatedEvent",$param) and $param["ClassCreatedEvent"] !== null) {
            $this->ClassCreatedEvent = new ClassCreatedEvent();
            $this->ClassCreatedEvent->deserialize($param["ClassCreatedEvent"]);
        }

        if (array_key_exists("ClassMovedEvent",$param) and $param["ClassMovedEvent"] !== null) {
            $this->ClassMovedEvent = new ClassMovedEvent();
            $this->ClassMovedEvent->deserialize($param["ClassMovedEvent"]);
        }

        if (array_key_exists("ClassDeletedEvent",$param) and $param["ClassDeletedEvent"] !== null) {
            $this->ClassDeletedEvent = new ClassDeletedEvent();
            $this->ClassDeletedEvent->deserialize($param["ClassDeletedEvent"]);
        }

        if (array_key_exists("VideoExportCompletedEvent",$param) and $param["VideoExportCompletedEvent"] !== null) {
            $this->VideoExportCompletedEvent = new VideoExportCompletedEvent();
            $this->VideoExportCompletedEvent->deserialize($param["VideoExportCompletedEvent"]);
        }

        if (array_key_exists("ProjectMediaCastStatusChangedEvent",$param) and $param["ProjectMediaCastStatusChangedEvent"] !== null) {
            $this->ProjectMediaCastStatusChangedEvent = new ProjectMediaCastStatusChangedEvent();
            $this->ProjectMediaCastStatusChangedEvent->deserialize($param["ProjectMediaCastStatusChangedEvent"]);
        }
    }
}
