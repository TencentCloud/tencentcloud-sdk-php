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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AclRule列表接口出参
 *
 * @method string getRuleName() 获取ACL规则名
 * @method void setRuleName(string $RuleName) 设置ACL规则名
 * @method string getInstanceId() 获取ckafka集群实例Id
 * @method void setInstanceId(string $InstanceId) 设置ckafka集群实例Id
 * @method string getPatternType() 获取ACL规则匹配类型，目前只支持前缀匹配，枚举值列表：PREFIXED
 * @method void setPatternType(string $PatternType) 设置ACL规则匹配类型，目前只支持前缀匹配，枚举值列表：PREFIXED
 * @method string getPattern() 获取表示前缀匹配的前缀的值
 * @method void setPattern(string $Pattern) 设置表示前缀匹配的前缀的值
 * @method string getResourceType() 获取Acl资源类型,目前只支持Topic,枚举值列表：Topic
 * @method void setResourceType(string $ResourceType) 设置Acl资源类型,目前只支持Topic,枚举值列表：Topic
 * @method string getAclList() 获取该规则所包含的ACL信息
 * @method void setAclList(string $AclList) 设置该规则所包含的ACL信息
 * @method string getCreateTimeStamp() 获取规则所创建的时间
 * @method void setCreateTimeStamp(string $CreateTimeStamp) 设置规则所创建的时间
 * @method integer getIsApplied() 获取预设ACL规则是否应用到新增的topic中
 * @method void setIsApplied(integer $IsApplied) 设置预设ACL规则是否应用到新增的topic中
 * @method string getUpdateTimeStamp() 获取规则更新时间
 * @method void setUpdateTimeStamp(string $UpdateTimeStamp) 设置规则更新时间
 * @method string getComment() 获取规则的备注
 * @method void setComment(string $Comment) 设置规则的备注
 * @method string getTopicName() 获取其中一个显示的对应的TopicName
 * @method void setTopicName(string $TopicName) 设置其中一个显示的对应的TopicName
 * @method integer getTopicCount() 获取应用该ACL规则的Topic数
 * @method void setTopicCount(integer $TopicCount) 设置应用该ACL规则的Topic数
 * @method string getPatternTypeTitle() 获取patternType的中文显示
 * @method void setPatternTypeTitle(string $PatternTypeTitle) 设置patternType的中文显示
 */
class AclRule extends AbstractModel
{
    /**
     * @var string ACL规则名
     */
    public $RuleName;

    /**
     * @var string ckafka集群实例Id
     */
    public $InstanceId;

    /**
     * @var string ACL规则匹配类型，目前只支持前缀匹配，枚举值列表：PREFIXED
     */
    public $PatternType;

    /**
     * @var string 表示前缀匹配的前缀的值
     */
    public $Pattern;

    /**
     * @var string Acl资源类型,目前只支持Topic,枚举值列表：Topic
     */
    public $ResourceType;

    /**
     * @var string 该规则所包含的ACL信息
     */
    public $AclList;

    /**
     * @var string 规则所创建的时间
     */
    public $CreateTimeStamp;

    /**
     * @var integer 预设ACL规则是否应用到新增的topic中
     */
    public $IsApplied;

    /**
     * @var string 规则更新时间
     */
    public $UpdateTimeStamp;

    /**
     * @var string 规则的备注
     */
    public $Comment;

    /**
     * @var string 其中一个显示的对应的TopicName
     */
    public $TopicName;

    /**
     * @var integer 应用该ACL规则的Topic数
     */
    public $TopicCount;

    /**
     * @var string patternType的中文显示
     */
    public $PatternTypeTitle;

    /**
     * @param string $RuleName ACL规则名
     * @param string $InstanceId ckafka集群实例Id
     * @param string $PatternType ACL规则匹配类型，目前只支持前缀匹配，枚举值列表：PREFIXED
     * @param string $Pattern 表示前缀匹配的前缀的值
     * @param string $ResourceType Acl资源类型,目前只支持Topic,枚举值列表：Topic
     * @param string $AclList 该规则所包含的ACL信息
     * @param string $CreateTimeStamp 规则所创建的时间
     * @param integer $IsApplied 预设ACL规则是否应用到新增的topic中
     * @param string $UpdateTimeStamp 规则更新时间
     * @param string $Comment 规则的备注
     * @param string $TopicName 其中一个显示的对应的TopicName
     * @param integer $TopicCount 应用该ACL规则的Topic数
     * @param string $PatternTypeTitle patternType的中文显示
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
