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
 * @method string getUserId() 获取<p>账号ID：对应输入参数。<br>当AccountType为1时，对应QQ的OpenId；<br>当AccountType为2时，对应微信的OpenId/UnionId；<br>当AccountType为10004时，对应手机号的MD5值；<br>当AccountType为10005时，对应手机号的SHA256值。</p>
 * @method void setUserId(string $UserId) 设置<p>账号ID：对应输入参数。<br>当AccountType为1时，对应QQ的OpenId；<br>当AccountType为2时，对应微信的OpenId/UnionId；<br>当AccountType为10004时，对应手机号的MD5值；<br>当AccountType为10005时，对应手机号的SHA256值。</p>
 * @method integer getPostTime() 获取<p>操作时间戳，单位秒（对应输入参数）。</p>
 * @method void setPostTime(integer $PostTime) 设置<p>操作时间戳，单位秒（对应输入参数）。</p>
 * @method string getAssociateAccount() 获取<p>业务预留参数（暂无实际业务含义， 无需关注返回值）</p>
 * @method void setAssociateAccount(string $AssociateAccount) 设置<p>业务预留参数（暂无实际业务含义， 无需关注返回值）</p>
 * @method string getUserIp() 获取<p>操作来源的外网IP（对应输入参数）。</p>
 * @method void setUserIp(string $UserIp) 设置<p>操作来源的外网IP（对应输入参数）。</p>
 * @method string getRiskLevel() 获取<p>风险等级<br>pass：无恶意<br>review：低风险，需要人工审核<br>reject：高风险，建议拦截</p>
 * @method void setRiskLevel(string $RiskLevel) 设置<p>风险等级<br>pass：无恶意<br>review：低风险，需要人工审核<br>reject：高风险，建议拦截</p>
 * @method array getRiskType() 获取<p>风险类型，可能同时命中多个风险类型<br>1: 账号信用低，账号近期存在因恶意被处罚历史，网络低活跃，被举报等因素。<br>11: 疑似低活跃账号，账号活跃度与正常用户有差异。<br>2: 垃圾账号，疑似批量注册小号，近期存在严重违规或大量举报。<br>21: 疑似小号，账号有疑似线上养号，小号等行为。<br>22: 疑似违规账号，账号曾有违规行为、曾被举报过、曾因违规被处罚过等。<br>3: 无效账号，账号参数无法成功解析。<br>4: 黑名单，该账号在业务侧有过拉黑记录。<br>5: 白名单，业务自行有添加过白名单记录。<br>101: 批量操作，存在 IP/设备/环境等因素的聚集性异常。<br>1011: 疑似 IP 属性聚集，出现 IP 聚集。<br>1012: 疑似设备属性聚集，出现设备聚集。<br>102: 自动机，疑似自动机批量请求。<br>103: 恶意行为-网赚，疑似网赚。<br>104: 登录态无效。<br>201: 环境风险，环境异常操作 IP/设备/环境存在异常。当前 IP 为非常用 IP 或恶意 IP 段。<br>2011: 疑似非常用IP，请求当前请求 IP 非该账号常用 IP。<br>2012: 疑似 IP 异常，使用 IDC 机房 IP 或使用代理 IP 或使用恶意 IP 等。<br>205: 非公网有效 IP，传进来的 IP 地址为内网 IP 地址或者 IP 保留地址。</p>
 * @method void setRiskType(array $RiskType) 设置<p>风险类型，可能同时命中多个风险类型<br>1: 账号信用低，账号近期存在因恶意被处罚历史，网络低活跃，被举报等因素。<br>11: 疑似低活跃账号，账号活跃度与正常用户有差异。<br>2: 垃圾账号，疑似批量注册小号，近期存在严重违规或大量举报。<br>21: 疑似小号，账号有疑似线上养号，小号等行为。<br>22: 疑似违规账号，账号曾有违规行为、曾被举报过、曾因违规被处罚过等。<br>3: 无效账号，账号参数无法成功解析。<br>4: 黑名单，该账号在业务侧有过拉黑记录。<br>5: 白名单，业务自行有添加过白名单记录。<br>101: 批量操作，存在 IP/设备/环境等因素的聚集性异常。<br>1011: 疑似 IP 属性聚集，出现 IP 聚集。<br>1012: 疑似设备属性聚集，出现设备聚集。<br>102: 自动机，疑似自动机批量请求。<br>103: 恶意行为-网赚，疑似网赚。<br>104: 登录态无效。<br>201: 环境风险，环境异常操作 IP/设备/环境存在异常。当前 IP 为非常用 IP 或恶意 IP 段。<br>2011: 疑似非常用IP，请求当前请求 IP 非该账号常用 IP。<br>2012: 疑似 IP 异常，使用 IDC 机房 IP 或使用代理 IP 或使用恶意 IP 等。<br>205: 非公网有效 IP，传进来的 IP 地址为内网 IP 地址或者 IP 保留地址。</p>
 * @method string getConstId() 获取<p>设备指纹ID，如果集成了设备指纹，并传入了正确的DeviceToken和Platform，该字段正常输出；如果DeviceToken异常（校验不通过），则会在RiskType中返回&quot;-1&quot;标签，ConstId字段为空；如果没有集成设备指纹ConstId字段默认为空。</p>
 * @method void setConstId(string $ConstId) 设置<p>设备指纹ID，如果集成了设备指纹，并传入了正确的DeviceToken和Platform，该字段正常输出；如果DeviceToken异常（校验不通过），则会在RiskType中返回&quot;-1&quot;标签，ConstId字段为空；如果没有集成设备指纹ConstId字段默认为空。</p>
 * @method string getRiskInformation() 获取<p>风险扩展数据。</p>
 * @method void setRiskInformation(string $RiskInformation) 设置<p>风险扩展数据。</p>
 */
