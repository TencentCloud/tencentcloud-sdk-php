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
namespace TencentCloud\Rce\V20201103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 全栈式风控引擎出参值
 *
 * @method string getUserId() 获取账号ID：对应输入参数。
当AccountType为1时，对应QQ的OpenId；
当AccountType为2时，对应微信的OpenId/UnionId；
当AccountType为10004时，对应手机号的MD5值；
当AccountType为10005时，对应手机号的SHA256值。
 * @method void setUserId(string $UserId) 设置账号ID：对应输入参数。
当AccountType为1时，对应QQ的OpenId；
当AccountType为2时，对应微信的OpenId/UnionId；
当AccountType为10004时，对应手机号的MD5值；
当AccountType为10005时，对应手机号的SHA256值。
 * @method integer getPostTime() 获取操作时间戳，单位秒（对应输入参数）。
 * @method void setPostTime(integer $PostTime) 设置操作时间戳，单位秒（对应输入参数）。
 * @method string getAssociateAccount() 获取业务预留参数（暂无实际业务含义， 无需关注返回值）
 * @method void setAssociateAccount(string $AssociateAccount) 设置业务预留参数（暂无实际业务含义， 无需关注返回值）
 * @method string getUserIp() 获取操作来源的外网IP（对应输入参数）。
 * @method void setUserIp(string $UserIp) 设置操作来源的外网IP（对应输入参数）。
 * @method string getRiskLevel() 获取风险等级
pass：无恶意
review：低风险，需要人工审核
reject：高风险，建议拦截
 * @method void setRiskLevel(string $RiskLevel) 设置风险等级
pass：无恶意
review：低风险，需要人工审核
reject：高风险，建议拦截
 * @method array getRiskType() 获取风险类型，可能同时命中多个风险类型
1: 账号信用低，账号近期存在因恶意被处罚历史，网络低活跃，被举报等因素。
11: 疑似低活跃账号，账号活跃度与正常用户有差异。
2: 垃圾账号，疑似批量注册小号，近期存在严重违规或大量举报。
21: 疑似小号，账号有疑似线上养号，小号等行为。
22: 疑似违规账号，账号曾有违规行为、曾被举报过、曾因违规被处罚过等。
3: 无效账号，送检账号参数无法成功解析，请检查微信 OpenId 是否有误/AppId 与 QQ OpenId 无法关联/微信 OpenId 权限是否开通/手机号是否为中国大陆手机号；
4: 黑名单，该账号在业务侧有过拉黑记录。
5: 白名单，业务自行有添加过白名单记录。
101: 批量操作，存在 IP/设备/环境等因素的聚集性异常。
1011: 疑似 IP 属性聚集，出现 IP 聚集。
1012: 疑似设备属性聚集，出现设备聚集。
102: 自动机，疑似自动机批量请求。
103: 恶意行为-网赚，疑似网赚。
104: 微信登录态无效，检查 WeChatAccessToken 参数，是否已经失效。
201: 环境风险，环境异常操作 IP/设备/环境存在异常。当前 IP 为非常用 IP 或恶意 IP 段。
2011: 疑似非常用IP，请求当前请求 IP 非该账号常用 IP。
2012: 疑似 IP 异常，使用 IDC 机房 IP 或使用代理 IP 或使用恶意 IP 等。
205: 非公网有效 IP，传进来的 IP 地址为内网 IP 地址或者 IP 保留地址。
 * @method void setRiskType(array $RiskType) 设置风险类型，可能同时命中多个风险类型
