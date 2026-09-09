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
 * ChannelDescribeBillUsageDetail请求参数结构体
 *
 * @method Agent getAgent() 获取<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li></ul>第三方平台子客企业必须已经经过实名认证
 * @method void setAgent(Agent $Agent) 设置<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li></ul>第三方平台子客企业必须已经经过实名认证
 * @method string getStartTime() 获取<p>查询开始时间字符串，格式为yyyyMMdd，时间跨度不能大于31天。<font color="red">注意：从 2026年10月10日起，开始日期和结束日期必须在同一个自然月内，不支持跨月查询。</font></p><ul><li><p>正确示例：StartTime=20260901，EndTime=20260930。开始和结束日期都在 2026年9月，可以查询。</p></li><li><p>错误示例：StartTime=20260815，EndTime=20260915。开始日期在8月，结束日期在9月，属于跨月查询，不支持。</p></li></ul><p>参数格式：yyyyMMdd</p>
 * @method void setStartTime(string $StartTime) 设置<p>查询开始时间字符串，格式为yyyyMMdd，时间跨度不能大于31天。<font color="red">注意：从 2026年10月10日起，开始日期和结束日期必须在同一个自然月内，不支持跨月查询。</font></p><ul><li><p>正确示例：StartTime=20260901，EndTime=20260930。开始和结束日期都在 2026年9月，可以查询。</p></li><li><p>错误示例：StartTime=20260815，EndTime=20260915。开始日期在8月，结束日期在9月，属于跨月查询，不支持。</p></li></ul><p>参数格式：yyyyMMdd</p>
 * @method string getEndTime() 获取<p>查询结束时间字符串，格式为yyyyMMdd，时间跨度不能大于31天。<font color="red">注意：从 2026年10月10日起，开始日期和结束日期必须在同一个自然月内，不支持跨月查询。</font></p><ul><li><p>正确示例：StartTime=20260901，EndTime=20260930。开始和结束日期都在 2026年9月，可以查询。</p></li><li><p>错误示例：StartTime=20260815，EndTime=20260915。开始日期在8月，结束日期在9月，属于跨月查询，不支持。</p></li></ul><p>参数格式：yyyyMMdd</p>
 * @method void setEndTime(string $EndTime) 设置<p>查询结束时间字符串，格式为yyyyMMdd，时间跨度不能大于31天。<font color="red">注意：从 2026年10月10日起，开始日期和结束日期必须在同一个自然月内，不支持跨月查询。</font></p><ul><li><p>正确示例：StartTime=20260901，EndTime=20260930。开始和结束日期都在 2026年9月，可以查询。</p></li><li><p>错误示例：StartTime=20260815，EndTime=20260915。开始日期在8月，结束日期在9月，属于跨月查询，不支持。</p></li></ul><p>参数格式：yyyyMMdd</p>
 * @method string getQuotaType() 获取<p>查询的套餐类型 （选填 ）不传则查询所有套餐；<br>目前支持:</p><ul><li>**CloudEnterprise**: 企业版合同</li><li>**SingleSignature**: 单方签章</li><li>**CloudProve**: 签署报告</li><li>**CloudOnlineSign**: 腾讯会议在线签约</li><li>**ChannelWeCard**: 微工卡</li><li>**SignFlow**: 合同套餐</li><li>**SignFace**: 签署意愿（人脸识别）</li><li>**SignPassword**: 签署意愿（密码）</li><li>**SignSMS**: 签署意愿（短信）</li><li>**PersonalEssAuth**: 签署人实名（腾讯电子签认证）</li><li>**PersonalThirdAuth**: 签署人实名（信任第三方认证）</li><li>**OrgEssAuth**: 签署企业实名</li><li>**FlowNotify**: 短信通知</li><li>**AuthService**: 企业工商信息查询</li></ul>
 * @method void setQuotaType(string $QuotaType) 设置<p>查询的套餐类型 （选填 ）不传则查询所有套餐；<br>目前支持:</p><ul><li>**CloudEnterprise**: 企业版合同</li><li>**SingleSignature**: 单方签章</li><li>**CloudProve**: 签署报告</li><li>**CloudOnlineSign**: 腾讯会议在线签约</li><li>**ChannelWeCard**: 微工卡</li><li>**SignFlow**: 合同套餐</li><li>**SignFace**: 签署意愿（人脸识别）</li><li>**SignPassword**: 签署意愿（密码）</li><li>**SignSMS**: 签署意愿（短信）</li><li>**PersonalEssAuth**: 签署人实名（腾讯电子签认证）</li><li>**PersonalThirdAuth**: 签署人实名（信任第三方认证）</li><li>**OrgEssAuth**: 签署企业实名</li><li>**FlowNotify**: 短信通知</li><li>**AuthService**: 企业工商信息查询</li></ul>
 * @method integer getOffset() 获取<p>指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0</p>
 * @method void setOffset(integer $Offset) 设置<p>指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0</p>
 * @method integer getLimit() 获取<p>指定分页每页返回的数据条数，如果不传默认为 100，单页最大支持 100。</p>
 * @method void setLimit(integer $Limit) 设置<p>指定分页每页返回的数据条数，如果不传默认为 100，单页最大支持 100。</p>
 */
