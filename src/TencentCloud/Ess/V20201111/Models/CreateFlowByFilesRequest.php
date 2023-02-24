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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFlowByFiles请求参数结构体
 *
 * @method UserInfo getOperator() 获取调用方用户信息，userId 必填。支持填入集团子公司经办人 userId 代发合同
 * @method void setOperator(UserInfo $Operator) 设置调用方用户信息，userId 必填。支持填入集团子公司经办人 userId 代发合同
 * @method string getFlowName() 获取签署流程名称,最大长度200个字符
 * @method void setFlowName(string $FlowName) 设置签署流程名称,最大长度200个字符
 * @method array getApprovers() 获取签署参与者信息，最大限制50方
 * @method void setApprovers(array $Approvers) 设置签署参与者信息，最大限制50方
 * @method array getFileIds() 获取签署pdf文件的资源编号列表，通过UploadFiles接口获取，暂时仅支持单文件发起
 * @method void setFileIds(array $FileIds) 设置签署pdf文件的资源编号列表，通过UploadFiles接口获取，暂时仅支持单文件发起
 * @method string getFlowType() 获取签署流程的类型(如销售合同/入职合同等)，最大长度200个字符
 * @method void setFlowType(string $FlowType) 设置签署流程的类型(如销售合同/入职合同等)，最大长度200个字符
 * @method array getComponents() 获取经办人内容控件配置
 * @method void setComponents(array $Components) 设置经办人内容控件配置
 * @method array getCcInfos() 获取被抄送人的信息列表。
注:此功能为白名单功能，若有需要，请联系电子签客服开白使用
 * @method void setCcInfos(array $CcInfos) 设置被抄送人的信息列表。
注:此功能为白名单功能，若有需要，请联系电子签客服开白使用
 * @method boolean getNeedPreview() 获取是否需要预览，true：预览模式，false：非预览（默认）；
预览链接有效期300秒；

注：如果使用“预览模式”，出参会返回合同预览链接 PreviewUrl，不会正式发起合同，且出参不会返回签署流程编号 FlowId；如果使用“非预览”，则会正常返回签署流程编号 FlowId，不会生成合同预览链接 PreviewUrl。
 * @method void setNeedPreview(boolean $NeedPreview) 设置是否需要预览，true：预览模式，false：非预览（默认）；
预览链接有效期300秒；

注：如果使用“预览模式”，出参会返回合同预览链接 PreviewUrl，不会正式发起合同，且出参不会返回签署流程编号 FlowId；如果使用“非预览”，则会正常返回签署流程编号 FlowId，不会生成合同预览链接 PreviewUrl。
 * @method integer getPreviewType() 获取预览链接类型 默认:0-文件流, 1- H5链接 注意:此参数在NeedPreview 为true 时有效,
 * @method void setPreviewType(integer $PreviewType) 设置预览链接类型 默认:0-文件流, 1- H5链接 注意:此参数在NeedPreview 为true 时有效,
 * @method integer getDeadline() 获取签署流程的签署截止时间。
值为unix时间戳,精确到秒,不传默认为当前时间一年后
 * @method void setDeadline(integer $Deadline) 设置签署流程的签署截止时间。
值为unix时间戳,精确到秒,不传默认为当前时间一年后
 * @method boolean getUnordered() 获取发送类型：
true：无序签
false：有序签
注：默认为false（有序签）
 * @method void setUnordered(boolean $Unordered) 设置发送类型：
true：无序签
false：有序签
注：默认为false（有序签）
 * @method string getCustomShowMap() 获取合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始
 * @method void setCustomShowMap(string $CustomShowMap) 设置合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始
 * @method boolean getNeedSignReview() 获取发起方企业的签署人进行签署操作是否需要企业内部审批。使用此功能需要发起方企业有参与签署。
若设置为true，审核结果需通过接口 CreateFlowSignReview 通知电子签，审核通过后，发起方企业签署人方可进行签署操作，否则会阻塞其签署操作。

注：企业可以通过此功能与企业内部的审批流程进行关联，支持手动、静默签署合同。
 * @method void setNeedSignReview(boolean $NeedSignReview) 设置发起方企业的签署人进行签署操作是否需要企业内部审批。使用此功能需要发起方企业有参与签署。
若设置为true，审核结果需通过接口 CreateFlowSignReview 通知电子签，审核通过后，发起方企业签署人方可进行签署操作，否则会阻塞其签署操作。

