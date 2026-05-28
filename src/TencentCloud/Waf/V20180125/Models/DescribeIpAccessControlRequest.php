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
 * DescribeIpAccessControl请求参数结构体
 *
 * @method string getDomain() 获取<p>域名，当操作对象为全局规则时，Domain参数应填写为&quot;global&quot;</p>
 * @method void setDomain(string $Domain) 设置<p>域名，当操作对象为全局规则时，Domain参数应填写为&quot;global&quot;</p>
 * @method integer getCount() 获取<p>计数标识</p>
 * @method void setCount(integer $Count) 设置<p>计数标识</p>
 * @method integer getActionType() 获取<p>动作，40表示查询白名单，42表示查询黑名单</p>
 * @method void setActionType(integer $ActionType) 设置<p>动作，40表示查询白名单，42表示查询黑名单</p>
 * @method integer getVtsMin() 获取<p>最小有效时间的时间戳</p>
 * @method void setVtsMin(integer $VtsMin) 设置<p>最小有效时间的时间戳</p>
 * @method integer getVtsMax() 获取<p>最大有效时间的时间戳</p>
 * @method void setVtsMax(integer $VtsMax) 设置<p>最大有效时间的时间戳</p>
 * @method integer getCtsMin() 获取<p>最小创建时间的时间戳</p>
 * @method void setCtsMin(integer $CtsMin) 设置<p>最小创建时间的时间戳</p>
 * @method integer getCtsMax() 获取<p>最大创建时间的时间戳</p>
 * @method void setCtsMax(integer $CtsMax) 设置<p>最大创建时间的时间戳</p>
 * @method integer getOffSet() 获取<p>分页偏移量，取Limit整数倍。最小值为0，最大值= Total/Limit向上取整</p>
 * @method void setOffSet(integer $OffSet) 设置<p>分页偏移量，取Limit整数倍。最小值为0，最大值= Total/Limit向上取整</p>
 * @method integer getLimit() 获取<p>每页返回的数量，默认为20</p>
 * @method void setLimit(integer $Limit) 设置<p>每页返回的数量，默认为20</p>
 * @method string getSource() 获取<p>用于按数据来源过滤黑白名单记录，非必填（默认为空字符串，表示不过滤/查询全部）。 &quot;&quot; (空字符串)    ，不按来源过滤，返回所有记录（默认值） custom（自定义），用户在控制台手动添加的黑白名单规则 cc（CC 防护    ），由 CC 防护模块自动添加的 IP 黑白名单 bot（Bot 防护），由 Bot 防护模块自动添加的 IP 黑白名单 batch（批量域名防护），批量域名维度添加的黑白名单规则 batch-group（防护对象组），防护对象组维度添加的黑白名单规则</p>
 * @method void setSource(string $Source) 设置<p>用于按数据来源过滤黑白名单记录，非必填（默认为空字符串，表示不过滤/查询全部）。 &quot;&quot; (空字符串)    ，不按来源过滤，返回所有记录（默认值） custom（自定义），用户在控制台手动添加的黑白名单规则 cc（CC 防护    ），由 CC 防护模块自动添加的 IP 黑白名单 bot（Bot 防护），由 Bot 防护模块自动添加的 IP 黑白名单 batch（批量域名防护），批量域名维度添加的黑白名单规则 batch-group（防护对象组），防护对象组维度添加的黑白名单规则</p>
 * @method string getSort() 获取<p>排序参数</p>
 * @method void setSort(string $Sort) 设置<p>排序参数</p>
 * @method string getIp() 获取<p>IP</p>
 * @method void setIp(string $Ip) 设置<p>IP</p>
 * @method integer getValidStatus() 获取<p>生效状态，1表示生效中，2表示过期，0表示全部</p>
 * @method void setValidStatus(integer $ValidStatus) 设置<p>生效状态，1表示生效中，2表示过期，0表示全部</p>
 * @method string getValidTimeStampMin() 获取<p>最小有效时间的时间戳</p>
 * @method void setValidTimeStampMin(string $ValidTimeStampMin) 设置<p>最小有效时间的时间戳</p>
 * @method string getValidTimeStampMax() 获取<p>最大有效时间的时间戳</p>
 * @method void setValidTimeStampMax(string $ValidTimeStampMax) 设置<p>最大有效时间的时间戳</p>
 * @method integer getRuleId() 获取<p>规则ID</p>
 * @method void setRuleId(integer $RuleId) 设置<p>规则ID</p>
 * @method integer getTimerType() 获取<p>0表示全部，1表示永久生效，2表示定时生效，3表示周粒度生效，4表示月粒度生效</p>
 * @method void setTimerType(integer $TimerType) 设置<p>0表示全部，1表示永久生效，2表示定时生效，3表示周粒度生效，4表示月粒度生效</p>
 * @method array getIpList() 获取<p>查询的ip列表</p>
 * @method void setIpList(array $IpList) 设置<p>查询的ip列表</p>
 */