class ChannelDescribeBillUsageDetailRequest extends AbstractModel
{
    /**
     * @var Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li></ul>第三方平台子客企业必须已经经过实名认证
     */
    public $Agent;

    /**
     * @var string <p>查询开始时间字符串，格式为yyyyMMdd，时间跨度不能大于31天。<font color="red">注意：从 2026年10月10日起，开始日期和结束日期必须在同一个自然月内，不支持跨月查询。</font></p><ul><li><p>正确示例：StartTime=20260901，EndTime=20260930。开始和结束日期都在 2026年9月，可以查询。</p></li><li><p>错误示例：StartTime=20260815，EndTime=20260915。开始日期在8月，结束日期在9月，属于跨月查询，不支持。</p></li></ul><p>参数格式：yyyyMMdd</p>
     */
    public $StartTime;

    /**
     * @var string <p>查询结束时间字符串，格式为yyyyMMdd，时间跨度不能大于31天。<font color="red">注意：从 2026年10月10日起，开始日期和结束日期必须在同一个自然月内，不支持跨月查询。</font></p><ul><li><p>正确示例：StartTime=20260901，EndTime=20260930。开始和结束日期都在 2026年9月，可以查询。</p></li><li><p>错误示例：StartTime=20260815，EndTime=20260915。开始日期在8月，结束日期在9月，属于跨月查询，不支持。</p></li></ul><p>参数格式：yyyyMMdd</p>
     */
    public $EndTime;

    /**
     * @var string <p>查询的套餐类型 （选填 ）不传则查询所有套餐；<br>目前支持:</p><ul><li>**CloudEnterprise**: 企业版合同</li><li>**SingleSignature**: 单方签章</li><li>**CloudProve**: 签署报告</li><li>**CloudOnlineSign**: 腾讯会议在线签约</li><li>**ChannelWeCard**: 微工卡</li><li>**SignFlow**: 合同套餐</li><li>**SignFace**: 签署意愿（人脸识别）</li><li>**SignPassword**: 签署意愿（密码）</li><li>**SignSMS**: 签署意愿（短信）</li><li>**PersonalEssAuth**: 签署人实名（腾讯电子签认证）</li><li>**PersonalThirdAuth**: 签署人实名（信任第三方认证）</li><li>**OrgEssAuth**: 签署企业实名</li><li>**FlowNotify**: 短信通知</li><li>**AuthService**: 企业工商信息查询</li></ul>
     */
    public $QuotaType;

    /**
     * @var integer <p>指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>指定分页每页返回的数据条数，如果不传默认为 100，单页最大支持 100。</p>
     */
    public $Limit;

    /**
     * @param Agent $Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li></ul>第三方平台子客企业必须已经经过实名认证
     * @param string $StartTime <p>查询开始时间字符串，格式为yyyyMMdd，时间跨度不能大于31天。<font color="red">注意：从 2026年10月10日起，开始日期和结束日期必须在同一个自然月内，不支持跨月查询。</font></p><ul><li><p>正确示例：StartTime=20260901，EndTime=20260930。开始和结束日期都在 2026年9月，可以查询。</p></li><li><p>错误示例：StartTime=20260815，EndTime=20260915。开始日期在8月，结束日期在9月，属于跨月查询，不支持。</p></li></ul><p>参数格式：yyyyMMdd</p>
     * @param string $EndTime <p>查询结束时间字符串，格式为yyyyMMdd，时间跨度不能大于31天。<font color="red">注意：从 2026年10月10日起，开始日期和结束日期必须在同一个自然月内，不支持跨月查询。</font></p><ul><li><p>正确示例：StartTime=20260901，EndTime=20260930。开始和结束日期都在 2026年9月，可以查询。</p></li><li><p>错误示例：StartTime=20260815，EndTime=20260915。开始日期在8月，结束日期在9月，属于跨月查询，不支持。</p></li></ul><p>参数格式：yyyyMMdd</p>
     * @param string $QuotaType <p>查询的套餐类型 （选填 ）不传则查询所有套餐；<br>目前支持:</p><ul><li>**CloudEnterprise**: 企业版合同</li><li>**SingleSignature**: 单方签章</li><li>**CloudProve**: 签署报告</li><li>**CloudOnlineSign**: 腾讯会议在线签约</li><li>**ChannelWeCard**: 微工卡</li><li>**SignFlow**: 合同套餐</li><li>**SignFace**: 签署意愿（人脸识别）</li><li>**SignPassword**: 签署意愿（密码）</li><li>**SignSMS**: 签署意愿（短信）</li><li>**PersonalEssAuth**: 签署人实名（腾讯电子签认证）</li><li>**PersonalThirdAuth**: 签署人实名（信任第三方认证）</li><li>**OrgEssAuth**: 签署企业实名</li><li>**FlowNotify**: 短信通知</li><li>**AuthService**: 企业工商信息查询</li></ul>
     * @param integer $Offset <p>指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0</p>
     * @param integer $Limit <p>指定分页每页返回的数据条数，如果不传默认为 100，单页最大支持 100。</p>
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
        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("QuotaType",$param) and $param["QuotaType"] !== null) {
            $this->QuotaType = $param["QuotaType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
