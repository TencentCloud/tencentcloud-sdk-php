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
 * 保护策略
 *
 * @method array getTemplatePolicyIdList() 获取保护策略ID列表
 * @method void setTemplatePolicyIdList(array $TemplatePolicyIdList) 设置保护策略ID列表
 * @method string getTemplatePolicyRule() 获取策略规则
 * @method void setTemplatePolicyRule(string $TemplatePolicyRule) 设置策略规则
 * @method integer getTemplatePolicyDealType() 获取护栏策略生效处理策略 1:顺序执行，2:暂停
 * @method void setTemplatePolicyDealType(integer $TemplatePolicyDealType) 设置护栏策略生效处理策略 1:顺序执行，2:暂停
 */
class TemplatePolicy extends AbstractModel
{
    /**
     * @var array 保护策略ID列表
     */
    public $TemplatePolicyIdList;

    /**
     * @var string 策略规则
     */
    public $TemplatePolicyRule;

    /**
     * @var integer 护栏策略生效处理策略 1:顺序执行，2:暂停
     */
    public $TemplatePolicyDealType;

    /**
     * @param array $TemplatePolicyIdList 保护策略ID列表
     * @param string $TemplatePolicyRule 策略规则
     * @param integer $TemplatePolicyDealType 护栏策略生效处理策略 1:顺序执行，2:暂停
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
        if (array_key_exists("TemplatePolicyIdList",$param) and $param["TemplatePolicyIdList"] !== null) {
            $this->TemplatePolicyIdList = $param["TemplatePolicyIdList"];
        }

        if (array_key_exists("TemplatePolicyRule",$param) and $param["TemplatePolicyRule"] !== null) {
            $this->TemplatePolicyRule = $param["TemplatePolicyRule"];
        }

        if (array_key_exists("TemplatePolicyDealType",$param) and $param["TemplatePolicyDealType"] !== null) {
            $this->TemplatePolicyDealType = $param["TemplatePolicyDealType"];
        }
    }
}
