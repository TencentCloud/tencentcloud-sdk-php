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
 * @method string getSTSSystem() 获取如果认证类型为sts时，该项必填
 * @method void setSTSSystem(string $STSSystem) 设置如果认证类型为sts时，该项必填
 * @method string getSTSService() 获取如果认证类型为sts时，该项必填
 * @method void setSTSService(string $STSService) 设置如果认证类型为sts时，该项必填
 * @method array getHeaders() 获取如果认证类型为reqKey时，该项必填
 * @method void setHeaders(array $Headers) 设置如果认证类型为reqKey时，该项必填
 */
class AgentCredentialContentDTO extends AbstractModel
{
    /**
     * @var string 如果认证类型为sts时，该项必填
     */
    public $STSSystem;

    /**
     * @var string 如果认证类型为sts时，该项必填
     */
    public $STSService;

    /**
     * @var array 如果认证类型为reqKey时，该项必填
     */
    public $Headers;

    /**
     * @param string $STSSystem 如果认证类型为sts时，该项必填
     * @param string $STSService 如果认证类型为sts时，该项必填
     * @param array $Headers 如果认证类型为reqKey时，该项必填
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
    }
}
