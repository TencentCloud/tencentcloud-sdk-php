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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSpec返回参数结构体
 *
 * @method array getCommonSpec() 获取zookeeper节点规格描述
 * @method void setCommonSpec(array $CommonSpec) 设置zookeeper节点规格描述
 * @method array getDataSpec() 获取数据节点规格描述
 * @method void setDataSpec(array $DataSpec) 设置数据节点规格描述
 * @method array getAttachCBSSpec() 获取云盘列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachCBSSpec(array $AttachCBSSpec) 设置云盘列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSpecResponse extends AbstractModel
{
    /**
     * @var array zookeeper节点规格描述
     */
    public $CommonSpec;

    /**
     * @var array 数据节点规格描述
     */
    public $DataSpec;

    /**
     * @var array 云盘列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttachCBSSpec;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $CommonSpec zookeeper节点规格描述
     * @param array $DataSpec 数据节点规格描述
     * @param array $AttachCBSSpec 云盘列表
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
        if (array_key_exists("CommonSpec",$param) and $param["CommonSpec"] !== null) {
            $this->CommonSpec = [];
            foreach ($param["CommonSpec"] as $key => $value){
                $obj = new ResourceSpec();
                $obj->deserialize($value);
                array_push($this->CommonSpec, $obj);
            }
        }

        if (array_key_exists("DataSpec",$param) and $param["DataSpec"] !== null) {
            $this->DataSpec = [];
            foreach ($param["DataSpec"] as $key => $value){
                $obj = new ResourceSpec();
                $obj->deserialize($value);
                array_push($this->DataSpec, $obj);
            }
        }

        if (array_key_exists("AttachCBSSpec",$param) and $param["AttachCBSSpec"] !== null) {
            $this->AttachCBSSpec = [];
            foreach ($param["AttachCBSSpec"] as $key => $value){
                $obj = new DiskSpec();
                $obj->deserialize($value);
                array_push($this->AttachCBSSpec, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