class DescribeIpAccessControlRequest extends AbstractModel
{
    /**
     * @var string <p>域名，当操作对象为全局规则时，Domain参数应填写为&quot;global&quot;</p>
     */
    public $Domain;

    /**
     * @var integer <p>计数标识</p>
     */
    public $Count;

    /**
     * @var integer <p>动作，40表示查询白名单，42表示查询黑名单</p>
     */
    public $ActionType;

    /**
     * @var integer <p>最小有效时间的时间戳</p>
     * @deprecated
     */
    public $VtsMin;

    /**
     * @var integer <p>最大有效时间的时间戳</p>
     * @deprecated
     */
    public $VtsMax;

    /**
     * @var integer <p>最小创建时间的时间戳</p>
     */
    public $CtsMin;

    /**
     * @var integer <p>最大创建时间的时间戳</p>
     */
    public $CtsMax;

    /**
     * @var integer <p>分页偏移量，取Limit整数倍。最小值为0，最大值= Total/Limit向上取整</p>
     */
    public $OffSet;

    /**
     * @var integer <p>每页返回的数量，默认为20</p>
     */
    public $Limit;

    /**
     * @var string <p>用于按数据来源过滤黑白名单记录，非必填（默认为空字符串，表示不过滤/查询全部）。 &quot;&quot; (空字符串)    ，不按来源过滤，返回所有记录（默认值） custom（自定义），用户在控制台手动添加的黑白名单规则 cc（CC 防护    ），由 CC 防护模块自动添加的 IP 黑白名单 bot（Bot 防护），由 Bot 防护模块自动添加的 IP 黑白名单 batch（批量域名防护），批量域名维度添加的黑白名单规则 batch-group（防护对象组），防护对象组维度添加的黑白名单规则</p>
     */
    public $Source;

    /**
     * @var string <p>排序参数</p>
     */
    public $Sort;

    /**
     * @var string <p>IP</p>
     */
    public $Ip;

    /**
     * @var integer <p>生效状态，1表示生效中，2表示过期，0表示全部</p>
     */
    public $ValidStatus;

    /**
     * @var string <p>最小有效时间的时间戳</p>
     */
    public $ValidTimeStampMin;

    /**
     * @var string <p>最大有效时间的时间戳</p>
     */
    public $ValidTimeStampMax;

    /**
     * @var integer <p>规则ID</p>
     */
    public $RuleId;

    /**
     * @var integer <p>0表示全部，1表示永久生效，2表示定时生效，3表示周粒度生效，4表示月粒度生效</p>
     */
    public $TimerType;

    /**
     * @var array <p>查询的ip列表</p>
     */
    public $IpList;

    /**
     * @param string $Domain <p>域名，当操作对象为全局规则时，Domain参数应填写为&quot;global&quot;</p>
     * @param integer $Count <p>计数标识</p>
     * @param integer $ActionType <p>动作，40表示查询白名单，42表示查询黑名单</p>
     * @param integer $VtsMin <p>最小有效时间的时间戳</p>
     * @param integer $VtsMax <p>最大有效时间的时间戳</p>
     * @param integer $CtsMin <p>最小创建时间的时间戳</p>
     * @param integer $CtsMax <p>最大创建时间的时间戳</p>
     * @param integer $OffSet <p>分页偏移量，取Limit整数倍。最小值为0，最大值= Total/Limit向上取整</p>
     * @param integer $Limit <p>每页返回的数量，默认为20</p>
     * @param string $Source <p>用于按数据来源过滤黑白名单记录，非必填（默认为空字符串，表示不过滤/查询全部）。 &quot;&quot; (空字符串)    ，不按来源过滤，返回所有记录（默认值） custom（自定义），用户在控制台手动添加的黑白名单规则 cc（CC 防护    ），由 CC 防护模块自动添加的 IP 黑白名单 bot（Bot 防护），由 Bot 防护模块自动添加的 IP 黑白名单 batch（批量域名防护），批量域名维度添加的黑白名单规则 batch-group（防护对象组），防护对象组维度添加的黑白名单规则</p>
     * @param string $Sort <p>排序参数</p>
     * @param string $Ip <p>IP</p>
     * @param integer $ValidStatus <p>生效状态，1表示生效中，2表示过期，0表示全部</p>
     * @param string $ValidTimeStampMin <p>最小有效时间的时间戳</p>
     * @param string $ValidTimeStampMax <p>最大有效时间的时间戳</p>
     * @param integer $RuleId <p>规则ID</p>
     * @param integer $TimerType <p>0表示全部，1表示永久生效，2表示定时生效，3表示周粒度生效，4表示月粒度生效</p>
     * @param array $IpList <p>查询的ip列表</p>
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

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }
    }
}
