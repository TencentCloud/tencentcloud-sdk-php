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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 端口规格
 *
 * @method string getInternationalName() 获取端口名称
 * @method void setInternationalName(string $InternationalName) 设置端口名称
 * @method integer getSpecification() 获取端口规格（M）
 * @method void setSpecification(integer $Specification) 设置端口规格（M）
 * @method string getPortType() 获取端口类型：T-电口，X-光口
 * @method void setPortType(string $PortType) 设置端口类型：T-电口，X-光口
 */
class PortSpecification extends AbstractModel
{
    /**
     * @var string 端口名称
     */
    public $InternationalName;

    /**
     * @var integer 端口规格（M）
     */
    public $Specification;

    /**
     * @var string 端口类型：T-电口，X-光口
     */
    public $PortType;

    /**
     * @param string $InternationalName 端口名称
     * @param integer $Specification 端口规格（M）
     * @param string $PortType 端口类型：T-电口，X-光口
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
        if (array_key_exists("InternationalName",$param) and $param["InternationalName"] !== null) {
            $this->InternationalName = $param["InternationalName"];
        }

        if (array_key_exists("Specification",$param) and $param["Specification"] !== null) {
            $this->Specification = $param["Specification"];
        }

        if (array_key_exists("PortType",$param) and $param["PortType"] !== null) {
            $this->PortType = $param["PortType"];
        }
    }
}
