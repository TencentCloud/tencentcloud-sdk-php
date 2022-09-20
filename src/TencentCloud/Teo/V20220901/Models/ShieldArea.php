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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS防护分区
 *
 * @method string getZoneId() 获取站点Id。
 * @method void setZoneId(string $ZoneId) 设置站点Id。
 * @method integer getPolicyId() 获取DDoS策略Id。
 * @method void setPolicyId(integer $PolicyId) 设置DDoS策略Id。
 * @method string getType() 获取防护类型，参考值：
<li>domain：7层子域；</li>
<li>application：4层应用。</li>
 * @method void setType(string $Type) 设置防护类型，参考值：
<li>domain：7层子域；</li>
<li>application：4层应用。</li>
 * @method string getEntityName() 获取7层站点名。
 * @method void setEntityName(string $EntityName) 设置7层站点名。
 * @method array getDDoSHosts() 获取该防护分区下的7层子域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDDoSHosts(array $DDoSHosts) 设置该防护分区下的7层子域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTcpNum() 获取四层tcp转发规则数。
 * @method void setTcpNum(integer $TcpNum) 设置四层tcp转发规则数。
 * @method integer getUdpNum() 获取四层udp转发规则数。
 * @method void setUdpNum(integer $UdpNum) 设置四层udp转发规则数。
 * @method string getEntity() 获取实例名称。
 * @method void setEntity(string $Entity) 设置实例名称。
 */
class ShieldArea extends AbstractModel
{
    /**
     * @var string 站点Id。
     */
    public $ZoneId;

    /**
     * @var integer DDoS策略Id。
     */
    public $PolicyId;

    /**
     * @var string 防护类型，参考值：
<li>domain：7层子域；</li>
<li>application：4层应用。</li>
     */
    public $Type;

    /**
     * @var string 7层站点名。
     */
    public $EntityName;

    /**
     * @var array 该防护分区下的7层子域名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DDoSHosts;

    /**
     * @var integer 四层tcp转发规则数。
     */
    public $TcpNum;

    /**
     * @var integer 四层udp转发规则数。
     */
    public $UdpNum;

    /**
     * @var string 实例名称。
     */
    public $Entity;

    /**
     * @param string $ZoneId 站点Id。
     * @param integer $PolicyId DDoS策略Id。
     * @param string $Type 防护类型，参考值：
<li>domain：7层子域；</li>
<li>application：4层应用。</li>
     * @param string $EntityName 7层站点名。
     * @param array $DDoSHosts 该防护分区下的7层子域名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TcpNum 四层tcp转发规则数。
     * @param integer $UdpNum 四层udp转发规则数。
     * @param string $Entity 实例名称。
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

        if (array_key_exists("DDoSHosts",$param) and $param["DDoSHosts"] !== null) {
            $this->DDoSHosts = [];
            foreach ($param["DDoSHosts"] as $key => $value){
                $obj = new DDoSHost();
                $obj->deserialize($value);
                array_push($this->DDoSHosts, $obj);
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
    }
}
