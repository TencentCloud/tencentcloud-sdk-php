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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合同组中每个子合同的发起信息
 *
 * @method array getFileIds() 获取签署文件资源Id列表，目前仅支持单个文件
 * @method void setFileIds(array $FileIds) 设置签署文件资源Id列表，目前仅支持单个文件
 * @method string getFlowName() 获取签署流程名称，长度不超过200个字符
 * @method void setFlowName(string $FlowName) 设置签署流程名称，长度不超过200个字符
 * @method array getFlowApprovers() 获取签署流程签约方列表，最多不超过5个参与方
 * @method void setFlowApprovers(array $FlowApprovers) 设置签署流程签约方列表，最多不超过5个参与方
 * @method integer getDeadline() 获取签署流程截止时间，十位数时间戳，最大值为33162419560，即3020年
 * @method void setDeadline(integer $Deadline) 设置签署流程截止时间，十位数时间戳，最大值为33162419560，即3020年
 * @method string getFlowDescription() 获取签署流程的描述，长度不超过1000个字符
 * @method void setFlowDescription(string $FlowDescription) 设置签署流程的描述，长度不超过1000个字符
 * @method string getFlowType() 获取签署流程的类型，长度不超过255个字符
 * @method void setFlowType(string $FlowType) 设置签署流程的类型，长度不超过255个字符
 * @method string getCallbackUrl() 获取签署流程回调地址，长度不超过255个字符
 * @method void setCallbackUrl(string $CallbackUrl) 设置签署流程回调地址，长度不超过255个字符
 * @method string getCustomerData() 获取第三方应用的业务信息，最大长度1000个字符。发起自动签署时，需设置对应自动签署场景，目前仅支持场景：处方单-E_PRESCRIPTION_AUTO_SIGN
 * @method void setCustomerData(string $CustomerData) 设置第三方应用的业务信息，最大长度1000个字符。发起自动签署时，需设置对应自动签署场景，目前仅支持场景：处方单-E_PRESCRIPTION_AUTO_SIGN
 * @method boolean getUnordered() 获取合同签署顺序类型(无序签,顺序签)，默认为false，即有序签署
 * @method void setUnordered(boolean $Unordered) 设置合同签署顺序类型(无序签,顺序签)，默认为false，即有序签署
 * @method string getCustomShowMap() 获取合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始
 * @method void setCustomShowMap(string $CustomShowMap) 设置合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始
 * @method boolean getNeedSignReview() 获取本企业(发起方企业)是否需要签署审批
 * @method void setNeedSignReview(boolean $NeedSignReview) 设置本企业(发起方企业)是否需要签署审批
 */
class FlowFileInfo extends AbstractModel
{
    /**
     * @var array 签署文件资源Id列表，目前仅支持单个文件
     */
    public $FileIds;

    /**
     * @var string 签署流程名称，长度不超过200个字符
     */
    public $FlowName;

    /**
     * @var array 签署流程签约方列表，最多不超过5个参与方
     */
    public $FlowApprovers;

    /**
     * @var integer 签署流程截止时间，十位数时间戳，最大值为33162419560，即3020年
     */
    public $Deadline;

    /**
     * @var string 签署流程的描述，长度不超过1000个字符
     */
    public $FlowDescription;

    /**
     * @var string 签署流程的类型，长度不超过255个字符
     */
    public $FlowType;

    /**
     * @var string 签署流程回调地址，长度不超过255个字符
     */
    public $CallbackUrl;

    /**
     * @var string 第三方应用的业务信息，最大长度1000个字符。发起自动签署时，需设置对应自动签署场景，目前仅支持场景：处方单-E_PRESCRIPTION_AUTO_SIGN
     */
    public $CustomerData;

    /**
     * @var boolean 合同签署顺序类型(无序签,顺序签)，默认为false，即有序签署
     */
    public $Unordered;

    /**
     * @var string 合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始
     */
    public $CustomShowMap;

    /**
     * @var boolean 本企业(发起方企业)是否需要签署审批
     */
    public $NeedSignReview;

    /**
     * @param array $FileIds 签署文件资源Id列表，目前仅支持单个文件
     * @param string $FlowName 签署流程名称，长度不超过200个字符
     * @param array $FlowApprovers 签署流程签约方列表，最多不超过5个参与方
     * @param integer $Deadline 签署流程截止时间，十位数时间戳，最大值为33162419560，即3020年
     * @param string $FlowDescription 签署流程的描述，长度不超过1000个字符
     * @param string $FlowType 签署流程的类型，长度不超过255个字符
     * @param string $CallbackUrl 签署流程回调地址，长度不超过255个字符
     * @param string $CustomerData 第三方应用的业务信息，最大长度1000个字符。发起自动签署时，需设置对应自动签署场景，目前仅支持场景：处方单-E_PRESCRIPTION_AUTO_SIGN
     * @param boolean $Unordered 合同签署顺序类型(无序签,顺序签)，默认为false，即有序签署
     * @param string $CustomShowMap 合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始
     * @param boolean $NeedSignReview 本企业(发起方企业)是否需要签署审批
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
        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("FlowApprovers",$param) and $param["FlowApprovers"] !== null) {
            $this->FlowApprovers = [];
            foreach ($param["FlowApprovers"] as $key => $value){
                $obj = new FlowApproverInfo();
                $obj->deserialize($value);
                array_push($this->FlowApprovers, $obj);
            }
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("FlowDescription",$param) and $param["FlowDescription"] !== null) {
            $this->FlowDescription = $param["FlowDescription"];
        }

        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("CustomerData",$param) and $param["CustomerData"] !== null) {
            $this->CustomerData = $param["CustomerData"];
        }

        if (array_key_exists("Unordered",$param) and $param["Unordered"] !== null) {
            $this->Unordered = $param["Unordered"];
        }

        if (array_key_exists("CustomShowMap",$param) and $param["CustomShowMap"] !== null) {
            $this->CustomShowMap = $param["CustomShowMap"];
        }

        if (array_key_exists("NeedSignReview",$param) and $param["NeedSignReview"] !== null) {
            $this->NeedSignReview = $param["NeedSignReview"];
        }
    }
}
