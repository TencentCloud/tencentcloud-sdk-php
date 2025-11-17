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
 * ModifyDataFlow请求参数结构体
 *
 * @method string getDataFlowId() 获取数据流动管理 ID ，通过查询数据流动接口获取
 * @method void setDataFlowId(string $DataFlowId) 设置数据流动管理 ID ，通过查询数据流动接口获取
 * @method string getFileSystemId() 获取文件系统 ID ，通过查询文件系统 [DescribeCfsFileSystems](https://cloud.tencent.com/document/product/582/38170) 获取
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统 ID ，通过查询文件系统 [DescribeCfsFileSystems](https://cloud.tencent.com/document/product/582/38170) 获取
 * @method string getDataFlowName() 获取数据流动名称；支持不超过64字符长度，支持中文、数字、_、-
 * @method void setDataFlowName(string $DataFlowName) 设置数据流动名称；支持不超过64字符长度，支持中文、数字、_、-
 * @method string getSecretId() 获取密钥 ID
 * @method void setSecretId(string $SecretId) 设置密钥 ID
 * @method string getSecretKey() 获取密钥 key
 * @method void setSecretKey(string $SecretKey) 设置密钥 key
 * @method string getUserKafkaTopic() 获取KafkaConsumer 消费时使用的Topic参数
 * @method void setUserKafkaTopic(string $UserKafkaTopic) 设置KafkaConsumer 消费时使用的Topic参数
 * @method string getServerAddr() 获取服务地址
 * @method void setServerAddr(string $ServerAddr) 设置服务地址
 * @method string getUserName() 获取name
 * @method void setUserName(string $UserName) 设置name
 * @method string getPassword() 获取Kafka消费用户密码
 * @method void setPassword(string $Password) 设置Kafka消费用户密码
 * @method integer getAutoRefresh() 获取元数据增量更新开关；1开启，0关闭
 * @method void setAutoRefresh(integer $AutoRefresh) 设置元数据增量更新开关；1开启，0关闭
 */
class ModifyDataFlowRequest extends AbstractModel
{
    /**
     * @var string 数据流动管理 ID ，通过查询数据流动接口获取
     */
    public $DataFlowId;

    /**
     * @var string 文件系统 ID ，通过查询文件系统 [DescribeCfsFileSystems](https://cloud.tencent.com/document/product/582/38170) 获取
     */
    public $FileSystemId;

    /**
     * @var string 数据流动名称；支持不超过64字符长度，支持中文、数字、_、-
     */
    public $DataFlowName;

    /**
     * @var string 密钥 ID
     */
    public $SecretId;

    /**
     * @var string 密钥 key
     */
    public $SecretKey;

    /**
     * @var string KafkaConsumer 消费时使用的Topic参数
     */
    public $UserKafkaTopic;

    /**
     * @var string 服务地址
     */
    public $ServerAddr;

    /**
     * @var string name
     */
    public $UserName;

    /**
     * @var string Kafka消费用户密码
     */
    public $Password;

    /**
     * @var integer 元数据增量更新开关；1开启，0关闭
     */
    public $AutoRefresh;

    /**
     * @param string $DataFlowId 数据流动管理 ID ，通过查询数据流动接口获取
     * @param string $FileSystemId 文件系统 ID ，通过查询文件系统 [DescribeCfsFileSystems](https://cloud.tencent.com/document/product/582/38170) 获取
     * @param string $DataFlowName 数据流动名称；支持不超过64字符长度，支持中文、数字、_、-
     * @param string $SecretId 密钥 ID
     * @param string $SecretKey 密钥 key
     * @param string $UserKafkaTopic KafkaConsumer 消费时使用的Topic参数
     * @param string $ServerAddr 服务地址
     * @param string $UserName name
     * @param string $Password Kafka消费用户密码
     * @param integer $AutoRefresh 元数据增量更新开关；1开启，0关闭
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
        if (array_key_exists("DataFlowId",$param) and $param["DataFlowId"] !== null) {
            $this->DataFlowId = $param["DataFlowId"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("DataFlowName",$param) and $param["DataFlowName"] !== null) {
            $this->DataFlowName = $param["DataFlowName"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
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

        if (array_key_exists("AutoRefresh",$param) and $param["AutoRefresh"] !== null) {
            $this->AutoRefresh = $param["AutoRefresh"];
        }
    }
}
