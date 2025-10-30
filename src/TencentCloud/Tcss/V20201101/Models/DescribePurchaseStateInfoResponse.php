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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePurchaseStateInfo返回参数结构体
 *
 * @method integer getState() 获取0：可申请试用可购买；1：只可购买(含试用审核不通过和试用过期)；2：试用生效中；3：专业版生效中；4：专业版过期
 * @method void setState(integer $State) 设置0：可申请试用可购买；1：只可购买(含试用审核不通过和试用过期)；2：试用生效中；3：专业版生效中；4：专业版过期
 * @method integer getAllCoresCnt() 获取总资源核数 = 总防护核数 + 未防护核数
 * @method void setAllCoresCnt(integer $AllCoresCnt) 设置总资源核数 = 总防护核数 + 未防护核数
 * @method integer getCoresCnt() 获取总防护核数 =已购核数+ 试用赠送核数 +弹性计费核数
 * @method void setCoresCnt(integer $CoresCnt) 设置总防护核数 =已购核数+ 试用赠送核数 +弹性计费核数
 * @method integer getUndefendCoresCnt() 获取未防护核数(未开启防护资源核数)
 * @method void setUndefendCoresCnt(integer $UndefendCoresCnt) 设置未防护核数(未开启防护资源核数)
 * @method integer getAuthorizedCoresCnt() 获取已购买核数
 * @method void setAuthorizedCoresCnt(integer $AuthorizedCoresCnt) 设置已购买核数
 * @method integer getGivenAuthorizedCoresCnt() 获取试用赠送专业版核心数
 * @method void setGivenAuthorizedCoresCnt(integer $GivenAuthorizedCoresCnt) 设置试用赠送专业版核心数
 * @method integer getCurrentFlexibleCoresCnt() 获取当前弹性计费核数数量
 * @method void setCurrentFlexibleCoresCnt(integer $CurrentFlexibleCoresCnt) 设置当前弹性计费核数数量
 * @method integer getImageCnt() 获取镜像数
 * @method void setImageCnt(integer $ImageCnt) 设置镜像数
 * @method integer getAuthorizedImageCnt() 获取已授权镜像数
 * @method void setAuthorizedImageCnt(integer $AuthorizedImageCnt) 设置已授权镜像数
 * @method string getExpirationTime() 获取过期时间
 * @method void setExpirationTime(string $ExpirationTime) 设置过期时间
 * @method integer getPurchasedAuthorizedCnt() 获取已购买镜像授权数
 * @method void setPurchasedAuthorizedCnt(integer $PurchasedAuthorizedCnt) 设置已购买镜像授权数
 * @method integer getAutomaticRenewal() 获取0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)
 * @method void setAutomaticRenewal(integer $AutomaticRenewal) 设置0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)
 * @method integer getGivenAuthorizedCnt() 获取试用期间赠送镜像授权数，可能会过期
 * @method void setGivenAuthorizedCnt(integer $GivenAuthorizedCnt) 设置试用期间赠送镜像授权数，可能会过期
 * @method string getBeginTime() 获取起始时间
 * @method void setBeginTime(string $BeginTime) 设置起始时间
 * @method string getSubState() 获取子状态(具体意义依据State字段而定)
State为4时，有效值为: ISOLATE(隔离) DESTROED(已销毁)
 * @method void setSubState(string $SubState) 设置子状态(具体意义依据State字段而定)
