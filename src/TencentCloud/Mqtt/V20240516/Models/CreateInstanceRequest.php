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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstance请求参数结构体
 *
 * @method string getInstanceType() 获取实例类型，需要和SkuCode保持对应关系，可参考 [获取MQTT产品售卖规格](https://cloud.tencent.com/document/api/1778/116232) 接口获取。
BASIC 基础版
PRO  专业版
PLATINUM 铂金版

 * @method void setInstanceType(string $InstanceType) 设置实例类型，需要和SkuCode保持对应关系，可参考 [获取MQTT产品售卖规格](https://cloud.tencent.com/document/api/1778/116232) 接口获取。
BASIC 基础版
PRO  专业版
PLATINUM 铂金版

 * @method string getName() 获取集群名称不能为空, 3-64个字符，只能包含数字、字母、“-”和“_”。
 * @method void setName(string $Name) 设置集群名称不能为空, 3-64个字符，只能包含数字、字母、“-”和“_”。
 * @method string getSkuCode() 获取商品规格，需要和InstanceType保持对应关系，可参考 [获取MQTT产品售卖规格](https://cloud.tencent.com/document/api/1778/116232) 接口获取。
 * @method void setSkuCode(string $SkuCode) 设置商品规格，需要和InstanceType保持对应关系，可参考 [获取MQTT产品售卖规格](https://cloud.tencent.com/document/api/1778/116232) 接口获取。
 * @method string getRemark() 获取备注信息，最长 128 字符
 * @method void setRemark(string $Remark) 设置备注信息，最长 128 字符
 * @method array getTagList() 获取标签列表
 * @method void setTagList(array $TagList) 设置标签列表
 * @method array getVpcList() 获取实例绑定的VPC信息，需要传当前用户下可用的VPC和SUBNET
 * @method void setVpcList(array $VpcList) 设置实例绑定的VPC信息，需要传当前用户下可用的VPC和SUBNET
 * @method boolean getEnablePublic() 获取是否开启公网，默认false（关闭）
 * @method void setEnablePublic(boolean $EnablePublic) 设置是否开启公网，默认false（关闭）
 * @method integer getBandwidth() 获取公网带宽（单位：Mbps），EnablePublic 为True时，该字段必须填写且大于0.
 * @method void setBandwidth(integer $Bandwidth) 设置公网带宽（单位：Mbps），EnablePublic 为True时，该字段必须填写且大于0.
 * @method array getIpRules() 获取公网访问白名单，不传表示拒绝所有IP网络访问。
 * @method void setIpRules(array $IpRules) 设置公网访问白名单，不传表示拒绝所有IP网络访问。
 * @method integer getRenewFlag() 获取是否自动续费（0: 不自动续费；1: 自动续费），仅购买预付费集群时生效。默认1:自动续费
 * @method void setRenewFlag(integer $RenewFlag) 设置是否自动续费（0: 不自动续费；1: 自动续费），仅购买预付费集群时生效。默认1:自动续费
 * @method integer getTimeSpan() 获取购买时长（单位：月），购买预付费集群时生效，默认1m（月）。可选范围：1~12、24、36、48、60；
 * @method void setTimeSpan(integer $TimeSpan) 设置购买时长（单位：月），购买预付费集群时生效，默认1m（月）。可选范围：1~12、24、36、48、60；
 * @method integer getPayMode() 获取付费模式（0: 后付费；1: 预付费），默认0（后付费）。
 * @method void setPayMode(integer $PayMode) 设置付费模式（0: 后付费；1: 预付费），默认0（后付费）。
 */
class CreateInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例类型，需要和SkuCode保持对应关系，可参考 [获取MQTT产品售卖规格](https://cloud.tencent.com/document/api/1778/116232) 接口获取。
BASIC 基础版
PRO  专业版
PLATINUM 铂金版

     */
    public $InstanceType;

    /**
     * @var string 集群名称不能为空, 3-64个字符，只能包含数字、字母、“-”和“_”。
     */
    public $Name;

    /**
     * @var string 商品规格，需要和InstanceType保持对应关系，可参考 [获取MQTT产品售卖规格](https://cloud.tencent.com/document/api/1778/116232) 接口获取。
     */
    public $SkuCode;

    /**
     * @var string 备注信息，最长 128 字符
     */
    public $Remark;

    /**
     * @var array 标签列表
     */
    public $TagList;

    /**
     * @var array 实例绑定的VPC信息，需要传当前用户下可用的VPC和SUBNET
     */
    public $VpcList;

    /**
     * @var boolean 是否开启公网，默认false（关闭）
     */
    public $EnablePublic;

    /**
     * @var integer 公网带宽（单位：Mbps），EnablePublic 为True时，该字段必须填写且大于0.
     */
    public $Bandwidth;

    /**
     * @var array 公网访问白名单，不传表示拒绝所有IP网络访问。
     */
    public $IpRules;

    /**
     * @var integer 是否自动续费（0: 不自动续费；1: 自动续费），仅购买预付费集群时生效。默认1:自动续费
     */
    public $RenewFlag;

    /**
     * @var integer 购买时长（单位：月），购买预付费集群时生效，默认1m（月）。可选范围：1~12、24、36、48、60；
     */
    public $TimeSpan;

    /**
     * @var integer 付费模式（0: 后付费；1: 预付费），默认0（后付费）。
     */
    public $PayMode;

    /**
     * @param string $InstanceType 实例类型，需要和SkuCode保持对应关系，可参考 [获取MQTT产品售卖规格](https://cloud.tencent.com/document/api/1778/116232) 接口获取。
BASIC 基础版
PRO  专业版
PLATINUM 铂金版

     * @param string $Name 集群名称不能为空, 3-64个字符，只能包含数字、字母、“-”和“_”。
     * @param string $SkuCode 商品规格，需要和InstanceType保持对应关系，可参考 [获取MQTT产品售卖规格](https://cloud.tencent.com/document/api/1778/116232) 接口获取。
     * @param string $Remark 备注信息，最长 128 字符
     * @param array $TagList 标签列表
     * @param array $VpcList 实例绑定的VPC信息，需要传当前用户下可用的VPC和SUBNET
     * @param boolean $EnablePublic 是否开启公网，默认false（关闭）
     * @param integer $Bandwidth 公网带宽（单位：Mbps），EnablePublic 为True时，该字段必须填写且大于0.
     * @param array $IpRules 公网访问白名单，不传表示拒绝所有IP网络访问。
     * @param integer $RenewFlag 是否自动续费（0: 不自动续费；1: 自动续费），仅购买预付费集群时生效。默认1:自动续费
     * @param integer $TimeSpan 购买时长（单位：月），购买预付费集群时生效，默认1m（月）。可选范围：1~12、24、36、48、60；
     * @param integer $PayMode 付费模式（0: 后付费；1: 预付费），默认0（后付费）。
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

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }
    }
}
