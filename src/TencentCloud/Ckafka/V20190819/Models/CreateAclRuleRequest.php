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
 * CreateAclRule请求参数结构体
 *
 * @method string getInstanceId() 获取实例id信息
 * @method void setInstanceId(string $InstanceId) 设置实例id信息
 * @method string getResourceType() 获取Acl资源类型,目前只支持Topic,枚举值列表：Topic
 * @method void setResourceType(string $ResourceType) 设置Acl资源类型,目前只支持Topic,枚举值列表：Topic
 * @method string getPatternType() 获取匹配类型，目前支持前缀匹配与预设策略，枚举值列表：PREFIXED/PRESET
 * @method void setPatternType(string $PatternType) 设置匹配类型，目前支持前缀匹配与预设策略，枚举值列表：PREFIXED/PRESET
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method array getRuleList() 获取设置的ACL规则列表
 * @method void setRuleList(array $RuleList) 设置设置的ACL规则列表
 * @method string getPattern() 获取表示前缀匹配的前缀的值
 * @method void setPattern(string $Pattern) 设置表示前缀匹配的前缀的值
 * @method integer getIsApplied() 获取预设ACL规则是否应用到新增的topic中
 * @method void setIsApplied(integer $IsApplied) 设置预设ACL规则是否应用到新增的topic中
 * @method string getComment() 获取ACL规则的备注
 * @method void setComment(string $Comment) 设置ACL规则的备注
 */
class CreateAclRuleRequest extends AbstractModel
{
    /**
     * @var string 实例id信息
     */
    public $InstanceId;

    /**
     * @var string Acl资源类型,目前只支持Topic,枚举值列表：Topic
     */
    public $ResourceType;

    /**
     * @var string 匹配类型，目前支持前缀匹配与预设策略，枚举值列表：PREFIXED/PRESET
     */
    public $PatternType;

    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var array 设置的ACL规则列表
     */
    public $RuleList;

    /**
     * @var string 表示前缀匹配的前缀的值
     */
    public $Pattern;

    /**
     * @var integer 预设ACL规则是否应用到新增的topic中
     */
    public $IsApplied;

    /**
     * @var string ACL规则的备注
     */
    public $Comment;

    /**
     * @param string $InstanceId 实例id信息
     * @param string $ResourceType Acl资源类型,目前只支持Topic,枚举值列表：Topic
     * @param string $PatternType 匹配类型，目前支持前缀匹配与预设策略，枚举值列表：PREFIXED/PRESET
     * @param string $RuleName 规则名称
     * @param array $RuleList 设置的ACL规则列表
     * @param string $Pattern 表示前缀匹配的前缀的值
     * @param integer $IsApplied 预设ACL规则是否应用到新增的topic中
     * @param string $Comment ACL规则的备注
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("PatternType",$param) and $param["PatternType"] !== null) {
            $this->PatternType = $param["PatternType"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleList",$param) and $param["RuleList"] !== null) {
            $this->RuleList = [];
            foreach ($param["RuleList"] as $key => $value){
                $obj = new AclRuleInfo();
                $obj->deserialize($value);
                array_push($this->RuleList, $obj);
            }
        }

        if (array_key_exists("Pattern",$param) and $param["Pattern"] !== null) {
            $this->Pattern = $param["Pattern"];
        }

        if (array_key_exists("IsApplied",$param) and $param["IsApplied"] !== null) {
            $this->IsApplied = $param["IsApplied"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
