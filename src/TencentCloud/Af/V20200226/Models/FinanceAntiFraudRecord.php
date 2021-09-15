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
namespace TencentCloud\Af\V20200226\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 借贷反欺查询返回结果出参
 *
 * @method string getFound() 获取表示该条记录能否查到：1为能查到，-1为查不到
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFound(string $Found) 设置表示该条记录能否查到：1为能查到，-1为查不到
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdFound() 获取表示该条Id能否查到：1为能查到，-1为查不到
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdFound(string $IdFound) 设置表示该条Id能否查到：1为能查到，-1为查不到
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskScore() 获取评分0~100;值越高 欺诈可能性越大
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskScore(string $RiskScore) 设置评分0~100;值越高 欺诈可能性越大
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRiskInfo() 获取扩展字段，对风险类型的说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskInfo(array $RiskInfo) 设置扩展字段，对风险类型的说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOtherModelScores() 获取多模型返回结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOtherModelScores(array $OtherModelScores) 设置多模型返回结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCode() 获取业务侧错误码。成功时返回0，错误时返回非0值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(string $Code) 设置业务侧错误码。成功时返回0，错误时返回非0值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取业务侧错误信息。成功时返回Success，错误时返回具体业务错误原因。
注意：此字段可能返回 null，表示取不到有效值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置业务侧错误信息。成功时返回Success，错误时返回具体业务错误原因。
注意：此字段可能返回 null，表示取不到有效值
注意：此字段可能返回 null，表示取不到有效值。
 */
class FinanceAntiFraudRecord extends AbstractModel
{
    /**
     * @var string 表示该条记录能否查到：1为能查到，-1为查不到
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Found;

    /**
     * @var string 表示该条Id能否查到：1为能查到，-1为查不到
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdFound;

    /**
     * @var string 评分0~100;值越高 欺诈可能性越大
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskScore;

    /**
     * @var array 扩展字段，对风险类型的说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskInfo;

    /**
     * @var array 多模型返回结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OtherModelScores;

    /**
     * @var string 业务侧错误码。成功时返回0，错误时返回非0值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var string 业务侧错误信息。成功时返回Success，错误时返回具体业务错误原因。
注意：此字段可能返回 null，表示取不到有效值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @param string $Found 表示该条记录能否查到：1为能查到，-1为查不到
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdFound 表示该条Id能否查到：1为能查到，-1为查不到
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskScore 评分0~100;值越高 欺诈可能性越大
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RiskInfo 扩展字段，对风险类型的说明
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OtherModelScores 多模型返回结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Code 业务侧错误码。成功时返回0，错误时返回非0值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 业务侧错误信息。成功时返回Success，错误时返回具体业务错误原因。
注意：此字段可能返回 null，表示取不到有效值
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
        if (array_key_exists("Found",$param) and $param["Found"] !== null) {
            $this->Found = $param["Found"];
        }

        if (array_key_exists("IdFound",$param) and $param["IdFound"] !== null) {
            $this->IdFound = $param["IdFound"];
        }

        if (array_key_exists("RiskScore",$param) and $param["RiskScore"] !== null) {
            $this->RiskScore = $param["RiskScore"];
        }

        if (array_key_exists("RiskInfo",$param) and $param["RiskInfo"] !== null) {
            $this->RiskInfo = [];
            foreach ($param["RiskInfo"] as $key => $value){
                $obj = new RiskDetailInfo();
                $obj->deserialize($value);
                array_push($this->RiskInfo, $obj);
            }
        }

        if (array_key_exists("OtherModelScores",$param) and $param["OtherModelScores"] !== null) {
            $this->OtherModelScores = [];
            foreach ($param["OtherModelScores"] as $key => $value){
                $obj = new FinanceOtherModelScores();
                $obj->deserialize($value);
                array_push($this->OtherModelScores, $obj);
            }
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
