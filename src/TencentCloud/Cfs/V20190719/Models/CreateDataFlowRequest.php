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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDataFlow请求参数结构体
 *
 * @method string getFileSystemId() 获取<p>文件系统 ID ，通过查询文件系统 <a href="https://cloud.tencent.com/document/product/582/38170">DescribeCfsFileSystems</a> 获取</p>
 * @method void setFileSystemId(string $FileSystemId) 设置<p>文件系统 ID ，通过查询文件系统 <a href="https://cloud.tencent.com/document/product/582/38170">DescribeCfsFileSystems</a> 获取</p>
 * @method string getSourceStorageType() 获取<p>源端数据类型；包含S3_COS，S3_L5</p>
 * @method void setSourceStorageType(string $SourceStorageType) 设置<p>源端数据类型；包含S3_COS，S3_L5</p>
 * @method string getSourceStorageAddress() 获取<p>源端存储地址</p>
 * @method void setSourceStorageAddress(string $SourceStorageAddress) 设置<p>源端存储地址</p>
 * @method string getSourcePath() 获取<p>源端路径</p>
 * @method void setSourcePath(string $SourcePath) 设置<p>源端路径</p>
 * @method string getTargetPath() 获取<p>设置数据流动时指定的文件系统内目标路径，必须以 /cfs/ 开头，代表文件存储实例内部的逻辑路径，而非本地挂载点路径。<br>示例：</p><ul><li>若挂载的是CFS根目录 /，需将对象存储上的源端目录与挂载路径下的 test1/test2 建立映射关系，则入参值为 /cfs/test1/test2</li><li>若挂载的是CFS子目录 /subdir，需将对象存储上的源端目录与挂载路径下的 test1/test2 建立映射关系，则入参值为 /cfs/subdir/test1/test2</li></ul>
 * @method void setTargetPath(string $TargetPath) 设置<p>设置数据流动时指定的文件系统内目标路径，必须以 /cfs/ 开头，代表文件存储实例内部的逻辑路径，而非本地挂载点路径。<br>示例：</p><ul><li>若挂载的是CFS根目录 /，需将对象存储上的源端目录与挂载路径下的 test1/test2 建立映射关系，则入参值为 /cfs/test1/test2</li><li>若挂载的是CFS子目录 /subdir，需将对象存储上的源端目录与挂载路径下的 test1/test2 建立映射关系，则入参值为 /cfs/subdir/test1/test2</li></ul>
 * @method string getSecretId() 获取<p>密钥 ID</p>
 * @method void setSecretId(string $SecretId) 设置<p>密钥 ID</p>
 * @method string getSecretKey() 获取<p>密钥 key</p>
 * @method void setSecretKey(string $SecretKey) 设置<p>密钥 key</p>
 * @method string getDataFlowName() 获取<p>数据流动名称；支持不超过64字符长度，支持中文、数字、_、-</p>
 * @method void setDataFlowName(string $DataFlowName) 设置<p>数据流动名称；支持不超过64字符长度，支持中文、数字、_、-</p>
 * @method integer getAutoRefresh() 获取<p>0：不开启自动更新  1：开启自动更新</p>
 * @method void setAutoRefresh(integer $AutoRefresh) 设置<p>0：不开启自动更新  1：开启自动更新</p>
 * @method string getUserKafkaTopic() 获取<p>KafkaConsumer 消费时使用的Topic参数</p>
 * @method void setUserKafkaTopic(string $UserKafkaTopic) 设置<p>KafkaConsumer 消费时使用的Topic参数</p>
 * @method string getServerAddr() 获取<p>服务地址 示例值：kafkaconsumer-ap-beijing.cls.tencentyun.com:9095</p>
 * @method void setServerAddr(string $ServerAddr) 设置<p>服务地址 示例值：kafkaconsumer-ap-beijing.cls.tencentyun.com:9095</p>
 * @method string getUserName() 获取<p>Kafka消费用户名.示例值：name</p>
 * @method void setUserName(string $UserName) 设置<p>Kafka消费用户名.示例值：name</p>
 * @method string getPassword() 获取<p>Kafka消费用户密码。默认${SecretId}#${SecretKey}。</p>
 * @method void setPassword(string $Password) 设置<p>Kafka消费用户密码。默认${SecretId}#${SecretKey}。</p>
 */
class CreateDataFlowRequest extends AbstractModel
{
    /**
     * @var string <p>文件系统 ID ，通过查询文件系统 <a href="https://cloud.tencent.com/document/product/582/38170">DescribeCfsFileSystems</a> 获取</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>源端数据类型；包含S3_COS，S3_L5</p>
     */
    public $SourceStorageType;

    /**
     * @var string <p>源端存储地址</p>
     */
    public $SourceStorageAddress;

