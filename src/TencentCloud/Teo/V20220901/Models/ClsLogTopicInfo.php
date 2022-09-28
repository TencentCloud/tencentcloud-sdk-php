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
 * 日志任务主题信息
 *
 * @method string getTaskName() 获取任务名。
 * @method void setTaskName(string $TaskName) 设置任务名。
 * @method string getZoneName() 获取站点名称。
 * @method void setZoneName(string $ZoneName) 设置站点名称。
 * @method string getLogSetId() 获取日志集ID。
 * @method void setLogSetId(string $LogSetId) 设置日志集ID。
 * @method string getTopicId() 获取日志主题ID。
 * @method void setTopicId(string $TopicId) 设置日志主题ID。
 * @method string getEntityType() 获取任务类型。
 * @method void setEntityType(string $EntityType) 设置任务类型。
 * @method integer getPeriod() 获取任务主题保存时间。
 * @method void setPeriod(integer $Period) 设置任务主题保存时间。
 * @method boolean getEnabled() 获取任务主题是否开启。
 * @method void setEnabled(boolean $Enabled) 设置任务主题是否开启。
 * @method string getDeleted() 获取任务主题是否异常。
 * @method void setDeleted(string $Deleted) 设置任务主题是否异常。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method string getTarget() 获取推送目标地址,取值有：
<li>cls: 推送到cls；</li>
<li>custom_enpoint: 自定义推送地址。</li>
 * @method void setTarget(string $Target) 设置推送目标地址,取值有：
<li>cls: 推送到cls；</li>
<li>custom_enpoint: 自定义推送地址。</li>
 * @method string getLogSetRegion() 获取日志集所属地区。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogSetRegion(string $LogSetRegion) 设置日志集所属地区。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZoneId() 获取站点id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneId(string $ZoneId) 设置站点id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getArea() 获取加速区域，取值有：
<li>mainland：中国大陆境内;</li>
<li>overseas：全球（不含中国大陆）。</li>
 * @method void setArea(string $Area) 设置加速区域，取值有：
<li>mainland：中国大陆境内;</li>
<li>overseas：全球（不含中国大陆）。</li>
 * @method string getLogSetType() 获取推送任务类型，取值有：
<li>cls：推送到cls；</li>
<li>custom_endpoint：推送到自定义接口。</li>
 * @method void setLogSetType(string $LogSetType) 设置推送任务类型，取值有：
<li>cls：推送到cls；</li>
<li>custom_endpoint：推送到自定义接口。</li>
 */
class ClsLogTopicInfo extends AbstractModel
{
    /**
     * @var string 任务名。
     */
    public $TaskName;

    /**
     * @var string 站点名称。
     */
    public $ZoneName;

    /**
     * @var string 日志集ID。
     */
    public $LogSetId;

    /**
     * @var string 日志主题ID。
     */
    public $TopicId;

    /**
     * @var string 任务类型。
     */
    public $EntityType;

    /**
     * @var integer 任务主题保存时间。
     */
    public $Period;

    /**
     * @var boolean 任务主题是否开启。
     */
    public $Enabled;

    /**
     * @var string 任务主题是否异常。
     */
    public $Deleted;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var string 推送目标地址,取值有：
<li>cls: 推送到cls；</li>
<li>custom_enpoint: 自定义推送地址。</li>
     */
    public $Target;

    /**
     * @var string 日志集所属地区。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogSetRegion;

    /**
     * @var string 站点id。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneId;

    /**
     * @var string 加速区域，取值有：
<li>mainland：中国大陆境内;</li>
<li>overseas：全球（不含中国大陆）。</li>
     */
    public $Area;

    /**
     * @var string 推送任务类型，取值有：
<li>cls：推送到cls；</li>
<li>custom_endpoint：推送到自定义接口。</li>
     */
    public $LogSetType;

    /**
     * @param string $TaskName 任务名。
     * @param string $ZoneName 站点名称。
     * @param string $LogSetId 日志集ID。
     * @param string $TopicId 日志主题ID。
     * @param string $EntityType 任务类型。
     * @param integer $Period 任务主题保存时间。
     * @param boolean $Enabled 任务主题是否开启。
     * @param string $Deleted 任务主题是否异常。
     * @param string $CreateTime 创建时间。
     * @param string $Target 推送目标地址,取值有：
<li>cls: 推送到cls；</li>
<li>custom_enpoint: 自定义推送地址。</li>
     * @param string $LogSetRegion 日志集所属地区。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ZoneId 站点id。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Area 加速区域，取值有：
<li>mainland：中国大陆境内;</li>
<li>overseas：全球（不含中国大陆）。</li>
     * @param string $LogSetType 推送任务类型，取值有：
<li>cls：推送到cls；</li>
<li>custom_endpoint：推送到自定义接口。</li>
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

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("EntityType",$param) and $param["EntityType"] !== null) {
            $this->EntityType = $param["EntityType"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Deleted",$param) and $param["Deleted"] !== null) {
            $this->Deleted = $param["Deleted"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("LogSetRegion",$param) and $param["LogSetRegion"] !== null) {
            $this->LogSetRegion = $param["LogSetRegion"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("LogSetType",$param) and $param["LogSetType"] !== null) {
            $this->LogSetType = $param["LogSetType"];
        }
    }
}
