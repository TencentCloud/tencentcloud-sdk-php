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
 * ModifyApmService请求参数结构体
 *
 * @method string getServiceID() 获取<p>应用ID</p>
 * @method void setServiceID(string $ServiceID) 设置<p>应用ID</p>
 * @method string getServiceDescription() 获取<p>应用描述</p>
 * @method void setServiceDescription(string $ServiceDescription) 设置<p>应用描述</p>
 * @method array getTags() 获取<p>标签列表</p>
 * @method void setTags(array $Tags) 设置<p>标签列表</p>
 */
class ModifyApmServiceRequest extends AbstractModel
{
    /**
     * @var string <p>应用ID</p>
     */
    public $ServiceID;

    /**
     * @var string <p>应用描述</p>
     */
    public $ServiceDescription;

    /**
     * @var array <p>标签列表</p>
     */
    public $Tags;

    /**
     * @param string $ServiceID <p>应用ID</p>
     * @param string $ServiceDescription <p>应用描述</p>
     * @param array $Tags <p>标签列表</p>
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
        if (array_key_exists("ServiceID",$param) and $param["ServiceID"] !== null) {
            $this->ServiceID = $param["ServiceID"];
        }

        if (array_key_exists("ServiceDescription",$param) and $param["ServiceDescription"] !== null) {
            $this->ServiceDescription = $param["ServiceDescription"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
