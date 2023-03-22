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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos导入配置信息
 *
 * @method string getId() 获取COS导入配置ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置COS导入配置ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicId() 获取日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicId(string $TopicId) 设置日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogsetId() 获取日志集ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogsetId(string $LogsetId) 设置日志集ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取COS导入任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置COS导入任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBucket() 获取COS存储桶
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucket(string $Bucket) 设置COS存储桶
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBucketRegion() 获取COS存储桶所在地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucketRegion(string $BucketRegion) 设置COS存储桶所在地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrefix() 获取COS文件所在文件夹的前缀
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrefix(string $Prefix) 设置COS文件所在文件夹的前缀
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogType() 获取采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表单行全文；
默认为minimalist_log
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogType(string $LogType) 设置采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表单行全文；
默认为minimalist_log
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态   status 0: 已创建, 1: 运行中, 2: 已停止, 3: 已完成, 4: 运行失败。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态   status 0: 已创建, 1: 运行中, 2: 已停止, 3: 已完成, 4: 运行失败。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnable() 获取是否启用:   0： 未启用  ， 1：启用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnable(integer $Enable) 设置是否启用:   0： 未启用  ， 1：启用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProgress() 获取进度条百分值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgress(integer $Progress) 设置进度条百分值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCompress() 获取supported: "", "gzip", "lzop", "snappy”; 默认空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompress(string $Compress) 设置supported: "", "gzip", "lzop", "snappy”; 默认空
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExtractRuleInfo getExtractRuleInfo() 获取见： ExtractRuleInfo 结构描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtractRuleInfo(ExtractRuleInfo $ExtractRuleInfo) 设置见： ExtractRuleInfo 结构描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class CosRechargeInfo extends AbstractModel
{
    /**
     * @var string COS导入配置ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicId;

    /**
     * @var string 日志集ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogsetId;

    /**
     * @var string COS导入任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string COS存储桶
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bucket;

    /**
     * @var string COS存储桶所在地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BucketRegion;

    /**
     * @var string COS文件所在文件夹的前缀
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Prefix;

    /**
     * @var string 采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表单行全文；
默认为minimalist_log
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogType;

    /**
     * @var integer 状态   status 0: 已创建, 1: 运行中, 2: 已停止, 3: 已完成, 4: 运行失败。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 是否启用:   0： 未启用  ， 1：启用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enable;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 进度条百分值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Progress;

    /**
     * @var string supported: "", "gzip", "lzop", "snappy”; 默认空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Compress;

    /**
     * @var ExtractRuleInfo 见： ExtractRuleInfo 结构描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtractRuleInfo;

    /**
     * @param string $Id COS导入配置ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicId 日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogsetId 日志集ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name COS导入任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Bucket COS存储桶
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BucketRegion COS存储桶所在地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Prefix COS文件所在文件夹的前缀
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogType 采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表单行全文；
默认为minimalist_log
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态   status 0: 已创建, 1: 运行中, 2: 已停止, 3: 已完成, 4: 运行失败。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Enable 是否启用:   0： 未启用  ， 1：启用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Progress 进度条百分值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Compress supported: "", "gzip", "lzop", "snappy”; 默认空
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExtractRuleInfo $ExtractRuleInfo 见： ExtractRuleInfo 结构描述
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("BucketRegion",$param) and $param["BucketRegion"] !== null) {
            $this->BucketRegion = $param["BucketRegion"];
        }

        if (array_key_exists("Prefix",$param) and $param["Prefix"] !== null) {
            $this->Prefix = $param["Prefix"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("Compress",$param) and $param["Compress"] !== null) {
            $this->Compress = $param["Compress"];
        }

        if (array_key_exists("ExtractRuleInfo",$param) and $param["ExtractRuleInfo"] !== null) {
            $this->ExtractRuleInfo = new ExtractRuleInfo();
            $this->ExtractRuleInfo->deserialize($param["ExtractRuleInfo"]);
        }
    }
}