State为4时，有效值为: ISOLATE(隔离) DESTROED(已销毁)
 * @method string getInquireKey() 获取计费key
 * @method void setInquireKey(string $InquireKey) 设置计费key
 * @method string getDefendPolicy() 获取防护策略
 * @method void setDefendPolicy(string $DefendPolicy) 设置防护策略
 * @method integer getFlexibleCoresLimit() 获取弹性计费核数上限
 * @method void setFlexibleCoresLimit(integer $FlexibleCoresLimit) 设置弹性计费核数上限
 * @method integer getDefendClusterCoresCnt() 获取已防护集群核数
 * @method void setDefendClusterCoresCnt(integer $DefendClusterCoresCnt) 设置已防护集群核数
 * @method integer getDefendHostCoresCnt() 获取已防护主机核数
 * @method void setDefendHostCoresCnt(integer $DefendHostCoresCnt) 设置已防护主机核数
 * @method integer getTrialCoresCnt() 获取试用的专业版核数
 * @method void setTrialCoresCnt(integer $TrialCoresCnt) 设置试用的专业版核数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePurchaseStateInfoResponse extends AbstractModel
{
    /**
     * @var integer 0：可申请试用可购买；1：只可购买(含试用审核不通过和试用过期)；2：试用生效中；3：专业版生效中；4：专业版过期
     */
    public $State;

    /**
     * @var integer 总资源核数 = 总防护核数 + 未防护核数
     */
    public $AllCoresCnt;

    /**
     * @var integer 总防护核数 =已购核数+ 试用赠送核数 +弹性计费核数
     */
    public $CoresCnt;

    /**
     * @var integer 未防护核数(未开启防护资源核数)
     */
    public $UndefendCoresCnt;

    /**
     * @var integer 已购买核数
     */
    public $AuthorizedCoresCnt;

    /**
     * @var integer 试用赠送专业版核心数
     */
    public $GivenAuthorizedCoresCnt;

    /**
     * @var integer 当前弹性计费核数数量
     */
    public $CurrentFlexibleCoresCnt;

    /**
     * @var integer 镜像数
     */
    public $ImageCnt;

    /**
     * @var integer 已授权镜像数
     */
    public $AuthorizedImageCnt;

    /**
     * @var string 过期时间
     */
    public $ExpirationTime;

    /**
     * @var integer 已购买镜像授权数
     */
    public $PurchasedAuthorizedCnt;

    /**
     * @var integer 0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)
     */
    public $AutomaticRenewal;

    /**
     * @var integer 试用期间赠送镜像授权数，可能会过期
     */
    public $GivenAuthorizedCnt;

    /**
     * @var string 起始时间
     */
    public $BeginTime;

    /**
     * @var string 子状态(具体意义依据State字段而定)
State为4时，有效值为: ISOLATE(隔离) DESTROED(已销毁)
     */
    public $SubState;

    /**
     * @var string 计费key
     */
    public $InquireKey;

    /**
     * @var string 防护策略
     */
    public $DefendPolicy;

    /**
     * @var integer 弹性计费核数上限
     */
    public $FlexibleCoresLimit;

    /**
     * @var integer 已防护集群核数
     */
    public $DefendClusterCoresCnt;

    /**
     * @var integer 已防护主机核数
     */
    public $DefendHostCoresCnt;

    /**
     * @var integer 试用的专业版核数
     */
    public $TrialCoresCnt;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $State 0：可申请试用可购买；1：只可购买(含试用审核不通过和试用过期)；2：试用生效中；3：专业版生效中；4：专业版过期
     * @param integer $AllCoresCnt 总资源核数 = 总防护核数 + 未防护核数
     * @param integer $CoresCnt 总防护核数 =已购核数+ 试用赠送核数 +弹性计费核数
     * @param integer $UndefendCoresCnt 未防护核数(未开启防护资源核数)
     * @param integer $AuthorizedCoresCnt 已购买核数
     * @param integer $GivenAuthorizedCoresCnt 试用赠送专业版核心数
     * @param integer $CurrentFlexibleCoresCnt 当前弹性计费核数数量
     * @param integer $ImageCnt 镜像数
     * @param integer $AuthorizedImageCnt 已授权镜像数
     * @param string $ExpirationTime 过期时间
     * @param integer $PurchasedAuthorizedCnt 已购买镜像授权数
     * @param integer $AutomaticRenewal 0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)
     * @param integer $GivenAuthorizedCnt 试用期间赠送镜像授权数，可能会过期
     * @param string $BeginTime 起始时间
     * @param string $SubState 子状态(具体意义依据State字段而定)
