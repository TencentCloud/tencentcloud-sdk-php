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
 * @method integer getState() 获取<p>0：可申请试用可购买；1：只可购买(含试用审核不通过和试用过期)；2：试用生效中；3：专业版生效中；4：专业版过期</p>
 * @method void setState(integer $State) 设置<p>0：可申请试用可购买；1：只可购买(含试用审核不通过和试用过期)；2：试用生效中；3：专业版生效中；4：专业版过期</p>
 * @method integer getAllCoresCnt() 获取<p>总资源核数 = 总防护核数 + 未防护核数</p>
 * @method void setAllCoresCnt(integer $AllCoresCnt) 设置<p>总资源核数 = 总防护核数 + 未防护核数</p>
 * @method integer getCoresCnt() 获取<p>总防护核数 =已购核数+ 试用赠送核数 +弹性计费核数</p>
 * @method void setCoresCnt(integer $CoresCnt) 设置<p>总防护核数 =已购核数+ 试用赠送核数 +弹性计费核数</p>
 * @method integer getUndefendCoresCnt() 获取<p>未防护核数(未开启防护资源核数)</p>
 * @method void setUndefendCoresCnt(integer $UndefendCoresCnt) 设置<p>未防护核数(未开启防护资源核数)</p>
 * @method integer getAuthorizedCoresCnt() 获取<p>已购买核数</p>
 * @method void setAuthorizedCoresCnt(integer $AuthorizedCoresCnt) 设置<p>已购买核数</p>
 * @method integer getGivenAuthorizedCoresCnt() 获取<p>试用赠送专业版核心数</p>
 * @method void setGivenAuthorizedCoresCnt(integer $GivenAuthorizedCoresCnt) 设置<p>试用赠送专业版核心数</p>
 * @method integer getCurrentFlexibleCoresCnt() 获取<p>当前弹性计费核数数量</p>
 * @method void setCurrentFlexibleCoresCnt(integer $CurrentFlexibleCoresCnt) 设置<p>当前弹性计费核数数量</p>
 * @method integer getImageCnt() 获取<p>镜像数</p>
 * @method void setImageCnt(integer $ImageCnt) 设置<p>镜像数</p>
 * @method integer getAuthorizedImageCnt() 获取<p>已授权镜像数</p>
 * @method void setAuthorizedImageCnt(integer $AuthorizedImageCnt) 设置<p>已授权镜像数</p>
 * @method string getExpirationTime() 获取<p>过期时间</p>
 * @method void setExpirationTime(string $ExpirationTime) 设置<p>过期时间</p>
 * @method integer getPurchasedAuthorizedCnt() 获取<p>已购买镜像授权数</p>
 * @method void setPurchasedAuthorizedCnt(integer $PurchasedAuthorizedCnt) 设置<p>已购买镜像授权数</p>
 * @method integer getAutomaticRenewal() 获取<p>0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
 * @method void setAutomaticRenewal(integer $AutomaticRenewal) 设置<p>0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
 * @method integer getGivenAuthorizedCnt() 获取<p>试用期间赠送镜像授权数，可能会过期</p>
 * @method void setGivenAuthorizedCnt(integer $GivenAuthorizedCnt) 设置<p>试用期间赠送镜像授权数，可能会过期</p>
 * @method string getBeginTime() 获取<p>起始时间</p>
 * @method void setBeginTime(string $BeginTime) 设置<p>起始时间</p>
 * @method string getSubState() 获取<p>子状态(具体意义依据State字段而定)<br>State为4时，有效值为: ISOLATE(隔离) DESTROED(已销毁)</p>
 * @method void setSubState(string $SubState) 设置<p>子状态(具体意义依据State字段而定)<br>State为4时，有效值为: ISOLATE(隔离) DESTROED(已销毁)</p>
 * @method string getInquireKey() 获取<p>计费key</p>
 * @method void setInquireKey(string $InquireKey) 设置<p>计费key</p>
 * @method string getDefendPolicy() 获取<p>防护策略</p>
 * @method void setDefendPolicy(string $DefendPolicy) 设置<p>防护策略</p>
 * @method integer getFlexibleCoresLimit() 获取<p>弹性计费核数上限</p>
 * @method void setFlexibleCoresLimit(integer $FlexibleCoresLimit) 设置<p>弹性计费核数上限</p>
 * @method integer getDefendClusterCoresCnt() 获取<p>已防护集群核数</p>
 * @method void setDefendClusterCoresCnt(integer $DefendClusterCoresCnt) 设置<p>已防护集群核数</p>
 * @method integer getDefendHostCoresCnt() 获取<p>已防护主机核数</p>
 * @method void setDefendHostCoresCnt(integer $DefendHostCoresCnt) 设置<p>已防护主机核数</p>
 * @method integer getTrialCoresCnt() 获取<p>试用的专业版核数</p>
 * @method void setTrialCoresCnt(integer $TrialCoresCnt) 设置<p>试用的专业版核数</p>
 * @method integer getNoContainerCoresCnt() 获取<p>无容器核数</p>
 * @method void setNoContainerCoresCnt(integer $NoContainerCoresCnt) 设置<p>无容器核数</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePurchaseStateInfoResponse extends AbstractModel
{
    /**
     * @var integer <p>0：可申请试用可购买；1：只可购买(含试用审核不通过和试用过期)；2：试用生效中；3：专业版生效中；4：专业版过期</p>
     */
    public $State;

    /**
     * @var integer <p>总资源核数 = 总防护核数 + 未防护核数</p>
     */
    public $AllCoresCnt;

    /**
     * @var integer <p>总防护核数 =已购核数+ 试用赠送核数 +弹性计费核数</p>
     */
    public $CoresCnt;

    /**
     * @var integer <p>未防护核数(未开启防护资源核数)</p>
     */
    public $UndefendCoresCnt;

    /**
     * @var integer <p>已购买核数</p>
     */
    public $AuthorizedCoresCnt;

    /**
     * @var integer <p>试用赠送专业版核心数</p>
     */
    public $GivenAuthorizedCoresCnt;

    /**
     * @var integer <p>当前弹性计费核数数量</p>
     */
    public $CurrentFlexibleCoresCnt;

    /**
     * @var integer <p>镜像数</p>
     */
    public $ImageCnt;

    /**
     * @var integer <p>已授权镜像数</p>
     */
    public $AuthorizedImageCnt;

    /**
     * @var string <p>过期时间</p>
     */
    public $ExpirationTime;

    /**
     * @var integer <p>已购买镜像授权数</p>
     */
    public $PurchasedAuthorizedCnt;

    /**
     * @var integer <p>0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
     */
    public $AutomaticRenewal;

    /**
     * @var integer <p>试用期间赠送镜像授权数，可能会过期</p>
     */
    public $GivenAuthorizedCnt;

    /**
     * @var string <p>起始时间</p>
     */
    public $BeginTime;

    /**
     * @var string <p>子状态(具体意义依据State字段而定)<br>State为4时，有效值为: ISOLATE(隔离) DESTROED(已销毁)</p>
     */
    public $SubState;

    /**
     * @var string <p>计费key</p>
     */
    public $InquireKey;

    /**
     * @var string <p>防护策略</p>
     */
    public $DefendPolicy;

    /**
     * @var integer <p>弹性计费核数上限</p>
     */
    public $FlexibleCoresLimit;

    /**
     * @var integer <p>已防护集群核数</p>
     */
    public $DefendClusterCoresCnt;

    /**
     * @var integer <p>已防护主机核数</p>
     */
    public $DefendHostCoresCnt;

    /**
     * @var integer <p>试用的专业版核数</p>
     */
    public $TrialCoresCnt;

    /**
     * @var integer <p>无容器核数</p>
     */
    public $NoContainerCoresCnt;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $State <p>0：可申请试用可购买；1：只可购买(含试用审核不通过和试用过期)；2：试用生效中；3：专业版生效中；4：专业版过期</p>
     * @param integer $AllCoresCnt <p>总资源核数 = 总防护核数 + 未防护核数</p>
     * @param integer $CoresCnt <p>总防护核数 =已购核数+ 试用赠送核数 +弹性计费核数</p>
     * @param integer $UndefendCoresCnt <p>未防护核数(未开启防护资源核数)</p>
     * @param integer $AuthorizedCoresCnt <p>已购买核数</p>
     * @param integer $GivenAuthorizedCoresCnt <p>试用赠送专业版核心数</p>
     * @param integer $CurrentFlexibleCoresCnt <p>当前弹性计费核数数量</p>
     * @param integer $ImageCnt <p>镜像数</p>
     * @param integer $AuthorizedImageCnt <p>已授权镜像数</p>
     * @param string $ExpirationTime <p>过期时间</p>
     * @param integer $PurchasedAuthorizedCnt <p>已购买镜像授权数</p>
     * @param integer $AutomaticRenewal <p>0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
     * @param integer $GivenAuthorizedCnt <p>试用期间赠送镜像授权数，可能会过期</p>
     * @param string $BeginTime <p>起始时间</p>
     * @param string $SubState <p>子状态(具体意义依据State字段而定)<br>State为4时，有效值为: ISOLATE(隔离) DESTROED(已销毁)</p>
     * @param string $InquireKey <p>计费key</p>
     * @param string $DefendPolicy <p>防护策略</p>
     * @param integer $FlexibleCoresLimit <p>弹性计费核数上限</p>
     * @param integer $DefendClusterCoresCnt <p>已防护集群核数</p>
     * @param integer $DefendHostCoresCnt <p>已防护主机核数</p>
     * @param integer $TrialCoresCnt <p>试用的专业版核数</p>
     * @param integer $NoContainerCoresCnt <p>无容器核数</p>
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

        if (array_key_exists("NoContainerCoresCnt",$param) and $param["NoContainerCoresCnt"] !== null) {
            $this->NoContainerCoresCnt = $param["NoContainerCoresCnt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
