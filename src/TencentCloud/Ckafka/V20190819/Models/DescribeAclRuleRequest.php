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
 * DescribeAclRule请求参数结构体
 *
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method string getRuleName() 获取ACL规则名
 * @method void setRuleName(string $RuleName) 设置ACL规则名
 * @method string getPatternType() 获取ACL规则匹配类型
 * @method void setPatternType(string $PatternType) 设置ACL规则匹配类型
 * @method boolean getIsSimplified() 获取是否读取简略的ACL规则
 * @method void setIsSimplified(boolean $IsSimplified) 设置是否读取简略的ACL规则
 */
class DescribeAclRuleRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var string ACL规则名
     */
    public $RuleName;

    /**
     * @var string ACL规则匹配类型
     */
    public $PatternType;

    /**
     * @var boolean 是否读取简略的ACL规则
     */
    public $IsSimplified;

    /**
     * @param string $InstanceId 实例Id
     * @param string $RuleName ACL规则名
     * @param string $PatternType ACL规则匹配类型
     * @param boolean $IsSimplified 是否读取简略的ACL规则
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

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("PatternType",$param) and $param["PatternType"] !== null) {
            $this->PatternType = $param["PatternType"];
        }

        if (array_key_exists("IsSimplified",$param) and $param["IsSimplified"] !== null) {
            $this->IsSimplified = $param["IsSimplified"];
        }
    }
}
