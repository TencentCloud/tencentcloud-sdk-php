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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVirusAutoIsolateSampleDetail返回参数结构体
 *
 * @method string getMD5() 获取文件Md5值
 * @method void setMD5(string $MD5) 设置文件Md5值
 * @method integer getSize() 获取文件大小(B)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSize(integer $Size) 设置文件大小(B)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVirusName() 获取病毒名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirusName(string $VirusName) 设置病毒名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskLevel() 获取风险等级 RISK_CRITICAL, RISK_HIGH, RISK_MEDIUM, RISK_LOW, RISK_NOTICE。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskLevel(string $RiskLevel) 设置风险等级 RISK_CRITICAL, RISK_HIGH, RISK_MEDIUM, RISK_LOW, RISK_NOTICE。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKillEngine() 获取查杀引擎
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKillEngine(array $KillEngine) 设置查杀引擎
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHarmDescribe() 获取事件描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHarmDescribe(string $HarmDescribe) 设置事件描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSuggestScheme() 获取建议方案
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuggestScheme(string $SuggestScheme) 设置建议方案
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReferenceLink() 获取参考链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReferenceLink(string $ReferenceLink) 设置参考链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVirusAutoIsolateSampleDetailResponse extends AbstractModel
{
    /**
     * @var string 文件Md5值
     */
    public $MD5;

    /**
     * @var integer 文件大小(B)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Size;

    /**
     * @var string 病毒名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirusName;

    /**
     * @var string 风险等级 RISK_CRITICAL, RISK_HIGH, RISK_MEDIUM, RISK_LOW, RISK_NOTICE。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskLevel;

    /**
     * @var array 查杀引擎
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KillEngine;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 事件描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HarmDescribe;

    /**
     * @var string 建议方案
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuggestScheme;

    /**
     * @var string 参考链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReferenceLink;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $MD5 文件Md5值
     * @param integer $Size 文件大小(B)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VirusName 病毒名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskLevel 风险等级 RISK_CRITICAL, RISK_HIGH, RISK_MEDIUM, RISK_LOW, RISK_NOTICE。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $KillEngine 查杀引擎
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HarmDescribe 事件描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SuggestScheme 建议方案
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReferenceLink 参考链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("MD5",$param) and $param["MD5"] !== null) {
            $this->MD5 = $param["MD5"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("VirusName",$param) and $param["VirusName"] !== null) {
            $this->VirusName = $param["VirusName"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("KillEngine",$param) and $param["KillEngine"] !== null) {
            $this->KillEngine = $param["KillEngine"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("HarmDescribe",$param) and $param["HarmDescribe"] !== null) {
            $this->HarmDescribe = $param["HarmDescribe"];
        }

        if (array_key_exists("SuggestScheme",$param) and $param["SuggestScheme"] !== null) {
            $this->SuggestScheme = $param["SuggestScheme"];
        }

        if (array_key_exists("ReferenceLink",$param) and $param["ReferenceLink"] !== null) {
            $this->ReferenceLink = $param["ReferenceLink"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
