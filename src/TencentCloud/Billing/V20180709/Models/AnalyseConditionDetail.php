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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 成本分析过滤框复杂类型
 *
 * @method array getBusiness() 获取产品
 * @method void setBusiness(array $Business) 设置产品
 * @method array getProject() 获取项目
 * @method void setProject(array $Project) 设置项目
 * @method array getRegion() 获取地域
 * @method void setRegion(array $Region) 设置地域
 * @method array getPayMode() 获取计费模式
 * @method void setPayMode(array $PayMode) 设置计费模式
 * @method array getActionType() 获取交易类型
 * @method void setActionType(array $ActionType) 设置交易类型
 * @method array getZone() 获取可用区
 * @method void setZone(array $Zone) 设置可用区
 * @method array getOwnerUin() 获取资源所有者Uin
 * @method void setOwnerUin(array $OwnerUin) 设置资源所有者Uin
 * @method array getAmount() 获取费用类型
 * @method void setAmount(array $Amount) 设置费用类型
 */
class AnalyseConditionDetail extends AbstractModel
{
    /**
     * @var array 产品
     */
    public $Business;

    /**
     * @var array 项目
     */
    public $Project;

    /**
     * @var array 地域
     */
    public $Region;

    /**
     * @var array 计费模式
     */
    public $PayMode;

    /**
     * @var array 交易类型
     */
    public $ActionType;

    /**
     * @var array 可用区
     */
    public $Zone;

    /**
     * @var array 资源所有者Uin
     */
    public $OwnerUin;

    /**
     * @var array 费用类型
     */
    public $Amount;

    /**
     * @param array $Business 产品
     * @param array $Project 项目
     * @param array $Region 地域
     * @param array $PayMode 计费模式
     * @param array $ActionType 交易类型
     * @param array $Zone 可用区
     * @param array $OwnerUin 资源所有者Uin
     * @param array $Amount 费用类型
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = [];
            foreach ($param["Business"] as $key => $value){
                $obj = new AnalyseBusinessDetail();
                $obj->deserialize($value);
                array_push($this->Business, $obj);
            }
        }

        if (array_key_exists("Project",$param) and $param["Project"] !== null) {
            $this->Project = [];
            foreach ($param["Project"] as $key => $value){
                $obj = new AnalyseProjectDetail();
                $obj->deserialize($value);
                array_push($this->Project, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = [];
            foreach ($param["Region"] as $key => $value){
                $obj = new AnalyseRegionDetail();
                $obj->deserialize($value);
                array_push($this->Region, $obj);
            }
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = [];
            foreach ($param["PayMode"] as $key => $value){
                $obj = new AnalysePayModeDetail();
                $obj->deserialize($value);
                array_push($this->PayMode, $obj);
            }
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = [];
            foreach ($param["ActionType"] as $key => $value){
                $obj = new AnalyseActionTypeDetail();
                $obj->deserialize($value);
                array_push($this->ActionType, $obj);
            }
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = [];
            foreach ($param["Zone"] as $key => $value){
                $obj = new AnalyseZoneDetail();
                $obj->deserialize($value);
                array_push($this->Zone, $obj);
            }
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = [];
            foreach ($param["OwnerUin"] as $key => $value){
                $obj = new AnalyseOwnerUinDetail();
                $obj->deserialize($value);
                array_push($this->OwnerUin, $obj);
            }
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = [];
            foreach ($param["Amount"] as $key => $value){
                $obj = new AnalyseAmountDetail();
                $obj->deserialize($value);
                array_push($this->Amount, $obj);
            }
        }
    }
}
