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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 关键词库信息
 *
 * @method string getID() 获取关键词库ID
 * @method void setID(string $ID) 设置关键词库ID
 * @method string getLibName() 获取关键词库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLibName(string $LibName) 设置关键词库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescribe() 获取关键词库描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescribe(string $Describe) 设置关键词库描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取关键词库创建时间
 * @method void setCreateTime(string $CreateTime) 设置关键词库创建时间
 * @method string getSuggestion() 获取审核建议(Review/Block)
 * @method void setSuggestion(string $Suggestion) 设置审核建议(Review/Block)
 * @method string getMatchType() 获取匹配模式(ExactMatch/FuzzyMatch)
 * @method void setMatchType(string $MatchType) 设置匹配模式(ExactMatch/FuzzyMatch)
 * @method array getBizTypes() 获取关联策略BizType列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizTypes(array $BizTypes) 设置关联策略BizType列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class KeywordsLibInfo extends AbstractModel
{
    /**
     * @var string 关键词库ID
     */
    public $ID;

    /**
     * @var string 关键词库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LibName;

    /**
     * @var string 关键词库描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Describe;

    /**
     * @var string 关键词库创建时间
     */
    public $CreateTime;

    /**
     * @var string 审核建议(Review/Block)
     */
    public $Suggestion;

    /**
     * @var string 匹配模式(ExactMatch/FuzzyMatch)
     */
    public $MatchType;

    /**
     * @var array 关联策略BizType列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizTypes;

    /**
     * @param string $ID 关键词库ID
     * @param string $LibName 关键词库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Describe 关键词库描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 关键词库创建时间
     * @param string $Suggestion 审核建议(Review/Block)
     * @param string $MatchType 匹配模式(ExactMatch/FuzzyMatch)
     * @param array $BizTypes 关联策略BizType列表
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("LibName",$param) and $param["LibName"] !== null) {
            $this->LibName = $param["LibName"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("MatchType",$param) and $param["MatchType"] !== null) {
            $this->MatchType = $param["MatchType"];
        }

        if (array_key_exists("BizTypes",$param) and $param["BizTypes"] !== null) {
            $this->BizTypes = $param["BizTypes"];
        }
    }
}
