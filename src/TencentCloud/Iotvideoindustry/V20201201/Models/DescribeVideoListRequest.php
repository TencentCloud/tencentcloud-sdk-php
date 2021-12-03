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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVideoList请求参数结构体
 *
 * @method integer getOffset() 获取偏移
 * @method void setOffset(integer $Offset) 设置偏移
 * @method integer getLimit() 获取限制
 * @method void setLimit(integer $Limit) 设置限制
 * @method integer getStartTime() 获取开始时间戳，秒级
 * @method void setStartTime(integer $StartTime) 设置开始时间戳，秒级
 * @method integer getEndTime() 获取结束时间戳，秒级
 * @method void setEndTime(integer $EndTime) 设置结束时间戳，秒级
 * @method string getDeviceId() 获取设备Id
 * @method void setDeviceId(string $DeviceId) 设置设备Id
 * @method integer getStartRecordTime() 获取开始录制范围 开始
 * @method void setStartRecordTime(integer $StartRecordTime) 设置开始录制范围 开始
 * @method integer getEndRecordTime() 获取开始录制范围 结束
 * @method void setEndRecordTime(integer $EndRecordTime) 设置开始录制范围 结束
 * @method integer getStartExpireTime() 获取过期时间范围 开始
 * @method void setStartExpireTime(integer $StartExpireTime) 设置过期时间范围 开始
 * @method integer getEndExpireTime() 获取过期时间范围 结束
 * @method void setEndExpireTime(integer $EndExpireTime) 设置过期时间范围 结束
 * @method integer getStartFileSize() 获取文件大小范围 开始 单位byte
 * @method void setStartFileSize(integer $StartFileSize) 设置文件大小范围 开始 单位byte
 * @method integer getEndFileSize() 获取文件大小范围 结束 单位byte
 * @method void setEndFileSize(integer $EndFileSize) 设置文件大小范围 结束 单位byte
 * @method integer getIsRecording() 获取录制状态 99: 录制方已经回写状态 1: 开始录制了，等待回写 2: 已经到了时间模板的停止时间，在等待录制方回写
 * @method void setIsRecording(integer $IsRecording) 设置录制状态 99: 录制方已经回写状态 1: 开始录制了，等待回写 2: 已经到了时间模板的停止时间，在等待录制方回写
 * @method string getChannelId() 获取通道ID默认必传
 * @method void setChannelId(string $ChannelId) 设置通道ID默认必传
 * @method string getPlanId() 获取录制计划ID
 * @method void setPlanId(string $PlanId) 设置录制计划ID
 * @method integer getSceneId() 获取场景ID
 * @method void setSceneId(integer $SceneId) 设置场景ID
 * @method integer getWarnId() 获取告警ID
 * @method void setWarnId(integer $WarnId) 设置告警ID
 * @method array getRecordType() 获取录制类型 1: 联动计划录制 2: 告警录制
 * @method void setRecordType(array $RecordType) 设置录制类型 1: 联动计划录制 2: 告警录制
 */
class DescribeVideoListRequest extends AbstractModel
{
    /**
     * @var integer 偏移
     */
    public $Offset;

    /**
     * @var integer 限制
     */
    public $Limit;

    /**
     * @var integer 开始时间戳，秒级
     */
    public $StartTime;

    /**
     * @var integer 结束时间戳，秒级
     */
    public $EndTime;

    /**
     * @var string 设备Id
     */
    public $DeviceId;

    /**
     * @var integer 开始录制范围 开始
     */
    public $StartRecordTime;

    /**
     * @var integer 开始录制范围 结束
     */
    public $EndRecordTime;

    /**
     * @var integer 过期时间范围 开始
     */
    public $StartExpireTime;

    /**
     * @var integer 过期时间范围 结束
     */
    public $EndExpireTime;

    /**
     * @var integer 文件大小范围 开始 单位byte
     */
    public $StartFileSize;

    /**
     * @var integer 文件大小范围 结束 单位byte
     */
    public $EndFileSize;

    /**
     * @var integer 录制状态 99: 录制方已经回写状态 1: 开始录制了，等待回写 2: 已经到了时间模板的停止时间，在等待录制方回写
     */
    public $IsRecording;

    /**
     * @var string 通道ID默认必传
     */
    public $ChannelId;

    /**
     * @var string 录制计划ID
     */
    public $PlanId;

    /**
     * @var integer 场景ID
     */
    public $SceneId;

    /**
     * @var integer 告警ID
     */
    public $WarnId;

    /**
     * @var array 录制类型 1: 联动计划录制 2: 告警录制
     */
    public $RecordType;

    /**
     * @param integer $Offset 偏移
     * @param integer $Limit 限制
     * @param integer $StartTime 开始时间戳，秒级
     * @param integer $EndTime 结束时间戳，秒级
     * @param string $DeviceId 设备Id
     * @param integer $StartRecordTime 开始录制范围 开始
     * @param integer $EndRecordTime 开始录制范围 结束
     * @param integer $StartExpireTime 过期时间范围 开始
     * @param integer $EndExpireTime 过期时间范围 结束
     * @param integer $StartFileSize 文件大小范围 开始 单位byte
     * @param integer $EndFileSize 文件大小范围 结束 单位byte
     * @param integer $IsRecording 录制状态 99: 录制方已经回写状态 1: 开始录制了，等待回写 2: 已经到了时间模板的停止时间，在等待录制方回写
     * @param string $ChannelId 通道ID默认必传
     * @param string $PlanId 录制计划ID
     * @param integer $SceneId 场景ID
     * @param integer $WarnId 告警ID
     * @param array $RecordType 录制类型 1: 联动计划录制 2: 告警录制
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("StartRecordTime",$param) and $param["StartRecordTime"] !== null) {
            $this->StartRecordTime = $param["StartRecordTime"];
        }

        if (array_key_exists("EndRecordTime",$param) and $param["EndRecordTime"] !== null) {
            $this->EndRecordTime = $param["EndRecordTime"];
        }

        if (array_key_exists("StartExpireTime",$param) and $param["StartExpireTime"] !== null) {
            $this->StartExpireTime = $param["StartExpireTime"];
        }

        if (array_key_exists("EndExpireTime",$param) and $param["EndExpireTime"] !== null) {
            $this->EndExpireTime = $param["EndExpireTime"];
        }

        if (array_key_exists("StartFileSize",$param) and $param["StartFileSize"] !== null) {
            $this->StartFileSize = $param["StartFileSize"];
        }

        if (array_key_exists("EndFileSize",$param) and $param["EndFileSize"] !== null) {
            $this->EndFileSize = $param["EndFileSize"];
        }

        if (array_key_exists("IsRecording",$param) and $param["IsRecording"] !== null) {
            $this->IsRecording = $param["IsRecording"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }

        if (array_key_exists("WarnId",$param) and $param["WarnId"] !== null) {
            $this->WarnId = $param["WarnId"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }
    }
}
