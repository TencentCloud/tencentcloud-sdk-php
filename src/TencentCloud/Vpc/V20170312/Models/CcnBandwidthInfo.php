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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于描述云联网地域间限速带宽实例的信息。
 *
 * @method string getCcnId() 获取带宽所属的云联网ID。
 * @method void setCcnId(string $CcnId) 设置带宽所属的云联网ID。
 * @method string getCreatedTime() 获取实例的创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置实例的创建时间。
 * @method string getExpiredTime() 获取实例的过期时间
 * @method void setExpiredTime(string $ExpiredTime) 设置实例的过期时间
 * @method string getRegionFlowControlId() 获取带宽实例的唯一ID。
 * @method void setRegionFlowControlId(string $RegionFlowControlId) 设置带宽实例的唯一ID。
 * @method string getRenewFlag() 获取带宽是否自动续费的标记。
 * @method void setRenewFlag(string $RenewFlag) 设置带宽是否自动续费的标记。
 * @method CcnRegionBandwidthLimit getCcnRegionBandwidthLimit() 获取描述带宽的地域和限速上限信息。在地域间限速的情况下才会返回参数，出口限速模式不返回。
 * @method void setCcnRegionBandwidthLimit(CcnRegionBandwidthLimit $CcnRegionBandwidthLimit) 设置描述带宽的地域和限速上限信息。在地域间限速的情况下才会返回参数，出口限速模式不返回。
 * @method string getMarketId() 获取云市场实例ID。
 * @method void setMarketId(string $MarketId) 设置云市场实例ID。
 * @method array getTagSet() 获取资源绑定的标签列表
 * @method void setTagSet(array $TagSet) 设置资源绑定的标签列表
 * @method boolean getDefaultQosBandwidthFlag() 获取`true表示`Qos默认带宽；`false`表示非Qos默认带宽；
 * @method void setDefaultQosBandwidthFlag(boolean $DefaultQosBandwidthFlag) 设置`true表示`Qos默认带宽；`false`表示非Qos默认带宽；
 * @method string getQosLevel() 获取服务等级信息。
 * @method void setQosLevel(string $QosLevel) 设置服务等级信息。
 */
class CcnBandwidthInfo extends AbstractModel
{
    /**
     * @var string 带宽所属的云联网ID。
     */
    public $CcnId;

    /**
     * @var string 实例的创建时间。
     */
    public $CreatedTime;

    /**
     * @var string 实例的过期时间
     */
    public $ExpiredTime;

    /**
     * @var string 带宽实例的唯一ID。
     */
    public $RegionFlowControlId;

    /**
     * @var string 带宽是否自动续费的标记。
     */
    public $RenewFlag;

    /**
     * @var CcnRegionBandwidthLimit 描述带宽的地域和限速上限信息。在地域间限速的情况下才会返回参数，出口限速模式不返回。
     */
    public $CcnRegionBandwidthLimit;

    /**
     * @var string 云市场实例ID。
     */
    public $MarketId;

    /**
     * @var array 资源绑定的标签列表
     */
    public $TagSet;

    /**
     * @var boolean `true表示`Qos默认带宽；`false`表示非Qos默认带宽；
     */
    public $DefaultQosBandwidthFlag;

    /**
     * @var string 服务等级信息。
     */
    public $QosLevel;

    /**
     * @param string $CcnId 带宽所属的云联网ID。
     * @param string $CreatedTime 实例的创建时间。
     * @param string $ExpiredTime 实例的过期时间
     * @param string $RegionFlowControlId 带宽实例的唯一ID。
     * @param string $RenewFlag 带宽是否自动续费的标记。
     * @param CcnRegionBandwidthLimit $CcnRegionBandwidthLimit 描述带宽的地域和限速上限信息。在地域间限速的情况下才会返回参数，出口限速模式不返回。
     * @param string $MarketId 云市场实例ID。
     * @param array $TagSet 资源绑定的标签列表
     * @param boolean $DefaultQosBandwidthFlag `true表示`Qos默认带宽；`false`表示非Qos默认带宽；
     * @param string $QosLevel 服务等级信息。
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("RegionFlowControlId",$param) and $param["RegionFlowControlId"] !== null) {
            $this->RegionFlowControlId = $param["RegionFlowControlId"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("CcnRegionBandwidthLimit",$param) and $param["CcnRegionBandwidthLimit"] !== null) {
            $this->CcnRegionBandwidthLimit = new CcnRegionBandwidthLimit();
            $this->CcnRegionBandwidthLimit->deserialize($param["CcnRegionBandwidthLimit"]);
        }

        if (array_key_exists("MarketId",$param) and $param["MarketId"] !== null) {
            $this->MarketId = $param["MarketId"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("DefaultQosBandwidthFlag",$param) and $param["DefaultQosBandwidthFlag"] !== null) {
            $this->DefaultQosBandwidthFlag = $param["DefaultQosBandwidthFlag"];
        }

        if (array_key_exists("QosLevel",$param) and $param["QosLevel"] !== null) {
            $this->QosLevel = $param["QosLevel"];
        }
    }
}
