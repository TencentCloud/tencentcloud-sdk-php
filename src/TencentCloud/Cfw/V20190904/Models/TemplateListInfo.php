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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地址模版列表数据
 *
 * @method string getUuid() 获取模版ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUuid(string $Uuid) 设置模版ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取模版名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置模版名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDetail() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetail(string $Detail) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIpString() 获取IP模版
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpString(string $IpString) 设置IP模版
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInsertTime() 获取插入时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInsertTime(string $InsertTime) 设置插入时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取模版类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置模版类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRulesNum() 获取关联规则条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRulesNum(integer $RulesNum) 设置关联规则条数
注意：此字段可能返回 null，表示取不到有效值。
 */
class TemplateListInfo extends AbstractModel
{
    /**
     * @var string 模版ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uuid;

    /**
     * @var string 模版名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Detail;

    /**
     * @var string IP模版
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpString;

    /**
     * @var string 插入时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InsertTime;

    /**
     * @var string 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 模版类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer 关联规则条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RulesNum;

    /**
     * @param string $Uuid 模版ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 模版名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Detail 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IpString IP模版
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InsertTime 插入时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 模版类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RulesNum 关联规则条数
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("IpString",$param) and $param["IpString"] !== null) {
            $this->IpString = $param["IpString"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RulesNum",$param) and $param["RulesNum"] !== null) {
            $this->RulesNum = $param["RulesNum"];
        }
    }
}
