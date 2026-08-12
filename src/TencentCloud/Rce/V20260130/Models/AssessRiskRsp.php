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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 事件风险评估返回结果
 *
 * @method Decision getDecision() 获取<p>决策信息</p>
 * @method void setDecision(Decision $Decision) 设置<p>决策信息</p>
 * @method Score getScore() 获取<p>风险分，根据您开启的产品服务计算的评分结果</p>
 * @method void setScore(Score $Score) 设置<p>风险分，根据您开启的产品服务计算的评分结果</p>
 * @method array getExtraInfo() 获取<p>扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraInfo(array $ExtraInfo) 设置<p>扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AssessRiskRsp extends AbstractModel
{
    /**
     * @var Decision <p>决策信息</p>
     */
    public $Decision;

    /**
     * @var Score <p>风险分，根据您开启的产品服务计算的评分结果</p>
     */
    public $Score;

    /**
     * @var array <p>扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraInfo;

    /**
     * @param Decision $Decision <p>决策信息</p>
     * @param Score $Score <p>风险分，根据您开启的产品服务计算的评分结果</p>
     * @param array $ExtraInfo <p>扩展信息</p>
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
        if (array_key_exists("Decision",$param) and $param["Decision"] !== null) {
            $this->Decision = new Decision();
            $this->Decision->deserialize($param["Decision"]);
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = new Score();
            $this->Score->deserialize($param["Score"]);
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = [];
            foreach ($param["ExtraInfo"] as $key => $value){
                $obj = new Cust();
                $obj->deserialize($value);
                array_push($this->ExtraInfo, $obj);
            }
        }
    }
}
