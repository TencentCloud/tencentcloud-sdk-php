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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 投递规则
 *
 * @method string getShipperId() 获取<p>投递规则ID</p>
 * @method void setShipperId(string $ShipperId) 设置<p>投递规则ID</p>
 * @method string getTopicId() 获取<p>日志主题ID</p>
 * @method void setTopicId(string $TopicId) 设置<p>日志主题ID</p>
 * @method string getBucket() 获取<p>投递的bucket地址</p>
 * @method void setBucket(string $Bucket) 设置<p>投递的bucket地址</p>
 * @method string getPrefix() 获取<p>投递的前缀目录</p>
 * @method void setPrefix(string $Prefix) 设置<p>投递的前缀目录</p>
 * @method string getShipperName() 获取<p>投递规则的名字</p>
 * @method void setShipperName(string $ShipperName) 设置<p>投递规则的名字</p>
 * @method integer getInterval() 获取<p>投递的时间间隔，单位 秒</p>
 * @method void setInterval(integer $Interval) 设置<p>投递的时间间隔，单位 秒</p>
 * @method integer getMaxSize() 获取<p>投递的文件的最大值，单位 MB</p>
 * @method void setMaxSize(integer $MaxSize) 设置<p>投递的文件的最大值，单位 MB</p>
 * @method boolean getStatus() 获取<p>是否生效</p>
 * @method void setStatus(boolean $Status) 设置<p>是否生效</p>
 * @method array getFilterRules() 获取<p>投递日志的过滤规则</p>
 * @method void setFilterRules(array $FilterRules) 设置<p>投递日志的过滤规则</p>
 * @method string getPartition() 获取<p>投递日志的分区规则，支持strftime的时间格式表示</p>
 * @method void setPartition(string $Partition) 设置<p>投递日志的分区规则，支持strftime的时间格式表示</p>
 * @method CompressInfo getCompress() 获取<p>投递日志的压缩配置</p>
 * @method void setCompress(CompressInfo $Compress) 设置<p>投递日志的压缩配置</p>
 * @method ContentInfo getContent() 获取<p>投递日志的内容格式配置</p>
 * @method void setContent(ContentInfo $Content) 设置<p>投递日志的内容格式配置</p>
 * @method string getCreateTime() 获取<p>投递日志的创建时间。格式：YYYY-MM-DD HH:MM:SS</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>投递日志的创建时间。格式：YYYY-MM-DD HH:MM:SS</p>
 * @method integer getFilenameMode() 获取<p>投递文件命名配置，0：随机数命名，1：投递时间命名，默认0（随机数命名）</p>
 * @method void setFilenameMode(integer $FilenameMode) 设置<p>投递文件命名配置，0：随机数命名，1：投递时间命名，默认0（随机数命名）</p>
 * @method integer getStartTime() 获取<p>投递数据范围的开始时间点</p>
 * @method void setStartTime(integer $StartTime) 设置<p>投递数据范围的开始时间点</p>
 * @method integer getEndTime() 获取<p>投递数据范围的结束时间点</p>
 * @method void setEndTime(integer $EndTime) 设置<p>投递数据范围的结束时间点</p>
 * @method float getProgress() 获取<p>历史数据投递的进度（仅当用户选择的数据内中历史数据时才有效）</p>
 * @method void setProgress(float $Progress) 设置<p>历史数据投递的进度（仅当用户选择的数据内中历史数据时才有效）</p>
 * @method integer getRemainTime() 获取<p>历史数据全部投递完成剩余的时间（仅当用户选择的数据中有历史数据时才有效）</p><p>单位：秒</p>
 * @method void setRemainTime(integer $RemainTime) 设置<p>历史数据全部投递完成剩余的时间（仅当用户选择的数据中有历史数据时才有效）</p><p>单位：秒</p>
 * @method integer getHistoryStatus() 获取<p>历史任务状态：<br>0：实时任务<br>1：任务准备中<br>2：任务运行中<br>3：任务运行异常<br>4：任务运行结束</p>
 * @method void setHistoryStatus(integer $HistoryStatus) 设置<p>历史任务状态：<br>0：实时任务<br>1：任务准备中<br>2：任务运行中<br>3：任务运行异常<br>4：任务运行结束</p>
 * @method string getStorageType() 获取<p>对象存储类型，默认值为 STANDARD。枚举值请参见<a href="https://cloud.tencent.com/document/product/436/33417"> 存储类型概述</a> 文档。<br>参考值有：<br>STANDARD：标准存储<br>STANDARD_IA：低频存储<br>ARCHIVE：归档存储<br>DEEP_ARCHIVE：深度归档存储<br>MAZ_STANDARD：标准存储（多 AZ）<br>MAZ_STANDARD_IA：低频存储（多 AZ）<br>INTELLIGENT_TIERING：智能分层存储<br>MAZ_INTELLIGENT_TIERING：智能分层存储（多 AZ）</p>
 * @method void setStorageType(string $StorageType) 设置<p>对象存储类型，默认值为 STANDARD。枚举值请参见<a href="https://cloud.tencent.com/document/product/436/33417"> 存储类型概述</a> 文档。<br>参考值有：<br>STANDARD：标准存储<br>STANDARD_IA：低频存储<br>ARCHIVE：归档存储<br>DEEP_ARCHIVE：深度归档存储<br>MAZ_STANDARD：标准存储（多 AZ）<br>MAZ_STANDARD_IA：低频存储（多 AZ）<br>INTELLIGENT_TIERING：智能分层存储<br>MAZ_INTELLIGENT_TIERING：智能分层存储（多 AZ）</p>
 * @method string getRoleArn() 获取<p>角色访问描述名 <a href="https://cloud.tencent.com/document/product/598/19381">创建角色</a></p>
 * @method void setRoleArn(string $RoleArn) 设置<p>角色访问描述名 <a href="https://cloud.tencent.com/document/product/598/19381">创建角色</a></p>
 * @method string getExternalId() 获取<p>外部ID</p>
 * @method void setExternalId(string $ExternalId) 设置<p>外部ID</p>
 * @method integer getTaskStatus() 获取<p>任务运行状态。支持<code>0</code>,<code>1</code>,<code>2</code></p><ul><li><code>0</code>: 停止</li><li><code>1</code>: 运行中</li><li><code>2</code>: 异常</li></ul>
 * @method void setTaskStatus(integer $TaskStatus) 设置<p>任务运行状态。支持<code>0</code>,<code>1</code>,<code>2</code></p><ul><li><code>0</code>: 停止</li><li><code>1</code>: 运行中</li><li><code>2</code>: 异常</li></ul>
 * @method string getTimeZone() 获取<p>用于生成投递到COS 的文件路径中的时间变量</p>
 * @method void setTimeZone(string $TimeZone) 设置<p>用于生成投递到COS 的文件路径中的时间变量</p>
 * @method string getDSLFilter() 获取<p>预过滤处理-对写入COS原始数据进行预过滤处理</p>
 * @method void setDSLFilter(string $DSLFilter) 设置<p>预过滤处理-对写入COS原始数据进行预过滤处理</p>
 */
