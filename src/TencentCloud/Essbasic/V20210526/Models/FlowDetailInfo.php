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
 * 此结构体(FlowDetailInfo)描述的是合同(流程)的详细信息
 *
 * @method string getFlowId() 获取合同流程ID，为32位字符串。
 * @method void setFlowId(string $FlowId) 设置合同流程ID，为32位字符串。
 * @method string getFlowName() 获取合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
 * @method void setFlowName(string $FlowName) 设置合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
 * @method string getFlowType() 获取合同流程的类别分类（如销售合同/入职合同等）。
该字段将被废弃，不建议使用。	请使用 UserFlowType
 * @method void setFlowType(string $FlowType) 设置合同流程的类别分类（如销售合同/入职合同等）。
该字段将被废弃，不建议使用。	请使用 UserFlowType
 * @method string getFlowStatus() 获取合同流程当前的签署状态, 会存在下列的状态值
<ul><li> **INIT** :合同创建</li>
<li> **PART** :合同签署中(至少有一个签署方已经签署)</li>
<li> **REJECT** :合同拒签</li>
<li> **ALL** :合同签署完成</li>
<li> **DEADLINE** :合同流签(合同过期)</li>
<li> **CANCEL** :合同撤回</li>
<li> **INVALID** : 已失效（签署期间有签署人改名等原因导致）</li>
<li> **RELIEVED** :解除协议（已解除）</li></ul>
 
 * @method void setFlowStatus(string $FlowStatus) 设置合同流程当前的签署状态, 会存在下列的状态值
<ul><li> **INIT** :合同创建</li>
<li> **PART** :合同签署中(至少有一个签署方已经签署)</li>
<li> **REJECT** :合同拒签</li>
<li> **ALL** :合同签署完成</li>
<li> **DEADLINE** :合同流签(合同过期)</li>
<li> **CANCEL** :合同撤回</li>
<li> **INVALID** : 已失效（签署期间有签署人改名等原因导致）</li>
<li> **RELIEVED** :解除协议（已解除）</li></ul>
 
 * @method string getFlowMessage() 获取当合同流程状态为已拒签（即 FlowStatus=REJECT）或已撤销（即 FlowStatus=CANCEL ）时，此字段 FlowMessage 为拒签或撤销原因。
 * @method void setFlowMessage(string $FlowMessage) 设置当合同流程状态为已拒签（即 FlowStatus=REJECT）或已撤销（即 FlowStatus=CANCEL ）时，此字段 FlowMessage 为拒签或撤销原因。
 * @method integer getCreateOn() 获取合同流程的创建时间戳，格式为Unix标准时间戳（秒）。
 * @method void setCreateOn(integer $CreateOn) 设置合同流程的创建时间戳，格式为Unix标准时间戳（秒）。
 * @method integer getDeadLine() 获取签署流程的签署截止时间, 值为unix时间戳, 精确到秒。
 * @method void setDeadLine(integer $DeadLine) 设置签署流程的签署截止时间, 值为unix时间戳, 精确到秒。
 * @method string getCustomData() 获取调用方自定义的个性化字段(可自定义此字段的值)，并以base64方式编码，支持的最大数据大小为 1000长度。
在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。
 * @method void setCustomData(string $CustomData) 设置调用方自定义的个性化字段(可自定义此字段的值)，并以base64方式编码，支持的最大数据大小为 1000长度。
在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。
 * @method array getFlowApproverInfos() 获取合同流程的签署方数组
 * @method void setFlowApproverInfos(array $FlowApproverInfos) 设置合同流程的签署方数组
 * @method array getCcInfos() 获取合同流程的关注方信息数组
 * @method void setCcInfos(array $CcInfos) 设置合同流程的关注方信息数组
 * @method boolean getNeedCreateReview() 获取是否需要发起前审批
<ul><li>当NeedCreateReview为true，表明当前流程是需要发起前审核的合同，可能无法进行查看，签署操作，需要等审核完成后，才可以继续后续流程</li>
<li>当NeedCreateReview为false，不需要发起前审核的合同</li></ul>
 * @method void setNeedCreateReview(boolean $NeedCreateReview) 设置是否需要发起前审批