注：企业可以通过此功能与企业内部的审批流程进行关联，支持手动、静默签署合同。
 * @method string getUserData() 获取用户自定义字段，回调的时候会进行透传，长度需要小于20480
 * @method void setUserData(string $UserData) 设置用户自定义字段，回调的时候会进行透传，长度需要小于20480
 * @method string getApproverVerifyType() 获取签署人校验方式
VerifyCheck: 人脸识别（默认）
MobileCheck：手机号验证
参数说明：可选人脸识别或手机号验证两种方式，若选择后者，未实名个人签署方在签署合同时，无需经过实名认证和意愿确认两次人脸识别，该能力仅适用于个人签署方。
 * @method void setApproverVerifyType(string $ApproverVerifyType) 设置签署人校验方式
VerifyCheck: 人脸识别（默认）
MobileCheck：手机号验证
参数说明：可选人脸识别或手机号验证两种方式，若选择后者，未实名个人签署方在签署合同时，无需经过实名认证和意愿确认两次人脸识别，该能力仅适用于个人签署方。
 * @method string getFlowDescription() 获取签署流程描述,最大长度1000个字符
 * @method void setFlowDescription(string $FlowDescription) 设置签署流程描述,最大长度1000个字符
 * @method integer getSignBeanTag() 获取标识是否允许发起后添加控件。0为不允许1为允许。如果为1，创建的时候不能有签署控件，只能创建后添加。注意发起后添加控件功能不支持添加骑缝章和签批控件
 * @method void setSignBeanTag(integer $SignBeanTag) 设置标识是否允许发起后添加控件。0为不允许1为允许。如果为1，创建的时候不能有签署控件，只能创建后添加。注意发起后添加控件功能不支持添加骑缝章和签批控件
 * @method Agent getAgent() 获取代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
 * @method void setAgent(Agent $Agent) 设置代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
 */
class CreateFlowByFilesRequest extends AbstractModel
{
    /**
     * @var UserInfo 调用方用户信息，userId 必填。支持填入集团子公司经办人 userId 代发合同
     */
    public $Operator;

    /**
     * @var string 签署流程名称,最大长度200个字符
     */
    public $FlowName;

    /**
     * @var array 签署参与者信息，最大限制50方
     */
    public $Approvers;

    /**
     * @var array 签署pdf文件的资源编号列表，通过UploadFiles接口获取，暂时仅支持单文件发起
     */
    public $FileIds;

    /**
     * @var string 签署流程的类型(如销售合同/入职合同等)，最大长度200个字符
     */
    public $FlowType;

    /**
     * @var array 经办人内容控件配置
     */
    public $Components;

    /**
     * @var array 被抄送人的信息列表。
注:此功能为白名单功能，若有需要，请联系电子签客服开白使用
     */
    public $CcInfos;

    /**
     * @var boolean 是否需要预览，true：预览模式，false：非预览（默认）；
预览链接有效期300秒；

注：如果使用“预览模式”，出参会返回合同预览链接 PreviewUrl，不会正式发起合同，且出参不会返回签署流程编号 FlowId；如果使用“非预览”，则会正常返回签署流程编号 FlowId，不会生成合同预览链接 PreviewUrl。
     */
    public $NeedPreview;

    /**
     * @var integer 预览链接类型 默认:0-文件流, 1- H5链接 注意:此参数在NeedPreview 为true 时有效,
     */
    public $PreviewType;

    /**
     * @var integer 签署流程的签署截止时间。
值为unix时间戳,精确到秒,不传默认为当前时间一年后
     */
    public $Deadline;

    /**
     * @var boolean 发送类型：
true：无序签
false：有序签
注：默认为false（有序签）
     */
    public $Unordered;

    /**
     * @var string 合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始
     */
    public $CustomShowMap;

    /**
     * @var boolean 发起方企业的签署人进行签署操作是否需要企业内部审批。使用此功能需要发起方企业有参与签署。
若设置为true，审核结果需通过接口 CreateFlowSignReview 通知电子签，审核通过后，发起方企业签署人方可进行签署操作，否则会阻塞其签署操作。

注：企业可以通过此功能与企业内部的审批流程进行关联，支持手动、静默签署合同。
     */
    public $NeedSignReview;

    /**
     * @var string 用户自定义字段，回调的时候会进行透传，长度需要小于20480
     */
    public $UserData;

    /**
     * @var string 签署人校验方式
VerifyCheck: 人脸识别（默认）
MobileCheck：手机号验证
参数说明：可选人脸识别或手机号验证两种方式，若选择后者，未实名个人签署方在签署合同时，无需经过实名认证和意愿确认两次人脸识别，该能力仅适用于个人签署方。
     */
    public $ApproverVerifyType;

