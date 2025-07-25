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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务相关信息
 *
 * @method string getServiceName() 获取应用服务名称
 * @method void setServiceName(string $ServiceName) 设置应用服务名称
 * @method array getTags() 获取Tags 标签数组
 * @method void setTags(array $Tags) 设置Tags 标签数组
 */
class SpanProcess extends AbstractModel
{
    /**
     * @var string 应用服务名称
     */
    public $ServiceName;

    /**
     * @var array Tags 标签数组
     */
    public $Tags;

    /**
     * @param string $ServiceName 应用服务名称
     * @param array $Tags Tags 标签数组
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
        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new SpanTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
