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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合同组中每个子合同的发起信息
 *
 * @method array getFileIds() 获取<p>签署文件资源Id列表，目前仅支持单个文件</p>
 * @method void setFileIds(array $FileIds) 设置<p>签署文件资源Id列表，目前仅支持单个文件</p>
 * @method string getFlowName() 获取<p>签署流程名称，长度不超过200个字符</p>
 * @method void setFlowName(string $FlowName) 设置<p>签署流程名称，长度不超过200个字符</p>
 * @method array getFlowApprovers() 获取<p>签署流程签约方列表，最多不超过5个参与方</p>
 * @method void setFlowApprovers(array $FlowApprovers) 设置<p>签署流程签约方列表，最多不超过5个参与方</p>
 * @method integer getDeadline() 获取<p>签署流程截止时间，十位数时间戳，最大值为33162419560，即3020年</p>
 * @method void setDeadline(integer $Deadline) 设置<p>签署流程截止时间，十位数时间戳，最大值为33162419560，即3020年</p>
 * @method string getFlowDescription() 获取<p>签署流程的描述，长度不超过1000个字符</p>
 * @method void setFlowDescription(string $FlowDescription) 设置<p>签署流程的描述，长度不超过1000个字符</p>
 * @method string getFlowType() 获取<p>签署流程的类型，长度不超过255个字符</p><p>枚举值：</p><ul><li>入职合同： 入职合同</li><li>劳动合同： 劳动合同</li></ul>
 * @method void setFlowType(string $FlowType) 设置<p>签署流程的类型，长度不超过255个字符</p><p>枚举值：</p><ul><li>入职合同： 入职合同</li><li>劳动合同： 劳动合同</li></ul>
 * @method string getCallbackUrl() 获取<p>已废弃，请使用【应用号配置】中的回调地址统一接收消息</p>
 * @method void setCallbackUrl(string $CallbackUrl) 设置<p>已废弃，请使用【应用号配置】中的回调地址统一接收消息</p>
 * @method string getCustomerData() 获取<p>第三方应用的业务信息，最大长度1000个字符。</p>
 * @method void setCustomerData(string $CustomerData) 设置<p>第三方应用的业务信息，最大长度1000个字符。</p>
 * @method boolean getUnordered() 获取<p>合同签署顺序类型(无序签,顺序签)，默认为false，即有序签署</p>
 * @method void setUnordered(boolean $Unordered) 设置<p>合同签署顺序类型(无序签,顺序签)，默认为false，即有序签署</p>
 * @method array getComponents() 获取<p>签署文件中的发起方的填写控件，需要在发起的时候进行填充</p>
 * @method void setComponents(array $Components) 设置<p>签署文件中的发起方的填写控件，需要在发起的时候进行填充</p>
 * @method string getCustomShowMap() 获取<p>合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始</p>
 * @method void setCustomShowMap(string $CustomShowMap) 设置<p>合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始</p>
 * @method boolean getNeedSignReview() 获取<p>本企业(发起方企业)是否需要签署审批</p>
 * @method void setNeedSignReview(boolean $NeedSignReview) 设置<p>本企业(发起方企业)是否需要签署审批</p>
 * @method integer getFlowDisplayType() 获取<p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:<img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p>
 * @method void setFlowDisplayType(integer $FlowDisplayType) 设置<p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:<img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p>
 */
class FlowFileInfo extends AbstractModel
{
    /**
     * @var array <p>签署文件资源Id列表，目前仅支持单个文件</p>
     */
    public $FileIds;

    /**
     * @var string <p>签署流程名称，长度不超过200个字符</p>
     */
    public $FlowName;

    /**
     * @var array <p>签署流程签约方列表，最多不超过5个参与方</p>
     */
    public $FlowApprovers;

    /**
     * @var integer <p>签署流程截止时间，十位数时间戳，最大值为33162419560，即3020年</p>
     */
    public $Deadline;

    /**
     * @var string <p>签署流程的描述，长度不超过1000个字符</p>
     */
    public $FlowDescription;

    /**
     * @var string <p>签署流程的类型，长度不超过255个字符</p><p>枚举值：</p><ul><li>入职合同： 入职合同</li><li>劳动合同： 劳动合同</li></ul>
     */
    public $FlowType;

    /**
     * @var string <p>已废弃，请使用【应用号配置】中的回调地址统一接收消息</p>
     * @deprecated
     */
    public $CallbackUrl;

    /**
     * @var string <p>第三方应用的业务信息，最大长度1000个字符。</p>
     */
    public $CustomerData;

    /**
     * @var boolean <p>合同签署顺序类型(无序签,顺序签)，默认为false，即有序签署</p>
     */
    public $Unordered;

    /**
     * @var array <p>签署文件中的发起方的填写控件，需要在发起的时候进行填充</p>
     */
    public $Components;

    /**
     * @var string <p>合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始</p>
     */
    public $CustomShowMap;

    /**
     * @var boolean <p>本企业(发起方企业)是否需要签署审批</p>
     */
    public $NeedSignReview;

    /**
     * @var integer <p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:<img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p>
     */
    public $FlowDisplayType;

    /**
     * @param array $FileIds <p>签署文件资源Id列表，目前仅支持单个文件</p>
     * @param string $FlowName <p>签署流程名称，长度不超过200个字符</p>
     * @param array $FlowApprovers <p>签署流程签约方列表，最多不超过5个参与方</p>
     * @param integer $Deadline <p>签署流程截止时间，十位数时间戳，最大值为33162419560，即3020年</p>
     * @param string $FlowDescription <p>签署流程的描述，长度不超过1000个字符</p>
     * @param string $FlowType <p>签署流程的类型，长度不超过255个字符</p><p>枚举值：</p><ul><li>入职合同： 入职合同</li><li>劳动合同： 劳动合同</li></ul>
     * @param string $CallbackUrl <p>已废弃，请使用【应用号配置】中的回调地址统一接收消息</p>
     * @param string $CustomerData <p>第三方应用的业务信息，最大长度1000个字符。</p>
     * @param boolean $Unordered <p>合同签署顺序类型(无序签,顺序签)，默认为false，即有序签署</p>
     * @param array $Components <p>签署文件中的发起方的填写控件，需要在发起的时候进行填充</p>
     * @param string $CustomShowMap <p>合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始</p>
     * @param boolean $NeedSignReview <p>本企业(发起方企业)是否需要签署审批</p>
     * @param integer $FlowDisplayType <p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:<img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p>
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

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = [];
            foreach ($param["Components"] as $key => $value){
                $obj = new Component();
                $obj->deserialize($value);
                array_push($this->Components, $obj);
            }
        }

        if (array_key_exists("CustomShowMap",$param) and $param["CustomShowMap"] !== null) {
            $this->CustomShowMap = $param["CustomShowMap"];
        }

        if (array_key_exists("NeedSignReview",$param) and $param["NeedSignReview"] !== null) {
            $this->NeedSignReview = $param["NeedSignReview"];
        }

        if (array_key_exists("FlowDisplayType",$param) and $param["FlowDisplayType"] !== null) {
            $this->FlowDisplayType = $param["FlowDisplayType"];
        }
    }
}
