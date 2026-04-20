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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cos Datahub 任务接入参数
 *
 * @method string getBucketName() 获取<p>cos 存储桶名称</p>
 * @method void setBucketName(string $BucketName) 设置<p>cos 存储桶名称</p>
 * @method string getRegion() 获取<p>地域代码</p>
 * @method void setRegion(string $Region) 设置<p>地域代码</p>
 * @method string getObjectKey() 获取<p>对象名称</p>
 * @method void setObjectKey(string $ObjectKey) 设置<p>对象名称</p>
 * @method integer getAggregateBatchSize() 获取<p>汇聚消息量的大小（单位：MB)</p>
 * @method void setAggregateBatchSize(integer $AggregateBatchSize) 设置<p>汇聚消息量的大小（单位：MB)</p>
 * @method integer getAggregateInterval() 获取<p>汇聚的时间间隔（单位：小时）</p>
 * @method void setAggregateInterval(integer $AggregateInterval) 设置<p>汇聚的时间间隔（单位：小时）</p>
 * @method string getFormatOutputType() 获取<p>消息汇聚后的文件格式（支持csv, json）</p>
 * @method void setFormatOutputType(string $FormatOutputType) 设置<p>消息汇聚后的文件格式（支持csv, json）</p>
 * @method string getObjectKeyPrefix() 获取<p>转储的对象目录前缀</p>
 * @method void setObjectKeyPrefix(string $ObjectKeyPrefix) 设置<p>转储的对象目录前缀</p>
 * @method string getDirectoryTimeFormat() 获取<p>根据strptime 时间格式化的分区格式</p>
 * @method void setDirectoryTimeFormat(string $DirectoryTimeFormat) 设置<p>根据strptime 时间格式化的分区格式</p>
 */
class CosParam extends AbstractModel
{
    /**
     * @var string <p>cos 存储桶名称</p>
     */
    public $BucketName;

    /**
     * @var string <p>地域代码</p>
     */
    public $Region;

    /**
     * @var string <p>对象名称</p>
     */
    public $ObjectKey;

    /**
     * @var integer <p>汇聚消息量的大小（单位：MB)</p>
     */
    public $AggregateBatchSize;

    /**
     * @var integer <p>汇聚的时间间隔（单位：小时）</p>
     */
    public $AggregateInterval;

    /**
     * @var string <p>消息汇聚后的文件格式（支持csv, json）</p>
     */
    public $FormatOutputType;

    /**
     * @var string <p>转储的对象目录前缀</p>
     */
    public $ObjectKeyPrefix;

    /**
     * @var string <p>根据strptime 时间格式化的分区格式</p>
     */
    public $DirectoryTimeFormat;

    /**
     * @param string $BucketName <p>cos 存储桶名称</p>
     * @param string $Region <p>地域代码</p>
     * @param string $ObjectKey <p>对象名称</p>
     * @param integer $AggregateBatchSize <p>汇聚消息量的大小（单位：MB)</p>
     * @param integer $AggregateInterval <p>汇聚的时间间隔（单位：小时）</p>
     * @param string $FormatOutputType <p>消息汇聚后的文件格式（支持csv, json）</p>
     * @param string $ObjectKeyPrefix <p>转储的对象目录前缀</p>
     * @param string $DirectoryTimeFormat <p>根据strptime 时间格式化的分区格式</p>
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
