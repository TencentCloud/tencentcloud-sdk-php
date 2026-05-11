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
 * 访问代理配置
 *
 * @method integer getProxyCount() 获取<p>数据库代理组节点个数。该参数不再建议使用,建议使用ProxyZones</p>
 * @method void setProxyCount(integer $ProxyCount) 设置<p>数据库代理组节点个数。该参数不再建议使用,建议使用ProxyZones</p>
 * @method integer getCpu() 获取<p>cpu核数</p>
 * @method void setCpu(integer $Cpu) 设置<p>cpu核数</p>
 * @method integer getMem() 获取<p>内存</p>
 * @method void setMem(integer $Mem) 设置<p>内存</p>
 * @method string getConnectionPoolType() 获取<p>连接池类型:SessionConnectionPool(会话级别连接池 )</p>
 * @method void setConnectionPoolType(string $ConnectionPoolType) 设置<p>连接池类型:SessionConnectionPool(会话级别连接池 )</p>
 * @method string getOpenConnectionPool() 获取<p>是否开启连接池,yes-开启，no-不开启</p>
 * @method void setOpenConnectionPool(string $OpenConnectionPool) 设置<p>是否开启连接池,yes-开启，no-不开启</p>
 * @method integer getConnectionPoolTimeOut() 获取<p>连接池阈值:单位（秒）</p>
 * @method void setConnectionPoolTimeOut(integer $ConnectionPoolTimeOut) 设置<p>连接池阈值:单位（秒）</p>
 * @method string getDescription() 获取<p>描述说明</p>
 * @method void setDescription(string $Description) 设置<p>描述说明</p>
 * @method array getProxyZones() 获取<p>数据库节点信息（该参数与ProxyCount需要任选一个输入）</p>
 * @method void setProxyZones(array $ProxyZones) 设置<p>数据库节点信息（该参数与ProxyCount需要任选一个输入）</p>
 */
class ProxyConfig extends AbstractModel
{
    /**
     * @var integer <p>数据库代理组节点个数。该参数不再建议使用,建议使用ProxyZones</p>
     * @deprecated
     */
    public $ProxyCount;

    /**
     * @var integer <p>cpu核数</p>
     */
    public $Cpu;

    /**
     * @var integer <p>内存</p>
     */
    public $Mem;

    /**
     * @var string <p>连接池类型:SessionConnectionPool(会话级别连接池 )</p>
     */
    public $ConnectionPoolType;

    /**
     * @var string <p>是否开启连接池,yes-开启，no-不开启</p>
     */
    public $OpenConnectionPool;

    /**
     * @var integer <p>连接池阈值:单位（秒）</p>
     */
    public $ConnectionPoolTimeOut;

    /**
     * @var string <p>描述说明</p>
     */
    public $Description;

    /**
     * @var array <p>数据库节点信息（该参数与ProxyCount需要任选一个输入）</p>
     */
    public $ProxyZones;

    /**
     * @param integer $ProxyCount <p>数据库代理组节点个数。该参数不再建议使用,建议使用ProxyZones</p>
     * @param integer $Cpu <p>cpu核数</p>
     * @param integer $Mem <p>内存</p>
     * @param string $ConnectionPoolType <p>连接池类型:SessionConnectionPool(会话级别连接池 )</p>
     * @param string $OpenConnectionPool <p>是否开启连接池,yes-开启，no-不开启</p>
     * @param integer $ConnectionPoolTimeOut <p>连接池阈值:单位（秒）</p>
     * @param string $Description <p>描述说明</p>
     * @param array $ProxyZones <p>数据库节点信息（该参数与ProxyCount需要任选一个输入）</p>
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
        if (array_key_exists("ProxyCount",$param) and $param["ProxyCount"] !== null) {
            $this->ProxyCount = $param["ProxyCount"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("ConnectionPoolType",$param) and $param["ConnectionPoolType"] !== null) {
            $this->ConnectionPoolType = $param["ConnectionPoolType"];
        }

        if (array_key_exists("OpenConnectionPool",$param) and $param["OpenConnectionPool"] !== null) {
            $this->OpenConnectionPool = $param["OpenConnectionPool"];
        }

        if (array_key_exists("ConnectionPoolTimeOut",$param) and $param["ConnectionPoolTimeOut"] !== null) {
            $this->ConnectionPoolTimeOut = $param["ConnectionPoolTimeOut"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ProxyZones",$param) and $param["ProxyZones"] !== null) {
            $this->ProxyZones = [];
            foreach ($param["ProxyZones"] as $key => $value){
                $obj = new ProxyZone();
                $obj->deserialize($value);
                array_push($this->ProxyZones, $obj);
            }
        }
    }
}
