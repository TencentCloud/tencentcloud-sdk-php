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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DLP 告警数据结构
 *
 * @method integer getID() 获取<p>告警记录 ID</p>
 * @method void setID(integer $ID) 设置<p>告警记录 ID</p>
 * @method string getBelongAssetType() 获取<p>归属资产类型<br>枚举值：<br>HOST：主机<br>CONTAINER：容器</p>
 * @method void setBelongAssetType(string $BelongAssetType) 设置<p>归属资产类型<br>枚举值：<br>HOST：主机<br>CONTAINER：容器</p>
 * @method integer getRuleID() 获取<p>命中的用户规则 ID</p>
 * @method void setRuleID(integer $RuleID) 设置<p>命中的用户规则 ID</p>
 * @method string getRuleName() 获取<p>命中的用户规则名称</p>
 * @method void setRuleName(string $RuleName) 设置<p>命中的用户规则名称</p>
 * @method string getUUID() 获取<p>Agent UUID</p>
 * @method void setUUID(string $UUID) 设置<p>Agent UUID</p>
 * @method string getInstanceId() 获取<p>实例 ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getClusterId() 获取<p>集群 ID<br>入参限制：仅容器告警返回</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群 ID<br>入参限制：仅容器告警返回</p>
 * @method string getContainerId() 获取<p>容器 ID<br>入参限制：仅容器告警返回</p>
 * @method void setContainerId(string $ContainerId) 设置<p>容器 ID<br>入参限制：仅容器告警返回</p>
 * @method string getContainerName() 获取<p>容器名称<br>入参限制：仅容器告警返回</p>
 * @method void setContainerName(string $ContainerName) 设置<p>容器名称<br>入参限制：仅容器告警返回</p>
 * @method string getExe() 获取<p>进程 exe 路径</p>
 * @method void setExe(string $Exe) 设置<p>进程 exe 路径</p>
 * @method string getParam() 获取<p>进程命令行参数</p>
 * @method void setParam(string $Param) 设置<p>进程命令行参数</p>
 * @method string getTarget() 获取<p>目标地址</p>
 * @method void setTarget(string $Target) 设置<p>目标地址</p>
 * @method string getMatchScope() 获取<p>匹配范围<br>枚举值：<br>req_head：请求头<br>req_body：请求体<br>rsp_head：响应头<br>rsp_body：响应体</p>
 * @method void setMatchScope(string $MatchScope) 设置<p>匹配范围<br>枚举值：<br>req_head：请求头<br>req_body：请求体<br>rsp_head：响应头<br>rsp_body：响应体</p>
 * @method string getMatchContent() 获取<p>agent 上报的 match_content 完整内容<br>入参限制：最长 256 字节；前一半字符已脱敏打码</p>
 * @method void setMatchContent(string $MatchContent) 设置<p>agent 上报的 match_content 完整内容<br>入参限制：最长 256 字节；前一半字符已脱敏打码</p>
 * @method string getMatchContentSample() 获取<p>真正触发规则的匹配片段<br>入参限制：前一半字符已脱敏打码；规则缺失/未命中时退化为与 MatchContent 相同</p>
 * @method void setMatchContentSample(string $MatchContentSample) 设置<p>真正触发规则的匹配片段<br>入参限制：前一半字符已脱敏打码；规则缺失/未命中时退化为与 MatchContent 相同</p>
 * @method string getUpProto() 获取<p>上传协议</p>
 * @method void setUpProto(string $UpProto) 设置<p>上传协议</p>
 * @method string getFileName() 获取<p>文件名称</p>
 * @method void setFileName(string $FileName) 设置<p>文件名称</p>
 * @method string getFileType() 获取<p>文件类型</p>
 * @method void setFileType(string $FileType) 设置<p>文件类型</p>
 * @method integer getFileSize() 获取<p>文件大小</p><p>单位：Byte</p>
 * @method void setFileSize(integer $FileSize) 设置<p>文件大小</p><p>单位：Byte</p>
 * @method string getLevel() 获取<p>告警级别<br>枚举值：<br>INFO：提示<br>LOW：低危<br>MEDIUM：中危<br>HIGH：高危<br>CRITICAL：严重</p>
 * @method void setLevel(string $Level) 设置<p>告警级别<br>枚举值：<br>INFO：提示<br>LOW：低危<br>MEDIUM：中危<br>HIGH：高危<br>CRITICAL：严重</p>
 * @method string getStatus() 获取<p>处理状态<br>枚举值：<br>PENDING：未处理<br>HANDLED：已处理<br>IGNORE：已忽略<br>PASS：已加白<br>BLOCK：已拦截</p>
 * @method void setStatus(string $Status) 设置<p>处理状态<br>枚举值：<br>PENDING：未处理<br>HANDLED：已处理<br>IGNORE：已忽略<br>PASS：已加白<br>BLOCK：已拦截</p>
 * @method integer getCount() 获取<p>告警次数</p>
 * @method void setCount(integer $Count) 设置<p>告警次数</p>
 * @method string getFirstAlertTime() 获取<p>首次告警时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
 * @method void setFirstAlertTime(string $FirstAlertTime) 设置<p>首次告警时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
 * @method string getLastAlertTime() 获取<p>最后告警时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
 * @method void setLastAlertTime(string $LastAlertTime) 设置<p>最后告警时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
 * @method string getRuleAction() 获取<p>命中动作<br>枚举值：<br>PASS：加白<br>BLOCK：拦截并告警<br>MONITOR：告警</p>
 * @method void setRuleAction(string $RuleAction) 设置<p>命中动作<br>枚举值：<br>PASS：加白<br>BLOCK：拦截并告警<br>MONITOR：告警</p>
 */
