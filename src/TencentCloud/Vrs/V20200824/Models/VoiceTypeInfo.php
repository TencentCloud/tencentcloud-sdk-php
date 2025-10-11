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
namespace TencentCloud\Vrs\V20200824\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 复刻音色详情
 *
 * @method integer getVoiceType() 获取音色id。（若为一句话复刻时，该值为固定值“200000000”）
 * @method void setVoiceType(integer $VoiceType) 设置音色id。（若为一句话复刻时，该值为固定值“200000000”）
 * @method string getVoiceName() 获取音色名称
 * @method void setVoiceName(string $VoiceName) 设置音色名称
 * @method integer getVoiceGender() 获取音色性别: 1-male 2-female
 * @method void setVoiceGender(integer $VoiceGender) 设置音色性别: 1-male 2-female
 * @method integer getTaskType() 获取复刻类型: 1-基础版复刻
 * @method void setTaskType(integer $TaskType) 设置复刻类型: 1-基础版复刻
 * @method string getTaskID() 获取复刻任务 ID
 * @method void setTaskID(string $TaskID) 设置复刻任务 ID
 * @method string getDateCreated() 获取创建时间
 * @method void setDateCreated(string $DateCreated) 设置创建时间
 * @method boolean getIsDeployed() 获取部署状态。若已部署，则可通过语音合成接口调用该音色
 * @method void setIsDeployed(boolean $IsDeployed) 设置部署状态。若已部署，则可通过语音合成接口调用该音色
 * @method string getExpireTime() 获取任务过期时间。（当复刻类型为一句话复刻时展示）

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置任务过期时间。（当复刻类型为一句话复刻时展示）

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFastVoiceType() 获取快速复刻音色ID。（当复刻类型为一句话复刻时展示）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFastVoiceType(string $FastVoiceType) 设置快速复刻音色ID。（当复刻类型为一句话复刻时展示）
注意：此字段可能返回 null，表示取不到有效值。
 */
class VoiceTypeInfo extends AbstractModel
{
    /**
     * @var integer 音色id。（若为一句话复刻时，该值为固定值“200000000”）
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
     * @var integer 复刻类型: 1-基础版复刻
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
     * @var string 任务过期时间。（当复刻类型为一句话复刻时展示）

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string 快速复刻音色ID。（当复刻类型为一句话复刻时展示）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FastVoiceType;

    /**
     * @param integer $VoiceType 音色id。（若为一句话复刻时，该值为固定值“200000000”）
     * @param string $VoiceName 音色名称
     * @param integer $VoiceGender 音色性别: 1-male 2-female
     * @param integer $TaskType 复刻类型: 1-基础版复刻
     * @param string $TaskID 复刻任务 ID
     * @param string $DateCreated 创建时间
     * @param boolean $IsDeployed 部署状态。若已部署，则可通过语音合成接口调用该音色
     * @param string $ExpireTime 任务过期时间。（当复刻类型为一句话复刻时展示）

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FastVoiceType 快速复刻音色ID。（当复刻类型为一句话复刻时展示）
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

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("FastVoiceType",$param) and $param["FastVoiceType"] !== null) {
            $this->FastVoiceType = $param["FastVoiceType"];
        }
    }
}