State为4时，有效值为: ISOLATE(隔离) DESTROED(已销毁)
     * @param string $InquireKey 计费key
     * @param string $DefendPolicy 防护策略
     * @param integer $FlexibleCoresLimit 弹性计费核数上限
     * @param integer $DefendClusterCoresCnt 已防护集群核数
     * @param integer $DefendHostCoresCnt 已防护主机核数
     * @param integer $TrialCoresCnt 试用的专业版核数
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("AllCoresCnt",$param) and $param["AllCoresCnt"] !== null) {
            $this->AllCoresCnt = $param["AllCoresCnt"];
        }

        if (array_key_exists("CoresCnt",$param) and $param["CoresCnt"] !== null) {
            $this->CoresCnt = $param["CoresCnt"];
        }

        if (array_key_exists("UndefendCoresCnt",$param) and $param["UndefendCoresCnt"] !== null) {
            $this->UndefendCoresCnt = $param["UndefendCoresCnt"];
        }

        if (array_key_exists("AuthorizedCoresCnt",$param) and $param["AuthorizedCoresCnt"] !== null) {
            $this->AuthorizedCoresCnt = $param["AuthorizedCoresCnt"];
        }

        if (array_key_exists("GivenAuthorizedCoresCnt",$param) and $param["GivenAuthorizedCoresCnt"] !== null) {
            $this->GivenAuthorizedCoresCnt = $param["GivenAuthorizedCoresCnt"];
        }

        if (array_key_exists("CurrentFlexibleCoresCnt",$param) and $param["CurrentFlexibleCoresCnt"] !== null) {
            $this->CurrentFlexibleCoresCnt = $param["CurrentFlexibleCoresCnt"];
        }

        if (array_key_exists("ImageCnt",$param) and $param["ImageCnt"] !== null) {
            $this->ImageCnt = $param["ImageCnt"];
        }

        if (array_key_exists("AuthorizedImageCnt",$param) and $param["AuthorizedImageCnt"] !== null) {
            $this->AuthorizedImageCnt = $param["AuthorizedImageCnt"];
        }

        if (array_key_exists("ExpirationTime",$param) and $param["ExpirationTime"] !== null) {
            $this->ExpirationTime = $param["ExpirationTime"];
        }

        if (array_key_exists("PurchasedAuthorizedCnt",$param) and $param["PurchasedAuthorizedCnt"] !== null) {
            $this->PurchasedAuthorizedCnt = $param["PurchasedAuthorizedCnt"];
        }

        if (array_key_exists("AutomaticRenewal",$param) and $param["AutomaticRenewal"] !== null) {
            $this->AutomaticRenewal = $param["AutomaticRenewal"];
        }

        if (array_key_exists("GivenAuthorizedCnt",$param) and $param["GivenAuthorizedCnt"] !== null) {
            $this->GivenAuthorizedCnt = $param["GivenAuthorizedCnt"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("SubState",$param) and $param["SubState"] !== null) {
            $this->SubState = $param["SubState"];
        }

        if (array_key_exists("InquireKey",$param) and $param["InquireKey"] !== null) {
            $this->InquireKey = $param["InquireKey"];
        }

        if (array_key_exists("DefendPolicy",$param) and $param["DefendPolicy"] !== null) {
            $this->DefendPolicy = $param["DefendPolicy"];
        }

        if (array_key_exists("FlexibleCoresLimit",$param) and $param["FlexibleCoresLimit"] !== null) {
            $this->FlexibleCoresLimit = $param["FlexibleCoresLimit"];
        }

        if (array_key_exists("DefendClusterCoresCnt",$param) and $param["DefendClusterCoresCnt"] !== null) {
            $this->DefendClusterCoresCnt = $param["DefendClusterCoresCnt"];
        }

        if (array_key_exists("DefendHostCoresCnt",$param) and $param["DefendHostCoresCnt"] !== null) {
            $this->DefendHostCoresCnt = $param["DefendHostCoresCnt"];
        }

        if (array_key_exists("TrialCoresCnt",$param) and $param["TrialCoresCnt"] !== null) {
            $this->TrialCoresCnt = $param["TrialCoresCnt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
