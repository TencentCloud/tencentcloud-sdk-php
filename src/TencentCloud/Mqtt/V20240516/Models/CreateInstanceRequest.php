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
 * @method string getInstanceType() 获取<p>实例类型，需要和SkuCode保持对应关系，可参考 <a href="https://cloud.tencent.com/document/api/1778/116232">获取MQTT产品售卖规格</a> 接口获取。<br>BASIC 基础版<br>PRO  专业版<br>PLATINUM 铂金版</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例类型，需要和SkuCode保持对应关系，可参考 <a href="https://cloud.tencent.com/document/api/1778/116232">获取MQTT产品售卖规格</a> 接口获取。<br>BASIC 基础版<br>PRO  专业版<br>PLATINUM 铂金版</p>
 * @method string getName() 获取<p>集群名称不能为空, 3-64个字符，只能包含数字、字母、“-”和“_”。</p>
 * @method void setName(string $Name) 设置<p>集群名称不能为空, 3-64个字符，只能包含数字、字母、“-”和“_”。</p>
 * @method string getSkuCode() 获取<p>商品规格，需要和InstanceType保持对应关系，可参考 <a href="https://cloud.tencent.com/document/api/1778/116232">获取MQTT产品售卖规格</a> 接口获取。</p>
 * @method void setSkuCode(string $SkuCode) 设置<p>商品规格，需要和InstanceType保持对应关系，可参考 <a href="https://cloud.tencent.com/document/api/1778/116232">获取MQTT产品售卖规格</a> 接口获取。</p>
 * @method string getRemark() 获取<p>备注信息，最长 128 字符</p>
 * @method void setRemark(string $Remark) 设置<p>备注信息，最长 128 字符</p>
 * @method array getTagList() 获取<p>标签列表</p>
 * @method void setTagList(array $TagList) 设置<p>标签列表</p>
 * @method array getVpcList() 获取<p>实例绑定的VPC信息，需要传当前用户下可用的VPC和SUBNET</p>
 * @method void setVpcList(array $VpcList) 设置<p>实例绑定的VPC信息，需要传当前用户下可用的VPC和SUBNET</p>
 * @method boolean getEnablePublic() 获取<p>是否开启公网，默认false（关闭）</p>
 * @method void setEnablePublic(boolean $EnablePublic) 设置<p>是否开启公网，默认false（关闭）</p>
 * @method integer getBandwidth() 获取<p>公网带宽（单位：Mbps），EnablePublic 为True时，该字段必须填写且大于0.</p>
 * @method void setBandwidth(integer $Bandwidth) 设置<p>公网带宽（单位：Mbps），EnablePublic 为True时，该字段必须填写且大于0.</p>
 * @method array getIpRules() 获取<p>公网访问白名单，不传表示拒绝所有IP网络访问。</p>
 * @method void setIpRules(array $IpRules) 设置<p>公网访问白名单，不传表示拒绝所有IP网络访问。</p>
 * @method integer getRenewFlag() 获取<p>是否自动续费（0: 不自动续费；1: 自动续费），仅购买预付费集群时生效。默认1:自动续费</p>
 * @method void setRenewFlag(integer $RenewFlag) 设置<p>是否自动续费（0: 不自动续费；1: 自动续费），仅购买预付费集群时生效。默认1:自动续费</p>
 * @method integer getTimeSpan() 获取<p>购买时长（单位：月），购买预付费集群时生效，默认1m（月）。可选范围：1~12、24、36、48、60；</p>
 * @method void setTimeSpan(integer $TimeSpan) 设置<p>购买时长（单位：月），购买预付费集群时生效，默认1m（月）。可选范围：1~12、24、36、48、60；</p>
 * @method integer getPayMode() 获取<p>付费模式（0: 后付费；1: 预付费），默认0（后付费）。</p>
 * @method void setPayMode(integer $PayMode) 设置<p>付费模式（0: 后付费；1: 预付费），默认0（后付费）。</p>
 */
class CreateInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>实例类型，需要和SkuCode保持对应关系，可参考 <a href="https://cloud.tencent.com/document/api/1778/116232">获取MQTT产品售卖规格</a> 接口获取。<br>BASIC 基础版<br>PRO  专业版<br>PLATINUM 铂金版</p>
     */
    public $InstanceType;

    /**
     * @var string <p>集群名称不能为空, 3-64个字符，只能包含数字、字母、“-”和“_”。</p>
     */
    public $Name;

    /**
     * @var string <p>商品规格，需要和InstanceType保持对应关系，可参考 <a href="https://cloud.tencent.com/document/api/1778/116232">获取MQTT产品售卖规格</a> 接口获取。</p>
     */
    public $SkuCode;

    /**
     * @var string <p>备注信息，最长 128 字符</p>
     */
    public $Remark;

    /**
     * @var array <p>标签列表</p>
     */
    public $TagList;

    /**
     * @var array <p>实例绑定的VPC信息，需要传当前用户下可用的VPC和SUBNET</p>
     */
    public $VpcList;

    /**
     * @var boolean <p>是否开启公网，默认false（关闭）</p>
     */
    public $EnablePublic;

    /**
     * @var integer <p>公网带宽（单位：Mbps），EnablePublic 为True时，该字段必须填写且大于0.</p>
     */
    public $Bandwidth;

    /**
     * @var array <p>公网访问白名单，不传表示拒绝所有IP网络访问。</p>
     */
    public $IpRules;

    /**
     * @var integer <p>是否自动续费（0: 不自动续费；1: 自动续费），仅购买预付费集群时生效。默认1:自动续费</p>
     */
    public $RenewFlag;

    /**
     * @var integer <p>购买时长（单位：月），购买预付费集群时生效，默认1m（月）。可选范围：1~12、24、36、48、60；</p>
     */
    public $TimeSpan;

    /**
     * @var integer <p>付费模式（0: 后付费；1: 预付费），默认0（后付费）。</p>
     */
    public $PayMode;

    /**
     * @param string $InstanceType <p>实例类型，需要和SkuCode保持对应关系，可参考 <a href="https://cloud.tencent.com/document/api/1778/116232">获取MQTT产品售卖规格</a> 接口获取。<br>BASIC 基础版<br>PRO  专业版<br>PLATINUM 铂金版</p>
     * @param string $Name <p>集群名称不能为空, 3-64个字符，只能包含数字、字母、“-”和“_”。</p>
     * @param string $SkuCode <p>商品规格，需要和InstanceType保持对应关系，可参考 <a href="https://cloud.tencent.com/document/api/1778/116232">获取MQTT产品售卖规格</a> 接口获取。</p>
     * @param string $Remark <p>备注信息，最长 128 字符</p>
     * @param array $TagList <p>标签列表</p>
     * @param array $VpcList <p>实例绑定的VPC信息，需要传当前用户下可用的VPC和SUBNET</p>
     * @param boolean $EnablePublic <p>是否开启公网，默认false（关闭）</p>
     * @param integer $Bandwidth <p>公网带宽（单位：Mbps），EnablePublic 为True时，该字段必须填写且大于0.</p>
     * @param array $IpRules <p>公网访问白名单，不传表示拒绝所有IP网络访问。</p>
     * @param integer $RenewFlag <p>是否自动续费（0: 不自动续费；1: 自动续费），仅购买预付费集群时生效。默认1:自动续费</p>
     * @param integer $TimeSpan <p>购买时长（单位：月），购买预付费集群时生效，默认1m（月）。可选范围：1~12、24、36、48、60；</p>
     * @param integer $PayMode <p>付费模式（0: 后付费；1: 预付费），默认0（后付费）。</p>
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
