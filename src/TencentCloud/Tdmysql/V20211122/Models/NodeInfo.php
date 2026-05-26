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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点信息类型
 *
 * @method string getIP() 获取<p>节点IP信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIP(string $IP) 设置<p>节点IP信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取<p>节点类型，如sqlengine，tdstore，mc</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>节点类型，如sqlengine，tdstore，mc</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeId() 获取<p>节点唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeId(string $NodeId) 设置<p>节点唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取<p>节点端口信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置<p>节点端口信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取<p>节点所属可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置<p>节点所属可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHost() 获取<p>节点所属机器ip</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHost(string $Host) 设置<p>节点所属机器ip</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBinlogInfo() 获取<p>节点日志服务信息</p>
 * @method void setBinlogInfo(array $BinlogInfo) 设置<p>节点日志服务信息</p>
 * @method integer getCpu() 获取<p>节点cpu个数</p>
 * @method void setCpu(integer $Cpu) 设置<p>节点cpu个数</p>
 * @method integer getMem() 获取<p>节点mem大小</p>
 * @method void setMem(integer $Mem) 设置<p>节点mem大小</p>
 * @method integer getDataDisk() 获取<p>节点磁盘大小</p>
 * @method void setDataDisk(integer $DataDisk) 设置<p>节点磁盘大小</p>
 */
class NodeInfo extends AbstractModel
{
    /**
     * @var string <p>节点IP信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IP;

    /**
     * @var string <p>节点类型，如sqlengine，tdstore，mc</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string <p>节点唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeId;

    /**
     * @var integer <p>节点端口信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string <p>节点所属可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var string <p>节点所属机器ip</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Host;

    /**
     * @var array <p>节点日志服务信息</p>
     */
    public $BinlogInfo;

    /**
     * @var integer <p>节点cpu个数</p>
     */
    public $Cpu;

    /**
     * @var integer <p>节点mem大小</p>
     */
    public $Mem;

    /**
     * @var integer <p>节点磁盘大小</p>
     */
    public $DataDisk;

    /**
     * @param string $IP <p>节点IP信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type <p>节点类型，如sqlengine，tdstore，mc</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeId <p>节点唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port <p>节点端口信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone <p>节点所属可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Host <p>节点所属机器ip</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BinlogInfo <p>节点日志服务信息</p>
     * @param integer $Cpu <p>节点cpu个数</p>
     * @param integer $Mem <p>节点mem大小</p>
     * @param integer $DataDisk <p>节点磁盘大小</p>
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
        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("BinlogInfo",$param) and $param["BinlogInfo"] !== null) {
            $this->BinlogInfo = [];
            foreach ($param["BinlogInfo"] as $key => $value){
                $obj = new BinlogInfo();
                $obj->deserialize($value);
                array_push($this->BinlogInfo, $obj);
            }
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("DataDisk",$param) and $param["DataDisk"] !== null) {
            $this->DataDisk = $param["DataDisk"];
        }
    }
}
