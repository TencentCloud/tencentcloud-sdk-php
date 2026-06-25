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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 此结构体(FlowGroupInfo)描述的是合同组(流程组)的单个合同(流程)信息
 *
 * @method string getFlowName() 获取<p>合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。<br>该名称还将用于合同签署完成后的下载文件名。</p>
 * @method void setFlowName(string $FlowName) 设置<p>合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。<br>该名称还将用于合同签署完成后的下载文件名。</p>
 * @method array getApprovers() 获取<p>签署流程参与者信息，最大限制50方<br>注意 approver中的顺序需要和模板中的顺序保持一致， 否则会导致模板中配置的信息无效。</p>
 * @method void setApprovers(array $Approvers) 设置<p>签署流程参与者信息，最大限制50方<br>注意 approver中的顺序需要和模板中的顺序保持一致， 否则会导致模板中配置的信息无效。</p>
 * @method array getFileIds() 获取<p>文件资源ID，通过多文件上传<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles">UploadFiles</a>接口获得，为32位字符串。<br>注：此字段定义为数组，但仅支持单个文件</p>
 * @method void setFileIds(array $FileIds) 设置<p>文件资源ID，通过多文件上传<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles">UploadFiles</a>接口获得，为32位字符串。<br>注：此字段定义为数组，但仅支持单个文件</p>
 * @method string getTemplateId() 获取<p>合同模板ID，为32位字符串。<br>建议开发者保存此模板ID，后续用此模板发起合同流程需要此参数。<br>可登录腾讯电子签控制台，在 &quot;模板&quot;-&gt;&quot;模板中心&quot;-&gt;&quot;列表展示设置&quot;选中模板 ID 中查看某个模板的TemplateId(在页面中展示为模板ID)。</p>
 * @method void setTemplateId(string $TemplateId) 设置<p>合同模板ID，为32位字符串。<br>建议开发者保存此模板ID，后续用此模板发起合同流程需要此参数。<br>可登录腾讯电子签控制台，在 &quot;模板&quot;-&gt;&quot;模板中心&quot;-&gt;&quot;列表展示设置&quot;选中模板 ID 中查看某个模板的TemplateId(在页面中展示为模板ID)。</p>
 * @method string getFlowType() 获取<p>签署流程的类型(如销售合同/入职合同等)，最大长度200个字符</p>
 * @method void setFlowType(string $FlowType) 设置<p>签署流程的类型(如销售合同/入职合同等)，最大长度200个字符</p>
 * @method string getFlowDescription() 获取<p>签署流程描述,最大长度1000个字符</p>
 * @method void setFlowDescription(string $FlowDescription) 设置<p>签署流程描述,最大长度1000个字符</p>
 * @method integer getDeadline() 获取<p>签署流程的签署截止时间。</p><p>值为unix时间戳,精确到秒,不传默认为当前时间一年后<br>示例值：1604912664</p>
 * @method void setDeadline(integer $Deadline) 设置<p>签署流程的签署截止时间。</p><p>值为unix时间戳,精确到秒,不传默认为当前时间一年后<br>示例值：1604912664</p>
 * @method string getCallbackUrl() 获取<p>合同（流程）的回调地址</p>
 * @method void setCallbackUrl(string $CallbackUrl) 设置<p>合同（流程）的回调地址</p>
 * @method string getUserData() 获取<p>调用方自定义的个性化字段(可自定义此字段的值)，并以base64方式编码，支持的最大数据大小为 20480长度。<br>在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。<br>回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2" target="_blank">回调通知</a>模块。</p>
 * @method void setUserData(string $UserData) 设置<p>调用方自定义的个性化字段(可自定义此字段的值)，并以base64方式编码，支持的最大数据大小为 20480长度。<br>在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。<br>回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2" target="_blank">回调通知</a>模块。</p>
 * @method boolean getUnordered() 获取<p>发送类型：<br>true：无序签<br>false：有序签<br>注：默认为false（有序签），请和模板中的配置保持一致<br>示例值：true</p>
 * @method void setUnordered(boolean $Unordered) 设置<p>发送类型：<br>true：无序签<br>false：有序签<br>注：默认为false（有序签），请和模板中的配置保持一致<br>示例值：true</p>
 * @method array getComponents() 获取<p>模板或者合同中的填写控件列表，列表中可支持下列多种填写控件，控件的详细定义参考开发者中心的Component结构体</p><ul><li>单行文本控件</li><li>多行文本控件</li><li>勾选框控件</li><li>数字控件</li><li>图片控件</li><li>动态表格等填写控件</li></ul>
 * @method void setComponents(array $Components) 设置<p>模板或者合同中的填写控件列表，列表中可支持下列多种填写控件，控件的详细定义参考开发者中心的Component结构体</p><ul><li>单行文本控件</li><li>多行文本控件</li><li>勾选框控件</li><li>数字控件</li><li>图片控件</li><li>动态表格等填写控件</li></ul>
 * @method boolean getNeedSignReview() 获取<p>发起方企业的签署人进行签署操作是否需要企业内部审批。使用此功能需要发起方企业有参与签署。<br>若设置为true，审核结果需通过接口 <a href="https://qian.tencent.com/developers/companyApis/operateFlows/CreateFlowSignReview">CreateFlowSignReview</a> 通知电子签，审核通过后，发起方企业签署人方可进行签署操作，否则会阻塞其签署操作。</p><p>注：企业可以通过此功能与企业内部的审批流程进行关联，支持手动、静默签署合同。<br>示例值：true</p>
 * @method void setNeedSignReview(boolean $NeedSignReview) 设置<p>发起方企业的签署人进行签署操作是否需要企业内部审批。使用此功能需要发起方企业有参与签署。<br>若设置为true，审核结果需通过接口 <a href="https://qian.tencent.com/developers/companyApis/operateFlows/CreateFlowSignReview">CreateFlowSignReview</a> 通知电子签，审核通过后，发起方企业签署人方可进行签署操作，否则会阻塞其签署操作。</p><p>注：企业可以通过此功能与企业内部的审批流程进行关联，支持手动、静默签署合同。<br>示例值：true</p>
 * @method string getAutoSignScene() 获取<p>个人自动签场景。发起自动签署时，需设置对应自动签署场景，目前仅支持场景：处方单-E_PRESCRIPTION_AUTO_SIGN</p>
 * @method void setAutoSignScene(string $AutoSignScene) 设置<p>个人自动签场景。发起自动签署时，需设置对应自动签署场景，目前仅支持场景：处方单-E_PRESCRIPTION_AUTO_SIGN</p>
 * @method integer getFlowDisplayType() 获取<p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:<img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p>
 * @method void setFlowDisplayType(integer $FlowDisplayType) 设置<p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:<img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p>
 * @method array getCcInfos() 获取<p>抄送人信息</p>
 * @method void setCcInfos(array $CcInfos) 设置<p>抄送人信息</p>
 */
