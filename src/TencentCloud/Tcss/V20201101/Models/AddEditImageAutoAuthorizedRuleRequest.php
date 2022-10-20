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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddEditImageAutoAuthorizedRule请求参数结构体
 *
 * @method string getRangeType() 获取授权范围类别，MANUAL:自选主机节点，ALL:全部镜像
 * @method void setRangeType(string $RangeType) 设置授权范围类别，MANUAL:自选主机节点，ALL:全部镜像
 * @method integer getMaxDailyCount() 获取每天最大的镜像授权数限制, 0表示无限制
 * @method void setMaxDailyCount(integer $MaxDailyCount) 设置每天最大的镜像授权数限制, 0表示无限制
 * @method integer getIsEnabled() 获取规则是否生效，0:不生效，1:已生效
 * @method void setIsEnabled(integer $IsEnabled) 设置规则是否生效，0:不生效，1:已生效
 * @method array getHostIdSet() 获取自选主机id，当授权范围为MANUAL:自选主机时且HostIdFilters为空时，必填
 * @method void setHostIdSet(array $HostIdSet) 设置自选主机id，当授权范围为MANUAL:自选主机时且HostIdFilters为空时，必填
 * @method integer getRuleId() 获取规则id，在编辑时，必填
 * @method void setRuleId(integer $RuleId) 设置规则id，在编辑时，必填
 * @method array getHostIdFilters() 获取根据条件过滤，当授权范围为MANUAL:自选主机时且HostIdSet为空时，必填
 * @method void setHostIdFilters(array $HostIdFilters) 设置根据条件过滤，当授权范围为MANUAL:自选主机时且HostIdSet为空时，必填
 * @method array getExcludeHostIdSet() 获取根据条件过滤而且排除指定主机id
 * @method void setExcludeHostIdSet(array $ExcludeHostIdSet) 设置根据条件过滤而且排除指定主机id
 */
class AddEditImageAutoAuthorizedRuleRequest extends AbstractModel
{
    /**
     * @var string 授权范围类别，MANUAL:自选主机节点，ALL:全部镜像
     */
    public $RangeType;

    /**
     * @var integer 每天最大的镜像授权数限制, 0表示无限制
     */
    public $MaxDailyCount;

    /**
     * @var integer 规则是否生效，0:不生效，1:已生效
     */
    public $IsEnabled;

    /**
     * @var array 自选主机id，当授权范围为MANUAL:自选主机时且HostIdFilters为空时，必填
     */
    public $HostIdSet;

    /**
     * @var integer 规则id，在编辑时，必填
     */
    public $RuleId;

    /**
     * @var array 根据条件过滤，当授权范围为MANUAL:自选主机时且HostIdSet为空时，必填
     */
    public $HostIdFilters;

    /**
     * @var array 根据条件过滤而且排除指定主机id
     */
    public $ExcludeHostIdSet;

    /**
     * @param string $RangeType 授权范围类别，MANUAL:自选主机节点，ALL:全部镜像
     * @param integer $MaxDailyCount 每天最大的镜像授权数限制, 0表示无限制
     * @param integer $IsEnabled 规则是否生效，0:不生效，1:已生效
     * @param array $HostIdSet 自选主机id，当授权范围为MANUAL:自选主机时且HostIdFilters为空时，必填
     * @param integer $RuleId 规则id，在编辑时，必填
     * @param array $HostIdFilters 根据条件过滤，当授权范围为MANUAL:自选主机时且HostIdSet为空时，必填
     * @param array $ExcludeHostIdSet 根据条件过滤而且排除指定主机id
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
        if (array_key_exists("RangeType",$param) and $param["RangeType"] !== null) {
            $this->RangeType = $param["RangeType"];
        }

        if (array_key_exists("MaxDailyCount",$param) and $param["MaxDailyCount"] !== null) {
            $this->MaxDailyCount = $param["MaxDailyCount"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("HostIdSet",$param) and $param["HostIdSet"] !== null) {
            $this->HostIdSet = $param["HostIdSet"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("HostIdFilters",$param) and $param["HostIdFilters"] !== null) {
            $this->HostIdFilters = [];
            foreach ($param["HostIdFilters"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->HostIdFilters, $obj);
            }
        }

        if (array_key_exists("ExcludeHostIdSet",$param) and $param["ExcludeHostIdSet"] !== null) {
            $this->ExcludeHostIdSet = $param["ExcludeHostIdSet"];
        }
    }
}
