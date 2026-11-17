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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Kong Upstream中的Target
 *
 * @method string getHost() 获取<p>目标主机地址</p>
 * @method void setHost(string $Host) 设置<p>目标主机地址</p>
 * @method integer getPort() 获取<p>端口</p>
 * @method void setPort(integer $Port) 设置<p>端口</p>
 * @method integer getWeight() 获取<p>权重</p>
 * @method void setWeight(integer $Weight) 设置<p>权重</p>
 * @method string getCreatedTime() 获取<p>创建时间</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间</p>
 * @method string getCvmInstanceId() 获取<p>CVM实例ID</p>
 * @method void setCvmInstanceId(string $CvmInstanceId) 设置<p>CVM实例ID</p>
 * @method string getCvmInstanceName() 获取<p>CVM实例名称</p>
 * @method void setCvmInstanceName(string $CvmInstanceName) 设置<p>CVM实例名称</p>
 * @method string getHealth() 获取<p>健康状态</p>
 * @method void setHealth(string $Health) 设置<p>健康状态</p>
 * @method string getId() 获取<p>Target ID</p>
 * @method void setId(string $Id) 设置<p>Target ID</p>
 * @method string getSource() 获取<p>Target的来源</p>
 * @method void setSource(string $Source) 设置<p>Target的来源</p>
 * @method array getTags() 获取<p>target标签</p>
 * @method void setTags(array $Tags) 设置<p>target标签</p>
 */
class KongTarget extends AbstractModel
{
    /**
     * @var string <p>目标主机地址</p>
     */
    public $Host;

    /**
     * @var integer <p>端口</p>
     */
    public $Port;

    /**
     * @var integer <p>权重</p>
     */
    public $Weight;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>CVM实例ID</p>
     */
    public $CvmInstanceId;

    /**
     * @var string <p>CVM实例名称</p>
     */
    public $CvmInstanceName;

    /**
     * @var string <p>健康状态</p>
     */
    public $Health;

    /**
     * @var string <p>Target ID</p>
     */
    public $Id;

    /**
     * @var string <p>Target的来源</p>
     */
    public $Source;

    /**
     * @var array <p>target标签</p>
     */
    public $Tags;

    /**
     * @param string $Host <p>目标主机地址</p>
     * @param integer $Port <p>端口</p>
     * @param integer $Weight <p>权重</p>
     * @param string $CreatedTime <p>创建时间</p>
     * @param string $CvmInstanceId <p>CVM实例ID</p>
     * @param string $CvmInstanceName <p>CVM实例名称</p>
     * @param string $Health <p>健康状态</p>
     * @param string $Id <p>Target ID</p>
     * @param string $Source <p>Target的来源</p>
     * @param array $Tags <p>target标签</p>
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

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("CvmInstanceId",$param) and $param["CvmInstanceId"] !== null) {
            $this->CvmInstanceId = $param["CvmInstanceId"];
        }

        if (array_key_exists("CvmInstanceName",$param) and $param["CvmInstanceName"] !== null) {
            $this->CvmInstanceName = $param["CvmInstanceName"];
        }

        if (array_key_exists("Health",$param) and $param["Health"] !== null) {
            $this->Health = $param["Health"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
