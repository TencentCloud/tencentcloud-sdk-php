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
 * ModifyRiskEventsStatus请求参数结构体
 *
 * @method integer getOperate() 获取操作-0:标记已处理,1:忽略,2:删除记录,3:木马隔离,4:木马恢复隔离,5:木马信任,6:木马取消信任,7:查杀异常进程,8:加入白名单
 * @method void setOperate(integer $Operate) 设置操作-0:标记已处理,1:忽略,2:删除记录,3:木马隔离,4:木马恢复隔离,5:木马信任,6:木马取消信任,7:查杀异常进程,8:加入白名单
 * @method string getRiskType() 获取操作事件类型，文件查杀：MALWARE，异常登录：HOST_LOGIN，密码破解：BRUTE_ATTACK，恶意请求：MALICIOUS_REQUEST，高危命令：BASH_EVENT，本地提权：PRIVILEGE_EVENT，反弹shell：REVERSE_SHELL. 异常进程:PROCESS
 * @method void setRiskType(string $RiskType) 设置操作事件类型，文件查杀：MALWARE，异常登录：HOST_LOGIN，密码破解：BRUTE_ATTACK，恶意请求：MALICIOUS_REQUEST，高危命令：BASH_EVENT，本地提权：PRIVILEGE_EVENT，反弹shell：REVERSE_SHELL. 异常进程:PROCESS
 * @method array getIds() 获取需要修改的事件id 数组，支持批量
 * @method void setIds(array $Ids) 设置需要修改的事件id 数组，支持批量
 * @method boolean getUpdateAll() 获取是否更新全部，即是否对所有的事件进行操作，当ids 不为空时，此参数无效
 * @method void setUpdateAll(boolean $UpdateAll) 设置是否更新全部，即是否对所有的事件进行操作，当ids 不为空时，此参数无效
 * @method array getExcludeId() 获取排除的事件id,当操作全部事件时，需要排除这次id
 * @method void setExcludeId(array $ExcludeId) 设置排除的事件id,当操作全部事件时，需要排除这次id
 * @method boolean getKillProcess() 获取当Operate 是木马隔离时，表示是否要杀进程，其他操作无效
 * @method void setKillProcess(boolean $KillProcess) 设置当Operate 是木马隔离时，表示是否要杀进程，其他操作无效
 * @method array getIp() 获取当RiskType 为异地登录且ids为空时，可以修改所有来源ip的事件的状态
 * @method void setIp(array $Ip) 设置当RiskType 为异地登录且ids为空时，可以修改所有来源ip的事件的状态
 * @method array getFilters() 获取过滤条件。RiskType为 MALWARE时
1、当RiskType为 MALWARE时：
<li>IpOrAlias - String - 是否必填：否 - 主机ip或别名筛选</li>
<li>FilePath - String - 是否必填：否 - 路径筛选</li>
<li>VirusName - String - 是否必填：否 - 描述筛选</li>
<li>CreateBeginTime - String - 是否必填：否 - 创建时间筛选-开始时间</li>
<li>CreateEndTime - String - 是否必填：否 - 创建时间筛选-结束时间</li>
<li>Status - String - 是否必填：否 - 状态筛选 4待处理,5信任,6已隔离,10隔离中,11恢复隔离中</li>
RiskType 为PROCESS时:
过滤条件。
<li>IpOrName - String - 是否必填：否 - 主机IP或主机名</li>
<li>VirusName - String - 是否必填：否 - 病毒名</li>
<li>BeginTime - String - 是否必填：否 - 进程启动时间-开始</li>
<li>EndTime - String - 是否必填：否 - 进程启动时间-结束</li>
<li>Status - String - 是否必填：否 - 状态筛选 0待处理；1查杀中;2已查杀3已退出;4已信任</li>
 * @method void setFilters(array $Filters) 设置过滤条件。RiskType为 MALWARE时
1、当RiskType为 MALWARE时：
<li>IpOrAlias - String - 是否必填：否 - 主机ip或别名筛选</li>
<li>FilePath - String - 是否必填：否 - 路径筛选</li>
<li>VirusName - String - 是否必填：否 - 描述筛选</li>
<li>CreateBeginTime - String - 是否必填：否 - 创建时间筛选-开始时间</li>
<li>CreateEndTime - String - 是否必填：否 - 创建时间筛选-结束时间</li>
<li>Status - String - 是否必填：否 - 状态筛选 4待处理,5信任,6已隔离,10隔离中,11恢复隔离中</li>
RiskType 为PROCESS时:
过滤条件。
<li>IpOrName - String - 是否必填：否 - 主机IP或主机名</li>
<li>VirusName - String - 是否必填：否 - 病毒名</li>
<li>BeginTime - String - 是否必填：否 - 进程启动时间-开始</li>
<li>EndTime - String - 是否必填：否 - 进程启动时间-结束</li>
<li>Status - String - 是否必填：否 - 状态筛选 0待处理；1查杀中;2已查杀3已退出;4已信任</li>
 * @method boolean getDoClean() 获取当Operate 是木马隔离时
<li> 本操作会修复被篡改的系统命令，计划任务等系统文件，操作中请确保yum/apt 可用。</li>
 * @method void setDoClean(boolean $DoClean) 设置当Operate 是木马隔离时
<li> 本操作会修复被篡改的系统命令，计划任务等系统文件，操作中请确保yum/apt 可用。</li>
 */
class ModifyRiskEventsStatusRequest extends AbstractModel
{
    /**
     * @var integer 操作-0:标记已处理,1:忽略,2:删除记录,3:木马隔离,4:木马恢复隔离,5:木马信任,6:木马取消信任,7:查杀异常进程,8:加入白名单
     */
    public $Operate;

