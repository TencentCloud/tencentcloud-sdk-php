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
 * @method string getFileSystemId() 获取文件系统 ID ，通过查询文件系统 [DescribeCfsFileSystems](https://cloud.tencent.com/document/product/582/38170) 获取
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统 ID ，通过查询文件系统 [DescribeCfsFileSystems](https://cloud.tencent.com/document/product/582/38170) 获取
 * @method string getSourceStorageType() 获取源端数据类型；包含S3_COS，S3_L5 
 * @method void setSourceStorageType(string $SourceStorageType) 设置源端数据类型；包含S3_COS，S3_L5 
 * @method string getSourceStorageAddress() 获取源端存储地址
 * @method void setSourceStorageAddress(string $SourceStorageAddress) 设置源端存储地址
 * @method string getSourcePath() 获取源端路径
 * @method void setSourcePath(string $SourcePath) 设置源端路径
 * @method string getTargetPath() 获取文件系统内目标路径
 * @method void setTargetPath(string $TargetPath) 设置文件系统内目标路径
 * @method string getSecretId() 获取密钥 ID
 * @method void setSecretId(string $SecretId) 设置密钥 ID
 * @method string getSecretKey() 获取密钥 key
 * @method void setSecretKey(string $SecretKey) 设置密钥 key
 * @method string getDataFlowName() 获取数据流动名称；支持不超过64字符长度，支持中文、数字、_、-
 * @method void setDataFlowName(string $DataFlowName) 设置数据流动名称；支持不超过64字符长度，支持中文、数字、_、-
 * @method integer getAutoRefresh() 获取 0：不开启自动更新  1：开启自动更新
 * @method void setAutoRefresh(integer $AutoRefresh) 设置 0：不开启自动更新  1：开启自动更新
 * @method string getUserKafkaTopic() 获取KafkaConsumer 消费时使用的Topic参数
 * @method void setUserKafkaTopic(string $UserKafkaTopic) 设置KafkaConsumer 消费时使用的Topic参数
 * @method string getServerAddr() 获取	服务地址 示例值：kafkaconsumer-ap-beijing.cls.tencentyun.com:9095
 * @method void setServerAddr(string $ServerAddr) 设置	服务地址 示例值：kafkaconsumer-ap-beijing.cls.tencentyun.com:9095
 * @method string getUserName() 获取Kafka消费用户名.示例值：name
 * @method void setUserName(string $UserName) 设置Kafka消费用户名.示例值：name
 * @method string getPassword() 获取Kafka消费用户密码。默认${SecretId}#${SecretKey}。
 * @method void setPassword(string $Password) 设置Kafka消费用户密码。默认${SecretId}#${SecretKey}。
 */
class CreateDataFlowRequest extends AbstractModel
{
    /**
     * @var string 文件系统 ID ，通过查询文件系统 [DescribeCfsFileSystems](https://cloud.tencent.com/document/product/582/38170) 获取
     */
    public $FileSystemId;

    /**
     * @var string 源端数据类型；包含S3_COS，S3_L5 
     */
    public $SourceStorageType;

    /**
     * @var string 源端存储地址
     */
    public $SourceStorageAddress;

    /**
     * @var string 源端路径
     */
    public $SourcePath;

    /**
     * @var string 文件系统内目标路径
     */
    public $TargetPath;

    /**
     * @var string 密钥 ID
     */
    public $SecretId;

    /**
     * @var string 密钥 key
     */
    public $SecretKey;

    /**
     * @var string 数据流动名称；支持不超过64字符长度，支持中文、数字、_、-
     */
    public $DataFlowName;

    /**
     * @var integer  0：不开启自动更新  1：开启自动更新
     */
    public $AutoRefresh;

    /**
     * @var string KafkaConsumer 消费时使用的Topic参数
     */
    public $UserKafkaTopic;

    /**
     * @var string 	服务地址 示例值：kafkaconsumer-ap-beijing.cls.tencentyun.com:9095
     */
    public $ServerAddr;

    /**
     * @var string Kafka消费用户名.示例值：name
     */
    public $UserName;

    /**
     * @var string Kafka消费用户密码。默认${SecretId}#${SecretKey}。
     */
    public $Password;

    /**
     * @param string $FileSystemId 文件系统 ID ，通过查询文件系统 [DescribeCfsFileSystems](https://cloud.tencent.com/document/product/582/38170) 获取
     * @param string $SourceStorageType 源端数据类型；包含S3_COS，S3_L5 
     * @param string $SourceStorageAddress 源端存储地址
     * @param string $SourcePath 源端路径
     * @param string $TargetPath 文件系统内目标路径
     * @param string $SecretId 密钥 ID
     * @param string $SecretKey 密钥 key
     * @param string $DataFlowName 数据流动名称；支持不超过64字符长度，支持中文、数字、_、-
     * @param integer $AutoRefresh  0：不开启自动更新  1：开启自动更新
     * @param string $UserKafkaTopic KafkaConsumer 消费时使用的Topic参数
     * @param string $ServerAddr 	服务地址 示例值：kafkaconsumer-ap-beijing.cls.tencentyun.com:9095
     * @param string $UserName Kafka消费用户名.示例值：name
     * @param string $Password Kafka消费用户密码。默认${SecretId}#${SecretKey}。
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