1: 账号信用低，账号近期存在因恶意被处罚历史，网络低活跃，被举报等因素。
11: 疑似低活跃账号，账号活跃度与正常用户有差异。
2: 垃圾账号，疑似批量注册小号，近期存在严重违规或大量举报。
21: 疑似小号，账号有疑似线上养号，小号等行为。
22: 疑似违规账号，账号曾有违规行为、曾被举报过、曾因违规被处罚过等。
3: 无效账号，送检账号参数无法成功解析，请检查微信 OpenId 是否有误/AppId 与 QQ OpenId 无法关联/微信 OpenId 权限是否开通/手机号是否为中国大陆手机号；
4: 黑名单，该账号在业务侧有过拉黑记录。
5: 白名单，业务自行有添加过白名单记录。
101: 批量操作，存在 IP/设备/环境等因素的聚集性异常。
1011: 疑似 IP 属性聚集，出现 IP 聚集。
1012: 疑似设备属性聚集，出现设备聚集。
102: 自动机，疑似自动机批量请求。
103: 恶意行为-网赚，疑似网赚。
104: 微信登录态无效，检查 WeChatAccessToken 参数，是否已经失效。
201: 环境风险，环境异常操作 IP/设备/环境存在异常。当前 IP 为非常用 IP 或恶意 IP 段。
2011: 疑似非常用IP，请求当前请求 IP 非该账号常用 IP。
2012: 疑似 IP 异常，使用 IDC 机房 IP 或使用代理 IP 或使用恶意 IP 等。
205: 非公网有效 IP，传进来的 IP 地址为内网 IP 地址或者 IP 保留地址。
 * @method string getConstId() 获取设备指纹ID，如果集成了设备指纹，并传入了正确的DeviceToken和Platform，该字段正常输出；如果DeviceToken异常（校验不通过），则会在RiskType中返回"-1"标签，ConstId字段为空；如果没有集成设备指纹ConstId字段默认为空。
 * @method void setConstId(string $ConstId) 设置设备指纹ID，如果集成了设备指纹，并传入了正确的DeviceToken和Platform，该字段正常输出；如果DeviceToken异常（校验不通过），则会在RiskType中返回"-1"标签，ConstId字段为空；如果没有集成设备指纹ConstId字段默认为空。
 * @method string getRiskInformation() 获取风险扩展数据。
 * @method void setRiskInformation(string $RiskInformation) 设置风险扩展数据。
 */
class OutputManageMarketingRiskValue extends AbstractModel
{
    /**
     * @var string 账号ID：对应输入参数。
当AccountType为1时，对应QQ的OpenId；
当AccountType为2时，对应微信的OpenId/UnionId；
当AccountType为10004时，对应手机号的MD5值；
当AccountType为10005时，对应手机号的SHA256值。
     */
    public $UserId;

    /**
     * @var integer 操作时间戳，单位秒（对应输入参数）。
     */
    public $PostTime;

    /**
     * @var string 业务预留参数（暂无实际业务含义， 无需关注返回值）
     */
    public $AssociateAccount;

    /**
     * @var string 操作来源的外网IP（对应输入参数）。
     */
    public $UserIp;

    /**
     * @var string 风险等级
pass：无恶意
review：低风险，需要人工审核
reject：高风险，建议拦截
     */
    public $RiskLevel;

    /**
     * @var array 风险类型，可能同时命中多个风险类型
1: 账号信用低，账号近期存在因恶意被处罚历史，网络低活跃，被举报等因素。
11: 疑似低活跃账号，账号活跃度与正常用户有差异。
2: 垃圾账号，疑似批量注册小号，近期存在严重违规或大量举报。
21: 疑似小号，账号有疑似线上养号，小号等行为。
22: 疑似违规账号，账号曾有违规行为、曾被举报过、曾因违规被处罚过等。
3: 无效账号，送检账号参数无法成功解析，请检查微信 OpenId 是否有误/AppId 与 QQ OpenId 无法关联/微信 OpenId 权限是否开通/手机号是否为中国大陆手机号；
4: 黑名单，该账号在业务侧有过拉黑记录。
5: 白名单，业务自行有添加过白名单记录。
101: 批量操作，存在 IP/设备/环境等因素的聚集性异常。
1011: 疑似 IP 属性聚集，出现 IP 聚集。
1012: 疑似设备属性聚集，出现设备聚集。
102: 自动机，疑似自动机批量请求。
103: 恶意行为-网赚，疑似网赚。
104: 微信登录态无效，检查 WeChatAccessToken 参数，是否已经失效。
201: 环境风险，环境异常操作 IP/设备/环境存在异常。当前 IP 为非常用 IP 或恶意 IP 段。
2011: 疑似非常用IP，请求当前请求 IP 非该账号常用 IP。
2012: 疑似 IP 异常，使用 IDC 机房 IP 或使用代理 IP 或使用恶意 IP 等。
205: 非公网有效 IP，传进来的 IP 地址为内网 IP 地址或者 IP 保留地址。
     */
    public $RiskType;

