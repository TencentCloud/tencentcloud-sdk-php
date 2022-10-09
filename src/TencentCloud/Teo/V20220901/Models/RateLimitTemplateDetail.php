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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模板当前详细配置
 *
 * @method string getMode() 获取模板等级名称，取值有：
<li>sup_loose：超级宽松；</li>
<li>loose：宽松；</li>
<li>emergency：紧急；</li>
<li>normal：适中；</li>
<li>strict：严格；</li>
<li>close：关闭，仅精准速率限制生效。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMode(string $Mode) 设置模板等级名称，取值有：
<li>sup_loose：超级宽松；</li>
<li>loose：宽松；</li>
<li>emergency：紧急；</li>
<li>normal：适中；</li>
<li>strict：严格；</li>
<li>close：关闭，仅精准速率限制生效。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getID() 获取唯一id。
 * @method void setID(integer $ID) 设置唯一id。
 * @method string getAction() 获取模板处置方式，取值有：
<li>alg：JavaScript挑战；</li>
<li>monitor：观察。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAction(string $Action) 设置模板处置方式，取值有：
<li>alg：JavaScript挑战；</li>
<li>monitor：观察。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPunishTime() 获取惩罚时间，取值范围0-2天，单位秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPunishTime(integer $PunishTime) 设置惩罚时间，取值范围0-2天，单位秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getThreshold() 获取统计阈值，单位是次，取值范围0-4294967294。
 * @method void setThreshold(integer $Threshold) 设置统计阈值，单位是次，取值范围0-4294967294。
 * @method integer getPeriod() 获取统计周期，取值范围0-120秒。
 * @method void setPeriod(integer $Period) 设置统计周期，取值范围0-120秒。
 */
class RateLimitTemplateDetail extends AbstractModel
{
    /**
     * @var string 模板等级名称，取值有：
<li>sup_loose：超级宽松；</li>
<li>loose：宽松；</li>
<li>emergency：紧急；</li>
<li>normal：适中；</li>
<li>strict：严格；</li>
<li>close：关闭，仅精准速率限制生效。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mode;

    /**
     * @var integer 唯一id。
     */
    public $ID;

    /**
     * @var string 模板处置方式，取值有：
<li>alg：JavaScript挑战；</li>
<li>monitor：观察。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Action;

    /**
     * @var integer 惩罚时间，取值范围0-2天，单位秒。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PunishTime;

    /**
     * @var integer 统计阈值，单位是次，取值范围0-4294967294。
     */
    public $Threshold;

    /**
     * @var integer 统计周期，取值范围0-120秒。
     */
    public $Period;

    /**
     * @param string $Mode 模板等级名称，取值有：
<li>sup_loose：超级宽松；</li>
<li>loose：宽松；</li>
<li>emergency：紧急；</li>
<li>normal：适中；</li>
<li>strict：严格；</li>
<li>close：关闭，仅精准速率限制生效。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ID 唯一id。
     * @param string $Action 模板处置方式，取值有：
<li>alg：JavaScript挑战；</li>
<li>monitor：观察。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PunishTime 惩罚时间，取值范围0-2天，单位秒。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Threshold 统计阈值，单位是次，取值范围0-4294967294。
     * @param integer $Period 统计周期，取值范围0-120秒。
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("PunishTime",$param) and $param["PunishTime"] !== null) {
            $this->PunishTime = $param["PunishTime"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }
    }
}
