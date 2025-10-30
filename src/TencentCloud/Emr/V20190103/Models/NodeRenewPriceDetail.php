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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点续费询价明细
 *
 * @method integer getChargeType() 获取计费类型，包月为1、包销为3
 * @method void setChargeType(integer $ChargeType) 设置计费类型，包月为1、包销为3
 * @method string getEmrResourceId() 获取emr资源id
 * @method void setEmrResourceId(string $EmrResourceId) 设置emr资源id
 * @method string getNodeType() 获取节点类型
 * @method void setNodeType(string $NodeType) 设置节点类型
 * @method string getIp() 获取节点内网ip
 * @method void setIp(string $Ip) 设置节点内网ip
 * @method string getExpireTime() 获取当前到期时间
 * @method void setExpireTime(string $ExpireTime) 设置当前到期时间
 * @method float getOriginalCost() 获取原价
 * @method void setOriginalCost(float $OriginalCost) 设置原价
 * @method float getDiscountCost() 获取折扣价
 * @method void setDiscountCost(float $DiscountCost) 设置折扣价
 * @method array getRenewPriceDetails() 获取节点子项续费询价明细列表
 * @method void setRenewPriceDetails(array $RenewPriceDetails) 设置节点子项续费询价明细列表
 */
class NodeRenewPriceDetail extends AbstractModel
{
    /**
     * @var integer 计费类型，包月为1、包销为3
     */
    public $ChargeType;

    /**
     * @var string emr资源id
     */
    public $EmrResourceId;

    /**
     * @var string 节点类型
     */
    public $NodeType;

    /**
     * @var string 节点内网ip
     */
    public $Ip;

    /**
     * @var string 当前到期时间
     */
    public $ExpireTime;

    /**
     * @var float 原价
     */
    public $OriginalCost;

    /**
     * @var float 折扣价
     */
    public $DiscountCost;

    /**
     * @var array 节点子项续费询价明细列表
     */
    public $RenewPriceDetails;

    /**
     * @param integer $ChargeType 计费类型，包月为1、包销为3
     * @param string $EmrResourceId emr资源id
     * @param string $NodeType 节点类型
     * @param string $Ip 节点内网ip
     * @param string $ExpireTime 当前到期时间
     * @param float $OriginalCost 原价
     * @param float $DiscountCost 折扣价
     * @param array $RenewPriceDetails 节点子项续费询价明细列表
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
        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("EmrResourceId",$param) and $param["EmrResourceId"] !== null) {
            $this->EmrResourceId = $param["EmrResourceId"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("OriginalCost",$param) and $param["OriginalCost"] !== null) {
            $this->OriginalCost = $param["OriginalCost"];
        }

        if (array_key_exists("DiscountCost",$param) and $param["DiscountCost"] !== null) {
            $this->DiscountCost = $param["DiscountCost"];
        }

        if (array_key_exists("RenewPriceDetails",$param) and $param["RenewPriceDetails"] !== null) {
            $this->RenewPriceDetails = [];
            foreach ($param["RenewPriceDetails"] as $key => $value){
                $obj = new RenewPriceDetail();
                $obj->deserialize($value);
                array_push($this->RenewPriceDetails, $obj);
            }
        }
    }
}