class ShipperInfo extends AbstractModel
{
    /**
     * @var string <p>投递规则ID</p>
     */
    public $ShipperId;

    /**
     * @var string <p>日志主题ID</p>
     */
    public $TopicId;

    /**
     * @var string <p>投递的bucket地址</p>
     */
    public $Bucket;

    /**
     * @var string <p>投递的前缀目录</p>
     */
    public $Prefix;

    /**
     * @var string <p>投递规则的名字</p>
     */
    public $ShipperName;

    /**
     * @var integer <p>投递的时间间隔，单位 秒</p>
     */
    public $Interval;

    /**
     * @var integer <p>投递的文件的最大值，单位 MB</p>
     */
    public $MaxSize;

    /**
     * @var boolean <p>是否生效</p>
     */
    public $Status;

    /**
     * @var array <p>投递日志的过滤规则</p>
     */
    public $FilterRules;

    /**
     * @var string <p>投递日志的分区规则，支持strftime的时间格式表示</p>
     */
    public $Partition;

    /**
     * @var CompressInfo <p>投递日志的压缩配置</p>
     */
    public $Compress;

    /**
     * @var ContentInfo <p>投递日志的内容格式配置</p>
     */
    public $Content;

    /**
     * @var string <p>投递日志的创建时间。格式：YYYY-MM-DD HH:MM:SS</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>投递文件命名配置，0：随机数命名，1：投递时间命名，默认0（随机数命名）</p>
     */
    public $FilenameMode;

