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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询-保护策略
 *
 * @method array getTaskPolicyIdList() 获取保护策略ID列表
 * @method void setTaskPolicyIdList(array $TaskPolicyIdList) 设置保护策略ID列表
 * @method string getTaskPolicyStatus() 获取保护策略状态
 * @method void setTaskPolicyStatus(string $TaskPolicyStatus) 设置保护策略状态
 * @method string getTaskPolicyRule() 获取策略规则
 * @method void setTaskPolicyRule(string $TaskPolicyRule) 设置策略规则
 * @method integer getTaskPolicyDealType() 获取护栏策略生效处理策略 1:顺序执行，2:暂停
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskPolicyDealType(integer $TaskPolicyDealType) 设置护栏策略生效处理策略 1:顺序执行，2:暂停
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribePolicy extends AbstractModel
{
    /**
     * @var array 保护策略ID列表
     */
    public $TaskPolicyIdList;

    /**
     * @var string 保护策略状态
     */
    public $TaskPolicyStatus;

    /**
     * @var string 策略规则
     */
    public $TaskPolicyRule;

    /**
     * @var integer 护栏策略生效处理策略 1:顺序执行，2:暂停
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskPolicyDealType;

    /**
     * @param array $TaskPolicyIdList 保护策略ID列表
     * @param string $TaskPolicyStatus 保护策略状态
     * @param string $TaskPolicyRule 策略规则
     * @param integer $TaskPolicyDealType 护栏策略生效处理策略 1:顺序执行，2:暂停
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
        if (array_key_exists("TaskPolicyIdList",$param) and $param["TaskPolicyIdList"] !== null) {
            $this->TaskPolicyIdList = $param["TaskPolicyIdList"];
        }

        if (array_key_exists("TaskPolicyStatus",$param) and $param["TaskPolicyStatus"] !== null) {
            $this->TaskPolicyStatus = $param["TaskPolicyStatus"];
        }

        if (array_key_exists("TaskPolicyRule",$param) and $param["TaskPolicyRule"] !== null) {
            $this->TaskPolicyRule = $param["TaskPolicyRule"];
        }

        if (array_key_exists("TaskPolicyDealType",$param) and $param["TaskPolicyDealType"] !== null) {
            $this->TaskPolicyDealType = $param["TaskPolicyDealType"];
        }
    }
}
