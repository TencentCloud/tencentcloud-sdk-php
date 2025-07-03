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
 * 投递规则
 *
 * @method string getShipperId() 获取投递规则ID
 * @method void setShipperId(string $ShipperId) 设置投递规则ID
 * @method string getTopicId() 获取日志主题ID
 * @method void setTopicId(string $TopicId) 设置日志主题ID
 * @method string getBucket() 获取投递的bucket地址
 * @method void setBucket(string $Bucket) 设置投递的bucket地址
 * @method string getPrefix() 获取投递的前缀目录
 * @method void setPrefix(string $Prefix) 设置投递的前缀目录
 * @method string getShipperName() 获取投递规则的名字
 * @method void setShipperName(string $ShipperName) 设置投递规则的名字
 * @method integer getInterval() 获取投递的时间间隔，单位 秒
 * @method void setInterval(integer $Interval) 设置投递的时间间隔，单位 秒
 * @method integer getMaxSize() 获取投递的文件的最大值，单位 MB
 * @method void setMaxSize(integer $MaxSize) 设置投递的文件的最大值，单位 MB
 * @method boolean getStatus() 获取是否生效
 * @method void setStatus(boolean $Status) 设置是否生效
 * @method array getFilterRules() 获取投递日志的过滤规则
 * @method void setFilterRules(array $FilterRules) 设置投递日志的过滤规则
 * @method string getPartition() 获取投递日志的分区规则，支持strftime的时间格式表示
 * @method void setPartition(string $Partition) 设置投递日志的分区规则，支持strftime的时间格式表示
 * @method CompressInfo getCompress() 获取投递日志的压缩配置
 * @method void setCompress(CompressInfo $Compress) 设置投递日志的压缩配置
 * @method ContentInfo getContent() 获取投递日志的内容格式配置
 * @method void setContent(ContentInfo $Content) 设置投递日志的内容格式配置
 * @method string getCreateTime() 获取投递日志的创建时间
 * @method void setCreateTime(string $CreateTime) 设置投递日志的创建时间
 * @method integer getFilenameMode() 获取投递文件命名配置，0：随机数命名，1：投递时间命名，默认0（随机数命名）
 * @method void setFilenameMode(integer $FilenameMode) 设置投递文件命名配置，0：随机数命名，1：投递时间命名，默认0（随机数命名）
 * @method integer getStartTime() 获取投递数据范围的开始时间点
 * @method void setStartTime(integer $StartTime) 设置投递数据范围的开始时间点
 * @method integer getEndTime() 获取投递数据范围的结束时间点
 * @method void setEndTime(integer $EndTime) 设置投递数据范围的结束时间点
 * @method float getProgress() 获取历史数据投递的进度（仅当用户选择的数据内中历史数据时才有效）
 * @method void setProgress(float $Progress) 设置历史数据投递的进度（仅当用户选择的数据内中历史数据时才有效）
 * @method integer getRemainTime() 获取历史数据全部投递完成剩余的时间（仅当用户选择的数据中有历史数据时才有效）
 * @method void setRemainTime(integer $RemainTime) 设置历史数据全部投递完成剩余的时间（仅当用户选择的数据中有历史数据时才有效）
 * @method integer getHistoryStatus() 获取历史任务状态：
0：实时任务
1：任务准备中
2：任务运行中
3：任务运行异常
4：任务运行结束
 * @method void setHistoryStatus(integer $HistoryStatus) 设置历史任务状态：
0：实时任务
1：任务准备中
2：任务运行中
3：任务运行异常
4：任务运行结束
 * @method string getStorageType() 获取cos桶类型
 * @method void setStorageType(string $StorageType) 设置cos桶类型
 */
class ShipperInfo extends AbstractModel
{
    /**
     * @var string 投递规则ID
     */
    public $ShipperId;

    /**
     * @var string 日志主题ID
     */
    public $TopicId;

    /**
     * @var string 投递的bucket地址
     */
    public $Bucket;

    /**
     * @var string 投递的前缀目录
     */
    public $Prefix;

    /**
     * @var string 投递规则的名字
     */
    public $ShipperName;

    /**
     * @var integer 投递的时间间隔，单位 秒
     */
    public $Interval;

    /**
     * @var integer 投递的文件的最大值，单位 MB
     */
    public $MaxSize;

    /**
     * @var boolean 是否生效
     */
    public $Status;

    /**
     * @var array 投递日志的过滤规则
     */
    public $FilterRules;

    /**
     * @var string 投递日志的分区规则，支持strftime的时间格式表示
     */
    public $Partition;

    /**
     * @var CompressInfo 投递日志的压缩配置
     */
    public $Compress;

    /**
     * @var ContentInfo 投递日志的内容格式配置
     */
    public $Content;

    /**
     * @var string 投递日志的创建时间
     */
    public $CreateTime;

    /**
     * @var integer 投递文件命名配置，0：随机数命名，1：投递时间命名，默认0（随机数命名）
     */
    public $FilenameMode;

    /**
     * @var integer 投递数据范围的开始时间点
     */
    public $StartTime;

    /**
     * @var integer 投递数据范围的结束时间点
     */
    public $EndTime;

    /**
     * @var float 历史数据投递的进度（仅当用户选择的数据内中历史数据时才有效）
     */
    public $Progress;

    /**
     * @var integer 历史数据全部投递完成剩余的时间（仅当用户选择的数据中有历史数据时才有效）
     */
    public $RemainTime;

    /**
     * @var integer 历史任务状态：
0：实时任务
1：任务准备中
2：任务运行中
3：任务运行异常
4：任务运行结束
     */
    public $HistoryStatus;

    /**
     * @var string cos桶类型
     */
    public $StorageType;

    /**
     * @param string $ShipperId 投递规则ID
     * @param string $TopicId 日志主题ID
     * @param string $Bucket 投递的bucket地址
     * @param string $Prefix 投递的前缀目录
     * @param string $ShipperName 投递规则的名字
     * @param integer $Interval 投递的时间间隔，单位 秒
     * @param integer $MaxSize 投递的文件的最大值，单位 MB
     * @param boolean $Status 是否生效
     * @param array $FilterRules 投递日志的过滤规则
     * @param string $Partition 投递日志的分区规则，支持strftime的时间格式表示
     * @param CompressInfo $Compress 投递日志的压缩配置
     * @param ContentInfo $Content 投递日志的内容格式配置
     * @param string $CreateTime 投递日志的创建时间
     * @param integer $FilenameMode 投递文件命名配置，0：随机数命名，1：投递时间命名，默认0（随机数命名）
     * @param integer $StartTime 投递数据范围的开始时间点
     * @param integer $EndTime 投递数据范围的结束时间点
     * @param float $Progress 历史数据投递的进度（仅当用户选择的数据内中历史数据时才有效）
     * @param integer $RemainTime 历史数据全部投递完成剩余的时间（仅当用户选择的数据中有历史数据时才有效）
     * @param integer $HistoryStatus 历史任务状态：
0：实时任务
1：任务准备中
2：任务运行中
3：任务运行异常
4：任务运行结束
     * @param string $StorageType cos桶类型
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
    }
}
