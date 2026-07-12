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
 * DescribeBillUsage请求参数结构体
 *
 * @method string getStartTime() 获取<p>查询开始时间字符串，格式为yyyymmdd,时间跨度不能大于90天</p>
 * @method void setStartTime(string $StartTime) 设置<p>查询开始时间字符串，格式为yyyymmdd,时间跨度不能大于90天</p>
 * @method string getEndTime() 获取<p>查询结束时间字符串，格式为yyyymmdd,时间跨度不能大于90天</p>
 * @method void setEndTime(string $EndTime) 设置<p>查询结束时间字符串，格式为yyyymmdd,时间跨度不能大于90天</p>
 * @method string getQuotaType() 获取<p>查询的套餐类型 （选填 ）不传则查询所有套餐；目前支持:<ul><li><strong>CloudEnterprise</strong>: 企业版合同</li><li><strong>SingleSignature</strong>: 单方签章</li><li><strong>CloudProve</strong>: 签署报告</li><li><strong>CloudOnlineSign</strong>: 腾讯会议在线签约</li><li><strong>ChannelWeCard</strong>: 微工卡</li><li><strong>SignFlow</strong>: 合同套餐</li><li><strong>SignFace</strong>: 签署意愿（人脸识别）</li><li><strong>SignPassword</strong>: 签署意愿（密码）</li><li><strong>SignSMS</strong>: 签署意愿（短信）</li><li><strong>PersonalEssAuth</strong>: 签署人实名（腾讯电子签认证）</li><li><strong>PersonalThirdAuth</strong>: 签署人实名（信任第三方认证）</li><li><strong>OrgEssAuth</strong>: 签署企业实名</li><li><strong>FlowNotify</strong>: 短信通知</li><li><strong>AuthService</strong>: 企业工商信息查询</li></ul></p>
 * @method void setQuotaType(string $QuotaType) 设置<p>查询的套餐类型 （选填 ）不传则查询所有套餐；目前支持:<ul><li><strong>CloudEnterprise</strong>: 企业版合同</li><li><strong>SingleSignature</strong>: 单方签章</li><li><strong>CloudProve</strong>: 签署报告</li><li><strong>CloudOnlineSign</strong>: 腾讯会议在线签约</li><li><strong>ChannelWeCard</strong>: 微工卡</li><li><strong>SignFlow</strong>: 合同套餐</li><li><strong>SignFace</strong>: 签署意愿（人脸识别）</li><li><strong>SignPassword</strong>: 签署意愿（密码）</li><li><strong>SignSMS</strong>: 签署意愿（短信）</li><li><strong>PersonalEssAuth</strong>: 签署人实名（腾讯电子签认证）</li><li><strong>PersonalThirdAuth</strong>: 签署人实名（信任第三方认证）</li><li><strong>OrgEssAuth</strong>: 签署企业实名</li><li><strong>FlowNotify</strong>: 短信通知</li><li><strong>AuthService</strong>: 企业工商信息查询</li></ul></p>
 * @method boolean getDisplaySubEnterprise() 获取<p>是否展示集团子企业的明细，默认否</p>
 * @method void setDisplaySubEnterprise(boolean $DisplaySubEnterprise) 设置<p>是否展示集团子企业的明细，默认否</p>
 */
class DescribeBillUsageRequest extends AbstractModel
{
    /**
     * @var string <p>查询开始时间字符串，格式为yyyymmdd,时间跨度不能大于90天</p>
     */
    public $StartTime;

    /**
     * @var string <p>查询结束时间字符串，格式为yyyymmdd,时间跨度不能大于90天</p>
     */
    public $EndTime;

    /**
     * @var string <p>查询的套餐类型 （选填 ）不传则查询所有套餐；目前支持:<ul><li><strong>CloudEnterprise</strong>: 企业版合同</li><li><strong>SingleSignature</strong>: 单方签章</li><li><strong>CloudProve</strong>: 签署报告</li><li><strong>CloudOnlineSign</strong>: 腾讯会议在线签约</li><li><strong>ChannelWeCard</strong>: 微工卡</li><li><strong>SignFlow</strong>: 合同套餐</li><li><strong>SignFace</strong>: 签署意愿（人脸识别）</li><li><strong>SignPassword</strong>: 签署意愿（密码）</li><li><strong>SignSMS</strong>: 签署意愿（短信）</li><li><strong>PersonalEssAuth</strong>: 签署人实名（腾讯电子签认证）</li><li><strong>PersonalThirdAuth</strong>: 签署人实名（信任第三方认证）</li><li><strong>OrgEssAuth</strong>: 签署企业实名</li><li><strong>FlowNotify</strong>: 短信通知</li><li><strong>AuthService</strong>: 企业工商信息查询</li></ul></p>
     */
    public $QuotaType;

    /**
     * @var boolean <p>是否展示集团子企业的明细，默认否</p>
     */
    public $DisplaySubEnterprise;

    /**
     * @param string $StartTime <p>查询开始时间字符串，格式为yyyymmdd,时间跨度不能大于90天</p>
     * @param string $EndTime <p>查询结束时间字符串，格式为yyyymmdd,时间跨度不能大于90天</p>
     * @param string $QuotaType <p>查询的套餐类型 （选填 ）不传则查询所有套餐；目前支持:<ul><li><strong>CloudEnterprise</strong>: 企业版合同</li><li><strong>SingleSignature</strong>: 单方签章</li><li><strong>CloudProve</strong>: 签署报告</li><li><strong>CloudOnlineSign</strong>: 腾讯会议在线签约</li><li><strong>ChannelWeCard</strong>: 微工卡</li><li><strong>SignFlow</strong>: 合同套餐</li><li><strong>SignFace</strong>: 签署意愿（人脸识别）</li><li><strong>SignPassword</strong>: 签署意愿（密码）</li><li><strong>SignSMS</strong>: 签署意愿（短信）</li><li><strong>PersonalEssAuth</strong>: 签署人实名（腾讯电子签认证）</li><li><strong>PersonalThirdAuth</strong>: 签署人实名（信任第三方认证）</li><li><strong>OrgEssAuth</strong>: 签署企业实名</li><li><strong>FlowNotify</strong>: 短信通知</li><li><strong>AuthService</strong>: 企业工商信息查询</li></ul></p>
     * @param boolean $DisplaySubEnterprise <p>是否展示集团子企业的明细，默认否</p>
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

        if (array_key_exists("QuotaType",$param) and $param["QuotaType"] !== null) {
            $this->QuotaType = $param["QuotaType"];
        }

        if (array_key_exists("DisplaySubEnterprise",$param) and $param["DisplaySubEnterprise"] !== null) {
            $this->DisplaySubEnterprise = $param["DisplaySubEnterprise"];
        }
    }
}
