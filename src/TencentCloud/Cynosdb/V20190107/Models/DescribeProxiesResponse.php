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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProxies返回参数结构体
 *
 * @method integer getTotalCount() 获取数据库代理组数
 * @method void setTotalCount(integer $TotalCount) 设置数据库代理组数
 * @method array getProxyGroupInfos() 获取数据库代理组列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyGroupInfos(array $ProxyGroupInfos) 设置数据库代理组列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProxyNodeInfos() 获取数据库代理节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyNodeInfos(array $ProxyNodeInfos) 设置数据库代理节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeProxiesResponse extends AbstractModel
{
    /**
     * @var integer 数据库代理组数
     */
    public $TotalCount;

    /**
     * @var array 数据库代理组列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyGroupInfos;

    /**
     * @var array 数据库代理节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyNodeInfos;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 数据库代理组数
     * @param array $ProxyGroupInfos 数据库代理组列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProxyNodeInfos 数据库代理节点
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ProxyGroupInfos",$param) and $param["ProxyGroupInfos"] !== null) {
            $this->ProxyGroupInfos = [];
            foreach ($param["ProxyGroupInfos"] as $key => $value){
                $obj = new ProxyGroupInfo();
                $obj->deserialize($value);
                array_push($this->ProxyGroupInfos, $obj);
            }
        }

        if (array_key_exists("ProxyNodeInfos",$param) and $param["ProxyNodeInfos"] !== null) {
            $this->ProxyNodeInfos = [];
            foreach ($param["ProxyNodeInfos"] as $key => $value){
                $obj = new ProxyNodeInfo();
                $obj->deserialize($value);
                array_push($this->ProxyNodeInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