class TrafficSandboxDLPAlertInfo extends AbstractModel
{
    /**
     * @var integer <p>告警记录 ID</p>
     */
    public $ID;

    /**
     * @var string <p>归属资产类型<br>枚举值：<br>HOST：主机<br>CONTAINER：容器</p>
     */
    public $BelongAssetType;

    /**
     * @var integer <p>命中的用户规则 ID</p>
     */
    public $RuleID;

    /**
     * @var string <p>命中的用户规则名称</p>
     */
    public $RuleName;

    /**
     * @var string <p>Agent UUID</p>
     */
    public $UUID;

    /**
     * @var string <p>实例 ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>集群 ID<br>入参限制：仅容器告警返回</p>
     */
    public $ClusterId;

    /**
     * @var string <p>容器 ID<br>入参限制：仅容器告警返回</p>
     */
    public $ContainerId;

    /**
     * @var string <p>容器名称<br>入参限制：仅容器告警返回</p>
     */
    public $ContainerName;

    /**
     * @var string <p>进程 exe 路径</p>
     */
    public $Exe;

    /**
     * @var string <p>进程命令行参数</p>
     */
    public $Param;

    /**
     * @var string <p>目标地址</p>
     */
    public $Target;

    /**
     * @var string <p>匹配范围<br>枚举值：<br>req_head：请求头<br>req_body：请求体<br>rsp_head：响应头<br>rsp_body：响应体</p>
     */
    public $MatchScope;

    /**
     * @var string <p>agent 上报的 match_content 完整内容<br>入参限制：最长 256 字节；前一半字符已脱敏打码</p>
     */
    public $MatchContent;

    /**
     * @var string <p>真正触发规则的匹配片段<br>入参限制：前一半字符已脱敏打码；规则缺失/未命中时退化为与 MatchContent 相同</p>
     */
    public $MatchContentSample;

    /**
     * @var string <p>上传协议</p>
     */
    public $UpProto;

    /**
     * @var string <p>文件名称</p>
     */
    public $FileName;

    /**
     * @var string <p>文件类型</p>
     */
    public $FileType;

    /**
     * @var integer <p>文件大小</p><p>单位：Byte</p>
     */
    public $FileSize;

    /**
     * @var string <p>告警级别<br>枚举值：<br>INFO：提示<br>LOW：低危<br>MEDIUM：中危<br>HIGH：高危<br>CRITICAL：严重</p>
     */
    public $Level;

    /**
     * @var string <p>处理状态<br>枚举值：<br>PENDING：未处理<br>HANDLED：已处理<br>IGNORE：已忽略<br>PASS：已加白<br>BLOCK：已拦截</p>
     */
    public $Status;

