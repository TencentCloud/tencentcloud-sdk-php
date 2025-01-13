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
 * 用户计费使用情况详情
 *
 * @method string getFlowId() 获取合同流程ID，为32位字符串。
可登录腾讯电子签控制台，在 "合同"->"合同中心" 中查看某个合同的FlowId(在页面中展示为合同ID)。
 * @method void setFlowId(string $FlowId) 设置合同流程ID，为32位字符串。
可登录腾讯电子签控制台，在 "合同"->"合同中心" 中查看某个合同的FlowId(在页面中展示为合同ID)。
 * @method string getOperatorName() 获取合同经办人名称
如果有多个经办人用分号隔开。
 * @method void setOperatorName(string $OperatorName) 设置合同经办人名称
如果有多个经办人用分号隔开。
 * @method string getCreateOrganizationName() 获取发起方组织机构名称
 * @method void setCreateOrganizationName(string $CreateOrganizationName) 设置发起方组织机构名称
 * @method string getFlowName() 获取合同流程的名称。
 * @method void setFlowName(string $FlowName) 设置合同流程的名称。
 * @method integer getStatus() 获取当前合同状态,如下是状态码对应的状态。
<ul>
<li>**0**: 还没有发起</li>
<li>**1**: 等待签署</li>
<li>**2**: 部分签署 </li>
<li>**3**: 拒签</li>
<li>**4**: 已签署 </li>
<li>**5**: 已过期 </li>
<li>**6**: 已撤销 </li>
<li>**7**: 还没有预发起</li>
<li>**8**: 等待填写</li>
<li>**9**: 部分填写 </li>
<li>**10**: 拒签</li>
<li>**11**: 已解除</li>
</ul>
 * @method void setStatus(integer $Status) 设置当前合同状态,如下是状态码对应的状态。
<ul>
<li>**0**: 还没有发起</li>
<li>**1**: 等待签署</li>
<li>**2**: 部分签署 </li>
<li>**3**: 拒签</li>
<li>**4**: 已签署 </li>
<li>**5**: 已过期 </li>
<li>**6**: 已撤销 </li>
<li>**7**: 还没有预发起</li>
<li>**8**: 等待填写</li>
<li>**9**: 部分填写 </li>
<li>**10**: 拒签</li>
<li>**11**: 已解除</li>
</ul>
 * @method string getQuotaType() 获取查询的套餐类型
对应关系如下:
<ul>
<li>**CloudEnterprise**: 企业版合同</li>
<li>**SingleSignature**: 单方签章</li>
<li>**CloudProve**: 签署报告</li>
<li>**CloudOnlineSign**: 腾讯会议在线签约</li>
<li>**ChannelWeCard**: 微工卡</li>
<li>**SignFlow**: 合同套餐</li>
<li>**SignFace**: 签署意愿（人脸识别）</li>
<li>**SignPassword**: 签署意愿（密码）</li>
<li>**SignSMS**: 签署意愿（短信）</li>
<li>**PersonalEssAuth**: 签署人实名（腾讯电子签认证）</li>
<li>**PersonalThirdAuth**: 签署人实名（信任第三方认证）</li>
<li>**OrgEssAuth**: 签署企业实名</li>
<li>**FlowNotify**: 短信通知</li>
<li>**AuthService**: 企业工商信息查询</li>
</ul>
 * @method void setQuotaType(string $QuotaType) 设置查询的套餐类型
对应关系如下:
<ul>
<li>**CloudEnterprise**: 企业版合同</li>
<li>**SingleSignature**: 单方签章</li>
<li>**CloudProve**: 签署报告</li>
<li>**CloudOnlineSign**: 腾讯会议在线签约</li>
<li>**ChannelWeCard**: 微工卡</li>
<li>**SignFlow**: 合同套餐</li>
<li>**SignFace**: 签署意愿（人脸识别）</li>
<li>**SignPassword**: 签署意愿（密码）</li>
<li>**SignSMS**: 签署意愿（短信）</li>
<li>**PersonalEssAuth**: 签署人实名（腾讯电子签认证）</li>
<li>**PersonalThirdAuth**: 签署人实名（信任第三方认证）</li>
<li>**OrgEssAuth**: 签署企业实名</li>
<li>**FlowNotify**: 短信通知</li>
<li>**AuthService**: 企业工商信息查询</li>
</ul>
 * @method integer getUseCount() 获取合同使用量
注: `如果消耗类型是撤销返还，此值为负值代表返还的合同数量`
 * @method void setUseCount(integer $UseCount) 设置合同使用量
注: `如果消耗类型是撤销返还，此值为负值代表返还的合同数量`
 * @method integer getCostTime() 获取消耗的时间戳，格式为Unix标准时间戳（秒）。
 * @method void setCostTime(integer $CostTime) 设置消耗的时间戳，格式为Unix标准时间戳（秒）。
 * @method string getQuotaName() 获取消耗的套餐名称
 * @method void setQuotaName(string $QuotaName) 设置消耗的套餐名称
 * @method integer getCostType() 获取消耗类型
**1**.扣费
**2**.撤销返还
 * @method void setCostType(integer $CostType) 设置消耗类型
**1**.扣费
**2**.撤销返还
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 */
class BillUsageDetail extends AbstractModel
{
    /**
     * @var string 合同流程ID，为32位字符串。
可登录腾讯电子签控制台，在 "合同"->"合同中心" 中查看某个合同的FlowId(在页面中展示为合同ID)。
     */
    public $FlowId;

    /**
     * @var string 合同经办人名称
如果有多个经办人用分号隔开。
     */
    public $OperatorName;

