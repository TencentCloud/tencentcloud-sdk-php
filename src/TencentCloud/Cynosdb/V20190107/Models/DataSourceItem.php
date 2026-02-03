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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据源项
 *
 * @method string getInstanceId() 获取源端实例ID
 * @method void setInstanceId(string $InstanceId) 设置源端实例ID
 * @method string getClusterId() 获取源端集群ID
 * @method void setClusterId(string $ClusterId) 设置源端集群ID
 * @method string getDBType() 获取源端数据库类型
 * @method void setDBType(string $DBType) 设置源端数据库类型
 * @method string getIP() 获取源端数据库IP
 * @method void setIP(string $IP) 设置源端数据库IP
 * @method integer getPort() 获取源端数据库端口
 * @method void setPort(integer $Port) 设置源端数据库端口
 * @method string getRegion() 获取源实例地域
 * @method void setRegion(string $Region) 设置源实例地域
 * @method string getZone() 获取源端实例可用区
 * @method void setZone(string $Zone) 设置源端实例可用区
 * @method string getSrcUin() 获取源端主账号uin
 * @method void setSrcUin(string $SrcUin) 设置源端主账号uin
 * @method string getAccountMode() 获取账号类型
 * @method void setAccountMode(string $AccountMode) 设置账号类型
 * @method string getReplicationJobStatus() 获取同步任务状态
 * @method void setReplicationJobStatus(string $ReplicationJobStatus) 设置同步任务状态
 */
class DataSourceItem extends AbstractModel
{
    /**
     * @var string 源端实例ID
     */
    public $InstanceId;

    /**
     * @var string 源端集群ID
     */
    public $ClusterId;

    /**
     * @var string 源端数据库类型
     */
    public $DBType;

    /**
     * @var string 源端数据库IP
     */
    public $IP;

    /**
     * @var integer 源端数据库端口
     */
    public $Port;

    /**
     * @var string 源实例地域
     */
    public $Region;

    /**
     * @var string 源端实例可用区
     */
    public $Zone;

    /**
     * @var string 源端主账号uin
     */
    public $SrcUin;

    /**
     * @var string 账号类型
     */
    public $AccountMode;

    /**
     * @var string 同步任务状态
     */
    public $ReplicationJobStatus;

    /**
     * @param string $InstanceId 源端实例ID
     * @param string $ClusterId 源端集群ID
     * @param string $DBType 源端数据库类型
     * @param string $IP 源端数据库IP
     * @param integer $Port 源端数据库端口
     * @param string $Region 源实例地域
     * @param string $Zone 源端实例可用区
     * @param string $SrcUin 源端主账号uin
     * @param string $AccountMode 账号类型
     * @param string $ReplicationJobStatus 同步任务状态
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("DBType",$param) and $param["DBType"] !== null) {
            $this->DBType = $param["DBType"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SrcUin",$param) and $param["SrcUin"] !== null) {
            $this->SrcUin = $param["SrcUin"];
        }

        if (array_key_exists("AccountMode",$param) and $param["AccountMode"] !== null) {
            $this->AccountMode = $param["AccountMode"];
        }

        if (array_key_exists("ReplicationJobStatus",$param) and $param["ReplicationJobStatus"] !== null) {
            $this->ReplicationJobStatus = $param["ReplicationJobStatus"];
        }
    }
}
