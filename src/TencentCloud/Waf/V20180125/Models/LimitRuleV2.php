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
 * 自研版限流规则数据结构
 *
 * @method integer getLimitRuleID() 获取规则ID
 * @method void setLimitRuleID(integer $LimitRuleID) 设置规则ID
 * @method string getName() 获取规则名
 * @method void setName(string $Name) 设置规则名
 * @method integer getPriority() 获取优先级
 * @method void setPriority(integer $Priority) 设置优先级
 * @method integer getStatus() 获取规则开关，0表示关闭，1表示开启
 * @method void setStatus(integer $Status) 设置规则开关，0表示关闭，1表示开启
 * @method integer getTsVersion() 获取时间戳
 * @method void setTsVersion(integer $TsVersion) 设置时间戳
 * @method string getLimitObject() 获取限流对象，API或Domain
 * @method void setLimitObject(string $LimitObject) 设置限流对象，API或Domain
 * @method LimitMethod getLimitMethod() 获取限流方法名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLimitMethod(LimitMethod $LimitMethod) 设置限流方法名
注意：此字段可能返回 null，表示取不到有效值。
 * @method LimitPath getLimitPaths() 获取路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLimitPaths(LimitPath $LimitPaths) 设置路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLimitHeaders() 获取Header参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLimitHeaders(array $LimitHeaders) 设置Header参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method LimitWindow getLimitWindow() 获取限流窗口
 * @method void setLimitWindow(LimitWindow $LimitWindow) 设置限流窗口
 * @method integer getLimitStrategy() 获取限流策略，0:观察,1:拦截，2:人机
 * @method void setLimitStrategy(integer $LimitStrategy) 设置限流策略，0:观察,1:拦截，2:人机
 * @method LimitHeaderName getLimitHeaderName() 获取Header参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLimitHeaderName(LimitHeaderName $LimitHeaderName) 设置Header参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method MatchOption getGetParamsName() 获取Get参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGetParamsName(MatchOption $GetParamsName) 设置Get参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method MatchOption getGetParamsValue() 获取Get参数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGetParamsValue(MatchOption $GetParamsValue) 设置Get参数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method MatchOption getPostParamsName() 获取Post参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostParamsName(MatchOption $PostParamsName) 设置Post参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method MatchOption getPostParamsValue() 获取Post参数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostParamsValue(MatchOption $PostParamsValue) 设置Post参数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method MatchOption getIpLocation() 获取Ip属地
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpLocation(MatchOption $IpLocation) 设置Ip属地
注意：此字段可能返回 null，表示取不到有效值。
 * @method RedirectInfo getRedirectInfo() 获取重定向信息，当LimitStrategy为2时，此字段不为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedirectInfo(RedirectInfo $RedirectInfo) 设置重定向信息，当LimitStrategy为2时，此字段不为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBlockPage() 获取拦截页面，0表示429，否则为BlockPageID
 * @method void setBlockPage(integer $BlockPage) 设置拦截页面，0表示429，否则为BlockPageID
 * @method integer getObjectSrc() 获取限流对象来源，0：手动填写，1：API资产
 * @method void setObjectSrc(integer $ObjectSrc) 设置限流对象来源，0：手动填写，1：API资产
 * @method boolean getQuotaShare() 获取是否共享配额，只有当对象为URL时有效，false表示URL独享配额，true表示所有URL共享配额
 * @method void setQuotaShare(boolean $QuotaShare) 设置是否共享配额，只有当对象为URL时有效，false表示URL独享配额，true表示所有URL共享配额
 * @method array getPathsOption() 获取路径选项,可配置每个路径的请求方法
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPathsOption(array $PathsOption) 设置路径选项,可配置每个路径的请求方法
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOrder() 获取574新增需求，限流执行顺序，0：默认情况，限流优先，1：安全防护优先
 * @method void setOrder(integer $Order) 设置574新增需求，限流执行顺序，0：默认情况，限流优先，1：安全防护优先
 */
