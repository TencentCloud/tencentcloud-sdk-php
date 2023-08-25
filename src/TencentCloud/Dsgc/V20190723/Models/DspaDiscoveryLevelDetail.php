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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 敏感数据分级信息
 *
 * @method string getLevelGroupName() 获取分级组名称，唯一性约束，最多60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字，Name不可重复
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevelGroupName(string $LevelGroupName) 设置分级组名称，唯一性约束，最多60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字，Name不可重复
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSource() 获取分级组来源，0为内置，1为自定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(integer $Source) 设置分级组来源，0为内置，1为自定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLevelGroupDesc() 获取分级组描述，最多1024字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevelGroupDesc(string $LevelGroupDesc) 设置分级组描述，最多1024字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLevelDetail() 获取具体分级标识详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevelDetail(array $LevelDetail) 设置具体分级标识详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRefComplianceCnt() 获取引用合规组次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefComplianceCnt(integer $RefComplianceCnt) 设置引用合规组次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRefCompliance() 获取引用合规组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefCompliance(array $RefCompliance) 设置引用合规组
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevelGroupId() 获取分级组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevelGroupId(integer $LevelGroupId) 设置分级组ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class DspaDiscoveryLevelDetail extends AbstractModel
{
    /**
     * @var string 分级组名称，唯一性约束，最多60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字，Name不可重复
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LevelGroupName;

    /**
     * @var integer 分级组来源，0为内置，1为自定义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var string 分级组描述，最多1024字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LevelGroupDesc;

    /**
     * @var array 具体分级标识详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LevelDetail;

    /**
     * @var integer 引用合规组次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefComplianceCnt;

    /**
     * @var array 引用合规组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefCompliance;

    /**
     * @var integer 分级组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LevelGroupId;

    /**
     * @param string $LevelGroupName 分级组名称，唯一性约束，最多60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字，Name不可重复
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Source 分级组来源，0为内置，1为自定义
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LevelGroupDesc 分级组描述，最多1024字符
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LevelDetail 具体分级标识详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RefComplianceCnt 引用合规组次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RefCompliance 引用合规组
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LevelGroupId 分级组ID
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
        if (array_key_exists("LevelGroupName",$param) and $param["LevelGroupName"] !== null) {
            $this->LevelGroupName = $param["LevelGroupName"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("LevelGroupDesc",$param) and $param["LevelGroupDesc"] !== null) {
            $this->LevelGroupDesc = $param["LevelGroupDesc"];
        }

        if (array_key_exists("LevelDetail",$param) and $param["LevelDetail"] !== null) {
            $this->LevelDetail = [];
            foreach ($param["LevelDetail"] as $key => $value){
                $obj = new LevelItem();
                $obj->deserialize($value);
                array_push($this->LevelDetail, $obj);
            }
        }

        if (array_key_exists("RefComplianceCnt",$param) and $param["RefComplianceCnt"] !== null) {
            $this->RefComplianceCnt = $param["RefComplianceCnt"];
        }

        if (array_key_exists("RefCompliance",$param) and $param["RefCompliance"] !== null) {
            $this->RefCompliance = [];
            foreach ($param["RefCompliance"] as $key => $value){
                $obj = new DspaDiscoveryComplianceGroup();
                $obj->deserialize($value);
                array_push($this->RefCompliance, $obj);
            }
        }

        if (array_key_exists("LevelGroupId",$param) and $param["LevelGroupId"] !== null) {
            $this->LevelGroupId = $param["LevelGroupId"];
        }
    }
}
