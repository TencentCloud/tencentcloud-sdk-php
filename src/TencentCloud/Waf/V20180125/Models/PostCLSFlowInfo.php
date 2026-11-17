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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CKafka投递流
 *
 * @method integer getFlowId() 获取<p>投递流唯一ID</p>
 * @method void setFlowId(integer $FlowId) 设置<p>投递流唯一ID</p>
 * @method integer getLogType() 获取<p>1-访问日志 2-攻击日志</p>
 * @method void setLogType(integer $LogType) 设置<p>1-访问日志 2-攻击日志</p>
 * @method integer getStatus() 获取<p>状态 0-为关闭 1-为启用</p>
 * @method void setStatus(integer $Status) 设置<p>状态 0-为关闭 1-为启用</p>
 * @method string getCLSRegion() 获取<p>CLS所在区域</p>
 * @method void setCLSRegion(string $CLSRegion) 设置<p>CLS所在区域</p>
 * @method string getLogsetName() 获取<p>CLS日志集合名称</p>
 * @method void setLogsetName(string $LogsetName) 设置<p>CLS日志集合名称</p>
 * @method string getLogsetID() 获取<p>CLS日志集合ID</p>
 * @method void setLogsetID(string $LogsetID) 设置<p>CLS日志集合ID</p>
 * @method string getLogTopicName() 获取<p>CLS日志主题名称</p>
 * @method void setLogTopicName(string $LogTopicName) 设置<p>CLS日志主题名称</p>
 * @method string getLogTopicID() 获取<p>CLS日志集合ID</p>
 * @method void setLogTopicID(string $LogTopicID) 设置<p>CLS日志集合ID</p>
 * @method FieldWriteConfig getWriteConfig() 获取<p>写配置</p>
 * @method void setWriteConfig(FieldWriteConfig $WriteConfig) 设置<p>写配置</p>
 */
class PostCLSFlowInfo extends AbstractModel
{
    /**
     * @var integer <p>投递流唯一ID</p>
     */
    public $FlowId;

    /**
     * @var integer <p>1-访问日志 2-攻击日志</p>
     */
    public $LogType;

    /**
     * @var integer <p>状态 0-为关闭 1-为启用</p>
     */
    public $Status;

    /**
     * @var string <p>CLS所在区域</p>
     */
    public $CLSRegion;

    /**
     * @var string <p>CLS日志集合名称</p>
     */
    public $LogsetName;

    /**
     * @var string <p>CLS日志集合ID</p>
     */
    public $LogsetID;

    /**
     * @var string <p>CLS日志主题名称</p>
     */
    public $LogTopicName;

    /**
     * @var string <p>CLS日志集合ID</p>
     */
    public $LogTopicID;

    /**
     * @var FieldWriteConfig <p>写配置</p>
     */
    public $WriteConfig;

    /**
     * @param integer $FlowId <p>投递流唯一ID</p>
     * @param integer $LogType <p>1-访问日志 2-攻击日志</p>
     * @param integer $Status <p>状态 0-为关闭 1-为启用</p>
     * @param string $CLSRegion <p>CLS所在区域</p>
     * @param string $LogsetName <p>CLS日志集合名称</p>
     * @param string $LogsetID <p>CLS日志集合ID</p>
     * @param string $LogTopicName <p>CLS日志主题名称</p>
     * @param string $LogTopicID <p>CLS日志集合ID</p>
     * @param FieldWriteConfig $WriteConfig <p>写配置</p>
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CLSRegion",$param) and $param["CLSRegion"] !== null) {
            $this->CLSRegion = $param["CLSRegion"];
        }

        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }

        if (array_key_exists("LogsetID",$param) and $param["LogsetID"] !== null) {
            $this->LogsetID = $param["LogsetID"];
        }

        if (array_key_exists("LogTopicName",$param) and $param["LogTopicName"] !== null) {
            $this->LogTopicName = $param["LogTopicName"];
        }

        if (array_key_exists("LogTopicID",$param) and $param["LogTopicID"] !== null) {
            $this->LogTopicID = $param["LogTopicID"];
        }

        if (array_key_exists("WriteConfig",$param) and $param["WriteConfig"] !== null) {
            $this->WriteConfig = new FieldWriteConfig();
            $this->WriteConfig->deserialize($param["WriteConfig"]);
        }
    }
}
