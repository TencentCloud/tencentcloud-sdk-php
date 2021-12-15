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
 * CreateLiveRecordPlan请求参数结构体
 *
 * @method string getPlanName() 获取录制计划名
 * @method void setPlanName(string $PlanName) 设置录制计划名
 * @method integer getPlanType() 获取计划类型 1：固定直播 2：移动直播
 * @method void setPlanType(integer $PlanType) 设置计划类型 1：固定直播 2：移动直播
 * @method string getTemplateId() 获取时间模板ID,固定直播时为必填
 * @method void setTemplateId(string $TemplateId) 设置时间模板ID,固定直播时为必填
 * @method integer getRecordStorageTime() 获取录制文件存储时长，单位天，默认30天
 * @method void setRecordStorageTime(integer $RecordStorageTime) 设置录制文件存储时长，单位天，默认30天
 * @method array getLiveChannelIds() 获取绑定的直播频道ID列表
 * @method void setLiveChannelIds(array $LiveChannelIds) 设置绑定的直播频道ID列表
 */
class CreateLiveRecordPlanRequest extends AbstractModel
{
    /**
     * @var string 录制计划名
     */
    public $PlanName;

    /**
     * @var integer 计划类型 1：固定直播 2：移动直播
     */
    public $PlanType;

    /**
     * @var string 时间模板ID,固定直播时为必填
     */
    public $TemplateId;

    /**
     * @var integer 录制文件存储时长，单位天，默认30天
     */
    public $RecordStorageTime;

    /**
     * @var array 绑定的直播频道ID列表
     */
    public $LiveChannelIds;

    /**
     * @param string $PlanName 录制计划名
     * @param integer $PlanType 计划类型 1：固定直播 2：移动直播
     * @param string $TemplateId 时间模板ID,固定直播时为必填
     * @param integer $RecordStorageTime 录制文件存储时长，单位天，默认30天
     * @param array $LiveChannelIds 绑定的直播频道ID列表
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
        if (array_key_exists("PlanName",$param) and $param["PlanName"] !== null) {
            $this->PlanName = $param["PlanName"];
        }

        if (array_key_exists("PlanType",$param) and $param["PlanType"] !== null) {
            $this->PlanType = $param["PlanType"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("RecordStorageTime",$param) and $param["RecordStorageTime"] !== null) {
            $this->RecordStorageTime = $param["RecordStorageTime"];
        }

        if (array_key_exists("LiveChannelIds",$param) and $param["LiveChannelIds"] !== null) {
            $this->LiveChannelIds = $param["LiveChannelIds"];
        }
    }
}
