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
 * CreateRateLimitV2请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getName() 获取规则名
 * @method void setName(string $Name) 设置规则名
 * @method integer getPriority() 获取规则优先级
 * @method void setPriority(integer $Priority) 设置规则优先级
 * @method integer getStatus() 获取规则开关，0关闭，1开启
 * @method void setStatus(integer $Status) 设置规则开关，0关闭，1开启
 * @method LimitWindow getLimitWindow() 获取限流窗口
 * @method void setLimitWindow(LimitWindow $LimitWindow) 设置限流窗口
 * @method string getLimitObject() 获取支持API或Domain，如果是基于API，则LimitPaths不能为空，否则LimitPaths为空
 * @method void setLimitObject(string $LimitObject) 设置支持API或Domain，如果是基于API，则LimitPaths不能为空，否则LimitPaths为空
 * @method integer getLimitStrategy() 获取限流策略，0:观察,1:拦截，2:人机
 * @method void setLimitStrategy(integer $LimitStrategy) 设置限流策略，0:观察,1:拦截，2:人机
 * @method LimitMethod getLimitMethod() 获取限流方法
 * @method void setLimitMethod(LimitMethod $LimitMethod) 设置限流方法
 * @method LimitPath getLimitPaths() 获取限流路径列表
 * @method void setLimitPaths(LimitPath $LimitPaths) 设置限流路径列表
 * @method array getLimitHeaders() 获取限流Headers
 * @method void setLimitHeaders(array $LimitHeaders) 设置限流Headers
 * @method LimitHeaderName getLimitHeaderName() 获取基于Header参数名限流
 * @method void setLimitHeaderName(LimitHeaderName $LimitHeaderName) 设置基于Header参数名限流
 * @method MatchOption getGetParamsName() 获取基于Get参数名限流
 * @method void setGetParamsName(MatchOption $GetParamsName) 设置基于Get参数名限流
 * @method MatchOption getGetParamsValue() 获取基于Get参数值限流
 * @method void setGetParamsValue(MatchOption $GetParamsValue) 设置基于Get参数值限流
 * @method MatchOption getPostParamsName() 获取基于Post参数名限流
 * @method void setPostParamsName(MatchOption $PostParamsName) 设置基于Post参数名限流
 * @method MatchOption getPostParamsValue() 获取基于Post参数值限流
 * @method void setPostParamsValue(MatchOption $PostParamsValue) 设置基于Post参数值限流
 * @method MatchOption getIpLocation() 获取基于IP归属地限流
 * @method void setIpLocation(MatchOption $IpLocation) 设置基于IP归属地限流
 * @method RedirectInfo getRedirectInfo() 获取重定向信息,当LimitStrategy为重定向时，此字段必填
 * @method void setRedirectInfo(RedirectInfo $RedirectInfo) 设置重定向信息,当LimitStrategy为重定向时，此字段必填
 * @method integer getBlockPage() 获取拦截页面,0表示429，否则填写blockPageID
 * @method void setBlockPage(integer $BlockPage) 设置拦截页面,0表示429，否则填写blockPageID
 * @method integer getObjectSrc() 获取限流对象来源，0：手动填写，1：API资产
 * @method void setObjectSrc(integer $ObjectSrc) 设置限流对象来源，0：手动填写，1：API资产
 * @method boolean getQuotaShare() 获取是否共享配额，只有当对象为URL时有效，false表示URL独享配额，true表示所有URL共享配额
 * @method void setQuotaShare(boolean $QuotaShare) 设置是否共享配额，只有当对象为URL时有效，false表示URL独享配额，true表示所有URL共享配额
 * @method array getPathsOption() 获取路径选项,可配置每个路径的请求方法
 * @method void setPathsOption(array $PathsOption) 设置路径选项,可配置每个路径的请求方法
 * @method integer getOrder() 获取限流执行顺序，0：默认情况，限流优先，1：安全防护优先
 * @method void setOrder(integer $Order) 设置限流执行顺序，0：默认情况，限流优先，1：安全防护优先
 */