class LimitRuleV2 extends AbstractModel
{
    /**
     * @var integer 规则ID
     */
    public $LimitRuleID;

    /**
     * @var string 规则名
     */
    public $Name;

    /**
     * @var integer 优先级
     */
    public $Priority;

    /**
     * @var integer 规则开关，0表示关闭，1表示开启
     */
    public $Status;

    /**
     * @var integer 时间戳
     */
    public $TsVersion;

    /**
     * @var string 限流对象，API或Domain
     */
    public $LimitObject;

    /**
     * @var LimitMethod 限流方法名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LimitMethod;

    /**
     * @var LimitPath 路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LimitPaths;

    /**
     * @var array Header参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LimitHeaders;

    /**
     * @var LimitWindow 限流窗口
     */
    public $LimitWindow;

    /**
     * @var integer 限流策略，0:观察,1:拦截，2:人机
     */
    public $LimitStrategy;

    /**
     * @var LimitHeaderName Header参数名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LimitHeaderName;

    /**
     * @var MatchOption Get参数名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GetParamsName;

    /**
     * @var MatchOption Get参数值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GetParamsValue;

    /**
     * @var MatchOption Post参数名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostParamsName;

    /**
     * @var MatchOption Post参数值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostParamsValue;

    /**
     * @var MatchOption Ip属地
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpLocation;

    /**
     * @var RedirectInfo 重定向信息，当LimitStrategy为2时，此字段不为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RedirectInfo;

    /**
     * @var integer 拦截页面，0表示429，否则为BlockPageID
     */
    public $BlockPage;

    /**
     * @var integer 限流对象来源，0：手动填写，1：API资产
     */
    public $ObjectSrc;

    /**
     * @var boolean 是否共享配额，只有当对象为URL时有效，false表示URL独享配额，true表示所有URL共享配额
     */
    public $QuotaShare;

    /**
     * @var array 路径选项,可配置每个路径的请求方法
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PathsOption;

    /**
     * @var integer 574新增需求，限流执行顺序，0：默认情况，限流优先，1：安全防护优先
     */
    public $Order;

