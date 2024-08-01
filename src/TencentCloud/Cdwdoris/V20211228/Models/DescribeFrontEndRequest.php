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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFrontEnd请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getConfigType() 获取文件类型
 * @method void setConfigType(string $ConfigType) 设置文件类型
 * @method string getParam1() 获取参数1
 * @method void setParam1(string $Param1) 设置参数1
 * @method string getParam2() 获取参数2
 * @method void setParam2(string $Param2) 设置参数2
 * @method string getParam3() 获取参数3
 * @method void setParam3(string $Param3) 设置参数3
 * @method string getParam4() 获取参数4
 * @method void setParam4(string $Param4) 设置参数4
 * @method string getParam5() 获取参数5
 * @method void setParam5(string $Param5) 设置参数5
 */
class DescribeFrontEndRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 文件类型
     */
    public $ConfigType;

    /**
     * @var string 参数1
     */
    public $Param1;

    /**
     * @var string 参数2
     */
    public $Param2;

    /**
     * @var string 参数3
     */
    public $Param3;

    /**
     * @var string 参数4
     */
    public $Param4;

    /**
     * @var string 参数5
     */
    public $Param5;

    /**
     * @param string $InstanceId 实例id
     * @param string $ConfigType 文件类型
     * @param string $Param1 参数1
     * @param string $Param2 参数2
     * @param string $Param3 参数3
     * @param string $Param4 参数4
     * @param string $Param5 参数5
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

        if (array_key_exists("ConfigType",$param) and $param["ConfigType"] !== null) {
            $this->ConfigType = $param["ConfigType"];
        }

        if (array_key_exists("Param1",$param) and $param["Param1"] !== null) {
            $this->Param1 = $param["Param1"];
        }

        if (array_key_exists("Param2",$param) and $param["Param2"] !== null) {
            $this->Param2 = $param["Param2"];
        }

        if (array_key_exists("Param3",$param) and $param["Param3"] !== null) {
            $this->Param3 = $param["Param3"];
        }

        if (array_key_exists("Param4",$param) and $param["Param4"] !== null) {
            $this->Param4 = $param["Param4"];
        }

        if (array_key_exists("Param5",$param) and $param["Param5"] !== null) {
            $this->Param5 = $param["Param5"];
        }
    }
}
