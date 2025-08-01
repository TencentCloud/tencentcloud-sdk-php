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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSecurityClientAttester请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method array getClientAttesters() 获取认证选项列表。
 * @method void setClientAttesters(array $ClientAttesters) 设置认证选项列表。
 */
class CreateSecurityClientAttesterRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var array 认证选项列表。
     */
    public $ClientAttesters;

    /**
     * @param string $ZoneId 站点 ID。
     * @param array $ClientAttesters 认证选项列表。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ClientAttesters",$param) and $param["ClientAttesters"] !== null) {
            $this->ClientAttesters = [];
            foreach ($param["ClientAttesters"] as $key => $value){
                $obj = new ClientAttester();
                $obj->deserialize($value);
                array_push($this->ClientAttesters, $obj);
            }
        }
    }
}