    /**
     * @var integer <p>投递数据范围的开始时间点</p>
     */
    public $StartTime;

    /**
     * @var integer <p>投递数据范围的结束时间点</p>
     */
    public $EndTime;

    /**
     * @var float <p>历史数据投递的进度（仅当用户选择的数据内中历史数据时才有效）</p>
     */
    public $Progress;

    /**
     * @var integer <p>历史数据全部投递完成剩余的时间（仅当用户选择的数据中有历史数据时才有效）</p><p>单位：秒</p>
     */
    public $RemainTime;

    /**
     * @var integer <p>历史任务状态：<br>0：实时任务<br>1：任务准备中<br>2：任务运行中<br>3：任务运行异常<br>4：任务运行结束</p>
     */
    public $HistoryStatus;

    /**
     * @var string <p>对象存储类型，默认值为 STANDARD。枚举值请参见<a href="https://cloud.tencent.com/document/product/436/33417"> 存储类型概述</a> 文档。<br>参考值有：<br>STANDARD：标准存储<br>STANDARD_IA：低频存储<br>ARCHIVE：归档存储<br>DEEP_ARCHIVE：深度归档存储<br>MAZ_STANDARD：标准存储（多 AZ）<br>MAZ_STANDARD_IA：低频存储（多 AZ）<br>INTELLIGENT_TIERING：智能分层存储<br>MAZ_INTELLIGENT_TIERING：智能分层存储（多 AZ）</p>
     */
    public $StorageType;

    /**
     * @var string <p>角色访问描述名 <a href="https://cloud.tencent.com/document/product/598/19381">创建角色</a></p>
     */
    public $RoleArn;

    /**
     * @var string <p>外部ID</p>
     */
    public $ExternalId;

    /**
     * @var integer <p>任务运行状态。支持<code>0</code>,<code>1</code>,<code>2</code></p><ul><li><code>0</code>: 停止</li><li><code>1</code>: 运行中</li><li><code>2</code>: 异常</li></ul>
     */
    public $TaskStatus;

    /**
     * @var string <p>用于生成投递到COS 的文件路径中的时间变量</p>
     */
    public $TimeZone;

    /**
     * @var string <p>预过滤处理-对写入COS原始数据进行预过滤处理</p>
     */
    public $DSLFilter;

