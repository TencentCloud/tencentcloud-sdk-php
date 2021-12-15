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
 * 场景列表元素
 *
 * @method integer getIntId() 获取场景ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntId(integer $IntId) 设置场景ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取用户UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置用户UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSceneName() 获取场景名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSceneName(string $SceneName) 设置场景名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSceneTrigger() 获取触发规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSceneTrigger(string $SceneTrigger) 设置触发规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRecordDuration() 获取录制时长 秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordDuration(integer $RecordDuration) 设置录制时长 秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStoreDuration() 获取存储时长 天
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStoreDuration(integer $StoreDuration) 设置存储时长 天
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取修改时间
 * @method void setUpdateTime(string $UpdateTime) 设置修改时间
 */
class SceneItem extends AbstractModel
{
    /**
     * @var integer 场景ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntId;

    /**
     * @var string 用户UIN
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string 场景名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SceneName;

    /**
     * @var string 触发规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SceneTrigger;

    /**
     * @var integer 录制时长 秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordDuration;

    /**
     * @var integer 存储时长 天
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StoreDuration;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $UpdateTime;

    /**
     * @param integer $IntId 场景ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 用户UIN
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SceneName 场景名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SceneTrigger 触发规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RecordDuration 录制时长 秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StoreDuration 存储时长 天
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 修改时间
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
        if (array_key_exists("IntId",$param) and $param["IntId"] !== null) {
            $this->IntId = $param["IntId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SceneName",$param) and $param["SceneName"] !== null) {
            $this->SceneName = $param["SceneName"];
        }

        if (array_key_exists("SceneTrigger",$param) and $param["SceneTrigger"] !== null) {
            $this->SceneTrigger = $param["SceneTrigger"];
        }

        if (array_key_exists("RecordDuration",$param) and $param["RecordDuration"] !== null) {
            $this->RecordDuration = $param["RecordDuration"];
        }

        if (array_key_exists("StoreDuration",$param) and $param["StoreDuration"] !== null) {
            $this->StoreDuration = $param["StoreDuration"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
