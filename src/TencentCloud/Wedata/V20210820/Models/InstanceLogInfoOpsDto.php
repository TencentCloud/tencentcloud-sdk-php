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
 * @method string getLogInfo() 获取实例运行日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogInfo(string $LogInfo) 设置实例运行日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getYarnLogInfo() 获取实例运行提交的yarn日志地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setYarnLogInfo(array $YarnLogInfo) 设置实例运行提交的yarn日志地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataLogInfo() 获取实例运行产生的datax日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataLogInfo(string $DataLogInfo) 设置实例运行产生的datax日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getThirdTaskRunLogInfo() 获取第三方任务运行日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThirdTaskRunLogInfo(string $ThirdTaskRunLogInfo) 设置第三方任务运行日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getThirdTaskLogUrlDesc() 获取第三方任务日志链接描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThirdTaskLogUrlDesc(string $ThirdTaskLogUrlDesc) 设置第三方任务日志链接描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLineCount() 获取日志行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLineCount(integer $LineCount) 设置日志行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtInfo() 获取统一执行平台日志分页查询参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtInfo(string $ExtInfo) 设置统一执行平台日志分页查询参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsEnd() 获取日志分页查询，是否最后一页
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsEnd(boolean $IsEnd) 设置日志分页查询，是否最后一页
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileSize() 获取文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSize(string $FileSize) 设置文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMatchedBrokerIp() 获取日志匹配节点信息
 * @method void setMatchedBrokerIp(string $MatchedBrokerIp) 设置日志匹配节点信息
 * @method array getExecutionExtendedProps() 获取执行平台通用协议
 * @method void setExecutionExtendedProps(array $ExecutionExtendedProps) 设置执行平台通用协议
 */
class InstanceLogInfoOpsDto extends AbstractModel
{
    /**
     * @var string 实例运行日志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogInfo;

    /**
     * @var array 实例运行提交的yarn日志地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $YarnLogInfo;

    /**
     * @var string 实例运行产生的datax日志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataLogInfo;

    /**
     * @var string 第三方任务运行日志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThirdTaskRunLogInfo;

    /**
     * @var string 第三方任务日志链接描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThirdTaskLogUrlDesc;

    /**
     * @var integer 日志行数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LineCount;

    /**
     * @var string 统一执行平台日志分页查询参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtInfo;

    /**
     * @var boolean 日志分页查询，是否最后一页
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsEnd;

    /**
     * @var string 文件大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSize;

    /**
     * @var string 日志匹配节点信息
     */
    public $MatchedBrokerIp;

    /**
     * @var array 执行平台通用协议
     */
    public $ExecutionExtendedProps;

    /**
     * @param string $LogInfo 实例运行日志
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $YarnLogInfo 实例运行提交的yarn日志地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataLogInfo 实例运行产生的datax日志
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ThirdTaskRunLogInfo 第三方任务运行日志
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ThirdTaskLogUrlDesc 第三方任务日志链接描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LineCount 日志行数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtInfo 统一执行平台日志分页查询参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsEnd 日志分页查询，是否最后一页
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileSize 文件大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MatchedBrokerIp 日志匹配节点信息
     * @param array $ExecutionExtendedProps 执行平台通用协议
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
    }
}
