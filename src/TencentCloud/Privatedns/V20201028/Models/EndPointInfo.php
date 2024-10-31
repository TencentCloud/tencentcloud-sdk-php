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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 终端节点信息
 *
 * @method string getEndPointId() 获取终端节点ID
 * @method void setEndPointId(string $EndPointId) 设置终端节点ID
 * @method string getEndPointName() 获取终端节点名称
 * @method void setEndPointName(string $EndPointName) 设置终端节点名称
 * @method string getEndPointServiceId() 获取终端节点服务ID
 * @method void setEndPointServiceId(string $EndPointServiceId) 设置终端节点服务ID
 * @method array getEndPointVipSet() 获取终端节点VIP列表
 * @method void setEndPointVipSet(array $EndPointVipSet) 设置终端节点VIP列表
 * @method string getRegionCode() 获取ap-guangzhou
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionCode(string $RegionCode) 设置ap-guangzhou
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签键值对集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签键值对集合
注意：此字段可能返回 null，表示取不到有效值。
 */
class EndPointInfo extends AbstractModel
{
    /**
     * @var string 终端节点ID
     */
    public $EndPointId;

    /**
     * @var string 终端节点名称
     */
    public $EndPointName;

    /**
     * @var string 终端节点服务ID
     */
    public $EndPointServiceId;

    /**
     * @var array 终端节点VIP列表
     */
    public $EndPointVipSet;

    /**
     * @var string ap-guangzhou
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionCode;

    /**
     * @var array 标签键值对集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param string $EndPointId 终端节点ID
     * @param string $EndPointName 终端节点名称
     * @param string $EndPointServiceId 终端节点服务ID
     * @param array $EndPointVipSet 终端节点VIP列表
     * @param string $RegionCode ap-guangzhou
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签键值对集合
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
        if (array_key_exists("EndPointId",$param) and $param["EndPointId"] !== null) {
            $this->EndPointId = $param["EndPointId"];
        }

        if (array_key_exists("EndPointName",$param) and $param["EndPointName"] !== null) {
            $this->EndPointName = $param["EndPointName"];
        }

        if (array_key_exists("EndPointServiceId",$param) and $param["EndPointServiceId"] !== null) {
            $this->EndPointServiceId = $param["EndPointServiceId"];
        }

        if (array_key_exists("EndPointVipSet",$param) and $param["EndPointVipSet"] !== null) {
            $this->EndPointVipSet = $param["EndPointVipSet"];
        }

        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
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
