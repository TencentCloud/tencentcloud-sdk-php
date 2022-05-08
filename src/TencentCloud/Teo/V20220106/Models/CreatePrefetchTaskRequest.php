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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePrefetchTask请求参数结构体
 *
 * @method string getZoneId() 获取Zone ID
 * @method void setZoneId(string $ZoneId) 设置Zone ID
 * @method array getTargets() 获取预热的资源列表
 * @method void setTargets(array $Targets) 设置预热的资源列表
 * @method boolean getEncodeUrl() 获取是否对url进行encode
 * @method void setEncodeUrl(boolean $EncodeUrl) 设置是否对url进行encode
 * @method array getHeaders() 获取附带的http头部信息
 * @method void setHeaders(array $Headers) 设置附带的http头部信息
 */
class CreatePrefetchTaskRequest extends AbstractModel
{
    /**
     * @var string Zone ID
     */
    public $ZoneId;

    /**
     * @var array 预热的资源列表
     */
    public $Targets;

    /**
     * @var boolean 是否对url进行encode
     */
    public $EncodeUrl;

    /**
     * @var array 附带的http头部信息
     */
    public $Headers;

    /**
     * @param string $ZoneId Zone ID
     * @param array $Targets 预热的资源列表
     * @param boolean $EncodeUrl 是否对url进行encode
     * @param array $Headers 附带的http头部信息
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

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = $param["Targets"];
        }

        if (array_key_exists("EncodeUrl",$param) and $param["EncodeUrl"] !== null) {
            $this->EncodeUrl = $param["EncodeUrl"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = [];
            foreach ($param["Headers"] as $key => $value){
                $obj = new Header();
                $obj->deserialize($value);
                array_push($this->Headers, $obj);
            }
        }
    }
}
