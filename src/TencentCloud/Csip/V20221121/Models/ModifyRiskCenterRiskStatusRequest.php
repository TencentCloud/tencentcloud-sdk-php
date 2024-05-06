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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRiskCenterRiskStatus请求参数结构体
 *
 * @method array getRiskStatusKeys() 获取风险资产相关数据
 * @method void setRiskStatusKeys(array $RiskStatusKeys) 设置风险资产相关数据
 * @method integer getStatus() 获取处置状态，1为已处置、2为已忽略，3为取消已处置，4为取消已忽略
 * @method void setStatus(integer $Status) 设置处置状态，1为已处置、2为已忽略，3为取消已处置，4为取消已忽略
 * @method integer getType() 获取风险类型，0-端口风险， 1-漏洞风险，2-弱口令风险， 3-网站内容风险，4-配置风险，5-风险服务暴露
 * @method void setType(integer $Type) 设置风险类型，0-端口风险， 1-漏洞风险，2-弱口令风险， 3-网站内容风险，4-配置风险，5-风险服务暴露
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 */
class ModifyRiskCenterRiskStatusRequest extends AbstractModel
{
    /**
     * @var array 风险资产相关数据
     */
    public $RiskStatusKeys;

    /**
     * @var integer 处置状态，1为已处置、2为已忽略，3为取消已处置，4为取消已忽略
     */
    public $Status;

    /**
     * @var integer 风险类型，0-端口风险， 1-漏洞风险，2-弱口令风险， 3-网站内容风险，4-配置风险，5-风险服务暴露
     */
    public $Type;

    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @param array $RiskStatusKeys 风险资产相关数据
     * @param integer $Status 处置状态，1为已处置、2为已忽略，3为取消已处置，4为取消已忽略
     * @param integer $Type 风险类型，0-端口风险， 1-漏洞风险，2-弱口令风险， 3-网站内容风险，4-配置风险，5-风险服务暴露
     * @param array $MemberId 集团账号的成员id
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
        if (array_key_exists("RiskStatusKeys",$param) and $param["RiskStatusKeys"] !== null) {
            $this->RiskStatusKeys = [];
            foreach ($param["RiskStatusKeys"] as $key => $value){
                $obj = new RiskCenterStatusKey();
                $obj->deserialize($value);
                array_push($this->RiskStatusKeys, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
