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
 * ModifyAclRule请求参数结构体
 *
 * @method string getInstanceId() 获取ckafka集群实例Id
 * @method void setInstanceId(string $InstanceId) 设置ckafka集群实例Id
 * @method string getRuleName() 获取ACL规则名
 * @method void setRuleName(string $RuleName) 设置ACL规则名
 * @method integer getIsApplied() 获取修改预设规则时传入,是否应用到新增的Topic
 * @method void setIsApplied(integer $IsApplied) 设置修改预设规则时传入,是否应用到新增的Topic
 */
class ModifyAclRuleRequest extends AbstractModel
{
    /**
     * @var string ckafka集群实例Id
     */
    public $InstanceId;

    /**
     * @var string ACL规则名
     */
    public $RuleName;

    /**
     * @var integer 修改预设规则时传入,是否应用到新增的Topic
     */
    public $IsApplied;

    /**
     * @param string $InstanceId ckafka集群实例Id
     * @param string $RuleName ACL规则名
     * @param integer $IsApplied 修改预设规则时传入,是否应用到新增的Topic
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

        if (array_key_exists("IsApplied",$param) and $param["IsApplied"] !== null) {
            $this->IsApplied = $param["IsApplied"];
        }
    }
}
