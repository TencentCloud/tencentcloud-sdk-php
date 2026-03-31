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
 * ModifyShipper请求参数结构体
 *
 * @method string getShipperId() 获取<p>投递规则Id。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/614/58745">获取投递任务列表</a>获取ShipperId。</li></ul>
 * @method void setShipperId(string $ShipperId) 设置<p>投递规则Id。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/614/58745">获取投递任务列表</a>获取ShipperId。</li></ul>
 * @method string getBucket() 获取<p>COS存储桶，详见产品支持的<a href="https://cloud.tencent.com/document/product/436/13312">存储桶命名规范</a>。    </p><ul><li>通过<a href="https://cloud.tencent.com/document/product/436/8291">GET Service（List Buckets）</a>获取COS存储桶。</li></ul>
 * @method void setBucket(string $Bucket) 设置<p>COS存储桶，详见产品支持的<a href="https://cloud.tencent.com/document/product/436/13312">存储桶命名规范</a>。    </p><ul><li>通过<a href="https://cloud.tencent.com/document/product/436/8291">GET Service（List Buckets）</a>获取COS存储桶。</li></ul>
 * @method string getPrefix() 获取<p>投递规则投递的新的目录前缀。</p><ul><li>仅支持0-9A-Za-z-_/</li><li>最大支持256个字符</li></ul>
 * @method void setPrefix(string $Prefix) 设置<p>投递规则投递的新的目录前缀。</p><ul><li>仅支持0-9A-Za-z-_/</li><li>最大支持256个字符</li></ul>
 * @method boolean getStatus() 获取<p>投递规则的开关状态。true：开启投递任务；false：关闭投递任务。</p>
 * @method void setStatus(boolean $Status) 设置<p>投递规则的开关状态。true：开启投递任务；false：关闭投递任务。</p>
 * @method string getShipperName() 获取<p>投递规则的名字</p>
 * @method void setShipperName(string $ShipperName) 设置<p>投递规则的名字</p>
 * @method integer getInterval() 获取<p>投递的时间间隔，单位 秒，默认300，范围 300-900</p>
 * @method void setInterval(integer $Interval) 设置<p>投递的时间间隔，单位 秒，默认300，范围 300-900</p>
 * @method integer getMaxSize() 获取<p>投递的文件的最大值，单位 MB，默认256，范围 5-256</p>
 * @method void setMaxSize(integer $MaxSize) 设置<p>投递的文件的最大值，单位 MB，默认256，范围 5-256</p>
 * @method array getFilterRules() 获取<p>投递日志的过滤规则，匹配的日志进行投递，各rule之间是and关系，最多5个，数组为空则表示不过滤而全部投递</p>
 * @method void setFilterRules(array $FilterRules) 设置<p>投递日志的过滤规则，匹配的日志进行投递，各rule之间是and关系，最多5个，数组为空则表示不过滤而全部投递</p>
 * @method string getPartition() 获取<p>投递日志的分区规则，支持strftime的时间格式表示</p>
 * @method void setPartition(string $Partition) 设置<p>投递日志的分区规则，支持strftime的时间格式表示</p>
 * @method CompressInfo getCompress() 获取<p>投递日志的压缩配置</p>
 * @method void setCompress(CompressInfo $Compress) 设置<p>投递日志的压缩配置</p>
 * @method ContentInfo getContent() 获取<p>投递日志的内容格式配置</p>
 * @method void setContent(ContentInfo $Content) 设置<p>投递日志的内容格式配置</p>
 * @method integer getFilenameMode() 获取<p>投递文件命名配置，0：随机数命名，1：投递时间命名。</p>
 * @method void setFilenameMode(integer $FilenameMode) 设置<p>投递文件命名配置，0：随机数命名，1：投递时间命名。</p>
 * @method string getStorageType() 获取<p>对象存储类型，默认值为 STANDARD。枚举值请参见<a href="https://cloud.tencent.com/document/product/436/33417"> 存储类型概述</a> 文档。<br>参考值有：</p><ul><li>STANDARD：标准存储</li><li>STANDARD_IA：低频存储</li><li>ARCHIVE：归档存储</li><li>DEEP_ARCHIVE：深度归档存储</li><li>MAZ_STANDARD：标准存储（多 AZ）</li><li>MAZ_STANDARD_IA：低频存储（多 AZ）</li><li>INTELLIGENT_TIERING：智能分层存储</li><li>MAZ_INTELLIGENT_TIERING：智能分层存储（多 AZ）</li></ul>
 * @method void setStorageType(string $StorageType) 设置<p>对象存储类型，默认值为 STANDARD。枚举值请参见<a href="https://cloud.tencent.com/document/product/436/33417"> 存储类型概述</a> 文档。<br>参考值有：</p><ul><li>STANDARD：标准存储</li><li>STANDARD_IA：低频存储</li><li>ARCHIVE：归档存储</li><li>DEEP_ARCHIVE：深度归档存储</li><li>MAZ_STANDARD：标准存储（多 AZ）</li><li>MAZ_STANDARD_IA：低频存储（多 AZ）</li><li>INTELLIGENT_TIERING：智能分层存储</li><li>MAZ_INTELLIGENT_TIERING：智能分层存储（多 AZ）</li></ul>
 * @method string getRoleArn() 获取<p>角色访问描述名 <a href="https://cloud.tencent.com/document/product/598/19381">创建角色</a></p>
 * @method void setRoleArn(string $RoleArn) 设置<p>角色访问描述名 <a href="https://cloud.tencent.com/document/product/598/19381">创建角色</a></p>
 * @method string getExternalId() 获取<p>外部ID</p>
 * @method void setExternalId(string $ExternalId) 设置<p>外部ID</p>
 * @method string getTimeZone() 获取<p>用于生成投递到COS 的文件路径中的时间变量</p><p>入参限制：支持下面时区列表</p><ul><li>GMT-12:00</li><li>GMT-11:00</li><li>GMT-10:00</li><li>GMT-09:30</li><li>GMT-09:00</li><li>GMT-08:00</li><li>GMT-07:00</li><li>GMT-06:00</li><li>GMT-05:00</li><li>GMT-04:00</li><li>GMT-03:30</li><li>GMT-03:00</li><li>GMT-02:00</li><li>GMT-01:00</li><li>GMT+00:00</li><li>GMT+01:00</li><li>GMT+02:00</li><li>GMT+03:30</li><li>GMT+04:00</li><li>GMT+04:30</li><li>GMT+05:00</li><li>GMT+05:30</li><li>GMT+05:45</li><li>GMT+06:00</li><li>GMT+06:30</li><li>GMT+07:00</li><li>GMT+08:00</li><li>GMT+09:00</li><li>GMT+09:30</li><li>GMT+10:00</li><li>GMT+10:30</li><li>GMT+11:00</li><li>GMT+11:30</li><li>GMT+12:00</li><li>GMT+12:45</li><li>GMT+13:00</li><li>GMT+14:00</li><li>UTC-11:00</li><li>UTC-10:00</li><li>UTC-09:00</li><li>UTC-08:00</li><li>UTC-12:00</li><li>UTC-07:00</li><li>UTC-06:00</li><li>UTC-05:00</li><li>UTC-04:30</li><li>UTC-04:00</li><li>UTC-03:30</li><li>UTC-03:00</li><li>UTC-02:00</li><li>UTC-01:00</li><li>UTC+00:00</li><li>UTC+01:00</li><li>UTC+02:00</li><li>UTC+03:00</li><li>UTC+03:30</li><li>UTC+04:00</li><li>UTC+04:30</li><li>UTC+05:00</li><li>UTC+05:45</li><li>UTC+06:00</li><li>UTC+06:30</li><li>UTC+07:00</li><li>UTC+08:00</li><li>UTC+09:00</li><li>UTC+09:30</li><li>UTC+10:00</li><li>UTC+11:00</li><li>UTC+12:00</li><li>UTC+13:00</li></ul>
 * @method void setTimeZone(string $TimeZone) 设置<p>用于生成投递到COS 的文件路径中的时间变量</p><p>入参限制：支持下面时区列表</p><ul><li>GMT-12:00</li><li>GMT-11:00</li><li>GMT-10:00</li><li>GMT-09:30</li><li>GMT-09:00</li><li>GMT-08:00</li><li>GMT-07:00</li><li>GMT-06:00</li><li>GMT-05:00</li><li>GMT-04:00</li><li>GMT-03:30</li><li>GMT-03:00</li><li>GMT-02:00</li><li>GMT-01:00</li><li>GMT+00:00</li><li>GMT+01:00</li><li>GMT+02:00</li><li>GMT+03:30</li><li>GMT+04:00</li><li>GMT+04:30</li><li>GMT+05:00</li><li>GMT+05:30</li><li>GMT+05:45</li><li>GMT+06:00</li><li>GMT+06:30</li><li>GMT+07:00</li><li>GMT+08:00</li><li>GMT+09:00</li><li>GMT+09:30</li><li>GMT+10:00</li><li>GMT+10:30</li><li>GMT+11:00</li><li>GMT+11:30</li><li>GMT+12:00</li><li>GMT+12:45</li><li>GMT+13:00</li><li>GMT+14:00</li><li>UTC-11:00</li><li>UTC-10:00</li><li>UTC-09:00</li><li>UTC-08:00</li><li>UTC-12:00</li><li>UTC-07:00</li><li>UTC-06:00</li><li>UTC-05:00</li><li>UTC-04:30</li><li>UTC-04:00</li><li>UTC-03:30</li><li>UTC-03:00</li><li>UTC-02:00</li><li>UTC-01:00</li><li>UTC+00:00</li><li>UTC+01:00</li><li>UTC+02:00</li><li>UTC+03:00</li><li>UTC+03:30</li><li>UTC+04:00</li><li>UTC+04:30</li><li>UTC+05:00</li><li>UTC+05:45</li><li>UTC+06:00</li><li>UTC+06:30</li><li>UTC+07:00</li><li>UTC+08:00</li><li>UTC+09:00</li><li>UTC+09:30</li><li>UTC+10:00</li><li>UTC+11:00</li><li>UTC+12:00</li><li>UTC+13:00</li></ul>
 * @method string getDSLFilter() 获取<p>预过滤处理-对写入COS原始数据进行预过滤处理</p>
 * @method void setDSLFilter(string $DSLFilter) 设置<p>预过滤处理-对写入COS原始数据进行预过滤处理</p>
 */
