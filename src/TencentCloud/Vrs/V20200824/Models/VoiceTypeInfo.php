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
namespace TencentCloud\Vrs\V20200824\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 复刻音色详情
 *
 * @method integer getVoiceType() 获取音色id
 * @method void setVoiceType(integer $VoiceType) 设置音色id
 * @method string getVoiceName() 获取音色名称
 * @method void setVoiceName(string $VoiceName) 设置音色名称
 * @method integer getVoiceGender() 获取音色性别: 1-male 2-female
 * @method void setVoiceGender(integer $VoiceGender) 设置音色性别: 1-male 2-female
 * @method integer getTaskType() 获取复刻类型: 0-轻量版复刻 1-基础版复刻
 * @method void setTaskType(integer $TaskType) 设置复刻类型: 0-轻量版复刻 1-基础版复刻
 * @method string getTaskID() 获取复刻任务 ID
 * @method void setTaskID(string $TaskID) 设置复刻任务 ID
 * @method string getDateCreated() 获取创建时间
 * @method void setDateCreated(string $DateCreated) 设置创建时间
 * @method boolean getIsDeployed() 获取部署状态。若已部署，则可通过语音合成接口调用该音色
 * @method void setIsDeployed(boolean $IsDeployed) 设置部署状态。若已部署，则可通过语音合成接口调用该音色
 */
class VoiceTypeInfo extends AbstractModel
{
    /**
     * @var integer 音色id
     */
    public $VoiceType;

    /**
     * @var string 音色名称
     */
    public $VoiceName;

    /**
     * @var integer 音色性别: 1-male 2-female
     */
    public $VoiceGender;

    /**
     * @var integer 复刻类型: 0-轻量版复刻 1-基础版复刻
     */
    public $TaskType;

    /**
     * @var string 复刻任务 ID
     */
    public $TaskID;

    /**
     * @var string 创建时间
     */
    public $DateCreated;

    /**
     * @var boolean 部署状态。若已部署，则可通过语音合成接口调用该音色
     */
    public $IsDeployed;

    /**
     * @param integer $VoiceType 音色id
     * @param string $VoiceName 音色名称
     * @param integer $VoiceGender 音色性别: 1-male 2-female
     * @param integer $TaskType 复刻类型: 0-轻量版复刻 1-基础版复刻
     * @param string $TaskID 复刻任务 ID
     * @param string $DateCreated 创建时间
     * @param boolean $IsDeployed 部署状态。若已部署，则可通过语音合成接口调用该音色
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
        if (array_key_exists("VoiceType",$param) and $param["VoiceType"] !== null) {
            $this->VoiceType = $param["VoiceType"];
        }

        if (array_key_exists("VoiceName",$param) and $param["VoiceName"] !== null) {
            $this->VoiceName = $param["VoiceName"];
        }

        if (array_key_exists("VoiceGender",$param) and $param["VoiceGender"] !== null) {
            $this->VoiceGender = $param["VoiceGender"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }

        if (array_key_exists("DateCreated",$param) and $param["DateCreated"] !== null) {
            $this->DateCreated = $param["DateCreated"];
        }

        if (array_key_exists("IsDeployed",$param) and $param["IsDeployed"] !== null) {
            $this->IsDeployed = $param["IsDeployed"];
        }
    }
}