class FlowGroupInfo extends AbstractModel
{
    /**
     * @var string <p>合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。<br>该名称还将用于合同签署完成后的下载文件名。</p>
     */
    public $FlowName;

    /**
     * @var array <p>签署流程参与者信息，最大限制50方<br>注意 approver中的顺序需要和模板中的顺序保持一致， 否则会导致模板中配置的信息无效。</p>
     */
    public $Approvers;

    /**
     * @var array <p>文件资源ID，通过多文件上传<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles">UploadFiles</a>接口获得，为32位字符串。<br>注：此字段定义为数组，但仅支持单个文件</p>
     */
    public $FileIds;

    /**
     * @var string <p>合同模板ID，为32位字符串。<br>建议开发者保存此模板ID，后续用此模板发起合同流程需要此参数。<br>可登录腾讯电子签控制台，在 &quot;模板&quot;-&gt;&quot;模板中心&quot;-&gt;&quot;列表展示设置&quot;选中模板 ID 中查看某个模板的TemplateId(在页面中展示为模板ID)。</p>
     */
    public $TemplateId;

    /**
     * @var string <p>签署流程的类型(如销售合同/入职合同等)，最大长度200个字符</p>
     */
    public $FlowType;

    /**
     * @var string <p>签署流程描述,最大长度1000个字符</p>
     */
    public $FlowDescription;

    /**
     * @var integer <p>签署流程的签署截止时间。</p><p>值为unix时间戳,精确到秒,不传默认为当前时间一年后<br>示例值：1604912664</p>
     */
    public $Deadline;

    /**
     * @var string <p>合同（流程）的回调地址</p>
     * @deprecated
     */
    public $CallbackUrl;

    /**
     * @var string <p>调用方自定义的个性化字段(可自定义此字段的值)，并以base64方式编码，支持的最大数据大小为 20480长度。<br>在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。<br>回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2" target="_blank">回调通知</a>模块。</p>
     */
    public $UserData;

    /**
     * @var boolean <p>发送类型：<br>true：无序签<br>false：有序签<br>注：默认为false（有序签），请和模板中的配置保持一致<br>示例值：true</p>
     */
    public $Unordered;

    /**
     * @var array <p>模板或者合同中的填写控件列表，列表中可支持下列多种填写控件，控件的详细定义参考开发者中心的Component结构体</p><ul><li>单行文本控件</li><li>多行文本控件</li><li>勾选框控件</li><li>数字控件</li><li>图片控件</li><li>动态表格等填写控件</li></ul>
     */
    public $Components;

    /**
     * @var boolean <p>发起方企业的签署人进行签署操作是否需要企业内部审批。使用此功能需要发起方企业有参与签署。<br>若设置为true，审核结果需通过接口 <a href="https://qian.tencent.com/developers/companyApis/operateFlows/CreateFlowSignReview">CreateFlowSignReview</a> 通知电子签，审核通过后，发起方企业签署人方可进行签署操作，否则会阻塞其签署操作。</p><p>注：企业可以通过此功能与企业内部的审批流程进行关联，支持手动、静默签署合同。<br>示例值：true</p>
     */
    public $NeedSignReview;

