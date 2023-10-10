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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityProtectionStat返回参数结构体
 *
 * @method integer getAssetManageStat() 获取0 ：0付费资产情况， 1：存在未安装agent情况 ，2：部分资产已是专业版/旗舰版， 3：全部资产已是专业版/旗舰版
 * @method void setAssetManageStat(integer $AssetManageStat) 设置0 ：0付费资产情况， 1：存在未安装agent情况 ，2：部分资产已是专业版/旗舰版， 3：全部资产已是专业版/旗舰版
 * @method integer getVulManageStat() 获取0:从未检测过，或0资产付费情况, 1:存在漏洞风险, 2:无风险
 * @method void setVulManageStat(integer $VulManageStat) 设置0:从未检测过，或0资产付费情况, 1:存在漏洞风险, 2:无风险
 * @method integer getSecureBasicLineStat() 获取0:从未检测过，或0资产付费情况, 1:存在基线风险,2:无风险
 * @method void setSecureBasicLineStat(integer $SecureBasicLineStat) 设置0:从未检测过，或0资产付费情况, 1:存在基线风险,2:无风险
 * @method integer getMalwareScanStat() 获取0:从未检测过，或0资产付费情况, 1:已检测，存在恶意文件, 2:已检测，未开启隔离防护, 3:已检测且已开启防护且无风险
 * @method void setMalwareScanStat(integer $MalwareScanStat) 设置0:从未检测过，或0资产付费情况, 1:已检测，存在恶意文件, 2:已检测，未开启隔离防护, 3:已检测且已开启防护且无风险
 * @method integer getDefenseBruteAttackStat() 获取密码破解是否开启防护 0:未开启防护或0付费资产情况 1:已开启防护 2:存在带处理事件
 * @method void setDefenseBruteAttackStat(integer $DefenseBruteAttackStat) 设置密码破解是否开启防护 0:未开启防护或0付费资产情况 1:已开启防护 2:存在带处理事件
 * @method integer getFileTamperStat() 获取核心文件监控 0:未开启防护（0付费资产情况）,1: 已开通
 * @method void setFileTamperStat(integer $FileTamperStat) 设置核心文件监控 0:未开启防护（0付费资产情况）,1: 已开通
 * @method integer getWebPageStat() 获取网页防篡改  0:未开通, 1:已开通
 * @method void setWebPageStat(integer $WebPageStat) 设置网页防篡改  0:未开通, 1:已开通
 * @method integer getLoginLogStat() 获取异常登录 0:存在未处理风险,1:无风险，未配置白名单,2:无风险，已配置
 * @method void setLoginLogStat(integer $LoginLogStat) 设置异常登录 0:存在未处理风险,1:无风险，未配置白名单,2:无风险，已配置
 * @method integer getDiscoverBruteAttackStat() 获取检测--密码破解有无存在风险  0:存在未处理风险, 1：无风险，正常检测
 * @method void setDiscoverBruteAttackStat(integer $DiscoverBruteAttackStat) 设置检测--密码破解有无存在风险  0:存在未处理风险, 1：无风险，正常检测
 * @method integer getMaliciousRequestStat() 获取恶意请求 0 : 0台开通专业版/旗舰版, 1: 恶意请求 存在未处理风险, 2:已有付费资产，无风险
 * @method void setMaliciousRequestStat(integer $MaliciousRequestStat) 设置恶意请求 0 : 0台开通专业版/旗舰版, 1: 恶意请求 存在未处理风险, 2:已有付费资产，无风险
 * @method integer getPrivilegeStat() 获取本地提权 0:0台开通专业版/旗舰版, 1:存在未处理风险 2:已有付费资产，无风险
 * @method void setPrivilegeStat(integer $PrivilegeStat) 设置本地提权 0:0台开通专业版/旗舰版, 1:存在未处理风险 2:已有付费资产，无风险
 * @method integer getReverseShellStat() 获取反弹shell 0:0台开通专业版/旗舰版, 1:存在未处理风险 2:已有付费资产，无风险
 * @method void setReverseShellStat(integer $ReverseShellStat) 设置反弹shell 0:0台开通专业版/旗舰版, 1:存在未处理风险 2:已有付费资产，无风险
 * @method integer getExpertServiceStat() 获取专家服务 0:未开通服务, 1:已开通
 * @method void setExpertServiceStat(integer $ExpertServiceStat) 设置专家服务 0:未开通服务, 1:已开通
 * @method integer getLogAnalysisStat() 获取日志分析 0:未开通服务, 1:已开通
 * @method void setLogAnalysisStat(integer $LogAnalysisStat) 设置日志分析 0:未开通服务, 1:已开通
 * @method integer getWarningSetStat() 获取安全告警 0:未开通设置（全部关闭） 1:已开通（只要开启1个就算）
 * @method void setWarningSetStat(integer $WarningSetStat) 设置安全告警 0:未开通设置（全部关闭） 1:已开通（只要开启1个就算）
 * @method integer getEventBashStat() 获取高危命令，0：0台开通专业版/旗舰版， 1：存在未处理风险， 2：已有付费资产，无风险
 * @method void setEventBashStat(integer $EventBashStat) 设置高危命令，0：0台开通专业版/旗舰版， 1：存在未处理风险， 2：已有付费资产，无风险
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSecurityProtectionStatResponse extends AbstractModel
{
    /**
     * @var integer 0 ：0付费资产情况， 1：存在未安装agent情况 ，2：部分资产已是专业版/旗舰版， 3：全部资产已是专业版/旗舰版
     */
    public $AssetManageStat;

    /**
     * @var integer 0:从未检测过，或0资产付费情况, 1:存在漏洞风险, 2:无风险
     */
    public $VulManageStat;

    /**
     * @var integer 0:从未检测过，或0资产付费情况, 1:存在基线风险,2:无风险
     */
    public $SecureBasicLineStat;

    /**
     * @var integer 0:从未检测过，或0资产付费情况, 1:已检测，存在恶意文件, 2:已检测，未开启隔离防护, 3:已检测且已开启防护且无风险
     */
    public $MalwareScanStat;

    /**
     * @var integer 密码破解是否开启防护 0:未开启防护或0付费资产情况 1:已开启防护 2:存在带处理事件
     */
    public $DefenseBruteAttackStat;

    /**
     * @var integer 核心文件监控 0:未开启防护（0付费资产情况）,1: 已开通
     */
    public $FileTamperStat;

    /**
     * @var integer 网页防篡改  0:未开通, 1:已开通
     */
    public $WebPageStat;

    /**
     * @var integer 异常登录 0:存在未处理风险,1:无风险，未配置白名单,2:无风险，已配置
     */
    public $LoginLogStat;

    /**
     * @var integer 检测--密码破解有无存在风险  0:存在未处理风险, 1：无风险，正常检测
     */
    public $DiscoverBruteAttackStat;

    /**
     * @var integer 恶意请求 0 : 0台开通专业版/旗舰版, 1: 恶意请求 存在未处理风险, 2:已有付费资产，无风险
     */
    public $MaliciousRequestStat;

    /**
     * @var integer 本地提权 0:0台开通专业版/旗舰版, 1:存在未处理风险 2:已有付费资产，无风险
     */
    public $PrivilegeStat;

    /**
     * @var integer 反弹shell 0:0台开通专业版/旗舰版, 1:存在未处理风险 2:已有付费资产，无风险
     */
    public $ReverseShellStat;

    /**
     * @var integer 专家服务 0:未开通服务, 1:已开通
     */
    public $ExpertServiceStat;

    /**
     * @var integer 日志分析 0:未开通服务, 1:已开通
     */
    public $LogAnalysisStat;

    /**
     * @var integer 安全告警 0:未开通设置（全部关闭） 1:已开通（只要开启1个就算）
     */
    public $WarningSetStat;

    /**
     * @var integer 高危命令，0：0台开通专业版/旗舰版， 1：存在未处理风险， 2：已有付费资产，无风险
     */
    public $EventBashStat;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AssetManageStat 0 ：0付费资产情况， 1：存在未安装agent情况 ，2：部分资产已是专业版/旗舰版， 3：全部资产已是专业版/旗舰版
     * @param integer $VulManageStat 0:从未检测过，或0资产付费情况, 1:存在漏洞风险, 2:无风险
     * @param integer $SecureBasicLineStat 0:从未检测过，或0资产付费情况, 1:存在基线风险,2:无风险
     * @param integer $MalwareScanStat 0:从未检测过，或0资产付费情况, 1:已检测，存在恶意文件, 2:已检测，未开启隔离防护, 3:已检测且已开启防护且无风险
     * @param integer $DefenseBruteAttackStat 密码破解是否开启防护 0:未开启防护或0付费资产情况 1:已开启防护 2:存在带处理事件
     * @param integer $FileTamperStat 核心文件监控 0:未开启防护（0付费资产情况）,1: 已开通
     * @param integer $WebPageStat 网页防篡改  0:未开通, 1:已开通
     * @param integer $LoginLogStat 异常登录 0:存在未处理风险,1:无风险，未配置白名单,2:无风险，已配置
     * @param integer $DiscoverBruteAttackStat 检测--密码破解有无存在风险  0:存在未处理风险, 1：无风险，正常检测
     * @param integer $MaliciousRequestStat 恶意请求 0 : 0台开通专业版/旗舰版, 1: 恶意请求 存在未处理风险, 2:已有付费资产，无风险
     * @param integer $PrivilegeStat 本地提权 0:0台开通专业版/旗舰版, 1:存在未处理风险 2:已有付费资产，无风险
     * @param integer $ReverseShellStat 反弹shell 0:0台开通专业版/旗舰版, 1:存在未处理风险 2:已有付费资产，无风险
     * @param integer $ExpertServiceStat 专家服务 0:未开通服务, 1:已开通
     * @param integer $LogAnalysisStat 日志分析 0:未开通服务, 1:已开通
     * @param integer $WarningSetStat 安全告警 0:未开通设置（全部关闭） 1:已开通（只要开启1个就算）
     * @param integer $EventBashStat 高危命令，0：0台开通专业版/旗舰版， 1：存在未处理风险， 2：已有付费资产，无风险
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AssetManageStat",$param) and $param["AssetManageStat"] !== null) {
            $this->AssetManageStat = $param["AssetManageStat"];
        }

        if (array_key_exists("VulManageStat",$param) and $param["VulManageStat"] !== null) {
            $this->VulManageStat = $param["VulManageStat"];
        }

        if (array_key_exists("SecureBasicLineStat",$param) and $param["SecureBasicLineStat"] !== null) {
            $this->SecureBasicLineStat = $param["SecureBasicLineStat"];
        }

        if (array_key_exists("MalwareScanStat",$param) and $param["MalwareScanStat"] !== null) {
            $this->MalwareScanStat = $param["MalwareScanStat"];
        }

        if (array_key_exists("DefenseBruteAttackStat",$param) and $param["DefenseBruteAttackStat"] !== null) {
            $this->DefenseBruteAttackStat = $param["DefenseBruteAttackStat"];
        }

        if (array_key_exists("FileTamperStat",$param) and $param["FileTamperStat"] !== null) {
            $this->FileTamperStat = $param["FileTamperStat"];
        }

        if (array_key_exists("WebPageStat",$param) and $param["WebPageStat"] !== null) {
            $this->WebPageStat = $param["WebPageStat"];
        }

        if (array_key_exists("LoginLogStat",$param) and $param["LoginLogStat"] !== null) {
            $this->LoginLogStat = $param["LoginLogStat"];
        }

        if (array_key_exists("DiscoverBruteAttackStat",$param) and $param["DiscoverBruteAttackStat"] !== null) {
            $this->DiscoverBruteAttackStat = $param["DiscoverBruteAttackStat"];
        }

        if (array_key_exists("MaliciousRequestStat",$param) and $param["MaliciousRequestStat"] !== null) {
            $this->MaliciousRequestStat = $param["MaliciousRequestStat"];
        }

        if (array_key_exists("PrivilegeStat",$param) and $param["PrivilegeStat"] !== null) {
            $this->PrivilegeStat = $param["PrivilegeStat"];
        }

        if (array_key_exists("ReverseShellStat",$param) and $param["ReverseShellStat"] !== null) {
            $this->ReverseShellStat = $param["ReverseShellStat"];
        }

        if (array_key_exists("ExpertServiceStat",$param) and $param["ExpertServiceStat"] !== null) {
            $this->ExpertServiceStat = $param["ExpertServiceStat"];
        }

        if (array_key_exists("LogAnalysisStat",$param) and $param["LogAnalysisStat"] !== null) {
            $this->LogAnalysisStat = $param["LogAnalysisStat"];
        }

        if (array_key_exists("WarningSetStat",$param) and $param["WarningSetStat"] !== null) {
            $this->WarningSetStat = $param["WarningSetStat"];
        }

        if (array_key_exists("EventBashStat",$param) and $param["EventBashStat"] !== null) {
            $this->EventBashStat = $param["EventBashStat"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
