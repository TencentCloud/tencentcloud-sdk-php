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
 * CreateShipper请求参数结构体
 *
 * @method string getTopicId() 获取创建的投递规则所属的日志主题ID
 * @method void setTopicId(string $TopicId) 设置创建的投递规则所属的日志主题ID
 * @method string getBucket() 获取创建的投递规则投递的bucket
 * @method void setBucket(string $Bucket) 设置创建的投递规则投递的bucket
 * @method string getPrefix() 获取创建的投递规则投递目录的前缀
 * @method void setPrefix(string $Prefix) 设置创建的投递规则投递目录的前缀
 * @method string getShipperName() 获取投递规则的名字
 * @method void setShipperName(string $ShipperName) 设置投递规则的名字
 * @method integer getInterval() 获取投递的时间间隔，单位 秒，默认300，范围 300-900
 * @method void setInterval(integer $Interval) 设置投递的时间间隔，单位 秒，默认300，范围 300-900
 * @method integer getMaxSize() 获取投递的文件的最大值，单位 MB，默认256，范围 100-256
 * @method void setMaxSize(integer $MaxSize) 设置投递的文件的最大值，单位 MB，默认256，范围 100-256
 * @method array getFilterRules() 获取投递日志的过滤规则，匹配的日志进行投递，各rule之间是and关系，最多5个，数组为空则表示不过滤而全部投递
 * @method void setFilterRules(array $FilterRules) 设置投递日志的过滤规则，匹配的日志进行投递，各rule之间是and关系，最多5个，数组为空则表示不过滤而全部投递
 * @method string getPartition() 获取投递日志的分区规则，支持strftime的时间格式表示
 * @method void setPartition(string $Partition) 设置投递日志的分区规则，支持strftime的时间格式表示
 * @method CompressInfo getCompress() 获取投递日志的压缩配置
 * @method void setCompress(CompressInfo $Compress) 设置投递日志的压缩配置
 * @method ContentInfo getContent() 获取投递日志的内容格式配置
 * @method void setContent(ContentInfo $Content) 设置投递日志的内容格式配置
 * @method integer getFilenameMode() 获取投递文件命名配置，0：随机数命名，1：投递时间命名，默认0（随机数命名）
 * @method void setFilenameMode(integer $FilenameMode) 设置投递文件命名配置，0：随机数命名，1：投递时间命名，默认0（随机数命名）
 * @method integer getStartTime() 获取投递数据范围的开始时间点，不能超出日志主题的生命周期起点。如果用户不填写，默认为用户新建投递任务的时间。
 * @method void setStartTime(integer $StartTime) 设置投递数据范围的开始时间点，不能超出日志主题的生命周期起点。如果用户不填写，默认为用户新建投递任务的时间。
 * @method integer getEndTime() 获取投递数据范围的结束时间点，不能填写未来时间。如果用户不填写，默认为持续投递，即无限。
 * @method void setEndTime(integer $EndTime) 设置投递数据范围的结束时间点，不能填写未来时间。如果用户不填写，默认为持续投递，即无限。
 */
class CreateShipperRequest extends AbstractModel
{
    /**
     * @var string 创建的投递规则所属的日志主题ID
     */
    public $TopicId;

    /**
     * @var string 创建的投递规则投递的bucket
     */
    public $Bucket;

    /**
     * @var string 创建的投递规则投递目录的前缀
     */
    public $Prefix;

    /**
     * @var string 投递规则的名字
     */
    public $ShipperName;

    /**
     * @var integer 投递的时间间隔，单位 秒，默认300，范围 300-900
     */
    public $Interval;

    /**
     * @var integer 投递的文件的最大值，单位 MB，默认256，范围 100-256
     */
    public $MaxSize;

    /**
     * @var array 投递日志的过滤规则，匹配的日志进行投递，各rule之间是and关系，最多5个，数组为空则表示不过滤而全部投递
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
     * @var integer 投递文件命名配置，0：随机数命名，1：投递时间命名，默认0（随机数命名）
     */
    public $FilenameMode;

    /**
     * @var integer 投递数据范围的开始时间点，不能超出日志主题的生命周期起点。如果用户不填写，默认为用户新建投递任务的时间。
     */
    public $StartTime;

    /**
     * @var integer 投递数据范围的结束时间点，不能填写未来时间。如果用户不填写，默认为持续投递，即无限。
     */
    public $EndTime;

    /**
     * @param string $TopicId 创建的投递规则所属的日志主题ID
     * @param string $Bucket 创建的投递规则投递的bucket
     * @param string $Prefix 创建的投递规则投递目录的前缀
     * @param string $ShipperName 投递规则的名字
     * @param integer $Interval 投递的时间间隔，单位 秒，默认300，范围 300-900
     * @param integer $MaxSize 投递的文件的最大值，单位 MB，默认256，范围 100-256
     * @param array $FilterRules 投递日志的过滤规则，匹配的日志进行投递，各rule之间是and关系，最多5个，数组为空则表示不过滤而全部投递
     * @param string $Partition 投递日志的分区规则，支持strftime的时间格式表示
     * @param CompressInfo $Compress 投递日志的压缩配置
     * @param ContentInfo $Content 投递日志的内容格式配置
     * @param integer $FilenameMode 投递文件命名配置，0：随机数命名，1：投递时间命名，默认0（随机数命名）
     * @param integer $StartTime 投递数据范围的开始时间点，不能超出日志主题的生命周期起点。如果用户不填写，默认为用户新建投递任务的时间。
     * @param integer $EndTime 投递数据范围的结束时间点，不能填写未来时间。如果用户不填写，默认为持续投递，即无限。
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

        if (array_key_exists("FilenameMode",$param) and $param["FilenameMode"] !== null) {
            $this->FilenameMode = $param["FilenameMode"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
