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
namespace TencentCloud\Ds\V20180523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getModule() 获取模块名
 * @method void setModule(string $Module) 设置模块名
 * @method string getOperation() 获取操作名
 * @method void setOperation(string $Operation) 设置操作名
 * @method string getContractResId() 获取合同ID
 * @method void setContractResId(string $ContractResId) 设置合同ID
 * @method string getAccountResId() 获取帐户ID
 * @method void setAccountResId(string $AccountResId) 设置帐户ID
 * @method string getAuthorizationTime() 获取授权时间，格式为年月日时分秒，例20160801095509
 * @method void setAuthorizationTime(string $AuthorizationTime) 设置授权时间，格式为年月日时分秒，例20160801095509
 * @method string getPosition() 获取授权IP地址
 * @method void setPosition(string $Position) 设置授权IP地址
 * @method array getSignLocations() 获取签署坐标，坐标不得超过合同文件边界
 * @method void setSignLocations(array $SignLocations) 设置签署坐标，坐标不得超过合同文件边界
 * @method string getSealResId() 获取印章ID
 * @method void setSealResId(string $SealResId) 设置印章ID
 */

/**
 *SignContractByCoordinate请求参数结构体
 */
class SignContractByCoordinateRequest extends AbstractModel
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
     * @var string 合同ID
     */
    public $ContractResId;

    /**
     * @var string 帐户ID
     */
    public $AccountResId;

    /**
     * @var string 授权时间，格式为年月日时分秒，例20160801095509
     */
    public $AuthorizationTime;

    /**
     * @var string 授权IP地址
     */
    public $Position;

    /**
     * @var array 签署坐标，坐标不得超过合同文件边界
     */
    public $SignLocations;

    /**
     * @var string 印章ID
     */
    public $SealResId;
    /**
     * @param string $Module 模块名
     * @param string $Operation 操作名
     * @param string $ContractResId 合同ID
     * @param string $AccountResId 帐户ID
     * @param string $AuthorizationTime 授权时间，格式为年月日时分秒，例20160801095509
     * @param string $Position 授权IP地址
     * @param array $SignLocations 签署坐标，坐标不得超过合同文件边界
     * @param string $SealResId 印章ID
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

        if (array_key_exists("ContractResId",$param) and $param["ContractResId"] !== null) {
            $this->ContractResId = $param["ContractResId"];
        }

        if (array_key_exists("AccountResId",$param) and $param["AccountResId"] !== null) {
            $this->AccountResId = $param["AccountResId"];
        }

        if (array_key_exists("AuthorizationTime",$param) and $param["AuthorizationTime"] !== null) {
            $this->AuthorizationTime = $param["AuthorizationTime"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("SignLocations",$param) and $param["SignLocations"] !== null) {
            $this->SignLocations = [];
            foreach ($param["SignLocations"] as $key => $value){
                $obj = new SignLocation();
                $obj->deserialize($value);
                array_push($this->SignLocations, $obj);
            }
        }

        if (array_key_exists("SealResId",$param) and $param["SealResId"] !== null) {
            $this->SealResId = $param["SealResId"];
        }
    }
}
