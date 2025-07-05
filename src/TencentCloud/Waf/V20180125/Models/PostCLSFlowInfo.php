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
 * @method integer getFlowId() 获取投递流唯一ID
 * @method void setFlowId(integer $FlowId) 设置投递流唯一ID
 * @method integer getLogType() 获取1-访问日志 2-攻击日志
 * @method void setLogType(integer $LogType) 设置1-访问日志 2-攻击日志
 * @method integer getStatus() 获取状态 0-为关闭 1-为启用
 * @method void setStatus(integer $Status) 设置状态 0-为关闭 1-为启用
 * @method string getCLSRegion() 获取CLS所在区域
 * @method void setCLSRegion(string $CLSRegion) 设置CLS所在区域
 * @method string getLogsetName() 获取CLS日志集合名称
 * @method void setLogsetName(string $LogsetName) 设置CLS日志集合名称
 * @method string getLogsetID() 获取CLS日志集合ID
 * @method void setLogsetID(string $LogsetID) 设置CLS日志集合ID
 * @method string getLogTopicName() 获取CLS日志主题名称
 * @method void setLogTopicName(string $LogTopicName) 设置CLS日志主题名称
 * @method string getLogTopicID() 获取CLS日志集合ID
 * @method void setLogTopicID(string $LogTopicID) 设置CLS日志集合ID
 */
class PostCLSFlowInfo extends AbstractModel
{
    /**
     * @var integer 投递流唯一ID
     */
    public $FlowId;

    /**
     * @var integer 1-访问日志 2-攻击日志
     */
    public $LogType;

    /**
     * @var integer 状态 0-为关闭 1-为启用
     */
    public $Status;

    /**
     * @var string CLS所在区域
     */
    public $CLSRegion;

    /**
     * @var string CLS日志集合名称
     */
    public $LogsetName;

    /**
     * @var string CLS日志集合ID
     */
    public $LogsetID;

    /**
     * @var string CLS日志主题名称
     */
    public $LogTopicName;

    /**
     * @var string CLS日志集合ID
     */
    public $LogTopicID;

    /**
     * @param integer $FlowId 投递流唯一ID
     * @param integer $LogType 1-访问日志 2-攻击日志
     * @param integer $Status 状态 0-为关闭 1-为启用
     * @param string $CLSRegion CLS所在区域
     * @param string $LogsetName CLS日志集合名称
     * @param string $LogsetID CLS日志集合ID
     * @param string $LogTopicName CLS日志主题名称
     * @param string $LogTopicID CLS日志集合ID
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
    }
}
