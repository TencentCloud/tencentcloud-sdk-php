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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceNodeInfo返回参数结构体
 *
 * @method integer getProxyCount() 获取Proxy节点数量。
 * @method void setProxyCount(integer $ProxyCount) 设置Proxy节点数量。
 * @method array getProxy() 获取Proxy节点信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxy(array $Proxy) 设置Proxy节点信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRedisCount() 获取Redis节点数量。
 * @method void setRedisCount(integer $RedisCount) 设置Redis节点数量。
 * @method array getRedis() 获取Redis节点信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedis(array $Redis) 设置Redis节点信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTendisCount() 获取该参数不再使用，请忽略。
 * @method void setTendisCount(integer $TendisCount) 设置该参数不再使用，请忽略。
 * @method array getTendis() 获取该参数不再使用，请忽略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTendis(array $Tendis) 设置该参数不再使用，请忽略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeInstanceNodeInfoResponse extends AbstractModel
{
    /**
     * @var integer Proxy节点数量。
     */
    public $ProxyCount;

    /**
     * @var array Proxy节点信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Proxy;

    /**
     * @var integer Redis节点数量。
     */
    public $RedisCount;

    /**
     * @var array Redis节点信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Redis;

    /**
     * @var integer 该参数不再使用，请忽略。
     */
    public $TendisCount;

    /**
     * @var array 该参数不再使用，请忽略。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tendis;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ProxyCount Proxy节点数量。
     * @param array $Proxy Proxy节点信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RedisCount Redis节点数量。
     * @param array $Redis Redis节点信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TendisCount 该参数不再使用，请忽略。
     * @param array $Tendis 该参数不再使用，请忽略。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ProxyCount",$param) and $param["ProxyCount"] !== null) {
            $this->ProxyCount = $param["ProxyCount"];
        }

        if (array_key_exists("Proxy",$param) and $param["Proxy"] !== null) {
            $this->Proxy = [];
            foreach ($param["Proxy"] as $key => $value){
                $obj = new ProxyNodes();
                $obj->deserialize($value);
                array_push($this->Proxy, $obj);
            }
        }

        if (array_key_exists("RedisCount",$param) and $param["RedisCount"] !== null) {
            $this->RedisCount = $param["RedisCount"];
        }

        if (array_key_exists("Redis",$param) and $param["Redis"] !== null) {
            $this->Redis = [];
            foreach ($param["Redis"] as $key => $value){
                $obj = new RedisNodes();
                $obj->deserialize($value);
                array_push($this->Redis, $obj);
            }
        }

        if (array_key_exists("TendisCount",$param) and $param["TendisCount"] !== null) {
            $this->TendisCount = $param["TendisCount"];
        }

        if (array_key_exists("Tendis",$param) and $param["Tendis"] !== null) {
            $this->Tendis = [];
            foreach ($param["Tendis"] as $key => $value){
                $obj = new TendisNodes();
                $obj->deserialize($value);
                array_push($this->Tendis, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