    /**
     * @var string <p>个人自动签场景。发起自动签署时，需设置对应自动签署场景，目前仅支持场景：处方单-E_PRESCRIPTION_AUTO_SIGN</p>
     */
    public $AutoSignScene;

    /**
     * @var integer <p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:<img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p>
     */
    public $FlowDisplayType;

    /**
     * @var array <p>抄送人信息</p>
     */
    public $CcInfos;

    /**
     * @param string $FlowName <p>合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。<br>该名称还将用于合同签署完成后的下载文件名。</p>
     * @param array $Approvers <p>签署流程参与者信息，最大限制50方<br>注意 approver中的顺序需要和模板中的顺序保持一致， 否则会导致模板中配置的信息无效。</p>
     * @param array $FileIds <p>文件资源ID，通过多文件上传<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/UploadFiles">UploadFiles</a>接口获得，为32位字符串。<br>注：此字段定义为数组，但仅支持单个文件</p>
     * @param string $TemplateId <p>合同模板ID，为32位字符串。<br>建议开发者保存此模板ID，后续用此模板发起合同流程需要此参数。<br>可登录腾讯电子签控制台，在 &quot;模板&quot;-&gt;&quot;模板中心&quot;-&gt;&quot;列表展示设置&quot;选中模板 ID 中查看某个模板的TemplateId(在页面中展示为模板ID)。</p>
     * @param string $FlowType <p>签署流程的类型(如销售合同/入职合同等)，最大长度200个字符</p>
     * @param string $FlowDescription <p>签署流程描述,最大长度1000个字符</p>
     * @param integer $Deadline <p>签署流程的签署截止时间。</p><p>值为unix时间戳,精确到秒,不传默认为当前时间一年后<br>示例值：1604912664</p>
     * @param string $CallbackUrl <p>合同（流程）的回调地址</p>
     * @param string $UserData <p>调用方自定义的个性化字段(可自定义此字段的值)，并以base64方式编码，支持的最大数据大小为 20480长度。<br>在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。<br>回调的相关说明可参考开发者中心的<a href="https://qian.tencent.com/developers/company/callback_types_v2" target="_blank">回调通知</a>模块。</p>
     * @param boolean $Unordered <p>发送类型：<br>true：无序签<br>false：有序签<br>注：默认为false（有序签），请和模板中的配置保持一致<br>示例值：true</p>
     * @param array $Components <p>模板或者合同中的填写控件列表，列表中可支持下列多种填写控件，控件的详细定义参考开发者中心的Component结构体</p><ul><li>单行文本控件</li><li>多行文本控件</li><li>勾选框控件</li><li>数字控件</li><li>图片控件</li><li>动态表格等填写控件</li></ul>
     * @param boolean $NeedSignReview <p>发起方企业的签署人进行签署操作是否需要企业内部审批。使用此功能需要发起方企业有参与签署。<br>若设置为true，审核结果需通过接口 <a href="https://qian.tencent.com/developers/companyApis/operateFlows/CreateFlowSignReview">CreateFlowSignReview</a> 通知电子签，审核通过后，发起方企业签署人方可进行签署操作，否则会阻塞其签署操作。</p><p>注：企业可以通过此功能与企业内部的审批流程进行关联，支持手动、静默签署合同。<br>示例值：true</p>
     * @param string $AutoSignScene <p>个人自动签场景。发起自动签署时，需设置对应自动签署场景，目前仅支持场景：处方单-E_PRESCRIPTION_AUTO_SIGN</p>
     * @param integer $FlowDisplayType <p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:<img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p>
     * @param array $CcInfos <p>抄送人信息</p>
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
        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("Approvers",$param) and $param["Approvers"] !== null) {
            $this->Approvers = [];
            foreach ($param["Approvers"] as $key => $value){
                $obj = new ApproverInfo();
                $obj->deserialize($value);
                array_push($this->Approvers, $obj);
            }
        }

        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("FlowDescription",$param) and $param["FlowDescription"] !== null) {
            $this->FlowDescription = $param["FlowDescription"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
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

        if (array_key_exists("NeedSignReview",$param) and $param["NeedSignReview"] !== null) {
            $this->NeedSignReview = $param["NeedSignReview"];
        }

        if (array_key_exists("AutoSignScene",$param) and $param["AutoSignScene"] !== null) {
            $this->AutoSignScene = $param["AutoSignScene"];
        }

        if (array_key_exists("FlowDisplayType",$param) and $param["FlowDisplayType"] !== null) {
            $this->FlowDisplayType = $param["FlowDisplayType"];
        }

        if (array_key_exists("CcInfos",$param) and $param["CcInfos"] !== null) {
            $this->CcInfos = [];
            foreach ($param["CcInfos"] as $key => $value){
                $obj = new CcInfo();
                $obj->deserialize($value);
                array_push($this->CcInfos, $obj);
            }
        }
    }
}
