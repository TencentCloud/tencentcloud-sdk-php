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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询-保护策略
 *
 * @method array getTaskPolicyIdList() 获取<p>保护策略ID列表</p>
 * @method void setTaskPolicyIdList(array $TaskPolicyIdList) 设置<p>保护策略ID列表</p>
 * @method string getTaskPolicyStatus() 获取<p>保护策略状态</p><p>枚举值：</p><ul><li>已触发： 表示已触发护栏策略</li><li>未触发： 表示未触发护栏策略</li><li>已恢复： 表示护栏策略已恢复</li></ul>
 * @method void setTaskPolicyStatus(string $TaskPolicyStatus) 设置<p>保护策略状态</p><p>枚举值：</p><ul><li>已触发： 表示已触发护栏策略</li><li>未触发： 表示未触发护栏策略</li><li>已恢复： 表示护栏策略已恢复</li></ul>
 * @method string getTaskPolicyRule() 获取<p>策略规则</p>
 * @method void setTaskPolicyRule(string $TaskPolicyRule) 设置<p>策略规则</p>
 * @method integer getTaskPolicyDealType() 获取<p>护栏策略生效处理策略 1:顺序执行，2:暂停</p>
 * @method void setTaskPolicyDealType(integer $TaskPolicyDealType) 设置<p>护栏策略生效处理策略 1:顺序执行，2:暂停</p>
 */
class DescribePolicy extends AbstractModel
{
    /**
     * @var array <p>保护策略ID列表</p>
     */
    public $TaskPolicyIdList;

    /**
     * @var string <p>保护策略状态</p><p>枚举值：</p><ul><li>已触发： 表示已触发护栏策略</li><li>未触发： 表示未触发护栏策略</li><li>已恢复： 表示护栏策略已恢复</li></ul>
     */
    public $TaskPolicyStatus;

    /**
     * @var string <p>策略规则</p>
     */
    public $TaskPolicyRule;

    /**
     * @var integer <p>护栏策略生效处理策略 1:顺序执行，2:暂停</p>
     */
    public $TaskPolicyDealType;

    /**
     * @param array $TaskPolicyIdList <p>保护策略ID列表</p>
     * @param string $TaskPolicyStatus <p>保护策略状态</p><p>枚举值：</p><ul><li>已触发： 表示已触发护栏策略</li><li>未触发： 表示未触发护栏策略</li><li>已恢复： 表示护栏策略已恢复</li></ul>
     * @param string $TaskPolicyRule <p>策略规则</p>
     * @param integer $TaskPolicyDealType <p>护栏策略生效处理策略 1:顺序执行，2:暂停</p>
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
