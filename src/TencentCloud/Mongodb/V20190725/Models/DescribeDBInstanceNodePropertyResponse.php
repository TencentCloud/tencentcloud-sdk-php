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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstanceNodeProperty返回参数结构体
 *
 * @method array getMongos() 获取<p>Mongos节点属性。</p>
 * @method void setMongos(array $Mongos) 设置<p>Mongos节点属性。</p>
 * @method array getReplicateSets() 获取<p>副本集节点信息。</p>
 * @method void setReplicateSets(array $ReplicateSets) 设置<p>副本集节点信息。</p>
 * @method array getDynamoProxies() 获取<p>Dynamo节点信息</p>
 * @method void setDynamoProxies(array $DynamoProxies) 设置<p>Dynamo节点信息</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBInstanceNodePropertyResponse extends AbstractModel
{
    /**
     * @var array <p>Mongos节点属性。</p>
     */
    public $Mongos;

    /**
     * @var array <p>副本集节点信息。</p>
     */
    public $ReplicateSets;

    /**
     * @var array <p>Dynamo节点信息</p>
     */
    public $DynamoProxies;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Mongos <p>Mongos节点属性。</p>
     * @param array $ReplicateSets <p>副本集节点信息。</p>
     * @param array $DynamoProxies <p>Dynamo节点信息</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Mongos",$param) and $param["Mongos"] !== null) {
            $this->Mongos = [];
            foreach ($param["Mongos"] as $key => $value){
                $obj = new NodeProperty();
                $obj->deserialize($value);
                array_push($this->Mongos, $obj);
            }
        }

        if (array_key_exists("ReplicateSets",$param) and $param["ReplicateSets"] !== null) {
            $this->ReplicateSets = [];
            foreach ($param["ReplicateSets"] as $key => $value){
                $obj = new ReplicateSetInfo();
                $obj->deserialize($value);
                array_push($this->ReplicateSets, $obj);
            }
        }

        if (array_key_exists("DynamoProxies",$param) and $param["DynamoProxies"] !== null) {
            $this->DynamoProxies = [];
            foreach ($param["DynamoProxies"] as $key => $value){
                $obj = new NodeProperty();
                $obj->deserialize($value);
                array_push($this->DynamoProxies, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
