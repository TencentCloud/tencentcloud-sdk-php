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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 编辑的数据内容
 *
 * @method integer getID() 获取<p>服务器id  (创建时忽略)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(integer $ID) 设置<p>服务器id  (创建时忽略)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>服务器名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>服务器名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取<p>转发服务器地址类型 4:syslog, 2:kafka, 3:http(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置<p>转发服务器地址类型 4:syslog, 2:kafka, 3:http(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>服务器描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>服务器描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetSyslogAddress() 获取<p>syslog服务器地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetSyslogAddress(string $TargetSyslogAddress) 设置<p>syslog服务器地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetSyslogProtocol() 获取<p>syslog协议类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetSyslogProtocol(string $TargetSyslogProtocol) 设置<p>syslog协议类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTargetSyslogPort() 获取<p>syslog协议端口(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetSyslogPort(integer $TargetSyslogPort) 设置<p>syslog协议端口(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSyslogFacility() 获取<p>syslog设备/Facility</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSyslogFacility(string $SyslogFacility) 设置<p>syslog设备/Facility</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetKafkaAddress() 获取<p>Kafka服务器地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetKafkaAddress(string $TargetKafkaAddress) 设置<p>Kafka服务器地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetKafkaTopic() 获取<p>Kafka主题</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetKafkaTopic(string $TargetKafkaTopic) 设置<p>Kafka主题</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKafkaVersion() 获取<p>Kafka版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKafkaVersion(string $KafkaVersion) 设置<p>Kafka版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKafkaSaslUserName() 获取<p>Kafka sasl用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKafkaSaslUserName(string $KafkaSaslUserName) 设置<p>Kafka sasl用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKafkaSaslPassword() 获取<p>Kafka sasl密码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKafkaSaslPassword(string $KafkaSaslPassword) 设置<p>Kafka sasl密码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetHttpUrl() 获取<p>http服务器地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetHttpUrl(string $TargetHttpUrl) 设置<p>http服务器地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTargetHttpTimeout() 获取<p>http服务超时时间(只支持32位)</p><p>单位：毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetHttpTimeout(integer $TargetHttpTimeout) 设置<p>http服务超时时间(只支持32位)</p><p>单位：毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConnectorGroupId() 获取<p>连接器分组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectorGroupId(string $ConnectorGroupId) 设置<p>连接器分组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConnectorGroupName() 获取<p>连接器分组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectorGroupName(string $ConnectorGroupName) 设置<p>连接器分组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getKafkaSSLEnable() 获取<p>KAFKA是否启用SSL</p>
 * @method void setKafkaSSLEnable(boolean $KafkaSSLEnable) 设置<p>KAFKA是否启用SSL</p>
 * @method boolean getSSLSkipVerify() 获取<p>跳过证书检查</p>
 * @method void setSSLSkipVerify(boolean $SSLSkipVerify) 设置<p>跳过证书检查</p>
 */
class DeliverServerItem extends AbstractModel
{
    /**
     * @var integer <p>服务器id  (创建时忽略)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @var string <p>服务器名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer <p>转发服务器地址类型 4:syslog, 2:kafka, 3:http(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string <p>服务器描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string <p>syslog服务器地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetSyslogAddress;

    /**
     * @var string <p>syslog协议类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetSyslogProtocol;

    /**
     * @var integer <p>syslog协议端口(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetSyslogPort;

    /**
     * @var string <p>syslog设备/Facility</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SyslogFacility;

    /**
     * @var string <p>Kafka服务器地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetKafkaAddress;

    /**
     * @var string <p>Kafka主题</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetKafkaTopic;

    /**
     * @var string <p>Kafka版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KafkaVersion;

    /**
     * @var string <p>Kafka sasl用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KafkaSaslUserName;

    /**
     * @var string <p>Kafka sasl密码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KafkaSaslPassword;

    /**
     * @var string <p>http服务器地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetHttpUrl;

    /**
     * @var integer <p>http服务超时时间(只支持32位)</p><p>单位：毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetHttpTimeout;

    /**
     * @var string <p>连接器分组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnectorGroupId;

    /**
     * @var string <p>连接器分组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnectorGroupName;

    /**
     * @var boolean <p>KAFKA是否启用SSL</p>
     */
    public $KafkaSSLEnable;

    /**
     * @var boolean <p>跳过证书检查</p>
     */
    public $SSLSkipVerify;

    /**
     * @param integer $ID <p>服务器id  (创建时忽略)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>服务器名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type <p>转发服务器地址类型 4:syslog, 2:kafka, 3:http(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>服务器描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetSyslogAddress <p>syslog服务器地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetSyslogProtocol <p>syslog协议类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TargetSyslogPort <p>syslog协议端口(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SyslogFacility <p>syslog设备/Facility</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetKafkaAddress <p>Kafka服务器地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetKafkaTopic <p>Kafka主题</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KafkaVersion <p>Kafka版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KafkaSaslUserName <p>Kafka sasl用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KafkaSaslPassword <p>Kafka sasl密码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetHttpUrl <p>http服务器地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TargetHttpTimeout <p>http服务超时时间(只支持32位)</p><p>单位：毫秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConnectorGroupId <p>连接器分组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConnectorGroupName <p>连接器分组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $KafkaSSLEnable <p>KAFKA是否启用SSL</p>
     * @param boolean $SSLSkipVerify <p>跳过证书检查</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TargetSyslogAddress",$param) and $param["TargetSyslogAddress"] !== null) {
            $this->TargetSyslogAddress = $param["TargetSyslogAddress"];
        }

        if (array_key_exists("TargetSyslogProtocol",$param) and $param["TargetSyslogProtocol"] !== null) {
            $this->TargetSyslogProtocol = $param["TargetSyslogProtocol"];
        }

        if (array_key_exists("TargetSyslogPort",$param) and $param["TargetSyslogPort"] !== null) {
            $this->TargetSyslogPort = $param["TargetSyslogPort"];
        }

        if (array_key_exists("SyslogFacility",$param) and $param["SyslogFacility"] !== null) {
            $this->SyslogFacility = $param["SyslogFacility"];
        }

        if (array_key_exists("TargetKafkaAddress",$param) and $param["TargetKafkaAddress"] !== null) {
            $this->TargetKafkaAddress = $param["TargetKafkaAddress"];
        }

        if (array_key_exists("TargetKafkaTopic",$param) and $param["TargetKafkaTopic"] !== null) {
            $this->TargetKafkaTopic = $param["TargetKafkaTopic"];
        }

        if (array_key_exists("KafkaVersion",$param) and $param["KafkaVersion"] !== null) {
            $this->KafkaVersion = $param["KafkaVersion"];
        }

        if (array_key_exists("KafkaSaslUserName",$param) and $param["KafkaSaslUserName"] !== null) {
            $this->KafkaSaslUserName = $param["KafkaSaslUserName"];
        }

        if (array_key_exists("KafkaSaslPassword",$param) and $param["KafkaSaslPassword"] !== null) {
            $this->KafkaSaslPassword = $param["KafkaSaslPassword"];
        }

        if (array_key_exists("TargetHttpUrl",$param) and $param["TargetHttpUrl"] !== null) {
            $this->TargetHttpUrl = $param["TargetHttpUrl"];
        }

        if (array_key_exists("TargetHttpTimeout",$param) and $param["TargetHttpTimeout"] !== null) {
            $this->TargetHttpTimeout = $param["TargetHttpTimeout"];
        }

        if (array_key_exists("ConnectorGroupId",$param) and $param["ConnectorGroupId"] !== null) {
            $this->ConnectorGroupId = $param["ConnectorGroupId"];
        }

        if (array_key_exists("ConnectorGroupName",$param) and $param["ConnectorGroupName"] !== null) {
            $this->ConnectorGroupName = $param["ConnectorGroupName"];
        }

        if (array_key_exists("KafkaSSLEnable",$param) and $param["KafkaSSLEnable"] !== null) {
            $this->KafkaSSLEnable = $param["KafkaSSLEnable"];
        }

        if (array_key_exists("SSLSkipVerify",$param) and $param["SSLSkipVerify"] !== null) {
            $this->SSLSkipVerify = $param["SSLSkipVerify"];
        }
    }
}
