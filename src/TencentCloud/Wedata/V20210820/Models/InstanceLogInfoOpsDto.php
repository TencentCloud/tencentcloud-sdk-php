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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例日志信息详情
 *
 * @method string getLogInfo() 获取<p>实例运行日志</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogInfo(string $LogInfo) 设置<p>实例运行日志</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getYarnLogInfo() 获取<p>实例运行提交的yarn日志地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setYarnLogInfo(array $YarnLogInfo) 设置<p>实例运行提交的yarn日志地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataLogInfo() 获取<p>实例运行产生的datax日志</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataLogInfo(string $DataLogInfo) 设置<p>实例运行产生的datax日志</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getThirdTaskRunLogInfo() 获取<p>第三方任务运行日志</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThirdTaskRunLogInfo(string $ThirdTaskRunLogInfo) 设置<p>第三方任务运行日志</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getThirdTaskLogUrlDesc() 获取<p>第三方任务日志链接描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThirdTaskLogUrlDesc(string $ThirdTaskLogUrlDesc) 设置<p>第三方任务日志链接描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLineCount() 获取<p>日志行数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLineCount(integer $LineCount) 设置<p>日志行数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtInfo() 获取<p>统一执行平台日志分页查询参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtInfo(string $ExtInfo) 设置<p>统一执行平台日志分页查询参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsEnd() 获取<p>日志分页查询，是否最后一页</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsEnd(boolean $IsEnd) 设置<p>日志分页查询，是否最后一页</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileSize() 获取<p>文件大小</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSize(string $FileSize) 设置<p>文件大小</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMatchedBrokerIp() 获取<p>日志匹配节点信息</p>
 * @method void setMatchedBrokerIp(string $MatchedBrokerIp) 设置<p>日志匹配节点信息</p>
 * @method array getExecutionExtendedProps() 获取<p>执行平台通用协议</p>
 * @method void setExecutionExtendedProps(array $ExecutionExtendedProps) 设置<p>执行平台通用协议</p>
 * @method LogDiagnosisRules getLogDiagnosisRules() 获取<p>日志诊断规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogDiagnosisRules(LogDiagnosisRules $LogDiagnosisRules) 设置<p>日志诊断规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceLogInfoOpsDto extends AbstractModel
{
    /**
     * @var string <p>实例运行日志</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogInfo;

    /**
     * @var array <p>实例运行提交的yarn日志地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $YarnLogInfo;

    /**
     * @var string <p>实例运行产生的datax日志</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataLogInfo;

    /**
     * @var string <p>第三方任务运行日志</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThirdTaskRunLogInfo;

    /**
     * @var string <p>第三方任务日志链接描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThirdTaskLogUrlDesc;

    /**
     * @var integer <p>日志行数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LineCount;

    /**
     * @var string <p>统一执行平台日志分页查询参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtInfo;

    /**
     * @var boolean <p>日志分页查询，是否最后一页</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsEnd;

    /**
     * @var string <p>文件大小</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSize;

    /**
     * @var string <p>日志匹配节点信息</p>
     */
    public $MatchedBrokerIp;

    /**
     * @var array <p>执行平台通用协议</p>
     */
    public $ExecutionExtendedProps;

    /**
     * @var LogDiagnosisRules <p>日志诊断规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $LogDiagnosisRules;

    /**
     * @param string $LogInfo <p>实例运行日志</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $YarnLogInfo <p>实例运行提交的yarn日志地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataLogInfo <p>实例运行产生的datax日志</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ThirdTaskRunLogInfo <p>第三方任务运行日志</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ThirdTaskLogUrlDesc <p>第三方任务日志链接描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LineCount <p>日志行数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtInfo <p>统一执行平台日志分页查询参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsEnd <p>日志分页查询，是否最后一页</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileSize <p>文件大小</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MatchedBrokerIp <p>日志匹配节点信息</p>
     * @param array $ExecutionExtendedProps <p>执行平台通用协议</p>
     * @param LogDiagnosisRules $LogDiagnosisRules <p>日志诊断规则</p>
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
        if (array_key_exists("LogInfo",$param) and $param["LogInfo"] !== null) {
            $this->LogInfo = $param["LogInfo"];
        }

        if (array_key_exists("YarnLogInfo",$param) and $param["YarnLogInfo"] !== null) {
            $this->YarnLogInfo = $param["YarnLogInfo"];
        }

        if (array_key_exists("DataLogInfo",$param) and $param["DataLogInfo"] !== null) {
            $this->DataLogInfo = $param["DataLogInfo"];
        }

        if (array_key_exists("ThirdTaskRunLogInfo",$param) and $param["ThirdTaskRunLogInfo"] !== null) {
            $this->ThirdTaskRunLogInfo = $param["ThirdTaskRunLogInfo"];
        }

        if (array_key_exists("ThirdTaskLogUrlDesc",$param) and $param["ThirdTaskLogUrlDesc"] !== null) {
            $this->ThirdTaskLogUrlDesc = $param["ThirdTaskLogUrlDesc"];
        }

        if (array_key_exists("LineCount",$param) and $param["LineCount"] !== null) {
            $this->LineCount = $param["LineCount"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }

        if (array_key_exists("IsEnd",$param) and $param["IsEnd"] !== null) {
            $this->IsEnd = $param["IsEnd"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("MatchedBrokerIp",$param) and $param["MatchedBrokerIp"] !== null) {
            $this->MatchedBrokerIp = $param["MatchedBrokerIp"];
        }

        if (array_key_exists("ExecutionExtendedProps",$param) and $param["ExecutionExtendedProps"] !== null) {
            $this->ExecutionExtendedProps = [];
            foreach ($param["ExecutionExtendedProps"] as $key => $value){
                $obj = new PairDto();
                $obj->deserialize($value);
                array_push($this->ExecutionExtendedProps, $obj);
            }
        }

        if (array_key_exists("LogDiagnosisRules",$param) and $param["LogDiagnosisRules"] !== null) {
            $this->LogDiagnosisRules = new LogDiagnosisRules();
            $this->LogDiagnosisRules->deserialize($param["LogDiagnosisRules"]);
        }
    }
}
