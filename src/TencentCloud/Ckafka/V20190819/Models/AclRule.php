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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AclRule列表接口出参
 *
 * @method string getRuleName() 获取Acl规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置Acl规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPatternType() 获取匹配类型，目前只支持前缀匹配，枚举值列表：PREFIXED
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPatternType(string $PatternType) 设置匹配类型，目前只支持前缀匹配，枚举值列表：PREFIXED
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPattern() 获取表示前缀匹配的前缀的值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPattern(string $Pattern) 设置表示前缀匹配的前缀的值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceType() 获取Acl资源类型,目前只支持Topic,枚举值列表：Topic
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceType(string $ResourceType) 设置Acl资源类型,目前只支持Topic,枚举值列表：Topic
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAclList() 获取该规则所包含的ACL信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAclList(string $AclList) 设置该规则所包含的ACL信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTimeStamp() 获取规则所创建的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTimeStamp(string $CreateTimeStamp) 设置规则所创建的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsApplied() 获取预设ACL规则是否应用到新增的topic中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsApplied(integer $IsApplied) 设置预设ACL规则是否应用到新增的topic中
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTimeStamp() 获取规则更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTimeStamp(string $UpdateTimeStamp) 设置规则更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComment() 获取规则的备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComment(string $Comment) 设置规则的备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicName() 获取其中一个显示的对应的TopicName
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicName(string $TopicName) 设置其中一个显示的对应的TopicName
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTopicCount() 获取应用该ACL规则的Topic数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicCount(integer $TopicCount) 设置应用该ACL规则的Topic数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPatternTypeTitle() 获取patternType的中文显示
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPatternTypeTitle(string $PatternTypeTitle) 设置patternType的中文显示
注意：此字段可能返回 null，表示取不到有效值。
 */
class AclRule extends AbstractModel
{
    /**
     * @var string Acl规则名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @var string 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 匹配类型，目前只支持前缀匹配，枚举值列表：PREFIXED
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PatternType;

    /**
     * @var string 表示前缀匹配的前缀的值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pattern;

    /**
     * @var string Acl资源类型,目前只支持Topic,枚举值列表：Topic
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceType;

    /**
     * @var string 该规则所包含的ACL信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AclList;

    /**
     * @var string 规则所创建的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTimeStamp;

    /**
     * @var integer 预设ACL规则是否应用到新增的topic中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsApplied;

    /**
     * @var string 规则更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTimeStamp;

    /**
     * @var string 规则的备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comment;

    /**
     * @var string 其中一个显示的对应的TopicName
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicName;

    /**
     * @var integer 应用该ACL规则的Topic数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicCount;

    /**
     * @var string patternType的中文显示
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PatternTypeTitle;

    /**
     * @param string $RuleName Acl规则名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PatternType 匹配类型，目前只支持前缀匹配，枚举值列表：PREFIXED
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Pattern 表示前缀匹配的前缀的值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceType Acl资源类型,目前只支持Topic,枚举值列表：Topic
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AclList 该规则所包含的ACL信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTimeStamp 规则所创建的时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsApplied 预设ACL规则是否应用到新增的topic中
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTimeStamp 规则更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Comment 规则的备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicName 其中一个显示的对应的TopicName
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TopicCount 应用该ACL规则的Topic数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PatternTypeTitle patternType的中文显示
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PatternType",$param) and $param["PatternType"] !== null) {
            $this->PatternType = $param["PatternType"];
        }

        if (array_key_exists("Pattern",$param) and $param["Pattern"] !== null) {
            $this->Pattern = $param["Pattern"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("AclList",$param) and $param["AclList"] !== null) {
            $this->AclList = $param["AclList"];
        }

        if (array_key_exists("CreateTimeStamp",$param) and $param["CreateTimeStamp"] !== null) {
            $this->CreateTimeStamp = $param["CreateTimeStamp"];
        }

        if (array_key_exists("IsApplied",$param) and $param["IsApplied"] !== null) {
            $this->IsApplied = $param["IsApplied"];
        }

        if (array_key_exists("UpdateTimeStamp",$param) and $param["UpdateTimeStamp"] !== null) {
            $this->UpdateTimeStamp = $param["UpdateTimeStamp"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("TopicCount",$param) and $param["TopicCount"] !== null) {
            $this->TopicCount = $param["TopicCount"];
        }

        if (array_key_exists("PatternTypeTitle",$param) and $param["PatternTypeTitle"] !== null) {
            $this->PatternTypeTitle = $param["PatternTypeTitle"];
        }
    }
}