    /**
     * @var string 签署流程描述,最大长度1000个字符
     */
    public $FlowDescription;

    /**
     * @var integer 标识是否允许发起后添加控件。0为不允许1为允许。如果为1，创建的时候不能有签署控件，只能创建后添加。注意发起后添加控件功能不支持添加骑缝章和签批控件
     */
    public $SignBeanTag;

    /**
     * @var Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
     */
    public $Agent;

    /**
     * @param UserInfo $Operator 调用方用户信息，userId 必填。支持填入集团子公司经办人 userId 代发合同
     * @param string $FlowName 签署流程名称,最大长度200个字符
     * @param array $Approvers 签署参与者信息，最大限制50方
     * @param array $FileIds 签署pdf文件的资源编号列表，通过UploadFiles接口获取，暂时仅支持单文件发起
     * @param string $FlowType 签署流程的类型(如销售合同/入职合同等)，最大长度200个字符
     * @param array $Components 经办人内容控件配置
     * @param array $CcInfos 被抄送人的信息列表。
注:此功能为白名单功能，若有需要，请联系电子签客服开白使用
     * @param boolean $NeedPreview 是否需要预览，true：预览模式，false：非预览（默认）；
预览链接有效期300秒；

注：如果使用“预览模式”，出参会返回合同预览链接 PreviewUrl，不会正式发起合同，且出参不会返回签署流程编号 FlowId；如果使用“非预览”，则会正常返回签署流程编号 FlowId，不会生成合同预览链接 PreviewUrl。
     * @param integer $PreviewType 预览链接类型 默认:0-文件流, 1- H5链接 注意:此参数在NeedPreview 为true 时有效,
     * @param integer $Deadline 签署流程的签署截止时间。
值为unix时间戳,精确到秒,不传默认为当前时间一年后
     * @param boolean $Unordered 发送类型：
true：无序签
false：有序签
注：默认为false（有序签）
     * @param string $CustomShowMap 合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始
     * @param boolean $NeedSignReview 发起方企业的签署人进行签署操作是否需要企业内部审批。使用此功能需要发起方企业有参与签署。
若设置为true，审核结果需通过接口 CreateFlowSignReview 通知电子签，审核通过后，发起方企业签署人方可进行签署操作，否则会阻塞其签署操作。

注：企业可以通过此功能与企业内部的审批流程进行关联，支持手动、静默签署合同。
     * @param string $UserData 用户自定义字段，回调的时候会进行透传，长度需要小于20480
     * @param string $ApproverVerifyType 签署人校验方式
VerifyCheck: 人脸识别（默认）
MobileCheck：手机号验证
参数说明：可选人脸识别或手机号验证两种方式，若选择后者，未实名个人签署方在签署合同时，无需经过实名认证和意愿确认两次人脸识别，该能力仅适用于个人签署方。
     * @param string $FlowDescription 签署流程描述,最大长度1000个字符
     * @param integer $SignBeanTag 标识是否允许发起后添加控件。0为不允许1为允许。如果为1，创建的时候不能有签署控件，只能创建后添加。注意发起后添加控件功能不支持添加骑缝章和签批控件
     * @param Agent $Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
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

        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = [];
            foreach ($param["Components"] as $key => $value){
                $obj = new Component();
                $obj->deserialize($value);
                array_push($this->Components, $obj);
            }
        }

        if (array_key_exists("CcInfos",$param) and $param["CcInfos"] !== null) {
            $this->CcInfos = [];
            foreach ($param["CcInfos"] as $key => $value){
                $obj = new CcInfo();
                $obj->deserialize($value);
                array_push($this->CcInfos, $obj);
            }
        }

        if (array_key_exists("NeedPreview",$param) and $param["NeedPreview"] !== null) {
            $this->NeedPreview = $param["NeedPreview"];
        }

        if (array_key_exists("PreviewType",$param) and $param["PreviewType"] !== null) {
            $this->PreviewType = $param["PreviewType"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
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

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("ApproverVerifyType",$param) and $param["ApproverVerifyType"] !== null) {
            $this->ApproverVerifyType = $param["ApproverVerifyType"];
        }

        if (array_key_exists("FlowDescription",$param) and $param["FlowDescription"] !== null) {
            $this->FlowDescription = $param["FlowDescription"];
        }

        if (array_key_exists("SignBeanTag",$param) and $param["SignBeanTag"] !== null) {
            $this->SignBeanTag = $param["SignBeanTag"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }
    }
}
