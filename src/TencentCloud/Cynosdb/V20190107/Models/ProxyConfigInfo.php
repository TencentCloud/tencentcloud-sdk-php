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
 * @method integer getProxyCount() 获取数据库代理组节点个数。该参数不再建议使用,建议使用ProxyZones
 * @method void setProxyCount(integer $ProxyCount) 设置数据库代理组节点个数。该参数不再建议使用,建议使用ProxyZones
 * @method integer getCpu() 获取cpu核数
 * @method void setCpu(integer $Cpu) 设置cpu核数
 * @method integer getMem() 获取内存
 * @method void setMem(integer $Mem) 设置内存
 * @method string getDescription() 获取描述说明
 * @method void setDescription(string $Description) 设置描述说明
 * @method array getProxyZones() 获取数据库节点信息（该参数与ProxyCount需要任选一个输入）
 * @method void setProxyZones(array $ProxyZones) 设置数据库节点信息（该参数与ProxyCount需要任选一个输入）
 */
class ProxyConfigInfo extends AbstractModel
{
    /**
     * @var integer 数据库代理组节点个数。该参数不再建议使用,建议使用ProxyZones
     */
    public $ProxyCount;

    /**
     * @var integer cpu核数
     */
    public $Cpu;

    /**
     * @var integer 内存
     */
    public $Mem;

    /**
     * @var string 描述说明
     */
    public $Description;

    /**
     * @var array 数据库节点信息（该参数与ProxyCount需要任选一个输入）
     */
    public $ProxyZones;

    /**
     * @param integer $ProxyCount 数据库代理组节点个数。该参数不再建议使用,建议使用ProxyZones
     * @param integer $Cpu cpu核数
     * @param integer $Mem 内存
     * @param string $Description 描述说明
     * @param array $ProxyZones 数据库节点信息（该参数与ProxyCount需要任选一个输入）
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
