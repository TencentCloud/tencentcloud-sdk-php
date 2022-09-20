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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 推送任务详细信息
 *
 * @method string getTaskName() 获取推送任务的任务名称。
 * @method void setTaskName(string $TaskName) 设置推送任务的任务名称。
 * @method string getLogSetRegion() 获取日志集所属的地域。
 * @method void setLogSetRegion(string $LogSetRegion) 设置日志集所属的地域。
 * @method string getEntityType() 获取推送任务的类型。
 * @method void setEntityType(string $EntityType) 设置推送任务的类型。
 * @method array getEntityList() 获取任务实体列表。
 * @method void setEntityList(array $EntityList) 设置任务实体列表。
 * @method string getLogSetId() 获取日志集ID。
 * @method void setLogSetId(string $LogSetId) 设置日志集ID。
 * @method string getLogSetName() 获取日志集名称。
 * @method void setLogSetName(string $LogSetName) 设置日志集名称。
 * @method string getTopicId() 获取推送任务主题ID。
 * @method void setTopicId(string $TopicId) 设置推送任务主题ID。
 * @method string getTopicName() 获取推送任务主题名称。
 * @method void setTopicName(string $TopicName) 设置推送任务主题名称。
 * @method integer getPeriod() 获取推送任务主题保存时间，单位为天。
 * @method void setPeriod(integer $Period) 设置推送任务主题保存时间，单位为天。
 * @method boolean getEnabled() 获取推送任务是否开启。
 * @method void setEnabled(boolean $Enabled) 设置推送任务是否开启。
 * @method string getCreateTime() 获取推送任务创建时间，时间格式为: YYYY-mm-dd HH:MM:SS。
 * @method void setCreateTime(string $CreateTime) 设置推送任务创建时间，时间格式为: YYYY-mm-dd HH:MM:SS。
 * @method string getArea() 获取加速区域，取值有：
<li>mainland：中国大陆境内;</li>
<li>overseas：全球（不含中国大陆）。</li>
 * @method void setArea(string $Area) 设置加速区域，取值有：
<li>mainland：中国大陆境内;</li>
<li>overseas：全球（不含中国大陆）。</li>
 * @method string getZoneId() 获取站点ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneId(string $ZoneId) 设置站点ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZoneName() 获取站点名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneName(string $ZoneName) 设置站点名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeleted() 获取是否被删除了，取值有：
<li>yes: 已经被删除；</li>
<li>no: 没有被删除。</li>
 * @method void setDeleted(string $Deleted) 设置是否被删除了，取值有：
<li>yes: 已经被删除；</li>
<li>no: 没有被删除。</li>
 */
class LogTopicDetailInfo extends AbstractModel
{
    /**
     * @var string 推送任务的任务名称。
     */
    public $TaskName;

    /**
     * @var string 日志集所属的地域。
     */
    public $LogSetRegion;

    /**
     * @var string 推送任务的类型。
     */
    public $EntityType;

    /**
     * @var array 任务实体列表。
     */
    public $EntityList;

    /**
     * @var string 日志集ID。
     */
    public $LogSetId;

    /**
     * @var string 日志集名称。
     */
    public $LogSetName;

    /**
     * @var string 推送任务主题ID。
     */
    public $TopicId;

    /**
     * @var string 推送任务主题名称。
     */
    public $TopicName;

    /**
     * @var integer 推送任务主题保存时间，单位为天。
     */
    public $Period;

    /**
     * @var boolean 推送任务是否开启。
     */
    public $Enabled;

    /**
     * @var string 推送任务创建时间，时间格式为: YYYY-mm-dd HH:MM:SS。
     */
    public $CreateTime;

    /**
     * @var string 加速区域，取值有：
<li>mainland：中国大陆境内;</li>
<li>overseas：全球（不含中国大陆）。</li>
     */
    public $Area;

    /**
     * @var string 站点ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneId;

    /**
     * @var string 站点名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneName;

    /**
     * @var string 是否被删除了，取值有：
<li>yes: 已经被删除；</li>
<li>no: 没有被删除。</li>
     */
    public $Deleted;

    /**
     * @param string $TaskName 推送任务的任务名称。
     * @param string $LogSetRegion 日志集所属的地域。
     * @param string $EntityType 推送任务的类型。
     * @param array $EntityList 任务实体列表。
     * @param string $LogSetId 日志集ID。
     * @param string $LogSetName 日志集名称。
     * @param string $TopicId 推送任务主题ID。
     * @param string $TopicName 推送任务主题名称。
     * @param integer $Period 推送任务主题保存时间，单位为天。
     * @param boolean $Enabled 推送任务是否开启。
     * @param string $CreateTime 推送任务创建时间，时间格式为: YYYY-mm-dd HH:MM:SS。
     * @param string $Area 加速区域，取值有：
<li>mainland：中国大陆境内;</li>
<li>overseas：全球（不含中国大陆）。</li>
     * @param string $ZoneId 站点ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ZoneName 站点名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Deleted 是否被删除了，取值有：
<li>yes: 已经被删除；</li>
<li>no: 没有被删除。</li>
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("LogSetRegion",$param) and $param["LogSetRegion"] !== null) {
            $this->LogSetRegion = $param["LogSetRegion"];
        }

        if (array_key_exists("EntityType",$param) and $param["EntityType"] !== null) {
            $this->EntityType = $param["EntityType"];
        }

        if (array_key_exists("EntityList",$param) and $param["EntityList"] !== null) {
            $this->EntityList = $param["EntityList"];
        }

        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("LogSetName",$param) and $param["LogSetName"] !== null) {
            $this->LogSetName = $param["LogSetName"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("Deleted",$param) and $param["Deleted"] !== null) {
            $this->Deleted = $param["Deleted"];
        }
    }
}
