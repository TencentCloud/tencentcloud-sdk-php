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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS防护分区
 *
 * @method string getZoneId() 获取一级域名id
 * @method void setZoneId(string $ZoneId) 设置一级域名id
 * @method integer getPolicyId() 获取策略id
 * @method void setPolicyId(integer $PolicyId) 设置策略id
 * @method string getType() 获取防护类型 domain/application
 * @method void setType(string $Type) 设置防护类型 domain/application
 * @method string getEntityName() 获取四层应用名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEntityName(string $EntityName) 设置四层应用名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getApplication() 获取7层域名参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplication(array $Application) 设置7层域名参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTcpNum() 获取四层tcp转发规则数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTcpNum(integer $TcpNum) 设置四层tcp转发规则数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUdpNum() 获取四层udp转发规则数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUdpNum(integer $UdpNum) 设置四层udp转发规则数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEntity() 获取实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEntity(string $Entity) 设置实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getShare() 获取是否为共享资源客户，注意共享资源用户不可以切换代理模式，true-是；false-否
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShare(boolean $Share) 设置是否为共享资源客户，注意共享资源用户不可以切换代理模式，true-是；false-否
注意：此字段可能返回 null，表示取不到有效值。
 */
class ShieldArea extends AbstractModel
{
    /**
     * @var string 一级域名id
     */
    public $ZoneId;

    /**
     * @var integer 策略id
     */
    public $PolicyId;

    /**
     * @var string 防护类型 domain/application
     */
    public $Type;

    /**
     * @var string 四层应用名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EntityName;

    /**
     * @var array 7层域名参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Application;

    /**
     * @var integer 四层tcp转发规则数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TcpNum;

    /**
     * @var integer 四层udp转发规则数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UdpNum;

    /**
     * @var string 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Entity;

    /**
     * @var boolean 是否为共享资源客户，注意共享资源用户不可以切换代理模式，true-是；false-否
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Share;

    /**
     * @param string $ZoneId 一级域名id
     * @param integer $PolicyId 策略id
     * @param string $Type 防护类型 domain/application
     * @param string $EntityName 四层应用名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Application 7层域名参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TcpNum 四层tcp转发规则数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UdpNum 四层udp转发规则数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Entity 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Share 是否为共享资源客户，注意共享资源用户不可以切换代理模式，true-是；false-否
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("EntityName",$param) and $param["EntityName"] !== null) {
            $this->EntityName = $param["EntityName"];
        }

        if (array_key_exists("Application",$param) and $param["Application"] !== null) {
            $this->Application = [];
            foreach ($param["Application"] as $key => $value){
                $obj = new DDoSApplication();
                $obj->deserialize($value);
                array_push($this->Application, $obj);
            }
        }

        if (array_key_exists("TcpNum",$param) and $param["TcpNum"] !== null) {
            $this->TcpNum = $param["TcpNum"];
        }

        if (array_key_exists("UdpNum",$param) and $param["UdpNum"] !== null) {
            $this->UdpNum = $param["UdpNum"];
        }

        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }

        if (array_key_exists("Share",$param) and $param["Share"] !== null) {
            $this->Share = $param["Share"];
        }
    }
}
