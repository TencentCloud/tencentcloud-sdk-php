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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchOperateUserSignatureRules请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getStatus() 获取0:关闭，1:开启，2:仅观察
 * @method void setStatus(string $Status) 设置0:关闭，1:开启，2:仅观察
 * @method array getRuleIds() 获取如果SelectedAll为true，则表示反选的规则，否则表示手动选择的规则ID
 * @method void setRuleIds(array $RuleIds) 设置如果SelectedAll为true，则表示反选的规则，否则表示手动选择的规则ID
 * @method integer getReason() 获取仅观察原因
 * @method void setReason(integer $Reason) 设置仅观察原因
 * @method boolean getSelectedAll() 获取是否全选
 * @method void setSelectedAll(boolean $SelectedAll) 设置是否全选
 * @method array getFilters() 获取过滤
 * @method void setFilters(array $Filters) 设置过滤
 */
class BatchOperateUserSignatureRulesRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 0:关闭，1:开启，2:仅观察
     */
    public $Status;

    /**
     * @var array 如果SelectedAll为true，则表示反选的规则，否则表示手动选择的规则ID
     */
    public $RuleIds;

    /**
     * @var integer 仅观察原因
     */
    public $Reason;

    /**
     * @var boolean 是否全选
     */
    public $SelectedAll;

    /**
     * @var array 过滤
     */
    public $Filters;

    /**
     * @param string $Domain 域名
     * @param string $Status 0:关闭，1:开启，2:仅观察
     * @param array $RuleIds 如果SelectedAll为true，则表示反选的规则，否则表示手动选择的规则ID
     * @param integer $Reason 仅观察原因
     * @param boolean $SelectedAll 是否全选
     * @param array $Filters 过滤
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleIds",$param) and $param["RuleIds"] !== null) {
            $this->RuleIds = $param["RuleIds"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("SelectedAll",$param) and $param["SelectedAll"] !== null) {
            $this->SelectedAll = $param["SelectedAll"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new FiltersItemNew();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