    /**
     * @var string <p>源端路径</p>
     */
    public $SourcePath;

    /**
     * @var string <p>设置数据流动时指定的文件系统内目标路径，必须以 /cfs/ 开头，代表文件存储实例内部的逻辑路径，而非本地挂载点路径。<br>示例：</p><ul><li>若挂载的是CFS根目录 /，需将对象存储上的源端目录与挂载路径下的 test1/test2 建立映射关系，则入参值为 /cfs/test1/test2</li><li>若挂载的是CFS子目录 /subdir，需将对象存储上的源端目录与挂载路径下的 test1/test2 建立映射关系，则入参值为 /cfs/subdir/test1/test2</li></ul>
     */
    public $TargetPath;

    /**
     * @var string <p>密钥 ID</p>
     */
    public $SecretId;

    /**
     * @var string <p>密钥 key</p>
     */
    public $SecretKey;

    /**
     * @var string <p>数据流动名称；支持不超过64字符长度，支持中文、数字、_、-</p>
     */
    public $DataFlowName;

    /**
     * @var integer <p>0：不开启自动更新  1：开启自动更新</p>
     */
    public $AutoRefresh;

    /**
     * @var string <p>KafkaConsumer 消费时使用的Topic参数</p>
     */
    public $UserKafkaTopic;

    /**
     * @var string <p>服务地址 示例值：kafkaconsumer-ap-beijing.cls.tencentyun.com:9095</p>
     */
    public $ServerAddr;

    /**
     * @var string <p>Kafka消费用户名.示例值：name</p>
     */
    public $UserName;

    /**
     * @var string <p>Kafka消费用户密码。默认${SecretId}#${SecretKey}。</p>
     */
    public $Password;

    /**
     * @param string $FileSystemId <p>文件系统 ID ，通过查询文件系统 <a href="https://cloud.tencent.com/document/product/582/38170">DescribeCfsFileSystems</a> 获取</p>
     * @param string $SourceStorageType <p>源端数据类型；包含S3_COS，S3_L5</p>
     * @param string $SourceStorageAddress <p>源端存储地址</p>
     * @param string $SourcePath <p>源端路径</p>
     * @param string $TargetPath <p>设置数据流动时指定的文件系统内目标路径，必须以 /cfs/ 开头，代表文件存储实例内部的逻辑路径，而非本地挂载点路径。<br>示例：</p><ul><li>若挂载的是CFS根目录 /，需将对象存储上的源端目录与挂载路径下的 test1/test2 建立映射关系，则入参值为 /cfs/test1/test2</li><li>若挂载的是CFS子目录 /subdir，需将对象存储上的源端目录与挂载路径下的 test1/test2 建立映射关系，则入参值为 /cfs/subdir/test1/test2</li></ul>
     * @param string $SecretId <p>密钥 ID</p>
     * @param string $SecretKey <p>密钥 key</p>
     * @param string $DataFlowName <p>数据流动名称；支持不超过64字符长度，支持中文、数字、_、-</p>
     * @param integer $AutoRefresh <p>0：不开启自动更新  1：开启自动更新</p>
     * @param string $UserKafkaTopic <p>KafkaConsumer 消费时使用的Topic参数</p>
     * @param string $ServerAddr <p>服务地址 示例值：kafkaconsumer-ap-beijing.cls.tencentyun.com:9095</p>
     * @param string $UserName <p>Kafka消费用户名.示例值：name</p>
     * @param string $Password <p>Kafka消费用户密码。默认${SecretId}#${SecretKey}。</p>
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("SourceStorageType",$param) and $param["SourceStorageType"] !== null) {
            $this->SourceStorageType = $param["SourceStorageType"];
        }

        if (array_key_exists("SourceStorageAddress",$param) and $param["SourceStorageAddress"] !== null) {
            $this->SourceStorageAddress = $param["SourceStorageAddress"];
        }

        if (array_key_exists("SourcePath",$param) and $param["SourcePath"] !== null) {
            $this->SourcePath = $param["SourcePath"];
        }

        if (array_key_exists("TargetPath",$param) and $param["TargetPath"] !== null) {
            $this->TargetPath = $param["TargetPath"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("DataFlowName",$param) and $param["DataFlowName"] !== null) {
            $this->DataFlowName = $param["DataFlowName"];
        }

        if (array_key_exists("AutoRefresh",$param) and $param["AutoRefresh"] !== null) {
            $this->AutoRefresh = $param["AutoRefresh"];
        }

        if (array_key_exists("UserKafkaTopic",$param) and $param["UserKafkaTopic"] !== null) {
            $this->UserKafkaTopic = $param["UserKafkaTopic"];
        }

        if (array_key_exists("ServerAddr",$param) and $param["ServerAddr"] !== null) {
            $this->ServerAddr = $param["ServerAddr"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
