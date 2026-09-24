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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 登录审计列表实体
 *
 * @method integer getId() 获取<p>记录Id</p>
 * @method void setId(integer $Id) 设置<p>记录Id</p>
 * @method string getUuid() 获取<p>主机Uuid</p>
 * @method void setUuid(string $Uuid) 设置<p>主机Uuid</p>
 * @method string getMachineIp() 获取<p>主机ip</p>
 * @method void setMachineIp(string $MachineIp) 设置<p>主机ip</p>
 * @method string getMachineName() 获取<p>主机名</p>
 * @method void setMachineName(string $MachineName) 设置<p>主机名</p>
 * @method string getUserName() 获取<p>用户名</p>
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
 * @method string getSrcIp() 获取<p>来源ip</p>
 * @method void setSrcIp(string $SrcIp) 设置<p>来源ip</p>
 * @method integer getStatus() 获取<p>1:正常登录；2异地登录； 5已加白； 14：已处理；15：已忽略。</p>
 * @method void setStatus(integer $Status) 设置<p>1:正常登录；2异地登录； 5已加白； 14：已处理；15：已忽略。</p>
 * @method integer getCountry() 获取<p>国家id</p>
 * @method void setCountry(integer $Country) 设置<p>国家id</p>
 * @method integer getCity() 获取<p>城市id</p>
 * @method void setCity(integer $City) 设置<p>城市id</p>
 * @method integer getProvince() 获取<p>省份id</p>
 * @method void setProvince(integer $Province) 设置<p>省份id</p>
 * @method string getLoginTime() 获取<p>登录时间</p>
 * @method void setLoginTime(string $LoginTime) 设置<p>登录时间</p>
 * @method string getModifyTime() 获取<p>修改时间</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>修改时间</p>
 * @method integer getIsRiskArea() 获取<p>是否命中异地登录异常  1表示命中此类异常, 0表示未命中</p>
 * @method void setIsRiskArea(integer $IsRiskArea) 设置<p>是否命中异地登录异常  1表示命中此类异常, 0表示未命中</p>
 * @method integer getIsRiskUser() 获取<p>是否命中异常用户异常 1表示命中此类异常, 0表示未命中</p>
 * @method void setIsRiskUser(integer $IsRiskUser) 设置<p>是否命中异常用户异常 1表示命中此类异常, 0表示未命中</p>
 * @method integer getIsRiskTime() 获取<p>是否命中异常时间异常 1表示命中此类异常, 0表示未命中</p>
 * @method void setIsRiskTime(integer $IsRiskTime) 设置<p>是否命中异常时间异常 1表示命中此类异常, 0表示未命中</p>
 * @method integer getIsRiskSrcIp() 获取<p>是否命中异常IP异常 1表示命中此类异常, 0表示未命中</p>
 * @method void setIsRiskSrcIp(integer $IsRiskSrcIp) 设置<p>是否命中异常IP异常 1表示命中此类异常, 0表示未命中</p>
 * @method integer getRiskLevel() 获取<p>危险等级：<br>0 高危<br>1 可疑</p>
 * @method void setRiskLevel(integer $RiskLevel) 设置<p>危险等级：<br>0 高危<br>1 可疑</p>
 * @method string getLocation() 获取<p>位置名称</p>
 * @method void setLocation(string $Location) 设置<p>位置名称</p>
 * @method string getQuuid() 获取<p>主机quuid</p>
 * @method void setQuuid(string $Quuid) 设置<p>主机quuid</p>
 * @method string getDesc() 获取<p>高危信息说明：<br>ABROAD - 境外IP；<br>XTI - 威胁情报</p>
 * @method void setDesc(string $Desc) 设置<p>高危信息说明：<br>ABROAD - 境外IP；<br>XTI - 威胁情报</p>
 * @method MachineExtraInfo getMachineExtraInfo() 获取<p>附加信息</p>
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置<p>附加信息</p>
 * @method integer getPort() 获取<p>请求目的端口</p>
 * @method void setPort(integer $Port) 设置<p>请求目的端口</p>
 * @method IPAnalyse getIPAnalyse() 获取<p>ip分析</p>
 * @method void setIPAnalyse(IPAnalyse $IPAnalyse) 设置<p>ip分析</p>
 * @method string getHitRule() 获取<p>命中策略ID</p><p>枚举值：</p><ul><li>risk_login_1： 威胁情报</li><li>risk_login_2： 密码破解成功后登录</li><li>risk_login_3： 弱口令账户登录</li><li>risk_login_4： 非法账户登录</li><li>risk_login_5： 登录后存在入侵行为</li><li>risk_login_101： 海外IP登录</li><li>risk_login_102： 非常用登录地登录</li><li>risk_login_103： 非工作时间登录</li></ul>
 * @method void setHitRule(string $HitRule) 设置<p>命中策略ID</p><p>枚举值：</p><ul><li>risk_login_1： 威胁情报</li><li>risk_login_2： 密码破解成功后登录</li><li>risk_login_3： 弱口令账户登录</li><li>risk_login_4： 非法账户登录</li><li>risk_login_5： 登录后存在入侵行为</li><li>risk_login_101： 海外IP登录</li><li>risk_login_102： 非常用登录地登录</li><li>risk_login_103： 非工作时间登录</li></ul>
 * @method string getHitRuleName() 获取<p>命中策略名</p>
 * @method void setHitRuleName(string $HitRuleName) 设置<p>命中策略名</p>
 * @method integer getAlertCount() 获取<p>告警数量</p>
 * @method void setAlertCount(integer $AlertCount) 设置<p>告警数量</p>
 * @method string getFirstDiscoverTime() 获取<p>首次发现时间</p><p>参数格式：YYYY-MM-DD HH:MM:SS</p>
 * @method void setFirstDiscoverTime(string $FirstDiscoverTime) 设置<p>首次发现时间</p><p>参数格式：YYYY-MM-DD HH:MM:SS</p>
 * @method string getLastDiscoverTime() 获取<p>最近发现时间</p><p>参数格式：YYYY-MM-DD HH:MM:SS</p>
 * @method void setLastDiscoverTime(string $LastDiscoverTime) 设置<p>最近发现时间</p><p>参数格式：YYYY-MM-DD HH:MM:SS</p>
 * @method string getHarmDescribe() 获取<p>危害描述</p>
 * @method void setHarmDescribe(string $HarmDescribe) 设置<p>危害描述</p>
 * @method string getSuggestScheme() 获取<p>修复建议</p>
 * @method void setSuggestScheme(string $SuggestScheme) 设置<p>修复建议</p>
 * @method array getRecentLoginList() 获取<p>最近登录历史</p>
 * @method void setRecentLoginList(array $RecentLoginList) 设置<p>最近登录历史</p>
 */