class OutputManageMarketingRiskValue extends AbstractModel
{
    /**
     * @var string <p>账号ID：对应输入参数。<br>当AccountType为1时，对应QQ的OpenId；<br>当AccountType为2时，对应微信的OpenId/UnionId；<br>当AccountType为10004时，对应手机号的MD5值；<br>当AccountType为10005时，对应手机号的SHA256值。</p>
     */
    public $UserId;

    /**
     * @var integer <p>操作时间戳，单位秒（对应输入参数）。</p>
     */
    public $PostTime;

    /**
     * @var string <p>业务预留参数（暂无实际业务含义， 无需关注返回值）</p>
     */
    public $AssociateAccount;

    /**
     * @var string <p>操作来源的外网IP（对应输入参数）。</p>
     */
    public $UserIp;

    /**
     * @var string <p>风险等级<br>pass：无恶意<br>review：低风险，需要人工审核<br>reject：高风险，建议拦截</p>
     */
    public $RiskLevel;

    /**
     * @var array <p>风险类型，可能同时命中多个风险类型<br>1: 账号信用低，账号近期存在因恶意被处罚历史，网络低活跃，被举报等因素。<br>11: 疑似低活跃账号，账号活跃度与正常用户有差异。<br>2: 垃圾账号，疑似批量注册小号，近期存在严重违规或大量举报。<br>21: 疑似小号，账号有疑似线上养号，小号等行为。<br>22: 疑似违规账号，账号曾有违规行为、曾被举报过、曾因违规被处罚过等。<br>3: 无效账号，账号参数无法成功解析。<br>4: 黑名单，该账号在业务侧有过拉黑记录。<br>5: 白名单，业务自行有添加过白名单记录。<br>101: 批量操作，存在 IP/设备/环境等因素的聚集性异常。<br>1011: 疑似 IP 属性聚集，出现 IP 聚集。<br>1012: 疑似设备属性聚集，出现设备聚集。<br>102: 自动机，疑似自动机批量请求。<br>103: 恶意行为-网赚，疑似网赚。<br>104: 登录态无效。<br>201: 环境风险，环境异常操作 IP/设备/环境存在异常。当前 IP 为非常用 IP 或恶意 IP 段。<br>2011: 疑似非常用IP，请求当前请求 IP 非该账号常用 IP。<br>2012: 疑似 IP 异常，使用 IDC 机房 IP 或使用代理 IP 或使用恶意 IP 等。<br>205: 非公网有效 IP，传进来的 IP 地址为内网 IP 地址或者 IP 保留地址。</p>
     */
    public $RiskType;

