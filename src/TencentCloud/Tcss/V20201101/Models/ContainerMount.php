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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器挂载信息
 *
 * @method string getType() 获取挂载类型 bind
 * @method void setType(string $Type) 设置挂载类型 bind
 * @method string getSource() 获取宿主机路径
 * @method void setSource(string $Source) 设置宿主机路径
 * @method string getDestination() 获取容器内路径
 * @method void setDestination(string $Destination) 设置容器内路径
 * @method string getMode() 获取模式
 * @method void setMode(string $Mode) 设置模式
 * @method boolean getRW() 获取读写权限
 * @method void setRW(boolean $RW) 设置读写权限
 * @method string getPropagation() 获取传播类型
 * @method void setPropagation(string $Propagation) 设置传播类型
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getDriver() 获取驱动
 * @method void setDriver(string $Driver) 设置驱动
 */
class ContainerMount extends AbstractModel
{
    /**
     * @var string 挂载类型 bind
     */
    public $Type;

    /**
     * @var string 宿主机路径
     */
    public $Source;

    /**
     * @var string 容器内路径
     */
    public $Destination;

    /**
     * @var string 模式
     */
    public $Mode;

    /**
     * @var boolean 读写权限
     */
    public $RW;

    /**
     * @var string 传播类型
     */
    public $Propagation;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 驱动
     */
    public $Driver;

    /**
     * @param string $Type 挂载类型 bind
     * @param string $Source 宿主机路径
     * @param string $Destination 容器内路径
     * @param string $Mode 模式
     * @param boolean $RW 读写权限
     * @param string $Propagation 传播类型
     * @param string $Name 名称
     * @param string $Driver 驱动
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Destination",$param) and $param["Destination"] !== null) {
            $this->Destination = $param["Destination"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("RW",$param) and $param["RW"] !== null) {
            $this->RW = $param["RW"];
        }

        if (array_key_exists("Propagation",$param) and $param["Propagation"] !== null) {
            $this->Propagation = $param["Propagation"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Driver",$param) and $param["Driver"] !== null) {
            $this->Driver = $param["Driver"];
        }
    }
}