    /**
     * @var string 设备指纹ID，如果集成了设备指纹，并传入了正确的DeviceToken和Platform，该字段正常输出；如果DeviceToken异常（校验不通过），则会在RiskType中返回"-1"标签，ConstId字段为空；如果没有集成设备指纹ConstId字段默认为空。
     */
    public $ConstId;

    /**
     * @var string 风险扩展数据。
     */
    public $RiskInformation;

    /**
     * @param string $UserId 账号ID：对应输入参数。
当AccountType为1时，对应QQ的OpenId；
当AccountType为2时，对应微信的OpenId/UnionId；
当AccountType为10004时，对应手机号的MD5值；
当AccountType为10005时，对应手机号的SHA256值。
     * @param integer $PostTime 操作时间戳，单位秒（对应输入参数）。
     * @param string $AssociateAccount 业务预留参数（暂无实际业务含义， 无需关注返回值）
     * @param string $UserIp 操作来源的外网IP（对应输入参数）。
     * @param string $RiskLevel 风险等级
pass：无恶意
review：低风险，需要人工审核
reject：高风险，建议拦截
     * @param array $RiskType 风险类型，可能同时命中多个风险类型
1: 账号信用低，账号近期存在因恶意被处罚历史，网络低活跃，被举报等因素。
11: 疑似低活跃账号，账号活跃度与正常用户有差异。
2: 垃圾账号，疑似批量注册小号，近期存在严重违规或大量举报。
21: 疑似小号，账号有疑似线上养号，小号等行为。
22: 疑似违规账号，账号曾有违规行为、曾被举报过、曾因违规被处罚过等。
3: 无效账号，送检账号参数无法成功解析，请检查微信 OpenId 是否有误/AppId 与 QQ OpenId 无法关联/微信 OpenId 权限是否开通/手机号是否为中国大陆手机号；
4: 黑名单，该账号在业务侧有过拉黑记录。
5: 白名单，业务自行有添加过白名单记录。
101: 批量操作，存在 IP/设备/环境等因素的聚集性异常。
1011: 疑似 IP 属性聚集，出现 IP 聚集。
1012: 疑似设备属性聚集，出现设备聚集。
102: 自动机，疑似自动机批量请求。
103: 恶意行为-网赚，疑似网赚。
104: 微信登录态无效，检查 WeChatAccessToken 参数，是否已经失效。
201: 环境风险，环境异常操作 IP/设备/环境存在异常。当前 IP 为非常用 IP 或恶意 IP 段。
2011: 疑似非常用IP，请求当前请求 IP 非该账号常用 IP。
2012: 疑似 IP 异常，使用 IDC 机房 IP 或使用代理 IP 或使用恶意 IP 等。
205: 非公网有效 IP，传进来的 IP 地址为内网 IP 地址或者 IP 保留地址。
     * @param string $ConstId 设备指纹ID，如果集成了设备指纹，并传入了正确的DeviceToken和Platform，该字段正常输出；如果DeviceToken异常（校验不通过），则会在RiskType中返回"-1"标签，ConstId字段为空；如果没有集成设备指纹ConstId字段默认为空。
     * @param string $RiskInformation 风险扩展数据。
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("PostTime",$param) and $param["PostTime"] !== null) {
            $this->PostTime = $param["PostTime"];
        }

        if (array_key_exists("AssociateAccount",$param) and $param["AssociateAccount"] !== null) {
            $this->AssociateAccount = $param["AssociateAccount"];
        }

        if (array_key_exists("UserIp",$param) and $param["UserIp"] !== null) {
            $this->UserIp = $param["UserIp"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("ConstId",$param) and $param["ConstId"] !== null) {
            $this->ConstId = $param["ConstId"];
        }

        if (array_key_exists("RiskInformation",$param) and $param["RiskInformation"] !== null) {
            $this->RiskInformation = $param["RiskInformation"];
        }
    }
}
