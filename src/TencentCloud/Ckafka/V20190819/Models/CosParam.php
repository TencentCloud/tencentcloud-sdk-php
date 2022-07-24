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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cos Datahub 任务接入参数
 *
 * @method string getBucketName() 获取cos 存储桶名称
 * @method void setBucketName(string $BucketName) 设置cos 存储桶名称
 * @method string getRegion() 获取地域代码
 * @method void setRegion(string $Region) 设置地域代码
 * @method string getObjectKey() 获取对象名称
 * @method void setObjectKey(string $ObjectKey) 设置对象名称
 * @method integer getAggregateBatchSize() 获取汇聚消息量的大小（单位：MB)
 * @method void setAggregateBatchSize(integer $AggregateBatchSize) 设置汇聚消息量的大小（单位：MB)
 * @method integer getAggregateInterval() 获取汇聚的时间间隔（单位：小时）
 * @method void setAggregateInterval(integer $AggregateInterval) 设置汇聚的时间间隔（单位：小时）
 * @method string getFormatOutputType() 获取消息汇聚后的文件格式（支持csv, json）
 * @method void setFormatOutputType(string $FormatOutputType) 设置消息汇聚后的文件格式（支持csv, json）
 * @method string getObjectKeyPrefix() 获取转储的对象目录前缀
 * @method void setObjectKeyPrefix(string $ObjectKeyPrefix) 设置转储的对象目录前缀
 * @method string getDirectoryTimeFormat() 获取根据strptime 时间格式化的分区格式
 * @method void setDirectoryTimeFormat(string $DirectoryTimeFormat) 设置根据strptime 时间格式化的分区格式
 */
class CosParam extends AbstractModel
{
    /**
     * @var string cos 存储桶名称
     */
    public $BucketName;

    /**
     * @var string 地域代码
     */
    public $Region;

    /**
     * @var string 对象名称
     */
    public $ObjectKey;

    /**
     * @var integer 汇聚消息量的大小（单位：MB)
     */
    public $AggregateBatchSize;

    /**
     * @var integer 汇聚的时间间隔（单位：小时）
     */
    public $AggregateInterval;

    /**
     * @var string 消息汇聚后的文件格式（支持csv, json）
     */
    public $FormatOutputType;

    /**
     * @var string 转储的对象目录前缀
     */
    public $ObjectKeyPrefix;

    /**
     * @var string 根据strptime 时间格式化的分区格式
     */
    public $DirectoryTimeFormat;

    /**
     * @param string $BucketName cos 存储桶名称
     * @param string $Region 地域代码
     * @param string $ObjectKey 对象名称
     * @param integer $AggregateBatchSize 汇聚消息量的大小（单位：MB)
     * @param integer $AggregateInterval 汇聚的时间间隔（单位：小时）
     * @param string $FormatOutputType 消息汇聚后的文件格式（支持csv, json）
     * @param string $ObjectKeyPrefix 转储的对象目录前缀
     * @param string $DirectoryTimeFormat 根据strptime 时间格式化的分区格式
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
        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ObjectKey",$param) and $param["ObjectKey"] !== null) {
            $this->ObjectKey = $param["ObjectKey"];
        }

        if (array_key_exists("AggregateBatchSize",$param) and $param["AggregateBatchSize"] !== null) {
            $this->AggregateBatchSize = $param["AggregateBatchSize"];
        }

        if (array_key_exists("AggregateInterval",$param) and $param["AggregateInterval"] !== null) {
            $this->AggregateInterval = $param["AggregateInterval"];
        }

        if (array_key_exists("FormatOutputType",$param) and $param["FormatOutputType"] !== null) {
            $this->FormatOutputType = $param["FormatOutputType"];
        }

        if (array_key_exists("ObjectKeyPrefix",$param) and $param["ObjectKeyPrefix"] !== null) {
            $this->ObjectKeyPrefix = $param["ObjectKeyPrefix"];
        }

        if (array_key_exists("DirectoryTimeFormat",$param) and $param["DirectoryTimeFormat"] !== null) {
            $this->DirectoryTimeFormat = $param["DirectoryTimeFormat"];
        }
    }
}
