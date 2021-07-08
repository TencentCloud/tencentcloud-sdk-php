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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StaticInfo 告警柱形图统计信息
 
 *
 * @method integer getNum() 获取数
 * @method void setNum(integer $Num) 设置数
 * @method string getPort() 获取端口
 * @method void setPort(string $Port) 设置端口
 * @method string getIp() 获取ip信息
 * @method void setIp(string $Ip) 设置ip信息
 * @method string getAddress() 获取地址
 * @method void setAddress(string $Address) 设置地址
 * @method string getInsID() 获取资产id
 * @method void setInsID(string $InsID) 设置资产id
 * @method string getInsName() 获取资产名称
 * @method void setInsName(string $InsName) 设置资产名称
 */
class StaticInfo extends AbstractModel
{
    /**
     * @var integer 数
     */
    public $Num;

    /**
     * @var string 端口
     */
    public $Port;

    /**
     * @var string ip信息
     */
    public $Ip;

    /**
     * @var string 地址
     */
    public $Address;

    /**
     * @var string 资产id
     */
    public $InsID;

    /**
     * @var string 资产名称
     */
    public $InsName;

    /**
     * @param integer $Num 数
     * @param string $Port 端口
     * @param string $Ip ip信息
     * @param string $Address 地址
     * @param string $InsID 资产id
     * @param string $InsName 资产名称
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
        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("InsID",$param) and $param["InsID"] !== null) {
            $this->InsID = $param["InsID"];
        }

        if (array_key_exists("InsName",$param) and $param["InsName"] !== null) {
            $this->InsName = $param["InsName"];
        }
    }
}