class ModifyShipperRequest extends AbstractModel
{
    /**
     * @var string <p>投递规则Id。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/614/58745">获取投递任务列表</a>获取ShipperId。</li></ul>
     */
    public $ShipperId;

    /**
     * @var string <p>COS存储桶，详见产品支持的<a href="https://cloud.tencent.com/document/product/436/13312">存储桶命名规范</a>。    </p><ul><li>通过<a href="https://cloud.tencent.com/document/product/436/8291">GET Service（List Buckets）</a>获取COS存储桶。</li></ul>
     */
    public $Bucket;

    /**
     * @var string <p>投递规则投递的新的目录前缀。</p><ul><li>仅支持0-9A-Za-z-_/</li><li>最大支持256个字符</li></ul>
     */
    public $Prefix;

    /**
     * @var boolean <p>投递规则的开关状态。true：开启投递任务；false：关闭投递任务。</p>
     */
    public $Status;

    /**
     * @var string <p>投递规则的名字</p>
     */
    public $ShipperName;

    /**
     * @var integer <p>投递的时间间隔，单位 秒，默认300，范围 300-900</p>
     */
    public $Interval;

    /**
     * @var integer <p>投递的文件的最大值，单位 MB，默认256，范围 5-256</p>
     */
    public $MaxSize;

