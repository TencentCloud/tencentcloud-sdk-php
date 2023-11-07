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
 * DescribeBillUsageDetail请求参数结构体
 *
 * @method string getStartTime() 获取查询开始时间，时间跨度不能大于31天
 * @method void setStartTime(string $StartTime) 设置查询开始时间，时间跨度不能大于31天
 * @method string getEndTime() 获取查询结束时间，时间跨度不能大于31天
 * @method void setEndTime(string $EndTime) 设置查询结束时间，时间跨度不能大于31天
 * @method integer getOffset() 获取指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0
 * @method void setOffset(integer $Offset) 设置指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0
 * @method integer getLimit() 获取指定分页每页返回的数据条数，如果不传默认为 50，单页最大支持 50。
 * @method void setLimit(integer $Limit) 设置指定分页每页返回的数据条数，如果不传默认为 50，单页最大支持 50。
 * @method string getQuotaType() 获取查询的套餐类型 （选填 ）不传则查询所有套餐；
对应关系如下
CloudEnterprise-企业版合同
SingleSignature-单方签章
CloudProve-签署报告
CloudOnlineSign-腾讯会议在线签约
ChannelWeCard-微工卡
SignFlow-合同套餐
SignFace-签署意愿（人脸识别）
SignPassword-签署意愿（密码）
SignSMS-签署意愿（短信）
PersonalEssAuth-签署人实名（腾讯电子签认证）
PersonalThirdAuth-签署人实名（信任第三方认证）
OrgEssAuth-签署企业实名
FlowNotify-短信通知
AuthService-企业工商信息查询
 * @method void setQuotaType(string $QuotaType) 设置查询的套餐类型 （选填 ）不传则查询所有套餐；
对应关系如下
CloudEnterprise-企业版合同
SingleSignature-单方签章
CloudProve-签署报告
CloudOnlineSign-腾讯会议在线签约
ChannelWeCard-微工卡
SignFlow-合同套餐
SignFace-签署意愿（人脸识别）
SignPassword-签署意愿（密码）
SignSMS-签署意愿（短信）
PersonalEssAuth-签署人实名（腾讯电子签认证）
PersonalThirdAuth-签署人实名（信任第三方认证）
OrgEssAuth-签署企业实名
FlowNotify-短信通知
AuthService-企业工商信息查询
 * @method Agent getAgent() 获取非必填，查询某个渠道企业的消耗情况。
关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。
 * @method void setAgent(Agent $Agent) 设置非必填，查询某个渠道企业的消耗情况。
关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。
 */
class DescribeBillUsageDetailRequest extends AbstractModel
{
    /**
     * @var string 查询开始时间，时间跨度不能大于31天
     */
    public $StartTime;

    /**
     * @var string 查询结束时间，时间跨度不能大于31天
     */
    public $EndTime;

    /**
     * @var integer 指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0
     */
    public $Offset;

    /**
     * @var integer 指定分页每页返回的数据条数，如果不传默认为 50，单页最大支持 50。
     */
    public $Limit;

    /**
     * @var string 查询的套餐类型 （选填 ）不传则查询所有套餐；
对应关系如下
CloudEnterprise-企业版合同
SingleSignature-单方签章
CloudProve-签署报告
CloudOnlineSign-腾讯会议在线签约
ChannelWeCard-微工卡
SignFlow-合同套餐
SignFace-签署意愿（人脸识别）
SignPassword-签署意愿（密码）
SignSMS-签署意愿（短信）
PersonalEssAuth-签署人实名（腾讯电子签认证）
PersonalThirdAuth-签署人实名（信任第三方认证）
OrgEssAuth-签署企业实名
FlowNotify-短信通知
AuthService-企业工商信息查询
     */
    public $QuotaType;

    /**
     * @var Agent 非必填，查询某个渠道企业的消耗情况。
关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。
     */
    public $Agent;

    /**
     * @param string $StartTime 查询开始时间，时间跨度不能大于31天
     * @param string $EndTime 查询结束时间，时间跨度不能大于31天
     * @param integer $Offset 指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0
     * @param integer $Limit 指定分页每页返回的数据条数，如果不传默认为 50，单页最大支持 50。
     * @param string $QuotaType 查询的套餐类型 （选填 ）不传则查询所有套餐；
对应关系如下
CloudEnterprise-企业版合同
SingleSignature-单方签章
CloudProve-签署报告
CloudOnlineSign-腾讯会议在线签约
ChannelWeCard-微工卡
SignFlow-合同套餐
SignFace-签署意愿（人脸识别）
SignPassword-签署意愿（密码）
SignSMS-签署意愿（短信）
PersonalEssAuth-签署人实名（腾讯电子签认证）
PersonalThirdAuth-签署人实名（信任第三方认证）
OrgEssAuth-签署企业实名
FlowNotify-短信通知
AuthService-企业工商信息查询
     * @param Agent $Agent 非必填，查询某个渠道企业的消耗情况。
关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("QuotaType",$param) and $param["QuotaType"] !== null) {
            $this->QuotaType = $param["QuotaType"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }
    }
}