    /**
     * @var string <p>设备指纹ID，如果集成了设备指纹，并传入了正确的DeviceToken和Platform，该字段正常输出；如果DeviceToken异常（校验不通过），则会在RiskType中返回&quot;-1&quot;标签，ConstId字段为空；如果没有集成设备指纹ConstId字段默认为空。</p>
     */
    public $ConstId;

    /**
     * @var string <p>风险扩展数据。</p>
     */
    public $RiskInformation;

    /**
     * @param string $UserId <p>账号ID：对应输入参数。<br>当AccountType为1时，对应QQ的OpenId；<br>当AccountType为2时，对应微信的OpenId/UnionId；<br>当AccountType为10004时，对应手机号的MD5值；<br>当AccountType为10005时，对应手机号的SHA256值。</p>
     * @param integer $PostTime <p>操作时间戳，单位秒（对应输入参数）。</p>
     * @param string $AssociateAccount <p>业务预留参数（暂无实际业务含义， 无需关注返回值）</p>
     * @param string $UserIp <p>操作来源的外网IP（对应输入参数）。</p>
     * @param string $RiskLevel <p>风险等级<br>pass：无恶意<br>review：低风险，需要人工审核<br>reject：高风险，建议拦截</p>
     * @param array $RiskType <p>风险类型，可能同时命中多个风险类型<br>1: 账号信用低，账号近期存在因恶意被处罚历史，网络低活跃，被举报等因素。<br>11: 疑似低活跃账号，账号活跃度与正常用户有差异。<br>2: 垃圾账号，疑似批量注册小号，近期存在严重违规或大量举报。<br>21: 疑似小号，账号有疑似线上养号，小号等行为。<br>22: 疑似违规账号，账号曾有违规行为、曾被举报过、曾因违规被处罚过等。<br>3: 无效账号，账号参数无法成功解析。<br>4: 黑名单，该账号在业务侧有过拉黑记录。<br>5: 白名单，业务自行有添加过白名单记录。<br>101: 批量操作，存在 IP/设备/环境等因素的聚集性异常。<br>1011: 疑似 IP 属性聚集，出现 IP 聚集。<br>1012: 疑似设备属性聚集，出现设备聚集。<br>102: 自动机，疑似自动机批量请求。<br>103: 恶意行为-网赚，疑似网赚。<br>104: 登录态无效。<br>201: 环境风险，环境异常操作 IP/设备/环境存在异常。当前 IP 为非常用 IP 或恶意 IP 段。<br>2011: 疑似非常用IP，请求当前请求 IP 非该账号常用 IP。<br>2012: 疑似 IP 异常，使用 IDC 机房 IP 或使用代理 IP 或使用恶意 IP 等。<br>205: 非公网有效 IP，传进来的 IP 地址为内网 IP 地址或者 IP 保留地址。</p>
     * @param string $ConstId <p>设备指纹ID，如果集成了设备指纹，并传入了正确的DeviceToken和Platform，该字段正常输出；如果DeviceToken异常（校验不通过），则会在RiskType中返回&quot;-1&quot;标签，ConstId字段为空；如果没有集成设备指纹ConstId字段默认为空。</p>
     * @param string $RiskInformation <p>风险扩展数据。</p>
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
