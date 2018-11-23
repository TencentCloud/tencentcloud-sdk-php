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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取要操作的实例ID
 * @method void setInstanceId(string $InstanceId) 设置要操作的实例ID
 * @method string getInstanceName() 获取修改后的实例名称, 1-50 个英文、汉字、数字、连接线-或下划线_
 * @method void setInstanceName(string $InstanceName) 设置修改后的实例名称, 1-50 个英文、汉字、数字、连接线-或下划线_
 * @method integer getNodeNum() 获取横向扩缩容后的节点个数
 * @method void setNodeNum(integer $NodeNum) 设置横向扩缩容后的节点个数
 * @method string getEsConfig() 获取修改后的配置项, JSON格式字符串
 * @method void setEsConfig(string $EsConfig) 设置修改后的配置项, JSON格式字符串
 * @method string getPassword() 获取重置后的Kibana密码, 8到16位，至少包括两项（[a-z,A-Z],[0-9]和[-!@#$%&^*+=_:;,.?]的特殊符号
 * @method void setPassword(string $Password) 设置重置后的Kibana密码, 8到16位，至少包括两项（[a-z,A-Z],[0-9]和[-!@#$%&^*+=_:;,.?]的特殊符号
 * @method EsAcl getEsAcl() 获取修改后的访问控制列表
 * @method void setEsAcl(EsAcl $EsAcl) 设置修改后的访问控制列表
 * @method integer getDiskSize() 获取磁盘大小,单位GB
 * @method void setDiskSize(integer $DiskSize) 设置磁盘大小,单位GB
 * @method string getNodeType() 获取节点规格: 
ES.S1.SMALL2: 1 核 2G
ES.S1.MEDIUM4: 2 核 4G 
ES.S1.MEDIUM8: 2 核 8G 
ES.S1.LARGE16: 4 核 16G 
ES.S1.2XLARGE32: 8 核 32G 
ES.S1.4XLARGE64: 16 核 64G
 * @method void setNodeType(string $NodeType) 设置节点规格: 
ES.S1.SMALL2: 1 核 2G
ES.S1.MEDIUM4: 2 核 4G 
ES.S1.MEDIUM8: 2 核 8G 
ES.S1.LARGE16: 4 核 16G 
ES.S1.2XLARGE32: 8 核 32G 
ES.S1.4XLARGE64: 16 核 64G
 */

/**
 *UpdateInstance请求参数结构体
 */
class UpdateInstanceRequest extends AbstractModel
{
    /**
     * @var string 要操作的实例ID
     */
    public $InstanceId;

    /**
     * @var string 修改后的实例名称, 1-50 个英文、汉字、数字、连接线-或下划线_
     */
    public $InstanceName;

    /**
     * @var integer 横向扩缩容后的节点个数
     */
    public $NodeNum;

    /**
     * @var string 修改后的配置项, JSON格式字符串
     */
    public $EsConfig;

    /**
     * @var string 重置后的Kibana密码, 8到16位，至少包括两项（[a-z,A-Z],[0-9]和[-!@#$%&^*+=_:;,.?]的特殊符号
     */
    public $Password;

    /**
     * @var EsAcl 修改后的访问控制列表
     */
    public $EsAcl;

    /**
     * @var integer 磁盘大小,单位GB
     */
    public $DiskSize;

    /**
     * @var string 节点规格: 
ES.S1.SMALL2: 1 核 2G
ES.S1.MEDIUM4: 2 核 4G 
ES.S1.MEDIUM8: 2 核 8G 
ES.S1.LARGE16: 4 核 16G 
ES.S1.2XLARGE32: 8 核 32G 
ES.S1.4XLARGE64: 16 核 64G
     */
    public $NodeType;
    /**
     * @param string $InstanceId 要操作的实例ID
     * @param string $InstanceName 修改后的实例名称, 1-50 个英文、汉字、数字、连接线-或下划线_
     * @param integer $NodeNum 横向扩缩容后的节点个数
     * @param string $EsConfig 修改后的配置项, JSON格式字符串
     * @param string $Password 重置后的Kibana密码, 8到16位，至少包括两项（[a-z,A-Z],[0-9]和[-!@#$%&^*+=_:;,.?]的特殊符号
     * @param EsAcl $EsAcl 修改后的访问控制列表
     * @param integer $DiskSize 磁盘大小,单位GB
     * @param string $NodeType 节点规格: 
ES.S1.SMALL2: 1 核 2G
ES.S1.MEDIUM4: 2 核 4G 
ES.S1.MEDIUM8: 2 核 8G 
ES.S1.LARGE16: 4 核 16G 
ES.S1.2XLARGE32: 8 核 32G 
ES.S1.4XLARGE64: 16 核 64G
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("EsConfig",$param) and $param["EsConfig"] !== null) {
            $this->EsConfig = $param["EsConfig"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("EsAcl",$param) and $param["EsAcl"] !== null) {
            $this->EsAcl = new EsAcl();
            $this->EsAcl->deserialize($param["EsAcl"]);
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }
    }
}
