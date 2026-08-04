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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流程活动详情
 *
 * @method string getActivityCode() 获取<p>活动编码</p>
 * @method void setActivityCode(string $ActivityCode) 设置<p>活动编码</p>
 * @method integer getStatus() 获取<p>活动状态</p>
 * @method void setStatus(integer $Status) 设置<p>活动状态</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDuration() 获取<p>耗时（秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(integer $Duration) 设置<p>耗时（秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class FlowActivityDetail extends AbstractModel
{
    /**
     * @var string <p>活动编码</p>
     */
    public $ActivityCode;

    /**
     * @var integer <p>活动状态</p>
     */
    public $Status;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer <p>耗时（秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @param string $ActivityCode <p>活动编码</p>
     * @param integer $Status <p>活动状态</p>
     * @param string $CreateTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Duration <p>耗时（秒）</p>
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
        if (array_key_exists("ActivityCode",$param) and $param["ActivityCode"] !== null) {
            $this->ActivityCode = $param["ActivityCode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
