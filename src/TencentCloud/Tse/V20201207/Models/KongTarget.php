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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Kong Upstream中的Target
 *
 * @method string getHost() 获取Host
 * @method void setHost(string $Host) 设置Host
 * @method integer getPort() 获取端口
 * @method void setPort(integer $Port) 设置端口
 * @method integer getWeight() 获取权重
 * @method void setWeight(integer $Weight) 设置权重
 * @method string getHealth() 获取健康状态
 * @method void setHealth(string $Health) 设置健康状态
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method string getSource() 获取Target的来源
 * @method void setSource(string $Source) 设置Target的来源
 * @method string getCvmInstanceId() 获取CVM实例ID
 * @method void setCvmInstanceId(string $CvmInstanceId) 设置CVM实例ID
 * @method string getCvmInstanceName() 获取CVM实例名称
 * @method void setCvmInstanceName(string $CvmInstanceName) 设置CVM实例名称
 * @method array getTags() 获取target标签
 * @method void setTags(array $Tags) 设置target标签
 */
class KongTarget extends AbstractModel
{
    /**
     * @var string Host
     */
    public $Host;

    /**
     * @var integer 端口
     */
    public $Port;

    /**
     * @var integer 权重
     */
    public $Weight;

    /**
     * @var string 健康状态
     */
    public $Health;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var string Target的来源
     */
    public $Source;

    /**
     * @var string CVM实例ID
     */
    public $CvmInstanceId;

    /**
     * @var string CVM实例名称
     */
    public $CvmInstanceName;

    /**
     * @var array target标签
     */
    public $Tags;

    /**
     * @param string $Host Host
     * @param integer $Port 端口
     * @param integer $Weight 权重
     * @param string $Health 健康状态
     * @param string $CreatedTime 创建时间
     * @param string $Source Target的来源
     * @param string $CvmInstanceId CVM实例ID
     * @param string $CvmInstanceName CVM实例名称
     * @param array $Tags target标签
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Health",$param) and $param["Health"] !== null) {
            $this->Health = $param["Health"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("CvmInstanceId",$param) and $param["CvmInstanceId"] !== null) {
            $this->CvmInstanceId = $param["CvmInstanceId"];
        }

        if (array_key_exists("CvmInstanceName",$param) and $param["CvmInstanceName"] !== null) {
            $this->CvmInstanceName = $param["CvmInstanceName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
