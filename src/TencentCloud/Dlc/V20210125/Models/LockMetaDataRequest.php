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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LockMetaData请求参数结构体
 *
 * @method array getLockComponentList() 获取加锁内容
 * @method void setLockComponentList(array $LockComponentList) 设置加锁内容
 * @method string getDatasourceConnectionName() 获取数据源名称
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) 设置数据源名称
 * @method integer getTxnId() 获取事务id
 * @method void setTxnId(integer $TxnId) 设置事务id
 * @method string getAgentInfo() 获取客户端信息
 * @method void setAgentInfo(string $AgentInfo) 设置客户端信息
 * @method string getHostname() 获取主机名
 * @method void setHostname(string $Hostname) 设置主机名
 */
class LockMetaDataRequest extends AbstractModel
{
    /**
     * @var array 加锁内容
     */
    public $LockComponentList;

    /**
     * @var string 数据源名称
     */
    public $DatasourceConnectionName;

    /**
     * @var integer 事务id
     */
    public $TxnId;

    /**
     * @var string 客户端信息
     */
    public $AgentInfo;

    /**
     * @var string 主机名
     */
    public $Hostname;

    /**
     * @param array $LockComponentList 加锁内容
     * @param string $DatasourceConnectionName 数据源名称
     * @param integer $TxnId 事务id
     * @param string $AgentInfo 客户端信息
     * @param string $Hostname 主机名
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
        if (array_key_exists("LockComponentList",$param) and $param["LockComponentList"] !== null) {
            $this->LockComponentList = [];
            foreach ($param["LockComponentList"] as $key => $value){
                $obj = new LockComponentInfo();
                $obj->deserialize($value);
                array_push($this->LockComponentList, $obj);
            }
        }

        if (array_key_exists("DatasourceConnectionName",$param) and $param["DatasourceConnectionName"] !== null) {
            $this->DatasourceConnectionName = $param["DatasourceConnectionName"];
        }

        if (array_key_exists("TxnId",$param) and $param["TxnId"] !== null) {
            $this->TxnId = $param["TxnId"];
        }

        if (array_key_exists("AgentInfo",$param) and $param["AgentInfo"] !== null) {
            $this->AgentInfo = $param["AgentInfo"];
        }

        if (array_key_exists("Hostname",$param) and $param["Hostname"] !== null) {
            $this->Hostname = $param["Hostname"];
        }
    }
}