    /**
     * @param string $ShipperId <p>投递规则ID</p>
     * @param string $TopicId <p>日志主题ID</p>
     * @param string $Bucket <p>投递的bucket地址</p>
     * @param string $Prefix <p>投递的前缀目录</p>
     * @param string $ShipperName <p>投递规则的名字</p>
     * @param integer $Interval <p>投递的时间间隔，单位 秒</p>
     * @param integer $MaxSize <p>投递的文件的最大值，单位 MB</p>
     * @param boolean $Status <p>是否生效</p>
     * @param array $FilterRules <p>投递日志的过滤规则</p>
     * @param string $Partition <p>投递日志的分区规则，支持strftime的时间格式表示</p>
     * @param CompressInfo $Compress <p>投递日志的压缩配置</p>
     * @param ContentInfo $Content <p>投递日志的内容格式配置</p>
     * @param string $CreateTime <p>投递日志的创建时间。格式：YYYY-MM-DD HH:MM:SS</p>
     * @param integer $FilenameMode <p>投递文件命名配置，0：随机数命名，1：投递时间命名，默认0（随机数命名）</p>
     * @param integer $StartTime <p>投递数据范围的开始时间点</p>
     * @param integer $EndTime <p>投递数据范围的结束时间点</p>
     * @param float $Progress <p>历史数据投递的进度（仅当用户选择的数据内中历史数据时才有效）</p>
     * @param integer $RemainTime <p>历史数据全部投递完成剩余的时间（仅当用户选择的数据中有历史数据时才有效）</p><p>单位：秒</p>
     * @param integer $HistoryStatus <p>历史任务状态：<br>0：实时任务<br>1：任务准备中<br>2：任务运行中<br>3：任务运行异常<br>4：任务运行结束</p>
     * @param string $StorageType <p>对象存储类型，默认值为 STANDARD。枚举值请参见<a href="https://cloud.tencent.com/document/product/436/33417"> 存储类型概述</a> 文档。<br>参考值有：<br>STANDARD：标准存储<br>STANDARD_IA：低频存储<br>ARCHIVE：归档存储<br>DEEP_ARCHIVE：深度归档存储<br>MAZ_STANDARD：标准存储（多 AZ）<br>MAZ_STANDARD_IA：低频存储（多 AZ）<br>INTELLIGENT_TIERING：智能分层存储<br>MAZ_INTELLIGENT_TIERING：智能分层存储（多 AZ）</p>
     * @param string $RoleArn <p>角色访问描述名 <a href="https://cloud.tencent.com/document/product/598/19381">创建角色</a></p>
     * @param string $ExternalId <p>外部ID</p>
     * @param integer $TaskStatus <p>任务运行状态。支持<code>0</code>,<code>1</code>,<code>2</code></p><ul><li><code>0</code>: 停止</li><li><code>1</code>: 运行中</li><li><code>2</code>: 异常</li></ul>
     * @param string $TimeZone <p>用于生成投递到COS 的文件路径中的时间变量</p>
     * @param string $DSLFilter <p>预过滤处理-对写入COS原始数据进行预过滤处理</p>
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
        if (array_key_exists("ShipperId",$param) and $param["ShipperId"] !== null) {
            $this->ShipperId = $param["ShipperId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Prefix",$param) and $param["Prefix"] !== null) {
            $this->Prefix = $param["Prefix"];
        }

        if (array_key_exists("ShipperName",$param) and $param["ShipperName"] !== null) {
            $this->ShipperName = $param["ShipperName"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FilterRules",$param) and $param["FilterRules"] !== null) {
            $this->FilterRules = [];
            foreach ($param["FilterRules"] as $key => $value){
                $obj = new FilterRuleInfo();
                $obj->deserialize($value);
                array_push($this->FilterRules, $obj);
            }
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("Compress",$param) and $param["Compress"] !== null) {
            $this->Compress = new CompressInfo();
            $this->Compress->deserialize($param["Compress"]);
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = new ContentInfo();
            $this->Content->deserialize($param["Content"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("FilenameMode",$param) and $param["FilenameMode"] !== null) {
            $this->FilenameMode = $param["FilenameMode"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("RemainTime",$param) and $param["RemainTime"] !== null) {
            $this->RemainTime = $param["RemainTime"];
        }

        if (array_key_exists("HistoryStatus",$param) and $param["HistoryStatus"] !== null) {
            $this->HistoryStatus = $param["HistoryStatus"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("RoleArn",$param) and $param["RoleArn"] !== null) {
            $this->RoleArn = $param["RoleArn"];
        }

        if (array_key_exists("ExternalId",$param) and $param["ExternalId"] !== null) {
            $this->ExternalId = $param["ExternalId"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("DSLFilter",$param) and $param["DSLFilter"] !== null) {
            $this->DSLFilter = $param["DSLFilter"];
        }
    }
}
