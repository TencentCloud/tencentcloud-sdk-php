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
namespace TencentCloud\Afc\V20200226\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 天御信鸽取数平台接口入参
 *
 * @method string getInterfaceName() 获取公证处请求接口名
 * @method void setInterfaceName(string $InterfaceName) 设置公证处请求接口名
 * @method string getNotarizationInput() 获取公证处业务详情二层入参
 * @method void setNotarizationInput(string $NotarizationInput) 设置公证处业务详情二层入参
 * @method string getNotarizationSign() 获取业务二层详情入参的哈希签名
 * @method void setNotarizationSign(string $NotarizationSign) 设置业务二层详情入参的哈希签名
 */
class TransportGeneralInterfaceInput extends AbstractModel
{
    /**
     * @var string 公证处请求接口名
     */
    public $InterfaceName;

    /**
     * @var string 公证处业务详情二层入参
     */
    public $NotarizationInput;

    /**
     * @var string 业务二层详情入参的哈希签名
     */
    public $NotarizationSign;

    /**
     * @param string $InterfaceName 公证处请求接口名
     * @param string $NotarizationInput 公证处业务详情二层入参
     * @param string $NotarizationSign 业务二层详情入参的哈希签名
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
        if (array_key_exists("InterfaceName",$param) and $param["InterfaceName"] !== null) {
            $this->InterfaceName = $param["InterfaceName"];
        }

        if (array_key_exists("NotarizationInput",$param) and $param["NotarizationInput"] !== null) {
            $this->NotarizationInput = $param["NotarizationInput"];
        }

        if (array_key_exists("NotarizationSign",$param) and $param["NotarizationSign"] !== null) {
            $this->NotarizationSign = $param["NotarizationSign"];
        }
    }
}
