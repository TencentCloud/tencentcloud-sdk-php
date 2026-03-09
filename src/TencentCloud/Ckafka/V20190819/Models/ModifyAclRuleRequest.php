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
 * ModifyAclRule请求参数结构体
 *
 * @method string getInstanceId() 获取<p>ckafka集群实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
 * @method void setInstanceId(string $InstanceId) 设置<p>ckafka集群实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
 * @method string getRuleName() 获取<p>ACL规则名</p>
 * @method void setRuleName(string $RuleName) 设置<p>ACL规则名</p>
 * @method integer getIsApplied() 获取<p>修改预设规则时传入,是否应用到新增的Topic</p><p>枚举值：</p><ul><li>0： 不允许应用到新增的topic</li><li>1： 允许应用到新增的topic</li></ul><p>默认值：0</p>
 * @method void setIsApplied(integer $IsApplied) 设置<p>修改预设规则时传入,是否应用到新增的Topic</p><p>枚举值：</p><ul><li>0： 不允许应用到新增的topic</li><li>1： 允许应用到新增的topic</li></ul><p>默认值：0</p>
 */
class ModifyAclRuleRequest extends AbstractModel
{
    /**
     * @var string <p>ckafka集群实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
     */
    public $InstanceId;

    /**
     * @var string <p>ACL规则名</p>
     */
    public $RuleName;

    /**
     * @var integer <p>修改预设规则时传入,是否应用到新增的Topic</p><p>枚举值：</p><ul><li>0： 不允许应用到新增的topic</li><li>1： 允许应用到新增的topic</li></ul><p>默认值：0</p>
     */
    public $IsApplied;

    /**
     * @param string $InstanceId <p>ckafka集群实例Id</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/40835">DescribeInstances</a></p>
     * @param string $RuleName <p>ACL规则名</p>
     * @param integer $IsApplied <p>修改预设规则时传入,是否应用到新增的Topic</p><p>枚举值：</p><ul><li>0： 不允许应用到新增的topic</li><li>1： 允许应用到新增的topic</li></ul><p>默认值：0</p>
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