    /**
     * @var string 操作事件类型，文件查杀：MALWARE，异常登录：HOST_LOGIN，密码破解：BRUTE_ATTACK，恶意请求：MALICIOUS_REQUEST，高危命令：BASH_EVENT，本地提权：PRIVILEGE_EVENT，反弹shell：REVERSE_SHELL. 异常进程:PROCESS
     */
    public $RiskType;

    /**
     * @var array 需要修改的事件id 数组，支持批量
     */
    public $Ids;

    /**
     * @var boolean 是否更新全部，即是否对所有的事件进行操作，当ids 不为空时，此参数无效
     */
    public $UpdateAll;

    /**
     * @var array 排除的事件id,当操作全部事件时，需要排除这次id
     */
    public $ExcludeId;

    /**
     * @var boolean 当Operate 是木马隔离时，表示是否要杀进程，其他操作无效
     */
    public $KillProcess;

    /**
     * @var array 当RiskType 为异地登录且ids为空时，可以修改所有来源ip的事件的状态
     */
    public $Ip;

    /**
     * @var array 过滤条件。RiskType为 MALWARE时
1、当RiskType为 MALWARE时：
<li>IpOrAlias - String - 是否必填：否 - 主机ip或别名筛选</li>
<li>FilePath - String - 是否必填：否 - 路径筛选</li>
<li>VirusName - String - 是否必填：否 - 描述筛选</li>
<li>CreateBeginTime - String - 是否必填：否 - 创建时间筛选-开始时间</li>
<li>CreateEndTime - String - 是否必填：否 - 创建时间筛选-结束时间</li>
<li>Status - String - 是否必填：否 - 状态筛选 4待处理,5信任,6已隔离,10隔离中,11恢复隔离中</li>
RiskType 为PROCESS时:
过滤条件。
<li>IpOrName - String - 是否必填：否 - 主机IP或主机名</li>
<li>VirusName - String - 是否必填：否 - 病毒名</li>
<li>BeginTime - String - 是否必填：否 - 进程启动时间-开始</li>
<li>EndTime - String - 是否必填：否 - 进程启动时间-结束</li>
<li>Status - String - 是否必填：否 - 状态筛选 0待处理；1查杀中;2已查杀3已退出;4已信任</li>
     */
    public $Filters;

    /**
     * @var boolean 当Operate 是木马隔离时
<li> 本操作会修复被篡改的系统命令，计划任务等系统文件，操作中请确保yum/apt 可用。</li>
     */
    public $DoClean;

    /**
     * @param integer $Operate 操作-0:标记已处理,1:忽略,2:删除记录,3:木马隔离,4:木马恢复隔离,5:木马信任,6:木马取消信任,7:查杀异常进程,8:加入白名单
     * @param string $RiskType 操作事件类型，文件查杀：MALWARE，异常登录：HOST_LOGIN，密码破解：BRUTE_ATTACK，恶意请求：MALICIOUS_REQUEST，高危命令：BASH_EVENT，本地提权：PRIVILEGE_EVENT，反弹shell：REVERSE_SHELL. 异常进程:PROCESS
     * @param array $Ids 需要修改的事件id 数组，支持批量
     * @param boolean $UpdateAll 是否更新全部，即是否对所有的事件进行操作，当ids 不为空时，此参数无效
     * @param array $ExcludeId 排除的事件id,当操作全部事件时，需要排除这次id
     * @param boolean $KillProcess 当Operate 是木马隔离时，表示是否要杀进程，其他操作无效
     * @param array $Ip 当RiskType 为异地登录且ids为空时，可以修改所有来源ip的事件的状态
     * @param array $Filters 过滤条件。RiskType为 MALWARE时
1、当RiskType为 MALWARE时：
<li>IpOrAlias - String - 是否必填：否 - 主机ip或别名筛选</li>
<li>FilePath - String - 是否必填：否 - 路径筛选</li>
<li>VirusName - String - 是否必填：否 - 描述筛选</li>
<li>CreateBeginTime - String - 是否必填：否 - 创建时间筛选-开始时间</li>
<li>CreateEndTime - String - 是否必填：否 - 创建时间筛选-结束时间</li>
<li>Status - String - 是否必填：否 - 状态筛选 4待处理,5信任,6已隔离,10隔离中,11恢复隔离中</li>
RiskType 为PROCESS时:
过滤条件。
<li>IpOrName - String - 是否必填：否 - 主机IP或主机名</li>
<li>VirusName - String - 是否必填：否 - 病毒名</li>
<li>BeginTime - String - 是否必填：否 - 进程启动时间-开始</li>
<li>EndTime - String - 是否必填：否 - 进程启动时间-结束</li>
<li>Status - String - 是否必填：否 - 状态筛选 0待处理；1查杀中;2已查杀3已退出;4已信任</li>
     * @param boolean $DoClean 当Operate 是木马隔离时
<li> 本操作会修复被篡改的系统命令，计划任务等系统文件，操作中请确保yum/apt 可用。</li>
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
        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = $param["Operate"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("UpdateAll",$param) and $param["UpdateAll"] !== null) {
            $this->UpdateAll = $param["UpdateAll"];
        }

        if (array_key_exists("ExcludeId",$param) and $param["ExcludeId"] !== null) {
            $this->ExcludeId = $param["ExcludeId"];
        }

        if (array_key_exists("KillProcess",$param) and $param["KillProcess"] !== null) {
            $this->KillProcess = $param["KillProcess"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("DoClean",$param) and $param["DoClean"] !== null) {
            $this->DoClean = $param["DoClean"];
        }
    }
}
