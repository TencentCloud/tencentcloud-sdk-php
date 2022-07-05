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
 * DescribePurchaseStateInfo返回参数结构体
 *
 * @method integer getState() 获取0：可申请试用可购买；1：只可购买(含试用审核不通过和试用过期)；2：试用生效中；3：专业版生效中；4：专业版过期
 * @method void setState(integer $State) 设置0：可申请试用可购买；1：只可购买(含试用审核不通过和试用过期)；2：试用生效中；3：专业版生效中；4：专业版过期
 * @method integer getCoresCnt() 获取总核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoresCnt(integer $CoresCnt) 设置总核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAuthorizedCoresCnt() 获取已购买核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthorizedCoresCnt(integer $AuthorizedCoresCnt) 设置已购买核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getImageCnt() 获取镜像数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageCnt(integer $ImageCnt) 设置镜像数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAuthorizedImageCnt() 获取已授权镜像数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthorizedImageCnt(integer $AuthorizedImageCnt) 设置已授权镜像数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPurchasedAuthorizedCnt() 获取已购买镜像授权数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPurchasedAuthorizedCnt(integer $PurchasedAuthorizedCnt) 设置已购买镜像授权数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpirationTime() 获取过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpirationTime(string $ExpirationTime) 设置过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutomaticRenewal() 获取0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutomaticRenewal(integer $AutomaticRenewal) 设置0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGivenAuthorizedCnt() 获取试用期间赠送镜像授权数，可能会过期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGivenAuthorizedCnt(integer $GivenAuthorizedCnt) 设置试用期间赠送镜像授权数，可能会过期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBeginTime() 获取起始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBeginTime(string $BeginTime) 设置起始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubState() 获取子状态(具体意义依据State字段而定)
State为4时，有效值为: ISOLATE(隔离) DESTROED(已销毁)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubState(string $SubState) 设置子状态(具体意义依据State字段而定)
State为4时，有效值为: ISOLATE(隔离) DESTROED(已销毁)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePurchaseStateInfoResponse extends AbstractModel
{
    /**
     * @var integer 0：可申请试用可购买；1：只可购买(含试用审核不通过和试用过期)；2：试用生效中；3：专业版生效中；4：专业版过期
     */
    public $State;

    /**
     * @var integer 总核数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CoresCnt;

    /**
     * @var integer 已购买核数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthorizedCoresCnt;

    /**
     * @var integer 镜像数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageCnt;

    /**
     * @var integer 已授权镜像数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthorizedImageCnt;

    /**
     * @var integer 已购买镜像授权数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PurchasedAuthorizedCnt;

    /**
     * @var string 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpirationTime;

    /**
     * @var integer 0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutomaticRenewal;

    /**
     * @var integer 试用期间赠送镜像授权数，可能会过期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GivenAuthorizedCnt;

    /**
     * @var string 起始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BeginTime;

    /**
     * @var string 子状态(具体意义依据State字段而定)
State为4时，有效值为: ISOLATE(隔离) DESTROED(已销毁)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubState;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $State 0：可申请试用可购买；1：只可购买(含试用审核不通过和试用过期)；2：试用生效中；3：专业版生效中；4：专业版过期
     * @param integer $CoresCnt 总核数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AuthorizedCoresCnt 已购买核数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ImageCnt 镜像数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AuthorizedImageCnt 已授权镜像数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PurchasedAuthorizedCnt 已购买镜像授权数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpirationTime 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutomaticRenewal 0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GivenAuthorizedCnt 试用期间赠送镜像授权数，可能会过期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BeginTime 起始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubState 子状态(具体意义依据State字段而定)
State为4时，有效值为: ISOLATE(隔离) DESTROED(已销毁)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("CoresCnt",$param) and $param["CoresCnt"] !== null) {
            $this->CoresCnt = $param["CoresCnt"];
        }

        if (array_key_exists("AuthorizedCoresCnt",$param) and $param["AuthorizedCoresCnt"] !== null) {
            $this->AuthorizedCoresCnt = $param["AuthorizedCoresCnt"];
        }

        if (array_key_exists("ImageCnt",$param) and $param["ImageCnt"] !== null) {
            $this->ImageCnt = $param["ImageCnt"];
        }

        if (array_key_exists("AuthorizedImageCnt",$param) and $param["AuthorizedImageCnt"] !== null) {
            $this->AuthorizedImageCnt = $param["AuthorizedImageCnt"];
        }

        if (array_key_exists("PurchasedAuthorizedCnt",$param) and $param["PurchasedAuthorizedCnt"] !== null) {
            $this->PurchasedAuthorizedCnt = $param["PurchasedAuthorizedCnt"];
        }

        if (array_key_exists("ExpirationTime",$param) and $param["ExpirationTime"] !== null) {
            $this->ExpirationTime = $param["ExpirationTime"];
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
