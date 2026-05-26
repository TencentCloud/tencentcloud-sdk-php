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
 * CreateHost请求参数结构体
 *
 * @method HostRecord getHost() 获取<p>防护域名配置信息。内网负载均衡器必须携带对应的NumericalVpcId。</p>
 * @method void setHost(HostRecord $Host) 设置<p>防护域名配置信息。内网负载均衡器必须携带对应的NumericalVpcId。</p>
 * @method string getInstanceID() 获取<p>实例id</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>实例id</p>
 * @method array getTags() 获取<p>标签信息</p>
 * @method void setTags(array $Tags) 设置<p>标签信息</p>
 */
class CreateHostRequest extends AbstractModel
{
    /**
     * @var HostRecord <p>防护域名配置信息。内网负载均衡器必须携带对应的NumericalVpcId。</p>
     */
    public $Host;

    /**
     * @var string <p>实例id</p>
     */
    public $InstanceID;

    /**
     * @var array <p>标签信息</p>
     */
    public $Tags;

    /**
     * @param HostRecord $Host <p>防护域名配置信息。内网负载均衡器必须携带对应的NumericalVpcId。</p>
     * @param string $InstanceID <p>实例id</p>
     * @param array $Tags <p>标签信息</p>
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = new HostRecord();
            $this->Host->deserialize($param["Host"]);
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
