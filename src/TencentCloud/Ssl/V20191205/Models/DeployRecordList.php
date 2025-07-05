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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 托管记录详情信息
 *
 * @method string getResourceType() 获取部署资源类型
 * @method void setResourceType(string $ResourceType) 设置部署资源类型
 * @method array getList() 获取部署资源详情列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setList(array $List) 设置部署资源详情列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取该部署资源总数
 * @method void setTotalCount(integer $TotalCount) 设置该部署资源总数
 */
class DeployRecordList extends AbstractModel
{
    /**
     * @var string 部署资源类型
     */
    public $ResourceType;

    /**
     * @var array 部署资源详情列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $List;

    /**
     * @var integer 该部署资源总数
     */
    public $TotalCount;

    /**
     * @param string $ResourceType 部署资源类型
     * @param array $List 部署资源详情列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 该部署资源总数
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new DeployRecordItem();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