class HostLoginList extends AbstractModel
{
    /**
     * @var integer <p>记录Id</p>
     */
    public $Id;

    /**
     * @var string <p>主机Uuid</p>
     */
    public $Uuid;

    /**
     * @var string <p>主机ip</p>
     */
    public $MachineIp;

    /**
     * @var string <p>主机名</p>
     */
    public $MachineName;

    /**
     * @var string <p>用户名</p>
     */
    public $UserName;

    /**
     * @var string <p>来源ip</p>
     */
    public $SrcIp;

    /**
     * @var integer <p>1:正常登录；2异地登录； 5已加白； 14：已处理；15：已忽略。</p>
     */
    public $Status;

    /**
     * @var integer <p>国家id</p>
     */
    public $Country;

    /**
     * @var integer <p>城市id</p>
     */
    public $City;

    /**
     * @var integer <p>省份id</p>
     */
    public $Province;

    /**
     * @var string <p>登录时间</p>
     */
    public $LoginTime;

    /**
     * @var string <p>修改时间</p>
     */
    public $ModifyTime;

    /**
     * @var integer <p>是否命中异地登录异常  1表示命中此类异常, 0表示未命中</p>
     */
    public $IsRiskArea;

    /**
     * @var integer <p>是否命中异常用户异常 1表示命中此类异常, 0表示未命中</p>
     */
    public $IsRiskUser;

