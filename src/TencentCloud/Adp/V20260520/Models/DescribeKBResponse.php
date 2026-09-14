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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeKB返回参数结构体
 *
 * @method array getAppIdList() 获取<p>关联的应用 ID 列表</p>
 * @method void setAppIdList(array $AppIdList) 设置<p>关联的应用 ID 列表</p>
 * @method KBCapacity getCapacityInfo() 获取<p>容量信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCapacityInfo(KBCapacity $CapacityInfo) 设置<p>容量信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ESConfig getEsConfig() 获取<p>ES 配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEsConfig(ESConfig $EsConfig) 设置<p>ES 配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method KBModelConfig getModelConfig() 获取<p>模型配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelConfig(KBModelConfig $ModelConfig) 设置<p>模型配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method Operator getOwner() 获取<p>所有者信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwner(Operator $Owner) 设置<p>所有者信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method KBSummary getSummary() 获取<p>知识库摘要信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSummary(KBSummary $Summary) 设置<p>知识库摘要信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeKBResponse extends AbstractModel
{
    /**
     * @var array <p>关联的应用 ID 列表</p>
     */
    public $AppIdList;

    /**
     * @var KBCapacity <p>容量信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CapacityInfo;

    /**
     * @var ESConfig <p>ES 配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EsConfig;

    /**
     * @var KBModelConfig <p>模型配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelConfig;

    /**
     * @var Operator <p>所有者信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Owner;

    /**
     * @var KBSummary <p>知识库摘要信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Summary;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $AppIdList <p>关联的应用 ID 列表</p>
     * @param KBCapacity $CapacityInfo <p>容量信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ESConfig $EsConfig <p>ES 配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param KBModelConfig $ModelConfig <p>模型配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param Operator $Owner <p>所有者信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param KBSummary $Summary <p>知识库摘要信息</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("AppIdList",$param) and $param["AppIdList"] !== null) {
            $this->AppIdList = $param["AppIdList"];
        }

        if (array_key_exists("CapacityInfo",$param) and $param["CapacityInfo"] !== null) {
            $this->CapacityInfo = new KBCapacity();
            $this->CapacityInfo->deserialize($param["CapacityInfo"]);
        }

        if (array_key_exists("EsConfig",$param) and $param["EsConfig"] !== null) {
            $this->EsConfig = new ESConfig();
            $this->EsConfig->deserialize($param["EsConfig"]);
        }

        if (array_key_exists("ModelConfig",$param) and $param["ModelConfig"] !== null) {
            $this->ModelConfig = new KBModelConfig();
            $this->ModelConfig->deserialize($param["ModelConfig"]);
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = new Operator();
            $this->Owner->deserialize($param["Owner"]);
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = new KBSummary();
            $this->Summary->deserialize($param["Summary"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
