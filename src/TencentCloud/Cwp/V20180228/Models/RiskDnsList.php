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
 * 恶意请求列表
 *
 * @method string getUrl() 获取对外访问域名
 * @method void setUrl(string $Url) 设置对外访问域名
 * @method integer getAccessCount() 获取访问次数
 * @method void setAccessCount(integer $AccessCount) 设置访问次数
 * @method string getProcessName() 获取进程名
 * @method void setProcessName(string $ProcessName) 设置进程名
 * @method string getProcessMd5() 获取进程MD5
 * @method void setProcessMd5(string $ProcessMd5) 设置进程MD5
 * @method integer getGlobalRuleId() 获取是否为全局规则，0否，1是
 * @method void setGlobalRuleId(integer $GlobalRuleId) 设置是否为全局规则，0否，1是
 * @method integer getUserRuleId() 获取用户规则id
 * @method void setUserRuleId(integer $UserRuleId) 设置用户规则id
 * @method integer getStatus() 获取状态；0-待处理，2-已加白，3-非信任状态，4-已处理，5-已忽略
 * @method void setStatus(integer $Status) 设置状态；0-待处理，2-已加白，3-非信任状态，4-已处理，5-已忽略
 * @method string getCreateTime() 获取首次访问时间
 * @method void setCreateTime(string $CreateTime) 设置首次访问时间
 * @method string getMergeTime() 获取最近访问时间
 * @method void setMergeTime(string $MergeTime) 设置最近访问时间
 * @method string getQuuid() 获取唯一 Quuid
 * @method void setQuuid(string $Quuid) 设置唯一 Quuid
 * @method string getHostIp() 获取主机ip
 * @method void setHostIp(string $HostIp) 设置主机ip
 * @method string getAlias() 获取别名
 * @method void setAlias(string $Alias) 设置别名
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method integer getId() 获取唯一ID
 * @method void setId(integer $Id) 设置唯一ID
 * @method string getReference() 获取参考
 * @method void setReference(string $Reference) 设置参考
 * @method string getCmdLine() 获取命令行
 * @method void setCmdLine(string $CmdLine) 设置命令行
 * @method integer getPid() 获取进程号
 * @method void setPid(integer $Pid) 设置进程号
 * @method string getUuid() 获取唯一UUID
 * @method void setUuid(string $Uuid) 设置唯一UUID
 * @method string getSuggestScheme() 获取建议方案
 * @method void setSuggestScheme(string $SuggestScheme) 设置建议方案
 * @method array getTags() 获取标签特性
 * @method void setTags(array $Tags) 设置标签特性
 * @method string getMachineWanIp() 获取外网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineWanIp(string $MachineWanIp) 设置外网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMachineStatus() 获取主机在线状态[OFFLINE:离线|ONLINE:在线|UNKNOWN:未知]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineStatus(string $MachineStatus) 设置主机在线状态[OFFLINE:离线|ONLINE:在线|UNKNOWN:未知]
注意：此字段可能返回 null，表示取不到有效值。
 */
class RiskDnsList extends AbstractModel
{
    /**
     * @var string 对外访问域名
     */
    public $Url;

    /**
     * @var integer 访问次数
     */
    public $AccessCount;

    /**
     * @var string 进程名
     */
    public $ProcessName;

    /**
     * @var string 进程MD5
     */
    public $ProcessMd5;

    /**
     * @var integer 是否为全局规则，0否，1是
     */
    public $GlobalRuleId;

    /**
     * @var integer 用户规则id
     */
    public $UserRuleId;

    /**
     * @var integer 状态；0-待处理，2-已加白，3-非信任状态，4-已处理，5-已忽略
     */
    public $Status;

    /**
     * @var string 首次访问时间
     */
    public $CreateTime;

    /**
     * @var string 最近访问时间
     */
    public $MergeTime;

    /**
     * @var string 唯一 Quuid
     */
    public $Quuid;

    /**
     * @var string 主机ip
     */
    public $HostIp;

    /**
     * @var string 别名
     */
    public $Alias;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var integer 唯一ID
     */
    public $Id;

    /**
     * @var string 参考
     */
    public $Reference;

    /**
     * @var string 命令行
     */
    public $CmdLine;

    /**
     * @var integer 进程号
     */
    public $Pid;

    /**
     * @var string 唯一UUID
     */
    public $Uuid;

    /**
     * @var string 建议方案
     */
    public $SuggestScheme;

    /**
     * @var array 标签特性
     */
    public $Tags;

    /**
     * @var string 外网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineWanIp;

    /**
     * @var string 主机在线状态[OFFLINE:离线|ONLINE:在线|UNKNOWN:未知]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineStatus;

    /**
     * @param string $Url 对外访问域名
     * @param integer $AccessCount 访问次数
     * @param string $ProcessName 进程名
     * @param string $ProcessMd5 进程MD5
     * @param integer $GlobalRuleId 是否为全局规则，0否，1是
     * @param integer $UserRuleId 用户规则id
     * @param integer $Status 状态；0-待处理，2-已加白，3-非信任状态，4-已处理，5-已忽略
     * @param string $CreateTime 首次访问时间
     * @param string $MergeTime 最近访问时间
     * @param string $Quuid 唯一 Quuid
     * @param string $HostIp 主机ip
     * @param string $Alias 别名
     * @param string $Description 描述
     * @param integer $Id 唯一ID
     * @param string $Reference 参考
     * @param string $CmdLine 命令行
     * @param integer $Pid 进程号
     * @param string $Uuid 唯一UUID
     * @param string $SuggestScheme 建议方案
     * @param array $Tags 标签特性
     * @param string $MachineWanIp 外网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MachineStatus 主机在线状态[OFFLINE:离线|ONLINE:在线|UNKNOWN:未知]
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("AccessCount",$param) and $param["AccessCount"] !== null) {
            $this->AccessCount = $param["AccessCount"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("ProcessMd5",$param) and $param["ProcessMd5"] !== null) {
            $this->ProcessMd5 = $param["ProcessMd5"];
        }

        if (array_key_exists("GlobalRuleId",$param) and $param["GlobalRuleId"] !== null) {
            $this->GlobalRuleId = $param["GlobalRuleId"];
        }

        if (array_key_exists("UserRuleId",$param) and $param["UserRuleId"] !== null) {
            $this->UserRuleId = $param["UserRuleId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MergeTime",$param) and $param["MergeTime"] !== null) {
            $this->MergeTime = $param["MergeTime"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Reference",$param) and $param["Reference"] !== null) {
            $this->Reference = $param["Reference"];
        }

        if (array_key_exists("CmdLine",$param) and $param["CmdLine"] !== null) {
            $this->CmdLine = $param["CmdLine"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("SuggestScheme",$param) and $param["SuggestScheme"] !== null) {
            $this->SuggestScheme = $param["SuggestScheme"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("MachineStatus",$param) and $param["MachineStatus"] !== null) {
            $this->MachineStatus = $param["MachineStatus"];
        }
    }
}
