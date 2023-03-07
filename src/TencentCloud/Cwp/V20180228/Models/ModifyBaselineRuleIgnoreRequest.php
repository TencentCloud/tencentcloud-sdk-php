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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBaselineRuleIgnore请求参数结构体
 *
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method integer getAssetType() 获取资产类型[0:所有专业版旗舰版|1:id|2:ip]
 * @method void setAssetType(integer $AssetType) 设置资产类型[0:所有专业版旗舰版|1:id|2:ip]
 * @method integer getRuleId() 获取规则Id
 * @method void setRuleId(integer $RuleId) 设置规则Id
 * @method array getItemIds() 获取关联项
 * @method void setItemIds(array $ItemIds) 设置关联项
 * @method array getHostIds() 获取主机Id
 * @method void setHostIds(array $HostIds) 设置主机Id
 * @method array getHostIps() 获取主机Ip
 * @method void setHostIps(array $HostIps) 设置主机Ip
 * @method integer getSelectAll() 获取是否全选过滤
 * @method void setSelectAll(integer $SelectAll) 设置是否全选过滤
 * @method array getFilters() 获取<li>ItemName - string - 是否必填：否 - 项名称</li>
 * @method void setFilters(array $Filters) 设置<li>ItemName - string - 是否必填：否 - 项名称</li>
 */
class ModifyBaselineRuleIgnoreRequest extends AbstractModel
{
    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var integer 资产类型[0:所有专业版旗舰版|1:id|2:ip]
     */
    public $AssetType;

    /**
     * @var integer 规则Id
     */
    public $RuleId;

    /**
     * @var array 关联项
     */
    public $ItemIds;

    /**
     * @var array 主机Id
     */
    public $HostIds;

    /**
     * @var array 主机Ip
     */
    public $HostIps;

    /**
     * @var integer 是否全选过滤
     */
    public $SelectAll;

    /**
     * @var array <li>ItemName - string - 是否必填：否 - 项名称</li>
     */
    public $Filters;

    /**
     * @param string $RuleName 规则名称
     * @param integer $AssetType 资产类型[0:所有专业版旗舰版|1:id|2:ip]
     * @param integer $RuleId 规则Id
     * @param array $ItemIds 关联项
     * @param array $HostIds 主机Id
     * @param array $HostIps 主机Ip
     * @param integer $SelectAll 是否全选过滤
     * @param array $Filters <li>ItemName - string - 是否必填：否 - 项名称</li>
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

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("ItemIds",$param) and $param["ItemIds"] !== null) {
            $this->ItemIds = $param["ItemIds"];
        }

        if (array_key_exists("HostIds",$param) and $param["HostIds"] !== null) {
            $this->HostIds = $param["HostIds"];
        }

        if (array_key_exists("HostIps",$param) and $param["HostIps"] !== null) {
            $this->HostIps = $param["HostIps"];
        }

        if (array_key_exists("SelectAll",$param) and $param["SelectAll"] !== null) {
            $this->SelectAll = $param["SelectAll"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
