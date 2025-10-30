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
 * 大屏入侵事件详情
 *
 * @method string getCreatedTime() 获取入侵时间
 * @method void setCreatedTime(string $CreatedTime) 设置入侵时间
 * @method integer getEventType() 获取事件类型：0：文件查杀，1：异常登录， 2：密码破解，3：恶意请求，4：高危命令，5：本地提权， 6：反弹shell
 * @method void setEventType(integer $EventType) 设置事件类型：0：文件查杀，1：异常登录， 2：密码破解，3：恶意请求，4：高危命令，5：本地提权， 6：反弹shell
 * @method string getContent() 获取事件数据的json, 每种事件不同，
【文件查杀】病毒名 VirusName、文件名 FileName、文件路径 FilePath、文件大小 FileSize、文件MD5 MD5、首次发现时间 CreateTime、最近检测时间LatestScanTime、危害描述 HarmDescribe、修复建议SuggestScheme
【异常登录】来源IP SrcIp、来源地 Location、登录用户名 UserName、登录时间 LoginTime
【密码破解】来源IP SrcIp、来源地 City,Country、协议 Protocol、登录用户名UserName 、端口 Port、尝试次数 Count、首次攻击时间 CreateTime、最近攻击时间 ModifyTime
【恶意请求】恶意请求域名 Url、进程ProcessName 、MD5 ProcessMd5、PID Pid、请求次数 AccessCount、最近请求时间 MergeTime、危害描述 HarmDescribe、修复建议SuggestScheme
【高危命令】命中规则名 RuleName、规则类别 RuleCategory、命令内容 BashCmd、数据来源 DetectBy、登录用户 User、PID Pid、发生时间 CreateTime 、危害描述 HarmDescribe、修复建议SuggestScheme
【本地提权】提权用户 UserName、父进程 ParentProcName 、父进程所属用户 ParentProcGroup、发现时间 CreateTime、危害描述 HarmDescribe、修复建议SuggestScheme
【反弹shell】连接进程 ProcessName、执行命令CmdLine、父进程ParentProcName、目标主机DstIp、目标端口DstPort、发现时间 CreateTime、危害描述 HarmDescribe、修复建议SuggestScheme
 * @method void setContent(string $Content) 设置事件数据的json, 每种事件不同，
【文件查杀】病毒名 VirusName、文件名 FileName、文件路径 FilePath、文件大小 FileSize、文件MD5 MD5、首次发现时间 CreateTime、最近检测时间LatestScanTime、危害描述 HarmDescribe、修复建议SuggestScheme
【异常登录】来源IP SrcIp、来源地 Location、登录用户名 UserName、登录时间 LoginTime
【密码破解】来源IP SrcIp、来源地 City,Country、协议 Protocol、登录用户名UserName 、端口 Port、尝试次数 Count、首次攻击时间 CreateTime、最近攻击时间 ModifyTime
【恶意请求】恶意请求域名 Url、进程ProcessName 、MD5 ProcessMd5、PID Pid、请求次数 AccessCount、最近请求时间 MergeTime、危害描述 HarmDescribe、修复建议SuggestScheme
【高危命令】命中规则名 RuleName、规则类别 RuleCategory、命令内容 BashCmd、数据来源 DetectBy、登录用户 User、PID Pid、发生时间 CreateTime 、危害描述 HarmDescribe、修复建议SuggestScheme
【本地提权】提权用户 UserName、父进程 ParentProcName 、父进程所属用户 ParentProcGroup、发现时间 CreateTime、危害描述 HarmDescribe、修复建议SuggestScheme
【反弹shell】连接进程 ProcessName、执行命令CmdLine、父进程ParentProcName、目标主机DstIp、目标端口DstPort、发现时间 CreateTime、危害描述 HarmDescribe、修复建议SuggestScheme
 * @method integer getLevel() 获取事件统一等级 0：提示，1：低危,  2：中危,  3：高危,  4：严重
 * @method void setLevel(integer $Level) 设置事件统一等级 0：提示，1：低危,  2：中危,  3：高危,  4：严重
 * @method string getLevelZh() 获取等级中文展示
 * @method void setLevelZh(string $LevelZh) 设置等级中文展示
 * @method integer getId() 获取事件id
 * @method void setId(integer $Id) 设置事件id
 * @method string getUuid() 获取主机uuid
 * @method void setUuid(string $Uuid) 设置主机uuid
 */
