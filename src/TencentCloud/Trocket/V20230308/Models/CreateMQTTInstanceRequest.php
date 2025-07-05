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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMQTTInstance请求参数结构体
 *
 * @method string getInstanceType() 获取实例类型，
EXPERIMENT 体验版
BASIC 基础版
PRO  专业版
PLATINUM 铂金版
 * @method void setInstanceType(string $InstanceType) 设置实例类型，
EXPERIMENT 体验版
BASIC 基础版
PRO  专业版
PLATINUM 铂金版
 * @method string getName() 获取实例名称
 * @method void setName(string $Name) 设置实例名称
 * @method string getSkuCode() 获取商品规格，可用规格如下：
basic_1k,
 * @method void setSkuCode(string $SkuCode) 设置商品规格，可用规格如下：
basic_1k,
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 * @method array getTagList() 获取标签列表
 * @method void setTagList(array $TagList) 设置标签列表
 * @method array getVpcList() 获取实例绑定的VPC信息
 * @method void setVpcList(array $VpcList) 设置实例绑定的VPC信息
 * @method boolean getEnablePublic() 获取是否开启公网
 * @method void setEnablePublic(boolean $EnablePublic) 设置是否开启公网
 * @method integer getBandwidth() 获取公网带宽（单位：兆）
 * @method void setBandwidth(integer $Bandwidth) 设置公网带宽（单位：兆）
 * @method array getIpRules() 获取公网访问白名单
 * @method void setIpRules(array $IpRules) 设置公网访问白名单
 * @method integer getRenewFlag() 获取是否自动续费（0: 不自动续费；1: 自动续费）
 * @method void setRenewFlag(integer $RenewFlag) 设置是否自动续费（0: 不自动续费；1: 自动续费）
 * @method integer getTimeSpan() 获取购买时长（单位：月）
 * @method void setTimeSpan(integer $TimeSpan) 设置购买时长（单位：月）
 */
class CreateMQTTInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例类型，
EXPERIMENT 体验版
BASIC 基础版
PRO  专业版
PLATINUM 铂金版
     */
    public $InstanceType;

    /**
     * @var string 实例名称
     */
    public $Name;

    /**
     * @var string 商品规格，可用规格如下：
basic_1k,
     */
    public $SkuCode;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @var array 标签列表
     */
    public $TagList;

    /**
     * @var array 实例绑定的VPC信息
     */
    public $VpcList;

    /**
     * @var boolean 是否开启公网
     */
    public $EnablePublic;

    /**
     * @var integer 公网带宽（单位：兆）
     */
    public $Bandwidth;

    /**
     * @var array 公网访问白名单
     */
    public $IpRules;

    /**
     * @var integer 是否自动续费（0: 不自动续费；1: 自动续费）
     */
    public $RenewFlag;

    /**
     * @var integer 购买时长（单位：月）
     */
    public $TimeSpan;

    /**
     * @param string $InstanceType 实例类型，
EXPERIMENT 体验版
BASIC 基础版
PRO  专业版
PLATINUM 铂金版
     * @param string $Name 实例名称
     * @param string $SkuCode 商品规格，可用规格如下：
basic_1k,
     * @param string $Remark 备注信息
     * @param array $TagList 标签列表
     * @param array $VpcList 实例绑定的VPC信息
     * @param boolean $EnablePublic 是否开启公网
     * @param integer $Bandwidth 公网带宽（单位：兆）
     * @param array $IpRules 公网访问白名单
     * @param integer $RenewFlag 是否自动续费（0: 不自动续费；1: 自动续费）
     * @param integer $TimeSpan 购买时长（单位：月）
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SkuCode",$param) and $param["SkuCode"] !== null) {
            $this->SkuCode = $param["SkuCode"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("VpcList",$param) and $param["VpcList"] !== null) {
            $this->VpcList = [];
            foreach ($param["VpcList"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->VpcList, $obj);
            }
        }

        if (array_key_exists("EnablePublic",$param) and $param["EnablePublic"] !== null) {
            $this->EnablePublic = $param["EnablePublic"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("IpRules",$param) and $param["IpRules"] !== null) {
            $this->IpRules = [];
            foreach ($param["IpRules"] as $key => $value){
                $obj = new IpRule();
                $obj->deserialize($value);
                array_push($this->IpRules, $obj);
            }
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }
    }
}
