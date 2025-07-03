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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIpAccessControl请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getCount() 获取计数标识
 * @method void setCount(integer $Count) 设置计数标识
 * @method integer getActionType() 获取动作，40表示查询白名单，42表示查询黑名单
 * @method void setActionType(integer $ActionType) 设置动作，40表示查询白名单，42表示查询黑名单
 * @method integer getVtsMin() 获取最小有效时间的时间戳
 * @method void setVtsMin(integer $VtsMin) 设置最小有效时间的时间戳
 * @method integer getVtsMax() 获取最大有效时间的时间戳
 * @method void setVtsMax(integer $VtsMax) 设置最大有效时间的时间戳
 * @method integer getCtsMin() 获取最小创建时间的时间戳
 * @method void setCtsMin(integer $CtsMin) 设置最小创建时间的时间戳
 * @method integer getCtsMax() 获取最大创建时间的时间戳
 * @method void setCtsMax(integer $CtsMax) 设置最大创建时间的时间戳
 * @method integer getOffSet() 获取分页偏移量，取Limit整数倍。最小值为0，最大值= Total/Limit向上取整
 * @method void setOffSet(integer $OffSet) 设置分页偏移量，取Limit整数倍。最小值为0，最大值= Total/Limit向上取整
 * @method integer getLimit() 获取每页返回的数量，默认为20
 * @method void setLimit(integer $Limit) 设置每页返回的数量，默认为20
 * @method string getSource() 获取来源
 * @method void setSource(string $Source) 设置来源
 * @method string getSort() 获取排序参数
 * @method void setSort(string $Sort) 设置排序参数
 * @method string getIp() 获取IP
 * @method void setIp(string $Ip) 设置IP
 * @method integer getValidStatus() 获取生效状态，1表示生效中，2表示过期，0表示全部
 * @method void setValidStatus(integer $ValidStatus) 设置生效状态，1表示生效中，2表示过期，0表示全部
 * @method string getValidTimeStampMin() 获取最小有效时间的时间戳
 * @method void setValidTimeStampMin(string $ValidTimeStampMin) 设置最小有效时间的时间戳
 * @method string getValidTimeStampMax() 获取最大有效时间的时间戳
 * @method void setValidTimeStampMax(string $ValidTimeStampMax) 设置最大有效时间的时间戳
 * @method integer getRuleId() 获取规则ID
 * @method void setRuleId(integer $RuleId) 设置规则ID
 * @method integer getTimerType() 获取0表示全部，1表示永久生效，2表示定时生效，3表示周粒度生效，4表示月粒度生效
 * @method void setTimerType(integer $TimerType) 设置0表示全部，1表示永久生效，2表示定时生效，3表示周粒度生效，4表示月粒度生效
 */
class DescribeIpAccessControlRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 计数标识
     */
    public $Count;

    /**
     * @var integer 动作，40表示查询白名单，42表示查询黑名单
     */
    public $ActionType;

    /**
     * @var integer 最小有效时间的时间戳
     * @deprecated
     */
    public $VtsMin;

    /**
     * @var integer 最大有效时间的时间戳
     * @deprecated
     */
    public $VtsMax;

    /**
     * @var integer 最小创建时间的时间戳
     */
    public $CtsMin;

    /**
     * @var integer 最大创建时间的时间戳
     */
    public $CtsMax;

    /**
     * @var integer 分页偏移量，取Limit整数倍。最小值为0，最大值= Total/Limit向上取整
     */
    public $OffSet;

    /**
     * @var integer 每页返回的数量，默认为20
     */
    public $Limit;

    /**
     * @var string 来源
     */
    public $Source;

    /**
     * @var string 排序参数
     */
    public $Sort;

    /**
     * @var string IP
     */
    public $Ip;

    /**
     * @var integer 生效状态，1表示生效中，2表示过期，0表示全部
     */
    public $ValidStatus;

    /**
     * @var string 最小有效时间的时间戳
     */
    public $ValidTimeStampMin;

    /**
     * @var string 最大有效时间的时间戳
     */
    public $ValidTimeStampMax;

    /**
     * @var integer 规则ID
     */
    public $RuleId;

    /**
     * @var integer 0表示全部，1表示永久生效，2表示定时生效，3表示周粒度生效，4表示月粒度生效
     */
    public $TimerType;

    /**
     * @param string $Domain 域名
     * @param integer $Count 计数标识
     * @param integer $ActionType 动作，40表示查询白名单，42表示查询黑名单
     * @param integer $VtsMin 最小有效时间的时间戳
     * @param integer $VtsMax 最大有效时间的时间戳
     * @param integer $CtsMin 最小创建时间的时间戳
     * @param integer $CtsMax 最大创建时间的时间戳
     * @param integer $OffSet 分页偏移量，取Limit整数倍。最小值为0，最大值= Total/Limit向上取整
     * @param integer $Limit 每页返回的数量，默认为20
     * @param string $Source 来源
     * @param string $Sort 排序参数
     * @param string $Ip IP
     * @param integer $ValidStatus 生效状态，1表示生效中，2表示过期，0表示全部
     * @param string $ValidTimeStampMin 最小有效时间的时间戳
     * @param string $ValidTimeStampMax 最大有效时间的时间戳
     * @param integer $RuleId 规则ID
     * @param integer $TimerType 0表示全部，1表示永久生效，2表示定时生效，3表示周粒度生效，4表示月粒度生效
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

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("VtsMin",$param) and $param["VtsMin"] !== null) {
            $this->VtsMin = $param["VtsMin"];
        }

        if (array_key_exists("VtsMax",$param) and $param["VtsMax"] !== null) {
            $this->VtsMax = $param["VtsMax"];
        }

        if (array_key_exists("CtsMin",$param) and $param["CtsMin"] !== null) {
            $this->CtsMin = $param["CtsMin"];
        }

        if (array_key_exists("CtsMax",$param) and $param["CtsMax"] !== null) {
            $this->CtsMax = $param["CtsMax"];
        }

        if (array_key_exists("OffSet",$param) and $param["OffSet"] !== null) {
            $this->OffSet = $param["OffSet"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("ValidStatus",$param) and $param["ValidStatus"] !== null) {
            $this->ValidStatus = $param["ValidStatus"];
        }

        if (array_key_exists("ValidTimeStampMin",$param) and $param["ValidTimeStampMin"] !== null) {
            $this->ValidTimeStampMin = $param["ValidTimeStampMin"];
        }

        if (array_key_exists("ValidTimeStampMax",$param) and $param["ValidTimeStampMax"] !== null) {
            $this->ValidTimeStampMax = $param["ValidTimeStampMax"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("TimerType",$param) and $param["TimerType"] !== null) {
            $this->TimerType = $param["TimerType"];
        }
    }
}
