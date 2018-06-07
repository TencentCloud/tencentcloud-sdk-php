<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Ds\V20180523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getModule() 获取模块名
 * @method void setModule(string $Module) 设置模块名
 * @method string getOperation() 获取操作名
 * @method void setOperation(string $Operation) 设置操作名
 * @method array getSignInfos() 获取签署人信息
 * @method void setSignInfos(array $SignInfos) 设置签署人信息
 * @method string getContractFile() 获取合同上传链接地址
 * @method void setContractFile(string $ContractFile) 设置合同上传链接地址
 * @method string getContractName() 获取合同名称
 * @method void setContractName(string $ContractName) 设置合同名称
 * @method string getRemarks() 获取备注
 * @method void setRemarks(string $Remarks) 设置备注
 * @method string getInitiator() 获取合同发起方帐号ID
 * @method void setInitiator(string $Initiator) 设置合同发起方帐号ID
 */

/**
 *CreateContractByUpload请求参数结构体
 */
class CreateContractByUploadRequest extends AbstractModel
{
    /**
     * @var string 模块名
     */
    public $Module;

    /**
     * @var string 操作名
     */
    public $Operation;

    /**
     * @var array 签署人信息
     */
    public $SignInfos;

    /**
     * @var string 合同上传链接地址
     */
    public $ContractFile;

    /**
     * @var string 合同名称
     */
    public $ContractName;

    /**
     * @var string 备注
     */
    public $Remarks;

    /**
     * @var string 合同发起方帐号ID
     */
    public $Initiator;
    /**
     * @param string $Module 模块名
     * @param string $Operation 操作名
     * @param array $SignInfos 签署人信息
     * @param string $ContractFile 合同上传链接地址
     * @param string $ContractName 合同名称
     * @param string $Remarks 备注
     * @param string $Initiator 合同发起方帐号ID
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("SignInfos",$param) and $param["SignInfos"] !== null) {
            $this->SignInfos = [];
            foreach ($param["SignInfos"] as $key => $value){
                $obj = new SignInfo();
                $obj->deserialize($value);
                array_push($this->SignInfos, $obj);
            }
        }

        if (array_key_exists("ContractFile",$param) and $param["ContractFile"] !== null) {
            $this->ContractFile = $param["ContractFile"];
        }

        if (array_key_exists("ContractName",$param) and $param["ContractName"] !== null) {
            $this->ContractName = $param["ContractName"];
        }

        if (array_key_exists("Remarks",$param) and $param["Remarks"] !== null) {
            $this->Remarks = $param["Remarks"];
        }

        if (array_key_exists("Initiator",$param) and $param["Initiator"] !== null) {
            $this->Initiator = $param["Initiator"];
        }
    }
}
