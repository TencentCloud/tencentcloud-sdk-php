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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSpec返回参数结构体
 *
 * @method array getMasterSpec() 获取fe节点规格描述
 * @method void setMasterSpec(array $MasterSpec) 设置fe节点规格描述
 * @method array getCoreSpec() 获取be节点规格描述
 * @method void setCoreSpec(array $CoreSpec) 设置be节点规格描述
 * @method array getAttachCBSSpec() 获取云盘列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachCBSSpec(array $AttachCBSSpec) 设置云盘列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCNSpec() 获取cn节点列表
 * @method void setCNSpec(array $CNSpec) 设置cn节点列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSpecResponse extends AbstractModel
{
    /**
     * @var array fe节点规格描述
     */
    public $MasterSpec;

    /**
     * @var array be节点规格描述
     */
    public $CoreSpec;

    /**
     * @var array 云盘列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttachCBSSpec;

    /**
     * @var array cn节点列表
     */
    public $CNSpec;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $MasterSpec fe节点规格描述
     * @param array $CoreSpec be节点规格描述
     * @param array $AttachCBSSpec 云盘列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CNSpec cn节点列表
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
        if (array_key_exists("MasterSpec",$param) and $param["MasterSpec"] !== null) {
            $this->MasterSpec = [];
            foreach ($param["MasterSpec"] as $key => $value){
                $obj = new ResourceSpec();
                $obj->deserialize($value);
                array_push($this->MasterSpec, $obj);
            }
        }

        if (array_key_exists("CoreSpec",$param) and $param["CoreSpec"] !== null) {
            $this->CoreSpec = [];
            foreach ($param["CoreSpec"] as $key => $value){
                $obj = new ResourceSpec();
                $obj->deserialize($value);
                array_push($this->CoreSpec, $obj);
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

        if (array_key_exists("CNSpec",$param) and $param["CNSpec"] !== null) {
            $this->CNSpec = [];
            foreach ($param["CNSpec"] as $key => $value){
                $obj = new ResourceSpec();
                $obj->deserialize($value);
                array_push($this->CNSpec, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
