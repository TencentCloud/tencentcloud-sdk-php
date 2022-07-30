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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CDC场景下负载均衡WAF的地域信息
 *
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method array getClusters() 获取该地域对应的集群信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusters(array $Clusters) 设置该地域对应的集群信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class CdcRegion extends AbstractModel
{
    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var array 该地域对应的集群信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Clusters;

    /**
     * @param string $Region 地域
     * @param array $Clusters 该地域对应的集群信息
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Clusters",$param) and $param["Clusters"] !== null) {
            $this->Clusters = [];
            foreach ($param["Clusters"] as $key => $value){
                $obj = new CdcCluster();
                $obj->deserialize($value);
                array_push($this->Clusters, $obj);
            }
        }
    }
}