class ScreenInvasion extends AbstractModel
{
    /**
     * @var string 入侵时间
     */
    public $CreatedTime;

    /**
     * @var integer 事件类型：0：文件查杀，1：异常登录， 2：密码破解，3：恶意请求，4：高危命令，5：本地提权， 6：反弹shell
     */
    public $EventType;

    /**
     * @var string 事件数据的json, 每种事件不同，
【文件查杀】病毒名 VirusName、文件名 FileName、文件路径 FilePath、文件大小 FileSize、文件MD5 MD5、首次发现时间 CreateTime、最近检测时间LatestScanTime、危害描述 HarmDescribe、修复建议SuggestScheme
【异常登录】来源IP SrcIp、来源地 Location、登录用户名 UserName、登录时间 LoginTime
【密码破解】来源IP SrcIp、来源地 City,Country、协议 Protocol、登录用户名UserName 、端口 Port、尝试次数 Count、首次攻击时间 CreateTime、最近攻击时间 ModifyTime
【恶意请求】恶意请求域名 Url、进程ProcessName 、MD5 ProcessMd5、PID Pid、请求次数 AccessCount、最近请求时间 MergeTime、危害描述 HarmDescribe、修复建议SuggestScheme
【高危命令】命中规则名 RuleName、规则类别 RuleCategory、命令内容 BashCmd、数据来源 DetectBy、登录用户 User、PID Pid、发生时间 CreateTime 、危害描述 HarmDescribe、修复建议SuggestScheme
【本地提权】提权用户 UserName、父进程 ParentProcName 、父进程所属用户 ParentProcGroup、发现时间 CreateTime、危害描述 HarmDescribe、修复建议SuggestScheme
【反弹shell】连接进程 ProcessName、执行命令CmdLine、父进程ParentProcName、目标主机DstIp、目标端口DstPort、发现时间 CreateTime、危害描述 HarmDescribe、修复建议SuggestScheme
     */
    public $Content;

    /**
     * @var integer 事件统一等级 0：提示，1：低危,  2：中危,  3：高危,  4：严重
     */
    public $Level;

    /**
     * @var string 等级中文展示
     */
    public $LevelZh;

    /**
     * @var integer 事件id
     */
    public $Id;

    /**
     * @var string 主机uuid
     */
    public $Uuid;

    /**
     * @param string $CreatedTime 入侵时间
     * @param integer $EventType 事件类型：0：文件查杀，1：异常登录， 2：密码破解，3：恶意请求，4：高危命令，5：本地提权， 6：反弹shell
     * @param string $Content 事件数据的json, 每种事件不同，
【文件查杀】病毒名 VirusName、文件名 FileName、文件路径 FilePath、文件大小 FileSize、文件MD5 MD5、首次发现时间 CreateTime、最近检测时间LatestScanTime、危害描述 HarmDescribe、修复建议SuggestScheme
【异常登录】来源IP SrcIp、来源地 Location、登录用户名 UserName、登录时间 LoginTime
【密码破解】来源IP SrcIp、来源地 City,Country、协议 Protocol、登录用户名UserName 、端口 Port、尝试次数 Count、首次攻击时间 CreateTime、最近攻击时间 ModifyTime
【恶意请求】恶意请求域名 Url、进程ProcessName 、MD5 ProcessMd5、PID Pid、请求次数 AccessCount、最近请求时间 MergeTime、危害描述 HarmDescribe、修复建议SuggestScheme
【高危命令】命中规则名 RuleName、规则类别 RuleCategory、命令内容 BashCmd、数据来源 DetectBy、登录用户 User、PID Pid、发生时间 CreateTime 、危害描述 HarmDescribe、修复建议SuggestScheme
【本地提权】提权用户 UserName、父进程 ParentProcName 、父进程所属用户 ParentProcGroup、发现时间 CreateTime、危害描述 HarmDescribe、修复建议SuggestScheme
【反弹shell】连接进程 ProcessName、执行命令CmdLine、父进程ParentProcName、目标主机DstIp、目标端口DstPort、发现时间 CreateTime、危害描述 HarmDescribe、修复建议SuggestScheme
     * @param integer $Level 事件统一等级 0：提示，1：低危,  2：中危,  3：高危,  4：严重
     * @param string $LevelZh 等级中文展示
     * @param integer $Id 事件id
     * @param string $Uuid 主机uuid
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
        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("LevelZh",$param) and $param["LevelZh"] !== null) {
            $this->LevelZh = $param["LevelZh"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }
    }
}
