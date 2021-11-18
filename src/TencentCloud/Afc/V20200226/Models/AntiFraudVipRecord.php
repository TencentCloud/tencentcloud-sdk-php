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
namespace TencentCloud\Afc\V20200226\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 反欺诈VIP查询结果
 *
 * @method string getCode() 获取公共错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(string $Code) 设置公共错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodeDesc() 获取业务侧错误码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeDesc(string $CodeDesc) 设置业务侧错误码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取业务侧错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置业务侧错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFound() 获取表示该条记录能否查到：1 为能查到；-1 为查不到，此时 RiskScore 返回-1；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFound(string $Found) 设置表示该条记录能否查到：1 为能查到；-1 为查不到，此时 RiskScore 返回-1；
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdFound() 获取表示该条记录中的身份 ID 能否查到
1 为能查到
-1 为查不到
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdFound(string $IdFound) 设置表示该条记录中的身份 ID 能否查到
1 为能查到
-1 为查不到
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskScore() 获取当可查到时，返回 0~100 区间，值越高 欺诈可
能性越大。
当查不到时（即 found=-1），返回-1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskScore(string $RiskScore) 设置当可查到时，返回 0~100 区间，值越高 欺诈可
能性越大。
当查不到时（即 found=-1），返回-1
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRiskInfo() 获取扩展字段，对风险类型的说明。扩展字段并非必
然出现。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskInfo(array $RiskInfo) 设置扩展字段，对风险类型的说明。扩展字段并非必
然出现。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOtherModelScores() 获取默认出现，提供模型版本号说明及多模型返回需
要时用到；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOtherModelScores(array $OtherModelScores) 设置默认出现，提供模型版本号说明及多模型返回需
要时用到；
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPostTime() 获取表示请求时间，标准 sunix 时间戳，非必然出现
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostTime(string $PostTime) 设置表示请求时间，标准 sunix 时间戳，非必然出现
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtensionOut() 获取拓展字段，非必然出现，和 ExtensionIn 对应；
注：非必然出现，需要返回时天御侧将说明；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtensionOut(string $ExtensionOut) 设置拓展字段，非必然出现，和 ExtensionIn 对应；
注：非必然出现，需要返回时天御侧将说明；
注意：此字段可能返回 null，表示取不到有效值。
 */
class AntiFraudVipRecord extends AbstractModel
{
    /**
     * @var string 公共错误码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var string 业务侧错误码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeDesc;

    /**
     * @var string 业务侧错误信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var string 表示该条记录能否查到：1 为能查到；-1 为查不到，此时 RiskScore 返回-1；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Found;

    /**
     * @var string 表示该条记录中的身份 ID 能否查到
1 为能查到
-1 为查不到
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdFound;

    /**
     * @var string 当可查到时，返回 0~100 区间，值越高 欺诈可
能性越大。
当查不到时（即 found=-1），返回-1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskScore;

    /**
     * @var array 扩展字段，对风险类型的说明。扩展字段并非必
然出现。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskInfo;

    /**
     * @var array 默认出现，提供模型版本号说明及多模型返回需
要时用到；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OtherModelScores;

    /**
     * @var string 表示请求时间，标准 sunix 时间戳，非必然出现
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostTime;

    /**
     * @var string 拓展字段，非必然出现，和 ExtensionIn 对应；
注：非必然出现，需要返回时天御侧将说明；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtensionOut;

    /**
     * @param string $Code 公共错误码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CodeDesc 业务侧错误码。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 业务侧错误信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Found 表示该条记录能否查到：1 为能查到；-1 为查不到，此时 RiskScore 返回-1；
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdFound 表示该条记录中的身份 ID 能否查到
1 为能查到
-1 为查不到
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskScore 当可查到时，返回 0~100 区间，值越高 欺诈可
能性越大。
当查不到时（即 found=-1），返回-1
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RiskInfo 扩展字段，对风险类型的说明。扩展字段并非必
然出现。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OtherModelScores 默认出现，提供模型版本号说明及多模型返回需
要时用到；
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PostTime 表示请求时间，标准 sunix 时间戳，非必然出现
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtensionOut 拓展字段，非必然出现，和 ExtensionIn 对应；
注：非必然出现，需要返回时天御侧将说明；
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("CodeDesc",$param) and $param["CodeDesc"] !== null) {
            $this->CodeDesc = $param["CodeDesc"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
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
                $obj = new SimpleKindRiskDetail();
                $obj->deserialize($value);
                array_push($this->RiskInfo, $obj);
            }
        }

        if (array_key_exists("OtherModelScores",$param) and $param["OtherModelScores"] !== null) {
            $this->OtherModelScores = [];
            foreach ($param["OtherModelScores"] as $key => $value){
                $obj = new OtherModelScores();
                $obj->deserialize($value);
                array_push($this->OtherModelScores, $obj);
            }
        }

        if (array_key_exists("PostTime",$param) and $param["PostTime"] !== null) {
            $this->PostTime = $param["PostTime"];
        }

        if (array_key_exists("ExtensionOut",$param) and $param["ExtensionOut"] !== null) {
            $this->ExtensionOut = $param["ExtensionOut"];
        }
    }
}