    /**
     * @var array <p>投递日志的过滤规则，匹配的日志进行投递，各rule之间是and关系，最多5个，数组为空则表示不过滤而全部投递</p>
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
     * @var integer <p>投递文件命名配置，0：随机数命名，1：投递时间命名。</p>
     */
    public $FilenameMode;

    /**
     * @var string <p>对象存储类型，默认值为 STANDARD。枚举值请参见<a href="https://cloud.tencent.com/document/product/436/33417"> 存储类型概述</a> 文档。<br>参考值有：</p><ul><li>STANDARD：标准存储</li><li>STANDARD_IA：低频存储</li><li>ARCHIVE：归档存储</li><li>DEEP_ARCHIVE：深度归档存储</li><li>MAZ_STANDARD：标准存储（多 AZ）</li><li>MAZ_STANDARD_IA：低频存储（多 AZ）</li><li>INTELLIGENT_TIERING：智能分层存储</li><li>MAZ_INTELLIGENT_TIERING：智能分层存储（多 AZ）</li></ul>
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
     * @var string <p>用于生成投递到COS 的文件路径中的时间变量</p><p>入参限制：支持下面时区列表</p><ul><li>GMT-12:00</li><li>GMT-11:00</li><li>GMT-10:00</li><li>GMT-09:30</li><li>GMT-09:00</li><li>GMT-08:00</li><li>GMT-07:00</li><li>GMT-06:00</li><li>GMT-05:00</li><li>GMT-04:00</li><li>GMT-03:30</li><li>GMT-03:00</li><li>GMT-02:00</li><li>GMT-01:00</li><li>GMT+00:00</li><li>GMT+01:00</li><li>GMT+02:00</li><li>GMT+03:30</li><li>GMT+04:00</li><li>GMT+04:30</li><li>GMT+05:00</li><li>GMT+05:30</li><li>GMT+05:45</li><li>GMT+06:00</li><li>GMT+06:30</li><li>GMT+07:00</li><li>GMT+08:00</li><li>GMT+09:00</li><li>GMT+09:30</li><li>GMT+10:00</li><li>GMT+10:30</li><li>GMT+11:00</li><li>GMT+11:30</li><li>GMT+12:00</li><li>GMT+12:45</li><li>GMT+13:00</li><li>GMT+14:00</li><li>UTC-11:00</li><li>UTC-10:00</li><li>UTC-09:00</li><li>UTC-08:00</li><li>UTC-12:00</li><li>UTC-07:00</li><li>UTC-06:00</li><li>UTC-05:00</li><li>UTC-04:30</li><li>UTC-04:00</li><li>UTC-03:30</li><li>UTC-03:00</li><li>UTC-02:00</li><li>UTC-01:00</li><li>UTC+00:00</li><li>UTC+01:00</li><li>UTC+02:00</li><li>UTC+03:00</li><li>UTC+03:30</li><li>UTC+04:00</li><li>UTC+04:30</li><li>UTC+05:00</li><li>UTC+05:45</li><li>UTC+06:00</li><li>UTC+06:30</li><li>UTC+07:00</li><li>UTC+08:00</li><li>UTC+09:00</li><li>UTC+09:30</li><li>UTC+10:00</li><li>UTC+11:00</li><li>UTC+12:00</li><li>UTC+13:00</li></ul>
     */
    public $TimeZone;