    /**
     * @param integer $LimitRuleID 规则ID
     * @param string $Name 规则名
     * @param integer $Priority 优先级
     * @param integer $Status 规则开关，0表示关闭，1表示开启
     * @param integer $TsVersion 时间戳
     * @param string $LimitObject 限流对象，API或Domain
     * @param LimitMethod $LimitMethod 限流方法名
注意：此字段可能返回 null，表示取不到有效值。
     * @param LimitPath $LimitPaths 路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LimitHeaders Header参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param LimitWindow $LimitWindow 限流窗口
     * @param integer $LimitStrategy 限流策略，0:观察,1:拦截，2:人机
     * @param LimitHeaderName $LimitHeaderName Header参数名
注意：此字段可能返回 null，表示取不到有效值。
     * @param MatchOption $GetParamsName Get参数名
注意：此字段可能返回 null，表示取不到有效值。
     * @param MatchOption $GetParamsValue Get参数值
注意：此字段可能返回 null，表示取不到有效值。
     * @param MatchOption $PostParamsName Post参数名
注意：此字段可能返回 null，表示取不到有效值。
     * @param MatchOption $PostParamsValue Post参数值
注意：此字段可能返回 null，表示取不到有效值。
     * @param MatchOption $IpLocation Ip属地
注意：此字段可能返回 null，表示取不到有效值。
     * @param RedirectInfo $RedirectInfo 重定向信息，当LimitStrategy为2时，此字段不为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BlockPage 拦截页面，0表示429，否则为BlockPageID
     * @param integer $ObjectSrc 限流对象来源，0：手动填写，1：API资产
     * @param boolean $QuotaShare 是否共享配额，只有当对象为URL时有效，false表示URL独享配额，true表示所有URL共享配额
     * @param array $PathsOption 路径选项,可配置每个路径的请求方法
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Order 574新增需求，限流执行顺序，0：默认情况，限流优先，1：安全防护优先
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
        if (array_key_exists("LimitRuleID",$param) and $param["LimitRuleID"] !== null) {
            $this->LimitRuleID = $param["LimitRuleID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TsVersion",$param) and $param["TsVersion"] !== null) {
            $this->TsVersion = $param["TsVersion"];
        }

        if (array_key_exists("LimitObject",$param) and $param["LimitObject"] !== null) {
            $this->LimitObject = $param["LimitObject"];
        }

        if (array_key_exists("LimitMethod",$param) and $param["LimitMethod"] !== null) {
            $this->LimitMethod = new LimitMethod();
            $this->LimitMethod->deserialize($param["LimitMethod"]);
        }

        if (array_key_exists("LimitPaths",$param) and $param["LimitPaths"] !== null) {
            $this->LimitPaths = new LimitPath();
            $this->LimitPaths->deserialize($param["LimitPaths"]);
        }

        if (array_key_exists("LimitHeaders",$param) and $param["LimitHeaders"] !== null) {
            $this->LimitHeaders = [];
            foreach ($param["LimitHeaders"] as $key => $value){
                $obj = new LimitHeader();
                $obj->deserialize($value);
                array_push($this->LimitHeaders, $obj);
            }
        }

        if (array_key_exists("LimitWindow",$param) and $param["LimitWindow"] !== null) {
            $this->LimitWindow = new LimitWindow();
            $this->LimitWindow->deserialize($param["LimitWindow"]);
        }

        if (array_key_exists("LimitStrategy",$param) and $param["LimitStrategy"] !== null) {
            $this->LimitStrategy = $param["LimitStrategy"];
        }

        if (array_key_exists("LimitHeaderName",$param) and $param["LimitHeaderName"] !== null) {
            $this->LimitHeaderName = new LimitHeaderName();
            $this->LimitHeaderName->deserialize($param["LimitHeaderName"]);
        }

        if (array_key_exists("GetParamsName",$param) and $param["GetParamsName"] !== null) {
            $this->GetParamsName = new MatchOption();
            $this->GetParamsName->deserialize($param["GetParamsName"]);
        }

        if (array_key_exists("GetParamsValue",$param) and $param["GetParamsValue"] !== null) {
            $this->GetParamsValue = new MatchOption();
            $this->GetParamsValue->deserialize($param["GetParamsValue"]);
        }

        if (array_key_exists("PostParamsName",$param) and $param["PostParamsName"] !== null) {
            $this->PostParamsName = new MatchOption();
            $this->PostParamsName->deserialize($param["PostParamsName"]);
        }

        if (array_key_exists("PostParamsValue",$param) and $param["PostParamsValue"] !== null) {
            $this->PostParamsValue = new MatchOption();
            $this->PostParamsValue->deserialize($param["PostParamsValue"]);
        }

        if (array_key_exists("IpLocation",$param) and $param["IpLocation"] !== null) {
            $this->IpLocation = new MatchOption();
            $this->IpLocation->deserialize($param["IpLocation"]);
        }

        if (array_key_exists("RedirectInfo",$param) and $param["RedirectInfo"] !== null) {
            $this->RedirectInfo = new RedirectInfo();
            $this->RedirectInfo->deserialize($param["RedirectInfo"]);
        }

        if (array_key_exists("BlockPage",$param) and $param["BlockPage"] !== null) {
            $this->BlockPage = $param["BlockPage"];
        }

        if (array_key_exists("ObjectSrc",$param) and $param["ObjectSrc"] !== null) {
            $this->ObjectSrc = $param["ObjectSrc"];
        }

        if (array_key_exists("QuotaShare",$param) and $param["QuotaShare"] !== null) {
            $this->QuotaShare = $param["QuotaShare"];
        }

        if (array_key_exists("PathsOption",$param) and $param["PathsOption"] !== null) {
            $this->PathsOption = [];
            foreach ($param["PathsOption"] as $key => $value){
                $obj = new PathItem();
                $obj->deserialize($value);
                array_push($this->PathsOption, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