    /**
     * @var string 发起方组织机构名称
     */
    public $CreateOrganizationName;

    /**
     * @var string 合同流程的名称。
     */
    public $FlowName;

    /**
     * @var integer 当前合同状态,如下是状态码对应的状态。
<ul>
<li>**0**: 还没有发起</li>
<li>**1**: 等待签署</li>
<li>**2**: 部分签署 </li>
<li>**3**: 拒签</li>
<li>**4**: 已签署 </li>
<li>**5**: 已过期 </li>
<li>**6**: 已撤销 </li>
<li>**7**: 还没有预发起</li>
<li>**8**: 等待填写</li>
<li>**9**: 部分填写 </li>
<li>**10**: 拒签</li>
<li>**11**: 已解除</li>
</ul>
     */
    public $Status;

    /**
     * @var string 查询的套餐类型
对应关系如下:
<ul>
<li>**CloudEnterprise**: 企业版合同</li>
<li>**SingleSignature**: 单方签章</li>
<li>**CloudProve**: 签署报告</li>
<li>**CloudOnlineSign**: 腾讯会议在线签约</li>
<li>**ChannelWeCard**: 微工卡</li>
<li>**SignFlow**: 合同套餐</li>
<li>**SignFace**: 签署意愿（人脸识别）</li>
<li>**SignPassword**: 签署意愿（密码）</li>
<li>**SignSMS**: 签署意愿（短信）</li>
<li>**PersonalEssAuth**: 签署人实名（腾讯电子签认证）</li>
<li>**PersonalThirdAuth**: 签署人实名（信任第三方认证）</li>
<li>**OrgEssAuth**: 签署企业实名</li>
<li>**FlowNotify**: 短信通知</li>
<li>**AuthService**: 企业工商信息查询</li>
</ul>
     */
    public $QuotaType;

    /**
     * @var integer 合同使用量
注: `如果消耗类型是撤销返还，此值为负值代表返还的合同数量`
     */
    public $UseCount;

    /**
     * @var integer 消耗的时间戳，格式为Unix标准时间戳（秒）。
     */
    public $CostTime;

    /**
     * @var string 消耗的套餐名称
     */
    public $QuotaName;

    /**
     * @var integer 消耗类型
**1**.扣费
**2**.撤销返还
     */
    public $CostType;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @param string $FlowId 合同流程ID，为32位字符串。
可登录腾讯电子签控制台，在 "合同"->"合同中心" 中查看某个合同的FlowId(在页面中展示为合同ID)。
     * @param string $OperatorName 合同经办人名称
如果有多个经办人用分号隔开。
     * @param string $CreateOrganizationName 发起方组织机构名称
     * @param string $FlowName 合同流程的名称。
     * @param integer $Status 当前合同状态,如下是状态码对应的状态。
<ul>
<li>**0**: 还没有发起</li>
<li>**1**: 等待签署</li>
<li>**2**: 部分签署 </li>
<li>**3**: 拒签</li>
<li>**4**: 已签署 </li>
<li>**5**: 已过期 </li>
<li>**6**: 已撤销 </li>
<li>**7**: 还没有预发起</li>
<li>**8**: 等待填写</li>
<li>**9**: 部分填写 </li>
<li>**10**: 拒签</li>
<li>**11**: 已解除</li>
</ul>
     * @param string $QuotaType 查询的套餐类型
对应关系如下:
<ul>
<li>**CloudEnterprise**: 企业版合同</li>
<li>**SingleSignature**: 单方签章</li>
<li>**CloudProve**: 签署报告</li>
<li>**CloudOnlineSign**: 腾讯会议在线签约</li>
<li>**ChannelWeCard**: 微工卡</li>
<li>**SignFlow**: 合同套餐</li>
<li>**SignFace**: 签署意愿（人脸识别）</li>
<li>**SignPassword**: 签署意愿（密码）</li>
<li>**SignSMS**: 签署意愿（短信）</li>
<li>**PersonalEssAuth**: 签署人实名（腾讯电子签认证）</li>
<li>**PersonalThirdAuth**: 签署人实名（信任第三方认证）</li>
<li>**OrgEssAuth**: 签署企业实名</li>
<li>**FlowNotify**: 短信通知</li>
<li>**AuthService**: 企业工商信息查询</li>
</ul>
     * @param integer $UseCount 合同使用量
注: `如果消耗类型是撤销返还，此值为负值代表返还的合同数量`
     * @param integer $CostTime 消耗的时间戳，格式为Unix标准时间戳（秒）。
     * @param string $QuotaName 消耗的套餐名称
     * @param integer $CostType 消耗类型
**1**.扣费
**2**.撤销返还
     * @param string $Remark 备注
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

        if (array_key_exists("OperatorName",$param) and $param["OperatorName"] !== null) {
            $this->OperatorName = $param["OperatorName"];
        }

        if (array_key_exists("CreateOrganizationName",$param) and $param["CreateOrganizationName"] !== null) {
            $this->CreateOrganizationName = $param["CreateOrganizationName"];
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("QuotaType",$param) and $param["QuotaType"] !== null) {
            $this->QuotaType = $param["QuotaType"];
        }

        if (array_key_exists("UseCount",$param) and $param["UseCount"] !== null) {
            $this->UseCount = $param["UseCount"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }

        if (array_key_exists("QuotaName",$param) and $param["QuotaName"] !== null) {
            $this->QuotaName = $param["QuotaName"];
        }

        if (array_key_exists("CostType",$param) and $param["CostType"] !== null) {
            $this->CostType = $param["CostType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
