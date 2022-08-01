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
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilterRules(array $FilterRules) 设置投递日志的过滤规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPartition() 获取投递日志的分区规则，支持strftime的时间格式表示
 * @method void setPartition(string $Partition) 设置投递日志的分区规则，支持strftime的时间格式表示
 * @method CompressInfo getCompress() 获取投递日志的压缩配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompress(CompressInfo $Compress) 设置投递日志的压缩配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method ContentInfo getContent() 获取投递日志的内容格式配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(ContentInfo $Content) 设置投递日志的内容格式配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取投递日志的创建时间
 * @method void setCreateTime(string $CreateTime) 设置投递日志的创建时间
 * @method integer getFilenameMode() 获取投递文件命名配置，0：随机数命名，1：投递时间命名，默认0（随机数命名）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilenameMode(integer $FilenameMode) 设置投递文件命名配置，0：随机数命名，1：投递时间命名，默认0（随机数命名）
注意：此字段可能返回 null，表示取不到有效值。
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
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilterRules;

    /**
     * @var string 投递日志的分区规则，支持strftime的时间格式表示
     */
    public $Partition;

    /**
     * @var CompressInfo 投递日志的压缩配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Compress;

    /**
     * @var ContentInfo 投递日志的内容格式配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var string 投递日志的创建时间
     */
    public $CreateTime;

    /**
     * @var integer 投递文件命名配置，0：随机数命名，1：投递时间命名，默认0（随机数命名）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilenameMode;

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
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Partition 投递日志的分区规则，支持strftime的时间格式表示
     * @param CompressInfo $Compress 投递日志的压缩配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param ContentInfo $Content 投递日志的内容格式配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 投递日志的创建时间
     * @param integer $FilenameMode 投递文件命名配置，0：随机数命名，1：投递时间命名，默认0（随机数命名）
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
    }
}