class CreateRateLimitV2Request extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 规则名
     */
    public $Name;

    /**
     * @var integer 规则优先级
     */
    public $Priority;

    /**
     * @var integer 规则开关，0关闭，1开启
     */
    public $Status;

    /**
     * @var LimitWindow 限流窗口
     */
    public $LimitWindow;

    /**
     * @var string 支持API或Domain，如果是基于API，则LimitPaths不能为空，否则LimitPaths为空
     */
    public $LimitObject;

    /**
     * @var integer 限流策略，0:观察,1:拦截，2:人机
     */
    public $LimitStrategy;

    /**
     * @var LimitMethod 限流方法
     */
    public $LimitMethod;

    /**
     * @var LimitPath 限流路径列表
     */
    public $LimitPaths;

    /**
     * @var array 限流Headers
     */
    public $LimitHeaders;

    /**
     * @var LimitHeaderName 基于Header参数名限流
     */
    public $LimitHeaderName;

    /**
     * @var MatchOption 基于Get参数名限流
     */
    public $GetParamsName;

    /**
     * @var MatchOption 基于Get参数值限流
     */
    public $GetParamsValue;

    /**
     * @var MatchOption 基于Post参数名限流
     */
    public $PostParamsName;

    /**
     * @var MatchOption 基于Post参数值限流
     */
    public $PostParamsValue;

    /**
     * @var MatchOption 基于IP归属地限流
     */
    public $IpLocation;

    /**
     * @var RedirectInfo 重定向信息,当LimitStrategy为重定向时，此字段必填
     */
    public $RedirectInfo;

    /**
     * @var integer 拦截页面,0表示429，否则填写blockPageID
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
     */
    public $PathsOption;

    /**
     * @var integer 限流执行顺序，0：默认情况，限流优先，1：安全防护优先
     */
    public $Order;

    /**
     * @param string $Domain 域名
     * @param string $Name 规则名
     * @param integer $Priority 规则优先级
     * @param integer $Status 规则开关，0关闭，1开启
     * @param LimitWindow $LimitWindow 限流窗口
     * @param string $LimitObject 支持API或Domain，如果是基于API，则LimitPaths不能为空，否则LimitPaths为空
     * @param integer $LimitStrategy 限流策略，0:观察,1:拦截，2:人机
     * @param LimitMethod $LimitMethod 限流方法
     * @param LimitPath $LimitPaths 限流路径列表
     * @param array $LimitHeaders 限流Headers
     * @param LimitHeaderName $LimitHeaderName 基于Header参数名限流
     * @param MatchOption $GetParamsName 基于Get参数名限流
     * @param MatchOption $GetParamsValue 基于Get参数值限流
     * @param MatchOption $PostParamsName 基于Post参数名限流
     * @param MatchOption $PostParamsValue 基于Post参数值限流
     * @param MatchOption $IpLocation 基于IP归属地限流
     * @param RedirectInfo $RedirectInfo 重定向信息,当LimitStrategy为重定向时，此字段必填
     * @param integer $BlockPage 拦截页面,0表示429，否则填写blockPageID
     * @param integer $ObjectSrc 限流对象来源，0：手动填写，1：API资产
     * @param boolean $QuotaShare 是否共享配额，只有当对象为URL时有效，false表示URL独享配额，true表示所有URL共享配额
     * @param array $PathsOption 路径选项,可配置每个路径的请求方法
     * @param integer $Order 限流执行顺序，0：默认情况，限流优先，1：安全防护优先
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LimitWindow",$param) and $param["LimitWindow"] !== null) {
            $this->LimitWindow = new LimitWindow();
            $this->LimitWindow->deserialize($param["LimitWindow"]);
        }

        if (array_key_exists("LimitObject",$param) and $param["LimitObject"] !== null) {
            $this->LimitObject = $param["LimitObject"];
        }

        if (array_key_exists("LimitStrategy",$param) and $param["LimitStrategy"] !== null) {
            $this->LimitStrategy = $param["LimitStrategy"];
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