    /**
     * @var string <p>预过滤处理-对写入COS原始数据进行预过滤处理</p>
     */
    public $DSLFilter;

    /**
     * @param string $ShipperId <p>投递规则Id。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/614/58745">获取投递任务列表</a>获取ShipperId。</li></ul>
     * @param string $Bucket <p>COS存储桶，详见产品支持的<a href="https://cloud.tencent.com/document/product/436/13312">存储桶命名规范</a>。    </p><ul><li>通过<a href="https://cloud.tencent.com/document/product/436/8291">GET Service（List Buckets）</a>获取COS存储桶。</li></ul>
     * @param string $Prefix <p>投递规则投递的新的目录前缀。</p><ul><li>仅支持0-9A-Za-z-_/</li><li>最大支持256个字符</li></ul>
     * @param boolean $Status <p>投递规则的开关状态。true：开启投递任务；false：关闭投递任务。</p>
     * @param string $ShipperName <p>投递规则的名字</p>
     * @param integer $Interval <p>投递的时间间隔，单位 秒，默认300，范围 300-900</p>
     * @param integer $MaxSize <p>投递的文件的最大值，单位 MB，默认256，范围 5-256</p>
     * @param array $FilterRules <p>投递日志的过滤规则，匹配的日志进行投递，各rule之间是and关系，最多5个，数组为空则表示不过滤而全部投递</p>
     * @param string $Partition <p>投递日志的分区规则，支持strftime的时间格式表示</p>
     * @param CompressInfo $Compress <p>投递日志的压缩配置</p>
     * @param ContentInfo $Content <p>投递日志的内容格式配置</p>
     * @param integer $FilenameMode <p>投递文件命名配置，0：随机数命名，1：投递时间命名。</p>
     * @param string $StorageType <p>对象存储类型，默认值为 STANDARD。枚举值请参见<a href="https://cloud.tencent.com/document/product/436/33417"> 存储类型概述</a> 文档。<br>参考值有：</p><ul><li>STANDARD：标准存储</li><li>STANDARD_IA：低频存储</li><li>ARCHIVE：归档存储</li><li>DEEP_ARCHIVE：深度归档存储</li><li>MAZ_STANDARD：标准存储（多 AZ）</li><li>MAZ_STANDARD_IA：低频存储（多 AZ）</li><li>INTELLIGENT_TIERING：智能分层存储</li><li>MAZ_INTELLIGENT_TIERING：智能分层存储（多 AZ）</li></ul>
     * @param string $RoleArn <p>角色访问描述名 <a href="https://cloud.tencent.com/document/product/598/19381">创建角色</a></p>
     * @param string $ExternalId <p>外部ID</p>
     * @param string $TimeZone <p>用于生成投递到COS 的文件路径中的时间变量</p><p>入参限制：支持下面时区列表</p><ul><li>GMT-12:00</li><li>GMT-11:00</li><li>GMT-10:00</li><li>GMT-09:30</li><li>GMT-09:00</li><li>GMT-08:00</li><li>GMT-07:00</li><li>GMT-06:00</li><li>GMT-05:00</li><li>GMT-04:00</li><li>GMT-03:30</li><li>GMT-03:00</li><li>GMT-02:00</li><li>GMT-01:00</li><li>GMT+00:00</li><li>GMT+01:00</li><li>GMT+02:00</li><li>GMT+03:30</li><li>GMT+04:00</li><li>GMT+04:30</li><li>GMT+05:00</li><li>GMT+05:30</li><li>GMT+05:45</li><li>GMT+06:00</li><li>GMT+06:30</li><li>GMT+07:00</li><li>GMT+08:00</li><li>GMT+09:00</li><li>GMT+09:30</li><li>GMT+10:00</li><li>GMT+10:30</li><li>GMT+11:00</li><li>GMT+11:30</li><li>GMT+12:00</li><li>GMT+12:45</li><li>GMT+13:00</li><li>GMT+14:00</li><li>UTC-11:00</li><li>UTC-10:00</li><li>UTC-09:00</li><li>UTC-08:00</li><li>UTC-12:00</li><li>UTC-07:00</li><li>UTC-06:00</li><li>UTC-05:00</li><li>UTC-04:30</li><li>UTC-04:00</li><li>UTC-03:30</li><li>UTC-03:00</li><li>UTC-02:00</li><li>UTC-01:00</li><li>UTC+00:00</li><li>UTC+01:00</li><li>UTC+02:00</li><li>UTC+03:00</li><li>UTC+03:30</li><li>UTC+04:00</li><li>UTC+04:30</li><li>UTC+05:00</li><li>UTC+05:45</li><li>UTC+06:00</li><li>UTC+06:30</li><li>UTC+07:00</li><li>UTC+08:00</li><li>UTC+09:00</li><li>UTC+09:30</li><li>UTC+10:00</li><li>UTC+11:00</li><li>UTC+12:00</li><li>UTC+13:00</li></ul>
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

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Prefix",$param) and $param["Prefix"] !== null) {
            $this->Prefix = $param["Prefix"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("RoleArn",$param) and $param["RoleArn"] !== null) {
            $this->RoleArn = $param["RoleArn"];
        }

        if (array_key_exists("ExternalId",$param) and $param["ExternalId"] !== null) {
            $this->ExternalId = $param["ExternalId"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("DSLFilter",$param) and $param["DSLFilter"] !== null) {
            $this->DSLFilter = $param["DSLFilter"];
        }
    }
}