    /**
     * @var integer <p>是否命中异常时间异常 1表示命中此类异常, 0表示未命中</p>
     */
    public $IsRiskTime;

    /**
     * @var integer <p>是否命中异常IP异常 1表示命中此类异常, 0表示未命中</p>
     */
    public $IsRiskSrcIp;

    /**
     * @var integer <p>危险等级：<br>0 高危<br>1 可疑</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>位置名称</p>
     */
    public $Location;

    /**
     * @var string <p>主机quuid</p>
     */
    public $Quuid;

    /**
     * @var string <p>高危信息说明：<br>ABROAD - 境外IP；<br>XTI - 威胁情报</p>
     */
    public $Desc;

    /**
     * @var MachineExtraInfo <p>附加信息</p>
     */
    public $MachineExtraInfo;

    /**
     * @var integer <p>请求目的端口</p>
     */
    public $Port;

    /**
     * @var IPAnalyse <p>ip分析</p>
     */
    public $IPAnalyse;

    /**
     * @var string <p>命中策略ID</p><p>枚举值：</p><ul><li>risk_login_1： 威胁情报</li><li>risk_login_2： 密码破解成功后登录</li><li>risk_login_3： 弱口令账户登录</li><li>risk_login_4： 非法账户登录</li><li>risk_login_5： 登录后存在入侵行为</li><li>risk_login_101： 海外IP登录</li><li>risk_login_102： 非常用登录地登录</li><li>risk_login_103： 非工作时间登录</li></ul>
     */
    public $HitRule;

    /**
     * @var string <p>命中策略名</p>
     */
    public $HitRuleName;

    /**
     * @var integer <p>告警数量</p>
     */
    public $AlertCount;

    /**
     * @var string <p>首次发现时间</p><p>参数格式：YYYY-MM-DD HH:MM:SS</p>
     */
    public $FirstDiscoverTime;

    /**
     * @var string <p>最近发现时间</p><p>参数格式：YYYY-MM-DD HH:MM:SS</p>
     */
    public $LastDiscoverTime;

    /**
     * @var string <p>危害描述</p>
     */
    public $HarmDescribe;

    /**
     * @var string <p>修复建议</p>
     */
    public $SuggestScheme;

    /**
     * @var array <p>最近登录历史</p>
     */
    public $RecentLoginList;

