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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryCDBProxy返回参数结构体
 *
 * @method integer getCount() 获取代理数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置代理数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProxyGroup() 获取代理信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyGroup(array $ProxyGroup) 设置代理信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class QueryCDBProxyResponse extends AbstractModel
{
    /**
     * @var integer 代理数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @var array 代理信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyGroup;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Count 代理数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProxyGroup 代理信息
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("ProxyGroup",$param) and $param["ProxyGroup"] !== null) {
            $this->ProxyGroup = [];
            foreach ($param["ProxyGroup"] as $key => $value){
                $obj = new ProxyGroups();
                $obj->deserialize($value);
                array_push($this->ProxyGroup, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
