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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 免鉴权信息
 *
 * @method array getOperations() 获取操作列表，支持trackLog(JS/HTTP上传日志  )和realtimeProducer(kafka协议上传日志)
 * @method void setOperations(array $Operations) 设置操作列表，支持trackLog(JS/HTTP上传日志  )和realtimeProducer(kafka协议上传日志)
 * @method array getConditions() 获取条件列表
 * @method void setConditions(array $Conditions) 设置条件列表
 */
class AnonymousInfo extends AbstractModel
{
    /**
     * @var array 操作列表，支持trackLog(JS/HTTP上传日志  )和realtimeProducer(kafka协议上传日志)
     */
    public $Operations;

    /**
     * @var array 条件列表
     */
    public $Conditions;

    /**
     * @param array $Operations 操作列表，支持trackLog(JS/HTTP上传日志  )和realtimeProducer(kafka协议上传日志)
     * @param array $Conditions 条件列表
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
        if (array_key_exists("Operations",$param) and $param["Operations"] !== null) {
            $this->Operations = $param["Operations"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new ConditionInfo();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }
    }
}