    /**
     * @param integer $Id <p>记录Id</p>
     * @param string $Uuid <p>主机Uuid</p>
     * @param string $MachineIp <p>主机ip</p>
     * @param string $MachineName <p>主机名</p>
     * @param string $UserName <p>用户名</p>
     * @param string $SrcIp <p>来源ip</p>
     * @param integer $Status <p>1:正常登录；2异地登录； 5已加白； 14：已处理；15：已忽略。</p>
     * @param integer $Country <p>国家id</p>
     * @param integer $City <p>城市id</p>
     * @param integer $Province <p>省份id</p>
     * @param string $LoginTime <p>登录时间</p>
     * @param string $ModifyTime <p>修改时间</p>
     * @param integer $IsRiskArea <p>是否命中异地登录异常  1表示命中此类异常, 0表示未命中</p>
     * @param integer $IsRiskUser <p>是否命中异常用户异常 1表示命中此类异常, 0表示未命中</p>
     * @param integer $IsRiskTime <p>是否命中异常时间异常 1表示命中此类异常, 0表示未命中</p>
     * @param integer $IsRiskSrcIp <p>是否命中异常IP异常 1表示命中此类异常, 0表示未命中</p>
     * @param integer $RiskLevel <p>危险等级：<br>0 高危<br>1 可疑</p>
     * @param string $Location <p>位置名称</p>
     * @param string $Quuid <p>主机quuid</p>
     * @param string $Desc <p>高危信息说明：<br>ABROAD - 境外IP；<br>XTI - 威胁情报</p>
     * @param MachineExtraInfo $MachineExtraInfo <p>附加信息</p>
     * @param integer $Port <p>请求目的端口</p>
     * @param IPAnalyse $IPAnalyse <p>ip分析</p>
     * @param string $HitRule <p>命中策略ID</p><p>枚举值：</p><ul><li>risk_login_1： 威胁情报</li><li>risk_login_2： 密码破解成功后登录</li><li>risk_login_3： 弱口令账户登录</li><li>risk_login_4： 非法账户登录</li><li>risk_login_5： 登录后存在入侵行为</li><li>risk_login_101： 海外IP登录</li><li>risk_login_102： 非常用登录地登录</li><li>risk_login_103： 非工作时间登录</li></ul>
     * @param string $HitRuleName <p>命中策略名</p>
     * @param integer $AlertCount <p>告警数量</p>
     * @param string $FirstDiscoverTime <p>首次发现时间</p><p>参数格式：YYYY-MM-DD HH:MM:SS</p>
     * @param string $LastDiscoverTime <p>最近发现时间</p><p>参数格式：YYYY-MM-DD HH:MM:SS</p>
     * @param string $HarmDescribe <p>危害描述</p>
     * @param string $SuggestScheme <p>修复建议</p>
     * @param array $RecentLoginList <p>最近登录历史</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("LoginTime",$param) and $param["LoginTime"] !== null) {
            $this->LoginTime = $param["LoginTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("IsRiskArea",$param) and $param["IsRiskArea"] !== null) {
            $this->IsRiskArea = $param["IsRiskArea"];
        }

        if (array_key_exists("IsRiskUser",$param) and $param["IsRiskUser"] !== null) {
            $this->IsRiskUser = $param["IsRiskUser"];
        }

        if (array_key_exists("IsRiskTime",$param) and $param["IsRiskTime"] !== null) {
            $this->IsRiskTime = $param["IsRiskTime"];
        }

        if (array_key_exists("IsRiskSrcIp",$param) and $param["IsRiskSrcIp"] !== null) {
            $this->IsRiskSrcIp = $param["IsRiskSrcIp"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("IPAnalyse",$param) and $param["IPAnalyse"] !== null) {
            $this->IPAnalyse = new IPAnalyse();
            $this->IPAnalyse->deserialize($param["IPAnalyse"]);
        }

        if (array_key_exists("HitRule",$param) and $param["HitRule"] !== null) {
            $this->HitRule = $param["HitRule"];
        }

        if (array_key_exists("HitRuleName",$param) and $param["HitRuleName"] !== null) {
            $this->HitRuleName = $param["HitRuleName"];
        }

        if (array_key_exists("AlertCount",$param) and $param["AlertCount"] !== null) {
            $this->AlertCount = $param["AlertCount"];
        }

        if (array_key_exists("FirstDiscoverTime",$param) and $param["FirstDiscoverTime"] !== null) {
            $this->FirstDiscoverTime = $param["FirstDiscoverTime"];
        }

        if (array_key_exists("LastDiscoverTime",$param) and $param["LastDiscoverTime"] !== null) {
            $this->LastDiscoverTime = $param["LastDiscoverTime"];
        }

        if (array_key_exists("HarmDescribe",$param) and $param["HarmDescribe"] !== null) {
            $this->HarmDescribe = $param["HarmDescribe"];
        }

        if (array_key_exists("SuggestScheme",$param) and $param["SuggestScheme"] !== null) {
            $this->SuggestScheme = $param["SuggestScheme"];
        }

        if (array_key_exists("RecentLoginList",$param) and $param["RecentLoginList"] !== null) {
            $this->RecentLoginList = [];
            foreach ($param["RecentLoginList"] as $key => $value){
                $obj = new RecentLoginItem();
                $obj->deserialize($value);
                array_push($this->RecentLoginList, $obj);
            }
        }
    }
}
