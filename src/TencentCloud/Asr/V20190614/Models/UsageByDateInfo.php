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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户用量信息
 *
 * @method string getBizName() 获取业务类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizName(string $BizName) 设置业务类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取识别次数
单位：次
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置识别次数
单位：次
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDuration() 获取识别时长
单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(integer $Duration) 设置识别时长
单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 */
class UsageByDateInfo extends AbstractModel
{
    /**
     * @var string 业务类型名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizName;

    /**
     * @var integer 识别次数
单位：次
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @var integer 识别时长
单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @param string $BizName 业务类型名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count 识别次数
单位：次
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Duration 识别时长
单位：秒
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
        if (array_key_exists("BizName",$param) and $param["BizName"] !== null) {
            $this->BizName = $param["BizName"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
