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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 凭证内容
 *
 * @method string getSTSSystem() 获取<p>如果认证类型为sts时，该项必填</p>
 * @method void setSTSSystem(string $STSSystem) 设置<p>如果认证类型为sts时，该项必填</p>
 * @method string getSTSService() 获取<p>如果认证类型为sts时，该项必填</p>
 * @method void setSTSService(string $STSService) 设置<p>如果认证类型为sts时，该项必填</p>
 * @method array getHeaders() 获取<p>如果认证类型为reqKey时，该项必填</p>
 * @method void setHeaders(array $Headers) 设置<p>如果认证类型为reqKey时，该项必填</p>
 * @method array getApiKeys() 获取<p>如果认证类型为apiKey时，该项必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiKeys(array $ApiKeys) 设置<p>如果认证类型为apiKey时，该项必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method FaultToleranceDTO getFaultTolerance() 获取<p>容错策略，仅Type为apiKey时支持</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFaultTolerance(FaultToleranceDTO $FaultTolerance) 设置<p>容错策略，仅Type为apiKey时支持</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AgentCredentialContentDTO extends AbstractModel
{
    /**
     * @var string <p>如果认证类型为sts时，该项必填</p>
     */
    public $STSSystem;

    /**
     * @var string <p>如果认证类型为sts时，该项必填</p>
     */
    public $STSService;

    /**
     * @var array <p>如果认证类型为reqKey时，该项必填</p>
     */
    public $Headers;

    /**
     * @var array <p>如果认证类型为apiKey时，该项必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiKeys;

    /**
     * @var FaultToleranceDTO <p>容错策略，仅Type为apiKey时支持</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FaultTolerance;

    /**
     * @param string $STSSystem <p>如果认证类型为sts时，该项必填</p>
     * @param string $STSService <p>如果认证类型为sts时，该项必填</p>
     * @param array $Headers <p>如果认证类型为reqKey时，该项必填</p>
     * @param array $ApiKeys <p>如果认证类型为apiKey时，该项必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param FaultToleranceDTO $FaultTolerance <p>容错策略，仅Type为apiKey时支持</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("STSSystem",$param) and $param["STSSystem"] !== null) {
            $this->STSSystem = $param["STSSystem"];
        }

        if (array_key_exists("STSService",$param) and $param["STSService"] !== null) {
            $this->STSService = $param["STSService"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = [];
            foreach ($param["Headers"] as $key => $value){
                $obj = new AgentCredentialContentHeaderDTO();
                $obj->deserialize($value);
                array_push($this->Headers, $obj);
            }
        }

        if (array_key_exists("ApiKeys",$param) and $param["ApiKeys"] !== null) {
            $this->ApiKeys = [];
            foreach ($param["ApiKeys"] as $key => $value){
                $obj = new AgentCredentialApiKeyDTO();
                $obj->deserialize($value);
                array_push($this->ApiKeys, $obj);
            }
        }

        if (array_key_exists("FaultTolerance",$param) and $param["FaultTolerance"] !== null) {
            $this->FaultTolerance = new FaultToleranceDTO();
            $this->FaultTolerance->deserialize($param["FaultTolerance"]);
        }
    }
}
