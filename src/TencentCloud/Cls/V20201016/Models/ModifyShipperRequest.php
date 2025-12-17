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
 * @method string getShipperId() 获取投递规则Id。

- 通过 [获取投递任务列表](https://cloud.tencent.com/document/product/614/58745)获取ShipperId。
 * @method void setShipperId(string $ShipperId) 设置投递规则Id。

- 通过 [获取投递任务列表](https://cloud.tencent.com/document/product/614/58745)获取ShipperId。
 * @method string getBucket() 获取COS存储桶，详见产品支持的[存储桶命名规范](https://cloud.tencent.com/document/product/436/13312)。	

- 通过[GET Service（List Buckets）](https://cloud.tencent.com/document/product/436/8291)获取COS存储桶。
 * @method void setBucket(string $Bucket) 设置COS存储桶，详见产品支持的[存储桶命名规范](https://cloud.tencent.com/document/product/436/13312)。	

- 通过[GET Service（List Buckets）](https://cloud.tencent.com/document/product/436/8291)获取COS存储桶。
 * @method string getPrefix() 获取投递规则投递的新的目录前缀。
- 仅支持0-9A-Za-z-_/
- 最大支持256个字符
 * @method void setPrefix(string $Prefix) 设置投递规则投递的新的目录前缀。
- 仅支持0-9A-Za-z-_/
- 最大支持256个字符
 * @method boolean getStatus() 获取投递规则的开关状态。true：开启投递任务；false：关闭投递任务。
 * @method void setStatus(boolean $Status) 设置投递规则的开关状态。true：开启投递任务；false：关闭投递任务。
 * @method string getShipperName() 获取投递规则的名字
 * @method void setShipperName(string $ShipperName) 设置投递规则的名字
 * @method integer getInterval() 获取投递的时间间隔，单位 秒，默认300，范围 300-900
 * @method void setInterval(integer $Interval) 设置投递的时间间隔，单位 秒，默认300，范围 300-900
 * @method integer getMaxSize() 获取投递的文件的最大值，单位 MB，默认256，范围 5-256
 * @method void setMaxSize(integer $MaxSize) 设置投递的文件的最大值，单位 MB，默认256，范围 5-256
 * @method array getFilterRules() 获取投递日志的过滤规则，匹配的日志进行投递，各rule之间是and关系，最多5个，数组为空则表示不过滤而全部投递
 * @method void setFilterRules(array $FilterRules) 设置投递日志的过滤规则，匹配的日志进行投递，各rule之间是and关系，最多5个，数组为空则表示不过滤而全部投递
 * @method string getPartition() 获取投递日志的分区规则，支持strftime的时间格式表示
 * @method void setPartition(string $Partition) 设置投递日志的分区规则，支持strftime的时间格式表示
 * @method CompressInfo getCompress() 获取投递日志的压缩配置
 * @method void setCompress(CompressInfo $Compress) 设置投递日志的压缩配置
 * @method ContentInfo getContent() 获取投递日志的内容格式配置
 * @method void setContent(ContentInfo $Content) 设置投递日志的内容格式配置
 * @method integer getFilenameMode() 获取投递文件命名配置，0：随机数命名，1：投递时间命名。
 * @method void setFilenameMode(integer $FilenameMode) 设置投递文件命名配置，0：随机数命名，1：投递时间命名。
 * @method string getStorageType() 获取对象存储类型，默认值为 STANDARD。枚举值请参见[ 存储类型概述](https://cloud.tencent.com/document/product/436/33417) 文档。
参考值有：

- STANDARD：标准存储
- STANDARD_IA：低频存储
- ARCHIVE：归档存储
- DEEP_ARCHIVE：深度归档存储
- MAZ_STANDARD：标准存储（多 AZ）
- MAZ_STANDARD_IA：低频存储（多 AZ）
- INTELLIGENT_TIERING：智能分层存储
- MAZ_INTELLIGENT_TIERING：智能分层存储（多 AZ）
 * @method void setStorageType(string $StorageType) 设置对象存储类型，默认值为 STANDARD。枚举值请参见[ 存储类型概述](https://cloud.tencent.com/document/product/436/33417) 文档。
参考值有：

- STANDARD：标准存储
- STANDARD_IA：低频存储
- ARCHIVE：归档存储
- DEEP_ARCHIVE：深度归档存储
- MAZ_STANDARD：标准存储（多 AZ）
- MAZ_STANDARD_IA：低频存储（多 AZ）
- INTELLIGENT_TIERING：智能分层存储
- MAZ_INTELLIGENT_TIERING：智能分层存储（多 AZ）
 * @method string getRoleArn() 获取角色访问描述名 [创建角色](https://cloud.tencent.com/document/product/598/19381)
 * @method void setRoleArn(string $RoleArn) 设置角色访问描述名 [创建角色](https://cloud.tencent.com/document/product/598/19381)
 * @method string getExternalId() 获取外部ID
 * @method void setExternalId(string $ExternalId) 设置外部ID
 */
class ModifyShipperRequest extends AbstractModel
{
    /**
     * @var string 投递规则Id。

- 通过 [获取投递任务列表](https://cloud.tencent.com/document/product/614/58745)获取ShipperId。
     */
    public $ShipperId;

    /**
     * @var string COS存储桶，详见产品支持的[存储桶命名规范](https://cloud.tencent.com/document/product/436/13312)。	

- 通过[GET Service（List Buckets）](https://cloud.tencent.com/document/product/436/8291)获取COS存储桶。
     */
    public $Bucket;

    /**
     * @var string 投递规则投递的新的目录前缀。
- 仅支持0-9A-Za-z-_/
- 最大支持256个字符
     */
    public $Prefix;

    /**
     * @var boolean 投递规则的开关状态。true：开启投递任务；false：关闭投递任务。
     */
    public $Status;

    /**
     * @var string 投递规则的名字
     */
    public $ShipperName;

    /**
     * @var integer 投递的时间间隔，单位 秒，默认300，范围 300-900
     */
    public $Interval;

    /**
     * @var integer 投递的文件的最大值，单位 MB，默认256，范围 5-256
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
     * @var integer 投递文件命名配置，0：随机数命名，1：投递时间命名。
     */
    public $FilenameMode;

    /**
     * @var string 对象存储类型，默认值为 STANDARD。枚举值请参见[ 存储类型概述](https://cloud.tencent.com/document/product/436/33417) 文档。
参考值有：

- STANDARD：标准存储
- STANDARD_IA：低频存储
- ARCHIVE：归档存储
- DEEP_ARCHIVE：深度归档存储
- MAZ_STANDARD：标准存储（多 AZ）
- MAZ_STANDARD_IA：低频存储（多 AZ）
- INTELLIGENT_TIERING：智能分层存储
- MAZ_INTELLIGENT_TIERING：智能分层存储（多 AZ）
     */
    public $StorageType;

    /**
     * @var string 角色访问描述名 [创建角色](https://cloud.tencent.com/document/product/598/19381)
     */
    public $RoleArn;

    /**
     * @var string 外部ID
     */
    public $ExternalId;

    /**
     * @param string $ShipperId 投递规则Id。

- 通过 [获取投递任务列表](https://cloud.tencent.com/document/product/614/58745)获取ShipperId。
     * @param string $Bucket COS存储桶，详见产品支持的[存储桶命名规范](https://cloud.tencent.com/document/product/436/13312)。	

- 通过[GET Service（List Buckets）](https://cloud.tencent.com/document/product/436/8291)获取COS存储桶。
     * @param string $Prefix 投递规则投递的新的目录前缀。
- 仅支持0-9A-Za-z-_/
- 最大支持256个字符
     * @param boolean $Status 投递规则的开关状态。true：开启投递任务；false：关闭投递任务。
     * @param string $ShipperName 投递规则的名字
     * @param integer $Interval 投递的时间间隔，单位 秒，默认300，范围 300-900
     * @param integer $MaxSize 投递的文件的最大值，单位 MB，默认256，范围 5-256
     * @param array $FilterRules 投递日志的过滤规则，匹配的日志进行投递，各rule之间是and关系，最多5个，数组为空则表示不过滤而全部投递
     * @param string $Partition 投递日志的分区规则，支持strftime的时间格式表示
     * @param CompressInfo $Compress 投递日志的压缩配置
     * @param ContentInfo $Content 投递日志的内容格式配置
     * @param integer $FilenameMode 投递文件命名配置，0：随机数命名，1：投递时间命名。
     * @param string $StorageType 对象存储类型，默认值为 STANDARD。枚举值请参见[ 存储类型概述](https://cloud.tencent.com/document/product/436/33417) 文档。
参考值有：

- STANDARD：标准存储
- STANDARD_IA：低频存储
- ARCHIVE：归档存储
- DEEP_ARCHIVE：深度归档存储
- MAZ_STANDARD：标准存储（多 AZ）
- MAZ_STANDARD_IA：低频存储（多 AZ）
- INTELLIGENT_TIERING：智能分层存储
- MAZ_INTELLIGENT_TIERING：智能分层存储（多 AZ）
     * @param string $RoleArn 角色访问描述名 [创建角色](https://cloud.tencent.com/document/product/598/19381)
     * @param string $ExternalId 外部ID
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
    }
}
