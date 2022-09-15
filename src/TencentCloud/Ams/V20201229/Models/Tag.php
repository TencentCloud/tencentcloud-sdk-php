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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音频切片识别标签
 *
 * @method string getName() 获取根据Label字段确定具体名称：
当Label 为Teenager 时 Name可能取值有：Teenager 
当Label 为Gender 时 Name可能取值有：Male 、Female
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置根据Label字段确定具体名称：
当Label 为Teenager 时 Name可能取值有：Teenager 
当Label 为Gender 时 Name可能取值有：Male 、Female
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScore() 获取置信分：0～100，数值越大表示置信度越高
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScore(integer $Score) 设置置信分：0～100，数值越大表示置信度越高
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getStartTime() 获取识别开始偏移时间，单位：毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(float $StartTime) 设置识别开始偏移时间，单位：毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getEndTime() 获取识别结束偏移时间，单位：毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(float $EndTime) 设置识别结束偏移时间，单位：毫秒
注意：此字段可能返回 null，表示取不到有效值。
 */
class Tag extends AbstractModel
{
    /**
     * @var string 根据Label字段确定具体名称：
当Label 为Teenager 时 Name可能取值有：Teenager 
当Label 为Gender 时 Name可能取值有：Male 、Female
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 置信分：0～100，数值越大表示置信度越高
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Score;

    /**
     * @var float 识别开始偏移时间，单位：毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var float 识别结束偏移时间，单位：毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @param string $Name 根据Label字段确定具体名称：
当Label 为Teenager 时 Name可能取值有：Teenager 
当Label 为Gender 时 Name可能取值有：Male 、Female
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Score 置信分：0～100，数值越大表示置信度越高
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $StartTime 识别开始偏移时间，单位：毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $EndTime 识别结束偏移时间，单位：毫秒
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
