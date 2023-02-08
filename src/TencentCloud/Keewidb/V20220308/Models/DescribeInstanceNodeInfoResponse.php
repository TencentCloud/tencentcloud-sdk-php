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
namespace TencentCloud\Keewidb\V20220308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceNodeInfo返回参数结构体
 *
 * @method integer getProxyCount() 获取Proxy 节点数量。
 * @method void setProxyCount(integer $ProxyCount) 设置Proxy 节点数量。
 * @method array getProxy() 获取Proxy 节点信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxy(array $Proxy) 设置Proxy 节点信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRedisCount() 获取Redis 节点数量。该参数仅为产品兼容性而保留，并不具有实际意义，可忽略。
 * @method void setRedisCount(integer $RedisCount) 设置Redis 节点数量。该参数仅为产品兼容性而保留，并不具有实际意义，可忽略。
 * @method array getRedis() 获取Redis 节点信息。该参数仅为产品兼容性而保留，并不具有实际意义，可忽略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedis(array $Redis) 设置Redis 节点信息。该参数仅为产品兼容性而保留，并不具有实际意义，可忽略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTendisCount() 获取Tendis 节点数量。该参数仅为产品兼容性而保留，并不具有实际意义，可忽略。
 * @method void setTendisCount(integer $TendisCount) 设置Tendis 节点数量。该参数仅为产品兼容性而保留，并不具有实际意义，可忽略。
 * @method array getTendis() 获取Tendis 节点信息。该参数仅为产品兼容性而保留，并不具有实际意义，可忽略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTendis(array $Tendis) 设置Tendis 节点信息。该参数仅为产品兼容性而保留，并不具有实际意义，可忽略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getKeeWiDBCount() 获取KeewiDB 节点数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeeWiDBCount(integer $KeeWiDBCount) 设置KeewiDB 节点数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKeeWiDB() 获取KeewiDB 节点信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeeWiDB(array $KeeWiDB) 设置KeewiDB 节点信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeInstanceNodeInfoResponse extends AbstractModel
{
    /**
     * @var integer Proxy 节点数量。
     */
    public $ProxyCount;

    /**
     * @var array Proxy 节点信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Proxy;

    /**
     * @var integer Redis 节点数量。该参数仅为产品兼容性而保留，并不具有实际意义，可忽略。
     */
    public $RedisCount;

    /**
     * @var array Redis 节点信息。该参数仅为产品兼容性而保留，并不具有实际意义，可忽略。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Redis;

    /**
     * @var integer Tendis 节点数量。该参数仅为产品兼容性而保留，并不具有实际意义，可忽略。
     */
    public $TendisCount;

    /**
     * @var array Tendis 节点信息。该参数仅为产品兼容性而保留，并不具有实际意义，可忽略。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tendis;

    /**
     * @var integer KeewiDB 节点数量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeeWiDBCount;

    /**
     * @var array KeewiDB 节点信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeeWiDB;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ProxyCount Proxy 节点数量。
     * @param array $Proxy Proxy 节点信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RedisCount Redis 节点数量。该参数仅为产品兼容性而保留，并不具有实际意义，可忽略。
     * @param array $Redis Redis 节点信息。该参数仅为产品兼容性而保留，并不具有实际意义，可忽略。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TendisCount Tendis 节点数量。该参数仅为产品兼容性而保留，并不具有实际意义，可忽略。
     * @param array $Tendis Tendis 节点信息。该参数仅为产品兼容性而保留，并不具有实际意义，可忽略。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $KeeWiDBCount KeewiDB 节点数量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $KeeWiDB KeewiDB 节点信息。
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
                $obj = new ProxyNodeInfo();
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
                $obj = new RedisNodeInfo();
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
                $obj = new InstanceNodeInfo();
                $obj->deserialize($value);
                array_push($this->Tendis, $obj);
            }
        }

        if (array_key_exists("KeeWiDBCount",$param) and $param["KeeWiDBCount"] !== null) {
            $this->KeeWiDBCount = $param["KeeWiDBCount"];
        }

        if (array_key_exists("KeeWiDB",$param) and $param["KeeWiDB"] !== null) {
            $this->KeeWiDB = [];
            foreach ($param["KeeWiDB"] as $key => $value){
                $obj = new InstanceNodeInfo();
                $obj->deserialize($value);
                array_push($this->KeeWiDB, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
