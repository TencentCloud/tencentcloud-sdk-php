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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 录制计划详情
 *
 * @method string getPlanId() 获取计划ID
 * @method void setPlanId(string $PlanId) 设置计划ID
 * @method string getName() 获取计划名称
 * @method void setName(string $Name) 设置计划名称
 * @method string getTimeTemplateId() 获取时间模板ID
 * @method void setTimeTemplateId(string $TimeTemplateId) 设置时间模板ID
 * @method string getTimeTemplateName() 获取时间模板名称
 * @method void setTimeTemplateName(string $TimeTemplateName) 设置时间模板名称
 * @method array getChannels() 获取绑定的通道列表
 * @method void setChannels(array $Channels) 设置绑定的通道列表
 * @method integer getRecordStorageTime() 获取存储周期（天）
 * @method void setRecordStorageTime(integer $RecordStorageTime) 设置存储周期（天）
 */
class RecordPlanDetail extends AbstractModel
{
    /**
     * @var string 计划ID
     */
    public $PlanId;

    /**
     * @var string 计划名称
     */
    public $Name;

    /**
     * @var string 时间模板ID
     */
    public $TimeTemplateId;

    /**
     * @var string 时间模板名称
     */
    public $TimeTemplateName;

    /**
     * @var array 绑定的通道列表
     */
    public $Channels;

    /**
     * @var integer 存储周期（天）
     */
    public $RecordStorageTime;

    /**
     * @param string $PlanId 计划ID
     * @param string $Name 计划名称
     * @param string $TimeTemplateId 时间模板ID
     * @param string $TimeTemplateName 时间模板名称
     * @param array $Channels 绑定的通道列表
     * @param integer $RecordStorageTime 存储周期（天）
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
        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TimeTemplateId",$param) and $param["TimeTemplateId"] !== null) {
            $this->TimeTemplateId = $param["TimeTemplateId"];
        }

        if (array_key_exists("TimeTemplateName",$param) and $param["TimeTemplateName"] !== null) {
            $this->TimeTemplateName = $param["TimeTemplateName"];
        }

        if (array_key_exists("Channels",$param) and $param["Channels"] !== null) {
            $this->Channels = [];
            foreach ($param["Channels"] as $key => $value){
                $obj = new ChannelItem();
                $obj->deserialize($value);
                array_push($this->Channels, $obj);
            }
        }

        if (array_key_exists("RecordStorageTime",$param) and $param["RecordStorageTime"] !== null) {
            $this->RecordStorageTime = $param["RecordStorageTime"];
        }
    }
}
