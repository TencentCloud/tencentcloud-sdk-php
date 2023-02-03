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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 时移流。
 *
 * @method string getDomainGroup() 获取推流域名所属组。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomainGroup(string $DomainGroup) 设置推流域名所属组。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomain() 获取推流域名。
 * @method void setDomain(string $Domain) 设置推流域名。
 * @method string getAppName() 获取推流路径。
 * @method void setAppName(string $AppName) 设置推流路径。
 * @method string getStreamName() 获取流名称。
 * @method void setStreamName(string $StreamName) 设置流名称。
 * @method integer getStartTime() 获取流起始时间，Unix 时间戳。
 * @method void setStartTime(integer $StartTime) 设置流起始时间，Unix 时间戳。
 * @method integer getEndTime() 获取截止查询时流结束时间，Unix 时间戳。
 * @method void setEndTime(integer $EndTime) 设置截止查询时流结束时间，Unix 时间戳。
 * @method integer getTransCodeId() 获取转码模板ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransCodeId(integer $TransCodeId) 设置转码模板ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStreamType() 获取流类型，取值0为原始流，1为水印流，2为转码流。
 * @method void setStreamType(integer $StreamType) 设置流类型，取值0为原始流，1为水印流，2为转码流。
 * @method integer getDuration() 获取时移数据存储时长，单位秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(integer $Duration) 设置时移数据存储时长，单位秒。
注意：此字段可能返回 null，表示取不到有效值。
 */
class TimeShiftStreamInfo extends AbstractModel
{
    /**
     * @var string 推流域名所属组。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomainGroup;

    /**
     * @var string 推流域名。
     */
    public $Domain;

    /**
     * @var string 推流路径。
     */
    public $AppName;

    /**
     * @var string 流名称。
     */
    public $StreamName;

    /**
     * @var integer 流起始时间，Unix 时间戳。
     */
    public $StartTime;

    /**
     * @var integer 截止查询时流结束时间，Unix 时间戳。
     */
    public $EndTime;

    /**
     * @var integer 转码模板ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransCodeId;

    /**
     * @var integer 流类型，取值0为原始流，1为水印流，2为转码流。
     */
    public $StreamType;

    /**
     * @var integer 时移数据存储时长，单位秒。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @param string $DomainGroup 推流域名所属组。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Domain 推流域名。
     * @param string $AppName 推流路径。
     * @param string $StreamName 流名称。
     * @param integer $StartTime 流起始时间，Unix 时间戳。
     * @param integer $EndTime 截止查询时流结束时间，Unix 时间戳。
     * @param integer $TransCodeId 转码模板ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StreamType 流类型，取值0为原始流，1为水印流，2为转码流。
     * @param integer $Duration 时移数据存储时长，单位秒。
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
        if (array_key_exists("DomainGroup",$param) and $param["DomainGroup"] !== null) {
            $this->DomainGroup = $param["DomainGroup"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TransCodeId",$param) and $param["TransCodeId"] !== null) {
            $this->TransCodeId = $param["TransCodeId"];
        }

        if (array_key_exists("StreamType",$param) and $param["StreamType"] !== null) {
            $this->StreamType = $param["StreamType"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
