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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 邀请事件详情
 *
 * @method string getInviteeUserId() 获取<p>受邀请人ID</p>
 * @method void setInviteeUserId(string $InviteeUserId) 设置<p>受邀请人ID</p>
 * @method string getPromotionId() 获取<p>营销活动ID</p>
 * @method void setPromotionId(string $PromotionId) 设置<p>营销活动ID</p>
 * @method string getPromotionName() 获取<p>营销活动名称</p>
 * @method void setPromotionName(string $PromotionName) 设置<p>营销活动名称</p>
 * @method string getDescription() 获取<p>营销活动描述</p>
 * @method void setDescription(string $Description) 设置<p>营销活动描述</p>
 * @method string getInviteePhone() 获取<p>受邀请人电话号码</p><p>参数格式：符合E.164标准的带“+”、地区编码和号码的格式</p>
 * @method void setInviteePhone(string $InviteePhone) 设置<p>受邀请人电话号码</p><p>参数格式：符合E.164标准的带“+”、地区编码和号码的格式</p>
 * @method string getInvitationCode() 获取<p>邀请码</p>
 * @method void setInvitationCode(string $InvitationCode) 设置<p>邀请码</p>
 * @method string getInvitationUrl() 获取<p>邀请链接</p>
 * @method void setInvitationUrl(string $InvitationUrl) 设置<p>邀请链接</p>
 * @method string getInvitationChannel() 获取<p>邀请渠道，如微信、抖音、小红书等</p>
 * @method void setInvitationChannel(string $InvitationChannel) 设置<p>邀请渠道，如微信、抖音、小红书等</p>
 * @method array getCust() 获取<p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 * @method void setCust(array $Cust) 设置<p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 */
class InvitationEvent extends AbstractModel
{
    /**
     * @var string <p>受邀请人ID</p>
     */
    public $InviteeUserId;

    /**
     * @var string <p>营销活动ID</p>
     */
    public $PromotionId;

    /**
     * @var string <p>营销活动名称</p>
     */
    public $PromotionName;

    /**
     * @var string <p>营销活动描述</p>
     */
    public $Description;

    /**
     * @var string <p>受邀请人电话号码</p><p>参数格式：符合E.164标准的带“+”、地区编码和号码的格式</p>
     */
    public $InviteePhone;

    /**
     * @var string <p>邀请码</p>
     */
    public $InvitationCode;

    /**
     * @var string <p>邀请链接</p>
     */
    public $InvitationUrl;

    /**
     * @var string <p>邀请渠道，如微信、抖音、小红书等</p>
     */
    public $InvitationChannel;

    /**
     * @var array <p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
     */
    public $Cust;

    /**
     * @param string $InviteeUserId <p>受邀请人ID</p>
     * @param string $PromotionId <p>营销活动ID</p>
     * @param string $PromotionName <p>营销活动名称</p>
     * @param string $Description <p>营销活动描述</p>
     * @param string $InviteePhone <p>受邀请人电话号码</p><p>参数格式：符合E.164标准的带“+”、地区编码和号码的格式</p>
     * @param string $InvitationCode <p>邀请码</p>
     * @param string $InvitationUrl <p>邀请链接</p>
     * @param string $InvitationChannel <p>邀请渠道，如微信、抖音、小红书等</p>
     * @param array $Cust <p>与RCE约定的定制化信息，为K:V 格式的对象数组，示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
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
        if (array_key_exists("InviteeUserId",$param) and $param["InviteeUserId"] !== null) {
            $this->InviteeUserId = $param["InviteeUserId"];
        }

        if (array_key_exists("PromotionId",$param) and $param["PromotionId"] !== null) {
            $this->PromotionId = $param["PromotionId"];
        }

        if (array_key_exists("PromotionName",$param) and $param["PromotionName"] !== null) {
            $this->PromotionName = $param["PromotionName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InviteePhone",$param) and $param["InviteePhone"] !== null) {
            $this->InviteePhone = $param["InviteePhone"];
        }

        if (array_key_exists("InvitationCode",$param) and $param["InvitationCode"] !== null) {
            $this->InvitationCode = $param["InvitationCode"];
        }

        if (array_key_exists("InvitationUrl",$param) and $param["InvitationUrl"] !== null) {
            $this->InvitationUrl = $param["InvitationUrl"];
        }

        if (array_key_exists("InvitationChannel",$param) and $param["InvitationChannel"] !== null) {
            $this->InvitationChannel = $param["InvitationChannel"];
        }

        if (array_key_exists("Cust",$param) and $param["Cust"] !== null) {
            $this->Cust = [];
            foreach ($param["Cust"] as $key => $value){
                $obj = new Cust();
                $obj->deserialize($value);
                array_push($this->Cust, $obj);
            }
        }
    }
}