<ul><li>当NeedCreateReview为true，表明当前流程是需要发起前审核的合同，可能无法进行查看，签署操作，需要等审核完成后，才可以继续后续流程</li>
<li>当NeedCreateReview为false，不需要发起前审核的合同</li></ul>
 * @method UserFlowType getUserFlowType() 获取用户合同的自定义分类。

自定义合同类型的位置，在下图所示地方:
![image](https://qcloudimg.tencent-cloud.cn/raw/37138cc5f3c38e6f788f4b82f695cebf.png)
 * @method void setUserFlowType(UserFlowType $UserFlowType) 设置用户合同的自定义分类。

自定义合同类型的位置，在下图所示地方:
![image](https://qcloudimg.tencent-cloud.cn/raw/37138cc5f3c38e6f788f4b82f695cebf.png)
 * @method string getTemplateId() 获取发起模板时,使用的模板Id
 * @method void setTemplateId(string $TemplateId) 设置发起模板时,使用的模板Id
 */
class FlowDetailInfo extends AbstractModel
{
    /**
     * @var string 合同流程ID，为32位字符串。
     */
    public $FlowId;

    /**
     * @var string 合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
     */
    public $FlowName;

    /**
     * @var string 合同流程的类别分类（如销售合同/入职合同等）。
该字段将被废弃，不建议使用。	请使用 UserFlowType
     */
    public $FlowType;

    /**
     * @var string 合同流程当前的签署状态, 会存在下列的状态值
<ul><li> **INIT** :合同创建</li>
<li> **PART** :合同签署中(至少有一个签署方已经签署)</li>
<li> **REJECT** :合同拒签</li>
<li> **ALL** :合同签署完成</li>
<li> **DEADLINE** :合同流签(合同过期)</li>
<li> **CANCEL** :合同撤回</li>
<li> **INVALID** : 已失效（签署期间有签署人改名等原因导致）</li>
<li> **RELIEVED** :解除协议（已解除）</li></ul>
 
     */
    public $FlowStatus;

    /**
     * @var string 当合同流程状态为已拒签（即 FlowStatus=REJECT）或已撤销（即 FlowStatus=CANCEL ）时，此字段 FlowMessage 为拒签或撤销原因。
     */
    public $FlowMessage;

    /**
     * @var integer 合同流程的创建时间戳，格式为Unix标准时间戳（秒）。
     */
    public $CreateOn;

    /**
     * @var integer 签署流程的签署截止时间, 值为unix时间戳, 精确到秒。
     */
    public $DeadLine;

    /**
     * @var string 调用方自定义的个性化字段(可自定义此字段的值)，并以base64方式编码，支持的最大数据大小为 1000长度。
在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。
     */
    public $CustomData;

    /**
     * @var array 合同流程的签署方数组
     */
    public $FlowApproverInfos;

    /**
     * @var array 合同流程的关注方信息数组
     */
    public $CcInfos;

    /**
     * @var boolean 是否需要发起前审批
<ul><li>当NeedCreateReview为true，表明当前流程是需要发起前审核的合同，可能无法进行查看，签署操作，需要等审核完成后，才可以继续后续流程</li>
<li>当NeedCreateReview为false，不需要发起前审核的合同</li></ul>
     */
    public $NeedCreateReview;

    /**
     * @var UserFlowType 用户合同的自定义分类。

自定义合同类型的位置，在下图所示地方:
![image](https://qcloudimg.tencent-cloud.cn/raw/37138cc5f3c38e6f788f4b82f695cebf.png)
     */
    public $UserFlowType;

    /**
     * @var string 发起模板时,使用的模板Id
     */
    public $TemplateId;

    /**
     * @param string $FlowId 合同流程ID，为32位字符串。
     * @param string $FlowName 合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
     * @param string $FlowType 合同流程的类别分类（如销售合同/入职合同等）。
该字段将被废弃，不建议使用。	请使用 UserFlowType
     * @param string $FlowStatus 合同流程当前的签署状态, 会存在下列的状态值
<ul><li> **INIT** :合同创建</li>
<li> **PART** :合同签署中(至少有一个签署方已经签署)</li>
<li> **REJECT** :合同拒签</li>
<li> **ALL** :合同签署完成</li>
<li> **DEADLINE** :合同流签(合同过期)</li>
<li> **CANCEL** :合同撤回</li>
<li> **INVALID** : 已失效（签署期间有签署人改名等原因导致）</li>
<li> **RELIEVED** :解除协议（已解除）</li></ul>
 
     * @param string $FlowMessage 当合同流程状态为已拒签（即 FlowStatus=REJECT）或已撤销（即 FlowStatus=CANCEL ）时，此字段 FlowMessage 为拒签或撤销原因。
     * @param integer $CreateOn 合同流程的创建时间戳，格式为Unix标准时间戳（秒）。
     * @param integer $DeadLine 签署流程的签署截止时间, 值为unix时间戳, 精确到秒。
     * @param string $CustomData 调用方自定义的个性化字段(可自定义此字段的值)，并以base64方式编码，支持的最大数据大小为 1000长度。
在合同状态变更的回调信息等场景中，该字段的信息将原封不动地透传给贵方。
     * @param array $FlowApproverInfos 合同流程的签署方数组
     * @param array $CcInfos 合同流程的关注方信息数组
     * @param boolean $NeedCreateReview 是否需要发起前审批
<ul><li>当NeedCreateReview为true，表明当前流程是需要发起前审核的合同，可能无法进行查看，签署操作，需要等审核完成后，才可以继续后续流程</li>
<li>当NeedCreateReview为false，不需要发起前审核的合同</li></ul>
     * @param UserFlowType $UserFlowType 用户合同的自定义分类。

自定义合同类型的位置，在下图所示地方:
![image](https://qcloudimg.tencent-cloud.cn/raw/37138cc5f3c38e6f788f4b82f695cebf.png)
     * @param string $TemplateId 发起模板时,使用的模板Id
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("FlowStatus",$param) and $param["FlowStatus"] !== null) {
            $this->FlowStatus = $param["FlowStatus"];
        }

        if (array_key_exists("FlowMessage",$param) and $param["FlowMessage"] !== null) {
            $this->FlowMessage = $param["FlowMessage"];
        }

        if (array_key_exists("CreateOn",$param) and $param["CreateOn"] !== null) {
            $this->CreateOn = $param["CreateOn"];
        }

        if (array_key_exists("DeadLine",$param) and $param["DeadLine"] !== null) {
            $this->DeadLine = $param["DeadLine"];
        }

        if (array_key_exists("CustomData",$param) and $param["CustomData"] !== null) {
            $this->CustomData = $param["CustomData"];
        }

        if (array_key_exists("FlowApproverInfos",$param) and $param["FlowApproverInfos"] !== null) {
            $this->FlowApproverInfos = [];
            foreach ($param["FlowApproverInfos"] as $key => $value){
                $obj = new FlowApproverDetail();
                $obj->deserialize($value);
                array_push($this->FlowApproverInfos, $obj);
            }
        }

        if (array_key_exists("CcInfos",$param) and $param["CcInfos"] !== null) {
            $this->CcInfos = [];
            foreach ($param["CcInfos"] as $key => $value){
                $obj = new FlowApproverDetail();
                $obj->deserialize($value);
                array_push($this->CcInfos, $obj);
            }
        }

        if (array_key_exists("NeedCreateReview",$param) and $param["NeedCreateReview"] !== null) {
            $this->NeedCreateReview = $param["NeedCreateReview"];
        }

        if (array_key_exists("UserFlowType",$param) and $param["UserFlowType"] !== null) {
            $this->UserFlowType = new UserFlowType();
            $this->UserFlowType->deserialize($param["UserFlowType"]);
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}