    /**
     * @var integer <p>告警次数</p>
     */
    public $Count;

    /**
     * @var string <p>首次告警时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
     */
    public $FirstAlertTime;

    /**
     * @var string <p>最后告警时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
     */
    public $LastAlertTime;

    /**
     * @var string <p>命中动作<br>枚举值：<br>PASS：加白<br>BLOCK：拦截并告警<br>MONITOR：告警</p>
     */
    public $RuleAction;

    /**
     * @param integer $ID <p>告警记录 ID</p>
     * @param string $BelongAssetType <p>归属资产类型<br>枚举值：<br>HOST：主机<br>CONTAINER：容器</p>
     * @param integer $RuleID <p>命中的用户规则 ID</p>
     * @param string $RuleName <p>命中的用户规则名称</p>
     * @param string $UUID <p>Agent UUID</p>
     * @param string $InstanceId <p>实例 ID</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param string $ClusterId <p>集群 ID<br>入参限制：仅容器告警返回</p>
     * @param string $ContainerId <p>容器 ID<br>入参限制：仅容器告警返回</p>
     * @param string $ContainerName <p>容器名称<br>入参限制：仅容器告警返回</p>
     * @param string $Exe <p>进程 exe 路径</p>
     * @param string $Param <p>进程命令行参数</p>
     * @param string $Target <p>目标地址</p>
     * @param string $MatchScope <p>匹配范围<br>枚举值：<br>req_head：请求头<br>req_body：请求体<br>rsp_head：响应头<br>rsp_body：响应体</p>
     * @param string $MatchContent <p>agent 上报的 match_content 完整内容<br>入参限制：最长 256 字节；前一半字符已脱敏打码</p>
     * @param string $MatchContentSample <p>真正触发规则的匹配片段<br>入参限制：前一半字符已脱敏打码；规则缺失/未命中时退化为与 MatchContent 相同</p>
     * @param string $UpProto <p>上传协议</p>
     * @param string $FileName <p>文件名称</p>
     * @param string $FileType <p>文件类型</p>
     * @param integer $FileSize <p>文件大小</p><p>单位：Byte</p>
     * @param string $Level <p>告警级别<br>枚举值：<br>INFO：提示<br>LOW：低危<br>MEDIUM：中危<br>HIGH：高危<br>CRITICAL：严重</p>
     * @param string $Status <p>处理状态<br>枚举值：<br>PENDING：未处理<br>HANDLED：已处理<br>IGNORE：已忽略<br>PASS：已加白<br>BLOCK：已拦截</p>
     * @param integer $Count <p>告警次数</p>
     * @param string $FirstAlertTime <p>首次告警时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
     * @param string $LastAlertTime <p>最后告警时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
     * @param string $RuleAction <p>命中动作<br>枚举值：<br>PASS：加白<br>BLOCK：拦截并告警<br>MONITOR：告警</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("BelongAssetType",$param) and $param["BelongAssetType"] !== null) {
            $this->BelongAssetType = $param["BelongAssetType"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("UUID",$param) and $param["UUID"] !== null) {
            $this->UUID = $param["UUID"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("Exe",$param) and $param["Exe"] !== null) {
            $this->Exe = $param["Exe"];
        }

        if (array_key_exists("Param",$param) and $param["Param"] !== null) {
            $this->Param = $param["Param"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("MatchScope",$param) and $param["MatchScope"] !== null) {
            $this->MatchScope = $param["MatchScope"];
        }

        if (array_key_exists("MatchContent",$param) and $param["MatchContent"] !== null) {
            $this->MatchContent = $param["MatchContent"];
        }

        if (array_key_exists("MatchContentSample",$param) and $param["MatchContentSample"] !== null) {
            $this->MatchContentSample = $param["MatchContentSample"];
        }

        if (array_key_exists("UpProto",$param) and $param["UpProto"] !== null) {
            $this->UpProto = $param["UpProto"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("FirstAlertTime",$param) and $param["FirstAlertTime"] !== null) {
            $this->FirstAlertTime = $param["FirstAlertTime"];
        }

        if (array_key_exists("LastAlertTime",$param) and $param["LastAlertTime"] !== null) {
            $this->LastAlertTime = $param["LastAlertTime"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }
    }
}
